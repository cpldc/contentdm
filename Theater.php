<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Theater';
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
                <span>Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6053/default.jpg';
                        $IMAGE[Main][Text] = 'McVicker&rsquo;s Theatre, Camille (January 13, 1881)';
                        $IMAGE[Main][Size] = '134%';
                        $IMAGE[Main][Align] = '52% 15%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/8601/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Chicago Little Theatre, Evening with Columbine (October 21, 1913)';
                        $THUMBS[Thumb1][Size] = '200%';
                        $THUMBS[Thumb1][Align] = '50% 85%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6272/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Iroquois Theatre, Blue Beard (December 21, 1903)';
                        $THUMBS[Thumb2][Size] = '110%';
                        $THUMBS[Thumb2][Align] = '50% 30%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6748/default.jpg';
                        $THUMBS[Thumb3][Text] = 'McVicker&rsquo;s Theatre, Rivals (May 15, 1896)';
                        $THUMBS[Thumb3][Size] = '140%';
                        $THUMBS[Thumb3][Align] = '50% 40%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/9755/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Chicago Opera House, Mikado (March 6, 1886)';
                        $THUMBS[Thumb4][Size] = '200%';
                        $THUMBS[Thumb4][Align] = '68% 47%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/CPB01/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        Become a playgoer at Chicago's great early theaters. Examine more than 2,000 playbills and programs dating from 1848 to 1922. Of special interest are playbills from shows starring <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Booth%2C%20Edwin%2C%201833-1893/field/contri/mode/all/conn/and/order/title/ad/asc">Edwin Booth</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Jefferson%2C%20Joseph%2C%201829-1905/field/contri/mode/all/conn/and/order/title/ad/asc">Joseph Jefferson</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Bernhardt%2C%20Sarah%2C%201844-1923/field/contri/mode/all/conn/and/order/title/ad/asc">Sarah Bernhardt</a> at the well-known <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/mcvicker's/field/theata/mode/all/conn/and/order/title/ad/asc">McVicker's Theatre</a> as well as playbills from vaudeville houses and neighborhood theaters.
                    </p>
                    <p>
                        Alongside straight plays and musical works, numerous genres are represented in the collection, including <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/extravaganzas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">extravaganzas</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/juggling%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">juggling</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/operettas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">operettas</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/tragedies%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">tragedies</a>, among others.
                    </p>
                    <p>
                        The Historic Programs digital collection is made possible by a generous grant from the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.
                    </p>
                </div>
                <div class="center-copy-list">
                    <h4>Collection Highlights</h4>
                    <dl>
                        <dt><a href="http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/">Chicago Theater Collection-Historic Playbills</a></dt>
                        <dd>Programs, playbills and newspaper clippings from more than 5,000 productions at Chicago’s historic theaters dating back to the 1840s.</dd>
                        <dt><a href="http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc">E.B. Gould Programs Collection</a></dt>
                        <dd>The annotated programs of a local Chicago businessman and enthusiastic playgoer.</dd>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>External Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/fa-chicago-theater-collection-historic-programs/">Chicago Theater Collection-Historic Programs finding aid</a></dt>
                        <dd>The complete and ever-increasing inventory of theater programs past and present, some of which are presented here.</dd>
                        <dt><a href="https://www.chipublib.org/archival_subject/theater/">Chicago Theater Collection</a></dt>
                        <dd>A list of theater collections at Chicago Public Library representing theaters, designers, actors and more.</dd>
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