<?php
include 'config.php';

session_start();

if (!isset($_SESSION['id'])) {
    header('location: login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class=" navigator">
        <nav> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <label class="logo">ABC Blasters</label>
            <ul>
                <li><a class="active"href="#">Home</a></li>
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </div>

       
    

    
    <?php
    include 'config.php';
        $sql = "SELECT * FROM products;";
        $result = $conn->query($sql);
        echo '<div class="container-fluid">
                <div class="row">';
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo '<div class="col col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 card">
                <img class="card-img" src="'.$row['image'].'" alt="No Image" width="100%" >
                <div class="card-body"><h4 class="card-title">' . $row['name'] . '</h4><h5>Price:' . $row['price'] . '</h5><p>';
                $descriptionString = $row['description'];
                $descriptionArray = explode(',', $descriptionString);
                foreach($descriptionArray  as $des){
                    echo $des.'<br>';
                }
                echo '</p></div>
                </div>';
            }
            echo '</div></div>';
        }
    ?>
   
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>