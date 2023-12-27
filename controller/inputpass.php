<?php
session_start();

$email = $_REQUEST ["email"];

$errors = [];

// error condition for check
if(empty($email)){
    $errors['email_error'] = "Enter your Phone,email or username";
}else if (strlen($email) > 33){
   $errors ['email_error'] = "use only 33 caharacter";
}

// condition for errors count
if(count($errors) > 0 ){

    $_SESSION['olddata'] = $_REQUEST;
    $_SESSION['errors'] = $errors;

    // redirection for header()

    header("Location: ../index.php");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter login</title>
    <!-- css link start -->
    <link rel="stylesheet" href="../style.css">
    <!-- favicon link start -->
    <link rel="icon" href="../imges/logo.png">
</head>
<body>
    <div class="login-box">
        <img src="../imges/logo.png" class="logo">  
        <h2>Sign in To Twitter</h2>
        <button><img src="../imges/google.png">Sign in with Google</button>
        <button><img src="../imges/apple.png">Sign in with Apple</button>
        <hr>
        <span>Or</span>

        <form action="./datastrg.php" method="post">

       
            <input name="pass" value="<?= $_SESSION['olddata']['pass'] ?? ''?>" type="text" placeholder="enter 8 digit password">

     <?php
       if(isset($_SESSION ['errors']['pass_error'])) {?>
        <span style="color: red; font-size: 12px; width: 0px; display: inline;">
        <?php
     //    echo shorthand <?=
         echo $_SESSION ['errors']['pass_error'];
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