<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MUZYKA - Hear it. See it. Live it.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

<!-------------------------------------------------------START HOME & SEARCH-------------------------------------------------------->  
  
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">MUZYKA</a>
		
		<form class="search" action="search.php" style="margin:auto;max-width:300px">
		  <input type="text" placeholder="Search Music" name="search"></input>
		  <button type="submit"><i class="fa fa-search"></i></button>
		</form>

<!-------------------------------------------------------END HOME & SEARCH-------------------------------------------------------->
		
<!-----------------------------------------------------------------------------START MENU---------------------------------------------------------------------------------------------------------------------------------------->
		
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#lyric">Lyric</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" onclick="document.getElementById('id01').style.display='block'">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-----------------------------------------------------------------------------END MENU---------------------------------------------------------------------------------------------------------------------------------------->
	
	
<!-------------------------------------------------------START LOGIN------------------------------------------------------------------------------------>	

<div id="id01" class="modal">
  
  <form class="modal-content animate login" action="admin.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="color: black">
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<!-------------------------------------------------------END LOGIN------------------------------------------------------------------------------------>

<!-------------------------------------------------------START MUSIC------------------------------------------------------------------------------------>
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
			 <div class="">
              <div class="">
                <div class="">
                  <div class="">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <video width="100%" controls>
					  <source src="song\Audrey Hepburn - Moon River lyrics.mp4" type="video/mp4">
					  Your browser does not support HTML5 video.
					</video>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">AUDREY HEPBURN - MOON RIVER</h1> 

				<h4>Audio:</h4>
				  <select class="custom-select" style="width:200px;">
					<option value="0">Select Audio Format:</option>
					<option value=".mp3">.MP3</option>
					<option value=".aac">.AAC</option>
					<option value=".wav">.WAV</option>
					<option value=".wma">.WMA</option>
					<option value=".aiff">.AIFF</option>
					<option value=".ogg">.OGG</option>
				  </select>
              <a href="download" class="btn btn-outline btn-xl js-scroll-trigger">Download Audio</a>
			  
				<h4>Video:</h4>
				  <select class="custom-select" style="width:200px;">
					<option value="0">Select Video Format:</option>
					<option value=".mp4">.MP4</option>
					<option value=".avi">.AVI</option>
					<option value=".mov">.MOV</option>
					<option value=".wmv">.WMV</option>
					<option value=".flv">.FLV</option>
					<option value=".ogv">.OGV</option>
				  </select>
              <a href="download" class="btn btn-outline btn-xl js-scroll-trigger">Download Video</a>
			  
				<h4>Lyric:</h4>
				  <select class="custom-select" style="width:200px;">
					<option value="0">Select Lyric Format:</option>
					<option value=".pdf">.PDF</option>
					<option value=".txt">.TXT</option>
					<option value=".docx">.DOCX</option>
				  </select>
              <a href="download" class="btn btn-outline btn-xl js-scroll-trigger">Download Lyric</a>			  
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="lyric">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Lyric</h2>
            <pre>
Vertical lines (|) indicated bars.  

C   |Am    |F           |C
Moon River, wider than a mile,

   |F              |C    (C/G) |Bm7b5 |E7
I'm crossing you in style some  day.

   |Am   |C7        |F   |Bb9-5
Old dream-maker, you heartbreaker,

   |Am  |Am7   |[ch]Am7/F#[/ch]
Wherever you're going, 

   |Em7   A7     |Dm7  G (or G9)
I'm going    your way.



C   |Am       |F            |C
Two drifters, off to see the world;

       |F            |C       (C/G) |Bm7b5 |E7
there's such a lot of world to see.

      Am  |Am/G   |Am/F#  |F        |Em7   (Am7)
we're af - ter the same    rainbow's end, 

|F                   |C
   waiting ’round the bend — 
   
|F               |C
   my huckleberry friend,
   
|C   |Dm G7     |C
 Moon River, and me. 

		  F, Em, Dm7, C			
			</pre>
        </div>
      </div>
    </section>
	
<!-------------------------------------------------------END MUSIC------------------------------------------------------------------------------------>	

<!-------------------------------------------------------START CSS------------------------------------------------------------------------------------>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		/* width */
		::-webkit-scrollbar {
			width: 20px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			box-shadow: inset 0 0 5px grey; 
			border-radius: 10px;
		}
		 		 
		/* Handle */
		::-webkit-scrollbar-thumb {
			background: orange; 
			border-radius: 10px;
			border: 2px solid red;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: orange; 
		}		
		body {font-family: Arial, Helvetica, sans-serif;}

		/* Full-width input fields */
		.login input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for login buttons */
		form.login button {
			background-color: #2196F3;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		form.login button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 5px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 40%; /* Could be more or less, depending on screen size */
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
		
		body {
			font-family: Arial;
		}

		* {
			box-sizing: border-box;
		}

		form.search input[type=text] {
			padding: 2px 10px 2px 40px;
			font-size: 16px;
			border: 2px solid #bfbfbf;
			border-radius: 10px;
			float: left;
			width: 80%;
			background-color: #e6e6e6;
			margin-bottom: 12px;
		}

		form.search button {
			width: 20%;
			padding: 2px;
			background: grey;
			color: white;
			font-size: 17px;
			border: 2px solid grey;
			border-radius: 10px;
			border-left: none;
			cursor: pointer;
		}

		form.search button:hover {
			background: #0b7dda;
		}

		form.search::after {
			content: "";
			clear: both;
			display: table;
		}
		
		* {
			box-sizing: border-box;
		}

		/* Create two equal columns that floats next to each other */
		.column {
			width: 100%;
			padding: 10px;
			position: center;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
			position: center;
		}
		
		.content {
			max-width: 500px;
			margin: auto;
		}
		</style>
		</head>
		
<!-------------------------------------------------------END CSS------------------------------------------------------------------------------------>

<!-------------------------------------------------------START JAVASCRIPT------------------------------------------------------------------------------------>
		
		<body>
		<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>--->
		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		function mySearch() {
			// Declare variables
			var input, filter, ul, li, a, i;
			input = document.getElementById('myInput');
			filter = input.value.toUpperCase();
			ul = document.getElementById("myUL");
			li = ul.getElementsByTagName('li');

			// Loop through all list items, and hide those who don't match the search query
			for (i = 0; i < li.length; i++) {
				a = li[i].getElementsByTagName("a")[0];
				if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
				} else {
					li[i].style.display = "none";
				}
			}
		}
		</script>
		</body>

<!-------------------------------------------------------END JAVASCRIPT------------------------------------------------------------------------------------>		

<!-------------------------------------------------------FOOTER------------------------------------------------------------------------------------>

    <footer>
      <div class="container">
        <p>&copy; Muzyka 2018. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
