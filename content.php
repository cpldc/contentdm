<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables.php';
    $ID = $_GET['id'];
	$PAGE = ${$ID};
	$PAGE_TYPE = 'content';

	$COLL;
	foreach ($cards as $key => $val) {
		if (
			($PAGE[type] == 'location' && $PAGE[shortname] == $val[homeloc]) || 
			($PAGE[type] == 'category' && (
				$PAGE[shortname] == $val[category] || (
					is_array($val[category]) && in_array($PAGE[shortname], $val[category])
					)
				)
			)
		) {
			if ($COLL == '') {$COLL = $val[coll];} else {$COLL = $COLL . '!' . $val[coll];}
		}
	}
?>
<script type="text/javascript">
	var pagelink = "<?= $PAGE[link]; ?>"; 
	var pagetype = "<?= $PAGE[type]; ?>";
	var pagecolls = "<?= $COLL; ?>";
	// console.log(pagetype + " " + pagecolls + " " + pagelink);
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title> <?php echo $PAGE[title] ?> | Digital Collections | Chicago Public Library</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
	<script src="cpldc.js"></script>
	<link rel="stylesheet" href="cpldc.css" >
	<script src="simpleLightbox.js"></script>
	<link rel="stylesheet" href="simpleLightbox.css">
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-477834-3"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-477834-3');
		</script>
	<!-- end gtag -->
</head>
<body>
<?php 
// page is built like this: 
// ----------------------------------------------------------------------------------------
// 									header.html
// ----------------------------------------------------------------------------------------
// sidebar.php		| 		center-content.php 			| 	blogs.php -> produces blogs.html
// 					|	(or all.php or about.php)		|----------------------------------
// 					|									|	events.php -> events.html
// ----------------------------------------------------------------------------------------
// 									footer.html
// ----------------------------------------------------------------------------------------

	include 'header.php';
?>
<main class="sidebar-target-collapsible PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
	<div class="container main-container-fixed">
		<div class="row sidebar-target-fixed">
			<?php 
				include 'sidebar.php';
			?>
		<!-- center content -->
			<div class="col-8 col-xl-6 center-content">
				<h1 id="content-top"><?php echo $PAGE[title]; ?></h1>
				<?php 
					if ($PAGE[title] == 'Digital Collections A-Z'){
						include 'all.php';
					} elseif ($PAGE[title] == 'Copyright and Takedown Policy') {
						include 'takedown.php';
					} elseif ($PAGE[title] == 'About CPL Digital Collections') {
						include 'about.php';
					} elseif ($PAGE[title] == 'CPL Revamps Digital Collections Website') {
						include 'announce.php';
					} else {
						include 'center-content.php';
					}
				?>
			</div>
		<!-- right sidebar -->
			<div class="hidden-lg-down col-lg-3 right-sidebar">
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

</main>
<?php 
	include 'footer.html';
?>
</body>
</html>