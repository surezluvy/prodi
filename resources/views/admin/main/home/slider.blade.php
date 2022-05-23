@extends('admin.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Zero Configuration</h5><span>DataTables has most features enabled by default, so all you need to
                        do to use it with your own tables is to call the construction
                        function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will
                        be immediately added to the table, as shown in this example.</span>
                    <br>
                    <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#create" class="btn btn-pill btn-primary" title=""
                        data-bs-original-title="btn btn-pill btn-primary"
                        data-original-title="btn btn-pill btn-success">+ Tambah slider</button>

                    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Tambah slider</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('admin-add-slider') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Judul:</label>
                                            <input autofocus class="form-control" type="text" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Sub judul:</label>
                                            <input class="form-control" type="text" name="subtitle">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Background:</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->title }}</td>
                                    <td>{{ $k->subtitle }}</td>
                                    <td><img src="{{ asset('storage/slider/'.$k->image) }}" height="150" width="300"></td>
                                    <td>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#edit-{{ $k->slider_id }}"
                                            class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{ $k->slider_id }}"
                                            class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="edit-{{ $k->slider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Ubah slider</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="{{ route('admin-edit-slider', $k->slider_id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Judul:</label>
                                                        <input autofocus class="form-control" type="text" name="title" value="{{ $k->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Sub Judul:</label>
                                                        <input class="form-control" type="text" name="subtitle" value="{{ $k->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Background:</label>
                                                        <input class="form-control" type="file" name="image">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button class="btn btn-primary" type="submit">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete-{{ $k->slider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Hapus slider</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="recipient-name">Apakah anda yakin akan menghapus slider <strong>{{ $k->title }}</strong>?</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <a href="{{ route('admin-delete-slider', $k->slider_id) }}" class="btn btn-secondary" type="submit">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Zero Configuration  Ends-->
    </div>
</div>
@endsection
