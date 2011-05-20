<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php 
    Loader::element('header_required'); 
 ?>  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="<?=$this->getThemePath()?>/css/style.css?v=2">
  <link rel="stylesheet" href="<?=$this->getThemePath()?>/css/main.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
 
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?=$this->getThemePath()?>/js/libs/modernizr-1.6.min.js"></script>

</head>


<body>
  <div id="container">
	<header class="top">
		<a href="#"><h1>Benjamin Brown</h1></a>
		<nav>
			<ul>
				<li><a href="profile.html">Profile</a></li>
				<li class="active"><a href="/">Creative</a></li>
				<li><a href="#">Notes</a></li>
				<li><a href="mailto:hello@benjaminbrown.co.uk">Hire Me!</a></li>
			</ul>
		</nav>
	</header>
    <div id="descriptive">
		<header class="intro">
			<h2>I'm a User Interface <span id="and">+</span> Icon Designer for the web</h2>
			<details id="buzzwords"><strong>Buzzwords:</strong> UI/UX Design, Icon Design, Brand Strategy, (X)HTML/HTML5, CSS2/3, Visual Communication</details>
		</header>
	</div>
	<div id="main-contain">
		<div id="main">
			<section id="post-left">
				<div id="post-text">
				<?php
   $a = new Area('Title');
   $a->display($c);
?>
					
					<?php
   $a = new Area('Content');
   $a->display($c);
?>
					<div class="back"><a href="/">Back to Portfolio</a></div>
				</div>
			</section>
			<section id="post-right">
				<a href="#"><img src="#" alt="Post: Image" style="background: pink" /></a>
			</section>
		</div>
	</div>
    <footer>
		<ul id="left-social">
			<li><a href="#" id="twitter-social">Twitter</a></li>
			<li><a href="#" id="dribbble-social">Dribbble</a></li>
			<li><a href="#" id="forrst-social">Forrst</a></li>
			<li><a href="#" id="skype-social">Skype</a></li>
		</ul>
		<div id="right-footer">
			<p id="right-copy">Copyright &copy; 2011, Benjamin Brown.</p>
			<p id="zerply"><a href="http://zerp.ly/benjaminbrown">Professional steez over at</a></p>
		</div>
    </footer>
  </div> <!--! end of #container -->
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?=$this->getThemePath()?>/js/plugins.js"></script>
  <script src="<?=$this->getThemePath()?>/js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <!-- yui profiler and profileviewer - remove for production -->
  <script src="<?=$this->getThemePath()?>/js/profiling/yahoo-profiling.min.js"></script>
  <script src="<?=$this->getThemePath()?>/js/profiling/config.js"></script>
  <!-- end profiling code -->
  <script>
   var _gaq = [['_setAccount', 'UA-17112233-1'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
</body>
</html>