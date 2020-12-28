<!DOCTYPE html>
<html>
<head>
	<script type="application/javascript" src="rbar.js"></script>
</head>
<body>

<canvas id="myCanvas" width="700" height="500" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script type="application/javascript">


	var data = [{



        'August':



          {{$augusts}}


        }



        , {'September': <?php echo $septembers   ?>}, {'October':<?php echo $octobers ?> }, {'November': <?php echo $novembers   ?>}, {'December': <?php echo $decembers ?>}];
	var barcolor = ['#5c5fff', '#bb48e6', '#f12bc3', '#ff1f9c', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
	var obj = {
				barId: 'myCanvas', // Need To pass canvas id  and mandatory to generate the bar graph
				barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
				barColour: barcolor, // Bar colour as array and the default value is '#020202'
				barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
				barSpaces: 80, // Space between 2 bar graph and the default value is 80
				barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
				barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
				barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
				barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
				barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
				barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
				barDivision: 5, // Define the division to the Y-Axis and the default value is 5
				barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
				barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
				barScaleDivisionY: 20, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null
				barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
				barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
				barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
				barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
				barMaxHeight: 120 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
			};

	generateBarGraph(obj);

</script>


</body>
</html>
