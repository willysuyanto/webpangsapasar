<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Sistem Analisis Pangsa Pasar | Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
</head>
<body class="index-page">
<nav class="navbar navbar-expand-lg navbar-dark bg-default">
    <div class="container-fluid">
        <a class="navbar navbar-brand" href="dashboard.php">SISTEM ANALISIS PANGSA PASAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
        <div class="navbar-collapse-header">
            <div class="row">
            <div class="col-6 collapse-brand">
                <a href="./index.html">
                    <h1 class="h6">SISTEM ANALISIS PANGSA PASAR</h1> 
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                </button>
            </div>
            </div>
        </div>
        <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">Sekolah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">Analisis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">Laporan</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link">Hai, <?php echo $_SESSION['nama']; ?></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon dropdown-toggle" href="javascript:;" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="nav-link-inner--text d-lg-none">Settings</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                <a class="dropdown-item" href="javascript:;">Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Log Out</a>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </nav>
  <footer class="footer has-cards">
    <div class="container-fluid">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank">Sistem Analisis Pangsa pasar</a>.
          </div>
        </div>
      </div>
  </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>