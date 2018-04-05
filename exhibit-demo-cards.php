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
    <?php 
    echo json_encode($fmexAll);
    ?>
    <script type="text/javascript">
        var pagelink = ""; 
        var pagetype = "home";
        var fmexContent = "<?php json_encode($fmexAll); ?>";
        console.log(fmexContent);
    </script>
    <style>
        .fmex {
            margin: 0 auto;
        }
        .stamp {
            position: absolute;
            width: 100%;
        }
        .stamp1 {
            top: 0;
        }
        .stamp2 {
            top: 108px;
            height: 0;
        }
        .fmex-content {
            background-color: #fff;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16);
            margin-bottom: 8px;
            padding: 20px;
        }
        .fmex h1 {
            font-size: 2.5rem;
            color: #3f4344;
            font-weight: bold;
            padding: 2rem;
            /* margin: 10px 50px 20px 50px; */
            box-shadow: 0 3px 6px rgba(0,0,0,0.16);
            background-color: #fff;
        }
        .fmex-img {
            width: 100%;
        }
        .fmex-subtitle {
            font-size: 28px;
            color: #3f4344;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $PAGE_TYPE = 'home';
        include 'variables.php';
        include 'fmexhibit-variables.php';
        include 'header.php';
        ?>
        <script type="text/javascript">
            var fmexContent = <?php echo json_encode($fmexAll) ?>;
            console.log(fmexContent);
        </script>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="main-container-collapsible">
            <div class="grid" >
                    <div class=" stamp stamp1 fmex">
                        <h1 > Forced Migration Photovoice Project </h1>
                        <div class="fmex-content" id="fmex-target">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-5">
                                        <span id="focus-text-target">
                                        <h2 class="fmex-subtitle" id="fmex-subtitle"></h2>
                                        <br>
                                        <p>
                                            <em id="fmex-source"></em>
                                            <span id="fmex-year"></span>
                                        </p>
                                        <p id="fmex-text"></p>
                                        </span>
                                    </div>
                                    <div class="col-7">
                                        <img class="fmex-img" id="fmex-img" src="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            // sorts arrays by [flag] attribute
            // for each [flag], make a card
                foreach ($fmexAll as $key => $val){
                        $jsonVersion = json_encode($key);
                        echo '<div class="grid-item card cardpic" style="width: 20rem; margin-bottom: 10px;"><a href="#" onclick="fmexFocus(' . $key . ')" style="background: url(fmex/' . $val[img] . '); background-size: cover; background-position: 50% 50%; height: 17rem" >';
                        // aria label here should be alt text for the image; this is an <a> and not <img> so can't use "alt="
                        echo '</a><div class="card-block" >';
                        // if the collection is assigned more than one category, it will be an array, so if it's an array, list both; if its not an array, just print the one; per spec, no collection can have less than 1 or more than 2
                        echo '<h2 class="card-title content-card-title"><a href="#" onclick="fmexFocus("' . $key . '")" >'. $val[title] . '</a></h2>';
                        echo '<p class="card-text content-card-copy">' . $val[source] . '</p>';
                        echo '</div>';
                        echo '</div>';
                }
            ?>
            </div>
        </div>  
    </main>
    <?php include 'footer.html'; ?>
    <script>
        // Masonry jQuery
        var $grid = $('.grid').masonry({
            gutter: 15,
            itemSelector: '.card',
            fitWidth: true,
            stamp: '.stamp'
        });
        // allows slow load times to not destroy the card layout; requires imagesloaded.pkgd.min.js; also makes cards flow when changing positions on resize
        $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
	</script>
</body>
</html>