#!/bin/bash

docker-compose down --remove-orphans

docker rmi -f $@

docker-compose up --build -d
