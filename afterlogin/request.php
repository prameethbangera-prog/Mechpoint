<?php
session_start();
if(!isset($_SESSION['mechuser']))
{
  echo"<script>location.href='index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>mechpoint</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Manglore,India</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+919353679177</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://web.whatsapp.com/7019386926"><i class="fa-brands fa-whatsapp" style="color: #D81324;"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/wonder_monk_/accounts/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

 <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="lg1.png"width="250px" height="50px" >
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
				 <a href="bookservice.php" class="nav-item nav-link">Book Service</a>
				  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Other faculties</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="profile.php" class="dropdown-item">Manage Profile</a>
                        <a href="payment.php" class="dropdown-item">Payment</a>
                        <a href="bill.php" class="dropdown-item">View Bill</a>
						 <a href="request.php" class="dropdown-item">View Request Status </a>
						  <a href="notification.php" class="dropdown-item">Notifications</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
                <div class="nav-item dropdown">
                </div>
            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
	
	

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">View Request</h1>
                <nav aria-label="breadcrumb">
                   
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<section id="payment" style="margin-top:30px;">
<div class="container">
<div class="row">
<div class="col-lg-8 mx-auto">
<h2 class="text-center">View Request</h2>
<div class="payement-details">

<table class="table table-striped">
<thead>
<tr>
 <th>SL.NO</th>
 <th>Riquest ID</th>
 <th>Shop Email</th>
 <th>Vehicle Name</th>
 <th>Service Name</th>
 <th>Status</th>
 <th>User Email</th>
</tr>
</thead>
<tbody>

						<?php
								include 'config.php';
								$sql2 = "select * from request where useremail='".$_SESSION['mechuser']."'";
								$result2 = mysqli_query($con,$sql2);
								
								$num2=mysqli_num_rows($result2);		
								{
								$sl=0;
								while($row1 = mysqli_fetch_array($result2))
								{								 
								$sl++;
								$id=$row1['id'];
								$rid=$row1['rid'];
								$shopemail=$row1['shopemail'];
								$vehiclename=$row1['vehiclename'];
								$servicename=$row1['servicename'];
								$status=$row1['status'];
								$useremail=$row1['useremail'];
									$sql = "select * from manageservice where id='".$servicename."'";
									$result = mysqli_query($con,$sql);
									$num=mysqli_num_rows($result);		
									{
									while($row1 = mysqli_fetch_array($result))
									{		
									$sid=$row1['id'];
									$vname=$row1[1];
									$serv=$row1[2];
									$img=$row1[3];
									
								?>
<tr>
 <td><?php echo $sl; ?></td>
 <td><?php echo $rid; ?></td>
 <td><?php echo $shopemail; ?></td>
 <td><?php echo $vehiclename; ?></td>
 <td><?php echo $serv; ?></td>
 <td><?php echo $status; ?></td>
 <td><?php echo $useremail; ?></td>
 </tr>
								 <?php
								}
								}
								}
								}
								 
								?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </section> 
 
  


      <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>kadri road, 2nd cross,Manlgore</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+919353679177</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>prameethbangera@gmai.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About</a>
                    <a class="btn btn-link" href="">Registration</a>
                    <a class="btn btn-link" href="">Login</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Map</h4>
                  
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31115.072456247763!2d74.83650731035769!3d12.883008145130617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a3ec4efbfc7%3A0xffff067b3ac979d4!2sKadri%2C%20Mangaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1706600716972!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MechPoint</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="">Prameeth and Karthik</a>
                        <br>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>