<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include '../../controller/db.php';
    $to=  htmlentities($_POST['to'] );
    $from=  htmlentities($_POST['from']);
    $datepick=  htmlentities($_POST['datepick']);
    
    echo $to ;
     echo $from ;
      echo $datepick ;
    


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Highway Bus Schedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><a href="index.html">Home</a></li> |
				<li><a href="rooms.html">Roads</a></li> |
				<li class="active"><a href="reservation.html">reservation</a></li> |
				<li><a href="activities.html">Information</a></li> |
				<li><a href="contact.html">contact us</a></li>
				<div class="clear"></div>
			</ul>
			
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.html">Home/a></li> 
				<li><a href="rooms.html">Roads</a></li> 
				<li><a href="reservation.html">reservation</a></li> 
				<li><a href="activities.html">Information</a></li> 
				<li><a href="contact.html">contact us</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="res_online">
			<h4>Your details</h4>
			<p class="para"><p>
		</div>			
			<div class="span_of_2">
				<div class="span2_of_1">
					<h4>check-in:</h4>
					<div class="book_date btm">
						
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						
					</div>	
					<div class="sel_room">
						<h4></h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null"></option>
				            <option value="null"></option>         
				            <option value="AX"></option>
							<option value="AX"></option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4></h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null"></option>
				            <option value="null"></option>         
				            <option value="AX"></option>
							<option value="AX"></option>
		        		</select>
					</div>	
				</div>
				<div class="span2_of_1">
					<h4>check-out:</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>	
					<div class="sel_room">
						<h4></h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null"></option>
							<option value="null"></option>
				            <option value="null"></option>         
				            <option value="AX"></option>
							<option value="AX"></option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4></h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null"></option>
							<option value="null"></option>
				            <option value="null"></option>         
				            <option value="AX"></option>
							<option value="AX"></option>
		        		</select>
					</div>	
				</div>
				<div class="clear"></div>
			</div>
			<div class="res_btn">
				<form>
					<input type="submit" value="book now" style="width: 280px;">
				</form>
			</div>
	</div>
</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved | </span></p>
			</div>
			<div class="f_nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="rooms.html">Roads</a></li>
					<li><a href="rooms.html">Other vehicles</a></li>
					<li><a href="contact.html">Contact us</a></li>
				</ul>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>