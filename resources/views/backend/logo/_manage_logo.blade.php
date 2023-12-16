<style>
    .b-w {
        width: 6rem;
    }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title d-inline-block">Manage Logo</h4>
        <p class="card-description" style="float:right">Customize Logo </p>
        <hr>
        <div class="table-responsive message-table">
            <table class="table table-striped reloadLogoTable">
                <thead>
                    <tr>
                        <th> S/L </th>
                        <th> Image </th>
                        <th> Status </th>
                        <th> Set </th>
                        <th> Action </th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody>
                    @foreach ($logoInfo as $logoInfo)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>
                                {{ $i }}
                            </td>
                            <td class="py-1">
                                <img src="{{ asset('uploads/logo/' . $logoInfo->image) }}" alt="image" />
                            </td>
                            @if ($logoInfo->status == 1 || $logoInfo->status == 2)
                                <td>
                                    @if ($logoInfo->status == 1)
                                        <p class="text-success">
                                            H-Active</p>
                                    @else
                                    <p class="text-info">
                                        F-Active</p>
                                    @endif
                                </td>
                                <td>
                                    <a data-id={{ $logoInfo->id }} data-status="0"
                                        data-title="Do you want to Deactive Logo?" class="change_logo_status"
                                        data-toggle="modal" data-target="#logoStatusmodal">
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </a>
                                </td>
                            @else
                                <td>
                                    <p class="text-muted">Deactive</p>
                                </td>
                                <td>
                                    <a data-id={{ $logoInfo->id }} data-status="1"
                                        data-title="Do you want to active Logo?" class="change_logo_status"
                                        data-toggle="modal" data-target="#logoStatusmodal">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </a>
                                </td>
                            @endif
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="text-danger deletebtn" style="cursor: pointer" data-id={{ $logoInfo->id }}
                                        data-type="delete_logo" data-toggle="modal" data-target="#deletemodal">
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
