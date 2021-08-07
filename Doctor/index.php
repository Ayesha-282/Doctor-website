<?php
include "php/config.php";
include "php/insert.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport " content="width=device-width,initial-scale=1.0">
        <title>Complete Responsive Hospital Website Design Tutorial</title>
        <!-- bootstrap cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css  " integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- font Awesome cdn link -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Custom css file link -->
       <link rel="stylesheet" type="text/css" href="style.css">

        <!-- aos css file cdn link --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <!-- <link rel="stylesheet" href="aos-master/dist/aos.css"> -->

        <!-- gallery -->
          <link rel="stylesheet" href="css/lightbox.min.css">
        <script src="js/lightbox-plus-jquery.min.js"></script>

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    </head>
    <body data-spy="scroll" data-target=".navbar">
 
     <div class="container-fluid head">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm fixed-top ">

         <a href="#" class="navbar-brand"><span class="text" ><span class="highlight">Health</span ><small>Care</small></span></a>
         <button type="button" class="navbar-toggler  ml-auto custom-toggler" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon "></span>
         </button>
         <div id="myNavbar" class="collapse navbar-collapse "> 
          <ul class="navbar-nav ml-auto">
           <li class="nav-item"><a href="#Home" class="nav-link">Home</a></li> 
           <li class="nav-item"><a href="#About" class="nav-link">About</a></li><!-- &nbsp;&nbsp; -->
           <li class="nav-item"><a href="#Facalty" class="nav-link">Facalty</a></li>
           <li class="nav-item"><a href="#Review" class="nav-link">Review</a></li>
           <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
           <li class="nav-item"><a href="#Post" class="nav-link">Post</a></li>
           

         </ul>  
  
         </div>
       </nav>
            </div>
        </div><br><br>

    </div><br><br><br>
    <!-- home section started -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 " data-aos="zoom-in">
                <img src="images/3 (3).png" id="img">
                
            </div>
            <div class="col-sm-6 safe" data-aos=" fade-left">
               <!--  <br><br><br><br><br><br><br><br><br><br><br><br> -->
                <h1><span class="text1">Stay</span> Safe <span class="text1">Stay </span> Healthy.<br>Caring For Your Life .</h1>
                <br>
                <a href="#"><button type="button" class=" button">Learn More</button></a>
            </div>
        </div>
    </div>
    <!-- home section end -->
    <!-- About start  -->
    <section class="about" id="About">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 abt" data-aos="fade-right">
                    <div class=" box">
                        <h3><i class="fas fa-ambulance"></i> Amulance Services</h3>
                        <p>  Lorem ipsum dolor sit amet consectetur adipisicting elit.Ipsa,suscipit.</p>
                    </div>
                    <div class=" box">
                        <h3><i class="fas fa-procedures"></i> Emergency Room</h3>
                        <p>   Lorem ipsum dolor sit amet consectetur adipisicting elit.Ipsa,suscipit.</p>
                    </div>
                    <div class=" box">
                        <h3><i class="fas fa-stethoscope"></i> Free Check-Ups</h3>
                        <p>  Lorem ipsum dolor sit amet consectetur adipisicting elit.Ipsa,suscipit.</p>
                    </div>
    
                </div>
                <div class="col-sm-6 d-none d-md-block " data-aos="fade-left">
                    <img src="images/Capture.PNG" alt="">
                </div>
            </div>
        </div>

    </section><br><br>

    <!-- About end  -->

    <!-- facaltiy start -->
    <section class="facalty" id="Facalty">
         <div class="gallery" data-aos="zoom-in">
             <h1 style="text-align: center;">'Our Facalty'</h1>
            <a href="images/doctor-img1.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img1.jpg" alt=""></a>
            <a href="images/doctor-img2.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img2.jpg" alt=""></a>
            <a href="images/doctor-img3.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img3.jpg" alt=""></a>
            <a href="images/doctor-img4.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img4.jpg" alt=""></a>
            <a href="images/doctor-img5.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img5.jpg" alt=""></a>
            <a href="images/doctor-img6.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img6.jpg" alt=""></a>
            <a href="images/doctor-img1.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img1.jpg" alt=""></a>
            <a href="images/doctor-img2.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img2.jpg" alt=""></a>
            <a href="images/doctor-img3.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img3.jpg" alt=""></a>
            <a href="images/doctor-img4.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img4.jpg" alt=""></a>
            <a href="images/doctor-img5.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img5.jpg" alt=""></a>
            <a href="images/doctor-img6.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img6.jpg" alt=""></a>
            <a href="images/doctor-img1.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img1.jpg" alt=""></a>
            <a href="images/doctor-img2.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img2.jpg" alt=""></a>
            <a href="images/doctor-img3.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img3.jpg" alt=""></a>
            <a href="images/doctor-img4.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img4.jpg" alt=""></a>
            <a href="images/doctor-img5.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img5.jpg" alt=""></a>
            <a href="images/doctor-img6.jpg" data-lightbox="mygallery" data-title="Doctor"><img src="images/doctor-img6.jpg" alt=""></a>
            
        </div>

       </section><br>



     <!-- facaltiy end -->

    <!--  people review start -->
    <section id="Review" class="review">
        
     <div class="container">
        <h1 >' People Review '</h1><br>
        <div class=" box-container" >
            
            <div class="box" data-aos="fade-right">
                <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                <h3>Some one's name</h3>
                <span>3 jan 2000</span>
                <img src="images/team-2.jpg" alt="" >
            </div>
            <div class="box" data-aos="fade-up">
                <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                <h3>Some one's name</h3>
                <span>3 jan 2000</span>
                <img src="images/team-3.jpg" alt="" >
            </div>
            <div class="box" data-aos="fade-left">
                <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                <h3>Some one's name</h3>
                <span>3 jan 2000</span>
                <img src="images/team-4.jpg" alt="" >
            </div>



        </div>
     </div>
    </section><br>




    <!--  people review end -->
    <!--  counter start -->
    <section class="counter">
        <div class="counter">
            <div class="box-container" >
                <div class="box" data-aos="fade-up">
                    <i class="fas fa-hospital"></i>
                    <span>120+</span>
                    <h3>Hospital</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <i class="fas fa-user"></i>
                    <span>100</span>
                    <h3>Staff</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <i class="fas fa-smile"></i>
                    <span>1200</span>
                    <h3>happy patient</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <i class="fas fa-procedures"></i>
                    <span>130+</span>
                    <h3>bed facility</h3>
                </div>

            </div>
        </div>

    </section>




    <!--  counter end -->

    <!--  contec us start -->
    <section class="contact" id="Contact">
        <div class="container">
            <div class="container mt-4 p-4">
                <div class="row">
                    <div class="col-md-6 offset-3" data-aos="flip-down">
                        <h2 class="text-center my-4">
                           'Make An Appointment'
                        </h2>
                        <form method="POST">
                            <div class="form-group row">
                                <label class="col-sm-4 col-lg-4">
                                    Patient Name
                                </label>
                                <div class="col-sm-8 col-lg-8">
                                    <input type="text"id="name"class="form-control"
                                    placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <!---->
                            <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                  Contact
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <input type="tel"id="tel"class="form-control"
                                  placeholder="123" name="tel" required>
                              </div>
                          </div>
                          <!---->
                          <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                Date
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <input type="date"id="date"class="form-control" name="date" require>
                              </div>
                          </div>
                          <!---->
                          <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                 Time
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <input type="time" id="time"class="form-control" name="time" require>
                                 </div>
                          </div>
                          <!---->
                          <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                 Symptoms
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <textarea id="textarea" class="form-control" name="textarea" required></textarea>
                              </div>
                          </div>
                          <!---->
                          <div class="form-group row justify-content-end">
                              <div class="col-sm-5">
                                  <button type="submit"class="btn btn-form btn-primary" id="submit" name="submit">
                                      Make Appointment
                                  </button>
                              </div>
                          </div>
          
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2 id="services" class="text-center my-4"></h2>
                        <ul id="consultations"class="list-group"></ul>
                    </div>
                </div>
            </div>

        </div>

    </section><br>


    <!--  contec us end -->

    <!-- post start -->
    <section class="post" id="Post">
        <div class="container">
            <h1 class=" my-4" style="text-align: center;">
                'Make An Appointment'
             </h1>
            <div class=" box-container" >
               
                <div class="box" data-aos="fade-right">
                    <img src="images/team-2.jpg" alt="" >
                    <div class="content">
                        <a href="#"><h3>Post title goes here</h3></a>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                    
                    <a href="#"><button type="submit"class="btn btn-form btn-primary">
                       learn more
                    </button></a>
                    </div>
                    
                </div>
                <div class="box" data-aos="fade-up">
                    <img src="images/team-3.jpg" alt="" >
                    <div class="content">
                        <a href="#"><h3>Post title goes here</h3></a>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                    
                    <a href="#"><button type="submit"class="btn btn-form btn-primary">
                       learn more
                    </button></a>
                    </div>
                    
                </div>
                <div class="box" data-aos="fade-right">
                    <img src="images/team-4.jpg" alt="" >
                    <div class="content">
                        <a href="#"><h3>Post title goes here</h3></a>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>
                    
                    <a href="#"><button type="submit"class="btn btn-form btn-primary">
                       learn more
                    </button></a>
                    </div>
                    
                </div>
        </div>

    </section>


    <!-- post end -->
    
    <!-- footer start -->
     <section class="footer">
     <div class="container">
         <div class="row">
             <div class="col-md-4" data-aos="fade-right">
                <h3>Health Care</h3>
                <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque</p>

             </div>
             <div class="col-md-4 text-center" data-aos="fade-up">
                <h3 >Links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">facility</a>
                <a href="#">review</a>
                <a href="#">contact</a>
                <a href="#">post</a>

             </div>
             <div class="col-md-4 text-center" data-aos="fade-left">
                <h3>Share</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">github</a>
              

             </div>

         </div>
        </div>
        <h1 class="credit">Created by <span style="color: blue;"> Ayesha</span> || All Rights Reserved </h1>
     

     </section>


    <!-- footer end -->
     
        
         <!-- aos js file cdn link --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <!-- <script src="aos-master/dist/aos.js"></script> -->


        <!-- jquery cdn link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <!-- Custom js link   -->
         <script src="js/main.js  "></script>

      
         <script>
             AOS.init({
                 duration:1000,
                 delay:400

             });
         </script>

    </body>
</html> 