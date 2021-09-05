<?php
require "header.php";
?>

<style>
    body {
        padding-top: 60px;
        background-image: url("");

    }
    .container{
        width: 300px;
        border-radius: 20px;
        height: 600px;
        background-color: indianred;
    }
    .botn{
       text-align: center;
    }
</style>
<section class="container">
<form action="Includes/signup.inc.php" method="POST">
        <h2>SignUp</h2>
        <label for="first">Enter your Firstname :</label>
       <?php
        if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" class="form-control" name="first"  value = "' . $first . '">';
        } else {
            echo '<input type="text" class="form-control" name="first" >';
        }
        echo "<br>";
        echo "<label for='last'>Enter your Lastname :</label>";

        if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" class="form-control" name="last"  value = "' . $last . '">';
        } else {
            echo '<input type="text" class="form-control" name="last" >';
        } 
        echo "<br>";
        echo "<label for='username'>Enter Username :</label>";

        if (isset($_GET['username'])) {
            $username = $_GET['username'];
            echo ' <input type="text" name="username" class="form-control" value = "' . $username . '">';
        }
         else {
            echo ' <input type="text" name="username" class="form-control">';
        }
        echo "<br>";
        echo "<label for='email'>Enter your E-mail:</label>";

        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            echo ' <input type="text" name="email" class="form-control" value = "' . $email . '">';
        }
         else {
            echo ' <input type="text" name="email" class="form-control">';
        }

        ?>
        <br>
        
        <label for="pwd">Enter your password :</label>
        <input type="password" class="form-control" name="pwd" >
        
        <br>
        <label for="pwd2">Confirm your password :</label>
        <input type="password" class="form-control" name="pwd2" >
        <br>
        <div class="botn">
        <button type="submit"  class="btn btn-secondary" name="submit">Sign Up</button>
        </div>
    </form>

</section>



















<?php
require "footer.php";
?>