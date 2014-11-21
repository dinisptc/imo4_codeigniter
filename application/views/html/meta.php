
<!--<meta name="viewport" content="width=device-width">-->

<?php 

echo "<META name='title' content='".$meta_title."' />"."\n";
//echo "<META name='description' content='".strip_tags($meta_descricao)."' />"."\n";
echo "<META name='description' content='".htmlentities(strip_tags($meta_descricao))."' />"."\n";
?>
