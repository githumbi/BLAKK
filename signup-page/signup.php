<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_item"><a href="#">FAQ</a></div>
							<div class="top_bar_item"><a href="#">Request an Appointment</a></div>
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">For Emergencies: +563 47558 623</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="signup.php">signup</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">Care<span>Med</span></div>
										<div class="logo_box">+</div>
									</div>
									<div class="logo_sub">Health Care Center</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
					<li class="menu_item menu_mm"><a href="services.html">Services</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="menu_extra">
				<div class="menu_appointment"><a href="#">Request an Appointment</a></div>
				<div class="menu_emergencies">For Emergencies: +563 47558 623</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> News</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                	<h3>
                                		 <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                	</h3>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>
			</div>
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Personal Details</h2></div>
					<div class="contact_form_container">
						 <form action="includes/signup.inc.php" method="post">
						    <div class="form-group">
						        <input class="form-control" type="text" name="name" placeholder="Full Name">
						    </div>
						    <div class="form-group">
						        <input class="form-control" type="email" name="email" placeholder="email">
						    </div>
						    <div class="form-group">
						        <input class="form-control" type="number" name="phone" placeholder="phone">
						    </div>
						    <div class="form-group">
						        <input class="form-control" type="text" name="work" placeholder="occupation">
						    </div>
						    <div class="form-group">
						       <div class="container">
						       <div class="row">
						       		<div class="col-lg-6">
						       		 <label>Male</label>
						        <input class="form-control" value="male" type="radio" name="gender">
						       	</div>
						       	<div class="col-lg-6">
						       		 <label>Female</label>
						        <input class="form-control" value="female" type="radio" name="gender">
						       	</div>
						       </div>
						       </div>
						    </div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					<div class="section_title"><h2>Your address</h2></div>
					<div class="contact_form_container">
						 	 <div class="form-group">
						        <input class="form-control" type="text" name="address" placeholder="address">
						    </div>
						     <div class="form-group">
						        <input class="form-control" type="text" name="city" placeholder="city">
						    </div>
						    <div class="form-group">
						       <label for="african-countries">African Countries</i></label>
								<select type="text" class="form-control " id="african-countries" name="country">
								<option selected>Choose</option>
								<option value="algeria">Algeria</option>
								<option value="angola">Angola</option>
								<option value="benin">Benin</option>
								<option value="botswana">Botswana</option>
								<option value="burkina Faso">Burkina Faso</option>
								<option value="burundi">Burundi</option>
								<option value="cameroon">Cameroon</option>
								<option value="cape-verde">Cape Verde</option>
								<option value="central-african-republic">Central African Republic</option>
								<option value="chad">Chad</option>
								<option value="comoros">Comoros</option>
								<option value="congo-brazzaville">Congo - Brazzaville</option>
								<option value="congo-kinshasa">Congo - Kinshasa</option>
								<option value="ivory-coast">Côte d’Ivoire</option>
								<option value="djibouti">Djibouti</option>
								<option value="egypt">Egypt</option>
								<option value="equatorial-guinea">Equatorial Guinea</option>
								<option value="eritrea">Eritrea</option>
								<option value="ethiopia">Ethiopia</option>
								<option value="gabon">Gabon</option>
								<option value="gambia">Gambia</option>
								<option value="ghana">Ghana</option>
								<option value="guinea">Guinea</option>
								<option value="guinea-bissau">Guinea-Bissau</option>
								<option value="kenya">Kenya</option>
								<option value="lesotho">Lesotho</option>
								<option value="liberia">Liberia</option>
								<option value="libya">Libya</option>
								<option value="madagascar">Madagascar</option>
								<option value="malawi">Malawi</option>
								<option value="mali">Mali</option>
								<option value="mauritania">Mauritania</option>
								<option value="mauritius">Mauritius</option>
								<option value="mayotte">Mayotte</option>
								<option value="morocco">Morocco</option>
								<option value="mozambique">Mozambique</option>
								<option value="namibia">Namibia</option>
								<option value="niger">Niger</option>
								<option value="nigeria">Nigeria</option>
								<option value="rwanda">Rwanda</option>
								<option value="reunion">Réunion</option>
								<option value="saint-helena">Saint Helena</option>
								<option value="senegal">Senegal</option>
								<option value="seychelles">Seychelles</option>
								<option value="sierra-leone">Sierra Leone</option>
								<option value="somalia">Somalia</option>
								<option value="south-africa">South Africa</option>
								<option value="sudan">Sudan</option>
								<option value="south-sudan">Sudan</option>
								<option value="swaziland">Swaziland</option>
								<option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
								<option value="tanzania">Tanzania</option>
								<option value="togo">Togo</option>
								<option value="tunisia">Tunisia</option>
								<option value="uganda">Uganda</option>
								<option value="western-sahara">Western Sahara</option>
								<option value="zambia">Zambia</option>
								<option value="zimbabwe">Zimbabwe</option>
								</select>
						    </div>
						    <div class="form-group">
						        <button name="submit" type="submit" class="btn btn-primary btn-block">SIGN UP</button>
						    </div>
						 </form>
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
							<div class="footer_logo_container">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<div class="logo_text">Care<span>Med</span></div>
											<div class="logo_box">+</div>
										</div>
										<div class="logo_sub">Health Care Center</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum.</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
								<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>office@template.com</span></li>
								<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
							</ul>
						</div>
					</div>

					<!-- Footer - Links -->
					<div class="col-lg-4 footer_col">
						<div class="footer_links footer_column">
							<div class="footer_title">Useful Links</div>
							<ul>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Apply for a Job</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Our Partners</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Free services</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Our Screening Program</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer - News -->
					<div class="col-lg-4 footer_col">
						<div class="footer_news footer_column">
							<div class="footer_title">Useful Links</div>
							<ul>
								<li>
									<div class="footer_news_title"><a href="news.html">Aliquam ac eleifend metus</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
								<li>
									<div class="footer_news_title"><a href="news.html">Donec in libero sit amet mi vulputate</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
								<li>
									<div class="footer_news_title"><a href="news.html">Aliquam ac eleifend metus</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>