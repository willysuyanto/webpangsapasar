<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_pangsapasar";
	var $koneksi;
 
	function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
        if (!$this->koneksi) {
            die("Connection failed: " . mysqli_connect_error($this->koneksi));
        }
    }
    
    function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }
    
    function tambah_data_siswa($nama,$sekolah_asal,$lokasi,$id_sekolah,$jurusan,$angkatan)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_siswa (`id_siswa`, `nama_lengkap`, `sekolah_asal`, `lokasi`, `id_sekolah`, `jurusan`, `angkatan`) values ('','$nama','$sekolah_asal','$lokasi',1,'$jurusan','$angkatan')");
		return $insert;
	}
 
 
	function register($username,$email,$password,$nama)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user (`id`, `username`, `email`, `password`, `nama`, `role`) values ('','$username','$email','$password','$nama','Admin')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>