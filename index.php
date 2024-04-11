<?php

include("connection.php");
    $userError ="";
    $emailError ="";
    if(isset($_POST['next'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "select * from signup where username='$user'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);
    
    
    $sql = "select * from signup where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 & $count_email == 0){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        //$sql = "INSERT INTO signup(name,username,email,password) VALUES ('$name','$user','$email','$hash')";
        //$result = mysqli_query($conn,$sql);
       // if($result){
                          //Start session
                  session_start();
                    foreach($_POST as $key => $value){
                      $_SESSION['info'][$key] = $value;
                    }
                    $keys = array_keys($_SESSION['info']);
                    
                    if(in_array('next', $keys)){
                      unset($_SESSION['info']['next']);
                    }

                    header("Location: welcome.php");
       // }
    }
    else{
        if($count_user>0){
            $userError = "* Username has already been taken";
        }
        if($count_email>0){
          $emailError = "* Email already  exists"; ;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register | Dribble</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div id="myContainer">
      <div class="container-fluid h-100">
        <div class="row h-100">
          <!-- left column -->
          <div class="col-md-4 h-full" id="left">
            <!-- logo row  -->
            <div class="row  p-3">
              <div class="col-12">
                <!-- LOGO  -->
                <div class="logo">
                  <h2 class="heading">dribble</h2>
                </div>
              </div>
            </div>

            <!-- title row -->
            <div class="row px-3">
              <div class="col-12">
                <h4 class="">Discover the world's top</h4>
                <h4 class="">Designers and Creatives</h4>
              </div>
            </div>
            <!-- image-row -->
          <div class="row" id="image">
            <div class="col-12">
              <img class="img-fluid" src="images/3.jpg" alt="img">
            </div>
          </div>

              <!-- credit title -->
              <div class="row px-3" id="credit">
                <div class="col12">
                  <p>Art by <span class="text-decoration-underline" role="button">Peter Tarka</span></p>
                </div>
              </div>
          </div>

          <!-- right column  -->
          <div class="col-md-8 h-auto" id="right">
            <!-- heading for sign in  -->
            <div class="row p-4">
              <div class="col d-flex align-items-center justify-content-end">
                <p class="fw-semibold">Already a Member? <a class="text-decoration-none" href="#">Sign In</a></p>
              </div>
            </div>

            <!-- sign up form  -->
            <div class="row">
              <div class="col" id="signup-form">
                <h1>Sign up to Dribble</h1>
                <!-- alert  -->
                 <p><span><?php echo $userError ?></span></p> 
                 <p><span><?php echo $emailError ?></span></p> 
                <form method="POST" name="form" action="" class="row needs-validation" >
                
                   <div class="col-md-6">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="name" name="name" required>
                     <div class="valid-feedback" >
                       Looks good!
                     </div>
                   </div>
                   <div class="col-md-6">
                     <label for="user" class="form-label">Username</label>
                     <div class="input-group has-validation">
                       <input type="text" class="form-control" id="user" aria-describedby="inputGroupPrepend"name="user" required>
                     </div>
                   </div>
                    <div class="col-md-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                      <div class="invalid-feedback">
                        Please provide a valid Email.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" required />
                      <div class="invalid-feedback">
                        Please provide a valid Password.
                      </div>
                    </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck" id="policy">
                         Creating an account means you're okay with our <a class="text-decoration-none" href="#">Terms of Service, Privacy Policy,</a>and our default <a class="text-decoration-none" href="#">Notification Settings</a>
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12 pt-2 d-flex flex-column" id="btnca">
                    <input class="btn btn-primary w-xm-75 w-sm-50 " id="buttoncss" type="submit" name="next" value="Create Account" />
                </form>
                <!-- Google warning  -->
                <div class="row pt-3 text-secondary" id="warn">
                    <p class="text-center text-md-start">This site is protected by reCAPTCHA and the Google <a class="text-decoration-none" href="#">Privacy Policy</a> and <a class="text-decoration-none" href="#">Terms of Service</a> apply</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>