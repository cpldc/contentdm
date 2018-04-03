<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Collections | Chicago Public Library</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="imagesloaded.pkgd.min.js"></script>
	<script src="simpleLightbox.js"></script>
	<link rel="stylesheet" href="simpleLightbox.css">
    <script src="cpldc.js"></script>
    <link rel="stylesheet" href="cpldc.css" >
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-477834-3"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-477834-3');
		</script>
	<!-- end gtag -->
    <script type="text/javascript">
        var pagelink = ""; 
        var pagetype = "home";
        var pagecolls = "";
        console.log(pagecolls);
    </script>
    <style> 
        .exhibit-card {
            width: 100%;
        }
        .exhibit-section {
            padding: 2rem;
            border-bottom: 1px solid #ccc;
            margin: 10px 50px 20px 50px;
        }
        .exhibit-section-heading {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .exhibit-section-heading, .exhibit-text {
            padding: 10px 20px 5px 20px;
            margin-bottom: 0;
            line-height: 1.75rem;
            color: #666;
        }
        .exhibit-subtitle {
            padding: 0px 20px 0px 20px;
            color: #999;
        }
        .exhibit-image-box {
            float: right;
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            margin: 10px 10px 10px 40px;
        }
        .exhibit-image {
            width: 100%;
        }
        .fmex h1 {
            width: 100%;
            font-size: 2.5rem;
            color: #3f4344;
            font-weight: bold;
            padding: 2rem;
            margin: 10px 50px 20px 50px;
        }
    </style>
</head>
<body>
    <?php 
        $PAGE_TYPE = 'home';
        
        include 'fmexhibit-variables.php';
        include 'variables.php';
        include 'header.php';
    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="grid" id="content-top">
            <div class="container ">
                <div class="row fmex">
                <h1 class="center-content"> Forced Migration Photovoice Project </h1>
                        <?php 
                            foreach ($fmexAll as $key => $val){
                                echo '<div class="center-content exhibit-section clearfix imageGallery1">';
                                echo '<a href="fmex/' . $val[img] . '" class="exhibit-image-box" title="' . $val[title] . ', ' . $val[year] . '"/>';
                                echo '<img src="fmex/' . $val[img] . '" class="exhibit-image" />';
                                echo '</a>';
                                echo '<h2 class="exhibit-section-heading">' . $val[title] . '</h2>';
                                echo '<p class="exhibit-subtitle"><em>' . $val[source] . ', </em>' . $val[year] . '</p>';
                                foreach ($val[content] as $v){
                                    echo '<p class="exhibit-text">' . $v . '</p>';
                                }

                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    </div>
    </main>
    <?php include 'footer.html'; ?>
<script> 
    $('.imageGallery1 a').simpleLightbox();
</script>
</body>
</html>