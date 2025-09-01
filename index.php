<script>
    $product_name="";
    $product_name_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // validation for product name
        $product_name = trim(htmlspecialchars($_POST["product_name"]));
        if(empty($product_name)){
            $product_name_error="Product name is required";
        }
    }
</script>

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

    <form action="" method="post">
        <label for="">Product Name:</label>
        <br>
        <input type="text" name="product_name"> 
        <p style "color:red; margin: 0; <?php echo $product_name_error; ?>"></p>
        <!-- 
            4.1 It has alert that said you've been hacked
        -->
        <br>
        <label for="">Category</label>
        <br>
        <select name="category" id="">
            <option value="">-- SELECT CATEGORY --</option>
            <option value="Category A">Category A</option>
            <option value="Category B">Category B</option>
            <option value="Category C">Category C</option>
            <option value="Category D">Category D</option>   
        </select>
        <br>
        <label for="">Price (&#8369;):</label> <br>
            <input type="number" name="price" step= "0.01"> <br>
        <label for="">Stock Quantity</label> <br>
            <input type="number" name="stock_quantity" min="0"> <br>
        <label for=""></label> <br>
            <input type="date" name="expiration_date"> <br>
        <label for=""> Status: </label> <br>
            <input type="radio" name="status" value="active" checked> Active <br>
            <input type="radio" name="status" value="inactive"> Inactive <br> <br>
            <input type="submit" value="Save Product">

    </form>
</body>
</html>