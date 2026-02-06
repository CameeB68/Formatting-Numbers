<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculation Results v2</title>
</head>
<body>

<h1>Formatted Calculation Results</h1>

<?php
// Get values from the form
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];

// Perform calculations
$subtotal = $price * $quantity;
$subtotal_after_discount = $subtotal - $discount;
$tax_amount = $subtotal_after_discount * $tax;
$final_total = $subtotal_after_discount + $tax_amount;

// Display formatted results using number_format()
echo "<p>Price: $" . number_format($price, 2) . "</p>";
echo "<p>Quantity: " . number_format($quantity) . "</p>";
echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
echo "<p>Discount: $" . number_format($discount, 2) . "</p>";
echo "<p>Tax (8.6%): $" . number_format($tax_amount, 2) . "</p>";
echo "<p><strong>Final Total: $" . number_format($final_total, 2) . "</strong></p>";
?>

</body>
</html>
