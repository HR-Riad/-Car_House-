<?php
session_start();
if(isset($_POST['search'])){
    session_start();
    $_SESSION['searchValue']=$_POST['searchbox'];
    header('Location:productsearch.php');
}

 
if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
    $user_email=$_SESSION['user_email'];
    $useremail=$_SESSION['user_email'];
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package </title>
    <link rel="icon" href="images/logo.png">
    <!-- css connect -->
    <link rel="stylesheet" href="style.css">
    <!-- boostrap css link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=Poppins:wght@400;500&family=Raleway:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/d06914f12e.js" crossorigin="anonymous"></script>
</head>

<body>

 <?php include './components/header.php'; ?>
 

    <section class="container" id="packges">
        <h2 class="fs-2 fw-bold text-center mb-5 mt-5">Our Packages For Buy Car In Loan </h2>
        <div class="container-fluid p-5">

            <div class="row">
                <!-- 1st card -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">

                                <h2 class="fs-1 fw-bold">$2000 Monthly</h2>
                                <h4 class="fs-3 fw-bold"></h4>
                                <br><br>
                            </div>
                            <p class="card-text">General Package</p>

                            <ul class="list-unstyled mb-4 p-color">
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i> Lots of Interset</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i></i>No Free Service</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i>Support</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i>Banking Benefit</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="background-color  rounded-pill fw-bold  ps-5 pe-5  pt-2 pb-2 "> <a class="button-design"  style="border-radius: 100px ; text-decoration: none;" href="#home" target="_blank">Choose Plan</a> </button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 2nd card -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">

                                <h2 class="fs-1 fw-bold">$3000</h2>
                                <h4 class="fs-3 fw-bold">Monthly</h4>
                                <br><br>
                            </div>
                            <p class="card-text">General Plus</p>

                            <ul class="list-unstyled mb-4 p-color">
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i>10% Interset of Total Money</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i></i>No free services</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i>Call support</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i> Banking Benefit</li>
                               
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="background-color  rounded-pill fw-bold  ps-5 pe-5 pt-2 pb-2 "> <a class="button-design"  style="border-radius: 100px; text-decoration: none;" href="#home" target="_blank" >Choose Plan</a> </button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Third card -->
                <div class="col-lg-3 col-md-6 mb-4 ">
                    <div class="card bg-primary hot-div shadow-lg pb-5">
                        <div class="card-body">
                            <div class="text-center hot-div p-3 ">

                                <h2 class="fs-1 fw-bold">$5000</h2>
                                <h4 class="fs-3 fw-bold">Monthly</h4>
                                <br><br>
                            </div>
                            <p class="card-text">Premium</p>


                            <ul class="list-unstyled mb-4 p-color ">
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i> 5% Interest of Total amount</li>
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i> Full support access</li>
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i></i> Dedicated team</li>
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i>24 hours call support</li>
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i> Premium Service</li>
                                <li><i class="fas fa-check-circle " style="color: #FFFFFF" aria-hidden="true"></i> Pay as plan</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="background-color  rounded-pill fw-bold  ps-5 pe-5  pt-2 pb-2 "> <a class="button-design "  style="border-radius: 100px; text-decoration: none;" href="#home" target="_blank">Choose Plan</a> </button>
                            </div>


                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-pill">Hot</span>

                        </div>
                    </div>
                </div>

                <!-- fourth part -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">

                                <h2 class="fs-1 fw-bold">$8000</h2>
                                <h4 class="fs-3 fw-bold">Monthly</h4>
                                <br><br>
                            </div>
                            <p class="card-text">Premium Plus</p>


                            <ul class="list-unstyled mb-4 p-color">
                                <li ><i class="fas fa-check-circle" style="color: #5243c2" aria-hidden="true"></i>2% Interest </li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i></i> Secuirty facility</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i>Unlimeted support</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i> Premium design</li>
                                <li><i class="fas fa-check-circle " style="color: #5243c2" aria-hidden="true"></i> Give intrerest from Banking</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="background-color   rounded-pill fw-bold  ps-5 pe-5 pt-2 pb-2 "> <a class="button-design"  style="border-radius: 100px; text-decoration: none;" href="#home" target="_blank">Choose Plan</a> </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </section>

        <?php include './components/footer.php' ?>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>