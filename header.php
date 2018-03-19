<?php
	$format[type] = 'format';
	$format[typefull] = 'By Format';
	$format[links] = array(array([link] => 'http://www.chipublib.org/browse/books/', 'text' => 'Books'),
		array('link' => 'http://www.chipublib.org/browse/ebooks/', 'text' => 'eBooks'),
		array('link' => 'http://www.chipublib.org/browse/audiobooks/', 'text' => 'Audiobooks'),
		array('link' => 'http://www.chipublib.org/browse/movies/', 'text' => 'Movies &amp; TV'),
		array('link' => 'http://www.chipublib.org/browse/music/', 'text' => 'Music'));
	$aud[type] = 'aud';
	$aud[typefull] = 'By Audience';
	$aud[links] = array(array('link' => 'http://www.chipublib.org/browse/kids/', 'text' => 'Kids'),
		array('link' => 'http://www.chipublib.org/browse/teens/', 'text' => 'Teens'));
	$more[type] = 'more'; 
	$more[typefull] = 'More'; 
	$more[links] = array(array('link' => 'http://www.chipublib.org/online-resources/', 'text' => 'Online Resources'),
		array('link' => 'http://www.chipublib.org/browse/jobs-small-business/', 'text' => 'Jobs &amp; Small Business'),
		array('link' => 'http://www.chipublib.org/browse/chicago-history/', 'text' => 'Chicago History'),
		array('link' => 'http://www.chipublib.org/archives-collections/', 'text' => 'Archival Collections'),
		array('link' => 'https://www.chipublib.org/browse_program/one-book-one-chicago/', 'text' => 'One Book, One Chicago'));
	$headerLinks = array($format, $aud, $more);
	?>
				
<script>
	var typeSingular;
	var typePlural;
	if (pagetype === 'category'){
		typeSingular = 'This Category';
		typePlural = 'All Categories';
	} else if ( pagetype === 'location'){
		typeSingular = 'This Location';
		typePlural = 'All Locations';
	} else if ( pagetype === 'collection'){
		typeSingular = 'This Collection';
		typePlural = 'All Collections';
	}
</script>	
<header>
<section class="a11y-skip-links">
	<span class="invisitext"><a href="#nav-sidebar" onclick="showLeftSidebar()" class="a11ylinks">Skip to Navigation</a></span>
	<span class="invisitext hidden-lg-up"><a href="#search-query2" onclick="expandSearch()" class="a11ylinks">Skip to Search</a></span>
	<span class="invisitext hidden-md-down"><a href="#search-query" onclick="expandSearch()" class="a11ylinks">Skip to Search</a></span>
	<span class="invisitext"><a href="#content-top" class="a11ylinks">Skip to Content</a></span>
</section>
	<section role="banner" aria-label="Header">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="hidden-md-down col-lg-3">
					<div class="header-logo-img"><a href="https://www.chipublib.org/"><img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/logo.png?1506021413180" alt="Chicago Public Library" /></a></div>
					<div class="header-logo-text"><?php if ($PAGE_TYPE == 'content'){echo '<h1><a href="index.php">Digital Collections</a></h1>';} else {echo '<a href="index.php">Digital Collections</a>';}?></div>
				</div>
				<div class="hidden-lg-up col-7">
					<div class="header-sm-img">
						<a href="https://www.chipublib.org/">
							<img src="https://cor-liv-cdn-static.bibliocommons.com/images/IL-CPL/mobile_logo.png?1505979997263" alt="Chicago Public Library" />
						</a>
					</div>
					<div class="inline-div"><button class="header-sm-button" data-toggle="modal" data-target="#myModal" tabindex="0"><i class="fa fa-bars" aria-hidden="true"></i></button></div>
					<div class="inline-div"><a class="header-sm-button light-left-border" href="https://chipublib.bibliocommons.com/events/search/index"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>
				</div>
				<div class="col-3 col-lg-8 clearfix">
					<div class="inline-div wider float-right">
						<div class="header-search-collapsed" onclick="expandSearch()" tabindex="0">
							<div class="header-search-collapsed-text hidden-sm-down">Search</div>
							<div class="header-search-collapsed-icon" ><i class="fa fa-search" aria-hidden="true"></i></div>
						</div>
						<div class="header-search-expanded hide">
							<div class="header-search-expanded-text" >Search
							<div class="dropdown <?php if ($PAGE_TYPE == "home") {echo "hidden";}?> ">
									<button class="dropdown-toggle bib-button-searchthe" id="selectSearchTarget" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><script>document.write(typeSingular)</script></button>
									<div class="dropdown-menu bib-button-searchthe-optionbox" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item bib-button-searchthe-option" onClick="selectSearch(typeSingular)" href="#"><script>document.write(typeSingular)</script></a>
										<a class="dropdown-item bib-button-searchthe-option" onClick="selectSearch(typePlural)" href="#"><script>document.write(typePlural)</script></a>
									</div>
								</div>
							</div>
							<div class="header-search-expanded-input">
								<input aria-label="Search the Digital Collections" type="text" name="search-query" id="search-input">
							</div>
							<div class="header-search-expanded-icon" onclick="searchQuery()" ><i class="fa fa-search"  aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				</div>
				<div class="row align-items-center">
					<div class="hidden-md-down col-lg-12">
						<div class="header-bottom">
							<div class="inline-div"><a class="header-lg-button" onclick="showDropdown()" tabindex="0" >Browse <i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
							<div class="inline-div"><a class="header-lg-button" href="https://chipublib.bibliocommons.com/events/search/index"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a></div>
						</div>
					</div>
				</div>
				<div role="search" class="container header-search-dropped hide" aria-label="Search the Digital Collections">
					<div class="header-search-dropped-close"><i class="fa fa-times fa-2x" onclick="hideSearch()" aria-hidden="true"></i></div>
					<div class="header-search-dropped-search">
						<div class="header-search-row-textrow">
							<div class="header-search-dropped-text">
								<h2>Search</h2>
							</div>
						</div>
						<?php 
							if ($PAGE_TYPE != "home") {echo '<div class="header-search-row">
									<button class="dropdown-toggle bib-button-searchthe-dropdown" id="selectSearchTarget2" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><script>document.write(typeSingular)</script></button>
									<div class="dropdown-menu bib-button-searchthe-optionbox-dropdown" aria-labelledby="dropdownMenuButton2">
										<a class="dropdown-item bib-button-searchthe-option" onClick="selectSearch2(typeSingular)" href="#"><script>document.write(typeSingular)</script></a>
										<a class="dropdown-item bib-button-searchthe-option" onClick="selectSearch2(typePlural)" href="#"><script>document.write(typePlural)</script></a>
									</div>
								</div>';
							}
						?>
						<div class="header-search-row">
							<div class="header-search-dropped-input">
								<input type="text" name="search-query2" id="search-input2">
							</div
							><div class="header-search-dropped-icon"  onclick="searchQuery2()" >
								<i class="fa fa-search" aria-hidden="true"></i>
							</div
						></div>
							<div class="header-search-row-textrow clearfix">
								<span class="header-search-dropped-adv"><a href="http://digital.chipublib.org/digital/search/advanced">Advanced Search</a></span>
							</div>
									</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section role="navigation" class="header-browse-dropdown-wrapper" style="display: none;" onclick="showDropdown()" aria-label="Browse CPL Website">
		<div class="container header-browse-dropdown">
			<div class="row">
				<div class="col-lg-12 hidden-md-down">
					<div class="header-browse-dropdown-browse"><h2>Browse</h2></div>
					<?php 
						foreach ($headerLinks as $key => $val){
							echo '<div class="header-browse-dropdown-section header-browse-dropdown-' . $val[type] . '"><h3 class="header-browse-dropdown-title">' . $val[typefull] . '</h3><ul class="list-group">';
							foreach ($val[links] as $k => $v) {
								echo '<li class="list-group-item header-dropdown-listitem"><a href="' . $v[link] . '">' . $v[text] . '</a></li>';
							}
							echo '</ul></div>';
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<section role="navigation" class="modal fade" id="myModal" tabindex="-1" aria-label="Browse CPL Website" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h2 class="modal-title" id="exampleModalLabel">Browse <i class="fa fa-angle-down" aria-hidden="true"></i></h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
					<?php 
						foreach ($headerLinks as $key => $val){
							echo '<h3 class="header-modal-listheader">' . $val[typefull] . '</h3><ul class="list-group">';
							foreach ($val[links] as $k => $v) {
								echo '<li class="list-group-item header-modal-listitem"><a href="' . $v[link] . '">' . $v[text] . '</a></li>';
							}
							echo '</ul>';
						}
					?>
				</div>
			</div>
		</div>
	</section>
</header>