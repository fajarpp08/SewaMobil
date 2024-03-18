@extends('admin.layout.main')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Add Data Mobil</h3>
                            </div>
                        </div>
                        <form class="needs-validation" action ="/mobil" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Merek</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan merek mobil"
                                    class="form-control @error('merek') is-invalid @enderror" value="{{ old('merek') }}"
                                    name="merek">
                                @error('merek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Model</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan model mobil"
                                    class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}"
                                    name="model">
                                @error('model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nomor Plat</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan nomor plat mobil"
                                    class="form-control @error('noplat') is-invalid @enderror" value="{{ old('noplat') }}"
                                    name="noplat">
                                @error('noplat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Deskripsi</label>
                                <input type="text" id="exampleFormControlInput1" placeholder="Masukkan deskripsi mobil"
                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                    value="{{ old('deskripsi') }}" name="deskripsi">
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Harga</label>
                                <input type="number" id="exampleFormControlInput1"
                                    placeholder="Masukkan harga sewa mobil per hari"
                                    class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}"
                                    name="harga">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label input-group mb-3" for="inputGroupFile02">Gambar</label>
                                <input type="file" class="form-control" value="{{ old('file') }}" name="file"
                                    id="inputGroupFile02">
                                @error('file')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="/mobil" class="btn btn-secondary btn-lg">Back</a>
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-primary btn-lg" type="submit" name="submit">Save</button>
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
