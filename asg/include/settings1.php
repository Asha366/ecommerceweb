<?php 
$mysqli=new mysqli("localhost","root","","kart");//local host is web server and root(admin) is default user name of database and"" is password and usermaintenance is databse which we have created//"" password remain empty //new mysqli is command 
if(mysqli_connect_errno())
{
	echo"error in connection".mysqli_connect_errno();//2nd part tells us what error has came
	exit();
}
function baseurl()
{
	return "http://localhost:8080/kart/";//its a url
}
session_start();//duration of connection used to store user values temporary and it is created by server and 1440sec or 24 minutes limit by default
?>