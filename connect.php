<?php
$hostname="localhost/phpmyadmin/#PMAURL-1:db_structure.php?db=login++page&table=1&target=&server=1&target=&token=fc48502315109f43fb9eaf85360ca00c4";
$username="root";
$password="ishita123";
$database="login page";
$con=mysql_connect($hostname,$username,$password);
if(!$con)
{
	die('Connection Failed'.mysql_error());

}
mysql_select_db($database,$con);
?>