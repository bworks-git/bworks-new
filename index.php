<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Bworks tech labs is a leading global consulting and services Company in India">
    <meta name="keywords" content="Devops,IT Infrastructure,Automation Services, Monitoring Support Web Designing,Cyber Security,">        
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Bworks tech labs - Infrastructure, Security Services & Devops</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media_style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="script/jssor.slider.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body> <?PHP $PATH="http://bworks.in/"; ?>
	<header>
		<div class="header_out">
			<div class="header_fixed">
				<div class="center clearfix">
					<a class="logo" href="<?PHP echo $PATH; ?>" title="Bworks Tech labs"><img src="images/logo1.png" alt="Bworks"/></a>
					<nav class="hmenu_blk">
					<a class="res_hmenu" onclick="$('.hmenu_lst').slideToggle('slow');" title="Menu"> </a>
					<ul class="hmenu_lst">
						<li class="active"><a href="home.html" title="Home">Home</a></li>
						<li><a href="javascript:;" title="Services">Services</a>
							<div class="hsubmenu_blk">
							<ul class="hsubmenu_lst clearfix">
								<li><a href="<?PHP echo $PATH; ?>infrastructure.html" title="Infrastructure">Infrastructure</a></li>
								<li><a href="<?PHP echo $PATH; ?>security.html" title="Security">Security</a></li>
								<li><a href="<?PHP echo $PATH; ?>devtest.html" title="Development & Testing">Development & Testing</a></li>
								<li><a href="<?PHP echo $PATH; ?>training.html" title="Training">Training</a></li>
							</ul>
							</div>
						</li>
						<li><a href="<?PHP echo $PATH; ?>#abut_id" title="About Us">About Us</a></li>
						<li><a href="<?PHP echo $PATH; ?>#cntct_id" title="Contact">Contact</a></li>
						<li><a href="<?PHP echo $PATH; ?>#partn_id" title="Clients">Clients</a></li>
						<li><a href="javascript:;" title="Blog">Blog</a></li>
					</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	
	<section>
		<div class="banner banner1" id="home_id">
			<div class="center">
				<!--div class="ban_img"><img src="images/banner_img1.png" alt=""/></div -->
				<div class="ban_cnt">
					<h1 class="ban_title">Bworks Tech Labs</h1>
					<h3 class="ban_subtitle">Surely  IT Works for You</h3>
				</div>
			</div>
		</div>
		
		<!-- Solution start -->
		<div class="solutn_sec">
			<div class="center">
				<h3 class="solutn_title">Proactive Solutions – A Sneak Peak</h3>
				<ul class="solutn_lst">
					<li>
						<i class="solt_icon icon12"></i>
						<h4 class="solutn_subtitle">Infrastructure</h4>
						<p>Manage E-2-E cloud</p>
						<p>Automation Services</p>
						<p>Monitoring & Support</p>
						<p>Hosting & Datacenter's</p>
						<a href="<?PHP echo $PATH; ?>infrastructure.html" class="btn">More Infra</a>
					</li>
					<li>
						<i class="solt_icon icon10"></i>
						<h4 class="solutn_subtitle">Security</h4>
						<p>VA / PT Services</p>
						<p>Cyber Security & Forensics</p>
						<p>Brand Protection</p>
						<p>Threat Management</p>
						<a  href="<?PHP echo $PATH; ?>security.html" class="btn">More Security</a>
					</li>
					<li>
						<i class="solt_icon icon11"></i>
						<h4 class="solutn_subtitle">Development & Testing</h4>
						<p>Web Designing</p>
						<p>HTML5 Development</p>
						<p>Functional Testing</p>
						<p>Specialized Testing</p>
						<a  href="<?PHP echo $PATH; ?>devtest.html" class="btn">More Dev</a>
					</li>
					<li>
						<i class="solt_icon icon13"></i>
						<h4 class="solutn_subtitle">Training</h4>
						<p>IT Infra Training</p>
						<p>Security Training</p>
						<p>Technology Training</p>
						<p>Soft Skill Training</p>	
						<a  href="<?PHP echo $PATH; ?>training.html" class="btn">More Training</a>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- Services start -->
		<div class="abtus_sec" id="abut_id">
			<div class="center">
			<div class="abtus_title">About Us </div>
				<p class="desc2">Bworks tech labs is a leading global consulting and services Company, headquartered in Tamilnadu, India with its local office in Coimbatore & Bangalore and its global operations in US and Singapore. bworks offers wide gamut of solutions customized to specific client needs including but not limited to Infrastructure Management, Application Development ,Security Services and  Training services.</p>
				<p class="desc2">Working across the industry spectrum, bworks has developed and perfected the Global Delivery Model to enable customers to attain premium quality deliverables where expertise in respective fields are readily available, transparent and cost effective. This framework employs engineering best practices, delivery methodologies, tools, standards, processes, and artifacts to drive a platform for success. </p>
			
			</div>
		</div>
		<!-- Contact page -->		
		<div class="cntct_sec" id="cntct_id">
		<div id="map-canvas" class="google_map"></div>
			<div class="cntct_secin">
			<div class="center">
				<div class="cntct_blk">
					<h5 class="title1">Say Hi! We can Help U!</h5>
					<form class="form_blk" name="cntct_form" method="post" method="post" enctype="multipart/form-data">
						<ul class="lst_blk cntct_lst">
							<li>
								<div class="input_line">
									<input type="text" placeholder="Name" name="name" id="form_name" />
								</div>
							</li>
							<li>
								<div class="input_line">
									<input type="text" placeholder="Mail Id" name="mailid" id="form_mailid" />
								</div>
							</li>
							<li>
								<div class="input_line">
									<input type="text" placeholder="Phone No" name="phone" id="form_phone" />
								</div>
							</li>
							<li>
								<div class="input_line">
									<textarea name="message" placeholder="Message here" id="form_message" > </textarea>
								</div>
							</li>
							<li>
								<div class="input_line captcha_blk">
								<span id="capt_val"></span>
								<input type="text" id="capt_inpt" name="captcha" placeholder="Enter Captcha" maxlength="5" required />								
								</div>
							</li>
							<li>
								<div class="submt_blk">
									<input class="sbt_btn" type="submit" onclick="javascript:vald_form();return false;" name="submit" value="send" />									
								</div>
							</li>
						</ul>
					</form>
				</div>
			</div>
			</div>
		</div>
		<!-- Partner Section -->
		<div class="client_sec" id="partn_id" >
			<div class="center">
				<div class="stack_title">We Work With</div>
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width:1024px; height: 120px; overflow: hidden; ">
					<div class="stack_slider" u="slides" style=" position: absolute; left: 0px; top: 0px; width: 1024px; height: 100px; overflow: hidden;">
						  <div><img u="image" alt="reward360" src="images/client/reward360.png" /></div>
						  <div><img u="image" alt="osl" src="images/client/osl.png" /></div>
						  <div><img u="image" alt="zipzapwheels" src="images/client/zipzapwheels.png" /></div>
						  <div><img u="image" alt="ucspl" src="images/client/ucspl.png" /></div>
						  <div><img u="image" alt="graphler" src="images/client/graphler.png" /></div>
						  <?php /* div><img u="image" alt="smartbuy" src="images/client/smartbuy.png" /></div */ ?>
						  <div><img u="image" alt="piingle" src="images/client/piingle.png" /></div>
						  <div><img u="image" alt="Eminent" src="images/client/eminent.png" /></div>
						  <div><img u="image" alt="havil-int-exterio" src="images/client/havil-int-exterio.png" /></div>
						  <div><img u="image" alt="actionreplay" src="images/client/actionreplay.png" /></div>
						  <div><img u="image" alt="cmpda_autoshow" src="images/client/cmpda_autoshow.png" /></div>
						  <div><img u="image" alt="lotushub" src="images/client/lotushub.png" /></div>
						  <div><img u="image" alt="haigenie" src="images/client/haigenie.png" /></div>
						  <!-- Reward 360 , osl-open sky labs , zipzapwheels, ucspl,graphlertech,piingle,smartbuy hdfc, -->
					</div>
					 <!--div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
						<div u="prototype"></div>
					</div-->
				</div>				
			</div>
		</div>	
	</section>
	
	<footer>
		<div class="footer_outer">
			<div class="center">
				<div class="foot_in">
					<p class="cpy_rht">Copyright © 2015 BWorks Tech Labs. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
</body>
 <script>
        jQuery(document).ready(function () {
		/* for captcha */
		$('#capt_val').text(Math.floor(Math.random() * 99999) + 1);
            var options = {
                $AutoPlay: true, $AutoPlaySteps: 3,$AutoPlayInterval:5000,  $PauseOnHover: 4, $ArrowKeyNavigation: true,  $SlideEasing: $JssorEasing$.$EaseLinear,    $SlideDuration: 200, 
                $MinDragOffsetToSlide: 20,  $SlideWidth: 320,  $SlideSpacing:20,  $DisplayPieces: 3,  $ParkingPosition: 0,  $UISearchMode: 1,  $PlayOrientation: 1,  $DragOrientation: 1 ,
				/* $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$,  $ChanceToShow: 3, $Lanes: 1,  $SpacingX: 10,  $SpacingY: 10  } */
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1024));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }
           ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);        
			/* smooth scroll start */
			$('.hmenu_lst li a[href*=#]:not([href=#]),.right_menu a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top - 71
			}, 2000);
			return false;
			}
			}
			});
			/* smooth scroll end */
			
        });
		 function vald_form() { //alert('called');			
			/* submission */
			var name = document.getElementById("form_name").value;
			var email = document.getElementById("form_mailid").value;
			var contact = document.getElementById("form_phone").value;
			var msg = document.getElementById("form_message").value;
		   // Returns successful data submission message when the entered information is stored in database.
			var dataString = 'name1=' + name + '&email1=' + email + '&contact1=' + contact + '&msg1=' + msg ;
			if (name == '' || email == '' || msg == '' || contact == '')
			{
				alert("Please Fill All Fields");
				return false;
			}
			var capt_gen = parseInt($('#capt_val').text());
			var capt_inpt = parseInt($('#capt_inpt').val());			
			if(capt_inpt == capt_gen) { 
								//AJAX code to submit form 
								// alert(dataString);
										$.ajax({
											type: "POST",
											url: "conatct_submit.php",
											data: dataString,
											cache: false,
											success: function(html) {
												alert(html);
											}
										}); 
										return false;
									}					
			else { alert("Enter Captcha Correctly"); return false;}				
    return false;
}
    </script>
</html>
