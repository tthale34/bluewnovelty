<?php
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = str_replace("signup_page.php","",$url);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="./images/favicon.ico">
		<link rel="shortcut icon" href="./images/favicon.ico">
		<link rel="stylesheet" href="./css/stuck.css">
		<link rel="stylesheet" href="./css/owl.carousel.css">
		<link rel="stylesheet" href="./css/form.css">
		<link rel="stylesheet" href="./css/touchTouch.css">
		<link rel="stylesheet" href="./css/camera.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/jquery.js"></script>
		<script src="./js/jquery-migrate-1.1.1.js"></script>
		<script src="./js/script.js"></script>
		<script src="./js/superfish.js"></script>
		<script src="./js/jquery.equalheights.js"></script>
		<script src="./js/jquery.mobilemenu.js"></script>
		<script src="./js/jquery.easing.1.3.js"></script>
		<script src="./js/tmStickUp.js"></script>
		<script src="./js/jquery.ui.totop.js"></script>
		<script src="./js/touchTouch.jquery.js"></script>
		<script src="./js/owl.carousel.js"></script>
		<script src="./js/sForm.js"></script>
		<script src="./js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="./js/jquery.mobile.customized.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />
<script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
			$('#re_password').change(function(){

                if ($('#re_password').val() != $('#password').val()) {
                    alert("passed");
                    $('#re_password').val("");
                    $('#password').val("");
                    $('#pass_not_match').css("display","inline");
                } else {
                    alert("failed");
                    $('#pass_not_match').css("display","none");
                }
            });
		});
        function checkPasswordMatch(){
            alert("check pssword");
        }
		</script>

		<!-- Importing jquery cdn -->
	 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	 </script>

	 <script src=
"https://code.jquery.com/jquery-3.3.1.slim.min.js"
			 integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			 crossorigin="anonymous">
	 </script>

	 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			 integrity=
"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			 crossorigin="anonymous">
	 </script>

	 <!-- Importing icon cdn -->
	 <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	 <!-- Importing core bootstrap cdn -->
	 <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			 integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			 crossorigin="anonymous">

	 <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			 integrity=
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			 crossorigin="anonymous">
	 </script>

	 <!-- Importing datepicker cdn -->
	 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
	 </script>
        <style type="text/css">
.tutorial_text {
    position: absolute;
    width: 80px;
    color: black;
    font-weight: bolder;
}

.tutorial_text1,
.tutorial_text2 {
    border: black solid thin;
    color: white;
    background-color: rgb(46, 40, 40);
    opacity: 0.8;
    cursor: pointer;
}

.tutorial_text1:hover,
.tutorial_text2:hover {
    border: black solid thin;
    color: #1a3fe2;
    background-color: white;
    opacity: 0.6;
    cursor: pointer;
}

.tutorial_text1 {
    top: 175px;
    left: 513px;
    padding: 82px;
}

.tutorial_text2 {
    top: 145px;
    left: 786px;
    padding: 90px;
    padding-right: 65px;
}

.tutorial_holder {
    padding-left: 3.5%;
    display: inline-block;
}

#logo {
    font-family: 'Bahnschrift', Courier, monospace;
    cursor: pointer;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: xx-large;
}
#signup_form{
	width: 50%;
	margin-left : 25%

}
.photog_name{
  padding-top: 50px;
  color: white;
}
.strip{
  background: #fff;
}
.signin_label{
    font-family: 'Helvetica';
    font-size: 20px;

}
.signup_info{
    margin-left: 10%;
    margin-bottom: 10px;
}
.sinput_holder{
    padding: 5%;
}
.item{
    margin: 40px;
}
.item
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.item
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.sign_btn{
	width: 30%;
    cursor: pointer;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;

}
.search_input{
	border-radius: 15px;
	width: 350px;
}

.sign_btn:hover{
    color: #1a3fe2;
}
@media only screen and (width: 580px) {
    .home_image{
        width: 45%;height: 500px;
    }
    .tutorial_text1 {
        top: 25px;
        left: 13px;
        padding: 62px;
    }
    .tutorial_text2 {
        top: 95px;
        left: 16px;
        padding: 90px;
        padding-right: 45px;
    }
  }
</style>


	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<div id="stuck_container">
				<div class="container">
						<div class="row">
								<div class="grid_12">
									<h1 id="logo">Blue Novelty</h1>
											<div class="" style="margin-left:40%;position: absolute;top: 30px;left:0;">
													<form action="/action_page.php">
													<input class="search_input" type="text" placeholder="Search.." name="search">
													<button type="submit"><i class="fa fa-search"></i></button>
													</form>
											</div>
										<div class="">
												<nav class="" style="float:right;">
														<ul class="sf-menu" <?php if(isset($_SESSION['username'])){ echo 'style="display:none;"';}?>>
																<!--<li><a class="btn btn-primary" (click)="nav('login')">LOGIN</a></li>
																<li><a class="btn btn-primary" (click)="nav('sign-up')">SIGN UP</a></li>
																<li><a (click)="nav('sign-up')">PHOTOGRAPHERS</a></li>
																<li><a  (click)="nav('sign-up')">HOW TO REGISTER</a></li>-->
																<li><a href="./login_page.php">LOGIN</a></li>
																<li><a href="./signup_page.php">SIGN UP</a></li>

														</ul>
														<ul class="sf-menu" <?php if(!isset($_SESSION['username'])){ echo 'style="display:none;"';}?>>
															<li><a href="./logout.php">LOGOUT </a></li>
													</ul>
												</nav>
										</div>
								</div>
						</div>
				</div>
		</div>
  </header>
  <div class="main"><br>
    <div class="signup_info">
        <div <?php if(isset($_GET['invalidLogin'])){echo 'style="display:inline;"';}else { echo 'style="display:none;"';}?>><label class="invalidUser">Invalid User credentails entered.</label></div>
        <div>
					<section>
	  <div class="box">
	    <div class="container">
	      <div id="calendar">
	      </div>
	    </div>
	  </div>
	</section>


            <form method="post" action="./booking.php" id="signup_form">
            <ul style="padding:10px;">
							<center><h1>Book for an Event</h1></center>

                <li class="item"><label class="signin_label" style="padding-right: 250px;">First Name&nbsp;:&nbsp;</label>
                <input class="form-control" type="text" name="name"></li>
                <li class="item"><label class="signin_label" style="padding-right: 211px;">Last Name&nbsp;:&nbsp;</label>
                <input class="form-control" type="text" name="surname"></li>
                <li class="item"><label class="signin_label" style="padding-right: 137px;">Company Name&nbsp;:&nbsp;</label>
                <input class="form-control" type="text" name="company_name"></li>
                <li class="item">
                    <label class="signin_label" style="padding-right: 250px;">Email&nbsp;:&nbsp;</label>
                    <input class="form-control" type="text" name="email"></li>
										<!-- Container class contains the date field -->
												<div class="form-group m-1">
														<label class="font-weight-bold" for="event_type">
															Date of your event
														</label>

														<!-- Input field along with
																calendar icon and -->
														<div class="input-group date">
																<!-- Sets the calendar icon -->
																<span class="input-group-prepend">
																		<span class="input-group-text">
																				<i class="fa fa-calendar"
																						onclick="setDatepicker(this)">
																				</i>
																		</span>
																</span>

																<!-- Accepts the input from calendar -->
																<input class="form-control" type="text"
																		name="event_date" id="event_date" value="">
														</div>
												</div>

										<!-- JavaScript to control the actions
												 of the date picker -->
										<script type="text/javascript">
												function setDatepicker(_this) {

														/* Get the parent class name so we
																can show date picker */
														let className = $(_this).parent()
																.parent().parent().attr('class');

														// Remove space and add '.'
														let removeSpace = className.replace(' ', '.');

														// jQuery class selector
														$("." + removeSpace).datepicker({
																format: "dd/mm/yyyy",

																// Positioning where the calendar is placed
																orientation: "bottom auto",
																// Calendar closes when cursor is
																// clicked outside the calendar
																autoclose: true,
																showOnFocus: "false"
														});
												}
										</script>

                <li class="item"><label class="signin_label" style="padding-right: 165px;">Event Type&nbsp;:&nbsp;</label>
                    <select name="content_type">
											<option></option>
											<option>Advertisement</option>
											<option>Aerial</option>
											<option>Architectural/Real Estate</option>
											<option>Black and White</option>
											<option>Event</option>
											<option>Fashion</option>
											<option>Food</option>
											<option>Landscape</option>
											<option>Lifestyle</option>
											<option>Maternity</option>
											<option>Pet</option>
											<option>Photojournalism</option>
											<option>Portrait</option>
											<option>Product</option>
											<option>Sports</option>
											<option>Studio</option>
											<option>Travel</option>
											<option>Wildlife</option>
											<option>Wedding</option>
                </select></li>

            </ul>
            <input type="submit" class="btn bt__2 sign_btn" value="Submit">
            <input type="clear" class="btn bt__2 sign_btn" value="Clear">
            </form>
        </div>
    </div>
</div>
      <!--==============================Bot_block=================================-->
      <section class="bottom_block">
          <div class="container">
              <div class="row">
                  <div class="grid_5">
                      <div class="bot_title">
                          <span class="fa fa-envelope-o"></span>Subscribe to My Events
                      </div>
                  </div>
                  <div class="grid_7">
                      <form id="newsletter">
                          <div class="row">
                              <div class="" style="width: 370px;">
                                  <div class="rel">
                                      <div class="success">Your subscrsibe request has been sent!</div>
                                      <label class="email">
                                              <input type="email" value="Your Email Address Here" >
                                              <span class="error">*This is not a valid email address.</span>
                                              <span class="clear"></span>
                                          </label>
                                  </div>
                              </div>
                              <div class="grid_3">
                                  <a href="#" class="btn bt__2" data-type="submit">Submit</a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!--==============================footer=================================-->
  <footer>
      <div class="container">
          <div class="row">
              <div class="grid_12">
                  <div class="footer_socials">
                      <a href="#" class="fa fa-twitter"></a>
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-google-plus"></a>
                      <a href="#" class="fa fa-pinterest"></a>
                  </div>
                  <div class="copy">
                      <span class="brand">Blue Novelty</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                      <div class="sub_copy">
                          Developed by <a href="http://www.mitconsulting.co.za" rel="nofollow">mitconsulting.co.za</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
</body>
</html>
<?php
$to = "ntimaneskl@gmail.com, katlego@mitconsulting.co.za";
$subject = "Blue Novelty Booking";

$message = "
<html>
<head>
<title>Booking</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@bluenovelty.co.za>' . "\r\n";
$headers .= 'Cc: ntimaneskl@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

 ?>
