@extends('layouts.front')

@section('title', 'Sistem Monitoring Pemilah Sampah dengan Pemberitahuan Suara Berbasis IoT')


@section('content')

    <!-- Hero Section -->
    <section id="hero" class="section hero">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 class="">SISTEM MONITORING PEMILAH SAMPAH DENGAN PEMBERITAHUAN SUARA BERBASIS IOT
                    </h1>
                    <p>SIMPSIBOT adalah sebuah sistem inovatif yang dirancang untuk memantau dan mengelola pemilahan
                        sampah secara otomatis dengan menggunakan teknologi Internet of Things (IoT). Sistem ini
                        dilengkapi dengan fitur pemberitahuan suara yang bertujuan untuk meningkatkan kesadaran dan
                        keterlibatan masyarakat dalam pemilahan sampah yang efektif.</p>
                    {{--  <div class="d-flex">
                        <a href="index.html#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>  --}}
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('frontend') }}/assets/img/bg.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="section about">

        <div class="container">

            <div class="row gy-3">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('frontend') }}/assets/img/ilus_4.png" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content ps-0 ps-lg-3">
                        <h3>SIMPSIBOT (Sistem Monitoring Pemilah Sampah dengan Pemberitahuan Suara Berbasis IoT)
                        </h3>
                        <p class="fst-italic">
                            SIMPSIBOT adalah sebuah sistem inovatif yang dirancang untuk memantau dan mengelola
                            pemilahan sampah secara otomatis dengan menggunakan teknologi Internet of Things (IoT).
                            Sistem ini dilengkapi dengan fitur pemberitahuan suara yang bertujuan untuk meningkatkan
                            kesadaran dan keterlibatan masyarakat dalam pemilahan sampah yang efektif.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h4>Pemantauan Real-Time</h4>
                                    <p>Data pemantauan ditampilkan melalui dashboard yang dapat diakses secara
                                        online.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h4>Integrasi IoT</h4>
                                    <p>Menggunakan teknologi IoT untuk menghubungkan sensor dan perangkat
                                        pemberitahuan suara dengan sistem pusat.</p>
                                </div>
                            </li>
                        </ul>
                        <p>
                            SIMPSIBOT adalah solusi cerdas untuk masalah pengelolaan sampah yang memberikan manfaat
                            signifikan bagi lingkungan dan masyarakat. Dengan memanfaatkan teknologi IoT dan
                            pemberitahuan suara, sistem ini tidak hanya memantau dan mengelola sampah secara efisien
                            tetapi juga meningkatkan kesadaran dan partisipasi masyarakat dalam menjaga kebersihan
                            lingkungan.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="feature" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Feature</h2>
            <p>
                Feature yang tersedia
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Pemantauan Kapasitas Sampah</a>
                        </h4>
                        <p>Menampilkan grafik yang memperlihatkan volume sampah yang terkumpul setiap harinya.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Kategori dan Data Sampah</a>
                        </h4>
                        <p>Mengkategorikan sampah menjadi berbagai jenis seperti organik, anorganik,dan logam</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Manajemen Data dan Akses</a>
                        </h4>
                        <p>Menyediakan dashboard bagi admin untuk mengelola dan memantau seluruh tempat sampah.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Integrasi IoT</a></h4>
                        <p>Menggunakan sensor IoT untuk mendeteksi level sampah dalam tempat sampah.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Pertanyaan dan jawaban</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item">
                            <h3>Apa itu SIMPSIBOT?</h3>
                            <div class="faq-content">
                                <p>SIMPSIBOT adalah sistem monitoring tempat sampah berbasis Internet of Things
                                    (IoT) yang menyediakan pemantauan kapasitas sampah secara real-time dan
                                    pemberitahuan suara ketika tempat sampah penuh atau mencapai kondisi tertentu.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana cara kerja SIMPSIBOT?</h3>
                            <div class="faq-content">
                                <p>SIMPSIBOT menggunakan sensor IoT yang terpasang di tempat sampah untuk mendeteksi
                                    level sampah. Data dari sensor dikirim ke server pusat melalui koneksi internet,
                                    dan sistem akan memberikan notifikasi suara jika tempat sampah penuh.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apa saja jenis sampah yang dapat dipantau oleh SIMPSIBOT?</h3>
                            <div class="faq-content">
                                <p>SIMPSIBOT dapat mengkategorikan sampah menjadi berbagai jenis seperti organik,
                                    anorganik dan logam. Setiap jenis sampah dapat dipantau secara
                                    terpisah.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">

                        <div class="faq-item">
                            <h3>Apakah saya bisa memantau kapasitas sampah dari jarak jauh?</h3>
                            <div class="faq-content">
                                <p>Ya, Anda bisa memantau kapasitas tempat sampah dari jarak jauh menggunakan
                                    dashboard web atau aplikasi mobile yang terhubung ke sistem SIMPSIBOT.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apakah SIMPSIBOT bisa digunakan untuk banyak tempat sampah sekaligus?</h3>
                            <div class="faq-content">
                                <p>Ya, SIMPSIBOT dapat digunakan untuk memantau banyak tempat sampah sekaligus.
                                    Setiap tempat sampah akan dilengkapi dengan sensor dan data dari semua tempat
                                    sampah dapat diakses melalui satu dashboard pusat.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apakah SIMPSIBOT mendukung integrasi dengan sistem lain?</h3>
                            <div class="faq-content">
                                <p>SIMPSIBOT mendukung integrasi dengan sistem lain melalui API dan dapat
                                    dikonfigurasi untuk bekerja dengan berbagai aplikasi dan perangkat yang
                                    kompatibel dengan IoT.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
                <!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->


@endsection
