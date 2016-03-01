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
		<h2 id="page_title"><a href="../index.php">HOME</a> > <a href="https://docs.google.com/document/d/1u4wJAjwkZixuorfMfQL0qIWzpLTpgwdcQmDpgJsB2XI/edit?usp=sharing" target="_blank">Project 4: Final Comp</a></h2>
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
						<li><input type="checkbox" value="0"> Desktop wireframe file should be named LAST_FIRST_4a_<?php echo $term; ?>.psd.</li>
						<li><input type="checkbox" value="0"> Mobile wireframe file should be named LAST_FIRST_4b_<?php echo $term; ?>.psd.</li>
						<li><input type="checkbox" value="0"> Folder should be named LAST_FIRST_4c_<?php echo $term; ?>.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> File should be a compressed zip file.</li>
						<li><input type="checkbox" value="0"> Zip file should contain 2 psd files and 1 folder.</li>
						<li><input type="checkbox" value="0"> Folder should contain 5 images and 1 text file.</li>
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
					<h4>Groups</h4>
					<ul>
						<li><input type="checkbox" value="0"> Not all layers are in their top level groups.</li>
						<li><input type="checkbox" value="0"> Not all layers are in their sub level groups.</li>
					</ul>
					<h4>Names</h4>
					<ul>
						<li><input type="checkbox" value="0"> Some groups are not named appropriately.</li>
						<li><input type="checkbox" value="0"> Some layers are not named appropriately.</li>
					</ul>
					<h4>Order</h4>
					<ul>
						<li><input type="checkbox" value="0"> Not all layers are in the correct groups.</li>
						<li><input type="checkbox" value="0"> Not all layers or groups are in the correct order.</li>
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
					<h4>Consistency</h4>
					<ul>
						<li><input type="checkbox" value="0"> Design is inconsistent across desktop and mobile versions.</li>
						<li><input type="checkbox" value="0"> Design is inconsistent between the CTA and the rest of the final comp.</li>
						<li><input type="checkbox" value="0"> Buttons are inconsistent from CTA to final comp.</li>
						<li><input type="checkbox" value="0"> Form elements are inconsistent from CTA to final comp.</li>
					</ul>
					<h4>Logo & slicing</h4>
					<ul>
						<li><input type="checkbox" value="0"> Logo was included incorrectly.</li>
						<li><input type="checkbox" value="0"> Image slices were not made from the desktop version.</li>
						<li><input type="checkbox" value="0"> Mobile comp did not include navigation icons.</li>
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
						<li><input type="checkbox" value="0"> Incorrect use of gradient tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of shape tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of type tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of brush tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of gradient tool.</li>
						<li><input type="checkbox" value="0"> Incorrect use of transform tool.</li>
						<li><input type="checkbox" value="0"> Images scaled disproportionately.</li>
						<li><input type="checkbox" value="0"> Incorrect use of slice tool.</li>
						<li><input type="checkbox" value="0"> Slices were not left on document to evaluate use.</li>
					</ul>
					<h4>Character Panel</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect fonts used in tagline.</li>
						<li><input type="checkbox" value="0"> Tagline logo should be in one text layer.</li>
						<li><input type="checkbox" value="0"> Incorrect use of tracking or kerning.</li>
						<li><input type="checkbox" value="0"> Incorrect use of vertical or horizontal scale.</li>
						<li><input type="checkbox" value="0"> Incorrect use of leading.</li>
					</ul>
					<h4>Layer masks</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of layer masks on shapes.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer masks on images.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer masks on text.</li>
					</ul>
					<h4>Layer styles</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of layer styles on form elements.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer styles on navigation elements.</li>
						<li><input type="checkbox" value="0"> Incorrect use of layer styles on text.</li>
					</ul>
					<h4>Layer adjustments</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of layer adjustments.</li>
						<li><input type="checkbox" value="0"> Layer adjustments were not used.</li>
						<li><input type="checkbox" value="0"> Layer adjustments should be limited to selected images and not all layers.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Craftsmanship</h3>
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
					<h4>Smart Objects</h4>
					<ul>
						<li><input type="checkbox" value="0"> Images were not converted to smart objects.</li>
						<li><input type="checkbox" value="0"> Some images were not converted to smart objects.</li>
					</ul>
					<h4>Non-destructive edits</h4>
					<ul>
						<li><input type="checkbox" value="0"> Layers were edited destructively.</li>
						<li><input type="checkbox" value="0"> Eraser tool was used on images.</li>
						<li><input type="checkbox" value="0"> Text was changed to raster image.</li>
						<li><input type="checkbox" value="0"> Shapes are raster (pixel) not vector.</li>
						<li><input type="checkbox" value="0"> Layers were merged.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> Spacing and alignment are inconsistent.</li>
						<li><input type="checkbox" value="0"> Empty or unused layers should not exist.</li>
						<li><input type="checkbox" value="0"> Elements are missing in final comp.</li>
					</ul>
					<h4>Slicing</h4>
					<ul>
						<li><input type="checkbox" value="0"> Slices were not optimized for quality and file size.</li>
						<li><input type="checkbox" value="0"> No slices were saved.</li>
						<li><input type="checkbox" value="0"> Only 5 images should be in the image folder.</li>
						<li><input type="checkbox" value="0"> Sliced images are not named appropriately.</li>
						<li><input type="checkbox" value="0"> One or more folders exist inside the image folder.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Design</h3>
			<div class="sectioncontent">
				<table class="points30">
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
					<ul>
						<li><input type="checkbox" value="0"> Colors do not support the brand.</li>
						<li><input type="checkbox" value="0"> Images do not support the brand.</li>
						<li><input type="checkbox" value="0"> Color tones are inconsistent between images.</li>
						<li><input type="checkbox" value="0"> Light sources are inconsistent between images.</li>
						<li><input type="checkbox" value="0"> Colors are inconsistent throughout document.</li>
					</ul>
					<h4>Composition</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of composition.</li>
						<li><input type="checkbox" value="0"> Incorrect use of grouping principles.</li>
					</ul>
					<h4>Elements and Principles of Design</h4>
					<ul>
						<li><input type="checkbox" value="0"> Incorrect use of elements of design.</li>
						<li><input type="checkbox" value="0"> Incorrect use of principles of design.</li>
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
				<table width="500px" class="points1">
					<tr>
						<th>Missing Files</th>
					</tr>
					<tr>
						<td>
							<input type="checkbox" value="-10"> Image folder was not submitted.<br>
							<input type="checkbox" value="-20"> Mobile comp was not submitted.<br>
							<input type="checkbox" value="-30"> Desktop comp was not submitted.
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