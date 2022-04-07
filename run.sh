#!/usr/bin/bash
sudo chown -R olof:olof ./mysql;
docker-compose up -d --build;
