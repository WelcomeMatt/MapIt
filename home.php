<!DOCTYPE html>
<?php
	$user_name = $_GET['user-name'];
	$hostname = "127.0.0.1";
	$user = "root";
	$password = "password";
	$dbname = "mapit_users";
	$dbFlag = 0;

	$conn = mysql_connect($hostname, $user, $password);

	if(!$conn){
		echo "Connection Error.";
	}else{
		$dbFlag = 1;
		mysql_select_db($dbname);

		$query = "SELECT * FROM users WHERE user_name = '$user_name'";

		$result = mysql_query($query, $conn);

		$row = mysql_fetch_assoc($result);
	}
?>
<html>
	<head>
		<title>Mapper | Home</title>
		<link type="text/css" rel="stylesheet" href="./home_stylesheet.css" />
	</head>

	<body>
		<div id="page">
			<div id="contents">
				<div id="header">
					<a href="home.php"><p id="hdrTitle">Mapper</p></a>
					<input type="text" id="srchBar" name="srchBar" placeholder="Search..."/>
					<button type="button" id="srchBtn" onclick="search(this.form)">Go</button>
					<div id="linkBar">
						<a href="home.php" id="homeLink">Home</a>
						<a href="map.php" id="mapLink">My Map</a>
						<a href="./index.php" id="logoutLink">Logout</a>
					</div>
				</div>

				<div id="quickMenu">
					<div id="qmPhoto">
						<img id = "profilePic" src= <?php echo"'".$row['profile_picture']."'"; ?>/>
					</div>
					<div id="qmNav" class="slideNav">
						<a href="home.php" id="homeLink">Profile</a>
						<a href="#">My Map</a>
						<a href="#">Following</a>
						<a href="#">Messages</a>
						<a href="#">Global</a>
					</div>
					<span id="slider" onclick="useNav()">&#8667;</span>

					<script type="text/javascript">
						var navFlag = 0;
						function useNav() {
							if (navFlag==0)
							{
								document.getElementById("qmNav").style.width = "130px";
								document.getElementById("slider").innerHTML = "&#8666";
								navFlag = 1;
							}else{
								document.getElementById("qmNav").style.width = 0;
								document.getElementById("slider").innerHTML = "&#8667";
								navFlag = 0;
							}
						}
					</script>
				</div>

				<div id="background">
					<div id="map">
						<img src="http://www.georgemaps.com/wp-content/uploads/2016/05/world-map-continents-black-and-white-to-represent-countries-stock-photo-1.jpg" id="mapDisplay"/>
					</div>
					<div id="usrContent">
						<div id="leftColumn">
							<p style="text-align: center;"><u><strong>Top</strong></u></p>
							<div id="topCountries">
								<a href="./country.php"><img src="http://icons.iconarchive.com/icons/custom-icon-design/all-country-flag/128/Australia-Flag-icon.png" class="countryflag" style="height:32px; width:32px; margin-left:39px; padding-top: 0px;"/> </a>
								<img src="http://icons.iconarchive.com/icons/custom-icon-design/all-country-flag/128/India-Flag-icon.png" class="countryflag" style="height:32px; width:32px; margin-left:39px;padding-top: 0px;"/>
								<img src="http://icons.iconarchive.com/icons/custom-icon-design/all-country-flag/128/Japan-Flag-icon.png" class="countryflag" style="height:32px; width:32px; margin-left:39px;padding-top: 0px;" />
							</div>

							<p style="text-align: center; margin-top: 50px;"><u><strong>Bio</strong></u></p>
							<div id="bioText">
								<p>About:</p>
								<p>Favourite Location:</p>
								<p>Number Visited:</p>
							</div>
						</div>

						<div id="mainColumn">
							<img id = "pageProfilePic" src=<?php echo"'".$row['profile_picture']."'"; ?>/>
							<h1 id="profileName"> <?php echo $row['first_name'] . " " . $row['last_name'];?> </h1>
							<p id="profileTagline">-------</p>
							<div id="usrActivity">
								<p> <u>Your Feed</u></p>
								<p id="yourFeed"></p>
							</div>

							<!--<script type="text/javascript">
								var userID =  sessionStorage.getItem("userIdentification");
								document.getElementById("profileName").innerHTML = localStorage.getItem("firstName" + userID) + " " + localStorage.getItem("lastName" + userID);
								document.getElementById("profilePic").src = localStorage.getItem("ppSrc" + userID);
								document.getElementById("pageProfilePic").src = localStorage.getItem("ppSrc" + userID);
								document.getElementById("yourFeed").innerHTML = localStorage.getItem("activity" + userID);
							</script>-->
						</div>

						<div id="rightColumn">
							<p style="text-align: center; margin-top: 20px;"><u><strong>Follower Feed</strong></u></p>
							<div id="followingText">
								<p><a href ="../JaneHolday/home.php" class="nameLink">Jane</a> recommended a resurant in France.</p>
								<p><a href="../JoeMonlette/home.php" class="nameLink">Joe</a> added photo's from Belgium:</p>
								<p><a href="../CharlieAdams/home.php" class="nameLink">Charlie</a> added an entry in Jamaica.</p>
							</div>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</body>

</html>
