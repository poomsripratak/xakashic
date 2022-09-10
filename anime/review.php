<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Xakashic</title>
        <link rel="stylesheet" type="text/css" href="review.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="body dark">

        <!-- NAVIGATION PANEL -->

        <div class="navigation">

            <div class = "firstNavigation">

                <!-- Menu Button -->

                <div class="menu">
                    <button class="menuButton" id="menuButton">  
                        <i class="fa fa-bars fa-lg" id="menuIcon"> </i>
                    </button>
                    <div class="menuContents" id="menuContents">
                        <a href="../index.html">Home</a>
                        <a href="#">Shop</a>
                        <a href="hub.php">Anime</a>
                        <a href="#">Tech</a>
                        <a href="#">Food</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                        <a href="#">Settings</a>
                    </div>
                </div>  

                <script src="resources/js/menu.js"></script>

                <!-- Logo -->

                <div class = "logoContainer">
                    <a href="../index.html"><img class="logoImage" width="100"></a> 
                </div>
                
            </div>      

            <div class = "secondNavigation">

                <!-- Search Bar -->

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

                <div id="searchBar" class="searchBar deactive">
                    <form id="searchSection" class="searchSection deactive">
                        <!-- <button class="searchIcon" type="reset"><i class="fa fa-times fa-lg"></i></button> -->
                        <input id="searchText" class="searchText deactive" type="text" autocomplete="off" placeholder="Search..." />
                        <button id="searchButton" class="searchButton deactive" type="button"><i class="fa fa-search fa-lg"></i></button>
                    </form>
                    <div id="searchResult" href="" class="result"></div>
                </div>

                <script src="resources/js/searchBar.js"></script>

                <!-- RANDOM BUTTON -->
                
                <div id="randomBtn" class="navItem">
                    <button><i class="fa fa-random fa-lg"></i></button>
                    <h4>Random</h4>
                </div>

                <?php include 'resources/php/randomButton.php'; ?>

                <!-- DONATE BUTTON -->

                <div class="navItem">
                    <button class="searchIcon"><i class="fa fa-usd fa-lg"></i></button>
                    <h4 class="grey05">Donate</h4>
                </div>

                <!-- LIGHT/DARK MODE -->

                <div class="navItem">
                    <div class="toggle">
                        <input type="checkbox" id="theme" class="toggle-input" checked>
                        <label for="theme" class="toggle-label">
                            <img src="https://mccambley.github.io/dark-mode-demo/images/moon.svg" class="toggle-icon">
                        </label>
                    </div>
                </div>

                <script src="resources/js/toggleMode.js"></script>
                
                <!-- USER ACCOUNT -->
                <div class="navItem">
                    <button class="searchIcon"><i class="fa fa-user-circle-o fa-lg"></i></button>
                </div>

            </div>

        </div>

        <!-- TITLE -->

        <!-- ACCESS DATABASE... -->

       <?php
            $var_value = $_GET['anime'];

            $conn = new mysqli('localhost','root','123456','Website');
            if($conn->connect_error){
                die('Connection Failed :'.$conn->connect_error);
            }
            $sql = "SELECT * FROM `Anime` WHERE `ID`=$var_value;";
            $query = mysqli_query($conn,$sql);
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>
         <!-- setup vaule for animation -->
         <script>
            const data = <?php echo json_encode($result, JSON_HEX_TAG); ?>; 
        </script>  
        
        <div class="title">

            <div class="primaryTitle">

                <h5>REVIEWS/ANIME</h5>

                <h1><?php echo $result["Name"];?></h1>

                <h3 class="grey05"><?php echo $result["EnglishName"];?></h3>

                <div class="tagContainer">

                    <?php if ($result["Demographic"]!=null){ ?>
                        <div class="tag">
                            <h6 class="bold"><?php echo $result["Demographic"];?></h6>
                            <?php if ($result["Demographic"]=="Shounen"){ ?>
                                <div class="tagInfo"><h6><b>Shounen</b> – the direct translation meaning “youth” – is a genre targeted at the young male population. Although it can appeal to a large age group, primary market for these works are those around the age of fourteen to eighteen. This is by far the most popular form of anime.</h6></div>
                            <?php } else if ($result["Demographic"]=="Shoujo"){ ?>
                                <div class="tagInfo"><h6><b>Shoujo</b> is the female equivalent of the Shounen genre. These works are aimed at teenage girls between the age of fourteen to eighteen. Unlike its male counterpart, Shojo anime cover subjects that focus mainly on human emotions and romantic relationships.</h6></div>
                            <?php } else if ($result["Demographic"]=="Seinen"){ ?>
                                <div class="tagInfo"><h6><b>Seinen</b> is the older brother of Shounen, categorizing works for young adults and men between the age of eighteen to forty. These works tend to explore a wider range of topic, from action and adventure, to business and politics, to comedy and relationships. Some may also have strong sexual and violent content. Most tend to deal with a serious subject matter, wandering into the field of social critiques and philosophical reflections.</h6></div>
                            <?php } else if ($result["Demographic"]=="Josei"){ ?>
                                <div class="tagInfo"><h6><b>Josei</b> anime are aimed at women in their late teens to adulthood. With subject matters similar to shojo’s exploration of relationship and human emotion, Josei works may have a touch of erotic content. Their treatment of romance also tends to be more realistic, unlike the mainly idealized image of romance in shojo.</h6></div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <?php if ($result["Rating"]!=null){ ?>
                        <div class="tag">
                            <h6 class="bold"><?php echo $result["Rating"];?></h6>
                            <div class="tagInfo"><h6><b>G</b> - All Ages<br><b>PG</b> - Children<br><b>PG-13</b> - Teens 13 or older<br><b>R</b> - 17+ recommended (violence & profanity)<br><b>R+</b> - Mild Nudity (may also contain violence & profanity)<br><b>Rx</b> - Hentai (extreme sexual content/nudity)</h6></div>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <div class="secondaryTitle">
                <div id="heartBtn" class="heartItem">
                    <button><i class="fa fa-heart-o fa-2x"></i></button>
                    <h4 class="center">10234</h4>
                </div>  
                <a target="_blank"href="<?php echo $result["MAL"];?>"><button class="malBtn">MAL</button></a>
            </div>

        </div> 

        <!-- PRIMARY CONTENT -->

        <div class="primaryContent">

            <!-- 1.Poster -->

            <img id="mainPoster" src=""> 

            <script>
                pos = document.getElementById("mainPoster");
                pos.src="resources/images/poster/"+data['ID']+".jpeg";
            </script>

            <!-- 2.Box -->

            <div class="boxContainer">

                <div class="box">
                    <h6>Overall Rating</h6>
                    <div class="centerbox">
                        <svg id="circular">
                            <circle id="circularRing" cx="55" cy="55" r="40" style="--setCircular: 0px"></circle>
                            <text id="circularText" x="50%" y="50%" text-anchor="middle" fill="var(--text)" font-size="32px" font-weight="700" dy=".35em">0.0</text>
                        </svg>
                    </div>

                    <script src="resources/js/ratingAnimation.js"></script>

                </div>

                <div>
                    <h6>Episodes</h6>
                    <h2><?php 

                    if ($result["Episodes"]>1000){
                        echo "1000+";
                    }else{
                        echo $result["Episodes"];
                    }
                    
                    ?></h2>
                </div>

                <div>
                    <h6>Premiered</h6>
                    <h2 id="premiered">NA</h2>
                    <script>
                        var resultPremiered = "";
                        if (data["Season"]==1){
                            resultPremiered += "Winter";
                        }else if (data["Season"]==2){
                            resultPremiered += "Spring";
                        }else if (data["Season"]==3){
                            resultPremiered += "Summer";
                        }else if (data["Season"]==4){
                            resultPremiered += "Fall";
                        }
                        document.getElementById("premiered").innerHTML = resultPremiered+" "+data["Year"];
                    </script>
                </div>

            </div>

            <!-- 3.Rating -->

            <div class="ratingContainer">

                <h3 class="ratingMetric bold">Rating Metric</h3>
                <h7 class="space"></h7>
                <h3 class="myMainRating bold">My Rating</h3>
                <div class="row-border"></div>
                <h3 class="ratingMetric">Overall plot</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["OverallPlot"];?></h3>
                <h3 class="ratingMetric">Execution</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Execution"];?></h3>
                <h3 class="ratingMetric">Uniqueness</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Uniqueness"];?></h3>
                <h3 class="ratingMetric">WOW factor</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["WOWFactor"];?></h3>
                <h3 class="ratingMetric">Consistency</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Conflict"];?></h3>
                <h3 class="ratingMetric">Characters</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Characters"];?></h3>
                <h3 class="ratingMetric">Vibe</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Vibe"];?></h3>
                <h3 class="ratingMetric">Art/Animation</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["ArtAnimation"];?></h3>
                <h3 class="ratingMetric">Music</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["Music"];?></h3>
                <h3 class="ratingMetric">Personal preference</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold"><?php echo $result["PersonalPref"];?></h3>      

                <script src="resources/js/myRating.js"></script>

            </div>

        </div>

        <!-- DESCRIPTIONS -->

        <div class="padding50">
            <h3 class="white"><?php echo $result["Review"];?></h3>
        </div>

        <!-- MORE INFO -->

        <div class="padding50notop">
            <div class="moreInfo">

                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Release data</h7>
                    <h3 class="moreInfoItem"><?php echo $result["ReleaseDate"];?></h3>
                </div>

                <?php if ($result["Theme"]!=null){?>
                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Theme</h7>
                    <?php if(strpos($result["Theme"], ',') !== false){?>
                        <h3 class="moreInfoItem"><?php echo str_replace(",",", ",$result["Theme"]);?></h3>
                    <?php }else{?>
                        <h3 class="moreInfoItem"><?php echo $result["Theme"];?></h3>
                    <?php }?>
                </div>
                <?php }?>

                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Genres</h7>
                    <?php if(strpos($result["Genres"], ',') !== false){?>
                        <h3 class="moreInfoItem"><?php echo str_replace(",",", ",$result["Genres"]);?></h3>
                    <?php }else{?>
                        <h3 class="moreInfoItem"><?php echo $result["Genres"];?></h3>
                    <?php }?>
                </div>

                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Duration</h7>
                    <h3 class="moreInfoItem" id="duration"></h3>
                    <script src="resources/js/duration.js"></script>
                </div>

                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Studios</h7>
                    <h3 class="moreInfoItem"><?php echo $result["Studios"];?></h3>
                </div>

                <div class="moreInfoSection">
                    <h7 class="moreInfoItem">Source</h7>
                    <h3 class="moreInfoItem"><?php echo $result["Source"];?></h3>
                </div>

            </div>
        </div>
        
        <!-- SEQUEL ANIME -->

        <div class="sequel">
            <h2>SEQUEL ANIME</h2>
            <div class="posters">
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD I</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD II</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD III</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD IV</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD V</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VI</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIIII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD X</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>

            </div>
        </div>
        
         <!-- SIMILAR ANIME -->

        <div class="sequel">
            <h2>SIMILAR ANIME</h2>
            <div class="posters">
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD I</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD II</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD III</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD IV</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD V</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VI</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIIII</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD X</h6>
                    </div>
                    <img class="poster" src="resources/images/poster/mock.jpeg">
                </div>

            </div>
        </div>

        <!-- COMMENT SECTION -->

        <div class="comment">
            <h2>Comments</h2>
            <form class="commentBox">
                <textarea></textarea>
            </form>
        </div>

        <?php
            }
            $conn->close();
        ?>

    </body>
</html>