<?php

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD','');
  define('DB_DATABASE', 'e_commerce');
   
   $dbc=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Can not connect");


mysqli_select_db($dbc,DB_DATABASE) or die("cannot select DB");


  ?>

  <!--$sql = "SELECT * FROM admin";
$result = mysqli_query($dbc,$sql);

if (false === $result) {
    echo mysqli_error($dbc);
}
   -->