<?php ?>
<!-- thanks obama - made with parallax.js -->
<!DOCTYPE html> 
<html> 
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://matthew.wagerfield.com/parallax/assets/styles/css/styles.css" />
    <style>
      html, body {user-select:none;}
    h1, p, div, h2, h3, h4, h5, h6, button{
  font-family: 'open sans', sans-serif;
}
      .main {
        width:100%;
        height:100vh;
        background: white;
        opacity: 0.65;
        position:fixed;
        backdrop-filter: blur(5px);
        top:0;
        left:0;
        bottom:0;
        right:0;
      }
      #scene {
        position:fixed;
        top:0;
        left:0;
        bottom:0;
        right:0;
      }
      .block {
        
      }
      .mainpart  {
        background:white;
        
      }
      .button {
        background:#1DA1F2;color:white;border:0;outline:none;border-radius:50px;width:300px;
        padding:10px;
        font-size:20px;
      }
    </style>
  </head>
  <body>
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
    <li class="layer" data-depth="0.20"><h1 class="title">Insta<em>chat</em><br><em>open</em>-source social media<br></h1></li>
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
    <div class="main"></div>
    <div style="position:absolute;left:10%;width:80%;top:300px;background:transparent;height:100vh;"></div>
    <div style="position:absolute;left:10%;width:80%;top:100px;background:white;height:100vh;opacity:1;background-filter:none;border-radius:25px;color:black;padding-top:50px;padding-bottom:50px;overflow:auto;">
      <h1>
        Make a new post
      </h1><br><br>
      <center>
        
        
        <form id="editor" method="post">
          <div style="width:95%;background:#e9edf0;border-radius:10px;padding:15px;text-align:left !important;">
        <textarea contenteditable="true" style="outline:none;background:transparent;width:100%;resize:none;border:0;font-family:'open sans',sans-serif;" id="postcontext" form="editor" name="content" placeholder="What's on your mind?"></textarea>
          </div><br><br>
          <input class="button" type="submit" style="font-family:'open sans', sans-serif;" value="Post">
      </input>
        </form>
      
      </center>
      <br><br>
      </div>
    <script>
      document.getElementById("postcontext").onkeydown = function(evt) {
        if (evt.key === '"') {
          Wrap(evt.key);
        } else if (evt.key === "*") {
          Wrap(evt.key);
        } else if (evt.key === "(") {
          Wrap(")");
        } else if (evt.key === "`") {
          Wrap(evt.key);
        } else if (evt.key === "<") {
          Wrap(">");
        } else if (evt.key === "{") {
          Wrap("}");
        } else if (evt.key === "[") {
          Wrap("]");
        }
      };
          function Wrap(_txt){let sel=window.getSelection();let offset=sel.focusOffset;let focus=sel.focusNode;focus.textContent+=_txt;let range=document.createRange();range.selectNode(focus);range.setStart(focus,offset);range.collapse(!0);sel.removeAllRanges();sel.addRange(range)}  
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>var scene=document.getElementById('scene');var parallaxInstance=new Parallax(scene);</script>
  </body>
</html>


<?php

/******************************************************************


 ######  #     # ######      #####  ######     #    ######  
 #     # #     # #     #    #     # #     #   # #   #     # 
 #     # #     # #     #    #       #     #  #   #  #     # 
 ######  ####### ######     #       ######  #     # ######  
 #       #     # #          #       #   #   ####### #       
 #       #     # #          #     # #    #  #     # #       
 #       #     # #           #####  #     # #     # #       


****************************************************************/


// lol

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'insta';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$raw = htmlspecialchars($_POST["content"]);
if($raw == "")
{
  die("Something went wrong, try again later?");
}

$time = time();
$id = bin2hex(random_bytes(5));


$stmt = $conn->prepare("INSERT INTO posts(`id`, `contents`, `posted`) VALUES (?, ?, ?);");
$stmt->bind_param("ssi", $id, $raw, $time);
$stmt->execute();
$stmt->close();

header("Location: /explore?success=true");
die("OK");

?>