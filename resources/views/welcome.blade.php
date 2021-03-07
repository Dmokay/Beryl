@extends('layouts.main')

@section('content')


    <div class="hero-area">

        <div class="hero-slides owl-carousel">

            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg2.jpg);"></div>

            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
        </div>

        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">

                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{url('blog')}}">Beryl</a>
                                </div>
                            </div>

                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Blogging</a>
                                </div>
                            </div>

                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Journey</a>
                                </div>
                            </div>

                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html"> Complex</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">
                <div class="post-content-area mb-50">

                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">Don’t Miss</li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="index.html#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2" data-toggle="tab" href="index.html#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Style hunter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3" data-toggle="tab" href="index.html#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Vogue</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                                            <div class="single-blog-post">

                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b1.jpg" alt="">

                                                    <div class="post-cta"><a href="index.html#">1</a></div>
                                                </div>

                                                <div class="post-content">
                                                    <a href="index.html#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                    <div class="post-meta">
                                                        <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-blog-post">

                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b2.jpg" alt="">

                                                    <div class="post-cta"><a href="index.html#">2</a></div>
                                                </div>

                                                <div class="post-content">
                                                    <a href="index.html#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                    <div class="post-meta">
                                                        <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-blog-post">

                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b3.jpg" alt="">

                                                    <div class="post-cta"><a href="index.html#">3</a></div>
                                                </div>

                                                <div class="post-content">
                                                    <a href="index.html#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                    <div class="post-meta">
                                                        <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-blog-post">

                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b3.jpg" alt="">

                                                    <div class="post-cta"><a href="index.html#">4</a></div>
                                                </div>

                                                <div class="post-content">
                                                    <a href="index.html#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                    <div class="post-meta">
                                                        <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b10.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b11.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b12.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b12.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b1.jpg" alt="">

                                                <div class="post-cta"><a href="index.html#">make</a></div>
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                </a>
                                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b10.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b11.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b12.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b13.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b1.jpg" alt="">

                                                <div class="post-cta"><a href="index.html#">travel</a></div>
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                </a>
                                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b10.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b11.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b12.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-blog-post post-style-2 d-flex align-items-center">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b13.jpg" alt="">
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="world-catagory-area mt-50">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="title">What's Trending</li>

                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b2.jpg" alt="">

                                                <div class="post-cta"><a href="index.html#">travel</a></div>
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                </a>
                                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">

                                            <div class="post-thumbnail">
                                                <img src="img/blog-img/b3.jpg" alt="">

                                                <div class="post-cta"><a href="index.html#">travel</a></div>
                                            </div>

                                            <div class="post-content">
                                                <a href="index.html#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                </a>
                                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>

                                                <div class="post-meta">
                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">

                                            <div class="single-cata-slide">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b14.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b15.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b16.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b17.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-cata-slide">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b17.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b15.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b14.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">

                                                            <div class="post-thumbnail">
                                                                <img src="img/blog-img/b16.jpg" alt="">
                                                            </div>

                                                            <div class="post-content">
                                                                <a href="index.html#" class="headline">
                                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                </a>

                                                                <div class="post-meta">
                                                                    <p><a href="index.html#" class="post-author">Katy Liu</a> on <a href="index.html#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
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
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">

                    <div class="sidebar-widget-area">
                        <h5 class="title">About World</h5>
                        <div class="widget-content">
                            <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
                        </div>
                    </div>

                    <div class="sidebar-widget-area">
                        <h5 class="title">Top Stories</h5>
                        <div class="widget-content">

                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">

                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b11.jpg" alt="">
                                </div>

                                <div class="post-content">
                                    <a href="index.html#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">

                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b13.jpg" alt="">
                                </div>

                                <div class="post-content">
                                    <a href="index.html#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">

                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b12.jpg" alt="">
                                </div>

                                <div class="post-content">
                                    <a href="index.html#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget-area">
                        <h5 class="title">Stay Connected</h5>
                        <div class="widget-content">
                            <div class="social-area d-flex justify-content-between">
                                <a href="index.html#"><i class="fa fa-facebook"></i></a>
                                <a href="index.html#"><i class="fa fa-twitter"></i></a>
                                <a href="index.html#"><i class="fa fa-pinterest"></i></a>
                                <a href="index.html#"><i class="fa fa-vimeo"></i></a>
                                <a href="index.html#"><i class="fa fa-instagram"></i></a>
                                <a href="index.html#"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget-area">
                        <h5 class="title">Today’s Pick</h5>
                        <div class="widget-content">

                            <div class="single-blog-post todays-pick">

                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b22.jpg" alt="">
                                </div>

                                <div class="post-content px-0 pb-0">
                                    <a href="index.html#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
