<?php
//redirects user to the main scripts ...
//This script would be removed before launch and the public folder would be the website public folder

/**checking if the connection is from a 'https' secured connection, however it does not work, it only redirects... 
this is due to the fact it is hosted on localhost at the moment **/
if (!isset($_SERVER['HTTPS'])) {
//storing the local page url
$url= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//redirecting users to the public folder
header("Location: public/", TRUE, 301);
exit();
die("Please try refreshing this page...");
}
?>


