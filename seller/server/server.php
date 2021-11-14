<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<?php

// initializing variables
$name = "";
$username = "";
$usn = "";
$email    = "";
$errors = array();
$reg_date = date("Y/m/d");

// connect to the database
$db = mysqli_connect('sql6.freemysqlhosting.net', 'sql6451081', 'KCmsVvLwb2', 'sql6451081');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $business = mysqli_real_escape_string($db, $_POST['bus_name']);
  $username = mysqli_real_escape_string($db, $_POST['seller_name']);
  $email = mysqli_real_escape_string($db, $_POST['seller_email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $filename = $_FILES['documents']['name'];
  $destination = '../uploads/' . $filename;
  $extension = pathinfo($filename, PATHINFO_EXTENSION);
  $file = $_FILES['documents']['tmp_name'];
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($business)) { array_push($errors, "Pharmacy Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The passwords do not match");
  }
  if (empty($filename)) { array_push($errors, "Business Documents are required"); }
  if (!in_array($extension, ['zip', 'rar'])) {
    echo "Your file extension must be .zip or .rar";
} 

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM seller_info WHERE seller_name='$username' OR seller_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    
    if ($user['seller_email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
    if (move_uploaded_file($file, $destination)) {
    $query = "INSERT INTO seller_info (bus_name, seller_name, seller_email, seller_password, documents)
          VALUES('$business','$username', '$email', '$password', '$filename')";
          
    }

    mysqli_query($db, $query);
    $_SESSION['bus_name'] = $business;
    $_SESSION['seller_name'] = $username;
    $_SESSION['seller_email'] = $email;
    $_SESSION['documents'] = $filename;
    $lastID = mysqli_insert_id($db);

   /*  $query2 = "INSERT INTO brands (brand_id, brand_title) VALUES ('$lastID', '$business')";
    mysqli_query($db, $query2);
    $_SESSION['brand_id'] = $lastID;
    $_SESSION['brand_title'] = $business;
     */

    $_SESSION['success'] = "You are now logged in";
    header('location: ./seller/');
  } 
}

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'onlineshop');

$query = "SELECT * FROM seller_info";
$result = mysqli_query($db, $query);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['file_id'])) {
  $id = $_GET['file_id'];

  // fetch file to download from database
  $query = "SELECT * FROM seller_info WHERE seller_id=$id";
  $result = mysqli_query($db, $query);

  $file = mysqli_fetch_assoc($result);
  $filepath = '../../uploads/' . $file['documents'];

  if (file_exists($filepath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . basename($filepath));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
  
      readfile('uploads/' . $file['documents']);

      // Now update downloads count
      $newCount = $file['downloads'] + 1;
      $updateQuery = "UPDATE seller_info SET downloads=$newCount WHERE id=$id";
      mysqli_query($db, $updateQuery);
      exit;
  }

}

if (isset($_POST['login_seller'])) {
  $seller_username = mysqli_real_escape_string($db, $_POST['seller_username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($seller_username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM seller_info WHERE seller_email='$seller_username' AND seller_password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
       $_SESSION['seller_email'] = $email;
      $_SESSION['seller_name'] = $seller_username;
      $_SESSION['success'] = "You are now logged in";
      header('location: ./seller/');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


?>

