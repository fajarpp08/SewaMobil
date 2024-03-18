<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rental Mobil</title>
    <link rel="icon" href="{{ asset('assets-admin/img/car-rent-logo-web.png') }}" type="image/png">

    <style id="" media="all">
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aX8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aX8.ttf) format('truetype');
        }
    </style>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets-forms/css/bootstrap.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('assets-forms/css/style.css') }}" />


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <meta name="robots" content="noindex, follow">
    <script nonce="cc8e0287-0f38-4262-92bb-26d6e8623a25">
        try {
            (function(w, d) {
                ! function(du, dv, dw, dx) {
                    du[dw] = du[dw] || {};
                    du[dw].executed = [];
                    du.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    du.zaraz.q = [];
                    du.zaraz._f = function(dy) {
                        return async function() {
                            var dz = Array.prototype.slice.call(arguments);
                            du.zaraz.q.push({
                                m: dy,
                                a: dz
                            })
                        }
                    };
                    for (const dA of ["track", "set", "debug"]) du.zaraz[dA] = du.zaraz._f(dA);
                    du.zaraz.init = () => {
                        var dB = dv.getElementsByTagName(dx)[0],
                            dC = dv.createElement(dx),
                            dD = dv.getElementsByTagName("title")[0];
                        dD && (du[dw].t = dv.getElementsByTagName("title")[0].text);
                        du[dw].x = Math.random();
                        du[dw].w = du.screen.width;
                        du[dw].h = du.screen.height;
                        du[dw].j = du.innerHeight;
                        du[dw].e = du.innerWidth;
                        du[dw].l = du.location.href;
                        du[dw].r = dv.referrer;
                        du[dw].k = du.screen.colorDepth;
                        du[dw].n = dv.characterSet;
                        du[dw].o = (new Date).getTimezoneOffset();
                        if (du.dataLayer)
                            for (const dH of Object.entries(Object.entries(dataLayer).reduce(((dI, dJ) => ({
                                    ...dI[1],
                                    ...dJ[1]
                                })), {}))) zaraz.set(dH[0], dH[1], {
                                scope: "page"
                            });
                        du[dw].q = [];
                        for (; du.zaraz.q.length;) {
                            const dK = du.zaraz.q.shift();
                            du[dw].q.push(dK)
                        }
                        dC.defer = !0;
                        for (const dL of [localStorage, sessionStorage]) Object.keys(dL || {}).filter((dN => dN
                            .startsWith("_zaraz_"))).forEach((dM => {
                            try {
                                du[dw]["z_" + dM.slice(7)] = JSON.parse(dL.getItem(dM))
                            } catch {
                                du[dw]["z_" + dM.slice(7)] = dL.getItem(dM)
                            }
                        }));
                        dC.referrerPolicy = "origin";
                        dC.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(du[
                            dw])));
                        dB.parentNode.insertBefore(dC, dB)
                    };
                    ["complete", "interactive"].includes(dv.readyState) ? zaraz.init() : du.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>Rental mobil impianmu sekarang</h1>
                            <p>Tempat Penyewaan Mobil Yang Mudah, Aman &amp; Terpercaya
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form action="/rental/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <span class="form-title">FORM RENTAL</span>
                                </div>
                                <input type="hidden" name="mobil_id" value="{{ $mobils->id }}">

                                <div class="form-group">
                                    <span class="form-label">Nama</span>
                                    <input class="form-control" type="text" value="{{ $users }}"
                                        name="user_id" readonly>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Nomor SIM</span>
                                    <input class="form-control" type="text" value="{{ $nama }}"
                                        name="user_id" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal Mulai</span>
                                            <input class="form-control sign__input" type="date" placeholder="Date"
                                                id="tgl_mulai" name="tgl_mulai"
                                                min="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal Selesai</span>
                                            <input class="form-control sign__input" type="date" name="tgl_akhir"
                                                placeholder="Date" id="tgl_akhir"
                                                min="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Total Harga</span>
                                    <input class="form-control sign__input" type="text" id="total_harga"
                                        name="total_harga" placeholder="Total Harga" data-harga="{{ $mobils->harga }}"
                                        readonly>
                                </div>
                                <div class="form-btn">
                                    <a href="/dashboarduser" type="button" class="go-back-btn">Kembali</a>
                                    <button type="submit" name="submit" class="submit-btn">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"86169a39ce746040","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>

    {{-- script for date and price --}}
    <script>
        // Sebelum memanggil fungsi updateTotalPrice, tambahkan kode berikut:

        console.log('Script loaded!');

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('tgl_mulai').addEventListener('change', updateTotalPrice);
            document.getElementById('tgl_akhir').addEventListener('change', updateTotalPrice);
        });

        function updateTotalPrice() {
            var startDate = document.getElementById('tgl_mulai').value;
            var endDate = document.getElementById('tgl_akhir').value;
            var total_price_element = document.getElementById('total_harga');

            var hargaPerHari = parseFloat(total_price_element.dataset.harga);

            if (startDate && endDate && total_price_element) {
                var start = new Date(startDate);
                var end = new Date(endDate);
                var diffInDays = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                var totalHarga = diffInDays * hargaPerHari;

                if (!isNaN(totalHarga)) {
                    total_price_element.value = totalHarga.toFixed(2);
                }


                var tglRental =
                    {!! json_encode($tglRental) !!}; // Anda perlu memberikan data tanggal yang sudah dipesan dari controller

                // Set atribut min untuk tanggal yang sudah dipesan
                tglRental.forEach(function(bookedDate) {
                    if (startDate <= bookedDate && bookedDate <= endDate) {
                        document.getElementById('tgl_mulai').min = endDate;
                        document.getElementById('tgl_akhir').min = endDate;

                        // Tampilkan pesan di dalam elemen dengan id 'error-message'
                        var errorMessageElement = document.getElementById('error-message');
                        errorMessageElement.innerText =
                            'Mobil pada tanggal ini tidak tersedia. Silakan pilih tanggal lain.';
                        errorMessageElement.style.display = 'block'; // Tampilkan elemen pesan kesalahan

                        // Menyembunyikan pesan error setelah 2 detik
                        setTimeout(function() {
                            errorMessageElement.style.display = 'none';
                        }, 3000);
                    }
                });

                if (isDateAvailable) {
                    errorMessageElement.style.display = 'none';
                }
            }
        }
    </script>
</body>

</html>
