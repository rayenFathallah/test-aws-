<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $name = $_POST['name'];
    $Number = $_POST['Number'];
    $Gender = $_POST['Gender'];
    $Major = $_POST['Major'];
    $Education = $_POST['Education'];
    $GPA = $_POST['GPA'];

    // query
    $sql = "INSERT INTO users(name, Number, Gender, Major, Education, GPA)
    VALUES('$name', '$Number', '$Gender', '$Major', '$Education', '$GPA')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Acess denied...");
