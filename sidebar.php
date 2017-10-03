
<?php 
	if ($PAGE_TYPE = 'home') {
		echo '<div class="left-sidebar-toplevel left-sidebar-collapsible"><div class="left-sidebar">';
	} 
	else {
		echo '<div class="left-sidebar-toplevel left-sidebar-fixed col-4 col-lg-4 col-xl-3"><div class="left-sidebar">';
		} 
?>
		<div class="left-sidebar-header clearfix">
			<div class="left-sidebar-title">Digital Collections</div>
			<div class="left-sidebar-togglebutton <?php if ($PAGE_TYPE != 'home') echo 'hide';?>" onclick="hideLeftSidebar()">
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
					<li class="left-sidebar-list"><a href="LibEd.php" class="sidebar-links">Libraries &amp; Education</a></li>
					<li class="left-sidebar-list"><a href="Neighborhoods.php" class="sidebar-links">Neighborhoods</a></li>
					<li class="left-sidebar-list"><a href="Newspapers.php" class="sidebar-links">Newspapers</a></li>
					<li class="left-sidebar-list"><a href="Parks.php" class="sidebar-links">Parks</a></li>
					<li class="left-sidebar-list"><a href="Theater.php" class="sidebar-links">Theater</a></li>
					<li class="left-sidebar-list">
						<!-- <button class="sidebar-links sidebar-links-ViewAll" data-toggle="collapse" data-target="#demo"> +  -->
					<a href="AllCollections.php" class="sidebar-links">View All Collections&hellip;</a></li>
				</ul>
					<!-- <ul id="demo" class="collapse left-sidebar-collectionmenu">
						<li class="mpu" ><a href="MillenniumPark.php">Millennium Park</a></li>
						<li class="cr"  ><a href="ChiRen.php">Chicago Renaissance</a></li>
						<li class="dtd" ><a href="Sewers.php">Chicago's Sewers</a></li>
						<li class="rvw" ><a href="RWLV.php">Ravenswood-Lake View Community Collection</a></li>
						<li class="rhwc"><a href="HaroldWashington.php">Remembering Harold Washington</a></li>
						<li class="wha" ><a href="CivilWar.php">Civil War</a></li>
						<li class="woop"><a href="CPL.php">Chicago Public Library</a></li>
						<li class="rwk" ><a href="Krueger.php">Robert W. Krueger</a></li>
						<li class="bar" ><a href="Barlow.php">Esther A. Barlow</a></li>
						<li class="hdg" ><a href="Green.php">Henry D. Green</a></li>
						<li class="ahs" ><a href="NSHS.php">Northside High Schools</a></li>
						<li class="cfc" ><a href="NSCO.php">Northside Clubs and Organizations</a></li>
						<li class="cfd" ><a href="Lakefront.php">Chicago's Lakefront</a></li>
						<li class="TDC" ><a href="CivilWar.php">Civil War also?</a></li>
						<li class="CNP1908"><a href=".php">Chicago Examiner</a></li>
						<li class="ChicagoParks"><a href="Parks.php">Chicago Parks</a></li>
						<li class="p16818coll6"><a href="Sang.php">Philip Sang Collection</a></li> 
					</ul> -->
			</div>
			<div class="left-sidebar-location">
				<h4 class="left-sidebear-subtitle">Browse by Location</h4>
				<ul>
					<li class="left-sidebar-list"><a href="HWLC.php" class="sidebar-links">HWLC Special Collections</a></li>
					<li class="left-sidebar-list"><a href="MRC.php" class="sidebar-links">Municipal Reference Collection</a></li>
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
<div class="left-sidebar-togglebutton left-sidebar-togglebutton-show hide" onclick="showLeftSidebar()">
	<button class="">
		<i class="fa fa-bars"></i>
		<i class="fa fa-caret-right"></i>
	</button>
</div>