@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                lengthMenu: [5, 10, 20, 50, 100, 200, 500],
                ajax: '{!! route('admin.team.datatables') !!}',
                columns: [{
                        data: 'nama_team',
                        name: 'users.nama_team'
                    },
                    {
                        data: 'universitas',
                        name: 'users.universitas'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'updated_at',
                        name: 'users.updated_at'
                    },
                    {
                        data: 'created_at',
                        name: 'users.created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
