<?php

include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $pn = mysqli_real_escape_string($conn, $_POST['p_number']);
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM admins where email ='$email' && password = '$pass' ";
    $result = mysqli_query($conn,$select);

    if (mysqli_num_rows($result) > 0 ) {
        $error[] = 'admin already exist';

    } else {
        if ($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO admins(name,email, p_number, password, user_type) VALUES('$name','$email','$pn','$pass','$user_type') "; 
            mysqli_query($conn,$insert);
            header('location: supadmin_page.php');
        }
    }

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
<div class="form-container" >

    <form action="" method="POST">
        <h3>register now</h3>

        <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' .$error. '</span>';
                };
            };
        ?>

        <input type="text" name="name" required placeholder="enter your name" >
        <input type="email" name="email" required placeholder="enter your email" >
        <input type="text" name="p_number" required placeholder="enter your phone number" >
        <input type="password" name="password" required placeholder="enter your password" >
        <input type="password" name="cpassword" required placeholder="confirm your password" >
        <select name="user_type" id="">
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
    
    </form>
</div>




</body>
</html>