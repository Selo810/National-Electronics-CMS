<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Extro-Electronics Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="client/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<script src="client/js/modernizr.js"></script>
 <!-- jQuery -->
<script src="client/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="client/js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- FlexSlider -->
<script defer src="client/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
</head>

<body>
<div class="wrap"> 
	<div class="header">
		<div class="logo">
				<a href="index.html"><img src="images/logo-header.png" alt=""  title="logo"/></a>
		</div>
		<div class="nav-right">
			<ul class="nav">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="https://cms-with-auth-seanskiver.c9users.io/client/about">About</a></li>
				<li><a href="service.html">Service</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
<div class="menu-bg">
	<ul class="menu">
		<li><a href="home-appliances.html">Home</a></li>
		<li><a href="accessories.html">Mobile Phones</a>
			<ul>
				<li><a href="accessories.html" >Iphone</a></li>
				<li><a href="accessories.html">Samsung</a></li>
				<li><a href="accessories.html">Sony</a></li>
				<li><a href="accessories.html" >LG</a></li>
				<li><a href="accessories.html">HTC</a></li>
				<li><a href="accessories.html">ADATA</a></li>
				<li><a href="accessories.html" >Nokia</a></li>
				<li><a href="accessories.html">Blackberry</a></li>
				<li><a href="accessories.html">Microsoft</a></li>
				<li><a href="accessories.html">Motorola</a></li>
				<li><a href="accessories.html">Hyundai</a></li>
			</ul>
		</li>
		<li><a href="computing.html">Tablets</a></li>
		<li><a href="accessories.html">Accessories</a>
			<ul>
				<li><a href="accessories.html" >SD</a></li>
				<li><a href="accessories.html">Flash Drives</a></li>
				<li><a href="accessories.html">Headsets</a></li>
				<li><a href="accessories.html">Adapters</a></li>
			</ul>
		</li>
	</ul> 

	<div class="clear"></div>
</div>
<div class="flexslider">
   	<div class="flex-viewport" style="overflow: hidden; position: relative;">
   		<ul class="slides" style="width: 100%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-5032px, 0, 0);">
   			<li class="clone" style="width: 100%; float: left; display: block;">
        		<img src="images/slider1.jpg" alt=""/>
    		</li>
       		<li style="width: 100%; float: left; display: block;" class="">
    	    	<img src="images/slider2.jpg" alt=""/>
    		</li>
    		<li class="" style="width:100%; float: left; display: block;">
    	    	<img src="images/slider3.jpg" alt=""/>
    		</li>
		</ul>
	</div>
</div>
<div class="content">
<div class="section group">
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
			<a href="details.html"><img src="images/pic1.jpg" alt=""/></a> 
		</div>
		<h2>Lorem Ipsum is simply dummy text </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
	</div>
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
				<a href="details.html"><img src="images/pic2.jpg" alt=""/></a> 
		</div>
		<h2>Lorem Ipsum is simply dummy text </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
	</div>
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
				<a href="details.html"><img src="images/pic3.jpg" alt=""/></a> 
		</div>
		<h2>Lorem Ipsum is simply dummy text </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
	</div>
</div>
<div class="text-h">
	<h2>feature products</h2>
</div>
<div class="section group">
	@foreach ($products as $prd)
		<div class="col_1_of_5 span_1_of_5">
			<div class="grid-img" >
					<a href="details.html"><img src="{{ $prd->product_image }}" alt=""/ ></a> 
			</div>
			<p></p>
			<b class="left">{{ $prd->brand['brand_name'] }}&nbsp;{{ $prd->product_name }}</b>
			
			<div class="btn right"><a href="details.html">view</a></div>
		</div>
	@endforeach
	
</div>
</div>
<div class="footer">
	<div class="section group">
		<div class="col_1_of_4 span_1_of_4">
			<h2>New York</h2>
			<ul class="nav1">
				<li><a href="">1201 Broadway, Suite 806</a></li>
				<li><a href="">New York, NY 10001</a></li>
				<li><a href="">Local: 646.366.8003</a></li>
				<li><a href=""> Fax: 646.366.8005</a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Information</h2>
			<ul class="nav1">
				<li><a href="">Always free from repetition</a></li>
				<li><a href="">Morbi blandit turpis ewuhre,</a></li>
				<li><a href="">Integer id ante nec elit mo</a></li>
				<li><a href="">Maecenas accumsan lorem sed</a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Follow Us</h2>
			<ul class="nav">
				<li><a href=""><img src="images/facebook.png" title="facebook" alt=""/></a></li>
				<li><a href=""><img src="images/twitter.png" title="twitter" alt=""/></a></li>
				<li><a href=""><img src="images/rss.png" title="rss" alt=""/></a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Contact Us</h2>
			<ul class="nav">
				<li><a href=""> 500 Lorem Ipsum Dolor Sit,</a></li>
				<li><a href="">22-56-2-9 Sit Amet, Lorem,</a></li>
				<li><a href="">USA </a></li>
				<li><a href="">Phone:(00) 222 666 444 </a></li>
				<li><a href=""> Email: <span>info@mycompany.com</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer1">
		<p class="w3-link">© All Rights Reserved | Designed by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
	</div>
</div>
</body>
</html>