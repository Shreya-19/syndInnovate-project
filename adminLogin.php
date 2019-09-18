<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminLogin</title>
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .imgdiv{
            float: left;
        }
        .welcome{
            font-size: 30px;
            font-family: Candara;
        }
        input{
            height: 30px;
            width: 200px;
        }
        button{
            background-color: darkred;
            color: white;
            height: 30px;
            width: 95px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
<div>
    <div class="imgdiv">
        <img id="imglogo" src="adminimg.png">
    </div>
    <div class="welcome">
        <h1>Syndi welcomes you admin!</h1>
        Login easy with your admin id and password.     
        <form method="POST">
            <span><input type="text" placeholder="          Enter admin id here" name='id' minlength="7" maxlength="7"><br></span>
            <span><input type="password" placeholder="         Enter password here" name='pass' ><br></span>
            <span><button type="submit" value="Proceed" name ='Proceed'>PROCEED</button></span>
            <span><button type="button" value="Cancel"><a href="mainPage.html">CANCEL</a></button></span>
        </form>
        
        <?php
        if(isset($_POST['Proceed']))
        {   session_start();
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
            $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
            $query="SELECT * from admin where adminid='$id' and pass='$pass'";
            $result=mysqli_query($connection,$query)
                    or die("failed to query1 database ");
            $_SESSION['adminid']=$id;
            if(mysqli_num_rows($result)!=0){
                header("Location:adminProfile.php");
            }else{
                echo '<script type="text/javascript">alert("Invalid Id Or Password!!!")</script>';
                
            }
        }

    ?>

    </div>
</div>
</body>
</html>