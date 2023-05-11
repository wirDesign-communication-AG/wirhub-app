# What is it

Conventinally wirhub had to be installed manually using a lengthy instruction.

Docker is used here to install wirhub mostly automated.

## Docker image

A docker image contains the finished files as one file.

The docker-compose.yml, docker-compose-local.yml, Dockerfile and the "dockerfiles" folder contain instructions and files which are used to create a Docker "image".

## Docker container

In this repo we can use "docker compose up" to start an image which will then result in a running docker container.

A docker container can run servers and other programs neetly encapsulated from the os. As example, we can start an apache server in an container using port 80 but then expose it externally using the port 800.

The external Apache server can use a VirtualHost config to redirect from example wirhubdocker.brandsites.de to port 800.

## Docker volumes

Usually "docker compose up" creates everything from scratch and mysql data would be lost.
Docker volumes are used to keep the mysql server data (or any other data) which are located inside a container folder.
Volumes can be configured in the in the docker-compse.yml

- A volume will only get deleted if it is done so manually.
- The volume name depends on the folder in which docker compose up was used.
  The volumes can be renamed easily and are located in "/var/lib/docker/volumes/"

## Pushing an Image to a Server

Docker images can get pushed to a server. In this case it is "hub.docker.com".
This can be done manually but also automatically.
For this project it will happen automatically when new code was pushed to the repository using gihhub Actions.

This action is located here: https://github.com/wirDesign-communication-AG/wirhub-app/actions - Docker Image CI

## Pulling an Image form the Server using "docker compose up"

After an image has been pushed to the server, one can pull it and run it as a container.
This project needs an apache2 server and a mysql server.
Instead of pulling and running images manually, the docker-compose.yml can be used.
The docker-compose.yml contains the correct config to start the servers.

1. install "docker compose" on the server
2. copy the "docker-compose.yml" to the server
3. copy the ".env.local" to the server
4. adjust the ".env.local"
5. create a "dockerfiles" folder and
6. copy the "dockerfiles/init.sql" into the folder
7. > docker compose --env-file .env.local up -d

The server should now be running on port specified in the .env.local

A quick test, which will download the index.html:

> curl -I 0.0.0.0:800

A virtual host file is needed to expose it to the internet.

# Indepths: Server Preparations and more

## Install docker

### Install Docker Compose:

- check the linux disctribution name:
  > uname -r

Follow the instructions depending on your system:
https://docs.docker.com/engine/install/#server

Example Debian:
https://docs.docker.com/desktop/install/debian/

Example Ubuntu
https://docs.docker.com/engine/install/ubuntu/

- test with "> docker"

### Apache

- install Apache
  apt install apache2

#### activate the plugins

- a2enmod proxy_http
- a2enmod rewrite

### Certbot

- apt install snapd
- install certbot

#### certify:

- add the DNS entry (e.g. Schlundtech)
- in "/etc/apache2/sites-available/" add a conf. E.g: 803-civey-demo.conf and set the correct port etc.
- enable and certify via:
  > certbot

## Start Docker Container

copy the "docker-compose.yml" to the server

> docker compose --env-file .env.local up -d

> docker compose --env-file .env.local up -d --build # as deamon

# Start/compose locally:

> docker compose --env-file .env.local -f docker-compose.yml -f docker-compose-local.yml up -d --build

## Update/pull on the server

prune might be helpful for storage problems

## login to our github ghcr.io
### generate a new key here:
https://github.com/settings/tokens

### login using your key:
export CR_PAT=<your-key>
echo $CR_PAT | docker login ghcr.io -u USERNAME --password-stdin

# delete all images, even those which are running


> docker system prune -a -f

# Careful! delete all volumes -> mysql database!

> \# docker volume prune -f

# get the newest image + start it in the background (as deamon)

> docker compose --env-file .env.local up -d

"compose up" will automatically pull the new image as per yml, and restart the server
persistens should work because of the worhub volume

> docker compose --env-file .env.local up -d
> docker compose --env-file .env.local up -d --build

# wirHub-docker

## Pushing the Image manually:

Not needed because there is a github Action which does it automatically

1.  Login to GitHub to get packages:

    > export CR_PAT=YOUR_PERSONAL_GITHUB_TOKEN

    > echo $CR_PAT | docker login ghcr.io -u USERNAME --password-stdin

2.  > docker build . -t ghcr.io/wirdesign-communication-ag/wirhub:docker

3.  > docker push ghcr.io/wirdesign-communication-ag/wirhub:docker