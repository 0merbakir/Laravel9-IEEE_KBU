@extends('layouts.frontbase')
@section('title', "Yonetim")
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
                <h1 class="page-header_title">IEEE KARABÜK YÖNETİM KURULU</h1>
            </div>
            <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <div id="about" class="section wb" style="margin-top: 0;padding-top: 0;">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center" style="margin-top: 15px !important;">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>İsmail Tunay AYDOĞAN</h2>
                        <h4>Yönetim Kurulu Başkanı</h4>
                        <h5>Elektrik-Elektronik Mühendisliği</h5>
                        <a href="mailto:tunayaydoogan@ieee.org" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/tunayaydoogan" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                    <h2>Sıla Yağmur SARI</h2>
                    <h4>Dış İşlerden Sorumlu Başkan Yardımcısı</h4>
                    <h5>Elektrik-Elektronik Mühendisliği</h5>
                    <a href="mailto:silayagmursari@ieee.org" target="_blank">
                        <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/in/silayagmursari" target="_blank">
                        <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                    <h2>İrem TUNCA</h2>
                    <h4>İç İşlerden Sorumlu Başkan Yardımcısı</h4>
                    <h5>Elektrik-Elektronik Mühendisliği</h5>
                    <a href="mailto:tuncairem@hotmail.com" target="_blank">
                        <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/in/iremtunca?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bvil7FEw3TG2hHJFIBpc2EQ%3D%3D" target="_blank">
                        <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                <h2>Oğuz Alp MUTLU</h2>
                <h4>Yazman</h4>
                <h5>Elektrik-Elektronik Mühendisliği</h5>
                <a href="mailto:o.alp.mutlu@ieee.org" target="_blank">
                    <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>
                <a href="https://www.linkedin.com/in/o%C4%9Fuz-alp-mutlu-205224181" target="_blank">
                    <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>

            </div>
            <div class="col-sm-6 text-center">
                <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                <h2>Sıla Öz</h2>
                <h4>Sayman</h4>
                <h5>Makine Mühendisliği</h5>
                <a href="mailto:sllaozz.27@gmail.com" target="_blank">
                    <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>
                <a href="https://www.linkedin.com/in/s%C4%B1la-%C3%B6z-34a478251/" target="_blank">
                    <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>

            </div>
            <div class="col-sm-6 text-center">
                <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                <h2>Esra Irk</h2>
                <h4>Yazman Vekili</h4>
                <h5>Elektrik-Elektronik Mühendisiği</h5>
                <a href="mailto:esrairk@ieee.org" target="_blank">
                    <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>
                <a href="https://www.linkedin.com/in/esra-irk-338739235" target="_blank">
                    <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>

            </div>
            <div class="col-sm-6 text-center">
                <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                <h2>Mehmet Kemal Ergun</h2>
                <h4>Asil Üye</h4>
                <h5>Elektrik-Elektronik Mühendisiği</h5>
                <a href="mailto:kemalergunnn19@gmail.com" target="_blank">
                    <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>
                <a href="http://www.linkedin.com/in/mehmetkemalergun-829400237" target="_blank">
                    <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                </a>

            </div>
        </div>
        </section>


    </div><!-- end section -->

@endsection


