<?php 
include('header.php');
$db = new database();
$data_siswa = $db->tampil_data_user();
?>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="./datapengguna.php" class="list-group-item list-group-item-action bg-secondary">Data Pengguna</a>
        <a href="#" class="list-group-item list-group-item-action bg-secondary">Lihat Sebagai</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="h2 m-0">Data Pengguna</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Data Pengguna</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="container-fluid">
      <div class="container my-2">
      <a href="datapenggunaadd.php" class="btn btn-primary mb-4">Tambah Pengguna</a>
    <table class="table table-sm table-hover display" id="table_id">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">E-mail</th>
        <th scope="col">Username</th>
        <th scope="col">Role</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['role']; ?></td>
				<td>
          <a href="#" class="btn btn-primary btn-sm">Edit</a>
          <a href="#" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
    </tbody>
  </table>
  </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <?php 
include('footer.php');
?>
  