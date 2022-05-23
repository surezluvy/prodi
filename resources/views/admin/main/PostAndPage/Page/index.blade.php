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
                    <a href="{{ route('admin-add-page') }}" class="btn btn-pill btn-primary" title=""
                        data-bs-original-title="btn btn-pill btn-primary"
                        data-original-title="btn btn-pill btn-success">+ Tambah page</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>menu</th>
                                    {{-- <th>Isi</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td><a href="{{ route('admin-page') }}">{{ $page->menu->name }}</a></td>
                                    {{-- <td>{!! Str::limit($page->content, 255) !!}</td> --}}
                                    <td>
                                        <a href="{{ route('admin-edit-page', $page->page_id) }}"
                                            class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin-delete-page', $page->page_id) }}"
                                            class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
