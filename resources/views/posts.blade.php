@extends('layouts.main')


@section('container')
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
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">204 </span> Mount
                                            <br> Olive Road Two
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
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
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Rino
                                            <br> Venda Road Five
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
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
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Alira
                                            <br> Roan Road One
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
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
    </div>
    <!-- End Intro Section -->

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
@endsection
