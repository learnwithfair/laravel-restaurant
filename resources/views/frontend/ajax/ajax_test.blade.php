<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 ajax Crud Application</title>
    {{-- for ajax  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- For bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div style="padding: 30px;"></div>
    <div class="container">
        <h2 style="color: red;">
            <marquee behavior="" direction="">Laravel 8 Ajax Crud Application -- W3 Coders</marquee>
        </h2>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        All Teacher
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Institute</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <span id="addT">Add New Teacher</span>
                        <span id="updateT">Update Teacher</span>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter name">
                            <span class="text-danger" id="nameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Title</label>
                            <input type="text" id="title" class="form-control " id="exampleInputPassword1"
                                placeholder="Job Positon">
                            <span class="text-danger" id="titleError"></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Institute</label>
                            <input type="text" id="institute" class="form-control " id="exampleInputPassword1"
                                placeholder="Institute Name">
                            <span class="text-danger" id="instituteError"></span>
                        </div>
                        <input type="hidden" id="id">
                        <button type="submit" id="add" onclick="addData()" class="btn btn-primary">Add</button>
                        <button type="submit" id="update" onclick="updateData()"
                            class="btn btn-primary">Update</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- For AJAX  --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- For bootstrap  --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    {{-- For Alert  --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('#add').show();
        $('#addT').show();
        $('#updateT').hide();
        $('#update').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            }
        })

        // ---------------view data ------------
        function allData() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/teacher/all",
                success: function(response) {
                    var data = ""
                    $.each(response, function(key, value) {
                        data = data + "<tr>"
                        data = data + "<td>" + value.id + "</td>"
                        data = data + "<td>" + value.name + "</td>"
                        data = data + "<td>" + value.title + "</td>"
                        data = data + "<td>" + value.institute + "</td>"
                        data = data + "<td>"
                        data = data + "<button class='btn btn-sm btn-primary mr-2' onclick='editData(" +
                            value.id + ")'>Edit</button>"
                        data = data + "<button class='btn btn-sm btn-danger' onclick='deleteData(" +
                            value.id + ")'>Delete</button>"
                        data = data + "</td>"
                        data = data + "</tr>"
                    })
                    $('tbody').html(data);
                }
            })
        }
        allData();
        // --------- end all data ---------

        // --------- data will be clear here ---------
        function clearData() {
            $('#name').val('');
            $('#title').val('');
            $('#institute').val('');
            $('#nameError').text('');
            $('#titleError').text('');
            $('#instituteError').text('');
        }
        // --------- end data will be clear here ---------

        // ----------- data data -------------
        function addData() {
            var name = $('#name').val();
            var title = $('#title').val();
            var institute = $('#institute').val();
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    name: name,
                    title: title,
                    institute: institute
                },
                url: "/teacher/store/",
                success: function(response) {
                    allData();
                    clearData();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    Toast.fire({
                        type: 'success',
                        title: 'Data Added Success'
                    });
                    // end alert
                },
                // start error
                error: function(error) {
                    $('#nameError').text('');
                    $('#titleError').text('');
                    $('#instituteError').text('');

                    $('#nameError').text(error.responseJSON.errors.name);
                    $('#titleError').text(error.responseJSON.errors.title);
                    $('#instituteError').text(error.responseJSON.errors.institute);

                }
                // end error

            });

        }

        // --------------- edit data -------------
        function editData(id) {
            $('#add').hide();
            $('#update').show();
            $('#addT').hide()
            $('#updateT').show()
            $.ajax({
                data: "GET",
                dataType: "json",
                url: "/teacher/edit/" + id,
                success: function(data) {
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#title').val(data.title);
                    $('#institute').val(data.institute);
                }
            })

        }

        // ---------- update Data -----------
        function updateData() {
            var id = $('#id').val();
            var name = $('#name').val();
            var title = $('#title').val();
            var institute = $('#institute').val();
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    id: id,
                    name: name,
                    title: title,
                    institute: institute
                },
                url: "/teacher/update/" + id,
                success: function() {
                    allData();
                    clearData();
                    $('#add').show();
                    $('#update').hide();
                    $('#addT').show()
                    $('#updateT').hide()
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    Toast.fire({
                        type: 'success',
                        title: 'Data Update Success'
                    });
                    // end alert
                },
                // start error
                error: function(error) {
                    $('#nameError').text('');
                    $('#titleError').text('');
                    $('#instituteError').text('');

                    $('#nameError').text(error.responseJSON.errors.name);
                    $('#titleError').text(error.responseJSON.errors.title);
                    $('#instituteError').text(error.responseJSON.errors.institute);

                }
                // end error
            })
        }

        function deleteData(id) {

            // var link = $(this).attr("href");
            swal({
                    title: "Are You Shure To Delete?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: "/teacher/destroy/" + id,
                            success: function(response) {
                                allData();
                                clearData();
                                $('#add').show();
                                $('#update').hide();
                                $('#addT').show()
                                $('#updateT').hide()

                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                })
                                Toast.fire({
                                    type: 'success',
                                    title: 'Data Delete Success'
                                });
                                // end alert

                            }
                        });
                    } else {
                        swal("Canceled");
                    }
                });

            // $.ajax({
            //   type: "GET",
            //   dataType: "json",
            //   url: "/teacher/destroy/"+id,
            //   success: function(response){
            //     allData();
            //     console.log('data deleted');
            //   }
            // })
        }
    </script>
</body>

</html>
