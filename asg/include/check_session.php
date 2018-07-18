<?php
if(!isset($_SESSION['userId'])) //agr id ni aari   //isset checks either value has came 
{
	header('location:../login.php');//fr se log.php/login page pe jao//header takes us direct to the file
}
if(!isset($_SESSION['userEmail']))//
{
	header('location:../login.php');
}
?>