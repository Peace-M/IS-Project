<?php
include "header.php";


require_once 'includes/dbh.inc.php';




$sqls = "SELECT * FROM services ;";

$results = mysqli_query($conn, $sqls);



// Associative array

// $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
// echo $row["service_name"],"<br>". $row["service_duration"];

// Free result set



?>
<style>
    .brre {
        background-image: url(images/comb.jpg);
       
        background-size: cover;
        background-position: center;
    }

    .text {
        color: grey;
        font-weight: bold;
        border: 3px solid #f1f1f1;


        z-index: 2;

    }

    .salon {
        background-color:linen;
        height: 150px;
        padding: 10px;
        width: 300px; 
        background-image: url(images/spra.png);
        color: black;
        border-radius: 20px;
        margin-left: 20px;
        
    }

    .f {
        background-image: url(images/barbe.jpg);
        background-size: contain;
        padding: 4px;
    }
    .botn{
        margin-left: 70px;
        margin-top: 4px;
    }
    p{
        font-style: italic;
    }
</style>
<section class="brre">
    <?php
    if (isset($_SESSION["customer_id"])) {
        echo "<h5>Hello there " . $_SESSION["customer_firstname"] . ". <br> Welcome! </h5>";
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6  f">
                <?php
                $sql = "SELECT * FROM salons  ;";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                while ($row = $result->fetch_assoc()) {
                    echo  "<div class ='salon'> This is ", $row["salon_name"], "<br>" . "located at ", $row["salon_location"], "<br>" . "We offer more than ", $row["salon_services"], " services", "<br>", "<br></div>";
                    echo "<form class ='botn'action='booking.php' method='get'><button class ='btn btn-dark' type='book'>".$row["salon_name"]." Book</button>
                           </form> ", "<br>", "<br>";
                }
                mysqli_free_result($result);
                ?>

            </div>
            <br>
            <div class="col-sm-6 s">
                <?php
                $sqls = "SELECT * FROM services  Order by service_id  ;";
                $results = mysqli_query($conn, $sqls);
                $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
                while ($row = $results->fetch_assoc()) {
                    echo  "<p> We have ", $row["service_name"], "<br>" . " at ", $row["service_price"], " Shillings ", "<br>" . " this will be done in  ", $row["service_duration"], " ", "<br>", "<br></p>", "<br>";
                }
                mysqli_free_result($results);
                mysqli_close($conn);
                ?>

            </div>
            <br>
           

        </div>



    </div>
    
</section>


















<?php
include "footer.php";
?>