<?php
include_once "_gettextfile.php";
echo pathinfo("../_assets/icons", PATHINFO_BASENAME);
// $directory = '../../_assets/courseimages';

// if (!is_dir($directory)) {
//     exit('Invalid diretory path');
// }

// $files = array();
// foreach (scandir($directory) as $file) {
//     if ($file !== '.' && $file !== '..') {
//         $files[] = $file;
//     }
// }?>

 <? $get_class=new getFile();
		 $image_arr=$get_class->get_image_file();
         echo count($image_arr);
		 echo $image_arr[0];

