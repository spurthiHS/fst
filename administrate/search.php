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
    <link rel="stylesheet" href="../css/search.css" class="css">
    <title>Document</title>

</head>

<body>
    <div class="nav">
        <div class="logo">
            branchUp
        </div>
        <div class="navs">
            <a href="console.html">
                <button><span class="material-symbols-outlined">
                        chevron_left
                    </span>
                </button>
            </a>
        </div>
    </div>
    <div class="banner">
        <h3>Quick Search</h3>
        <div class="bnline"></div>
        <form action="#" method="post">
            <input type="text" placeholder="Search the Student Name/id number or phone number" name="name" id="name">
            <input type="radio" value="professor" name="professor" id="professor">
            Check The Radio Button if you want to search the professor.
            <input type="submit" value="Search">
        </form>
    </div>
    <?php
    $con=mysqli_connect("localhost","root","","administrate");
    if(!$con)
    {
        die(mysqli_connect_error());
    }
    else
    {
        $select=$_POST['professor'];
        switch($select)
        {
            case "professor":
                if(!empty($_POST['name'])){
                    $search=$_POST['name'];
                    $sql="SELECT * FROM `rig` WHERE uname='$search' OR pno='$search' OR idno='$search' LIMIT 1;";
                    $run=$con->query($sql);
                    if($run->num_rows>0){
                        while($row=$run->fetch_assoc()){
                            echo'<div class="phphead">'.$row["uname"].
                            '</div><div class="phpline"></div><div class="phplist"><li><span>Phone No</span> :'.$row["pno"].
                            '</li><li><span>Email</span> :'.$row["email"].
                            '</li><li><span>Address</span> :'.$row["address"].
                            '</li></div>';
                        }
                    }
                }
                break;
            default :
            break;
        }
        if((empty($_POST['professor']))&&(!empty($_POST['name'])))
        {
        $search=$_POST['name'];
        $sql="SELECT * FROM student WHERE uname='$search' OR pno='$search' OR idno='$search' LIMIT 1;";
        $run=$con->query($sql);
        if($run->num_rows>0)
        {
            while($row=$run->fetch_assoc())
            {
                echo'<div class="phpbanner"><div class="phpf1"><p>'.$row["uname"].'</p></div><div class="phpf2">
                Student Information<div class="f2line"></div>
                <li><span>Joining Year </span>:'.$row["joiningyear"].'.</li>
                <li><span>USN </span>:'.$row["usn"].'.</li>
                <li><span>id Number </span>:'.$row["idno"].'.</li>
                <li><span>Course Eligibility Education </span>:'.$row["pd"].'.</li>
                <li><span>Previous Course Eligibility Result </span>:'.$row["per"].'.</li>
                <li><span>Contact Number </span>:'.$row["pno"].'.</li>
                <li><span>Email </span>:'.$row["email"].'.</li>
                </div>
                </div>';
            }
        }
      }
    }
    ?>
</body>
</html>