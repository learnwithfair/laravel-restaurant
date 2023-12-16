@extends('backend.layout.master')
@section('title')
    || Admin
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Admin Info </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('all-admin-details.index') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admin Info</li>
                </ol>
            </nav>
        </div>
        {{-- Main Content Start  --}}
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title d-inline-block">Admin Details</h4>
                        <p class="card-description" style="float: right">Customize admin status </p>
                        <hr />
                        <div class="table-responsive">
                            <table class="table table-hover reloadAdminTable" id="dataTable">
                                <thead>
                                    <tr align="middle" style="color: red">
                                        <th>S\L</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        @if (Auth::user()->usertype == 2)
                                            <th>Set Admin</th>
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp
                                <tbody align="middle">
                                    @foreach ($adminDetails as $adminDetails)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $i }}
                                            </td>
                                            <td align="left">{{ $adminDetails->name }}</td>
                                            <td align="left">
                                                <a href="mailto:{{ $adminDetails->email }}" target="_blank">
                                                    {{ $adminDetails->email }}
                                                </a>
                                            </td>
                                            {{-- For Display Password & date Info Start --}}
                                            <td>
                                                <a class="text-primary cursor-zoom-in view-admin-password"
                                                    data-id={{ $adminDetails->id }} data-type="view_password"
                                                    data-authid={{ Auth::user()->id }}
                                                    data-authtype={{ Auth::user()->usertype }} data-toggle="modal"
                                                    data-target="#view_admin_password_modal">
                                                    <i class="mdi mdi-eye fs-4 "></i>
                                                </a>
                                            </td>
                                            {{-- For Display Password & date Info End --}}
                                            <td>
                                                @if ($adminDetails->usertype == 2)
                                                    <span class="text-info"> Admin</span>
                                                @elseif ($adminDetails->usertype == 1)
                                                    <span class="text-success"> Sub-admin</span>
                                                @else
                                                    <span class="text-warning"> User</span>
                                                @endif
                                            </td>
                                            {{-- For Display Profile Picture Start --}}
                                            <td>
                                                @php
                                                    $profilePhoto = $adminDetails->profile_photo_url;
                                                    $Photo = $adminDetails->image;
                                                @endphp
                                                @if ($Photo == null)
                                                    <img class="img-xs rounded-circle admin_picture border"
                                                        src="{{ $profilePhoto }}" alt="" />
                                                @else
                                                    <img class="img-xs rounded-circle admin_picture border"
                                                        src="{{ asset("storage/profileImages/$Photo") }}" alt="" />
                                                @endif
                                            </td>
                                            {{-- For Display Profile Picture End --}}

                                            {{-- For Update Usertype Start --}}
                                            @if (Auth::user()->usertype == 2)
                                                <td>
                                                    @if ($adminDetails->usertype == 1 || $adminDetails->usertype == 2)
                                                        <a data-id={{ $adminDetails->id }} data-status="0"
                                                            data-title="Do you want to Set as a User?"
                                                            data-description="He will an User & don't Access Dashboard!!"
                                                            class="change_admin_status" data-toggle="modal"
                                                            data-target="#adminStatusmodal">
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </a>
                                                    @else
                                                        <a data-id={{ $adminDetails->id }} data-status="1"
                                                            data-title="Do you want to Set as a Admin?"
                                                            data-description="He will an Sub-admin and Access Dashboard!!"
                                                            class="change_admin_status" data-toggle="modal"
                                                            data-target="#adminStatusmodal">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </a>
                                                    @endif
                                                </td>
                                                {{-- For Update Usertype End --}}

                                                {{-- For Delete User Start --}}
                                                <td>
                                                    <a class="text-danger cursor-pointer deletebtn"
                                                        data-id={{ $adminDetails->id }} data-type="delete_admin"
                                                        data-toggle="modal" data-target="#deletemodal">
                                                        <li class="fas fa-trash-alt fs-5"></li>
                                                    </a>
                                                </td>
                                                {{-- For Delete User Start --}}
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main Content End  --}}
    </div>
@endsection
@section('modal')
    @include('backend.admin._passwordViewModal')
    @include('backend.admin._change_status_modal')
    @include('backend.layout.modal._delete_confirm')
@endsection
@section('script')
    @include('backend.layout._script')
    @include('backend.ajax._adminJS')
@endsection
