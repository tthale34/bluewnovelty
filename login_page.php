<?php 
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = str_replace("login_page.php","",$url);
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
		});
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
.photog_name{
  padding-top: 50px;
  color: white;
}
.strip{
  background: #fff; 
}
.signin_label{
    font-family: 'Bahnschrift', Courier, monospace;
    font-weight: bolder;
    font-size: 180%;
    
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
.sign_btn{
    min-width: 120px;
    cursor: pointer;
}
.sign_btn:hover{
    color: #1a3fe2;
}
.invalidUser{
    color:red;
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
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
            git remote add origin https://github.com/tthale34/bluewnovelty.git
            git push -u origin main
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div id="stuck_container">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                    <h1 id="logo" (click)="nav('')">Blue Novelty</h1>
                      <div class="search">
                      <form class="example" action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </div>
  
                      <div class="menu_block">
                          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu" <?php if(isset($_SESSION['username'])){ echo 'style="display:none;"';}?>>
                                  <li><a href="./login_page.php">LOGIN</a></li>
                                  <li><a href="./signup_page.php">SIGN UP</a></li>
                              </ul>
                              <ul class="sf-menu" <?php if(!isset($_SESSION['username'])){ echo 'style="display:none;"';}?>>
                                <li><a (click)="logout()">LOGOUT </a></li>
                          </nav>
                          <div class="clear"></div>
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
            <form method="post" action="./login.php">
            <ul style="padding:10px;">
                <li class="item"><label class="signin_label" style="padding-right: 250px;">Username&nbsp;:&nbsp;</label>
                    <input class="form-control" type="text" name="username"></li>
                <li class="item"><label class="signin_label" style="padding-right: 250px;">Password&nbsp;:&nbsp;</label>
                    <input class="form-control" type="password" name="password"></li>                
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