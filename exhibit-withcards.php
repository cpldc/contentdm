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
    .exhibit-section-heading {
        font-weight: 700;
    }
    .exhibit-section-heading, .exhibit-text {
        padding: 20px 20px 5px 50px;
        margin-bottom: 0;
        line-height: 2;
    }
    /* .exhibit-image {
        width: 80%;
        padding: 20px 20px 0px 20px;
        margin: 20px 20px 0px 20px;
    }
    .exhibit-image, .exhibit-image-caption {
        width: 80%;
    } */
    .exhibit-image-caption {
        /* padding: 0 20px 20px 20px;
        margin: 0 20px 20px 20px; */
        color: #666;
        font-size: 0.75rem;
    }
    .exhibit-image-box {
        border: 1px solid #ccc;
        margin: 20px;
        padding: 20px;
        width: 80%;
    }
    </style>
</head>
<body>
    <?php 
        $PAGE_TYPE = 'home';
        
        include 'fmexhibit-variables.php';
        include 'header.php';
    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="container card">
            <div class="row">
                <div class="col-5">
                    <?php 
                        foreach ($fmexAll as $key => $val){
                            echo '<h2 class="exhibit-section-heading>' . $val[title] . '</h2>';
                            echo '<span class="exhibit-text"><em>' . $val[source] . '</em>' . $val[year] . '</span>';
                            foreach ($val[content] as &$v) {
                                echo '<p class="exhibit-text">' . $v . '</p>';
                            }
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
        // Masonry jQuery
        var $grid = $('.grid').masonry({
            gutter: 15,
            itemSelector: '.card',
            fitWidth: true
        });
        // allows slow load times to not destroy the card layout; requires imagesloaded.pkgd.min.js; also makes cards flow when changing positions on resize
        $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
	</script>
</body>
</html>