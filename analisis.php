<?php 
include('header.php');
?>
  <div class="d-flex wrapper" id="wrapper">
    <!-- Sidebar -->
    <?php 
    if($_SESSION['role']=="Kepala Sekolah")
    {
      include('menukepsek.php');
    } else {
      include('menuhubin.php');
    }
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="h2 m-0">Analisa Pangsa Pasar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Analisis</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <?php 
include('footer.php');
?>
  