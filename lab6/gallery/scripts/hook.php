<?php
//path to the tumbnail images
$directory = '../assets/images';
//The following image extensions are allowed
$allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
//array used to separate the extention from the file
$file_parts = array();
//response message
$response = "";
//This code opens the directory to parse the images
$dir_handle = opendir($directory);
//iterate through all the files
while($file = readdir($dir_handle)){
    //Check for hidden files
    if (substr($file, 0, 1) != '.'){
         //split each file name to extract the file extension
        $file_components = explode('.', $file);
        //Grab the extension token
        $extension = strtolower(array_pop($file_components));
        //check the validity of the image. 
        if (in_array($extension, $allowed_extensions)){
            //build a response using th ~ symbol as string separator
            $response .= $directory.'/'.$file.'~';

        }
    }
}
closedir($dir_handle);
//return response while removing the last ~ separator
echo substr_replace($response, "", -1);
?>