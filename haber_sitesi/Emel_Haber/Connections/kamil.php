<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_kamil = "localhost";
$database_kamil = "haber";
$username_kamil = "root";
$password_kamil = "12345678";
$kamil = mysql_pconnect($hostname_kamil, $username_kamil, $password_kamil) or trigger_error(mysql_error(),E_USER_ERROR); 
?>