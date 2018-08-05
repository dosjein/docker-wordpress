#!/bin/bash

#https://www.youtube.com/watch?v=is81QQEjugs

echo 'Welcome to Install script. Feel your self like home'

if [ ! -d ./Wordpress ]; then
	echo 'Kind sir , your Wordpress is missing'
    git clone git@github.com:WordPress/WordPress.git Wordpress
else
	echo 'You Might have old Wordpress'
	cd Wordpress
	git pull
fi

echo 'Start Building...'

cd ../
./tagbuild.sh