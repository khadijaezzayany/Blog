<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form class="form">
        <h2>CONTACT US</h2>
        <p type="Name:"><input placeholder="Write your name here.."></input></p>
        <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
        <button>Send Message</button>
    </form>


    <?php 
    
    $host="localhost";
    $user="root";
    $password="";
    $namedb="blog";

    $con=mysqli_connect($host,$user,$password,$namedb);

    if($con){
        echo"connected";
    }
    else{
        echo"no connected";
    }

    ?>

</body>

</html>