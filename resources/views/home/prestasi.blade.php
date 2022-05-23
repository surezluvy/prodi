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
                <h2 class="text-center">Prestasi Terbaru</h2>                   
                <div class="row">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th scope="col">No. </th>
                          <th scope="col">Nama</th>
                          <th scope="col">Angkatan</th>
                          <th scope="col">Kejuaraan</th>
                          <th scope="col">Peringkat</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($prestasi as $s)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $s->name }}</td>
                          <td>{{ $s->angkatan }}</td>
                          <td>{{ $s->kejuaraan }}</td>
                          <td>{{ $s->peringkat }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>                
    </div>
        
</div>
@endsection