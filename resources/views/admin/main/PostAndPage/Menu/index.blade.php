<div>
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
                            data-bs-target="#add">+ Tambah menu</button>
                        <div wire:ignore class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Tambah menu</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="addCategory" class="needs-validation container" novalidate="">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Nama menu:</label>
                                                <input wire:model="name" autofocus class="form-control" type="text" required>
                                                <div class="invalid-feedback">Nama menu wajib diisi</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                                <input wire:model="link" autofocus class="form-control" type="text">
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
                                <li class="dd-item dd3-item" data-menu_id="{{ $d->menu_id }}" data-urut="{{ $d->urut }}" data-name="{{ $d->name }}">
                                    <div class="dd-handle dd3-handle"></div><div class="dd3-content">
                                        {{ $d->name }}
                                        @if($d->link != NULL)
                                        <span class="badge badge-danger rounded-pill" style="margin-left: 15px;">Link</span>
                                        @endif
                                        <a href="javascript:void(0)" class="text-danger" style="float: right; margin-right: 5px;"><span class="badge badge-danger rounded-pill"><i class="fa fa-trash-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{ $d->menu_id }}"></i></span></a>
                                        <a href="javascript:void(0)" wire:click.prevent="edit({{ $d->menu_id }})" class="text-primary" style="float: right; margin-right: 5px;"><span class="badge badge-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#edit-{{ $d->menu_id }}"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div class="modal fade" id="delete-{{ $d->menu_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Hapus menu</h5>
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
                                                    <label wire:click.prevent="deleteCategory({{ $d->menu_id }})" class="btn btn-secondary" type="submit" data-bs-dismiss="modal"
                                                        aria-label="Close">Hapus</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div wire:ignore class="modal fade" id="edit-{{ $d->menu_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Ubah menu</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form wire:submit.prevent="editCategory" class="needs-validation container" novalidate="">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input wire:model="menu_id" type="hidden" value="{{ $menu_id }}">
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="recipient-name">Nama menu:</label>
                                                            <input wire:model="name" autofocus class="form-control" type="text" value="{{ $d->name }}">
                                                            <div class="invalid-feedback">Nama menu wajib diisi</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                                            <input wire:model="link" class="form-control" type="text" value="{{ $d->link }}">
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
                                        @foreach(\App\Models\Menu::where('parent_id', $d->menu_id)->orderBy('urut',
                                        'ASC')->get() as $c)
                                        <li class="dd-item dd3-item"
                                        data-menu_id="{{ $c->menu_id }}" data-urut="{{ $c->urut }}" data-child="{{ $c->child }}">
                                            <div class="dd-handle dd3-handle"></div><div class="dd3-content">
                                                {{ $c->name }}
                                                @if($d->link != NULL)
                                                <span class="badge badge-danger rounded-pill" style="margin-left: 15px;">Link</span>
                                                @endif
                                                <a href="javascript:void(0)" class="text-danger" style="float: right; margin-right: 5px;"><span class="badge badge-danger rounded-pill"><i class="fa fa-trash-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete2-{{ $c->menu_id }}"></i></span></a>
                                                <a href="javascript:void(0)" wire:click.prevent="edit({{ $c->menu_id }})" class="text-primary" style="float: right; margin-right: 5px;"><span class="badge badge-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#edit2-{{ $c->menu_id }}"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
                                            </div>
                                            <div class="modal fade" id="delete2-{{ $c->menu_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Hapus menu</h5>
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
                                                            <label wire:click.prevent="deleteCategory({{ $c->menu_id }})" class="btn btn-secondary" type="submit" data-bs-dismiss="modal"
                                                                aria-label="Close">Hapus</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div wire:ignore class="modal fade" id="edit2-{{ $c->menu_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Ubah menu</h5>
                                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form wire:submit.prevent="editCategory" class="needs-validation container" novalidate="">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <input wire:model="menu_id" type="hidden" value="{{ $menu_id }}">
                                                                <div class="mb-3">
                                                                    <label class="col-form-label" for="recipient-name">Nama menu:</label>
                                                                    <input wire:model="name" autofocus class="form-control" type="text" value="{{ $c->name }}">
                                                                    <div class="invalid-feedback">Nama menu wajib diisi</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="col-form-label" for="recipient-name">Link (Kosongkan jika tidak ingin menggunakan link):</label>
                                                                    <input wire:model="link" class="form-control" type="text" value="{{ $c->link }}">
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

                        <form action="{{ route('admin-sort-menu') }}" method="POST">
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
</div>
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
// console.log(window.JSON.stringify(list.nestable('serialize')));
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
