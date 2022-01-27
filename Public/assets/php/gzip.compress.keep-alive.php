<?php 
/**
 *  *PHP Scripts({0.1(1)}) ~ By Rulsey Dev Team ~ V-invalid(0)
 *Copyright 2021-2029 Rulsey, Inc.(importation from Rulsey Originals PHP script)
 * License - https://dev.rusley.com/rulsey_dev/builds/current_version
 * for www.rulsey.com | beta.rusley.com
 * generated dynamically based on request from melody {{stream.Line(interval)}}
**/
    //for not allowing the website to be inside an iframe or embedded in another website for security purpose
    header("Content-Security-Policy: frame-ancestors 'none'");
   
    //for gzip enabling on phaxad
    if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
    //for compression and removing comments from codes
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

  #setting apache to enable KeepAlive and it's duration(do not change duration)
  apache_setenv("KeepAlive", "On");
  apache_setenv("KeepAliveTimeout", "100");
  apache_setenv("MaxKeepAliveRequests", "500");

  #setting the header in PHP to do same as Apache has done.
  header("Connection: keep-alive");
  header("Keep-Alive: timeout=100, max=500");

?>
