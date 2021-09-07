<?php
session_start();

?>

<!DOCTYPE html>
<?php

$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = str_replace("login_page.php","",$url);

?>
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
		<link rel="stylesheet" href="./css/grid.css">
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
				.home_image{
						width: 100%;
						height: 100%;
						background-position: center;
						background-repeat: no-repeat;
						background-size: cover;
				}
				.tutorial_text {
						position: absolute;
						width: 80px;
						color: black;
						font-weight: 700;
						font-size: 61px;
						font-family: Helvetica;
				}

				.tutorial_text1,
				.tutorial_text2 {
						color: white;
						opacity: 100%;
						cursor: pointer;
				}

				.tutorial_text1:hover,
				.tutorial_text2:hover {
						color: #1a3fe2;
						background-color: white;
						opacity: 0.6;
						cursor: pointer;
				}

				.tutorial_text1 {
					top: 75px;
						left: 873px;
						padding: 86px;
						width: 571px;
						line-height: 1.6;
				}

				.tutorial_text2 {
    top: 1025px;
    padding: 45px;
    width: 571px;
    line-height: 1.6;
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
                        <div class="" style="margin-left:40%;margin-top:10px;">
                            <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
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

			<div class="topnav">
  
</div>
  </header>
  <div class="main"><br>
    
		
<br>
      <!--=====================Content======================-->
<!-- <center> -->
<div class="gallery_main">
	<div class="gallery2">
        <a target="_blank" href="./images/ad1.jpg">
            <img src="./images/photographer-selecting-photos-RZPRBXK.jpg" alt="Cinque Terre">
        </a>
        <!-- <div style="display:inline-block; top:20px">
            <a (click)="nav('profile')">View Profile</a> |
            <a (click)="nav('profile')">Book Now</a>
        </div> -->
            <a style="cursor:pointer;">Weddings Photography</a>
    </div>

    <div class="gallery2">
        <a target="_blank" href="./images/ad2.jpg">
            <img src="./images/page4_img1.jpg" alt="Forest">
        </a>
        <!-- <div class="desc">
            <a (click)="nav('profile')">View Profile</a> |
            <a  (click)="nav('profile')">Book Now</a>
        </div> -->
        <a style="cursor:pointer;">Portriat Photography</a>
    </div>

    <div class="gallery2">
        <a target="_blank" href="./images/ad3.jpg">
            <img src="./images/professional-female.jpg" alt="Northern Lights">
        </a>
        <!-- <div class="desc">
            <a (click)="nav('profile')">View Profile</a> |
            <a (click)="nav('profile')">Book Now</a>
        </div> -->
        <a style="cursor:pointer;">Event Photography</a>
    </div>

    <div class="gallery2">
        <a target="_blank" href="./images/ad4.jpg">
            <img src="./images/casourel3.jpg" alt="Mountains">
        </a>
        <!-- <div class="desc">
            <a (click)="nav('profile')">View Profile</a> |
            <a (click)="nav('profile')">Book Now</a>
        </div> -->
        <a style="cursor:pointer;">Fashion Photography</a>
    </div>
</div>
<!-- </center> -->
  <br>
    <br>
		<h2>DISCOVER STUNNING GALLERY FROM THE WORLDS BEST CREATORS</h2>

      <section class="content">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <div class="gallery">
                          <div class="row">
                              <div class="grid_4">
                                  <?php
                                  $connection = new mysqli('localhost', 'root', '', 'bluenovelty');
                                  $results = array(
                                      "Status" => false,
                                      "Message" => "No Action Taken"
                                  );
                                  if ($connection->error) {
                                      header('Location: https://'.$_SERVER['SERVER_NAME'].'/errors.php?invalidLogin=true?&error='.$connection->error);
                                  }
                                  $sql = "SELECT * FROM `users` WHERE email in ('Chevalcheezy@gmail.com','kelvinkelvinvanwyk@gmail.com');";
                                $query_results = $connection->query($sql);
                                if($query_results->num_rows === 0){
                                    header('Location: http://'.$_SERVER['SERVER_NAME'].'/error.php?invalidLogin=true');
                                }else{
                                    //save user data
                                    $signUpdata = array();
                                    
                                    while($row = $query_results->fetch_assoc()):
                                        file_put_contents("./postResults.txt",print_r($row,true));

                                        $_SESSION["name"] = $row["name"];
                                        $_SESSION["ind"] = $row["ind"];
                                        $_SESSION["surname"] = $row["surname"];
                                        $_SESSION["company_name"] = $row["company_name"];
                                        $_SESSION["email"] = $row["email"];
                                        $_SESSION["dob"] = $row["dob"];
                                        $_SESSION["gender"] = $row["gender"];
                                        $_SESSION["content_type"] = $row["content_type"];
                                        $_SESSION["which_photography"] = $row["which_photography"];
                                        $_SESSION["which_photography1"] = $row["which_photography1"];
                                        $_SESSION["profile_img"] = $row["profile_img"];
                                        $_SESSION["password"] = $row["password"];
                                        $_SESSION["user_type"] = $row["user_type"];
                                        ?>
                                        <article class="" role="presentation" tabindex="-1">
                                      <header class="">
                                          <div class="">
                                              <div class="" aria-disabled="false" role="button" tabindex="0">
                                                  <span class="_2dbep " role="link" style="width: 52px; height: 52px;">
                                                          <img alt="profile image" class="" style="padding-top: 10px; padding-left: 10px; width: 52px; height: 52px; border-radius: 30px;" 
                                                          data-testid="user-avatar" draggable="false" src="<?php echo $_SESSION["profile_img"];?>">
                                                      </span>&nbsp;
                                                  <span class="">
                                                          <a class="photog_name" href="./profile_page.php" ><?php echo $_SESSION["name"].' '.$_SESSION["surname"]; ?></a>
                                                          <br><div class="photo_type"><strong><?php echo $_SESSION["content_type"]; ?></strong></div>
                                                      </span>
                                            <a href="#">Book Now</a>

                                              </div>
                                          </div>
                                      </header>
                                      <hr>
                                      <div class="">
                                          <div class="gal_item" role="button" tabindex="-1">
                                              <div class="" style="width: 100%;">
                                                  <a href="./profile_page.php"><img alt="Photographers Photo" class="" style="object-fit: cover;width: 100%;" src="<?php echo './'.$_SESSION["profile_img"];?>"></a>
                                                  <div class="gal_caption"><?php echo $_SESSION["name"].' '.$_SESSION["surname"]; ?></div>
                                                  <span class="gal_magnify"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </article>
                                    <?php endwhile;
                                    
                                }
                                  ?>
                                  
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
