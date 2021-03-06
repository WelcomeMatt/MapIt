<!DOCTYPE html>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$hostname = "127.0.0.1";
		$user = "root";
		$password = "password";
		$dbname = "mapit_users";

		$conn = mysql_connect($hostname, $user, $password);

		if(!$conn){
			echo "Connection Error.";
		}else{
			$user_name = $_POST['usrName'];
			$password = $_POST['psswrd'];
			$noAcntFlg = 0;

			mysql_select_db($dbname);

			$retval = mysql_query("SELECT * FROM users WHERE (user_name = '$user_name') AND (password = '$password')", $conn);

			if(!$retval) {
				//create an erro message for this
				mysql_close($conn);
			}else{
				if(mysql_num_rows($retval) <= 0){
					mysql_close($conn);
				}else{
					//$_GET['user-name'] = $user_name;
					mysql_close($conn);
					echo "<script type='text/javascript'>window.open('http://localhost/MapIt/home.php?user-name=".$user_name."', '_self');</script>";
				}
			}
		}
	}
?>
<html>
	<head>
		<title>MapIt | Log in</title>
		<link type="text/css" rel="stylesheet" href="./stylesheet.css" />
	</head>
	<body>
		<div id="page">
				<div id = "contents">
					<!-- Top Row of Pictures -->
					<img src="https://images.pexels.com/photos/297755/pexels-photo-297755.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/59519/pexels-photo-59519.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/196464/pexels-photo-196464.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/31905/pexels-photo.jpg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/30469/pexels-photo-30469.jpg?h=350&auto=compress&cs=tinysrgb"/>

					<!-- 2nd Row of Pictures -->
					<img src="https://images.pexels.com/photos/26419/pexels-photo-26419.jpg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/6934/beach-vacation-water-summer.jpg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/238622/pexels-photo-238622.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/165505/pexels-photo-165505.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/304/city-houses-village-buildings.jpg?h=350&auto=compress&cs=tinysrgb"/>

					<!-- 3rd Row of Pictures -->
					<img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/210012/pexels-photo-210012.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/68704/pexels-photo-68704.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/203642/pexels-photo-203642.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/207680/pexels-photo-207680.jpeg?h=350&auto=compress&cs=tinysrgb"/>

					<!-- 4th Row of Pictures -->
					<img src="https://images.pexels.com/photos/3976/road-sunset-desert-travelling.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/236171/pexels-photo-236171.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/133006/pexels-photo-133006.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/227433/pexels-photo-227433.jpeg?h=350&auto=compress&cs=tinysrgb"/>
					<img src="https://images.pexels.com/photos/167699/pexels-photo-167699.jpeg?h=350&auto=compress&cs=tinysrgb"/>

					<div id="login">
						<div id="back">
							<div id="loginAccess">
								<h5 style="font-family: 'Century Gothic'; font-size: 10px;"><a href="./createAccount.php" style="text-decoration: none;">Create Account</a></h5>
								<!--Checks if account for user has been created. if not print message.-->
								<?php
									if($_SERVER['REQUEST_METHOD'] == "POST") 
									{
										echo "<p id='invld' style='font-family: 'Century Gothic', sans-serif; font-size: 12px; margin:0;'>Invalid Username or Password.</p>";
									}
								?>

								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<input type="text" name="usrName" placeholder="Username" required="required"/>
									<input type="password" name="psswrd" placeholder="Password" required="required"/>
									<input type="submit" name="submit" class="loginBtn" value="Log In"/>
								</form>
								<script type="text/javascript">
									function login(form) {
										if(typeof (Storage) !== "undefined")
										{
											var i = 0;

											if(localStorage.getItem("userName" + i)){
												while(localStorage.getItem("userName" + i))
												{
													document.getElementById("invld").innerHTML = "Logging in.";
													//localStorage.removeItem("userName" + i);
													if(localStorage.getItem("password" + i) == form.psswrd.value){
														sessionStorage.setItem("userIdentification", i);
														window.open("./home.php", "_self");
													}
													i++;
												}
											}

											document.getElementById("invld").innerHTML = "Invalid Username or Password.";
										}else{
											document.getElementById("invld").innerHTML = "Login Error.";
										}
									}

									function createUser() {			
										if(typeof (Storage) !== "undefined")
										{
											var i = 0;

											if(localStorage.getItem("userName" + i)){
												while(localStorage.getItem("userName" + i))
												{
													i++;
												}
											}
											sessionStorage.setItem("userIdentification", i);
											return true;
										}else{
											document.getElementById("invld").innerHTML = "Error.";
											return false;
										}
									}
								</script>
							</div>
						</div>
						<div id="text">
							<p id="title"> MAPPER</p>
							<p id="subtitle"> Your online travel log </p>
						</div>
					</div>
					
				<p id="footer"> Created By Matthew Hart. 2017. </p>
		</div>

	</body>
</html>
