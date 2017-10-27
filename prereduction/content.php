<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
    $ID = $_GET['id'];
	$PAGE = ${$ID};
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
                <span><?php echo $PAGE[textlong]; ?></span>
                <div class="center-lightbox">
						<div class="container-fluid lightbox imageGallery1">
						<div class="row">
							<div class="col-12 lightbox-main-img-div"><a href="<?php echo $PAGE[mainimage][url]; ?>" title="<?php echo $PAGE[mainimage][text]; ?>"><img style="background: url(<?php echo $PAGE[mainimage][url]; ?>); background-size: <?php echo $PAGE[mainimage][size]; ?>; background-position: <?php echo $PAGE[mainimage][align]; ?> !important;"  class="lightbox-main-img"></a></div>
						</div>
						<div class="row lightbox-thumbs justify-content-center">
						<?php 
							foreach ($PAGE[thumbs] as $key => $val) {
								echo '<div class="col-3 lightbox-thumb-wrapper"><a href="' . $val[url] . '" title="' . $val[text] . '"><img style="background: url(' . $val[url] . '); background-size: ' . $val[size] . '; background-position: ' . $val[align] . '!important;" class="lightbox-thumb" /></a></div>';
							}
						?>
						</div>
					</div>
					<script>
						$('.imageGallery1 a').simpleLightbox();
					</script>
                </div>
                <div class="center-button browseall">
                    <a href="http://digital.chipublib.org/digital/collection/<?php echo $PAGE[coll] ?>/search" class="btn btn-primary">Browse All</a>
                </div>
					<?php 
                    if ($PAGE[textrich]) {
                        echo '<div class="center-copy-paragraph">
                            <p>' . $PAGE[textrich] . '</p>
                            </div>';
                    }
                    if ($PAGE[highlights]) {
                        echo '<div class="center-copy-list">
                            <h4>Collection Highlights</h4>
                            <dl>';
                        foreach ($PAGE[highlights] as $key=>$val){
                            echo '<dd>' . $val[dd] . '<a href="' . $val[a] . '" style="font-weight: bold">a selected group of images.</a></dd>';
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[type] == 'category'){
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h4>Digital Collections</h4>
                            <p>Collections ' . $PAGE[catcoll] . ' include:<p>
                            <dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array($PAGE[shortname], $val[category])) || $val[category] == $PAGE[shortname]){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[type] == 'location'){
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h4>Digital Collections</h4>
                            <p>Digital collections from the ' . $PAGE[title] . ':<p><dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ($val[location] == $PAGE[shortname]){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
						echo '</dl></div><div class="center-copy-list"><dl>
						<dt class="contact-list-item" style="padding-bottom: 7px">Contact this collection: </dt>
						<dd class="contact-list-item">Location: <a href="https://www.chipublib.org/locations/' . $PAGE[loclink] . '">' . $PAGE[locname] . '</a></dd>
						<dd class="contact-list-item">Email: ' . $PAGE[locemail] . '</dd>
						<dd class="contact-list-item">Call: ' . $PAGE[locphone] . '</dd></dl></div>';
                    }
                    if ($PAGE[CPLRes]){
                        echo '<div class="center-copy-list">
                            <h4>More CPL Resources</h4>
                            <dl>';
                        foreach ($PAGE[CPLRes] as $key => $val){
                            echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
						}
						if($PAGE[findingaid]){
							if(is_array($PAGE[findingaid][0])){
								echo '<dt>Finding Aids</dt><dd>The descriptive inventories for other related archival collections.</dd><dd><ul>';
								foreach ($PAGE[findingaid] as $key=>$val) {
									echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
								}
								echo '</ul></dd>';
							} else {
								echo '<h4>Finding Aid</h4><dl><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
							}
						}
                        echo '</dl></div>';
                    }
                    if (!$PAGE[CPLRes] && $PAGE[findingaid]) {
						echo '<div class="center-copy-list">';
						if(is_array($PAGE[findingaid][0])){
							echo '<h4>Finding Aids</h4><p>The descriptive inventories for their physical collections.</p><ul>';
							foreach ($PAGE[findingaid] as $key=>$val) {
								echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
							}
							echo '</ul>';
						} else {
							echo '<h4>Finding Aid</h4><dl><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
						}
						echo '</div>';
                    }
                    if ($PAGE[ExRes]){
						echo '<div class="center-copy-list">
						<h4>External Resources</h4>
						<dl>';
                        foreach ($PAGE[ExRes] as $key => $val){
                            echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div>';
					}
					if ($PAGE[rights]){
						echo '<div class="content-card-paragraph"><span class="rights">' . $PAGE[rights] . '</span></div>';
					}
					if ($PAGE[inclusions]) {
						center_content($PAGE[inclusions]);
					}
                    ?>
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