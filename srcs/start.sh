service nginx start
service php7.3-fpm start
service mysql start

#mysql
mysql -e "CREATE USER 'ttamesha'@'localhost' IDENTIFIED BY 'strongpassword';"
mysql -e "CREATE DATABASE ft_server_database;"
mysql -e "GRANT ALL ON *.* TO 'ttamesha'@'localhost' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"

#wordpress
wpurl="localhost"
wptitle="ft_server by ttamesha"
wpemail="ttamesha@student.21-school.ru"
wpuser="admin"
wppass="admin"
curl -d "weblog_title=$wptitle&user_name=$wpuser&admin_password=$wppass&admin_password2=$wppass&admin_email=$wpemail" -k https://$wpurl/wp-admin/install.php?step=2

#loop
while true;
	do sleep 10000;
done