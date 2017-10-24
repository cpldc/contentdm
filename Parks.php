<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include 'variables.php';
	$PAGE_TITLE = $cards[Parks][title];
	$PAGE_TYPE = 'content';
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
		<script src="cpldc.js"></script>
        <link rel="stylesheet" href="cpldc.css" >
        <script src="simpleLightbox.min.js"></script>
        <link rel="stylesheet" href="simpleLightbox.min.css">
<style>
	div {
		/* background-color: rgba(0,0,0,0.1); */
		/* border: 1px solid #fff; */
	}
</style>
</head>

<body>
<?php 
	include 'header.html';
?>
<main class="sidebar-target-collapsible PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
	<div class="container main-container-fixed">
		<div class="row sidebar-target-fixed">
			<?php 
				include 'sidebar.php';
			?>
		<!-- center content -->
			<div class="col-8 col-lg-5 col-xl-6 center-content">
                <h1><?php echo $PAGE_TITLE; ?></h1>
                <span><p>Visit Chicago’s vast collection of parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to 
				over 500 parks today.  </p>
                <p>Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.</p></span>
                <div class="center-lightbox">
                    <?php 

                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4258/default.jpg';
                        $IMAGE[Main][Text] = 'Crown Fountain, children play in the gargoyle spray of the north tower, opening day, July 16, 2004';
                        $IMAGE[Main][Size] = '500px';
                        $IMAGE[Main][Align] = '50% 87%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/66/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Altgeld Park (0206) Features - Playgrounds and swimming pools, 1968-07';
                        $THUMBS[Thumb1][Size] = '140%';
                        $THUMBS[Thumb1][Align] = '50% 50%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/290/default.jpg';
                        $THUMBS[Thumb2][Text] = 'American Indian Center';
                        $THUMBS[Thumb2][Size] = '110%';
                        $THUMBS[Thumb2][Align] = '50% 30%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/4752/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Lake Meadow Park (0263) Events - Performances - Community concerts by Red Saunders, 1970-07-05';
                        $THUMBS[Thumb3][Size] = '500px';
                        $THUMBS[Thumb3][Align] = '55% 25%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/6209/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Palmer Park (0013) Activities - Athletics, 1965';
                        $THUMBS[Thumb4][Size] = '140%';
                        $THUMBS[Thumb4][Align] = '50% 50%';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/mpu/search" class="btn btn-primary">Browse All</a>
				</div>
				<div class="center-copy-paragraph">
					<p>
					While Chicago’s <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/Grant%20Park!Lincoln%20Park!zoo%20hamlin!Millennium%20Park/field/descri!descri!all!all/mode/exact!exact!none!all/conn/or!or!or!and/order/nosort/ad/asc">lakefront parks</a> are popular with residents and tourists alike, public green space abounds in many parts of the city. Take in <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/lagoons/field/all/mode/all/conn/and/order/nosort/ad/asc/page/10">lagoons</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/prairie/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">prairies</a>, wetlands and woodlands across the urban landscape. Peek into <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/fieldhouses%20!field%20houses/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">field houses</a> and <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/refectories%20refectory/field/all/mode/any/conn/and/order/nosort/ad/asc">refectories</a>. Gaze at <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/bridges!park/field/all!all/mode/all!all/conn/and!and/order/nosort/ad/asc">bridges</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/pergolas%20pergola/field/all/mode/any/conn/and/order/nosort/ad/asc/page/3">pergolas</a>, and <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/fountains/field/all/mode/any/conn/and/order/nosort/ad/asc">fountains</a>, from the utilitarian to the ornate. Observe how Chicagoans and visitors engage with the parks in all seasons by <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/bicycle*%20park/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">biking</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/ice%20skating/field/all/mode/all/conn/and/order/nosort/ad/asc">ice skating</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/sledding!sleds/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">sledding</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/archery/field/all/mode/all/conn/and/order/nosort/ad/asc/page/2">competing in archery</a>, <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/frankel%20plates/field/all/mode/all/conn/and/order/nosort/ad/asc">taking selfies</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/celebrations%20park/field/all/mode/all/conn/or/order/nosort/ad/asc">celebrating events</a>, and more.
					</p>
					<!-- <dl>
						<dt><a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/highlight/field/highli/mode/all/conn/and/order/origin">Collection Highlights</a></dt>
						<dd>Get a taste of how this transformation took place in a selected group of images.</dd>
					</dl> -->
				</div>
				<div class="center-copy-list">
					<h4>Digital Collections</h4>
					<dl>
						
					<?php 
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array('Parks', $val[category])) || $val[category] == 'Parks'){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
					?>
					</dl>
				</div>
				<div class="center-copy-list">
					<h4>More CPL Resources</h4>
					<dl>
						<dt>Finding Aids:</dt>
						<dd>Descriptive inventory for the complete physical collections.</dd>
						<dd>
							<ul>
								<li><a href="https://www.chipublib.org/fa-chicago-park-district-records/">Chicago Park District Records: Drawings</a></li>
								<li><a href="https://www.chipublib.org/fa-clarence-hatzfeld-papers/">Clarence Hatzfeld Papers</a></li>
								<li><a href="https://www.chipublib.org/fa-millennium-park-inc/">Millennium Park, Inc. Archives finding aid</a></li>
								<li><a href="https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/">Millennium Park / U.S. Equities Realty Collection finding aid</a></li>
								<li><a href="https://www.chipublib.org/fa-open-space-section-records/">Open Space Section Records</a></li>
							</ul>
						</dd>
						<dt><a href="https://www.chipublib.org/?post_type=post&s=parks">Park blog posts </dt>
						<dd>by CPL librarians</dd>
					</dl>
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
<?php 
	include 'footer.html';
?>
</body>
</html>