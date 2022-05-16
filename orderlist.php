<?php
session_start();
if(isset($_POST['search'])){
    session_start();
    $_SESSION['searchValue']=$_POST['searchbox'];
    header('Location:productsearch.php');
}
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass'])){
    header('Location:login.php');
}
$user_email=$_SESSION['user_email'];
$useremail=$_SESSION['user_email'];
$conn = mysqli_connect('localhost','root','','myshop');
if($conn){
    $read = "SELECT * FROM cart WHERE usermail = '$useremail' AND status='confirm'";
    $result = $conn->query($read); 
   
    if(isset($_POST['confirm'])){
        $read3 = "UPDATE cart SET status='confirm'  WHERE usermail='$useremail'";
        $result2 = $conn->query($read3);  
        header('Location:cart.php');
    }
    }



     ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Order List</title>

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
        <br /><br />
        <div class="container">
            <form method="POST">
<h2 class='mb-3' style='text-align:center;' >All Confirmed Order</h2>
                <table style="width: 100% ; border: 1px solid black;text-align: center;">
                    <tr class="bg-black text-white" style=" border: 1px solid black;">
                        <th>Product name</th>
                        <th>Product image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                  
                    </tr>

                    <?php 

            if($result){
        while($row=mysqli_fetch_assoc($result)){
            echo "
            
            <tr style=' border: 1px solid black;'
            >
            <td hidden><input name='id' value='{$row['productid']}'/> </td>
                    <td>
                        <p>{$row['name']}</p>
                    </td>
                    <td>
                    <img  style='width=40px; height:60px' src='./images/{$row['brands']}/{$row['img']}' alt='img'>
                    </td>
                   
                    <td>
                        <p>{$row['quantity']} </p >
                    </td>
                    <td>
                        <p>{$row['price']}</p>
                    </td> <td>{$row['status']}</td>
                     
                   
                </tr>"; }}?> </table>
                 
            </form>
        </div>
        <br><br><br>
        <script src="js/bootstrap.bundle.min.js "></script>
        <?php include './components/footer.php'; ?>
    </body>

    </html>