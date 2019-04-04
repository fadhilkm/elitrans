<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ecf0f1;">

<div class="container"> 
<div class="form">
<center><h1><b>Registration</b></h1></center><br>

<form name="registration" action="register_aksi.php" method="post">

  <div class="form-group">
    <label for="text">Username</label>
    <input type="text" name="username" class="form-control" required placeholder="Username">
    </div>

    <div class="form-group">
    <label for="text">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
    <label for="text">Email</label>
    <input type="email" name="email" class="form-control" required placeholder="Email">
    </div>

    <input type="hidden" name="level" class="form-control" required value="user">

    <div class="form-group">
    <input type="submit" value="Register" class="btn btn-primary">
    </div>

     <input class="btn btn-info" type="reset" value="Kembali" onclick=self.history.back()>

</form>
</div>
</div>


</body>
</html>