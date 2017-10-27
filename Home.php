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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="imagesloaded.pkgd.min.js"></script>
    <script src="cpldc.js"></script>
    <link rel="stylesheet" href="cpldc.css" >
<style>
    div {
        /* border: 1px solid black !important; */
    }
</style>
</head>
<body>
    <?php 
    include 'variables.php';
    include 'header.html';
    $PAGE_TYPE = 'home';

    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="main-container-collapsible">
            <div class="grid">
            <?php
                usort($cards, build_sorter('flag'));
                foreach ($cards as $key => $val){
                    if (!$val[flag] == ''){
                        echo '<div class="grid-item card" style="width: 20rem; margin-bottom: 10px;">';
                        echo '<a href="'. $val[link] . '" style="background: url(' . $val[cardpic][pic] . '); background-size: ' . $val[cardpic][size] . '; background-position: ' . $val[cardpic][pos] . '; height: ' . $val[cardpic][pich] . '" alt="' . $val[title] . '"></a>';
                        echo '<div class="card-block" >';
                        if (is_array($val[category])){
                                $catLink0 = array_search($val[category][0], $categories);
                                $catLink1 = array_search($val[category][1], $categories);
                                echo '<span class="content-card-category"><a href="' . $catLink0 . '">' . $val[category][0] . '</a> | ';
                                echo '<a href="' . $catLink1 . '">' . $val[category][1] . '</a></span>';
                            } else {
                                $catLink = array_search($val[category], $categories);
                                echo '<span class="content-card-category"><a href="' . $catLink . '">' . $val[category] . '</a></span>';
                        }
                        echo '<h4 class="card-title content-card-title"><a href="' . $val[link] . '">'. $val[title] . '</a></h4>';
                        echo '<p class="card-text content-card-copy">' . $val[textshort] . '</p>';
                        // echo '<a href="' . $val[link] . '" class="bibbutton">Browse Collection&hellip;</a>';
                        echo '</div>';
                        echo '</div>';
                    }
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
        fitWidth: true
	});
	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});
	</script>
</body>
</html>