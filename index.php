<?php 

  if( $_POST )
    {
          
          
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))
      {
         die ("invalid name and name should be alpha");
    }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?>



<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
  <table>

  <?php 
  ini_set('display_errors',1);

  include("credentials.php");
  include("good_box.php");
  include("sql_queries.php");
  $conn_string = "host=127.0.0.1 dbname=mobilager user=mobilager  password=mobilager";
  $conn = pg_connect($conn_string);
 // Check connection

  $sql = "SELECT * FROM varer WHERE til_dato is NULL";
  $result = pg_query($sql);
  $rows = pg_num_rows($result);

  for ($x = 0; $x < $rows; $x++){
    echo writeGoodsBox(pg_fetch_result($result , $x , "id") ,
                       pg_fetch_result($result , $x , "varenavn") , 
                       pg_fetch_result($result , $x , "beholdning"));
  }
  // add NewBox
  echo writeCommitBox();
  ?>
  </table> 
  </body>
</html>
