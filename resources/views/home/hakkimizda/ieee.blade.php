@extends('layouts.frontbase')
@section('title', "IEEE KBU Nedir")
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
                <h1 class="page-header_title">IEEE KARABÜK ÖĞRENCİ KOLU</h1>
            </div>
            <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <div id="about" class="section wb" ">
        <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h2>IEEE NEDİR?</h2>
                    <p></p>
                    <p> Açılımı Institute of Electrical Electronics Engineers olan IEEE (Türkçesi: Elektrik Elektronik Mühendisleri Enstitüsü) “İnsanlık Yararına Teknoloji” sloganıyla herhangi bir kâr amacı gütmeden teknolojinin gelişimi için uğraşan bir topluluktur.</p>
                    <p></p>
                    <p>1884 yılında kurulan Amerika Elektrik Mühendisleri Enstitüsü ile Radyo Mühendisleri Enstitüsü 1 Ocak 1963 yılında IEEE'yi oluşturmak için birleştiler. IEEE tüm mühendislik çalışmaların yer aldığı alanlarda faaliyet göstermesinin yanı sıra genel olarak elektrik, elektronik, telekomünikasyon, otomasyon, uzay sistemleri, bilgisayar ve biyomedikal sistemler alanlarında faaliyet göstermekte ve bu alanlarda birçok standart belirlemektedir. IEEE, 400,000’i aşkın üyesiyle 160’dan fazla ülkede bulunan dünyanın en büyük teknik topluluğudur. Üyeleri arasında akademisyenler, mühendisler, bilim insanları gibi profesyonellerin bulunmasının yanı sıra dünyadaki birçok lise ve üniversite öğrencisi yer almaktadır.</p>
                    <p>IEEE ayrıca mühendislik alanına ilgiyi güçlendirmek için üniverstelerdeki öğrenci üyelerine de hizmetlerde bulunur. IEEE hakkında daha fazla bilgi edinmek için: <a href="https://www.ieee.org/" target="_blank">IEEE.org</a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="right-box-pro wow fadeIn">
                    <img src="{{asset('assets')}}/images/ieee-hakk.jpg" class="img-fluid img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-box-pro wow fadeIn">
                        <img src="{{asset('assets')}}/images/ekip.jpeg" alt="" class="img-fluid img-rounded">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>IEEE KBÜ</h2>
                        <p></p>
                        <p>IEEE Karabük Üniversitesi Öğrenci Topluluğu, IEEE Türkiye Şubesi bünyesinde 2019 yılında Türkiye’nin teknik anlamdaki en büyük öğrenci topluluğunun parçası olarak tekrardan kurulmuştur. Topluluğumuz 200 aktif olmak üzere toplamda 700’ü aşkın üyesiyle çalışmalarına ara vermeden devam etmektedir. Üyelerimiz, farklı alt birimlerimiz ve komitelerimiz aktif olarak görev almaktadır.</p>
                        <p></p>
                        <p>IEEE Karabük Üniversitesi olarak ; öğrenci arkadaşlarımızın eğitim döneminden başlayarak profesyonel iş hayatında da sürdüreceği teknik alt yapıyı oluşturmak ve araştırma ruhunu pekiştirmek, ayrıca; mühendislik ve ilgili bölümlerin sadece teorik eğitimlerle tamamlanamayacağı, bu süreç içerisinde öğrencilerin hayata karşı farklı bakış açılarının kazandırılması doğrultusunda farkındalık yaratmaları için azimle çalışmalarımızı sürdürmekteyiz.</p>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</div>

@endsection