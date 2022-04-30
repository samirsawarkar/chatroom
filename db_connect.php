<?php
$serername = "localhost";
$username ="root";
$password = "";
$database = "chatroom";

$conn = mysqli_connect($serername,$username,$password,$database);


if(!$conn)
{
    die("fialed to connect ");
}


?>