<?php
 session_start();
if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
    header('Location:index.php');
}
 
 
if(isset($_POST['search'])){
$_SESSION['searchValue']=$_POST['searchbox'];
header('Location:productsearch.php'); } 

if(isset($_POST['login'])){ $email
=$_POST['email']; $pass=$_POST['pass']; 
if( $email!=""&&$pass!=""){ 
  $conn =
mysqli_connect('localhost','root','','myshop'); 
if($conn){ 
  $insert = "SELECT * FROM users WHERE email='$email' AND password='$pass'"; 
  
  $result =  $conn->query($insert); 
  if(!empty($result) && $result->num_rows > 0){
session_start(); 

$_SESSION['user_email']="$email";
$_SESSION['user_pass']="$pass"; 
$_SESSION['login']="active";
header('Location:index.php'); 
} else{  } } } } ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Log in Page</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=Poppins:wght@400;500&family=Raleway:ital,wght@0,600;1,400&display=swap" rel="stylesheet" />
        <!-- font awesome icon -->
        <script src="https://kit.fontawesome.com/d06914f12e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include './components/header.php'; ?>
        <header>
            <h1 class="text-5xl text-center mt-16 pt-5 pb-3">
                Login to <span class="font-semibold text-purple-600">Car House</span>!!
            </h1>
        </header>
        <main class="container">
            <form method="POST">
              <?php 
if(isset($_POST['login'])){ $email
=$_POST['email']; $pass=$_POST['pass']; 
if( $email==""||$pass==""){
  echo "<p style='color:red;' >All field are required!</p>";
} }?>
            
                <div class="row mb-3">
                    <label " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="email " name='email' class="form-control " id="email" />
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Password</label
          >
          <div class="col-sm-10 ">
            <input type="password" class="form-control " name='pass' id="pass" />
          </div>
        </div>

        <button
          type='submit'
          name='login'
          class="btn btn-primary mt-4 ps-5 pe-5 "
          id="login-submit"
        >
          Sign in
        </button>
        <button
           
          class="btn btn-danger ms-5 mt-4 ps-5 pe-5 "
        >
         <a style="text-decoration: none;color:white; " href="createAccount.php ">Create New Account?</a>
        </button>
      </form>
    </main>
    <script str="js/login.js"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
  </body>
</html>