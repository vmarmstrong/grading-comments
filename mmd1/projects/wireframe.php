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
		<h2 id="page_title"><a href="../index.php">HOME</a> > <a href="https://docs.google.com/document/d/1zzGsxyvGN0hsJmvp41O9VL8iH09yPUXZIR3Ku0MOK8Q/edit?usp=sharing" target="_blank">Project 1: Wireframe</a></h2>
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
						<li><input type="checkbox" value="0"> Desktop wireframe file should be named LAST_FIRST_1a_<?php echo $term; ?>.psd.</li>
						<li><input type="checkbox" value="0"> Mobile wireframe file should be named LAST_FIRST_1b_<?php echo $term; ?>.psd.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> File should be a compressed zip file.</li>
						<li><input type="checkbox" value="0"> Zip file should contain 2 psd files.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Organization</h3>
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
					<h4>Groups</h4>
					<ul>
						<li><input type="checkbox" value="0"> Top level groups must exist.</li>
						<li><input type="checkbox" value="0"> Sub level groups must exist.</li>
					</ul>
					<h4>Names</h4>
					<ul>
						<li><input type="checkbox" value="0"> All groups must be named appropriately.</li>
						<li><input type="checkbox" value="0"> All layers must be named appropriately.</li>
					</ul>
					<h4>Order</h4>
					<ul>
						<li><input type="checkbox" value="0"> Layers must be in the correct groups.</li>
						<li><input type="checkbox" value="0"> Layers and groups must be in the correct order.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Requirements</h3>
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
						<td># Errors</td>
						<td>0</td>
						<td>1-10</td>
						<td>11-25</td>
						<td>26-50</td>
						<td>51-75</td>
						<td>76-100</td>
						<td>+100</td>
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
					<ul>
						<li><input type="checkbox"> Some margins are incorrect.</li>
						<li><input type="checkbox"> Some paddings are incorrect.</li>
						<li><input type="checkbox"> Some widths are incorrect.</li>
						<li><input type="checkbox"> Some heights are incorrect.</li>
						<li><input type="checkbox"> Some stroke sizes are incorrect.</li>
						<li><input type="checkbox"> Some alignments are incorrect.</li>
						<li><input type="checkbox"> Some font families are incorrect.</li>
						<li><input type="checkbox"> Some text is incorrect.</li>
						<li><input type="checkbox"> Some font sizes are incorrect.</li>
						<li><input type="checkbox"> Some font styles are incorrect.</li>
						<li><input type="checkbox"> Some line heights are incorrect.</li>
						<li><input type="checkbox"> Some elements are missing.</li>
						<li><input type="checkbox" checked="checked"> See images below: Red areas indicate the correct location and size of elements.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Use of Tools</h3>
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
						<li><input type="checkbox" value="0"> Lines are blurred or distorted.</li>
						<li><input type="checkbox" value="0"> Shapes are blurred or distorted.</li>
					</ul>
					<h4>Character Panel</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect fonts used.</li>
						<li><input type="checkbox" value="0"> Incorrect use of tracking or kerning.</li>
						<li><input type="checkbox" value="0"> Incorrect use of vertical or horizontal scale.</li>
						<li><input type="checkbox" value="0"> Incorrect use of leading.</li>
						<li><input type="checkbox" value="0"> Text is blurred or distorted.</li>
					</ul>
					<h4>Layer styles</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of layer styles on shapes.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer styles on text.</li>
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
					<h4>Non-destructive edits</h4>
					<ul>
						<li><input type="checkbox" value="0"> Layers were edited destructively.</li>
						<li><input type="checkbox" value="0"> Eraser tool was used on images.</li>
						<li><input type="checkbox" value="0"> Text was changed to raster image.</li>
						<li><input type="checkbox" value="0"> Shapes are raster (pixel) not vector.</li>
						<li><input type="checkbox" value="0"> Layers were merged.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> Spacing and alignment need to be consistent.</li>
						<li><input type="checkbox" value="0"> Empty or unused layers must not exist.</li>
						<li><input type="checkbox" value="0"> Wireframe does not contain labels or descriptions.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Design</h3>
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
					<h4>Colors</h4>
					<ul><li><input type="checkbox" value="0"> Colors should not exist in wireframe.</li></ul>
					<h4>Elements and Principles of Design</h4>
					<ul><li><input type="checkbox" value="0"> Wireframe labels must be visible.</li></ul>
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
				<table width="500px" class="points1">
					<tr>
						<th>Missing Files</th>
					</tr>
					<tr>
						<td>
							<input type="checkbox" value="-20"> Mobile wireframe was not submitted.<br>
							<input type="checkbox" value="-30"> Desktop wireframe was not submitted.
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