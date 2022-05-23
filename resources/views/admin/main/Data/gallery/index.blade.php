<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>IMAGE GALLERY</h5><br>
                        <button type="button" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#create"
                            class="btn btn-pill btn-primary" title="" data-bs-original-title="btn btn-pill btn-primary"
                            data-original-title="btn btn-pill btn-success">+ Tambah gallery</button>

                        <div wire:ignore.self class="modal fade" id="create" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Tambah gallery</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="addGallery">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Nama:</label>
                                                <input autofocus class="form-control" type="text" wire:model="name">
                                                @error('name') <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Gambar:</label>
                                                <input wire:model="image" class="form-control" type="file"
                                                    data-bs-original-title="" title="" required="">
                                                @error('image') <span class="error text-danger">{{ $message }}</span>
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
                    <div class="my-gallery card-body row gallery-with-description" itemscope="">
                        @foreach($galleries as $gallery)
                        <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                href="{{ asset('storage/gallery/'.$gallery->image) }}" itemprop="contentUrl"
                                data-size="1600x950"><img src="{{ asset('storage/gallery/'.$gallery->image) }}" itemprop="thumbnail"
                                    alt="Image description">
                                <div class="caption">
                                    <h4 class="text-center">{{ $gallery->name }}</h4>
                                    <button wire:click="deleteGallery({{ $gallery->gallery_id }})" class="btn btn-danger" style="width: 100%;">Hapus</button>
                                </div>
                            </a>
                            <figcaption itemprop="caption description">
                                <h4 class="text-center">{{ $gallery->name }}</h4>
                            </figcaption>
                        </figure>
                        @endforeach
                    </div>
                    <!-- Root element of PhotoSwipe. Must have class pswp.-->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="pswp__bg"></div>
                        <div class="pswp__scroll-wrap">
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>
                            <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left"
                                    title="Previous (arrow left)"></button>
                                <button class="pswp__button pswp__button--arrow--right"
                                    title="Next (arrow right)"></button>
                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
