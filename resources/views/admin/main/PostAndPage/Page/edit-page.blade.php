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
                            <form method="post" action="{{ route('admin-edit-page-process', $page->page_id) }}"
                                enctype="multipart/form-data" class="needs-validation container" novalidate="">
                                @csrf
                                <input type="hidden" name="id" value="{{ $page->page_id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input name="title" class="form-control" type="text"
                                                    data-bs-original-title="" title=""value="{{ $page->title }}"
                                                    required>
                                                <div class="invalid-feedback">Judul wajib diisi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jenis</label>
                                            <div class="col-sm-9">
                                                <select  name="type" class="custom-select form-select" required>
                                                    <option value="{{ $page->type }}" selected="">{{ ucfirst($page->type) }}</option>
                                                    <option value="{{ $page->type }}" disabled readonly>---------------------</option>
                                                    <option value="dosen">Dosen</option>
                                                    <option value="kurikulum">Kurikulum</option>
                                                    <option value="prestasi">Prestasi</option>
                                                    <option value="galeri">Geleri</option>
                                                </select>
                                                <div class="invalid-feedback">Jenis wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">menu</label>
                                            <div class="col-sm-9">
                                                <select name="menu_id" class="custom-select form-select" required>
                                                    <option value="{{ $page->menu_id }}" selected="">{{ $page->category->name }}</option>
                                                    <option value="{{ $page->menu_id }}" disabled readonly>---------------------</option>
                                                    @foreach($categories as $cat)
                                                        @if(!\App\Models\Post::where('menu_id', $cat->menu_id)->first())
                                                                <option value="{{ $cat->menu_id }}">{{ $cat->name }}</option>
                                                        @endif
                                                        @if(\App\Models\Post::where('menu_id', $cat->menu_id)->first())
                                                                - [POST]
                                                        @endif
                                                        @if(\App\Models\Page::where('menu_id', $cat->menu_id)->first())
                                                                - [PAGE]
                                                        @endif

                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">menu wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <textarea class="form-control" name="content" placeholder="Isi konten anda disini">{{ $page->content }}
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
