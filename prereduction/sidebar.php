
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
	var togglebuttonLeft = '<i class="fa fa-caret-left"></i> <i class="fa fa-bars"></i>';
	var togglebuttonRight = '<i class="fa fa-bars"></i> <i class="fa fa-caret-right"></i>';
</script>
	<div class="left-sidebar">
		<div class="left-sidebar-header clearfix">
			<div class="left-sidebar-title">Digital Collections</div>
			<script>
				if (sidebarType == "collapsible") {
					document.write('<div class="left-sidebar-togglebutton left-sidebar-togglebutton-hide " onclick="toggleLeftSidebar()">');
				} else if (sidebarType == "fixed") {
					document.write('<div class="left-sidebar-togglebutton left-sidebar-togglebutton-hide hide" onclick="toggleLeftSidebar()">');
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
					 <h4 class="left-sidebar-subtitle"><a href="AllCollections.php">View All Collections<!-- <span class="rsaquo">&rsaquo;</span> --></a></h4>
			</div>
			<div class="left-sidebar-location">
				<h4 class="left-sidebar-subtitle">Browse by Subject</h4>
				<ul>
				<?php     
					usort($cards, build_sorter('shortname'));
    				foreach ($cards as $key => $val){
        				if ($val[sidebarflag] == 'x'){
							echo '<li class="left-sidebar-list"><a href="' . $val[link] . '" class="sidebar-links">' . $val[shortname] . '</a></li>';
						}
					}
				?>
				</ul>
			</div>
			<div class="left-sidebar-location">
				<h4 class="left-sidebar-subtitle">Browse by Location</h4>
				<ul>
				<?php     
					usort($cards, build_sorter('sortname'));
    				foreach ($cards as $key => $val){
        				if ($val[type] == 'location'){
							echo '<li class="left-sidebar-list"><a href="' . $val[link] . '" class="sidebar-links">' . $val[shortname] . '</a></li>';
						}
					}
				?>
				</ul>
			</div>
			<div class="left-sidebar-related">
				<h4 class="left-sidebar-subtitle">Related Links</h4>
				<ul>
					<li class="left-sidebar-list"><a href="http://www.chipublib.org/archives-collections/" class="sidebar-links">Archival Collections</a></li>
					<li class="left-sidebar-list"><a href="http://www.chipublib.org/browse/chicago-history/" class="sidebar-links">Chicago History</a></li>
					<li class="left-sidebar-list"><a href="https://www.chipublib.org/resources/history/" class="sidebar-links">Online Resources: History</a></li>
				</ul>
			</div>
			<div class="left-sidebar-related">
				<h4 class="left-sidebar-subtitle">External Resources</h4>
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