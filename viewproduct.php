<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
<label>Product Name: <?php echo htmlspecialchars($_POST["product_name"]); ?></label><br>
<label>Category: <?php echo htmlspecialchars($_POST["category"]); ?></label><br>
<label>Price: <?php echo htmlspecialchars(number_format($_POST["price"], 2)); ?></label><br>
<label>Stock Quantity: <?php echo htmlspecialchars($_POST["stock_quantity"]); ?></label><br>
<label>Expiration Date: <?php echo htmlspecialchars(date("M-d-Y", strtotime($_POST["expiration_date"]))); ?></label><br>
<label>Status: <?php echo htmlspecialchars($_POST["status"]); ?></label><br>
<?php endif; ?>


