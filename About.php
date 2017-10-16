<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$PAGE_TITLE = 'About CPL Digital Collections';
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
                    <div class="col-12 lightbox-main-img-div">
                        <a href="http://digital.chipublib.org/digital/collection/mpu/id/2232/rec/1" title="Cloud Gate, assembly complete, view from above, July 16, 2004" alt="Cloud Gate, assembly complete, view from above, July 16, 2004">
                            <img style="background: url(http://digital.chipublib.org/digital/api/singleitem/image/mpu/2232/default.jpg); background-size: 120%; background-position: 0px 60%;"  class="content-main-img">
                        </a>
                    </div>
                </div>
                <div class="center-copy-paragraph">
                    <p>
                        Chicago Public Library’s digital program strengthens communities and sparks passion about the city by expanding access to our unique resources and special collections. We support community-based and scholarly research, document Chicago’s life and neighborhoods, and provide primary sources to tell our stories. Our digital collections showcase thousands of archival images, documents and artifacts.
                    </p>
                    <p>
                        Our digital collections come from CPL’s special collections:
                    </p>
                    <dl>
                        <dt><a href="https://www.chipublib.org/blogs/post/welcome-to-the-municipal-reference-collection/">Municipal Reference Collection</a></dt>
                        <dd>at Harold Washington Library Center</dd>
                        <dt><a href="https://www.chipublib.org/northside-neighborhood-history-collection/">Northside Neighborhood History Collection</a></dt>
                        <dd>at Sulzer Regional Library</dd>
                        <dt><a href="https://www.chipublib.org/special-collections/">Special Collections</a></dt>
                        <dd>at Harold Washington Library Center</dd>
                        <dt><a href="https://www.chipublib.org/vivian-g-harsh-research-collection/">Vivian G. Harsh Research Collection of Afro-American History and Literature</a></dt>
                        <dd>at Woodson Regional Library</dd>
                    </dl>
                    <p></p>
                    <p></p>
                </div>
                <div class="center-copy-list">
                    <h4>Related Resources</h4>
                    <dl>
                        <dt><a href="http://www.chipublib.org/chicago-history/">Chicago History</a></dt>
                        <dd>Events, reading recommendations, online resources and History Fair resources</dd>
                        <dt><a href="https://www.chipublib.org/archives-collections/">Archival Collections</a></dt>
                        <dd>A list of CPL collections and finding aids</dd>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>Contact Us</h4>
                    <dl>
                        <dd class="about-contact">Questions or comments about the materials on this site, archival reproductions or Chicago history research? Email Special Collections at <a href="mailto:specoll@chipublib.org">specoll@chipublib.org</a></dd>
                        <dd class="about-contact">Questions or comments about this website? Email <a href="mailto:webmaster@chipublib.org">webmaster@chipublib.org</a></dd>
                    </dl>
                    <h4>Order a Photo Reproduction</h4>
                    <dl>
                        <dt><a href="https://www.chipublib.org/wp-content/uploads/sites/3/2013/10/photo-reproduction-form.pdf">Photo Reproduction Order Form</a></dt>
                        <dd class="about-contact">We offer photo reproductions from our <a href="https://www.chipublib.org/archives-collections/">archival collections </a> and <a href="http://digital.chipublib.org/digital">digital collections.<a></dd>
                    </dl>
                    <h4>Copyright</h4>
                    <dl>
                        <dd class="about-contact">Usage, transmission, downloading or reproduction of protected items beyond that allowed by Fair Use Copyright Law requires the written permission of the copyright owners. Copyright or other information about restrictions may be difficult or even impossible to determine. When possible, CPL provides information about copyright owners and restrictions concerning its collections.</dd>
                        <dd class="about-contact">Determining the existence of copyright or any other legal restrictions, as well as obtaining permission from the copyright holder, is solely the responsibility of the user/patron</dd>
                        <dd class="about-contact"><a href="http://rightsstatements.org/page/1.0/?language=en">RightsStatements.org website</a>/dd>
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