<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<link rel="shortcut icon" type="image/png" href="Favicon/favicon.ico"/>
  <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="header">
  <h1 style="font-size: 180px;" class="font_0"><span style="font-size:180px;">  <span style="font-family:avenida-w01,avenida-w02,fantasy;"><span style="font-weight:bold;">About Us</span></span></span></h1>
</div>
<div class="nav">
    <div class="container">
        <ul class="pull-left">
          <li><a href="index.html">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="accessories.html">Accessories</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
        </ul>
    </div>
</div>
    <?php
		$request = $_GET['q'];
		if ($request == "buy") {
			$name = $_POST["hoverboardName"];
			$price = $_POST["price"];
			$picture = $_POST["picture"];
			$numberInStock = $_POST["numberInStock"];

			echo "<center><h3>You're going to buy a " . $name . " hoverboard.</h3></center>";
		}
	?>
<div class="footer">
	<footer class="footer-distributed">
		<div class="footer-left">
			<p class="footer-links">
               <ul style="list-style: none;">
					<li><a href="disclaimer.html">Disclaimer</a></li>
					<li><a href="faq.html">FAQ's</a></li>
					<li><a href="feedback.html">Give us your Feedback</a></li>
				</ul>
            </p>
			<p class="footer-company-name">SwagForLife &copy; 2015</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p><a href="location.html"><span>Stamford International University</span> Bangkok, Thailand</a></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p>+66 2 769 4000</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:mubariz.ahmad@students.stamford.edu">support@company.com</a></p>
			</div>
		</div>
		<div class="footer-right">
			<p class="footer-company-about">
				<span>About the company</span>
				SwagForLife is company that focuses on todays youth and tries to provide them every possible swag they can get.
			</p>
			<div class="footer-icons">
				<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</footer>
    <iframe src="http://snapwidget.com/sc/?u=bmV4Ym9hcmRzfGlufDE1MHwzfDN8fHllc3wyMHxub25lfG9uU3RhcnR8eWVzfG5v&ve=050915" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1480px; height:150px"></iframe>   
</body>
</html>






