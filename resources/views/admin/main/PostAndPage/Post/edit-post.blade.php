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
                            <form method="post" action="{{ route('admin-edit-post-process', $post->post_id) }}"
                                enctype="multipart/form-data" class="needs-validation container" novalidate="">
                                @csrf
                                <input type="hidden" name="id" value="{{ $post->post_id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input name="title" class="form-control" type="text"
                                                    data-bs-original-title="" title="" placeholder="Masukan judul"
                                                    required value="{{ $post->title }}">
                                                <div class="invalid-feedback">Judul wajib diisi</div>
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
                                                    <option selected="" value="{{ $post->menu_id }}">{{ $post->menu->name }}</option>
                                                    <option disabled value="">------------------------------</option>
                                                    @foreach($menus as $c)
                                                    @if(!\App\Models\Page::where('menu_id',
                                                    $c->menu_id)->first())
                                                        <option value="{{ $c->menu_id }}">{{ $c->name }}</option>
                                                    @endif
                                                        @if(\App\Models\Post::where('menu_id', $c->menu_id)->first())
                                                                - [POST]
                                                            @elseif(\App\Models\Page::where('menu_id', $c->menu_id)->first()))
                                                                - [PAGE]
                                                            @elseif(\App\Models\Post::where('menu_id', $c->menu_id)->first() && \App\Models\Page::where('menu_id', $c->menu_id)->first()))
                                                                - [POST, PAGE]
                                                        @endif
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
                                                    @if($post->category_id != null)
                                                        <option selected="" value="{{ $post->category_id }}">{{ $post->category->name }}</option>
                                                        <option disabled value="">------------------------------</option>
                                                    @endif
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
                                                    data-bs-original-title="" title="">
                                                <div class="invalid-feedback">Thumbnail wajib diisi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
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
                                </div> --}}
                                <div>
                                    <textarea class="form-control" name="content">
                                        {{ $post->content }}
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
