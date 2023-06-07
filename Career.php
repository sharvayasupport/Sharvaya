<?php include('./header.php'); ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Career</title>
  </head>
  <body>
      
      <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Career</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Career</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
      
    </br></br>
    <div class="container">
      <div class="row">
          
        
      
          <center><div class="col-lg-8">

          <div class="card">
            <div class="card-body">
                <h3 class="card-title"><center>Upload Your Details</center></h3></br>

              <!-- General Form Elements -->
              <form action="Career-Add.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="firstname" id="firstname" required="required">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="phone">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" required="required">
                  </div>
                </div>
                
               
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Resume</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="resume" id="resume">
                  </div>
                </div>
                

                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Cover Letter</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="coverletter" id="coverletter"></textarea>
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                      <input type="submit" class="btn btn-primary rounded-pill py-3 px-5" name="submit" id="submit">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
           </div></center>            

      </div>
    </div>
  </body>
</html>
</br></br>


<?php include('./footer.php');?>