<?php
  
    
// the conection of database local host  where the datas are stored
 DEFINE ('DB_HOSTNAME', 'localhost');
 DEFINE ('DB_DATABASE', 'loginapp');
 DEFINE ('DB_USERNAME', 'root');
 DEFINE ('DB_PASSWORD', '');

 $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>