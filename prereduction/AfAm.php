<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
    $PAGE = $cards[AfAm];
	$PAGE_TYPE = 'content';
?>
	<meta charset="UTF-8">
	<title> <?php echo $PAGE[title] ?> | Digital Collections | Chicago Public Library</title>
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
                <h1><?php echo $PAGE[title]; ?></h1>
                <span>Explore Chicago Public Library’s digital collections of African American history. Collections include documents spanning almost 200 years; from the 1790s to 1980s.</span>
                <div class="center-lightbox">
                    <?php 
                        $IMAGE = array ();
                        $THUMBS = array ();

                        $IMAGE[Main][Url] = 'hall033.jpg';
                        $IMAGE[Main][Text] = 'Women&rsquo;s reading group at Hall Branch, 1940';
                        $IMAGE[Main][Size] = '100%';
                        $IMAGE[Main][Align] = '50% 0%';

                        $THUMBS[Thumb1][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/14/default.jpg';
                        $THUMBS[Thumb1][Text] = 'Women&rsquo;s Army Corps (WAC) Band, 1944';
                        $THUMBS[Thumb1][Size] = '431px';
                        $THUMBS[Thumb1][Align] = '0% 20%';
                        
                        $THUMBS[Thumb2][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/8/default.jpg';
                        $THUMBS[Thumb2][Text] = 'Marian Campfield at the Chicago Defender, 1948';
                        $THUMBS[Thumb2][Size] = '140%';
                        $THUMBS[Thumb2][Align] = 'center';

                        $THUMBS[Thumb3][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/0/default.jpg';
                        $THUMBS[Thumb3][Text] = 'Richard Durham, 1948';
                        $THUMBS[Thumb3][Size] = '112%';
                        $THUMBS[Thumb3][Align] = '75% 45%';
                        
                        $THUMBS[Thumb4][Url] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/6/default.jpg';
                        $THUMBS[Thumb4][Text] = 'Mayor Washington at the 27th Annual International Folk Fair';
                        $THUMBS[Thumb4][Size] = '200%';
                        $THUMBS[Thumb4][Align] = '40% 60%';

                        include 'lightbox.php'; 
                    ?>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/search/collection/cr!rhwc!p16818coll6/order/title/ad/asc" class="btn btn-primary">Browse All</a>
                </div>
                <div class="center-copy-paragraph">
                    <p>Digital collections that include materials documenting Black history in the United States include:<p>
                    <dl>
					<?php 
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array('African Americans', $val[category])) || $val[category] == 'African Americans'){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
					?>
                    </dl>
                </div>
                <div class="center-copy-list">
                    <h4>More CPL Resources</h4>
                    <dl>
                        <dt><a href="http://gatekeeper.chipublib.org/login?url=http://search.proquest.com/hnpchicagodefender/ip?accountid=303">Chicago Defender Historical Archive</a></dt>
                        <dd>Offers full text, including display and classified advertisements, of this nationally significant African American newspaper from 1910 to 1975.</dd>
                        <dt><a href="https://cpl.thehistorymakers.org/home">HistoryMakers</a></dt>
                        <dd>The largest African American video oral history archive in the world features interviews with African Americans who have made significant contributions in American life or culture.</dd>
                        <dt><a href="https://www.chipublib.org/tag/african-american-history/">African American history blog posts</a></dt>
                        <dd>Written by CPL librarians and staff.</dd>
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