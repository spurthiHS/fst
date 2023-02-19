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
            <input type="text" placeholder="Enter your USN" name="uname" id="usn">

            <select name="iano" id="iano" placeholder="Select IA">
                <option value="1st">1st IA</option>
                <option value="2nd">2nd IA</option>
                <option value="3rd">3rd IA</option>
            </select>
            
            <input type="text" placeholder="Enter the Subject 1 Marks" name="sub1" >

            <input type="text" placeholder="Enter the Subject 2 Marks" name="sub2" >

            <input type="text" placeholder="Enter the Subject 3 Marks" name="sub3" >

            <input type="text" placeholder="Enter the Subject 4 Marks" name="sub4" >

            <input type="text" placeholder="Enter the Subject 5 Marks" name="sub5" >

            <input type="text" placeholder="Enter the Subject 6 Marks" name="sub6" >

            <input type="text" placeholder="Enter the Subject 7 Marks" name="sub7" >

            <input type="text" placeholder="Enter the Subject 8 Marks" name="sub8" >

            <input type="text" placeholder="Enter the Subject 9 Marks" name="sub9" >

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
            if((!empty($_POST['uname']))&&(!empty($_POST['iano']))&&(!empty($_POST['sub1']))&&(!empty($_POST['sub2']))&&(!empty($_POST['sub3']))&&(!empty($_POST['sub4']))&&(!empty($_POST['sub5'])))
            {
                if($_POST['pass']==$_POST['rpass'])
                {
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