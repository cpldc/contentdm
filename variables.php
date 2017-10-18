        <?php

        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }

        $cards = array ();

    //collections

        $cards[ChicagoExaminer][title] =     'Chicago Examiner';
        $cards[ChicagoExaminer][sortname] =     'Chicago Examiner';
        $cards[ChicagoExaminer][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/examiner/5449/default.jpg';
        $cards[ChicagoExaminer][pich] =  '19rem';
        $cards[ChicagoExaminer][size] =  '110% auto';
        $cards[ChicagoExaminer][pos] =  '50% -15px';
        $cards[ChicagoExaminer][category]    =    '';
        $cards[ChicagoExaminer][textshort] =      'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[ChicagoExaminer][textlong] =      'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[ChicagoExaminer][link] =      'ChicagoExaminer.php';
        $cards[ChicagoExaminer][coll] =      'examiner';
        $cards[ChicagoExaminer][type] =      'collection';
        $cards[ChicagoExaminer][flag] =      '1';

        $cards[EB][title] =     'Esther A. Barlow Collection';
        $cards[EB][sortname] =     'Barlow, Esther A. Collection';
        $cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg';
        $cards[EB][pich] =       '20rem';
        $cards[EB][size] =       '110%';
        $cards[EB][pos] =       'auto';
        $cards[EB][category]    =    'Libraries &amp; Education';
        $cards[EB][textshort] =      'Family photographs of Esther Barlow and images of her work at Hild Regional Library and Lake View Branch Library from 1927-1976.';
        $cards[EB][textlong] =      'Esther Barlow was a children’s librarian in neighborhood branches of the Chicago Public Library from 1927 until 1976.';
        $cards[EB][link] =      'Barlow.php';
        $cards[EB][coll] =      'bar';
        $cards[EB][type] =      'collection';
        $cards[EB][flag] =      '8';

        $cards[CPL][title] =     'Chicago Public Library';
        $cards[CPL][sortname] =     'Chicago Public Library';
        $cards[CPL][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/woop/45/default.jpg';
        $cards[CPL][pich] =       '200px;';
        $cards[CPL][size] =       '100%';
        $cards[CPL][pos] =       '50% -20px';
        $cards[CPL][category]    =    'Libraries &amp; Education';
        $cards[CPL][textshort] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $cards[CPL][textlong] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $cards[CPL][link] =      'CPL.php';
        $cards[CPL][coll] =      'woop';
        $cards[CPL][type] =      'collection';
        $cards[CPL][flag] =      '9';

        $cards[ChiRen][title] =                   'Chicago Renaissance';
        $cards[ChiRen][sortname] =                   'Chicago Renaissance';
        $cards[ChiRen][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/cr/12/default.jpg';
        $cards[ChiRen][pich] =                '20rem';
        $cards[ChiRen][size] =                'auto';
        $cards[ChiRen][pos] =                'auto';
        $cards[ChiRen][category]    =    'African Americans';
        $cards[ChiRen][textshort] =                    'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $cards[ChiRen][textlong] =                    'The Black Chicago Renaissance was a creative movement when activism and scholarship flourished with the prodigious work of African American community leaders, performers, artists, writers and activists.';
        $cards[ChiRen][link] =                    'ChiRen.php';
        $cards[ChiRen][coll] =                    'cr';
        $cards[ChiRen][type] =                    'collection';
        $cards[ChiRen][flag] =                    '10';
        
        $cards[Sewers][title] =                   'Chicago&rsquo;s Sewers';
        $cards[Sewers][sortname] =                   'Chicago&rsquo;s Sewers';
        $cards[Sewers][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg';
        $cards[Sewers][pich] =                     '200px';
        $cards[Sewers][size] =                     '120%';
        $cards[Sewers][pos] =                     '50% -20px';
        $cards[Sewers][category]    =    'Neighborhoods';
        $cards[Sewers][textshort] =                    'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago.';
        $cards[Sewers][textlong] =                    'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historic images features construction photographs of sewers and tunnels.';
        $cards[Sewers][link] =                    'Sewers.php';
        $cards[Sewers][coll] =                    'dtd';
        $cards[Sewers][type] =                    'collection';
        $cards[Sewers][flag] =                    '';
        
        $cards[Theater][title] =            'Chicago Theater Collection';
        $cards[Theater][sortname] =            'Chicago Theater Collection';
        $cards[Theater][pic] =              'http://digital.chipublib.org/digital/image/CPB01/thumbnail';
        $cards[Theater][pich] =              '250px';
        $cards[Theater][size] =              '110%';
        $cards[Theater][pos] =              'auto';
        $cards[Theater][category]    =    '';
        $cards[Theater][textshort] =             'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $cards[Theater][textlong] =             'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[Theater][link] =             'Theater.php';
        $cards[Theater][coll] =             'CPB01';
        $cards[Theater][type] =             'collection';
        $cards[Theater][flag] =             '4';

        $cards[Whalen][title] =     'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $cards[Whalen][sortname] =     'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $cards[Whalen][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/wha/341/default.jpg';
        $cards[Whalen][pich] =       '280px';
        $cards[Whalen][size] =       '110%';
        $cards[Whalen][pos] =       '50% 40%';
        $cards[Whalen][category]    =    'Civil War';
        $cards[Whalen][textshort] =      'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $cards[Whalen][textlong] =      'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $cards[Whalen][link] =      'Whalen.php';
        $cards[Whalen][coll] =      'wha';
        $cards[Whalen][type] =      'collection';
        $cards[Whalen][flag] =      '2';

        $cards[HDG][title] =     'Henry D. Green Photograph Collection';
        $cards[HDG][sortname] =     'Green, Henry D. Photograph Collection';
        $cards[HDG][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg';
        $cards[HDG][pich] =       '250px';
        $cards[HDG][size] =       '110%';
        $cards[HDG][pos] =       '50% 50%';
        $cards[HDG][category]    =    'Neighborhoods';
        $cards[HDG][textshort] =      'Photographs by Henry Green of businesses, community groups, neighborhood celebrations, and school events on Chicago’s North Side, 1943-1951.';
        $cards[HDG][textlong] =      'Chicago Public Library’s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago’s North Side.';
        $cards[HDG][link] =      'Green.php';
        $cards[HDG][coll] =      'hdg';
        $cards[HDG][type] =      'collection';
        $cards[HDG][flag] =      '7';
        
        $cards[RK][title] =     'Robert W. Krueger';
        $cards[RK][sortname] =     'Krueger, Robert W.';
        $cards[RK][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg';
        $cards[RK][pich] =       '210px';
        $cards[RK][size] =       '100%';
        $cards[RK][pos] =       '50% 50%';
        $cards[RK][category]    =    'Neighborhoods';
        $cards[RK][textshort] =      'Local photographer Robert Krueger documented Chicago’s North Side with photographs of community events, buildings, and people.';
        $cards[RK][textlong] =      'In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side.';
        $cards[RK][link] =      'Krueger.php';
        $cards[RK][coll] =      'rwk';
        $cards[RK][type] =      'collection';
        $cards[RK][flag] =      '6';

        $cards[MP][title] =                   'Millennium Park';
        $cards[MP][sortname] =                   'Millennium Park';
        $cards[MP][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/mpu/2239/default.jpg';
        $cards[MP][pich] =       '240px';
        $cards[MP][size] =       '130%';
        $cards[MP][pos] =       '35% 50%';
        $cards[MP][category]    =    'Parks';
        $cards[MP][textshort] =                    'Transformation from rail yard to dynamic urban park.';
        $cards[MP][textlong] =                    'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects and artists.';
        $cards[MP][link] =                    'MillenniumPark.php';
        $cards[MP][coll] =                    'mpu';
        $cards[MP][type] =                    'collection';
        $cards[MP][flag] =                    '3';
        
        $cards[NCO][title] =     'Northside Clubs and Organizations';
        $cards[NCO][sortname] =     'Northside Clubs and Organizations';
        $cards[NCO][pic] =       '';
        $cards[NCO][pich] =       '250px';
        $cards[NCO][size] =       '110%';
        $cards[NCO][pos] =       '50% 50%';
        $cards[NCO][category]    =    'Neighborhoods';
        $cards[NCO][textshort] =      '';
        $cards[NCO][textlong] =      '';
        $cards[NCO][link] =      'NCO.php';
        $cards[NCO][coll] =      'cfc';
        $cards[NCO][type] =      'collection';
        $cards[NCO][flag] =      '';

        $cards[NHS][title] =     'Northside High Schools';
        $cards[NHS][sortname] =     'Northside High Schools';
        $cards[NHS][pic] =       '';
        $cards[NHS][pich] =       '250px';
        $cards[NHS][size] =       '110%';
        $cards[NHS][pos] =       '50% 50%';
        $cards[NHS][category]    =    'Neighborhoods';
        $cards[NHS][textshort] =      '';
        $cards[NHS][textlong] =      '';
        $cards[NHS][link] =      'NHS.php';
        $cards[NHS][coll] =      'ahs';
        $cards[NHS][type] =      'collection';
        $cards[NHS][flag] =      '';

        $cards[Parks][title] =     'Parks';
        $cards[Parks][sortname] =     'Parks';
        $cards[Parks][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
        $cards[Parks][pich] =       '250px';
        $cards[Parks][size] =       '110%';
        $cards[Parks][pos] =       '10% 5%';
        $cards[Parks][category]    =    'Parks';
        $cards[Parks][textshort] =      '';
        $cards[Parks][textlong] =      '';
        $cards[Parks][link] =      'Parks.php';
        $cards[Parks][coll] =      'ChicagoParks';
        $cards[Parks][type] =      'collection';
        $cards[Parks][flag] =      '';

        $cards[HW][title] =                 'Remembering Harold Washington';
        $cards[HW][sortname] =                 'Remembering Harold Washington';
        $cards[HW][pic] =                   'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg';
        $cards[HW][pich] =       '250px';
        $cards[HW][size] =       '200%';
        $cards[HW][pos] =       '75% 40%';
        $cards[HW][category]    =    'African Americans';
        $cards[HW][textshort] =                  'The first African American mayor of Chicago, serving from 1983 to 1987, and his importance in the city’s history.';
        $cards[HW][textlong] =                  'Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in the history of Chicago.';
        $cards[HW][link] =                  'HaroldWashington.php';
        $cards[HW][coll] =                  'rhwc';
        $cards[HW][type] =                  'collection';
        $cards[HW][flag] =                  '5';
        
        $cards[RWLV][title] =                   'Ravenswood-Lake View Community Collection';
        $cards[RWLV][sortname] =                   'Ravenswood-Lake View Community Collection';
        $cards[RWLV][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1086/default.jpg';
        $cards[RWLV][pich] =       '250px';
        $cards[RWLV][size] =       '250%';
        $cards[RWLV][pos] =       '24% 45%';
        $cards[RWLV][category]    =    array('Neighborhoods','Libraries &amp; Education');
        $cards[RWLV][textshort] =                    'Street scenes and community life on the North Side, 1860s-1990s';
        $cards[RWLV][textlong] =                    'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
        $cards[RWLV][link] =                    'RWLV.php';
        $cards[RWLV][coll] =                    'rvw';
        $cards[RWLV][type] =                    'collection';
        $cards[RWLV][flag] =                    '1';
        
        $cards[Sang][title] =     'Philip David Sang Collection';
        $cards[Sang][sortname] =     'Sang, Philip David Collection';
        $cards[Sang][pic] =       '';
        $cards[Sang][category]    =    array('African Americans','Civil War');
        $cards[Sang][textshort] =      '';
        $cards[Sang][textlong] =      '';
        $cards[Sang][link] =      'Sang.php';
        $cards[Sang][coll] =      'p16818coll6';
        $cards[Sang][type] =      'collection';
        $cards[Sang][flag] =      '4';

    //subcollections
            
        $cards[Amund][title] =     'Amundsen High School Collection';
        $cards[Amund][sortname] =     'Amundsen High School Collection';
        $cards[Amund][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Amund][link] =      '#ahs';
        $cards[Amund][type] =      'subcollection';

        $cards[Kins][title] =     'Helen G. Kinsella Collection';
        $cards[Kins][sortname] =     'Kinsella, Helen G. Collection';
        $cards[Kins][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Kins][link] =      '#ahs';
        $cards[Kins][type] =      'subcollection';

        $cards[LVHS][title] =     'Lake View High School Collection';
        $cards[LVHS][sortname] =     'Lake View High School Collection';
        $cards[LVHS][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[LVHS][link] =      '#ahs';
        $cards[LVHS][type] =      'subcollection';

        $cards[Walz][title] =     'Louis D. Walz Collection';
        $cards[Walz][sortname] =     'Walz, Louis D. Collection';
        $cards[Walz][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Walz][link] =      '#ahs';
        $cards[Walz][type] =      'subcollection';

        $cards[CFCC][title] =     'Christian Fellowship Church Collection';
        $cards[CFCC][sortname] =     'Christian Fellowship Church Collection';
        $cards[CFCC][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[CFCC][link] =      '#cfc';
        $cards[CFCC][type] =      'subcollection';

        $cards[LVCRA][title] =     'Lake View Council on Religious Action';
        $cards[LVCRA][sortname] =     'Lake View Council on Religious Action';
        $cards[LVCRA][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[LVCRA][link] =      '#cfc';
        $cards[LVCRA][type] =      'subcollection';

        $cards[PortPark][title] =     'Portage Park Community Collection';
        $cards[PortPark][sortname] =     'Portage Park Community Collection';
        $cards[PortPark][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[PortPark][link] =      '#cfc';
        $cards[PortPark][type] =      'subcollection';

        $cards[RMIA][title] =     'Ravenswood Manor Improvement Association Collection';
        $cards[RMIA][sortname] =     'Ravenswood Manor Improvement Association Collection';
        $cards[RMIA][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[RMIA][link] =      '#cfc';
        $cards[RMIA][type] =      'subcollection';

    //categories

        $cards[AfAm][title] =     'African Americans';
        $cards[AfAm][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg';
        $cards[AfAm][pich] =       '250px';
        $cards[AfAm][size] =       '110%';
        $cards[AfAm][pos] =       '50% 50%';
        $cards[AfAm][textshort] =      'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $cards[AfAm][textlong] =      'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $cards[AfAm][link] =      'AfAm.php';
        $cards[AfAm][coll] =      'cr!rhwc!p16818coll6';
        $cards[AfAm][type] =      'category';
        $cards[AfAm][flag] =      '';

        //Harold Washington

        $cards[LibEd][title] =     'Libraries &amp; Education';
        $cards[LibEd][pic] =       '';
        $cards[LibEd][pich] =       '250px';
        $cards[LibEd][size] =       '110%';
        $cards[LibEd][pos] =       '50% 50%';
        $cards[LibEd][textshort] =      'Various content about libraries and education';
        $cards[LibEd][textlong] =      'Various content about libraries and education';
        $cards[LibEd][link] =      'LibEd.php';
        $cards[LibEd][coll] =      '';
        $cards[LibEd][type] =      'category';
        $cards[LibEd][flag] =      '';

        $cards[Neigh][title] =     'Neighborhoods';
        $cards[Neigh][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg';
        //$cards[Neigh][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
        $cards[Neigh][pich] =       '230px';
        $cards[Neigh][size] =       '110%';
        $cards[Neigh][pos] =       '50% 50%';
        $cards[Neigh][textshort] =      'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
        $cards[Neigh][textlong] =      'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
        $cards[Neigh][link] =      'Neighborhoods.php';
        $cards[Neigh][coll] =      '';
        $cards[Neigh][type] =      'category';
        $cards[Neigh][flag] =      'x';

        //Newspapers

        //Theater

        //Parks

    //locations
        
        $cards[HWLCSC][title] =     'Special Collections at HWLC';
        $cards[HWLCSC][pic] =       '';
        $cards[HWLCSC][textshort] =      '';
        $cards[HWLCSC][textlong] =      '';
        $cards[HWLCSC][link] =      'HWLCSC.php';
        $cards[HWLCSC][coll] =      '';
        $cards[HWLCSC][type] =      'location';

        $cards[MRC][title] =     'Municipal Reference Collection';
        $cards[MRC][pic] =       '';
        $cards[MRC][textshort] =      '';
        $cards[MRC][textlong] =      '';
        $cards[MRC][link] =      'MRC.php';
        $cards[MRC][coll] =      '';
        $cards[MRC][type] =      'location';

        $cards[NNHC][title] =     'Northside Neighborhood History Collection';
        $cards[NNHC][pic] =       '';
        $cards[NNHC][textshort] =      '';
        $cards[NNHC][textlong] =      '';
        $cards[NNHC][link] =      'NNHC.php';
        $cards[NNHC][coll] =      '';
        $cards[NNHC][type] =      'location';

        $cards[Harsh][title] =     'Vivian G. Harsh Collection';
        $cards[Harsh][pic] =       '';
        $cards[Harsh][textshort] =      '';
        $cards[Harsh][textlong] =      '';
        $cards[Harsh][link] =      'Harsh.php';
        $cards[Harsh][coll] =      '';
        $cards[Harsh][type] =      'location';
    
        // $cards[][title] =     '';
        // $cards[][sortname] =     '';
        // $cards[][pic] =       '';
        // $cards[][category]    =    '';
        // $cards[][textshort] =      '';
        // $cards[][textlong] =      '';
        // $cards[][link] =      '';
        // $cards[][coll] =      '';
        // $cards[][type] =      '';
        // $cards[][flag] =      '';
        
    $categories = array('AfAm.php'=>'African Americans','CivilWar.php'=>'Civil War',
        'LibEd.php'=>'Libraries &amp; Education',
        'Neighborhoods.php'=>'Neighborhoods', 'Parks.php'=>'Parks');
        
    $LOCATIONLINKS = array('https://www.chipublib.org/locations/3'=>'Albany Park',
        'https://www.chipublib.org/locations/4'=>'Altgeld',
        'https://www.chipublib.org/locations/5'=>'Archer Heights',
        'https://www.chipublib.org/locations/6'=>'Austin',
        'https://www.chipublib.org/locations/7'=>'Austin-Irving',
        'https://www.chipublib.org/locations/8'=>'Avalon',
        'https://www.chipublib.org/locations/9'=>'Back of the Yards',
        'https://www.chipublib.org/locations/10'=>'Beverly',
        'https://www.chipublib.org/locations/11'=>'Bezazian',
        'https://www.chipublib.org/locations/12'=>'Blackstone',
        'https://www.chipublib.org/locations/13'=>'Brainerd',
        'https://www.chipublib.org/locations/14'=>'Brighton Park',
        'https://www.chipublib.org/locations/15'=>'Bucktown-Wicker Park',
        'https://www.chipublib.org/locations/16'=>'Budlong Woods',
        'https://www.chipublib.org/locations/17'=>'Canaryville',
        'https://www.chipublib.org/locations/18'=>'Chicago Bee',
        'https://www.chipublib.org/locations/19'=>'Chicago Lawn',
        'https://www.chipublib.org/locations/20'=>'Chinatown',
        'https://www.chipublib.org/locations/21'=>'Clearing',
        'https://www.chipublib.org/locations/22'=>'Coleman',
        'https://www.chipublib.org/locations/23'=>'Daley, Richard J.-Bridgeport',
        'https://www.chipublib.org/locations/24'=>'Daley, Richard M.-W Humboldt',
        'https://www.chipublib.org/locations/25'=>'Douglass',
        'https://www.chipublib.org/locations/26'=>'Dunning',
        'https://www.chipublib.org/locations/27'=>'Edgebrook',
        'https://www.chipublib.org/locations/28'=>'Edgewater',
        'https://www.chipublib.org/locations/29'=>'Gage Park',
        'https://www.chipublib.org/locations/30'=>'Galewood-Mont Clare',
        'https://www.chipublib.org/locations/31'=>'Garfield Ridge',
        'https://www.chipublib.org/locations/32'=>'Greater Grand Crossing',
        'https://www.chipublib.org/locations/33'=>'Hall',
        'https://www.chipublib.org/locations/34'=>'Harold Washington Library Center',
        'https://www.chipublib.org/locations/35'=>'Hegewisch',
        'https://www.chipublib.org/locations/36'=>'Humboldt Park',
        'https://www.chipublib.org/locations/37'=>'Independence',
        'https://www.chipublib.org/locations/38'=>'Jefferson Park',
        'https://www.chipublib.org/locations/39'=>'Jeffery Manor',
        'https://www.chipublib.org/locations/40'=>'Kelly',
        'https://www.chipublib.org/locations/41'=>'King',
        'https://www.chipublib.org/locations/42'=>'Legler',
        'https://www.chipublib.org/locations/43'=>'Lincoln Belmont',
        'https://www.chipublib.org/locations/44'=>'Lincoln Park',
        'https://www.chipublib.org/locations/45'=>'Little Village',
        'https://www.chipublib.org/locations/46'=>'Logan Square',
        'https://www.chipublib.org/locations/47'=>'Lozano',
        'https://www.chipublib.org/locations/48'=>'Manning',
        'https://www.chipublib.org/locations/49'=>'Mayfair',
        'https://www.chipublib.org/locations/50'=>'McKinley Park',
        'https://www.chipublib.org/locations/51'=>'Merlo',
        'https://www.chipublib.org/locations/52'=>'Mount Greenwood',
        'https://www.chipublib.org/locations/53'=>'Near North',
        'https://www.chipublib.org/locations/54'=>'North Austin',
        'https://www.chipublib.org/locations/55'=>'North Pulaski',
        'https://www.chipublib.org/locations/56'=>'Northtown',
        'https://www.chipublib.org/locations/57'=>'Oriole Park',
        'https://www.chipublib.org/locations/58'=>'Portage-Cragin',
        'https://www.chipublib.org/locations/59'=>'Pullman',
        'https://www.chipublib.org/locations/60'=>'Roden',
        'https://www.chipublib.org/locations/61'=>'Rogers Park',
        'https://www.chipublib.org/locations/62'=>'Roosevelt',
        'https://www.chipublib.org/locations/63'=>'Scottsdale',
        'https://www.chipublib.org/locations/64'=>'Sherman Park',
        'https://www.chipublib.org/locations/65'=>'South Chicago',
        'https://www.chipublib.org/locations/66'=>'South Shore',
        'https://www.chipublib.org/locations/67'=>'Sulzer Regional',
        'https://www.chipublib.org/locations/68'=>'Thurgood Marshall',
        'https://www.chipublib.org/locations/69'=>'Toman',
        'https://www.chipublib.org/locations/70'=>'Uptown',
        'https://www.chipublib.org/locations/71'=>'Vodak-East Side',
        'https://www.chipublib.org/locations/72'=>'Walker',
        'https://www.chipublib.org/locations/73'=>'Water Works',
        'https://www.chipublib.org/locations/74'=>'West Belmont',
        'https://www.chipublib.org/locations/75'=>'West Chicago Avenue',
        'https://www.chipublib.org/locations/76'=>'West Englewood',
        'https://www.chipublib.org/locations/77'=>'West Lawn',
        'https://www.chipublib.org/locations/78'=>'West Pullman',
        'https://www.chipublib.org/locations/79'=>'West Town',
        'https://www.chipublib.org/locations/80'=>'Whitney M. Young, Jr.',
        'https://www.chipublib.org/locations/81'=>'Woodson Regional',
        'https://www.chipublib.org/locations/82'=>'Wrightwood-Ashburn');
?>