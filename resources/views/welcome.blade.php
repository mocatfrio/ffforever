@extends('master')

@section('title', 'Coming Soon')

@section('content')
    <!-- Slider -->
    <div class="slider">
        <div class="slider-item bg-img" style="background-image: url('img/foto1.jpg');"></div>
        <div class="slider-item bg-img" style="background-image: url('img/foto2.jpg');"></div>
        <div class="slider-item bg-img" style="background-image: url('img/foto3.jpg');"></div>
    </div>

    <div class="size-full overlay color-white">
        <!--  -->
        <div class="size-full flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
            <h1 class="font-now text-center font-weight-600 p-b-20 font-50 ls-5 lh-1">
                COMING <span class="font-weight-100">SOON</span>
            </h1>

            <h4 class="font-proxima text-center font-weight-500 p-b-100 font-18">
                We are under construction!
            </h4>

            <div class="flex-w flex-c-m cd100 p-b-33">
                <div class="flex-col-c-m circle m-l-15 m-r-15 m-b-20">
                    <span class="font-30 font-weight-600 days"></span>
                    <span>Days</span>
                </div>

                <div class="flex-col-c-m circle m-l-15 m-r-15 m-b-20">
                    <span class="font-30 font-weight-600 hours"></span>
                    <span>Hours</span>
                </div>

                <div class="flex-col-c-m circle m-l-15 m-r-15 m-b-20">
                    <span class="font-30 font-weight-600 minutes"></span>
                    <span>Minutes</span>
                </div>

                <div class="flex-col-c-m circle m-l-15 m-r-15 m-b-20">
                    <span class="font-30 font-weight-600 seconds"></span>
                    <span>Seconds</span>
                </div>
            </div>
        </div>
    </div>
@endsection
