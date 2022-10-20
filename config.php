<?php

$server = 'localhost';
$username = 'root';
$password = "";
$db_name = "db_cozy";

$db = new mysqli($server, $username, $password, $db_name);

if(!$db){
    die("GAGAL TERHUBUNG");
}