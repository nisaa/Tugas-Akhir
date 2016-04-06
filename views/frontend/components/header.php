<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>e-kosan.com | Informasi Kosan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/font-awesome.min.css"; ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $siteUrl .  "resources/css/AdminLTE.min.css";?>">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">

    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/style.css"; ?>">

    <?php include "views/frontend/login.php" ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">
        <img src="<?php echo $siteUrl . "resources/images/logo.png"; ?>" alt="Logo E-kosan" width="60" height="55">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav">
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" href="#modalLogin">Masuk</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pemilik Kos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Pencari Kos</a></li>
          </ul>
        </li>
        <li><a data-scroll href="#beginning" rel="beginning" data-placement="bottom" title="Kembali Ke Atas"><i class="fa fa-angle-double-up"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

  <!-- Modal Masuk>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Masuk</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn bg-maroon btn-flat">Masuk</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#">Lupa Password</a>
        </div>
      </div>
    </div>
  </div-->

