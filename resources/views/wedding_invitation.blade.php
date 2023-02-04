@extends('master')

@section('title', 'Wedding Invitation')

@section('custom_style')
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1/assets/css/atcb.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dgcom/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-pink position-relative" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-pink position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->

    {{-- Top cover --}}
    <div id="top-cover" class="modalx wow animated fadeIn" data-wow-delay="0.1s">
        <img class="modalx-image" src="{{ asset('images/bg-main.png') }}" alt="Image">
        <div class="modalx-content">
            <div class="modalx-content-info">
                <div class="d-flex justify-content-center mb-2">
                    <img class="modalx-logo non-draggable animated slideInDown wow" src="{{ asset('images/logo.png') }}"
                        alt="logo" data-wow-delay="0.1s">
                </div>
                <h4 class="line-1 animated slideInLeft wow" data-wow-delay="0.1s">The
                    Wedding of</h4>
                <h1 class="line-2 animated slideInRight wow" data-wow-delay="0.1s">Firda
                    & Fuad</h1>
                <div class="d-flex justify-content-center m-b-40">
                    <div class="col-lg-6 col-11">
                        <hr class="mb-2">
                        <p class="date mb-0 animated slideInLeft wow" data-wow-delay="0.1s">Sabtu, 11 Februari 2023</p>
                        <hr class="mt-2">
                    </div>
                </div>
                <p class="line-3 mb-1 animated zoomIn wow" data-wow-delay="0.1s">Yth. Bapak/Ibu/Saudara/i
                </p>
                <h3 class="name m-b-40 animated zoomIn wow" data-wow-delay="0.1s">{{ $name }}</h3>
                <div class="d-flex justify-content-center m-b-30">
                    <a href='#header' class="btn modalx-btn open-top-cover animated zoomIn wow" data-wow-delay="0.1s">
                        <i class="fa fa-envelope fa-lg m-r-10"></i>
                        Buka Undangan
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Top cover end --}}

    <div id="main-content" class="d-none wow fadeIn" data-wow-delay="0.1s">
        <!-- Carousel Start -->
        <div id="header" class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('images/foto12.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="px-4">
                                <h4 class="line-1 animated zoomIn">The
                                    Wedding of</h4>
                                <h1 class="line-2 my-2 animated zoomIn">Firda
                                    & Fuad</h1>
                                <div class="d-flex justify-content-center m-b-150">
                                    <div class="col-lg-8 col-11">
                                        <hr class="mb-2">
                                        <p class="date mb-0animated zoomIn">Sabtu, 11 Februari 2023</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                                <p class="line-3 animated zoomIn">Yth. Bapak/Ibu/Saudara/i
                                </p>
                                <h3 class="name m-b-40 animated zoomIn">{{ $name }}</h3>
                                <div class="d-flex justify-content-center m-t-20">
                                    <div class="col-lg-8 col-11">
                                        <hr>
                                        <p class="line-3 px-3 pt-0 animated zoomIn">Kami mengundang Anda untuk menghadiri
                                            acara resepsi
                                            pernikahan
                                            kami</p>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('images/foto2.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="px-4">
                                <h4 class="line-1 animated zoomIn">The
                                    Wedding of</h4>
                                <h1 class="line-2 my-2 animated zoomIn">Firda
                                    & Fuad</h1>
                                <div class="d-flex justify-content-center m-b-150">
                                    <div class="col-lg-8 col-11">
                                        <hr class="mb-2">
                                        <p class="date mb-0animated zoomIn">Sabtu, 11 Februari 2023</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                                <p class="line-3 animated zoomIn">Yth. Bapak/Ibu/Saudara/i
                                </p>
                                <h3 class="name m-b-40 animated zoomIn">{{ $name }}</h3>
                                <div class="d-flex justify-content-center m-t-20">
                                    <div class="col-lg-8 col-11">
                                        <hr>
                                        <p class="line-3 px-3 pt-0 animated zoomIn">Kami mengundang Anda untuk menghadiri
                                            acara resepsi
                                            pernikahan
                                            kami</p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('images/foto1.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="px-4">
                                <h4 class="line-1 animated zoomIn">The
                                    Wedding of</h4>
                                <h1 class="line-2 my-2 animated zoomIn">Firda
                                    & Fuad</h1>
                                <div class="d-flex justify-content-center m-b-150">
                                    <div class="col-lg-8 col-11">
                                        <hr class="mb-2">
                                        <p class="date mb-0animated zoomIn">Sabtu, 11 Februari 2023</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                                <p class="line-3 animated zoomIn">Yth. Bapak/Ibu/Saudara/i
                                </p>
                                <h3 class="name m-b-40 animated zoomIn">{{ $name }}</h3>
                                <div class="d-flex justify-content-center m-t-20">
                                    <div class="col-lg-8 col-11">
                                        <hr>
                                        <p class="line-3 px-3 pt-0 animated zoomIn">Kami mengundang Anda untuk menghadiri
                                            acara resepsi
                                            pernikahan
                                            kami</p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('images/foto3.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="px-4">
                                <h4 class="line-1 animated zoomIn">The
                                    Wedding of</h4>
                                <h1 class="line-2 my-2 animated zoomIn">Firda
                                    & Fuad</h1>
                                <div class="d-flex justify-content-center m-b-150">
                                    <div class="col-lg-8 col-11">
                                        <hr class="mb-2">
                                        <p class="date mb-0animated zoomIn">Sabtu, 11 Februari 2023</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                                <p class="line-3 animated zoomIn">Yth. Bapak/Ibu/Saudara/i
                                </p>
                                <h3 class="name m-b-40 animated zoomIn">{{ $name }}</h3>
                                <div class="d-flex justify-content-center m-t-20">
                                    <div class="col-lg-8 col-11">
                                        <hr>
                                        <p class="line-3 px-3 pt-0 animated zoomIn">Kami mengundang Anda untuk menghadiri
                                            acara resepsi
                                            pernikahan
                                            kami</p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <!-- Carousel End -->

        <div id="name" style="background: white center/cover url('../images/bg3.png') no-repeat;"
            class="animated wow fadeIn" data-wow-delay="1s">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 px-4 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 600px;">
                        <h1 class="ff-title">We Are Getting Married!</h1>
                        <p class="ff-description mt-4 mb-2 animated wow slideInRight" data-wow-delay="0.1s">"Apapun yang
                            menjadi takdirmu, pasti akan mencari jalannya untuk menemukanmu."</p>
                        <p class="ff-description-bold animated wow slideInRight" data-wow-delay="0.1s">
                            <b>Ali bin Abi Thalib RA</b>
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text-center p-4">
                                <img class="img-fluid border rounded-circle w-50 p-2 mb-4"
                                    src="{{ asset('images/hf.png') }}" alt="">
                                <div class="team-text">
                                    <div class="team-title">
                                        <h1 class="ff-title-secondary mb-4 wow slideInLeft" data-wow-delay="0.2s">Hafara
                                            Firdausi, M.Kom.</h1>
                                        <p class="ff-description mb-0 wow slideInLeft" data-wow-delay="0.2s">
                                            Putri Pertama dari Bpk. Prof.
                                            Dr. H. Wasis, M.Si.
                                            & Ibu
                                            Hj. Dyah
                                            Kurniawati, S.Pd.</p>
                                    </div>
                                    <div class="team-social mt-4 pointer wow slideInLeft" data-wow-delay="0.2s">
                                        <a href="https://www.linkedin.com/in/hafarafirdausi/" target="_blank"><i
                                                class="fab fa-linkedin font-20 m-r-10 text-pink"></i></a>
                                        <a href="https://www.instagram.com/haeeep/" target="_blank"><i
                                                class="fab fa-instagram font-20 m-r-10 text-pink"></i></a>
                                        <a href="https://github.com/mocatfrio/" target="_blank"><i
                                                class="fab fa-github font-20 text-pink"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="text-center p-4">
                                <img class="img-fluid border rounded-circle w-50 p-2 mb-4"
                                    src="{{ asset('images/fd.png') }}" alt="">
                                <div class="team-text">
                                    <div class="team-title">
                                        <h1 class="ff-title-secondary mb-4 wow slideInRight" data-wow-delay="0.3s">Fuad
                                            Dary Rosyadi, M.Kom.</h1>
                                        <p class="ff-description mb-0 wow slideInRight" data-wow-delay="0.3s">
                                            Putra Kedua dari Bpk. H.
                                            Abdul
                                            Hadi, S.Pd. & Ibu
                                            Hj.
                                            Siti Latifatin.</p>
                                    </div>
                                    <div class="team-social mt-4 pointer wow slideInRight" data-wow-delay="0.3s">
                                        <a href="https://www.linkedin.com/in/fuaddary/" target="_blank"><i
                                                class="fab fa-linkedin font-20 m-r-10 text-blue"></i></a>
                                        <a href="https://www.instagram.com/tinkerspace.dev/" target="_blank"><i
                                                class="fab fa-instagram font-20 m-r-10 text-blue"></i></a>
                                        <a href="https://github.com/fuaddary" target="_blank"><i
                                                class="fab fa-github font-20 text-blue"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Date Start -->
        <div id="date-place" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 text-center mb-5 px-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center mx-auto px-4 animated wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            {{-- <img class="img-fluid w-50 mb-4" src="{{ asset('images/bismillah-png.png') }}"> --}}
                            <h1 class="ff-title animated wow slideInLeft" data-wow-delay="0.1s">Bismillah</h1>
                            <p class="ff-description mt-4 mb-2 animated wow slideInRight" data-wow-delay="0.1s">"Dan
                                di antara tanda-tanda (kebesaran)-Nya
                                ialah Dia
                                menciptakan
                                pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram
                                kepadanya,
                                dan
                                Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu
                                benar-benar
                                terdapat
                                tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
                            </p>
                            <p class="ff-description animated wow slideInRight" data-wow-delay="0.1s">
                                <b>Ar-Rum: 21</b>
                            </p>
                        </div>
                        <div class="flex-col-c-m my-5" style="text-align: -webkit-center;">
                            <div class="flex-w flex-c-m cd100">
                                <div class="col">
                                    <div class="flex-col-c-m circle m-1">
                                        <span class="font-30 font-weight-600 text-pink days"></span>
                                        <span>Days</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flex-col-c-m circle m-1">
                                        <span class="font-30 font-weight-600 text-blue hours"></span>
                                        <span>Hours</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flex-col-c-m circle m-1">
                                        <span class="font-30 font-weight-600 text-pink minutes"></span>
                                        <span>Minutes</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flex-col-c-m circle m-1">
                                        <span class="font-30 font-weight-600 text-blue seconds"></span>
                                        <span>Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="atcb" style="display:none;">
                            <div class="atcb " style="display:none;">
                                {
                                "name":"Firda & Fuad Wedding",
                                "description":"Kehadiran dan Do'a restu Bapak/Ibu/Saudara/i untuk acara
                                pernikahan kami sangatlah berarti | Pernikahan Firda & Fuad | Sabtu, 11 Februari 2022",
                                "startDate":"2023-02-11",
                                "endDate":"2023-02-11",
                                "startTime":"11:00",
                                "endTime":"12:00",
                                "location":"Jl. Mesjid Agung Timur No.1, Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa
                                Timur
                                60274",
                                "label":"Save the Date",
                                "options":[
                                "Google"
                                ],
                                "timeZone":"Asia/Jakarta",
                                "trigger":"click",
                                "inline":false,
                                "listStyle":"modal",
                                "iCalFileName":"Reminder-Event"
                                }
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item p-y-50">
                    <div class="row g-5 p-x-50">
                        <div class="col-12 col-lg-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h1 class="ff-title">AKAD</h1>
                                <div class="d-flex justify-content-center mb-5">
                                    <div class="col-12 col-lg-9">
                                        <hr>
                                        <p class="font-cinzel text-uppercase font-16 mb-0 animated slideInLeft wow"
                                            data-wow-delay="0.1s">Sabtu, 11 Februari 2023</p>
                                        <p class="font-cinzel font-16 mb-0">Pukul 07.00 WIB</p>
                                        <hr>
                                        <p class="ff-subtitle mt-5">Masjid Nasional Al Akbar
                                            Surabaya</p>
                                        <p class="ff-description mb-0">Jl. Mesjid Agung Timur No.1,
                                            Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa Timur 60274</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h1 class="ff-title">RESEPSI</h1>
                                <div class="d-flex justify-content-center mb-5">
                                    <div class="col-12 col-lg-9">
                                        <hr>
                                        <p class="font-cinzel text-uppercase font-16 mb-0 animated slideInLeft wow"
                                            data-wow-delay="0.1s">Sabtu, 11 Februari 2023</p>
                                        <p class="font-cinzel font-16 mb-0">Pukul 11.00 - 12.30 WIB</p>
                                        <hr>
                                        <p class="ff-subtitle mt-5">Grand Ballroom As Shofa</p>
                                        <p class="ff-description mb-0">Masjid Nasional Al Akbar
                                            Surabaya</p>
                                        <p class="ff-description mb-0">Jl. Mesjid Agung Timur No.1,
                                            Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa Timur 60274</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5 mt-2 p-x-50">
                        <div class="col-12 text-center wow fadeInUp">
                            {{-- <p class="font-now font-20 font-weight-600 mt-3">Grand Ballroom As Shofa</p>
                            <p class="ff-description mb-0">Masjid Nasional Al Akbar
                                Surabaya</p>
                            <p class="ff-description mb-0">Jl. Mesjid Agung Timur No.1,
                                Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa Timur 60274</p> --}}
                            <div class="col-12">
                                <div class="flex-col-c-m p-t-30 wow fadeInUp" data-wow-delay="0.1s">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.155416016654!2d112.71283161544831!3d-7.336437074198809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd448fe51da5%3A0xab9c7fce77c28c17!2sGrand%20Ballroom%20Asshofa%20Masjid%20Nasional%20Al%20Akbar%20Surabaya!5e0!3m2!1sen!2sid!4v1673540106766!5m2!1sen!2sid"
                                        height="500px" width="100%" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Date End -->

        <!-- RSVP -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8 px-4 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <div class="h-100">
                            <form id="rsvp" method="POST" action="/save-rsvp">
                                @csrf
                                <h1 class="ff-title">BUKU TAMU</h1>
                                <p class="ff-description my-4 text-center">Bapak/Ibu/Saudara/i
                                    <b>{{ $name }}</b>, apakah Anda dapat hadir?
                                </p>
                                <div class="d-flex mb-4">
                                    <label class="radio rsvp-true mt-0">
                                        <input class="rsvp" type="radio" name="rsvp_join" value="1"> <span
                                            class="text-pink"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                            Hadir </span>
                                    </label>
                                    <label class="radio rsvp-false mt-0">
                                        <input class="rsvp" type="radio" name="rsvp_join" value="0"> <span
                                            class="text-blue"> <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                            Tidak </span>
                                    </label>
                                </div>
                                <div class="form-reason mt-3" hidden>
                                    <textarea type="text" id="rsvp_reason" name="rsvp_reason" class="form-control" id="karena"
                                        placeholder="Karena..." rows="3"></textarea>
                                </div>
                                <div class="form-count" hidden>
                                    <p class="ff-description mb-4">Berapa orang yang akan hadir?
                                        <select class="form-select form-select-lg mb-5 mt-3" id="rsvp_count"
                                            name="jumlah" aria-label="Select">
                                            <option selected value="1">Satu</option>
                                            <option value="2">Dua</option>
                                        </select>
                                </div>
                                <div class="text-center" id="kehadiran-submit" hidden>
                                    <button type="submit" id="btn-submit" class="link-1"
                                        style="width:100%; border-radius:5px">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end rsvp --}}

        <!-- Protokol kesehatan  -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 px-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="bg-white text-center">
                        <img class="img-fluid rounded mb-4" src="{{ asset('images/logo2.png') }}"
                            style="width: 50px; height: 50px">
                    </h6>
                    <h1 class="ff-title">Protokol Kesehatan</h1>
                    <p class="ff-description mt-4 mb-5">Tanpa mengurangi rasa hormat, dikarenakan situasi yang sedang
                        terjadi ditengah <b>pandemi Covid-19</b> ini kami memohon maaf karena acara akan diselenggarakan
                        sesuai
                        peraturan dan himbauan pemerintah.</p>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100">
                            <img class="img-fluid rounded" src="{{ asset('images/protokol-kesehatan.jpeg') }}"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Memories Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="bg-white text-center">
                        <img class="img-fluid rounded mb-4" src="{{ asset('images/logo2.png') }}"
                            style="width: 50px; height: 50px">
                    </h6>
                    <h1 class="ff-title">Galeri</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto13.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto5.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto11.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto14.JPG') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto8.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-block rounded text-center h-100 p-4">
                            <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto9.png') }}"
                                alt="">
                            {{-- <img class="img-fluid rounded non-draggable" src="{{ asset('images/foto10.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Memories End -->

        <!-- RSVP dan Ucapan Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row px-4 g-5">
                    <div class="col-12 col-lg-6 px-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="h-100">
                            <form id="message" method="POST" action="/save-rsvp">
                                @csrf
                                <h1 class="ff-title mt-0 mb-5">Doa & Ucapan</h1>
                                <input type="text" id="message_name" name="message_name" class="form-control"
                                    placeholder="Nama" required>
                                <br>
                                <input type="text" id="message_from" name="message_from" class="form-control"
                                    placeholder="Dari (cth: teman SMP, SMA, kuliah, tetangga)">
                                <br>
                                <input name="name" class="hidden" value={{ $name }}>
                                <div class="mb-4">
                                    <textarea type="text" class="form-control" name="message_data" id="message_data" placeholder="Doa dan ucapan"
                                        rows="3" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="btn-submit" class="link-1"
                                        style="width:100%; border-radius:5px">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if (count($allMessages) > 0)
                        <div class="col-12 col-lg-6 px-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="all-wishes">
                                <div class="wishes-box">
                                    @foreach ((array) $allMessages as $message)
                                        <div class="testimonial-item bg-light rounded p-4 mb-3">
                                            <p class="date mb-2 pull-right">
                                                {{ isset($message['timestamp']) ? date('d M Y, H:i', $message['timestamp']) : '' }}
                                            </p>
                                            <h5 class="name mb-1">
                                                {{ ucwords($message['message_name']) ?? '' }}
                                            </h5>
                                            <p class="from mb-2">{{ $message['message_from'] ?? '' }}</p>
                                            <p class="message mb-0"><?php echo nl2br($message['message_data']); ?></p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- RSVP dan Ucapan End -->

        <!-- Terima Kasih -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center p-4">
                    <h6 class="bg-white">
                        <img class="img-fluid rounded mb-4" src="{{ asset('images/logo2.png') }}"
                            style="width: 30px; height: 30px">
                    </h6>
                    <img class="img-fluid rounded-circle w-50 p-2 mb-4 non-draggable"
                        src="{{ asset('images/logo.png') }}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h1 class="ff-title-big m-b-100">Terima Kasih</h1>
                            <p class="ff-footer mb-0">Created with ❤ by <b>Fu</b> and
                                <b>Fir</b> | Copyright 2023 <b>&copy; FFForever</b> <br> All Right
                                Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Terima Kasih End -->

        {{-- modal popup --}}
        <div class="modal modal-container" id="modal-opened">
            <div class="modal-content" style="color:#fff !important">

                <div class="modal__details">
                    <div class="modal__title">RSVP Terkirim!</div>
                    <div class="modal__description">Terima kasih telah mengisi buku tamu. Kehadiran anda sangat berarti
                        bagi
                        kami.</div>
                </div>

                {{-- <div class="modal__text">Kehadiran anda sangat berarti bagi kami</div> --}}

                <button class="modal__btn rsvp-close">Mantap! lanjutkan..</button>

                <a href="#modal-closed" class="rsvp-close link-2"></a>

            </div>
        </div>
        {{-- end modal popup --}}

        {{-- modal popup --}}
        <div class="modal modal-container" id="modal-opened-2">
            <div class="modal-content" style="color:#fff !important">

                <div class="modal__details">
                    <div class="modal__title">Pesan Terkirim!</div>
                    <div class="modal__description">Terima kasih telah mengirimkan ucapan. Doa anda sangat berarti bagi
                        kami.
                    </div>
                </div>

                {{-- <div class="modal__text">Kehadiran anda sangat berarti bagi kami</div> --}}

                <button class="modal__btn message-close">Tutup</button>

                <a href="#modal-closed-2" class="message-close link-2"></a>

            </div>
        </div>
        {{-- end modal popup --}}


        {{-- wishes box message --}}
        <div id="message-template" hidden class="testimonial-item bg-light rounded p-4 mb-3">
            <p id="tpl-time" class="font-now font-10 mb-2 pull-right"></p>
            <h5 id="tpl-name" class="font-now font-14 mb-1"></h5>
            <p id="tpl-from" tplclass="font-now font-12 mb-2"></p>
            <p id="tpl-message" class="font-proxima-nova font-12 mb-0"></p>
        </div>
        {{-- end wishes box message --}}

        <!-- Music Start -->
        <div class="music-box hidden">
            <input type="checkbox" id="music">
            <label class="music" for="music"></label>
            <audio id="player">
                <source src="{{ asset('music/canon-in-d-memories.mp3') }}" type="audio/mpeg" />
            </audio>
        </div>
        <!-- Music End -->
    </div>
@endsection

@section('custom_script')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('dgcom/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('dgcom/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dgcom/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dgcom/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('dgcom/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dgcom/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1" async defer></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dgcom/js/main.js') }}"></script>

    <script>
        let input = document.getElementById("music");
        let audio = document.getElementById("player");

        input.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        });

        $('.rsvp').click(function() {
            console.log($(this).val());
            if ($(this).val() == '1') {
                $('.form-count').attr('hidden', false)
            } else {
                $('.form-count').attr('hidden', true)
            }
        });
    </script>

    <script type="text/javascript">
        function add_message(data) {
            console.log("added message")
            var tpl = $('#message-template').clone();
            tpl.attr('hidden', false)
            tpl.find('#tpl-name').text(data.message_name);
            tpl.find('#tpl-time').text(data.timestamp);
            tpl.find('#tpl-from').text(data.message_from);
            tpl.find('#tpl-message').text(data.message_data);
            tpl.insertBefore('.testimonial-item:first')
        }

        $(document).ready(function() {
            $('.atcb-icon').addClass('atcb-icon-1');
            $('.atcb-icon-1').removeClass('atcb-icon');
            $('.atcb-checkmark').addClass('atcb-checkmark-1');
            $('.atcb-checkmark-1').removeClass('atcb-checkmark');

            $('.open-top-cover').on('click', function(event) {
                $('#top-cover').addClass('d-none');
                $('#main-content').removeClass("d-none");

                // play music 
                $('.music-box').removeClass('hidden');
                input.checked = true;
                audio.play();
            });


            // $('body').addClass('stop-scrolling')
            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });

            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });

            $("#rsvp").submit(function(event) {
                var formData = {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $name }}",
                    rsvp_join: $('input[name="rsvp_join"]:checked').val(),
                    rsvp_count: $("#rsvp_count").val(),
                    rsvp_reason: $("#rsvp_reason").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "/save-rsvp",
                    data: formData,
                    dataType: "json",
                    encoded: true,
                }).done(function(res) {
                    if (res.status == 'Success') {
                        console.log('Success')
                        $("#modal-opened").toggle()
                    } else {
                        console.log('Error')
                    }
                });

                event.preventDefault();
            })

            $('.rsvp-close').click(function() {
                $("#modal-opened").toggle()
            })

            $('.message-close').click(function() {
                $("#modal-opened-2").toggle()
            })

            $('.rsvp').click(function() {
                $('#kehadiran-submit').attr('hidden', false);
            })

            $("#message").submit(function(event) {
                var formData = {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $name }}",
                    message_name: $("#message_name").val(),
                    message_from: $("#message_from").val(),
                    message_data: $("#message_data").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "/save-message",
                    data: formData,
                    dataType: "json",
                    encoded: true,
                }).done(function(res) {
                    console.log(res);
                    if (res.status == 'Success') {
                        data = res.data;
                        if (data.message_name !== null && data.message_from !== null) {
                            add_message(data);
                        }
                        $("#modal-opened-2").toggle()
                    } else {
                        console.log('Error')
                    }
                });

                event.preventDefault();
            })
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 50;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
@endsection
