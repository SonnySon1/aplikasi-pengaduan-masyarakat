@extends('layouts.user.master.master')

@section('content')
    <!-- ======= navbar ======= -->
    @include('layouts.user.navbar.navbar')
    <!-- End navbar -->

    <!-- ======= hiro ======= -->
    @include('layouts.user.hiro.hiro')
    <!-- End hiro -->


    <!-- ======== main ======== -->
    <main id="main">

        <!-- ======= Information ======= -->
        @include('layouts.user.information.information')
        <!-- End Information -->

        <!-- ======= About ======= -->
        @include('layouts.user.about.about')
        <!-- End About -->

        <!-- ======= Promotion ======= -->
        @include('layouts.user.promotion.promotion')
        <!-- End promotion -->

        <!-- ======= Testimonials  ======= -->
        @include('layouts.user.testimoni.testimoni')
        <!-- End Testimonials -->

        <!-- ======= ContactUs ======= -->
        @include('layouts.user.contactus.contactus')
        <!-- End ContactUs -->

    </main>
    <!-- End #main -->
@endsection
