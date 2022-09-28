@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
<body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i>Pengumuman
                    </h4>
                    <h6 class="card-subtitle">
                        Daftar Pengumuman
                    </h6>
                    <a href="{{ url("adminbt/pengumuman/create") }}">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Pengumuman</button>
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                                @if (isset($pengumumans))
                                @foreach ($pengumumans as $pengumumans)
                                <tr>
                                    <td> {{ $number++ }} </td>
                                    <td>{{ $pengumumans->judul }}</td>
                                    <td>{{ $pengumumans->isi_preview }}</td>
                                    <td>{{ $pengumumans->created_at }}</td>
                                    
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#myModal" id="getDetail" class="btn btn-xs btn-success" data-url="{{ route('admin.pengumuman.read', $pengumumans->id)}}" >
                                        <i class="mdi mdi-eye"></i> Read</a>
                                        <a href="{{ url("adminbt/pengumuman/edit/$pengumumans->id") }}" id="edit" class="btn btn-xs btn-primary" ><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href="{{ url("adminbt/pengumuman/delete/$pengumumans->id") }}" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="mdi mdi-delete"></i> Delete</a>
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div id="modal-body-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
          </div>
        </div>
    </div>
</body>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [5, 10, 20, 50, 100, 200, 500],
            });
        });
        $(document).on('click', '#getDetail', function(e){
            $.ajax({
                url: $(this).data('url'),
                type: 'GET',
                dataType: 'JSON'
            })
            .done(function(data){
                $('#myModal').find('#modal-title').html(data.judul).show
                $('#myModal').find('#modal-body-content').html(data.isi).show
            })
        });
    </script>
@endsection