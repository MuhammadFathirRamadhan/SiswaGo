<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo grivealbums.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SiswaGo</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">SiswaGo</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#place" class="nav__link">Unit Sekolah</a></li>
                </ul>
                <div class="nav__dark">
                    <span class="change-theme-name">Dark mode</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>
                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="img/backgroundhomesiswago.jpg" alt="" class="home__img">
            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Menjemput Siswa dengan cepat</span>
                    <h1 class="home__data-title">Hemat Waktumu<br> dengan <b> SiswaGo</b></h1>
                    <a href="#place" class="button">Mulai</a>
                </div>
            </div>
        </section>

<!--==================== PLACES ====================-->
<section class="place section" id="place">
    <h2 class="section__title">Pilih Unit Sekolah</h2>

    <div class="place__container container grid">
        <!-- Card 1 -->
        <div class="place__card">
            <img src="UnitSekolah/RA sAKINAH OK.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">Raudhatul Athfal Sakinah</h3>
                    <span class="place__subtitle">Rawamangun</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='/ra-sakinah/index'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>

        <!-- Card 2 -->
        <div class="place__card">
            <img src="UnitSekolah/PlaygroupSakinahRawamangun.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">Playgroup Sakinah Rawamangun</h3>
                    <span class="place__subtitle">Rawamangun</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='/playgroup-sakinah/index'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>

        <!-- Card 3 -->
        <div class="place__card">
            <img src="UnitSekolah/TKIA13.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">TKIA 13 Rawamangun</h3>
                    <span class="place__subtitle">Rawamangun</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='{{ route('TKIA.pickups') }}'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>

        <!-- Card 4 -->
        <div class="place__card">
            <img src="UnitSekolah/SDIA 13.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">SDIA 13 Rawamangun</h3>
                    <span class="place__subtitle">Rawamangun</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='/sdia-13/index'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>

        <!-- Card 5 -->
        <div class="place__card">
            <img src="UnitSekolah/SMPIA12.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">SMPIA 12 Rawamangun</h3>
                    <span class="place__subtitle">Rawamangun</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='/smpia-12/index'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>

        <!-- Card 6 -->
        <div class="place__card">
            <img src="UnitSekolah/SMPIA 55.jpg" alt="" class="place__img">
            <div class="place__content">
                <div class="place__data">
                    <h3 class="place__title">SMPIA 55 Jatimakmur</h3>
                    <span class="place__subtitle">Jatimakmur</span>
                </div>
            </div>
            <button class="button button--flex place__button" onclick="window.location.href='/smpia-55/index'">
                <i class="ri-arrow-right-line"></i>
            </button>
        </div>
    </div>
</section>
    </main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <p class="footer__description"><center>Menjemput dengan lebih Aman, Nyaman, dan Efisien</center></p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function navigateToLogin(schoolName) {
            // Sesuaikan URL login jika diperlukan
            let loginUrl = `/login`; // Menggunakan schoolName dalam URL
            window.location.href = loginUrl;  // Mengarahkan ke halaman login
        }
    </script>

    <script src="js/scrollreveal.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
