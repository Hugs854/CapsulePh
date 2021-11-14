<?php include("./server/server.php"); 
$emailaddress = "";
$errors = array('emailaddresserror' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["seller_username"])) {
        $errors['emailaddresserror'] = 'Email is required';
      } else {
        $emailaddress = test_input($_POST["seller_username"]);
        // check if e-mail address is well-formed
        if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
            $errors['emailaddresserror'] = 'Invalid Email format';
        }
      }

if(array_filter($errors)){

    }else{
        $_SESSION['email'] = $emailaddress ;
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../logo.png" sizes="16x16" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="main" style="padding-top: 90px;">

        <!-- Sign up form -->
      
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./assets/images/login.jpg" alt="sing up image"></figure>
                        <a href="../index.php" class="signup-image-link">Back To Home</a>
                        <a href="reg.php" class="signup-image-link">Register as Seller</a>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">PHARMACY LOGIN</h2>
                        <form  class="register-form" id="login-form" action="login.php" method="post">
                            <div class="alert alert-danger"><h4 id="e_msg"><?php include('./server/errors.php'); ?></h4></div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="seller_username" id="your_name" placeholder="Seller Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="login_seller" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>