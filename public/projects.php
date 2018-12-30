
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
 