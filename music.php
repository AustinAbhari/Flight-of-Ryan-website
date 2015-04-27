<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			 ul {list-style:none;}
			 li{display: inline-block;}
		</style>
		<link rel= "stylesheet" type="text/css" href = "css/main.css">
		<title> Flight Of Ryan </title>
		<?php
		include 'content/header.php';
		?>
	</head>
	<body>
		<?php
		include 'content/slidebar.php';
		?>
		<div class = "container">
			<div id="main-info">
				<div id="soundboardframe">
					<iframe
					width="100%"
					height="100%"
					scrolling="no"
					frameborder="no"
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/20233657&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
					</div>
					<ul>
						<center>
							<li>
								<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
									<div class="flipper">
										<div class="front">
											<img src="css/pictures/albums/from_cocoon.jpg">
										</div>
										<div class="back">
											<div class="back-title">From Concoon</div>
											<p>
												Our first major album is coming soon.
											</p>
										</div>
									</div>
								</div>
							</li>

					<li>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
									<div class="flipper">
										<div class="front">
											<img src="css/pictures/albums/tecsoul.jpg">
										</div>
										<div class="back">
											 <div class="back-title">Technacolor Souls</div>
											<p>
												This is our first major song, check it out on iTunes
													<a href= "https://itunes.apple.com/us/album/technicolor-souls-single"> here</a> .
											</p>
										</div>
									</div>
								</div>
					</li>
					<li>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
									<div class="flipper">
										<div class="front">
											<img src="css/pictures/albums/dat.jpg">
										</div>
										<div class="back">
											<div class="back-title">Sleepless Nights</div>
											<p>
												This is just filler text for now.
											</p>
										</div>
									</div>
								</div>
					</li>
					</center>
				</ul>
			</div>
			<?php
			include 'content/footer.php';
			?>
		</div>
	</body>
</html>

