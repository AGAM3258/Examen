<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inicio</title>
<link rel="stylesheet" href="css/cssincio/reset.css" />
<link rel="stylesheet" href="css/cssincio/text.css" />
<link rel="stylesheet" href="css/cssincio/960.css" />
<link rel="shortcut icon" href="images/logos/logo.ico">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">

<style>
header, nav, article, section, aside {
	display:block;
}

#main-headers #logo {height:40px; background: #000;}
#main-headers #main-nav {height:50px;}

#hfwrap {width:100%; background:transparent url(images/imginicio/headr1.jpg) no-repeat; height:450px; position:relative;}
#lnwrap {width:100%; background:#222 url(images/imginicio/nav-bg.png) repeat-x;}


a {text-decoration:none;}
a:link {
	color:#505b4d;
}
a:visited {
	color:#898A88;
}
a:hover {
	color:#505b4d;
	background-color:#FF9;
}

.button a {
	padding:10px 15px;
	text-transform:uppercase;	
	font:14px/1.5 Tahoma, Geneva, sans-serif;
	font-weight:bold;
	display:block;
	text-align:center;
	color:#505b4d;

	/*background gradients */
	background:#cfcfcf;
	background:-webkit-gradient(linear, left bottom, left top, color-stop(0, rgb(207,207,207)), color-stop(1, rgb(255,255,255)));
	background:-moz-linear-gradient(center bottom, rgb(207,207,207) 0%, rgb(255,255,255) 100%);
	
	/* border radius */
	-webkit-border-radius: 0.8em;
	-moz-border-radius: 0.8em;
	border-radius: 10px;
	border:1px solid #fff;
	
	/* text shadow */
	text-shadow: 1px 1px 0px #fff;
	
	/* box shadow*/
	-moz-box-shadow: 0 1px 3px #333;
	-webkit-box-shadow: 0 1px 3px #333;
	box-shadow: 0 1px 3px #333;
	
}

.button a:hover {
	background:#fff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(207,207,207)), color-stop(1, rgb(250,250,250))); 
	background:-moz-linear-gradient(center top, rgb(207,207,207) 0%, rgb(250,250,250) 100%);
}

.button a:active {
	margin-top:1px;
}
:focus {outline:none;}
/*button::-moz-focus-inner {border:0;} */

/* @header
=======================*/
#logo {
	background:transparent;
	text-indent:-7777em;
}
#logo a {
	display:block;
 width: 5px; height: 5px;
}
#logo a:hover {
	background:none;
}
#main-nav h1 {text-indent:-7777em;}
#main-nav li {
	float:left;
	display:inline;
	margin: 5px 5px 0 5px;
	text-transform:capitalize;
}
#main-nav li a {
	display:block;
	padding:5px 10px;
	color:#fff;
	font:18px/1.5 Tahoma, Geneva, sans-serif;
	text-decoration:none;
	text-shadow:1px 1px 1px #333;
	filter:dropshadow(color=#333, offx=1, offy=1);
}
#main-nav .current a,
#main-nav li:hover > a {
	background:#8f8f8f;
	-webkit-border-radius: 0.8em;
	-moz-border-radius: 0.8em;
}

#main-nav li:a {margin-top:1px;}

/* @featured
=======================*/
#descrp {
	position:relative;
	top:60px;
}
#descrp h1 {
	font:normal 36px/1.25 Tahoma, Arial, Helvetica, sans-serif;
	color:#fff;
	text-shadow: #333 1px 1px 1px;
}
#descrp p {
	padding-top:60px; 
	float:left;
	margin-right:55px;
}

/* @more-products
=======================*/
#more-products h1 {
	padding:10px 0 0 0;
	border-bottom:1px dotted #333;
	margin:0 10px 20px;
	font:bold 24px/1.5 Tahoma, Geneva, sans-serif;
	color:#505b4d;
	text-transform:capitalize;
}
.product h3 {
	padding:10px 0;
	font:bold 18px/1.5 Tahoma, Geneva, sans-serif;
	color:#505b4d;
}
.product p {
	font:normal 12px/1.5 Tahoma, Geneva, sans-serif;
	color:#4f4f4f;
	padding:0 0 20px 0;
}
#more-products span {
	display:block;
	border-bottom:1px dotted #333;
	margin:0 10px;
}

</style>
</head>

<body>

	<div id="hfwrap">
    	<div id="hfwrap2">
        	<div id="hfwrap3">
                <div id="lnwrap">    
                    <header id="main-headers" class="container_122 cleanfix">
      <?php
include ("header/header_inicio.html")
 ?>
                    </header>

                </div><!--lnwrap-->
                        
                <section id="featured" class="container_11 cleanfix">
                    <div id="descrp" class="grid_6 suffix_6">   
                        <h1 style="text-align:center;">Welcome To SSE? The Platform Where You will do Every Single Exam While You Study Your Career In The Technological University Of Manzanillo</h1>
                        <br>
                        <h1 style="text-align:center;">What Are You Wating For? Let's Get Start With It</h1>
                        <span></span>             
                    </div><!--#descrp-->   
                </section>
            </div><!--#hfwrap3-->
        </div><!--hfwrap2-->
    </div><!--hfwrap-->

    <section id="more-products" class="container_122 cleanfix">
        <h1>Here's Something What You Be Able To Do On This Platform...</h1>
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/assessment.png" width="300" height="200" alt="phone number one" />
                    <figcaption>
                        <h3>Know Your Total Assessment Value</h3>
                        <p>We'll Work On Your Futures Assessment Values Each Time You Do An Exam<a href="#"> More...</a></p>
                    </figcaption>            
                </figure>        
            </div>
            
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/assessing.jpg" width="300" height="200" alt="phone number two" />
                    <figcaption>
                        <h3>We'll Make Your Assessing As Soon As You Finish</h3>
                        <p>Now that We Are Here, Everytime that  You Need To Consult Your Grades... It Will Be Here<a href="#"> More...</a></p>
                    </figcaption>
                </figure>        
            </div>
            
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/learnings.jpg" width="300" height="200" alt="phone number three" />
                    <figcaption>
                        <h3>You Will see Your Learning Outcomes</h3>
                        <p>You'll realize everything  You Learnt ... That Depends On You<a href="#"> More...</a></p>
                    </figcaption>            
                </figure>        
            </div>
		<span class="cleanfix"></span>     
    </section><!--#more-products-->

	<section id="more-products" class="container_122 cleanfix">
        <h1>Did You Know That...</h1>
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/enviroment.jpg" width="300" height="200" alt="phone number one" />
                    <figcaption>
                        <h3>If You Use This Platform</h3>
                        <p>You'll contribute to the environment, avoiding the use of paper <a href="#"> More...</a></p>
                    </figcaption>            
                </figure>        
            </div>
            
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/school.jpg" width="300" height="200" alt="phone number two" />
                    <figcaption>
                        <h3>This Platform Will be Handled As The New Way To Evaluate In Every Single School, High School, College And University</h3>
                        <p>That's True, Who Don't Need Our New Way To Optimize Evaluations ?<a href="#"> More...</a></p>
                    </figcaption>
                </figure>        
            </div>
            
            <div class="product grid_4">
                <figure>
                    <img src="images/imginicio/utem.jpg" width="300" height="200" alt="phone number three" />
                    <figcaption>
                        <h3>This Platform Was Developed By Students Of The Technologica University Of Manzanillo</h3>
                        <p>That's Right This Will Be Legendary Forever In Our University, The Tic's Students Developed This Incredible System<a href="#"> More...</a></p>
                    </figcaption>            
                </figure>        
            </div>

		<span class="cleanfix"></span>     
    </section><!--#more-products-->	    
    <section id="more-blurb" class="container_122 cleanfix">  
    </section>

<!--//////////////Primer modal//////////////////////////////// -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
<!--//////////////Segundo modal//////////////////////////////// -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        </div>
    </div>
</div>
</body>
    <footer>
<?php
    include("footer/Footer2.html")
?>
</footer>
</html>    