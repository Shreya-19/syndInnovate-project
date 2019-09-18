<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Login</title>
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .imgdiv{
            float: left;
        }
        .rightdiv{
            padding-left: 650px;
            padding-top: 20px;
            font-size: 50px;
        }
        .logo{
            margin-top: 60px;
            margin-left: 100px;
        }
        h2{
            margin-bottom: 20px;
        }
        h5{
            margin: 0px;
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
<div class="maindiv">
    <div class="imgdiv">
        <img class="logo" src="partiallogo.png">
    </div>
    <div class="rightdiv">
        <h2>Have an agent referral Id ?<br></h2>
        <h5>Enter to get extra benefits!<br></h5>
        <form  method="POST">
            <span><input type="text" placeholder="        Enter 7 digit code here" minlength="7" maxlength="7" name='refid'><br></span>
            <span><button type="submit" value="Skip"><a href="register.php">SKIP</a></button></span>
            <span><button type="submit" name="Proceed" value="Proceed">PROCEED</a></button></span>
            <span><button type="button" value="Cancel"><a href="mainPage.html">CANCEL</a></button></span>
        </form>
            <?php
                $status='false';
                if(isset($_POST['Proceed']))
                {
                    $id=$_POST['refid'];
                    $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
                    $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
                    $query="SELECT * from agent where referral_id='$id'";
                    $result=mysqli_query($connection,$query)
                            or die("failed to query1 database ");
                    if(mysqli_num_rows($result)!=0)
                    {
                        $row=mysqli_fetch_array($result);
                        $points=$row['points']+100;
                        $query="UPDATE agent set points='$points' where referral_id='$id'";
                        $result=mysqli_query($connection,$query)
                                                    or die("failed to query2 database");
                        $status='ok';
                    }
                    
                    if($status=='ok'){
                        header("Location:register.php");
                    }else{
                        echo '<script type="text/javascript">alert("Invalid Id!!!")</script>';
                        //header("Location:customerLogin.php");
                    }
                }

            ?>


    </div>
</div>
</body>
</html>