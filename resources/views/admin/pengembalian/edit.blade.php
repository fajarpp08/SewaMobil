@extends('admin.layout.main')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Edit Data Pengembalian</h3>
                            </div>
                        </div>
                        <form class="needs-validation" action ="/pengembalian/{{ $pengembalians->id }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            {{-- <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect1">Nama</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                                    @foreach ($users as $user)
                                        @if (old('peminjaman_id', $pengembalians->peminjamans->peminjaman_id) == $user->id)
                                            <option value="{{ $user->id }}" selected>{{ $user->nama }}</option>
                                        @else
                                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect1">Nomor SIM</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                                    @foreach ($users as $user)
                                        @if (old('user_id', $peminjamans->user_id) == $user->id)
                                            <option value="{{ $user->id }}" selected>{{ $user->nosim }}</option>
                                        @else
                                            <option value="{{ $user->id }}">{{ $user->nosim }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect1">Mobil</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="mobil_id">
                                    @foreach ($mobils as $mobil)
                                        @if (old('mobil_id', $peminjamans->mobil_id) == $mobil->id)
                                            <option value="{{ $mobil->id }}" selected>{{ $mobil->model }}</option>
                                        @else
                                            <option value="{{ $mobil->id }}">{{ $mobil->model }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Tanggal Kembali</label>
                                <input type="date" id="exampleFormControlInput1" placeholder="Masukkan tanggal kembali"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror"
                                    value="{{ old('tgl_kembali', $pengembalians->tgl_kembali) }}" name="tgl_kembali">
                                @error('tgl_kembali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="/pengembalian" class="btn btn-secondary btn-lg">Back</a>
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
