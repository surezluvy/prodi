@extends('admin.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header">
                    <h5>Default Summer note</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('admin-add-post-process') }}"
                                enctype="multipart/form-data" class="needs-validation container" novalidate="">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input name="title" class="form-control" type="text"
                                                    data-bs-original-title="" title="" placeholder="Masukan judul"
                                                    required>
                                                <div class="invalid-feedback">Judul wajib diisi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Menu</label>
                                            <div class="col-sm-9">
                                                <select name="menu_id" class="custom-select form-select" required>
                                                    <option selected="">Pilih menu</option>
                                                    @foreach($menus as $c)
                                                    {{-- @if(\App\Models\Post::where('menu_id',
                                                    $c->menu_id)->first())
                                                        <option value="{{ $c->menu_id }}">{{ $c->name }}</option>
                                                    @endif --}}

                                                    @if(!\App\Models\Page::where('menu_id',
                                                    $c->menu_id)->first())
                                                        <option value="{{ $c->menu_id }}">{{ $c->name }}</option>
                                                    @endif
                                                    {{-- <!-- <option value="{{ $c->menu_id }}">{{ $c->name }} --}}
                                                        @if(\App\Models\Post::where('menu_id', $c->menu_id)->first())
                                                                - [POST]
                                                            @elseif(\App\Models\Page::where('menu_id', $c->menu_id)->first()))
                                                                - [PAGE]
                                                            @elseif(\App\Models\Post::where('menu_id', $c->menu_id)->first() && \App\Models\Page::where('menu_id', $c->menu_id)->first()))
                                                                - [POST, PAGE]
                                                        @endif
                                                    {{-- </option> --}}
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">menu wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-9">
                                                <select name="category_id" class="custom-select form-select">
                                                    <option selected="" value="">Kosong</option>
                                                    @foreach($categories as $c)
                                                    <option value="{{ $c->category_id }}">{{ $c->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">menu wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Thumbnail</label>
                                            <div class="col-sm-9">
                                                <input name="thumbnail" class="form-control" type="file"
                                                    data-bs-original-title="" title="" required>
                                                <div class="invalid-feedback">Thumbnail wajib diisi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <textarea class="form-control" name="content">
                                        Isi konten anda disini
                                    </textarea>
                                    <div class="invalid-feedback">Konten wajib diisi.</div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-block">Terbitkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
    tinymce.init({
    selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar_mode: 'floating',
    });
    @endsection
