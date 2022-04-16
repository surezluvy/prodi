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
                    
                    <button class="btn btn-primary btn-pill" type="button" data-bs-toggle="modal"
                        data-bs-target="#add">+ Tambah kategori</button>
                    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Tambah kategori</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('admin-add-category') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Nama kategori:</label>
                                            <input autofocus class="form-control" type="text" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                            <input autofocus class="form-control" type="text" name="link">
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

                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach($menus as $d)
                            <li class="dd-item dd3-item" data-category_id="{{ $d->category_id }}" data-urut="{{ $d->urut }}" data-name="{{ $d->name }}">
                                <div class="dd-handle dd3-handle"></div><div class="dd3-content">
                                    {{ $d->name }}
                                    @if($d->link != NULL) 
                                    <span class="badge badge-danger rounded-pill" style="margin-left: 15px;">Link</span>
                                    @endif
                                    <a href="#" class="text-danger" style="float: right; margin-right: 5px;"><span class="badge badge-danger rounded-pill"><i class="fa fa-trash-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{ $d->category_id }}"></i></span></a>
                                    <a href="#" class="text-primary" style="float: right; margin-right: 5px;"><span class="badge badge-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#edit-{{ $d->category_id }}"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
                                </div>
                                <div class="modal fade" id="delete-{{ $d->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                    <label class="col-form-label" for="recipient-name">Apakah anda yakin akan menghapus menu <strong>{{ $d->name }}</strong>?</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <a href="{{ route('admin-delete-category', $d->category_id) }}" class="btn btn-secondary" type="submit">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit-{{ $d->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Ubah kategori</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="{{ route('admin-edit-category', $d->category_id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Nama kategori:</label>
                                                        <input autofocus class="form-control" type="text" name="name" value="{{ $d->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                                        <input autofocus class="form-control" type="text" name="link" value="{{ $d->link }}">
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
                                <ol class="dd-list">
                                    @foreach(\App\Models\Category::where('parent_id', $d->category_id)->orderBy('urut',
                                    'ASC')->get() as $c)
                                    <li class="dd-item dd3-item"
                                    data-category_id="{{ $c->category_id }}" data-urut="{{ $c->urut }}" data-child="{{ $c->child }}">
                                        <div class="dd-handle dd3-handle"></div><div class="dd3-content">
                                            {{ $c->name }}
                                            @if($d->link != NULL) 
                                            <span class="badge badge-danger rounded-pill" style="margin-left: 15px;">Link</span>
                                            @endif
                                            <a href="#" class="text-danger" style="float: right; margin-right: 5px;"><span class="badge badge-danger rounded-pill"><i class="fa fa-trash-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete2-{{ $c->category_id }}"></i></span></a>
                                            <a href="#" class="text-primary" style="float: right; margin-right: 5px;"><span class="badge badge-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#edit2-{{ $c->category_id }}"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
                                        </div>
                                        <div class="modal fade" id="delete2-{{ $c->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                            <label class="col-form-label" for="recipient-name">Apakah anda yakin akan menghapus menu <strong>{{ $c->name }}</strong>?</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <a href="{{ route('admin-delete-category', $c->category_id) }}" class="btn btn-secondary" type="submit">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="edit2-{{ $c->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Ubah kategori</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form method="post" action="{{ route('admin-edit-category', $c->category_id) }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="recipient-name">Nama kategori:</label>
                                                                <input autofocus class="form-control" type="text" name="name" value="{{ $c->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                                                <input autofocus class="form-control" type="text" name="link" value="{{ $c->link }}">
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
                                    </li>
                                    @endforeach
                                </ol>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                    
                    <form action="{{ route('admin-sort-category') }}" method="POST">
                        @csrf
                        {{-- <textarea id="test" name="test"></textarea> --}}
                        {{-- <input type="text" id="ayam" name="test" required> --}}
                        <textarea  id="ayam" hidden name="test" required cols="100" rows="10"></textarea>
                        <br>
                        
                        <button type="submit" class="btn btn-block btn-primary">Save</button>
                        {{-- <input type="submit" value="Kirim"> --}}
                    </form>
                </div>
            </div>
        </div>
        <!-- Zero Configuration  Ends-->
    </div>
</div>
@endsection
@section('script')
$(document).ready(function()
{
var updateOutput = function(e)
{
var list = e.length ? e : $(e.target),
output = list.data('output');
if (window.JSON) {
output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
$('#ayam').val(window.JSON.stringify(list.nestable('serialize')));
console.log(window.JSON.stringify(list.nestable('serialize')));
} else {
output.val('JSON browser support required for this demo.');
}
};
// console.log(window.JSON.stringify(list.nestable('serialize')));
// activate Nestable for list 1
$('#nestable').nestable({
group: 1,
})
.on('change', updateOutput);

// activate Nestable for list 2
$('#nestable2').nestable({
group: 1
})
.on('change', updateOutput);

// output initial serialised data
updateOutput($('#nestable').data('output', $('#nestable-output')));
// updateOutput($('#nestable2').data('output', $('#nestable2-output')));

$('#nestable-menu').on('click', function(e)
{
var target = $(e.target),
action = target.data('action');
if (action === 'expand-all') {
$('.dd').nestable('expandAll');
}
if (action === 'collapse-all') {
$('.dd').nestable('collapseAll');
}
});

$('#nestable3').nestable();

});

@endsection
