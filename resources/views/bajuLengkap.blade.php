<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klambi Ananta</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../ananta/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../ananta/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('layouts.menu')

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{url('/')}}">Home</a>
                            <a href="{{url('/product')}}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{url('images/baju/gambar1/'. $bajuLengkap->gambar1)}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{url('images/baju/gambar2/'. $bajuLengkap->gambar2)}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{url('images/baju/gambar3/'. $bajuLengkap->gambar3)}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{url('images/baju/gambar4/'. $bajuLengkap->gambar4)}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{url('images/baju/gambar5/'. $bajuLengkap->gambar5)}}">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('images/baju/gambar1/'. $bajuLengkap->gambar1)}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('images/baju/gambar2/'. $bajuLengkap->gambar2)}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('images/baju/gambar3/'. $bajuLengkap->gambar3)}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('images/baju/gambar4/'. $bajuLengkap->gambar4)}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('images/baju/gambar5/'. $bajuLengkap->gambar5)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $diskon = $bajuLengkap->harga * $bajuLengkap->diskon/ 100;
        $total = $bajuLengkap->harga - $diskon;
        @endphp
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$bajuLengkap->nama}}</h4>
                            @if($bajuLengkap->diskon)
                            <div class="hot__deal__sticker">
                                <span>Sale Of</span>
                                <h5>{{$bajuLengkap->diskon}}%</h5>
                            </div>
                            <h3>Rp. {{number_format ($bajuLengkap->harga)}} <span>Rp. {{number_format ($total)}}</span></h3>
                            @else
                            <h3> Rp. {{number_format ($bajuLengkap->harga)}}</h3>
                            @endif
                            <p>{{$bajuLengkap->isi}}.</p>
                            <br>
                            <div class="hero__social" style="margin-top: 38px;">
                                <a href="https://api.whatsapp.com/send?phone=6281928222022&text=Nama Baju = {{$bajuLengkap->nama}}, {{url('bajuLengkap/'. $bajuLengkap->id)}}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://shopee.co.id/klambi.ananta"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/klambi.ananta/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach($baju as $data)
                @php
                $diskon = $data->harga * $data->diskon/ 100;
                $total = $data->harga - $diskon;
                @endphp
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{url('images/baju/gambar1/'. $data->gambar1)}}">
                            <span class="label">New</span>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$data->nama}}</h6>
                            <a href="{{url('bajuLengkap/'. $data->id)}}" class="add-cart">{{$data->nama}}</a>
                            @if($data->diskon)
                            <s>Rp. {{number_format ($data->harga)}}</s>
                            <h5> Rp. {{number_format ($total)}}</h5>
                            @else
                            <h5> Rp. {{number_format ($data->harga)}}</h5>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{url('/')}}"><img src="../images/market/klambi.jpg" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <h6>Follow Us</h6>
                        <ul>
                            <li><a href="https://www.instagram.com/klambi.ananta/">Instagram</a></li>
                            <li><a href="https://shopee.co.id/klambi.ananta">Shopee</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=6281928222022&text=Hallo admin Klambi Ananta, saya ingin menanyakan seputar product Klambi Ananta">Whatsapp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="https://api.whatsapp.com/send?phone=6281928222022&text=Hallo admin Klambi Ananta, saya ingin menanyakan seputar product Klambi Ananta" target="_blank">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
    <script src="../ananta/js/jquery-3.3.1.min.js"></script>
    <script src="../ananta/js/bootstrap.min.js"></script>
    <script src="../ananta/js/jquery.nice-select.min.js"></script>
    <script src="../ananta/js/jquery.nicescroll.min.js"></script>
    <script src="../ananta/js/jquery.magnific-popup.min.js"></script>
    <script src="../ananta/js/jquery.countdown.min.js"></script>
    <script src="../ananta/js/jquery.slicknav.js"></script>
    <script src="../ananta/js/mixitup.min.js"></script>
    <script src="../ananta/js/owl.carousel.min.js"></script>
    <script src="../ananta/js/main.js"></script>
</body>

</html>
