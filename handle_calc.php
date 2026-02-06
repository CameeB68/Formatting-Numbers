<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculation Results</title>
</head>
<body>

<h1>Calculation Results</h1>

<?php
// Get values from form
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];

// Perform calculations
$total = $price * $quantity;
$total = $total - $discount;
$tax_amount = $total * $tax;
$final_total = $total + $tax_amount;

// Display results
echo "<p>Price: $$price</p>";
echo "<p>Quantity: $quantity</p>";
echo "<p>Discount: $$discount</p>";
echo "<p>Tax Rate: " . ($tax * 100) . "%</p>";
echo "<p><strong>Final Total: $" . number_format($final_total, 2) . "</strong></p>";
?>

</body>
</html>
