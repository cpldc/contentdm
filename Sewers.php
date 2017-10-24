<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
	$PAGE_TITLE = $cards[Sewers][title];
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
                <span>The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historic images features construction photographs of sewers and tunnels.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/167/default.jpg';
                        $IMAGE[Main][Text] = '103rd Street and Rockwell Street, inspecting tile, June 1936';
                        $IMAGE[Main][Size] = '';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/150/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Magnolia Avenue sewer system, August 11, 1933';
                        $THUMBS[Thumb1][Size] = '400%';
                        $THUMBS[Thumb1][Align] = '61% 37%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/142/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Broadway Street, 9 foot sewer in Rokeby Street [now Fremont Street], August 24, 1927';
                        $THUMBS[Thumb2][Size] = '250%';
                        $THUMBS[Thumb2][Align] = '30% 50%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/144/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Bryn Mawr Avenue, bricklayers, north heading, July 9, 1930';
                        $THUMBS[Thumb3][Size] = '250%';
                        $THUMBS[Thumb3][Align] = '0 50%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/155/default.jpg';
                        $THUMBS[Thumb4][Text] = '103rd Street and Rockwell Street, Pipe Yard, watering pipe, June 16, 1936';
                        $THUMBS[Thumb4][Size] = '250%';
                        $THUMBS[Thumb4][Align] = '40% 35%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/dtd/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        In 1955, Boston engineer Ellis S. Chesbrough was invited to Chicago to design the first comprehensive system of underground sewers in the United States. His work lifted the city to make room for the new sewers with became the most extensive in the world. In the more than 150 years since Chicago’s Department of Water Management continues to service and maintain this underground system.  
                    </p>
                    <p>
                        Take a look at these wonders in images from the 1920s-1960s as you start  <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Above+ground/field/contri/mode/all/conn/and/order/nosort">above ground</a> and work your way below the surface along <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Avenue+J/field/subjec/mode/all/conn/and/order/nosort">Avenue J</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/California+Avenue/field/subjec/mode/all/conn/and/order/nosort">California</a> and <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Elston+Avenue/field/subjec/mode/all/conn/and/order/nosort">Elston</a> Avenues among others. 
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/fa-chicago-sewers-collection/">Chicago Sewers Collection finding aid</a></dt>
                        <dd>The complete list of photographs, glass plate slides and documents, rich with geographic and technical details.</dd>
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