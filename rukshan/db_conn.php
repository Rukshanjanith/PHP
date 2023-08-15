<?php
$sname="localhost";
$uname="root";
$password="";
$db_name="hospital_m_s";
$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
	echo"connection failed";
}