@extends('admin.template')

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Zero Configuration</h5><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
            <br>
            <a href="{{ route('admin-add-post') }}" class="btn btn-pill btn-primary" title="" data-bs-original-title="btn btn-pill btn-primary" data-original-title="btn btn-pill btn-success">+ Tambah post</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    {{-- <th>Isi</th> --}}
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $post->title }}</td>
                    <td><a href="{{ route('admin-post') }}">{{ $post->category->name }}</a></td>
                    {{-- <td>{!! Str::limit($post->content, 255) !!}</td> --}}
                    <td>
                      <a href="{{ route('admin-edit-post', $post->post_id) }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="{{ route('admin-delete-post', $post->post_id) }}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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