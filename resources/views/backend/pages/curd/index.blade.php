@extends('backend.include.template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CRUD</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <table id="example_table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Active / Inactive</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td title="Active/Inactive">
                                        <label class="switch">
                                            <input type="checkbox" data-status="1" value="1" checked class="active_check">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('crud.edit', 1) }}" title="Edit"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{ route('crud.destroy', 1) }}" onclick="return confirm('Do you want to delete this?')" style="color: red;" title="Delete"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <script>
        $(document).ready(function () {
            $('#example_table').DataTable({
                "paging": false,
                "order": [],
                "info": false,
                "responsive": true,
                dom: 'lBfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export To Excel',
                    title: 'CRUD',
                    extension: '.xls',
                    exportOptions: {
                        columns: [0, 1, 2],
                    }
                }]
            });
        })
    </script>
@endsection
