<?php 
include 'config.php';
if(isset($_POST['submit'])){
  $fullname     = $_POST['fullname'];
  $email  = $_POST['email'];
  $contact_number  = $_POST['contact_number'];
  $guest  = $_POST['guest'];
  //$email  = $_POST['email'];
  $msg  = $_POST['msg'];
  $confirm = 0;
    if(!empty($fullname) &&  !empty($email) ){
      $email_v = mysqli_query($db_connect,"SELECT * FROM `user` WHERE email='$email'");
      $email_number = mysqli_num_rows($email_v);
      if($email_number >= 1){
        $email_register = 'Already used this email';
        
      }else{ 
    
      $add_success = mysqli_query($db_connect,"INSERT INTO user (name, email, msg, contact_number, number_of_guests, donet, confirm)
        VALUES('$fullname','$email','$msg', '$contact_number', '$guest', 0, '$confirm');");
      } 
    }

} else if (isset($_POST['submit1'])){
  $fullname     = $_POST['fullname'];
  $email  = $_POST['email'];
  $contact_number  = $_POST['contact_number'];
  $guest  = $_POST['guest'];
  //$email  = $_POST['email'];
  $msg  = $_POST['msg'];
  $confirm = 0;
    if(!empty($fullname) &&  !empty($email) ){
      $email_v = mysqli_query($db_connect,"SELECT * FROM `user` WHERE email='$email'");
      $email_number = mysqli_num_rows($email_v);
      if($email_number >= 1){
        $email_register = 'Already use this email';
        
      }else{ 
    
      $add_success = mysqli_query($db_connect,"INSERT INTO user (name, email, msg, contact_number, number_of_guests, donet, confirm)
        VALUES('$fullname','$email','$msg', '$contact_number', '$guest', 1, '$confirm');");
        header('location: donation.php');
      } 
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <title>M&S | Wedding</title>

    <meta property="og:title" content="M&S | Wedding">
    <meta property="og:description" content="M&S | Wedding">
    <meta property="og:image" content="3.png">
    <meta property="og:url" content="http://simpleermodhdhegorgeous.com/">


    <!-- Library CSS -->
    <link href="css/wedding_library.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/wedding_style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/leaves.css" type="text/css" media="screen">

    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139164134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139164134-1');
</script>

</head>
<body>
  <!-- Music Bottom Container -->
  <div class="wed_music_content">
    <div class="wed_music_container">
      <i class="ti ti-music"></i>
    </div>
  </div>
  <!-- Music Bottom Container End -->

  <!-- Soundcloud -->
  <div class="wed_iframe">
    <!-- over -->
    <div class="wed_over wed_music_over" data-color="#000" data-opacity="0.5"></div>
    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/102137206&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
  </div>


  <!-- Preloader -->
  <div class="wed_page_loader">
    <div class="wed_story_content wed_image_bck" data-color="#e4d4fb">
      <div class="wed_heart_container_row_4">
        <img class="wed_fourth_heart_1" src="images/small_people/heart_1.png" alt="">
        <img class="wed_fourth_heart_2" src="images/small_people/heart_2.png" alt="">
        <img class="wed_fourth_heart_3" src="images/small_people/heart_3.png" alt="">
      </div>
      <div class="wed_story_small_img">
        <img src="images/small_people/small_couple.png" alt="">
      </div>

    </div>
  </div>
  <!-- Preloader End-->

  <!-- Firefly -->
  <div class="wed_firefly">
    <div class="jqueryFireFly" data-total="60" data-minPixel="1" data-maxPixel="4"></div>
  </div>

  <!-- Dandelions Animation -->
  <div id="leafContainer" data-image="dandelions"></div>
  <!-- Dandelions Animaton End -->

  <!-- Page -->
  <div class="wed_page" id="wed_page">

    <!-- Header -->
    <header>       
      <nav class="wed_light_nav wed_transp_nav">
        <div class="container">

          <!-- couple header -->
          <img class="wed_couple_header wed_kissing_couple animated extra" src="images/3.png" alt=""/>
          <img class="wed_couple_header wed_white_couple animated extra" src="images/3_white_couple.png" alt=""/>
          <!-- couple header end -->

          <!-- Logo -->
          <a href="#" class="wed_logo wed_logo_animation">M & S</a>

          <!-- Text Logo -->
          <div class="wed_logo_und">Wedding</div>


          <div class="wed_top_menu_mobile_link">
            <i class="ti ti-menu"></i>
          </div>
          <!-- Top Menu -->
          <div class="wed_top_menu_cont">
              <ul class="wed_top_menu">
                <!-- <li class="wed_parent"><a href="index.php">Home</a>
                  <ul>
                       <li><a href="01_index.html">Firefly Demo</a></li>
                       <li><a href="02_index.html">Dandelions Demo</a></li>
                       <li><a href="03_index.html">Red Roses Demo</a></li>
                       <li><a href="04_index.html">Orange Roses Demo</a></li>
                       <li><a href="06_index.html">Blue Butterflies Demo</a></li>
                       <li><a href="05_index.html">Purple Butterflies Demo</a></li>
                  </ul>
                </li> -->
                <li><a href="#story">Our Story</a></li>
                <li><a href="#gallery">Snippets</a></li>
                <li><a href="donation.php">Make Smile</a></li>
                <li><a href="rsvp.php">RSVP</a></li>
               <!--  <li class="wed_parent"><a href="index.php">WEDDING JOURNAL</a>
                  <ul>
                       <li><a href="01_index.html">MAKE SMILE</a></li>
                       <li><a href="02_index.html">Dandelions Demo</a></li>
                       <li><a href="03_index.html">Red Roses Demo</a></li>
                       <li><a href="04_index.html">Orange Roses Demo</a></li>
                       <li><a href="06_index.html">Blue Butterflies Demo</a></li>
                       <li><a href="05_index.html">Purple Butterflies Demo</a></li>
                  </ul>
                </li>   
                <li><a href="rsvp.php">RSVP</a></li> -->                
              </ul>
          </div>
          <!-- Top Menu End -->
        </div>
        <!-- container end -->
      </nav>

    </header>
    <!-- Header End -->


    <!-- Slider -->
    <div class="wed_slider wed_image_bck wed_fixed wed_wht_txt wed_slider_dandelions" data-stellar-background-ratio="0.2" data-image="images/cover.jpg">

      <!-- Dandelions Animation -->
      <div id="leafContainer" data-image="dandelions"></div>
      <!-- Dandelions Animaton End -->

      <!-- over -->
      <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.8"></div>

      <div class="container">

        <!-- Slider Texts -->
        <div class="wed_slide_txt wed_slide_right_middle text-center"  data-0="opacity:1;" data--400-bottom="opacity:0;">
          <img src="images/save_new4.png" height="450" alt="">
          <h4>12.06.2019</h4>
          <h3>MISHOWRA & SHAHRUKH</h3>
        </div>
        <!-- Slider Texts End -->

      </div>
      <!-- container end -->

      <!-- Slide Down -->
      <a class="wed_scroll_down wed_go" href="#wed_content" data-0="opacity:1; bottom:40px;" data--400-bottom="opacity:0; bottom:80px;">
        <b data-0="height:40px" data--400-bottom="height:55px"></b>
          Scroll
      </a>
    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="wed_content" class="wed_content">

      <!-- section -->
      <section class="wed_section_inner wed_image_bck wed_fixed wed_wht_txt" data-stellar-background-ratio="0.2" data-image="images/bride.jpg" >
        <!-- OVER -->
        <div class="wed_over" data-color="#000" data-opacity="0.2"></div>
        <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.6" data-blend="screen"></div>
        <div class="container">
            <div class="row wed_auto_height wed_middle_titles ">

                <!-- animation -->
              <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">

                <div class="col-md-5 wed_image_bck wed_fixed text-left wed_small_arrow" >
                    <h2>Mishowra Rahman</h2>
                    <h4>The Bride</h4>
                    <p>Mishowra has just appread for her finals on becoming a dentist from Chittagong Medical College (CMC). She finished her schooling from Silver Bells Girls High School & Chittagong College. She plans on to explore further on oral and maxillofacial surgery and gather expertise on it. She aims to work for underprivileged community to ensure a better healthcare & lifestyle for them. She loves to sing and has good control when it comes to debate.</p>
                    <p><img src="images/mishowra_sign.png" height="80" alt=""></p>
                </div>
                <!-- col end -->

              </div>
              <!-- Animation End -->
            </div>
            <!-- row end -->
        </div>          
        <!-- container end -->
      </section>
      <!-- section end -->

      <!-- section -->
      <section class="wed_section_inner wed_image_bck wed_fixed wed_wht_txt" data-stellar-background-ratio="0.2" data-image="images/groom.jpg" >

        <!-- OVER -->
        <div class="wed_over" data-color="#000" data-opacity="0.3"></div>
        <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.6" data-blend="screen"></div>

        <div class="container">
          <div class="row wed_auto_height wed_middle_titles">

            <!-- animation -->
            <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">

              <div class="col-md-5 col-md-offset-7 wed_image_bck wed_fixed text-left wed_groom wed_small_arrow" >
                  <h2>Mir Shahrukh Islam</h2>
                  <h4>The Groom</h4>
                  <p>Shahrukh is an entrepreneur, currently working as the managing director of Bondstein Technologies Limited and Singularity Limited. He graduated as an electrical engineer from Islamic University of Technology (IUT). He finished his schooling from Government Laboratory High School Dhaka & Dhaka College. He is a global shaper of world economic forum. He focuses on to expand business on the technology front and make social impact with it.</p>
                  <p><img src="images/shahrukh_sign.png" height="80" alt=""></p>

              </div>
              <!-- col end -->
            </div>
            <!-- Animation End -->

          </div>
          <!-- row end -->
        </div>          
        <!-- container end -->

      </section>
      <!-- section end -->

        <!-- section -->


      <!-- BORDER -->
      <div class="wed_mate_border">

        <!-- story section -->
        <section id="story" class="wed_section_outter">

          <div class="container">             
            <div class="row">

                <!-- <div class="col-sm-12 col-md-offset-2 col-md-8 text-center">
                    <div class="wed_topstory_titile wed_great_titles">
                        <h2 class= "wed_without_after">
                            Our <img class="wed_small_img" src="images/1.png" alt=""> Story
                        </h2>
                    </div>
                </div> -->
            </div>
            <!-- Row end -->

            <!-- animation -->
            <div data-animation="animation_blocks" data-bottom="@class:noactive" data--10-bottom="@class:active">  
              <!-- item-->
              <div class="row wed_story_row">    

                  <div class="col-sm-12 col-md-5 text-center wed_bd">
                      <div class="wed_second_border wed_image_bck" data-border="#e4d4fb"></div>
                      <div class="wed_portfolio_item wed_story_img">
                        <div class="wed_portfolio_item_cont wed_story_cont wed_image_bck" data-border="#e4d4fb">

                           <!--PHOTO-->
                          <img class="wed_img_height" src="images/story.jpg" alt="" >                            
                            <!--ICON LINK-->
                          <span class="wed_port_titles">
                            <!-- <span class="wed_port_title">Our First Met</span> -->
                            <!-- <span class="wed_port_subtitle">Ribfest 2016</span> -->
                            <span class="wed_port_icons">
                                <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                                <a href="images/story.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                            </span>
                          </span>
                          <!--END of ICON LINK-->

                        </div>
                      </div>
                  </div>

                  <div class="col-md-2 hidden-sm hidden-xs text-center">   
                    <div class="wed_story_center">
                      <div class="wed_story_content wed_image_bck" data-color="#e4d4fb">
                        <div class="wed_heart_container">
                          <!-- <img class="wed_heart_1" src="images/small_people/heart_3.png" alt="">
                          <img class="wed_heart_2" src="images/small_people/heart_2.png" alt=""> -->
                        </div>
                        <div class="wed_story_small_img">
                          <img src="images/small_people/small_couple.png" alt="">
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-5">
                    <div class="wed_story_txt">
                      <h3>Friends before partners</h3>
                      <div class="wed_month_year">Setting the baseline</div>
                      <h5>MAKING THE DIFFERENCES, COMPLEMENT</h5>
                      <p>We are two ordinary person. Just like few billion other people in this world we have our own dreams and passions. We found comfort in each other. We have known each other for a long time. We had our tides but never lost the respect. Come join our wedding celebration and send us your best wishes!</p> 

                    </div>                           
                  </div>    

                   
                   <div class="wed_vertical_line wed_line_top hidden-sm hidden-xs"></div>
                </div>
                <!-- END of STORY ROW-1 -->
              </div>
              <!-- Animation End -->

              

              

              
          </div>
          <!-- END of CONTAINER -->

        </section> 
        <!-- Section end -->
      </div> 
      <!-- BORDER END -->

      <!-- White border -->
      <div class="wed_white_inner_border">
        <!-- section -->
        <section class="wed_section_inner wed_image_bck wed_wht_txt wed_fixed" data-stellar-background-ratio="0.2" data-image="images/dontmissit.jpg" >
          <!-- Over -->
          <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.9"></div>

          <div class="container">
            <div class="row wed_auto_height wed_middle_titles">
              <div class="col-md-12 wed_image_bck wed_fixed text-center" >
                  <h2>Don't miss it!</h2>                    
              </div>
              <!-- col end -->
            </div>
            <!-- row end -->
            <span class="wed_countdown" data-year="2019" data-month="06" data-day="12"></span>   
          </div>          
          <!-- container end -->

        </section>
        <!-- section end -->
      </div>      
      <!-- White border end-->


     

      

      <!-- section -->
      <section id="gallery" class="wed_section_outter wed_image_bck">


        <div class="container text-center wed_great_titles">

          <h2>Snippets from engagement</h2>


          <!-- filters -->
          <!-- <div class="button-group filter-button-group">
            <a data-filter="*">Show All</a>
            <a data-filter=".web_design">Engagement</a>
            <a data-filter=".graphic_design">First Dates</a>
            <a data-filter=".logo_design">Trip</a>
          </div> -->
          <!-- filters end -->


          <!-- grid -->
          <div class="wed_portfolio grid">

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item web_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/1s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">Love Story</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/1b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item web_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/2s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">First Met</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/2b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item graphic_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/3s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">First Met</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/3b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item graphic_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/4s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">Love Story</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/4b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item web_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/5s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">First Met</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/5b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item graphic_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/6s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">First Met</span> -->
                      <span class="wed_port_icons">
                        <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                        <a href="images/snippet/6b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                      </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item logo_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/7s.jpg" alt="">
                    <span class="wed_port_titles">
                      <!-- <span class="wed_port_title">Love Story</span> -->
                      <span class="wed_port_icons">
                        <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                        <a href="images/snippet/7b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                      </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <div class="col-sm-3 wed_portfolio_item grid-item web_design">
                <div class="wed_portfolio_item_cont">
                  <img src="images/snippet/8s.jpg" alt="">
                  <span class="wed_port_titles">
                    <!-- <span class="wed_port_title">Love Story</span> -->
                    <span class="wed_port_icons">
                      <!-- <a href="#"><i class="ti ti-link"></i></a> -->
                      <a href="images/snippet/8b.jpg" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- item -->
              <!-- <div class="col-sm-3 wed_portfolio_item grid-item logo_design">
                <div class="wed_portfolio_item_cont">
                  <img src="http://placehold.it/790x766" alt="">
                  <span class="wed_port_titles">
                    <span class="wed_port_title">First Met</span>
                    <span class="wed_port_icons">
                      <a href="#"><i class="ti ti-link"></i></a>
                      <a href="http://placehold.it/1400x900" class="lightbox"><i class="ti ti-search"></i></a>
                    </span>
                  </span>
                </div>
              </div> -->

              <!-- item -->
              <!-- <div class="col-sm-3 wed_portfolio_item grid-item logo_design">
                <div class="wed_portfolio_item_cont">
                  <img src="http://placehold.it/790x766" alt="">
                  <span class="wed_port_titles">
                    <span class="wed_port_title">Love Story</span>
                      <span class="wed_port_icons">
                        <a href="#"><i class="ti ti-link"></i></a>
                        <a href="http://placehold.it/1400x900" class="lightbox"><i class="ti ti-search"></i></a>
                      </span>
                  </span>
                </div>
              </div> -->

              <!-- item -->
              <!-- <div class="col-sm-3 wed_portfolio_item grid-item logo_design">
                <div class="wed_portfolio_item_cont">
                  <img src="http://placehold.it/790x766" alt="">
                  <span class="wed_port_titles">
                    <span class="wed_port_title">First Met</span>
                      <span class="wed_port_icons">
                        <a href="#"><i class="ti ti-link"></i></a>
                        <a href="http://placehold.it/1400x900" class="lightbox"><i class="ti ti-search"></i></a>
                      </span>
                  </span>
                </div>
              </div> -->

          </div>
          <!-- grid end -->

        </div>
        <!-- container end -->

      </section>
      <!-- section end -->

      <!-- White border -->
      <div class="wed_white_inner_border">

        <!-- section -->
        <section class="wed_section_inner wed_image_bck wed_wht_txt wed_fixed wed_border" data-stellar-background-ratio="0.2" data-image="images/participation.jpg" >
          <!-- Over -->
          <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.9"></div>

          <div class="container">
            <div class="row wed_thin_titles">
              <div class="col-md-12 text-center" >
                <h2>“ The best gift is your participation ”</h2>   
              </div>
              <!-- col end -->
            </div>
            <!-- row end -->
          </div>          
          <!-- container end -->

        </section>
        <!-- section end -->
      </div>   
      <!-- White border end-->

      

      


      <!-- section -->
      <section id="journal" class="wed_section_outter">
        <div class="container text-center wed_great_titles">

          <h2>Let's start with a smile</h2>
          <!-- <h5>Description:</h5> -->
          <p>On this special day, we want you to contribute whatever is possible to help the unprivileged and bring a smile on their faces. This would be our biggest gift!</p>

          <!-- boxes -->
          <div class="wed_icon_boxes row text-left">

              <!-- item -->
              <div class="col-md-4 col-sm-12">

                <a href="https://obhizatrik.foundation/product/send-your-donation-today/" class="wed_news_block">
                  <span class="wed_news_img wed_image_bck" data-border="#e4d4fb">
                    <img src="images/donate/school.jpg" alt="">
                  </span>
                  <span class="wed_news_title">SPONSOR CHILD EDUCATION</span>
                  <span class="wed_news_author"><i>Education is the only corridor to make a good human from a child</i></span>
                  <p>“OBHIZATRIK SCHOOL”  provides free of cost education alongside the materials for free to distribute children of Bangladesh so they can extricate themselves in the world as global citizens. Beside education, we also give the students nutritious food and health check-up on a regular basis. Currently we have 400 students in 3 school which are located at Mirpur, Rayerbazar & Letercher. Our aim is to spread the light of education to the poor children and help them build a positive mindset.</p>
                  <br>
                  <span class="btn btn_new">Donate Now</span>
                </a>
              </div> 

              <!-- item -->
              <div class="col-md-4 col-sm-12">

                <a href="https://obhizatrik.foundation/product/send-your-donation-today/" class="wed_news_block">
                  <span class="wed_news_img wed_image_bck" data-border="#e4d4fb">
                    <img src="images/donate/sokkhom.jpg" alt="">
                  </span>
                  <span class="wed_news_title">DONATE A BETTER LIVILYHOOD</span>
                  <span class="wed_news_author"><i>Sustainable living for economically marginalized community</i></span>
                  <p>In Bangladesh, using Zakat’s money, people tend to purchase clothing and distribute those to the poor. This results in momentary happiness in their lifestyles. To make sustainable development, obhizatrik foundation initiated to a project titled “SHOKHKHOM”. Currently we are helping more than 290 families all over Bangladesh to enjoy a better livelihood with sustainable earning source.students in 3 school which are located at Mirpur, Rayerbazar & Letercher. Our aim is to spread the light of education to the poor children and help them build a positive mindset</p>
                  <span class="btn btn_new">Donate Now</span>
                </a>
              </div> 

              <!-- item -->
              <div class="col-md-4 col-sm-12">

                <a href="https://obhizatrik.foundation/product/send-your-donation-today/" class="wed_news_block">
                  <span class="wed_news_img wed_image_bck" data-border="#e4d4fb">
                    <img src="images/donate/school3.jpg" alt="">
                  </span>
                  <span class="wed_news_title">SPONSOR CHILD EDUCATION</span>
                  <span class="wed_news_author"><i>Education is the only corridor to make a good human from a child</i></span>
                  <p>“OBHIZATRIK SCHOOL”  provides free of cost education alongside the materials for free to distribute children of Bangladesh so they can extricate themselves in the world as global citizens. Beside education, we also give the students nutritious food and health check-up on a regular basis. Currently we have 400 students in 3 school which are located at Mirpur, Rayerbazar & Letercher. Our aim is to spread the light of education to the poor children and help them build a positive mindset.</p>
                  <br>
                  <span class="btn btn_new">Donate Now</span>
                </a>
              </div> 

          </div>
          <!-- boxes end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->



    
    </section>
    <!-- content end -->
  </div>
  <!-- Page End -->

<div class="wed_water_border">
      <!-- section -->
      <section id="rsvp" class="wed_section_inner wed_image_bck wed_fixed" data-stellar-background-ratio="0.2" data-image="images/new_border__water_flower_2.jpg">
        <!-- over -->
        <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.9" data-blend="color"></div>
        <div class="wed_over" data-color="rgb(134, 48, 252)" data-opacity="0.2"></div>

        <div class="container text-center wed_wht_txt wed_great_titles">
          <div class="row">
            <div class="col-md-8 col-md-pull-2 col-md-push-2 col-sm-12">
            <h2 class="wed_form_txt">Be our guest!</h2>
            <p class="wed_form_txt">RSVP will be subject to confirmation via email</p>
              <form action="" method="POST" id="" class="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <input class="form-control" type="text"  class="form-control" placeholder="Name" name="fullname" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <input class="form-control"  type="email" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <input class="form-control" type="text"  class="form-control" placeholder="Contact Number" name="contact_number" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <input class="form-control"  type="text" class="form-control" placeholder="Number of guests" name="guest" required>
                    </div>
                  </div>
                  <!-- <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <select class="form-control" name="guests" required>
                        <option value="">#Guests</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                  </div> -->
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form_color wed_image_bck" data-border="#b58cf0">
                      <textarea name="msg"placeholder="Write Something" class="form-control"></textarea>
                    </div>
                  </div>

                </div>
                <div align="center">
                  <button type="button"  data-toggle="modal" data-target="#userModal" class="btn btn-info">Send</button>
                </div>
                <!-- <input type="submit" value="submit"> -->
              <!-- </form> -->



            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
          </div>
          <!-- container end -->
        </section>
        <!--section end -->

          <!-- To Top -->
        <a href="#wed_page" class="wed_top ti ti-angle-up wed_go wed_image_bck" data-txt-color="#b58cf0"></a>
      </div>
      <!-- White border end -->
    </section>
    <!-- content end -->
  </div>
  <!-- Page End -->

 
     
      <!-- modal -->

      <div id="userModal" class="modal fade">
        <div class="modal-dialog">
          <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center;">DONATION</h4>
              </div>
              <div class="modal-body">
                <!-- <h2 style="text-align: center;justify-content: center;">Thanks for your RSVP. On this special moment, we would invite you to donate on social cause. Your contribution can make someone smile<span><br><p style="text-align: center;">*RSVP will br subject to confirmation via email</p></span></h2> -->

                <h2 style="text-align: center;justify-content: center; font-size: 35px;">Thanks for your RSVP.<span><p style="font-size: 23px;">On this special moment, we would invite you to donate on social cause. Your contribution can make someone smile</p></span><span><br><p style="text-align: center; font-size: 15px; font-family: sans-serif;">*RSVP will br subject to confirmation via email</p></span></h2>

                <!-- <div>
                  <h2><b>Thanks for your RSVP.</b></h2>
                  <p style="text-align: center;">On this special moment, we would invite you to donate on social cause. Your contribution can make someone smile</p>
                  <br>
                  <small>*RSVP will br subject to confirmation via email</small>
                </div> -->
                
                
                <!-- <div align="center">
                  <button name="submit" class="form-control btn btn_new wed_btn_margbot" ><a href="donation.php">Yes</a></button>
                  
                </div> -->
              </div>
              <div class="modal-footer" align="center">
                <button name="submit1" class="form-control btn btn_new wed_btn_margbot">YES, I WANT TO DONATE</button>
                <button name="submit" class="form-control btn btn_new wed_btn_margbot">NO THANKS</button>
                
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- modal -->

      </form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <!-- old script -->
    <!-- JQuery -->
    <script src="js/jquery-1.12.4.min.js"></script> 

    <!-- Library JS -->
    <script src="js/wedding_library.js"></script>
    <script src="js/library/jquery.plugin.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/leaves.js"></script>



    <!-- Theme JS -->
    <script src="js/wedding_script.js"></script>
    <!-- old script -->

    

  </body>
</html>