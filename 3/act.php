<?php
	error_reporting(0);
	$nama = $_POST['nama'];
	$pass_en = MD5($_POST['pass']);
	$pass = $_POST['pass'];
	$gen = $_POST['gen'];
	$ttl = $_POST['ttl'];
	$ahli = $_POST['ahli'];
	$des = $_POST['deskripsi'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A11.2014.08450</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">My Profile</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/foto.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="desc.html">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="krs.html">KRS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="form.html">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Muhamad
            <span class="text-primary">Aziz S</span>
          </h1>
          <div class="subheading mb-5">Pemrograman Web · A11.2014.08450, UNIVERSITAS DIAN NUSWANTORO ·
            <a href="mailto:name@email.com">ust.crew404@gmail.com</a>
          </div>
          <?php
          		echo "<center><h3>BIODATA DIRI </h3><hr><table width='100%'></center>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>".$nama."</td>
					</tr><tr>
						<td>Password</td>
						<td>:</td>
						<td>".$pass_en." (".$pass.")</td>
					</tr><tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>".$gen."</td>
					</tr><tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>".$ttl."</td>
					</tr><tr>
						<td>Keahlian</td>
						<td>:</td>
						<td>".$ahli."</td>
					</tr><tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td>".$des."</td>
					</tr>
				<table><hr><a href='form.html'>Input data lagi?</a>";
          ?>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
