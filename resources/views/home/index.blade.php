@extends('home.template')
@section('content')
<div class="react-wrapper">
    <div class="react-wrapper-inner">

        <!--================= Slider Section Start Here =================-->
        <div class="react-slider-part">
            <div class="home-sliders home2 owl-carousel">
                <div class="single-slide">
                    <div class="slider-img">
                        <img class="desktop" src="{{ asset('assets/main/images/slider/1.jpg') }}"
                            alt="Slider Image 1">
                        <img class="mobile" src="{{ asset('assets/main/images/slider/11.jpg') }}"
                            alt="Slider Image 1">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <div class="content-part">
                                <span class="slider-pretitle">Great Quality Cocial life</span>
                                <h2 class="slider-title">
                                    Discover the world of<br>
                                    possible university.
                                </h2>
                                <div class="slider-btn">
                                    <a href="about.html" class="react-btn-border">Admissions</a>
                                </div>
                            </div>
                        </div>
                        <div class="event__video-btn--play">
                            <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                class="event__video-btn--play-btn custom-popup">
                                <i class="arrow_triangle-right"></i>
                                <em>Watch Video <br>Intro</em>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slider-img">
                        <img class="desktop" src="{{ asset('assets/main/images/slider/2.jpg') }}"
                            alt="Slider Image 1">
                        <img class="mobile" src="{{ asset('assets/main/images/slider/12.jpg') }}"
                            alt="Slider Image 1">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <div class="content-part">
                                <span class="slider-pretitle">Great Quality Cocial life</span>
                                <h2 class="slider-title">
                                    Discover the world of<br>
                                    possible university.
                                </h2>
                                <div class="slider-btn">
                                    <a href="about.html" class="react-btn-border">Admissions</a>
                                </div>
                            </div>
                        </div>
                        <div class="event__video-btn--play">
                            <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                class="event__video-btn--play-btn custom-popup">
                                <i class="arrow_triangle-right"></i>
                                <em>Watch Video <br>Intro</em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Slider Section End Here =================-->

        <!--=================  Service Section Start Here ================= -->
        <div class="react_popular_topics pt---100 pb---70">
            <div class="container">
                <div class="react__title__section text-left">
                    <h2 class="react__tittle">Academics</h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/main/images/service/1.png') }}" alt="image">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="coureses-grid.html">Let’s Talk Science</a></h3>
                                <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/main/images/service/2.png') }}" alt="image">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="coureses-grid.html">Innovative Courses</a></h3>
                                <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/main/images/service/3.png') }}" alt="image">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="coureses-grid.html">Cloud Storage</a></h3>
                                <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/main/images/service/4.png') }}" alt="image">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="coureses-grid.html">Online Education</a></h3>
                                <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================  Service Section End Here ================= -->

        <!--=================  About Section Start Here ================= -->
        <div class="about__area about__area_one p-relative pt---10 pb---120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{ asset('assets/main/images/about/ab.png') }}" alt="About">
                            <img class="react__shape__ab" src="{{ asset('assets/main/images/about/badge.png') }}"
                                alt="Shape Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h2 class="about__title">Welcome to <br> <em>Echooling LMS Platform</em></h2>
                            <p class="about__paragraph">Education is both the act of teaching knowledge to others
                                and<br> the act of receiving knowledge from someone else.</p>
                            <p class="about__paragraph2"> Have questions? <a href="#"> Get Free Guide </a></p>
                            <p>Education also refers to the knowledge received through schooling instruction <br>and
                                to the institution of teaching as a whole. The main purpose of education <br>is the
                                integral development of a person.</p>
                            <ul>
                                <li><a href="about.html" class="more-about"> Read More <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a></li>
                                <li class="last-li">
                                    <em>Get Support</em>
                                    <a href="mailto:support@react.com">support@react.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= About Section End Here ================= -->

        <!--=================  Campus Section Start Here ================= -->
        <div class="campus_sec pt---100 pb---110">
            <div class="container">
                <div class="react__title__section text-center">
                    <h2 class="react__tittle">Campus Life</h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about__content">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/main/images/campus/1.svg') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>Do More, Stress Less</h4>
                                        <p>Why I say old chap that is spiffing he legged <br>it in my flat easy
                                            peasy.</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/main/images/campus/2.svg') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>The Business Intelligence</h4>
                                        <p>Why I say old chap that is spiffing he legged <br>it in my flat easy
                                            peasy.</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/main/images/campus/3.svg') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>System Administration</h4>
                                        <p>Why I say old chap that is spiffing he legged <br>it in my flat easy
                                            peasy.</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about__image">
                            <img src="{{ asset('assets/main/images/campus/4.png') }}" alt="image">
                            <img class="shape-1" src="{{ asset('assets/main/images/campus/shape.png') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="more-about"> More about Campus Life <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div>
        </div>
        <!--================= Campus Section End Here ================= -->

        <!--================= Popular Course Section Start Here =================-->
        <div class="popular__course__area pt---100 pb---100">
            <div class="container">
                <div class="react__title__section text-center">
                    <h2 class="react__tittle">Popular Courses</h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="course__item mb-30">
                            <div class="course__thumb">
                                <a href="coureses-single.html"><img
                                        src="{{ asset('assets/main/images/course/1.png') }}" alt="image"></a>
                            </div>
                            <div class="course__inner">
                                <ul>
                                    <li>UX Design</li>
                                    <li>24 Lessons</li>
                                </ul>
                                <h3 class="react-course-title"><a href="coureses-single.html">Dave conservatoire is
                                        the<br> Entirely free online.</a></h3>
                                <div class="course__card-icon d-flex align-items-center">
                                    <div class="course__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>77 Students</span>
                                    </div>
                                    <div class="react__user">
                                        $68.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course__item mb-30">
                            <div class="course__thumb">
                                <a href="coureses-single.html"><img
                                        src="{{ asset('assets/main/images/course/2.png') }}" alt="image"></a>
                            </div>
                            <div class="course__inner">
                                <ul>
                                    <li>UX Design</li>
                                    <li>39 Lessons</li>
                                </ul>
                                <h3 class="react-course-title"><a href="coureses-single.html">Strategy law and <br>
                                        Organization foundation.</a></h3>
                                <div class="course__card-icon d-flex align-items-center">
                                    <div class="course__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>99 Students</span>
                                    </div>
                                    <div class="react__user">
                                        $99.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course__item mb-30">
                            <div class="course__thumb">
                                <a href="coureses-single.html"><img
                                        src="{{ asset('assets/main/images/course/3.png') }}" alt="image"></a>
                            </div>
                            <div class="course__inner">
                                <ul>
                                    <li>UX Design</li>
                                    <li>20 Lessons</li>
                                </ul>
                                <h3 class="react-course-title"><a href="coureses-single.html">Python for Data
                                        Science & <br> Machine Learning</a></h3>
                                <div class="course__card-icon d-flex align-items-center">
                                    <div class="course__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>68 Students</span>
                                    </div>
                                    <div class="react__user">
                                        $79.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course__item mb-30">
                            <div class="course__thumb">
                                <a href="coureses-single.html"><img
                                        src="{{ asset('assets/main/images/course/4.png') }}" alt="image"></a>
                            </div>
                            <div class="course__inner">
                                <ul>
                                    <li>UX Design</li>
                                    <li>26 Lessons</li>
                                </ul>
                                <h3 class="react-course-title"><a href="coureses-single.html">The complete web
                                        develop <br>Ment bootcamp.</a></h3>
                                <div class="course__card-icon d-flex align-items-center">
                                    <div class="course__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>84 Students</span>
                                    </div>
                                    <div class="react__user">
                                        $120.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="view-courses"> View All Courses <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div>
        </div>
        <!--================= Popular Course Section End Here =================-->

        <!--================= Counter Section Start Here =================-->
        <div class="count__area pb---110">
            <div class="container count__width">
                <div class="row">
                    <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <p class="count__content--paragraph">Successfully <br>Trained</p>
                                    <h3 class="count__content--title-1 counter">1478</h3>
                                    <p class="count__content--paragraph2">Enrolled Learners</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <p class="count__content--paragraph">Available <br>Courses</p>
                                    <h3 class="count__content--title-1 counter">1731</h3>
                                    <p class="count__content--paragraph2">Countrywide Awards</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <p class="count__content--paragraph">Scheduled <br>Events</p>
                                    <h3 class="count__content--title-1 counter">280</h3>
                                    <p class="count__content--paragraph2">Success Events</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <p class="count__content--paragraph">Getting <br>Featured on</p>
                                    <h3 class="count__content--title-1 counter">1045</h3>
                                    <p class="count__content--paragraph2">Online Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Counter Section End Here =================-->

        <!--================= Upcoming Event Section Start Here =================-->
        <div class="react-upcoming__event blog__area">
            <div class="container">
                <div class="react__title__section text-center">
                    <h2 class="react__tittle">Upcoming Events</h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="event-slider owl-carousel">
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="event__card--date"><em>10</em> April, 2022</div>
                                <div class="event_time">10:30 AM - 12:30PM</div>
                                <h3 class="event__card--title"><a href="#">A Better Alternative To <br> Grading
                                        Student Writing</a></h3>
                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> New York, USA</div>
                                <a class="event__card--link" href="#"> Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="event__card--date"><em>14</em> February, 2022</div>
                                <div class="event_time">12:00 AM - 01:30PM</div>
                                <h3 class="event__card--title"><a href="#">12 Things Successful <br> Mompreneurs</a>
                                </h3>
                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> New York, USA</div>
                                <a class="event__card--link" href="#"> Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="event__card--date"><em>26</em> March, 2022</div>
                                <div class="event_time">01:30 AM - 02:00PM</div>
                                <h3 class="event__card--title"><a href="#">Ethics in AI Live Event<br> Machines
                                        Judging.</a></h3>
                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> New York, USA</div>
                                <a class="event__card--link" href="#"> Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="event__card--date"><em>19</em> April, 2022</div>
                                <div class="event_time">03:00 AM - 04:30PM</div>
                                <h3 class="event__card--title"><a href="#">The Importance Of <br> Intrinsic
                                        Motivation.</a></h3>
                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> New York, USA</div>
                                <a class="event__card--link" href="#"> Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="event__card">
                        <div class="event__card--content">
                            <div class="event__card--content-area">
                                <div class="event__card--date"><em>10</em> April, 2022</div>
                                <div class="event_time">10:30 AM - 12:30PM</div>
                                <h3 class="event__card--title"><a href="#">A Better Alternative To <br> Grading
                                        Student Writing</a></h3>
                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> New York, USA</div>
                                <a class="event__card--link" href="#"> Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Upcoming Event Section End Here =================-->
        <!--================= Clients Section Start Here =================-->
        <div class="react-clients react-clientso home-testimonial pt---90 pb---120">
            <div class="container">
                <div class="react__title__section text-center">
                    <h2>What our student saying</h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="container">
                    <div class="client-slider owl-carousel">
                        <div class="single-client">
                            <div class="client-bottom">
                                <span class="client-author"><img
                                        src="{{ asset('assets/main/images/testimonial/testimonial.png') }}"
                                        alt="Testimonials"> </span>
                            </div>
                            <div class="client-content">
                                <span class="client-title">Justin Case <em> Student</em></span>
                                <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur
                                    sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis
                                    quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span><em>4.9</em> (14 Reviews)</span>
                                </div>
                                <img class="comma" src="{{ asset('assets/main/images/testimonial/coma.png') }}"
                                    alt="image">
                            </div>
                        </div>
                        <div class="single-client">
                            <div class="client-bottom">
                                <span class="client-author"><img
                                        src="{{ asset('assets/main/images/testimonial/testimonial.png') }}"
                                        alt="Testimonials"> </span>
                            </div>
                            <div class="client-content">
                                <span class="client-title">Justin Case <em> Student</em></span>
                                <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur
                                    sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis
                                    quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                                <div class="testimonial__ratings">
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star"></em>
                                    <em class="icon_star_alt"></em>
                                    <span><em>4.9</em> (14 Reviews)</span>
                                </div>
                                <img class="comma" src="{{ asset('assets/main/images/testimonial/coma.png') }}"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Clients Section End Here =================-->

        <!--================= Blog Section Start Here =================-->
        <div class="react-blog__area blog__area pt---120 pb---120 graybg-home">
            <div class="container blog__width">
                <div class="react__title__section text-center">
                    <h2 class="react__tittle"> Echooling News and Blogs </h2>
                    <img src="{{ asset('assets/main/images/line.png') }}" alt="image">
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="blog__card mb-50">
                            <div class="blog__thumb w-img p-relative">
                                <a class="blog__thumb--image" href="blog-details.html">
                                    <img src="{{ asset('assets/main/images/blog/1.jpg') }}"
                                        alt="This the first card image">
                                </a>
                                <em class="b_date">April 12</em>
                            </div>
                            <div class="blog__card--content">
                                <div class="blog__card--content-area mb-25">
                                    <span class="blog__card--date">Campaigns</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">Fostering future
                                            Schools <br> & social Innovation</a></h3>
                                </div>
                                <div class="blog__card--icon ">
                                    <div class="blog__card--icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>Nerte Gronw</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="blog__card mb-50">
                            <div class="blog__thumb w-img p-relative">
                                <a class="blog__thumb--image" href="blog-details.html">
                                    <img src="{{ asset('assets/main/images/blog/2.jpg') }}"
                                        alt="This the first card image">
                                </a>
                                <em class="b_date">April 18</em>
                            </div>
                            <div class="blog__card--content">
                                <div class="blog__card--content-area mb-25">
                                    <span class="blog__card--date">Education</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">The Surprising Reason
                                            <br> CollegeTuition</a></h3>
                                </div>
                                <div class="blog__card--icon d-flex align-items-center">
                                    <div class="blog__card--icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>Charlie Doyle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="blog__card mb-50">
                            <div class="blog__thumb w-img p-relative">
                                <a class="blog__thumb--image" href="blog-details.html">
                                    <img src="{{ asset('assets/main/images/blog/3.jpg') }}"
                                        alt="This the first card image">
                                </a>
                                <em class="b_date">June 16</em>
                            </div>
                            <div class="blog__card--content">
                                <div class="blog__card--content-area mb-25">
                                    <span class="blog__card--date">Students</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">Those other <br>
                                            College Expenses about</a></h3>
                                </div>
                                <div class="blog__card--icon d-flex align-items-center">
                                    <div class="blog__card--icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>Owen Christ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="blog__card mb-50">
                            <div class="blog__thumb w-img p-relative">
                                <a class="blog__thumb--image" href="blog-details.html">
                                    <img src="{{ asset('assets/main/images/blog/3.jpg') }}"
                                        alt="This the first card image">
                                </a>
                                <em class="b_date">May 22</em>
                            </div>
                            <div class="blog__card--content">
                                <div class="blog__card--content-area mb-25">
                                    <span class="blog__card--date">Strategy</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">Those other <br>
                                            College Expenses about</a></h3>
                                </div>
                                <div class="blog__card--icon d-flex align-items-center">
                                    <div class="blog__card--icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>Owen Christ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Blog Section End Here =================-->
    </div>
</div>
@endsection