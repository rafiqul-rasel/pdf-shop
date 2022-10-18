@extends('layouts.layout')
@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books & Media Listing</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Books & Media</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-full-width">
                    <div class="container">
                        <!-- Start: Search Section -->
                        <section class="search-filters">
                            <div class="filter-box">
                                <h3>What are you looking for at the library?</h3>
                                <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
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
                            <div class="clear"></div>
                        </section>
                        <!-- End: Search Section -->


                        <div class="booksmedia-fullwidth">
                            <ul>
                                @foreach($books as $book)
                                <li>
                                    <div class="book-list-icon blue-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img src="{{asset('images/'.$book->thumbnail)}}" alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">{{$book->book_title}}</a></h4>
                                                <p><strong>Author:</strong>  {{authorById($book->author_id)->name}}</p>
                                                <p><strong>ISBN:</strong>  {{$book->isbn}}</p>
                                            </header>
                                            <p>{{$book->description}}</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('addtocart',$book->id)}}" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                   {{-- <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Share">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>--}}
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <nav class="navigation pagination text-center">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
                                <a class="page-numbers" href="#.">1</a>
                                <span class="page-numbers current">2</span>
                                <a class="page-numbers" href="#.">3</a>
                                <a class="page-numbers" href="#.">4</a>
                                <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </nav>
                    </div>
                    <!-- Start: Staff Picks -->

                    <!-- End: Staff Picks -->
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->
@endsection
