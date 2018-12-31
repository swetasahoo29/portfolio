<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

<style type="text/css">
    	div.row .project {
    		height:480px;
    		background : #595959;
            margin: 40px 20px 40px auto;
      		border-radius: 20px;
            padding:20px;
       	} 
       	.project:hover {
    		background: #a9a9a9;
    		border : 3px solid #000;
    		opacity:0.5;
    		visibility: show;
    	}
    	.project:hover .abc {
    		opacity:1;
    	}
    	.project:hover .line {
    		opacity:1;
    	}
        .abc {
        	text-align: center;
            position:relative;
            top:37%;
            font-size:45px;
            opacity:0;
            color: #000;
        }
        div.abc i {
            color: #000;
        }
         .line {
        	position: relative;
        	top: 50%;
        	color: black;
        	border: 1px solid #000;
        	opacity: 0;
        }
        i.more {
            font-size: 40px;
            align-items: center;
            margin-top: 80%;
            color: #000;
        }
    </style>
	
<div class="row" style="margin-left: 0px;margin-right: 0px;">
	<div class="col-lg-3  project" style="background-image: url('./img/loginapp.png');background-size: 100% 100%" 
	 onmouseover="getElementsByTagName('a').style='display:block';getElementsByClassName('line').style='display:block'"
	 onmouseout="getElementsByTagName('a').style='display:none';getElementsByClassName('line').style='display:none'">
              <hr class="line" >
		 <div class="abc" >
		 	<a href="https://github.com/anish-yadav/loginApp" ><i style="z-index: 1;" class="fab fa-github icon"></i></a>
		 </div>
	</div>
        <div class="col-lg-3  project" style="background-image: url('./img/txt-to-speech.png');background-size: 100% 100%"
     onmouseover="getElementsByTagName('a').style='display:block';getElementsByClassName('line').style='display:block'"
     onmouseout="getElementsByTagName('a').style='display:none';getElementsByClassName('line').style='display:none'">
     <hr class="line">
         <div class="abc" >
            <a href="https://github.com/anish-yadav/Text-to-speech" ><i style="z-index: 1;" class="fab fa-github icon"></i></a>
         </div>
    </div>
        <div class="col-lg-3  project" style="background-image: url('./img/todo-api.png');background-size: 100% 100%"
     onmouseover="getElementsByTagName('a').style='display:block';getElementsByClassName('line').style='display:block'"
     onmouseout="getElementsByTagName('a').style='display:none';getElementsByClassName('line').style='display:none'">
              <hr class="line" >
         <div class="abc" >
            <a href="https://github.com/anish-yadav/Todo-API" ><i style="z-index: 1;" class="fab fa-github icon"></i></a>
         </div>
    </div>
        <div class="col-lg-3  project" style="background-image: url('./img/password-manager.png');background-size: 100% 100%"
     onmouseover="getElementsByTagName('a').style='display:block';getElementsByClassName('line').style='display:block'"
     onmouseout="getElementsByTagName('a').style='display:none';getElementsByClassName('line').style='display:none'">
              <hr class="line" style="border:1px solid #fff" >
         <div class="abc"  >
            <a href="https://github.com/anish-yadav/password-manager" ><i style="z-index: 1;color:#fff" class="fab fa-github icon"></i></a>
         </div>
    </div>
        <div class="col-lg-3 project" style="background-image: url('./img/portfolio.png');background-size: 100% 100%"
     onmouseover="getElementsByTagName('a').style='display:block';getElementsByClassName('line').style='display:block'"
     onmouseout="getElementsByTagName('a').style='display:none';getElementsByClassName('line').style='display:none'">
              <hr class="line" >
         <div class="abc" >
            <a href="https://github.com/anish-yadav/portfolio" ><i style="z-index: 1;" class="fab fa-github icon"></i></a>
         </div>
    </div>
        <div class="col-lg-3 text-center">
            <a href="https://github.com/anish-yadav?tab=repositories"> <i class="fas fa-plus-circle more"></i></a>
           
            <h3>More</h3>
              <hr class="line" >
         <div class="abc" >
            <a href="#" ><i style="z-index: 1;" class="fab fa-github icon"></i></a>
         </div>
    </div>

</div>
 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>