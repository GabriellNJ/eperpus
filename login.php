<!-- <?php 
session_start();
require_once 'config/koneksi.php';

if(isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result = $conn->query("SELECT * FROM tb_user WHERE username = '$username'") or die(mysqli_error($conn));
    if($result->num_rows === 1) {
        // if($result > 0){
        $row = $result->fetch_assoc();
        // if(password_verify($password, $row['password'])) {
            // pasang session
            $_SESSION['login'] = $row;

            header("Location: dashboard.php");
            exit;
        }
    }

?> -->
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
                        <a href="index.php" class="logo"><img src="img/eperpus.png" alt="logo" class="light"></a>
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
                        <h2 class="fw-600 display2-size display2-md-size mb-4">Halaman Login</h2>
                        <form action="" method="post">
                            
                            <div class="form-group icon-tab mb-1">
                              <label class="small mb-1" for="nama">Username</label>
                                
                                <input class="form-control py-4" name="username" id="username" type="text" placeholder="Masukan username anda" />                
                            </div>

                            <div class="form-group icon-tab mb-1">
                              <label class="small mb-1" for="nama">Password</label>

                             <input class="form-control py-4" id="password" name="password" type="password" placeholder="Masukan password" />
                            </div>
                            <!-- <div class="form-check text-left mb-3">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label font-xsss text-grey-500" for="exampleCheck1">Ingat saya </label>
                                <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Lupa Password?</a>
                            </div> -->
                            <div><br></div>
                            <div class="form-group mt-4 mb-0">
                              <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                          </div>
                        </form>
                         
                        <div class="col-sm-12 p-0 text-center">
                       
                            <h6 class="text-grey-500 font-xsss fw-500 mt-2 mb-0 lh-32">Tidak punya akun? <a href="daftar.php" class="fw-700 ml-1">Daftar</a></h6>
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