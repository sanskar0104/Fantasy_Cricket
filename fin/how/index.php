<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCS | How to</title>
    <script defer src="https://kit.fontawesome.com/b8be333c62.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../logo-min.PNG">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="abt.css">
</head>
<body>
<script>
        var grsl = document.getElementsByClassName("grsl");
        var current = 0;
        document.addEventListener('keydown', function(e) {
            switch (e.keyCode) {
                case 37:
                    goup();
                    break;
                case 39:
                    godown();
                    break;
                case 78:
                    document.getElementById("navbar").classList.toggle("disnon");
                    break;
            }
        });

        function godown() {
            if (current < (grsl.length - 1)) {
                current++;
                grsl[current].scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        function goup() {
            if (current > 0) {
                current--;
                grsl[current].scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
    <div id="navbar">
        <div class="flex-row nav-bar">
            <div class="right">
                <div class="img curpoi" onclick="window.location.assign('../home')"><img class="curpoi" src="../logo.PNG" alt=""></div>
            </div>
            <div class="left">
                <div class="disp-lap-nav">
                    <div class="flex-row width-fit">
                        <div  onmouseover="noneall_nav()"onclick="window.location.assign('../home')" class="nav-item  curpoi">
                            <div class="flex-row">
                                <p class="">Home</p>
                            </div>
                        </div>
                        <div  onmouseover="noneall_nav()"onclick="window.location.assign('../how')" class="nav-item nav-acti curpoi">
                            <div class="flex-row">
                                <p class="">How to</p>
                            </div>
                        </div>
                        <div onmouseover="noneall_nav()" onclick="window.location.assign('../player')" class="nav-item curpoi">
                            <div class="flex-row">
                                <p class="">Players profile</p>
                            </div>
                        </div>
            
                        <div onmouseover="visible_nav(0)" class="nav-item  curpoi">
                            <div class="flex-row"><p id="varUN" class="">Login
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  class="mega-menu disp-lap-nav">

            <div  class=" nav-drop-down">
                <div id="drpdw" class="disnon">
                <div class="sam-nav">
                    <div class="details comp">
                        <div >
                            <p id="varFN" class="varF"></p>
                        </div>
                       <div>
                        <p id="varEM" class="varE"></p>
                        </div>

                    </div>
                    <div class="logout comp"> 
                    <div ><p id="lout"><a  href="../logout.php">logout</a></p>
                    </div>
                    </div>
                </div></div>
            </div>
        </div>
    </div>


    <div class="body-div" onmouseover="noneall_nav()">
        <div id="contentbx"class="contentbx flex-row">
            <form  autocomplete="off"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="contan">
                    <h2 class="black1 it-log">Login</h2>
                    <h2 class="black1 it-reg disnon">Registration</h2>
                    <br>
                    <label class="container">Login
                    <input type="radio" value="login" checked="checked" name="type" onchange="switchLaR()">
                    <span class="checkmark pad-sid"></span>
                    </label>
                    <label class="container">Registration
                    <input type="radio" value="registration" name="type" onchange="switchLaR()">
                    <span class="checkmark"></span>
                    </label>
                    <br>
                    <br>
                    <div class="inputbx ">
                        <input class="form it-reg disnon" id="username" type="text" name="username" placeholder="Enter User name" spellcheck="false" autocomplete="off">
                        <input class="form it-reg disnon" id="fullname" type="text" name="fullname" placeholder="Enter Full name" spellcheck="false" autocomplete="off">
                        <input class="form" id="E-Mail" type="text" name="E-Mail" placeholder="Enter E-Mail" spellcheck="false" autocomplete="off" required="">
                        <input class="form" id="password" type="password" name="pword" placeholder="Enter Password" spellcheck="false" autocomplete="off" required="">

                    </div>
                </div>
                <div><button class="buto-1 curpoi" style="border:none;"  type="submit" name="submit"><h2 class="tecenter white1 curpoi">Submit</h2> </button>
                </div>
            </form>
        </div>




        <div class="abt-img-1 flex-col">
            <div class="flex-col">
                <h1 class="tecenter white1">How to</h1>
            </div>
        </div>
        <div class="flex-col paddiv5vw">
            <div class="flex-row">
                <div class="inline">
                    <h1 class="tecenter">Team selection</h1>
                    <div class="h-lin"></div>
                </div>
            </div>
            <br><br>
            <div class="mis-text">
                <h3 class="tecenter  telight">You create a team consisting of 11 players from the teams in action in the match. You need to select any 11 players from the given list of batsmen, bowlers, all-rounders, wicket keepers.</h3>
            </div>
        </div>
        <div class="abt-img-2 flex-col ">
            <div class="flex-row grp">
                <div class="left white1">
                    <div class="flex-row">
                        <div class="inline">
                            <h1 class="tecenter">Budget Restriction</h1>
                            <div class="ph-lin"></div>
                        </div>
                    </div>
                </div>
                <div class="right white1 telight">
                    <div class="grp-v-line">
                        <h4 class="telight">There is a budget limitation, and you can select any 11 players irrespective of their teams. You can create teams for future matches that are open for team selection.</h4>
                        <div class="lv-lin"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-col paddiv5vw">
            <div class="flex-row">
                <div class="inline">
                    <h1 class="tecenter">Team management</h1>
                    <div class="h-lin"></div>
                </div>
            </div>
            <br><br>
            <div class="mis-text">
                <h3 class="tecenter telight">Unlimited changes can be made to your team before the deadline of the match.</h3>
            </div>
        </div>



        <div class="abt-img-3 flex-col ">
            <div class="flex-row grp">
                <div class="left white1">
                    <div class="flex-row">
                        <div class="inline">
                            <h1 class="tecenter">Deadlines</h1>
                            <div class="ph-lin"></div>
                        </div>
                    </div>
                </div>
                <div class="right white1 telight">
                    <div class="grp-v-line">
                        <h4 class="telight">Team selection will be closed at the scheduled start of the match.</h4>
                        <div class="lv-lin"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex-col paddiv5vw">
            <div class="flex-row">
                <div class="inline">
                    <h1 class="tecenter">Live matches</h1>
                    <div class="h-lin"></div>
                </div>
            </div>
            <br><br>
            <div class="mis-text">
                <h3 class="tecenter telight">Once the match is live, you will be able to see your selected players score points depending on the performance.</h3>
            </div>
        </div>


        <div class="abt-img-4 flex-col ">
            <div class="flex-row grp">
                <div class="left white1">
                    <div class="flex-row">
                        <div class="inline">
                            <h1 class="tecenter">Point scoring</h1>
                            <div class="ph-lin"></div>
                        </div>
                    </div>

                </div>
                <div class="right white1 telight">
                    <div class="grp-v-line">
                        <h4 class="telight">During the tournament, your players will be allocated points based on their performance. Once the points are calculated after an hour at the end of the match, you will be able to see your total score for the match depending on
                            your selected player’s performance.
                        </h4>
                        <div class="lv-lin"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex-col paddiv5vw">
            <div class="flex-row">
                <div class="inline">
                    <h1 class="tecenter">Scoring scheme</h1>
                    <div class="h-lin"></div>
                </div>
            </div>
            <br>
            <div class="mis-text">
                <h2 class="tebold">Batting</h2>
                <ul style="font-size: 1.17em;">
                    <li>1 point for 2 runs scored</li>
                    <li>Additional 7 points for half century</li>
                    <li>Additional 10 points for century</li>
                    <li>3 points for strike rate (runs/balls faced) of 80-100</li>
                    <li>Additional 5 points for strike rate > 100</li>
                    <li>2 point for hitting a boundary (four) and 3 points for over boundary (six)</li>
                </ul>
                <br>
                <h2 class="tebold">Bowling</h2>
                <ul style="font-size: 1.17em;">

                    <li>10 points for each wicket</li>
                    <li>Additional 5 points for three wickets per innings</li>
                    <li>Additional 10 points for 5 wickets or more in innings</li>
                    <li>4 points for economy rate (runs given per over) between 3.5 and 4.5</li>
                    <li>7 points for economy rate between 2 and 3.5</li>
                    <li>10 points for economy rate less than 2</li>
                </ul>
                <br>
                <h2 class="tebold">Fielding </h2>
                <ul style="font-size: 1.17em;">

                    <li>8 points each for catch/stumping/run out </li>
                </ul>
            </div>
        </div>





        
        <div class="foot-img grsl flex-col">
            <div class="bg">
                <div class="foot-grp">
                    <div class="foot-left">
                        <div><h1 class="thank">THANK YOU</h1>
                    <h2 class="tecenter">None of the codes are copied. <br> But some inspirations led us to this project.</h2></div>
                    </div>        
                    <div class="foot-right">
                        <div class="foot-title">
                            <div class="inline">
                                <h1 class="tecenter">Team Members</h1>
                                <div class="h-lin"></div>
                            </div>
                        </div>
                               <div class="teleft"> <h2 class="curpoi">Rohit</h2>
                                <h2 class="curpoi">Nirvan</h2>
                                <h2 class="curpoi">Sanskar</h2>
                                <h2 class="curpoi">Pranay</h2></div>
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>



        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up"></i></button>
        <script>
            function switchLaR() {
                getlog = document.getElementsByClassName("it-log");
                getreg = document.getElementsByClassName("it-reg");
                sel = document.querySelector('input[name="type"]:checked').value;
                console.log(sel);
                if (sel == "login") {
                    for (var i = 0; i < getlog.length; i++) {
                        getlog[i].classList.remove("disnon");
                    }
                    for (var i = 0; i < getreg.length; i++) {
                        getreg[i].classList.add("disnon");
                    }
                }
                if (sel == "registration") {
                    for (var i = 0; i < getlog.length; i++) {
                        getlog[i].classList.add("disnon");
                    }
                    for (var i = 0; i < getreg.length; i++) {
                        getreg[i].classList.remove("disnon");
                    }
                }

            }


            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                scrollFunction();
                noneall_nav();
                var currentScrollPos = window.pageYOffset;
                if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
                    if (prevScrollpos > currentScrollPos) {
                        document.getElementById("navbar").style.top = "0px";
                    } else {
                        document.getElementById("navbar").style.top = "-65px";
                    }
                    prevScrollpos = currentScrollPos;
                } else {
                    document.getElementById("navbar").style.top = "0px";
                }
            }
            var mybutton = document.getElementById("myBtn");


            function scrollFunction() {
                if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            
            function noneall_nav() {
                var cla = document.getElementsByClassName("nav-drop-down");
                for (var i = 0; i < cla.length; i++) {
                    cla[i].style.display = "none";
                }
            }

            function visible_nav() {
                var cla = document.getElementsByClassName("nav-drop-down");
                cla[0].style.display = "block";
            }

        </script>
        
        <?php 
    echo"<script>console.log(\"open php\")</script>";
    $server="localhost";
    $username="root";
    $password="";
    $DB="reeg";
    $con=mysqli_connect($server,$username,$password,$DB);
    if(!$con)
    {die("connection to this database failed due to". mysqli_connect_error());}
    else{echo"<script>console.log(\"connection estab\")</script>";
        if(isset($_SESSION['userName'])){
            echo "<script>document.getElementById(\"contentbx\").classList.add(\"disnon\");</script>";
            $us=$_SESSION['userName'];
            $fn=$_SESSION['fullName'];
            $em=$_SESSION['eMail'];
                        echo "<script>document.getElementById(\"varUN\").innerHTML ='$us';</script>";
                        echo "<script>document.getElementById(\"varFN\").innerHTML ='$fn';</script>";
                        echo "<script>document.getElementById(\"varEM\").innerHTML ='$em';</script>";
                        echo "<script>document.getElementById(\"drpdw\").classList.remove(\"disnon\");</script>";
                        
                    }  else{
        if (isset($_POST['submit'])) {
            if($_POST['type']=="login"){
                echo"<script>console.log(\"submit open\")</script>";
                $email=$_POST['E-Mail'];
                $email=strtolower("$email");
                $pword=$_POST['pword'];
                $email_search = "SELECT * FROM `regi` where eMail='$email' ";
                $query = mysqli_query($con,$email_search);
                echo"<script>console.log(\"query done\")</script>";
                if(mysqli_num_rows($query)>0){
                    $email_pass = mysqli_fetch_assoc($query);
                    $db_pass = $email_pass['passWord'];
                    $_SESSION['userName']=$email_pass['userName'];
                    $_SESSION['fullName']=$email_pass['fullName'];
                    $_SESSION['eMail']=$email_pass['eMail'];
                    if($pword==$db_pass){
                        echo"<script>console.log(\"password match\")</script>";
                        echo"<script>document.getElementById(\"contentbx\").classList.add(\"disnon\");</script>";
                        $us=$_SESSION['userName'];
                        $fn=$_SESSION['fullName'];
                        $em=$_SESSION['eMail'];
                        echo "<script>document.getElementById(\"varUN\").innerHTML ='$us';</script>";
                        echo "<script>document.getElementById(\"varFN\").innerHTML ='$fn';</script>";
                        echo "<script>document.getElementById(\"varEM\").innerHTML ='$em';</script>";
                        echo "<script>document.getElementById(\"drpdw\").classList.remove(\"disnon\");</script>";
                        
                    }
                    else{
                        echo "<script>alert(\"Incorrect credentials\")</script>";
                    }
                }
                else{
                    echo "<script>alert(\"E-mail does not exist\")</script>";
                }
            }
            else if($_POST['type']=="registration"  && (!(isset($_SESSION['userName'])))){
                echo"<script>console.log(\"regis open\")</script>";
                $id=$_POST['username'];
                $id=strtoupper("$id");
                $name=$_POST['fullname'];
                $email=$_POST['E-Mail'];
                $email=strtolower("$email");
                $pword=$_POST['pword'];
               
                $email_search = "SELECT * FROM `regi` where eMail='$email' or userName='$id' ";
                $query = mysqli_query($con,$email_search);
                $email_pass = mysqli_fetch_assoc($query);
                if ($email_pass) { 
                    if ($email_pass['eMail'] == $email) {
                        echo "<script>alert(\"E-mail already exist\")</script>";
                    }
                    if ($email_pass['userName'] == $id) {
                        echo "<script>alert(\"Username already exist\")</script>";
                    }
                } else{

                 
                $sql = "INSERT INTO regi (`userName`, `fullName`, `eMail`, `passWord`) VALUES
                ('$id', '$name', '$email', '$pword');";
                mysqli_query($con, $sql);


                $signup= "SELECT * FROM `regi` where eMail='$email' and passWord ='$pword' ";
                $result = mysqli_query($con,$signup);
                if( mysqli_num_rows($result)>0){
                    $signup_pass=mysqli_fetch_assoc($result);
                    $db_pass = $signup_pass['passWord'];
                    $_SESSION['userName']=$signup_pass['userName'];
                    $_SESSION['fullName']=$signup_pass['fullName'];
                    $_SESSION['eMail']=$signup_pass['eMail'];
                    if($pword==$db_pass){
                        echo"<script>console.log(\"password match\")</script>";
                        echo"<script>document.getElementById(\"contentbx\").classList.add(\"disnon\");</script>";
                        $us=$_SESSION['userName'];
                        $fn=$_SESSION['fullName'];
                        $em=$_SESSION['eMail'];
                        echo "<script>document.getElementById(\"varUN\").innerHTML ='$us';</script>";
                        echo "<script>document.getElementById(\"varFN\").innerHTML ='$fn';</script>";
                        echo "<script>document.getElementById(\"varEM\").innerHTML ='$em';</script>";
                        echo "<script>document.getElementById(\"drpdw\").classList.remove(\"disnon\");</script>";
                        
                    }

                }
            }
                
            }
        }
    }
} 
?>


</body>


</html>