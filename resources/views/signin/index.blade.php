<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EstateAgency Bootstrap Template - Index</title>
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
    </div><!-- End Property Search Section -->>

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

                        <li class="nav-item">
                    @guest
                            <a class="nav-link " href="/">Home</a>                
                    @endguest
                        </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="/signin">sign in</a>
                        </li>
                    @endguest

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
    </nav><!-- End Header/Navbar -->

    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Sign In</h1>
                            <span class="color-text-a">Silahkan masukan data anda dengan benar</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    @guest
                                    <a href="/">Home</a>
                                    @endguest
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Sign in
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Contact Single ======= -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 section-t8">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="your name"
                                                    class="form-control rounded-top @error('name') is-invalid @enderror"
                                                    id="name" required value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="email" type="email" placeholder="your email"
                                                    class="form-control rounded-top @error('email') is-invalid @enderror"
                                                    id="email" required value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="your password"
                                                    class="form-control rounded-top @error('password') is-invalid @enderror"
                                                    id="Password" required>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="password" name="confirm"
                                                    placeholder="confirm your password"
                                                    class="form-control rounded-top @error('confirm') is-invalid @enderror"
                                                    id="confirm" required>
                                                @error('confirm')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-a">signin</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Single-->

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
    </footer><!-- End  Footer -->

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
