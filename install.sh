#!/bin/bash

# build docker containers
docker-compose up --force-recreate --build -d

# build symfony app
docker-compose run apache ./install.sh
