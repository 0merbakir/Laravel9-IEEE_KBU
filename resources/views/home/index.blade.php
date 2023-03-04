@extends('layouts.frontbase')
@section('title', "IEEE Karabük Öğrenci Kolu")
@section('scrollindex', 'active')
@section('title', 'ieee-kbu')


@section('content')
<div>
	<section id="home" class="main-banner parallaxie" style="background: url('{{asset('assets')}}/uploads/kbu-bg.jpg')">
		<div class="heading">
			<h1 style="margin-top: 100px !important;">IEEE KBÜ Öğrenci Kolu</h1>
			<p>"İNSANLARI DOKTORLAR YAŞATIR İNSANLIĞI MÜHENDİSLER"</p>
			<h3 class="cd-headline clip is-full-width">
				<span>IEEE KBÜ</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Computer Society</b>
					<b>Women in Engineering</b>
					<b>Robotics and Automation Society</b>
				</span>
			</h3>
			<br>
			<button style=" font-size:17px; border-radius:20%; font-weight:bolder"><a class="nav-link js-scroll-trigger @yield('scrollüyeOl')" href="/uyeol">ÜYE OL</a></button>
		</div>
	</section>

	<div id="about" class="section wb">
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

		<div id="services" class="section lb">
			<div class="container" style="margin-top: 200px !important;">
				<div class="section-title">
					<h3>IEEE KARABÜK | KOMİTELERİMİZ</h3>
				</div><!-- end title -->
				<div class="row">
					<div class="col-lg-4" style="margin-bottom: 50px;">
						<div class="card p-0">
							<div class="card-image">
								<img src="{{asset('assets')}}/images/computer.png" alt="">
							</div>
							<div class="card-content d-flex flex-column align-items-center">
								<a href="/komiteler/cs">
									<h4 class="pt-2">COMPUTER SOCIETY</h4>
								</a>
								<h5>IEEE KARABÜK</h5>

								<ul class="social-icons d-flex justify-content-center">
									<li style="--i:1">
										<a href="/komiteler/cs">
											<span class="fab fa-facebook"></span>
										</a>
									</li>
									<li style="--i:2">
										<a href="#">
											<span class="fab fa-twitter"></span>
										</a>
									</li>
									<li style="--i:3">
										<a href="#">
											<span class="fab fa-instagram"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4" style="margin-bottom: 50px;">
						<div class="card p-0">
							<div class="card-image">
								<img src="{{asset('assets')}}/images/wie.png" alt="">
							</div>
							<div class="card-content d-flex flex-column align-items-center">
								<a href="/komiteler/wie">
									<h4 class="pt-2">WOMAN IN ENGINEERING SOCIETY</h4>
								</a>
								<h5>IEEE KARABÜK</h5>

								<ul class="social-icons d-flex justify-content-center">
									<li style="--i:1">
										<a href="/komiteler/">
											<span class="fab fa-facebook"></span>
										</a>
									</li>
									<li style="--i:2">
										<a href="#">
											<span class="fab fa-twitter"></span>
										</a>
									</li>
									<li style="--i:3">
										<a href="#">
											<span class="fab fa-instagram"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4" style="margin-bottom: 50px;">
						<div class="card p-0">
							<div class="card-image">
								<img src="{{asset('assets')}}/images/comsoc.jpg" alt="">
							</div>
							<div class="card-content d-flex flex-column align-items-center">
								<a href="/komiteler/comsoc">
									<h4 class="pt-2">COMMUNICATIONS SOCIETY</h4>
								</a>
								<h5>IEEE KARABÜK</h5>
								<ul class="social-icons d-flex justify-content-center">
									<li style="--i:1">
										<a href="#">
											<span class="fab fa-facebook"></span>
										</a>
									</li>
									<li style="--i:2">
										<a href="#">
											<span class="fab fa-twitter"></span>
										</a>
									</li>
									<li style="--i:3">
										<a href="#">
											<span class="fab fa-instagram"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4" style="margin-bottom: 50px;">
						<div class="card p-0">
							<div class="card-image">
								<img src="{{asset('assets')}}/images/rao.jpg" alt="">
							</div>
							<div class="card-content d-flex flex-column align-items-center">
								<a href="/komiteler/robotic">
									<h4 class="pt-2">ROBOTICS AND OTOMATION SOCIETY</h4>
								</a>
								<h5>IEEE KARABÜK</h5>
								<ul class="social-icons d-flex justify-content-center">
									<li style="--i:1">
										<a href="/komiteler/cs">
											<span class="fab fa-facebook"></span>
										</a>
									</li>
									<li style="--i:2">
										<a href="#">
											<span class="fab fa-twitter"></span>
										</a>
									</li>
									<li style="--i:3">
										<a href="#">
											<span class="fab fa-instagram"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end section -->

		<div id="blog" class="section lb">
			<div class="container">
				<div class="section-title text-left">
					<h3>Etkinliklerimiz</h3>
					<p>Karabük Üniversitesi İEEE kulübünün düzenlemiş olduğu etkinlikler</p>
				</div><!-- end title -->

				<div class="row">
					@foreach($data as $rs)
					<div class="col-md-4 col-sm-6 col-lg-4">
						<div class="post-box">
							<div class="post-thumb">
								<img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="post-img" />
							</div>
							<div class="post-info">
								<h4>{{$rs->title}}</h4>
								<ul>
									<li>IEEE KARABÜK | </li>
									<li>{{ \Carbon\Carbon::parse($rs->updated_at)->format('d/m/Y')}}</li>
								</ul>
								<p>{!! $rs->text !!}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>
	@endsection