<?php
require "header.php";
?>

    <style type="text/css">


    </style>
<section class="container">
    <div>
    <form action="Includes/signup.inc.php" method="POST">
        <h2>SignUp</h2><?php
       if (isset($_GET["error"])) {
          if ($_GET["error"] =="emptyinput") {
              echo"<p>fill in all fields!</p>";
          }
          else if ($_GET["error"] =="char") {
            echo"<p>You used invalid characters!</p>";
          }
          else if ($_GET["error"] =="invalidemail") {
            echo"<p>Write a proper email!</p>";
          }
          else if ($_GET["error"] =="passwordsdonotmatch") {
            echo"<p>Passwords do not match!</p>";
          }
          
          else if ($_GET["error"] =="stmtfailed") {
            echo"<p>something went wrong!</p>";
          }
          else if ($_GET["error"] =="none") {
            echo"<p>You've  signed up!</p>";
          }
       }
        ?>
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
        <?php
        echo "<label for='salonname'>Enter  name of salon :</label>";

        if (isset($_GET['salonname'])) {
            $username = $_GET['salonname'];
            echo ' <input type="text" name="salonname" class="form-control" value = "' . $salonname . '">';
        }
         else {
            echo ' <input type="text" name="salonname" class="form-control">';
        }
        ?>
        <br>
        <div class="botn">
        <button type="submit"  class="btn btn-secondary" name="submit">Sign Up</button>
        <p>Already have an account <a href="login.php">Login Here</a></p>
        
        
        </div>
        
    </form>
    </div>

</section>
<?php
require "footer.php";
?>
