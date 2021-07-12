#!/bin/sh

docker run --rm --workdir /var/www -u 1000 \
        -v $(pwd):/var/www \
        php:8.0.8-alpine \
        php $@