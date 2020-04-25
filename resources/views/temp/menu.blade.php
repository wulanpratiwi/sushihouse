@extends('template')

@section('content')
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="flaticon-pizza-1 mr-1"></span>SUSHI<br><small>HOUSE</small>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">UTAMA</a></li>
                    <li class="nav-item"><a href="{{ url('menu') }}" class="nav-link">MENU</a></li>
                    <li class="nav-item"><a href="{{ url('layanan') }}" class="nav-link">LAYANAN</a></li>
                    <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">BLOG</a></li>
                    <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">TENTANG</a></li>
                    <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">KONTAK</a></li>
                    <!-- <li class="nav-item active"><a href="{{ url('#') }}" class="nav-link">DASHBOARD</a> -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: yellow;">
                                    PROFILE <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('#') }}">Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Keluar') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- End Navbar -->

<!-- Section 1 -->
    <section class="home-slider owl-carousel img" style="background-image: url(temp/images/bg_3a.jpg);">
        <div class="slider-item" style="background-image: url(images/bg_3a.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Section 1 -->

<!-- Section 2 -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">SUSHI</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
    	</div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/sushi_eel.jpeg);"></a>
                        <div class="text p-4">
                            <h3>SUSHI EEL</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/sushi_egg.jpeg);"></a>
                        <div class="text p-4">
                            <h3>SUSHI EGG</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/sushi_salmon.jpeg);"></a>
                        <div class="text p-4">
                            <h3>SUSHI SALMON</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/sushi_gurita.jpeg);"></a>
                        <div class="text p-4">
                            <h3>SUSHI OCTOPUS</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/sushi_roll.jpeg);"></a>
                        <div class="text p-4">
                            <h3>SUSHI ROLL</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/sushi_cookedshrimp.jpeg);"></a>
                        <div class="text p-4">
                            <h3>COOKED SHRIMP</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">TEPPAN</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Gokana-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Gokana 1</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Gokana-2.jpg);"></a>
                        <div class="text p-4">
                            <h3>Gokana 2</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Gokana-3.jpg);"></a>
                        <div class="text p-4">
                            <h3>Gokana 3</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Gokana-4.jpg);"></a>
                        <div class="text p-4">
                            <h3>Gokana 4</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Beef-Teppan1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Beef Teppan</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/ChickenTeriyaki.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Teriyaki</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Chicken-Teppan.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Teppan</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Chicken-Yakiniku-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Yakiniku</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Paket-Special-1-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Paket Spesial 1</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Paket-Special-2-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Paket Spesial 2</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Paket-Special-3-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Paket Spesial 3</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Paket-Special-4-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Paket Spesial 4</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">BENTO</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/KatsuBento.jpg);"></a>
                        <div class="text p-4">
                            <h3>Katsu Bento</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/BeefOriginalBento.jpg);"></a>
                        <div class="text p-4">
                            <h3>Beef Original Bento</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/ChickenOriginalBento.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Original Bento</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">RAMEN</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Tempura-Soyu-Ramen.jpg);"></a>
                        <div class="text p-4">
                            <h3>Tempura Soyu Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Tempura-Miso-Ramen.jpg);"></a>
                        <div class="text p-4">
                            <h3>Tempura Miso Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/Katsu-Miso-Ramen.jpg);"></a>
                        <div class="text p-4">
                            <h3>Katsu Miso Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/BeefAburaRamen.jpg);"></a>
                        <div class="text p-4">
                            <h3>Beef Abura Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/BeefAburaUdon.jpg);"></a>
                        <div class="text p-4">
                            <h3>Beef Abura Udon</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/ChickenAburaRamen.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Abura Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">SIDE DISH</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/tempura-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Tempura</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/SpicyChicken.jpg);"></a>
                        <div class="text p-4">
                            <h3>Spicy Chicken</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/ChickenKatsu.jpg);"></a>
                        <div class="text p-4">
                            <h3>Chicken Katsu</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	<div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Menu Favorit</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                    <!-- <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/sushi_eel.jpeg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sushi Eel</span></h3>
                                <span class="price">Rp.75.000</span>
                            </div>
                            <div class="d-block">
                                <p>Belut segar dengan cuka beras berbumbu</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/sushi_salmon.jpeg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sushi Salmon</span></h3>
                                <span class="price">Rp.70.000</span>
                            </div>
                            <div class="d-block">
                                <p>Daging Salmon segar yang dapat membuat anda puas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/sushi_cookedshrimp.jpeg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sushi Cooked Shrimp</span></h3>
                                <span class="price">Rp.90.000</span>
                            </div>
                            <div class="d-block">
                                <p>Aroma dan rasa Udang yang khas ditaburi dengan Rempah-rempah</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/sushi_roll.jpeg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sushi Roll</span></h3>
                                <span class="price">Rp.65.000</span>
                            </div>
                            <div class="d-block">
                                <p>Dengan Salmon asap diselimuti keju yang dapat membuat anda tidak dapat berhenti mengunyah.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/BeefAburaRamen.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Beef Abura Ramen</span></h3>
                                <span class="price">Rp.120.000</span>
                            </div>
                            <div class="d-block">
                                <p>Beef Abura dengan rasa Original</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/BeefAburaUdon.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Beef Abura Udon</span></h3>
                                <span class="price">Rp.150.000</span>
                            </div>
                            <div class="d-block">
                                <p>Beef Abura dengan Udon original</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/ChickenAburaRamen.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chicken Abura Ramen</span></h3>
                                <span class="price">Rp.95.000</span>
                            </div>
                            <div class="d-block">
                                <p>Chicken Abura dengan rasa Original</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(temp/images/ChickenAburaUdon.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chicken Abura Udon</span></h3>
                                <span class="price">Rp.125.000</span>
                            </div>
                            <div class="d-block">
                                <p>Beef Abura dengan Udon original</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Section 2 -->

<!-- Footer -->
    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tentang Kami</h2>
                        <p>Sushi House telah berdiri selama 5 Tahun dan telah membuka cabang Restoran sebanyak 3 tempat.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Blog</h2>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url('temp/images/ramen-3.jpg');"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                        <div class="meta">
                                            <div><a href="#">
                                                <span class="icon-calendar"></span> Sept 15, 2018</a>
                                            </div>
                                            <div><a href="#">
                                                <span class="icon-person"></span> Admin</a>
                                            </div>
                                            <div><a href="#">
                                                <span class="icon-chat"></span> 19</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url('temp/images/tempura-1.jpg');"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                        <div class="meta">
                                            <div>
                                                <a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a>
                                            </div>
                                            <div>
                                                <a href="#"><span class="icon-person"></span> Admin</a>
                                            </div>
                                            <div>
                                                <a href="#"><span class="icon-chat"></span> 19</a>
                                            </div>
                                        </div>
                                    </div>
                            </div> 
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Cooked</a></li>
                            <li><a href="#" class="py-2 d-block">Deliver</a></li>
                            <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                            <li><a href="#" class="py-2 d-block">Mixed</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jln. Cipto Mangunkusumo (Kampus Polnes), Samarinda, Kalimantan Timur</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 853 4983 8388</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sushihouse@resto.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center"></div>
            </div>
        </div>
    </footer>
<!-- End Footer -->
@endsection
