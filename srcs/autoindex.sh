#!/bin/bash
if [[ "$1" == "on" || "$1" == "off" ]]; then
sed -i -e "s/autoindex [a-z]*/autoindex $1/" /etc/nginx/sites-available/localhost
echo "autoindex $1"
service nginx restart
else
echo "please type on | off"
fi