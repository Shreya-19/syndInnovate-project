<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgentLogin</title>
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .navimg{
            width: 600px;
            height: 190px;
            float: left;
        }
        .navdivleft{
            width: 200px;
            height: 190px;
            background-color: orange;
            float: left;
        }
        .navdivleft, .navdivright{
            width: 200px;
            height: 190px;
            background-color: orange;
            float: left;
            margin: 70px;
            margin-top: 0px;
            text-align: center;
        }
        .formdiv{
            text-align: center;
            font-size: 25px;
            font-family: "Courier New";
        }
        .cap{
            border: 2px solid #111111;
            background-color: white;
            margin-left: 550px;
            margin-right: 550px;
            margin-top: 10px;
            margin-bottom: 10px;
            height: 40px;
        }
        button{
            margin-top: 10px;
            background-color: darkred;
            color: white;
            height: 30px;
            width: 95px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        .radio1{
            margin-right: 20px;
            font-family: Consolas;
        }
        .radio2{
            font-family: Consolas;
            margin-right: 20px;
        }
        .capimg{
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div>
    <div class="imgdiv">
        <div class="navdivleft">
            <h2>A<br>G<br>E<br>N<br>T</h2>
        </div>
        <img class="navimg" src="custagent.png">
        <div class="navdivright">
            <h3>C<br>U<br>S<br>T<br>O<br>M<br>E<br>R</h3>
        </div>
    </div>
    <div class="formdiv">
        <form method="POST" > 
            <div class="formdiv"><label>CUSTOMER/AGENT?</label><br>
                <span class="radio1"><input type="radio" name="category" value="Customer">Customer</span>
                <span class="radio2"><input type="radio" name="category" value="Agent">Agent</span></div>
            <div class="formdiv"><label>CUSTOMER/AGENT ID</label><br><input type="text" name='id'></div>
            <div class="formdiv"><label>PIN</label><br><input type="password" name='pass'></div>
            <div class="formdiv"><div><img class='capimg' src='captcha.php' /></div>
            <label>ENTER CAPTCHA AS SHOWN</label><br><input type="text" name='captcha'></div>
            <span><button type="submit" value="Proceed" name='Proceed'>PROCEED</button></span>
            <span><button type="button" value="Cancel"><a href="mainPage.html">CANCEL</a></button></span>
        </form>

        <?php
            session_start();
            if(isset($_POST['Proceed'])){
                $id=$_POST['id'];
                $pass=$_POST['pass'];
                $category=$_POST['category'];

                $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
                $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
                $query="";
                if($category=='Agent')
                    $query="SELECT * from agent where agentid='$id' and pass='$pass'";
                else
                    $query="SELECT * from customer where customerid='$id' and pass='$pass'";

                $result=mysqli_query($connection,$query)
                        or die("failed to query1 database ");
                $_SESSION['id']="";
                if($_POST['captcha']!=$_SESSION["captcha_code"]){
                    echo '<script type="text/javascript">alert("Invalid captcha code!!!")</script>';
                }
                else if(mysqli_num_rows($result)!=0&& $category=='Agent'){
                    $_SESSION['id']=$id;
                    header("Location:agentProfile.php");
                }else if(mysqli_num_rows($result)!=0&& $category=='Customer'){
                    $_SESSION['id']=$id;
                    header("Location:customerProfile.php");
                }else {
                    echo '<script type="text/javascript">alert("Invalid Id Or Password!!!")</script>';
                    
                }
                
            }
        ?>

    </div>
</div>
</body>
</html>