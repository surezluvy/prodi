@extends('admin.template')

@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Website setting</h4>
                        <div class="card-options"><a class="card-options-collapse" href="javascript:void(0)"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="javascript:void(0)" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin-setting-process') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->setting_id }}">
                            <div class="mb-3">
                                <label class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo"  value="{{ $data->logo }}">
                            </div>
                            <div class="mb-3">
                                <h6 class="form-label">Title</h6>
                                <input type="text" class="form-control" placeholder="Masukan nama website" name="title" value="{{ $data->title }}">
                            </div>
                            <div class="mb-3">
                                <h6 class="form-label">Description</h6>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $data->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" placeholder="0812345678910" name="phone" value="{{ $data->phone }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email-Address</label>
                                <input type="email" class="form-control" placeholder="your-email@domain.com" name="email"  value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" placeholder="http://Uplor .com" name="facebook" value="{{ $data->facebook }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Twitter</label>
                                <input type="text" class="form-control" placeholder="http://Uplor .com" name="twitter" value="{{ $data->twitter }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" placeholder="http://Uplor .com" name="instagram"  value="{{ $data->instagram }}">
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
