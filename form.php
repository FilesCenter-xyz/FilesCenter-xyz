 <?php
 $con = mysql_connect ("sql105.epizy.com", "epiz_29400506", "W9i5ePRgG0w0");
 mysql_select_db ("epiz_29400506_db_test", $con);

  if (!$con)
    { 
    die ("Could not connect: " . mysql_error());
    } 
    $sql = mysql_query("SELECT * FROM Liam WHERE Description LIKE %term%") or die
        (mysql_error());
       while ($row = mysql_fetch_array($sql)){
    echo 'Primary key: ' .$row['PRIMARYKEY'];
    echo '<br /> Code: ' .$row['Code'];
    echo '<br /> Description: '.$row['Description'];
    echo '<br /> Category: '.$row['Category'];
    echo '<br /> Cut Size: '.$row['CutSize']; 
  }

  mysql_close($con)
   ?>