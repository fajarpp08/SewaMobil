@extends('admin.layout.main')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Update Data User</h3>
                            </div>
                        </div>
                        <form class="needs-validation" action ="/useradm/{{ $users->id }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan nama"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ old('nama', $users->nama) }}" name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Alamat</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan alamat"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ old('alamat', $users->alamat) }}" name="alamat">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nomor SIM</label>
                                <input type="number" id="exampleFormControlInput1" placeholder="Masukkan Nomor SIM"
                                    class="form-control @error('nosim') is-invalid @enderror"
                                    value="{{ old('nosim', $users->nosim) }}" name="nosim">
                                @error('nosim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nomor HP</label>
                                <input type="number" id="exampleFormControlInput1" placeholder="Masukkan Nomor HP"
                                    class="form-control @error('nohp') is-invalid @enderror"
                                    value="{{ old('nohp', $users->nohp) }}" name="nohp">
                                @error('nohp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="text" id="password" placeholder="Masukkan Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Role</label>
                                <select class="form-control @error('role') is-invalid @enderror"
                                    value="{{ old('role') }}" name="role" id="exampleFormControlInput1">
                                    <option value="">-- Pilih Role --</option>
                                    <option value="Admin" @if ($users->status == 'Admin') selected @endif>Admin</option>
                                    <option value="User" @if ($users->status == 'User') selected @endif>User</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="/useradm" class="btn btn-secondary btn-lg">Back</a>
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-primary btn-lg" type="submit" name="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
