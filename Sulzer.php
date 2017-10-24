<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include 'variables.php';
	$PAGE_TITLE = $cards[NNHC][title];
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
                <span><p>The Sulzer Regional Library is the home of several collections centered around the history and culture of the Chicago's North Side.</p>
                <div class="center-lightbox">
                    <?php 

                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/103/default.jpg';
                        $IMAGE[Main][Text] = 'Paulina Avenue between Belle Plaine and Berteau. Street view shows unpaved road, wooden sidewalks, fences, and houses.';
                        $IMAGE[Main][Size] = '515px';
                        $IMAGE[Main][Align] = '50% 50%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social';
                        $THUMBS[Thumb1][Size] = '515px';
                        $THUMBS[Thumb1][Align] = '50% 45%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social';
                        $THUMBS[Thumb2][Size] = '515px';
                        $THUMBS[Thumb2][Align] = '50% 45%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social';
                        $THUMBS[Thumb3][Size] = '515px';
                        $THUMBS[Thumb3][Align] = '50% 45%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social';
                        $THUMBS[Thumb4][Size] = '515px';
                        $THUMBS[Thumb4][Align] = '50% 45%';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/mpu/search" class="btn btn-primary">Browse All</a>
				</div>
				<div class="center-copy-list" style="margin-top: 20px; border-top: none">
					<h4>Digital Collections</h4>
					<dl>
					<?php 
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ($val[location] == 'NNHC'){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
					?>
					</dl>
				</div>
				<div class="center-copy-list">
					<dl class="contact-list">
						<dt class="contact-list-item">Contact this collection: </dt>
						<dd class="contact-list-item">Address: Sulzer Regional Library, 4455 N. Lincoln Avenue, Chicago IL 60625</dd>
						<dd class="contact-list-item">Hours: Tuesday, 2 to 5 p.m. Additional hours by appointment</dd>
						<dd class="contact-list-item">Email: northsidehistory@chipublib.org</dd>
						<dd class="contact-list-item">Call: (312) 742-4455</dd>
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