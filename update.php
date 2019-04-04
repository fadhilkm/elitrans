
<?php

// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$idiom = $_POST['idiom'];
$terjemahan = $_POST['terjemahan'];
$sample = $_POST['sample'];
$contohkalimat = $_POST['contohkalimat'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update data set idiom='$idiom', terjemahan='$terjemahan', sample='$sample', contohkalimat='$contohkalimat', status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>