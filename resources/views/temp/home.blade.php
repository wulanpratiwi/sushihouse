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

                    @if (Route::has('login'))
                <!-- <div class="top-right links"> -->
                    @auth
                        <!-- <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">UTAMA</a></li> -->
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
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <!-- <li class="nav-item"><a href="/" class="nav-link">UTAMA</a></li> -->
                        <li class="nav-item"><a href="login" class="nav-link">MENU</a></li>
                        <li class="nav-item"><a href="login" class="nav-link">LAYANAN</a></li>
                        <li class="nav-item"><a href="login" class="nav-link">BLOG</a></li>
                        <li class="nav-item"><a href="login" class="nav-link">TENTANG</a></li>
                        <li class="nav-item"><a href="login" class="nav-link">KONTAK</a></li>
                        <li class="nav-item active"><a href="{{ route('login') }}" class="nav-link"><span class="icon-unlock-alt"></span>  MASUK</a>

                        @if (Route::has('register'))
                            <li class="nav-item active"><a href="{{ route('register') }}" class="nav-link"><span class="icon-users"></span>  DAFTAR</a>
                        @endif
                    @endauth
                <!-- </div> -->
                    @endif

	          		<!-- <li class="nav-item"><a href="/" class="nav-link">UTAMA</a></li>
	          		<li class="nav-item"><a href="login" class="nav-link">MENU</a></li>
			        <li class="nav-item"><a href="login" class="nav-link">SERVICES</a></li>
			        <li class="nav-item"><a href="login" class="nav-link">BLOG</a></li>
			        <li class="nav-item"><a href="login" class="nav-link">TENTANG</a></li>
			        <li class="nav-item"><a href="login" class="nav-link">KONTAK</a></li>
		            <li class="nav-item active"><a href="login" class="nav-link"><span class="icon-unlock-alt"></span>  MASUK</a></li>
		            <li class="nav-item active"><a href="register" class="nav-link"><span class="icon-users"></span>  DAFTAR</a></li> -->
	        	</ul>
	      	</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Slider -->
	<section class="home-slider owl-carousel img" style="background-image: url(temp/images/bg_3a.jpg);">
		<div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text align-items-center" data-scrollax-parent="true">
					<div class="col-md-6 col-sm-12 ftco-animate">
						<span class="subheading">Datang dan nikmati !</span>
						<h1 class="mb-4">Sushi</h1>
						<p class="mb-4 mb-md-5">Makanan asal khas Jepang, yang terdiri dari nasi yang dibentuk dengan unik bersama lauk yang berupa makanan laut, daging, serta sayuran mentah atau yang sudah dimasak.</p>
						<p>
							@if (Route::has('login'))
                                @auth
                                    <a href="cart" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                    <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @else
                                        <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                @endauth
                            @endif
						</p>
            		</div>
            		<div class="col-md-6 ftco-animate">
            			<img src="temp/images/bg_6.png" class="img-fluid" alt="">
            		</div>

        		</div>
        	</div>
      </div>

    	<div class="slider-item">
      		<div class="overlay"></div>
        		<div class="container">
        			<div class="row slider-text align-items-center" data-scrollax-parent="true">
        				<div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            				<span class="subheading">Datang dan nikmati !</span>
            				<h1 class="mb-4">Ramen</h1>
            				<p class="mb-4 mb-md-5">Mie halus yang disajikan dengan kuah dan topping khas, akan membuat selera makan anda menjadi nikmat.</p>
            				<p>
                    			@if (Route::has('login'))
                                    @auth
                                        <a href="cart" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                        @else
                                            <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                            <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @endauth
                                @endif
            				</p>
            			</div>
			            <div class="col-md-6 ftco-animate">
			            	<img src="temp/images/bg_7.png" class="img-fluid" alt="">
			            </div>
        			</div>
       			</div>
    	</div>

    	<div class="slider-item" style="background-image: url(temp/images/bg_3a.jpg);">
    		<div class="overlay"></div>
    			<div class="container">
        			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
						 <div class="col-md-7 col-sm-12 text-center ftco-animate">
            				<span class="subheading">Selamat Datang <dir></dir></span>
            				<h1 class="mb-4">SUSHI HOUSE</h1>
            				<p class="mb-4 mb-md-5">Kami menyediakan berbagai olahan makanan khas jepang yang dapat anda nikmati bersama teman serta keluarga.</p>
            				<p>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="cart" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                        @else
                                            <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                            <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @endauth
                                @endif
                            </p>
            			</div>
        			</div>
        		</div>
    	</div>
    </section>
	<!-- End Slider -->

	<!-- Body -->
	<!-- Section 1 -->
	<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon">
	    						<span class="icon-phone"></span>
	    					</div>
	    					<div class="text">
	    						<h3>+62 853 4983 8388</h3>
	    						<p>Hubungi untuk pemesanan</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Samarinda</h3>
	    						<p>Jln. Cipto Mangunkusumo Kalimantan Timur</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Buka Senin-Jum'at</h3>
	    						<p>9:00 AM - 21:00 PM</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
            			<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            			<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            			<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google"></span></a></li>
            		</ul>
	    		</div>
    		</div>
    	</div>
    </section>
    <!-- End Section 1 -->

    <!-- Section 2 -->
    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(temp/images/resto-1.jpg);"></div>
    	<div class="one-half ftco-animate">
        	<div class="heading-section ftco-animate ">
          		<h2 class="mb-4"><span class="flaticon-pizza"> SUSHI HOUSE</span> Restaurant</h2>
        	</div>
        	<div>
  				<p>Sushi House menyediakan berbagai macam masakan Jepang yang 100 % HALAL dengan citarasa Indonesia. Dengan banyak variasi menu serta tingkat kepedasan yang cocok untuk siapapun, kamu bisa menikmati makanan yang lezat ini dengan harga yang bersahabat.</p>
  			</div>
    	</div>
    </section>
    <!-- End Section 2 -->

    <!-- Section 3 -->
    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    		<div class="container">
    			<div class="row justify-content-center mb-5 pb-3">
          			<div class="col-md-7 heading-section ftco-animate text-center">
            			<h2 class="mb-4">Our Services</h2>
            			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        		</div>
    			<div class="row">
          			<div class="col-md-4 ftco-animate">
            			<div class="media d-block text-center block-6 services">
            				<div class="icon d-flex justify-content-center align-items-center mb-5">
              					<span class="flaticon-diet"></span>
            				</div>
            				<div class="media-body">
                				<h3 class="heading">Healthy Foods</h3>
                				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            				</div>
            			</div>      
        			</div>

        			<div class="col-md-4 ftco-animate">
			            <div class="media d-block text-center block-6 services">
			            	<div class="icon d-flex justify-content-center align-items-center mb-5">
			              		<span class="flaticon-bicycle"></span>
			            	</div>
			            	<div class="media-body">
			                	<h3 class="heading">Fastest Delivery</h3>
			                	<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
			            	</div>
			            </div>      
          			</div>
			        <div class="col-md-4 ftco-animate">
			            <div class="media d-block text-center block-6 services">
			             	<div class="icon d-flex justify-content-center align-items-center mb-5">
			             		<span class="flaticon-pizza-1"></span>
			             	</div>
			            	<div class="media-body">
			                	<h3 class="heading">Original Recipes</h3>
			                	<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
			              	</div>
			            </div>    
			        </div>
        		</div>
    		</div>
    </section>
    <!-- End Sectio 3 -->

    <!-- Section 4 -->
    <section class="ftco-section">
    	<!-- <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
        		<div class="col-md-7 heading-section ftco-animate text-center">
            		<h2 class="mb-4">Hot SUSHI</h2>
            		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
    	</div> -->
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
    <!-- End Section 4 -->

    <!-- Section 5 -->
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/resto-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/kitchen-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/resto-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/resto-5.jpeg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
					</a>
				</div>
        	</div>
    	</div>
    </section>
    <!-- End Section 5 -->

    <!-- Section 6 -->
	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(temp/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
    		<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-md-10">
        				<div class="row">
		        			<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            			<div class="block-18 text-center">
		            				<div class="text">
					              		<div class="icon"><span class="flaticon-pizza-1"></span></div>
					              		<strong class="number" data-number="100">0</strong>
					              		<span>Pizza Branches</span>
					              </div>
		            			</div>
		          			</div>
					        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					            <div class="block-18 text-center">
					            	<div class="text">
					              		<div class="icon"><span class="flaticon-medal"></span></div>
					              		<strong class="number" data-number="90">0</strong>
					              		<span>Number of Awards</span>
					              	</div>
					            </div>
					        </div>
					        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					            <div class="block-18 text-center">
					            	<div class="text">
					              		<div class="icon"><span class="flaticon-laugh"></span></div>
					              		<strong class="number" data-number="15778">0</strong>
					              		<span>Happy Customer</span>
					              	</div>
					            </div>
					        </div>
					       	<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					            <div class="block-18 text-center">
					            	<div class="text">
					              		<div class="icon"><span class="flaticon-chef"></span></div>
					              		<strong class="number" data-number="1500">0</strong>
					              		<span>Staff</span>
					              	</div>
					            </div>
					        </div>
		        		</div>
		    		</div>
        		</div>
      		</div>
    </section>
    <!-- End Section 6 -->

    <!-- Section 7 -->
    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(temp/images/resto-2.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		        		<div class="col-md-12 nav-link-wrap mb-5">
		        			<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		            			<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">SUSHI</a>

		              			<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">TEPPAN</a>

		              			<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">BENTO</a>

		              			<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">RAMEN</a>

                                <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">SIDE DISH</a>
		            		</div>
		          		</div>
		        		<div class="col-md-12 d-flex align-items-center">
		            		<div class="tab-content ftco-animate" id="v-pills-tabContent">
		            			<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              				<div class="row">
		              					<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/sushi_salmon.jpeg);"></a>
					              				<div class="text">
					              					<h3><a href="#">SUSHI SALMON</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>Rp.70.000</span></p>
					              					<p>
					              						<a href="#" class="btn btn-white btn-outline-white">Add to cart</a>
					              					</p>
					              				</div>
					              			</div>
		              					</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/sushi_gurita.jpeg);"></a>
					              				<div class="text">
					              					<h3><a href="#">SUSHI OCTOPUS</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p>
					              						<a href="#" class="btn btn-white btn-outline-white">Add to cart</a>
					              					</p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/sushi_eel.jpeg);"></a>
					              				<div class="text">
					              					<h3><a href="#">SUSHI EEL</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
		              				</div>
		            			</div>

		              			<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                			<div class="row">
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/Gokana-4.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Gokana 4</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>Rp.130.000</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/Beef-Teppan1.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Beef Teppan</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>Rp.145.000</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ChickenTeriyaki.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Chicken Teriyaki</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>Rp.125.000</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
		              				</div>
		            			</div>

		            			<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                			<div class="row">
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/KatsuBento.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Katsu Bento</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/BeefOriginalBento.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Beef Original Bento</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ChickenOriginalBento.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Chicken Original Bento</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
		              				</div>
		              			</div>

		            			<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		               				 <div class="row">
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ramen-1.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Beef Hot Jumbo Ramen</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ramen-2.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Salmon Abura Ramen</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
					              		<div class="col-md-4 text-center">
					              			<div class="menu-wrap">
					              				<a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ramen-3.jpg);"></a>
					              				<div class="text">
					              					<h3><a href="#">Ebimaki Miso Ramen</a></h3>
					              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					              					<p class="price"><span>$2.90</span></p>
					              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
					              				</div>
					              			</div>
					              		</div>
		              				</div>
		            			</div>

                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/ChickenKatsu.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Chicken Katsu</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>Rp.130.000</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/tempura-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">Tempura</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>Rp.145.000</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4" style="background-image: url(temp/images/SpicyChicken.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="#">SpicyChicken</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                    <p class="price"><span>Rp.125.000</span></p>
                                                    <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		            		</div>
		        		</div>
		        	</div>
		    	</div>
		    </div>
    	</div>
    </section>
    <!-- End Section 7 -->

    <!-- Section 8 -->
    <section class="ftco-section">
    	<div class="container">
        	<div class="row justify-content-center mb-5 pb-3">
        		<div class="col-md-7 heading-section ftco-animate text-center">
            		<h2 class="mb-4">Blog</h2>
            		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        		</div>
        	</div>
        	<div class="row d-flex">
	        	<div class="col-md-4 d-flex ftco-animate">
	          		<div class="blog-entry align-self-stretch">
	            		<a href="blog-single.html" class="block-20" style="background-image: url('temp/images/tempura-1.jpg');">
	              		</a>
		            	<div class="text py-4 d-block">
		              		<div class="meta">
		                  		<div><a href="#">Sept 10, 2018</a></div>
		                  		<div><a href="#">Admin</a></div>
		                  		<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                	</div>
		                		<h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
		                		<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		            	</div>
	            	</div>
	          	</div>
		        <div class="col-md-4 d-flex ftco-animate">
		          	<div class="blog-entry align-self-stretch">
		            	<a href="blog-single.html" class="block-20" style="background-image: url('temp/images/tepan-1.jpg');">
		            	</a>
		            	<div class="text py-4 d-block">
		              		<div class="meta">
		                		<div><a href="#">Sept 10, 2018</a></div>
		                		<div><a href="#">Admin</a></div>
		                		<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                	</div>
		                		<h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
		                		<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		              	</div>
		            </div>
		        </div>
		        <div class="col-md-4 d-flex ftco-animate">
		          	<div class="blog-entry align-self-stretch">
		            	<a href="blog-single.html" class="block-20" style="background-image: url('temp/images/sushi_salmon.jpeg');">
		              	</a>
		            	<div class="text py-4 d-block">
		              		<div class="meta">
		                		<div><a href="#">Sept 10, 2018</a></div>
		                  		<div><a href="#">Admin</a></div>
		                  		<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                	</div>
		                		<h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
		                		<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		              	</div>
		            </div>
		        </div>
        	</div>
    	</div>
    </section>
    <!-- End Section 8 -->
	
	<!-- Section 9 -->
	<section class="ftco-appointment">
		<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Hubungi kami</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Masukkan Nama Anda">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input name="email" type="text" class="form-control" placeholder="Masukkan E-Mail Anda">
		    				</div>
	    				</div>
	    				<div class="form-group">
	            			<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Pesan Anda"></textarea>
	            		</div>
			            <div class="form-group">
			              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
			            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>
    <!-- End Section 9 -->
	<!-- End Body -->

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
