<?php
    $row=array();
    session_start();
    $id=$_SESSION['id'];
    $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
    $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
    $query="SELECT * from customer where customerid='$id'";
    $result=mysqli_query($connection,$query)
            or die("failed to query1 database ");
    $row=mysqli_fetch_array($result);
    session_abort();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customerProfile</title>
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .vertical-menu{
            width: 260px;
            background-color: orange;
            color: white;
            font-size: 20px;
            float: left;
            padding-bottom: 336px;
        }
        .adimg{
            width: 80px;
            height: 80px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 60%;
        }
        .tagline{
            height: 100px;
            background-color: black;
        }
        .imgdiv{
            float: left;
        }
        .username{
            padding-top: 40px;
            padding-left: 100px;
        }
        .nav-content div{
            margin: 10px;
            display: block;
        }
        .rights{
            padding-right: 20px;
            text-align: center;
        }
        .content-div{
            margin-left: 280px;
            display: block;
        }
        .div1{
            padding-top: 40px;
        }
        .div1, .div2{
            display: flex;
        }
        .div2{
            padding-top: 50px;
        }
        .images{
            width: 120px;
            height: 120px;
            padding: 15px;
            padding-left: 80px;
        }
        .titles1, .titles3, .titles4{
            padding-left: 80px;
        }
        .titles2{
            padding-left: 50px;
        }
        .titles5{
            padding-left: 70px;
        }
        .titles6{
            padding-left: 60px;
        }
    </style>
</head>
<body>
<div>
    <div class="vertical-menu">
        <div class="tagline">
            <div class="imgdiv"><img class="adimg" src="customerimage.png"></div>
            <div class="username"><?php echo $row['mr_ms']." ".$row['fname']." ".$row['lname'] ;?></div>
        </div>
        <div class="nav-content">
            <div id="designation" class="rights">Hello, Customer!</div>
            <div id="id" class="rights">Customer ID:<?php echo $row['customerid'];?></div>
            <div id="mail" class="rights"><?php echo $row['email'];?></div>
            <div id="mobile" class="rights">+91 <?php echo " ".$row['phoneNO'];?></div>
            <div id="dob" class="rights"><?php echo $row['dob'];?></div>
        </div>
    </div>
    <div class="content-div">
        <div class="div1">
            <div>
                <div><img class="images" src="cards.png"><br></div>
                <div class="titles1">MANAGE CARDS</div>
            </div>
            <div>
                <div><img class="images" src="airtickets.png"><br></div>
                <div class="titles5">BOOK AIR TICKETS</div>
            </div>
            <div>
                <div><img class="images" src="movietickets.png"><br></div>
                <div class="titles2">BOOK MOVIE TICKETS</div>
            </div>
            <div>
                <div><img class="images" src="notifics.png"><br></div>
                <div class="titles4">NOTIFICATIONS</div>
            </div>
        </div>
        <div class="div2">
            <div>
                <div><img class="images" src="passbook.png"><br></div>
                <div class="titles3">VIEW PASSBOOK</div>
            </div>
            <div>
                <div><img class="images" src="offers.png"><br></div>
                <div class="titles6">SYNDICATE OFFERS</div>
            </div>
            <div>
                <div><img class="images" src="statement.png"><br></div>
                <div class="titles2">ACCOUNT STATEMENT</div>
            </div>
            <div>
                <div><img class="images" src="loan.png"><br></div>
                <div class="titles6">PERSONAL LOAN</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>