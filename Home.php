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
            // sorts arrays by [flag] attribute
                usort($cards, build_sorter('flag'));
            // for each [flag], make a card
                foreach ($cards as $key => $val){
                    if (!$val[flag] == ''){
                        echo '<div class="grid-item card cardpic" style="width: 20rem; margin-bottom: 10px;"><a href="content.php?id='. $val[link] . '" style="background: url(' . $val[cardpic][pic] . '); background-size: ' . $val[cardpic][size] . '; background-position: ' . $val[cardpic][pos] . '; height: ' . $val[cardpic][pich] . '" alt="' . $val[title] . '">';
                        if (strpos($val[cardpic][pic], 'mpu') !== false ) {
                            echo '<i class="rights-i rights-i-card fa fa-info-circle"></i><div class="rights-overlay rights-overlay-card"><div class="rights-guts"><span class="rights-statement">' . $MP[rights2]  . '</span></div><div class="rights-close"><i class="rights-close-icon fa fa-times"></i></div></div>';
                        }
                        echo '</a><div class="card-block" >';
                        // if the collection is assigned more than one category, it will be an array, so if it's an array, list both; if its not an array, just print the one; per spec, no collection can have less than 1 or more than 2
                        if (is_array($val[category])){
                                $catLink0 = array_search($val[category][0], $categories);
                                $catLink1 = array_search($val[category][1], $categories);
                                echo '<span class="content-card-category"><a href="content.php?id=' . $catLink0 . '">' . $val[category][0] . '</a> | ';
                                echo '<a href="content.php?id=' . $catLink1 . '">' . $val[category][1] . '</a></span>';
                            } else {
                                $catLink = array_search($val[category], $categories);
                                echo '<span class="content-card-category"><a href="content.php?id=' . $catLink . '">' . $val[category] . '</a></span>';
                        }
                        echo '<h4 class="card-title content-card-title"><a href="content.php?id=' . $val[link] . '">'. $val[title] . '</a></h4>';
                        echo '<p class="card-text content-card-copy">' . $val[textshort] . '</p>';
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
        // allows slow load times to not destroy the card layout; requires imagesloaded.pkgd.min.js; also makes cards flow when changing positions on resize
        $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
	</script>
</body>
</html>