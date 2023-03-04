@extends('layouts.frontbase')
@section('scrolliletisim', 'active')
@section('title', "Bize Ulaşın")
@section('content')
<div id="blog" class="section lb" >
    <div class="section-title">
        <h3 style="text-align: center;">Bize Ulaşın</h3>
    </div><!-- end title -->
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.6780495275607!2d32.658370743317164!3d41.20699213173132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408353568ca1908d%3A0xedc4cea46c4fdfa2!2sKarab%C3%BCk%20%C3%9Cniversitesi%20M%C3%BChendislik%20Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1654442742026!5m2!1str!2str" width="100%" height="300" style="border:1px;animation-name: fadeInUp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="row" style="margin-left:5px;margin-right:5px">
            <form action="/admin/storemessage" class="contact-form mt-5" enctype="multipart/form-data" role="form" style="width:50%" method="post">
                @csrf
                <div class="heading-bx left">
                    <p style="color: red;">@include('home.uyarilar')</p>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <label>İsim</label>
                        <input type="string" name="name" required class="form-control" placeholder="İsim ve Soyisim">
                    </div>

                    <div class="col-sm-6 py-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <label for="email">Email</label>
                        <input type="string" name="email" required class="form-control" placeholder="Email adresiniz" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <label>Konu</label>
                        <textarea name="message" required class="form-control" rows="1" placeholder="Konu"></textarea>
                    </div>

                    <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <label>Mesajınız</label>
                        <textarea name="message" required class="form-control" rows="8" placeholder="Mesajınız"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary wow zoomIn" style="visibility:visible; animation-name: zoomIn;">Mesaj Gönder</button>
            </form>
            <div class="page-section" style="width:50%;margin-top:50px;padding-left:20px">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="text-lg">
                                <p>
                                    <i class="fa-solid fa-at"></i>
                                    Email Adresimiz: <a href="mailto:ieeekarabuk@gmail.com">ieeekarabuk@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="text-lg">
                                <p>
                                    <i class="fa-brands fa-linkedin"></i>
                                    Linkedin Adresimiz: <a href="https://www.linkedin.com/company/ieee-kbu-cs">https://www.linkedin.com/company/ieee-kbu-cs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection