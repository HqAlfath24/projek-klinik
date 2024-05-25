<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Pratama Erin's</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml">

    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="top">

    <!-- HEADER -->

    <header class="header">

        <div class="header-top" style="background-color: rgb(219, 18, 108);">
            <div class="container">

                <ul class="contact-list ">

                    <li class="contact-item linkku">
                        <i class="fa-regular fa-envelope fa-shake fa-lg" style="color: #74C0FC;"></i>
                        <a href="mailto: pratamaklinikerins@gmail.com" class="contact-link"> pratamaklinikerins@gmail.com
                        </a>
                    </li>

                    <li class="contact-item linkku">
                        <i class="fa-brands fa-whatsapp fa-bounce fa-lg" style="color: #0e956d;"></i>
                        <a href="whatsapp://send?text=Hallo dok mau tanya?&phone=+6285150716061" class="contact-link">085150716061</a>
                    </li>

                </ul>

                <ul class="social-list login-page">
                    <li class="contact-item linkku">
                        <!-- <i class="fa-brands fa-instagram fa-fade fa-xl" style="color: #e89292;"></i> -->
                        <a href="/pasien" class="contact-link"> Pasien
                        </a>
                    </li>

                    <li class="contact-item linkku">
                        <!-- <i class="fa-brands fa-instagram fa-fade fa-xl" style="color: #e89292;"></i> -->
                        <a href="/karyawan" class="contact-link"> Karyawan
                        </a>
                    </li>
                    <li class="contact-item linkku">
                        <!-- <i class="fa-brands fa-instagram fa-fade fa-xl" style="color: #e89292;"></i> -->
                        <a href="/dokter" class="contact-link"> Dokter
                        </a>
                    </li>


                    </a>
                    </li>
                    </li>




                </ul>

            </div>
        </div>

        <div class="header-bottom" data-header>
            <div class="container">
                <img src="assets/images/logo.png" class="logo fa-beat-fade" width="40px" height="60px" margin-right="50px" alt="">
                <a href="#" class="logo" id="logoku"></a>

                <nav class="navbar container" data-navbar>
                    <ul class="navbar-list">

                        <li>
                            <a href="#home" class="navbar-link" data-nav-link>Home</a>
                        </li>

                        <li>
                            <a href="#service" class="navbar-link" data-nav-link>Services</a>
                        </li>

                        <li>
                            <a href="#produk" class="navbar-link" data-nav-link>Product</a>
                        </li>

                        <li>
                            <a href="#galeri" class="navbar-link" data-nav-link>Galery</a>
                        </li>

                        <li>
                            <a href="#kontak" class="navbar-link" data-nav-link>Contact</a>
                        </li>

                    </ul>
                </nav>

                <a href="/admin" class="btn">Login Admin</a>

                <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
                    <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
                    <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
                </button>

            </div>
        </div>

    </header>





    <main>

        <article>


            <!-- Slider Image-->
            <div class="slider" data-aos="fade-down" data-aos-duration="2000">

                <div class="content-slidee" id="home">
                    <div class="imgslide fadee">
                        <div class="numberslidee">1 / 4</div>
                        <img class="gambar" src="assets/images/slide1.jpg" alt="">

                        <div class="text">KLINIK UMUM</div>
                    </div>

                    <div class="imgslide fadee">
                        <div class="numberslidee">2 / 4</div>
                        <img class="gambar" src="assets/images/slide2.jpg" alt="">
                        <div class="text">KLINIK KECANTIKAN</div>

                    </div>

                    <div class="imgslide fadee">
                        <div class="numberslidee">3 / 4</div>
                        <img class="gambar" src="assets/images/slide3.jpg" alt="">
                        <div class="text">KLINIK GIGI</div>
                    </div>
                    <div class="imgslide fadee">
                        <div class="numberslidee">4 / 4</div>
                        <img class="gambar" src="assets/images/slide4.jpg" alt="">
                        <div class="text">PRODUK</div>
                    </div>

                    <a class="prev" onClick="nextslide(-1)">&#10094;</a>
                    <a class="next" onClick="nextslide(1)">&#10095;</a>
                </div>
                <div class="container">
                    <div class="pagee">
                        <span class="dot" onClick="dotslide(1)"></span>
                        <span class="dot" onClick="dotslide(2)"></span>
                        <span class="dot" onClick="dotslide(3)"></span>
                        <span class="dot" onClick="dotslide(4)"></span>
                    </div>
                </div>
            </div>
            <!-- HOME -->
            <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">


                <div class="container">

                    <div data-aos="fade-up" data-aos-duration="3000" class="hero-content data-header">


                        <p class="section-subtitle">Selamat Datang di Klinik Erin's</p>

                        <h1 class="h2 hero-title">Kami adalah layanan Klinik terbaik.</h1>
                        <p class="h3 heroku">Klinik Umum | Klinik Kecantikan | Klinik Gigi</p>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5610663593275!2d110.44356117475846!3d-7.06074729294174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708f1e3ff19fbb%3A0x32218a6f9d734a56!2sKlinik%20Pratama%20Erins!5e0!3m2!1sid!2sid!4v1715115091493!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h1 class="h4 hero-title">Jl. Timoho Raya No.21, Bulusan, Kec. Tembalang,<br> Kota Semarang, Jawa Tengah 50277</h1>


                    </div>

                    <figure class="hero-banner" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="500">
                        <img src="./assets/images/background.jpg" width="587" height="839" alt="hero banner" class="w-100 banner">
                    </figure>

                </div>


            </section>

            <!-- SERVICE -->

            <section class="section blog" id="service" aria-label="blog">
                <div class="container">


                    <h2 class="h2 section-title text-center" style="color: white;   text-decoration: line-through #9b6289;">Services</h2>

                    <ul class="blog-list">

                        <li>
                            <div class="blog-card" data-aos="zoom-in" data-aos-duration="2000">

                                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                                    <img src="./assets/images/slide1.jpg" width="1180" height="800" loading="lazy" alt="Klinik Umum" class="img-cover">

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title" id="klinik_umum">Klinik Umum</a>
                                    </h3>

                                    <p class="card-text">
                                        Memberikan layanan medis berkualitas tinggi dengan menggunakan teknologi terbaru.
                                    </p>

                                    <a class="btn btn-primary" id="myBtn" style=" cursor: pointer;">Lihat Detail</a>
                                </div>



                            </div>
                        </li>
                        <!-- Modal Konten Klinik UMUM-->
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <h2 class="text-center">Layanan Klinik Umum</h2>
                                <table class="table1">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Tindakan</th>
                                        <th>Tarif</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Konsultasi Dokter</td>
                                        <td>Rp.100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>USG</td>
                                        <td>Rp.50.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>perawatan Luka</td>
                                        <td>Rp.100.000</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <li>
                            <div class="blog-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="300">

                                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                                    <img src="./assets/images/slide4.jpg" width="1180" height="800" loading="lazy" alt="Dras accumsan nulla nec lacus ultricies placerat." class="img-cover">

                                    <!-- <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time class="time" datetime="2022-03-24">24th March 2022</time>
                  </div> -->
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title" id="klinik_kecantikan">Klinik Kecantikan</a>
                                    </h3>

                                    <p class="card-text">
                                        Mengutamakan kepuasan dengan memberikan perawatan yang personal dan terbaik. </p>

                                    <a class="btn btn-primary" id="myBtn2" style=" cursor: pointer;">Lihat Detail</a>

                                </div>

                            </div>
                        </li>
                        <!-- Modal Konten Kecantikam-->
                        <div id="myModal2" class="modal2">
                            <div class="modal-content2">
                                <span class="close2">&times;</span>
                                <h2 class="text-center">Layanan Klinik Kecantikan</h2>
                                <table class="table1">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Tindakan</th>
                                        <th>Tarif</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Konsultasi Dokter</td>
                                        <td>Rp.100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>USG</td>
                                        <td>Rp.50.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>perawatan Luka</td>
                                        <td>Rp.100.000</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <li>
                            <div class="blog-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="600">

                                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                                    <img src="./assets/images/slide3.jpg" width="1180" height="800" loading="lazy" alt="Seas accumsan nulla nec lacus ultricies placerat." class="img-cover">

                                    <!-- <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time class="time" datetime="2022-03-24">24th March 2022</time>
                  </div> -->
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title" id="klinik_gigi">Klinik Gigi</a>
                                    </h3>

                                    <p class="card-text">
                                        Mendorong kesadaran akan pentingnya kesehatan gigi dan mulut melalui edukasi dan promosi kesehatan kepada pasien. </p>

                                    <a class="btn btn-primary" id="myBtn3" style=" cursor: pointer;">Lihat Detail</a>

                                </div>

                            </div>
                        </li>
                        <!-- Modal Konten Klinik Gigi -->
                        <div id="myModal3" class="modal3">
                            <div class="modal-content3">
                                <span class="close3">&times;</span>
                                <h2 class="text-center">Layanan Klinik Gigi</h2>
                                <table class="table1">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Tindakan</th>
                                        <th>Tarif</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Konsultasi Dokter</td>
                                        <td>Rp.100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>USG</td>
                                        <td>Rp.50.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>perawatan Luka</td>
                                        <td>Rp.100.000</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </ul>

                </div>
            </section>





            <!-- PRODUK -->

            <section class="section cta" aria-label="cta">
                <div class="container">

                    <figure class="cta-banner" data-aos="fade-right" data-aos-duration="2000">
                        <img src="./assets/images/produk.jpg" id="produk" width="1056" height="1076" loading="lazy" alt="cta banner" class="w-100 fa-fade">
                    </figure>

                    <div class="cta-content " data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">

                        <p class="section-subtitle">Produk</p>

                        <h2 class="h2 section-title" style="color: #be4f4f;">Erin's Beauty</h2>
                        <p class="section-text section-text-1 paragraf">
                            Temukan kecantikan alami kulitmu dengan rangkaian produk perawatan kulit kami dari skincare yang menyegarkan, sunscreen yang melindungi, hingga lotion yang menjaga kelembapan kulitmu sepanjang hari. Dapatkan kulit sehat dan bersinar dengan perawatan terbaik hanya dari kami.
                        </p>
                        <br><br>

                        <a class="btn btn-primary" id="myBtn4" style=" cursor: pointer;">Lihat Produk</a>

                        <!-- Modal Lihat Produk-->
                        <div id="myModal4" class="modal4">
                            <div class="modal-content4">
                                <span class="close4">&times;</span><br><br>
                                <div class="header">
                                    <div class="container">

                                        <ul class="contact-list ">

                                            <li class="contact-item">
                                                <i class="fa-brands fa-instagram fa-fade fa-xl" style="color: #e89292;"></i>
                                                <a href="https://www.instagram.com/erinsbeautyclinic/" class="contact-link"> erinsbeautyclinic
                                                </a>
                                            </li>

                                            <li class="contact-item">
                                                <i class="fa-solid fa-cart-shopping" style="color: #d6470a;"></i>
                                                <a href="https://shopee.co.id/sher_inshop?smtt=0.251394058-1659592013.3" class="contact-link">Shoppe</a>
                                            </li>

                                        </ul>



                                    </div>
                                </div>
                                <br><br>
                                <h2 class="title-produk">Promo Produk</h2>
                                <div class="grid">
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/promo.png" alt="">

                                        </article>
                                    </div>
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/promo2.png" alt="">

                                        </article>

                                    </div>


                                </div>
                                <br><br>
                                <h2 class="title-produk">Pricelist Produk</h2>
                                <div class="grid">
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/skincare.png" alt="">

                                        </article>
                                    </div>
                                </div>
                                <br><br>
                                <h2 class="title-produk">Skincare EB</h2>
                                <div class="grid">
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/skincare EB.png" alt="">

                                        </article>
                                    </div>
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/skincare EB2.png" alt="">

                                        </article>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/skincare EB3.png" alt="">

                                        </article>
                                    </div>
                                    <div>
                                        <article class="card">
                                            <img src="assets/images/produk/skincare EB4.png" alt="">

                                        </article>
                                    </div>
                                </div>


                            </div>
            </section>

            <!-- GALERI -->
            <div class="container galery" id="galeri" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="h2 text-center" style="color: rgb(4, 58, 16);">GALLERY</h1>
                <h2 class="h3 text-center" style="color: rgb(231, 6, 81);">klinik Pratama Erin's</h2>
                <div class="full-img" id="fullImgBox">
                    <img src="assets/images/galeri/1.jpg" alt="picture" id="fullImg" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="full-img" id="fullImgBox2">
                    <img src="assets/images/galeri/2.jpg" alt="picture" id="fullImg2" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="full-img" id="fullImgBox3">
                    <img src="assets/images/galeri/3.jpg" alt="picture" id="fullImg3" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="full-img" id="fullImgBox4">
                    <img src="assets/images/galeri/4.jpg" alt="picture" id="fullImg4" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="full-img" id="fullImgBox5">
                    <img src="assets/images/galeri/5.jpg" alt="picture" id="fullImg5" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="full-img" id="fullImgBox6">
                    <img src="assets/images/galeri/6.jpg" alt="picture" id="fullImg6" />
                    <span onclick="closeFullImg()">x</span>
                </div>
                <div class="img-gallery">
                    <img src="assets/images/galeri/1.jpg" alt="picture" onclick="openFullImg(this.src)" />
                    <img src="assets/images/galeri/2.jpg" alt="picture" onclick="openFullImg(this.src)" />
                    <img src="assets/images/galeri/3.jpg" alt="picture" onclick="openFullImg(this.src)" />
                    <img src="assets/images/galeri/4.jpg" alt="picture" onclick="openFullImg(this.src)" />
                    <img src="assets/images/galeri/5.jpg" alt="picture" onclick="openFullImg(this.src)" />
                    <img src="assets/images/galeri/6.jpg" alt="picture" onclick="openFullImg(this.src)" />
                </div>
            </div>




        </article>
    </main>





    <!-- FOOTER -->

    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand" data-aos="fade-right" data-aos-duration="2000">

                    <a href="#" class="logo" style="color: rgb(231, 6, 81)">Klinik Pratama Erin's</a>
                    <p class="footer-text" style="color: #e89292;">
                        Klinik Umum | Klinik Kecantikan | Klinik Gigi
                    </p><br>
                    <P>Jadwal Pelayanan Dokter Umum</P><br>
                    <div class="schedule">
                        <div class="schedule-icon">
                            <ion-icon name="time-outline"></ion-icon>
                        </div>

                        <span class="span">
                            Setiap Hari<br>
                            08:00 - 10:00 WIB | 15.30 - 20.00 WIB
                        </span>
                    </div><br>
                    <P>Jadwal Pelayanan Dokter Gigi</P><br>
                    <div class="schedule">
                        <div class="schedule-icon">
                            <ion-icon name="time-outline"></ion-icon>
                        </div>

                        <span class="span">
                            Kamis - Sabtu<br>
                            16.00 - 20.00 WIB
                        </span>
                    </div>

                </div>

                <ul class="footer-list" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">

                    <li>
                        <p class="footer-list-title">Other Links</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Home</span>
                        </a>
                    </li>


                    <li>
                        <a href="#service" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Services</span>
                        </a>
                    </li>

                    <li>
                        <a href="#produk" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Product</span>
                        </a>
                    </li>

                    <li>
                        <a href="#galeri" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Galery</span>
                        </a>
                    </li>


                </ul>

                <ul class="footer-list" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600">

                    <li>
                        <p class="footer-list-title">Services</p>
                    </li>

                    <li>
                        <a href="#service" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Klinik Umum</span>
                        </a>
                    </li>

                    <li>
                        <a href="#service" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Klinik Kecantikan</span>
                        </a>
                    </li>

                    <li>
                        <a href="#service" class="footer-link">
                            <ion-icon name="add-outline"></ion-icon>

                            <span class="span">Klinik Gigi</span>
                        </a>
                    </li>





                </ul>

                <ul class="footer-list" id="kontak" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="900">

                    <li>
                        <p class="footer-list-title" style="color: rgb(231, 6, 81);">Contact Us</p>
                    </li>

                    <li class="footer-item">
                        <div class="item-icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="item-text">
                            <a href="https://google.com/maps?ll=-7.060747,110.446136&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=3612320588115429974" class="contact-link">Jl. Timoho Raya No.21, Bulusan, Kec. Tembalang, Kota Semarang, Jawa Tengah 50277</a>

                        </address>
                    </li>

                    <li class="footer-item">
                        <div class="item-icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="whatsapp://send?text=Hallo dok mau tanya?&phone=+6285150716061" class="contact-link">085150716061</a>
                    </li>

                    <li class="footer-item">
                        <div class="item-icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto: pratamaklinikerins@gmail.com" class="contact-link"> pratamaklinikerins@gmail.com
                    </li>

                </ul>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2024 Klinik Pratama Erin's
                </p>


            </div>
        </div>

    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./assets/js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- 
    - ionicon link
  -->
    <script src="https://kit.fontawesome.com/52bd79fc65.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>