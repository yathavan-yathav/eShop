<?php
@include 'config.php';

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
    <title>super admin page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navigator">
        <nav> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <label class="logo">ABC Blasters</label>
            <ul>
                <li><a class="active"href="#">Home</a></li>
                <li><a href="s_adproduct.php">Add product</a></li>
                <li><a href="admin_register_form.php">Register Admin</a></li>
                <li><a href="sup_profile.php">Profile</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </div>

    
    <?php
include 'config.php';
$sql = "SELECT * FROM products;";
$result = $conn->query($sql);
?>

    <div class="container-fluid">
        <div class="image-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="image-card">
                        <img class="card-img" src="' . $row['image'] . '" alt="No Image">
                        <div class="card-body">
                            <h4 class="card-title">' . $row['name'] . '</h4>
                            <h5 class="price">Price: ' . $row['price'] . '</h5>
                            <p>';
                    
                    $descriptionString = $row['description'];
                    $descriptionArray = explode(',', $descriptionString);
                    foreach ($descriptionArray as $des) {
                        echo $des . '<br>';
                    }

                    echo '</p></div>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
