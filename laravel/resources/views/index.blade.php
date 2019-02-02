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
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>
 
<body>
	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<!-- Start Header Area -->
		<header class="default-header">
			<nav class="navbar navbar-expand-lg  navbar-light">
				<div class="container">
					<div>
						<span>{{ trans('index.email') }}: <a href="mailto:marijn@helpaub.nl" target="_top">marijn@helpaub.nl</a></span> ---
						<span>Single click phone: <a href="tel:0031643404909" target="_top">+31643404909</a></span>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Header Area -->
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 col-md-12 no-padding banner-right">
					<img class="img-fluid" src="img/header-img.png" alt="">
				</div>
				<div class="col-lg-6 col-md-12 banner-left">
					<h1 class="text-white">
						Hi, I’m <br>
						<span>Marijn Degen</span> <br>
						Advanced web programmer and network manager
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
						<h1 class="mb-10">Have a Look at my skills and projects</h1>
						<p class="italic-quote">Programming and network management has been my passion for the past
							<script>document.write(new Date().getFullYear() - 2014);</script> years!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="single-skill col-lg-6 col-md-6 mb-30">
					<div class="icon">
						<img src="img/s1.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">Full stack web programming</a></h4>
						<p class="mt-20">
							Writing new websites and tools with the newest coolest javascript technology has become a hobby of mine, aside
							from the career aspect. Especially react & end-to-end testing really facinates me, writing a rest API in a new
							programming language or framework is allways a fun thing to learn.
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6 mb-30">
					<div class="icon">
						<img src="img/s2.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">Blockchain projects</a></h4>
						<p class="mt-20">
							In 2018 I had the honour to make a voting project based on blockchain, we as a project group choose ethereum, at
							that time I took responsibility for the communication between the blockchain smart contracts and the java
							backend.
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6">
					<div class="icon">
						<img src="img/s3.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">Embedded solutions and IOT</a></h4>
						<p class="mt-20">
							When I face practical problems in life, I allways try to think of an IOT solution that would solve the problem
							and maybe even harvest data for big data purposes, arduino and raspberry are my favorite tools.
						</p>
					</div>
				</div>
				<div class="single-skill col-lg-6 col-md-6">
					<div class="icon">
						<img src="img/s4.png" alt="">
					</div>
					<div class="dec">
						<h4 class="mt-30"><a href="#">Network management</a></h4>
						<p class="mt-20">
							After graduating in 2016 for my network management degree I decided that I wanted to become a complete technical
							person. This doesn't mean that I left this working field all toghether, I am still ambitious to setup new
							networks, IP camera's and network attached storages when I'm not programming.
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
						<h1 class="mb-10">About my career</h1>
						<p class="italic-quote">Helping people with computer problems convinced me to be more dedicated to computers,
							programming and networks.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 about-left">
					<h4 class="pb-10">Programming and general skills</h4>
					<p>The percentage represents how comfortable I feel in programming with this topic.</p>
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
						<div class="skill-bar-percent">End-to-end testing with puppeteer, unit testing in general 60%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 60%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="30%">
						<div class="skill-bar-percent">Css and photoshop 30%</div>
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
						<div class="skill-bar-percent">Small bussiness to medium bussiness (wireless) networks 65%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 65%;"></div>
						</div>
					</div>

					<div class="skillbar" data-percent="95%">
						<div class="skill-bar-percent">English language 95%</div>
						<div class="skillwrap">
							<div class="skillbar-bar" style="width: 95%;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 about-right justify-content-end d-flex">
					<div class="myself-wrap">
						<img class="img-fluid" src="img/about-img.jpg" alt="">
						<div class="desc">
							<h4>Marijn Degen</h4>
							<p>Full stack web developer</p>
							<p>Smart contract writer</p>
							<p>Network manager</p>
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
						<h1 class="mb-10">My career sofar</h1>
						<p>My educations and my internships.</p>
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-md-6 qty-left">
					<div class="single-qly">
						<h3 class="text-uppercase">HBO - HAN university of applied sience</h3>
						<p>September 2016 to Present</p>
						<h4 class="pt-20 pb-20">Webdevelopment</h4>
						<p>
							What I really like on my current education is learning new technologies, but also the
							principles of developing applications in a team (with SCRUM). 
							I choose webdevelopment instead of software development because I think making applications 
							for cross platforms is really cool in general and what is more cross platform than the web?
						</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h3 class="text-uppercase">MBO - ROC Nijmegen the school of life</h3>
						<p>September 2013 to july 2016</p>
						<h4 class="pt-20 pb-20">IT administrator & media - level 4</h4>
						<p>
							During this time I had three succesfull internships and I learned the following things:
							<ol>
								<li>Windows server 2012 R2</li>
								<li>Cisco CCNA 1 & CCNA certificates (network principles)</li>
								<li>Basic programming with java & PHP</li>
							</ol>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 qty-right">
					<div class="single-qly">
						<h4 class="pb-20">Precision makers</h4>
						<p><b>Country</b>: The Netherlands</p>
						<p><b>tasks</b>: Solder PCBs and solder cables for revolutionary autonomous tractors.</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h4 class="pb-20">E-Commerce park</h4>
						<p><b>Country</b>: Curaçao</p>
						<p><b>tasks</b>: Recieve client servers, unpack client servers, rack the servers in the trays and install the
							requested OS on the server so the client can work on them.</p>
					</div>
					<div class="btm-border d-block mx-auto"></div>
					<div class="single-qly">
						<h4 class="pb-20">ROC - Nijmegen</h4>
						<p><b>Country</b>: The Netherlands</p>
						<p><b>Tasks</b>: Help teachers and students with PC problems and connectivity problems, put new images on
							computers and laptops through the network, fixing printer drivers.</p>
					</div>
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
						<script>document.write(new Date().getFullYear());</script> All rights reserved | With <i class="fa fa-heart-o"
						 aria-hidden="true"></i> thank you kindly <a href="https://colorlib.com" target="_blank">Colorlib</a> for this
						cool template, Marijn Degen. KVK Netherlands Chamber of Commerce number: 72942371</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>

	<script src="js/main.js"></script>
</body>
</html>
