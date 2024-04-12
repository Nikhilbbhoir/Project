<?php
  //Start session
  session_start();
  // Upload Image 
  if(isset($_FILES['img'])){;

    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_type = $_FILES['img']['type'];

    move_uploaded_file($file_tmp,"upload/".$file_name);
  }
  
  // Save data
  
  if(isset($_POST['submit'])){
   
    //Create new session variable 
    foreach($_POST as $key => $value){
      $_SESSION['info'][$key] = $value;
    }
    $keys = array_keys($_SESSION['info']);
    
    if(in_array('submit', $keys)){
      unset($_SESSION['info']['submit']);
    } 
    // session code ends

      extract($_SESSION['info']);
      $arr = implode(", ",$inlineCheckbox);
 
     $hash = password_hash($password, PASSWORD_DEFAULT);
     include("connection.php");
     // echo $name,$user,$email,$img,$location,$arr;
     $sql = "INSERT INTO signup(name,username,email,password,img,location,opt) VALUES ('$name','$user','$email','$hash','$img','$location','$arr')";
         $result = mysqli_query($conn,$sql);
        if($result){
         // echo "Data has been saved successfully!";
         header("Location: final.php");
     }else{
         echo mysqli_error($conn);
     }

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome | Dribble</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/profile.css" />
  </head>
  <body>
<div class="container-fluid" id="profile">
        <div class="row">
            <div class="col-12 container px-5 py-4 d-flex gap-3">
                <h2>dribble</h2>
                <button type="button" class="btn btn-light btn-sm px-3" id="back"><</button>
            </div>

        </div>
    <form method="POST" name="form" action="" class="needs-validation" enctype="multipart/form-data">
        <!-- First Screen  -->
        <div class="container-fluid" id="firstscreen">
            <div class="container h-full d-flex flex-column align-items-start justify-content-center mx-auto fw-bolds" id="pr">
                    <div class="d-flex align-items-start justify-content-start">
                        <h1 class="fw-bold text-center">Welcome! Let's create your profile </h1>
                    </div>
                <div class="">
                    <p class="text-center">Let others get to know you better! You can do these later</p>
                </div>
            <div class="container">
                <div class=" ">
                    <h5 class="fw-bold">Add an Avatar </h5>
                </div>

                
                <div class="form">
                    <div class=" container d-flex flex-column flex-sm-row align-items-center">
                        <div class="btn-secondary" id="upimg">
                            
                            <img id="imagePreview" src="images/blank-profile-picture-973460_960_720.webp" alt="Image Preview" class="card-img-top mt-2 rounded-circle">
                           
                        </div>
                        <div class="px-5 py-3">
                                <div class="avatar-upload">
                                    <label for="imageFile" class="form-label  text-center">Image Upload</label>
                                    <input type="file" class="form-control" id="imageFile" name="img" accept="image/*" required>
                                </div>
                        </div>
                    </div>
                    
                    <div class="container pt-5 px-0" id="loc">
                        <h5 class="fw-bold">Add your location</h5>
                        <input type="text" class="form-control border-bottom no-outline fw-bold" name="location" id="location" title="location" placeholder="Enter a Location" required>
                    </div>

                </div>
                    <div class="pt-5" id="btnca">
                        <input class="btn btn-primary" name="next" id="next" type="button" value="Next" onsubmit="return profile()" />
                    </div>
            </div>
                

            </div>
        </div>
        <!-- Second Screen  -->
        <div class="container-fluid" id="secondscreen">
            <div class="container-fluid h-full d-flex flex-column align-items-start mx-auto fw-bolds" id="pr">
                    <div class=" container">
                        <h2 class="fw-bold text-center">What brings you to Dribble? </h2>
                    </div>
                <div class="container" id="subtitle">
                    <p class="text-center">Select the options that bset describe to you. Don't worry, you can explore other options later</p>
                </div>
            <div class="container">

                <div class="p-4 mt-3" id="formcard">
                   <div class="container-fluid d-flex flex-column align-items-center flex-md-row gap-4">
                    <!-- Card 1 -->
                    <div class="card mt-4" id="imgcard1" >
                        <img src="images/card1.png" class="card-img-top" alt="explain" id="cardimg1">
                        <div class="card-body container d-flex flex-column justify-content-end" id="mar1">
                          <h5 class="card-title text-center">I'm a designer looking to share my work</h5>
                          <p class="card-text text-center" id="para1">Some quick example text to build on the card title and make up the bulk.</p>
                          
                          <div class="form-check form-check-inline mx-auto">
                            <input class="form-check-input rounded-circle" type="checkbox" id="inlineCheckbox1" value="option1" title="inlineCheckbox1" name="inlineCheckbox[]">
                          </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card mt-4" id="imgcard2">
                        <img src="images/card2.png" class="card-img-top" alt="explain" id="cardimg2">
                        <div class="card-body container d-flex flex-column justify-content-end" id="mar2">
                          <h5 class="card-title text-center">I'm a designer looking to share my work</h5>
                          <p class="card-text text-center" id="para2">Some quick example text to build on the card title and make up the bulk.</p>
                          
                          <div class="form-check form-check-inline mx-auto">
                            <input class="form-check-input rounded-circle" type="checkbox" id="inlineCheckbox2" value="option2" title="inlineCheckbox2" name="inlineCheckbox[]">
                          </div>
                        </div>
                    </div>
                    <!-- Card 3  -->
                    <div class="card mt-4" id="imgcard3">
                        <img src="images/card3.png" class="card-img-top" alt="explain" id="cardimg3">
                        <div class="card-body container d-flex flex-column justify-content-end" id="mar3">
                          <h5 class="card-title text-center">I'm a designer looking to share my work</h5>
                          <p class="card-text text-center" id="para3">Some quick example text to build on the card title and make up the bulk.</p>
                          
                          <div class="form-check form-check-inline mx-auto">
                            <input class="form-check-input rounded-circle" type="checkbox" id="inlineCheckbox3" value="option3" title="inlineCheckbox3" name="inlineCheckbox[]">
                          </div>
                        </div>
                    </div>

                   </div>

                    <div class="pt-5 d-flex flex-column" id="btncard">
                      <p class="text-center text-danger" id="checkerror">
                        <?php echo $checkerror ?></p>
                        <button class="btn btn-primary m-auto" id="buttoncss" type="submit" name="submit">Finish</button>
                      </div>

                </div>
            </div>
                

            </div>
        </div>
    </form>
</div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
