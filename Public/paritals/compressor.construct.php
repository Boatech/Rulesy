<?php
    ob_start("compress_code");
    function compress_code($code) 
    {
        $search = array(
            '/\>[^\S ]+/s',  
            '/[^\S ]+\</s',  
            '/(\s)+/s'      
        );
    $replace = array('>','<','\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
    }
?>
