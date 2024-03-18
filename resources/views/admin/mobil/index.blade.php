@extends('admin.layout.main')
@section('content')
    {{-- @if (session()->has('pesan'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> {{ session('pesan') }}
        </div>
    @endif --}}
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Data Mobil</h4>
                            <div class="box_right d-flex lms_block">
                                {{-- search --}}
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form action="{{ route('mobils.searchname') }}" method="get">
                                            <div class="search_field">
                                                <input type="text" name="keyword"
                                                    value="{{ isset($keyword) ? $keyword : '' }}"   
                                                    placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                {{-- end search --}}
                                <div class="add_button ms-2">
                                    <a href="/mobil/create" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Merek</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Nomor Plat</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mobils->sortByDesc('created_at') as $mobil)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mobil->merek }}</td>
                                            <td>{{ $mobil->model }}</td>
                                            <td>{{ $mobil->noplat }}</td>
                                            <td>{{ $mobil->deskripsi }}</td>
                                            <td>Rp. {{ $mobil->harga }} /hari</td>
                                            {{-- <td>{{ $mobil->file }}</td> --}}
                                            <td>
                                                @if ($mobil->file)
                                                    <img src="{{ asset('storage/mobil/' . $mobil->file) }}" alt="mobil"
                                                        class="img-fluid" width="150">
                                                @else
                                                    <img src="{{ asset('assets-admin/img/profile_user.png') }}" alt="mobil"
                                                        class="img-fluid rounded-circle" width="80">
                                                @endif
                                            </td>
                                            <td>
                                                <ul class="list-inline m-0">
                                                    <a href="/mobil/{{ $mobil->id }}/edit"
                                                        class="list-inline-item mb-1">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                    <form action="/mobil/{{ $mobil->id }}" method="post"
                                                        class="list-inline-item">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                onclick="return confirm('Yakin akan menghapus data?')"
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- pagination --}}
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                            @if (isset($mobils) && $mobils instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                {{ $mobils->links('pagination::bootstrap-5') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
