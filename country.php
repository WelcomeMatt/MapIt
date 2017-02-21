<!DOCTYPE html>
<html>
	<head>
		<title> User Name | Country Name </title>
		<link type="text/css" rel="stylesheet" href="./country_stylesheet.css" />
	</head>
	<body>
		<div id="page">
			<div id="contents">
				<div id="header">
					<a href="./home.php"><p id="hdrTitle">Mapper</p></a>
					<input type="text" id="srchBar" name="srchBar" placeholder="Search..."/>
					<button type="button" id="srchBtn" onclick="search(this.form">Go</button>
					<div id="linkBar">
						<a href="./home.php" id="homeLink">Home</a>
						<a href="map.php" id="mapLink">My Map</a>
						<a href="./index.php" id="logoutLink">Logout</a>
					</div>
				</div>

				<div id="quickMenu">
					<div id="qmPhoto">
						<img id = "profilePic" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfVtHlQ9OBYNiPTcO-bP2_CL-R1Qjqvle31zmGWTLw_rk20vVs"/>
					</div>
					<div id="qmNav" class="slideNav">
						<a href="home.php" id="homeLink">Profile</a>
						<a href="#">My Map</a>
						<a href="#">Following</a>
						<a href="#">Messages</a>
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

				<div id="leftSide">
					<div id="pageBanner">
						<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfVtHlQ9OBYNiPTcO-bP2_CL-R1Qjqvle31zmGWTLw_rk20vVs" style="height:64px; width:64px;" />
						<p style="display: inline-block; margin-left:10px; font-family: Century Gothic; font-size: 14px;">User <br> Name</p>
						<h1 style="display: inline-block; margin-left: 210px; font-family: Century Gothic;"><strong>COUNTRY NAME</strong></h1>
					</div>

					<div id="pictures">
						<p style="font-family: Century Gothic; padding-top: 10px; padding-left: 30px;"><strong>Pictures:</strong></p>
						<div class="itemBlock">
							<div class="pics">
								<img src="https://cdn4.iconfinder.com/data/icons/flatified/512/photos.png"/>
								<p>album name</p>
							</div>

							<div class="pics">
								<img src="https://cdn4.iconfinder.com/data/icons/flatified/512/photos.png"/>
								<p>album name</p>
							</div>

							<div class="pics">
								<img src="https://cdn4.iconfinder.com/data/icons/flatified/512/photos.png"/>
								<p>album name</p>
							</div>

							<div class="pics">
								<img src="https://cdn4.iconfinder.com/data/icons/flatified/512/photos.png"/>
								<p>album name</p>
							</div>

							<div class="pics" style="margin-left:10px;">
								<img style="height:85px; width: 80px;" src="http://www.freeiconspng.com/uploads/circle-detail-more-icon-22.png"/>
								<p style="margin-top: 0px; margin-left: 25px;">More</p>
							</div>
						</div>
					</div>

					<div id="entries">
						<p style="font-family: Century Gothic; padding-top: 10px; padding-left: 30px;"><strong>Entries:</strong></p>
						<div class="itemBlock">
							<div class="pics">
								<img src="http://www.smithink.com/images/Icon%20Set/Page_icon.png"/>
								<p>date | title</p>
							</div>

							<div class="pics">
								<img src="http://www.smithink.com/images/Icon%20Set/Page_icon.png"/>
								<p>date | title</p>
							</div>

							<div class="pics">
								<img src="http://www.smithink.com/images/Icon%20Set/Page_icon.png"/>
								<p>date | title</p>
							</div>

							<div class="pics">
								<img src="http://www.smithink.com/images/Icon%20Set/Page_icon.png"/>
								<p>date | title</p>
							</div>

							<div class="pics" style="margin-left:10px;">
								<img style="height:85px; width: 80px;" src="http://www.freeiconspng.com/uploads/circle-detail-more-icon-22.png"/>
								<p style="margin-top: 0px; margin-left: 25px;">More</p>
							</div>
						</div>
					</div>

					<div id="recommendations">
					<p style="font-family: Century Gothic; padding-top: 10px; padding-left: 30px;"><strong>Recommendations:</strong></p>
						<div class="itemBlock">
							<div class="pics">
								<img src="https://cdn0.iconfinder.com/data/icons/cosmetic-store/25/Recommend-512.png"/>
								<p>name</p>
							</div>

							<div class="pics">
								<img src="https://cdn0.iconfinder.com/data/icons/cosmetic-store/25/Recommend-512.png"/>
								<p>name</p>
							</div>

							<div class="pics">
								<img src="https://cdn0.iconfinder.com/data/icons/cosmetic-store/25/Recommend-512.png"/>
								<p>name</p>
							</div>

							<div class="pics">
								<img src="https://cdn0.iconfinder.com/data/icons/cosmetic-store/25/Recommend-512.png"/>
								<p>name</p>
							</div>

							<div class="pics" style="margin-left:10px;">
								<img style="height:85px; width: 80px;" src="http://www.freeiconspng.com/uploads/circle-detail-more-icon-22.png"/>
								<p style="margin-top: 0px; margin-left: 25px;">More</p>
							</div>
						</div>
					</div>

				</div>

				<div id="rightSide">
				</div>
				
			</div>
			<script type="text/javascript">
				var userID =  sessionStorage.getItem("userIdentification");
				document.getElementById("profilePic").src = localStorage.getItem("ppSrc" + userID);
			</script>
		</div>
	</body>
</html>