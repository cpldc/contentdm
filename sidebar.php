
<script>
	var sidebarType;
	if ($(".PAGE_TYPE").hasClass('content') && viewportWidth > 976) {
		sidebarType = "fixed";
	} else if ($(".PAGE_TYPE").hasClass('home') || ($(".PAGE_TYPE").hasClass('content') && viewportWidth < 976)) {
		sidebarType = "collapsible";
	} 
	if (sidebarType == "collapsible") {
		document.write('<div class="left-sidebar-toplevel left-sidebar-collapsible">');
	} else if (sidebarType == "fixed") {
		document.write('<div class="left-sidebar-toplevel left-sidebar-fixed col-4 col-lg-4 col-xl-3">');
	}
</script>
	<div class="left-sidebar" role="navigation">
		<div class="left-sidebar-header clearfix">
			<div class="left-sidebar-title"><a href="index.php" id="nav-sidebar">Digital Collections</a></div>
				<script>
					if (sidebarType == "collapsible") {
						document.write('<div class="left-sidebar-togglebutton left-sidebar-togglebutton-hide " onclick="toggleLeftSidebar()">');
					} else if (sidebarType == "fixed") {
						document.write('<div class="left-sidebar-togglebutton left-sidebar-togglebutton-hide hidden" onclick="toggleLeftSidebar()">');
					}
				</script>
				<button class="left-sidebar-togglebutton-target">
					<script>
						document.write(togglebuttonLeft);
					</script>
				</button>
			</div>
		</div>
		<div class="left-sidebar-main">
			<div class="left-sidebar-viewall">
					 <h1 class="left-sidebar-subtitle"><a href="content.php?id=All">View All Collections<!-- <span class="rsaquo">&rsaquo;</span> --></a></h1>
			</div>
			<div class="left-sidebar-location">
				<h1 class="left-sidebar-subtitle">Browse by Subject</h1>
				<ul>
				<?php   
					$underline = ' style="text-decoration: underline"';
					usort($cards, build_sorter('sidebarname'));
    				foreach ($cards as $key => $val){
        				if ($val[sidebarflag] == 'x'){
							echo '<li class="left-sidebar-list"><a href="content.php?id=' . $val[link] . '" class="sidebar-links"';
							if ($val[link] == $PAGE[link]) {
								echo $underline;
							}
							echo '>' . $val[sidebarname] . '</a></li>';
						}
					}
				?>
				</ul>
			</div>
			<div class="left-sidebar-location">
				<h1 class="left-sidebar-subtitle">Browse by Location</h1>
				<ul>
				<?php     
					usort($cards, build_sorter('sortname'));
    				foreach ($cards as $key => $val){
        				if ($val[type] == 'location'){
							echo '<li class="left-sidebar-list"><a href="content.php?id=' . $val[link] . '" class="sidebar-links"';
							if ($val[link] == $PAGE[link]) {
								echo $underline;
							}
							echo '>' . $val[sidebarname] . '</a></li>';
						}
					}
				?>
				</ul>
			</div>
			<div class="left-sidebar-related">
				<h1 class="left-sidebar-subtitle">Related Links</h1>
				<ul>
					<li class="left-sidebar-list"><a href="http://www.chipublib.org/archives-collections/" class="sidebar-links">Archival Collections</a></li>
					<li class="left-sidebar-list"><a href="http://www.chipublib.org/browse/chicago-history/" class="sidebar-links">Chicago History</a></li>
					<li class="left-sidebar-list"><a href="https://www.chipublib.org/resources/history/" class="sidebar-links">Online Resources: History &amp; Social Science</a></li>
				</ul>
			</div>
			<div class="left-sidebar-related">
				<h1 class="left-sidebar-subtitle">External Resources</h1>
				<ul>
					<li class="left-sidebar-list"><a href="http://bmrc.lib.uchicago.edu/" class="sidebar-links">Black Metropolis Research Consortium</a></li>
					<li class="left-sidebar-list"><a href="https://dp.la/" class="sidebar-links">Digital Public Library of America</a></li>
					<li class="left-sidebar-list"><a href="http://explore.chicagocollections.org/" class="sidebar-links">Explore Chicago Collections</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="left-sidebar-togglebutton left-sidebar-togglebutton-show hide" onclick="showLeftSidebar()">
		<button class="">
			<i class="fa fa-bars"></i>
			<i class="fa fa-caret-right"></i>
		</button>
	</div> -->
</div>