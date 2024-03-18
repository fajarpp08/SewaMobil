@extends('admin.layout.main')

@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <a class="single_quick_activity d-flex" href="/mobil">
                                            <div class="icon">
                                                <img src="../assets-admin/img/icon/car.png" alt>
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter">{{ @count($mobils) }}</span> </h3>
                                                <p>Data Mobil</p>
                                            </div>
                                        </a>
                                        <a class="single_quick_activity d-flex" href="/sewa">
                                            <div class="icon">
                                                <img src="../assets-admin/img/icon/car-rental.png" alt>
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter">{{ @count($sewas) }}</span> </h3>
                                                <p>Data Sewa</p>
                                            </div>
                                        </a>
                                        <a class="single_quick_activity d-flex" href="/pengembalian">
                                            <div class="icon">
                                                <img src="../assets-admin/img/icon/recycle.png" alt>
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter">{{ @count($pengembalians) }}</span> </h3>
                                                <p>Data Pengembalian</p>
                                            </div>
                                        </a>
                                        <a class="single_quick_activity d-flex" href="/useradm">
                                            <div class="icon">
                                                <img src="../assets-admin/img/icon/user.png" alt>
                                            </div>
                                            <div class="count_content">
                                                <h3><span class="counter">{{ @count($users) }}</span> </h3>
                                                <p>Data User</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="white_box card_height_100">
                        <div class="box_header border_bottom_1px  ">
                            <div class="main-title">
                                <h3 class="mb_25">Our Cars!</h3>
                            </div>
                        </div>
                        <div class="staf_list_wrapper sraf_active owl-carousel">
                            @foreach ($mobilData->sortByDesc('created_at') as $mobil)
                                <div class="single_staf">
                                    <div class="staf_thumb">
                                        @if ($mobil->file)
                                            <img src="{{ asset('storage/mobil/' . $mobil->file) }}" alt>
                                        @else
                                            <img src="{{ asset('assets-admin/img/profile_user.png') }}" alt="mobil"
                                                class="img-fluid rounded-circle" width="80">
                                        @endif
                                        {{-- <img src="{{ asset('storage/mobil/' . $mobil->foto) }}" alt> --}}
                                    </div>
                                    <h4>{{ $mobil->merek }} - {{ $mobil->model }}</h4>
                                    <p>{{ $mobil->noplat }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
