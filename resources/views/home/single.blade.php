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
                            <h1 class="breadcrumbs-title">{{ $post->title }}</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li>{{ $post->title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->
        <div id="react-contact" class="react-contact-page pt---100">
            <div class="container">
                
                {!! $post->content !!}

            </div>
        </div>
    </div>
</div>
@endsection
