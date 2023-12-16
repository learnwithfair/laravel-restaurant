@php
    //Database Connection
    $obj = new DatabaseConnection(); // create class
    $miniLogo = $obj->miniLogoConnection(); //Get Mini Logo
    $unread = $obj->unreadMessage(); //Get unread Messages
    $messages = $obj->noticeReadMessage(); //Get Notice Message
@endphp
<nav x-data="{ open: false }" class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}" target="_blank"><img class="rounded-circle"
                src="https://ui-avatars.com/api/?name={{ $miniLogo }}&background=191c24&color=ffffff&rounded=true&size=64&bold=true"
                alt="logo" style="height: 50px;width:50px;border:1px solid white;" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            {{-- <span class="mdi mdi-format-line-spacing"></span> --}}
            <span class="fas fa-outdent"></span>
        </button>

        <ul class="navbar-nav w-100" style="display:inline-block">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search " autocomplete="off">
                    <input type="text" id="itemSearch" class="form-control mt-2" placeholder="Search Items">
                </form>
            </li>

            <li class="nav-item" style="margin-top:-5px;width:76% !important;display:none" id="searchdisplay">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list p-0 nav-link mt-0 d-none d-lg-block listt"
                    style="display:block;">
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Query</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="createbuttonDropdown">
                    <h6 class="p-3 mb-0">Topics</h6>
                    <div class="dropdown-divider"></div>

                    <a href="{{ route('all-admin-details.index') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-account-convert text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Admin</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-apple-keyboard-command text-warning"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Chefs</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('hero-area') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-layers text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Home Slider</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('products') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="fa-brands fa-product-hunt text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Restaurant Product</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>


                </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                </a>
            </li>

            {{-- @if ($_SERVER['PHP_SELF'] != '/index.php/user/profile') --}}

            <li class="nav-item dropdown border-left reloadmessagesNoticeTable">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    @if ($unread > 0)
                        <span class="count bg-success">{{ $unread }}</span>
                    @endif

                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    @foreach ($messages as $message)
                        @php
                            $date = $message->created_at;
                            $date = Carbon\Carbon::parse($date);
                            $elapsed = $date->diffForHumans();
                        @endphp
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('messages-read.edit', $message->id) }}" class="dropdown-item preview-item"
                            @if ($message->read_at == 0) style="background-color:#363a49;" @endif>
                            <div class="preview-thumbnail" style="width:35px;">
                                @if ($message->profileImage == null)
                                    <img src="https://ui-avatars.com/api/?name={{ $message->userName }}&background=random&rounded=true"
                                        alt="image" class="rounded-circle profile-pic">
                                @else
                                    <img src="{{ asset("storage/profileImages/$message->profileImage") }}"
                                        alt="image" class="rounded-circle profile-pic">
                                @endif
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">{{ $message->comment }}</p>
                                <p class="text-muted mb-0"> {{ $elapsed }} </p>
                            </div>
                        </a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('messages') }}">
                        <p class="p-3 mb-0 text-center text-white">{{ $unread }} new messages</p>
                    </a>
                </div>
            </li>
            {{-- @endif --}}
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Event today</p>
                            <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                            <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-link-variant text-warning"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Launch Admin</p>
                            <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">

                        @php
                            $profilePhoto = Auth::user()->profile_photo_url;
                            $Photo = Auth::user()->image;
                        @endphp
                        @if ($Photo == null)
                            <img class="img-xs rounded-circle admin_picture" src="{{ $profilePhoto }}"
                                alt="" />
                        @else
                            <img class="img-xs rounded-circle admin_picture"
                                src="{{ asset("storage/profileImages/$Photo") }}" alt="" />
                        @endif
                        {{-- <span class="count bg-success"></span> --}}

                        <i class="mdi mdi-menu-down d-sm-block"></i>
                        <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="profileDropdown">
                    {{-- <h6 class="p-3 mb-0">Profile</h6> --}}
                    <div class="dropdown-divider " id="profile-view-hidden"></div>
                    <a href="{{ route('profile.show') }}" class="dropdown-item preview-item"
                        id="profile-view-hidden">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-account-circle text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Profile</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">
                                    Log Out
                                </p>
                            </div>
                        </a>
                    </form>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
