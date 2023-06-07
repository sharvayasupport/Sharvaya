<?php include('./header.php'); ?>


<style>
    
body{
     background:#eee;
 }
 .brands {
     width: 100%;
     padding-top: 90px;
     padding-bottom: 90px
 }

 .brands_slider_container {
     height: 130px;
     border: solid 1px #e8e8e8;
     box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
     padding-left: 97px;
     padding-right: 97px;
     background: #fff;
 }
 
 .brands_slider {
     height: 100%;
     margin-top: 50px
 }

 .brands_item {
     height: 100%
 }

 .brands_item img {
     max-width: 100%
         
 }

 .brands_nav {
     position: absolute;
     top: 50%;
     -webkit-transform: translateY(-50%);
     -moz-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
     -o-transform: translateY(-50%);
     transform: translateY(-50%);
     padding: 5px;
     cursor: pointer
 }

 .brands_nav i {
     color: #e5e5e5;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .brands_nav:hover i {
     color: #676767
 }

 .brands_prev {
     left: 40px
 }

 .brands_next {
     right: 40px
 }
</style>

<script type="text/javascript">
$(document).ready(function(){

   if($('.brands_slider').length)
        {
            var brandsSlider = $('.brands_slider');

            brandsSlider.owlCarousel(
            {
                loop:true,
                autoplay:true,
                autoplayTimeout:5000,
                nav:false,
                dots:false,
                autoWidth:true,
                items:8,
                margin:42
            });

            if($('.brands_prev').length)
            {
                var prev = $('.brands_prev');
                prev.on('click', function()
                {
                    brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.brands_next').length)
            {
                var next = $('.brands_next');
                next.on('click', function()
                {
                    brandsSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                
                
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/CRM ERP SOFTWARE MOBILE EPLICATION 3.gif" alt="Image">
                </button>
                
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1"   aria-current="true" aria-label="Slide 1">
                     <img class="img-fluid" src="img/Customized ERP Software.png" alt="Image">
                </button>
                
                
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2"   aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/Devp2.gif" alt="Image">
                </button>
                
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="3"  aria-current="true" aria-label="Slide 2">
                    <img class="img-fluid" src="img/Devp1.gif" alt="Image">
                </button>
               
                
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="4"  aria-current="true" aria-label="Slide 5">
                     <img class="img-fluid" src="img/4391698.jpg" alt="Image">
                </button>
                
               <!-- <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/Slider 1.jpg" alt="Image">
                </button> !-->
               
                
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="5" aria-label="Slide 7">
                    <img class="img-fluid" src="img/industry.png" alt="Image">
                </button>
                
                
            </div>
            <div class="carousel-inner">
                
                
                <div class="carousel-item active">
                    <img class="w-100" src="img/CRM ERP SOFTWARE MOBILE EPLICATION 3.gif" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="w-100" src="img/Devp2.gif" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item ">
                    <img class="w-100" src="img/Devp1.gif" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
          
                <div class="carousel-item">
                    <img class="w-100" src="img/4391698.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Slider2.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
                
                 <div class="carousel-item">
                     <img class="w-100" src="img/Customized ERP Software.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                        </div>
                    </div>
                </div>
                
               
                
            </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> 
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Team Members</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">35</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Years Experience</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">30</h1>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Satisfied Clients</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">150</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Projects Done</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">200</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/about-fimage.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3"><b>About Us</b></h4>
                        <h1 class="display-6 mb-4">#We are a company <span class="text-primary"></span> with the various segments Expertise.</h1>
                        <p>We believe in to deliver high value software solutions to our customer by tapping the technologies available at hand and bring a positive and effective change for the business functions.</p>
                        <p class="mb-4">.</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="img/service-1.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                              
                                <small>Customized ERP Software Solution</small>
                            </div> &nbsp;
                            
                            <img class="flex-shrink-0 rounded-circle" src="img/service-2.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                              
                                <small>School/ University Management Software</small>
                            </div>
                            
                        </div>
                        
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="img/service-3.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                              
                                <small>Website Development Services</small>
                            </div> &nbsp;
                            
                            <img class="flex-shrink-0 rounded-circle" src="img/service-4.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                              
                                <small>Mobile Application Development</small>
                            </div>
                            
                        </div>
                      <!--  <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a> --!>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title bg-white text-center text-primary px-3"><b>Services</b></h4>
                <h1 class="display-6 mb-4">We Focus On Making The Best In All Sectors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="CustomizeERP.php">
                        <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">
                        <h4 class="mb-0">Customized ERP Software</h4>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="School University.php">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">School/ University Management Software</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="Website.php">
                        <img class="img-fluid rounded mb-4" src="img/service-3.jpg" alt="">
                        <h4 class="mb-0">Website Development</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="DigitalMarketing.php">
                        <img class="img-fluid rounded mb-4" src="img/service-4.jpg" alt="">
                        <h4 class="mb-0">Digital Marketing</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="RFID System.php">
                        <img class="img-fluid rounded mb-4" src="img/service-5.jpg" alt="">
                        <h4 class="mb-0">RFID System Integration</h4>
                    </a>
                </div>
                
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="MobileApplication.php">
                        <img class="img-fluid rounded mb-4" src="img/service-2.jpg" alt="">
                        <h4 class="mb-0">Mobile App Development</h4>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3"><b>Industries</b></h4>
                        <h1 class="display-6 mb-4">INDUSTRY</h1>
                        <p class="mb-4">We have served below major industries.</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Solar</p>
                                        <p class="mb-2">65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Manufacturing</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Chemical</p>
                                        <p class="mb-2">75%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Scaffolding</p>
                                        <p class="mb-2">55%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                        
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/Custom-ERP.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/website.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                      
                        <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3"><b>Industries</b></h4>
                        <h1 class="display-6 mb-4">INDUSTRY</h1>
                        <p class="mb-4">We have served below major industries.</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Printing & Packaging</p>
                                        <p class="mb-2">75%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Automation</p>
                                        <p class="mb-2">40%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Plastic Works</p>
                                        <p class="mb-2">60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Rubber Products</p>
                                        <p class="mb-2">45%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Education</p>
                                        <p class="mb-2">65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                        
                            </div>
                            
                        
                        
                        </div>
                        
                        
                        
                      <!--  <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a> --!>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    
     <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3"><b>Our Services</b></h4>
                        <h1 class="display-6 mb-4">Why People Trust Us? Learn About Us!</h1>
                        <p class="mb-4">Sharvaya Infotech gives solutions for various services of IT Industry.</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Customized ERP Software</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Website Development</p>
                                        <p class="mb-2">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Digital Marketing</p>
                                        <p class="mb-2">65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Mobile Application Development</p>
                                        <p class="mb-2">75%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/Devlopment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    

    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title bg-white text-center text-primary px-3"><b>Our Completed Projects</b></h4>
                <h1 class="display-6 mb-4"></h1>
            </div>
			
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/SK.jpg" alt="">
                        <a href="img/SK.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Sk-Spicies</center></h6>
                   
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/gravure.jpg" alt="">
                        <a href="img/gravure.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Gravure</center></h6>
                   
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/vishwakarma.jpg" alt="">
                        <a href="img/vishwakarma.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Vishwakarma</center></h6>
                    
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Subham.jpg" alt="">
                        <a href="img/Subham.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Subham Group of Institutions</center></h6>
                    
                </div>
				<div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Accura bath .jpg" alt="">
                        <a href="img/Accura bath .jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Accurabath</center></h6>
                   
                </div>
				<div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/TTRI.jpg" alt="">
                        <a href="img/TTRI.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>TTRI</center></h6>
                   
                </div>
				
				<div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Vijimech.jpg" alt="">
                        <a href="img/Vijimech.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Vijimech</center></h6>
                   
                </div>
				
				<div class="project-item border rounded h-100 p-4" data-dot="08">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Packman.jpg" alt="">
                        <a href="img/Packman.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Packman</center></h6>
                   
                </div>
				
                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/ProComplete4.jpg" alt="">
                        <a href="img/ProComplete4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Aim Industries</center></h6>
                </div>
				<div class="project-item border rounded h-100 p-4" data-dot="10">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Realfruits.jpg" alt="">
                        <a href="img/Realfruits.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Real Fruits</center></h6>
                </div>
				<div class="project-item border rounded h-100 p-4" data-dot="11">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/MarutiPlast.png" alt="">
                        <a href="img/MarutiPlast.png" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><center>Marutiplast</center></h6>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
   <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
                <h1 class="display-6 mb-4">We Are A Creative Team For Your Dream Project</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --!>
    <!-- Team End -->
    </br></br>
   
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
               <!-- <h6 class="section-title bg-white text-center text-primary px-6">OUR CLIENTS</h6>  -->
              <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <h4 class="section-title bg-white text-center text-primary px-3"><b>Our Clients</b></h4>
                <h1 class="display-6 mb-4">Our Clients</h1>
            </div>
            </div>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css" type="text/css">
<script src="js/owl.carousel.js"></script> <div class="brands"> <div class="container"> <div class="row"> <div class="col"> <div class="brands_slider_container"> <div class="owl-carousel owl-theme brands_slider"> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_1.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_2.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_3.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_5.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_6.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_7.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_8.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_9.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_10.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_11.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_12.jpg" alt=""></div></div> 
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="clientlogo/client_13.jpg" alt=""></div></div> 
                    </div> <!-- Brands Slider Navigation --> <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div> <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title bg-white text-center text-primary px-3"><b>Testimonial</b></h4>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial avirat.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Avirat Techno</h5>
                            <span>Manufacturing Industires</span>
                        </div>
                    </div>
                    <p class="mb-0">It was great experience to see products from Sharyava Infotech, the team is very much enthusiastic and the programme they designed as per our requirement and they are very much feasible for any kind of modification, learning skills are excellent for all of them..</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="clientlogo/client_13.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Aarohi Print Pack</h5>
                            <span>printing and packaging.</span>
                        </div>
                    </div>
                    <p class="mb-0">Sharvaya Infotech has very hardworking and supportive team and they deliver customization on time. Also they have high standard of service and support. They are quick to address questions and concerns and produce quality work.We are using their Customized ERP software more than a year.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="clientlogo/client__14.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Jairam Plastick Industries.</h5>
                            <span>polymer industries </span>
                        </div>
                    </div>
                    <p class="mb-0">If you are looking for quality work. no further then Sharvaya Infotech. Very polite staffs and excellent service. have a very good experience working with these people. Pleasure to work with Sharvaya Team Sharvaya infotech is one of the best solution provider for ERP software.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="clientlogo/client_15.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Sunlight SPL</h5>
                            <span>Solar Energy</span>
                        </div>
                    </div>
                    <p class="mb-0">Great service from Sharwaya Infotech. Staff is very much cooperative. They did as we asked. Highly recommend to everyone.Very Good software, good team work, Great efforts to satisfy the customer queries. In software they given more from our expectations.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
   
 <?php include('./footer.php'); ?>
    