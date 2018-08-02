<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables-aldermen.php';
    $ID = $_GET['id'];
	$PAGE = ${$ID};
	$PAGE_TYPE = 'content';
?>
	<meta charset="UTF-8">
	<title>Chicago Artists File</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="caa-db.js"></script>
	<link rel="stylesheet" href="cpldc.css" >
	<link rel="stylesheet" href="aldermen.css" >

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
				<?php 
					
						include 'caa-center-content-xml.html';
				?>
	</div>
</main>
<?php 
	include 'footer.html';
?>
</body>
</html>