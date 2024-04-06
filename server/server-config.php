<?php 
session_start();

$config = parse_ini_file(__DIR__. "/config.ini");

$connection = new mysqli(
    $config["server"],
    $config["user"],
    $config["password"],
    $config["name"]
);

if(!$connection) {
    die("Database server error".mysqli_connect_error());
};

?>