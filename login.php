<?php
include "header.php";
?>
<style type="text/css">
    .signup {

        padding: 10px;
        position: relative;
        margin: 100px auto;
        width: 370px;
        height: 315px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.8);
        border-radius: 30px;

    }

    .botn {
        text-align: center;
    }
</style>
<section class="container ">

    <div class="signup">
        <form class="form-login" action="includes/login.inc.php" method="POST">
            <h2 class="h2">Login</h2>


            <label for="username">Enter your username :</label>
            <input type="text" class="form-control" name="username">
            <br>
            <label for="pwd">Enter your password :</label>
            <input type="password" class="form-control" name="pwd">
            <br>
            <div class="botn">
                <button type="submit" name="submit">Login </button>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>fill in all fields!</p> ";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Incorrect Login details!</p> ";
                    }
                }
                ?>
            </div>

        </form>

    </div>
</section>

</div>



<?php
require "footer.php";
?>