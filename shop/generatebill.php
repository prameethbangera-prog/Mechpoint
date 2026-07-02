<?php
session_start();
if(isset($_SESSION['mechshop']))
{
	error_reporting(1);
	include("config.php");
	if(!isset($_SESSION['fname']))
	{
	unset($_SESSION['bno']);
	}
	if(!isset($_SESSION['phone']))
	{
	$sql2 = "SELECT bno from bill";
	$result2 = mysqli_query($con,$sql2);
	$count2=mysqlI_num_rows($result2);
	if($count2>0)
	{
		while($row2= mysqli_fetch_array($result2))
		{
			$bno=$row2[0];
		}
	}
	else
	{
		$bno=0;
	}
	$bno=$bno+1;
	$_SESSION['bno']=$bno;
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mech Shop</title>
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
          <a class="sidebar-brand brand-logo" href="index.html"><img src="lg1.png" alt="logo"style="width:210px;" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="dp.png" alt="profile" />
                <span class="login-s tatus online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Mech Shop</span>
                
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
            <a class="nav-link"href="viewvehicledetailes.php">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">View Vehicle Detailes</span>
              
            </a>
           
          
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="viewservice.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">View Service</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="viewrequest.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">View Request</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="manageprofile.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Manage Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="generatebill.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Generate Bill</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewbill.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">View Bill</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="viewfeedbank.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">View Feedback</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="viewpayment.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">View Payment</span>
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
              <h3 class="page-title">Bill Generation</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bill Generation</li>
                </ol>
              </nav>
            </div>
			
              
			 <form action="#" method="post">
		 
                  
		<div class="form-group" style="display:flex;">
            <input type="text" name="fname" class="form-control" placeholder="Name" style="width:200px;">
            <input type="number" name="phone" class="form-control"placeholder="Contact" maxlength="10"pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9"style="width:200px;margin-left:20px;">&nbsp; &nbsp; &nbsp; &nbsp; 
             <input type="text" name="address" class="form-control" placeholder="Address" style="width:200px;margin-left:20px;">&nbsp; &nbsp; &nbsp; &nbsp;
			   <button type="submit" name="save" class="btn btn-danger">Save</button>
		 
			 </div>
             
         
		
		  </form>
		  <?php
							if(isset($_POST['save']))
							{
								$fname=$_POST['fname'];
								$phone=$_POST['phone'];
								$address=$_POST['address'];
								$_SESSION['phone']=$phone;
								$_SESSION['address']=$address;
								$_SESSION['fname']=$fname;
								include("config.php");
								$query = "update bill set fname='".$fname."',phone='".$phone."', address='".$address."' where bno='".$_SESSION['bno']."'";
								mysqli_query($con,$query) or die(mysqli_error($con));
							}
							if(isset($_SESSION['phone']) && isset($_SESSION['address']))
							{
							?>
						
							<label for="Name">Name : <?php echo $_SESSION['fname']; ?></label><br>
							
							<label for="Name">Contact : <?php echo $_SESSION['phone']; ?></label><br>
							
							
							<label for="Name">Address : <?php echo $_SESSION['address']; ?></label>
							
										
							<?php
							}
							?>
		  
			  <br><br>
		 
		 
                   <form method="post" action="#">
		<div  style="display:flex;margin-top:30px;">
		<label>service</label>&nbsp;&nbsp;&nbsp;
            <select name="service" class="form-control" style="width:300px;margin:-5px 5px 0px;height:35px;">
			&nbsp;&nbsp;
			<?php
						include 'config.php';
						$sql1 = "select * from manageservice";
						$result1 = mysqli_query($con,$sql1);
						$num1=mysqlI_num_rows($result1);
						$sl=0;
						if($num1 > 0)
						{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
						$sl+=1;
						$id=$row1[1];
						$filename=$row1['image'];
						$service=$row1['service'];	
						?>
						 <option value="<?php echo $service;?>"><?php echo $service; ?></option>
						<?php
							}
							}
						?>

			</select>&nbsp;&nbsp;&nbsp;
			<label>Amount</label>&nbsp;
			<input type="text" name="price" class="form-control"placeholder="" style="width:200px;margin-left:20px;height:35px;">&nbsp; &nbsp; &nbsp; &nbsp; 
			 <button type="submit"  name="add" class="btn btn-danger"style="margin-left:20px;" id="save">Save</button>
			 </div>
             
         
		
		  </form>
			<?php 
						
						
						if(isset($_POST['add']))
						{
						if(isset($_SESSION['phone']))
						{
						error_reporting(1);
						include("config.php");
						$service=$_POST['service'];
						$amount=$_POST['price'];
						$sname=$_SESSION['fname'];
						$sphone=$_SESSION['phone'];
						$saddress=$_SESSION['address'];
						$query = "insert into bill(bno,fname,phone,address,service,amount,shopemail) values('".$_SESSION['bno']."','".$sname."','".$sphone."','".$saddress."','".$service."','".$amount."','".$_SESSION['mechshop']."')";
						
						mysqli_query($con,$query) or die(mysqli_error($con));
						echo "<script> location.href='generatebill.php'; </script>"; 
						unset($_SESSION['service']);
						}
						else
						{
							echo '<script>alert "please add name, phone and date."</script>';
						}
						}
					?>
		     <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <form class="forms-sample">
                     <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Service</th>
                            <th>Amount</th>
							<th>Action</th>
							
                        </tr>
						 </thead>
						 <tbody>
						<?php
						$sql = "SELECT * from bill where bno='".$_SESSION['bno']."'";
						$result = mysqli_query($con,$sql);
						$count=mysqlI_num_rows($result);
						$sl=0;
						$tot=array();
						if($count>0)
						{
							$no=1;
							while($row = mysqli_fetch_array($result))
							{ 
								$sl+=1;
								$rowid=$row[0];
								$bservice=$row[5];
								$bprice=$row[6];
								$discount=$row['discount'];
								?>
						<tr>
						<td><?php echo $s1; ?></td>
						<td><?php echo $bservice ; ?></td>
						<td><?php echo $bprice; ?></td>
						<form  method="post"  action="#" >
						  <input type="hidden" name="service_id" value="<?php echo $rowid; ?>" >
						 <td><button type="submit" name="delete" class="btn btn-danger btn-fw" id="save">Delete</button></td>
						 </form>
						 <?php
if(isset($_POST['delete']))
{
    $serviceId = $_POST['service_id'];
    $query = "DELETE FROM bill WHERE id = '".$serviceId."'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "<script> location.href='generatebill.php'; </script>";
}
?>

						 </tr>
						 <?php
							$no=$no+1;
							$tot[]=$bprice;
							}
							$totalamt=array_sum($tot);
							$totalamt1=$totalamt-($totalamt*$discount)/100;
							}
							else
							{
								$totalamt=0;
							}
						?>
						<tr>
						<td></td>
						<td><label>Amount:</label></td>
						<td><input type="text" value="<?php echo $totalamt; ?>" readonly="true" class="form-control" id="exampleInputUsername1" placeholder="Total Amt"placeholder="0"></td>
						</tr>
                      </tbody>
                      </table>
                     
                      
                  
					</div>
					</div>
					</div>
					 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  <form method="post" action="#">
		    <label>Discount:</label>&nbsp; &nbsp;
            <input type="text"Name="disc" class="form-control"placeholder="%">&nbsp; &nbsp; &nbsp; &nbsp;
           			
           <button type="submit" name="discount" class="btn btn-danger btn-fw">Add</button>
		   </form>
		   <?php
			if(isset($_POST['discount']))
			{
				error_reporting(1);
				include("config.php");
				$disc=$_POST['disc'];
				$query = "update bill set discount ='".$disc."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
				echo "<script> location.href='generatebill.php'; </script>"; 
			}
			?>
           <br><br>
          <label>Final Amount:</label>&nbsp; &nbsp;<br><br>
		         <label><?php echo $totalamt1; ?></label>&nbsp; &nbsp;<br><br>
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
		  <form method="post" action="#">
		  <button
		  type="submit" name="confirm" id="save" class="btn btn-danger btn-fw">Confirm</button>	
         </form>
           <?php 
				  if($totalamt!=0)
				  {
					  ?>
					  
					   <?php
				if(isset($_POST['confirm']))
				{
				error_reporting(1);
				include("config.php");
				$status="Confirm";
				$query = "update bill set status ='".$status."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
				unset($_SESSION['phone']);
				unset($_SESSION['address']);
				unset($_SESSION['fname']);
				echo "<script> location.href='invoice.php'; </script>"; 
			}
			}
			?>		 
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
<?php
}
else
{
	echo"<script> location.href='home.php';</script>";
}
?>