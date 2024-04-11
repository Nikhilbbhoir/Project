<?php
session_start();

extract($_SESSION['info']);
    //echo "<pre>";
   // print_r($_SESSION['info']); 
    //echo "</pre>";
     $imgurl = $img;
    $emailid = $email;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dribble</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/mona-sans" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid" id="logo">
          <a class="navbar-brand" href="#">dribble</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inspiration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Find Work</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Learn Design</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Go Pro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hire Designer</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2 bg-body-tertiary" type="search" placeholder="Search" aria-label="Search" id="search">
            </form>
            <div class="text-secondary p-3">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <div class="mx-2" id="upimg">
                <img id="imagePreview" src="images/<?php echo $imgurl ?>" alt="Image Preview" class="card-img-top rounded-circle">
            </div>
            <div class="avatar-upload">
                <input type="file" class="form-control" id="imageFile" title="imageFile" accept="image/*">
            </div>
          </div>
        </div>
      </nav>
        <!-- Middle Container  -->
      <div class="container text-center d-flex flex-column align-items-center justify-content-center" id="msg">
        <h2>Please verify your email...</h2>
        <div class="row" id="icon">
          <i class="fa-regular fa-envelope"></i>
        </div>
        <p>Please verify your email address, We've sent a confirmation mail to:</p>
        <h5><?php echo $emailid ?></h5>
        <p>Click the confirmation link in that email to begin using Dribble.</p>
        <p>Didn't receive the email? Check your Spam folder, it may have been caught by a filter. If you still don't see it, you can <a href="#" class="fw-semibold">resend the confirmation mail</a></p>
        <p>Wrong email address? <a href="#" class="fw-semibold">Change it</a></p>
      <!-- </div> -->
    </div>
      <!-- footer -->
      <footer class="bg-body-tertiary text-black pt-5 pb-4">
        <div class="container text-sm-left">
            <div class="row text-sm-left">
                <!-- first column  -->
                <div class="col-md-2 col-lg-3 col-xl-2 mx-auto mt-3">
                    <h5 class="mb-4 font-weight-bold" id="footer-logo">dribble</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, tenetur.</p>
                    <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-black fs-5">
                          <i class="fab fa-facebook"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-black fs-5">
                          <i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-black fs-5">
                          <i class="fab fa-instagram"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-black fs-5">
                          <i class="fab fa-pinterest"></i></a>
                      </li>
                      
                    </ul>
                </div>
                
                <!-- second column  -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mt-3">
                    <h5 class="mb-4 font-weight-bold">For Designers</h5>
                    <p><a href="#" class="text-black">Go Pro!</a></p>
                    <p><a href="#" class="text-black">Explore design work</a></p>
                    <p><a href="#" class="text-black">Design blog</a></p>
                    <p><a href="#" class="text-black">Overtime podcast</a></p>
                    <p><a href="#" class="text-black">Playoffs</a></p>
                    <p><a href="#" class="text-black">Weekly Warm-Up</a></p>
                    <p><a href="#" class="text-black">Refer a Friend</a></p>
                    <p><a href="#" class="text-black">Code of conduct</a></p>
                </div>
                
                <!-- third column  -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mt-3">
                    
                    <h5 class="mb-4 font-weight-bold">Hire Designers</h5>
                    <p><a href="#" class="text-black">Post a job opening</a></p>
                    <p><a href="#" class="text-black">Post a freelance project</a></p>
                    <p><a href="#" class="text-black">Search for designers</a></p>
                    
                    <h5 class="mb-4 font-weight-bold">Brands</h5>
                    <p><a href="#" class="text-black">Advertise with us</a></p>

                </div>
                <!-- fourth column  -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mt-3">
                    <h5 class="mb-4 font-weight-bold">About</h5>
                    <p><a href="#" class="text-black">Careers</a></p>
                    <p><a href="#" class="text-black">Support</a></p>
                    <p><a href="#" class="text-black">Media kit</a></p>
                    <p><a href="#" class="text-black">Testimonals</a></p>
                    <p><a href="#" class="text-black">API</a></p>
                    <p><a href="#" class="text-black">Terms of service</a></p>
                    <p><a href="#" class="text-black">Privacy policy</a></p>
                    <p><a href="#" class="text-black">Cookie policy</a></p>
                </div>

                <!-- fifth column  -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mt-3">
                                    
                    <h5 class="mb-4 font-weight-bold">Directories</h5>
                    <p><a href="#" class="text-black">Design jobs</a></p>
                    <p><a href="#" class="text-black">Designers for hire</a></p>
                    <p><a href="#" class="text-black">Freelance designer for hire</a></p>
                    <p><a href="#" class="text-black">Tags</a></p>
                    <p><a href="#" class="text-black">Places</a></p>
                    
                    <h5 class="mb-4 font-weight-bold">Design assets</h5>
                    <p><a href="#" class="text-black">Dribble Marketplace</a></p>
                    <p><a href="#" class="text-black">Creative Market</a></p>
                    <p><a href="#" class="text-black">Fontspring</a></p>
                    <p><a href="#" class="text-black">Font Squirrel</a></p>

                </div>
                <!-- sixth column  -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mt-3">
                    <h5 class="mb-4 font-weight-bold">Design Resources</h5>
                    <p><a href="#" class="text-black">Freelancing</a></p>
                    <p><a href="#" class="text-black">Design Hiring</a></p>
                    <p><a href="#" class="text-black">Design Portfolio</a></p>
                    <p><a href="#" class="text-black">Design Education</a></p>
                    <p><a href="#" class="text-black">Creative Process</a></p>
                    <p><a href="#" class="text-black">Design Industry Trends</a></p>
                </div>
                    <!-- line  -->
                <hr class="mb-4">

                <div class="row align-items-center ">
                    <div class="col-md-7 col-lg-8">
                        <p>&copy; 2023 Dribble. All rights reserved. </p>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <p>
                                <strong class="text-semibold">20,501,853</strong> shots dribbled
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
      </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>