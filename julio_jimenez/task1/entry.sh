#!/bin/sh

# creates mariadb configuration
supervisord -c /etc/supervisord.conf
cat <<EOF > /etc/my.cnf.d/mariadb-server.cnf
[server]
[mysqld]
[galera]
bind-address=127.0.0.1
[embedded]
[mariadb]
[mariadb-10.3]
EOF

# check if mariadb is up before attempting to create database and users
sleep 5
while !(mysqladmin ping)
do
   sleep 3
   echo "waiting for mysql..."
done
mysql -e "CREATE DATABASE $MAINDB;"
mysql -e "CREATE USER $DB_USER@localhost IDENTIFIED BY '$DB_PASS';" 
mysql -e "GRANT ALL PRIVILEGES ON $MAINDB.* TO $DB_USER@localhost;" 
mysql -e "FLUSH PRIVILEGES;"
echo "Done."
# keeps container running after users are created
tail -f /dev/null