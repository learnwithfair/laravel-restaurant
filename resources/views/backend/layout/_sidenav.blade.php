@php
    //Database Connection
    $obj = new DatabaseConnection(); // create class
    $logo = $obj->FooterLogo(); //Get Footer Logo
    $miniLogo = $obj->miniLogoConnection(); //Get Mini Logo
@endphp

{{-- For Profile Logo  --}}
@if ($_SERVER['PHP_SELF'] != '/index.php/user/profile')
    {{-- For Dashboard --}}
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
            class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top reload-logo-area">
            @foreach ($logo as $logo)
                <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img
                        src="{{ asset('uploads/logo/' . $logo->image) }}" alt="logo" /></a>
            @endforeach
            <a class="sidebar-brand brand-logo-mini" href="{{ route('home') }}"><img class="rounded-circle"
                    src="https://ui-avatars.com/api/?name={{ $miniLogo }}&background=191c24&color=ffffff&rounded=true&size=64&bold=true"
                    alt="logo" style="height: 50px;width:50px;border:1px solid white;" /></a>
        </div>
        <ul class="nav" id="menuItems">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator" style="width:35px !important">
                            @php
                                $profilePhoto = Auth::user()->profile_photo_url;
                                $Photo = Auth::user()->image;
                            @endphp
                            @if ($Photo == null)
                                <img class="img-xs rounded-circle" src="{{ $profilePhoto }}" alt="" />
                            @else
                                <img class="img-xs rounded-circle" src="{{ asset("storage/profileImages/$Photo") }}"
                                    alt="" />
                            @endif
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                            @if (Auth::user()->profession)
                                <span>{{ Auth::user()->profession }}</span>
                            @else
                                <span>Set Profession</span>
                            @endif
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                            class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                        aria-labelledby="profile-dropdown">
                        <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('all-admin-details.index') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-convert"></i>
                    </span>
                    <span class="menu-title">Admin</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('logo') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chemical-weapon"></i>
                    </span>
                    <span class="menu-title">Logo</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#home-slider" aria-expanded="false"
                    aria-controls="home-slider">
                    <span class="menu-icon">
                        <i class="mdi mdi-home"></i>
                    </span>
                    <span class="menu-title">Home</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="home-slider">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('hero-area') }}">Hero Area</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/manage_slider') }}">Manage Slider</a>
                        </li>

                    </ul>
                </div>
            </li>

            {{-- Product start --}}
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                    aria-controls="home-slider">
                    <span class="menu-icon">
                        <i class="fa-brands fa-product-hunt"></i>
                    </span>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="products">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('products') }}">Items</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('manageItems') }}">Manage Items</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#chefs" aria-expanded="false"
                    aria-controls="chefs">
                    <span class="menu-icon">
                        <i class="mdi mdi-apple-keyboard-command"></i>
                    </span>
                    <span class="menu-title">Chefs</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="chefs">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('add-chefs') }}">Add Chefs</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('manage-chefs') }}">Manage
                                Chefs</a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('messages') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-email"></i>
                    </span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
        </ul>
    </nav>
@else
    {{-- For Profile --}}
    @foreach ($logo as $logo)
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="width:auto">
            <div class="sidebar-brand-wrapper  d-none d-lg-flex align-items-center justify-content-center fixed-top">

                <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}"><img
                        src="{{ asset('uploads/logo/' . $logo->image) }}" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img class="rounded-circle"
                        src="https://ui-avatars.com/api/?name={{ $miniLogo }}&background=191c24&color=ffffff&rounded=true&size=64&bold=true"
                        alt="logo" style="height: 50px;width:50px;border:1px solid white;" /></a>
            </div>
        </nav>
    @endforeach
@endif
