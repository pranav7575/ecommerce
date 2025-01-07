<?php
// Fetch products from the database
include 'db/db_connection.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Our Products</h1>
    <div style="display: flex; flex-wrap: wrap;">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px; width: 200px;">
                <img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width: 100%;">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <p>Price: $<?php echo $row['price']; ?></p>
                <p>Stock: <?php echo $row['stock']; ?></p>
                <p>Category: <?php echo $row['category']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
