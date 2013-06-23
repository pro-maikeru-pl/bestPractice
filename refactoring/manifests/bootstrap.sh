#!/usr/bin/env bash

apt-get update
apt-get install puppet -y
rm -rf /var/www
ln -fs /vagrant /var/www
