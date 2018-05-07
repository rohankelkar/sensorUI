<?php
   define('DB_SERVER', "server address");
   define('DB_USERNAME', "username");
   define('DB_PASSWORD', "password");
   define('DB_DATABASE', "databasename");
  
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>