<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/style.css" type="text/css">

    <!--template slider-->
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>ashion/templateslid/Casinal/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>ashion/templateslid/Casinal/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/responsive.css">

    <!--icon-->
   

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="<?= base_url()?>ashion/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="<?= base_url('auth/login_user')?>">Login</a>
            <a href="<?= base_url('auth/login_user')?>">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    
    <!-- Header Section End -->

<div class="banner_section layout_padding"  style="padding-bottom: 30px;">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="image_1"><img src="<?= base_url()?>ashion/templateslid/Casinal/images/saudagarwpatas.webp"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          
          <div class="carousel-item">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="image_1"><img src="<?= base_url()?>ashion/templateslid/Casinal/images/banneratas.webp"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" style="font-size:24px"></i>
       </a>
       <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right" style="font-size:24px"></i>
       </a>
    </div>
 </div><br><br>
<!-- Product Section Begin -->
<section class="product spad" style="margin-top: 100px;">
    <div class="container"><br>
        <div class="text-center">
            <h1 class="rt-header-block__title"><strong>Produk Unggulan</strong></h1>
        </div><br>
        <div class="row">
            <div class="col-lg-4 col-md-4">
               
            </div>
        </div>
        <div class="row property__gallery">
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/kain-batik-jawa-solo.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/kain-batik-jawa-solo.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Solo Klasik Semi Tulis Motif Ukel Coletan</a></h6><br>
                        <div class="product__price">Rp. 425.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/kain-batik-jawa.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/kain-batik-jawa.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Solo Klasik Sogan Semi Tulis Motif Floral Kupu Coletan</a></h6><br>
                        <div class="product__price">Rp. 425.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/kain-batik-solo.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/kain-batik-solo.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Klasik Sogan Solo Semi Tulis Motif Ceplok Coletan</a></h6><br>
                        <div class="product__price">Rp. 425.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/solo-javanese-antik.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/solo-javanese-antik.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Klasik Sogan Solo Proses Semi Tulis Motif Pisan Bali</a></h6><br>
                        <div class="product__price">Rp. 425.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/THEBATIK-KAIN-BATIK.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/THEBATIK-KAIN-BATIK.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Klasik / Batik Solo Motif Anyaman Burung Soga Genes</a></h6><br>
                        <div class="product__price">Rp. 425.000</div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/thebatik-sogan-jawa.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/thebatik-sogan-jawa.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Jawa Klasik Jogja Motif Cakar Seling Kembang Sogan</a></h6><br>
                        <div class="product__price">Rp. 125.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/thebatik-lukis-abstrak.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/thebatik-lukis-abstrak.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Lukis Abstrak Modern Motif Ciprat Kombinasi Polos Hijau</a></h6><br>
                        <div class="product__price">Rp. 215.000</div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url()?>ashion/img/batik/thebatik-lukis-modern.jpg">
                        <ul class="product__hover">
                            <li><a href="<?= base_url()?>ashion/img/batik/thebatik-lukis-modern.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Kain Batik Lukis Modern Kombinasi Polos Hijau Bahan Kemeja Dress Blouse</a></h6><br>
                        <div class="product__price">Rp. 215.000</div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- Product Section End -->

<div class="text-center">
    <h1 class="rt-header-block__title"><strong>Partner</strong></h1>
</div>
<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/SMKN.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/kkbt.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-10">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/esc.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/jmb.jpg" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="<?= base_url()?>ashion/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url()?>ashion/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery-ui.min.js"></script>
<script src="<?= base_url()?>ashion/js/mixitup.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.countdown.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.slicknav.js"></script>
<script src="<?= base_url()?>ashion/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url()?>ashion/js/main.js"></script>
</body>

</html>