<label for="">Product Name: <?php echo $_POST["product_name"]; ?> </label> <br>
<label for="">Category: <?php echo $_POST["category"]; ?> </label> <br>
<label for="">Price: <?php echo number_format($_POST["price"]); ?> </label> <br>
<label for="">Stock Quantity: <?php echo $_POST["stock_quantity"]; ?> </label> <br>
<label for="">Expiration Date: <?php echo date("M-d-Y", strtotime($_POST["expiration_date"])); ?> </label> <br>
<label for="">Status: <?php echo $_POST["status"]; ?> </label> <br>



