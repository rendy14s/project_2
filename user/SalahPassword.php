<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>OKK.com | The Larget Web E - Event</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../img/okkkecil.png">
  
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
</head>

<body>
<div class="container-fluid">

	<div class="row clearfix">
	<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			 <div class="navbar-header">
					 	 	<a class="navbar-brand" href="../index.php"><img src="../img/okkkecil.png"></img></a>
			</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="KategoriPelajar.php">Pelajar</a>
						</li>
						<li>
							<a href="KategoriUmum.php">Umum</a>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-default" placeholder="cari disini gan">
						</div> <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
					</form>
					<?php
					
					if (empty($_SESSION['status'])){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> Sign In &#124; Join<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
							echo '<form method="POST" action="login.php" accept-charset="UTF-8">';
								echo '<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="user">';
								echo '<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="pass">';
								echo '<a href="user/ForgetPassword.php"><u><i>forget password ?</a></i></u><br>';
								echo '<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">';
								echo '<label class="string optional" for="user_remember_me"><font color="orange"> Remember me</font></label>';
								echo '<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">';
								echo "</form>";
								echo "<hr>";
								echo '<label style="text-align:center;margin-top:5px"><font color="grey">New to OKK</font></label><br>';
                               
							echo '<a href="user/regis-Akun.php"><input class="btn btn-default btn-block" type="button" id="sign-in-google" value="SIGN UP"></a>';
							
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					else if ($_SESSION['status']=="user"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href = "User-Account/pages/">HOME</a><br><hr>';
						echo '<a href="logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					
					}
					else if ($_SESSION['status']=="admin"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href = "User-Account/pages/">HOME</a><br><hr>';
						echo '<a href="logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					
					}
					
					?>
				</div>
				
				
				
			</nav>
		</div>
	<br><br><br></div>
	<table border="1" bordercolor="d0cfcf" width="70%" align="center">
<tbody>
<tr>
<td>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				<b>Sign in to your persija account</b>
			</h3>
			<p class="text-center">
				<font color="red">You have entered an invalid username or password. Enter the correct datails and try again. Don't forget that the password is case sensitive.
				</font>
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column"><center>
		
			<form role="form" action="../login.php" method="POST">
				<br>
				<div class="form-group">
					<div class="col-sm-10">
					<label for="inputKode3" class="col-sm-6 control-label">Username <font color="orange">*</font>:</label>
					<input type="text" class="form-control" name="user"  required>
					</div>
				</div><br><br>
				<div class="form-group">
					 <div class="col-sm-10">
					 <label for="inputTitle3" class="col-sm-6 control-label">Password   <font color="orange">*</font>:</label>
					 <input type="password" class="form-control" name="pass"  required>
					</div>
				</div><br><br><br>
				<div class="form-group">
				<table>
				<tr>
					 <div class="col-md-4">
					<td><div class="checkbox"><label><input align="center" type="checkbox"><b> Remember me</b></label>
						</div></td>
				</div>
				</tr>
				</table>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Sign in</button>
					</form>
					</div>
				</div>
			
		</div>
	</div>
	<h6>
			<font color="red">*Required Field</font>
			</h6>
	<div class="row clearfix">
		<div class="col-md-6 column">
			
			<h5>
				<a href="#">Forget Password? click here</a>
			</h5>
			<h5>
				<a href="regis-Akun.php">Don't have account? create !</a>
			</h5>
			
		</div>
	</div>
	
</div>
</td>
</tr>
</tbody>
</table>
<br>
	<div class="row clearfix">
<div class="container-fluid">
	<div class='modal-footer-content'>
			<table class="table" color="#e4e4e4">
	
	
		<div class="col-md-4 column">
		<br>
				<h4>
					Navigation	
					<hr>
				</h4>
			 <a href="../index.php" class="btn" type="button">Home</a><br>
			  <a href="../index.php" class="btn" type="button">Hot Events</a><br>
			   <a href="../index.php" class="btn" type="button">Hot Reviews</a><br>
		</div>
		<div class="col-md-4 column">
		<br>
				<h4>
					Company Info	
					<hr>
				</h4>
				<a href="#" class="btn" type="button">Help center</a><br>
			  <a href="#" class="btn" type="button">About Us</a><br>
			   <a href="#" class="btn" type="button">General Rules</a>
		</div>
		<div class="col-md-4 column">
		<br>	
				<h4>
					Find Us	
					<hr>
				</h4>
			<img alt="90x90" width="10%"  src="../img/twitter.png" class="img-circle"><a href="https://twitter.com/OkkOfficial?lang=en" class="btn" type="button">Twitter</a><br>
			<img alt="90x90" width="10%" src="../img/google+.png" class="img-circle"><a href="https://plus.google.com/app/basic/107419838682498455317/about?cbp=1tjlzysosy5xd&sview=27&cid=5&soc-app=115&soc-platform=1" class="btn" type="button">Google +</a><br>
			<img alt="140x140" width="10%" src="../img/facebook.png" class="img-circle"><a href="https://www.facebook.com/okkofficial?ref=ts&fref=ts" class="btn" type="button">Facebook</a>
		</div>
		<div class="col-md-4 column"><br>
			<img title="OKK" alt="90x90" src="../img/okk.png" class="img-rounded">
		</div>
	
	</div>	
</div>
</div>
</body>
</html>
