<!DOCTYPE html>
<html lang="en">
  <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Course",
  "courseCode": "GR10MATH",
  "name": "Length of a Line Segment",
  "provider": {
    "@type": "HighSchool",
    "name": "MyHomeworkRewards",
    "url": "https://app.myhomeworkrewards.com/lessons/Gr10/Math/Analytic_Geometry/length_of_line.php"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1",
    "reviewCount": "1"
  },
    "datePublished": "2022-05-01",
    "author": {"@type": "Person", "name": "Gabriel Aversano"},
    "publisher": {"@type": "Organization", "name": "Admin"}
  }

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Calculate the length of a line segment from the distance from two points. ">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Length of a Line Segment</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.list-group-item{border:0px solid black;}
		
		.breadcrumb{background-color:#5B0A9F;}
		.breadcrumb>li>a{color:white;}
		
		.well{background-color:#DCC4F8;}
		.panel-primary > .panel-heading{background-color:#DCC4F8; color:black;}
		.panel-default > .panel-heading{background-color:#DCC4F8;}
		h1{font-family: lucida sans;}
	    h2{font-family: lucida sans;}
	    h3{font-family: lucida sans;}
	    
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
    
    <script>
        function draw() 
        {
          var canvas = document.getElementById('canvas');
          if (canvas.getContext)
          {
            var context = canvas.getContext('2d');
        
            context.beginPath();
            context.font = "20px Arial";
            context.fillText("C",292,130);
            context.fillText("D",230,80);
            context.fillText("E",230,80);
            context.closePath();
            context.lineWidth = 10;
            context.strokeStyle = '#666666';
            context.stroke();
            context.fillStyle = "white";
            context.fill();
            
            context.beginPath();
            context.arc(300, 100, 90, 1, 8);
            context.lineWidth=5;
            context.strokeStyle = '#666666';
            context.stroke();
            
            context.beginPath();
            context.arc(300, 100, 3, 1, 8);
            context.lineWidth=5;
            context.strokeStyle = '#666666';
            context.stroke();
            context.fillStyle = '#666666';
            context.fill();
            
            context.beginPath();
            context.arc(375, 50, 3, 1, 8);
            context.lineWidth=5;
            context.strokeStyle = '#666666';
            context.stroke();
            context.fillStyle = '#666666';
            context.fill();
          }
        }
    </script>
	<script src="length_of_line.js"></script>
	<!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script> -->
  </head>
  
  <body style="padding-top:80px;"> 
  <?php include_once( $_SERVER['DOCUMENT_ROOT']."/lessons/header.php");?>

	<div class="container-fluid" style="margin-bottom:30px;"><br><br>
		<div class="row">			
			<div class="col-lg-8 col-lg-offset-2">
				<ol class="breadcrumb">
					<li><a href="/lessons/lessons_main.php">Lessons</a></li>
					<li><a href="/lessons/Gr10/gr10_main.php">Gr10</a></li>
					<li><a href="/lessons/Gr10/Math/gr10_math_main.php">Math</a></li>
					<li><a href="/lessons/Gr10/Math/Analytic_Geometry/length_of_line.php" style="font-weight:bold;">Length of a Line</a></li>
				</ol>		
			</div>
		</div>
		
		<div class="row">

			<div class="col-lg-8 col-lg-offset-2">
				
				<h1>Length of a Line</h1>
				
				<div class="row">
					<div class="col-lg-9">
					    <p>Finding the <b>Length of a Line</b> segment is useful for finding the distance between 2 separate coordinates/endpoints on a graph. This is very similar to finding the hypoteneuse of a triangle. It can be expressed using the formula:</p>
					    <center>
					        \(d = \sqrt{(x₂ - x₁)^2 + (y₂ - y₁)^2}\)
					    </center><br>
					    <ul>
					        <li>\(d\) represents the distance</li>
					        <li>\(x₁\) and \(y₁\) represent the first set of coordinates</li>
					        <li>\(x₂\) and \(y₂\) reprsent the second set of coordinates</li>
					    </ul>
					    <br>
					    <b>Example</b><br>
					    <p>Calculate the length of a line sgement with endpoints  \((4,3)\) and \((2,-2)\).</p>
					    <p>All we need to do to find the line length is plug the coordinates into the formula:</p>
					    <center>
					        \(d = \sqrt{(2 - 4)^2 + (-2 - 3)^2}\)<br>
					        \(d = \sqrt{(-2)^2 + (-5)^2}\)<br>
					        \(d = \sqrt{4 + 25}\)<br>
					        \(d = \sqrt{29} ≅ 5.4\)
					    </center><br>
					    <p>Therefore, we can determine that the length of the line segment is roughly \(5.4\).</p>
						<div class="panel panel-default" style="width: 75%; margin: 0 auto;"> 
							<div class="panel-body">
								<p>Enter coordinates of two points in (x, y) form. Then press "Calculate" to calculate the length of the line between the points.</p>
								<div class="form-group">
								<label for="first-user-val"> \(A (x_1, y_1) \):</label>
									<input type="text" class="form-control" id="first-user-val" name="first-user-val" placeholder="(x1, y1)" style="width:150px;" required>
								</div>
								<div class="form-group">
								<label for="second-user-val">\(B (x_2, y_2) \):</label>
									<input type="text" class="form-control" id="second-user-val" name="second-user-val" placeholder="(x2, y2)" style="width:150px;" required><br>
								</div>

								<button type="button" class="btn btn-default" name="button" onclick="drawRightTriangle()">Calculate</button>
								<p id="error"></p>
							</div>
						</div>
						<br><br>
						<canvas id="canvas" width="580" height="580"></canvas>
						<p id="length"></p>

						<p>The calculation process of the length of a line is the following.</p><br>
						<center>
							\(d = \sqrt{(x₂ - x₁)^2 + (y₂ - y₁)^2}\)
						</center>
						<br>
						<p id="calculation-process"></p>

					    <div class="well well-sm">Calculate the length of a line segment with endpoints \((-3/4, -2/5)\) and \((1/4, 3/5)\)</div>
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example">Show Answer</span>
							<div id="example" class="hidden-answer" style="display: none">
						<p>We can first convert all the fractions in the coordinates to have the same denominator:</p>
						<center>
						    \(\text{Coordinate}₁ = (-15/20, -8/20)\)<br>
						    \(\text{Coordinate}₂ = (5/20, 12/20)\)
						</center><br>
						<p>We can now plug the coordinates into the formula to find the line length:</p>
						<center>
						    \(d = \sqrt{(\cfrac{5}{20} - \cfrac{-15}{20})^2 + (\cfrac{12}{20} - \cfrac{-8}{20})^2}\)<br><br>
						    \(d = \sqrt{(\cfrac{20}{20})^2 + (\cfrac{20}{20})^2}\)<br><br>
						    \(d = \sqrt{(1)^2 + (1)^2}\)<br>
						    \(d = \sqrt{1 + 1}\)<br>
						    \(d = \sqrt{2} ≅ 1.4\)<br>
						</center><br>
						<p>Therefore, we can determine the length of the line segment is roughly \(1.4\).</p>
						</div></div>
						<hr>
						<div class="well well-sm">The endpoint of the radius of a circle with centre \(\text{C}(2,3)\) is \(\text{D}(5,5)\).<br>
						i. Determine the length of the diameter of the circle.<br>
						ii. Determine the coordinates of the endpoint \(\text{E}\) of the diameter \(\text{DE}\) of the circle.</div>
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example2">Show Answer</span>
						<div id="example2" class="hidden-answer" style="display: none">
						<p>i. As we have both the origin and an endpoint, we can calculate the length of the radius. In this instance we will classify the origin as coordinate \(1\) and endpoint \(\text{D}\) as coordinate \(2\):</p>
						<center>
						    \(r = \sqrt{(5 - 2)^2 + (5 - 3)^2}\)<br>
						    \(r = \sqrt{(3)^2 + (2)^2}\)<br>
						    \(r = \sqrt{9 + 4}\)<br>
						    \(r = \sqrt{13} ≅ 3.6\)<br>
						</center><br>
						<p>All we need to do to determine the diameter is multiply the radius by \(2\):</p>
						<center>
						    \(d = (2)(3.6) ≅ 7.2\)
						</center><br>
						<p>Therefore, we can determine that the diameter of the circle is roughly \(7.2\).</p>
						<hr>
						<p>ii. We can use the midpoint formula to identify the other endpoint of the circle. In this instance, we will classify endpoint \(\text{D}\) as coordinate 1 and endpoint \(\text{E}\) as endpoint 2:</p>
						<center>
						    \((2, 3) = (\cfrac{5 + x₂}{2}, \cfrac{5 + y₂}{2})\)
						</center><br>
						<p>We can cross-multiply between the endpoints and midpoint to determine the coordinate for endpoint \(\text{E}\):</p>
						<center>
						    \((2)(2) = (2)(\cfrac{5 + x₂}{2})\)<br>
						    \(4 = 5 + x₂\)<br>
						    \(x₂ = 4 - 5\)<br>
						    \(x₂ = -1\)<br><br>
						    \((2)(3) = (2)(\cfrac{5 + y₂}{2})\)<br>
						    \(6 = 5 + y₂\)<br>
						    \(y₂ = 6 - 5\)<br> 
						    \(y₂ = 1\)
						</center><br>
						<p>Therefore, we can determine that the coordinate for endpoint \(\text{E}\) is \((-1, 1)\).</p>
					    </div></div>
					    <hr>
					    <div class="well well-sm">The vertices of &#9651;\(\text{XYZ}\) are \(\text{X}(-6, 8)\), \(\text{Y}(-2, -4)\) and \(\text{Z}(4,6)\).<br>
					    i. Determine the exact length of each side of the triangle.<br>
					    ii. Classify this triangle.<br></div>
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example3">Show Answer</span>
						<div id="example3" class="hidden-answer" style="display: none">
						<p>i. We can use the Length of a Line formula to calculate each of the side lengths:</p>
						<center>
						    d<sub>XY</sub> \(= \sqrt{(-2 - (-6))^2 + (-4 - 8)^2}\)<br>
						    d<sub>XY</sub> \(= \sqrt{(4)^2 + (-12)^2}\)<br>
						    d<sub>XY</sub> \(= \sqrt{16 + 144}\)<br>
						    d<sub>XY</sub> \(= \sqrt{160} ≅ 12.65\)<br><br>
						    
						    d<sub>YZ</sub> \(= \sqrt{(4 - (-2))^2 + (6 - (-4))^2}\)<br>
						    d<sub>YZ</sub> \(= \sqrt{(6)^2 + (10)^2}\)<br>
						    d<sub>YZ</sub> \(= \sqrt{36 + 100}\)<br>
						    d<sub>YZ</sub> \(= \sqrt{136} ≅ 11.66\)<br><br>
						    
						    d<sub>XZ</sub> \(= \sqrt{(-6 - 4)^2 + (8 - 6)^2}\)<br>
						    d<sub>XZ</sub> \(= \sqrt{(-10)^2 + (2)^2}\)<br>
						    d<sub>XZ</sub> \(= \sqrt{100 + 4}\)<br>
						    d<sub>XZ</sub> \(= \sqrt{104} ≅ 10.2\)<br>
						</center><br>
						<p>Therefore, we can determine that d<sub>XY</sub> \(≅ 12.65\), d<sub>YZ</sub> \(≅ 11.66\) and d<sub>XZ</sub> \(≅ 10.2\)</p>
						<hr>
						<p>ii. As all 3 side lengths are unique from one another, we can identify that this is a Scalene Triangle.</p>
						</div></div>
						<hr>
						<!--<h3>Line Segment Applications</h3>
						<p>In addition to being used to find the distance between graph coordinates, line segments can also be used to find the distance between specific points on shapes, determine side lengths and other notable shape properties. They can also be used to help classify certain shapes such as triangles.</p>
						<b>Example</b>
						<p>The endpoint of the radius of a circle with centre C(2,3) is D(5,5). Determine the length of the circle's diameter and the coordinates of the endpoint E of the diameter DE of the circle.</p> 
						<p>First, we can sketch a diagram to help visualize the problem:</p>
						<canvas id="canvas" width="500" height="200"></canvas>
						-->
				</div>
				<div class="col-lg-3">
    							<div class="panel panel-default">
    									<div class="panel-heading">
    										<h5 class="text-center">Review these lessons:</h5>
    									</div>
    								<div class="panel-body">
    									<ul class="list-group">
    									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="altitude.php">Altitude</a></li>
    									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="median.php">Median</a></li>
    									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="midpoint.php">Midpoint</a></li>
    									</ul>
    								</div>
    							</div>
    							<div class="panel panel-default">
    									<div class="panel-heading">
    										<h5 class="text-center">Try these questions:</h5>
    									</div>
    								<div class="panel-body">
    									<ul class="list-group">
    									 <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="https://app.myhomeworkrewards.com/practice.php?question=91&difficulty=1" target="_blank">Length of A Line Formula</a></li>
    									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="https://app.myhomeworkrewards.com/practice.php?question=92&difficulty=3" target="_blank">Line Distance Between Coordinates</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
				
				</div>
				
				<br><br>
				<?php include_once( $_SERVER['DOCUMENT_ROOT']."/lessons/footer.php");?>
				
			</div>	
		</div>
		
	</div>
	
	

	<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
	<script type='text/javascript' src='hide_answer.js'></script>
    <script src="bootstrap.min.js"></script>
	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({ TeX: { extensions: ["color.js"] }});
	</script>
  </body>
</html>