@extends('home.template')
@section('content')
<div class="react-wrapper">

    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/main/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                <img class="mobile" src="{{ asset('assets/main/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">{{ ucfirst($page->title) }}</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li>{{ ucfirst($page->title) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <div class="instructors___page pt---120 pb---140">
            <div class="container pb---60">                        
                <div class="row">
                	@foreach($dosen as $d)
                    <div class="col-lg-3">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/main/images/instructors/1.jpg') }}" alt="course instructor">
                                <div class="content__hover">
                                    <p>Why I say old chap that is spiffing he legged easy peasy.</p>
                                    <ul>                                            
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>                                    
                            <div class="bottom-content"> 
                                <h4><a href="#">{{ $d->name }}</a></h4>
                                <p>{{ $d->education }}</p>
                                <p>{{ $d->expertise }}</p>
                            </div>                                 
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>                
    </div>
        
</div>
@endsection