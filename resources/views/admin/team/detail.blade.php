@extends('layouts.admin')

@section('content')
    <div class="row">
        <a class=" btn-primary btn mb-5" href=""> Kembali</a>
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="/assets/images/users/profile.png" class="rounded-circle" width="150" />
                        <h4 class="card-title m-t-10">{{ $team->nama_team }}</h4>
                        <h6 class="card-subtitle">{{ $team->universitas }}</h6>
                        <h6 class="card-subtitle">{{ $team->email }}</h6>
                        {{-- <h6 class="card-subtitle">{{ $team->prodi }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <p class="font-medium">Cluster</p>
                                    <p class="font-medium">{{ fillOrNot($team->cluster) }}</p>
                                </a></div>
                            <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <p class="font-medium">Kelompok</p>
                                    <p class="font-medium">{{ fillOrNot($team->kelompok) }}</p>
                                </a></div>
                        </div> --}}
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                {{-- <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>{{ fillOrNot($mahasiswa->email) }}</h6>
                    <small class="text-muted p-t-30 db">Alamat Asal</small>
                    <h6>{{ fillOrNot($mahasiswa->alamat_asal) }}</h6>
                    <small class="text-muted p-t-30 db">Alamat Malang</small>
                    <h6>{{ fillOrNot($mahasiswa->alamat_malang) }}</h6>
                    <small class="text-muted p-t-30 db">Media Sosial</small>
                    <br />
                    <a target="_blank" class="btn btn-circle btn-warning"
                        href="https://api.whatsapp.com/send/?phone={{ $mahasiswa->whatsapp }}" role="button"><i
                            class="fab fa-whatsapp"></i></a>
                    <a target="_blank" class="btn btn-circle btn-purple"
                        href="https://www.instagram.com/{{ $mahasiswa->instagram }}" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-circle btn-success"
                        href="https://line.me/ti/p/{{ $mahasiswa->line }}" role="button"><i
                            class="fab fa-line text-white"></i></a>
                </div> --}}
            </div>
        </div>
        <!-- Column -->
        {{-- `whatsapp`, `instagram`, `line`, `jenis_kelamin`, `agama`, `alamat_malang`, `alamat_asal`, `ttl`, `riwayat_penyakit`, `disabilitas`, `vaksin`, `email`, `hobi`, `minat_ukm` --}}
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12">Nama 1</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"
                                    {{-- disabled value="{{ fillOrNot($mahasiswa->jenis_kelamin) }}"> --}}
                                    disabled value="{{ $players[0]->nama }}">
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="example-email" class="col-md-12">Agama</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="Agama" class="form-control form-control-line" disabled
                                    value="{{ fillOrNot($mahasiswa->agama) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Alamat Asal</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Alamat Asal" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->alamat_asal) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Alamat Malang</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Alamat" class="form-control form-control-line" disabled
                                    value="{{ fillOrNot($mahasiswa->alamat_malang) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Tempat Tanggal Lahir</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Tempat Tanggal Lahir"
                                    class="form-control form-control-line" disabled
                                    value="{{ fillOrNot($mahasiswa->ttl) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Riwayat Penyakit</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Riwayat Penyakit" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->riwayat_penyakit) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Disabilitas</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Disabilitas" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->disabilitas) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Email" class="form-control form-control-line" disabled
                                    value="{{ fillOrNot($mahasiswa->email) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Hobi</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Hobi" class="form-control form-control-line" disabled
                                    value="{{ fillOrNot($mahasiswa->hobi) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Minat UKM</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Minat UKM" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->minat_ukm) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Dibuat Pada</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Created At" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->created_at) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Diedit Pada</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Updated At" class="form-control form-control-line"
                                    disabled value="{{ fillOrNot($mahasiswa->updated_at) }}">
                            </div>
                        </div> --}}



                        {{-- <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Profile</button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
