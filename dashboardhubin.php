<?php 
include('header.php');
$db = new database();
$data_smp = $db->tampil_data_smp();
?>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php 
    include('menuhubin.php');
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="h2 m-0">Data Sekolah Menengah Pertama</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Data SMP</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="container-fluid">
      <div class="container my-2">
      <a href="#" class="btn btn-primary mb-4">Tambah Data SMP</a>
    <table class="table table-sm table-hover display" id="table_id">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama SMP</th>
        <th scope="col">E-mail</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_smp as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_smp']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['lokasi']; ?></td>
				<td><?php echo $row['no_tlp']; ?></td>
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
  