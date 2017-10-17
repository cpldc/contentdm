<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Chicago Parks';
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
                <span>Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.</span>
                <h1 style="padding-top: 20px;">Millennium Park</h1>
                <div class="center-lightbox">
                    <?php 

                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/1297/default.jpg';
                        $IMAGE[Main][Text] = 'Millennium Monument at Wrigley Square, peristyle in winter, ca. 2003';
                        $IMAGE[Main][Size] = '110%';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/1543/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Cloud Gate, attaching steel plates, omphalos, March 22, 2004';
                        $THUMBS[Thumb1][Size] = '140%';
                        $THUMBS[Thumb1][Align] = '40% 50%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4390/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Crown Fountain, gargoyle spray, July 22, 2004';
                        $THUMBS[Thumb2][Size] = '140%';
                        $THUMBS[Thumb2][Align] = '40% 60%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4781/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Jay Pritzker Pavilion, headdress, March 4, 2004';
                        $THUMBS[Thumb3][Size] = '160%';
                        $THUMBS[Thumb3][Align] = '70% 0';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4662/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Jay Pritzker Pavilion, structural steel for the headdress, May 29, 2003';
                        $THUMBS[Thumb4][Size] = '';
                        $THUMBS[Thumb4][Align] = 'center';
                        
                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/mpu/search" class="btn btn-primary">Browse All</a>
				</div>
				<div class="center-copy-paragraph">
					<p>
					Follow the construction of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/BP+Bridge/field/book/mode/exact/conn/and/order/origin">BP Pedestrian Bridge</a>, the first bridge designed by Frank Gehry; Anish Kapoor’s monumental public sculpture, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Cloud+Gate/field/book/mode/exact/conn/and/order/origin">Cloud Gate</a>, aka The Bean; the Gehry-designed <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Jay%20Pritzker%20Pavilion/field/book/mode/exact/conn/and/order/origin">Jay Pritzker Pavillion</a>, a soaring bandshell that hosts the U.S.’s last free outdoor classical music series; Jaume Plensa’s <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Crown%20Fountain/field/book/mode/exact/conn/and/order/origin">Crown Fountain</a>, a cascading interactive video sculpture. Take in sweeping views with <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Full%20Park/field/book/mode/all/conn/and/order/origin/page/1">full park images</a>.
					</p>
					<dl>
						<dt><a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/highlight/field/highli/mode/all/conn/and/order/origin">Collection Highlights</a></dt>
						<dd>Get a taste of how this transformation took place in a selected group of images.</dd>
					</dl>
				</div>
				<div class="center-copy-list">
					<h4>More CPL Resources</h4>
					<dl>
						<dt>Finding Aids:</dt>
						<dd>Learn about the construction of the park and the Chicago-based company that made it possible.</dd>
						<dd>
							<ul>
								<li>
									<a href="https://www.chipublib.org/fa-millennium-park-inc/">Millennium Park, Inc. Archives finding aid</a>
								</li>
								<li>
									<a href="https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/">Millennium Park / U.S. Equities Realty Collection finding aid</a>
								</li>
							</ul>
						</dd>
						<dt><a href="https://www.chipublib.org/?post_type=post&s=Millennium+Park">Millennium Park blog posts </dt>
						<dd>by CPL librarians</dd>
					</dl>
				</div>
				<div class="content-card-paragraph">
					<span class="rights">The Millennium Park Digital Collection was made possible by generous gifts from U.S. Equities Realty and the Gaylord and Dorothy Donnelley Foundation through the Chicago Public Library Foundation.</span>
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