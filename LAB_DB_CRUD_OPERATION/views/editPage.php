<?php

$id = $_GET['id'];

if ($id == "") {
	echo 'Invalid ID';
	return;
}

require_once('../model/productModel.php');

$product = getProductById($id);

if (!$product) {
	echo 'Product not found';
	return;
}

?>

<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?= $product['name'] ?>"></td>
	</tr>
	<tr>
		<td>Buying Price</td>
		<td><input type="text" name="buyingPrice" value="<?= $product['buyingPrice'] ?>"></td>

	</tr>
	<tr>
		<td>Selling Price</td>
		<td><input type="text" name="sellingPrice" value="<?= $product['sellingPrice'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="displayable" checked>Displayable</td>
	</tr>
</table>
