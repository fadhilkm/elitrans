<!DOCTYPE html>
<html>
<head>
	<title>Content Admin / Admin Konten</title>
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
		header("location:login.php?pesan=gagal");
	}

	?>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://transtool.unnes.site"><b>e-Littrans</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

	<center><h1>Content Admin / Admin Konten</h1></center><br>

<div class="container">
<form method="post" action="tambah_aksi.php">

	<div class="container">
	<div class="form-group">
    <label for="text">Literary Text</label>
    <input type="text" name="idiom" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Teks Sastra</label>
    <input type="text" name="terjemahan" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Sample</label>
    <input type="text" name="sample" class="form-control">
    </div>

    	<div class="form-group">
    <label for="text">Contoh Kalimat</label>
    <input type="text" name="contohkalimat" class="form-control">
    </div>

    <div class="form-group">
    <input type="hidden" name="status" class="form-control" readonly="" value="UNVERIFIED">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
	


	</form><br><br>


<div class="table-responsive">
	<table class="table">

		<tr>
			<th>No</th>
			<th>Literary Text</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td style="vertical-align: middle;"><?php echo $no++; ?></td>
<?php
if ($d['status']=="VERIFIED") {

    $warnaa = "btn btn-info btn-xs";}
     else {
     $warnaa = "btn btn-warning btn-xs";
    }
    ?>

		<td><?php echo $d['idiom']; ?> <a class="<?php echo $warnaa ?>" role="button"><?php echo $d['status']; ?>
				<a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $d['id']; ?>" role="button" style="margin-left: 10px"> EDIT</a>
					<a class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $d['id']; ?>" role="button" style="margin-left: 10px"> HAPUS</a>


				</td>
				
				<td>
					
					
					
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>
<a class="btn btn-info btn-sm" href="logout.php" role="button" style="margin-bottom: 20px">LOGOUT</a>
</div>	
</body>
</html>