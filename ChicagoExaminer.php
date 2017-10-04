<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Chicago Examiner';
?>
	<meta charset="UTF-8">
	<title> <?php echo $PAGE_TITLE ?> | Digital Collections | Chicago Public Library</title>
	    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
		<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
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
								<li class="left-sidebar-list"><button class="sidebar-links sidebar-links-ViewAll" data-toggle="collapse" data-target="#demo"> + View All Collections&hellip;</a></li>
                            </ul>
                                <ul id="demo" class="collapse left-sidebar-collectionmenu">
                                    <li class="mpu"><a href="">Millennium Park</a></li>
                                    <li class="cr"><a href="">Chicago Renaissance</a></li>
                                    <li class="dtd"><a href="">Chicago's Sewers</a></li>
                                    <li class="rvw"><a href="">Ravenswood-Lake View Community Collection</a></li>
                                    <li class="rhwc"><a href="">Remembering Harold Washington</a></li>
                                    <li class="wha"><a href="">Civil War</a></li>
                                    <li class="woop"><a href="">Chicago Public Library</a></li>
                                    <li class="rwk"><a href="">Robert W. Krueger</a></li>
                                    <li class="bar"><a href="">Esther A. Barlow</a></li>
                                    <li class="hdg"><a href="">Henry D. Green</a></li>
                                    <li class="ahs"><a href="">Northside High Schools</a></li>
                                    <li class="cfc"><a href="">Northside Clubs and Organizations</a></li>
                                    <li class="cfd"><a href="">Chicago's Lakefront</a></li>
                                    <li class="TDC"><a href="">Civil War</a></li>
                                    <li class="CNP1908"><a href="">Chicago Examiner</a></li>
                                    <li class="ChicagoParks"><a href="">Chicago Parks</a></li>
                                    <li class="p16818coll6"><a href="">Philip Sang Collection</a></li> 
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
					<span>The Chicago Examiner began in 1902 as a morning edition to complement the evening edition paper, the Chicago American.</span>
					<div class="center-lightbox">
						<?php include 'lightbox.html'; ?>
					</div>
					<div class="center-button browseall">
						<button class="btn btn-primary">Browse All&hellip;</button>
					</div>
					<div class="center-copy-paragraph">
                        <p>The Chicago Public Library’s 10-year run of the Examiner, while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available. It is a quintessential example of yellow journalism.
					    </p><p>
					    Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> the deadliest U.S. building collapse in terms of firefighter deaths until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos, and illustrations; big early 19th century <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a>
                        </p>
                    </div>
					<div class="center-copy-list">
						<h4>Collection Highlights</h4>
						<dl>
							<dt><a href="https://www.chipublib.org/chicago-newspapers-on-microfilm/">Chicago Newspapers</a></dt>
							<dd>Online and microfilm</dd>
							<dt><a href="https://www.chipublib.org/?post_type=post&s=newspapers">Newspaper blog posts</a></dt>
							<dd>by CPL librarians</dd>
						</dl>
					</div>
					<div class="center-copy-list-ext">
						<h4>External Resources</h4>
						<dl>
                            <dt><a href="http://chroniclingamerica.loc.gov/">Library of Congress Chronicling America: Historic American Newspapers</a></dt>
                            <dd>For more historic newspapers.
                            <dt><a href="http://idnc.library.illinois.edu/">Illinois Digital Newspaper Collections</a></dt>
                            <dd>For more Illinois newspapers.
						</dl>
					</div>
				</div>
			</div>
		<!-- right sidebar -->
			<div class="hidden-md-down col-lg-3 right-sidebar">
				<div class="right-sidebar">
					<div class="blogs">
						<?php
							include 'blogs.php';
						?>
					</div>
					<div class="events">
						<?php 
							include 'events.php';
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="footer-top">
	<div class="container">
		<div class="row align-items-top">
			<div class="col-1">
				<div class="footer-list footer-social">
					<ul>
						<li>
							<a href="https://www.facebook.com/pages/Chicago-Public-Library/35447572453">
								<span class="fa-stack fa-lg hover-dim">
									<i class="fa fa-circle fa-stack-2x footer-social-icons-bg-fb"></i>
									<i class="fa fa-stack-1x fa-facebook footer-social-icons-fg"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/chipublib">
								<span class="fa-stack fa-lg hover-dim">
									<i class="fa fa-circle fa-stack-2x footer-social-icons-bg-tw"></i>
									<i class="fa fa-stack-1x fa-twitter footer-social-icons-fg"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/chicagopubliclibrary/">
								<span class="fa-stack fa-lg hover-dim">
									<i class="fa fa-circle fa-stack-2x footer-social-icons-bg-ig"></i>
									<i class="fa fa-stack-1x fa-instagram footer-social-icons-fg"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="https://visitor.r20.constantcontact.com/d.jsp?llr=vs7doizab&p=oi&m=1126638416469&sit=fcnca6dlb&f=a1f24030-412d-44ba-8dc8-d4bbd69edbd4">
								<span class="fa-stack fa-lg hover-dim">
									<i class="fa fa-circle fa-stack-2x footer-social-icons-bg-cc" ></i>
									<i class="fa fa-stack-1x fa-newspaper-o footer-social-icons-fg"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-3">
				<div class="footer-list">
					<h4>Digital Collections</h4>
					<ul>
						<li><a href="http://cdm16818.contentdm.oclc.org/ui/custom/default/</li>collection/default/resources/custompages/homepage.masonry.html">Digital Collections Home</a></li>
						<li><a href="http://digital.chipublib.org/digital/search">Browse</a></li>
						<li><a href="http://digital.chipublib.org/digital/about">About</a></li>
						<li><a href="https://www.chipublib.org/library-policies/website-accessibility-policy/">Website Accessibility Policy</a></li> 
						<!-- <li><a href=""></a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="footer-list footer-floatright">
					<h4>Chicago Public Library</h4>
					<ul>
						<li><a href="https://www.chipublib.org/">CPL Home</a></li>
						<li><a href="https://www.chipublib.org/archives-collections/">Archival Collections</a></li>
						<li><a href="https://visitor.r20.constantcontact.com/d.jsp?llr=vs7doizab&p=oi&m=1126638416469&sit=fcnca6dlb&f=a1f24030-412d-44ba-8dc8-d4bbd69edbd4">Sign Up for Email Updates</a></li>
						<li><a href="https://www.chipublib.org/order-a-photo-reproduction/">Order a Photo Reproduction</a></li>
						<!-- <li><a href=""></a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="footer-contactinfo footer-floatright">
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
	</div>
</footer>
<footer class="footer-bottom">
	<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-4">
					<div class="footer-logo-img"><img src="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/02/CPLSupportCPLF_web_130x60.png?v=1505779744150575491515057548853" alt="" /></div>
				</div>
				<div class="col-4 offset-md-4">
					<div class="footer-bottom-right footer-floatright">
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