<?php

$product_name = $category = $price = $stock_quantity = $expiration_date = $status = "";
$product_name_error = $category_error = $price_error = $stock_error = $expiration_error = $status_error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Product name
    $product_name = trim(htmlspecialchars($_POST["product_name"]));
    if (empty($product_name)) {
        $product_name_error = "Product name is required";
    }

    // Category
    $category = trim($_POST["category"]);
    if (empty($category)) {
        $category_error = "Category is required";
    }

    // Price
    $price = trim($_POST["price"]);
    if (empty($price)) {
        $price_error = "Price is required";
    } elseif (!is_numeric($price)) {
        $price_error = "Price must be a number";
    } elseif ($price == 0) {
        $price_error = "Price cannot be zero";
    }

    // Stock Quantity
    $stock_quantity = trim($_POST["stock_quantity"]);
    if (empty($stock_quantity)) {
        $stock_error = "Stock quantity is required";
    } elseif (!is_numeric($stock_quantity)) {
        $stock_error = "Stock must be a number";
    } elseif ($stock_quantity < 0) {
        $stock_error = "Stock cannot be negative";
    }

    // Expiration Date
    $expiration_date = trim($_POST["expiration_date"]);
    if (empty($expiration_date)) {
        $expiration_error = "Expiration date is required";
    } elseif (strtotime($expiration_date) < strtotime(date("Y-m-d"))) {
        $expiration_error = "Expiration date cannot be in the past";
    }

    // Status
    if (empty($_POST["status"])) {
        $status_error = "Status is required";
    } else {
        $status = $_POST["status"];
    }

    // If no errors, redirect to viewproduct.php
    if (empty($product_name_error) && empty($category_error) && empty($price_error) && empty($stock_error) && empty($expiration_error) && empty($status_error)) {
        header("Location: viewproduct.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    The Difference between GET and POST
        GET:
            In get it sends the form data append to the url.
            Data is visible in the browser's address bar.
            It limits the length of the data, usually up to 2000 characters.
            It's better for bookmarking or when data doesn't need to be private.
        
        POST: 
            It sends form data in HTTP request body, it's not visible in the URL.
            More secure, useful for sensitive information like passwords.
            No size limitation for form data.
            It commonly used when updating and adding data in a database.
        
        When you change the forms' method to POST and click the submit button
        the values are sent to the server but do NOT appear in the URL. Instead,
        they're available in PHP through $_POST superglobal.
    -->

    <!-- 
            4.1 It has alert that said you've been hacked
        -->

    <form action="" method="post">
        <label>Product Name:</label><br>
        <input type="text" name="product_name" value="<?php echo $product_name; ?>">
        <p class="error"><?php echo $product_name_error; ?></p>

        <label>Category</label><br>
        <select name="category">
            <option value="">-- SELECT CATEGORY --</option>
            <option value="Category A" <?php if($category=="Category A") echo "selected"; ?>>Category A</option>
            <option value="Category B" <?php if($category=="Category B") echo "selected"; ?>>Category B</option>
            <option value="Category C" <?php if($category=="Category C") echo "selected"; ?>>Category C</option>
            <option value="Category D" <?php if($category=="Category D") echo "selected"; ?>>Category D</option>
        </select>
        <p class="error"><?php echo $category_error; ?></p>

        <label>Price (₱):</label><br>
        <input type="number" name="price" step="0.01" value="<?php echo $price; ?>">
        <p class="error"><?php echo $price_error; ?></p>

        <label>Stock Quantity:</label><br>
        <input type="number" name="stock_quantity" min="0" value="<?php echo $stock_quantity; ?>">
        <p class="error"><?php echo $stock_error; ?></p>

        <label>Expiration Date:</label><br>
        <input type="date" name="expiration_date" value="<?php echo $expiration_date; ?>">
        <p class="error"><?php echo $expiration_error; ?></p>

        <label>Status:</label><br>
        <input type="radio" name="status" value="active" <?php if($status=="active") echo "checked"; ?>> Active <br>
        <input type="radio" name="status" value="inactive" <?php if($status=="inactive") echo "checked"; ?>> Inactive <br>
        <p class="error"><?php echo $status_error; ?></p>

        <br>
        <input type="submit" value="Save Product">
    </form>
</body>
</html>