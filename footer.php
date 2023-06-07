<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sharvaya Infotech</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>


    <style>


        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}


        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }


        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }


        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }


        .modal-content, #caption {  
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>



    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>E-803, Titanium City Center, 100 Feet Road,near Sachin Tower, Ahmedabad, 380015.Gujarat, India.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+91-909-998-8302">+91 90999 88302</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+91-909-998-8301">+91 90999 88301</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto: info@sharvayainfotech.com">info@sharvayainfotech.com</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://www.facebook.com/people/Sharvaya-Infotech/100065282880318/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://instagram.com/sharvaya.infotech?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="https://www.linkedin.com/company/sharvayainfotech/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="package.php">Package</a>
                    <a class="btn btn-link" href="industries.php">industries</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                </div>


<!-- <style type="text/css">
a img{ 
        width: 25%;
}
</style>


<div id="instafeed-container"></div>



<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
<script type="text/javascript">
var userFeed = new Instafeed({
get: 'user',
target: "instafeed-container",
resolution: 'low_resolution',
accessToken: 'YOUR_INSTAGRAM_ACCESS_TOKEN_GOES_HERE'
});
userFeed.run();
</script>  !-->


                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Gallery</h5>
                    <img class="myImages" id="myImg" src="img/project-1.jpg" alt="Image" width="70" height="80">
                    <img class="myImages" id="myImg" src="img/project-2.jpg" alt="Img"width="70" height="80">
                    <img class="myImages" id="myImg" src="img/project-3.jpg" alt="Img" width="70" height="80"></br>
                    </br>
                    <img class="myImages" id="myImg" src="img/project-4.jpg" alt="Image" width="70" height="80">
                    <img class="myImages" id="myImg" src="img/project-5.jpg" alt="Img"width="70" height="80">
                    <img class="myImages" id="myImg" src="img/project-6.jpg" alt="Img" width="70" height="80">
                  
                </div>
               

                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>

                <script>



                    var modal = document.getElementById('myModal');

                    var images = document.getElementsByClassName('myImages');

                    var modalImg = document.getElementById("img01");

                    var captionText = document.getElementById("caption");


                    for (var i = 0; i < images.length; i++) {
                        var img = images[i];

                        img.onclick = function (evt) {
                            console.log(evt);
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }
                    }

                    var span = document.getElementsByClassName("close")[0];

                    span.onclick = function () {
                        modal.style.display = "none";
                    }



                </script>



                <!-- <div class="col-lg-3 col-md-6">
                     <h5 class="text-light mb-4">Gallery</h5>
                     <div class="row g-2">
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-1.jpg" alt="Image">
                         </div>
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-2.jpg" alt="Image">
                         </div>
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-3.jpg" alt="Image">
                         </div>
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-4.jpg" alt="Image">
                         </div>
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-5.jpg" alt="Image">
                         </div>
                         <div class="col-4">
                             <img class="img-fluid rounded" src="img/project-6.jpg" alt="Image">
                         </div>
                     </div>
                 </div>  !-->
               

                <div class="col-lg-3 col-md-6">

                    <h5 class="text-light mb-4">Our Services</h5>
                    <a class="btn btn-link" href="CustomizeERP.php">Customized ERP Software</a>
                    <a class="btn btn-link" href="School University.php">School/ University Management Software</a>
                    <a class="btn btn-link" href="Website.php">Website Development</a>
                    <a class="btn btn-link" href="MobileApplication.php">Mobile Application Development</a>
                    <a class="btn btn-link" href="DigitalMarketing.php">Digital Marketing</a>
                    <a class="btn btn-link" href="RFID System.php">RFID System Integration</a>

                   
                </div>
                
                <center><div> <a href="https://play.google.com/store/apps/details?id=com.sharvayainfotech.eofficedesk"><img src="img/googe-play.png" style="width:200px"></a>
                    <a href="https://apps.apple.com/us/app/sharvaya-erp/id1626023618" ><img src="img/app-store.png" style="width:200px"></a>
               
                <!-- Put the Google Reivews !-->
                <script src="https://widget.trustmary.com/NW1Ym4zDqI"></script></div></center>
                

            

      <script src="js/embed.min.js" type="text/javascript"></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"","cornerRadius":40,"marginBottom":80,"marginLeft":20,"marginRight":30,"btnPosition":"right","whatsAppNumber":"+919099988302","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          var wa_widgetSetting = {"title":"Ashish Rathod","subTitle":"Typically replies in a day","headerBackgroundColor":"#eaf1ea","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":10,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"img/Sharvaya_logo_small.jpg","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
          window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
          };
        </script>
      
            </div>
        </div>

        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;<?php echo date('Y'); ?> <a href="#">Sharvaya Infotech</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>