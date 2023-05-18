<?php
class Load {
    //Defaults to constructor as no specific constructor is defined
    function view($file_name, $data = null)
    {
        //check for data
        if(is_array($data)){
            extract($data);
        }
        //concatnate the view file with .php extension to include the view as a php file
        include $file_name . '.php';
    }
}
?>