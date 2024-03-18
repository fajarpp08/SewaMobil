@extends('user.layout.main')

@section('content')
    <!-- main content -->
    <main class="main">
        <div class="container">
            <div class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="index.html">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">My account</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>My account</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="profile">
                        <!-- tabs nav -->
                        <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab"
                                    aria-controls="tab-1" aria-selected="true">My Account</button>
                            </li>
                        </ul>
                        <!-- end tabs nav -->
                    </div>

                    <!-- content tabs -->
                    <div class="tab-content">
                        {{-- setting account --}}
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" tabindex="0">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12 col-lg-12">
                                    <form action="#" class="sign__form sign__form--profile">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Data akun</h4>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="username">Nama</label>
                                                    <input id="username" type="text" name="username" class="sign__input"
                                                        placeholder="{{ auth()->user()->nama }}" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="email1">Alamat</label>
                                                    <input id="email1" type="text" name="email" class="sign__input"
                                                        placeholder="{{ auth()->user()->alamat }}" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="firstname">Nomor SIM</label>
                                                    <input id="firstname" type="text" name="firstname"
                                                        class="sign__input" placeholder="{{ auth()->user()->nosim }}"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="lastname">Nomor HP</label>
                                                    <input id="lastname" type="text" name="lastname" class="sign__input"
                                                        placeholder="{{ auth()->user()->nohp }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="sign__title">Ingin ubah data akun ? hubungi
                                                    admin.<br>
                                                    <p>dengan klik tombol dibawah ini! >_< </p>
                                                </h4>
                                            </div>
                                            <div class="col-12">
                                                <a href="https://wa.me/6281218173646?text=Halo,%20Tolong%20bantu%20saya%20ingin%20mengubah%20data%20akun%20rental%20mobil%20saya"
                                                    class="sign__btn" type="button"><span>Contact</span></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end details form -->
                            </div>
                        </div>
                        {{-- end setting account --}}
                    </div>
                    <!-- end content tabs -->
                </div>
            </div>
        </div>
    </main>
    <!-- end main content -->
@endsection
