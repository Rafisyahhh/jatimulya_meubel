<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jatimulya Meubel</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="favicon.png" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.min.css" />
</head>

<body>
    <div id="preloader">
        <div id="loader-box">
            <div id="loader"></div>
        </div>
    </div>
    <div class="wrapper">
        <header class="header">
            <div class="header__wrapper">
                <div class="header__container">
                    <div class="header__inner">
                        <div class="header__logo">
                            <img src="./images/header/logo.png" alt="logo" />
                        </div>
                        <div class="header__actions actions">
                            <a href="/login" class="hero__button button" type="button">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="page__hero hero">
                <div class="hero__container">
                    <div class="hero__inner">
                        <div class="hero__body">
                            <h1 class="hero__title">Jatimulya Meubel</h1>
                            <div class="hero__text">
                                <p>
                                    Selamat datang di Jatimulya Meubel, tempat Anda menemukan furnitur berkualitas
                                    tinggi dengan desain elegan yang dibuat dengan bahan kayu pilihan.
                                </p>
                            </div>
                            <a href="" class="hero__button button product" type="button">Lihat Produk</a>
                        </div>
                        <div class="hero__slider slider-hero">
                            <div class="slider-hero__slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="slider-hero__slide swiper-slide">
                                        <img src="./images/hero/slide-1.jpg" alt="living room" />
                                    </div>
                                    <div class="slider-hero__slide swiper-slide">
                                        <img src="./images/hero/slide-2.jpg" alt="living room" />
                                    </div>
                                </div>
                                <div class="slider-hero__pagination swiper-pagination"></div>
                            </div>
                            <div class="slider-hero__arrows">
                                <button type="button" class="slider-hero__arrow-prev orange-arrow-prev"></button>
                                <button type="button" class="slider-hero__arrow-next orange-arrow-next"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__interiors interiors">
                <div class="interiors__container">
                    <div class="interiors__slider slider-interiors">
                        <h2 class="slider-interiors__title title-h2">
                            Beberapa interior yang kami sediakan untuk anda
                        </h2>
                        <div class="slider-interiors__outer">
                            <div class="slider-interiors__slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="slider-interiors__slide swiper-slide">
                                        <img src="./images/interiors/image-1.jpg" alt="interior" />
                                    </div>
                                    <div class="slider-interiors__slide swiper-slide">
                                        <img src="./images/interiors/image-2.jpg" alt="interior" />
                                    </div>
                                    <div class="slider-interiors__slide swiper-slide">
                                        <img src="./images/interiors/image-3.jpg" alt="interior" />
                                    </div>
                                </div>
                            </div>
                            <div class="slider-interiors__arrows">
                                <button type="button" class="slider-interiors__arrow-prev orange-arrow-prev"></button>
                                <button type="button" class="slider-interiors__arrow-next orange-arrow-next"></button>
                            </div>
                        </div>
                    </div>
                    <div class="interiors__rooms">
                        <div class="interiors__room room-interiors">
                            <a href="#" class="room-interiors__image gray-hover">
                                <img src="./images/interiors/img-01.jpg" alt="room" />
                            </a>
                            <div class="room-interiors__content">
                                <h3 class="room-interiors__title">Ruang Tamu</h3>
                                <div class="room-interiors__text">
                                    <p>
                                        Perbagus ruang tamu Anda dengan kursi dan meja ruang tamu yang elegan dan
                                        minimalis dari Jatimulya Mebel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interiors__room room-interiors">
                            <a href="#" class="room-interiors__image gray-hover">
                                <img src="./images/interiors/img-02.jpg" alt="room" />
                            </a>
                            <div class="room-interiors__content">
                                <h3 class="room-interiors__title">Kamar Tidur</h3>
                                <div class="room-interiors__text">
                                    <p>
                                        Membuat kamar tidur yang aesthetic dengan kasur yang empuk,kokoh dan elegan dari
                                        Jatimulya Mebel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interiors__room room-interiors">
                            <a href="#" class="room-interiors__image gray-hover">
                                <img src="./images/interiors/img-03.jpg" alt="room" />
                            </a>
                            <div class="room-interiors__content">
                                <h3 class="room-interiors__title">Interor Kantor</h3>
                                <div class="room-interiors__text">
                                    <p>
                                        Membuat interior kantor yang nyaman untuk dibuat kerja sepanjang hari dengan
                                        kursi dan meja kantor yang elegan dan keren dari Jatimulya Mebel
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__products products" id="products">
                <div class="products__container">
                    <div class="products__header">
                        <h2 class="products__title title-h2">Beberapa Produk Kami</h2>
                    </div>
                    <div class="products__tabs tabs-products">
                        <div class="tab-items">
                            <div data-tab-type="Sofa" class="tab-item">
                                <article class="item-card">
                                    <div class="item-card__content">
                                        <div class="item-card__label">Meja</div>
                                        <a href="#" class="item-card__title-link accent-hover">
                                            <h3>Meja Makan</h3>
                                        </a>
                                    </div>
                                    <a href="#" class="item-card__image-link gray-hover">
                                        <img src="images/products/img-1.png" alt="image" />
                                    </a>
                                </article>
                            </div>
                            <div data-tab-type="Light" class="tab-item">
                                <article class="item-card">
                                    <div class="item-card__content">
                                        <div class="item-card__label">Lemari</div>
                                        <a href="#" class="item-card__title-link accent-hover">
                                            <h3>Lemari TV</h3>
                                        </a>
                                    </div>
                                    <a href="#" class="item-card__image-link gray-hover">
                                        <img src="images/products/img-2.png" alt="image" />
                                    </a>
                                </article>
                            </div>
                            <div data-tab-type="Chair" class="tab-item">
                                <article class="item-card">
                                    <div class="item-card__content">
                                        <div class="item-card__label">Kursi</div>
                                        <a href="#" class="item-card__title-link accent-hover">
                                            <h3>Kursi Kayu Santai</h3>
                                        </a>
                                    </div>
                                    <a href="#" class="item-card__image-link gray-hover">
                                        <img src="images/products/img-3.png" alt="image" />
                                    </a>
                                </article>
                            </div>
                            <div data-tab-type="Bed" class="tab-item">
                                <article class="item-card">
                                    <div class="item-card__content">
                                        <div class="item-card__label">Sofa</div>
                                        <a href="#" class="item-card__title-link accent-hover">
                                            <h3>Sofa Kayu Minimalis</h3>
                                        </a>
                                    </div>
                                    <a href="#" class="item-card__image-link gray-hover">
                                        <img src="images/products/img-4.png" alt="image" />
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__subscribe subscribe-footer">
                    <img src="./images/header/logo.png" width="350" alt="Logo">
                    <div class="subscribe-footer__content">
                        <h2 class="subscribe-footer__title title-h2 title-light-upper">
                            Hubungi Kami:
                        </h2>
                        <div class="subscribe-footer__text">
                            <p>
                                <i>0852762824824</i>
                            </p>
                            <p>
                                <i>Jl. Bromo No.7, Gurit, Babadan, Kec. Wlingi, Kabupaten Blitar, Jawa Timur 66184</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__copyright">
                        <div class="footer__copyright-heading">Jatimulya Meubel</div>
                        <div class="footer__copyright-copy">
                            © 2024. All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
<script>
    document.querySelector('.product.button').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#products').scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    });
</script>
