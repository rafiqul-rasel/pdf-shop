@extends('layouts.layout')
@section('content')
<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">

    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="{{asset('frontend/images/header-slider/home-v1/header-slide.jpg')}}" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Online Pdf Library Management</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-default">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="{{asset('frontend/images/header-slider/home-v1/header-slide.jpg')}}" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Online Pdf Library </h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-default">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="{{asset('frontend/images/header-slider/home-v1/header-slide.jpg')}}" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Online Pdf Library </h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-default">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
</div>
<!-- End: Slider Section -->

<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>What are you looking for at the library?</h3>
            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="keywords">Search by Keyword</label>
                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="catalog" id="catalog" class="form-control">
                            <option>Search the Catalog</option>
                            <option>Catalog 01</option>
                            <option>Catalog 02</option>
                            <option>Catalog 03</option>
                            <option>Catalog 04</option>
                            <option>Catalog 05</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option>All Categories</option>
                            <option>Category 01</option>
                            <option>Category 02</option>
                            <option>Category 03</option>
                            <option>Category 04</option>
                            <option>Category 05</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End: Search Section -->

<!-- Start: Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-wrap">
                    <div class="welcome-text">
                        <h2 class="section-title">Welcome to the libraria</h2>
                        <span class="underline left"></span>
                        <p class="lead">The standard chunk of Lorem Ipsum used since</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>
                        <a class="btn btn-primary" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-counter">
                    <ul>
                        <li class="bg-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>eBooks<strong class="fact-counter">2000</strong></span>
                            </div>
                        </li>
                        <li class="bg-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>eAudio<strong class="fact-counter">2450</strong></span>
                            </div>
                        </li>
                        <li class="bg-red">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>Magazine<strong class="fact-counter">1450</strong></span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image"></div>
</section>
<!-- End: Welcome Section -->

<!-- Start: Category Filter -->
<section class="category-filter section-padding">
    <div class="container">
        <div class="center-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="section-title">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                </div>
            </div>
        </div>
        <div class="filter-buttons">
            <div class="filter btn" data-filter="all">All Releases</div>
            @foreach($categories as $cat)
            <div class="filter btn" data-filter=".{{$cat->name}}">{{$cat->name}}</div>
            @endforeach
        </div>
    </div>
    <div id="category-filter">
        <ul class="category-list">
            @foreach($books as $book)
            <li class="category-item {{categoryById($book->bookcatagories_id)->name}}">
                <figure>
                    <img src="{{asset('images/'.$book->thumbnail)}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>{{$book->book_title}}</h4>
                            <span class="author"><strong>Author:</strong> {{authorById($book->author_id)->name}}</span>
                            <span class="author"><strong>ISBN:</strong> {{$book->isbn}}</span>
                            {{--<div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>--}}
                            <p>{{$book->description}}</p>
                           {{-- <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>--}}
                            <ol>
                                <li>
                                    <a href="{{route('addtocart',$book->id)}}">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                {{--<li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>--}}
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            @endforeach
           <!-- <li class="category-item kids-teens">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-02.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item video">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-03.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item audio">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-04.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item books">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-05.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item magazines">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-06.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item adults">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-07.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="category-item kids-teens">
                <figure>
                    <img src="{{asset('frontend/images/category-filter/home-v1/category-filter-img-08.jpg')}}" alt="New Releaase" />
                    <figcaption class="bg-orange">
                        <div class="info-block">
                            <h4>The Great Gatsby</h4>
                            <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                            <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            <ol>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </figcaption>
                </figure>
            </li>
            -->
        </ul>
        <div class="center-content">
           {{-- <a href="#" class="btn btn-primary">View More</a>--}}
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- Start: Category Filter -->








@endsection
