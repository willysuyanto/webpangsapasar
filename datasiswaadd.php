<?php 
include('header.php');
$db = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $role = $_POST['role'];
    if($db->register($username,$email,$password,$nama,$role))
    {
      header('location:datapengguna.php');
    } else {
      echo "Error: " . "<br>" . mysqli_error($database->koneksi);
    }
}
?>
  <div class="d-flex" id="wrapper">
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

      <div class="container">
    <h4 class="mt-5">Tambah Data Pengguna</h4>
    <hr/>
    <form method="POST" action="">

    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Roles</label>
      <div class="col-sm-10">
        <select class="form-control" name="role" id="role" required>
          <option>Admin</option>
          <option>Kepala Sekolah</option>
          <option>Humas/Hubin</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
      </div>
    </div>
 
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
      </div>
    </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="register">Simpan</button>
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
  