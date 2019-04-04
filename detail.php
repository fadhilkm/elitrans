<!DOCTYPE html>
<html>
<head>
	<title>Halaman Detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ecf0f1;">
<?php

	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

<div class="modal fade" id="ingin" tabindex="-1" role="dialog" aria-labelledby="credit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-center" id="credit" >Ikut Berkontribusi</h1>
        </div>
      <div class="modal-body">
     <center>
<p>Sudah memiliki akun?</p>     
<a class="btn btn-info" href="login.php">LOGIN</a><br><br><br>

<p>Belum memiliki akun</p>
<a class="btn btn-info" href="register.php">REGISTER</a></center></br>
      </div>
     
    </div>
  </div>
</div>



	<center><h1>Halaman Detail</h1></center><br>



<div class="container">

  <table class="table table-hover table-bordered ">
    <tr>
      
        <th style="background-color: white">Literary Text</th>
      
    </tr>
    <tr style="vertical-align: middle;">
      <td style="vertical-align: middle;">
        <p style="margin-left: 10px"><?php echo $d['idiom']; ?></p>
      </td>
    </tr>
    <tr>
      
        <th style="background-color: white">Teks Sastra</th>
      
    </tr>
    <tr style="vertical-align: middle;">
      <td style="vertical-align: middle;">
        <p style="margin-left: 10px"><?php echo $d['terjemahan']; ?></p>
      </td>
    </tr>
    <tr >
      
        <th style="background-color: white">Sample</th>
      
    </tr>
    <tr style="vertical-align: middle;">
      <td style="vertical-align: middle;">
        <p style="margin-left: 10px"><?php echo $d['sample']; ?></p>
      </td>
    </tr>
    <tr>
      <th style="background-color: white">Contoh Kalimat</th>
      
    </tr>
    <tr style="vertical-align: middle;">
      <td style="vertical-align: middle;">
        <p style="margin-left: 10px"><?php echo $d['contohkalimat']; ?></p>
      </td>
    </tr>

  </table>


    <div class="form-group">
    <label for="text">Status</label><br>

    <?php 
if ($d['status']=="VERIFIED") {

    $warnaa = "btn btn-info btn-xs";}
     else {
     $warnaa = "btn btn-warning btn-xs";
    }
?>


    <a class="<?php echo $warnaa ?>" role="button"><?php echo $d['status']; ?></a><br><br>

    <div class="text left form-group">
    <input class="btn btn-info" type="reset" value="Kembali" onclick=self.history.back()>
    
    <a data-toggle="modal" data-target="#ingin" class="btn btn-success" >Ikut Berkontribusi?</a> 
   
    </div>
    


</div>	
</div>
</div>



		
		<?php 
	}
	?>