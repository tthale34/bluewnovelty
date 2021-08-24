<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/favicon.ico">
		<link rel="shortcut icon" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/favicon.ico">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/stuck.css">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/form.css">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/touchTouch.css">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/camera.css">
		<link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>css/style.css">
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery-migrate-1.1.1.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/script.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/superfish.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.equalheights.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.mobilemenu.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.easing.1.3.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/tmStickUp.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.ui.totop.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/touchTouch.jquery.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/owl.carousel.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/sForm.js"></script>
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>js/jquery.mobile.customized.min.js"></script>
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
        .home_image{
    width: 49%;height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.tutorial_text {
    position: absolute;
    width: 80px;
    color: black;
    font-weight: lighter;
    font-size: xx-large;
}

.tutorial_text1,
.tutorial_text2 {
    border: black solid thin;
    color: white;
    background-color: rgb(46, 40, 40);
    opacity: 0.6;
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
  top: 248px;
  left: 0px;
  padding: 86px;
  width: 571px;
  line-height: 1.1;
}

.tutorial_text2 {
  top: 145px;
  left: 755px;
  padding: 86px;
  width: 571px;
  line-height: 1.1;
}

.tutorial_holder {
    display: inline-block;
}
.tutorial_holder1 {
    display: inline-block;
}
.tutorial_holder2 {
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
.photo_type{

}
.strip{
  background: #fff;
}
.gallery2 {
  margin: 5px;
  border: 1px solid #ccc;
  width: 280px;
  float:right;

}

.gallery2:hover {
  border: 1px solid #777;
}

.gallery2 img {
  width: 280px;
  height: 230px;
  border-radius: 90px;
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
  <!--<input type="text" placeholder="Search.." name="search">-->
  <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  </div>
                      <div class="menu_block">
                          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                              <ul class="sf-menu" *ngIf="!check_login">
                                  <!--<li><a class="btn btn-primary" (click)="nav('login')">LOGIN</a></li>
                                  <li><a class="btn btn-primary" (click)="nav('sign-up')">SIGN UP</a></li>
                                  <li><a (click)="nav('sign-up')">PHOTOGRAPHERS</a></li>
                                  <li><a  (click)="nav('sign-up')">HOW TO REGISTER</a></li>-->
                                  <li><a (click)="nav('login')">LOGIN </a></li>
                                  <li><a  (click)="nav('sign-up')">SIGN UP</a></li>
                                  <li><a (click)="nav('sign-up')">PHOTOGRAPHERS</a></li>
                                  <li><a  (click)="nav('sign-up')">HOW TO REGISTER</a></li>
                              </ul>
                              <ul class="sf-menu" *ngIf="check_login">
                                <li><a (click)="logout()">LOGOUT </a></li>
                            </ul>
                          </nav>
                          <div class="clear"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <div class="main"><br>
    <hr>
      <div class="tutorial_holder">
          <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/home1.jpg" class="home_image">
          <div class="tutorial_text tutorial_text1" responsive>Take your freelance career in content creation to the next level.
          </div>
          <!-- <div style="width: 300px;height: 300px; border: dotted thin white;border-radius: 20px; float: left;">img left</div> -->
          <span>&nbsp;&nbsp;&nbsp;</span>
          <!-- <div style="width: 300px;height: 300px; border: dotted thin white; border-radius: 20px; float: left;">img right</div> -->
          <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/home2.jpg" class="home_image">
          <div class="tutorial_text tutorial_text2" responsive>“Book a Photographer or freelance career in content creating Videographer Now.”.
          </div>
      </div><br><br>

      <!--=====================Content======================-->
<!-- <center> -->
 <div class="gallery_main">
   <div class="gallery2">

  <a target="_blank" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/photographer-selecting-photos-RZPRBXK.jpg">
    <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/photographer-selecting-photos-RZPRBXK.jpg" alt="Cinque Terre">
  </a>
  <div class="desc">
    <a (click)="nav('profile')">View Profile</a> |
  <a (click)="nav('profile')">Book Now</a>

  </div>
</div>

<div class="gallery2">
  <a target="_blank" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/page4_img1.jpg">
    <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/page4_img1.jpg" alt="Forest">
  </a>
  <div class="desc">  <a (click)="nav('profile')">View Profile</a> |
  <a  (click)="nav('profile')">Book Now</a>
</div>
</div>

<div class="gallery2">
  <a target="_blank" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/professional-female.jpg">
    <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/professional-female.jpg" alt="Northern Lights">
  </a>
  <div class="desc">
    <a (click)="nav('profile')">View Profile</a> |
  <a (click)="nav('profile')">Book Now</a>
</div>

</div>

<div class="gallery2">
  <a target="_blank" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/casourel3.jpg">
    <img src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/casourel3.jpg" alt="Mountains">
  </a>
  <div class="desc">
    <a (click)="nav('profile')">View Profile</a> |
  <a (click)="nav('profile')">Book Now</a>
</div>

</div>
</div>
<!-- </center> -->
  <br>
    <hr>
    <br>
      <section class="content">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <h3>DISCOVER STUNNING GALLERY FROM THE WORLDS BEST CREATORS</h3>
                      <div class="gallery">
                          <div class="row">
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/28feb-edits-30.jpg">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="photog_name" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/28feb-edits-11.jpg"  >Tebogo Thale</a>
                                                          <br><div class="photo_type"><strong>Arts, Adventure, Weddings</strong></div>
                                                      </span>
                            <a href="#">Book Now</a>

                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/28feb-edits-30.jpg">
                                                  <div class="gal_caption">Tebogo Thale</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph2.jpg">

                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/28 feb - edits-31.jpg" tabindex="0" style="padding-top: 50px;color: white;">Katlego Ntimane</a>
                                                      </span>
                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph2.jpg">
                                                  <div class="gal_caption">Katlego Ntimane</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph3.jpg">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph3.jpg" tabindex="0" style="padding-top: 50px;color: white;">Kabelo Mokeona</a>
                                                      </span>
                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph3.jpg">
                                                  <div class="gal_caption">Kabelo Mokeona</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph4.jpg">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/28 feb - edits-25.jpg" tabindex="0" style="padding-top: 50px;color: white;">Karabo Adams</a>
                                                      </span>
                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph4.jpg">
                                                  <div class="gal_caption">Karabo Adams</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph5.jpg">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph5.jpg" tabindex="0"
                                                          style="padding-top: 50px;color: white;">Kopano Sibiya</a>
                                                      </span>
                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph5.jpg">
                                                  <div class="gal_caption">Kopano Sibiya</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                              <div class="grid_4">
                                  <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" data-testid="user-avatar" draggable="false"
                                                          src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph6.jpg">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph6.jpg" tabindex="0"
                                                          style="padding-top: 50px;color: white;">Lebogang Mutaung</a>
                                                      </span>
                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>images/ph6.jpg">
                                                  <div class="gal_caption">Lebogang Mutaung</div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </section>
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