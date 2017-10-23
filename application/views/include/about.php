<!DOCTYPE html>
<html lang="en">
<head>
	<title>TUP Live!</title>
	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/components.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/icons.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/response.css'); ?>" rel="stylesheet" />
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/css/logo_1.ico'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../TupLive/TLimages/tup.ico">
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-1.8.3.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-ui.min.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/responsee.js');?> "></script>
	<script src="<?php echo base_url('bootstrap/js/index.js');?> "></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
           	navigation : true,
           	slideSpeed : 300,
           	paginationSpeed : 400,
           	autoPlay : true,
           	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
        		items : 4,
           	lazyLoad : true,
           	autoPlay : true,
           	navigation : true,
           	pagination : false
           });
         });	 
      </script>
	

</head>
<style>
	.botroundy{
		border-radius: 0 0 25px 25px;
	}
	.logo{
		width: 100px;
		height: 100px;
	}
	.logo2{
		width: 200px;
		height: 50px;
	}
	body{
		background-color: #1a1a1a;
		
	}
	.headcolor{
		background-color: #0d0d0d;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 0 0;
		
	}
	.headcolorroundy{
		background-color: #0d0d0d;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 25px 25px 25px 25px;
		
	}

	.headcolorroundywhite{
		background-color: #ffffff;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 15px 15px 15px 15px;
		
	}

	.headcolorroundygray{
		background-color: #C0C0C0;
		box-shadow: 0px 10px 5px #1a1a1a;
		border-radius: 15px 15px 15px 15px;
	}

	.topp{
		z-index: 1;
	}

	.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%)
	}
	.text {
		background-color: #c51e3a;
		color: #dedede;
		font-size: 16px;
		padding: 16px 32px;
		box-shadow: 0 8px 16px 0 rgba(242,242,242,0.5);
	}
	.text a{
		color: #dedede;
		font-size: 20px;
		font-style: italic;
		transition: font-size 1s;
	}
	.text a:hover{
		color: #dedede;
		font-size: 25px;
	}
	.container2:hover .video {
		opacity: 0.3;
	}
	.video {
		opacity: 1;
		display: block;
		transition: .5s ease;
		backface-visibility: hidden;
	}
	.container2:hover .middle {
		opacity: 1;
	}
	.container2 {
		position: relative;
	}
	.dexy ul li a{
		font-size: 11px;
		width: 100%;
	}
	.para{
		font-size: 10px;
	}
	nav ul{
		list-style: none;
		margin: 0 2px;
		padding: 0;
		display: flex;
		justify-content: space-around;
	}
	.dexy{
		width: 100%;
	}
	.footersize{
		font-size: 10px;
		color: black;
	}
	input {
		width: 200px;
	}
	textarea {
		height: 100px;
		width: 200px;
	}

	.our {
		font-family: Arial;
		font-weight: light;
		font-size: 30px;
		color: black;
		margin-left: 37%;
		
	}
	
	.our2 {
		font-family: Arial;
		font-weight: light;
		font-size: 30px;
		color: black;
		margin-left: 40%;
	}

	.our3 {
		font-family: Arial;
		font-weight: light;
		font-size: 30px;
		color: black;
		margin-left: 42%;
	}
	
	.title {
		font-family: Montserrat;
		font-weight: bold;
		font-size: 40px;
		color: black;
	}

	.desc1 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 39%;
	}

	.desc2 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 45%;
	}

	.desc3 {
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 15px;
		color: black;
		margin-left: 39%;
	}

	.title2 {
		text-align: center;
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 40px;
		color: black;
	}
	
	.title2b {
		text-align: center;
		font-family: Montserrat;
		font-weight: lighter;
		font-size: 40px;
		color: #800000;
	}
	
	.identdesc {
		font-size: 15px;
		font-weight: light;
		color: black;
		text-align: center;
		<!-- border: 1px solid black; -->
	}

	#socialpic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}

	#flexiblepic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}
	
	#reliablepic {
		width: 100px;
		height: 100px;
		margin-left: 35%;
	}

	#butt1 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;
		margin-top: 25px;
	}

	#butt2 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;

	}
	
	#butt3 {
		background-color: #800000;
		margin-left: 35%;
		margin-bottom: 60px;
		margin-top: 46px;
	}	
	
	hr { 
		margin-top: 0.5em;
		margin-bottom: 0.5em;
		margin-left: auto;
		margin-right: auto;
		border-width: 3px;
		width: 100px;
		border-color: #800000;
	}
	
	.soc:hover {
		background-color: #00ffffff;
		box-shadow: 10px 0 10px 2px gray;
		border-radius:50%;
	}
	
	.flex:hover {
		background-color: #00ffffff;
		box-shadow:  0 0 5px 5px gray;
		border-radius:50%;
	}
	
	.reli:hover {
		background-color: #00ffffff;
		box-shadow: -10px 0 10px 2px gray;
		border-radius:50%;
	}
	
	.mnl:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.cav:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.tag:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.vis:hover {
		background-color: #00ffffff;
		transform: rotateZ(-30deg);
	}
	
	.glen {
		margin-left: 150px;
		width: 200px;
		height: 200px;
	}
	
	.glen:hover {
		transform: scale(1.3);
	}
	
	.glendesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 200px;
		height: 200px;
	}
	
	.dex {
		margin-left: 25px;
		width: 200px;
		height: 200px;
	}
	
	.dex:hover {
		transform: scale(1.3);
	}
	
	.dexdesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 230px;
		height: 200px;
	}

	.tierce {
		margin-left: 20px;
		width: 200px;
		height: 200px;
	}
	
	.tierce:hover {
		transform: scale(1.3);
		
	}
	
	.tiercedesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 200px;
		height: 150px;
		margin-left: -20px;
	}
	
	.aein {
		
		width: 200px;
		height: 200px;
		margin-left: -20px;
	}
	
	.aein:hover {
		transform: scale(1.3);
	}
	
	.aeindesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 180px;
		height: 180px;
		margin-left: -22px;
	}
	
	.gel {
		width: 200px;
		height: 200px;
		margin-left: -13px;
	}
	
	.gel:hover {
		transform: scale(1.3);
	}
	
	.geldesc {
		color: black;
		font-family: Montserrat;
		font-weight: light;
		width: 225px;
		height: 150px;
		margin-left: -20px;
	}
	
	.titoldesc {
		color: #800000;
	}
	
	ul {
		 list-style-type: none;
	}
	
	.roledesc {
		font-size: 15px;
		font-weight: lighter;
		font-family: Arial;
	}
	
	.service1 {
		width: 500px; 
		height: 250px;
		border-radius: 10px;
		display: block;
		margin-left: 40px;
		opacity:0.5;
	}
	
	.service1:hover {
		opacity:1;
	}
	
	.service2 {
		width: 500px; 
		height: 250px;
		border-radius: 10px;
		display: block;
		margin-left: 50px;
		opacity:0.5;
	}
	
	.service2:hover {
		opacity:1;
	}
	
	.para1 {
		font-size: 50px;
		color: black;
		font-family: Montserrat;
		font-weight: Lighter;
		margin-left: 50px;
	}
	
	.para2 {
		font-size: 50px;
		color: black;
		font-family: Montserrat;
		font-weight: Lighter;
		text-align: right;
	}
	
}


</style>
<body >
	<div class="container">
	<br />
	<!-- header -->	
	<header>
		<div class="line top">
			<div class="box headcolor">
				<div class="s-6 l-2" align="center" style="top: 50px;">
					<img class="logo" src="<?php echo base_url('TLimages/tupweb.png'); ?>">
				</div>
				<div class="s-6 l-4">
					<img class="logo2" src="<?php echo base_url('TLimages/livetitle.png'); ?>">
					<h4>The Technological University of the Philippines'<br />Live Streaming Broadcasting Website<h4>
				</div>
			</div>
		</div>
	<!-- end of header -->
			 
	<!-- navigation -->
		<div class="line">
			<nav class="margin-bottom botroundy">
			<p class="nav-text">MENU</p>
				<div class="top-nav">
					<ul >
						<div class="dexy" align="center">
							<li class="s-12 m-2"><a href="<?php echo base_url('TupLive'); ?>">Home</a></li>
							<li class="s-12 m-2" ><a>Watchlist</a></li>
							<li class="s-12 m-2" ><a>Community</a></li> 
							<li class="s-12 m-2" ><a href="<?php echo base_url('about'); ?>">About Us</a></li>
							<li class="s-12 m-2" ><a id="loginform" >Login</a>
								<div class="login" >
									<div class="arrow-up"></div>
										<div class="formholder">
											<div class="randompad">
												<fieldset style="font-family: "Montserrat"">
													<label name="email" style="color: black">Email</label>
													<input type="email" value="example@example.com" />
													<label name="password" style="color: black">Password</label>
													<input type="password" />
													<input type="submit" value="Login" />
												</fieldset>
											</div>
										</div>
								</div>
							</li>
							<li class="s-12 m-2"><a>Join Us</a></li>
						</div>
					</ul>
				</div>
			</nav>
		</div>
	<!-- end of navigation -->
	</header>

	<section>

		<!--Campus Section-->
		
			<div class="box container2 headcolorroundywhite">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/campus.png'); ?>" alt="Our Campuses" class="center">
			
			<!--TUP Manila Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph">
								<img src="<?php echo base_url('TLimages/mnl.png'); ?>" alt="TUP Manila"/>
								</a><br />
			</div>
			
			<!--TUP Cavite Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/cavite/home">
								<img src="<?php echo base_url('TLimages/cav.png'); ?>" alt="TUP Cavite"/>
								</a><br />
			</div>
			
			<!--TUP Taguig Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/page/campuses/tuptaguig">
								<img src="<?php echo base_url('TLimages/tag.png'); ?>" alt="TUP Taguig"/>
								</a><br />
			</div>
			
			<!--TUP Visayas Picture-->
			
			<div class="col-md-3 mnl">	
			
			<br />
			<br />
								<a href="http://www.tup.edu.ph/visayas/home">
								<img src="<?php echo base_url('TLimages/vis.png'); ?>" alt="TUP Visayas"/>
								</a><br />
			</div>
			
			</div>
			
			<br />

		<!--Identity Section-->
			<div class="box container2 headcolorroundygray">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/identity.png'); ?>" alt="Our Identity" class="center">


			<!--Sociable-->	
			<div class="col-md-4 soc">	
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/people.png'); ?>" alt="Sociable" id="socialpic"/> <br />
								<h3 class="title2">Sociable</h3>
								<p class="identdesc">We make every campuses updated through our announcements, and entertained <br /> 
													 by our top videos.</p><br />
								<button type="button" class="btn" id="butt1">Watchlist</button>
			</div>

			<!--Flexibility-->
			
			<div class="col-md-4 flex">
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/gadgets.png'); ?>" alt="Flexibility" id="flexiblepic"/> <br />
								<h3 class="title2b">Flexibility</h3>
								<p class="identdesc">We provide services in most of today's <br />
													 technology and gives privilege to <br /> 
												     every TUPian students to watch <br />
													 &amp; subscribe on our videos.</p><br />
								<button type="button" class="btn" id="butt2">Community</button>				
			</div>

			<!--Reliability-->
			
			<div class="col-md-4 reli">
			
			<br />
			<br />
			<br />
			<br />
								<img src="<?php echo base_url('TLimages/shakehands.png'); ?>" alt="Reliability" id="reliablepic"/> <br />
								<h3 class="title2">Reliability</h3>
								<p class="identdesc">Our videos are based on open source, reliable &amp; robust technologies</p><br>
								<button type="button" class="btn" id="butt3">Join Us</button>	
			</div>
			</div>

			<br />

		<!--Team Section-->
		
			<div class="box container2 headcolorroundywhite">
			
			<br />
			
			<img src="<?php echo base_url('TLimages/team.png'); ?>" alt="Our Team" class="center">
			
			<br />
			<br />
			<br />
			<br />
				
	 		<!--Division of Picture-->
				
				<div class="row">
					
					<!--Glen Pic-->
					
						<div class="col-md-3 glen">
						
							<img src="<?php echo base_url('TLimages/glen.png'); ?>" alt="Glen" id="glen"/>
						
						</div>	
						
						
						<div class="col-md-3 glendesc">
						
							<h1 class="titoldesc"> Glen Jester Ebina </h1>
							<br />
								<ul> <li class="roledesc"> Developer (back end) </li>
								</ul>	
						</div>
						
					<!--Dexxy Pic-->
					
						<div class="col-md-3 dex">
						
							<img src="<?php echo base_url('TLimages/dex.jpg'); ?>" alt="Dex" id="dex"/>
							
						</div>
						
						<div class="col-md-3 dexdesc">
						
							<h1 class="titoldesc"> John Xedricks Fornillos </h1>
							<br />
								<ul> <li class="roledesc"> Developer (front end) </li>
								</ul>		
											
						</div>
					
				</div>
				
				<br />
				<br />
				<br />
				<br />
				
				<div class="row">
				
					<!--Tierce Pic-->
					
						<div class="col-md-2 tierce">
						
							<img src="<?php echo base_url('TLimages/tierce.jpg'); ?>" alt="Tierce" id="tierce"/>
							
						</div>
						
						<div class="col-md-2 tiercedesc">
						
							<h1 class="titoldesc"> Mary Tierce Cueto </h1>
								<ul> <li class="roledesc"> Integrator Designer </li>
								</ul>
							
						</div>
					
					<!--Aeinreb Pic-->
					
						<div class="col-md-4 aein">
						
							<img src="<?php echo base_url('TLimages/aein.png'); ?>" alt="Aein" id="aein"/>
							
						</div>
						
						<div class="col-md-2 aeindesc">
						
							<h1 class="titoldesc"> Aeinreb Mangaco </h1>
								<ul> <li class="roledesc"> Integrator Designer </li>
								</ul>
							
						</div>
					
					<!--Angel Pic-->
					
						<div class="col-md-4 gel">
						
							<img src="<?php echo base_url('TLimages/gel.png'); ?>" alt="Gel" id="gel"/>
							
						</div>
						
						<div class="col-md-2 geldesc">
						
							<h1 class="titoldesc"> Mary Angeline Villoria </h1>
								<ul> <li class="roledesc"> Integrator Designer </li>
								</ul>
							
						</div>
						
					
				</div>	
				<br />
			</div>

		<br />
		<br />

		<div class="line">
			<div class="margin">
			
		<!--Service Section-->
		
				<div class="box container2 headcolorroundygray">
						<br />	
						<img src="<?php echo base_url('TLimages/service.png'); ?>" alt="Our service" class="center">

						<br />
						<br />
						
							<div class="col-md-6">
								<div class="center-block">
									<img src="<?php echo base_url('TLimages/livestream.png'); ?>" alt="Livestream" class="service1">
								</div>
							</div>
							
							<br />
							<br />
							
							<div class="col-md-6" style="width: 500px; height:250px;">
								<div>
									<p class="para1">Real-time live streaming</p>
								</div>
							</div>
							
							<div class="col-md-6" style="width: 500px; height:250px;">
								<div>
									<p class="para2">Latest news updates</p>
								</div>
							</div>
							
							
							
							<div class="col-md-6">
								<div class="center-block">
									<img src="<?php echo base_url('TLimages/news.jpg'); ?>" alt="Livestream" class="service2">
								</div>
								<br />
							</div>
							

					</div>
			</div>
		</div>
	</section>
	
	<footer >
		<div class="box" style="width:100%">
			<div class="line">
				<div class="s-12 m-2 ">
					GENERAL<br /><br />
					<div class="footersize">
						<a href="#">Home</a><br /><br />
						<a href="#">Blog</a><br /><br />
						<a href="#">FAQ</a><br /><br />
						<a href="#">Contact Us!</a><br /><br />
					</div>
				</div>
				<div class="s-12 m-2 ">
					KNOW US<br /><br />
					<div class="footersize">
						<a href="#">About Us</a><br /><br />
						<a href="#">Disclaimer</a><br /><br />
						<a href="#">Terms and Conditions</a><br /><br />
						<a href="#">Site Help</a><br /><br />
					</div>
				</div>
				<div class="s-12 m-3">
					CONTACT US:<br /><br />
				</div>
				<div class="s-12 m-5">
					SEND US YOUR THOUGHTS: <br /><br />
					<div class="footersize">
						<form action="#" method="post">
							<input type="text" name="email" maxlength="30" placeholder="Email" /><br /><br />
							<textarea name="message" placeholder="Message"></textarea><br />
							<div>&nbsp;</div><button>Send</button>
						</form>
					</div>
				</div>
			
			</div>
		</div>

		</footer>
	
	</div>
</body>
</html>