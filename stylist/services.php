<?php
require "header.php";
?>
<style>
    .form {
        width: 600px;
        height: 300px;
        background-color: white;
        margin-top: 100px;
        padding: 20px 20px 0px 25px;
        border-radius: 10px;
        position: relative;



    }

   
    button {
        margin-top: 46px;
    }
</style>
<section class="container-fluid main ">
    <section class="container  form">
        <form action="includes/services.inc.php" method="post">
            <h3>Register your Salon</h3>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "char") {
                    echo "<p>You used invalid characters!</p>";
                }
            }
            ?>

            <div class="row">
                <div class=" col-sm-3 name">
                    <label for="name"> Name of the service :</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <br>
                <div class=" col-sm-3 price">
                    <label for="price"> Price of the service :</label>
                    <input type="int" class="form-control" name="price">

                </div>
                <br>
                <div class=" col-sm-3 duration">
                    <label for="duration">Duration of service:</label>
                    <input type="text" class="form-control" name="duration">
                </div>

                <br>


                <div class=" col-sm-3  botn">

                    <button type="submit" class="btn btn-secondary" name="submit">Add</button>

                </div>
            </div>
            <div class=" span12  botn">
            <a href="index.php">Done</a> 
            </div>




    </section>

    </form>
</section>




<?php
require "footer.php";
?>