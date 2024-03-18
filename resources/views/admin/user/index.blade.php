@extends('admin.layout.main')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> {{ session('message') }}
        </div>
    @endif
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Data User</h4>
                            <div class="box_right d-flex lms_block">
                                {{-- <form action="{{ route('useradm.search') }}" method="get"> --}}
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <div class="search_field">
                                            <input type="text" name="keyword"
                                                value="{{ isset($keyword) ? $keyword : '' }}"
                                                placeholder="Search content here...">
                                        </div>
                                        <button type="submit"> <i class="ti-search"></i> </button>
                                    </div>
                                </div>
                                {{-- </form> --}}
                                <div class="add_button ms-2">
                                    <a href="/useradm/create" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No SIM</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->nosim }}</td>
                                            <td>{{ $user->nohp }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <ul class="list-inline m-0">
                                                    <a href="/useradm/{{ $user->id }}/edit" class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                    <form action="/useradm/{{ $user->id }}" method="post"
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
                            @if (isset($users) && $users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                {{ $users->links('pagination::bootstrap-5') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
