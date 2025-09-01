<?php
$product_name = $_GET['product_name'] ?? '';
$category = $_GET['category'] ?? '';
$price = $_GET['price'] ?? '';
$stock_quantity = $_GET['stock_quantity'] ?? '';
$expiration_date = $_GET['expiration_date'] ?? '';
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Product Details</title>
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <h2>Product Saved Successfully!</h2>
            <div style="width:100%;">
                <p><strong>Product Name:</strong> <?php echo htmlspecialchars($product_name); ?></p>
                <p><strong>Category:</strong> <?php echo htmlspecialchars($category); ?></p>
                <p><strong>Price:</strong> ₱<?php echo htmlspecialchars($price); ?></p>
                <p><strong>Stock Quantity:</strong> <?php echo htmlspecialchars($stock_quantity); ?></p>
                <p><strong>Expiration Date:</strong> <?php echo htmlspecialchars($expiration_date); ?></p>
                <p><strong>Status:</strong> <?php echo htmlspecialchars($status); ?></p>
            </div>
        </div>
    </div>
</body>
</html>
