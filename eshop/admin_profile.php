<?php

include 'config.php';

session_start();
$id=$_SESSION['id'] ;
$profile_query="SELECT * FROM admins where id=$id;";
$result= mysqli_query($conn, $profile_query);
$admin = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_Profile</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=" navigator">
        <nav> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <label class="logo">ABC Blasters</label>
            <ul>
                <li><a href="admin_page.php">Home</a></li>
                <li><a href="product.php" class="btn">Add product</a></li>
                <li><a class="active"href="#">Profile</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="profile">


            <div class= "profile-image" >
            <i class="fa-regular fa-user fa-2xl"></i>
            </div>
            
            <h2><?php echo $admin['name']; ?></h2>
            <p>Email: <?php echo $admin['email']; ?></p>
            <p>Phone Number: <?php echo $admin['p_number']; ?></p>

    </div>
    



</body>
</html>