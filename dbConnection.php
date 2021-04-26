<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'school-journal';

//Connection create
$connection = mysqli_connect($servername, $username, $password, $dbname);

//Connection check
if (!$connection) {
    die ('Connection to DB "' . $dbname . '" failed! Error: ' . mysqli_connect_error());
}