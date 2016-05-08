<?php 

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);


// $con = mysqli_connect("localhost","root","","social_network") or die("Connection was not established");
$con = mysqli_connect($server, $username, $password, $db) or die("Connection was not established");

?>