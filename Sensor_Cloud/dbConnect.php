<?php
   define('DB_SERVER', "server address");
   define('DB_USERNAME', "user name");
   define('DB_PASSWORD', "password");
   define('DB_DATABASE', "database name");
  
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>