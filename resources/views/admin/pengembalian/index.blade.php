@extends('admin.layout.main')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Data Pengembalian</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                {{-- <div class="add_button ms-2">
                                    <a href="/pengembalian/create" class="btn_1">Add New</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor SIM</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Mobil</th>
                                        <th scope="col">Nomor Plat</th>
                                        <th scope="col">Tanggal Kembali</th>
                                        {{-- <th scope="col">Status</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengembalians as $pengembalian)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($pengembalian->sewa && $pengembalian->sewa->user)
                                                    {{ $pengembalian->sewa->user->nama }}
                                                @else
                                                    Data tidak ditemukan
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pengembalian->sewa && $pengembalian->sewa->user)
                                                    {{ $pengembalian->sewa->user->nosim }}
                                                @else
                                                    Data tidak ditemukan
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pengembalian->sewa->mobil->file)
                                                    <img src="{{ asset('storage/mobil/' . $pengembalian->sewa->mobil->file) }}" alt="mobil"
                                                        class="img-fluid" width="150">
                                                @else
                                                    <img src="{{ asset('images/foto-profile.png') }}" alt="mobil"
                                                        class="img-fluid rounded-circle" width="80">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pengembalian->sewa && $pengembalian->sewa->mobil)
                                                    {{ $pengembalian->sewa->mobil->merek }} -
                                                    {{ $pengembalian->sewa->mobil->model }}
                                                @else
                                                    Data tidak ditemukan
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pengembalian->sewa && $pengembalian->sewa->mobil)
                                                    {{ $pengembalian->sewa->mobil->noplat }}
                                                @else
                                                    Data tidak ditemukan
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($pengembalian->tgl_kembali)->isoFormat('DD MMMM YYYY') }}
                                            </td>
                                            {{-- <td>{{ $pengembalian->status_kembali }}</td> --}}
                                            <td>
                                                <ul class="list-inline m-0">
                                                    <a href="/pengembalian/{{ $pengembalian->id }}/edit"
                                                        class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                    <form action="/pengembalian/{{ $pengembalian->id }}" method="post"
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
                            @if (isset($pengembalians) && $pengembalians instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                {{ $pengembalians->links('pagination::bootstrap-5') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
