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
    <link rel="stylesheet" href="AfAm.css" >
<style>
    div {
        /* border: 1px solid black !important; */
    }
</style>
</head>
<body>
    <?php 
    include 'header.html';
    $PAGE_TYPE = 'home';
    $cards = array ();

    $cards[ChicagoExaminer][title] =     'Chicago Examiner';
    $cards[ChicagoExaminer][pic] =       'default.jpg';
    $cards[ChicagoExaminer][category] =  'Chicago History | Newspapers';
    $cards[ChicagoExaminer][copy] =      'The Chicago Examiner began in 1902 as a morning edition to complement the evening edition paper, the Chicago American.';
    $cards[ChicagoExaminer][link] =      'ChicagoExaminer.php';

    $cards[HW][title] =                 'Remembering Harold Washington';
    $cards[HW][pic] =                   'http://digital.chipublib.org/digital/image/rhwc/thumbnail';
    $cards[HW][category] =              'Chicago History';
    $cards[HW][copy] =                  'The first African American mayor of Chicago, serving from 1983 to 1987, and his importance in the city’s history.';
    $cards[HW][link] =                  'HaroldWashington.php';
    
    $cards[Parks][title] =     'Parks';
    $cards[Parks][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
    $cards[Parks][category] =  'Parks';
    $cards[Parks][copy] =      'Various content about parks and such';
    $cards[Parks][link] =      'Parks.php';

    $cards[MP][title] =                   'Millennium Park';
    $cards[MP][pic] =                     'http://digital.chipublib.org/digital/image/mpu/thumbnail';
    $cards[MP][category] =                'Parks';
    $cards[MP][copy] =                    'Transformation from rail yard to dynamic urban park.';
    $cards[MP][link] =                    'MillenniumPark.php';
    
    $cards[CR][title] =                   'Chicago Renaissance';
    $cards[CR][pic] =                     'http://digital.chipublib.org/digital/image/cr/thumbnail';
    $cards[CR][category] =                'African American | Arts &amp; Literature';
    $cards[CR][copy] =                    'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
    $cards[CR][link] =                    'ChicagoRen.php';
    
    $cards[Sewers][title] =                   'Chicago&rsquo;s Sewers';
    $cards[Sewers][pic] =                     'http://digital.chipublib.org/digital/image/dtd/thumbnail';
    $cards[Sewers][category] =                'Architecture';
    $cards[Sewers][copy] =                    'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago';
    $cards[Sewers][link] =                    'Sewers.php';
    
    $cards[RWLV][title] =                   'Ravenswood-Lake View Community Collection';
    $cards[RWLV][pic] =                     'http://digital.chipublib.org/digital/image/rvw/thumbnail';
    $cards[RWLV][category] =                'Parks';
    $cards[RWLV][copy] =                    'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
    $cards[RWLV][link] =                    'RWLV.php';
    
    $cards[CivilWar][title] =     'Civil War';
    $cards[CivilWar][pic] =       'http://digital.chipublib.org/digital/image/wha/thumbnail';
    $cards[CivilWar][category] =  'Military';
    $cards[CivilWar][copy] =      'Artifacts from the homefront and the battlefield, with a focus on the Illinois experience. Highlights include camp equipment, weaponry and uniforms.';
    $cards[CivilWar][link] =      'CivilWar.php';

    $cards[CPL][title] =     'Chicago Public Library';
    $cards[CPL][pic] =       'http://digital.chipublib.org/digital/image/woop/thumbnail';
    $cards[CPL][category] =  'CPL | Education';
    $cards[CPL][copy] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
    $cards[CPL][link] =      'CPL.php';

    $cards[RK][title] =     'Robert W. Krueger';
    $cards[RK][pic] =       'http://digital.chipublib.org/digital/image/rwk/thumbnail';
    $cards[RK][category] =  'Neighborhoods';
    $cards[RK][copy] =      'In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side. He photographed hundreds of street scenes, parks, businesses, houses, schools, cemeteries, religious institutions, community events and people of the area.';
    $cards[RK][link] =      'Krueger.php';

    $cards[EAB][title] =     'Esther A. Barlow';
    $cards[EAB][pic] =       'http://digital.chipublib.org/digital/image/bar/thumbnail';
    $cards[EAB][category] =  'CPL | Education';
    $cards[EAB][copy] =      'Esther Barlow worked in neighborhood branches of the Chicago Public Library from 1927 until 1976. Included in this collection are family photographs and images of Ms. Barlow at work at the Hild Regional Library and Lake View Branch Library.';
    $cards[EAB][link] =      'Barlow.php';

    $cards[HDG][title] =     'Henry D. Green';
    $cards[HDG][pic] =       'http://digital.chipublib.org/digital/image/hdg/thumbnail';
    $cards[HDG][category] =  'Neighborhoods';
    $cards[HDG][copy] =      'Henry Green was a commercial photographer on Chicago&#39;s North Side. He captured on film local businesses, community groups, celebrations in neighborhood parks, events at local schools and life on the North Side during World War II. ';
    $cards[HDG][link] =      'Green.php';

    $cards[NSHS][title] =     'Northside High Schools';
    $cards[NSHS][pic] =       'http://digital.chipublib.org/digital/image/ahs/thumbnail';
    $cards[NSHS][category] =  'Education';
    $cards[NSHS][copy] =      'Photographs of high school football games, theatrical productions, dances and extracurricular activities from the 1870s to the 1950s.';
    $cards[NSHS][link] =      'NSHS.php';

    $cards[NSCO][title] =     'Northside Clubs &amp; Organizations';
    $cards[NSCO][pic] =       'http://digital.chipublib.org/digital/image/cfc/thumbnail';
    $cards[NSCO][category] =  'Education | Neighborhoods';
    $cards[NSCO][copy] =      'Photos from the Ravenswood Manor Improvement Association and the Christian Fellowship Church capture daily life in Ravenswood from the 1890s to the 1980s.';
    $cards[NSCO][link] =      'NSCO.php';

    $cards[PSC][title] =     'Philip Sang Collection';
    $cards[PSC][pic] =       'http://digital.chipublib.org/digital/image/cfc/thumbnail';
    $cards[PSC][category] =  'None';
    $cards[PSC][copy] =      'Add Text';
    $cards[PSC][link] =      'Sang.php';

    ?>
    <main>
        <?php include 'sidebar.php';?>
        <div class="main-container">
            <!-- <h1>All Digital Collections</h1> -->
            <div class="grid" >
                <?php include 'content-card.php'; ?>
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