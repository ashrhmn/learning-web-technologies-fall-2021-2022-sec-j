<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../model/productModel.php');

$products = getProductsTable();

print_r($products);

if (count($products) == 0) {
	echo 'No Products to show';
	return;
}

?>

<table>
	<tr>
		<th>Name</th>
		<th>Profit</th>
		<th>Action</th>
	</tr>
	<?php
	for ($i = 0; $i < count($products); ++$i) {
		if ($products[$i]['displayable'] == 'Yes') {

	?>
			<tr>
				<td><?= $products[$i]['name'] ?></td>
				<td><?= $products[$i]['profit'] ?></td>
				<td>
					<a href="editPage.php?id=<?= $products[$i]['id'] ?>">Edit</a>
					<a href="../controller/deleteHandler.php?id=<?= $products[$i]['id'] ?>">Delete</a>
				</td>
			</tr>
	<?php
		}
	}
	?>
</table>
