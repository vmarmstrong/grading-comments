<?php
if($_GET){ $term = $_GET['term']; }else{ $term = "YYMM"; }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
	<title>Mobile Media Design 1</title>
	
<!-- meta data -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
<!-- javascript -->
	<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAo4QMz0keOLz1twXGV9xtHBQEqw58_A3Y0Vs6J4apF2EUt5Q-uBS8IjiqpjNUq2HCCtL9UDksgGoxUg"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/gradecomments/code/js/grades.js" ></script>
	
	
<!-- css -->
	<link rel="stylesheet" type="text/css" media="all" href="/gradecomments/code/css/style.css" />
</head>
<body>
<div id="maincontainer">
	<div id="contentmain">
		<h2 id="page_title"><a href="../index.php">HOME</a> > MMD1 Rubrics</h2>
		<div class="divider"></div>
		<h3>Projects (both)</h3>
		<ul>
			<li><a href="projects/wireframe.php?term=<?php echo $term ?>">Wireframe</a></li>
			<li><a href="projects/moodboard.php?term=<?php echo $term ?>">Moodboard</a></li>
			<li><a href="projects/cta.php?term=<?php echo $term ?>">CTA</a></li>
			<li><a href="projects/final.php?term=<?php echo $term ?>">Final Comp</a></li>
		</ul>
		
		<div class="divider"></div>
		<h3>Discussions (online)</h3>
		<ul>
			<li><a href="discussions/ip.php?term=<?php echo $term ?>">Discussion 1: Intellectual Property</a></li>
			<li><a href="discussions/dc.php?term=<?php echo $term ?>">Discussion 2: Design Critique</a></li>
			<li><a href="discussions/rd.php?term=<?php echo $term ?>">Discussion 3: Responsive Design</a></li>
			<li><a href="discussions/mf.php?term=<?php echo $term ?>">Discussion 4: Mobile First</a></li>
			<li><a href="discussions/extra.php?term=<?php echo $term ?>">Extra Credit: Styleguide</a></li>
		</ul>
		
		<div class="divider"></div>
		<h3>Labs (campus)</h3>
		<ul>
			<li><a href="labs/ip.php?term=<?php echo $term ?>">Lab 1: Intellectual Property</a></li>
			<li><a href="labs/layout.php?term=<?php echo $term ?>">Lab 2: Site and App Layout</a></li>
			<li><a href="labs/brands.php?term=<?php echo $term ?>">Lab 4: Psychology of Brands</a></li>
			<li><a href="labs/effects.php?term=<?php echo $term ?>">Lab 6: Photoshop Effects</a></li>
			<li><a href="labs/trends.php?term=<?php echo $term ?>">Lab 8: Mobile and Web Trends</a></li>
			<li><a href="labs/styleguide.php?term=<?php echo $term ?>">Lab 9: Styleguide</a></li>
			<li><a href="labs/practical.php?term=<?php echo $term ?>">Practical</a></li>
		</ul>


	</div>
</div>

<div id="footer"></div>

</body>
</html>