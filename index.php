<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<?php
	require 'header.html';
	require 'schema/connect.php';
	require 'schema/createdb.php';
	require 'schema/nurse.php';
	require 'schema/wardboy.php';
	require 'schema/doctor.php';
	require 'schema/receptionist.php';
	require 'schema/patient.php';
?>
<div class="super_container">
	
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/background.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1 style="color:#ffffff;">Medicine made with care</h1></div>
										<div class="home_text"  >
											<p style="color: #ffffff">MEDANTA CANCER INSTITUTE has been delivering the highest quality and advance cancer treatment in a supportive, compassionate and caring environment since 2009. The technology and equipment being commissioned are comparable to that available in the most advanced centres across the globe. A meticulous planning with accurate delivery is aimed to ensure optimal patient treatment with a human touch. A protocol based approach for management of brain tumors and various cancers is being established to ensure an international standard of care.</p>
										</div>
										<div class="button home_button">
											<a href="#">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_background_1.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>Medicine made with care</h1></div>
										<div class="home_text">
											<p>Medanta is home to some of the most eminent doctors in the world, most of whom are pioneers in their respective arenas and are renowned for developing innovative and revolutionary procedures. Many of our doctors are also ‘Padma Shri’, ‘Padma Bhushan’, ‘Dr B. C. Roy National Award’ and ‘Marquis Who’s Who in the World’ recipients.

												.</p>
										</div>
										<div class="button home_button">
											<a href="#">read more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				

			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box working_hours">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
						<div class="box_title">Working Hours</div>
						<div class="working_hours_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Friday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Appointments</div>
						<div class="box_text">You can take Appointment by a call.</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_emergency">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/bell.svg" alt=""></div></div>
						<div class="box_title">Emergency ambulance No.</div>
						<div class="box_phone">+56 273 45678 235</div>
						<div class="box_emergency_text">For emergency ambulance service just contact on above contact No.</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->
	<br><br><br><br><br>
	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>A great medical team to help your needs</h2></div>
						<div class="about_text">
							<p>At Medanta, you will instantly discover that you are so much more than just a patient. Right from the way we have designed our patient rooms to the way we serve you, we have left no stone unturned, ensuring that both, your medical and personal needs are placed above everything else..</p>
						</div>
						
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="images/about.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" data-image-src="images/departments.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_light"><h2>Our Medical Departments</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">
				
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="caremedimages/d1.jpg" alt="" style="height:175px;width:275px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">plastic surgery</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="caremedimages/d2.jpg" alt="" style="height:175px;width:275px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">gastroenterology</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="caremedimages/d3.jpg" alt="" style="height:175px;width:275px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">dentistry</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="caremedimages/d4.jpg" alt="" style="height:175px;width:275px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">radiation oncology</div>
						</div>
					</div>
				</div>


				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="caremedimages/d5.jpg" alt="" style="height:175px;width:275px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">cardiac surgery</div>
						</div>
					</div>
				</div>

				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
						<div class="dept">
							<div class="dept_image"><img src="caremedimages/d6.jpg" alt="" style="height:175px;width:275px"></div>
							<div class="dept_content text-center">
								<div class="dept_title">nephrology</div>
							</div>
						</div>
					</div>
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
						<div class="dept">
							<div class="dept_image"><img src="caremedimages/d7.jpg" alt="" style="height:175px;width:275px"></div>
							<div class="dept_content text-center">
								<div class="dept_title">urology and andrology</div>
							</div>
						</div>
					</div>
				<!-- Department -->
				<div class="col-lg-3 col-md-6 dept_col">
						<div class="dept">
							<div class="dept_image"><img src="caremedimages/d8.jpg" alt="" style="height:175px;width:275px"></div>
							<div class="dept_content text-center">
								<div class="dept_title">gynaecology</div>
							</div>
						</div>
					</div>														
			</div>
		</div>
	</div>


	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Why medanta..?</h2>
						<p>Our cross-cultural environment, state-of-the-art treatment and high quality healthcare at affordable cost are some of the many reasons why numerous patients from across the world choose to come to us for some of the most complex treatments during organ transplants and cardiac ailments.</p>
						
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_container">
			<div class="container">
				<div class="row">
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo_container"  style="float:left;">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<img src="images/logo.png">
										</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>MULTI SUPER SPECIALITY HOSPITAL</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
								<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>information@medanta.com</span></li>
								<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Near jawahar colony,gurugram-HARYANA</span></li>
							</ul>
						</div>
					</div>

					<!-- Footer - Links -->
					

					<!-- Footer - News -->
					
				</div>
			</div>
		</div>
		<center><div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made <i class="fa fa-heart-o" aria-hidden="true"></i> by group 15.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div></center>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>