<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
	$PAGE_TITLE = $cards[CPL][title];
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
                <!-- <span></span> -->
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = '';
                        $IMAGE[Main][Text] = '';
                        $IMAGE[Main][Size] = '150%';
                        $IMAGE[Main][Align] = '78% 5%';

                        $THUMBS[Thumb1][Url] = '';
                        $THUMBS[Thumb1][Text] = '';
                        $THUMBS[Thumb1][Size] = '110px auto';
                        $THUMBS[Thumb1][Align] = 'center';
                        
                        $THUMBS[Thumb2][Url] = '';
                        $THUMBS[Thumb2][Text] = '';
                        $THUMBS[Thumb2][Size] = '500px auto';
                        $THUMBS[Thumb2][Align] = '10% 10%';

                        $THUMBS[Thumb3][Url] = '';
                        $THUMBS[Thumb3][Text] = '';
                        $THUMBS[Thumb3][Size] = '350px auto';
                        $THUMBS[Thumb3][Align] = '90% 60%';
                        
                        $THUMBS[Thumb4][Url] = '';
                        $THUMBS[Thumb4][Text] = '';
                        $THUMBS[Thumb4][Size] = '200px';
                        $THUMBS[Thumb4][Align] = '25% 10%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/woop/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        On January 1, 1873, Chicago Public Library opened its doors in a <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a> at the southeast corner of LaSalle and Adams streets that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to a system of 80 locations across the city. 
                    </p>
                    <p>
                        Explore CPL through those years, from <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Delivery+stations/field/subjed/mode/all/conn/and/order/nosort">delivery stations</a> in the late 19th century to <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Bookmobiles/field/subjed/mode/all/conn/and/order/nosort">bookmobiles</a> in the mid-20th century to <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Working%20with%20children!Hild%20Regional%20Library/field/subjed!all/mode/all!all/conn/and!and/order/nosort/ad/asc">Hild Regional Library</a> in the 1970s. 
                    </p>
                </div>
                <!-- <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href=""></a></dt>
                        <dd></dd>
                        <dt><a href=""></a></dt>
                        <dd></dd>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>External Resources</h4>
                    <dl>
                        <dt><a href=""></a></dt>
                        <dd>.</dd>
                        <dt><a href=""></a></dt>
                        <dd></dd>
                    </dl>
                </div> -->
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