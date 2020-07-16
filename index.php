<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:dashboard.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:dashboard.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:dashboard.php');
    }
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
    Sistem Analisis Pangsa Pasar | Login
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
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-2">
              <div class="btn-wrapper text-center">
                <h1 class="h5">SISTEM ANALISIS PANGSA PASAR</h1>
              </div>
            </div>
            <div class="card-body px-lg-4 py-lg-4">
              <div class="text-center text-muted mb-2">
                <h1 class="h4">LOGIN</h1>
              </div>
                <form class="form-signin" method="post" action="">
                  <img class="mb-4" src="assets/assets/css/bootstrap-solid.svg" alt="" width="72" height="72">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
                  <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
                </form>
              <div class="text-center">
              <a href="#" class="text-primary"><small>Lupa Password?</small></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer has-cards">
    <div class="container">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">SISTEM ANALISIS PANGSA PASAR</a>
            </li>
          </ul>
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