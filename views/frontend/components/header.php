<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>e-kosan.com | Informasi Kosan</title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/bootstrap.min.css"; ?>">

    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/font-awesome.min.css"; ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $siteUrl .  "resources/css/AdminLTE.min.css";?>">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">

    <link rel="stylesheet" href="<?php echo $siteUrl .  "resources/css/style.css"; ?>">

    <!--[if lt IE 9]>
      <script src="//www.oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//www.oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    <script src="<?php echo $siteUrl . "resources/js/jquery-1.11.3.js"; ?>"></script>
    <script src="<?php echo $siteUrl . "resources/js/bootstrap.min.js"; ?>"></script>
    <script src="<?php echo $siteUrl . "resources/js/smooth-scroll.min.js"; ?>"></script>
    <script src="<?php echo $siteUrl . "resources/js/script.js"; ?>"></script>
  </head>
  <body>

    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $siteUrl ?>">
          <img src="<?php echo $siteUrl . "resources/images/logo.png";?>" alt="Logo E-kosan">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <form action="index.php?action=search" method="post">
          <div class="form-inline">
              <div class="form-group input-group pull-right">
                  <input type="text" class="form-control" name="query" placeholder="Cari alamat kosan">
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search fa-fw"></i></button>
                  </span>
              </div>
          </div>
        </form>

        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo $siteUrl ?>">Beranda</a></li>
            <?php if (isset($_SESSION['logged_in_user'])) { ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Hai, <?= $_SESSION['logged_in_user']['full_name'] ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="profil.php">Profil</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a data-toggle="modal" href="<?= $siteUrl ?>logout.php">Keluar</a></li>
                </ul>
              </li>

            <?php } else { ?>
              <li><a data-toggle="modal" href="#modalMasuk">Masuk</a></li>
              <li><a data-toggle="modal" href="#modalDaftar">Daftar</a></li>
            <?php } ?>
            <li><a data-scroll href="#beginning" rel="beginning" data-placement="bottom" title="Kembali Ke Atas"><i class="fa fa-angle-double-up"></i></a></li>
          </ul>
        </div><!-- /.collapse -->
      </div><!-- /.container -->
    </header>

    <!-- Modal Masuk -->
    <div class="modal fade" id="modalMasuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Masuk</h4>
          </div>
          <div class="modal-body">
            <form action="auth.php?action=login" method="post">
              <?php if (isset($_SESSION['error']['login'])) { ?>
                <div class="alert alert-danger">
                  <ul class="list-unstyled">
                    <?php
                    foreach ($_SESSION['error']['login'] as $value) {
                      echo "<li>" . $value . "</li>";
                    } ?>
                    <li></li>
                  </ul>
                </div>
              <?php } ?>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" required autofocus>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="radio-inline">
                        <input type="radio" name="status" id="pencari_kos" value="pencari_kos" checked required> Pencari Kos
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label class="radio-inline">
                        <input type="radio" name="status" id="pemilik_kos" value="pemilik_kos" required> Pemilik Kos
                      </label>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-4">
                  <button type="submit" class="btn bg-maroon btn-flat">Masuk</button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="lupa_password.php">Lupa Password</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Daftar -->
    <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Daftar</h4>
          </div>
          <div class="modal-body">
            <form action="auth.php?action=register" method="post">
              <?php if (isset($_SESSION['error']['register'])) {?>
                <div class="alert alert-danger">
                  <ul class="list-unstyled">
                    <?php
                    foreach ($_SESSION['error']['register'] as $value) {
                      echo "<li>" . $value . "</li>";
                    } ?>
                    <li></li>
                  </ul>
                </div>
              <?php } ?>
              <div class="form-group">
                <label for="fullname">Nama Lengkap</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
              </div>
              <div class="form-group">
                  <label for="e-mail">E-mail</label>
                  <input type="email" class="form-control" name="email" id="e-mail" required>
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" required>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="radio-inline">
                        <input type="radio" name="status" id="pencari_kos" value="pencari_kos" checked required> Pencari Kos
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label class="radio-inline">
                        <input type="radio" name="status" id="pemilik_kos" value="pemilik_kos" required> Pemilik Kos
                      </label>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-4">
                  <button type="submit" class="btn bg-maroon btn-flat">Daftar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>




