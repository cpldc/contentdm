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
        
        include 'variables.php';
        include 'header.php';
    ?>
    <main class="PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
        <?php include 'sidebar.php';?>
        <div class="container card">
            <div class="row">
                <div class="col-7">
                    <h2 class="exhibit-section-heading">
                        Section Heading
                    </h2>
                    <p class="exhibit-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur quaerat debitis omnis? Ipsum voluptates, ab vitae pariatur adipisci rerum corporis expedita dolores? Repudiandae minima reiciendis ipsa at nemo excepturi distinctio!
                    </p><p class="exhibit-text">
                        Sint odit asperiores perspiciatis dolore recusandae cumque rerum? Aliquam, asperiores! Blanditiis quis perferendis culpa in itaque sit quia laudantium magnam sunt, dolore sapiente! Veniam ducimus, quo exercitationem atque eius provident.
                    </p><p class="exhibit-text">
                        Dignissimos culpa expedita explicabo qui minima tempora, voluptate reprehenderit veniam eius animi libero in iste dolorum! Vero est maxime aspernatur debitis ipsa tempore incidunt magni ullam atque, veritatis blanditiis voluptas.
                    </p><p class="exhibit-text">
                        Cum, esse? Facere rem repellendus aliquam veniam voluptatibus non molestias, velit eligendi laudantium nemo quis quaerat architecto impedit ut! Natus id soluta, eligendi porro fugiat repudiandae hic eum at iste.
                    </p><p class="exhibit-text">
                        Distinctio officia quod molestias consectetur, asperiores, fugiat nulla corporis perspiciatis, error inventore sapiente corrupti soluta hic tempora architecto harum voluptates sit doloribus dignissimos libero nisi dolor? Exercitationem omnis voluptatem harum?
                    </p><p class="exhibit-text">
                        Quo exercitationem optio illum, suscipit fugiat nesciunt sint minima ullam reiciendis distinctio labore perferendis, obcaecati, saepe ipsam vel earum? Quibusdam, a officia. Aperiam minus alias consectetur facilis incidunt aliquam tenetur.
                    </p><p class="exhibit-text">
                        Tempore labore pariatur sequi. Quibusdam a quaerat vero beatae voluptate obcaecati ad explicabo quas esse, exercitationem sequi veniam consectetur porro ea tempore voluptas at optio, sint culpa nulla deserunt omnis!
                    </p><p class="exhibit-text">
                        Esse inventore accusantium nisi quasi animi aut debitis iure perferendis distinctio maxime sed vel, nesciunt consectetur, nulla repellendus totam qui odit at ipsum odio. Tempore voluptas minima laboriosam iste cupiditate.
                    </p><p class="exhibit-text">
                        Ratione accusamus aut voluptatibus ut, asperiores molestias fuga quos, soluta quisquam odit omnis dolore! Quam repellat eveniet mollitia eaque rem vitae error, iure odio nisi, unde iste, harum explicabo ipsum.
                    </p><p class="exhibit-text">
                        Reiciendis, possimus tempora laborum consequuntur officiis nihil animi corporis sapiente. Quae minima impedit sapiente recusandae beatae ratione? Itaque quisquam quos numquam blanditiis nemo, expedita tenetur quaerat dolorum, atque eos inventore!</span>';
                    </p>
                </div>
                <div class="col-5">
                    <?php 
                        $count = 5;
                        foreach ($cards as $key => $val){
                            if (!$val[flag] == ''){
                                echo '<div class="exhibit-image-box"><div class="exhibit-image" src="" style="background: url(' . $val[cardpic][pic] . '); background-size: ' . $val[cardpic][size] . '; background-position: ' . $val[cardpic][pos] . '; height: ' . $val[cardpic][pich] . '" aria-label="' . $val[cardpic][alt] . '"></div><div class="exhibit-image-caption">' . $val[textshort] . '</div></div>';
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