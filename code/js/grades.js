//dom ready function
$(function(){
	//create accordion ui
	$( "#accordion" ).accordion({collapsible:true, heightStyle: "content"});
	
	//find number of sections and number of tables in each section
	var sectionsArray = $("#accordion .sectioncontent");
	var tablesPerSection = [];
	
	//
	$("#accordion .sectioncontent").each(function(index){
		var selectorStr1 = "#accordion .sectioncontent:eq(";
		var selectorStr2 = ") > table";
		var selectorStr = selectorStr1.concat(index,selectorStr2);
		var tables = $(selectorStr);
		tablesPerSection.push(tables.length);
	});
	
	//add comments to page
	var updateText = function(updateArr){
		var finalGrade = 0;
		var addFeedbackText = "";
		
		for (var i=0; i<updateArr.length; i++){
			finalGrade += updateArr[i].earnedSectionPoints;
			
			if(updateArr[i].sectionTitle == "Deductions"){
				addFeedbackText += updateArr[i].sectionTitle 
				+ ": " 
				+ updateArr[i].earnedSectionPoints 
				+ ". " 
				+ updateArr[i].sectionFeedback 
				+ updateArr[i].sectionComments 
				+ " ";
			}else{
				addFeedbackText += updateArr[i].sectionTitle 
				+ ": " 
				+ updateArr[i].earnedSectionPoints 
				+ "/" 
				+ updateArr[i].totalSectionPoints 
				+ ". " 
				+ updateArr[i].sectionFeedback 
				+ updateArr[i].sectionComments 
				+ " ";
			};
			
		};
		
		$("#copygrade").html(finalGrade);
		$("#feedbackText").text(addFeedbackText);
	};
	
	//
	$("body").change(function(){
		
		var updateArr = [];
		
		//loop for sections
		var x = sectionsArray.length;
		for ( var i = 0; i < x; i++){
			var totalSectionPoints = 0,
				earnedSectionPoints = 0,
				sectionFeedback = "",
				sectionComments = "";
			
			var sectionTitleSelectorStr = "#accordion .sectioncontent:eq(" + i + ")";
			var sectionTitle = $(sectionTitleSelectorStr).prev("h3").text();
			
			var inputSelectorStr = sectionTitleSelectorStr + " > .feedback input:checked";
			
			$(inputSelectorStr).each(function () {
				if($(this).parent().text() != ""){
					sectionFeedback += $(this).parent().text();
				};
			});
			
			var sectionCommentSelectorStr = "#accordion .sectioncontent:eq(" + i + ") > .feedback textarea.commentSection";
			sectionComments = $(sectionCommentSelectorStr).val();
			
			//loop for tables
			for ( var j = 0; j <= tablesPerSection[i]-1; j++ ){
				var totalTablePoints = 0,
					earnedTablePoints = 0;
				
				//create selector for table
				var tableSelectorStr = "#accordion .sectioncontent:eq(" + i + ") > table:eq(" + j + ")";
				
				//find total points for table
				totalTablePoints = Number($(tableSelectorStr).attr("class").slice(6));
				totalSectionPoints += totalTablePoints;
				
				var inputsCheckedSelectorStr = tableSelectorStr + " input:checked";
				$(inputsCheckedSelectorStr).each(function(){
					earnedTablePoints = totalTablePoints * Number($(this).attr('value'));
				});
				earnedSectionPoints += earnedTablePoints;
			};
			
			//create object with update info
			var sectionUpdate = {
				"sectionTitle": sectionTitle,
				"totalSectionPoints": totalSectionPoints,
				"earnedSectionPoints": earnedSectionPoints,
				"sectionFeedback": sectionFeedback,
				"sectionComments": sectionComments
			};
			
			//put object in array
			updateArr.push(sectionUpdate);
		};
		
		//run update function and pass array of objects
		updateText(updateArr);
		
	}).change();
	
});