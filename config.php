<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'zurudb';

$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    die ("Connection to the db not successful". mysqli_connect_error());
}