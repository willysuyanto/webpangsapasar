<?php 
    session_start();

    include ("koneksi.php");
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 'username'='$username' AND 'password'='$password'; ";

        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);
         if ($count>=1){
                $_SESSION['idlogin']=$username;
                echo "<script>alert('berhasil login')</script>";
                header('location: datasiswa.php');
        }else {
            echo "<script>alert('login gagal')</script>";
            header('location: index.php');
        }
    
    }
?>