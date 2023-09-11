<?php
 $product_description = filter_input(INPUT_POST, 'product _description');
 $list_price = filter_input(INPUT_POST, 'list_price');
 $discount_percent = filter_input(INPUT_POST, 'discount_percent');

 $discount = $list_price * $discount_percent * .01;
 $discount_price = $list_price - $discount;

 $list_price_f = "$".number_format($list_price, 2);
 $discount_percent_f = $discount_percent."%";
 $discount_f = "$".number_format($discount, 2); 
 $discount_price_f = "$".number_format($discount_price, 2);

?>
<!DOCTYPE html>
<html>

<head>
    <title> Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator </h1>
        <form action="display_discount.php" method="post">
            <div id="data">
                <label>Product Description</label>
                <input type="text" name="product_description"><br>

                <label>List Price</label>
                <input type="text" name="list_price"><br>

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"><span>%</span><br>
                <label> Discount Price:</label>
                <input type="text" name="discount_price" id="" value="<?= $discount_price?> ">
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
        </form>
    </main>
</body>
</html>
