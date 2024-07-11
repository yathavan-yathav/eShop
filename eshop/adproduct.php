
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['image'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $img = $_FILES['image'];

        // Check if the file upload was successful
        if ($img['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'guns/'; // Directory where you want to store uploaded images
            $uploadFile = $uploadDir . basename($img['name']);

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($img['tmp_name'], $uploadFile)) {
                $sql = "INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)";
                $ps = $conn->prepare($sql);
                $ps->bind_param("ssss", $name, $description, $price, $uploadFile); // Assuming price is a decimal (d) and image is stored as a string (s)

                if ($ps->execute()) {
                    header("Location: admin_page.php");
                    exit;
                } else {
                    echo "Error: " . $ps->error;
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "File upload failed with error code: " . $img['error'];
        }

        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                <li><a class="active" href="#" >Add product</a></li>
                <li><a href="admin_profile.php">Profile</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </div>




<div class="form-container" >

    <form action="adproduct.php" method="post">
        <h3>Add Product</h3>
        
        <input type="text" name="name" required placeholder="enter product name" >
        <input type="text" name="price" required placeholder="enter product price" >
        <input type="text" name="description" required placeholder="enter details" >
        <input type="file" name="image" required placeholder="upload image here" >
        

        <input type="submit" name="submit" value="Add" class="form-btn">
        
    </form>
</div>


    <script src="addProduct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>