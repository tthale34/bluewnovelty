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
    padding-top: 18px;
    padding-bottom: 14px;
    font-weight: bold;
    color: #fff;
    position: absolute;
    top: -14px;
    margin-left: 40%;
    z-index: 12;
    font-size: 52px;
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
#demo{
    position: absolute;
    top:134px;
    margin-left: 38%;
    z-index:11;
    font-size:58px;
    font-weight:700;
    color:#fff;
    font-family: Helvetica;
}
#Sign_up{
    position: absolute;
    top:450px;
    left: 14%;
    font-size:60px;
    z-index:10;
    color:#fff;
}
#Sign_up button{
    font-size:40px;
    min-height: 40px;
    border-radius:40px;
    background-color:#3770DE;
    color:#fff;
    padding:30px;
}
#Sign_up button:hover{
    color:#000;
    opacity: 0.7;
}
.logo_temp{
  height: 40px;
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
  @media only screen and (width: 768px){
    #Sign_up{
        left:200px;
    }
  }
  @media only screen and (width: 330px){
    #demo{
        top:60px;
    }
  }
  @media only screen and (width: 320px){
    #demo{
        top:90px;
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



  </header>

  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  p {
    text-align: center;
    font-size: 60px;
    margin-top: 0px;
  }
  </style>


  </head>
  <body>
    <div class="logo_temp">
    <center><h1 id="logo">Blue Novelty</h1></center>
  </div>
  <p id="demo"></p>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Sep 30, 2021 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
  <center><a href="./signup_page.php" id="Sign_up">
  Are you a Photographer/Videographer?<br><button>Sign Up</button></a></center>
  <br><br>
  <?php include('./slider_img_count.php');?>
  </body>
  </html>
