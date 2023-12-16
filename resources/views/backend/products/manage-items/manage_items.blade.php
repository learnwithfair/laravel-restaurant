@extends('backend.layout.master')
@section('title')
    || Product || Manage-Item
@endsection

<style>
    .title {
        color: white;
    }
</style>
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Manage Items Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage-Items</li>
                </ol>
            </nav>
        </div>
        {{-- Body section --}}
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title d-inline-block">Manage Products</h4>
                        <p class="card-description" style="float:right">Customize Restaurant Products </p>
                        <hr>
                        <div class="table-responsive manage-table">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Thumbnail </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Progress </th>
                                        <th> Amount </th>
                                        <th> Deadline </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                @php
                                    $items = [0, 1, 2, 3, 4];
                                    $prog_background = ['bg-danger', 'bg-warning', 'bg-primary', 'bg-info', 'bg-success'];
                                    $i = -1;
                                @endphp


                                <tbody>

                                    @foreach ($items as $item)
                                        @php
                                            $i++;
                                        @endphp



                                        <tr>
                                            <td>
                                                {{ $i + 1 }}
                                            </td>
                                            <td class="py-1">
                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                            </td>
                                            <td class="title">
                                                <div class="list-wrapper">
                                                    <ul class="todo-list todo-list-custom">
                                                        <li>
                                                            <div class="form-check form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox" checked> Create
                                                                    invoice
                                                                </label>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>
                                            {{-- For Display Password & date Info Start --}}
                                            <td>
                                                <a class="text-primary cursor-zoom-in view-admin-password" data-id=1
                                                    data-type="view_password" {{-- data-id={{ $adminDetails->id }} data-type="view_password" --}}
                                                    data-authid={{ Auth::user()->id }}
                                                    data-authtype={{ Auth::user()->usertype }} data-toggle="modal"
                                                    data-target="#view_admin_password_modal">
                                                    <i class="mdi mdi-eye fs-4 "></i>
                                                </a>
                                            </td>
                                            {{-- For Display Password & date Info End --}}
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar {{ $prog_background[$i % 10] }}"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>77.99 TK</td>
                                            <td> May 15, 2015 </td>
                                            <td>Delete </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('modal')
        @include('backend.layout.modal._delete_confirm')
    @endsection
    @section('script')
        @include('backend.layout._script')
        @include('backend.ajax._heroAreaJS')
    @endsection
