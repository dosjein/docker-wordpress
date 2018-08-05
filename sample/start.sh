#!/bin/bash
#Can add forlder if using full wordpress enviroment

count="$( find /var/www -mindepth 1 -maxdepth 1 | wc -l )"
if [ $count -eq 0 ] ; then
	git clone https://github.com/WordPress/WordPress.git .
fi