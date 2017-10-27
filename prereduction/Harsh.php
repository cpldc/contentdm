<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php 
    include 'variables.php';
    $PAGE = $cards[Harsh];
	$PAGE_TYPE = 'content';
?>
<meta charset="UTF-8">
<title> <?php echo $PAGE[title] ?> | Digital Collections | Chicago Public Library</title>
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
                <span><p>The largest African American history and literature collection in the Midwest, the Vivian G. Harsh Research Collection of Afro-American History and Literature documents the black experience with a strong focus on Chicago.</p>
                <div class="center-lightbox">
                    <?php 

                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'ASNLH.jpg';
                        $IMAGE[Main][Text] = 'Committee in charge of the celebration of the twentieth anniversary of the Association for the Study of Negro Life and History, 1936';
                        $IMAGE[Main][Size] = 'auto 125%';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/18/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Congressman William L. Dawson campaigning, 1940s';
                        $THUMBS[Thumb1][Size] = '200%';
                        $THUMBS[Thumb1][Align] = '50% 10%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/21/default.jpg';
                        $THUMBS[Thumb2][Text] = '"The War&rsquo;s Greatest Scandal," 1943';
                        $THUMBS[Thumb2][Size] = 'cover';
                        $THUMBS[Thumb2][Align] = '50% 50%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/2/default.jpg';
                        $THUMBS[Thumb3][Text] = '"Self-portrait" by Gordon Parks, 1941';
                        $THUMBS[Thumb3][Size] = 'cover';
                        $THUMBS[Thumb3][Align] = '50% 50%';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/search/collection/<?php echo $PAGE[coll] ?>/order/title/ad/asc" class="btn btn-primary">Browse All</a>
				</div>
				<div class="center-copy-list" style="margin-top: 20px; border-top: none">
					<h4>Digital Collections</h4>
					<dl>
					<?php 
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ($val[location] == 'Harsh'){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
					?>
					</dl>
				</div>
				<div class="center-copy-list">
					<dl class="contact-list">
						<dt class="contact-list-item" style="padding-bottom: 7px">Contact this collection: </dt>
						<dd class="contact-list-item">Location: <a href="https://www.chipublib.org/locations/81/">Carter G. Woodson Regional Library</a></dd>
						<dd class="contact-list-item">Email: harshcollection@chipublib.org</dd>
						<dd class="contact-list-item">Call: (312) 745-2080</dd>
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