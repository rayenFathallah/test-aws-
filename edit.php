<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $Number = $_POST['edit_Number'];
    $Gender = $_POST['edit_Gender'];
    $Major = $_POST['edit_Major'];
    $Education = $_POST['edit_Education'];
    $GPA = $_POST['edit_GPA'];


    // query
    $sql = "UPDATE users SET name='$name', Number='$Number', Gender='$Gender', Major='$Major', Education='$Education', GPA='$GPA' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
