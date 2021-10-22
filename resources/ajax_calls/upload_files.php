<?php
$names = "";
for ($i=0; $i < count($_FILES) ; $i++) { 
	$image       = time().$_FILES['file-'.$i]['name'];
	$image_temp_location  = $_FILES['file-'.$i]['tmp_name'];
	move_uploaded_file($image_temp_location ,"../uploads/" . $image );
	$names .= $image.",";
}
$names = substr($names, 0, -1);
echo $names;
?>