<!Doctype html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css\lgn.css" />
	<style>

	</style>
</head>
<script>
	function uname()
	{
		var n=document.getElementById("uname");
		if(n.value == "")
		{
			n.placeholder ="Login ID is empty";
		}
	}
	function pword()
	{
		var n=document.getElementById("pword");
		if(n.value == "")
		{
			n.placeholder ="Password is empty";
		}
	}
	function ee()
	{
		document.getElementById('err').style.cssText="visibility: hidden";

	}
</script>

<body>
<?php require("Leftbar.php"); ?>
<div class="right_cont">

    <?php require("Topbar.php"); ?> 

		<div class="full">
			<div class="l2">
				<p>
					<center>
					<h1>Welcome!</h1>		
					<h5>To keep in touck with us</h5>
					<a href="Registration_User.php"><input type="button" value="Register as a User"></a></p>
					<a href="Registration_Volunteer.php"><input type="button" value="Register as a Volunteer"></a></p>
				</center>
				</p>
			</div>
			<div class="r2">
				<center>
				<h1>Sign In </h1></center>
				<form action="php\log_val.php" method="POST">
					<div class="box">
					<center>
					<?php
						if(isset($_GET['err'])){
							if($_GET["err"]=="wrong"){
								echo "<h3 id='err' style='color:red'>invalid username or password ! </h3>";
							}
						}
					?>

					<!-- <input type="text" placeholder="Moblile number / email id" name ="phone" id="uname" onclick=ee() onblur="uname()"required><br> -->
					<input type="text" placeholder="Moblile number" name ="phone" id="uname" onclick=ee() onblur="uname()"required><br>
					<input type="password" placeholder="Password" name="pword" id="pword" onclick=ee() onblur="pword()"required>
					<input type="submit" value="Sign In">
					<a href="fpEnterMail.php">Forgot Password..?</a>
					</center>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>