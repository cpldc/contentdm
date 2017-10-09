<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Chicago Examiner';
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
                <span>Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGES = array ();

                        $IMAGES[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/476/default.jpg';
                        $IMAGES[Main][Text] = 'Chicago Examiner Vol. 7 no. 27';
                        $IMAGES[Main][Size] = '109%';
                        $IMAGES[Main][Align] = '50% -17px';

                        $IMAGES[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/51184/default.jpg';
                        $IMAGES[Thumb1][Text] = 'Chicago Examiner Vol. 13 no. 187';
                        $IMAGES[Thumb1][Size] = '110px auto';
                        $IMAGES[Thumb1][Align] = 'center';
                        
                        $IMAGES[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/12357/default.jpg';
                        $IMAGES[Thumb2][Text] = 'Chicago Examiner Vol. 6 no. 253';
                        $IMAGES[Thumb2][Size] = '500px auto';
                        $IMAGES[Thumb2][Align] = '10% 10%';

                        $IMAGES[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/51163/default.jpg';
                        $IMAGES[Thumb3][Text] = 'Chicago Examiner Vol. 13 no. 186';
                        $IMAGES[Thumb3][Size] = '350px auto';
                        $IMAGES[Thumb3][Align] = '90% 60%';
                        
                        $IMAGES[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/93129/default.jpg';
                        $IMAGES[Thumb4][Text] = 'Chicago Examiner Vol. 12 no. 63';
                        $IMAGES[Thumb4][Size] = '875px auto';
                        $IMAGES[Thumb4][Align] = '16% 27%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/examiner/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>The Chicago Public Library’s 10-year run of the Examiner, while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available. It is a quintessential example of yellow journalism.
                    </p><p>
                    Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> the deadliest U.S. building collapse in terms of firefighter deaths until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos, and illustrations; big early 19th century <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a>
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>Collection Highlights</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/chicago-newspapers-on-microfilm/">Chicago Newspapers</a></dt>
                        <dd>Online and microfilm</dd>
                        <dt><a href="https://www.chipublib.org/?post_type=post&s=newspapers">Newspaper blog posts</a></dt>
                        <dd>by CPL librarians</dd>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>External Resources</h4>
                    <dl>
                        <dt><a href="http://chroniclingamerica.loc.gov/">Library of Congress Chronicling America: Historic American Newspapers</a></dt>
                        <dd>For more historic newspapers.
                        <dt><a href="http://idnc.library.illinois.edu/">Illinois Digital Newspaper Collections</a></dt>
                        <dd>For more Illinois newspapers.
                    </dl>
                </div>
			</div>
		<!-- right sidebar -->
			<div class="hidden-md-down col-lg-3 right-sidebar">
				<div class="right-sidebar">
					<div class="blogs">
						<?php
							// include 'blogs.php';
						?>
					</div>
					<div class="events">
						<?php 
							// include 'events.php';
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