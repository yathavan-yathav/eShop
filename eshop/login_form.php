<?php
include 'config.php';

$error="";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = $_POST['user_type'];

    $select = "";
    $redirect = "";

    if ($user_type == 'user') {
        $select = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
        $redirect = 'user_page.php';
    } elseif ($user_type == 'admin') {
        $select = "SELECT * FROM admins WHERE email = '$email' AND password = '$pass'";
        $redirect = 'admin_page.php';
    } elseif ($user_type == 'super_admin') {
        $select = "SELECT * FROM supadmin WHERE email = '$email' AND password = '$pass'";
        $redirect = 'supadmin_page.php';
    } else {
        $error= 'Incorrect email or password!';
        
    }
    
    if (!empty($select)) {
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);

        if ($row) {
            session_start();
            $_SESSION['id'] = $row['id'];
            header("location: $redirect");
            exit;
        } else {
            $error= 'Incorrect email or password!';
           
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
<div class="form-container" >

    <form action="" method="post">
        <h3>login now</h3>
        <?php echo $error;
        ?>
        <input type="email" name="email" required placeholder="enter your email" >
        <input type="password" name="password" required placeholder="enter your password" >
        <select name="user_type" id="">
            <option value="user">user</option>
            <option value="admin">admin</option>
            <option value="super_admin">super admin</option>
        </select>

        <input type="submit" name="submit" value="login" class="form-btn">
        <p>Don't have an account? <a href="register_form.php">register now</a> </p>



    </form>
</div>




</body>
</html>