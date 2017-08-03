<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
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

    <form  action="process.php" method="post" class="form-signin">

      <p>Please login using your Email Account to access shared files:</p>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus
             value="<?php echo  htmlspecialchars($_GET["log"]); ?>">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      <p class="text-center">&nbsp;</p>
      <p class="text-center"><a href="#">Create new accout</a></p>

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
