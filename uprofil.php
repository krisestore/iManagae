<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_number     = $_POST['id_number'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_profile SET nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_number = '$id_number'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: profil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>