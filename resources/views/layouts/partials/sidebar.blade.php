<aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ Storage::url($setting->path_image) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $setting->nama_aplikasi }}</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (!empty(auth()->user()->path_image) && Storage::disk('public')->exists(auth()->user()->path_image))
                    <img src="{{ Storage::url(auth()->user()->path_image) }}" alt="logo"
                        class="img-circle elevation-2" style="width: 35px; height: 35px;">
                @else
                    <img src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg') }}" alt="logo"
                        class="img-circle elevation-2" style="width: 35px; height: 35px;">
                @endif
            </div>
            <div class="info">
                <a href="{{ route('profile.show') }}" class="d-block" data-toggle="tooltip" data-placement="top"
                    title="Edit Profil">
                    {{ auth()->user()->name }}
                    <i class="fas fa-pencil-alt ml-2 text-sm text-primary"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-header">MENU</li>
                @can('Dashboard Index')
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                @endcan

                @can('Trash Index')
                    <li class="nav-item">
                        <a href="{{ route('trash.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-trash-alt"></i>
                            <p>
                                Master Data Sampah
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Data Jenis Sampah
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none">
                            @can('Organik Index')
                                <li class="nav-item">
                                    <a href="{{ route('organik.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Organik</p>
                                    </a>
                                </li>
                            @endcan

                            @can('Anorganik Index')
                                <li class="nav-item">
                                    <a href="{{ route('anorganik.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Anorganik</p>
                                    </a>
                                </li>
                            @endcan

                            @can('Logam Index')
                                <li class="nav-item">
                                    <a href="{{ route('logam.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Logam</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('Konfigurasi Index')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Konfigurasi
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none">
                            @can('User Index')
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            @endcan

                            @can('Role Index')
                                <li class="nav-item">
                                    <a href="{{ route('role.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Role</p>
                                    </a>
                                </li>
                            @endcan

                            @can('Permission Index')
                                <li class="nav-item">
                                    <a href="{{ route('permission.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permission</p>
                                    </a>
                                </li>
                            @endcan

                            @can('Group Permission Index')
                                <li class="nav-item">
                                    <a href="{{ route('permissiongroups.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Group Permission</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('Pengaturan Index')
                    <li class="nav-item">
                        <a href="{{ route('setting.index') }}"
                            class="nav-link {{ request()->is('setting*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Pengaturan
                            </p>
                        </a>
                    </li>
                @endcan
            </ul>
        </nav>
    </div>
</aside>
