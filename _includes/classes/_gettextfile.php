<?php

class getFile
{
    public function getfile()
    {
        $myfile=$_SERVER['DOCUMENT_ROOT']."/micireds/_includes/textfiles/coursename.txt";

        $contents= file_get_contents($myfile);
        $ar=explode('|', $contents);
        return $ar;
    }

    public function get_image_file(){
        $directory = '../../_assets/courseimages';

        // if (!is_dir($directory)) {
        //     exit('Invalid diretory path');
        // }
        
        $files = array();
        foreach (scandir($directory) as $file) {
            if ($file !== '.' && $file !== '..') {
                $files[] = $file;
            }
        }
        return $files;
        }
}