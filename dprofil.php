<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_profile WHERE id_number = '$id'";

if($connection->query($query)) {
    header("location: profil.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>