
<?php
$message = '';
include('connection.php');
if(isset($_POST['submit'])){
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password1 = mysqli_escape_string($conn, $_POST['password1']);
    $password1 = md5($password1);
    if(empty($username) || empty($password1)){
    die ("All fields are Required");
    }
    else{
    $sql = "SELECT * FROM admin_login WHERE username ='$username' AND password1 ='$password1'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
        }
    if($resultCheck > 0 ){
       header('location: customerdetail1.php');
    }
    else{
    $message .= '<div class="alert alert-danger" role="alert">
    User credentials is Wrong</div>';
    }
}

?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
        <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
        <script src="jquery/jquery.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="js/bootstrap.js"></script> 
    </head>
    <style>
    form{
    margin-right: 35%;
    margin-left: 35%;
    width: 100%;
    }
    .container{
        width:70%;
    }
    </style>
    <?php 
    echo $message; 
    ?>  
<body>

    <div class="container">
    <form method="POST" id = "regForm" name="regForm">
    <div class = "row">
    <div class="col-sm-4">
    <div class="input-group my-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="name" >
    <i class="fas fa-user"></i>
    </span>
    </div>
    <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username">
    </div>
    </div>
    </div>
    <div class = "row">
    <div class="col-sm-4">
    <div class="input-group my-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="name" >
    <i class="fas fa-user"></i>
    </span>
    </div>
    <input type="password" id="password1" name="password1" class="form-control" placeholder="Enter Password">
    </div>
    </div>
    </div>
    <button type="submit" id="submit" name="submit" class="btn btn-primary mt-3 mb-3">Login</button>
    </form>
</div>
</body>
</html>


