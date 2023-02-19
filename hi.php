<?php
            $servername="localhost";
            $username="root";
            $password="";

            $con=mysqli_connect($servername,$username,$password);
            if(!$con)
            {
                echo"You Are Not Connected <br>Please Connect to Server";
            }
            else{
                echo"You are Connected";
            }
            if((!empty($_POST['uname']))&&(!empty($_POST['pass']))&&(!empty($_POST['pno']))&&(!empty($_POST['epno']))&&(!empty($_POST['address']))&&(!empty($_POST['idno'])))
                {
                    $uname=$_POST['uname'];
                    $pass=$_POST['pass'];
                    $pno=$_POST['pno'];
                    $epno=$_POST['epno'];
                    $address=$_POST['address'];
                    $idno=$_POST['idno'];
                    $sql="INSERT INTO `register` (`uname`, `pass`, `pno`, `epno`, `address`, `idno`, `time`) VALUES ('$uname', '$pass', '$pno', '$epno', '$address', '$idno', current_timestamp());";
                    $run=mysqli_query($con,$sql);
                    if($run){
                        echo "User is Successfully Registered";
                    }
                    else{
                        echo"you are not registered";
                    }
                }
            ?>
<span class="material-symbols-outlined">
supervised_user_circle
</span>
