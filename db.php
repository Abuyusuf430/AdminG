<?php

$servername="192.168.1.4:8003";
$dbname = "Cashapp";
$username = "root";
$password = "";

$link=mysqli_connect($servername,$username, $password,$dbname);

if(!$link)
{
    echo "error";
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
?>
