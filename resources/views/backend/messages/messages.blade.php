@extends('backend.layout.master')
@section('title')
    || Messages
@endsection

<style>
    .b-w {
        width: 6.5rem;
        padding: 8px 2px !important;
    }
</style>
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Messages Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Message</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Messages-Area</li>
                </ol>
            </nav>
        </div>
        {{-- Body section --}}
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title d-inline-block">Manage Messages</h4>
                        <p class="card-description" style="float:right">Customize Restaurant Messages </p>
                        <hr>
                        <div class="table-responsive message-table">
                            <table class="table table-hover table-striped reloadmessagesTable" id="dataTable">
                                <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Image </th>
                                        <th> Contacts </th>
                                        <th> Info </th>
                                        <th> Description </th>
                                        <th>Time & Date </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp


                                <tbody>

                                    @foreach ($messageInfo as $messageInfo)
                                        @php
                                            $i++;
                                            $date = $messageInfo->created_at;
                                            $date = Carbon\Carbon::parse($date);
                                            $elapsed = $date->diffForHumans();
                                        @endphp
                                        <tr @if ($messageInfo->read_at == 0) style="background-color:#363a49;" @endif>
                                            <td>
                                                {{ $i }}
                                            </td>
                                            <td>
                                                @if ($messageInfo->profileImage == null)
                                                    <img src="https://ui-avatars.com/api/?name={{ $messageInfo->userName }}&background=random&rounded=true&size=64"
                                                        alt="image" style="height: 60px;width:60px;" />
                                                @else
                                                    <img src="{{ asset("storage/profileImages/$messageInfo->profileImage") }}"
                                                        alt="image" style="height: 60px;width:60px;">
                                                @endif
                                            </td>
                                            <td class="alignleft">
                                                <p>
                                                    <b>Name: &nbsp;&nbsp;</b> {{ $messageInfo->userName }}
                                                </p>
                                                <p class="mb-0">
                                                    <b>Phone: &nbsp;&nbsp;</b> <a href="tel:+  {{ $messageInfo->phone }}">
                                                        {{ $messageInfo->phone }}</a>
                                                </p>
                                            </td>
                                            <td class="alignleft">
                                                <p>
                                                    <b>Table No: &nbsp;&nbsp;</b> {{ $messageInfo->tableNo }}
                                                </p>
                                                <p class="mb-0">
                                                    <b>Guest: &nbsp;&nbsp;</b> {{ $messageInfo->guest }}
                                                </p>
                                            </td>
                                            {{-- For Display Password & date Info Start --}}
                                            <td class="alignleft">
                                                <p>
                                                    @php
                                                        echo str_split($messageInfo->comment, 10)[0] . '..';
                                                        $description = str_replace(' ', '__', $messageInfo->comment);
                                                        $name = str_replace(' ', '__', $messageInfo->userName);
                                                    @endphp

                                                    <a class="text-primary cursor-zoom-in view-description cursor-pointer"
                                                        data-id={{ $messageInfo->id }} data-name={{ $name }}
                                                        data-read_at={{ $messageInfo->read_at }}
                                                        data-description={{ $description }}
                                                        data-image={{ $messageInfo->profileImage }}
                                                        data-type="@if ($messageInfo->profileImage == null) 0
                                                        @else
                                                             1 @endif"
                                                        data-toggle="modal" data-target="#message_view_modal">
                                                        more
                                                    </a>
                                                </p>
                                                <p class="text-muted mb-0"> {{ $elapsed }} </p>

                                            </td>
                                            {{-- For Display Password & date Info End --}}
                                            <td class="alignleft">
                                                <p>
                                                    <b>Time: &nbsp;&nbsp;</b> {{ $messageInfo->time }}
                                                </p>
                                                <p class="mb-0">
                                                    <b>Date: &nbsp;&nbsp;</b> {{ $messageInfo->date }}
                                                </p>
                                            </td>

                                            <td>
                                                <a id="message_status" data-id={{ $messageInfo->id }}
                                                    data-status={{ $messageInfo->status }}>

                                                    @if ($messageInfo->status == 0)
                                                        <button class="btn btn-warning b-w">Pending</button>
                                                    @elseif ($messageInfo->status == 1)
                                                        <button class="btn btn-success b-w">Accepted</button>
                                                    @else
                                                        <button class="btn btn-danger b-w">Canceled</button>
                                                    @endif

                                                    <br>
                                                </a>

                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" value="{{ $messageInfo->id }}"
                                                        id="deleteMessageId">
                                                    <a class="text-danger deletebtn" style="cursor: pointer"
                                                        data-id={{ $messageInfo->id }} data-type="delete_message"
                                                        data-toggle="modal" data-target="#deletemodal">
                                                        <li class="fas fa-trash-alt"></li>
                                                    </a>
                                                </form>
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
        @include('backend.messages._messageViewModal')
        @include('backend.layout.modal._delete_confirm')
    @endsection
    @section('script')
        @include('backend.layout._script')
        @include('backend.ajax._messagesJS')
    @endsection
