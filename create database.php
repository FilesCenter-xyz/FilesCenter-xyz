<?php
     $con = mysql_connect("sql105.epizy.com", "epiz_29400506", "W9i5ePRgG0w0");
      if (!$con)
     {
      die('Could not connect: ' . mysql_error());
     }
      if (mysql_query("CREATE DATABASE db_test", $con))
     {
  echo "Database created";
     }
      else
    {
  echo "Error creating database: " . mysql_error();
    }


  mysql_select_db("db_test", $con);
  $sql = "CREATE TABLE Liam
   ( 
  Code varchar (30),
  Description varchar (30),
  Category varchar (30),
  CutSize varchar (30),
   )";

 mysql_query($sql, $con);
     mysql_close($con);
?> 