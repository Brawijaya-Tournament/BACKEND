@extends('layouts.admin')

@section('content')
    <div class="row">
        <!-- <a class=" btn-primary btn mb-5" href=""> Kembali</a> -->
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="/img/logoNavbar.svg" class="rounded-circle" width="100" />
                        <h4 class="card-title m-t-10">{{ $team->nama_team }}</h4>
                        <h6 class="card-subtitle">{{ $team->universitas }}</h6>
                        <h6 class="card-subtitle">{{ $team->email }}</h6> <br><br>
                        <h4 class="card-title">Link Team</h6>
                        <h6 class="card-subtitle">{{ $team->link_team }}</h6> <br><br>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                @for($i = 1; $i <= $jumlah; $i++)
                    <h4>Anggota {{ $i }}</h4>
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <!-- NAMA -->
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->nama }}">
                            </div> <br>
                            <!-- NIM -->
                            <label class="col-md-12">NIM</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->nim }}">
                            </div> <br>
                            <!-- JENIS KELAMIN -->
                            <label class="col-md-12">Jenis Kelamin</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->gender }}">
                            </div> <br>
                            <!--EMAIL -->
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->email }}">
                            </div> <br>
                            <!-- NO HP -->
                            <label class="col-md-12">No Handphone</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->hp }}">
                            </div> <br>
                            <!-- FAKULTAS -->
                            <label class="col-md-12">Fakultas</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->fakultas }}">
                            </div> <br>
                            <!-- ANGKATAN -->
                            <label class="col-md-12">Angkatan</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->angkatan }}">
                            </div> <br>
                            <!-- LINK DRIVE -->
                            <label class="col-md-12">Link Drive</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    disabled value="{{ $players[$i-1]->link_gdrive }}">
                            </div> <br>
                        </div>
                @endfor        
                        <!-- <div class="form-group">
                            <label class="col-md-12">Dibuat Pada</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Created At" class="form-control form-control-line"
                                    >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Diedit Pada</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Updated At" class="form-control form-control-line"
                                    >
                            </div>
                        </div>



                        {{-- <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Profile</button>
                            </div>
                        </div> --}} -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
