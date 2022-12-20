
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drivin - Driving School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-3 px-5 text-start">

            <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-light" href=""><i style="color:#b3d929;" class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-light" href=""><i style="color:#b3d929;" class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-light" href=""><i style="color:#b3d929;" class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i style="color:#b3d929;" class="fab fa-instagram"></i></a>
                </div>
         
            </div>

       <!-- ============================      -->
            <div class="col-lg-9 px-5 text-end">
              
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small style="color:#b3d929;" class="fa fa-map-marker-alt  me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small style="color:#b3d929;" class="fa fa-phone-alt  me-2"></small>
                    <small>+012 345 6789</small>
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  sticky-top p-0" style="background-color:#b3d929;">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img src="img/logo wireframe-02.png" style="height:50px;width: 170px;">
        </a>
        <button  type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon  "><i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="admission.php" class="nav-item nav-link">Admissions</a>
                <a href="login.php" class="nav-item nav-link"><b>Login</b></a>
                <a href="register.php" class="nav-item nav-link"><b>Register</b></a>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->


<style>

        .hero {
      background-image:linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/s.jpg);
              background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>




    <!-- LOGIN FORM START HERE  -->

    <div class="container-scroller " >
      <div class="container-fluid page-body-wrapper full-page-wrapper" >
        <div class="content-wrapper d-flex align-items-center auth hero">
          <div class="row flex-grow">
          <h1 class="font-weight-semi-bold text-uppercase mb-4  text-center" style="color: #b3d929;;">REGISTER HERE</h1>

            <div class="col-lg-9 mx-auto">
              <div class="auth-form-light text-left p-5">
              
                <h4 class="text-center">Hello! let's get started</h4>
                <h6 class="text-center font-weight-light mt-2">Signing up is easy. It only takes a few steps</h6>
                
                
<form class="row g-3 ">
<div class="col-md-6 ">
    <label for="inputEmail4" class="form-label mt-3 text-dark">Username</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>

 <div class="col-md-6">
    <label for="inputEmail4" class="form-label mt-3 text-dark">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label text-dark">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6 ">
    <label for="inputEmail4" class="form-label mt-3 text-dark">Whatsapp No:</label>
    <input type="number" class="form-control" id="inputEmail4">
  </div>

 <div class="col-md-6">
    <label for="inputEmail4" class="form-label mt-3 text-dark">NIC</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label text-dark">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label text-dark">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

                  <!-- <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label pt-3">Username</label>
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label pt-3">Email </label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label pt-3">Phone Number </label>
                    <input type="number" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Phone Number">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                  </div> -->

                  <div class="mt-3">
                    <a style="background-color:#b3d929;color:#ffff;" class="btn btn-block  btn-lg " href="../../index.html">SIGN UP</a>
                  </div>

      
                  <div class="text-center mt-4 font-weight-light ">Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


        <!-- Footer Start -->
<div style="background-color:black;"
 class="container-fluid  text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
 <style>
      a:hover{
        text-decoration: none;
        color: red;
      }
    </style>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class=" mb-4" style="color:#b3d929;">Get In Touch</h4>
                    <img src="img/logo wireframe-03.png" class="pb-2" style="height:50px;width: 170px;">
                    <p class="mb-2 mt-2"><i style="color:#b3d929;" class="fa fa-phone-alt me-3"></i>077 361 0301</p>
                    <p class="mb-2"><i style="color:#b3d929;" class="fa fa-map-marker-alt me-3"></i>123 Street, Pelmadulla, Rathnapura,Sri Lanka.</p>
                    <p class="mb-2"><i style="color:#b3d929;" class="fa fa-envelope me-3"></i>gayashanroshana377@gmail.com</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 style="color:#b3d929;" class=" mb-4">Our Courses</h4>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Online Graphic Designing</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Online Web Development</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Online UX/UI Designing</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Economics &amp; Finance</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Business Administration</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="#">Computer Science</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 style="color:#b3d929;" class=" mb-4">Quick Links</h4>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="">Home</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="">About </a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="">Contact</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="">Admissions</a>
                    <a style="text-decoration: none;padding:4px;" class="btn btn-link" href="">Courses</a>
                    
                </div>
            
                <div class="col-lg-3 col-md-6">
                    <h4 style="color:#b3d929;" class=" mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn " style="background-color:#b3d929;color:#fff;">Sign Up</button>
                        </div>
                    </form>
                    <h6 style="color:#b3d929;" class=" mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i style="color:#b3d929;" class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i style="color:#b3d929;" class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i style="color:#b3d929;" class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i style="color:#b3d929;" class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#" style="color:#b3d929;">Inspire IT Education</a> -  All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="#" style="color:#b3d929;">- A.G.A.P.C.AKMEEMANA</a>
                </div>
            </div>
        </div>
    </div>

  
    <!-- Copyright End -->
<!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color:#b3d929;color:#fff;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>
