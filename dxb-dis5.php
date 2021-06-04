<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title>The Green Planet</title>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/places.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
<div id="navbar"> 
            <?php 

            include 'includes/database.php';
            include 'includes/fetchdata.php' ;
            include 'includes/headers-edit.php';

            //$pageName = "name of the page"; 

            //like;
            $pageName = "dxb-dis5"; 

            ?>
    </div>
    
    <!-- TITLE -->
    <div class="wrapper1">
        <div class="title-container">
            <div class="another-container1">
                <div class="title-slider"> <!-- images the one sa top left -->
                        <div><img src="images/dubai/dxbdis5D.jpg" class="picture" /></div>
                        <div><img src="images/dubai/discover/dxbdis5B.jpg" class="picture" /></div>
                        <div><img src="images/dubai/discover/dxbdis5E.jpg" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1"> The Green Planet </h1> <!-- title -->
                <p class="location-title"> Dubai </p> <!-- location-->
                <a href="tour-form.php"><button class="line1"> TOUR </button></a><!-- do not replace this da botan -->
        </div>
    </div>
    </div>
    <!-- CATEGORIES -->
    <div class="wrapper3"> <!-- not to be touched -->
        <div class="categories">
                <div class="box" onClick="history()"><a>INFO</a></div>
                <div class="box" onClick="whttodo()"><a>WHAT TO DO</a></div>
                <div class="box" onClick="timings()"><a>TIMINGS</a></div>
                <div class="box" onClick="events()"><a>EVENTS</a></div>
                <div class="box" onClick="vt()"><a>VIRTUAL TOUR</a></div>
                <div class="box" onClick="reviews()"><a>REVIEWS</a></div>
                <div class="box" onClick="media()"><a>MEDIA</a></div>
        </div>
    </div>

    <!-- BACKGROUND 1 -->

            <div class="rectangle"></div> <!-- ignore -->

    <!-- INFORMATION -->
    <div class="rectangle2"></div>
    <div class="wrapper2">
        <div class="info-hist-box" id="history">
        
         <div class="layer1">
         
            <div class="left-images"> 
            <h2 class="info-title"> Information </h2> <!-- images on the left -->
                <div class="img-set"><img src="images/dubai/discover/dxbdis5D.jpg" style="object-position: 0 -50px;" class="smallimg"/></div>
                <div class="img-set"><img src="images/dubai/discover/IMG_2436.jpg" style="object-position: 0 -50px;" class="smallimg"/></div>
                <div class="img-set"><img src="images/dubai/discover/dxbdis5H.jpg" style="object-position: 0 -50px;" class="smallimg"/></div>
            </div>
            <div class="info-container">
                <div class="dl-bm">

                    <!-- change the path to this to download! simply look at the files to ur left (if ur using visual code)
                    right click > copy path and then paste it on the href ! -->
                    <a href="download/Dubai/Discover/The Green Planet.docx"> 
                    <button><img src="images/Desktop Download.png"/></button>
                    </a>
                    
                </div>
            <h2 class="info-title1"> Information </h2> <!-- description feel free to add per paragraph -->
                <p class="info-description">Discover the wonders of a tropical forest at The Green Planet, a bio-dome that invites visitors to explore our planet’s fascinating flora and fauna through an immersive expedition into the tropics. Designed as an enclosed ecosystem, The Green Planet recreates the enchanting world of a tropical forest with over 3,000 plants and animals and the world’s largest man-made and life-sustaining indoor tree. The educational and recreational facility is set to raise awareness about nature’s delicate balance and the preciousness of one of our world’s oldest living ecosystems.
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
        <div class="blackbg">
        <img src="images/dubai/discover/dxbdis5H.jpg" class="wtd-bg"/> <!-- the bg for the entirety of the what to do part -->
        </div>
        <div class="scroller-area">

            
            <div class="contents-box">
                <div class="contents-container1">
                <h2 class="contents-title1"> What to do </h2> <!-- this is the what to do part -->
                <p class="contents-desc1">Tropical rainforest within a bio-dome sheltering colorful birds, reptiles & sloths, plus a cafe.</p>
                 </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5F.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Camp </h2>
                <p class="contents-desc">
                The summer camp at Green Planet Dubai is a fun-filled adventure for all little ones.</p> <!-- put the actual activities here -->
                 </div>
            </div> 

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5E.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Hop </h2>
                <p class="contents-desc">
                Watch how the endangered species of Loris is being cared and nurtured here at the Green Planet Dubai.</p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5D.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Explore </h2>
                <p class="contents-desc">
                Australian walkabout gives you a fair opportunity to educate yourself with the fascinating multi-species exhibits. </p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5F.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Witness </h2>
                <p class="contents-desc">
                You will find both carnivorous and vegetarian species of the Piranhas here.</p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5H.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Sloth </h2>
                <p class="contents-desc">
                This is the opportunity where you can get close to these sloths and capture some beautiful moments with them.</p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5D.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Glider </h2>
                <p class="contents-desc">
                Meet the nocturnal mammals – sugar gliders at the Green Planet Dubai. </p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5C.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Bird </h2>
                <p class="contents-desc">
                Trace the endangered bird species of Toucans here at this Bird Encounter interactive session.</p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5B.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Reptile </h2>
                <p class="contents-desc">
                Meet some of the creepiest reptiles of Green Planet Dubai sharp at 12:30 pm and interact with them for around 20 minutes.</p> <!-- put the actual activities here -->
                </div>
            </div>

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/dxbdis5A.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Picnic </h2>
                <p class="contents-desc">
                Enjoy an exclusive picnic brunch with their furriest animal and his friends.</p> <!-- put the actual activities here -->
                </div>
            </div>
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/dubai/discover/IMG_2436.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Thunderstorm </h2>
                <p class="contents-desc">
                Feel the thunder and experience the magic of the tropics.</p> <!-- put the actual activities here -->
                </div>
            </div>
        </div>
        </div>
        <!-- -->

        <!-- TIMINGS -->

        <div class="timing-container">
            <h2 class="timing-title">TIMINGS</h2>
            <div class="wrapper3">
            <div class="timing-week"> <!-- to edit this part go to the javascript below vvv -->
                <div class="days" onClick="sun()"><a>SUNDAY</a></div>
                <div class="days" onClick="mon()"><a>MONDAY</a></div>
                <div class="days" onClick="tues()"><a>TUESDAY</a></div>
                <div class="days" onClick="wed()"><a>WEDNESDAY</a></div>
                <div class="days" onClick="thurs()"><a>THURSDAY</a></div>
                <div class="days" onClick="fri()"><a>FRIDAY</a></div>
                <div class="days" onClick="sat()"><a>SATURDAY</a></div>
            </div>
            </div>

                <div class="t-container"> <!-- to edit this part go to the javascript below vvv -->
                    <div class="timing-info" id="timing-info"> <!-- its rlly all the way down there -->
                        <div class="time">
                        <p id="t-time"></p> 
                        </div>
                    </div>
                </div> 

        </div>
        <!-- -->


        <!-- calendar -->
       
        <h2 class="calendar-title">EVENTS</h2>
        <div class="calendar-bg"> 
       
        <div class="main">
        <div class="sideb">
        <div class="header"><i class="fa fa-angle-left" aria-hidden="true">
        </i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="calender">
        <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
        </table>
        </div>
        <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
        </div>
        <div class="right-wrapper">
        <div class="header"><span></span></div><span class="day"></span><span class="month"></span>
        </div>
        </div>

        </div>

    <!-- events -->
    <div class="wrapper4">
        <div class="event-listing">
         <div class="e-row">

            <div class="event-content">
                <div class="extra-wrapper"> <!-- these are for the events -->
                    <div class="e-date"> 
                        <div class="e-month"> JUN </div> <!-- month -->
                        <div class="e-number"> 24 </div> <!-- date -->
                    </div>
                    <div class="name-event"><p class="en-adjusting"> Dubai Summer Surprises</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> JUL </div> <!-- month -->
                        <div class="e-number"> 19 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Eid Al Adha</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> AUG </div> <!-- month -->
                        <div class="e-number"> 5 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Fall/Winter Collection Launch Sale</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> AUG </div> <!-- month -->
                        <div class="e-number"> 15 </div> <!-- date -->
                    </div>
                    <div class="name-event"><p class="en-adjusting">Back to School Sale</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> SEP </div> <!-- month -->
                        <div class="e-number"> 07 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">World Future Enerygy Summit 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> SEP </div> <!-- month -->
                        <div class="e-number"> 19 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dubai Home Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 10 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dahawi Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 12 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah World Championship Week 2021</p></div> <!-- name of the event -->
                </div>

            </div>


        </div>

        <div class="e-row">

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> OCT </div> <!-- month -->
                        <div class="e-number"> 21 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Expo 2020</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> OCT </div> <!-- month -->
                        <div class="e-number"> 29 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Diwali Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">  
                <div class="extra-wrapper">   
                    <div class="e-date">
                        <div class="e-month"> N0V </div> <!-- month -->
                        <div class="e-number"> 03 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah National Bookfair</p></div> <!-- name of the event -->
                </div> 

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> NOV </div> <!-- month -->
                        <div class="e-number"> 08 </div> <!-- date -->
                    </div> 
                    <div class="name-event"> <p class="en-adjusting">ADIPEC 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> NOV </div> <!-- month -->
                        <div class="e-number"> 14 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah Film Platform</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">  
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 2 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">National UAE Day</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 15 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dubai Shopping Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 16 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah Focal Point 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            
        </div>

        </div>
    </div>

    <!-- -->

    <!-- VIRTUAL TOUR -->
    <h2 class="vt-title">TOUR & LOCATION</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!4v1622846870930!6m8!1m7!1sCAoSLEFGMVFpcFBPTWtxR1lHR3lZUkNESnAtOEYwSHdKbmFfT0UtVFhLcHUyWE5f!2m2!1d25.2061423!2d55.26038089999999!3f202.58245945564968!4f1.61503659183046!5f0.7820865974627469" width="100%" height="1000px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- google maps -->   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.9134147888194!2d55.26038089999999!3d25.2061423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42659897a4f5%3A0xd8d16fd51a2b9040!2sThe%20Green%20Planet!5e0!3m2!1sen!2sae!4v1622846896780!5m2!1sen!2sae"
         width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- -->
    <!-- COMMENTS -->

    <h2 class="review-title">REVIEWS</h2>

<script src="javascript/alerts.js"> </script>


<div class="review-container" id="review-container">

    <div class="user-review">

    <?php 
    
            // fetching all the data from this certain page
            $query = "SELECT * from comments WHERE comment_page = '$pageName' "; 
            $query .= "ORDER BY comment_id DESC";
            $select_customers = mysqli_query($connection, $query);
    
                while($row = mysqli_fetch_assoc($select_customers)){
                    $comment_id = $row['comment_id'];
                    $comment_page = $row['comment_page'];
                    $comment_date = $row['comment_date'];
                    $comment_author = $row['comment_author'];
                    $comment_email = $row['comment_email'];
                    $comment_contents = $row['comment_contents'];
    ?>


        <!-- displaying all the comments using the while loop in the php, I didn't close it. -->
        <div class="main-review review"> 
            <div class="r-box main-box">
                <div class="user"> <?php  echo $comment_author?> <div class="dot"></div>
                <span class="date">  <?php  echo $comment_date?> </span></div>
                <div class="review-content"> <?php  echo $comment_contents?> </div>
            </div>
        </div>


        <?php } ?>
        <!-- closing the while loop -->

        
    </div>
    
</div>

<!-- including the other php file that handles the form -->
<?php  include 'includes/comments.php' ?>

<form class="wr-container" id="wr-container" method="post" action="">
    
    <div class="write-review">

        <!-- getting the name of whoever posted the comment -->
        <input type="hidden" name="author" value=" <?php echo $firstName . " " . $lastName ?>  " >

        <!-- hidden values to get the user's who's logged -->
        <input type="hidden" name="email" value=" <?php echo $email ?>  " >

        <!-- getting the page name to know where is the user commenting -->
        <input type="hidden" name="page" value="<?php echo $pageName?>" >



    <!-- adding a review -->
    <textarea class="form-control" id="inquire" name="review" rows="4" cols="50" placeholder="Add a review..."></textarea>


    </div>

    <!-- buttons to send  -->
    <input type="submit" class="post btn" value="Post" name="post">
    <input type="submit" class="cancel btn" value="Cancel" name="cancel">

</div>
</form>


<!-- -->

    <section id="media-wrappper">
        <h2 class="media-title">MEDIA</h2> 
        <div class="showcase">

        <div class="row row1">
            <div class="img-media"><img src="images/dubai/discover/dxbdis5A.jpg" class="fiximg" />
            <p> A flower </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5B.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5C.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5D.jpg" class="fiximg" />
            <p> The Green Planet </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/IMG_2436.jpg" class="fiximg" />
            <p> Exterior of the Green Planet </p>
            </div>

        </div>

        <div class="row row2">
        <div class="img-media"><img src="images/dubai/discover/IMG_2436.jpg" class="fiximg" />
            <p> Exterior of the Green Planet </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5D.jpg" class="fiximg" />
            <p> The Green Planet </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5C.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5B.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5A.jpg" class="fiximg" />
            <p> A flower </p>
            </div>


        </div>

        <div class="row row3">
        <div class="img-media"><img src="images/dubai/discover/dxbdis5D.jpg" class="fiximg" />
            <p> The Green Planet </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5B.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/IMG_2436.jpg" class="fiximg" />
            <p> Exterior of the Green Planet </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5C.JPG" class="fiximg" />
            <p> A bird </p>
            </div>

            <div class="img-media"><img src="images/dubai/discover/dxbdis5A.jpg" class="fiximg" />
            <p> A flower </p>
            </div>

            
        </div>

        </div>

    </section>
        
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eab9b1f412.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            

    <script src="javascript/function.js"></script> <!-- calendar -->

    <script>
        //timing content
        $('#timing-info').hide(); //here is where u edit the time
        function sun(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here

        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here

        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here
  
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here
  
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here
            
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 7:00 PM '); //so put the timings here

        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 AM to 5:00 PM '); //so put the timings here
   
        }

        //reply function
        function reply(){
        document.getElementById("reply-function").style.display = "inline-block";
        document.getElementById("wr-container").style.display = "none";
            }

        function closeReply(){
            document.getElementById("reply-function").style.display = "none";
            document.getElementById("wr-container").style.display = "block";
        }

        //carousel
        $('.row').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            variableWidth: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,

         });

         $('.scroller-area').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            adaptiveHeight: true,
            variableWidth: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            infinite: true,

         });

         $('.e-row').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 3000,
            infinite: true,

         });
         
         $('.title-slider').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,

         });
        
         

    
         //scroll to
        function history(){
            window.scroll({
                top: 1000,
                behavior: "smooth"
            });
        }
        function whttodo(){
            window.scroll({
                top: 2200,
                behavior: "smooth"
            });
        }
        function timings(){
            window.scroll({
                top: 2800,
                behavior: "smooth"
            });
        }
        function events(){
            window.scroll({
                top: 3500,
                behavior: "smooth"
            });
        }
        function vt(){
            window.scroll({
                top: 4600,
                behavior: "smooth"
            });
        }
        function reviews(){
            window.scroll({
                top: 5600,
                behavior: "smooth"
            });
        }
        function media(){
            window.scroll({
                top: 6700,
                behavior: "smooth"
            });
        }
    </script> 
 
    
    </body>
</html7
