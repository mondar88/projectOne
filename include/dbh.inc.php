<?php
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="projectone";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if(!$conn){
	die("failed to connect to server! error". mysqli_connect_error());
}