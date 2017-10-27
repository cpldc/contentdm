<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include 'variables.php';
	$PAGE = $cards[HDG];
	$PAGE_TITLE = $cards[HDG][title];
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
                <h1><?php echo $PAGE[title]; ?></h1>
                <span><?php echo $PAGE[textlong]; ?></span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

						?>
						<div class="container-fluid lightbox imageGallery1">
						<div class="row">
							<div class="col-12 lightbox-main-img-div"><a href="<?php echo $PAGE[mainimage][url]; ?>" title="<?php echo $PAGE[mainimage][text]; ?>"><img style="background: url(<?php echo $PAGE[mainimage][url]; ?>); background-size: <?php echo $PAGE[mainimage][size]; ?>; background-position: <?php echo $PAGE[mainimage][align]; ?> !important;"  class="lightbox-main-img"></a></div>
						</div>
						<div class="row lightbox-thumbs justify-content-center">
						<?php 
							foreach ($PAGE[thumbs] as $key => $val) {
								echo '<div class="col-3 lightbox-thumb-wrapper"><a href="' . $val[url] . '" title="' . $val[text] . '"><img style="background: url(' . $val[url] . '); background-size: ' . $val[size] . '; background-position: ' . $val[align] . '!important;" class="lightbox-thumb" /></a></div>';
							}
						?>
						</div>
					</div>
					<script>
						$('.imageGallery1 a').simpleLightbox();
					</script>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/<?php echo $PAGE[coll] ?>/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                    <?php echo $PAGE[textrich] ?>
                    </p>
                </div>
				<div class="center-copy-list">
					<h4>Finding Aid</h4>
					<dl>
						<dt><a href="<?php echo $PAGE[findingaidlink] ?>"><?php echo $PAGE[findingaidtext] ?></a></dt>
						<dd>Descriptive inventory for the complete physical collection.</dd>
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