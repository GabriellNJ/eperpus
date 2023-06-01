<?php 
 session_start();
include 'config/koneksi.php';

 

 
if (isset($_SESSION['regis'])) {
    header("Location: index.php");
}
 
if (isset($_POST['regis'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    // $cpassword = md5($_POST['cpassword']);
 
    if ($username == $username) {
        $sql = "SELECT * FROM tb_user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tb_user (username, password , nama)
                    VALUES ('$username', '$password', '$nama')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $nama = "";
                // $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
         
    } 

}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-PERPUS</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="img/png" sizes="16x16" href="img/eperpus.png">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrapper vh-100">
        <div class="header-wrapper bg-transparent">
            <div class="container-fluid pl-5 pr-5">
                <div class="row">
                    <div class="col-lg-6 navbar p-0">
                        <a href="index.html" class="logo"><img src="img/eperpus.png" alt="logo" class="light"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover" style="background-image: url(img/korsel3.webp);"></div>
            <div class="col-xl-7 vh-100 align-items-center d-flex bg-lightblue rounded-lg overflow-hidden">
                <div class="card shadow-none w-75 w-md--75 w-sm--90 p-lg-5 p-3 border-0 ml-auto mr-auto">
                    <div class="card-body rounded-0 text-left pt-0 pb-2">
                        <h2 class="fw-600 display2-size display2-md-size mb-4">Daftar Akun</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                     
                        
                          <div class="form-group">
                              <label class="small mb-1" for="username">Username</label>
                              <input class="form-control py-4" id="username" name="username" type="text" placeholder="Masukan username anda" required />
                          </div>
                          <div class="form-group">
                              <label class="small mb-1" for="nama">Nama</label>
                              <input class="form-control py-4" id="nama" type="text" name="nama"   placeholder="Masukan Nama anda" required/>
                         
                                  <div class="form-group">
                                      <label class="small mb-1" for="password">Password</label>
                                      <input class="form-control py-4" id="password" name="password"  type="password" placeholder="Masukan password" required/>
                                  </div>
                             
                          <div class="form-group mt-4 mb-0">
                              <button type="submit" name="regis" class="btn btn-primary btn-block">Buat Akun</button>
                          </div>
                      </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Sudah Punya akun? Silahkan Login</a></div>
                                    </div>
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>



    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>