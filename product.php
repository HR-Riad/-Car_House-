<?php 
$user_email="";
session_start();
$_SESSION['active_url']="product.php";
if(isset($_GET['brands'])){
    $brands = $_GET['brands'];
    $conn = mysqli_connect('localhost','root','','myshop');
if($conn){
    $insert = "SELECT * FROM products WHERE brands=$brands";
    $view_result = $conn->query($insert);
}
}
 
if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
    $user_email=$_SESSION['user_email'];
    $useremail=$_SESSION['user_email'];
}
if(isset($_POST['search'])){
    
    $_SESSION['searchValue']=$_POST['searchbox'];
    header('Location:productsearch.php');
}
 
if(isset($_POST['addtocart'])){

    if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass'])){
        header('Location:login.php');
    }
    $id=$_POST['id'];
$useremail=$_SESSION['user_email'];
$conn = mysqli_connect('localhost','root','','myshop');
$found=1;
if($conn){
    $read = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($read);
    if(!empty($result) && $result->num_rows>0){
        while($row=mysqli_fetch_assoc($result)){
                $productid=$row['id'];
                $p_name=$row['name'];
                $price=$row['price'];
                $p_img = $row['img'];
                $p_brands = $row['brands'];
        }
    }
    $read2 = "SELECT * FROM cart WHERE productid = '$id' AND usermail='$useremail' AND status='pending'";
    $result2 = $conn->query($read2);
    if(!empty($result2) && $result2->num_rows>0){
        while($row=mysqli_fetch_assoc($result2)){
          $found=2;      
        }
    }
    
if($found==2){
 
}
else{
    $insert3 = "INSERT INTO cart (name,img,brands,productid,usermail,quantity,price,status) VALUES('$p_name','$p_img','$p_brands','$id','$useremail','1','$price','pending')";
    $result3 = mysqli_query($conn,$insert3);
     

}

    }  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Search List </title>
    <link rel="icon" href="images/logo.png">
    <!-- css connect -->
    <link rel="stylesheet" href="css/products.css">
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

    <section class="container">

        <!-- popular collection -->

        <h2 class="section-title-popular-collection  fw-bold mt-4">Our Collections</h2>
        <div class='products'>
            <?php 
        while($row=mysqli_fetch_assoc($view_result)){
            echo "
           

            <div style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;' class='product '>
                <div class='thumbnail'>
                    <img src='images/{$row['brands']}/{$row['img']}' alt=''>
                </div>
                <div class='product-details'>
                    <h3 class='product-title'>{$row['name']} </h3>
                    <h6 ><big>Brand:</big> {$row['brands']}</h6>
                    <br>
                    <h3 style='color:green'>Tk. {$row['price']}</h3>
                    <h6 ><big style='color:red'>Quantity:</big> {$row['quantity']}</h6>
                    
                    <div class='ratting-info'>
                        <div>
                            <i class='fas fa-star filled'></i>
                            <i class='fas fa-star filled'></i>
                            <i class='fas fa-star filled'></i>
                            <i class='fas fa-star filled'></i>
                            <i class='fas fa-star halfed'></i>
                            <span>4.00</span>

                        </div>

                        <div>
                            <p>{$row['about']}</p>
                        </div>
                        <div>  
                        <form method='POST'>
                        <input type='text' name='id' value='{$row['id']}' hidden/>
                            <button name='addtocart' style='width:100%' name='addtocart'  class='bg-primary btn'> <a   style='text-decoration: none; color: aliceblue; padding: 5px; border-radius: 10px; '> Add to cart</a> </button></form>
                        </div>
                    </div>

                </div>
            </div>
        ";
        }
        
        ?> </div>
        <div class='see-more-link'>
            <a href=''>See more <i class='fas fa-arrow-right'></i></a>
        </div>
    </section>
    <?php include './components/footer.php' ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>