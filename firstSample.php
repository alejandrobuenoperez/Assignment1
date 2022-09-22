<?php
    session_start();
    $fileName = "";
    $jsonContent="";
    if(isset($_SESSION["fileName"])){
        $fileName = $_SESSION["fileName"];
    }else{
        $fileName="Ass2News.json";
    }
    $jsonContent = file_get_contents("NewsText/{$fileName}");
    $array = json_decode($jsonContent, true);
    ?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .small2{
                background-image: url('<?php echo $array["news"][1]["imgurl"];?>');
                background-size: 350px 280px;
            }
            .small3{
                background-image: url('<?php echo $array["news"][2]["imgurl"];?>');
                background-size: 350px 280px;
            }
        </style>
        <title>Assigment 1</title>
        <link rel="stylesheet" href="Styles.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="Logo">
                <img class="imgLogo" src="./Images/NASA_logo.svg.png">
            </div>
            <div class = "Menus">
                <div class="Row1">
                    <h2>Missions</h2>
                    <h2>Galeries</h2>
                    <h2>Nasa TV</h2>
                    <h2>Follow NASA</h2>
                    <h2>Downloads</h2>
                    <h2>About</h2>
                    <h2 class="last">NASA Audiences</h2>
                    <div class="searchBar">
                        <input type="text" placeholder="Search" id="SearchInput" name="SearchInput">
                        <img src="Images/lupa.png" class="searchIcon">
                    </div>
                    <img src="Images/share.png" class="shareIcon">
                </div>
                <div class="Row2">
                    <h2>International Space Station</h2>
                    <h2>Journey to Mars</h2>
                    <h2>Earth</h2>
                    <h2>Technology</h2>
                    <h2>Aeronautics</h2>
                    <h2>Solar system and beyond</h2>
                    <h2>Education</h2>
                    <h2>History</h2>
                    <h2 class="last">Benefits to you</h2>
                </div>
            </div>
        </header>
        <div class="Grid">
            <div class="carousell">
                <div class="largeImage">
                    <div class="container">
                        <p class="fLine">Space station</p>
                        <p class="sLine">Expedition 48 crew lands safely on Earth</p>
                    </div>
                </div>
                <div class="largeImage">
                    <div class="container">
                        <p class="fLine">Artemis I</p>
                        <p class="sLine">Artemis I Travel Essentials: The Ultimate Personal Tour Guide for Your Trip to the Moon</p>
                    </div>
                    <img src="Images/img11.png" class="image2">
                </div>
                <div class="largeImage">
                    <div class="container">
                        <p class="fLine">BackToSchool</p>
                        <p class="sLine">The Artemis Generation Returns to School as NASA Returns to the Moon</p>
                    </div>
                    <img src="Images/img12.png" class="image3">
                </div>
                <div class="prevNext">
                    <a class="prev" onclick="swipeLeft()">&#10094;</a>
                    <a class="next" onclick="swipeRight()">&#10095;</a>
                </div>
            </div>
            <div class="small1">
                <div class="small1Up">
                    <?php 
                        $titleSmall1 = $array["news"][0]["title"];
                        echo "<p>{$titleSmall1}</p>";
                    ?>
                    <hr class="line">
                    <?php
                        $contentSmall1 = $array["news"][0]["content"];
                        echo "<p>{$contentSmall1}</p>";
                    ?>
                </div>
                <!--<div class="small1Down">
                    <hr class="line">
                    <div class="small1DownText">
                        <p>Calendar</p>
                        <p>Launches and landings</p>
                    </div>
                </div>-->
            </div>
            <div class="small2">
                <div class="container2">
                    <p class="fLine2">Expedition 48</p>
                    <div class="whitePartContainer2">
                    <?php
                        $titleSmall2 = $array["news"][1]["title"];
                        $hiddenParagraph = $array["news"][1]["content"];
                        echo "<p class=\"sLine2\">{$titleSmall2}</p>";
                        echo "<p class=\"sLine2Paragraph\">{$hiddenParagraph}</p>";
                    ?>
                    </div>
                </div>
            </div>
            <div class="medium1">
                <div class="small3"></div>
                <div class="divTriangle">
                    <div class="triangle">
                        
                    </div>
                </div>
                <div class="small4">
                    <?php
                        $titleSmall4 = $array["news"][2]["title"];
                        $blackText = $array["news"][2]["content"];
                        echo "<p class=\"blueTitle\">{$titleSmall4}</p>";
                        echo "<p class=\"blackText\">{$blackText}</p>";
                    ?>
                    <p class="blueText">Mission Site</p>
                    <p class="blueText">Briefings Schedule</p>
                    <P class="blueText">Launch Updates</P>
                    <p class="blueText">Video: To Bennu and Back</p>
                </div>
            </div>
            <div class="small5">
                <video id="videoLeftDownCorner">
                    <source src="Suit Up and Fly High in NASA's Science Spy Plane _ WIRED.mp4" type="video/mp4">
                </video>
                <div class="divDot">
                    <span class="dot"></span>
                </div>
                <div class="divPlay">
                    <button class="buttonPlay" onclick="play()"></button>
                </div>
            </div>
            <div class="medium2"></div>
            <div class="small6"><a class="twitter-timeline" data-width="100%" data-height="250" data-theme="dark" href="https://twitter.com/NASA?ref_src=twsrc%5Etfw">Tweets by NASA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
        </div>
    </body>
    <script src="script.js" type="text/javascript"></script>
</html>