<?php
$server = "hoteldb.c9cdrqgzzngt.us-east-1.rds.amazonaws.com";
$user = "admin";
$password = "Rayene123123123";
$nama_database = "ingbdd";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Problem while connecting to the database: " . mysqli_connect_error());
