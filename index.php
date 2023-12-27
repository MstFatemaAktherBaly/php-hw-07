<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter login</title>
    <!-- css link start -->
    <link rel="stylesheet" href="style.css">
    <!-- favicon link start -->
    <link rel="icon" href="imges/logo.png">
</head>
<body>
 
    <div class="login-box">
        <img src="imges/logo.png" class="logo">  
        <h2>Sign in To Twitter</h2>
        <button><img src="imges/google.png">Sign in with Google</button>
        <button><img src="imges/apple.png">Sign in with Apple</button>
        <hr>
        <span>Or</span>

        <form action="./controller/inputpass.php" method="post">

        
            <input name="email" value="<?= $_SESSION['olddata']['email'] ?? ''?>" type="text" placeholder="Phone,email or username">

         <?php
       if (isset($_SESSION['errors']['email_error']) > 0) {?>
        <span style="color: red; font-size: 12px; width: 0px; display: inline;">
        <?php
 //    shorthand of echo = <?=
         echo $_SESSION['errors']['email_error'];
         ?>
        </span>
    <?php
       }
         ?>

           
            <button>Next</button>
        </form>
        
        <button>Forgot Password</button>
        <p>Don't have an account <a href="#">Sign Up</a></p>
        
    </div>
</body>
</html>

<?php
session_unset();
?>