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
$t_price=0;
 
$conn = mysqli_connect('localhost','root','','myshop');
if($conn){
    $read = "SELECT * FROM cart WHERE usermail = '$useremail' AND status='pending'";
    $result = $conn->query($read); 
   
    if(isset($_POST['confirm'])){
        $read3 = "UPDATE cart SET status='confirm'  WHERE usermail='$useremail'";
        $result2 = $conn->query($read3);  
        header('Location:orderlist.php');
    }
    }



     ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cart Page</title>

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
            <h2 class='mb-3' style='text-align:center;' >My Cart</h2>
 
                <table style="width: 100% ; border: 1px solid black;text-align: center;">
                    <tr class="bg-black text-white" style=" border: 1px solid black;">
                        <th>Product name</th>
                        <th>Product image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>

                    <?php 

            if($result){
                $t_price=0;
        while($row=mysqli_fetch_assoc($result)){

            $t_price = ($row['quantity']* $row['price'])+$t_price ;
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
                    <td>
                    <a href='delete.php?id={$row['productid']}'>
                    <img style='width: 20px ;height:20px;' src='./images/delete-icon.png' alt=''/>
                    </a>
                          
                        <a href='edit.php?id={$row['productid']}'>
                        <img style='width: 20px ;height:20px;' src='./images/update-icon.png' alt=''/>
                        </a>
                    </td>
                   
                </tr>"; }}?> </table>
                <div class="row">
                    <div class="col"><h6 class='mt-3'>Toatal price: <?php echo $t_price; ?></h6></div>
                    <div class="col"><button style="float:right;text-decoration:none;" name='confirm' class='btn bg-dark btn-outline-dark mt-3 '>
 <a style="float:right;text-decoration:none;color:white ">Confirm Order ></a>

                        </button></div>
                </div>
                
                
            </form>
        </div>
        <br><br><br>
        <script src="js/bootstrap.bundle.min.js "></script>
        <?php include './components/footer.php'; ?>
    </body>

    </html>