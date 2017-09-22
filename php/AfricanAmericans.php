<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'African Americans';
?>
	<meta charset="UTF-8">
	<title> <?php echo $PAGE_TITLE ?> Digital Collections | Chicago Public Library</title>
	    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
		<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">

		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>
	div {
		background-color: rgba(0,0,0,0.1);
		border: 1px solid #fff;
	}
	.header-logo-img img, .header-sm-img img {
		max-height: 65px;
	}
	.header-search-collapsed {
	}
	.header-search-collapsed div, .header-lg-button, .header-sm-button, .header-sm-img, .footer-list {
		display: inline-block;
	}
	.footer-list ul {
		list-style-type: none;
	}
</style>
</head>
<body>
<header>
	<div class="container">
		<div class="row justify-content-between align-items-center">
		<div class="hidden-sm-down col-md-3">
			<div class="header-logo-img"><img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/logo.png?1506021413180" alt="" /></div>
			<div class="header-logo-text"><span>Digital Collections</span></div>
		</div>
		<div class="hidden-md-up col-4">
			<div class="header-sm-img">
				<img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/mobile_logo.png?1505979997263" alt="" />
			</div>
			<div class="header-sm-button"><i class="fa fa-bars"></i></div>
			<div class="header-sm-button"><i class="fa fa-calendar"></i></div>
		</div>
		<div class="col-3 col-md-2">
			<div class="header-search-collapsed">
				<div class="header-search-collapsed-text">Search</div>
				<div class="header-search-collapsed-icon"><i class="fa fa-search"></i></div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="hidden-sm-down col-md-4 offset-md-1">
				<div class="header-lg-button">Browse<i class="fa fa-angle-down"></i></div>
				<div class="header-lg-button"><i class="fa fa-calendar"></i>Events</div>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="container">
		<div class="row">
			<div class="col-4 col-lg-3">
				left sidebar
			</div>
			<div class="col-8 col-lg-6">
				<h1><?php echo $PAGE_TITLE; ?></h1>
				main content
			</div>
			<div class="hidden-md-down col-lg-3">
				right sidebar
			</div>
		</div>
	</div>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="footer-list">
					<ul>
						<li><a href="https://www.facebook.com/pages/Chicago-Public-Library/35447572453"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/chipublib"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/chicagopubliclibrary/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://visitor.r20.constantcontact.com/d.jsp?llr=vs7doizab&p=oi&m=1126638416469&sit=fcnca6dlb&f=a1f24030-412d-44ba-8dc8-d4bbd69edbd4"><i class="fa fa-newspaper-o"></i></a></li>
					</ul>
				</div>
				<div class="footer-list">
					<ul>
						<li><a href=""></a>Home</li>
						<li><a href=""></a>Browse</li>
						<li><a href=""></a>About</li>
						<li><a href=""></a>Contact?</li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="footer-list">
					<ul>
						<li><a href=""></a>Home</li>
						<li><a href=""></a>Browse</li>
						<li><a href=""></a>About</li>
						<li><a href=""></a>Contact?</li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="footer-contactinfo">
					<dl>
						<dt>Contact Us</dt>
						<dd>Chicago Public Library</dd>
						<dd>400 S. State Street</dd>
						<dd>Chicago, IL 60605</dd>
						<dd>(312) 747-4300</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="row justify-content-between align-items-center">
			<div class="col-3 col-md-3">
				<div class="footer-logo-img"><img src="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/02/CPLSupportCPLF_web_130x60.png?v=1505779744150575491515057548853" alt="" /></div>
			</div>
			<div class="col-4 col-md-4">
				<div class="footer-bottom-right">
					<a href="link">City of Chicago</a>&nbsp;&copy; 2017 Chicago Public Library
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>