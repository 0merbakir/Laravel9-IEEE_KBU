@extends('layouts.frontbase')
@section('title', "IEEE Karabük | WIE")

@section('content')
<div id="about" class="section wb">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<div class="message-box" style="margin-top: 100px;">
					<h2>IEEE WOMEN IN ENGINEERING</h2>
					<p>IEEE’nin Affinity gruplarından biri olan Women In Engineering hakkında bolca bilgi edineceğiniz bir yazı hazırladık. Umarım yazımızı beğenirsiniz, keyifli okumalar.</p>
					<p>Kadınlar olarak yapamayacağımıza inanılan onca şey arasından birine de mühendisliği ekleyebiliriz. En basitinden ‘Kızım ne okuyorsun?’ sorusuna mühendislik diye cevap verdiğimizde çokça aldığımız ‘Kızdan mühendis mi olurmuş?’ cevabı bile durumun ne derece vahim olduğunu bizlere göstermektedir. İşte toplumumuzda bulunan bu ve bunun gibi tabuları yıkmayı amaç edinmiş, kadın ve erkeklerin bilim, teknoloji, matematik ve mühendislik alanlarında eşitliğini ön görüp bu alanda çalışmalar yapan komitemiz Women In Engineering’dir. Amacımız ise oldukça açık, kadınların toplumda daha etkin bir iş gücüne sahip olması.</p>
					<p>Eşitlik ilkesini benimsemiş komitemizde siz değerli arkadaşlarımızı görmekten mutluluk duyarız. Gelin hep birlikte bu güzel amacı başarıya ulaştıralım.</p>
					<p>Bunu başarabilmek için ise kadınları yüreklendirmek ve bizlerden yaşça küçük olan kardeşlerimizi bilgilendirmek elimizdeki en büyük güç olsa gerek. Komite olarak planlarımız arasında gerek üniversitemiz içinde gerekse bulunduğumuz ildeki okulları ziyaret ederek bilgilendirme ve söyleşiler yapmak bulunuyor.</p>
				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-md-6">
			<div class="right-box-pro wow fadeIn" style="margin-top: 150px;">
					<img src="{{asset('assets')}}/images/wie.png" alt="" class="img-fluid img-rounded">
				</div><!-- end media -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->
@endsection