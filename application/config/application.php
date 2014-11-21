<?php

$path_for_all='/home/imocom/public_html/imoFiles/';

$path_for_view='imoFiles/';

//ini_set('upload_max_filesize', 1000000);
 ini_set('upload_max_filesize','20M');  

$config['images']['upload_path']	= $path_for_all;
$config['images']['path_for_view']	= $path_for_view;
$config['images']['allowed_types'] = 'jpg|png|gif|jpeg';
$config['images']['max_size'] = '0';
$config['images']['maintain_ratio']= true;
$config['images']['width'] = 400;
$config['images']['height'] = 400;
$config['images']['new_image']	= $path_for_all;
$config['images']['thumb_maintain_ratio']= true;
$config['images']['thumb_width'] = 200;
$config['images']['thumb_height'] = 200;
$config['images']['encrypt_name']     = true;

?>
