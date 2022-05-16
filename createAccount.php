<?php 
session_start();
if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
    header('Location:index.php');
}
if(isset($_POST['submit'])){
   
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $email =$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    if($fn!="" && $ln!="" && $email!=""&&$pass!=""&&$pass2!=""){
        $conn = mysqli_connect('localhost','root','','myshop');
        if($conn){
            $insert = "INSERT INTO users (firstname,lastname,email,password,usertype) VALUES('$fn','$ln','$email','$pass','customer')";
            $result = mysqli_query($conn,$insert);
            if($result){
                header('Location:login.php');
            }
        }
    }

}

?>

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
            Create New <span class="font-semibold text-purple-600">Account</span>!!
        </h1>
    </header>
    <main class="container">
        <form action=""method="POST">

            <div class="row mb-3">
                <label " class="col-sm-2 col-form-label ">First Name</label>
                    <div class="col-sm-10 ">
                        <input type="text" name="fn" class="form-control "   />
                    </div>
                </div>
                 
                <div class="row mb-3 ">
                    <label " class="col-sm-2 col-form-label ">Last Name</label>
                <div class="col-sm-10 ">
                    <input type="text" name="ln" class="form-control "   />
                </div>
            </div>

            <div class="row mb-3">
                <label " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="email" name="email" class="form-control "   />
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label   class="col-sm-2 col-form-label ">Password</label
          >
          <div class="col-sm-10 ">
            <input type="password" class="form-control " name="pass"   />
          </div>
        </div>
        <div class="row mb-3 ">
            <label   class="col-sm-2 col-form-label ">Confirm Password</label
  >
  <div class="col-sm-10 ">
    <input type="password" class="form-control " name="pass2"   />
  </div>
</div>
        
        <input
          type="submit"
          name="submit"
          class="btn btn-primary mt-2"
          value="Sign Up"
        />
          <br>
        <br>
        <span class=" ">Already have Account?</span><br>
        <button
          
          class="btn btn-danger mt-4 ps-5 pe-5 "
        >
        <a style="text-decoration: none;color:white; " href="login.php ">Log In</a>
      
        </button>
      </form>
    </main>
    <script src="js/bootstrap.bundle.min.js "></script>
  </body>
</html>