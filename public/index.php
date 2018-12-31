<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon1.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Indie+Flower|Merriweather:300|Nanum+Gothic|Open+Sans|Thasadith|Courgette|Raleway|Marck+Script|Krub|Inconsolata|Playfair+Display+SC|Shadows+Into+Light|Federant|Josefin+Sans|Capriola|Rubik|Gloria+Hallelujah|Playfair+Display+SC" rel="stylesheet">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style.css">
	<title>Anish</title>
</head>
<body >
	<div id="shortNav" class="text-center">
		<img style="margin-left: 20px;" src="./img/favicon1.png" alt="icon" height="40px" width="40px">
		<hr id="favHr">
		<div class="span">
		<span class="navspan">&#x2015;&#x2015;&#x2015; </span>
		<span class="navspan" style="top:-15px">&#x2015;&#x2015;&#x2015;</span>
		<span class="navspan" style="top:-30px">&#x2015;&#x2015;&#x2015;</span>
        </div>
	</div> 
	<div id="spanHovered" class="hidden text-center">
		<a class="shortNavLink" href="#AboutMe">About Me</a>
		
		<a class="shortNavLink" href="#Skills">Skills</a>
		
		<a class="shortNavLink" href="#Education">Education</a>
		<a class="shortNavLink" href="#Portfolio">Portfolio</a>
		<a class="shortNavLink" href="#Contact">Contact Me</a>
	</div>
   <table>
			<td id="navbar" style="width:280px;height:100%;">
						  <div  class="fixed text-center" >
							<h2 style="padding: 100px 0px 0px 0px"><img src="./img/favicon1.png" alt="icon" height="40px" width="40px"></h2><hr id="iconHr"><br><br>
							<a href="#AboutMe">About Me</a>
							<hr class="normal">
							<a href="#Skills">Skills</a>
							<hr class="normal" >
							<a href="#Education">Education</a><hr class="normal">
							<a href="#Portfolio">Portfolio</a><hr class="normal">
							<a href="#Contact">Contact Me</a><hr class="normal">
							<div style="display: inline;" id="socialMedia">
								<li><a  style="padding: 10px;margin:auto" href="https://www.github.com/anish-yadav"><i class="fab fa-github"></i></a></li>
								<li><a  style="padding: 10px;margin:auto" href="https://www.linkedin.com/in/anish-yadav-400938170/"><i class="fab fa-linkedin"></i></a></li>
								<li><a  style="padding: 10px;margin:auto" href="https://plus.google.com/u/0/116668921478672349317"><i class="fab fa-google-plus"></i></a></li>
							</div>
					    </div>
            </td>
	     <td>

		<!-- Intro image begins-->

			<div id="intro">
				<div class="introText">
					<h2 style="font-family: Comic Sans MS, cursive, sans-serif">HELLO &nbsp; I'M</h2>
					<h1 style="font-family: Indie Flower,cursive;font-weight: 600;">ANISH KR YADAV</h1>
				</div>
			</div>

		<!-- Intro image ends here -->


		<div id="text" class="text-justify">


			 <!-- About Me -->
			<div class="scroll" id="AboutMe">
			<h2 class="heading"><strong>
                                    <span class="bounce">A</span>
									<span class="bounce">B</span>
									<span class="bounce">O</span>
									<span class="bounce">U</span>
									<span class="bounce">T</span>
									<span class="bounce">&nbsp;</span>
									<span class="bounce">&nbsp;</span>
									<span class="bounce">M</span>
									<span class="bounce">E</span>

			</strong></h2>
			  <div id="about">
			  	<p stlye="font-family:Raleway,sans-serif">In short a Tech nerd.I was Born in India,in mid 2000.
				   I got to witness the end of some <br> technologies and the advent of other technologies.
				   The first computer language I learned was HTML. <br>
				   After buffing up a bit on HTML in high school, my first year of college
				   unfolded and Java was  the second <br>computer language I learned. Ever since then, I have considered myself devoted to computer science. ❤</p>
			  	<pre class="aboutText">Name:             Anish Kumar Yadav</pre>
			  	<pre class="aboutText">Email:            hney1000.ay1@gmail.com</pre>
			  	<pre class="aboutText">Phone:            +91-7250-483-441</pre>
				<pre class="aboutText">Date of Birth:    20 July 2000</pre><br><br>
				<a href="https://drive.google.com/uc?export=download&id=1FS_2DL--l-E_dLt2xmAt2YhpJ2w5yW1s"><button>DOWNLOAD RESUME</button></a>
			  </div>
		        <hr>
	       </div>
	     <!--About Me ends  -->


	     <!-- Skills start  -->
         <div class="scroll" id="Skills">
		   <h2 class="heading""><strong>
			   		   	           <span class="bounce">S</span>
									<span class="bounce">K</span>
									<span class="bounce">I</span>
									<span class="bounce">L</span>
									<span class="bounce">L</span>
									<span class="bounce">S</span>

		   </strong></h2>
         <?php require './skill1.php';  ?>

	     </div>
         <div class="scroll" id="Education">
         	<h2 class="heading"><strong>
                             		<span class="bounce">E</span>
 									<span class="bounce">D</span>
									<span class="bounce">U</span>
									<span class="bounce">C</span>
									<span class="bounce">A</span>
									<span class="bounce">T</span>
									<span class="bounce">I</span>
									<span class="bounce">O</span>
									<span class="bounce">N</span>

         	</strong></h2>
	        <?php  include('./education.php') ?>
         </div>
         <div class="scroll" id="Portfolio">
         	<h2 class="heading"><strong><span class="bounce">P</span>
									<span class="bounce">O</span>
									<span class="bounce">R</span>
									<span class="bounce">T</span>
									<span class="bounce">F</span>
									<span class="bounce">O</span>
									<span class="bounce">L</span>
									<span class="bounce">I</span>
									<span class="bounce">O</span>
</strong></h2>
		   <?php require './projects2.php' ?>
		 </div>
  
         <div class="scroll" id="Contact">
                               <br><br>

									<!-- <h2 class="heading animated bounce" ><strong>CONTACT ME</strong></h2> -->
									<h2 class=" text-center">
									<span class="bounce">C</span>
									<span class="bounce">O</span>
									<span class="bounce">N</span>
									<span class="bounce">T</span>
									<span class="bounce">A</span>
									<span class="bounce">C</span>
									<span class="bounce">T</span>
									<span class="bounce">&nbsp;</span>
									<span class="bounce">&nbsp;</span>
									<span class="bounce">M</span>
									<span class="bounce">E</span>
									</h2>
									<br>
									<p class="contactTxt text-center">I love helping great people with great projects. <br>
									<strong> Sound like you? Let’s talk!</strong></p>
									<?php require '../functions.php' ?>
                                <form action="" id="contact-form" method="post" class="mx-auto">
									
								<div class="row">
									<div class="col-sm-4">
										<p class="label">NAME</p>
									<input type="text" class="form-control" name="name">
									</div>
									<div class="col-sm-2"></div>
									<div class="col-sm-4">
										<p class="label">EMAIL</p>
									<input type="text" class="form-control" name="email">
									</div>

								</div>
								<div class="row" style="padding-top:20px;">

								<div class="col-sm-4">
									<p class="label">SUBJECT</p>
									<input type="text" class="form-control" name="subject">
									</div>
									<div class="col-sm-2"></div>
									<div class="col-sm-4 contacts">
									<i style="color: #141414" class="fas fa-map-marker-alt tag"></i><p class="tags">I.T.E.R College <br>	Bhubaneshwar, Orrisa</p>
									</div>
								</div>
								<div class="row" style="padding-top:20px;">

								    <div class="col-sm-4">
										<p class="label">MESSAGE</p>
										<textarea type="text" class="form-control" name="message"></textarea>
									</div>
									<div class="col-sm-2"></div>
							<div class="col-sm-4 contacts">
								<i style="color: #141414" class="far fa-envelope tag"></i><p class="tags">anishyadav20072000 <br>	@gmail.com</p>
							</div>
								</div>
								<br>
                                <div class="form-group" style="padding-left:25px;">
                                    <button class="send" name="submit">SUBMIT</button><?php echo $result ?>
                                </div>
                                

                                </form>


         </div>


			<div id="footer" class="text-center">
			<hr style="border:1px solid #000;width:100%;">
			<a href="https://www.github.com/anish-yadav"><i class="fab fa-github"></i></a>
			<a href="https://plus.google.com/u/0/116668921478672349317"><i class="fab fa-google-plus"></i></a>
			<a href="https://www.linkedin.com/in/anish-yadav-400938170/"><i style="color:#fff" class="fab fa-linkedin"></i></a>
			<hr style="color:grey">
			<p >&copy 2018</p>
     		</div>

		</div>


	</td>

  </table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



<script src="js/main.js"></script>
</body>
</html>
