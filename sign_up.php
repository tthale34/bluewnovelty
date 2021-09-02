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
    $_SESSION["username"] = $_POST["email"];
    $_SESSION["dob"] = $_POST["dob"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["content_type"] = $_POST["content_type"];
    $_SESSION["which_photography"] = $_POST["which_photography"];
    $_SESSION["which_photography1"] = $_POST["which_photography1"];
    $_SESSION["profile_img"] = $path_filename_ext;
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["user_type"] = $_POST["user_type"];
    //insert new user
    $sql = "INSERT INTO `users`";
    $sql .= "(`name`, `surname`, `company_name`, `email`, `dob`, `gender`, `content_type`, `which_photography`, `which_photography1`, `profile_img`, `password`, `user_type`)";
    $sql .= "VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["company_name"]."', '";
    $sql .= $_POST["email"]."', '".$_POST["dob"]."', '".$_POST["gender"]."', '".$_POST["content_type"]."', '";
    $sql .= $_POST["which_photography"]."', '".$_POST["which_photography1"]."', '".$path_filename_ext."', '".$_POST["password"]."', '".$_POST["user_type"]."');commit;";

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


?>