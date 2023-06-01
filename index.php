
<?php
                      include_once("config/koneksi.php");
                     
                     $data = mysqli_query($conn,"SELECT * FROM tb_anggota");
                    $jumlah = mysqli_num_rows($data);
                      
                    $data_b = mysqli_query($conn,"SELECT * FROM tb_buku ORDER BY id_buku DESC")or die(mysqli_error($conn));
                    $jumlah_buku = mysqli_num_rows($data_b);
                    
                    $data_t = mysqli_query($conn,"SELECT * FROM tb_transaksi");
                    $jumlah_transaksi = mysqli_num_rows($data_t);
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
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <style>
    a{
        color:white;
        text-decoration:none;
    }
    </style>
</head>

<body class="color-theme-blue open-font">

    <div class="preloader"></div>

    <div class="backdrop"></div>
    <div class="main-wrapper ">
        <!-- header wrapper -->
        <!-- <div class=""> -->

        <div class="header-wrapper bg-white " style="z-index:9999;position:fixed; width:100%; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 navbar">
                         <!-- <img width="100" class="img-fluid logo" src="img/eperpus.png"> -->
                       
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center" >
                                <li>  <img width="100" class="img-fluid logo" src="img/eperpus.png">
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="#kategori">Kategori</a></li>
                                <li class="nav-item"><a class="nav-link" href="#koleksi">Koleksi Buku</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href=".html">Berita</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="#FAQ">FAQ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tentang_eperpus">Tentang E-Perpus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right">
                        <a href="login.php" class="header-btn bg-current fw-500 text-white font-xssss">Login / Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->

        <!-- korsel -->
<div id="beranda">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active "data-bs-interval="5000">
                <img src="img/korsel1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item"data-bs-interval="5000">
                <img src="img/korsel2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item"data-bs-interval="5000">
                <img src="img/korsel3.webp" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
</div>
        <div id="kategori" class="popular-wrapper pt-lg--7 pb-lg--7 pb-5 pt-5 bg-lightblue kategori">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left mb-5 pb-0">
                        <h2 class="text-grey-900 fw-400 display1-size lh-2">Kategori Buku</h2>
                    </div>
                
                    <div class="col-lg-12">
                        <div class="categorie-slider owl-carousel owl-theme overflow-visible dot-none right-nav pb-4">
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Novel</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">kwokow</h6> -->
                                </div>
                            </div>
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Komik</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">Total active Member</h6> -->
                                </div>
                            </div>
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Majalah</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">Total active Member</h6> -->
                                </div>
                            </div>
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Biografi</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">Total active Member</h6> -->
                                </div>
                            </div>
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Kamus</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">Total active Member</h6> -->
                                </div>
                                </div>
                            <div class="owl-items text-center">
                                <div class="card w-100 p-4 text-left border-0 shadow-md rounded-lg">
                                    <i class="ti-book mt-4 font-xl text-current"></i>
                                    <h4 class="font-xsss fw-700 mt-3 text-grey-900">Naskah</h4>
                                    <!-- <h6 class="fw-500 font-xssss text-grey-500">Total active Member</h6> -->
                                </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
        
        <div id="koleksi"  class="how-to-work pt-lg--7 pb-lg--7 pb-5 pt-5 bg-greylight">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-lg-5 mb-4 pb-3">
                        <h2 class="text-grey-900 fw-400 display1-size"> Koleksi Buku  </h2>
                    </div> 

                     <?php 
                      include_once("config/koneksi.php");
                      $data_b = mysqli_query($conn,"SELECT * FROM tb_buku ORDER BY id_buku DESC");
                      while ($pecahBuku = mysqli_fetch_array($data_b)) {
                    
                    ?>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-lg rounded-0 p-5 bg-white text-center border-0" style="width:350px; height:500px;">
                        <img src="foto/<?php echo $pecahBuku['foto']; ?>" style=" width:200px; height300px;" />
                            <h2 class="fw-700 font-sm mt-4"><?= $pecahBuku['judul_buku']; ?></h2>
                            <p class="font-xsss fw-500 text-grey-500 lh-26 mt-2"><?= $pecahBuku['desk']; ?></p>
                            <button type="submit" class="btn btn-success"><a href="detail.php">Detail</a> </button><br>
                        </div>
                    </div>
                    <?php } ?>
                    
                   
                </div>
            </div>
        </div>

       

        <div id="FAQ" class="faq-wrapper pt-4 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-lg-5 mb-4 pb-3">
                        <h2 class="text-grey-900 fw-400 display1-size">Frequently Asked Question</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div id="accordion" class="accordion">
                          <div class="card border-0 mb-4">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Apa itu E-Perpus?
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <p>E-Perpus adalah aplikasi perpustakaan digital yang memberikan akses kepada penggunanya untuk menjadi pengelola dan anggota perpustakaan. Bekerja sama dengan ratusan penerbit ternama, ePerpus menyediakan ribuan koleksi bacaan digital berupa buku, majalah, dan koran. </p>
                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-4">
                            <div class="card-header" id="headingSix">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Apakah peminjaman buku di E-Perpus dipungut biaya?
                                </button>
                              </h5>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                              <div class="card-body">
                                <p>Peminjaman Buku di E-Perpus gratis, hanya perlu menjadi anggota untuk meminjam buku di E-Perpus.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-4">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Berapa lama jangka waktu meminjam buku di E-Perpus?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                <p>Jangka Peminjaman di E-Perpus berlaku 7 hari, tetapi dapat diperpanjang lagi.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="count-wrapper pt-lg--7 pb-lg--7 pb-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h2 class="fw-500 text-grey-900 display2-size"><?php echo $jumlah; ?></h2>
                        <p class="font-xsss fw-500 text-grey-500 lh-26 mt-2">Total Pengunjung</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h2 class="fw-500 text-grey-900 display2-size"><?php echo $jumlah_buku; ?></h2>
                        <p class="font-xsss fw-500 text-grey-500 lh-26 mt-2">Total Buku</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h2 class="fw-500 text-grey-900 display2-size"><?php echo $jumlah_transaksi; ?></h2>
                        <p class="font-xsss fw-500 text-grey-500 lh-26 mt-2">Total Kategori</p>
                    </div>
                </div>
            </div>
        </div>

    
        <!-- footer wrapper -->
        <div id="tentang_eperpus" class="footer-wrapper mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-lg-4 col-sm-9 col-xs-12 md-mb25">
                                <a href="index.php" class="logo"><img width="200" class="img-fluid" src="img/eperpus.png" alt="logo"></a>
                                <p class="w-100 mt-lg-2 mt-2">Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres,<br> Kota Surakarta, Jawa Tengah 57126</p>
                                
                            </div>
                            <div class="col-md-3 col-lg-4 col-sm-3 col-xs-6 md-mb25">
                                <h5>Pintasan</h5>
                                <ul>
                                    <li><a href="#beranda">Beranda</a></li>
                                    <li><a href="#kategori">Kategori</a></li>
                                    <li><a href="#koleksi">Buku</a></li>
                                    <li><a href="#FAQ">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-lg-4 col-sm-4 col-xs-6">
                                <h5>Hubungi Kami</h5>
                                <ul class="list-inline">
                                    <li class="list-item mr-3"><a href="#"><i class="ti-facebook"></i>  Facebook</a></li>
                                    <li class="list-item mr-3"><a href="#"><i class="ti-twitter-alt">   Twitter</i></a></li>
                                    <li class="list-item mr-3"><a href="#"><i class="ti-linkedin">  Linkedin</i></a></li>
                                    <li class="list-item"><a href="#"><i class="ti-instagram">  Instagram</i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="middle-footer mt-5 pt-4"></div>
                    </div>
                    <div class="col-sm-12 lower-footer pt-0"></div>
                    <div class="col-sm-12 col-xs-12">
                        <p class="copyright-text">© 2021 copyright. All rights reserved.</p>
                    </div>
                </div>
            </div>
</div>

<div id="pinjam" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Login Dulu Ya Gan</h4>
          </div>
          <div class="modal-body">
            <!-- form login -->
            <form action="check-login.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" class="form-control" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="Password" class="form-control" />
              </div>
              <div class="text-right">
                <button class="btn btn-danger" type="submit">Login</button>
              </div>
            </form>
            <!-- end form login -->
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
 
        <!-- footer wrapper -->

    </div> 


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>