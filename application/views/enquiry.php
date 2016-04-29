
<?php

?>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/arise-business-html5-website-template/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2016 09:51:26 GMT -->
<head>
<meta charset="utf-8">
<title>Enquiry/iPlay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.html" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



<div id="wrapper">
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png"  class ="img-circle" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Gallery</a></li>
                        <li  class="active"><a href="enquiry.php">Enquiry</a></li>                      
						 <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	</div>
	</head>
	<body>
	<section id="inner-headline">
						<div class="container">
						<div class="row">
						<div class="col-lg-12">
						<h2 class="pageTitle">Enquiry Form</h2>
						</div>
						</div>
						</div>
		<section id="content">
		<div class="container">	 
		<!-- end divider -->
			<div class="row">
				<div class="col-sm-12 col-sm-12 col-sm-offset-0">
				<form method="post" enctype="multipart/form-data">
					<fieldset>		                        	
		                <div class="form-bottom">							
							<h4 style="margin-top:10px"> Child's Details :  </h4> 
								<div class="row" >
									<div class="form-group" style="margin-top:12px" > 
									<label class="col-md-2 control-label">Child Name</label>
									<div class="col-md-2">
									 <input type="text" class="form-control" id="name"  name="name"placeholder="Enter name" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-2 control-label" >Date of Birth</label>
									<div class="col-md-2">
									<input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth"></div>
									</div>
									<div class="form-group">
									<label class="col-md-2 control-label">Phone Number</label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile No." required>			
									</div>
									</div>
								</div>
								<div class="row" >
									<div class="form-group">
									<label class="col-md-2 control-label">Gender</label>
									<div class="col-md-2">
									<select  input class="form-control input-md" name="Seeking_grade" id="seeking_grade" autocomplete="off">
									<option value="none">Select</option>
									<option value="Male" >Male </option>
									<option value="Female" >Female</option>							
									</select>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-md-2 control-label">Profile Picture</label>
									<div class="col-md-2">
									<input type="file" class="form-control" id="pic" name="pic" >
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-md-2 control-label">Pin Code </label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="pin" name="pin" placeholder="Enter pin" >
									</div>
									</div>
									
								 </div>
								 <div class="row" >							 
									<div class="form-group">
									<label class="col-md-2 control-label"> Residential Address</label>
									<div class="col-md-6">
									<textarea rows="3" class="form-control" id="address" name="address" placeholder="Address"></textarea>
									</div>	
									</div>
								</div>									
							
							<h4 > Father's Details :</h4> 
								<div class="row">
									<div class="form-group" style="margin-top:15px"> 
									<label class="col-md-2 control-label">Father Name</label>
									<div class="col-md-3">									
									<input type="text" class="form-control" id="father"  name="father"placeholder="Enter Father's Name">
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-2 control-label">Education Qualification </label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="edu" name="edu" placeholder="Father's Qualification">         
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-1 control-label">Occupation</label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="occupation"  name="Occupation"placeholder="Father's Occupation">			
									</div>
									</div>
								</div>
								<div class="row" >
									<div class="form-group">
									<label class="col-md-2 control-label">Father's Email </label>
									<div class="col-md-3">
									<input type="email" class="form-control" id="email" name="email" placeholder="Father's Email">       
									</div>
									</div>
								</div>

							<h4> Mother's Details :  </h4> 
								<div class="row">
									<div class="form-group" style="margin-top:15px"> 
									<label class="col-md-2 control-label">Mother's Name</label>
									<div class="col-md-3">									
									 <input type="text" class="form-control" id="mother"  name="mother"placeholder="Enter Mother's Name">		
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-2 control-label">Education Qualification </label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="m_edu" name="m_edu" placeholder="Mother's Qualification">         
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-1 control-label">Occupation</label>
									<div class="col-md-2">
									 <input type="text" class="form-control" id="m_occupation"  name="m_occupation"placeholder="Mother's Occupation">
			
									</div>
									</div>
								</div>
								<div class="row" >
									<div class="form-group">
									<label class="col-md-2 control-label">Mother's Email </label>
									<div class="col-md-3">
									 <input type="text" class="form-control" id="m_occupation"  name="m_occupation"placeholder="Mother's Occupation">		
									</div>
									</div>
								</div>	

								<h4>Legal Guardian Details :</h4> 
								<div class="row">
									<div class="form-group" style="margin-top:15px"> 
									<label class="col-md-2 control-label">Name</label>
									<div class="col-md-3">									
									<input type="text" class="form-control" id="G_name"  name="g_name"placeholder="Enter Gaurdian's Name">	
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-2 control-label">Qualification </label>
									<div class="col-md-2">
									<input type="text" class="form-control" id="g_edu" name="g_edu" placeholder="Gaurdian's Qualification">         
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-1 control-label">Occupation</label>
									<div class="col-md-2">
									 <input type="text" class="form-control" id="g_occupation"  name="g_occupation"placeholder="Gaurdian's Occupation">	
									</div>
									</div>
								</div>
								<div class="row" >
									<div class="form-group">
									<label class="col-md-2 control-label">Email </label>
									<div class="col-md-3">
									<input type="email" class="form-control" id="g_email" name="g_email" placeholder="Gaurdian's Email">
									</div>
									</div>
								</div>	
								
							<div class="row" style="margin-top:20px" >
								<div class="col-sm-12">
								<div class=" col-sm-offset-3 col-sm-6">
								<div class="form-group">
								<label>How did you come to know about I Play I Learn ?</label> 
								</div>
								<div class="form-group">
								<label style="margin-right: 8px;"> News paper <input type="checkbox"  name="checkbox1" value="News paper"></label>
								<label style="margin-right: 8px;">Banner <input type="checkbox"  name="checkbox1"  value="Banner"></label>
								<label style="margin-right: 8px;"> Friends <input type="checkbox"  name="checkbox1"  value="Friends"></label>
								<label style="margin-right: 8px;"> TV <input type="checkbox"  name="checkbox1"  value="TV"></label>
								<label style="margin-right: 8px;"> Local Activities <input type="checkbox"  name="checkbox1"  value="Local Activity"></label>
								</div>
								<div class="form-group">
								<button id="send" class="btn btn-default btn-success btn-block">SUBMIT</button>
								</div>
								</div>
								</div>
							</div>
								
							</div>
						</fieldset>	
					</form>							
					</div>
				</div>
			</div>
		</section>
	</section>

	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong></strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Arise 2016 All right reserved. By </span><a href="http://webthemez.com/" Arise="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from webthemez.com/demo/arise-business-html5-website-template/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2016 09:51:26 GMT -->
</html>
