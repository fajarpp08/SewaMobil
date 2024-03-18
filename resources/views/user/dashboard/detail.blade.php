@extends('user.layout.main')

@section('content')
    <!-- header -->
    <!-- end header -->

    <!-- main content -->
    <main class="main">
        <div class="container">
            <section class="row">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="index.html">Home</a></li>
                        <li class="breadcrumbs__item"><a href="cars.html">Explore cars</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">{{ $mobils->model }}</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>{{ $mobils->merek }} - {{ $mobils->model }}</h1>
                    </div>
                </div>
                <!-- end title -->

                <!-- details -->
                <div class="col-12 col-lg-7">
                    <div class="details">
                        <div class="splide splide--details details__slider">
                            <div class="splide__arrows">
                                <button class="splide__arrow splide__arrow--prev" type="button"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z">
                                        </path>
                                    </svg></button>
                                <button class="splide__arrow splide__arrow--next" type="button"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                        </path>
                                    </svg></button>
                            </div>

                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ asset('storage/mobil/' . $mobils->file) }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <ul id="thumbnails" class="thumbnails">
                            <li class="thumbnail">
                                <img src="{{ asset('storage/mobil/' . $mobils->file) }}" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="{{ asset('storage/mobil/' . $mobils->file) }}" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="{{ asset('storage/mobil/' . $mobils->file) }}" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="{{ asset('storage/mobil/' . $mobils->file) }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end details -->

                <!-- offer -->
                <div class="col-12 col-lg-5">
                    <div class="offer">
                        <span class="offer__title">Deskripsi</span>
                        <div class="offer__wrap">
                            <span class="offer__price">Rp. {{ $mobils->harga }}<sub>/ hari</sub></span>
                            <button class="offer__favorite" type="button" aria-label="Add to favorite"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" />
                                </svg></button>
                            <a href="{{ route('rental.form', ['mobil_id' => $mobils->id]) }}"
                                data-harga="{{ $mobils->harga }}" type="button"
                                class="offer__rent"><span>Rental</span></a>
                        </div>

                        <span class="offer__title">Detail Mobil</span>
                        <ul class="offer__list">
                            <li>
                                <span class="offer__list-name">Harga rental per hari</span>
                                <span class="offer__list-value">Rp. {{ $mobils->harga }}</span>
                            </li>
                            <li>
                                <span class="offer__list-name">Merek</span>
                                <span class="offer__list-value">{{ $mobils->merek }}</span>
                            </li>
                            <li>
                                <span class="offer__list-name">Model</span>
                                <span class="offer__list-value">{{ $mobils->model }}</span>
                            </li>
                            <li>
                                <span class="offer__list-name">Nomor Plat</span>
                                <span class="offer__list-value">{{ $mobils->noplat }}</span>
                            </li>
                            <li>
                                <span class="offer__list-name">Deskripsi</span>
                                <span class="offer__list-value">{{ $mobils->deskripsi }}</span>
                            </li>
                        </ul>

                        <span class="offer__title">Detail Mesin</span>
                        <ul class="offer__details">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z">
                                    </path>
                                </svg>
                                <span>4 People</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z">
                                    </path>
                                </svg>
                                <span>Gasoline</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z">
                                    </path>
                                </svg>
                                <span>8.2km / 1-litre</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z">
                                    </path>
                                </svg>
                                <span>Automatic</span>
                            </li>
                        </ul>

                        <span class="offer__title">Share</span>
                        <div class="offer__share">
                            <a href="#" class="offer__share-link offer__share-link--fb"><svg width="9"
                                    height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.56341 16.8197V8.65888H7.81615L8.11468 5.84663H5.56341L5.56724 4.43907C5.56724 3.70559 5.63693 3.31257 6.69042 3.31257H8.09873V0.5H5.84568C3.1394 0.5 2.18686 1.86425 2.18686 4.15848V5.84695H0.499939V8.6592H2.18686V16.8197H5.56341Z">
                                    </path>
                                </svg> share</a>
                            <a href="#" class="offer__share-link offer__share-link--tw"><svg width="16"
                                    height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55075 3.19219L7.58223 3.71122L7.05762 3.64767C5.14804 3.40404 3.47978 2.57782 2.06334 1.1902L1.37085 0.501686L1.19248 1.01013C0.814766 2.14353 1.05609 3.34048 1.843 4.14552C2.26269 4.5904 2.16826 4.65396 1.4443 4.38914C1.19248 4.3044 0.972149 4.24085 0.951164 4.27263C0.877719 4.34677 1.12953 5.31069 1.32888 5.69202C1.60168 6.22165 2.15777 6.74068 2.76631 7.04787L3.28043 7.2915L2.67188 7.30209C2.08432 7.30209 2.06334 7.31268 2.12629 7.53512C2.33613 8.22364 3.16502 8.95452 4.08833 9.2723L4.73884 9.49474L4.17227 9.8337C3.33289 10.321 2.34663 10.5964 1.36036 10.6175C0.888211 10.6281 0.5 10.6705 0.5 10.7023C0.5 10.8082 1.78005 11.4014 2.52499 11.6344C4.75983 12.3229 7.41435 12.0264 9.40787 10.8506C10.8243 10.0138 12.2408 8.35075 12.9018 6.74068C13.2585 5.88269 13.6152 4.315 13.6152 3.56293C13.6152 3.07567 13.6467 3.01212 14.2343 2.42953C14.5805 2.09056 14.9058 1.71983 14.9687 1.6139C15.0737 1.41264 15.0632 1.41264 14.5281 1.59272C13.6362 1.91049 13.5103 1.86812 13.951 1.39146C14.2762 1.0525 14.6645 0.438131 14.6645 0.258058C14.6645 0.22628 14.5071 0.279243 14.3287 0.374576C14.1398 0.480501 13.7202 0.639389 13.4054 0.734722L12.8388 0.914795L12.3247 0.565241C12.0414 0.374576 11.6427 0.162725 11.4329 0.0991699C10.8978 -0.0491255 10.0794 -0.0279404 9.59673 0.14154C8.2852 0.618204 7.45632 1.84694 7.55075 3.19219Z">
                                    </path>
                                </svg> tweet</a>
                            <a href="#" class="offer__share-link offer__share-link--link"><svg width="18"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M8,12a1,1,0,0,0,1,1h6a1,1,0,0,0,0-2H9A1,1,0,0,0,8,12Zm2,3H7A3,3,0,0,1,7,9h3a1,1,0,0,0,0-2H7A5,5,0,0,0,7,17h3a1,1,0,0,0,0-2Zm7-8H14a1,1,0,0,0,0,2h3a3,3,0,0,1,0,6H14a1,1,0,0,0,0,2h3A5,5,0,0,0,17,7Z">
                                    </path>
                                </svg> <span>link</span></a>
                        </div>
                    </div>
                </div>
                <!-- end offer -->
            </section>
        </div>

        {{-- other cars --}}
        <div class="container">
            <!-- cars -->
            <section class="row">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>You may also like</h2>

                        <a href="/mobiluser" class="main__link">View more <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                            </svg></a>
                    </div>
                </div>
                <!-- end title -->

                @foreach ($mobilsAll as $mobilsAll)
                    <!-- car -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="car">
                            <div class="splide splide--card car__slider">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z">
                                            </path>
                                        </svg></button>
                                    <button class="splide__arrow splide__arrow--next" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                            </path>
                                        </svg></button>
                                </div>

                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="{{ asset('storage/mobil/' . $mobilsAll->file) }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car__title">
                                <h3 class="car__name"><a
                                        href="{{ route('mobil.detail', ['id' => $mobilsAll->id]) }}">{{ $mobilsAll->model }}</a>
                                </h3>
                                <span class="car__year">{{ $mobilsAll->merek }}</span>
                            </div>
                            <div class="car__footer">
                                <span class="car__price">Rp. {{ $mobilsAll->harga }} <sub>/ hari</sub></span>
                                <a href="{{ route('mobil.detail', ['id' => $mobilsAll->id]) }}"
                                    class="car__detail"><span>Detail</span></a>
                                <a href="{{ route('rental.form', ['mobil_id' => $mobilsAll->id]) }}"
                                    data-harga="{{ $mobilsAll->harga }}" class="car__more"><span>Rental</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- end car -->
                @endforeach

            </section>
            <!-- end cars -->
        </div>
    </main>
    <!-- end main content -->
@endsection
