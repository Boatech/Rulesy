<?php
//redirects user to the main scripts ...
if (!isset($_SERVER['HTTPS'])) {

$url= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
header("Location: public/", TRUE, 301);
exit();
die();
}
?>


