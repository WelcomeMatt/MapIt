<!DOCTYPE html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$hostname = "127.0.0.1";
		$user = "root";
		$password = "Ueckert1!";
		$dbname = "mapit_users";

		$conn = mysql_connect($hostname, $user, $password);

		if(!$conn){
			echo "Connection Error.";
		}else{
			$user_name = $_POST['usrName'];
			$password = $_POST['psswrd'];
			$first_name = $_POST['firstName'];
			$last_name = $_POST['lastName'];
			$email = $_POST['email'];

			mysql_select_db($dbname);

			//Add new user to DB -- **Add in check to see if user exists**
			$retval = mysql_query("INSERT INTO users (user_name, password, first_name, last_name, email, profile_picture) VALUES ('$user_name', '$password', '$first_name', '$last_name', '$email', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfVtHlQ9OBYNiPTcO-bP2_CL-R1Qjqvle31zmGWTLw_rk20vVs')", $conn);

			if(!$retval) {
				echo "Error: Problem Creating Account.";
				mysql_close($conn);
			}else{
				$_GET['user-name'] = $user_name;
				mysql_close($conn);
				echo "<script type='text/javascript'>window.open('./home.php', '_self');</script>";
			}
		}
	}
?>
<html>
	<head>
		<title>MapIt</title>
		<link type="text/css" rel="stylesheet" href="./createstylesheet.css" />
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
								<h2> Create Account </h2>
								<p id="invld"></p>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<input type="text" name="usrName" placeholder="Username" required="required"/>
									<input type="password" name="psswrd" placeholder="Password" required="required"/>
									<input type="text" name="firstName" placeholder="First Name" required="required"/>
									<input type="text" name="lastName" placeholder="Last Name" required="required"/>
									<input type="text" name="email" placeholder="Email" required="required"/>
									<input type="submit" name="submit" class="createBtn" value="Create">
								</form>
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