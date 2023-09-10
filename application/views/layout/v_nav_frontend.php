<!-- Navbar -->
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?= base_url()?>assets/ico/logo-batik.jpg" style="border-radius: 10px; width: 60px;" alt=""></a>
                    </div>
                </div>
                    
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="#">Home</a></li>
                            <!-- <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li> -->
                            <li><a href="<?= base_url('shop')?>">Toko</a></li>
                            <li><a href="#">Halaman</a>
                                <ul class="dropdown">
                                    <li><a href="#">Rincian Produk</a></li>
                                    <li><a href="#">Keranjang Toko</a></li>
                                    <li><a href="#">Periksa</a></li>
                                    <li><a href="#">Detail Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="<?= base_url('auth/login_user')?>">Login</a>
                            <a href="<?= base_url('auth/login_user')?>">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- /.content-header -->

 

      