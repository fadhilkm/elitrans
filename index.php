<!DOCTYPE html>
<html lang="en">
  <head>
    <title>e-Litrans
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
    <style>
      [data-href] {
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- NAVIGASI -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          <a class="navbar-brand" href="http://transtool.unnes.site">
            <b>e-Litrans
            </b>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="register.php">
                <span class="glyphicon glyphicon-user">
                </span> Sign Up / Daftar
              </a>
            </li>
            <li>
              <a href="login.php">
                <span class="glyphicon glyphicon-log-in">
                </span> Login / Masuk
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- KOTAK SEARCH -->  
    <div class="container">
      <h1 class="text-center">
        <b>Search / Cari
        </b>
      </h1>
      <form method="post" class="example">
        <input type="text" name="nt" class="form-control" placeholder="Type here / Tulis disini" required="required">
        <div class="text-center" style="padding : 10px">
          <input type="submit" value="SEARCH / CARI" name="submit" class="btn btn-primary text-center" >
        </div>
      </form>
      <!-- MODAL MANUAL PAGE -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="manualpage" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title text-center" id="manualpage" >Manual
              </h1>
            </div>
            <div class="modal-body">
              1. Search literary words you need.
              <br>
              <br>
              2. The application will suggest you any contents dealing with the word you type.
              <br>
              <br>
              3. If you click one of the suggested literary words, you will get fully construction with the translation beneath.
              <br>
              <br>
              4. If you have no username and password, click "Sign Up" and fulfil the form. Then, save it and you can log in by using the newest username and password to contribute a new idiom.
              <br>
              <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL CREDIT -->
      <div class="modal fade" id="credit" tabindex="-1" role="dialog" aria-labelledby="credit" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title text-center" id="credit" >Credits
              </h1>
            </div>
            <div class="modal-body">
              Dr. Rudi Hartono, S.S., M.Pd.
              <br>
              UNNES / Team Manager
              <br>
              <br>
              Manikowati, M.Pd.
              <br>
              BPMPK / Instructional Designer
              <br>
              <br>
              Nugroho Purwo U., A.Md.
              <br>
              BPMPK / App Developer
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- LINK MODAL -->
      <div class="text-center">
        <a data-toggle="modal" data-target="#exampleModal" >Manual Application
        </a> 
        <a data-toggle="modal" data-target="#credit" >| Credits
        </a>
      </div>
      <br>
      <br>
      <!-- TABEL OUTPUT -->
      <?php if (ISSET($_POST['submit']))
{ ?>
      <div class="table-responsive">
        <table class="table table-hover table-striped" >
          <tr>
            <td colspan="3" style="background-color: white">
              <h3 style="margin-top: 0;border-top: 1px;">
                <b>Result/s
                </b>
              </h3>
              <p style="margin-bottom: 0">Hasil Pencarian "
                <?php echo $_POST['nt'] ?>"
              </p>
            </td>
          </tr>    
          <?php
if ($r['status']=="VERIFIED") {
$warnaa = "btn btn-info btn-xs";}
else {
$warnaa = "btn btn-warning btn-xs";
}
$cari = $_POST['nt'];
$no = 1;
$query2 = "SELECT * FROM data WHERE CONCAT(idiom,terjemahan) LIKE '%$cari%' ORDER BY idiom ASC";
$koneksi = mysqli_connect("localhost","remmcpsqah","9XgZVAGsYf","remmcpsqah");
$sql = mysqli_query($koneksi, $query2);
while ($r = mysqli_fetch_array($sql))
{
?>
 
 <tr >
  <td style="vertical-align: middle;text-align: center;"><?php echo $no++; ?></td>

<?php
if ($r['status']=="VERIFIED") {

    $warnaa = "btn btn-info btn-xs";}
     else {
     $warnaa = "btn btn-warning btn-xs";
    }
?>

  <td>



<table>
  <tr >
   
    <?php 
    if(preg_match("/".preg_quote($cari)."/i", $r['idiom'])){
      $r['idiom'] = preg_replace_callback("/".preg_quote($cari)."/i", function($m){
          return "<b>".$m[0]."</b>";
      }, $r['idiom']);
      ?>
         <td data-href="detail.php?id=<?php echo $r['id']; ?>"><?php echo $r['idiom']; ?> </td>
    <td style="vertical-align: middle;padding-left: 10px" ><a class="<?php echo $warnaa ?>" role="button"><?php echo $r['status']; ?></a></td>
   
    <?php
    }else{
       $r['terjemahan'] = preg_replace_callback("/".preg_quote($cari)."/i", function($m){
          return "<b>".$m[0]."</b>";
      }, $r['terjemahan']);
        ?>
          
           <td data-href="detail2.php?id=<?php echo $r['id']; ?>"><?php echo $r['terjemahan']; ?> </td>
    <td style="vertical-align: middle;padding-left: 10px" ><a class="<?php echo $warnaa ?>" role="button"><?php echo $r['status']; ?></a></td>
        <?php
    }
    ?>
  </tr>
  
</table>


    
  </td>
 </tr>  

 <?php }} ?>

</table>
</div>
</div>

<!-- Script membuat row menjadi link -->

<script >
  jQuery(document).ready(function($) {
    $('*[data-href]').on('click', function() {
        window.location = $(this).data("href");
    });
});


</script>


</body>
</html>
