<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view top agents</title>
    <style>
        body{
            background-color: white;
            margin: 0px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        .vertical-menu{
            width: 260px;
            background-color: orange;
            color: white;
            font-size: 20px;
            float: left;
            padding-bottom: 400px;
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
        .adminname{
            padding-top: 40px;
            padding-left: 100px;
        }
        .nav-content div{
            margin: 10px;
            display: block;
        }
        .nav-content a:hover{
            background-color: #111111;
        }
        .content-div{
            margin-left: 280px;
            display: flex;
        }
        .leveldivs{
            background-color: white;
            margin: 5px;
            margin-right: 100px;
        }
        .names{
            font-size: 20px;
            font-family: "Courier New";
            background-color: #111111;
            color: white;
        }
        .namesdivs{
            display: flex;
            font-size: 20px;
        }
        .name-div{
            width: 150px;
            padding: 5px;
        }
        .small{
            margin: 5px;
            width: 15px;
            height: 15px;
            padding-right: 5px;
        }
        .img-div{
            margin-right: 10px;
            display: inline-flex;
        }
    </style>
</head>
<body>
<div>
    <div class="vertical-menu">
        <div class="tagline">
            <div class="imgdiv"><img class="adimg" src="adminimage.png"></div>
            <div class="adminname"><?php session_start();
             echo $_SESSION['admin_name'];?></div>
        </div>
        <div class="nav-content">
            <div><a href="#Level1">1.Level 1 agents (+500 leads)</a></div>
            <div><a href="#Level2">2.Level 2 agents (+200 leads)</a></div>
            <div><a href="#Level3">3.Level 3 agents (+100 leads)</a></div>
        </div>
    </div>
    <div class="content-div">
        <div>
            <a class="names" name="Level1">Level 1 Agents</a>
            <div class="leveldivs">
                <div class="namesdivs">
                    <div class="name-div">Ishan Awasthi</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Kartik Gupta</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Riya Goenka</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Rahul Fernandes</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Saurabh Malik</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Vedika Gupta</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                
            </div>
        </div>

        <div>
            <a class="names" name="Level2">Level 2 Agents</a>
            <div class="leveldivs">
                <div class="namesdivs">
                    <div class="name-div">Divya Agarwal</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Kiara Kapoor</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Anuj Sharma</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Piyush Singh</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Kritika Gautam</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Saurabh Chauhan</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Parul Saxena</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Ritik Kapoor</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
            </div>
        </div>

        <div>
            <a class="names" name="Level3">Level 3 Agents</a>
            <div class="leveldivs">
                <div class="namesdivs">
                    <div class="name-div">Tara Bhatia</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Ashish Gupta</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Gaurav Bansal</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Shivani Rastogi</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Priya Mehta</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Megha Bhardwaj</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Atul Singh</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Shivank Bansal</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Lavanya Gaur</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
                <div class="namesdivs">
                    <div class="name-div">Raghav Jain</div><div class="img-div"><img class="small" src="tick.png"><img class="small" src="star.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>