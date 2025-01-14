<!DOCTYPE html>
<html lang="en">
<head>
  	<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Course",
  "courseCode": "GR9MATH",
  "name": "Volume of the Different Shapes",
  "provider": {
    "@type": "HighSchool",
    "name": "MyHomeworkRewards",
    "url": "https://app.myhomeworkrewards.com/lessons/Gr9/Math/volume.php"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1",
    "reviewCount": "1"
  },
    "datePublished": "2022-04-01",
    "author": {"@type": "Person", "name": "Gabriel Aversano"},
    "publisher": {"@type": "Organization", "name": "Admin"}
  }

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="The volume of a 3D shape is the total quantity of space the shape occupies. We calculate volume for different shapes using certain formulas.">
    <title>Volume of the Different Shapes</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />


    <!-- Bootstrap -->
    <link href="/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>

		.list-group-item{border:0px solid black;}
		.thumbnail {
            height: 400px;
            overflow: hidden;
        }

		.fig-container {
			height: fit-content;
			margin: 3px;
			aspect-ratio: 1 / 1;
		}

		
		/*.caption{position:absolute; bottom:0px;}*/
		.caption{margin-top:10px;}
		.thumbnail img{height:150px;}
		
		.breadcrumb{background-color:#5B0A9F;}
		.breadcrumb>li>a{color:white;}
		
		.well{background-color:#DCC4F8;}
		
		.panel-default > .panel-heading{background-color:#DCC4F8;}
		h1{font-family: lucida sans;}
	    h2{font-family: lucida sans;}
	    h3{font-family: lucida sans;}

		
	</style>
</head>

<body style="padding-top:80px;">
<?php include_once( $_SERVER['DOCUMENT_ROOT']."/lessons/header.php");?>	

	<div class="container-fluid" style="margin-bottom:30px;"><br><br>
		<div class="row">			
			<div class="col-lg-8 col-lg-offset-2">
				<ol class="breadcrumb">
					<li><a href="/lessons/lessons_main.php">Lessons</a></li>
					<li><a href="/lessons/Gr9/gr9_main.php">Gr9</a></li>
					<li><a href="/lessons/Gr9/Math/gr9_math_main.php">Math</a></li>
					<li class="active"><a href="/lessons/Gr9/Math/volume.php" style="font-weight:bold;">Volume</a></li>
				</ol>		
			</div>
		</div>
		
			<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
						
				<h1>Volume</h1>
				
				<div class="row">
					<div class="col-lg-9">
						<p>The <span style="font-weight:bold;">volume</span> of an 3D object is the total quantity of space the shape occupies. 
						The volume of an object is measured in <span style="font-weight:bold;">cubic units</span> such as cubic centimeters, cubic inch, cubic foot, cubic meter, etc.. 
						Finding the volume of an object can help us to determine the amount required to fill that object like the amount of water needed to fill a bottle, an aquarium or a water tank.</p>
						
					<h2>Volume of Common Shapes</h2>
					
					
					<div class="row">
						<div class="col-xs-12 col-sm-4">
						<div class="thumbnail">
						<h3>Cube</h3>
						<img src="/images/cube.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p>The volume of a cube with length s is calculated by:</p>
						<p class="text-center">\(V =  s^3\)</p>
						</div></div></div>
						
						<div class="col-xs-12 col-sm-4" >
						<div class="thumbnail">
						<h3>Cuboid</h3>
						<img src="/images/cuboid.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p >The volume of a cuboid (rectangular prism) with length l, width w and height h is calculated by:</p>
						<p class="text-center">\(V = l  w  h\)</p>
						</div></div></div>
						
						<div class="col-xs-12 col-sm-4">
						<div class="thumbnail">
						<h3>Cone</h3>
						<img src="/images/cone.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p>The volume of a cone with height h, slant l and radius r is calculated by:</p>
						<p class="text-center">\(V = \cfrac{1}{3} \pi  r^2 h\)</p>
						</div></div></div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4" >
						<div class="thumbnail">
						<h3>Cylinder</h3>
						<img src="/images/cylinder.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p>The volume of a cylinder with radius r and height h is calculated by:</p>
						<p class="text-center">\(V = \pi r^2 h\)</p>
						</div></div></div>
						
						<div class="col-xs-12 col-sm-4">
						<div class="thumbnail">
						<h3 style="font-size:22px;">Triangular Prism</h3>
						<img src="/images/triangular_Prism.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p>The volume of a yriangular prism is calculated by:</p>
						<p class="text-center">\(V = \cfrac{1}{2} b h l\)</p>
						</div></div></div>
						
						<div class="col-xs-12 col-sm-4">
						<div class="thumbnail">
						<h3>Sphere</h3>
						<img src="/images/sphere.png" alt="..." onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div class="caption">
						<p>The volume of a sphere is calculated as:</p>
						<p class="text-center">\(V = \cfrac{4}{3} \pi r^3\)</p>
						</div></div></div>
						
					</div>
					<p>Note that the volume of shapes like prisms and cylinders can be calculated as:</p>
					
					<p class="text-center">\( V = A_{base}h \)</p>
					
					<p>For example if the area of the base of a pentagonal prism is \(12 \; \text{cm}^2\) and the height is \(20 \; \text{cm}\), the volume is:</p>
					<p class="text-center">\( V = A_{base}h \)</p>
					<p class="text-center">\( V = (12)(20) \)</p>
					<p class="text-center">\( V = 240 \; \text{cm}^3 \)</p>

					<!-- 3D Shape Animations -->

					<div class="container-fluid" style="margin-bottom:20px;">
						<div class="row">
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="cube-animation" class="fig-container"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="cuboid-animation" class="fig-container"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="cone-animation" class="fig-container"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="cylinder-animation" class="fig-container"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="triangular-prism-animation" class="fig-container"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="thumbnail_2">
									<div id="sphere-animation" class="fig-container"></div>
								</div>
							</div>
						</div>
					</div>

					
						<div class="well well-sm">A cubic shaped box is 50 cm by 50 cm by 50 cm. A shipping crate is packed with 18 of these boxes, with no extra space in the crate. 
						What is the volume of the crate in meters?</div>
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example">Show Answer</span>
						<div id="example" class="hidden-answer" style="display: none">
						<p>First convert the box side length to meters:</p>
						<p class="text-center">\( 50 \; \text{cm} * \cfrac{ 1 \; \text{m}}{100 \; \text{cm}} = 0.50  \; \text{m}\)</p>
						
						<p>The volume of a rectangle prism is calculated by: </p>
						<p class="text-center">\( V = l w h \)</p>
						<p class="text-center">\( V_{box} = (0.50) (0.50) (0.50) = 0.125 \; \text{m}^3 \)</p>
						<p>Since there are 18 boxes in the crate, the volume of the crate is: </p>
						<p class="text-center">\( V_{crate} = 18 *(0.125) = 2.25  \; \text{m}^3 \)</p>
						<p>The volume of the crate is \( 2.25  \; \text{m}^3 \).</p>
						</div></div>
						
						<hr>
						
						
						<div class="well well-sm">Find the volume of a can of soda. The radius of the base is 4 centimeters and the height is 13 centimeters.</div>
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example2">Show Answer</span>
						<div id="example2" class="hidden-answer" style="display: none">
						<p>The volume of a cylinder is calculated by:</p>
						<p class="text-center">\(V = \pi r^2 h\)</p>
						<p class="text-center">\(V = \pi (4)^2 (13)\)</p>
						<p class="text-center">\(V = 653.45 \; \text{cm}^3\)</p>
						<p>The volume of the soda can is \(653.45 \; \text{cm}^3\)</p>
						</div></div>
						
						<hr>
						
						<div class="well well-sm">A water tank is 12 feet long, 5 feet wide, and 9 feet high. A solid metal box which is 7 feet long, 4 feet wide, and 6 feet high is sitting at the bottom of the tank. 
						The tank is filled with water. What is the volume of the water in the tank?</div>
						<img src="/images/watertank.png" alt="..." style="display:block; width:250px; margin:0px auto;" onMouseOver="this.style.transform='scale(1.5)'" onMouseOut="this.style.transform='scale(1)'">
						<div  style="display: block"><span class="show-answer collapsed" style="cursor: pointer;text-decoration: underline;" data-target="example3">Show Answer</span>
						<div id="example3" class="hidden-answer" style="display: none">
						<p>To calcualte the volume of water, we need to calculate the volume of the water tank and subtract the volume of the metal box. 
						This is because the metal block displaces the water in the tank as it occupies some volume.</p>
						
						<p>The volume of a rectangle prism is calculated:</p>
						<p class="text-center">\( V = l w h \)</p>
						
						<p>The volume of the tank is :</p>
						<p class="text-center">\(V_{tank} = 12 \cdot 5 \cdot 9 = 540 \; \text{ft}^3\)</p>
						<p>The volume of the metal box is :</p>
						<p class="text-center">\(V_{box} = 7 \cdot 4 \cdot 6 = 168 \; \text{ft}^3\)</p>
						<p>The volume of water left in the tank is :</p>
						<p class="text-center">\(V_{water} = 540 - 168 = 372 \; \text{ft}^3\)</p>
						</div></div>
						
						<hr>
								
					</div>
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h4>
								</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="measurement.php">Measurement</a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="perimeter.php">Perimeter</a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="area.php">Area</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Try these questions:</h4>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="https://app.myhomeworkrewards.com/practice.php?question=400063&difficulty=2" target="_blank">Comparing Cone and Cylinder Volumes</a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="https://app.myhomeworkrewards.com/practice.php?question=400054&difficulty=2" target="_blank">Find the Volume of a Triangular Prism</a></li>
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="https://app.myhomeworkrewards.com/practice.php?question=400068&difficulty=3" target="_blank">Find the Volume of a Cube</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" style="background-color:#DCC4F8">
								<h5 class="text-center">Take the Quiz:</h4>
							</div>
							<div class="panel-body">
								<ul class="list-group">
								    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="/attempt_test.php?test_id=49">Volume</a></li>
								</ul>
							</div>
    
					</div>
				</div></div>	
				<br><br>
				<?php include_once( $_SERVER['DOCUMENT_ROOT']."/lessons/footer.php");?>
			</div>	
		</div>	
	</div>

	 <!-- Import Three.js -->
	 <script src="https://cdn.jsdelivr.net/npm/three@0.150.1/build/three.min.js"></script>
	<!-- Import OrbitControls.js -->
	<script src="https://cdn.jsdelivr.net/npm/three@0.150.1/examples/js/controls/OrbitControls.js"></script>

	
	<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Import DragControls.js -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.150.1/examples/js/controls/DragControls.js"></script>

    <script>
		const figures = [
			{ containerId: 'cube-animation', geometry: new THREE.BoxGeometry(1.5,1.5,1.5) },  // Cube
			{ containerId: 'cuboid-animation', geometry: new THREE.BoxGeometry(3, 2, 1) },  // Cuboid
			{ containerId: 'cone-animation', geometry: new THREE.ConeGeometry(1, 2, 32) },  // Cone
			{ containerId: 'cylinder-animation', geometry: new THREE.CylinderGeometry(1, 1, 2, 32) },  // Cylinder
			{ containerId: 'triangular-prism-animation', geometry: new THREE.CylinderGeometry(1, 1, 2, 3) },  // Triangular Prism
			{ containerId: 'sphere-animation', geometry: new THREE.SphereGeometry(1, 32, 32) }  // Sphere
		];

		figures.forEach(figure => {
			const scene = new THREE.Scene();
			const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
			const renderer = new THREE.WebGLRenderer({antialias: true});

			window.addEventListener('resize', () => {
				const container = document.getElementById(figure.containerId);
				renderer.setSize(container.clientWidth, container.clientHeight);
			});

			document.getElementById(figure.containerId).appendChild(renderer.domElement);

			const material = new THREE.MeshStandardMaterial({ color: 0xDCC4F8, wireframe: true});
			const mesh = new THREE.Mesh(figure.geometry, material);
			scene.add(mesh);

			camera.position.z = 2.5;

            const hemisphereLight = new THREE.HemisphereLight();
            scene.add(hemisphereLight);

			const animate = function () {
				requestAnimationFrame(animate);
				
				mesh.rotation.y += 0.01;
               
			    renderer.render(scene, camera);
			};

			animate();
		});
	</script>

    <script src="/bootstrap.min.js"></script>
	<script type='text/javascript' src='/hide_answer.js'></script>
	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({ TeX: { extensions: ["color.js"] }});

	</script>
	<script type="text/javascript" src="/js/getDate.js"></script>

  </body>
  </html>