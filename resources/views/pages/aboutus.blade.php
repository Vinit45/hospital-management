@extends('layouts.app2')

@section('content')

<!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">About Us </h2>
		<div class="row">
			<div class="col-lg-8">
				<h4 class="about-left">Be Gentle With The Strongest!</h4>
				<p class="mt-sm-4 mt-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien 
				quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam
				dui mi.	Vestibulum ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis.</p>
				<div class="row mt-4">
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-birthday-cake"></span>
							</span>
							<h4>Root Canals</h4>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-rocket"></span>
							</span>
							<h4>Teeth Whitening</h4>
						</div>
					</div>
					<!-- .about-box ends here -->
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-stethoscope"></span>
							</span>
							<h4>Check-ups</h4>
						</div>
					</div>
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-coffee"></span>
							</span>
							<h4>Dental Exams</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 dental">
				<img src="{{asset('/storage/tooth.png')}}" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="about-bottom pb-5">
	<div class="container pb-lg-3">
		<div class="row bottom-grids">
			<div class="den col-lg-6">
				<img src="{{asset('/storage/about.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<h4>Routine Dental Exams and Check ups at 30$.</h4>
				<p class="py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed in justo inter tellus. Donec ut felis ante. Quisque acin sapien 
				quis orci pulvinar finibus quis urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac quis eu urna Quisque quis eu urna lorem elit.</p>
				<p class="">Quisque ac sapien quis orci pulvinar finibus quis eu urna Quisque Suspendisse id felis sed felis tincidunt finibus.
				Nulla sed justo tellus. Donec ut felis ante ipsum.</p>
			</div>
		</div>
	</div>
</section>
<!-- //about bottom -->

<!-- Doctors -->
<section class="trainers pt-5">
	<div class="container py-md-3">
		<h3 class="heading text-center mb-5">Our Doctors </h3>
		 <div class="row team_grids mt-5">
			<div class="col-lg-3 col-sm-6 mb-5">
				<div class="team-member">
					<div class="team-img">
						<img src="{{asset('/storage/t1.jpg')}}" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Orthodontist</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fab fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Charlotte Olivia</h5>
					<span>Orthodontist</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-5">
				<div class="team-member">
					<div class="team-img">
						<img src="{{asset('/storage/t2.jpg')}}" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Orthodontist</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fab fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Mathew Elijah</h5>
					<span>Orthodontist</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mx-auto mb-5">
				<div class="team-member">
					<div class="team-img">
						<img src="{{asset('/storage/t3.jpg')}}" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Orthodontist</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fab fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Alexander Lucas</h5>
					<span>Orthodontist</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mx-auto mb-5">
				<div class="team-member">
					<div class="team-img">
						<img src="{{asset('/storage/t4.jpg')}}" alt="team member" class="img-fluid">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>Orthodontist</h4>
							<p>estibulum ac diam sit amet quam.</p>
						</div>
						<div class="s-link">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
							<a href="#">
								<span class="fab fa-google-plus"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="team-title">
					<h5>Linda Anderson</h5>
					<span>Orthodontist</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Doctors -->



<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3"><span class="fa fa-stethoscope"></span> Dental Health</h4>
				<p class="mb-3">Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus semper quis luctus sed.</p>
				<h5>Trusted by <span>500+ People</span> </h5>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3">Address Info</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-lg-2 col-sm-6 mb-sm-0 mb-4">
				<h4 class="mb-sm-4 mb-3">Quick Links</h4>
				<ul>
					<li><a href="#">Terms & Conditions</a></li>
					<li class="my-2"><a href="#">Support Helpline</a></li>
					<li><a href="#">Healthy Tips</a></li>
					<li class="mt-2"><a href="#">Privacy Ploicy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-sm-4 mb-3">Subscribe Us</h4>
				<p class="mb-3">Subscribe to our newsletter</p>
				<form action="#" method="post" class="d-flex">
					<input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
					<button type="submit" class="btn">Subscribe</button>
				</form>
				<div class="icon-social mt-3">
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-facebook"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-twitter"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-dribbble"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-pinterest"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-google-plus"></span>
					</a>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
			<p>© 2019 Dental Health. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>
@endsection