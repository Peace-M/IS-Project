<?php
require "header.php";
?>
<style>
    .form {
        width: 600px;
        height: 350px;
        background-color: white;
        margin-top: 100px;
        padding: 20px 20px 0px 25px;
        border-radius: 10px;
        position: relative;



    }

    .form-control {
        width: 210px;
        height: 30px;
    }

    .name {
        float: left;
    }

    .location {
        float: right;
    }

    .services {
        float: left;
    }

    .botn {
        text-align: center;
    }

    button {
        width: 500px;
    }

    .gfg {
        background-color: white;
        border: 2px solid black;
        padding: 5px 10px;
        text-align: center;
        display: inline-block;
        font-size: 20px;
        margin: 10px 30px;
        cursor: pointer;
    }
</style>
<section class="container-fluid main ">
    <section class="container  form">
        <form action="includes/salon.inc.php" method="post">
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
                <div class=" col-sm-6 name">
                    <label for="name">Write the name of the salon :</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class=" col-sm-6 location">
                    <label for="location">Write the location of the salon :</label>
                    <input type="text" class="form-control" name="location">

                </div>
            </div>
            <div class="row">
                <div class=" col-sm-6 services">
                    <label for="services">Number of services offered:</label>
                    <input type="text" class="form-control" name="services">

                </div>
            </div>
            <br>

            <div class="row">
                <div class=" span12 botn">

                    <button type="submit" class="btn btn-secondary" name="submit">Register</button>

                </div>
            </div>
            

    </section>

    </form>
</section>



<?php
require "footer.php";
?>