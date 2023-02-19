<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" hfref="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/register.css" class="css">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <div class="head">
            <h3>Register New User :</h3>
        </div>
        <form action="#" method="POST">
            <input type="text" placeholder="Enter your uname" name="uname" id="uname">

            <input type="text" placeholder="Enter the pass" name="pass" id="pass">

            <input type="text" placeholder="Enter the rpass" name="rpass" id="rpass">

            <input type="text" placeholder="address" name="address" id="address">

            <input type="text" placeholder="Enter the pno" name="pno" id="pno">

            <input type="text" placeholder="Enter the email" name="email" id="email">

            <input type="text" placeholder="Enter new id no" name="idno" id="idno">
            <div class="message">
            <?php
            $con=mysqli_connect("localhost","root","","administrate");
            if(!$con)
            {
                echo"You Are Not Connected <br>Please Connect to Server";
                die(mysqli_connect_error());
            }
            else{
                echo"You are Connected";
            }
            if((!empty($_POST['uname']))&&(!empty($_POST['pass']))&&(!empty($_POST['rpass']))&&(!empty($_POST['address']))&&(!empty($_POST['pno']))&&(!empty($_POST['email']))&&(!empty($_POST['idno'])))
            {
                if($_POST['pass']==$_POST['rpass'])
                {
                    $uname=$_POST['uname'];
                    $pass=$_POST['pass'];
                    $rpass=$_POST['rpass'];
                    $address=$_POST['address'];
                    $pno=$_POST['pno'];
                    $email=$_POST['email'];
                    $idno=$_POST['idno'];
                    $sql="INSERT INTO rig VALUES ('$uname', '$pass', '$rpass', '$address', '$pno', '$email', '$idno', current_timestamp())";
                    $run=mysqli_query($con,$sql);
                    if($run){
                        echo"<br>a new user is created";
                    }
                    else{
                        echo"<br>check all fields once";
                    }
                }
                else{
                    echo"<br>the Pass and Rpass should be same";
                }
            }
            else{
                echo"<br>all fields are required to be filled";
            }
        ?>
        </div>
        <input type="submit" value="Register">
        <a href="console.html"><button>Go Back</button></a>
        </form>
    </div>
</body>
</html>