<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
	$PAGE_TITLE = $cards[RK][title];
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
                <span>In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/414/default.jpg';
                        $IMAGE[Main][Text] = '47th and 48th Ward clean-up on Clark Street';
                        $IMAGE[Main][Size] = '150%';
                        $IMAGE[Main][Align] = '50% 30%';
                        
                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/412/default.jpg';
                        $THUMBS[Thumb1][Text] = 'German-American Festival';
                        $THUMBS[Thumb1][Size] = '300%';
                        $THUMBS[Thumb1][Align] = '50% 35%';

                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/349/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Picasso statue unveiled at the Civic Center Plaza';
                        $THUMBS[Thumb2][Size] = '120%';
                        $THUMBS[Thumb2][Align] = 'center';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/828/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Henry C. Krueger with future wife Marie Wahl, her sister Lydia Wahl, and a friend';
                        $THUMBS[Thumb3][Size] = '200%';
                        $THUMBS[Thumb3][Align] = '50% 25%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg';
                        $THUMBS[Thumb4][Text] = '1720-22 West Leland Avenue';
                        $THUMBS[Thumb4][Size] = '140%';
                        $THUMBS[Thumb4][Align] = 'center';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/rwk/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                    Krueger photographed hundreds of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Restaurants/field/subjed/mode/all/conn/and/order/nosort">restaurants</a>, street scenes, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Parks/field/genre/mode/all/conn/and/order/nosort">parks</a>, businesses, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Schools/field/genre/mode/all/conn/and/order/nosort">schools</a>, houses,  <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Cemeteries/field/genre/mode/all/conn/and/order/nosort">cemeteries</a>, religious institutions, community events and residents of North Side neighborhoods. These photographs are a sample of his work.  
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/archival_post/robert-w-krueger-photograph-collection/">Robert W. Krueger Photograph Collection finding aid</a></dt>
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