<?php 

require_once "config.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$conn){
    die("database connection faile". mysqli_connect_error());

}