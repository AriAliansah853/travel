<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="profile" />
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="mb-2 font-weight-bold">ARI TEST</span>
                    <span class="text-secondary text-small">Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        @php
        $currentMenu = null;
        @endphp

        @foreach ($menus as $menu)
        <!-- Menampilkan menu utama jika belum ditampilkan -->
        @if (!isset($currentMenu) || $currentMenu->menu_id != $menu->menu_id)
        <li class="nav-item">
            @if($menu->nama_submenu != '' || $menu->nama_submenu != null)
            <a class="nav-link" data-bs-toggle="collapse" href="#menu-{{ $menu->menu_id }}" aria-expanded="false"
                aria-controls="menu-{{ $menu->menu_id }}">
                @else
                <a class="nav-link" href="{{ $menu->menuUrl }}">

                    @endif

                    <span class="menu-title">{{ $menu->nama_menu }}</span>
                    @if($menu->nama_submenu != '')
                    <i class="menu-arrow"></i>
                    @endif
                    <i class="{{ $menu->icon }}"></i>

                </a>
                @if($menu->nama_submenu != '' || $menu->nama_submenu != null)
                <div class="collapse" id="menu-{{ $menu->menu_id }}">
                    <ul class="nav flex-column sub-menu">


                        @foreach ($menus as $submenu)
                        @if ($submenu->menu_id == $menu->menu_id && $submenu->submenu_id != null)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $submenu->url }}">{{ $submenu->nama_submenu }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                @endif
        </li>
        @php
        $currentMenu = $menu; // Menandai bahwa menu ini sudah ditampilkan
        @endphp
        {{-- @else
        <!-- Menampilkan menu biasa jika tidak ada submenu -->

        <li class="nav-item">
            <a class="nav-link" href="{{ $menu->url ?? '#' }}">
                <span class="menu-title">{{ $menu->nama_menu }}</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li> --}}
        @endif
        @endforeach

        <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html" target="_blank">
                <span class="menu-title">Documentation</span>
                <i class="mdi mdi-file-document-box menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>