<?php
// Get form data from query string
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
    <title>Redirect Page</title>
    <!-- Auto redirect after 3 seconds -->
    <meta http-equiv="refresh" content="3;url=viewproduct.php?<?php echo http_build_query($_GET); ?>">
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <h3>Saving in the database...</h3>
            <h4>Redirecting to another page in 3 seconds...</h4>
        </div>
    </div>
</body>
</html>
