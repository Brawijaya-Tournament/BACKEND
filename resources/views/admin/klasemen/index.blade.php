@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-3-box-multiple-outline"></i>Tabel Klasemen
                    </h4>
                    <h6 class="card-subtitle">
                        Klasemen
                    </h6>
                    <a href="{{ url("adminbt/klasemen/create") }}">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Klasemen</button>
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Universitas</th>
                                    <th scope="col">Emas</th>
                                    <th scope="col">Perak</th>
                                    <th scope="col">Perunggu</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tanggal Update</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                                @if (isset($klasemens))
                                @foreach ($klasemens as $klasemens)
                                <tr>
                                    <td> {{ $number++ }} </td>
                                    <td>{{ $klasemens->nama_univ }}</td>
                                    <td>{{ $klasemens->emas }}</td>
                                    <td>{{ $klasemens->perak }}</td>
                                    <td>{{ $klasemens->perunggu }}</td>
                                    <td>{{ ($klasemens->emas) + ($klasemens->perak) + ($klasemens->perunggu) }}</td>
                                    <td>{{ $klasemens->created_at }}</td>
                                    <td>
                                        <a href="{{ url("adminbt/klasemen/edit/$klasemens->id") }}" id="editData" class="btn btn-xs btn-primary edit" ><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href = "{{ url("adminbt/klasemen/delete/$klasemens->id") }}" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="mdi mdi-delete"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                pageLength: 10,
                lengthMenu: [5, 10],
            });
        });
    </script>
@endsection
