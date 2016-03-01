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
		<h2 id="page_title"><a href="../index.php">HOME</a> > <a href="https://docs.google.com/document/d/13dyGvGhvPK6Zh7Ffz_Vx0zfpEbCcQcLLQtLw2YAi2Xw/edit?usp=sharing" target="_blank">Project 2: Moodboard</a></h2>
		<div class="divider"></div>
		<div id="accordion">
			<h3 class="sectiontitle">Files</h3>
			<div class="sectioncontent">
				<table class="points5">
					<tr>
						<th colspan="3">File names</th>
					</tr>
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio1" checked="checked" value="1"></td>
						<td><input type="radio" name="radio1" value=".6"></td>
						<td><input type="radio" name="radio1" value="0"></td>
					</tr>
				</table>
				<table class="points5">
					<tr>
						<th colspan="3">File type</th>
					</tr>
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio2" checked="checked" value="1"></td>
						<td><input type="radio" name="radio2" value=".6"></td>
						<td><input type="radio" name="radio2" value="0"></td>
					</tr>
				</table>
				<div class="feedback">
					<ul>
						<li><input type="checkbox" value="0"> Zip file should be named LAST_FIRST.zip</li>
						<li><input type="checkbox" value="0"> Moodboard file should be named LAST_FIRST_2_<?php echo $term; ?>.psd.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> File should be a compressed zip file.</li>
						<li><input type="checkbox" value="0"> Zip file should contain 1 psd file.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Organization</h3>
			<div class="sectioncontent">
				<table class="points10">
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Solid understanding of challenging subject matter. Can solve a wide variety of problems."><span style="text-decoration:underline;">A</span></abbr></td>
						<td><abbr title="Understanding of some challenging subject matter. Can solve simple problems."><span style="text-decoration:underline;">B</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Partial understanding of the subject matter and has addressed these below expected levels."><span style="text-decoration:underline;">D</span></abbr></td>
						<td><abbr title="Rudimentary understanding of a limited number of items in this area and has addressed these below expected levels."><span style="text-decoration:underline;">F</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio3" checked="checked" value="1"></td>
						<td><input type="radio" name="radio3" value=".9"></td>
						<td><input type="radio" name="radio3" value=".8"></td>
						<td><input type="radio" name="radio3" value=".6"></td>
						<td><input type="radio" name="radio3" value=".4"></td>
						<td><input type="radio" name="radio3" value=".2"></td>
						<td><input type="radio" name="radio3" value="0"></td>
					</tr>
				</table>
				<div class="feedback">
					<ul>
						<li><input type="checkbox" value="0"> Layers must be grouped into top level groups.</li>
						<li><input type="checkbox" value="0"> Layers and groups must be named appropriately.</li>
						<li><input type="checkbox" value="0"> Layers and groups must be in the correct order.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Requirements</h3>
			<div class="sectioncontent">
				<table class="points20">
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Solid understanding of challenging subject matter. Can solve a wide variety of problems."><span style="text-decoration:underline;">A</span></abbr></td>
						<td><abbr title="Understanding of some challenging subject matter. Can solve simple problems."><span style="text-decoration:underline;">B</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Partial understanding of the subject matter and has addressed these below expected levels."><span style="text-decoration:underline;">D</span></abbr></td>
						<td><abbr title="Rudimentary understanding of a limited number of items in this area and has addressed these below expected levels."><span style="text-decoration:underline;">F</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio4" checked="checked" value="1"></td>
						<td><input type="radio" name="radio4" value=".9"></td>
						<td><input type="radio" name="radio4" value=".8"></td>
						<td><input type="radio" name="radio4" value=".6"></td>
						<td><input type="radio" name="radio4" value=".4"></td>
						<td><input type="radio" name="radio4" value=".2"></td>
						<td><input type="radio" name="radio4" value="0"></td>
					</tr>
				</table>
				<div class="feedback">
					<h4>Size</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect document size.</li>
						<li><input type="checkbox" value="0"> Document size required to be 1024px by 768px (72ppi).</li>
					</ul>
					<h4>Adjectives</h4>
					<ul>
						<li><input type="checkbox" value="0"> No adjectives present.</li>
						<li><input type="checkbox" value="0"> Five to ten adjectives are required.</li>
					</ul>
					<h4>Colors</h4>
					<ul>
						<li><input type="checkbox" value="0"> No color scheme displayed.</li>
						<li><input type="checkbox" value="0"> Six to twelve colors are required.</li>
					</ul>
					<h4>Texture</h4>
					<ul>
						<li><input type="checkbox" value="0"> No textures present.</li>
					</ul>
					<h4>Photos</h4>
					<ul>
						<li><input type="checkbox" value="0"> No photo examples present.</li>
						<li><input type="checkbox" value="0"> A minimum of three images are required.</li>
					</ul>
					<h4>Type</h4>
					<ul>
						<li><input type="checkbox" value="0"> No typography examples present.</li>
						<li><input type="checkbox" value="0"> No page heading example present.</li>
						<li><input type="checkbox" value="0"> No sub page heading example present.</li>
						<li><input type="checkbox" value="0"> No body text example present.</li>
					</ul>
					<h4>Examples</h4>
					<ul>
						<li><input type="checkbox" value="0"> No global treatment examples present.</li>
						<li><input type="checkbox" value="0"> No header treatment example present.</li>
						<li><input type="checkbox" value="0"> No navigation treatment example present.</li>
						<li><input type="checkbox" value="0"> No footer treatment example present.</li>
						<li><input type="checkbox" value="0"> Header should include branding or the site logo.</li>
						<li><input type="checkbox" value="0"> Header and Navigation should be two separate examples.</li>
						<li><input type="checkbox" value="0"> The treatment example labeled header is actually navigation.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Use of Tools</h3>
			<div class="sectioncontent">
				<table class="points15">
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Solid understanding of challenging subject matter. Can solve a wide variety of problems."><span style="text-decoration:underline;">A</span></abbr></td>
						<td><abbr title="Understanding of some challenging subject matter. Can solve simple problems."><span style="text-decoration:underline;">B</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Partial understanding of the subject matter and has addressed these below expected levels."><span style="text-decoration:underline;">D</span></abbr></td>
						<td><abbr title="Rudimentary understanding of a limited number of items in this area and has addressed these below expected levels."><span style="text-decoration:underline;">F</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio5" checked="checked" value="1"></td>
						<td><input type="radio" name="radio5" value=".9"></td>
						<td><input type="radio" name="radio5" value=".8"></td>
						<td><input type="radio" name="radio5" value=".6"></td>
						<td><input type="radio" name="radio5" value=".4"></td>
						<td><input type="radio" name="radio5" value=".2"></td>
						<td><input type="radio" name="radio5" value="0"></td>
					</tr>
				</table>
				<div class="group feedback">
					<h4>Tools</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of shape tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of type tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of transform tool.</li>
						<li><input type="checkbox" value="0"> Images were scaled disproportionately.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer effects.</li>
					</ul>
					<h4>Character Panel</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect fonts used.</li>
						<li><input type="checkbox" value="0"> Incorrect use of tracking or kerning.</li>
						<li><input type="checkbox" value="0"> Incorrect use of vertical or horizontal scale.</li>
						<li><input type="checkbox" value="0"> Incorrect use of leading.</li>
						<li><input type="checkbox" value="0"> Text is blurred or distorted.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Craftsmanship</h3>
			<div class="sectioncontent">
				<table class="points20">
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Solid understanding of challenging subject matter. Can solve a wide variety of problems."><span style="text-decoration:underline;">A</span></abbr></td>
						<td><abbr title="Understanding of some challenging subject matter. Can solve simple problems."><span style="text-decoration:underline;">B</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Partial understanding of the subject matter and has addressed these below expected levels."><span style="text-decoration:underline;">D</span></abbr></td>
						<td><abbr title="Rudimentary understanding of a limited number of items in this area and has addressed these below expected levels."><span style="text-decoration:underline;">F</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio6" checked="checked" value="1"></td>
						<td><input type="radio" name="radio6" value=".9"></td>
						<td><input type="radio" name="radio6" value=".8"></td>
						<td><input type="radio" name="radio6" value=".6"></td>
						<td><input type="radio" name="radio6" value=".4"></td>
						<td><input type="radio" name="radio6" value=".2"></td>
						<td><input type="radio" name="radio6" value="0"></td>
					</tr>
				</table>
				<div class="group feedback">
					<ul>
						<li><input type="checkbox" value="0"> Your treatments should be screenshots from other sites.</li>
					</ul>
					<h4>Layout</h4>
					<ul>
						<li><input type="checkbox" value="0"> There is no organization.</li>
						<li><input type="checkbox" value="0"> The document is not organized well.</li>
						<li><input type="checkbox" value="0"> Like items should be together (ie. colors, textures, and photos; header, nav, and footer).</li>
						<li><input type="checkbox" value="0"> There are no section or subsection titles.</li>
						<li><input type="checkbox" value="0"> Only some section or subsection titles exist.</li>
						<li><input type="checkbox" value="0"> Section titles and subtitles should be different from other text on moodboard in order to stand out from content. (larger, different color, ect.)</li>
						<li><input type="checkbox" value="0"> Your section titles are inconsistent.</li>
						<li><input type="checkbox" value="0"> Sub section titles are inconsistent.</li>
						<li><input type="checkbox" value="0"> Make sure titles or subtitles consistent (same size, font, color, location, spacing).</li>
						<li><input type="checkbox" value="0"> Use white space to create implied borders around each area.</li>
						<li><input type="checkbox" value="0"> Remember to spell check your work before submitting.</li>
						<li><input type="checkbox" value="0"> Moodboards should be on a white background. Images or colors can have a negative effect on the information being displayed.</li>
						<li><input type="checkbox" value="0"> Moodboard should not include any site elements specific to the SOAR client.</li>
						<li><input type="checkbox" value="0"> Your treatments have been stretched or squashed to fit the space but that makes them hard to view.</li>
						<li><input type="checkbox" value="0"> The typography should show examples of the font styles.</li>
						<li><input type="checkbox" value="0"> Font samples should include font name, style, size, and color of the sample.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Design</h3>
			<div class="sectioncontent">
				<table class="points25">
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Solid understanding of challenging subject matter. Can solve a wide variety of problems."><span style="text-decoration:underline;">A</span></abbr></td>
						<td><abbr title="Understanding of some challenging subject matter. Can solve simple problems."><span style="text-decoration:underline;">B</span></abbr></td>
						<td><abbr title="Partial understanding of subject matter. Can solve some simple problems."><span style="text-decoration:underline;">C</span></abbr></td>
						<td><abbr title="Partial understanding of the subject matter and has addressed these below expected levels."><span style="text-decoration:underline;">D</span></abbr></td>
						<td><abbr title="Rudimentary understanding of a limited number of items in this area and has addressed these below expected levels."><span style="text-decoration:underline;">F</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio7" checked="checked" value="1"></td>
						<td><input type="radio" name="radio7" value=".9"></td>
						<td><input type="radio" name="radio7" value=".8"></td>
						<td><input type="radio" name="radio7" value=".6"></td>
						<td><input type="radio" name="radio7" value=".4"></td>
						<td><input type="radio" name="radio7" value=".2"></td>
						<td><input type="radio" name="radio7" value="0"></td>
					</tr>
				</table>
				<div class="group feedback">
					<ul><li><input type="checkbox" value="0"> Elements do not support the brand.</li></ul>
					<ul>
						<li><input type="checkbox" value="0"> Colors could use an additional accent color.</li>
						
						<li><input type="checkbox" value="0"> The colors selected will be difficult to use together.</li>
						<li><input type="checkbox" value="0"> Monochromatic schemes are difficult to use to create visual interest or hierarchy.</li>
						<li><input type="checkbox" value="0"> A number of the colors selected are almost identical.</li>
						
						<li><input type="checkbox" value="0"> Add at least one color that could be used to for high interest items like buttons or titles.</li>
						<li><input type="checkbox" value="0"> Add a couple neutral colors that will support the colors you've selected.​</li>
						<li><input type="checkbox" value="0"> There are no supporting colors.</li>
						<li><input type="checkbox" value="0"> You should add a couple hues that support the colors you have selected.</li>
						
						<li><input type="checkbox" value="0"> Colors indicate activity however without some neutral colors to balance them, the colors will just conflict with each other.</li>
						<li><input type="checkbox" value="0"> Too many dark or muted tones could make a design feel dreary.</li>
						<li><input type="checkbox" value="0"> The color tints are quite bright and can make the design look childlike.​</li>
						
						<li><input type="checkbox" value="0"> The pick a couple other shades, tints or tones of the two hues you've chosen. Then select a few neutral colors that work with the selected colors.</li>
						<li><input type="checkbox" value="0"> The background color is negatively the color selections.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> Body text is condensed (the letters are too close together) making it hard to read.</li>
						<li><input type="checkbox" value="0"> Body text should not be in all caps.</li>
						<li><input type="checkbox" value="0"> Body text should not be all bold. It should only be used to emphasis a word or phrase.</li>
						<li><input type="checkbox" value="0"> Body text should not be all italic. It should only be used to emphasis a word or phrase.</li>
						<li><input type="checkbox" value="0"> Body text should be smaller.</li>
						<li><input type="checkbox" value="0"> Body text should be the easiest to read, usually black and sans-serif.</li>
						<li><input type="checkbox" value="0"> The typography samples are too large.</li>
						<li><input type="checkbox" value="0"> The font color might be difficult to read.</li>
						<li><input type="checkbox" value="0"> The thinness of your font might be difficult for some people to read.</li>
						<li><input type="checkbox" value="0"> The heading and sub heading treatments are too similar and the users could find it hard to differentiate between the two.</li>
						
						<li><input type="checkbox" value="0"> Individual font sample should be in one font not multiple fonts.</li>
						<li><input type="checkbox" value="0"> Type could be difficult for some people to read especially body size.</li>
						<lip><input type="checkbox" value="0"> Calligraphy fonts are not the best to use for a project that has a varied user base like an airline.</li>
						<li><input type="checkbox" value="0"> The thinness of your body font might be difficult for some people to read.</li>
						<li><input type="checkbox" value="0"> If you choose a dark background like your site examples, your type colors will not be legible.</li>
						<li><input type="checkbox" value="0"> If you want to use it, you should consider switching it with your heading sample since making it larger might help negate the problem by increasing the font size.​</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> Putting your images on top of your colors can change the way the colors and images are perceived. It is best to separate them. In addition, it visually ties the colors to the images which could make it harder for some clients to see them as two separate choices.</li>
						<li><input type="checkbox" value="0"> Remove airplane images.</li>
						<li><input type="checkbox" value="0"> No not use bevel & emboss.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Deductions</h3>
			<div class="sectioncontent">
				<table width="500px" class="points1">
					<tr>
						<th>Submitted Late</th>
					</tr>
					<tr>
						<td>
							<input type="radio" name="radio_late" checked="checked" value="0"> Assignment was submitted on time.<br>
							<input type="radio" name="radio_late" value="-25"> Assignment was submitted 1 day late.<br>
							<input type="radio" name="radio_late" value="-50"> Assignment was submitted 2 days late.<br>
							<input type="radio" name="radio_late" value="-75"> Assignment was submitted 3 days late.<br>
							<input type="radio" name="radio_late" value="-100"> Assignment was submitted 4 days late.
						</td>
					</tr>
				</table>
				<div class="group feedback">
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			
			<!-- add more tabs above this line -->
		</div>
		
		<div id="gradebox">
			<p id="copygrade"></p>
			<p id="copy">
				<span id="feedbackText"></span>
			</p>
		</div>
		
	</div>
</div>

<script type="text/javascript" src="/gradecomments/code/js/grades.js" ></script>
 
</body>
</html>