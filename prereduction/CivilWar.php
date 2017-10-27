<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'Civil War';
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
                <h1>Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections</h1>
                <span>Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/634/default.jpg';
                        $IMAGE[Main][Text] = 'Photographic Views of Sherman&rsquo;s Campaign by George N. Barnard';
                        $IMAGE[Main][Size] = 'auto 575px';
                        $IMAGE[Main][Align] = 'center';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/116/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Sword, Model 1850 Staff and Field Officer';
                        $THUMBS[Thumb1][Size] = 'auto 120px';
                        $THUMBS[Thumb1][Align] = 'center';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/721/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Uniform, artillery jacket';
                        $THUMBS[Thumb2][Size] = 'auto 120px';
                        $THUMBS[Thumb2][Align] = '50% 15%';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/35/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Grant, Ulysses S.';
                        $THUMBS[Thumb3][Size] = '120px auto';
                        $THUMBS[Thumb3][Align] = '50% 20%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/38/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Union Ticket';
                        $THUMBS[Thumb4][Size] = '110px auto';
                        $THUMBS[Thumb4][Align] = '55% 15%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/wha/search" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        Illinois supported the Union effort by sending hundreds of thousands of troops into battle, but the Civil War was also fought on the homefront. 
                    </p>
                    <p>
                        Examine artifacts and photographs from both arenas, with a focus on the Illinois experience. Highlights include <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/camp+life/field/subjeb/mode/all/conn/and/order/title/ad/asc">camp life</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/small+arms/field/all/mode/exact/conn/and/order/nosort/ad/asc">swords</a> and <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/clothing/field/all/mode/exact/conn/and/order/nosort/ad/asc">uniforms</a>. 
                    </p>
                    <p>
                        The Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections is made possible by generous gifts to <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a> by the partners of Skadden, Arps, Slate, Meagher &amp; Flom LLP in honor of Wayne Whalen’s interest in Abraham Lincoln and the Civil War.
                    </p> 
                </div>
                <div class="center-copy-list">
                    <h4>External Resources</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/">American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collections finding aid</a></dt>
                        <dd>A large portion of this collection focuses on the experience of soldiers and leaders from Illinois.</dd>
                        <dt><a href="https://www.chipublib.org/archival_subject/military/">Military Archival Collections</a></dt>
                        <dd>A list of all archival collections related to the Civil War and other military topics, including records of the Daughters of Union Veterans of the Civil War, 1861-1865, and personal collections of service members. 
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