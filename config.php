<?php
$server = "hoteldb.c9cdrqgzzngt.us-east-1.rds.amazonaws.com";
$user = "admin";
$password = "Rayene123123123";
$nama_database = "ingbdd";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
