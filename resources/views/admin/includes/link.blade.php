<div class="container-fluid">        
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>{{ $url }}</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">                                       <i data-feather="home"></i></a></li>
            {{-- <li class="breadcrumb-item">{{ url()->previous() }}</li> --}}
            <li class="breadcrumb-item active">{{ $url }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>