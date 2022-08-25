@if ($message = Session::get('message'))
<div class="w-full rounded-xl shadow-md  text-white text-center p-1 my-1 "
    style="background: linear-gradient(to right,#147167,#3E8678,#FE6722,#F69534);">
    {{ $message }}
</div>
@endif
<div class="row">
<div class="card col-6">
    <div class="card-body">
        <form action="/ml" method="post">
            @csrf
            {{-- <div class="form-group">
                <label class="col-md-12">Nama Team</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="nama_team"
                        value="" class="form-control form-control-line">
                </div>
                @error('nama_team')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">Universitas</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="universitas"
                        value="" class="form-control form-control-line">
                </div>
                @error('universitas')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">link_team</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="link_team"
                        value="" class="form-control form-control-line">
                </div>
                @error('link_team')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div> --}}
            <div class="form-group">
                <label class="col-md-12">nama1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="nama1"
                        value="" class="form-control form-control-line">
                </div>
                @error('nama1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">nim1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="nim1"
                        value="" class="form-control form-control-line">
                </div>
                @error('nim1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">fakultas1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="fakultas1"
                        value="" class="form-control form-control-line">
                </div>
                @error('fakultas1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">angkatan1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="angkatan1"
                        value="" class="form-control form-control-line">
                </div>
                @error('angkatan1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">link_gdrive1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="link_gdrive1"
                        value="" class="form-control form-control-line">
                </div>
                @error('link_gdrive1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">nickname1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="nickname1"
                        value="" class="form-control form-control-line">
                </div>
                @error('nickname1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">email1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="email1"
                        value="" class="form-control form-control-line">
                </div>
                @error('email1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">hp1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="hp1"
                        value="" class="form-control form-control-line">
                </div>
                @error('hp1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">id_game1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="id_game1"
                        value="" class="form-control form-control-line">
                </div>
                @error('id_game1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">gender1</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="gender1"
                        value="" class="form-control form-control-line">
                </div>
                @error('gender1')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>


            <div class="form-group">
                <label class="col-md-12">nama2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="nama2"
                        value="" class="form-control form-control-line">
                </div>
                @error('nama2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">nim2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="nim2"
                        value="" class="form-control form-control-line">
                </div>
                @error('nim2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">fakultas2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="fakultas2"
                        value="" class="form-control form-control-line">
                </div>
                @error('fakultas2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">angkatan2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="angkatan2"
                        value="" class="form-control form-control-line">
                </div>
                @error('angkatan2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">link_gdrive2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="link_gdrive2"
                        value="" class="form-control form-control-line">
                </div>
                @error('link_gdrive2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">nickname2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="nickname2"
                        value="" class="form-control form-control-line">
                </div>
                @error('nickname2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">email2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="email2"
                        value="" class="form-control form-control-line">
                </div>
                @error('email2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">hp2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="hp2"
                        value="" class="form-control form-control-line">
                </div>
                @error('hp2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-22">id_game2</label>
                <div class="col-md-22">
                    <input type="text" placeholder="Brawijayan" name="id_game2"
                        value="" class="form-control form-control-line">
                </div>
                @error('id_game2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12">gender2</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Brawijayan" name="gender2"
                        value="" class="form-control form-control-line">
                </div>
                @error('gender2')
                    <p class=" text-danger "> {{ $message }} </p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>
</div>