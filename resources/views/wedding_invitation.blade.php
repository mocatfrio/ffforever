@extends('master')

@section('title', 'Wedding Invitation')

@section('custom_style')
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dgcom/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dgcom/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dgcom/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1/assets/css/atcb.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dgcom/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->

    <!-- Carousel Start -->
    <div id="header" class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('images/foto12.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3">
                            <h4 class="title-line-1 mb-4 animated zoomIn">The
                                Wedding of</h4>
                            <h1 class="title-name animated zoomIn">Firda
                                & Fuad</h1>
                            <p class="font-open-sans text-white font-12 m-t-200 animated zoomIn">Yth. Bapak / Ibu /
                                Saudara / i</p>
                            <h3 class="font-now text-white font-20 p-b-30 animated zoomIn">{{ $name }}</h3>
                            <div class="">
                                <a href='#s' class="scroll-link pointer start link-1" data-id="name">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('images/foto1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3">
                            <h4 class="title-line-1 mb-4 animated zoomIn">The
                                Wedding of</h4>
                            <h1 class="title-name animated zoomIn">Firda
                                & Fuad</h1>
                            <p class="font-open-sans text-white font-14 m-t-200 animated zoomIn">Yth. Bapak / Ibu /
                                Saudara / i</p>
                            <h3 class="font-now text-white font-20 p-b-30">{{ $name }}</h3>
                            <div class="">
                                <a href='#s' class="scroll-link pointer start link-1" data-id="name">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('images/foto2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3">
                            <h4 class="title-line-1 mb-4 animated zoomIn">The
                                Wedding of</h4>
                            <h1 class="title-name animated zoomIn">Firda
                                & Fuad</h1>
                            <p class="font-open-sans text-white font-14 m-t-200 animated zoomIn">Yth. Bapak / Ibu /
                                Saudara / i</p>
                            <h3 class="font-now text-white font-20 p-b-30">{{ $name }}</h3>
                            <div class="">
                                <a href='#s' class="scroll-link pointer start link-1" data-id="name">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('images/foto3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3">
                            <h4 class="title-line-1 mb-4 animated zoomIn">The
                                Wedding of</h4>
                            <h1 class="title-name animated zoomIn">Firda
                                & Fuad</h1>
                            <p class="font-open-sans text-white font-12 m-t-200 animated zoomIn">Yth. Bapak / Ibu /
                                Saudara / i</p>
                            <h3 class="font-now text-white font-20 p-b-30 animated zoomIn">{{ $name }}</h3>
                            <div class="">
                                <a href='#s' class="scroll-link pointer start link-1" data-id="name">Buka Undangan</a>
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
    </div>
    </div>
    <!-- Carousel End -->

    <!-- Name -->
    <div id="name" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 px-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <h6 class="section-title bg-white text-center text-primary px-3 mb-3"></h6> --}}
                <h1 class="font-now text-uppercase ls-2 font-20 mb-4 my-2">Bismillah</h1>
                <p class="font-proxima-nova font-14 mb-0">"Dan di antara tanda-tanda (kebesaran)-Nya
                    ialah Dia
                    menciptakan
                    pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan
                    Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"<br> <b>(Ar-Rum: 21)</b>
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <img class="img-fluid border rounded-circle w-50 p-2 mb-4" src="{{ asset('images/hf.png') }}"
                            alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h1 class="font-dancing-script font-30 mb-4">Hafara Firdausi, M.Kom.</h1>
                                <p class="font-proxima-nova font-14 mb-0">Putri Pertama dari Bpk. Prof.
                                    Dr. H. Wasis, M.Si.
                                    & Ibu
                                    Hj. Dyah
                                    Kurniawati, S.Pd.</p>
                            </div>
                            <div class="team-social mt-5 pointer">
                                <a href="https://www.linkedin.com/in/hafarafirdausi/" target="_blank"><i
                                        class="fab fa-linkedin font-20 m-r-10"></i></a>
                                <a href="https://www.instagram.com/haeeep/" target="_blank"><i
                                        class="fab fa-instagram font-20 m-r-10"></i></a>
                                <a href="https://github.com/mocatfrio/" target="_blank"><i
                                        class="fab fa-github font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <img class="img-fluid border rounded-circle w-50 p-2 mb-4" src="{{ asset('images/fd.png') }}"
                            alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h1 class="font-dancing-script font-30 mb-4">Fuad Dary Rosyadi, M.Kom.</h1>
                                <p class="font-proxima-nova font-14 mb-0">Putra Kedua dari Bpk. H.
                                    Abdul
                                    Hadi, S.Pd. & Ibu
                                    Hj.
                                    Siti Latifatin.</p>
                            </div>
                            <div class="team-social mt-5 pointer">
                                <a href="https://www.linkedin.com/in/fuaddary/" target="_blank"><i
                                        class="fab fa-linkedin font-20 m-r-10"></i></a>
                                <a href="https://www.instagram.com/tinkerspace.dev/" target="_blank"><i
                                        class="fab fa-instagram font-20 m-r-10"></i></a>
                                <a href="https://github.com/fuaddary" target="_blank"><i
                                        class="fab fa-github font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Name End -->

    <!-- Date Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center mb-5 px-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="font-now text-uppercase ls-2 font-20 mb-4 my-2">Save the Date</h1>
                    <h6 class="section-title font-15 bg-white text-center text-primary px-3 mb-3">Sabtu, 11 Februari 2023
                    </h6>
                    <div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
                        <div class="flex-w flex-c-m cd100">
                            <div class="flex-col-c-m circle circle-primary m-l-15 m-r-15 m-b-20">
                                <span class="font-30 font-weight-600 color-black days"></span>
                                <span>Days</span>
                            </div>

                            <div class="flex-col-c-m circle circle-primary m-l-15 m-r-15 m-b-20">
                                <span class="font-30 font-weight-600 color-black hours"></span>
                                <span>Hours</span>
                            </div>

                            <div class="flex-col-c-m circle circle-primary m-l-15 m-r-15 m-b-20">
                                <span class="font-30 font-weight-600 color-black minutes"></span>
                                <span>Minutes</span>
                            </div>

                            <div class="flex-col-c-m circle circle-primary m-l-15 m-r-15 m-b-20">
                                <span class="font-30 font-weight-600 color-black seconds"></span>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="atcb" style="display:none;">
                        <div class="atcb " style="display:none;">
                            {
                                "name":"Firda & Fuad Wedding",
                                "description":"Kepada Yth. Kehadiran dan Do'a restu Bapak/Ibu/Saudara/i untuk acara pernikahan kami sangatlah berarti | Pernikahan Firda & Fuad | Sabtu, 11 Februari 2022",
                                "startDate":"2023-02-11",
                                "endDate":"2023-02-11",
                                "startTime":"11:00",
                                "endTime":"12:00",
                                "location":"Jl. Mesjid Agung Timur No.1, Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa Timur 60274",
                                "label":"Tambah ke Kalender",
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
                            <h1 class="font-now text-uppercase text-center ls-2 font-20 my-2">Akad</h1>
                            <hr class="px-5 mb-4">
                            <p class="font-proxima-nova font-14 mb-0">Sabtu, 11 Februari 2023</p>
                            <p class="font-proxima-nova font-14 mb-0">Pukul 07.00 WIB</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="font-now text-uppercase text-center ls-2 font-20 my-2">Resepsi</h1>
                            <hr class="px-5 mb-4">
                            <p class="font-proxima-nova font-14 mb-0">Sabtu, 11 Februari 2023</p>
                            <p class="font-proxima-nova font-14 mb-0">Pukul 11.00 - 12.00 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt-2 p-x-50">
                    <div class="col-12 text-center wow fadeInUp">
                        <p class="font-now font-20 font-weight-600 mt-3">Grand Ballroom As Shofa</p>
                        <p class="font-proxima-nova font-14 mb-0">Masjid Nasional Al Akbar
                            Surabaya</p>
                        <p class="font-proxima-nova font-14 mb-0">Jl. Mesjid Agung Timur No.1,
                            Pagesangan, Kec. Jambangan, Kota Surabaya, Jawa Timur 60274</p>
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
            <div class="row px-4 g-5">
                <div class="col-12 col-lg-12 px-4 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <div class="h-100">
                        <form id="rsvp" method="POST" action="/save-rsvp">
                            @csrf
                            <h1 class="font-now text-uppercase ls-2 font-20 mb-4 mt-2 text-center">Buku Tamu</h1>
                            <p class="font-proxima-nova font-14 mb-3 text-center">Bpk / Ibu / Sdr/i <b>{{ $name }}</b>, Apakah Anda dapat hadir?
                            </p>
                            <div class="d-flex"> 
                                <label class="radio rsvp-true mt-0"> 
                                    <input class="rsvp" type="radio" name="rsvp_join" value="1"> <span class="text-success"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Hadir </span> 
                                </label> 
                                <label class="radio rsvp-false mt-0"> 
                                    <input class="rsvp" type="radio" name="rsvp_join" value="0"> <span class="text-danger"> <i class="fa fa-calendar-times-o" aria-hidden="true"></i> Tidak </span> 
                                </label> 
                            </div>
                            <div class="form-reason mb-4" hidden>
                                <textarea type="text" id="rsvp_reason" name="rsvp_reason" class="form-control" id="karena" placeholder="Karena..." rows="3"></textarea>
                            </div>
                            <div class="form-count" hidden>
                            <p class="font-proxima-nova font-14 mb-3">Berapa orang?
                                <select class="form-select form-select-lg mb-4" id="rsvp_count" name="jumlah" aria-label="Select">
                                    <option selected>Select</option>
                                    <option value="1">Satu</option>
                                    <option value="2">Dua</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="btn-submit" class="link-1" style="width:100%; border-radius:5px">Kirim</button>
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
                    <img class="img-fluid rounded mb-4" src="{{ asset('images/logo.png') }}"
                        style="width: 50px; height: 50px">
                </h6>
                <h1 class="font-now text-uppercase ls-2 font-20 mb-3 mt-2">Protokol Kesehatan</h1>
                <p class="font-proxima-nova font-14 mb-5">Tanpa mengurangi rasa hormat, dikarenakan situasi yang sedang
                    terjadi ditengah <b>pandemi covid-19</b> ini kami memohon maaf karena acara akan diselenggarakan sesuai
                    peraturan dan himbauan pemerintah.</p>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100" href="">
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
                    <img class="img-fluid rounded" src="{{ asset('images/logo.png') }}"
                        style="width: 50px; height: 50px">
                </h6>
                <h1 class="font-now text-uppercase ls-2 font-20 mb-4 mt-2">Galeri</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto7.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto5.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto8.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto9.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto11.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded" src="{{ asset('images/foto10.png') }}" alt="">
                    </a>
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
                            {{-- <h6 class="bg-white">
                                <img class="img-fluid rounded mb-4" src="{{ asset('images/logo.png') }}"
                                    style="width: 30px; height: 30px">
                            </h6> 
                            <h1 class="font-now text-uppercase ls-2 font-20 mb-4 mt-2">Buku Tamu</h1>
                            <p class="font-proxima-nova font-14 mb-3">Bpk / Ibu / Sdr/i <b>{{ $name }}</b>, Apakah Anda dapat hadir?
                            </p>
                            <div class="d-flex"> 
                                <label class="radio rsvp-true mt-0"> 
                                    <input class="rsvp" type="radio" name="rsvp_join" value="1"> <span class="text-success"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Hadir </span> 
                                </label> 
                                <label class="radio rsvp-false mt-0"> 
                                    <input class="rsvp" type="radio" name="rsvp_join" value="0"> <span class="text-danger"> <i class="fa fa-calendar-times-o" aria-hidden="true"></i> Tidak </span> 
                                </label> 
                            </div>
                            <div class="form-reason mb-4" hidden>
                                <textarea type="text" id="rsvp_reason" name="rsvp_reason" class="form-control" id="karena" placeholder="Karena..." rows="3"></textarea>
                            </div>
                            <div class="form-count" hidden>
                            <p class="font-proxima-nova font-14 mb-3">Berapa orang?
                                <select class="form-select form-select-lg mb-4" id="rsvp_count" name="jumlah" aria-label="Select">
                                    <option selected>Select</option>
                                    <option value="1">Satu</option>
                                    <option value="2">Dua</option>
                                </select>
                            </div> --}}
                            <h1 class="font-now text-uppercase ls-2 font-20 mb-4 mt-2 text-center">Doa & Ucapan</h1>
                            <input type="text" id="message_name" name="message_name" class="form-control" placeholder="Nama" required>
                            <br>
                            <input type="text" id="message_from" name="message_from" class="form-control" placeholder="Dari">
                            <br>
                            <input name="name" class="hidden" value={{ $name }}>
                            <div class="mb-4">
                                <textarea type="text" class="form-control" name="message_data" id="message_data" placeholder="Doa dan ucapan" rows="3" required></textarea>
                            </div>
                            <div style="text-align:center">
                                <button type="submit" id="btn-submit" class="link-1" style="width:100%; border-radius:5px">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 px-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="all-wishes">
                        <div class="wishes-box">
                            @foreach ((array)$allMessages as $message)
                            <div class="testimonial-item bg-light rounded p-4 mb-3">
                                <p class="font-now font-10 mb-2 pull-right">{{ isset($message['timestamp']) ? date("d M Y, H:i",$message['timestamp']) : ""}}</p>
                                <h5 class="font-now font-14 mb-1">{{ ucwords($message['message_name']) ?? "" }}</h5>
                                <p class="font-now font-12 mb-2">{{ $message['message_from'] ??  "" }}</p>
                                <p class="font-proxima-nova font-12 mb-0"><?php echo nl2br($message['message_data']) ?></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP dan Ucapan End -->

    <!-- Terima Kasih -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center p-4">
                <h6 class="bg-white">
                    <img class="img-fluid rounded mb-4" src="{{ asset('images/logo.png') }}"
                        style="width: 30px; height: 30px">
                </h6>
                <img class="img-fluid border rounded-circle w-50 p-2 mb-4" src="{{ asset('images/foto8.png') }}"
                    alt="">
                <div class="team-text">
                    <div class="team-title">
                        <h1 class="font-dancing-script font-50 m-b-50">Terima Kasih</h1>
                        <p class="font-proxima-nova font-12 mb-0">Copyright 2023 <b>&copy; FFForever</b> <br> All Right
                            Reserved.</p>
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
            <div class="modal__description">Terima kasih telah mengisi buku tamu. Kehadiran anda sangat berarti bagi kami.</div>
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
            <div class="modal__description">Terima kasih telah mengirimkan ucapan. Doa anda sangat berarti bagi kami.</div>
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Music Start -->
    <div class="music-box hidden">
        <input type="checkbox" id="music">
        <label class="music" for="music"></label>
        <audio id="player">
            <source src="https://lenadesign.org/wp-content/uploads/2022/03/Fur-Elise-by-Beethoven-Beethoven.mp3" type="audio/mpeg"/>
        </audio>
    </div>
    {{-- <iframe src="{{ asset('music/silence.mp3') }}" type="audio/mp3" allow="autoplay" id="audio"
        style="display:none"></iframe>
    <audio autoplay loop id="player">
        <source src="{{ asset('music/a7x-afterlife.mp3') }}" type="audio/mp3">
    </audio> --}}
    <!-- Music End -->
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

        input.addEventListener("click", function(){
        if(audio.paused){
            audio.play();
        } else {
            audio.pause();
        }
        });

        $('.start').click(function(){
            // $('body').removeClass('stop-scrolling')
            $('.music-box').removeClass('hidden');
            input.checked = true;
            audio.play();
        })

        $('.rsvp').click(function(){
            console.log($(this).val());
            if($(this).val()=='1'){
                $('.form-reason').attr('hidden',true)
                $('.form-count').attr('hidden',false)
            }else{
                $('.form-reason').attr('hidden',false)
                $('.form-count').attr('hidden',true)
            }
        });

    </script>
@endsection
