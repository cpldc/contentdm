<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
	$PAGE_TITLE = 'Digital Collections A-Z';
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
					<dl class="all-collections">
                    <?php 
                        usort($cards, build_sorter('sortname'));
                        foreach ($cards as $key => $val){
                            if ($val[type] == 'collection' || $val[type] == 'subcollection'){
                                echo '<dt class="' . $val[coll] . '"><a href="' . $val[link] . '" name="' . $val[coll] . '">' . $val[sortname] . '</a><span class="rsaquo"> &rsaquo;</span></dt>';
                                echo '<dd>' . $val[textlong] . '</dd>';
                                if (!$val[category] == ''){
									if (is_array($val[category])) {
										$catlink0 = array_search($val[category][0], $categories);
										$catlink1 = array_search($val[category][1], $categories);
										echo '<dd class="all-collections-category"> Found in <a href="' . $catlink0 . '">' . $val[category][0] . '</a>';
										echo ' <a href="' . $catlink1 . '">' . $val[category][1] . '</a></dd>';
									} else {
										$catlink = array_search($val[category], $categories);
										echo '<dd class="all-collections-category"> Found in <a href="' . $catlink . '">' . $val[category] . '</a></dd>';
									}
								}
								echo '<hr>';
                            }
                        }
                        ?>
					</dl>
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