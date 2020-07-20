<?php 
include('header.php');
$db = new database();
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $no_telp = $_POST['no_telp'];
    if($db->tambah_data_smp($nama,$email,$lokasi,$no_telp))
    {
      header('location:datasmp.php');
    } else {
      echo "Error: " . "<br>" . mysqli_error($database->koneksi);
    }
}
?>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
   <?php 
    include('menuhubin.php');
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <div class="container">
    <h4 class="mt-5">Tambah Data SMP</h4>
    <hr/>
    <form method="POST" action="">

    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama Sekolah</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="nama" placeholder="Nama Sekolah" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
      </div>
    </div>
 
    <div class="form-group row">
      <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Sekolah" required>
      </div>
    </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </div>
  </div>
</form>
  </div>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <?php 
include('footer.php');
?>
  