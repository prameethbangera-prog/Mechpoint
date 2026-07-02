
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mech Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="lg1.png" alt="logo" style="width:210px;"/></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="dp.png" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Mech Admin</span>
                
              </div>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="managevehicle.php">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Manage Vehicle</span>
              
            </a>
           
          
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="manageservice.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Manage Service</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="manageshop.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Manage Shop</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="viewuser.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">View User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewfeedbank.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">View Feedback</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addmessage.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Add Message</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="mdi mdi-logout mr-2 text-primary"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
		  </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              
              
              
             <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="dp.png" />
                  <span class="profile-name">Mech Admin </span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  
                    
                  <a class="dropdown-item" href="logout.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
			<div class="page-header">
              <h3 class="page-title">Add Message</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Manage vehicle</li> 
                </ol>
              </nav>
            </div>
			<div class="row">
              
			  
			  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Message</h4>
                     <form class="forms-sample" action="#" method="post">

                      <div class="form-group">
                        
                        <input type="text" class="form-control" name="message"id="exampleInputEmail1" placeholder="Message"  />
                      </div>
                      
                      
                     
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Submit </button>

                    </form>
					<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
		
		$message=$_POST['message'];

		$query = "INSERT INTO addmessage(message)VALUES('".$message."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Message Added Successfully');
			</script>";
			echo "<script> location.href='addmessage.php'; </script>";

}
?>
					</div>
					</div>
					</div>
			  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Message</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Message</th>
							<th>Action</td>
                          </tr>
                        </thead>
                        <tbody>
						<?php
								include 'config.php';
								$sql1 = "select * from addmessage";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$message=$row1['message'];
								
								?>
                          <tr>
                            <td><?php echo $sl; ?></td>
                            <td><?php echo $message; ?></td>
							<form  method="post"  action="#" >
						  <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
							<td><button type="submit" name="delete" class="btn btn-danger btn-fw"> Delete </button></td>
							</form>
                          </tr>
						  <?php
								}
								}
                            ?>			
                          </tbody>
                      </table>
					  <?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from addmessage where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='addmessage.php'; </script>";
}
?>
                    </div>
					</div>
					</div>
					</div>
                  </div>
                </div>
              
		  
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"><b>Copyright ©Mechpoint.com 2024</b></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <b>Designd by Karthik & Pramith</b></a> 
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>