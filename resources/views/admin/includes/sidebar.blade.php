<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="{{ route('admin-dashboard') }}">
            @if($setting->logo == null)
            <img class="img-fluid for-light" style="width: 97px" src="{{ asset('storage/setting/logo.png') }}" alt="">
            <img class="img-fluid for-dark" style="width: 97px" src="{{ asset('storage/setting/logo.png') }}" alt="">
            @else
            <img class="img-fluid for-light" style="width: 97px" src="{{ asset('storage/setting/'.$setting->logo) }}" alt="">
            <img class="img-fluid for-dark" style="width: 97px" src="{{ asset('storage/setting/'.$setting->logo) }}" alt="">
            @endif
        </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin-dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/admin/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin-dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets/admin/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                        href="{{ route('admin-dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Home</h6>
                            <p class="">Ubah halaman Home</p>
                        </div>
                    </li>


                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                        href="{{ route('admin-setting') }}"><i data-feather="settings"></i><span>Setting</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                        href="{{ route('admin-slider') }}"><i data-feather="image"></i><span>Slider</span></a></li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Post dan Page</h6>
                            <p class="">Menambah atau mengubah post dan page</p>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                        href="{{ route('admin-menu') }}"><i data-feather="menu"></i><span>Menu</span></a></li>
                    <li class="sidebar-list"><a href="javascript:void(0)" class="sidebar-link sidebar-title"><i
                                data-feather="file-text"></i><span>Post</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin-post') }}">Semua Post</a></li>
                            <li><a href="{{ route('admin-add-post') }}">Tambah Post</a></li>
                            <li><a href="{{ route('admin-category') }}">Kategori</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a href="javascript:void(0)" class="sidebar-link sidebar-title"><i
                                data-feather="file-text"></i><span>Page</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin-page') }}">Semua Page</a></li>
                            <li><a href="{{ route('admin-add-page') }}">Tambah page</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Data</h6>
                            <p class="">Menambah atau mengubah data</p>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin-dosen') }}"><i data-feather="users"></i><span>Dosen</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin-kurikulum') }}"><i data-feather="book-open">
                            </i><span>Kurikulum</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin-prestasi') }}"><i data-feather="thumbs-up"> </i><span>Prestasi</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin-gallery') }}"><i
                                data-feather="image"> </i><span>Galery</span></a></li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
