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
    header('Location: http://'.$_SERVER['SERVER_NAME'].'/api');
}else{
    echo 'in else.';
}

//email send
$to = "ntimaneskl@gmail.com, katlego@mitconsulting.co.za,tthale34@gmail.com";
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

echo "Thank you for Signing up! We will contact you shortly!";

?>
