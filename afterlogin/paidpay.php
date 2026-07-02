<?php 
session_start();
if(isset($_GET['total']))
{
	$total=$_GET['total'];
}
if(isset($_GET['bno']))
{
	$bno=$_GET['bno'];
}
?>
<html>
<head>
<title></title>
<style>
	@import url(https://fonts.googleapis.com/css?family=Lato:400, 700,300);
body {
  background-color: #263238;
  font-family: lato, 'helvetica-light';
  position: relative;
  text-transform: uppercase;
  padding: 20px 0;
}

#amount {
  font-size: 12px;
}

#amount strong {
  font-size: 14px;
}

#card-back {
  top: 40px;
  right: 0;
  z-index: -2;
}

#card-btn {
  background-color: rgba(251, 251, 251, 0.8);
  color: #000000;
  position: absolute;
  bottom: -55px;
  right: 0;
  width: 150px;
  border-radius: 8px;
  height: 42px;
  font-size: 12px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 400;
  outline: none;
  border: none;
  cursor: pointer;
}

#card-btn:hover {
  background-color: rgba(251, 251, 251, 1);
}

#card-cvc {
  width: 60px;
  margin-bottom: 0;
}

#card-front,
#card-back {
  position: absolute;
  background-color: #01579b;
  width: 390px;
  height: 250px;
  border-radius: 6px;
  padding: 20px 30px 0;
  box-sizing: border-box;
  font-size: 10px;
  letter-spacing: 1px;
  font-weight: 300;
  color: white;
}

#card-image {
  float: right;
  height: 100%;
}

#card-image i {
  font-size: 40px;
}

#card-month {
  width: 45% !important;
}

#card-number,
#card-holder {
  width: 100%;
}

#card-stripe {
  width: 100%;
  height: 55px;
  background-color: #3d5266;
  position: absolute;
  right: 0;
}

#card-success {
  color: #1faa00;
}

#card-token {
  display: none;
}

#card-year {
  width: 45%;
  float: right;
}

#cardholder-container {
  width: 60%;
  display: inline-block;
}

#cvc-container {
  position: absolute;
  width: 110px;
  right: -115px;
  bottom: -10px;
  padding-left: 20px;
  box-sizing: border-box;
}

#cvc-container label {
  width: 100%;
}

#cvc-container p {
  font-size: 6px;
  text-transform: uppercase;
  opacity: 0.6;
  letter-spacing: .5px;
}

#form-container {
  margin: auto;
  width: 500px;
  height: 290px;
  position: relative;
}

#form-errors {
  color: #d50000;
}

#form-errors,
#card-success {
  background-color: white;
  width: 500px;
  margin: 0 auto 10px;
  height: 50px;
  border-radius: 8px;
  padding: 0 20px;
  font-weight: 400;
  box-sizing: border-box;
  line-height: 46px;
  letter-spacing: .5px;
  text-transform: none;
}

#form-errors p,
#card-success p {
  margin: 0 5px;
  display: inline-block;
}

#exp-container {
  margin-left: 10px;
  width: 32%;
  display: inline-block;
  float: right;
}

.hidden {
  display: none;
}

#image-container {
  width: 100%;
  position: relative;
  height: 55px;
  margin-bottom: 5px;
  line-height: 55px;
}

#image-container img {
  position: absolute;
  right: 0;
  top: 0;
}

input {
  border: none;
  outline: none;
  background-color: #4f83cc;
  height: 30px;
  line-height: 30px;
  padding: 0 10px;
  margin: 0 0 25px;
  color: white;
  font-size: 10px;
  box-sizing: border-box;
  border-radius: 4px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  letter-spacing: .7px;
}

input::-webkit-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input::-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-ms-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input.invalid {
  border: solid 2px #eb0000;
  height: 34px;
}

label {
  display: block;
  margin: 0 auto 7px;
}

#shadow {
  position: absolute;
  right: 0;
  width: 284px;
  height: 214px;
  top: 36px;
  background-color: #000;
  z-index: -1;
  border-radius: 8px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
												
<div id="card-success" class="hidden">
  <i class="fa fa-check"></i>
  <p>Payment Successful!</p>
</div>
<div id="form-errors" class="hidden">
  <i class="fa fa-exclamation-triangle"></i>
  <p id="card-error">Card Error</p>
</div>
<?php
	include 'config.php';
	$sql1 = "SELECT pytrid from payment";
	$result1 = mysqli_query($con,$sql1);
	$num1=mysqlI_num_rows($result1);
	
	if($num1 > 0)
	{ 
	while($row1 = mysqli_fetch_array($result1))
	{ 
	$pytrid=$row1[0];
	}
	}
	else
	{
		$pytrid="PAYTRID56000";
	}
	$pytrid++;
?>
<div id="form-container">
<form method="post" action="#">
  <div id="card-front">
    <div id="shadow"></div>
    <div id="image-container">
      <span id="amount">Paying Amount <strong>Rs. <?php echo $total;?> /-</strong></span>
      <span id="card-image">
      
        </span>
    </div>
    <!--- end card image container --->

    <label for="card-number">
        Card Number
      </label>
    <input type="text" id="card-number" placeholder="1234 5678 9101 1112" maxlength="16">
    <div id="cardholder-container">
      <label for="card-holder">Card Holder
      </label>
      <input type="text" id="card-holder" placeholder="Name" />
    </div>
    <!--- end card holder container --->
    <div id="exp-container">
      <label for="card-exp">
          Expiration
        </label>
      <input id="card-month" type="number" placeholder="MM" min="01" max="12">
      <input id="card-year" style="width:50%;"=type="number" placeholder="YY" min="2023" max="2030">
    </div>
        <div id="cvc-container">
      <label for="card-cvc"> CVC/CVV</label>
      <input id="card-cvc" placeholder="XXX" type="number" min="001" max="9999">
      <p>Last 2 or 3 digits</p>
    </div>
    <!--- end CVC container --->
    <!--- end exp container --->
  </div>
  <!--- end card front --->
  <div id="card-back">
    <div id="card-stripe">
    </div>

  </div>
  <!--- end card back --->
  <input type="text" id="card-token" />
  <button type="submit" name="pay" id="card-btn">Pay Now</button>
</form>
<?php
    include("config.php");
    if(isset($_POST['pay'])){
            // Insert record
			$paystatus='Payment Done';
            $query = "insert into payment(pytrid,bno,total,paystatus) values('".$pytrid."','".$bno."','".$total."','".$paystatus."')";
            mysqli_query($con,$query) or die(mysqli_error($con));
			
			$query1 = "update bill set pay='Done' where bno='".$bno."'";
            mysqli_query($con,$query1) or die(mysqli_error($con));
			
            echo "<script>
				alert('payment Successful');
			</script>";
			echo "<script> location.href='bill.php'; </script>";

        }
    ?>
</div>
<!--- end form container --->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://use.fontawesome.com/f1e0bf0cbc.js"></script>
<script>


</script>
</body>
</html>