<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The volume of a 3D shape is the total quantity of space the shape occupies. We calculate volume for different shapes using certain formulas.">
<title>Volume of Different Shapes</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
.list-group-item { border: 0; }
.thumbnail { height: 400px; overflow: hidden; }
.fig-container { height: fit-content; margin: 3px; aspect-ratio: 1 / 1; }
.caption { margin-top: 10px; }
.thumbnail img { height: 150px; }
.breadcrumb { background-color: #5B0A9F; }
.breadcrumb > li > a { color: white; }
.well { background-color: #DCC4F8; }
.panel-default > .panel-heading { background-color: #DCC4F8; }
h1, h2, h3 { font-family: lucida sans; }
</style>
</head>

<body style="padding-top:80px;">

<!-- ✅ Replace this with static header -->
<header>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<a class="navbar-brand" href="index.html">MyHomeworkRewards</a>
<ul class="nav navbar-nav">
<li><a href="lessons.html">Lessons</a></li>
<li><a href="practice.html">Practice</a></li>
</ul>
</div>
</nav>
</header>

<div class="container-fluid" style="margin-bottom:30px;"><br><br>
<h1>Volume</h1>
<p>The <b>volume</b> of a 3D object is the total quantity of space the shape occupies...</p>

<!-- ✅ Three.js Animations -->
<div class="row">
<div class="col-lg-4"><div id="cube-animation" class="fig-container"></div></div>
<div class="col-lg-4"><div id="cuboid-animation" class="fig-container"></div></div>
<div class="col-lg-4"><div id="cone-animation" class="fig-container"></div></div>
</div>

<!-- Add more sections as needed -->
</div>

<!-- ✅ Footer -->
<footer class="text-center" style="margin-top:20px;">&copy; 2025 MyHomeworkRewards</footer>

<!-- ✅ Scripts -->
<script src="https://cdn.jsdelivr.net/npm/three@0.150.1/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.150.1/examples/js/controls/OrbitControls.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.150.1/examples/js/controls/DragControls.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hide_answer.js"></script>

<!-- ✅ Three.js Logic -->
<script>
const figures = [
  { containerId: 'cube-animation', geometry: new THREE.BoxGeometry(1.5, 1.5, 1.5) },
  { containerId: 'cuboid-animation', geometry: new THREE.BoxGeometry(3, 2, 1) },
  { containerId: 'cone-animation', geometry: new THREE.ConeGeometry(1, 2, 32) }
];

figures.forEach(fig => {
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
  const renderer = new THREE.WebGLRenderer({ antialias: true });
  const container = document.getElementById(fig.containerId);
  const size = Math.min(container.clientWidth, container.clientHeight);
  renderer.setSize(size, size);
  container.appendChild(renderer.domElement);

  const mesh = new THREE.Mesh(fig.geometry, new THREE.MeshStandardMaterial({ color: 0xDCC4F8, wireframe: true }));
  scene.add(mesh);
  camera.position.z = 2.5;
  scene.add(new THREE.HemisphereLight());

  (function animate() {
    requestAnimationFrame(animate);
    mesh.rotation.y += 0.01;
    renderer.render(scene, camera);
  })();
});
</script>
</body>
</html>
