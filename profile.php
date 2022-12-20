<?php include 'essential/header.php'?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-n5 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">My Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">My Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- 1.profile picture and name  -->
<div class="container ">
    <div class="row">
    <div class="text-center">
    <img src="img/students (2).jpg" class="rounded-circle mt-0" style="width:150px;height:150px;"
>
</div>
    <h6 class="text-center pt-2">Kasun Sampath</h6>
    </div>
</div>

<div class="d-grid  col-3 ml-n5 mx-auto">
      <button class="btn me-lg-2 mr-5 hover-zoom btn-success " type="button" >
  <a class="p-3  text-light" href="My Courses.php">My Courses <i class="fa-solid fa-hand-point-right ml-5"></i></a> 
 
    <!-- <a class="p-3 " style="background-color:#b3d929;color:navy" href="My Courses.php">My Courses</a>  -->

</button>
</div>
   
<!-- 2.courses  -->

<div class="site-section">
        <div class="container">
            <div class="row">

  <div class="row justify-content-center">
   
  <!-- Profile Start -->
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-center  h-100 p-5" style="background-color:#1c2841 ;">
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 style="color: #b3d929">Username</h4>
                            <p class="m-0 text-white">chandula sudeepa samarawickrama</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                        <h4 style="color: #b3d929">Email</h4>
                            <p class="m-0 text-white">chandula1995@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                        <h4 style="color: #b3d929">Whatsapp Number</h4>
                            <p class="m-0 text-white">0759875577</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                        <h4 style="color: #b3d929">Address</h4>
                            <p class="m-0 text-white">199/1,Saddathissa Mawatha,Walgama,Matara.</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                        <h4 style="color: #b3d929">NIC</h4>
                            <p class="m-0 text-white">199582403888</p>
                        </div>
                    </div>
                

                </div>
            </div>
            <div class="col-lg-6 mb-5 my-lg-12 py-5 pl-lg-5 bg-white">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="col-md-12 border-right">
                        <div class="p-3 ">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 style="color:navy text-center">Change Profile Settings</h4>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text"
                                        onchange='updateDataFromHome(this, "15","name", "customer", "customer_id")'
                                        class="form-control" id="name" placeholder="Your name"
                                        value="chandula sudeepa samarawickrama">
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text"
                                        onchange='updateDataFromHome(this, "15","phone", "customer", "customer_id")'
                                        class="form-control" id="phone" placeholder="enter phone number"
                                        value="0759875577">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12"><input type="text"
                                        onchange='updateDataFromHome(this, "15","address", "customer", "customer_id")'
                                        class="form-control" id="address" placeholder="enter address"
                                        value="199/1,Saddathissa Mawatha,Walgama,Matara.">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text" disabled
                                        onchange='updateDataFromHome(this, "15","nic", "customer", "customer_id")'
                                        id="nic" class="form-control" placeholder="Enter NIC"
                                        value="199582403888">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="email"
                                        onchange='updateDataFromHome(this, "15","email", "customer", "customer_id")'
                                        id="email" class="form-control" placeholder="Enter Email Address"
                                        value="chandula1995@gmail.com">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <select
                                        onchange='updateDataFromHome(this, "15","gender", "customer", "customer_id")'
                                        id="gender 15" class='form-control norad tx12'
                                        name="gender" type='text'>
                                        <option value="1" selected>
                                            Male</option>
                                        <option value="0" >
                                            Female</option>
                                    </select>
                                </div>
                            </div>
      

                            <div class="d-grid gap-2 d-md-block mt-5">
                            <a style="background-color:#b3d929;color:navy" class="btn" href="change_email.php">Change Email</a> 
                            <a style="background-color:#b3d929;color:navy" class="btn" href="change_password.php">Change Password</a>
                            <button style="background-color:#b3d929;color:#fff" class="btn text-dark" type="button"><i class="fa-solid fa-trash"></i> Delete Account</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile End -->
  <!-- <div class="col-4">
    <div class="text-center pb-3">
       <button type="button" class="btn btn-primary  "><a href="Course Details.php" class="text-dark ">Course Details</a></button>
      </div>
</div>
 
<div class="col-4">
    <div class="text-center pb-3">
       <button type="button" class="btn btn-primary  "><a href="Course Details.php" class="text-dark ">Course Details</a></button>
      </div>
</div> -->


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