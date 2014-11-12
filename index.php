<?php require('../../blog/wp-blog-header.php');?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">

<head>

	<title>Cathryn Denney | Front-end Developer</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="Cathryn Denney is a front-end developer and designer. Explore Cathryn's home on the web"/>

	<link rel="stylesheet" type="text/css" href="style.css" />

	<link rel="stylesheet" href="SlickNav/slicknav.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>

</head>

<body>
	<!--Start of header group-->
	<header class="group-cf">
		<a class="logo" href="index.php" alt="cd">
			<h1>Cathryn Denney</h1>
		</a>
		<nav class="group-cf"> <!--Primary navigation-->
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="http://www.cathryndenney.com/coursework">Work</a></li>
				<li><a href="http://cathryndenney.com/blog/">Blog</a></li>
			</ul>
		</nav>
	</header>
	<!--END of header group-->

	<!--Start of main content sections-->
	<div class="main-content">
		
		<!--About me-->
		<div class="section group-cf" id="about-cathryn">
			<img id="cd-photo" src="images/cathryn.png" alt="cathryn's photo" />
			<p>Hi! I'm Cathryn, a Digital Content Editor with Front-end dreams! Working hard for a <a href="www.cathryndenney.com/coursework.html">MA in Web Design &amp; Content Planning</a> and immersing myself in the world of the web.<br /><a href="https://twitter.com/CathrynDenney"><i class="fa fa-twitter"></i></a> <a href="https://github.com/CathrynDenney"><i class="fa fa-github"></i></a></p>
		</div>

		<!--Things I like to do...-->
		<div class="section" id="skills">
			<h2>Things I like to do&hellip;</h2>
				<ul>
					<li><i class="fa fa-code"></i><span class="box-text code">Code</span></li>
					<li><i class="fa fa-paint-brush"></i><span class="box-text design">Design</span></li>
					<li><i class="fa fa-keyboard-o"></i><span class="box-text content">Content</span></li>
					<li><i class="fa fa-coffee"></i><span class="box-text coffee">Drink</span></li>
				</ul>
		</div>

		<!--How I like to do them...-->
		<div class="section" id="supporting-info">
			<h2>How I like to do them&hellip;</h2>
				<ul>
					<li>HTML5</li>
					<li>CSS3 / Sass</li>
					<li>Javascript / jQuery</li>
					<li>Git &amp; GitHub</li>
					<li>RWD</li>
					<li>Photoshop &amp; Illustrator</li>
					<li>SEO</li>
					<li>Copyediting</li>
					<li>Early Grey / Flat White</li>
				</ul>
		</div>

		<!--Latest from my blog-->
		<div class="section" id="blog">
			<h2>Blog</h2>
			<div class="posts_list">
				<?php 
				$args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
				$postslist = get_posts( $args );
				echo '<ul id="latest_posts">';
				foreach ($postslist as $post) :  setup_postdata($post); ?> 
 				<li><strong><?php the_date(); ?></strong><br />
 				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a>
				</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<!--Contact details-->
		<div class="section group-cf" id="contact">
			<h2>Contact</h2>

			<div class="sub-section location">
				<h3>Physically you can find me in...</h3>
		
				<figure>
					<a href="https://www.google.co.uk/maps/place/London/@51.5286416,-0.1015987,11z/data=!3m1!4b1!4m2!3m1!1s0x47d8a00baf21de75:0x52963a5addd52a99"><img src="images/londonmap.png" /></a>
					<figcaption>London, UK</figcaption>
				</figure>
			</div>

			<div class="sub-section online-links">
				<h3>On the web you can find me on...</h3>

				<ul>
					<li><i class="fa fa-twitter"></i><a href="https://twitter.com/CathrynDenney">twitter.com/CathrynDenney</a></li>
					<li><i class="fa fa-github-alt"></i><a href="https://github.com/CathrynDenney">github.com/CathrynDenney</a></li>
					<li><i class="fa fa-tag"></i><a href="http://lanyrd.com/profile/cathryndenney/">lanyrd.com/CathrynDenney</a></li>
					<li><i class="fa fa-linkedin"></i><a href="http://uk.linkedin.com/in/cathryndenney/">linkedin.com/in/CathrynDenney</a></li>
					<li><i class="fa fa-envelope"></i>denney [at] live.co.uk</li>
					<li><i class="fa fa-skype"></i>cathryn.denney1</li>

				</ul>
			</div>	
		</div>

	</div><!--END of main content sections-->

	<footer>
		&copy; Cathryn Denney <?php echo date("Y") ?>
	</footer>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="SlickNav/jquery.slicknav.js"></script><!--responsive nav-->
	<script type="text/javascript">
		$(document).ready(function(){
		$('#menu').slicknav();
		});
	</script>
</body>

</html>