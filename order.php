<?php
$message = '';
    
if(isset($_POST['submit'])){
    include('connection.php');
        $firstname = mysqli_escape_string($conn, $_POST ['firstname']);
        $lastname = mysqli_escape_string($conn, $_POST['lastname']);
        $email = mysqli_escape_string($conn, $_POST['email']);
        $gender = mysqli_escape_string($conn, $_POST['gender']);
        $phoneno = mysqli_escape_string($conn, $_POST['phoneno']);
        $address1 = mysqli_escape_string($conn, $_POST['address1']);
        $address2 = mysqli_escape_string($conn, $_POST['address2']);
        $city = mysqli_escape_string($conn, $_POST['city']);
        $state1 = mysqli_escape_string($conn, $_POST['state1']);
        $menu = mysqli_escape_string($conn, $_POST['menu']);
        $quantity = mysqli_escape_string($conn, $_POST['quantity']);
        $order_status = $_POST['order_status'];
        if(empty($firstname) || empty($lastname) || empty($email) || empty($gender) || empty($phoneno) ||
        empty($address1) || empty($address2) || empty($city) || empty($state1) || empty($menu) || empty($quantity)){
            die ("All fields are Required");
            }
            elseif ( strlen ( $firstname ) < 3 || strlen ( $firstname ) > 20) {
                $message .= '<div class="alert alert-danger" role="alert">Firstname must be between 3 and 20 characters</div>';
                }
                elseif ( strlen ( $lastname ) < 3 || strlen( $lastname ) > 30) {
                $message .= '<div class="alert alert-danger" role="alert">Lastname must be between 3 and 30 characters</div>';
                }
                elseif ( strlen ( $email ) < 3 || strlen( $email ) > 50) {
                $message .= '<div class="alert alert-danger" role="alert">Email must be between 3 and 50 characters</div>';
                }
                elseif (!is_numeric ( $phoneno )) {
                $message .= '<div class="alert alert-danger" role="alert">Phone number should be numeric</div>';
                }
                elseif ( strlen ( $phoneno ) != 11) {
                $message .= '<div class="alert alert-danger" role="alert">Phone number should be 11 digits long</div>';
                }
                elseif ( strlen ( $address1 ) < 3 || strlen ( $address1 ) > 200) {
                $message .= '<div class="alert alert-danger" role="alert">Address must be between 3 and 200 characters</div>';
                }
                elseif ( strlen ( $address2 ) < 3 || strlen ( $address2 ) > 100) {
                $message .= '<div class="alert alert-danger" role="alert">Nearest bustop must be between 3 and 100 characters</div>';
                }
                elseif ( strlen ( $city ) < 3 || strlen ( $city ) > 50) {
                $message .= '<div class="alert alert-danger" role="alert">City must be between 3 and 50 characters</div>';
                }
                elseif ( strlen ( $menu ) < 3 || strlen ( $menu ) > 50) {
                $message .= '<div class="alert alert-danger" role="alert">Menu must be between 3 and 50 characters</div>';
                }
                elseif ( strlen ( $quantity ) < 1 || strlen ( $quantity ) > 4) {
                $message .= '<div class="alert alert-danger" role="alert">Address must be between 1 and 4 characters</div>';
                }
        else{
        $sql = "INSERT INTO orders(firstname , lastname, email,  
         gender, phoneno, address1, address2, city, state1, menu, quantity, order_status, order_date)
        VALUES('$firstname', 
                '$lastname',
                '$email',
                '$gender', 
                '$phoneno',
                '$address1',
                '$address2',
                '$city',
                '$state1',
                '$menu',
                '$quantity',
                '$order_status',
                 NOW())";
                $result = mysqli_query($conn , $sql);
        if($result){
        $message .= '<div class="alert alert-success" role="alert">
        Record Saved Successfully <button class="btn"><a href = "index.html">Home</a></button></div>';
        }
        else{
            $message .= '<div class="alert alert-danger" role="alert">
            Record not Saved ' . mysqli_error($conn) . '<button class="btn"><a href = "index.html">Home</a></button>
            </div>';
        
        }
        }
    }
 ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Page</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
                integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
                <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
                <script type="text/javascript" src = "validation.js"></script>
                <script src="jquery/jquery.min.js"></script>
                <script src="popper/popper.min.js"></script>
                <script src="js/bootstrap.js"></script> 
            </head>
<body>
<?php 
echo $message; 
?>  
</body>
</html>