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
					<li class="left-sidebar-list"><a href="AfAm.php" class="sidebar-links">African Americans</a></li>
					<li class="left-sidebar-list"><a href="HaroldWashington.php" class="sidebar-links">Harold Washington</a></li>
					<li class="left-sidebar-list"><a href="LibEd.php" class="sidebar-links">Libraries &amp; Education</a></li>
					<li class="left-sidebar-list"><a href="Neighborhoods.php" class="sidebar-links">Neighborhoods</a></li>
					<li class="left-sidebar-list"><a href="Newspapers.php" class="sidebar-links">Newspapers</a></li>
					<li class="left-sidebar-list"><a href="Parks.php" class="sidebar-links">Parks</a></li>
					<li class="left-sidebar-list"><a href="Theater.php" class="sidebar-links">Theater</a></li>
				</ul>
			</div>
			<div class="left-sidebar-location">
				<h4 class="left-sidebar-subtitle">Browse by Location</h4>
				<ul>
					<li class="left-sidebar-list"><a href="HWLC.php" class="sidebar-links">HWLC Special Collections</a></li>
					<li class="left-sidebar-list"><a href="MRC.php" class="sidebar-links">Municipal Reference Collection</a></li>
					<li class="left-sidebar-list"><a href="Sulzer.php" class="sidebar-links">Northside Neighborhoods History Collection</a></li>
					<li class="left-sidebar-list"><a href="Harsh.php" class="sidebar-links">Vivian G Harsh Collection</a></li>
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
				<h4 class="left-sidebar-subtitle">External Resouces</h4>
				<ul>
					<li class="left-sidebar-list"><a href="https://dp.la/" class="sidebar-links">Digital Public Library of America (DPLA)</a></li>
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