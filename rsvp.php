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
        $email_register = 'Already use this email';
        
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

<!DOCTYPE>
<html>
  <head>
     <title>M&S | Wedding</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- old script -->
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
    <!-- old script -->

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
      <nav class="wed_light_nav">
        <div class="container">

          <!-- couple header -->
          <img class="wed_couple_header wed_kissing_couple animated extra" src="images/3.png" alt=""/>
          <img class="wed_couple_header wed_white_couple animated extra" src="images/3.png" alt=""/>
          <!-- couple header end -->

          <!-- Logo -->
          <a href="#" class="wed_logo wed_logo_animation">S & M</a>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#story">Our Story</a></li>
                <li><a href="index.php#gallery">Snippets</a></li>
                <li><a href="donation.php">Make Smile</a></li>
                <li><a href="rsvp.php">RSVP</a></li>                
              </ul>
          </div>
          <!-- Top Menu End -->
        </div>
        <!-- container end -->
      </nav>

    </header>
    <!-- Header End -->


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