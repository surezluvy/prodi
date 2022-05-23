<div>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Zero Configuration</h5><span>DataTables has most features enabled by default, so all you
                            need to
                            do to use it with your own tables is to call the construction
                            function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness
                            will
                            be immediately added to the table, as shown in this example.</span>
                        <br>
                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#create"
                            class="btn btn-pill btn-primary" title="" data-bs-original-title="btn btn-pill btn-primary"
                            data-original-title="btn btn-pill btn-success" wire:click="clear()">+ Tambah category</button>

                        <div wire:ignore.self class="modal fade" id="create" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Tambah category</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="addCategory">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Nama:</label>
                                                <input wire:model="name" autofocus class="form-control" type="text">
                                                @error('name') <span class="error text-danger">{{ $message }}</span>
                                                @enderror
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
                            <table class="table">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <button wire:click.prevent="edit({{ $category->category_id }})" type="button" aria-hidden="true" data-bs-toggle="modal"
                                                data-bs-target="#edit-{{ $category->category_id }}"
                                                class="btn btn-primary"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i></button>
                                            <button type="button" aria-hidden="true" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $category->category_id }}"
                                                class="btn btn-danger"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <div wire:ignore class="modal fade" id="edit-{{ $category->category_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Ubah category</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form wire:submit.prevent="editCategory({{ $category->category_id }})"
                                                    class="needs-validation container" novalidate="">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="recipient-name">Nama
                                                                category:</label>
                                                            <input autofocus class="form-control" type="text"
                                                                wire:model="name" value="{{ $category->name }}" required>
                                                            <div class="invalid-feedback">Nama category wajib diisi</div>
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
                                    <div class="modal fade" id="delete-{{ $category->category_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Hapus category</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Apakah anda
                                                            yakin akan menghapus category
                                                            <strong>{{ $category->name }}</strong>?</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button wire:click="deleteCategory({{ $category->category_id }})"
                                                        class="btn btn-secondary" type="submit" data-bs-dismiss="modal">Hapus</button>
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

</div>
