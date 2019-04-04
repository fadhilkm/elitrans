<!DOCTYPE html>
<html>
<head>
  <title>Login e-Litrans</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ecf0f1">
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
  <form action="cek_login.php" method="post">
  <div class="container">
  
  <center><img src="logo.png" height="200" width="200" style="margin-bottom: 20px;margin-top: 50px"></center>
  
  <form method="post" class="example">
  	<div class="form-group">
    <input type="text" name="username" class="form-control" id="usr" placeholder="Username" required="required">
	</div>

	<div class="form-group">
    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password" required="required">
  	</div>

  	<div class="text-center" style="padding : 10px;">
    <input type="submit" value="LOGIN" name="submit" class="btn btn-primary text-center" ></div>

  </form>


  
 
 
</body>
</html>