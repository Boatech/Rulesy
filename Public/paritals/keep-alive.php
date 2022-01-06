<?php
  /* setting Apache */
  apache_setenv("KeepAlive", "On");
  apache_setenv("KeepAliveTimeout", "100");
  apache_setenv("MaxKeepAliveRequests", "500");
  /* setting headers */
  header("Connection: keep-alive");
  header("Keep-Alive: timeout=100, max=500");

?>
