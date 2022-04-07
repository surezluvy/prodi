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
                    <a href="{{ route('admin-add-post') }}" class="btn btn-pill btn-primary" title=""
                        data-bs-original-title="btn btn-pill btn-primary"
                        data-original-title="btn btn-pill btn-success">+ Tambah post</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>NIDN</th>
                                    <th>Pendidikan</th>
                                    <th>Bidang Keahlian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dosens as $dosen)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dosen->name }}</td>
                                    <td>{{ $dosen->code }}</td>
                                    <td>{{ $dosen->nidn }}</td>
                                    <td>
                                    @foreach($dosen->education as $pendidikan)
                                        {{ $pendidikan->name }},&nbsp;
                                    @endforeach
                                    </td>
                                    <td>
                                    @foreach($dosen->expertise as $keahlian)
                                        {{ $keahlian->name }},&nbsp;
                                    @endforeach
                                    </td>
                                    <td>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#edit-{{ $dosen->lecturer_id }}"
                                            class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{ $dosen->lecturer_id }}"
                                            class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="edit-{{ $dosen->lecturer_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Ubah kategori</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="{{ route('admin-edit-dosen', $dosen->lecturer_id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Nama dosen:</label>
                                                        <input autofocus class="form-control" type="text" name="name" value="{{ $dosen->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Kode:</label>
                                                        <input class="form-control" type="text" name="code" value="{{ $dosen->code }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">NIDN:</label>
                                                        <input class="form-control" type="text" name="nidn" value="{{ $dosen->nidn }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Riwayat Pendidikan:</label>
                                                        <input class="form-control" type="hidden" name="educationId" 
                                                            value="@foreach($dosen->education as $pendidikan){{ $pendidikan->education_id }}, @endforeach"
                                                        >
                                                        <input class="form-control" type="text" name="education" 
                                                            value="@foreach($dosen->education as $pendidikan){{ $pendidikan->name }}, @endforeach"
                                                        >
                                                        {{-- @foreach($dosen->education as $pendidikan)
                                                            <input class="form-control" type="text" name="education-{{ $pendidikan->education_id }}" value="{{ $pendidikan->name }}">
                                                        @endforeach --}}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Bidang Keahlian:</label>
                                                        <input class="form-control" type="hidden" name="expertiseId" 
                                                            value="@foreach($dosen->expertise as $keahlian){{ $keahlian->expertise_id }}, @endforeach"
                                                        >
                                                        <input class="form-control" type="text" name="expertise" 
                                                            value="@foreach($dosen->expertise as $keahlian){{ $keahlian->name }}, @endforeach"
                                                        >
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
                                <div class="modal fade" id="delete-{{ $dosen->lecturer_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Hapus kategori</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="col-form-label" for="recipient-name">Apakah anda yakin akan menghapus menu <strong>{{ $dosen->name }}</strong>?</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <a href="{{ route('admin-delete-category', $dosen->lecturer_id) }}" class="btn btn-secondary" type="submit">Hapus</a>
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
