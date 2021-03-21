<?php ?>
<!-- thanks obama - made with parallax.js -->
<!DOCTYPE html> 
<html> 
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
      html, body {user-select:none;}
    h1, p {
  font-family: 'open sans', sans-serif;
}

div {
  transition: 0.2s;
  padding: 10px;
  right:-25px;
}
      div:hover {
        right:0px;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="https://matthew.wagerfield.com/parallax/assets/styles/css/styles.css" />
  </head>
  <body>
    <main style="height:100vh;width:100%;">
  <ul id="scene" class="scene unselectable"
			data-friction-x="0.1"
			data-friction-y="0.1"
			data-scalar-x="25"
			data-scalar-y="15">
			<li class="layer" data-depth="0.00"></li>
			<li class="layer" data-depth="0.10"><div class="background"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange b phase-4"></div></li>
			<li class="layer" data-depth="0.10"><div class="light purple c phase-5"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange d phase-3"></div></li>
			<li class="layer" data-depth="0.15">
				<ul class="rope depth-10">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-2">
						<div class="board cloud-2 swing-1"></div>
					</li>
					<li class="hanger position-4">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-8">
						<div class="board birds swing-5"></div>
					</li>
				</ul>
			</li>
    <li class="layer" data-depth="0.20"><h1 class="title">Four-<em>Oh</em>-Four</h1></li>
			<li class="layer" data-depth="0.30">
				<ul class="rope depth-30">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-1">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-5">
						<div class="board cloud-4 swing-1"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.30"><div class="wave paint depth-30"></div></li>
			<li class="layer" data-depth="0.40"><div class="wave plain depth-40"></div></li>
			<li class="layer" data-depth="0.50"><div class="wave paint depth-50"></div></li>
			<li class="layer" data-depth="0.60"><div class="lighthouse depth-60"></div></li>
			<li class="layer" data-depth="0.60">
				<ul class="rope depth-60">
					<li><img src="https://matthew.wagerfield.com/parallax/assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-3">
						<div class="board birds swing-5"></div>
					</li>
					<li class="hanger position-6">
						<div class="board cloud-2 swing-2"></div>
					</li>
					<li class="hanger position-8">
						<div class="board cloud-3 swing-4"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.60"><div class="wave plain depth-60"></div></li>
			<li class="layer" data-depth="0.80"><div class="wave plain depth-80"></div></li>
			<li class="layer" data-depth="1.00"><div class="wave paint depth-100"></div></li>
		</ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>var scene=document.getElementById('scene');var parallaxInstance=new Parallax(scene);</script>
  </body>
</html>