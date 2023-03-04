@extends('layouts.frontbase')
@section('title', "Denetim Kurulu")
@section('scrollhakkimizda', 'active')
@section('content')
<style>
    .page-header {
        text-align: center;
        min-height: 450px;
        padding: 50px 0;
        height: auto;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
        background-image: url('{{asset('assets')}}/images/back2.jpg');
    }

    .page-header .page-header_title {
        font-size: 50px;
        font-weight: 700;
        position: relative;
        z-index: 2;
        line-height: 1.2;
        margin-bottom: 10px;
        color: #fff;
    }
</style>
<div>
    <section class="page-header">
        <div class="container">
            <div class="page-header_wrapper">
                <h1 class="page-header_title">IEEE KARABÜK DENETİM KURULU</h1>
            </div>
            <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <div id="about" class="section wb" style="margin-top: 0;padding-top: 0;>
        <section id="officers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center" style="margin-top: 15px !important;">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>Ad Soyad</h2>
                        <h3>Denetim Kurulu Başkanı</h3>
                        <h4></h4>
                        <a href="https://mail.google.com/" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">

                </div>
            </div>

        </section>

        </section>


    </div><!-- end section -->

@endsection


