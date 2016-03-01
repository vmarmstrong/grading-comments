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
			<h3 class="sectiontitle">Automatic point deductions</h3>
			<div class="sectioncontent">
				<table class="points10">
					<tr>
						<th colspan="2">File name</th>
					</tr>
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio3" checked="checked" value="1"></td>
						<td><input type="radio" name="radio3" value="0"></td>
					</tr>
				</table>
				<table class="points10">
					<tr>
						<th colspan="2">File type</th>
					</tr>
					<tr>
						<td><abbr title="Comprehensive and in-depth understanding of the subject matter. Can provide sophisticated solutions to complex problems."><span style="text-decoration:underline;">A+</span></abbr></td>
						<td><abbr title="Very little understanding of learning standards in this area."><span style="text-decoration:underline;">U</span></abbr></td>
					</tr>
					<tr>
						<td><input type="radio" name="radio3" checked="checked" value="1"></td>
						<td><input type="radio" name="radio3" value="0"></td>
					</tr>
				</table>
				<div class="feedback">
					<ul>
						<li><input type="checkbox" value="0"> Zip file should be named MMD1_<?php echo $term; ?>_11_LAST_FIRST.zip</li>
						<li><input type="checkbox" value="0"> Photoshop document file should be named practical.psd.</li>
					</ul>
					<ul>
						<li><input type="checkbox" value="0"> File should be a compressed .zip file.</li>
						<li><input type="checkbox" value="0"> Zip file should contain 1 .psd file.</li>
					</ul>
					<h4>Additional Comments</h4>
					<p><textarea class="commentSection" rows="4" cols="75"></textarea></p>
				</div>
			</div>
			<h3 class="sectiontitle">Requirements</h3>
			<div class="sectioncontent">
				<table class="points179">
					<tr>
						<h4>Create new document.</h4>
						<input type="checkbox" value="-1"> Document width should be 960 px (2).
						<input type="checkbox" value="-1"> Document height should be 700 px (2).
						<input type="checkbox" value="-1"> Document resolution should be 72 ppi (2).
						<input type="checkbox" value="-1"> Document color mode should be 8bit RGB (2).
						<input type="checkbox" value="-1"> Document background color should be transparent (3).
					</tr>
					<tr>
						<h4>Create a shape.</h4>
						<input type="checkbox" value="-1"> Shape should be a rounded rectangle (4).
						<input type="checkbox" value="-1"> Shape should be named "large input" (4).
						<input type="checkbox" value="-1"> Shape width should be 250 px (5).
						<input type="checkbox" value="-1"> Shape height should be 40 px (5).
						<input type="checkbox" value="-1"> Shape corner radius should be 10 px (5).
						<input type="checkbox" value="-1"> Shape should have a stroke (6).
						<input type="checkbox" value="-1"> Shape stroke size should be 3 px (6).
						<input type="checkbox" value="-1"> Shape stroke color should be #c4c4c4 (6).
						<input type="checkbox" value="-1"> Shape stroke should be aligned to the inside (6).
						<input type="checkbox" value="-1"> Shape should have a background gradient (6).
						<input type="checkbox" value="-1"> Shape background gradient should be from #ffffff to #ededed (6).
						<input type="checkbox" value="-1"> Shape should have a drop shadow (7).
						<input type="checkbox" value="-1"> Shape drop shadow color should be #333333 (7).
						<input type="checkbox" value="-1"> Shape drop shadow opacity should be 55% (7).
						<input type="checkbox" value="-1"> Shape should be placed 50 px from the top (8).
						<input type="checkbox" value="-1"> Shape should be placed 50 px from the left (8).
					</tr>
					<tr>
						<h4>Add text.</h4>
						<input type="checkbox" value="-1"> Type layer should have text "Username (9).
						<input type="checkbox" value="-1"> Type layer should be named "Username (9).
						<input type="checkbox" value="-1"> Type layer font should be Helvetica (10).
						<input type="checkbox" value="-1"> Type layer font style should be Light (10).
						<input type="checkbox" value="-1"> Type layer font size should be 15 pt (10).
						<input type="checkbox" value="-1"> Type layer font should be left aligned (10).
						<input type="checkbox" value="-1"> Type layer font color should be #808080 (10).
						<input type="checkbox" value="-1"> Type layer should be placed on top of the large input shape (10).
						<input type="checkbox" value="-1"> Type layer should be aligned vertically in the center (11).
						<input type="checkbox" value="-1"> Type layer should be 20 px from the left side of the large input shape (12).
					</tr>
					<tr>
						<h4>Create a shape.</h4>
						<input type="checkbox" value="-1"> Shape should be a rounded rectangle (13).
						<input type="checkbox" value="-1"> Shape should be named "small input" (13).
						<input type="checkbox" value="-1"> Shape width should be 100 px (14).
						<input type="checkbox" value="-1"> Shape height should be 40 px (14).
						<input type="checkbox" value="-1"> Shape corner radius should be 10 px (14).
						<input type="checkbox" value="-1"> Shape should have a stroke (15).
						<input type="checkbox" value="-1"> Shape stroke size should be 3 px (15).
						<input type="checkbox" value="-1"> Shape stroke color should be #c4c4c4 (15).
						<input type="checkbox" value="-1"> Shape stroke should be aligned to the inside (15).
						<input type="checkbox" value="-1"> Shape should have a background gradient (15).
						<input type="checkbox" value="-1"> Shape background gradient should be from #ffffff to #ededed (15).
						<input type="checkbox" value="-1"> Shape should have a drop shadow (16).
						<input type="checkbox" value="-1"> Shape drop shadow color should be #333333 (16).
						<input type="checkbox" value="-1"> Shape drop shadow opacity should be 55% (16).
						<input type="checkbox" value="-1"> Shape should be placed 110 px from the top (17).
						<input type="checkbox" value="-1"> Shape should be placed 50 px from the left (17).
					</tr>
					<tr>
						<h4>Add text.</h4>
						<input type="checkbox" value="-1"> Type layer should have text "Pin Code" (18).
						<input type="checkbox" value="-1"> Type layer should be named "Pin Code" (18).
						<input type="checkbox" value="-1"> Type layer font should be Helvetica (19).
						<input type="checkbox" value="-1"> Type layer font style should be Light (19).
						<input type="checkbox" value="-1"> Type layer font size should be 15 pt (19).
						<input type="checkbox" value="-1"> Type layer font should be left aligned (19).
						<input type="checkbox" value="-1"> Type layer font color should be #808080 (19).
						<input type="checkbox" value="-1"> Type layer should be placed on top of the small input shape (20).
						<input type="checkbox" value="-1"> Type layer should be aligned vertically in the center (20).
						<input type="checkbox" value="-1"> Type layer should be 20 px from the left side of the small input shape (21).
					</tr>
					<tr>
						<h4>Create a shape.</h4>
						<input type="checkbox" value="-1"> Shape should be a rounded rectangle (22).
						<input type="checkbox" value="-1"> Shape should be named "medium input" (22).
						<input type="checkbox" value="-1"> Shape width should be 130 px (23).
						<input type="checkbox" value="-1"> Shape height should be 40 px (23).
						<input type="checkbox" value="-1"> Shape corner radius should be 10 px (23).
						<input type="checkbox" value="-1"> Shape should have a stroke (24).
						<input type="checkbox" value="-1"> Shape stroke size should be 3 px (24).
						<input type="checkbox" value="-1"> Shape stroke color should be #c4c4c4 (24).
						<input type="checkbox" value="-1"> Shape stroke should be aligned to the inside (24).
						<input type="checkbox" value="-1"> Shape should have a background gradient (24).
						<input type="checkbox" value="-1"> Shape background gradient should be from #ffffff to #ededed (24).
						<input type="checkbox" value="-1"> Shape should have a drop shadow (25).
						<input type="checkbox" value="-1"> Shape drop shadow color should be #333333 (25).
						<input type="checkbox" value="-1"> Shape drop shadow opacity should be 55% (25).
						<input type="checkbox" value="-1"> Shape should be placed 110 px from the top (26).
						<input type="checkbox" value="-1"> Shape should be placed 170 px from the left (26).
					</tr>
					<tr>
						<h4>Add text.</h4>
						<input type="checkbox" value="-1"> Type layer should have text "Exp. Date" (27).
						<input type="checkbox" value="-1"> Type layer should be named "Exp. Date" (27).
						<input type="checkbox" value="-1"> Type layer font should be Helvetica (28).
						<input type="checkbox" value="-1"> Type layer font style should be Light (28).
						<input type="checkbox" value="-1"> Type layer font size should be 15 pt (28).
						<input type="checkbox" value="-1"> Type layer font should be left aligned (28).
						<input type="checkbox" value="-1"> Type layer font color should be #808080 (28).
						<input type="checkbox" value="-1"> Type layer should be placed on top of the medium input shape (29).
						<input type="checkbox" value="-1"> Type layer should be aligned vertically in the center (29).
						<input type="checkbox" value="-1"> Type layer should be 20 px from the left side of the medium input shape (30).
					</tr>
					<tr>
						<h4>Create a shape.</h4>
						<input type="checkbox" value="-1"> Shape should be a rounded rectangle (31).
						<input type="checkbox" value="-1"> Shape should be named "button" (31).
						<input type="checkbox" value="-1"> Shape width should be 250 px (32).
						<input type="checkbox" value="-1"> Shape height should be 40 px (32).
						<input type="checkbox" value="-1"> Shape corner radius should be 10 px (32).
						<input type="checkbox" value="-1"> Shape should have a stroke (33).
						<input type="checkbox" value="-1"> Shape stroke size should be 3 px (33).
						<input type="checkbox" value="-1"> Shape stroke color should be #80CC39 (33).
						<input type="checkbox" value="-1"> Shape stroke should be aligned to the inside (33).
						<input type="checkbox" value="-1"> Shape should have a background gradient (33).
						<input type="checkbox" value="-1"> Shape background gradient should be from #D2FF52 to #91E842 (33).
						<input type="checkbox" value="-1"> Shape should have a drop shadow (34).
						<input type="checkbox" value="-1"> Shape drop shadow color should be #40661D (34).
						<input type="checkbox" value="-1"> Shape drop shadow opacity should be 55% (34).
						<input type="checkbox" value="-1"> Shape should be placed 170 px from the top (35).
						<input type="checkbox" value="-1"> Shape should be placed 50 px from the left (35).
					</tr>
					<tr>
						<h4>Add text.</h4>
						<input type="checkbox" value="-1"> Type layer should have text "Register Today" (36).
						<input type="checkbox" value="-1"> Type layer should be named "Register Today" (36).
						<input type="checkbox" value="-1"> Type layer font should be Helvetica (37).
						<input type="checkbox" value="-1"> Type layer font style should be Bold (37).
						<input type="checkbox" value="-1"> Type layer font size should be 18 pt (37).
						<input type="checkbox" value="-1"> Type layer font should be center aligned (37).
						<input type="checkbox" value="-1"> Type layer font color should be #FFFFFF (37).
						<input type="checkbox" value="-1"> Type layer should have a drop shadow (38).
						<input type="checkbox" value="-1"> Type layer drop shadow color should be #304C15 (38).
						<input type="checkbox" value="-1"> Type layer drop shadow opacity should be 85% (38).
						<input type="checkbox" value="-1"> Type layer drop shadow distance should be 1 px (38).
						<input type="checkbox" value="-1"> Type layer drop shadow size should be 7 px (38).
						<input type="checkbox" value="-1"> Type layer should be placed on top of the button shape (39).
						<input type="checkbox" value="-1"> Type layer should be aligned vertically in the center (39).
						<input type="checkbox" value="-1"> Type layer should be aligned horizontally in the center (39).
					</tr>
					<tr>
						<h4>Create a shape.</h4>
						<input type="checkbox" value="-1"> Shape should be a rectangle (40).
						<input type="checkbox" value="-1"> Shape should be named "image background" (40).
						<input type="checkbox" value="-1"> Shape width should be 860 px (41).
						<input type="checkbox" value="-1"> Shape height should be 300 px (41).
						<input type="checkbox" value="-1"> Shape should have a fill color (47).
						<input type="checkbox" value="-1"> Shape should be placed 300 px from the top (42).
						<input type="checkbox" value="-1"> Shape should be placed 50 px from the left (42).
					</tr>
					<tr>
						<h4>Add images to the document.</h4>
						<input type="checkbox" value="-1"> Image named smbeach.jpg should be added to the document (44).
						<input type="checkbox" value="-1"> Image named smbeach.jpg should be made a smart object (44).
						<input type="checkbox" value="-1"> Image named smwoman.jpg should be added to the document (44).
						<input type="checkbox" value="-1"> Image named smwoman.jpg should be made a smart object (44).
						<input type="checkbox" value="-1"> Image named smboat.jpg should be added to the document (44).
						<input type="checkbox" value="-1"> Image named smboat.jpg should be made a smart object (44).
					</tr>
					<tr>
						<h4>Layer Masking.</h4>
						<input type="checkbox" value="-1"> Smwoman image should have a layer mask (45).
						<input type="checkbox" value="-1"> Smwoman image background should be hidden (45).
						<input type="checkbox" value="-1"> Smboat image should have a layer mask (45).
						<input type="checkbox" value="-1"> Smboat image background should be hidden (45).
					</tr>
					<tr>
						<h4>Clipping Mask.</h4>
						<input type="checkbox" value="-1"> Smwoman image should be placed on top of the image background shape (47).
						<input type="checkbox" value="-1"> Smboat image should be placed on top of the image background shape (47).
						<input type="checkbox" value="-1"> Smbeach image should be placed on top of the image background shape (47).
						<input type="checkbox" value="-1"> Smwoman image should be clipped to image background shape (47).
						<input type="checkbox" value="-1"> Smboat image should be clipped to image background shape (47).
						<input type="checkbox" value="-1"> Smbeach image should be clipped to image background shape (47).
					</tr>
					<tr>
						<h4>Adjustment Layers.</h4>
						<input type="checkbox" value="-1"> Photo Filter adjustment layer should be added to the document (48).
						<input type="checkbox" value="-1"> Photo Filter used should be Warming Filter (81) (49).
						<input type="checkbox" value="-1"> Photo Filter should be masked to the smwoman image (50).
					</tr>
					<tr>
						<h4>Add text.</h4>
						<input type="checkbox" value="-1"> Type layer should have text "your first and last name" (51).
						<input type="checkbox" value="-1"> Type layer should be named "your first and last name" (51).
						<input type="checkbox" value="-1"> Type layer font should be Helvetica (52).
						<input type="checkbox" value="-1"> Type layer font style should be Regular (52).
						<input type="checkbox" value="-1"> Type layer font size should be 36 pt (52).
						<input type="checkbox" value="-1"> Type layer font should be left aligned (52).
						<input type="checkbox" value="-1"> Type layer font color should be #333333 (52).
						<input type="checkbox" value="-1"> Type layer should have kerning applied to two letters of your first name (53).
						<input type="checkbox" value="-1"> Type layer should have a layer mask (54).
						<input type="checkbox" value="-1"> The first letter in the last name should be hidden (54).
					</tr>
					<tr>
						<h4>Composition.</h4>
						<input type="checkbox" value="-1"> Smwoman image, smboat image, and name type layer should be placed inside the image background area (55).
						<input type="checkbox" value="-1"> Images should be scaled down to an appropriate size (56).
						<input type="checkbox" value="-1"> Rules of composition should be applied to create a pleasing layout (56).
					</tr>
					<tr>
						<h4>Layer Organization.</h4>
						<input type="checkbox" value="-1"> Form elements should be grouped together (57).
						<input type="checkbox" value="-1"> Form elements grouped should be named "FORM" (57).
						<input type="checkbox" value="-1"> Image elements should be grouped together (58).
						<input type="checkbox" value="-1"> Image elements grouped should be named "IMAGES" (58).
						<input type="checkbox" value="-1"> Form group should be the first group in the layers panel (59).
						<input type="checkbox" value="-1"> Images group should be the second group in the layers panel (59).
						<input type="checkbox" value="-1"> Username type layer should be 1st in the Form group (59).
						<input type="checkbox" value="-1"> Large input shape layer should be 2nd in the Form group (59).
						<input type="checkbox" value="-1"> Pin Code type layer should be 3rd in the Form group (59).
						<input type="checkbox" value="-1"> Small input shape layer should be 4th in the Form group (59).
						<input type="checkbox" value="-1"> Exp. Date type layer should be 5th in the Form group (59).
						<input type="checkbox" value="-1"> Medium input shape layer should be 6th in the Form group (59).
						<input type="checkbox" value="-1"> Register today type layer should be 7th in the Form group (59).
						<input type="checkbox" value="-1"> Button shape layer should be 8th in the Form group (59).
						<input type="checkbox" value="-1"> Image background shape layer should be 6th in the Images group (59).
						<input type="checkbox" value="-1"> Smbeach image layer should be 5th in the Images group (59).
					</tr>
					
				</table>
				<div class="feedback">
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