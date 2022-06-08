<?php
require_once 'VendingMachine.php';
require_once 'Product.php'; ?>

<html>

<head> </head>

<body>
  <div id="display"></div>
  <p><input id="product" type="text" name="product" /></p>
  <p><input id="money" type="text" name="money" /></p>
  <p>
    <button type="button" onclick="postdata()">Buy</button>
  </p>
</body>
<?php
$item = new VendingMachine('');

if ($item == $item) {
  $item->sellItem('');
}

?>

</html>