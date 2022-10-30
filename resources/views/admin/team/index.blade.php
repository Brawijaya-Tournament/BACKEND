@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Tabel Team
                    </h4>
                    <h6 class="card-subtitle">
                        Data Team yang terdaftar di database
                    </h6>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter Cabor
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Bulu Tangkis</a>
                            <a class="dropdown-item" href="#">Basket</a>
                            <a class="dropdown-item" href="#">Futsal</a>
                            <a class="dropdown-item" href="#">PUBG Mobile</a>
                            <a class="dropdown-item" href="#">Mobile Legends</a>
                            <a class="dropdown-item" href="#">Fotografi</a>
                            <a class="dropdown-item" href="#">Solo Vokal</a>
                            <a class="dropdown-item" href="#">Modern Dance</a>
                        </div>
                    </div> <br>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Team</th>
                                    <th scope="col">Universitas</th>
                                    <th scope="col">Cabor</th>
                                    <th scope="col">Diupdate</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown()
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                lengthMenu: [5, 10, 20, 50, 100, 200, 500],
                ajax: '{!! route('admin.team.bulutangkis') !!}',
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
