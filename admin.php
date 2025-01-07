<?php
// Database connection
include 'db/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $stock = $_POST['stock'];

    // Check if the uploads directory exists, if not create it
    $upload_dir = __DIR__ . "/uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); // Create uploads directory with full permissions
    }

    // Set the target path for the uploaded file
    $target_path = $upload_dir . basename($image);

    // Upload image
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO products (name, description, price, category, image, stock) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdssi", $name, $description, $price, $category, $image, $stock);
        $stmt->execute();
        echo "Product added successfully!";
    } else {
        echo "Error uploading image.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" required></textarea><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Category:</label><br>
        <input type="text" name="category" required><br><br>

        <label>Image:</label><br>
        <input type="file" name="image" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" required><br><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
