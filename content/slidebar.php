<!DOCTYPE HTML>
<style type="text/css">
.slider{
	width: 60px;
	height: 120px;
	background: #333;
	top: 300px;
	position: absolute;
	left:-35px;
	border:10px solid #C0C0C0;
	border-left:none;
	border-top: none;
	border-bottom: none;
}

.slider:hover{
	opacity:0.6;
}

</style>
<meta name = "viewport" content = "width = device-width, initial-scale=1">
<body class = "menu">
		<header> 
		<a href="#" class = "menu-toggle"> 
			<div class = "slider"> 
			</div>
		</a>
			<nav class = "menu-side">
				<div class= "link-block">
					<ul="navlag">
						<center>
							<li><div class = "link-blocks"><a href="../index.php" id="home">
								<h1>Home</h1></div></a></li>
							<li><div class = "link-blocks"><a href="../shows.php" id="shows">
								<h1>Shows</h1></div></a></li>
							<li><div class = "link-blocks"><a href="../gallery.php" id="gallery">
								<h1>Gallery</h1></div></a></li>
							<li><div class = "link-blocks"><a href="../music.php" id="music">
								<h1>Music</h1></div></a></li>
							<li><div class = "link-blocks"><a href="../blog.php" id="blog">
								<h1>Blog</h1></div></a></li>
							<li><div class = "link-blocks"><a href="../contact.php" id="contact">
								<h1>Contact</h1></div></a></li>
					</ul>
					<div id = "skinny_side_bar"> </div>
					<div id = "side_bar_top_bar"> </div>
					<div id= "austin_abhari"><h4> Austin Abhari 2015 </h4></div>
				</div>		
					</center>
			</nav>
		</header>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
			(function(){
				var body = $('body');
				$('.menu-toggle').bind('click', function(){
					body.toggleClass('menu-open');
						return false;
					});
			})();
		</script>
		</div>