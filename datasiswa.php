<?php 
include('header.php');
$db = new database();
$data_siswa = $db->tampil_data();
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
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="h2 m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="container-fluid">
      <div class="container my-2">
      <a href="#" class="btn btn-primary mb-4">Tambah Data Siswa</a>
    <table class="table table-sm table-hover display" id="table_id">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Lokasi Tinggal</th>
        <th scope="col">Sekolah Asal</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Angkatan</th>
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
        <td><?php echo $row['nama_lengkap']; ?></td>
				<td><?php echo $row['lokasi']; ?></td>
				<td><?php echo $row['sekolah_asal']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td><?php echo $row['angkatan']; ?></td>
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