<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Henry D. Green';
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
                <span>Chicago Public Library’s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago’s North Side.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/531/default.jpg';
                        $IMAGE[Main][Text] = 'Senn High School';
                        $IMAGE[Main][Size] = '110%';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/174/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Girl Scouts Troup 119 Tin Can Salvage';
                        $THUMBS[Thumb1][Size] = '130%';
                        $THUMBS[Thumb1][Align] = '40% 25%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/669/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Monadnock Coffee Shop';
                        $THUMBS[Thumb2][Size] = '';
                        $THUMBS[Thumb2][Align] = '47% 57%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/345/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Portrait of Henry Delorval Green';
                        $THUMBS[Thumb3][Size] = '120%';
                        $THUMBS[Thumb3][Align] = '45% 27%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Chicago Fire Department';
                        $THUMBS[Thumb4][Size] = '130%';
                        $THUMBS[Thumb4][Align] = 'center';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/hdg/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                    Subjects in the collection include local <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Business%20establishments/field/subjed/mode/all/conn/and/order/nosort">business establishments</a>, community groups, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Religious%20institutions/field/subjed/mode/all/conn/and/order/nosort">religious institutions</a>, celebrations in neighborhood parks and events at local schools. Many photographs reflect life on the North Side during World War II, including images of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Military%20personnel/field/subjed/mode/all/conn/and/order/nosort">military personnel</a>. 
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