NAME = Inception
SRCS = srcs/docker-compose.yml

$(NAME): all

all: up

subject:
	docker stop $$(docker ps -qa) || true;
	docker rm $$(docker ps -qa) || true;
	docker rmi -f $$(docker images -qa) || true;
	docker volume rm $$(docker volume ls -q) || true;
	docker network rm $$(docker network ls -q) 2>/dev/null || true


up:
	./updates_images.sh
	docker-compose -f $(SRCS) up --build -d

down:
	docker-compose -f $(SRCS) down

clean: down
	docker system prune -af

fclean: clean
	docker volume rm -f $(docker volume ls -q) || true
	rm -rf /home/ljahn/data/db_volume/*;
	rm -rf /home/ljahn/data/wp_volume/*;

.PHONY: all down clean fclean subject