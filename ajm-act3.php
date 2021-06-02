<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title>Ajman Museum</title>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/places.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
    <div id="navbar"> 
        <?php include 'includes/headers-edit.php';?>
    </div>
    
    <!-- TITLE -->
    <div class="wrapper1">
        <div class="title-container">
            <div class="another-container1">
                <div class="title-slider"> <!-- images the one sa top left -->
                        <div><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3D.jpg" class="picture" /></div>
                        <div><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3B.jpg" class="picture" /></div>
                        <div><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3C.jpg" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1"> Ajman Museum </h1> <!-- title -->
                <p class="location-title"> Ajman </p> <!-- location-->
                <button href="tour-form.php" class="line1"> TOUR </button> <!-- do not replace this da botan -->
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
                <div class="img-set"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3A.jpg" class="smallimg"/></div>
                <div class="img-set"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3E.jpg" class="smallimg"/></div>
                <div class="img-set"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3F.jpg" class="smallimg"/></div>
            </div>
            <div class="info-container">
                <div class="dl-bm">

                    <!-- change the path to this to download! simply look at the files to ur left (if ur using visual code)
                    right click > copy path and then paste it on the href ! -->
                    <a href="download\Ajman\Activities\Ajman Museum.docx"> 
                    <button><img src="images/Desktop Download.png"/></button>
                    </a>
                    
                </div>
            <h2 class="info-title1"> Information </h2> <!-- description feel free to add per paragraph -->
                <p class="info-description"> The Ajman Museum is a museum located in the city of Ajman, United Arab Emirates. Ajman 
                    Museum includes several sections that offer a compelling glimpse of Ajman's past, including archaeology, manuscripts, 
                    folk costumes, souvenirs, and more. The museum displays are annotated in both Arabic and English. 
                    
                    <br>
                    <br>

                    It is housed in an 18th-century fortress that was used as a stronghold for the Emirates leadership and as the first 
                    line of defense. Earlier it was the ruler's palace and then it was converted as the Ajman police station. When the 
                    fort was renovated two wind towers and two watchtowers were maintained. A massive gate and two cannons can be seen 
                    on the front of the fort. The museum tells about the local history and heritage, the place highlights various aspects 
                    of the past. The Ajman Museum with displays of lifestyle and traditional professions includes a huge collection of 
                    archeological artifacts, manuscripts, and old weapons as well as displays of medical and religious practices are on 
                    display. 

                    <br>
                    <br>
                    
                    One of the most famous displays is an excavated cemetery discovered in the Al Muwaihat area, which features pottery 
                    and funeral jewellery dating back as far as 3000 BC. This was a former fishing village, Ajman also relied heavily on 
                    pearl fishing and there is a section specifically devoted to what was once one of the most important pastimes in the region.
              
                    </p>
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
        <div class="blackbg">
        <img src="images\ajm-pictures\Activities\Ajman Museum\ajment3G.jpg" class="wtd-bg"/> <!-- the bg for the entirety of the what to do part -->
        </div>
        <div class="scroller-area">

            
            <div class="contents-box">
                <div class="contents-container1">
                <h2 class="contents-title1"> What to do </h2> <!-- this is the what to do part -->
                <p class="contents-desc1">Ajman Museum is the emirate’s foremost museum illustrating life as it once was. The 18th-century fort 
                    served as the ruler’s residence until 1970, before it was converted into a museum a decade later.
                    You’ll find the museum on the east side of the central square in the Al Bustan area. 
                </p>
                 </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\ajm-pictures\Activities\Ajman Museum\ajment3E.jpg"/>
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Exhibits </h2>
                <p class="contents-desc">
                The exhibits offer a compelling glimpse of Ajman’s past, from centuries-old manuscripts and weaponry to 
                models of wooden dhows and ingenious irrigation systems. </p> <!-- put the actual activities here -->
                 </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\ajm-pictures\Activities\Ajman Museum\ajment3D.jpg" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> History </h2>
                <p class="contents-desc"> One of the most notable displays is an excavated cemetery discovered 
                    in the Al Muwaihat area, which features pottery and funeral jewellery dating back as 
                    far as 3000 BC.  </p> <!-- put the actual activities here -->
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
    
    <!-- google maps -->   
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14414.966576227109!2d55.4456037!3d25.4134573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x562a16a1ef84dd73!2sAjman%20Museum!5e0!3m2!1sen!2sae!4v1622591972077!5m2!1sen!2sae"
         width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <!-- -->
    
    <!-- COMMENTS -->
    <h2 class="review-title">REVIEWS</h2>
  
    <div class="review-container" id="review-container">
        
        <div class="user-review">
       
            <div class="main-review review"> 
                <div class="r-box main-box">
                <div class="user">Avery Angel <div class="dot"></div>
                <span class="date">Apr 01 2012</span></div>
                <div class="review-content">
                    I am placeholder review, I am reviewing the placeholder
                    and the place is very holding.

                </div>
                <a class="reply-btn" onClick="reply()"><img src="images/reply.png"/>Reply</a>
                
                </div>
            </div>

            <div class="review-replies review">
                <div class="line-r"></div>
                <div class="r-box reply-box">
                <div class="user">Avery Angel <div class="dot"></div>
                <span class="date">Apr 01 2012</span></div>
                <div class="review-content">
                    I am placeholder review, I am reviewing the placeholder
                    and the place is very holding.

                </div>
                <a class="reply-btn" onClick="reply()"><img src="images/reply.png"/>Reply</a>

   

                </div>
            </div>
            
        </div>
    </div>
    
        <!-- replying function -->

    <div class="reply-function" id="reply-function">
        <h3 class="rep-to">reply:</h3>
            <input class="form-control" placeholder="add a reply"></input>
        <button class="rep btn">reply</button>
        <button class="cancel btn" onClick="closeReply()">cancel</button>
        </div>

    <div class="wr-container" id="wr-container">
    <div class="write-review">
        <input class="form-control" placeholder="add a review"></input>
    </div>
    <button class="post btn">post</button>
        <button class="cancel btn">cancel</button>
    </div>
    </div>


    <!-- -->

    <section id="media-wrappper">
        <h2 class="media-title">MEDIA</h2> 
        <div class="showcase">

        <div class="row row1">
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3A.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3B.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3C.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3D.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3E.jpg" class="fiximg" /></div>
        </div>
        <div class="row row2">
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3F.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3G.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3H.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3A.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3B.jpg" class="fiximg" /></div>>
        </div>
        <div class="row row3">
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3C.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3D.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3E.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3F.jpg" class="fiximg" /></div>
            <div class="img-media"><img src="images\ajm-pictures\Activities\Ajman Museum\ajment3G.jpg" class="fiximg" /></div>
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
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here

        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here

        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here
  
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here
  
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here
            
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here

        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' 10:00 am to 5:00pm '); //so put the timings here
   
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
</html>