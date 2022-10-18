<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>Welcome To Online Pdf Library </title>

    <!-- Favicon -->
    <link href="{{asset('frontend/images/favicon.ico')}}" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="{{asset('frontend/css/mmenu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>

    <![endif]-->

</head>

<body>

<!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="{{route('homepage')}}">
                                        <h3>Online Pdf Library</h3>

                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+8801715252670</a>
                                        <span>/</span>
                                        <a href="mailto:tasnim@gmail.com"><i class="fa fa-envelope"></i>afsaraera2500@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        <a href="{{route('login')}}"><i class="fa fa-lock">

                                            </i>
                                            @if(!Auth::check())
                                                Login
                                            @else
                                            DashBoard
                                                @endif
                                        </a> / <a href="{{route('register')}}"><i class="fa fa-unlock"></i>Register</a>
                                        <span>|</span>
                                        <div class="header-cart dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <small>{{\Cart::getContent()->count()}}</small>
                                            </a>
                                            <div class="dropdown-menu cart-dropdown">
                                                <ul>
                                                    @foreach(\Cart::getContent() as $item)
                                                    <li class="clearfix">
                                                        <img src="{{asset('images/'.$item->associatedModel->thumbnail)}}" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">{{$item->name}}</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> {{authorById($item->associatedModel->author_id)->name}}</div>
                                                            <div class="price">{{$item->quantity}} X ${{$item->price}}</div>
                                                        </div>
                                                        <a class="remove" href="{{route('removetocart',$item->id)}}"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    @endforeach
                                                   {{-- <li class="clearfix">
                                                        <img src="{{asset('frontend/images/header-cart-image-02.jpg')}}" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="{{asset('frontend/images/header-cart-image-03.jpg')}}" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>--}}
                                                </ul>
                                                <div class="cart-total">
                                                    <div class="title">SubTotal</div>
                                                    <div class="price">${{Cart::getSubTotal()}}</div>
                                                </div>
                                                <div class="cart-buttons">
                                                    <a href="{{route('cart')}}" class="btn btn-dark-gray">View Cart</a>
                                                    <a href="{{route('checkout')}}" class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('homepage')}}">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('booksMedia')}}">Books</a>
                                </li>



                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navigation</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="{{route('homepage')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('booksMedia')}}">Books</a>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">Blog</a>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->

@yield('content')
<!-- Start: Social Network -->
<section class="social-network section-padding">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Follow Us</h2>
            <span class="underline center"></span>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <ul>
            <li>
                <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                </a>
            </li>
            <li>
                <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                </a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                </a>
            </li>
            <li>
                <a class="rss" href="#" target="_blank">
                            <span>
                                <i class="fa fa-rss"></i>
                            </span>
                </a>
            </li>
            <li>
                <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                </a>
            </li>
            <li>
                <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End: Social Network -->
<!-- Start: Footer -->
<footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">About Libraria</h3>
                        <span class="underline left"></span>
                        <div class="textwidget">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                        </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:support@libraria.com">afsaraera2500@gmail.com</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:012-345-6789">+8801715252670</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Quick Links</h3>
                        <span class="underline left"></span>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="#">Library News</a></li>
                                <li><a href="#">History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Timing</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Sat - Thu: 9 am - 9 pm</time>

                            <ul>
                                <li><a href="#">Closings</a></li>
                                <li><a href="#">Branches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" href="">tasnim &copy All right Reserved</a></p>
                </div>
                <div class="col-md-9 pull-right">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="books-media-list-view.html">Books &amp; Media</a></li>


                        <li><a href="services.html">Services</a></li>

                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>

<!-- jQuery Easing -->

<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('frontend/js/mmenu.min.js')}}"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="{{asset('frontend/js/harvey.min.js')}}"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="{{asset('frontend/js/waypoints.min.js')}}"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="{{asset('frontend/js/facts.counter.min.js')}}"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="{{asset('frontend/js/mixitup.min.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Accordion -->
<script type="text/javascript" src="{{asset('frontend/js/accordion.min.js')}}"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="{{asset('frontend/js/responsive.tabs.min.js')}}"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="{{asset('frontend/js/responsive.table.min.js')}}"></script>

<!-- Masonry -->
<script type="text/javascript" src="{{asset('frontend/js/masonry.min.js')}}"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="{{asset('frontend/js/carousel.swipe.min.js')}}"></script>

<!-- bxSlider -->
<script type="text/javascript" src="{{asset('frontend/js/bxslider.min.js')}}"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>

</body>


</html>
