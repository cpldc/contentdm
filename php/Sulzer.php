<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Northside Neighborhoods History Collection | Digital Collections | Chicago Public Library</title>
	    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
		<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
		<link rel="stylesheet" href="cpldc.css">
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
		<input type="checkbox" id="toggle-nnhc" checked>
			<label for="toggle-nnhc">
				<h2 class="main-content-title">
					Northside Neighborhoods History Collection
				</h2>
			</label>
		</input>
		<article id="expand-nnhc" class="nnhc-copy">
			<span> The collection highlights historical and contemporary materials about Northside neighborhoods. Visit us on the 3rd floor of Sulzer Regional Library!</span>
			<div class="image-gallery">
				<img src="http://digital.chipublib.org/digital/api/singleitem/image/cfc/103/default.jpg">
				<figcaption>
					Paulina Avenue between Belle Plaine and Berteau. Street view shows unpaved road, wooden sidewalks, fences, and houses.
				</figcaption>
				<div class="image-gallery-thumbs"><img src="http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg" alt="Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social"></div>
				<div class="image-gallery-thumbs"><img src="http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg" alt="Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social"></div>
				<div class="image-gallery-thumbs"><img src="http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg" alt="Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social"></div>
				<div class="image-gallery-thumbs"><img src="http://digital.chipublib.org/digital/api/singleitem/image/cfc/79/default.jpg" alt="Board of Directors of the Ravenswood Manor Improvement Association rehearsing for the Winter Social"></div>
			</div>
			<dl class="contact-list">
				<dt class="contact-list-item">Contact this collection: </dt>
					<dd class="contact-list-item">Address: Sulzer Regional Library, 4455 N. Lincoln Avenue, Chicago IL 60625</dd>
					<dd class="contact-list-item">Hours: Tuesday, 2 to 5 p.m. Additional hours by appointment</dd>
					<dd class="contact-list-item">Email: northsidehistory@chipublib.org</dd>
					<dd class="contact-list-item">Call: (312) 742-4455</dd>

			</dl>
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
	<script>
		function showDropdown() {
			document.getElementById("show-dropdown").classList.toggle("show");
		}
		window.onclick = function(e) {
			if (!e.target.matches('.header-browse-button')) {
				var myDropdown = document.getElementById("show-dropdown");
				if (myDropdown.classList.contains('show')) {
						myDropdown.classList.remove('show');
				}
			}
		}
		function searchExpander() {
            if (document.getElementById('search-collapsed')) {

                if (document.getElementById('search-collapsed').style.display == 'none') {
	                    document.getElementById('search-collapsed').style.display = 'block';
	                    document.getElementById('search-expanded').style.display = 'none';
                }
                else {
                    document.getElementById('search-collapsed').style.display = 'none';
                    document.getElementById('search-expanded').style.display = 'block';
                }
            }
		}
	</script>
</body>
</html>