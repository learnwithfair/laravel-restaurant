@extends('backend.layout.master')
@section('title')
    || Chefs || Manage-Chefs
@endsection

<style>
    .title {
        color: white;
    }

    .chefs-social-link a {
        display: inline-block;
        margin: 0px 10px;
    }
</style>
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Manage Chefs Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('add-chefs') }}">Chefs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage-Chefs</li>
                </ol>
            </nav>
        </div>
        {{-- Body section --}}
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title d-inline-block">Manage Chefs</h4>
                        <p class="card-description" style="float:right">Customize Restaurant's Chefs </p>
                        <hr>
                        <div class="table-responsive manage-table">
                            <table class="table table-striped table-hover" id="dataTable">
                                <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Title </th>
                                        <th> Contacts </th>
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
                                            <td class="title alignleft">
                                                David Martin
                                            </td>
                                            {{-- For Display Password & date Info Start --}}
                                            <td class='alignleft'>
                                                Cookie Chef
                                            </td>
                                            {{-- For Display Password & date Info End --}}
                                            <td class="chefs-social-link">
                                                <a href="https://www.facebook.com/" class="text-danger">
                                                    <li class="fas fa-facebook"></li>
                                                </a>
                                                <a href="https://www.twiter.com/" class="text-danger">
                                                    <li class="fas fa-twiter"></li>
                                                </a>
                                                <a href="https://www.instagram.com/" class="text-danger">
                                                    <li class="fas fa-instagram"></li>
                                                </a>
                                            </td>

                                            <td class="chefs-social-link">
                                                <a href="https://www.twiter.com/" class="text-warning">
                                                    <li class="fas fa-edit"></li>
                                                </a>
                                                <a href="https://www.instagram.com/" class="text-danger">
                                                    <li class="fas fa-delete"></li>
                                                </a>
                                            </td>

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
