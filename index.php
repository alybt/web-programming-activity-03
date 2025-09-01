<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Product Name:</label>
        <br>
        <input type="text" name="product_name" required>
        <br>
        <label for="">Category</label>
        <br>
        <select name="category" id="" required>
            <option value="">-- SELECT CATEGORY --</option>
            <option value="Category A">Category A</option>
            <option value="Category B">Category B</option>
            <option value="Category C">Category C</option>
            <option value="Category D">Category D</option>   
        </select>
        <br>
        <label for="">Price (&#8369;):</label> <br>
            <input type="number" name="price" step= "0.01" required> <br>
        <label for=""></label> <br>
            <input type="number" name="stock_quantity" min="0" required> <br>
        <label for=""></label> <br>
            <input type="date" name="expiration_date"> <br>
        <label for=""> Status: </label> <br>
            <input type="radio" name="status" value="active" checked> Active <br>
            <input type="radio" name="status" value="inactive"> Inactive <br> <br>
            <input type="submit" value="Save Product">

    </form>
</body>
</html>