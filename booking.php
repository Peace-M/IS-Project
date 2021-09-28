<?php
include "header.php";
?>
<style>
    .hat {
        background-image: url(images/.jpg);
        background-size: initial;
        background-repeat: no-repeat;
        height: fit-content;
    }

    .form {
        width: 300px;
        height: 440px;
        margin: auto;
        background-color: linen;
        border-radius: 30px;
        padding-top: 10px;
    }

    .botn {
        text-align: center;
    }

    .btn {
        height: 35pxpx;
    }
    p{
     
    }
</style>

<section class="container-fluid hat">


    <div class="form">
        <form class="mx-1 mx-md-4" action="includes/booking.inc.php" method="post">
       
            <?php
            if (isset($_SESSION["customer_id"])) {
                echo "<h4> Book an appointment <br>" . $_SESSION["customer_firstname"] ."</h4>";
            }
            
            ?>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] =="emptyinput") {
                    echo"<p>Fill in all fields!</p>";

                }else if ($_GET["error"] =="exists") {
                    echo"<p>The date has been booked!</p>";
                  }
            }
            ?>

            <label for="date">Enter appointment date: </label>
            <input type="date" class="form-control" name="date" id="dates">
            <br>

            <label for="time">Enter appointment time:</label>
            <input type="time" class="form-control" name="time" id="times">
            <br>

            <label for="pay">Select your preferred mode of payment:</label><br>
            <input type="radio" name="pay" id="Mobile Money" value="Mobile Money">
            <label for="Mobile Money">Mobile Money</label><br>
            <input type="radio" name="pay" id="Cash" value="Cash">
            <label for="Cash">Cash</label><br>
            <input type="radio" name="pay" id="Debit/Credit Card" value="Debit/Credit Card">
            <label for="Debit/Credit Card">Debit/Credit Card</label><br>
            <br>

            <div class=" botn">
                <button type="submit" class="btn btn-secondary" name="submit">Book</button>
            </div>
        </form>
        <br>
    </div>
    <form action='salons.php' method='get'>
        <button type='back' class="btn btn-secondary">Back</button>
    </form>
    <br>


</section>


















<?php
include "footer.php";
?>