<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="">

    <title> Salon Operations Management</title>
</head>
<body>
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
    
</body>
</html>