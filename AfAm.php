<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'African American';
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
                <!-- <span></span> -->
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/14/default.jpg';
                        $IMAGE[Main][Text] = 'Women&amp;s Army Corps (WAC) Band, 1944';
                        $IMAGE[Main][Size] = '';
                        $IMAGE[Main][Align] = '50% 40%';
                        
                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/4/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Women&rsquo;s reading group at Hall Branch, 1940';
                        $THUMBS[Thumb1][Size] = '150%';
                        $THUMBS[Thumb1][Align] = 'center';

                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/8/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Marian Campfield at the Chicago Defender, 1948';
                        $THUMBS[Thumb2][Size] = '140%';
                        $THUMBS[Thumb2][Align] = 'center';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Richard Durham, 1948';
                        $THUMBS[Thumb3][Size] = '150%';
                        $THUMBS[Thumb3][Align] = 'center';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Mayor Washington at the Bud Billiken Parade';
                        $THUMBS[Thumb4][Size] = '400%';
                        $THUMBS[Thumb4][Align] = '71% 30%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                <a href="http://digital.chipublib.org/digital/search/collection/cr!rhwc!p16818coll6/order/title/ad/asc" class="btn btn-primary">Browse All</a>
            </div>
            <div class="center-copy-paragraph">
                <p>Digital collections that include materials documenting Black history in the United States include:<p>
                <dl>
                    <dt><a href="ChiRen.php">Chicago Renaissance</a></dt>
                    <dd>Manuscripts and photographs documenting the creative movement that blossomed out of the Chicago Black Belt on the city's South Side from the 1930s until the 1950s.</dd>
                    <dt><a href="HaroldWashington.php">Remembering Harold Washington</a></dt>
                    <dd>A collection of photographs showcasing the work of Chicago’s first African American mayor.</dd>
                    <dt><a href="Sang.php">Phillip Sang</a></dt>
                    <dd>Materials on slavery and abolitionism; including original documents from slave owners, slave traders and insurance companies.</dd>
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