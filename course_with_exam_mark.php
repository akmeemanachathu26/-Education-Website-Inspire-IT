<?php include 'essential/header.php'?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-n5 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">My Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-light" aria-current="page">My Profile</li>
                    <li class="breadcrumb-item text-light " aria-current="page">My Courses</li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Course Exam Marks</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- 1.profile picture and name  -->
<div class="container ">
    <div class="row">
    <div class="text-center">
    <img src="img/students (2).jpg" class="rounded-circle mt-0" style="width:150px;height:150px;">
    </div>
    <h6 class="text-center pt-2">Kasun Sampath</h6>
    </div>
</div>

<!-- 2.courses  -->

<div class="site-section">
        <div class="container">
            <div class="row">
     <h2 class="mt-5 text-center mb-5">My Courses - Exam Marks</h2>
       <div class="col-5 wow fadeInUp" data-wow-delay="0.5s">
       <div class="course-1-item" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
       <div class="text-center pb-3">
        <!-- <button type="button" class="btn btn-primary  "><a href="course_with_exam_mark.php" class="text-dark "><i class="fa-solid fa-hand-holding"></i> Course Details</a></button> -->
        </div>
       <div class="category"><h5 class="text-center mt-4">Mobile Application</h5></div>  

                        <figure class="thumnail">
                                <a href="course-single.html"><img src="img/9303c19675bde958673dd24be6ec8844.jpg" alt="Image" class="img-fluid"></a>
                        <!-- <div class="price">$99.00</div> -->
                        </figure>

                     
                    </div>
       </div>
                
          <div class="col-7 wow fadeInUp" data-wow-delay="0.5s">
          <!-- <h5 class="display-6 mb-4">Exam Marks</h5> -->
          <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Exam Marks</h4>
                    <p class="card-description text-center">Course Name - <a href="">Mobile Application</a></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Test No: </th>
                          <th> Marks </th>
                          <th> Progress </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td> Test 01 </td>
                          <td> 87 </td>
                          <td> Pass </td>
                          
                        </tr>
                        <tr class="table-warning">
                        <td> Test 02 </td>
                          <td> 34 </td>
                          <td> Failed </td>
                        </tr>
                        <tr class="table-danger">
                        <td> Test 03 </td>
                          <td> 14 </td>
                          <td> Failed </td>
                        </tr>
                        <tr class="table-success">
                        <td> Test 04 </td>
                          <td> 94 </td>
                          <td> Passes </td>
                        </tr>
                        <tr class="table-primary">
                        <td> Test 05 </td>
                          <td> 24 </td>
                          <td> Failed </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  

                </div>
                <a style="background-color:#b3d929;color:navy" class="btn mt-5" href="change_email.php">Back to my profile</a> 

              </div>
            </div>


          </div>
          </div>      
 
 
  

            </div>
        </div>
    </div>















    <!-- Footer Start -->
    <?php include 'essential/footer.php'?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>