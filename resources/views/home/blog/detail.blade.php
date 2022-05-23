@extends('home.template')
@section('body-class', 'course-single blog-post-page blog-post-single-page')
@section('content')
<div class="react-wrapper">
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/main/images/breadcrumbs/3.jpg') }}" alt="Breadcrumbs">
                <img class="mobile" src="{{ asset('assets/main/images/breadcrumbs/33.jpg') }}" alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <a href="#" class="cate">Education</a>
                            <h1 class="breadcrumbs-title">{{ $post->title }}</h1>
                            <ul class="user-section">
                                <li class="user">
                                    <span><img src="{{ asset('assets/main/images/course-single/user.jpg') }}" alt="user"></span>
                                    <span>Admin</span>
                                </li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> {{ $post->created_at->format('d M Y') }}</li>
                                {{-- <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> 716 views</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--================= Course Filter Section Start Here =================-->
        <div class="back__course__page_grid react-courses__single-page pb---40 pt---110">
            <div class="container pb---70">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-inner">
                            <div class="blog-content">
                                {!! $post->content !!}

                                <div class="blog-tags">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <ul class="mata-tags">
                                                <li class="tags">Tags:</li>
                                                <li><a href="#">Education</a></li>
                                                <li><a href="#">Elerning</a></li>
                                                <li><a href="#">Design</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="share-course">Share this post:
                                            <em><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></em>
                                                <span>
                                                    <a href="#"><i aria-hidden="true" class="social_facebook"></i></a>
                                                    <a href="#"><i aria-hidden="true" class="social_twitter"></i></a>
                                                    <a href="#"><i aria-hidden="true" class="social_linkedin"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/main/images/blog/author.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Sara Mening</h4>
                                        <p>Lectus quam id leo in vitae turpis nisl pretium fusce id velit tortor. Dignissim cras tincidunt lobortis feugiat. Facilisis sed odio morbi quis commodo odio.</p>
                                        <div class="designation">
                                            <a href="#"><i aria-hidden="true" class="social_facebook"></i></a>
                                            <a href="#"><i aria-hidden="true" class="social_twitter"></i></a>
                                            <a href="#"><i aria-hidden="true" class="social_linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="single-nav">
                                    <div class="back-prev"> <a href="#"><i class="back-icon arrow_carrot-left"></i> PREV POST <em>Graduate Admissions</em></a> </div>
                                    <div class="back-next"><a href="#"> NEXT POST <i class="back-icon arrow_carrot-right"></i> <em> Less is More</em></a></div>
                                </div> --}}

                                {{-- <div class="react-course-filter related__course">
                                    <h3>Blog Terbaru</h3>
                                    <div class="row">
                                        @foreach($newpost as $new)
                                        <div class="single-studies col-md-4 grid-item">
                                            <div class="inner-course">
                                                <div class="case-img">
                                                    <a href="#" class="cate-w">{{ $new->created_at->format('d M Y') }}</a>
                                                    <img src="{{ asset('storage/thumbnail/'.$new->thumbnail) }}" alt="Course Image">
                                                </div>
                                                <div class="case-content">
                                                    <em class="cate-camp">Campaigns </em>
                                                    <h4 class="case-title"> <a href="coureses-single.html">{{ $new->title }}</a></h4>
                                                    <div class="react__user">
                                                        <img src="{{ asset('assets/main/images/course/small-image/1.png') }}" alt="user"> Admin
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div> --}}
                                {{-- <div class="author-comment">
                                    <h4 class="title-comments">3 Comments</h4>
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="image-comments"><img src="{{ asset('assets/main/images/course-single/user2.jpg') }}" alt=""> </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="dsc-comments">
                                                        <h6>Neal Adams <span class="reply"> <span class="date">July 23, 2022 at 11:24 pm</span></span></h6>
                                                        <p>Geeza show off show off pick your nose and blow off the BBC lavatory a blinding shot cack spend a penny bugger all mate show off pick your nose brolly.</p>
                                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="image-comments"><img src="{{ asset('assets/main/images/course-single/user.jpg') }}" alt=""> </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="dsc-comments">
                                                        <h6>Jim Séchen <span class="reply"> <span class="date">May 11, 2022 at 14:44 pm</span></span></h6>
                                                        <p>The little rotter my good sir faff about Charles bamboozled I such a fibber tomfoolery at public school.</p>
                                                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="image-comments"><img src="{{ asset('assets/main/images/course-single/user3.jpg') }}" alt=""> </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="dsc-comments">
                                                        <h6>Justin Case <span class="reply"> <span class="date">July 21, 2022 at 17:44 pm</span></span> </h6>
                                                        <p>The little rotter my good sir faff about Charles bamboozled I such a fibber tomfoolery at public school.</p>
                                                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}

                                {{-- <div class="back-blog-form">
                                    <div id="blog-form" class="blog-form">
                                        <h3>Leave a Reply</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="back-textarea">
                                                        <textarea placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input type="text" name="name" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input type="email" name="email" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="back-input">
                                                        <input type="text" name="website" placeholder="Website">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="back-check-box">
                                                        <input type="checkbox" id="box-1"> Save my name, email, and website in this browser for the next time I comment.
                                                    </div>
                                                    <button type="submit" class="back-btn">Submit Comment <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mt-60">
                        <div class="react-sidebar ml----30">
                            <div class="widget back-search">
                                <h3 class="widget-title">Search</h3>
                                <form>
                                    <input type="text" name="input" placeholder="Search...">
                                    <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </button>
                                </form>
                            </div>
                            <div class="widget back-post">
                                <h3 class="widget-title">Blog terbaru</h3>
                                <ul class="related-courses">
                                    @foreach($newpost as $new)
                                    <li>
                                        <a href="{{ route('post-detail', $new->post_id) }}"><span class="post-images"><img src="{{ asset('storage/thumbnail/'.$new->thumbnail) }}" alt="post"></span></a>
                                        <div class="titles">
                                            <h4><a href="{{ route('post-detail', $new->post_id) }}">{{ $new->title }}</a></h4>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> {{ $new->created_at->format('d M Y') }}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <div class="widget react-categories-course">
                                <h3 class="widget-title">Course categories</h3>
                                <ul class="recent-category">
                                    <li> <a href="#">Art & Design <em>(6)</em></a></li>
                                    <li> <a href="#">Exercise <em>(4)</em></a></li>
                                    <li> <a href="#">Photography <em>(8)</em></a></li>
                                    <li> <a href="#">Environmental Sciences <em>(3)</em></a></li>
                                    <li> <a href="#">Software Training <em>(5)</em></a></li>
                                    <li> <a href="#">Software Development <em>(2)</em></a></li>
                                    <li> <a href="#">Music <em>(10)</em></a></li>
                                    <li> <a href="#">Material Design <em>(2)</em></a></li>
                                    <li> <a href="#">Technology <em>(7)</em></a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="widget widget-tags">
                                <h3 class="widget-title">Tags</h3>
                                <ul class="tags">
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Solutions</a></li>
                                    <li><a href="#">UX</a></li>
                                    <li><a href="#">Case Study</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Insights</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Course Filter Section End Here =================-->

    </div>
</div>
@endsection
