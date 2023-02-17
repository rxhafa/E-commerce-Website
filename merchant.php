<?php  

session_start();

include("connection.php");
include("functions.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:/Users/rober/vendor/autoload.php';



function sendemail_verify($email, $verify_token)
{
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = 'robert13r123@gmail.com';

    $mail->Password = 'qaijoylqibphtfbw';

    $mail->SMTPSecure = "tls";

    $mail->Port = 587;

    $mail->setFrom('robert13r123@gmail.com', 'robert');

    $mail->addAddress($email, $email);

    $mail->isHTML(true);

    $mail->Subject = "Email verification from Skroutz";

    $email_template = " 
    <h2> You have registered at Skroutz </h2>
    <h5> Verify your email address by clicking here: </h5>
    <br>
    <a href='http://localhost/Business/verifymerchant-email.php?token=$verify_token'> Verification Link </a>
    ";
    
    $mail->Body = $email_template;
    $mail->send();
    //echo 'Message has been sent';
    

}



if(isset($_POST['register']))
{
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $verify_token = md5(rand());

    $store_name = $_POST['store_name'];
    $company_name = $_POST['company_name']; 
    $itemscategory = $_POST['itemscategory']; 
    $phone = $_POST['phone']; 
    $tax_id = $_POST['tax_id']; 


    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $city = $_POST['city'];
    $map = $_POST['map'];
    $picture_logo = $_POST['picture_logo'];


    // Check if email exists

    $check_email_query = "SELECT email FROM merchant WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);


    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status'] = "Email already Exists";
        header("Location: user_registration.php");
    }
    else
    {
        $Merchquery = "INSERT INTO merchant(storename, email, phone, companyname, itemscategory, taxId, password, verify_token, address, postal_code, city, map, logo) VALUES ('$store_name','$email', '$phone','$company_name','$itemscategory','$tax_id','$password','$verify_token', '$address', '$postal_code', '$city', '$map', '$picture_logo')";
        $query_run = mysqli_query($con, $Merchquery);

        if($query_run)
        {
            sendemail_verify("$email", "$verify_token");
            $_SESSION['status'] = "Successfull registration !! Please verify your email Address.";
        header("Location: user_registration.php");
        }
        else{
            $_SESSION['status'] = "Registration Failed";
        header("Location: user_registration.php");
        }
    }
}


?>


<html>
<head>
    <link rel="stylesheet" href="merchant.css">


      <!-- Alfa Slab One Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- Roboto Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    
</head>
<body>
    <nav class="navBar">
        <a class="Logo">
            <ul class="Logo">
            <li class="skroutz">skroutz </li>
            <li class="merchants"> merchants </li>
            </ul>
        </a>
        <ul class="buttons">
           <button> Become a partner </button>
           <button> Frequent questions </button>
           <button> Full Guide </button>
           <button> Price Catalog </button>
           <button class="sign" onclick="openConnect()">Connect </button>
        </ul>
    </nav>
    <div id="myConnect" class="connect">
        <div class="back" onclick="closeConnect()"></div>
        <div class="connect-content">
            <form>
            <input type="email" name="email" placeholder="Email">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button class="conec"> Connect </button>
            <p>Forgot my password </p>
</form>
        </div>
    </div>
    <script>
        
        function openConnect() {
        document.getElementById("myConnect").style.display = "block";
        }

        function closeConnect() {
        document.getElementById("myConnect").style.display = "none";
        }

        
        </script>

<div class="ad">
    <div class="pic">
    </div>
    <div class="box">
    <div class="whit">
    </div>

    </div>
    <h1 > Start Selling online at Skroutz </h1>
    <h2> The #1 marketplace in Azerbaijan! </h2>
    <button class="sign_up">Sign up here</button>
</div>




    <div class="registration">
        <H2> Are you interested in Joining us? Register here:</h2>
        <form method="POST">
        <div class="format">
        <p>Store Email</p> 
        <input type="text" name="email">
        </div>
        <div class="format">  
        <p>Password</p> 
        <input type="password" name="password">
        </div>
        <div class="format">
        <p>Store name </p>
        <input type="text" name="store_name">
        </div>
        <div class="format">
        <p>Business name </p> 
        <input type="text" name="company_name">
        </div>
        <div class="format">
        <p>Items Category</p> 
        <input type="text" name="itemscategory">
        </div>
        <div class="format">
        <p>Phone</p> 
        <input type="text" name="phone">
        </div>
        <div class="format">
        <p>Tax id</p>
        <input type="text" name="tax_id">
        </div>
        <div class="format">
        <p>Store Address</p>
        <input type="text" name="address">
        </div>
        <div class="format">
        <p>Postal Code</p> 
        <input type="text" name="postal_code">
        </div>
        <div class="format">
        <p>City</p> 
        <input type="text" name="city">
        </div>
        <div class="format">
        <p>Google map location</p> 
        <input type="text" name="map">
        </div>
        <div class="format">
        <p>Picture Logo</p><input type="text" name="picture_logo">
        </div>
        <div class="submission">
        <input class="submissions" type="submit" name="register" value="submit application">
        <p > check terms and conditions </p>
        </div>
        </form>
    </div>
</body>
</html>
