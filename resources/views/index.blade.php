<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <!--https://colorlib.com/wp/template/resume/-->

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Resume</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="/css/linearicons.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
 
<body>
	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<!-- Start Header Area -->
		<header class="default-header">
			<nav class="navbar navbar-expand-lg  navbar-light">
				<div class="container" style="display:inline">
					<div style="display:inline">
						<span>{{ trans('index.singleMail') }}: <a href="mailto:MARIJN@HELPAUB.NL" target="_top">marijn@helpaub.nl</a></span> ---
						<span>{{ trans('index.singlePhone') }}:<a href="tel:0031643404909" target="_top">+31643404909</a></span>
						<span style="width:350px; margin-left:20px;">
							<a href="/nl"><img class="img-fluid" src="/img/flag_netherlands.png" alt=""></a>
							<a href="/en"><img class="img-fluid" src="/img/flag_england.png" alt=""></a>
							<a href="/de"><img class="img-fluid" src="/img/flag_germany.png" alt=""></a>
						</span>
					</div>
				</div>
				
			</nav>
		</header>
		<!-- End Header Area -->
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 col-md-12 no-padding banner-right">
					<img class="img-fluid" src="/img/header-img.png" alt="">
				</div>
				<div class="col-lg-6 col-md-12 banner-left">
					<h1 class="text-white">
					  {{ trans('index.headerHello') }} <br>
						<span>{{ trans('index.headerName') }}</span> <br>
						{{ trans('index.headerIntro') }}
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start skill Area -->
	<section class="service-area section-gap" id="skills">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{ trans('index.skillAndProject') }}</h1>
						<p class="italic-quote">{{ trans('index.skillAndProjectQuote') }}
							<script>document.write(new Date().getFullYear() - 2014);</script> {{ trans('index.skillAndProjectQuoteP2') }}!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="single-skill col-lg-6 col-md-6 mb-30">
					<div class="icon">
						<img src="/img/s1.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">{{ trans('index.tile1Title') }}</a></h4>
						<p class="mt-20">
            {{ trans('index.tile1Text') }}
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6 mb-30">
					<div class="icon">
						<img src="/img/s2.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">{{ trans('index.tile2Title') }}</a></h4>
						<p class="mt-20">
            {{ trans('index.tile2Text') }}
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6">
					<div class="icon">
						<img src="/img/s3.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">{{ trans('index.tile3Title') }}</a></h4>
						<p class="mt-20">
            {{ trans('index.tile3Text') }}
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6">
					<div class="icon">
						<img src="/img/s4.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">{{ trans('index.tile4Title') }}</a></h4>
						<p class="mt-20">
            {{ trans('index.tile4Text') }}
						</p>
					</div>
				</div>
				<!--TODO programmero and refference to other git repositories-->
			</div>
		</div>
	</section>
	<!-- End skill Area -->

	<!-- Start about Area -->
	<section class="about-area section-gap" id="about">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{ trans('index.aboutCareer') }}</h1>
						<p class="italic-quote">{{ trans('index.aboutCareerQuote') }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 about-left">
					<h4 class="pb-10">{{ trans('index.aboutCareerProgramming') }}</h4>
					<p>{{ trans('index.aboutCareerProgrammingDescription') }}</p>
					<div class="skillbar" data-percent="65%">
						<div class="skill-bar-percent">Java 65%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 65%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="70%">
						<div class="skill-bar-percent">Javascript 70%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 70%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="65%">
						<div class="skill-bar-percent">Php 65%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 65%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="60%">
						<div class="skill-bar-percent">Mysql 60%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 60%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="25%">
						<div class="skill-bar-percent">Mongodb 25%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 25%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="60%">
						<div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingTesting') }} 60%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 60%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="30%">
						<div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingCssAndPhotoshop') }} 30%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 30%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="75%">
						<div class="skill-bar-percent">Git 75%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 75%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="65%">
						<div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingNetworking') }} 65%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 65%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="95%">
						<div class="skill-bar-percent">{{ trans('index.aboutCareerProgrammingEnglish') }} 95%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 95%;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 about-right justify-content-end d-flex">
					<div class="myself-wrap">
						<img class="img-fluid" src="/img/about-img.jpg" alt="">
						<div class="desc">
							<h4>{{ trans('index.cardName') }}</h4>
							<p>{{ trans('index.cardTitle1') }}</p>
							<p>{{ trans('index.cardTitle2') }}</p>
							<p>{{ trans('index.cardTitle3') }}</p>
							<p><span class="lnr lnr-phone"></span> <a href="tel:0031643404909" target="_top">+31643404909</a></p>
							<p><span class="lnr lnr-envelope"></span> <a href="mailto:marijn@helpaub.nl" target="_top">marijn@helpaub.nl</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End about Area -->

	<!-- Start qualification Area -->
	<section class="qualification-area pt-100 pb-80">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-20 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{ trans('index.carreerSoFar') }}</h1>
						<p>{{ trans('index.carreerSoFarQuote') }}</p>
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-md-6 qty-left">
					<div class="single-qly">
						<h3 class="text-uppercase">{{ trans('index.schoolItem1') }}</h3>
						<p>{{ trans('index.schoolItem1Date') }}</p>
						<h4 class="pt-20 pb-20">{{ trans('index.schoolItem1Title') }}</h4>
						<p>
            {{ trans('index.schoolItem1Desciption') }}
						</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h3 class="text-uppercase">{{ trans('index.schoolItem2') }}</h3>
						<p>{{ trans('index.schoolItem2Date') }}</p>
						<h4 class="pt-20 pb-20">{{ trans('index.schoolItem2Title') }}</h4>
						<p>
            {{ trans('index.schoolItem2Desciption') }}
							<ol>
								<li>{{ trans('index.schoolItem2OL1') }}</li>
								<li>{{ trans('index.schoolItem2OL2') }}</li>
								<li>{{ trans('index.schoolItem2OL3') }}</li>
							</ol>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 qty-right">
					<!-- <div class="single-qly">
						<h4 class="pb-20">{{ trans('index.internShipItem1') }}</h4>
						<p><b>{{ trans('index.county') }}</b>: {{ trans('index.internShipItem1Company') }}</p>
						<p><b>{{ trans('index.date') }}</b>: {{ trans('index.internShipItem1Date') }}</p>
						<p><b>{{ trans('index.tasks') }}</b>: {{ trans('index.internShipItem1Tasks') }}</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h4 class="pb-20">{{ trans('index.internShipItem2') }}</h4>
						<p><b>{{ trans('index.county') }}</b>: {{ trans('index.internShipItem2Company') }}</p>
						<p><b>{{ trans('index.date') }}</b>: {{ trans('index.internShipItem2Date') }}</p>
						<p><b>{{ trans('index.tasks') }}</b>: {{ trans('index.internShipItem2Tasks') }}</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h4 class="pb-20">{{ trans('index.internShipItem1') }}</h4>
						<p><b>{{ trans('index.county') }}</b>: {{ trans('index.internShipItem1Company') }}</p>
						<p><b>{{ trans('index.date') }}</b>: {{ trans('index.internShipItem1Date') }}</p>
						<p><b>{{ trans('index.tasks') }}</b>: {{ trans('index.internShipItem1Tasks') }}</p>
					</div> -->

					@for($i = 4; $i > 0; $i--)
					<div class="single-qly">
						<h4 class="pb-20">{{ trans("index.internShipItem{$i}") }}</h4>
						<p><b>{{ trans('index.county') }}</b>: {{ trans("index.internShipItem{$i}Company") }}</p>
						<p><b>{{ trans('index.date') }}</b>: {{ trans("index.internShipItem{$i}Date") }}</p>
						<p><b>{{ trans('index.tasks') }}</b>: {{ trans("index.internShipItem{$i}Tasks") }}</p>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</section>
	<!-- End qualification Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12  col-md-12 col-sm-12">
					<p class="footer-text">Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> {{ trans('index.copyright1') }} <i class="fa fa-heart-o"
						 aria-hidden="true"></i> {{ trans('index.copyright2') }} <a href="https://colorlib.com" target="_blank">{{ trans('index.copyright3') }}</a> {{ trans('index.copyright4') }}</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
	<script src="/js/jquery.ajaxchimp.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/parallax.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.sticky.js"></script>

	<script src="/js/main.js"></script>
</body>
</html>
