<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Esther A. Barlow';
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
                <span>Esther Barlow was a children’s librarian in neighborhood branches of the Chicago Public Library from 1927 until 1976.</span>
                <div class="center-lightbox">
                    <?php 

                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/bar/52/default.jpg';
                        $IMAGE[Main][Text] = 'Lake View Branch, Group picture, staff on front steps';
                        $IMAGE[Main][Size] = '';
                        $IMAGE[Main][Align] = '55% 50%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/bar/199/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Hild Regional Library, Children&rsquo;s Department, Story Hour in Welles Park';
                        $THUMBS[Thumb1][Size] = '400px';
                        $THUMBS[Thumb1][Align] = '15% 20%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/bar/70/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Lake View Branch, Esther Barlow at circulation desk';
                        $THUMBS[Thumb2][Size] = '500px';
                        $THUMBS[Thumb2][Align] = '53% 49%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/bar/16/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Portrait of Esther Barlow and Buddy Flaskerud sitting in a wagon.';
                        $THUMBS[Thumb3][Size] = '400px';
                        $THUMBS[Thumb3][Align] = '33% 22%';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/examiner/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                    Included in this collection are photographs of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Barlow%20family/field/subjed/mode/all/conn/and/order/nosort">Barlow family</a> and images of Esther Barlow at work at the Hild Regional Library and Lake View Branch Library. Photographs showcase Barlow with her colleagues and her <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Working%20with%20children/field/subjed/mode/all/conn/and/order/nosort">work with children. </a> 
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