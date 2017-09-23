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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="AfAm.css" >
	
<style>
	div {
		/* background-color: rgba(0,0,0,0.1); */
		/* border: 1px solid #fff; */
	}
</style>
</head>

<body>
<header>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="hidden-md-down col-lg-3">
				<div class="header-logo-img"><a href="https://www.chipublib.org/"><img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/logo.png?1506021413180" alt="" /></a></div>
				<div class="header-logo-text"><a href="">Digital Collections</a></div>
			</div>
			<div class="hidden-lg-up col-6">
				<div class="header-sm-img">
					<a href="https://www.chipublib.org/">
						<img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/mobile_logo.png?1505979997263" alt="" />
					</a>
				</div>
				<div class="header-sm-button" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars"></i></div>
				<div class="header-sm-button light-left-border" onclick="javascript:location.href='https://chipublib.bibliocommons.com/events/search/index'"><i class="fa fa-calendar"></i></div>
			</div>
			<div class="col-3 col-lg-8 clearfix">
				<div class="header-search-collapsed" onclick="expandSearch()">
					<div class="header-search-collapsed-text hidden-sm-down">Search</div>
					<div class="header-search-collapsed-icon" ><i class="fa fa-search"></i></div>
				</div>
				<div class="header-search-expanded hide">
					<div class="header-search-expanded-text hidden-lg-down" onclick="SEARCHS!!!">Search the Digital Collections</div>
					<div class="header-search-expanded-text hidden-xl-up" onclick="SEARCHS!!!">Search</div>
					<div class="header-search-expanded-input"><input type="text"></div>
					<div class="header-search-expanded-icon"><i class="fa fa-search"></i></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="hidden-md-down col-lg-12">
				<div class="header-bottom">
					<div class="header-lg-button" onclick="showDropdown()">Browse <i class="fa fa-angle-down"></i></div>
					<div class="header-lg-button" onclick="javascript:location.href='https://chipublib.bibliocommons.com/events/search/index'"><i class="fa fa-calendar"></i> Events</div>
				</div>
			</div>
		</div>

	</div>
</header>
<div class="container header-search-dropped hide clearfix" onclick="hideSearch()">
	<div class="header-search-dropped-close"><i class="fa fa-times fa-2x"></i></div>
	<div class="row header-search-dropped-search no-gutters align-items-center clearfix">
		<div class="col-2 header-search-dropped-text">
			Search
		</div>
		<div class="col-8 header-search-dropped-input">
			<input type="text"></input>
		</div>
		<div class="col-1 header-search-dropped-icon">
			<i class="fa fa-search"></i>
		</div>
		<br />
		<span class="header-search-dropped-adv"><a href="">Advanced Search</a></span>
	</div>
</div>
<section class="header-browse-dropdown-wrapper hide" onclick="hideDropdown()">
	<div class="container header-browse-dropdown">
		<div class="row">
			<div class="col-lg-12 hidden-md-down">
				<div class="header-browse-dropdown-browse"><h2>Browse</h2></div>
				<div class="header-browse-dropdown-section header-browse-dropdown-format">
					<span class="header-browse-dropdown-title">By Format</span>
					<ul class="list-group">
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/books/">Books</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/ebooks/">eBooks</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/audiobooks/">Audiobooks</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/movies/">Movies &amp; TV</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/music/">Music</a></li>
					</ul>
				</div>
				<div class="header-browse-dropdown-section header-browse-dropdown-aud">
					<span class="header-browse-dropdown-title">By Audience</span>
					<ul class="list-group">
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/kids/">Kids</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/teens/">Teens</a></li>
					</ul>
				</div>
				<div class="header-browse-dropdown-section header-browse-dropdown-more">
					<span class="header-browse-dropdown-title">More</span>
					<ul class="list-group">
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/online-resources/">Online Resources</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/jobs-small-business/">Jobs &amp; Small Business</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/browse/chicago-history/">Chicago History</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="http://www.chipublib.org/archives-collections/">Archival Collections</a></li>
						<li class="list-group-item header-dropdown-listitem"><a href="https://www.chipublib.org/browse_program/one-book-one-chicago/">One Book, One Chicago</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalLabel">Browse <i class="fa fa-angle-down"></i></h5>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<div class="modal-body">
			<h4 class="header-modal-listheader">By Format</h4>
		<ul class="list-group">
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/books/">Books</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/ebooks/">eBooks</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/audiobooks/">Audiobooks</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/movies/">Movies &amp; TV</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/music/">Music</a></li>
		</ul>
		<h4 class="header-modal-listheader">By Audience</h4>
		<ul class="list-group">
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/kids/">Kids</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/teens/">Teens</a></li>
		</ul>
		<h4 class="header-modal-listheader">More</h4>
		<ul class="list-group">
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/online-resources/">Online Resources</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/jobs-small-business/">Jobs &amp; Small Business</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/browse/chicago-history/">Chicago History</a></li>
			<li class="list-group-item header-modal-listitem"><a href="http://www.chipublib.org/archives-collections/">Archival Collections</a></li>
		</ul>
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	</div>
  </div>
</div>
</div>

<main>
	<div class="container">
		<div class="row">
		<!-- left sidebar -->
			<div class="col-4 col-lg-3">
				<div class="left-sidebar">
					<div class="left-sidebar-header clearfix">
						<div class="left-sidebar-title">Digital Collections</div>
						<div class="left-sidebar-togglebutton hide">
							<button class="">
								<i class="fa fa-caret-left"></i>
								<i class="fa fa-bars"></i>
							</button>
						</div>
					</div>
					<div class="left-sidebar-main">
						<div class="left-sidebar-subj">
							<h4 class="left-sidebear-subtitle">Browse by Subject</h4>
							<ul>
								<li class="left-sidebar-list"><a href="AfricanAmericans.php" class="sidebar-links">African Americans</a></li>
								<li class="left-sidebar-list"><a href="HaroldWashington.php" class="sidebar-links">Harold Washington</a></li>
								<li class="left-sidebar-list"><a href="LibEd.php" class="sidebar-links">Libraries &amp; Education (new category)</a></li>
								<li class="left-sidebar-list"><a href="Neighborhoods.php" class="sidebar-links">Neighborhoods</a></li>
								<li class="left-sidebar-list"><a href="Newspapers.php" class="sidebar-links">Newspapers</a></li>
								<li class="left-sidebar-list"><a href="Parks.php" class="sidebar-links">Parks</a></li>
								<li class="left-sidebar-list"><a href="Theater.php" class="sidebar-links">Theater</a></li>
								<li class="left-sidebar-list"><a href="http://digital.chipublib.org/digital/search" class="sidebar-links">More &hellip;</a></li>
							</ul>
						</div>
						<div class="left-sidebar-location">
							<h4 class="left-sidebear-subtitle">Browse by Location</h4>
							<ul>
								<li class="left-sidebar-list"><a href="HWLC.php" class="sidebar-links">HWLC Special Collections</a></li>
								<li class="left-sidebar-list"><a href="MRC.php" class="sidebar-links">Municipal Records Collection</a></li>
								<li class="left-sidebar-list"><a href="Sulzer.php" class="sidebar-links">Northside Neighborhoods History Collection</a></li>
								<li class="left-sidebar-list"><a href="Harsh.php" class="sidebar-links">Vivian G Harsh Collection</a></li>
							</ul>
						</div>
						<div class="left-sidebar-related">
							<h4 class="left-sidebear-subtitle">Related Links</h4>
							<ul>
								<li class="left-sidebar-list"><a href="" class="sidebar-links">Archival Collections</a></li>
								<li class="left-sidebar-list"><a href="" class="sidebar-links">Chicago History</a></li>
								<li class="left-sidebar-list"><a href="" class="sidebar-links">Online Resources</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!-- center content -->
			<div class="col-8 col-lg-6">
				<div class="center-content">
					<h1><?php echo $PAGE_TITLE; ?></h1>
					main content
				</div>
			</div>
		<!-- right sidebar -->
			<div class="hidden-md-down col-lg-3 right-sidebar">
				<div class="right-sidebar">
					<div class="blogs">
						<?php
							// include 'blogs.php';
						?>
					</div>
					<div class="events">
						<?php 
							// include 'events.php';
						?>
					</div>
				</div>
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
					<address>
						<strong>Contact Us</strong><br>
						Chicago Public Library<br>
						400 S. State Street<br>
						Chicago, IL 60605<br>
						(312) 747-4300
					</address>
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



<script>
	function expandSearch() {
		var viewportWidth = $(window).width();
		$(".header-search-collapsed").addClass("hide");
		if (viewportWidth > 976) {
			$(".header-search-expanded").removeClass("hide");
		}
		if (viewportWidth < 976) {
			$(".header-search-dropped").removeClass("hide");
		}
	}
	function hideSearch() {
		$(".header-search-dropped").addClass("hide");
		$(".header-search-collapsed").removeClass("hide");
	}
	function showDropdown() {
		$(".header-browse-dropdown-wrapper").removeClass("hide");
	}
	function hideDropdown() {
		$(".header-browse-dropdown-wrapper").addClass("hide");
	}
	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			if (!($(".header-search-expanded").hasClass("hide"))) {
				$(".header-search-expanded").addClass("hide");
				$(".header-search-dropped").removeClass("hide");
			}
		}
		if (viewportWidth > 976) {
			if (!($(".header-search-dropped").hasClass("hide"))) {
				$(".header-search-dropped").addClass("hide");
				$(".header-search-expanded").removeClass("hide");
			}
		}
	});
</script>
</body>
</html>