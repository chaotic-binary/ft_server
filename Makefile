NAME = ft_server
VERSION = test
PORT1 = 80
PORT2 = 443

build:
	docker build . -t $(NAME)

#daemon mode
run:
	docker run -d --rm -p $(PORT1):80 -p $(PORT2):443 --name $(NAME) $(NAME)

#interactive mode
#add bash at the end to make it work like exec
runit:
	docker run -it --rm -p $(PORT1):80 -p $(PORT2):443 --name $(NAME) $(NAME)

exec:
	docker exec -it $(NAME) bash

stop:
	docker stop $(NAME)

remove:
	docker rm $(NAME)

rmi:
	docker rmi $(NAME)
	docker system prune

.PHONY: build run exec stop remove runit rmi