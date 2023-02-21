#!/bin/bash

services=(mariadb nginx wordpress)
directories=(/home/inception/srcs/services/mariadb /home/inception/srcs/services/nginx /home/inception/srcs/services/wordpress)
images=(mariadb nginx wordpress)

for i in "${!services[@]}"; do
  service=${services[$i]}
  directory=${directories[$i]}
  image=${images[$i]}

  # Get the hash of the current state of the directory
  current_hash=$(find $directory -type f -exec md5sum {} + | awk '{print $1}' | sort | md5sum | awk '{print $1}')

  # Get the hash of the previous state of the directory (if it exists)
  previous_hash=$(cat /tmp/${service}_hash 2> /dev/null)

  # Compare the current and previous hashes
  if [ "$current_hash" != "$previous_hash" ]; then
    # If the hashes are different, update the hash file and rebuild the Docker image
    echo $current_hash > /tmp/${service}_hash
    docker-compose -f srcs/docker-compose.yml stop $image
    docker container rm -f $image
    docker rmi -f $image
    docker-compose -f srcs/docker-compose.yml build $image
  else
    # If the hashes are the same, do nothing
    echo "No changes detected in ${service}, nothing to do."
  fi
done
