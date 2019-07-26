<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        table td{
        padding-right:20%;
        text-align:justify;
        }
    </style>
</head>
<body>
        <div class="container">
        <h2 class="text-center">View Order</h2>
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
                <img src="images/imgslides/logo.jpg" class="rounded-circle circle" width="150px" height="100px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="order.htmlnavbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="adminlogin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="customerdetail1.php">View all Orders</a>
                    </li>
                    </ul>
                    </div>
                    </nav>
      <?php
        include ('connection.php');
        $_GET['order_id'];
        $sql = "SELECT * FROM orders WHERE order_id ='".$_GET['id']."'";
        $row = mysqli_query($conn, $sql)->fetch_assoc();
    ?>
        <table>
           <tr><td>order_id: </td>
           <td>   
            <?php echo $row['order_id']?>
            </td></tr>
           <tr><td>Firstname: </td>
           <td>  
            <?php echo $row['firstname']?>
            </td></tr>
           <tr><td>Lastname: </td>
           <td>   
            <?php echo $row['lastname']?>
            </td></tr>
           <tr><td>Email: </td>
           <td>      
            <?php echo $row['email']?>
            </td></tr>
           <tr><td>Gender: </td>
           <td>       
            <?php echo $row['gender']?>
            </td></tr>
           <tr><td>Phone no: </td>
           <td>    
            <?php echo $row['phoneno']?>
            </td></tr>
           <tr><td>Address: </td>
           <td>   
            <?php echo $row['address1']?>
            </td></tr>
           <tr><td>Nearest Busstop: </td>
           <td>      
            <?php echo $row['address2']?>
            </td></tr>
           <tr><td>City: </td>
           <td>       
            <?php echo $row['city']?>
            </td></tr>
           <tr><td>State: </td>
           <td>      
            <?php echo $row['state1']?>
            </td></tr>
           <tr><td>Menu: </td>
           <td>       
            <?php echo $row['menu']?>
            </td></tr>
           <tr><td>Quantity: </td>
           <td>    
            <?php echo $row['quantity']?>
            </td></tr>
           <p>Order Status:
                <?php
                if($order_status == 0){
                echo "Pending";
                }
                else{
                echo "Resolved";
                }
                $row['order_status']
                ?>
            </p>
           <tr><td>Order Date: </td>
           <td>      
            <?php echo $row['order_date']?>
            </td></tr>
            <br>
        </table>
            <button class="btn"><a href="customerdetail1.php" class="nav-link">Back</button>
        </div>
        <footer class="container-fluid" id="footer">
        <div class="row">
        <div class="col-sm-6">
        <h4 class="text-white">Contact</h4>
        <p class="text-white">
        Email Address<br>
        adebolakehindemary"gmail.com
        </td></tr>
        </div>
        <div class="col-sm-6">
        <h4 class="text-white">Connect with me</h4>
        <a href="https://www.github.com/kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-github"></i>
        </a>
        <a href="https://www.twitter.com/kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="https://web.facebook.com/adebola.kehindemary" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/adebolakehindemary/" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/lamina-kehinde-mary-b43982169" class="btn btn-outline-primary btn-icon-only rounded-circle">
        <i class="fab fa-linkedin"></i>
        </a>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
        <P class="text-white">
        Phone Number<br>
        08174036097
        </td></tr>
        </div>
        <div class="col-sm-6">
        <p class="text-white">Copyright © 2018 Dufuna-fem, All rights reserved.</td></tr>
        </div>
        </div>
        </footer> 
</body>
</html>