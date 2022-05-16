<?php 
 
 
 if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
    $total_pending_order=0;
    $conn2 = mysqli_connect('localhost','root','','myshop');
    if($conn2){
        $read12 = "SELECT * FROM cart WHERE usermail = '$useremail' AND status='pending'";
        $result12 = $conn2->query($read12); 
        $total_pending_order=0;
        while($row34=mysqli_fetch_assoc($result12)){
$total_pending_order+=1;
        }
    }

}
 

?>

<header>
    <nav class="navbar  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img class="ms-2" src="images/logo.png" alt="" width="40" height="40">
                <span class="fw-bold">Car House</span>
            </a>
            <form class="d-flex" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchbox">
                <button class="btn btn-outline-success" type="submit" name="search">Search</button>

            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="package.php">Packages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Brands 
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="product.php?brands='audi'">Audi</Audi></a></li>
                            <li><a class="dropdown-item" href="product.php?brands='bmw'">BMW</a></li>
                            <li><a class="dropdown-item" href="product.php?brands='yamaha'">Yamaha Bike </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <?php 
                    if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){

                   echo " 
                   <li class='nav-item'>
                        <a class='nav-link' href='banking.php'>Banking</a>
                    </li>
                   
                   <li class='nav-item'>
                        <a class='nav-link' href='orderlist.php'>Order List</a>
                    </li>
                    <li class='nav-item me-1'>
                        <a class='nav-link' href='cart.php'> <img style='width:30px;height:30px;' src='./images/cart.png' alt='cart'></a>
                        <span style='margin-top:-45px;position:relative;float:right;color:red'>{$total_pending_order}</span>
                    </li>";} ?>
                   
                <?php 
                 
                 if(isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
                   echo "
                   <li class='nav-item'>
                   <a style='text-decoration: none;' href='logout.php' class='btn  nav-link logout' >Logout</a> 
                  </li>
                   "; 
               }
               else{
                 echo "  <li class='nav-item'>
                 <a style='text-decoration: none;' href='login.php' class='btn  nav-link login' >Login</a> 
                </li>
                 ";
               }
 
                 ?>
                </ul>

               
               
            </div>
        </div>
      
    </nav>

</header>