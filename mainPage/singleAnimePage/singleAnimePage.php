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
                <form class="searchSection">
                    <button class="searchIcon" type="submit"><i class="fa fa-search fa-lg"></i></button>
                    <input class="searchBar" type="text" name="searchBar" id="searchBar" placeholder="Search...">
                    <button class="searchIcon" type="reset"><i class="fa fa-times fa-lg"></i></button>
                </form>
                
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
            $sql = "SELECT * FROM `Anime` WHERE `Studios`='Madhouse';";
            $query = mysqli_query($conn,$sql);
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>
        <div class="title">
            <h5>REVIEWS/ANIME</h5>
            <h1><?php echo $result["Name"];?></h1>
        </div>          
        <?php
            }
            $conn->close();
        ?>

        <!-- PRIMARY CONTENT -->

        <div class="primaryContent">

            <!-- 1.Poster -->

            <img src="resources/images/postertest2.png"> 

            <!-- 2.Box -->

            <div class="boxContainer">
                <div class="box">
                    <h6>Overall Rating</h6>
                    <h2>8.9</h2>
                </div>
                <div class="box">
                    <h6>Episodes</h6>
                    <h2>13</h2>
                </div>
                <div class="box">
                    <h6>Premiered</h6>
                    <h2>Summer 2022</h2>
                </div>
            </div>

            <!-- 3.Rating -->

            <div class="ratingContainer">
                <h3 class="ratingMetric bold">Rating Metric</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold">My Rating</h3>
                <div class="row-border"></div>
                <h3 class="ratingMetric">Overall plot</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold eight">8.8</h3>
                <h3 class="ratingMetric">Execution</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold nine">9.7</h3>
                <h3 class="ratingMetric">Uniqueness</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold eight">8.8</h3>
                <h3 class="ratingMetric">WOW factor</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold nine">9.0</h3>
                <h3 class="ratingMetric">Consistency</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold eight">8.5</h3>
                <h3 class="ratingMetric">Characters</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold seven">7.5</h3>
                <h3 class="ratingMetric">Vibe</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold nine">9.7</h3>
                <h3 class="ratingMetric">Art/Animation</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold eight">8.5</h3>
                <h3 class="ratingMetric">Music</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold seven">7.9</h3>
                <h3 class="ratingMetric">Personal preference</h3>
                <h7 class="space"></h7>
                <h3 class="myRating bold nine">9.7</h3>             
            </div>
        </div>

        <!-- DESCRIPTIONS -->

        <div class="padding50">
            <h3 class="white">“Best reincarnation in video game anime, extremely strong plot with a lot of badass moment.  Extremely well execute. No unnecessary filler. Although a bit more action scene might be good but fair enough, it will be hard for op mc. Truly one of the housemen of isekai and my personal GOAT anime.”</h3>
        </div>

        <!-- MORE INFO -->

        <div class="padding50notop">
            <div class="moreInfo">
                <div class="section">
                    <h7 class="ssection">Release data</h7>
                    <h3 class="ssection">05-07-2022</h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Theme</h7>
                    <h3 class="ssection">Isekai, Video Game</h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Genres</h7>
                    <h3 class="ssection">Action, Fantasy, Supernatural</h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Duration</h7>
                    <h3 class="ssection">5 hr</h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Studios</h7>
                    <h3 class="ssection">Madhouse</h3>
                </div>
                <div class="section">
                    <h7 class="ssection">Source</h7>
                    <h3 class="ssection">Lightnovel</h3>
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



    </body>
</html>