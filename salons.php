<?php
include "header.php";
?>
<?php
require_once 'includes/dbh.inc.php';
?>
<?php
if (isset($_SESSION["customer_id"])) {
    echo "<p>Hello there " . $_SESSION["customer_username"] . "</p>";
}

$sqls = "SELECT * FROM services ;";

$results = mysqli_query($conn,$sqls);



// Associative array

// $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
// echo $row["service_name"],"<br>". $row["service_duration"];

// Free result set



?>
<div class="container">
  <div class="row">
    <div class="col-sm-4  f">
     <?php
     $sql = "SELECT * FROM salons Order by salon_id ASC ;";
     $result = mysqli_query($conn,$sql);  
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
     while($rows=$result->fetch_assoc()){
     echo $row["salon_name"],"<br>". $row["salon_location"],"<br>". $row["salon_location"];
     }
     mysqli_free_result($result);

mysqli_close($conn);
     ?>
     
    </div>
    <br>
    <div class="col-sm-4 s">
      <p>braiding</p>
      
    </div>
    <br>
    <div class="col-sm-4 t">
      <p>massage</p>        
      
    </div>
  </div>
</div>






























<?php
include "footer.php";
?>
   