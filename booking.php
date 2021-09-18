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
    //save user data
    $signUpdata = array();
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["company_name"] = $_POST["company_name"];
    $_SESSION["email"] = $_POST["email"];

    $_SESSION["content_type"] = $_POST["content_type"];

    //insert new user
    $sql = "INSERT INTO `bookings`";
    $sql .= "(`name`, `last_name`, `company_name`, `email_address`, `event_date`, `profile_img`)";
    $sql .= "VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["company_name"]."', '";
    $sql .= $_POST["content_type"]."');commit;";

    $connection->query($sql);
    //get uer id
    $sql = "SELECT `ind` FROM users WHERE `email`-".$_SESSION["username"].";";
    $query_results = $connection->query($sql);
    $userId;
    while($row = $query_results->fetch_assoc()){
        $userId = $row["ind"];
    }
    //save file
    $target_dir = "./uploads/".$userId."/";
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
    //update profile image url
    $sql = "UPDATE `users` SET `profile_img` WHERE `email`-".$_SESSION["username"].";commit;";
    $connection->query($sql);
    header('Location: http://'.$_SERVER['SERVER_NAME'].'/api');
}else{
    echo 'in else.';
}

//email
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
