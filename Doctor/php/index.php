<?php
require_once("config.php"); 
include "login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin side</title>
    <!-- <link rel="stylesheet" type="text/css" href="..//style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<section class="contact" id="Contact">
        <div class="container">
            <div class="container mt-4 p-4">
                <div class="row">
                    <div class="col-md-6 offset-3" data-aos="flip-down">
                        <h2 class="text-center my-4">
                           'ADMIN LOGIN'
                        </h2>
                        <form method="POST">
                            <div class="form-group row">
                                <label class="col-sm-4 col-lg-4">
                                   Adim Name:
                                </label>
                                <div class="col-sm-8 col-lg-8">
                                    <input type="text" id="name"class="form-control"
                                    placeholder="Name" name="name"required>
                                </div>
                            </div>
                            <!---->
                            <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                 Admin Password :
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <input type="password"id="password"class="form-control"
                                  placeholder="password" name="password" required>
                              </div>
                          </div>
                          <!---->
                          <div class="form-group row">
                              <label class="col-sm-4 col-lg-4">
                                Date
                              </label>
                              <div class="col-sm-8 col-lg-8">
                                  <input type="date"id="date"class="form-control" name="date">
                              </div>
                          </div>
                          <!---->
                          
                          <!---->
                          
                          <!---->
                          <div class="form-group row justify-content-end">
                              <div class="col-sm-5">
                                  <button type="submit"class="btn btn-form btn-primary" id="login" name="login">
                                      login admin
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

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="aos-master/dist/aos.js"></script>


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