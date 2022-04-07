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
                                    <th>Pendidikan <small class="text-secondary">*Click pada pendidikan untuk mengubah</small></th>
                                    <th>Bidang Keahlian <small class="text-secondary">*Click pada keahlian untuk mengubah</small></th>
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
                                        <a href="#">
                                        @foreach($dosen->education as $pendidikan)
                                            {{ $pendidikan->name }},&nbsp;
                                        @endforeach
                                        </a>
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
