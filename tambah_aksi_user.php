<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$idiom = $_POST['idiom'];
$terjemahan = $_POST['terjemahan'];
$sample = $_POST['sample'];
$contohkalimat = $_POST['contohkalimat'];
$status = $_POST['status'];
$penulis = $_POST['penulis'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into data values('$idiom','$terjemahan','$sample','$contohkalimat', '','$status','$penulis')");
 
// mengalihkan halaman kembali ke index.php

 header("location:halaman_user.php");
 
?>