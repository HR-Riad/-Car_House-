<?php
session_start();
$user_email=$_SESSION['user_email'];
$useremail=$_SESSION['user_email'];
 
$conn = mysqli_connect('localhost','root','','myshop');
if($conn){
    if(isset($_GET['id'])){
        $postid= $_GET['id'];
        $read = "SELECT * FROM cart WHERE productid='$postid' AND usermail = '$useremail' AND status='pending'";
        $result = $conn->query($read); 
    }
  
   
    }

 
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    header('Location:edit.php');  

}
if(isset($_POST['cart'])){
    header('Location:cart.php');
   

}
 
     ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit Page</title>

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

                <table style="width: 100% ; border: 1px solid black;text-align: center;">
                    <tr class="bg-black text-white" style=" border: 1px solid black;">
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Operation</th>
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
                        <input type='text' name='quantity' value='{$row['quantity']}' min='1' >
                    </td>
                    <td>
                        <p>{$row['price']}</p>
                    </td>
                    <td>
                        
                        <button type='submit' name='edit' value='{$row['productid']}' class='btn  '>
<img style='width: 20px ;height:20px;'value='{$row['productid']}' src='./images/update-icon.png' alt='update'>

                        </button>
                    </td>
                </tr>"; }}?> </table>
                <button style="float:right;text-decoration:none;" name='cart' class='btn bg-dark btn-outline-dark mt-3 '>
 <a style="float:right;text-decoration:none;color:white;' "   >View cart page ></a>
 
                        </button>
                 
            </form>
        </div>
        <br><br><br>
        <script src="js/bootstrap.bundle.min.js "></script>
        <?php include './components/footer.php'; ?>
    </body>

    </html>