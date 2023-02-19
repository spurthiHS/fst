<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css" class="css">
    <title>Document</title>
    <style>
    .head111 {
        color: green;
        font-size: 13px;
    }
    form select {
        width: 20%;
        height: auto;
        border: none;
        outline: none;
        background: transparent;
        border-bottom: 2px solid black;
        display:block;
        font-size: 15px;
    }
    </style>
</head>
<body>
    <div class="box">
        <div class="a1">
            <div class="sidebar">
                <p>
                    A <br>B <br>c <br> <br>I <br>N <br>S <br>T <br>I <br>T <br>U <br>T <br>E
                </p>
            </div>
        </div>
        <div class="a2">
            <div class="abox">
                <div class="banner">
                </div>
                <div class="form_a">
                    <div class="logo">
                        <h3>branchUp</h3>
                 </div>
                    <div class="header">
                        <h3>Log-in</h3>
                    </div>
                    <div class="line"></div>
                    <form action="" method="post">
                        <div class="labalings">
                            <p>Username :</p>
                        </div>
                        <input type="text" name="uname" placeholder="Enter User-Name" id="uname">
                        <div class="labalings">
                            <p>Password :</p>
                        </div>
                        <input type="password" name="pass" placeholder="Enter Password" id="pass">
                        <div class="labalings">
                            <p>Unique Key :</p>
                        </div>
                        <input type="password" name="idno" placeholder="Enter User key" id="idno">
                        <select id="branch" name="select" placeholder="Select Either Professor or Student">
                            <option value=""> </option>
                            <option value="student">Student</option>
                            <option value="professor">Professor</option>
                        </select>
                        <input type="submit" value="Log-in">
                        <div class="message">
                            <?php
                            $con=mysqli_connect("localhost","root","","administrate");
                            if(!$con)
                            {
                                die(mysqli_connect_error());
                            }
                           
                            $select=$_POST['select'];
                            switch($select)
                            {
                                case "professor":
                                    if((!empty($_POST['uname']))&&(!empty($_POST['pass']))&&(!empty($_POST['idno'])))
                                    {
                                        $uname=$_POST['uname'];
                                        $pass=$_POST['pass'];
                                        $idno=$_POST['idno'];
                                        $sql="SELECT * FROM `rig` WHERE uname='".$uname."' AND idno='".$idno."' AND pass='".$pass."' limit 1 ;";                                 
                                        $run=mysqli_query($con,$sql);
                                        if(mysqli_num_rows($run)==1){
                                           header("location:console.html");
                                        }
                                        else
                                        {
                                            echo"the Password , username or an key is incorrect";
                                        }
                                   }
                                   break;

                                case "student":
                                    if((!empty($_POST['uname']))&&(!empty($_POST['pass']))&&(!empty($_POST['idno'])))
                                    {
                                        $uname=$_POST['uname'];
                                        $pass=$_POST['pass'];
                                        $idno=$_POST['idno'];
                                        $sql="SELECT * from student WHERE uname='".$uname."' AND pass='".$pass."' AND idno='".$idno."';";                                 
                                        $run=mysqli_query($con,$sql);
                                        if(mysqli_num_rows($run)==1){
                                           header("location:search.php");
                                        }
                                        else
                                        {
                                            echo"<br>the Password , username or an key is incorrect";
                                        }
                                   }  
                                   break;

                                default :
                                    echo"select Either Professor or Student";
                                    break;
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>