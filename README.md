# 🐳 Simple Login Page LEMP Docker stack 🛠️

This repository holds a tiny `docker-compose` setup to initiate a `LEMP (Linux, Nginx, Mysql, PHP)` stack.

## 📋 Details

The stack incorporates the following versions:

* PHP
* Nginx
* MariaDB

## ⚙️ Configuration

Nginx configuration resides in `config/nginx/`.

## 🚀 Usage

To employ this stack, simply follow these steps:

##### Clone this repository.

Clone it via: `git clone https://github.com/IamCarron/LEMP-Docker.git`.

##### Start the server.

Initiate the server by executing the following command within the cloned directory: `docker-compose up`.

## 🛠️ Entering the containers

You can access a container using:

`docker exec -ti {CONTAINER_NAME} /bin/bash`

## 🌐 Listing the networks
You can list all the IPs usign:
`docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)`
