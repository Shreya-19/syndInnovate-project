
        <?php 
                if(isset($_POST['Proceed'])&&strcmp($_POST['pass1'],$_POST['pass2'])==0)
                {
                    $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
                    $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
                    $desig=$_POST['desig'];
                    $dob=$_POST['dob'];
                    $idproof=$_POST['idproof'];
                    $idnum=$_POST['idnumber'];
                    //$phn=$_POST['phn'];
                    $email=$_POST['email'];
                    $address=$_POST['house']." ".$_POST['city']." ".$_POST['state']." ".$_POST['country'];
                    $pass=$_POST['pass1'];
                    $query="";
                    $customerid=0;

                    session_start();
                    
                    //$_SESSION['phn']=array($phn);
                    //$_SESSION['sendotp']=true;
                        while(true){
                            $customerid=rand(1000000,9999999);
                            $q1="SELECT * FROM customer WHERE customerid='$customerid'";
                            $result=mysqli_query($connection,$q1)
                                or die("failed to query1 database ");
                            if(mysqli_num_rows($result)==0)
                            {   
                                    break;
                            }
                        }
                        $_SESSION['customerid']=$customerid;
                        $_SESSION['name']=$fname." ".$lname; 
                    
                        $query="INSERT INTO customer(customerid, fname, lname, mr_ms, dob, id_proof_type, 
                        id_proof_number, address, email, pass) 
                        VALUES ('$customerid', '$fname', '$lname', '$desig', '$dob', '$idproof', '$idnum'
                            , '$address', '$email', '$pass') ";
                        
                        $result=mysqli_query($connection,$query)
                        or die("failed to query1 database ");

                        header("Location:otp.php");
                    
                }else if(isset($_POST['Proceed'])&&strcmp($_POST['pass1'],$_POST['pass2'])!=0){
                    echo '<script type="text/javascript">alert("Password do not match!!!")</script>';
                }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .head{
            font-family: "Fira Code Retina";
            font-size: 40px;
            margin-top: 20px;
            color: orangered;
        }
        .hr1{
            float: left;
        }
        .hr2{
            float: right;
        }
        .hr1, .hr2{
            color: black;
            width: 400px;
        }
        .content{
            border: 2px solid black;
            margin-left: 50px;
            margin-right: 50px;
        }
        form{
            font-family: Verdana;
            text-align: center;
        }
        .left{
            float: left;
            background-color: white;
        }
        .right{
            background-color: orange;
            padding-left: 600px;
        }
        .left, .right{
            height: 450px;
            text-align: center;
            width: 576px;
            margin-top: 0px;
        }
        .heading{
            margin-top: 10px;
        }
        h2{
            margin-top: 0px;
            padding-top: 10px;
        }
        .heads{
            margin-top: 10px;
            font-family: "Franklin Gothic Medium";
        }
        .insidedivs{
            margin-top: 10px;
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
    <div class="head">
        <b><hr class="hr1">REGISTERATION FORM<hr class="hr2"></b>
    </div>
    <div class="content">
        <form method="POST">
            <div class="left"><span class="heading"><h2>PERSONAL INFO</h2></span><br>
                <div class="heads"><div><label>First Name</label><input type="text" name='fname' required></div>
                    <div class="insidedivs"><label>Last Name</label><input type="text" name='lname' required></div>
                </div>
                <div class="heads"><label>Password</label><input type="password"  name='pass1'placeholder="Enter password" required></div>
                <div class="heads"><label>Confirm Password</label><input type="password" name='pass2' placeholder="Enter password again" required></div>
               
                <div class="heads"><label>Designation</label>
                    <select name='desig' required>
                        <option value="Mr">Mr.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Ms">Ms.</option>
                    </select>
                </div>
                <div class="heads"><label>Date of Birth</label><input type="text" placeholder="yyyy-mm-dd" name='dob' required></div>
                <div class="heads"><label>ID Proof</label>
                    <select name='idproof' required>
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Pan Card">Pan Card</option>
                        <option value="Voter Id">Voter Id</option>
                    </select>
                    <input type="text" placeholder="Enter Number" name='idnumber' required>
                </div>
            </div>

            <div class="right"><span class="heading"><h2>CONTACT INFO</h2></span><br>
                <!-- <div class="heads"><label>Phone No</label>
                    <select   >
                        <option value="+91">+91</option>
                        <option value="+08">+08</option>
                    </select>
                    <input type="number" minlength="10" maxlength="10" name='phn' required>
                </div>-->
                <div class="heads"><label>EMail ID</label><input type="email" name='email'></div> 
                <div class="heads">
                    <div><label>Street/ House No.</label><input type="text" name='house' required></div>
                    <div class="insidedivs"><label>City</label><input type="text" name='city' required></div>
                    <div class="insidedivs"><label>State</label><input type="text" name='state' required></div>
                    <div class="insidedivs"><label>Country</label><input type="text" name='country' required></div>
                </div>
            </div>
            <span><button type="submit" value="Proceed" name='Proceed'>PROCEED</button></span>
            <span><button type="button" value="Cancel" name='Cancel'><a href="mainPage.html">CANCEL</a></button></span>
        </form>
    </div>
</div>
</body>
</html>