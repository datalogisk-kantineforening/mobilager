<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <?php echo "delarius";?>
  <table>
  <?php 

  

   
  include("credentials.php");
  include("good_box.php");
  include("sql_queries.php");

  $conn = new mysqli("127.0.0.1", $user, $pass, $db);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * WHERE til_dato = NULL";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo writeGoodsBox($row["id"], $row["varenavn"], $row["beholdning"]);
    }
    } 
  else {
    echo "0 results";
        }
  // add NewBox
  // add commitBox 

  ?>
  </table> 

</html>