<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__content">
                    <div class="header__logo">
                        <a href="/dashboarduser">
                            <img src="../assets-user/img/car-logo.png" alt="">
                        </a>
                    </div>

                    <div class="header__menu">
                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/dashboarduser">Home
                                </a>
                            </li>

                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/mobiluser">Explore cars
                                </a>

                            </li>

                            {{-- Peminjaman --}}
                            <li class="header__nav-item">
                                <a href="/rentalan" class="header__nav-link">Peminjaman</a>
                            </li>
                            
                            {{-- Peminjaman --}}
                            <li class="header__nav-item">
                                <a href="/account" class="header__nav-link">My Account</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header__actions">
                        <div class="header__phone">
                            <a href="tel: +6281218173646">0812 1817 3646</a>
                            <span>Open Everyday &amp; 24 hours</span>
                        </div>


                        <div class="header__action">
                            <a class="header__profile-btn" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                                </svg>
                            </a>

                            <ul class="dropdown-menu header__profile-menu">
                                <li>
                                    <a href="/account"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                                        </svg> <span>My account</span></a>
                                </li>
                                <li>
                                    <a href="/rentalan"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M9,12H7a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2ZM8,10h4a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm1,6H7a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm12-4H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-6.44-2.83a.76.76,0,0,0-.18-.09.6.6,0,0,0-.19-.06,1,1,0,0,0-.9.27A1.05,1.05,0,0,0,12,17a1,1,0,0,0,.07.38,1.19,1.19,0,0,0,.22.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,14,17a1.05,1.05,0,0,0-.29-.71A1.58,1.58,0,0,0,13.56,16.17Zm.14-3.88a1,1,0,0,0-1.62.33A1,1,0,0,0,13,14a1,1,0,0,0,1-1,1,1,0,0,0-.08-.38A.91.91,0,0,0,13.7,12.29Z" />
                                        </svg> <span>Peminjaman</span></a>
                                </li>

                                <li>
                                    <a href="/logout"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z" />
                                        </svg> <span>Log out</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <button class="header__btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
