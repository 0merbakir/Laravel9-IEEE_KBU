@extends('layouts.frontbase')
@section('title', "IEEE Karabük | COMSOC")

@section('content')
<div id="about" class="section wb">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="message-box" style="margin-top: 100px;">
					<h2>IEEE COMMUNICATIONS SOCIETY</h2>
					<br>
					<p>ComSoc, haberleşme ve günümüz teknolojisini geliştirerek yaşam kalitesini arttırmayı amaç edinmiş insanların bir araya geldiği bir topluluktur. Haberleşme geçmiş çağlardan bu yana insanlık için önemli bir unsur olmuştur ve gün geçtikçe de gelişimini sürdürmektedir. Peki ya ComSoc kendi içerisinde bu gelişmeye nasıl bir katkıda bulunacak ya da nasıl sürdürülmesini sağlayacak derseniz de yazımızı okumaya devam etmenizi şiddetle tavsiye ederim.</p>
					<p>Türkiye ComSoc Etkinlikleri her sene eğitim kampı ve summit olmak üzere ikiye ayrılıyor.  Eğitimler popüler konulardan seçiliyor ve alanında uzman kişilerce sizlere anlatılıyor. Bu etkinliklerin yanı sıra komite içerisinde gerçekleştirilecek eğitim akademisine katılıp çeşitli programlama dillerini öğrenme fırsatını sakın kaçırmayın. Etkinliklere ve eğitimlere katılmanız halinde kendinizdeki mükemmel gelişmeye inanamayacak aynı zamanda böylesine güzel bir ortamdan kopmak istemeyeceksiniz. </p>
				<p>Öğrenmenin sınırsız olduğu ComSoc’a hepinizi bekliyoruz. Unutmayın burada hepinize yer var. </p>
				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-md-6">
				<div class="right-box-pro wow fadeIn" style="margin-top: 150px;">
					<img src="{{asset('assets')}}/images/comsoc.jpg" alt="" class="img-fluid img-rounded">
				</div><!-- end media -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->
@endsection