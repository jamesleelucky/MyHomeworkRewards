<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Calculate the length of a line segment from two points.">
<title>Length of a Line Segment</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
.list-group-item { border: 0; }
.breadcrumb { background-color: #5B0A9F; }
.breadcrumb > li > a { color: white; }
.well { background-color: #DCC4F8; }
.panel-primary > .panel-heading { background-color: #DCC4F8; color: black; }
.panel-default > .panel-heading { background-color: #DCC4F8; }
h1, h2, h3 { font-family: lucida sans; }
</style>
</head>

<body style="padding-top:80px;">

<!-- ✅ Static Header -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">MyHomeworkRewards</a>
    <ul class="nav navbar-nav">
      <li><a href="lessons.html">Lessons</a></li>
      <li><a href="practice.html">Practice</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="margin-bottom:30px;"><br><br>
  <h1>Length of a Line</h1>
  <p>Finding the <b>Length of a Line</b> segment is useful for finding the distance between two points on a graph...</p>
  <center>
    <b>Formula:</b> \(d = \sqrt{(x₂ - x₁)^2 + (y₂ - y₁)^2}\)
  </center>

  <div class="panel panel-default" style="width: 75%; margin: 20px auto;">
    <div class="panel-body">
      <p>Enter coordinates of two points:</p>
      <label>A (x₁, y₁):</label>
      <input type="text" id="first-user-val" placeholder="(x1, y1)" class="form-control" style="width:150px;"><br>
      <label>B (x₂, y₂):</label>
      <input type="text" id="second-user-val" placeholder="(x2, y2)" class="form-control" style="width:150px;"><br>
      <button class="btn btn-primary" onclick="calculateDistance()">Calculate</button>
      <p id="error" style="color:red;"></p>
    </div>
  </div>

  <canvas id="canvas" width="580" height="580"></canvas>
  <p id="length" style="font-size:18px; font-weight:bold;"></p>
  <p id="calculation-process"></p>
</div>

<!-- ✅ Static Footer -->
<footer class="text-center" style="margin-top:20px;">&copy; 2025 MyHomeworkRewards</footer>

<!-- ✅ Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function calculateDistance() {
  const first = document.getElementById("first-user-val").value.replace(/[()]/g, "").split(",");
  const second = document.getElementById("second-user-val").value.replace(/[()]/g, "").split(",");

  if (first.length !== 2 || second.length !== 2) {
    document.getElementById("error").textContent = "Please enter coordinates like (x, y)";
    return;
  }

  const x1 = parseFloat(first[0]);
  const y1 = parseFloat(first[1]);
  const x2 = parseFloat(second[0]);
  const y2 = parseFloat(second[1]);

  if (isNaN(x1) || isNaN(y1) || isNaN(x2) || isNaN(y2)) {
    document.getElementById("error").textContent = "Invalid numbers in coordinates.";
    return;
  }

  const distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
  document.getElementById("length").textContent = `Length = ${distance.toFixed(2)}`;
  document.getElementById("error").textContent = "";
  document.getElementById("calculation-process").innerHTML = 
    `d = √((${x2} - ${x1})² + (${y2} - ${y1})²)<br>
     d = √(${(x2-x1)**2} + ${(y2-y1)**2})<br>
     d ≈ ${distance.toFixed(2)}`;
}
</script>
<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
</body>
</html>
