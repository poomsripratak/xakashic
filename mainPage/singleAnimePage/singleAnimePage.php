<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Xakashic</title>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- NAVIGATION PANEL -->

        <div class="navigation">

            <!-- Menu Button -->

            <div class="menu">
                <button class="menuButton" id="menuButton">  
                    <i class="fa fa-bars fa-lg" id="menuIcon"> </i>
                </button>
                <div class="menuContents" id="menuContents">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Anime</a>
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
                <a href="../../index.html"><img src="resources/images/xakashiclogo.png" width="100"></a> 
            </div>
            
            <!-- Search Bar -->

            <div>
                <form class="searchSection" method = POST>
                    <button class="searchIcon" type="submit"><i class="fa fa-search fa-lg"></i></button>
                    <input class="searchBar" type="text" name="searchBar" id="searchBar" placeholder="Search...">
                    <button class="searchIcon" type="reset"><i class="fa fa-times fa-lg"></i></button>
                </form>
                <div class="menuContents" id="searchContents">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Anime</a>
                    <a href="#">Tech</a>
                    <a href="#">Food</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                    <a href="#">Settings</a>
                </div>
            </div>

            <script src="resources/js/searchSection.js"></script>


        </div>

        <!-- TITLE -->

        <!-- php database -->

       <?php
            $conn = new mysqli('localhost','root','123456','Website');
            if($conn->connect_error){
                die('Connection Failed :'.$conn->connect_error);
            }
            $sql = "SELECT * FROM `Anime` WHERE `Name`='Overlord IV';";
            $query = mysqli_query($conn,$sql);
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>
         <!-- setup vaule for animation -->
         <script>
                    const data = <?php echo json_encode($result, JSON_HEX_TAG); ?>; 
        </script>  
        
        <div class="title">
            <h5>REVIEWS/ANIME</h5>
            <h1><?php echo $result["Name"];?></h1>
        </div> 

        <!-- PRIMARY CONTENT -->

        <div class="primaryContent">

            <!-- 1.Poster -->

            <img src="resources/images/postertest2.png"> 

            <!-- 2.Box -->

            <div class="boxContainer">

                <div class="box">
                    <h6>Overall Rating</h6>
                    <div class="centerbox">
                    <svg id="circular">
                        <circle id="circularRing" cx="55" cy="55" r="40" style="--setCircular: 0px"></circle>
                        <text id="circularText" x="50%" y="50%" text-anchor="middle" fill="white" font-size="32px" font-weight="700" dy=".35em">0.0</text>
                    </svg>
                    </div>

                    <script src="resources/js/ratingAnimation.js"></script>

                </div>

                <div>
                    <h6>Episodes</h6>
                    <h2><?php echo $result["Episodes"];?></h2>
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
                <div class="section">
                    <h7 class="ssection">Release data</h7>
                    <h3 class="ssection"><?php echo $result["ReleaseDate"];?></h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Theme</h7>
                    <h3 class="ssection"><?php echo $result["Theme"];?></h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Genres</h7>
                    <h3 class="ssection"><?php echo $result["Genres"];?></h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Duration</h7>
                    <h3 class="ssection" id="duration"></h3>
                    <script>
                        const dur = document.getElementById("duration");
                        const valueDur = data["Duration"];
                        if (Number(valueDur)>=60){
                            const valueDuration = Number(valueDur)/60;
                            if (Number.isInteger(valueDuration)){
                                dur.innerHTML=valueDuration+" hr";
                            }else {
                                dur.innerHTML=Math.floor(valueDuration)+" hr "+Number(valueDur) % 60+" min";
                            }
                        }else{
                            dur.innerHTML=Number(valueDur)+" min";
                        }
                    </script>
                </div>
                <div class="section">
                    <h7 class="ssection">Studios</h7>
                    <h3 class="ssection"><?php echo $result["Studios"];?></h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Source</h7>
                    <h3 class="ssection"><?php echo $result["Source"];?></h3>
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
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD II</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD III</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD IV</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD V</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VI</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIIII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD X</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
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
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD II</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD III</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD IV</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD V</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VI</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD VIIII</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
                </div>
                <div class="onePoster">
                    <div class="overlay">
                        <h6> OVERLORD X</h6>
                    </div>
                    <img class="poster" src="resources/images/tobedeletetest.jpeg">
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