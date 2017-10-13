<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Remembering Harold Washington';
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
                <span>Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in the history of Chicago.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/73/default.jpg';
                        $IMAGE[Main][Text] = 'Mayor Washington addresses the International Circulation Managers Association';
                        $IMAGE[Main][Size] = '130%';
                        $IMAGE[Main][Align] = '80% 0';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/72/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Mayor Washington reads to Dominik Przekota';
                        $THUMBS[Thumb1][Size] = '300%';
                        $THUMBS[Thumb1][Align] = '0 20%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/64/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Mayor Washington at the KOCO groundbreaking ceremony';
                        $THUMBS[Thumb2][Size] = '';
                        $THUMBS[Thumb2][Align] = '52% 15%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/43/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Mayor Washington with Isaac Hayes';
                        $THUMBS[Thumb3][Size] = '150%';
                        $THUMBS[Thumb3][Align] = '40% 40%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Mayor Washington at the Bud Billiken Parade';
                        $THUMBS[Thumb4][Size] = '400%';
                        $THUMBS[Thumb4][Align] = '71% 30%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/rhwc/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
						Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Politics/field/subjed/mode/all/conn/and/order/nosort">politics</a> and the history of Chicago.
					</p>
					<p>
						Photographs in this collection capture Harold Washington’s work with <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Constituency%20groups/field/subjed/mode/all/conn/and/order/nosort">ethnic and constituency groups</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Famous%20persons/field/subjed/mode/all/conn/and/order/nosort">famous people</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Groundbreaking/field/subjed/mode/all/conn/and/order/nosort">groundbreaking and development projects</a>, and more.
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
						<dt><a href="https://www.chipublib.org/fa-brenetta-howell-barrett-papers/">Brenetta Howell Barrett Papers finding aid</a></dt>
						<dd>Barrett served in the mayoral administrations of Harold Washington and Eugene Sawyer. She was a political activist for housing, environmental and civil liberties issues.</dd>
						<dt><a href="https://www.chipublib.org/archival_subject/harold-washington/">Harold Washington Archives &amp; Collections</a></dt>
						<dd>A list of collections at Chicago Public Library with archival materials regarding Mayor Harold Washington</dd>
						<dd>
							<ul>
								<li>
									<a href="https://www.chipublib.org/fa-harold-washington-archives-and-collections-illinois-state-representative-records/">Illinois State Representative Records finding aid</a>
								</li>
                        		<li>
									<a href="https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-campaign-records/">Mayoral Campaign Records finding aid</a>
								</li>
								<li>
									<a href="https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-records-press-office-records/">Mayoral Records, Press Office Records finding aid</a>
								</li>
								<li>
									<a href="https://www.chipublib.org/fa-harold-washington-archives-and-collections-pre-mayoral-photograph-collection/">Pre-Mayoral Photograph Collection finding aid</a>
								</li>
							</ul>
						</dd>
                        <dt><a href="https://www.chipublib.org/blogs/post/welcome-to-the-municipal-reference-collection/">Municipal Reference Collection</a></dt>
                        <dd>Collections include local government publications, city election results, maps, municipal ordinances, and more.</dd>
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