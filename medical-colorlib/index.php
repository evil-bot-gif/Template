<?php
// $text='';
// $text=$_POST['message'];
// $connect= mysqli_connect("localhost","root","","tbl_images");
// if(!$connect){
// 	echo 'Connection error: ' . mysqli_connect_error();
// }
// if(isset($_REQUEST['insert']))
// {	
// 	$message = $_REQUEST["message"];
// 	// $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
// 	$query = "INSERT INTO text(message) VALUES ('$message')";
// 	if(mysqli_query($connect,$query)){
// 		echo '<script>alert("Image Inserted into Database")</script>';
// 	}
// }
$connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["insert"]))  
 {  
	  $text='';
	  $text=$_POST['message'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,text) VALUES ('$file','$text')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
?>
	<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Active Health</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/mycss.css">        
			    
	</head>
		<body>
		
		
			<!-- Start Header Area -->
			<header class="default-header pt-0 pb-0" style="position: fixed;" >
				<div class="container" >
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo2.png" alt=""></a>
								
							</div>
							<!-- <ul class="menu">
      						<a href="#">Home</a>
      						<a href="#">About</a>
      						<a href="#">Services</a>
      						<a href="#">Works</a>
      						<a href="#">Contact</a>
      						<label for="chk" class="hide-menu-btn">
        					<i class="fas fa-times"></i>
      						</label>
    							</ul> -->
							 <div class="main-menubar d-flex align-items-center" > 
								<nav> 
									 <a href="#home">Home</a>
									<a href="#login">Login</a>
									<a href="#appoinment">Appoinment</a>
									<a href="#consultant">Consultants</a> 
								</nav>
								 <div class="menu-bar"><span class="lnr lnr-menu"></span></div> 
								 <!-- <span class="lnr lnr-menu"></span> -->
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center">
							<div class="banner-content col-lg-6 col-md-12">
								<h1 class="text-uppercase">
									We are the team <br>
									help you being active
								</h1>
                                    <iframe width="420" height="315"
									src="https://www.youtube.com/embed/X6jIrXkcZ8Y?autoplay=1">
									</iframe>
									<button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button>
							</div>
							<div class="col-lg-6 d-flex align-self-end img-right">
								<img class="img-fluid mt-20" src="img/head.jpg" alt="">
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			
					
			<!-- End feature Area -->


			<!-- Start about Area -->
			<section class="about-area" id="appoinment">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right no-padding">
							<h1>Share with Us</h1>
							<!-- Start Form section -->
							<form class="booking-form" method="post" id="myForm" enctype="multipart/form-data">
								 	<div class="row">
										<div class="col-lg-6 col-md-12 about-right no-padding">
											<img class="img-fluid" id="imageholder" name="imageholder" src="img/placeholder.png" alt="your image" />
										</div>
										<div class="col-lg-12 flex-column">
											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										<div class="col-lg-12 d-flex flex-column">
											<input class="mt-20" onchange="readURL(this);" type='file' id="image" name="image"/>
											<!-- onchange="readURL(this);" -->
										</div>
										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<button id='insert' onclick="submit()" name='insert' value="insert" class="submit-btn primary-btn mt-20 text-uppercase ">Upload<span class="lnr lnr-arrow-right"></span></button> 
											<!-- <input type="submit" name="insert" id="insert" value="Insert" class="submit-btn primary-btn mt-20 text-uppercase" /> -->
										</div>

										<div class="alert-msg"></div>
									</div>
							  </form>
							  <!-- End form Section -->
							  <!-- Form script -->
							  <script>
								  $(document).ready(function(){
									$('#insert').click(function(){
										var image_name=$('#image').val();
										if(image_name = '')
										{
											alert('Please Select Image');
											return false;
										}
										else
										{
											var extension = $('#image').val().split('.').pop().toLowerCase;
											if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1 )
											{
												alert('Invalid Image File');
												$('#image').val('');
												return false;
											}
										}
									});
								  });
								  function readURL(input) {
            						if (input.files && input.files[0]) {
                					var reader = new FileReader();

                					reader.onload = function (e) {
                    				$('#imageholder')
                        			.attr('src', e.target.result);
                							};

                					reader.readAsDataURL(input.files[0]);
            						}
      								}
							  </script>
							  <!-- End form script -->
							</div>
						</div>
					</div>
					
							<table class="table table-bordered">
								<col width="50%">
								<col width="50%">
									<tr><th colspan="2">Share Forum</th></tr>
									
					<?php
						$db= mysqli_connect("localhost","root","","testing");
						$sql="SELECT * FROM tbl_images";
						$result = mysqli_query($db,$sql);
						while($row= mysqli_fetch_array($result)){
							echo '  
							
							<tr>
									<td> <img  class="mt-5 mb-5" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="300" " /> </td>
									<td>'.$row['text'].'</td>
							</tr>
                              
                     ';  
							
						}
						?>
					</table>

				</div>
			</section>
			<!-- End about Area -->

			<!-- Start consultans Area -->
			
			<!-- End consultans Area -->

			<!-- Start fact Area -->
			
			<!-- end fact Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Our Recent Blogs</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							<h4>
								<a href="#">Portable Fashion for young women</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
								 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
 								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end blog Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>Navigate</h6>
								<ul class="footer-nav">
									<li><a href="#">Forum</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Our Team</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
                                     <h6 class='mb-20'>Contact us</h6>
							 	<ul class="footer-nav">
									<li>Singapore Polytechnic</li>
									<li>500 Dover Road</li>
									<li>Singapore 139651</li>
								</ul>
								<h3>67751133</h3> 
								<h3><a href='mailto:contactus@sp.edu.sg'>contactus@sp.edu.sg</a></h3>  
							</div>                
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://www.facebook.com/singaporepolytechnic/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/SingaporePoly"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		</body>
	</html>
