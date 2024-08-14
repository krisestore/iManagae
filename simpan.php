<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_number    = $_POST['id_number'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_profile (id_number, nama_lengkap, alamat) VALUES ('$id_number', '$nama_lengkap', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: profil.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>