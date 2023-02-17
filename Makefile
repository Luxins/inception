NAME = inception
SRC =	srcs/docker-compose.yml

$(NAME): all

all: clean up

up:
	mkdir -p /home/ljahn/data/wordpress_volume
	mkdir -p /home/ljahn/data/db_volume
	docker-compose -f $(SRC) up -d --build

down:
	docker-compose -f $(SRC) down

clean: down
	docker system prune -af

fclean: clean
	docker volume rm -f db_volume
	docker volume rm -f wordpress_volume
	sudo rm -rf /home/ljahn/data/wordpress_volume
	sudo rm -rf /home/ljahn/data/db_volume

re: clean up

.PHONY: all up down clean  fclean re