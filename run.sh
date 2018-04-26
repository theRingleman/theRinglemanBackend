#!/bin/bash

docker network create home-net

docker rm -f ringlemanbackend

docker run --name="ringlemanbackend" \
    -p 3331:80 \
    -v /Users/theringleman/development/lumen/theRinglemanBackend:/var/www/html/ \
    -d ringlemanbackend
