<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/admin/partials/header.php";
?>

<h1>Order Details</h1>

<p><strong>Order ID:</strong> <?= $order['id'] ?></p>
<p><strong>User ID:</strong> <?= $order['user_id'] ?></p>
<p><strong>Total Price:</strong> <?= $order['total_price'] ?></p>
<p><strong>Status:</strong> <?= $order['status'] ?></p>
<p><strong>Shipping Address:</strong> <?= $order['shipping_address'] ?></p>
<p><strong>City:</strong> <?= $order['city'] ?></p>
<p><strong>Postal Code:</strong> <?= $order['postal_code'] ?></p>
<p><strong>Country:</strong> <?= $order['country'] ?></p>

<a href="/admin/orders">Back to Orders</a>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/admin/partials/footer.php";
?>
