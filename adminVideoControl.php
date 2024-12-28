<?php
// Database configuration
$host = "localhost";
$dbname = "nokolflixdb";
$username = "root"; // Adjust based on your credentials
$password = "";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Directory to save uploaded images
    $uploadDir = "uploads/";
    
    // File properties
    $image = $_FILES['image'];
    $imageName = $_POST['title'];
    $imagePath = $uploadDir . basename($image['image']);
    $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));

    // Validate image type
    $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
    if (!in_array($imageFileType, $allowedTypes)) {
        die("Invalid file type. Only JPG, JPEG, PNG & GIF files are allowed.");
    }


    // Move uploaded file to the server
    if (move_uploaded_file($image['tmp_name'], $imagePath)) {
        // Insert image info into the database
        $stmt = $conn->prepare("INSERT INTO free_video (image, title) VALUES (?, ?)");
        $stmt->bind_param("ss", $imagePath, $imageName);
        if ($stmt->execute()) {
            echo "Image uploaded and saved successfully.";
        } else {
            echo "Failed to save image info to database.";
        }
        $stmt->close();
    } else {
        echo "Failed to upload the image.";
    }
}

$conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body>
        <!--Navbar start-->
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NokolFlix Control Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="adminSubscriptionControl.php">Subscription Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="#">Video Control</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Navbar end-->
    <!-- Upload Image-->
    <h2>Admin Panel - Upload Images</h2>
    <form  method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        
        <label for="title">Video Title:</label>
        <input type="text" name="title" id="title" placeholder="Movie Title" required>

        <button type="submit">Upload</button>
    </form>
    <!-- End Upload Image-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>