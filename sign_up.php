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
	padding-top: 10px;
	font-weight:bold;
	color: #fff;
	top:-14px;
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
	font-size: 18px !important

}
.item
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border-radius: 15px !important;
  box-sizing: border-box;
	font-size: 18px !important
}
.sign_btn{
	width: 30%;
    cursor: pointer;
		background-color:#3770DE;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
	font-size: 30px !important



}
.search_input{
	border-radius: 15px;
	width: 350px;
}

.sign_btn:hover{
    color: #1a3fe2;
}
h1{
	font-size: 2em;
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
									<h1 id="logo">Blue Novelty</h1>


		</div>

  </header>
	<hr>

<?php

error_reporting(0);
echo "<center>THANK YOU FOR REQUESTING TO JOIN OUR BLUE NOVELTY PROJECT MARKETPLACE.
<br>WE HAVE SENT YOU A CONFIRMATION EMAIL TO: "  . $_POST["email"] .
"<br>ONE OF OUR AGENTS WILL BEGIN THE VETTING PROCESS ONCE CONFIRMED ON YOUR END.
<br>THE PROCESS WILL TAKE BETWEEN 24 -72 HOURS TO COMPLETE AND TO APPROVE.</center>";


$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$url = str_replace("signup_page.php","",$url);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$smtpUsername = 'ntimaneskl@gmail.com';
$smtpPassword = 'Kat12#45^';
$emailFromName = 'Blue Novelty';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress('katlego@mitconsulting.co.za', 'Katlego');
$mail->addAddress('info@bluenovelty.co.za', 'Sanny');
$mail->Subject = 'New User Registration';
$mail->msgHTML("Dear Blue Novelty Admin
A potential independent contractor has submitted a request to join our Blue Novelty platform.
Please find below his information so that we can vet them according : " .

"<br>Name:". $_POST["name"].
"<br>Last name:". $_POST["surname"] .
"<br>Company:". $_POST["company_name"] .
"<br>Email:". $_POST["email"] .
"<br>Date of Birth:". $_POST["dob"] .
"<br>Gender:". $_POST["gender"] .
"<br>Content Type:". $_POST["content_type"] .
"<br>Type of Photography:". $_POST["which_photography"] .
"<br>Type of Videography:". $_POST["which_photography1"] .
"<br>City:". $_POST["city"]);

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Email sent!";
}


//send to users
/*$mail->addAddress($_POST['email'], $_POST['name']);
$mail->Subject = 'Welcome to Blue Novelty';
$mail->msgHTML("Hi " . $_POST['name'] . "THANK YOU FOR YOUR CONFIRMATION.
THE VETTING PROCESS HAS COMMENCED. WE WILL SEND YOU A CODE ONCE THE PROCESS IS COMPLETE.

");*/
?>

  <div class="main"><br>
  <!--  <div class="signup_info">
        <div <?php if(isset($_GET['invalidLogin'])){echo 'style="display:inline;"';}else { echo 'style="display:none;"';}?>><label class="invalidUser">Invalid User credentails entered.</label></div>
        <div>-->


            </ul>

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
session_start();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // $mainClass = new main();
    $connection = new mysqli('localhost', 'root', '', 'bluenovelty');
    $results = array(
        "Status" => false,
        "Message" => "No Action Taken"
    );
    if ($connection->error) {
        header('Location: http://'.$_SERVER['SERVER_NAME'].'/login_page.php?invalidLogin=true');
    }
    $myfile = fopen("./postResults.txt", "a");
    //get uer id
    $sql = "SELECT MAX(ind) as ind FROM users;";
    $query_results = $connection->query($sql);
    $userId;
    while($row = $query_results->fetch_assoc()){
        $userId = $row["ind"]+1;
    }
    //log to file
    fwrite($myfile, print_r($_FILES,true));
    fwrite($myfile, print_r("get id :",true));
    fwrite($myfile, print_r($userId,true));
    //save file
    $target_dir = "./uploads/".$userId."/";
    mkdir($target_dir);
    $file = $_FILES['profile_img']['name'];
    $temp_name = $_FILES['profile_img']['tmp_name'];
    $path_filename_ext = $target_dir . $file;
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "File exists:";
        exit;
    } else {
        if(move_uploaded_file($temp_name, $path_filename_ext)){

        }else {
            echo "Couldn't move file:";
            exit;
        }
    }
    //lo save image
    fwrite($myfile, print_r("profile imge saved to :",true));
    fwrite($myfile, print_r($path_filename_ext,true));
    //update profile image url
    // $sql = "UPDATE `users` SET `profile_img` WHERE `email`-".$_SESSION["username"].";commit;";
    // $connection->query($sql);
    //save user data
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["company_name"] = $_POST["company_name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["username"] = $_POST["email"];
    $_SESSION["dob"] = $_POST["dob"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["content_type"] = $_POST["content_type"];
    $_SESSION["which_photography"] = $_POST["which_photography"];
    $_SESSION["which_photography1"] = $_POST["which_photography1"];
    $_SESSION["profile_img"] = $path_filename_ext;
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["user_type"] = $_POST["user_type"];
    $_SESSION["city"] = $_POST["city"];

    //insert new user
    $sql = "INSERT INTO `users`";
    $sql .= "(`name`, `surname`, `company_name`, `email`, `dob`, `gender`, `content_type`, `which_photography`, `which_photography1`, `profile_img`, `password`, `user_type`)";
    $sql .= "VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["company_name"]."', '";
    $sql .= $_POST["email"]."', '".$_POST["dob"]."', '".$_POST["gender"]."', '".$_POST["content_type"]."', '";
    $sql .= $_POST["which_photography"]."', '".$_POST["which_photography1"]."', '".$path_filename_ext."', '".$_POST["password"]."', '".$_POST["user_type"]."')";

    if ($connection->query($sql) === TRUE) {
        fwrite($myfile, print_r("New record created successfully",true));
    } else {
        fwrite($myfile, print_r("\nError: " . $sql . "\n" . $connection->error,true));
    }
    $connection->close();
    fwrite($myfile, print_r("insert new user :",true));
    fwrite($myfile, print_r($sql,true));
  //  header('Location: http://'.$_SERVER['SERVER_NAME'].'/api');
//  echo "Success";
}else{
    echo 'in else.';
}

//email send
/*$to = "ntimaneskl@gmail.com, katlego@mitconsulting.co.za,tthale34@gmail.com";
$subject = "Blue Novelty New Sign Up";

$message = "
<html>
<head>
<title>New Sign up</title>
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
*/

//use PHPMailer\PHPMailer;
//use PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
//require 'C:\xampp\composer\vendor\autoload.php';

/* If you installed PHPMailer without Composer do this instead: */



?>
