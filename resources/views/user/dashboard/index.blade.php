@extends('user.layout.main')

@section('content')
    <main class="main">
        <!-- home -->
        <div class="home">
            <!-- home bg -->
            <div class="home__bg"></div>
            <!-- end home bg -->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="home__content">
                            <h1 class="home__title">Welcome to<br>Car Rent</h1>
                            <p class="home__text">Aplikasi rental mobil bisa dilakukan dimana saja dan kapan saja <br>
                                Dengan proses yang cepat, aman &amp; nyaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home -->

        <div class="container">
            <!-- cars -->
            <section class="row">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--first">
                        <h2>Our Cars!</h2>

                        <a href="/mobiluser" class="main__link">View more <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                            </svg></a>
                    </div>
                </div>
                <!-- end title -->

                <!-- car -->
                @foreach ($mobils as $mobil)
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
                                            <img src="{{ asset('storage/mobil/' . $mobil->file) }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car__title">
                                <h3 class="car__name"><a href="car.html">{{ $mobil->model }}</a></h3>
                                <span class="car__year">{{ $mobil->merek }}</span>
                            </div>
                            <div class="car__footer">
                                <span class="car__price">Rp. {{ $mobil->harga }} <sub>/ hari</sub></span>
                                <a href="{{ route('mobil.detail', ['id' => $mobil->id]) }}"
                                    class="car__detail"><span>Detail</span></a>
                                <a href="{{ route('rental.form', ['mobil_id' => $mobil->id]) }}" class="car__more"
                                    data-harga="{{ $mobil->harga }}"><span>Rental</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end car -->
            </section>
            <!-- end cars -->

            <!-- get started -->
            <section class="row">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Rental mobil dengan 4 langkah mudah</h2>
                    </div>
                </div>
                <!-- end title -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="step1">
                        <span class="step1__icon step1__icon--pink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M21,10.5H20v-1a1,1,0,0,0-2,0v1H17a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm-7.7,1.72A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5Z" />
                            </svg>
                        </span>
                        <h3 class="step1__title">Buat akun</h3>
                        <p class="step1__text">Buat akun dan lakukan proses pendaftaran dengan cepat dan aman untuk
                            mendapatkan akses penuh ke berbagai
                            layanan dan penawaran eksklusif.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="step1">
                        <span class="step1__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.62,13.08a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,8,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,13.08Zm13.14-4L18.4,5.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,5.05L4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H18v1a1,1,0,0,0,2,0V18.82A3,3,0,0,0,22,16V12A3,3,0,0,0,19.76,9.11ZM7.49,5.68A1,1,0,0,1,8.44,5h7.12a1,1,0,0,1,1,.68L17.61,9H6.39ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-3.38-2.92a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3.9.9,0,0,0,.54-.54A.84.84,0,0,0,18,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,16.62,13.08ZM13,13H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </span>
                        <h3 class="step1__title">Cari mobil</h3>
                        <p class="step1__text">Cari mobil yang sesuai dengan berbagai pilihan mobil dan harga.
                            Kami menawarkan mobil berkualitas untuk memastikan kepuasan pelanggan.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="step1">
                        <span class="step1__icon step1__icon--green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M13.3,12.22A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5ZM21.71,9.13a1,1,0,0,0-1.42,0l-2,2-.62-.63a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l1.34,1.34a1,1,0,0,0,1.41,0l2.67-2.67A1,1,0,0,0,21.71,9.13Z" />
                            </svg>
                        </span>
                        <h3 class="step1__title">Lakukan rental</h3>
                        <p class="step1__text">Setelah menemukan mobil yang sempurna, Anda tinggal mengklik tombol 'Rental'.
                            Proses pemesanan akan dilakukan secara cepat dan mudah.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="step1">
                        <span class="step1__icon step1__icon--purple">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M20.71,16.71l-2.42-2.42a1,1,0,0,0-1.42,0l-3.58,3.58a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l3.58-3.58A1,1,0,0,0,20.71,16.71ZM16,20H15V19l2.58-2.58,1,1Zm-6,0H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h4a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,14h6a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm0-4H9A1,1,0,0,0,9,8H8a1,1,0,0,0,0,2Zm2,6H8a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </span>
                        <h3 class="step1__title">Pesan &amp; rental</h3>
                        <p class="step1__text">Mobil pilihan Anda akan langsung tersedia untuk digunakan.
                            Ambil kunci dan nikmati perjalanan Anda tanpa ribet.
                            Kami selalu memberikan layanan terbaik. </p>
                    </div>
                </div>
            </section>
            <!-- end get started -->
        </div>

        <!-- news -->
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Our Blog</h2>
                    </div>
                </div>
                <!-- end title -->
            </div>
        </div>

        <div class="main__carousel splide splide--content">
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z">
                        </path>
                    </svg></button>
                <button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                        </path>
                    </svg></button>
            </div>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="post post--carousel">
                            <a href="article.html" class="post__img">
                                <img src="../assets-user/img/posts/8.jpg" alt="">
                            </a>

                            <div class="post__content">
                                <a href="#" class="post__category"><span>Cars</span></a>
                                <h3 class="post__title"><a href="article.html">What´s required when <br>renting a
                                        car?</a></h3>
                                <div class="post__meta">
                                    <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z" />
                                        </svg> June 08, 2023</span>
                                    <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z" />
                                        </svg> 32</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="post post--carousel">
                            <a href="article.html" class="post__img">
                                <img src="../assets-user/img/posts/3.jpg" alt="">
                            </a>

                            <div class="post__content">
                                <a href="#" class="post__category"><span>Cars</span></a>
                                <h3 class="post__title"><a href="article.html">Statistics showed which average age of
                                        cars</a></h3>
                                <div class="post__meta">
                                    <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z" />
                                        </svg> February 28, 2024</span>
                                    <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z" />
                                        </svg> 44</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="post post--carousel">
                            <a href="article.html" class="post__img">
                                <img src="../assets-user/img/posts/1.jpg" alt="">
                            </a>

                            <div class="post__content">
                                <a href="#" class="post__category"><span>Company</span></a>
                                <h3 class="post__title"><a href="article.html">Opening of new offices of the company
                                        throughout the country</a></h3>
                                <div class="post__meta">
                                    <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z" />
                                        </svg> April 10, 2021</span>
                                    <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z" />
                                        </svg> 118</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="post post--carousel">
                            <a href="article.html" class="post__img">
                                <img src="../assets-user/img/posts/4.jpg" alt="">
                            </a>

                            <div class="post__content">
                                <a href="#" class="post__category"><span>Repair</span></a>
                                <h3 class="post__title"><a href="article.html">What cars are most vulnerable <br>to
                                        corrosion?</a></h3>
                                <div class="post__meta">
                                    <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z" />
                                        </svg> June 10, 2023</span>
                                    <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z" />
                                        </svg> 0</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="post post--carousel">
                            <a href="article.html" class="post__img">
                                <img src="../assets-user/img/posts/5.jpg" alt="">
                            </a>

                            <div class="post__content">
                                <a href="#" class="post__category"><span>Company</span></a>
                                <h3 class="post__title"><a href="article.html">New rules for handling our cars</a>
                                </h3>
                                <div class="post__meta">
                                    <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z" />
                                        </svg> February 29, 2024</span>
                                    <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z" />
                                        </svg> 97</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end news -->
    </main>
@endsection
