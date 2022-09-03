@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Tabel Klasemen
                    </h4>
                    <h6 class="card-subtitle">
                        Klasemen
                    </h6>
                    <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-plus"></i>Tambah Klasemen</button>
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
                                    <td><a href="#" id="edit" class="btn btn-xs btn-primary edit" data-url="{{ route('admin.klasemen.edit', $klasemens->id)}}" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href = "{{ url("adminbt/klasemen/delete/$klasemens->id") }}" class="btn btn-xs btn-danger" onclick="return myFunction()"><i class="mdi mdi-delete"></i> Delete</a>
                                        {{-- <i class="fa-solid fa-trash" onclick="return confirm('Apakah anda yakin?');"></i> --}}
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

{{-- Start Create Modal --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form name="frm_add" id="frm_add" class="form-horizontal" action="{{ route('admin.klasemen.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Klasemen</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"><label class="col-lg-30 control-label">Nama Universitas</label>
                            <div class="col-lg-30"><input type="text" name="nama_univ" placeholder="Nama Universitas" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Emas</label>
                            <div class="col-lg-30"><input type="text" name="emas" placeholder="1, 2, 3, dst" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Perak</label>
                            <div class="col-lg-30"><input type="text" name="perak" placeholder="1, 2, 3, dst" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Perunggu</label>
                            <div class="col-lg-30"><input type="text" name="perunggu" placeholder="1, 2, 3, dst" class="form-control"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </div>
            </form>
        </div>
    </div>
{{-- End Create Modal --}}

{{-- Start Edit Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form name="frm_edit" id="frm_edit" class="form-horizontal" action="{{ route('admin.klasemen.edit') }}" method="PUT" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Klasemen</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"><label class="col-lg-30 control-label">Nama Universitas</label>
                            <div class="col-lg-30"><input type="text" id="nama_univ" name="nama_univ" placeholder="Nama Universitas" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Emas</label>
                            <div class="col-lg-30"><input type="text" id="emas" name="emas" placeholder="1, 2, 3, dst" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Perak</label>
                            <div class="col-lg-30"><input type="text" id="perak" name="perak" placeholder="1, 2, 3, dst" class="form-control"></div>
                        <div class="form-group"><label class="col-lg-30 control-label">Jumlah Perunggu</label>
                            <div class="col-lg-30"><input type="text" id="perunggu" name="perunggu" placeholder="1, 2, 3, dst" class="form-control"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
            </form>
        </div>
    </div>
{{-- End Edit Modal --}}
@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        var table = $('datatable').DataTable();
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#nama_univ').val(data[1]);
            $('#emas').val(data[2]);
            $('#perak').val(data[3]);
            $('#perunggu').val(data[4]);

            $('#frm_edit').attr('action', '/adminbt/klasemen/edit/' + data[0]);
            $('#editModal').modal('show');
        });
    });
</script>
@endsection
