<div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper"><a href="{{ route('admin-dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets/admin/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/admin/images/logo/logo_dark.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="{{ route('admin-dashboard') }}"><img class="img-fluid" src="{{ asset('assets/admin/images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="{{ route('admin-dashboard') }}"><img class="img-fluid" src="{{ asset('assets/admin/images/logo/logo-icon.png') }}" alt=""></a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6 class="lan-8">Applications</h6>
                <p class="lan-9">Ready to use Apps</p>
              </div>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"></i><span>Post</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ route('admin-category') }}">Kategori</a></li>
                <li><a href="{{ route('admin-post') }}">Post</a></li>
                <li><a href="{{ route('admin-page') }}">Pages</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin-dosen') }}"><i data-feather="users"></i><span>Dosen</span></a></li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin-kurikulum') }}"><i data-feather="book-open"> </i><span>Kurikulum</span></a></li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin-prestasi') }}"><i data-feather="heart"> </i><span>Prestasi</span></a></li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="bookmark.html"><i data-feather="heart"> </i><span>Galery</span></a></li>

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>