<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Millennium Park | Digital Collections | Chicago Public Library</title>
	    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
		<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
		<link rel="stylesheet" href="cpldc.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="cpldc.js" ></script>
</head>
<body>
<?php 
	include 'header.html';
?>
<div class="body-full-f">
	<?php
		include 'sidebar-nav-fixed.html';
	?>
	<div class="main-content-f">
		<input type="checkbox" id="toggle-mrc" checked>
			<label for="toggle-mrc">
				<h2 class="main-content-f-title">
					Millennium Park Construction Collection
				</h2>
			</label>
		</input>
		<article id="expand-mrc" class="mrc-copy">
			<span>Watch the site transform from an industrial wasteland to a new urban park of world renown.</span>
			<div class="location-card">
				<img src="http://digital.chipublib.org/digital/api/singleitem/image/mpu/6324/default.jpg" />
				<figcaption>
					Full Park, construction, April 20, 2004
				</figcaption>
			</div>
			<span>More Millennium Park copy.</span>
			<div class="location-card">
				<img src="http://digital.chipublib.org/digital/api/singleitem/image/mpu/1510/default.jpg" />
				<figcaption>
					Cloud Gate, assembly in Chicago, structural steel, ca. March 3, 2004
				</figcaption>
			</div>
			<div class="browse-section">
				<button class="browse-collection-button" onclick="javascript:location.href='https://chipublib.bibliocommons.com/events/search/index'">
					Browse the complete collection
				</button>
				<div class="browse-filteredlinks">
					<p>
						<a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/highlight/field/highli/mode/all/conn/and/order/origin">
							Collection highlights
						</a>
						<br />
						<span class="browse-link-caption">
							Get a taste of how this transformation took place in a selected group of images.
						</span>
					</p>
					<p>
						<a href="http://chicago.bibliocms.com/fa-millennium-park-u-s-equities-realty-collection/">
							Millennium Park / U.S. Equities Realty Collection finding aid
						</a>
						<br />
						<span class="browse-link-caption">
							Learn about the construction of the park and the Chicago-based company that made it possible.
						</span>
					</p>
				</div>
			</div>
					<p>
						<span class="rights">
							The Millennium Park Digital Collection was made possible by generous gifts from U.S. Equities Realty and the Gaylord and Dorothy Donnelley Foundation through the Chicago Public Library Foundation.
						</span>
					</p>
		</article>
	</div>
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
<?php 
	include 'footer.html';
?>
</body>
</html>