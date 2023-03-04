@extends('layouts.frontbase')
@section('title', "Üyelik Formu")
@section('content')

<div style="background:url('https://t4.ftcdn.net/jpg/04/21/44/29/360_F_421442912_e9dARIDF7CnBKKcB1Ooy0aNcEOJ13eVY.jpg')">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="container" style="font-size:60px ">
            <center>
                <p> 2022-2023 ÜYELİK FORMU </p>
            </center>
        </div>

        <form class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2" action="/admin/storeregister" method="post">
            @csrf
            <div class="heading-bx left">
                <p style="color: red;">@include('home.uyarilar')</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 form-group">
                    <label for="first_name">
                        AD:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg text-uppercase" minlength="2" maxlength="50" required="">
                </div>
                <div class="col-12 col-md-6 form-group">
                    <label for="last_name">
                        SOYAD:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg text-uppercase" minlength="2" maxlength="50" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 form-group">
                    <label for="academic_unit">
                        FAKÜLTE:
                        <span class="text-danger">*</span>
                    </label>
                    <select id="academic_unit" name="academic_unit" class="form-control form-control-lg custom-select-lg" required="">
                        <option value="" selected="" disabled="">
                            Seçiniz..
                        </option>
                        <option value="Diş Hekimliği Fakültesi">Diş Hekimliği Fakültesi</option>
                        <option value="Edebiyat Fakültesi">Edebiyat Fakültesi</option>
                        <option value="Fen Fakültesi">Fen Fakültesi</option>
                        <option value="İktisadi ve İdari Bilimler Fakültesi">İktisadi ve İdari Bilimler Fakültesi</option>
                        <option value="İlahiyat Fakültesi">İlahiyat Fakültesi</option>
                        <option value="Mimarlık Fakültesi">Mimarlık Fakültesi</option>
                        <option value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
                        <option value="Orman Fakültesi">Orman Fakültesi</option>
                        <option value="Safranbolu Turizm Fakültesi">Safranbolu Turizm Fakültesi</option>
                        <option value="Safranbolu Fethi Toker Güzel Sanatlar ve Tasarım Fakültesi">Safranbolu Fethi Toker Güzel Sanatlar ve Tasarım Fakültesi
                        </option>
                        <option value="Teknik Eğitim Fakültesi">Mimarlık Fakültesi</option>
                        <option value="Teknoloji Fakültesi">Teknoloji Fakültesi</option>
                        <option value="Tıp Fakültesi">Tıp Fakültesi</option>
                        <option value="Diğer">Diğer</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 form-group">
                    <label for="academic_department">
                        BÖLÜM:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="bölüm" id="academic_department" name="academic_department" class="form-control form-control-lg custom-select-lg" required="">
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 form-group">
                    <label for="year">
                        SINIF:
                        <span class="text-danger">*</span>
                    </label>
                    <select id="year" name="year" class="form-control form-control-lg custom-select-lg">
                        <option value="" selected="">
                            Seçiniz..
                        </option>

                        <option value="HAZIRLIK">
                            Hazırlık
                        </option>
                        <option value="1. SINIF">
                            1. Sınıf
                        </option>
                        <option value="2. SINIF">
                            2. Sınıf
                        </option>
                        <option value="3. SINIF">
                            3. Sınıf
                        </option>
                        <option value="4. SINIF">
                            4. Sınıf
                        </option>
                        <option value="5. SINIF">
                            5. Sınıf
                        </option>
                        <option value="6. SINIF">
                            6. Sınıf
                        </option>
                        <option value="YÜKSEK LİSANS">
                            Yüksek Lisans
                        </option>
                    </select>
                </div>
                <div class="col-12 col-md-6 form-group">
                    <label for="student_number">
                        OKUL NUMARASI:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="student_number" name="student_number" class="form-control form-control-lg text-uppercase" minlength="9" maxlength="11" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 form-group">
                    <label for="email">
                        E-POSTA:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" id="email" name="email" lang="en" class="form-control form-control-lg text-lowercase" required="">
                </div>
                <div class="col-12 col-md-6 form-group">
                    <label for="tel">
                        TELEFON NUMARASI:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="tel" id="phone_number" name="phone_number" lang="en" class="form-control form-control-lg text-lowercase" required="" placeholder="5xx-xxx-xx-xx" pattern="\d\d\d\d\d\d\d\d\d\d">
                </div>
                <div class="row justify-content-center" style="margin-left: 250px; margin-bottom: 100px;">
                    <button type="submit" class="btn btn-primary">
                        GÖNDER
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection