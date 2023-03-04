@extends('layouts.frontbase')
@section('title', "Idari Kurul")
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
                <h1 class="page-header_title">IEEE KARABÜK İDARİ KURUL</h1>
            </div>
            <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <div id="about" class="section wb" style="margin-top: 0;padding-top: 0;" >
        <section id="officers">
            <div class="container">
                <div class="section-title text-center" style="margin-top: 15px !important;">
                    <h3>Computer Society (CS) Ekibi</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>Zeynep ÇIRÇIR</h2>
                        <h4>CS Başkanı</h4>
                        <a href="mailto:zynpcrcr@gmail.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/zeynep-circir" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>
                <br>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Betül SAMANCI</h2>
                        <h4>Başkan Yardımcısı</h4>
                        <h5>Bilgisayar Mühendisliği</h5>
                        <a href="mailto:betulsmncc@icloud.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/bet%C3%BCl-samanc%C4%B1-753489212" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Ayşe Özlem UZUNAY</h2>
                        <h4>Yazman</h4>
                        <h5>Bilgisayar Mühendisliği</h5>
                        <a href="mailto:ayseozlem01@gmail.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/ay%C5%9Fe-%C3%B6zlem-u-b20b99247" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                    <p></p>
                    <h2>Ömer BAKIR</h2>
                    <h4>Asil Üye</h4>
                    <h4>Bilgisayar Mühendisliği</h4>
                    <a href="mailto:omerbkr00@gmail.com" target="_blank">
                        <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/in/ömer-bakır-30ab80211/" target="_blank">
                        <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                    <p></p>
                    <h2>İrem SÖZMEZGÜL</h2>
                    <h4>Asil Üye</h4>
                    <h4>Bilgisayar Mühendisliği</h4>
                    <a href="mailto:iremsonmezgul@ieee.org" target="_blank">
                        <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://www.linkedin.com/in/irem-s%C3%B6nmezg%C3%BCl" target="_blank">
                        <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                    <p></p>
                    <h2>Kaan PAŞA</h2>
                    <h4>Asil Üye</h4>
                    <h4>Bilgisayar Mühendisliği</h4>
                    <a href="mailto:kaanpasa@ieee.org" target="_blank">
                        <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                    <a href="https://tr.linkedin.com/in/kaanpasa" target="_blank">
                        <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </div>
            </div>

        </section>
        <section id="officers">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Communications Society (ComSoc) Ekibi</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>Leyla BAYRAM</h2>
                        <h4>ComSoc Başkanı</h4>
                        <h4>Elektrik-Elektronik Mühendisliği</h4>
                        <a href="mailto:leylabayram@ieee.org" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/leyla-bayram-8435ba230?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B%2BcdczXPKRZ%2B%2F8e3jdshxFA%3D%3DD" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>

                <p></p>
                <br>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Sariye Nur Coban</h2>
                        <h4>Başkan Yardımcısı</h4>
                        <h4>Elektrik-Elektronik Mühendisliği</h4>
                        <h5></h5>
                        <a href="mailto:sariyecoban0@gmail.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/sariye-nur-%C3%A7oban-081987238?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bhp6FA8ehQGiDwgs9kYOGnw%3D%3D" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Senanur Dizdar</h2>
                        <h4>Yazman</h4>
                        <h4>Elektrik-Elektronik Mühendisliği</h4>
                        <h5></h5>
                        <a href="mailto:senadizdar@ieee.org" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/sena-dizdar-1ba906238" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="officers">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Woman in Engineering (WIE) Ekibi</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>Şeyma</h2>
                        <h4>WIE Başkanı</h4>
                        <h4>Endüstri Mühendisliği</h4>
                        <a href="mailto:seymaaseyma1907@gmail.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/%C5%9Feyma-hakan-4b84b3205" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>

                <p></p>
                <br>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Yasin Cebeci</h2>
                        <h4>Başkan Yardımcısı</h4>
                        <h5></h5>
                        <a href="mailto:ysncbc@gmail.com" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/yasin-cebeci-708011171/" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="officers">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Robotics And Otomation (RAS) Ekibi</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <p></p>
                        <h2>Mete Erdoğan</h2>
                        <h4>RAS Başkanı</h4>
                        <h4>Elelktrik-Elektronik Mühendisliği</h4>
                        <a href="mailto:ugurmete@ieee.org" target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                        <a href="linkedin.com/in/mete-uğur" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <p></p>

                <p></p>
                <br>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="{{asset('assets')}}/images/person.jpg" class="rounded-circle" width="260" height="260">
                        <h2>Şevval Comart</h2>
                        <h4>Yazman</h4>
                        <h5></h5>
                        <a href="mailto:svvlcmrt@hotmail.com " target="_blank">
                            <img src="{{asset('assets')}}/images/mail.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                        <a href="https://www.linkedin.com/in/yasin-cebeci-708011171/" target="_blank">
                            <img src="{{asset('assets')}}/images/linkedin.jpg" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        </a>
                    </div>
                </div>
            </div>
        </section>


    </div><!-- end section -->

@endsection


