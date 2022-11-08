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

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                    <a href="{{url('/')}}"><img src="../images/market/logo_klambi.jpeg" style="height:161px;" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active"><a href="{{url('/product')}}">Product</a></li>
                            <li><a href="{{url('/contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{url('/')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest Product</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($baju as $y)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{url('images/baju/gambar1/'. $y->gambar1)}}">
                                </div>
                                <div class="product__item__text">
                                    <h6>{{$y->nama}}</h6>
                                    <a href="{{url('bajuLengkap/'. $y->id)}}" class="add-cart">{{$y->nama}}</a>
                                    <h5> Rp. {{number_format ($y->harga)}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

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
