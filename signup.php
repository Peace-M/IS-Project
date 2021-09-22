<?php
require "header.php";
?>

<style>
    body {
        padding-top: 60px;
        background-image: url("");

    }
    .me {
        width: 500px;
        border-radius: 20px;
        height: 710px;
        background-color: grey;
        padding:5px 5px 0px 10px ;
        background-image: url(images);
    }
    
    .botn{
       text-align: center;
    }
    button{
      width: 150px;
    }
    .sty{
      color: black;
      font-size: x-large;
      font-family: sans-serif;
    }
    
</style>
<section class="container me ">
    <div class="form">
    <form class="mx-1 mx-md-4" action="Includes/signup.inc.php" method="POST">
        <h2>SignUp</h2><?php
       if (isset($_GET["error"])) {
          if ($_GET["error"] =="emptyinput") {
              echo"<p>Fill in all fields!</p>";
          }
          else if ($_GET["error"] =="char") {
            echo"<p>You used invalid characters!</p>";
          }
          else if ($_GET["error"] =="invalidusername") {
            echo"<p>Choose proper username!</p>";
          }
          else if ($_GET["error"] =="usernametaken") {
            echo"<p>Username already taken. Choose another one!</p>";
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
        <p>Already have an account?<a href="login.php">Login Here</a></p>
        <p><a  class="sty" href="stylist/signup.php">Signup and Signin as Stylist</a></p>
        
        </div>
        
    </form>
   
   </section>



<?php
require "footer.php";
?>