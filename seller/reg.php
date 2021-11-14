<?php include("./server/server.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../logo.png" sizes="16x16" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
.button {
  display: inline-block;
  border-radius: 10px;
  background-color: #99FF99;
  border: none;
  color: #000;
  text-align: center;
  font-size: 18px;
  
  width: 277px;
  height: 40px;
  transition: all 0.5s;
  cursor: pointer;
  margin-bottom: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.nameinput {text-transform:capitalize;}
</style>    

</head>
<body>

    <div class="main" style="padding-top: 90px;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Pharmacy Register</h2>
                        <form action="reg.php" method="post" enctype="multipart/form-data" >
                        
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class ="nameinput" type="text" name="seller_name" id="name" placeholder="Your Full Name" required/>
                            </div>

                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="seller_email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_1" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_2" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                          
                            <div class="form-group">
                                <label for="business"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="bus_name" id="business" placeholder="Pharmacy Name" required/>
                            </div>

                            <h4>Upload ZIP File Containing: </h4>
                        <ol type="1">
                            <li>BIR Form 2303</li>
                            <li>Business Permit</li>
                            <li>Distributorship Certificate/Letter if Authorization From Brands</li>
                            <li>LTO with Online Ordering & Delivery Clause</li>
                            <li>FDA</li>
                        </ol>  
                  
                    
                        <input type="file" name="documents"> <br>
                        <button class="button" style="vertical-align:middle" type="submit" name="reg_user"><span>REGISTER </span></button>  
                        </form>

                        <div class="alert alert-danger">
                        <strong>Warning!</strong> ONE or MORE missing files will result in an automatic rejection. 
                        </div>
                    </div>
                    
                    <div class="signup-image">
                        <figure><img src="./assets/images/register.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I already have a Pharmacy Seller Account</a>
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