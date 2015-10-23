<?php
include 'core/imgFunction.php';
$save_image = new Img2Db();
$id = $save_image->save($_FILES);
?>