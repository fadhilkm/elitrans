<!DOCTYPE html>
<html>
<head>
	<title>Editing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ecf0f1">
<?php

	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		

	<center><h1>Editing</h1></center><br>
 

	    <form method="post" action="update.php">

	 <div class="container">
	<div class="form-group">
    <label for="text">Literary Text</label>
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
	<input type="text" name="idiom" value="<?php echo $d['idiom']; ?>" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Teks Sastra</label>
    <input type="text" name="terjemahan" value="<?php echo $d['terjemahan']; ?>" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Sample</label>
    <input type="text" name="sample" value="<?php echo $d['sample']; ?>" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Contoh Kalimat</label>
    <input type="text" name="contohkalimat" value="<?php echo $d['contohkalimat']; ?>" class="form-control">
   
    </div>

    <div class="form-group">
    <label for="text">Status</label><br>
     <input type="radio" name="status" value="UNVERIFIED" checked> UNVERIFIED<br>
     <input type="radio" name="status" value="VERIFIED"> VERIFIED<br>
   
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
	</form>
</div>


		
		<?php 
	}
	?>