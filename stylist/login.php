<?php
include "header.php";
?>
<style type="text/css">
    .signup {

        padding: 10px;
        position: relative;
        margin: 100px auto;
        width: 370px;
        height: 360px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.8);
        border-radius: 10px;
        background-color: white;

    }

    .botn {
        text-align: center;
        color: black;
    }
    button{
        background-color: black;
        color: white;
        width: 150px;
        border-radius: 30px;
    }
    p{
        font-family: sans-serif;
        font-size: large;
    }
</style>
<section class="container ">

    <div class="signup">
        <form class="form-login" action="includes/login.inc.php" method="POST">
        <i class="fas fa-users" style="font-size:120px;color:navy blue;padding:0px 0px 0px 100px "></i>
        <br>
            

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
                        echo "<p>Fill in all Fields!</p> ";
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