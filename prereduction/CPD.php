<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Chicago Park District Records: Photographs';
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
                <p><span>Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.</span></p>
                <p><span>Chicago's earliest parks were created between the 1830s and 1860s. In 1869, three major organizations were formed for the creation, maintenance and governance of Chicago's parks: the Lincoln Park Commission, the West Chicago Park Commission and the South Park Commission. By 1934, 22 independent park commissions existed, and in that year, they consolidated into the Chicago Park District.</span></p>
                <div class="center-lightbox">
                    <div class="col-12 lightbox-main-img-div">
                        <a href="http://digital.chipublib.org/digital/collection/ChicagoParks/id/1501/rec/11" title="Cloud Gate, assembly complete, view from above, July 16, 2004" alt="Cloud Gate, assembly complete, view from above, July 16, 2004">
                            <img src="http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/1501/default.jpg" style="width: 100%; height: 100%"  class="content-main-img">
                        </a>
                    </div>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/ChicagoParks/search" class="btn btn-primary">Browse All</a>
				</div>
                <div class="center-copy-paragraph">
                    <p>
                    Representing over 500 parks from the late nineteenth century to the present, these photographs document site development, park facilities, features (such as gardens, fountains, playgrounds and sculptures), park staff, programmatic activities, special events, the lakeshore and shore protection efforts and road construction and re-development. </p>
                    <p>Photographs of people engaged in activities and events also appear in great numbers. The photographs show how the demographics and populations served by the city’s parks have changed over time. They also document the history of and changes in American leisure activities and the use of public spaces.
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/fa-chicago-park-district-records-photographs/">Chicago Park District Records: Photographs finding aid</a></dt>
                        <dd>Descriptive inventory for the complete physical collection</dd>
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