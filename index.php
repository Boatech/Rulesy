<?php
//redirects user to the main scripts ...

//checking if the connection is from a 'https' secured connection...
if (!isset($_SERVER['HTTPS'])) {
//storing the local page url
$url= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//redirecting users to the public folder
header("Location: public/", TRUE, 301);
exit();
die("Please try refreshing this page...");
}
?>


