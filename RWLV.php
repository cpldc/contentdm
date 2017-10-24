<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
	$PAGE_TITLE = $cards[RWLV][title];
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
                <span>Lake View Township existed as an independent city until it was annexed by Chicago in 1889.  Today this area comprises the communities of Lakeview, North Center, Lincoln Square (Ravenswood), Uptown and Edgewater.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/421/default.jpg';
                        $IMAGE[Main][Text] = 'Lincoln &amp&; Montrose Avenues';
                        $IMAGE[Main][Size] = '110%';
                        $IMAGE[Main][Align] = '50% 50%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1800/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Arthur G. Bennett';
                        $THUMBS[Thumb1][Size] = '110%';
                        $THUMBS[Thumb1][Align] = '60% 10%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/3142/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Charles Perkins';
                        $THUMBS[Thumb2][Size] = '200%';
                        $THUMBS[Thumb2][Align] = '50% 10%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/933/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Riverview Park';
                        $THUMBS[Thumb3][Size] = '170%';
                        $THUMBS[Thumb3][Align] = '50% 50%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1272/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Klausen family salutes the American flag on their front lawn.';
                        $THUMBS[Thumb4][Size] = '601px';
                        $THUMBS[Thumb4][Align] = '33% 20%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/examiner/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        More than <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/00000000-1889/field/date/mode/exact/conn/and/order/title/ad/asc">100 early photographs</a> represent Lake View Township and its residents, schools, homes, businesses and everyday rituals.
                    </p><p>
                        Over the next 100 years North Siders and their neighborhoods experienced tremendous changes as evidenced by their <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clothing%20%26%20dress/field/subjea/mode/exact/conn/and/order/title/ad/asc">fashion</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/railroad!automobiles/field/subjea!subjea/mode/all!all/conn/or!and/order/nosort/ad/asc">modes of transportation</a>, and the establishment of a number of <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/schools%20--%20illinois%20--%20chicago/field/subjea/mode/exact/conn/and/order/title/ad/asc">schools</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/churches/field/subjea/mode/all/conn/and/order/title/ad/asc">churches</a> and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clubs/field/subjea/mode/all/conn/and/order/title/ad/asc">social clubs</a>. Notable local events include <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/Our%20Lady%20of%20Lourdes%20Church%20(Chicago%2C%20Ill.)!construction/field/subjec!subjea/mode/exact!all/conn/and!and/order/nosort/ad/asc">moving the Our Lady of Lourdes church building</a> across Ashland Avenue and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/ground%20breaking%20ceremonies/field/subjea/mode/exact/conn/and/order/nosort/ad/asc">breaking ground for the Conrad Sulzer Regional Library</a>.
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/archival_post/ravenswood-lake-view-community-collection/">Ravenswood-Lake View Community Collection finding aid</a></dt>
                        <dd>Descriptive inventory for the complete physical collection</dd>
                        <dt><a href="https://www.chipublib.org/chicago-newspapers-on-microfilm/">Chicago Newspapers</a></dt>
                        <dd>Online and microfilm</dd>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>External Resources</h4>
                    <dl>
                        <dt><a href="http://www.ravenswoodhistorical.com/">Ravenswood-Lake View Historical Association</a></dt>
                        <dd>Programs, publications and tours focusing on Chicago northside neighborhood history.</dd>
                        <dt><a href="http://www.edgewaterhistory.org/ehs/">Edgewater Historical Society</a></dt>
                        <dd>Exhibits, events and tours of the Edgewater neighborhood.</dd>
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