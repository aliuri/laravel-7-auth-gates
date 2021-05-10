@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('flash::message')
                    <h5 class="card-title">Tabel Pengguna</h5>
                    <a class="btn btn-primary" href="javascript:void(0)" id="createNewUser"> Tambah</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="user" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Hak Akses</th>
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @include('master/user/form') --}}

<script>
$(function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('#user').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
                url: "{{route('users.index')}}",
            },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'id', name: 'id', orderable: true, searchable: false},
            {data: 'name', name: 'name', orderable: true, searchable: true},
            {data: 'email', name: 'email', orderable: true, searchable: true},
            // {data: 'verif', name: 'verif', orderable: true, searchable: true},
            {data: 'role', name: 'role', orderable: true, searchable: true},
            // {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
//     $('#createNewUser').click(function () {
//         $('#saveBtn').val("create-User");
//         $('#User_id').val('');
//         $('#UserForm').trigger("reset");
//         $('#modelHeading').html("Create New User");
//         $('#ajaxModel').modal('show');
//     });

//     $('body').on('click', '.editUser', function () {
//       var User_id = $(this).data('id');
//       $.get("users" +'/' + User_id +'/edit', function (data) {
//           $('#modelHeading').html("Edit User");
//           $('#saveBtn').val("edit-user");
//           $('#ajaxModel').modal('show');
//           $('#User_id').val(data.id);
//           $('#recipient-name').val(data.name);
//           $('#recipient-email').val(data.email);
//           $('#akses').val(data.role);
          
//           if (data.email_verified_at !== null) {
//               $(".verif").prop("checked", true);
//             }  

//           console.log(data.email_verified_at);
//       })
//    });

//     $('#saveBtn').click(function (e) {
//         e.preventDefault();
//         $(this).html('Sending..');

//         $.ajax({
//           data: $('#UserForm').serialize(),
//           url: "{{ route('users.store') }}",
//           type: "POST",
//           dataType: 'json',
//           success: function (data) {

//               $('#UserForm').trigger("reset");
//               $('#ajaxModel').modal('hide');
//               table.draw();

//           },
//           error: function (data) {
//               console.log('Error:', data);
//               $('#nameError').text(data.responseJSON.errors.name);
//               $('#emailError').text(data.responseJSON.errors.email);
//               $('#passwordError').text(data.responseJSON.errors.password);
//               $('#roleError').text(data.responseJSON.errors.role);
//               $('#saveBtn').html('Save Changes');
//           }
//       });
//     });

    

});
</script>
@endsection
