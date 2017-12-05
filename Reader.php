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
    <style>
.bookreader-wrapper {
  border: 2px solid grey;
  width: 1200px;
  height: 800px;
}
code {
  background-color: lightgrey;
  color: black;
  padding: 2px;
}
    </style>
</head>
<body>
    <?php 
    include 'variables.php';
    include 'header.php';
    $PAGE_TYPE = 'home';

    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="main-container-collapsible">
            <div class="grid">
                <div class="col-12 clearfix">

                    <h1>BookReader embed example</h1>
                    <p>The following content is embedded in an iframe.</p>
                    <p>Enable the embed mode with <code>br.ui = 'embed'</code></p>
                    <iframe class="bookreader-wrapper" src="bookreader/BookReaderDemo/demo-embed-iframe-src-ChiEx.html"></iframe>
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