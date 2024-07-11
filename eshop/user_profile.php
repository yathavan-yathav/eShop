<?php

include 'config.php';

session_start();
$id=$_SESSION['id'] ;
$profile_query="SELECT * FROM users where id=$id;";
$result= mysqli_query($conn, $profile_query);
$user = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_Profile</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class=" navigator">
        <nav> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <label class="logo">ABC Blasters</label>
            <ul>
                <li><a href="user_page.php">Home</a></li>
                <li><a class="active" href="#">Profile</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="profile">
        <div>
            <i class="fa-regular fa-user fa-2xl"></i>
            <h2><?php echo $user['name']; ?></h2>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Phone Number: <?php echo $user['p_number']; ?></p>
        </div>

            




    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

