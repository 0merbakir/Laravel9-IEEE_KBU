@extends('layouts.frontbase')
@section('title', "IEEE Karabük | CS")

@section('content')
<div id="about" class="section wb">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="message-box" style="margin-top: 100px;">
					<h2>IEEE COMPUTER SOCIETY </h2>
					<br>
					<p> Bu yazımızda IEEE Computer Society’i sizlere anlatacağız. Computer Society nedir? Bu komitede neler yapılıyor? Katılmak için ne yapmam lazım? Dediğinizi duyar gibiyim. O zaman lafı fazla uzatmadan başlayalım ne dersiniz?</p>
					<p>Computer Society IEEE’nin yazılım, programlama, donanım gibi konularıyla ilgilenen alt topluluklarından biridir. Binlerce üyesinin bulunmasının yanı sıra bilgisayar alanındaki en büyük teknik kuruluş olma özelliğine sahiptir. Bu güzel kuruluşun bir üyesi olmak için bilgisayar olmanıza gerek yok ya da Steve Jobs. Öğrenmeye açık olup elinizden geldiğince kendinizi geliştirmeniz yeterli. Eminim ki kendinizi geliştirme konusunda bu komitede yer alıyorsanız hiç de zorlanmayacaksınız zira katılacağınız webinarlar ya da eğitimler kendinizi geliştirme konusunda size çok güzel kapılar açacaktır. </p>
					<p>Yazılımı, donanımı ve programlamayı iliklerinize kadar hissedeceğiniz bu muhteşem komiteye hepinizi bekleriz.</p>
				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-md-6">
				<div class="right-box-pro wow fadeIn" style="margin-top: 150px;">
					<img src="{{asset('assets')}}/images/computer.png" alt="" class="img-fluid img-rounded">
				</div><!-- end media -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->
@endsection