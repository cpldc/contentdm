<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Neighborhoods';
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
			<div class="col-8 col-lg-6 center-content">
                <h1><?php echo $PAGE_TITLE; ?></h1>
                <!-- <span>Chicago Public Library’s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago’s North Side.</span> -->
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/107/default.jpg';
                        $IMAGE[Main][Text] = 'Ravenswood Manor Improvement Association&rsquo;s Cleanup Campaign';
                        $IMAGE[Main][Size] = '';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1239/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Picasso statue unveiled at the Civic Center Plaza';
                        $THUMBS[Thumb1][Size] = '';
                        $THUMBS[Thumb1][Align] = 'center';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/782/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Oz Park';
                        $THUMBS[Thumb2][Size] = '';
                        $THUMBS[Thumb2][Align] = 'center';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg?highlightTerms=';
                        $THUMBS[Thumb3][Text] = '31st Street and Albany Avenue, repairing old brick outfall, July 20, 1936';
                        $THUMBS[Thumb3][Size] = '';
                        $THUMBS[Thumb3][Align] = 'center';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/hdg/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                    Connect with the residents of Chicago and their stories through these fascinating photographs dating from the 1860s through the 1990s.  This collection documents how Chicagoans lived their daily lives and how their neighborhoods changed and evolved over time.  Go back to <a href="http://digital.chipublib.org/cdm/search/searchterm/schools/field/subjec/mode/all/conn/and/order/nosort">school</a>, revisit favorite <a href="http://digital.chipublib.org/cdm/search/searchterm/restaurants%20--%20illinois%20--%20chicago/field/subjec/mode/all/conn/and/order/title/ad/asc">restaurants</a>, salute <a href="http://digital.chipublib.org/cdm/search/searchterm/military/field/subjec/mode/all/conn/and/order/nosort">members of the military</a>, or just <a href="http://digital.chipublib.org/cdm/search/searchterm/transportation/field/subjec/mode/all/conn/and/order/nosort">ride around the city</a>.  Every neighborhood tells a story!
                    </p>
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