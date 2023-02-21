#!/bin/bash


docker build . -t nginx:latest
docker run -it nginx bash
