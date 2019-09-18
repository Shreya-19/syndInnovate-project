
<!DOCTYPE html>
<html>
<head>
    <title>Otp verification</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
            background-color: wheat;
            margin: 0px;
        }
        .mainhead{
            margin-top: 20px;
            font-size: 40px;
            font-family: "Franklin Gothic Medium";
            text-align: center;
            color: navy;
            background-color: orange;
        }
        .mainclass{
            padding-top: 20px;
            text-align: center;
            background-color: wheat;
        }
        .row{
            text-align: center;
        }
        label{
            font-size: 20px;
            font-family: Verdana;
        }
        img{
            width: 200px;
            height: 200px;
        }
        input{
            background-color: mintcream;
            padding: 8px;
            margin: 5px;
            width: 50%;
            text-align: center;
            font-size: 15px;
        }
        button{
            background-color: lightgreen;
            color: navy;
            height: 30px;
            width: 95px;
        }
    </style>
</head>
<body>
<div class="container">
    <hr>
    <div class="row">
        <div><img src="verify.png"></div>
        <div class="mainhead col-md-9 col-md-offset-2">VERIFY YOUR ACCOUNT</div>
        </div>
        <div class="mainclass col-md-9 col-md-offset-2">
        
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-9 form-group">
                        <input type="text" class="form-control" name="mobile" value="" maxlength="10" placeholder="Enter registered mobile number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 form-group">
                        <button type="submit" name="sendotp" class="btn btn-lg btn-success btn-block">Send OTP</button>
                    </div>
                </div>
            </form>

            <form method="POST" action="">
                <div class="row">
                    <div class="col-sm-9 form-group">
                        <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="6" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 form-group">
                        <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Verify</button>
                    </div>
                </div>
            </form>
            <?php
            session_start();
                
            if(isset($_POST['sendotp'])) {
                require('textlocal.class.php');
			
				$textlocal = new Textlocal(false, false, 'ezkN0yhTiDM-lXzCObfYscMHBaSoxYaS5bHZLakwuy');

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $phnno=$_POST['mobile'];
                $_SESSION['phoneno']=$phnno;
                $numbers = array($phnno);

				$sender = 'TXTLCL';
				$otp = mt_rand(100000, 999999);
				$message = "Hello " .$_SESSION['name']." Your User Id is " . $_SESSION['customerid'] . " and this is your OTP: " . $otp;

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "OTP successfully send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

			if(isset($_POST['verifyotp'])) { 
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
                    echo "Congratulation, Your mobile is verified.";
                    $connection=mysqli_connect('localhost','root')or die("Could not connect to the server");
                    $db=mysqli_select_db($connection,"syndicatehackathon")or die("Could not select database");
                    $phn=$_SESSION['phoneno'];
                    $id=$_SESSION['customerid'];
                    $query="UPDATE customer SET phoneNO='$phn' where customerid=$id ";                    
                    $result=mysqli_query($connection,$query)
                    or die("failed to query1 database ");
                    header("Location:login.php");
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
        </div>
    </div>
</body>
</html>