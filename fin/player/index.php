<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCS | Player's profile</title>
    <script defer src="https://kit.fontawesome.com/b8be333c62.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../logo-min.PNG">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="order.css">

    <style>
        .head-img {
            background-image: url('img/grp.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
            height: 60vh;
            width: 100%;
        }
        
        .head-img div {
            padding: 3vmin 5vmin;
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
        }
        
        .head-img div h1 {
            font-size: 12vh;
            font-weight: lighter;
        }
        
        .containe {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
        }
        
        .card {
            background-color: #fff;
            max-width: 16rem;
            width: 100%;
            overflow: hidden;
            margin: 20px;
            border-radius: 1rem;
            box-shadow: 0 0 1rem rgba(51, 51, 51, 0.2), 0 0 2rem rgba(51, 51, 51, 0.1);
        }
        
        .card__img-containe {
            position: relative;
        }
        
        .card__img {
            display: block;
            width: 16rem;
            height: 16rem;
            object-fit: cover;
            object-position: top;
            position: relative;
            z-index: 2;
            border-radius: 0% 0% 44% 56% / 75% 75% 25% 25%;
        }
        
        .card__img-underlay {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #349cfd, #fd1a55);
            background-size: cover;
            background-position: -5px -5px;
            border-radius: 0% 0% 44% 56% / 75% 75% 25% 25%;
            z-index: 0;
        }
        
        .card__content {
            padding: 1rem 1.5rem;
        }
        
        .card__icon {
            color: blue;
            margin-bottom: 0.4rem;
        }
        
        .card__title {
            font-size: 1.6rem;
            margin-bottom: 0.6rem;
        }
        
        .card__desc {
            font-size: 0.9rem;
            hyphens: auto;
            margin-bottom: 0.4rem;
        }
        
        .card__flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card_subtit {
            color: #555;
            font-style: italic;
        }
        
        .tab_div {
            padding: 6px 4px;
        }
        
        .tab_row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-content: center;
        }
        
        .tab_int,
        .tab_int p {
            display: inline-block;
        }
        
        .tab_ans,
        .tab_ans p {
            display: inline-block;
            font-weight: bold;
        }
    </style>

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
                        <div  onmouseover="noneall_nav()"onclick="window.location.assign('../how')" class="nav-item curpoi">
                            <div class="flex-row">
                                <p class="">How to</p>
                            </div>
                        </div>
                        <div onmouseover="noneall_nav()" onclick="window.location.assign('../player')" class="nav-item nav-acti curpoi">
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



        <div class="head-img flex-col">
            <div class="flex-col">
                <h1 class="tecenter white1">Players profile</h1>
            </div>
        </div>
        <br><br><br>
        <div class="containe">
            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/1.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>

                <div class="card__content">
                    <h3 class="card__title">Virat Kohil</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Batsmen</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 100</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>189</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>8257</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>28</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>43</p>
                            </div>
                        </div>

                    </div>


                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/2.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>

                <div class="card__content">
                    <h3 class="card__title">Yuvraj</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">All-rounder</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 75</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>86</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>3589</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>10</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>21</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/3.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>

                <div class="card__content">
                    <h3 class="card__title">Rahane</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Batsmen</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 85</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>158</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>5435</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>11</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>31</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/4.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Dhawan</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Batsmen</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 85</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>25</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>565</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/5.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Dhoni</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Wicket keeper</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 100</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>78</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>2573</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>3</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>19</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/6.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Axar</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Bowler</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 75</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>67</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>208</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/7.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Pandya</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">All-rounder</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 90</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>70</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>77</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/8.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Jadeja</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">All-rounder</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 90</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>16</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/9.png" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Kedar</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">All-rounder</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 75</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>111</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>675</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/10.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Ashwin</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Bowler</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 90</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>136</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>1914</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/11.png" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Umesh</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Bowler</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 80</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>296</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>9496</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>10</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>64</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/12.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Bumrah</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Bowler</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 100</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>73</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>1365</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>8</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/13.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Bhuwaneshwar</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">All-rounder</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 90</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>17</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>289</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/14.jpeg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Rohit</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Batsmen</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 100</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>304</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>8701</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>14</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>52</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card curpoi">
                <div class="card__img-containe">
                    <img src="img/15.jpg" alt="User" class="card__img">
                    <div class="card__img-underlay"></div>
                </div>
                <div class="card__content">
                    <h3 class="card__title">Karthik</h3>
                    <div class="tab_row">
                        <div class="tab_int">
                            <p class="card_subtit">Wicket keeper</p>
                        </div>
                        <div class="tab_ans">
                            <p>&#8377; 75</p>
                        </div>
                    </div><br>
                    <div class="tab_div">
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Matches</p>
                            </div>
                            <div class="tab_ans">
                                <p>11</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>Runs</p>
                            </div>
                            <div class="tab_ans">
                                <p>111</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>100's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="tab_row">
                            <div class="tab_int">
                                <p>50's</p>
                            </div>
                            <div class="tab_ans">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>


            </article>

        </div>
        <br><br><br><br>





        
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