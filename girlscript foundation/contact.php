<!---------------------------Girlscript foundation Jammu Chapter All rights reversed------------------------------------>
<!--------------------------------------------------------created by Danish Soma--------------------------------------->
<?php

$hostname='localhost';
$username='root';
$password="";
$dbname="girlscript";

$conn=new mysqli($hostname,$username,$password,$dbname);


 if(isset($_POST['submit']))
 {
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone_no=$_POST['phone_no'];
 $message=$_POST['message'];
 $dtcreated=date('d-M-Y');

 $sql="INSERT INTO contact_table(name,email,phone_no,message,created_at) VALUES ('$name','$email','$phone_no','$message','$dtcreated')";

$run=$conn->query($sql);
if($run)
{
    echo "successful";
}

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Girlscript Foundation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="background: #d9d9d9;">
    <!-------------------------------------navbar---------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark  fixed-top py-1">
                <a class="navbar-brand" href="#" class="ml-xl-5" style="margin-left:60px;">
                        <img src="image/Logo.png" width="65" height="65" class="d-none d-lg-block">
                </a>   
                <a class="navbar-brand letters" href="#" class="ml-xl-5 mt-5 d-inline align-middle">
                       <header class="font-size:30px; margin-left:14px;">
                    GIRLSCRIPT<br><p style="font-size:15px;margin-left:0px;">Jammu and Kashmir</p>
                       </header>
                </a>
    
                    <button class="navbar-toggler ml-sm-5"  type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav ml-auto mr-xl-5" style="font-size:20px; color:white;">
                        <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link " href="about.html">About</a>
                        <a class="nav-item nav-link " href="sponser.html">Sponser</a>
                        <a class="nav-item nav-link" href="programs.html" tabindex="-1" aria-disabled="true">Programs</a>
                        <a class="nav-item nav-link" href="gallery.html">Gallery</a>
                        <a class="nav-item nav-link s active" href="contact.php">Contact</a>
                        <a class="nav-item nav-link sample mr-xl-5" href="https://docs.google.com/forms/d/e/1FAIpQLScnuLUTgonVb50QxEXqv0gmX6nPs9evOIH01uI7YOwm7Up7Cg/viewform">Join Us</a>
                      </div>
                    </div>
                  </nav>
        <!--------------------------------------navbar------------------------------------------------------------>
        <!------------------------------------------header-section---------------------------------------------------------------->
        <div id="gallery-section" class="py-5 px-5" style=" background:url('image/contact.jpg');">
                <div class="dark-overlay">
                <div class=" home-inner  text-center container">
                            <h3 class="display-3 pt-5 mt-xl-3 ">
                            <h2 class="display-3" id="sample3">Contact Us</h2>
                            </h3>
                            <p class="lead" id="sample4">We are ready to lead you in the future of Technology.</p>
                         
                        </div>
                       
                    </div>
                    </div>
                </div>
            </div>
              <!-------------------------------------------header-section------------------------------------------------------------------->
<br><br><br>
    <!--------------------------------------------------body-------------------------------------------------------------------------------->
  <div id="contactform">
      <div class="container">
          <div class="form">
              <div class="row">
                  <div class="col">
                        <div class="d-flex justify-content-between" style="margin-left:0px;">
                 <div class="p-2 bd-highlight">
                      <h2 class="">Get in Touch</h2>
                     <h6 class="mb-4">Please fill out the quick form and we in touch with us.</h6>
                     <!--------------------------------------------------------------->
                    <form method="post" action="contact.php">
                    <div class="form-group">
                <input type="text" class="form-control sample5" name="name" id="name" placeholder="Your Name">
                  </div>
             <div class="form-group">
              <input type="text" class="form-control sample5" name="email" id="email" placeholder="Your Email">
                 </div>
                <div class="form-group">
                   <input type="number" class="form-control sample5" name="phone_no" id="phone_no" placeholder="Your Phone No">
                 </div>
                <div class="form-group">
              <textarea class="form-control sample5" id="message" rows="4" name="message">Message here..</textarea>
                 </div>
                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg disabled mt-3" tabindex="-1" role="button" aria-disabled="true">
            </form>
              </div>
                <div class="p-2 bd-highlight d-none d-md-block">
                    <p class="font-weight-bold" id="sample6">Connect with us:</p>
                    <p><span id="sample7">For any question or information:</span><br></p>
                        <span class="mt-4" id="sample7">Email us at: <span style="color: #1f7a7a

                          "><a href="">girlscript.jammuandkashmir@gmail.com</a></span></span>
                    <span>

                    </span></p>

                    <p>
                        <span class="font-weight-bold">Follow us on</span><br>
                            <span id ="font-2">
                                    <br>
                                  <span class="f-2"><a href="#"><i class="fa fa-facebook text-dark fa-2x mr-3" aria-hidden="true"></i></a></span>
                                  <span class="f-2"><a href="#"><i class="fa fa-twitter text-dark  fa-2x mr-3" aria-hidden="true"></i></a></span>
                                  <span class="f-2"><a href="#"><i class="fa fa-instagram text-dark  fa-2x mr-3" aria-hidden="true"></i></a></span>
                                  <span class="f-2"><a href="#"><i class="fa fa-linkedin  text-dark  fa-2x mr-3" aria-hidden="true"></i></a></span>
                                  </span>
                                  </span>
                    </p>
                </div>
                              </div>
                  </div>
                </div>
          </div>
        </div>
  </div>
<!-----------------------------------------------------------body---------------------------------------------------------------------------->


              <br><br><br>
 <!--------------------------------------------------------------footer----------------------------------------------------------------------------->
<div id="footer-section" style="">
  <div class="dark-overlay-1">
    <div class="home-1 text-center container">
    <div class="row">
      <div class="col-xl-3">
        <img src="image/Logo.png" width="140px" class="mt-3" height="180px">
        <p id="image-text" class="mt-3">For the brighter Future</p>
      </div>
      <div class="col-xl-3 s-1  text-white">
          <ul class="section mt-3">
            <li class="section-divide">
                <a href="#">Code of Conduct</a>
            </li>
            <li class="section-divide">
            <a href="#">Learn More</a>
            </li>
            <li class="section-divide">
              <a href="#"> Careers</a>
            </li>
            <li class="section-divide">
                <a href="#">Support us</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-3  s-2 mt-4 text-left">
            <p class="text-3"><span>
              <a href="#">ABOUT</a>
            </span>
            <span class="ml-1">
                <a href="#">TERMS
                  </a>
                </span>
            <span class="ml-1">
                <a href="#">PRIVACY</a></span>
            <span class="ml-1">
                <a href="#">FAQ</a></span>
            </p>
    
            <p class="year mt-3">&copy; Girlscript Foundation J&K | <span id="year">2018</span></p>
            <p style="font-size:13px; color:white; ">Created  By Danish Soma</p>
          </div>
          <div class="col-xl-3 s-3 sample-4 mt-4" style="font-size:13px; color:white;">
                <div style="text-align:left;">
                  <span><i class="fa fa-map-marker fa-2x mr-2" aria-hidden="true"></i></span><span>Jammu, Jammu & Kashmir-180001</span><br>
                  <span><i class="fa fa-mobile fa-2x mr-2 mt-4" aria-hidden="true"></i></span><span>+91 - 914977180</span><br>
                  <span><i class="fa fa-envelope fa-1x mt-4 mr-1" aria-hidden="true"></i></span><span>girlscript.jammuandkashmir@gmail.com</span><br><br>
                  <span id ="font-2">
                    <br>  <span class="f-2"><a href=" https://www.instagram.com/girlscript_jammu_and_kashmir/?hl=en"><i class="fa fa-instagram fa-2x mr-3" aria-hidden="true"></i></a></span>
              <span class="f-2"><a href="https://twitter.com/GirlscriptK?s=09"><i class="fa fa-twitter fa-2x mr-3" aria-hidden="true"></i></a></span>
              <span class="f-2"><a href="https://www.facebook.com/Girlscriptjammuandkashmir/"><i class="fa fa-facebook fa-2x mr-3" aria-hidden="true"></i></a></span>
              <span class="f-2"><a href="#"><i class="fa fa-linkedin fa-2x mr-3" aria-hidden="true"></i></a></span>
                  </span>
                  <span></span>
                </div>
            </div>
    


    </div>


  </div>
</div>
  </div>



 <!--------------------------------------------------------------footer--------------------------------------------------------------------------->
               <!-----------------------------------------script-------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-------------------------------------------------year----------------------------------------------------------------------------------->
       <script>
         document.getElementById("year").innerHTML = new Date().getFullYear();
      </script>       
<!----------------------------------------------lightbox--------------------------------------------------------------------------------->
<script>
$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
 </script>

      </body>
</html>