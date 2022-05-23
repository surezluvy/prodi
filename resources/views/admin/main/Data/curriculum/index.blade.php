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
                        data-original-title="btn btn-pill btn-success">+ Tambah kurikulum</button>

                    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Tambah kurikulum</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('admin-add-kurikulum') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Kode:</label>
                                            <input class="form-control" type="text" name="code">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Nama:</label>
                                            <input autofocus class="form-control" type="text" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Syarat Ambil:</label>
                                            <input class="form-control" type="text" name="syarat_ambil">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Syarat Lulus:</label>
                                            <input class="form-control" type="text" name="syarat_lulus">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Jenis MK:</label>
                                            <input class="form-control" type="text" name="jenis_mk">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">SKS:</label>
                                            <input class="form-control" type="number" name="sks">
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
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Syarat Ambil</th>
                                    <th>Syarat Lulus</th>
                                    <th>Jenis MK</th>
                                    <th>SKS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kurikulum as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->code }}</td>
                                    <td>{{ $k->name }}</td>
                                    <td>{{ $k->syarat_ambil }}</td>
                                    <td>{{ $k->syarat_lulus }}</td>
                                    <td>{{ $k->jenis_mk }}</td>
                                    <td>{{ $k->sks }}</td>
                                    <td>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#edit-{{ $k->kurikulum_id }}"
                                            class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{ $k->kurikulum_id }}"
                                            class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="edit-{{ $k->kurikulum_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Ubah kurikulum</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="{{ route('admin-edit-kurikulum', $k->kurikulum_id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Kode:</label>
                                                        <input class="form-control" type="text" name="code" value="{{ $k->code }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Nama:</label>
                                                        <input autofocus class="form-control" type="text" name="name" value="{{ $k->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Syarat Ambil:</label>
                                                        <input class="form-control" type="text" name="syarat_ambil" value="{{ $k->syarat_ambil }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Syarat Lulus:</label>
                                                        <input class="form-control" type="text" name="syarat_lulus"
                                                            value="{{ $k->syarat_lulus }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Jenis MK:</label>
                                                        <input class="form-control" type="text" name="jenis_mk"
                                                            value="{{ $k->jenis_mk }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">SKS:</label>
                                                        <input class="form-control" type="number" name="sks"
                                                            value="{{ $k->sks }}">
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
                                <div class="modal fade" id="delete-{{ $k->kurikulum_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Hapus kurikulum</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="recipient-name">Apakah anda yakin akan menghapus kurikulum <strong>{{ $k->name }}</strong>?</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <a href="{{ route('admin-delete-kurikulum', $k->kurikulum_id) }}" class="btn btn-secondary" type="submit">Hapus</a>
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
