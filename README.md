# 🐳 Simple Login Page LEMP Docker stack 🛠️

This repository hosts a lightweight `docker-compose` configuration to launch a `LEMP (Linux, Nginx, MySQL, PHP)` stack.

## 📋 Details

The stack comprises the following versions:

* PHP
* Nginx
* MySQL

## ⚙️ Configuration

Nginx configuration files can be found under `config/nginx/`.

## 🚀 Usage

To utilize this stack, follow these steps:

##### Clone this repository.

Clone it with: `git clone https://github.com/IamCarron/LEMP-Docker.git`.

##### Start the server.

Launch the server by executing the following command within the cloned directory: `docker-compose up`.

## 🛠️ Entering the containers

You can access a container using:

`docker exec -ti {CONTAINER_NAME} /bin/bash`

## 🌐 Listing the networks

You can list all the IPs using:

`docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)`

Credits for the PHP login page go to the user [Sribuhost](https://github.com/Sribuhost) and their repository [login-form-php](https://github.com/Sribuhost/login-form-php). 🙌🎉

Credits for the LAMP configuration go to the user [ProWebEngineer](https://github.com/ProWebEngineer) and their repository [docker-lemp](https://github.com/ProWebEngineer/docker-lemp). 🙌🎉
