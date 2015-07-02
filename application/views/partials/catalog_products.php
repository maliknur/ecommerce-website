<?php
foreach($all as $product)
{
?>
	<a href="/main/product_info"><img src=<?php echo '"'.$product['filename'].'"'?> width ="110px" height="150px"></a>

<?php
}
?>