<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E Fashion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label class="pb-2" for="Type">Keyword</label>
                            <input type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="Type">Type</label>
                            <select class="form-control form-select form-control-a" id="Type">
                                <option>All Type</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                                <option>Open House</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="city">City</label>
                            <select class="form-control form-select form-control-a" id="city">
                                <option>All City</option>
                                <option>Alabama</option>
                                <option>Arizona</option>
                                <option>California</option>
                                <option>Colorado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bedrooms">Bedrooms</label>
                            <select class="form-control form-select form-control-a" id="bedrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="garages">Garages</label>
                            <select class="form-control form-select form-control-a" id="garages">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bathrooms">Bathrooms</label>
                            <select class="form-control form-select form-control-a" id="bathrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="price">Min Price</label>
                            <select class="form-control form-select form-control-a" id="price">
                                <option>Unlimite</option>
                                <option>$50,000</option>
                                <option>$100,000</option>
                                <option>$150,000</option>
                                <option>$200,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- End Property Search Section -->>

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            @guest     
                <a class="navbar-brand text-brand" href="/"><span class="color-b">E</span> Fashion</a>
            @endguest
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    @endguest
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="/signin">sign in</a>
                        </li>
                    @endguest

                    <li class="nav-item">
                        <a class="nav-link " href="/produk">Produk</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="/login">log in</a>
                        </li>
                    @endguest

                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <button class="nav-link dropdown-item d-flex align-items-center"><span>log Out</span></button>

                            
                        </form>
                    @endauth
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav>
    <!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Indonesia, Jakarta
                                            <br> E Fashion
                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">tersedia </span>
                                            <br> pakaian wanita
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Harga mulai | Rp 50.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Indonesia, Jakarta
                                            <br> E Fashion
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Tersedia</span>
                                            <br> Pakaian dewasa
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Harga mulai | Rp 50.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Indonesia, Jakarta
                                            <br>E Fashion
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Tersedia</span>
                                            <br> Kemeja dewasa
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Harga mulai | Rp 50.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->

    <main id="main">
        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="property-grid.html">All Property
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">Baju
                                                    <br /> Koko Putih</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">Harga | Rp 62.000</span>
                                            </div>
                                            <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.zalora.co.id%2Fmen%2Fbaju-muslim%2Fbaju-koko%2F&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABBh" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Ukuran</h4>
                                                    <span>XXL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>XL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>L</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FFashion-Bayi-Anak-cat.11043031&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABB5">Switer
                                                    <br /> Hodie levis</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">Harga | Rp 82.000</span>
                                            </div>
                                            <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fshopee.co.id%2FFashion-Bayi-Anak-cat.11043031&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABB5" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Ukuran</h4>
                                                    <span>XXL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>XL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>L</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.carousell.com%2Fp%2Fsetelan-baju-terbalik-viral-bolbal-1113492939%2F&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABBn">Baju
                                                    <br /> Daster Coklat</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">Harga | Rp 120.000</span>
                                            </div>
                                            <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.carousell.com%2Fp%2Fsetelan-baju-terbalik-viral-bolbal-1113492939%2F&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABBn" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Ukuran</h4>
                                                    <span>XXL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>XL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>L</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.knitto.co.id%2Fperbedaan-ukuran-baju-pria-lokal-dan-internasional%2F&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABBa">Baju
                                                    <br /> Merah Biru</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">Harga mulai | Rp 50.000</span>
                                            </div>
                                            <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.knitto.co.id%2Fperbedaan-ukuran-baju-pria-lokal-dan-internasional%2F&psig=AOvVaw2UGgAl3CoGkICtGb39sfOs&ust=1647695347576000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLiHh9zdz_YCFQAAAAAdAAAAABBa" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Ukuran</h4>
                                                    <span>XXL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>XL</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>L</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">.</h4>
                                                    <span>M</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>
            </div>
        </section>
        <!-- End Latest Properties Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Testimonials</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="testimonial-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="assets/img/mini-testimonial-1.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Albert & Erika</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="assets/img/mini-testimonial-2.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Pablo & Emma</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                    </div>
                </div>
                <div class="testimonial-carousel-pagination carousel-pagination"></div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">E Fashion</span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
