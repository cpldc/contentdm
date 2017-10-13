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
        $cards[ChicagoExaminer][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/examiner/6808/default.jpg';
        $cards[ChicagoExaminer][category] =  '';
        $cards[ChicagoExaminer][textshort] =      'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[ChicagoExaminer][textlong] =      'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[ChicagoExaminer][link] =      'ChicagoExaminer.php';
        $cards[ChicagoExaminer][coll] =      'examiner';
        $cards[ChicagoExaminer][type] =      'collection';
        $cards[ChicagoExaminer][flag] =      'x';

        $cards[EB][title] =     'Esther A. Barlow Collection';
        $cards[EB][sortname] =     'Barlow, Esther A. Collection';
        $cards[EB][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg';
        $cards[EB][clip] =       '0px,20rem,20rem,0px';
        $cards[EB][pich] =       '20rem';
        $cards[EB][category] =  'Libraries &amp; Education';
        $cards[EB][textshort] =      'Family photographs of Esther Barlow and images of her work at Hild Regional Library and Lake View Branch Library from 1927-1976.';
        $cards[EB][textlong] =      'Esther Barlow was a children’s librarian in neighborhood branches of the Chicago Public Library from 1927 until 1976.';
        $cards[EB][link] =      'Barlow.php';
        $cards[EB][coll] =      'bar';
        $cards[EB][type] =      'collection';
        $cards[EB][flag] =      '1';

        $cards[CPL][title] =     'Chicago Public Library';
        $cards[CPL][sortname] =     'Chicago Public Library';
        $cards[CPL][pic] =       'http://digital.chipublib.org/digital/image/woop/thumbnail';
        $cards[CPL][clip] =       '';
        $cards[CPL][pich] =       '';
        $cards[CPL][category] =  'Libraries &amp; Education';
        $cards[CPL][textshort] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $cards[CPL][textlong] =      'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $cards[CPL][link] =      'CPL.php';
        $cards[CPL][coll] =      'woop';
        $cards[CPL][type] =      'collection';
        $cards[CPL][flag] =      '';

        $cards[ChiRen][title] =                   'Chicago Renaissance';
        $cards[ChiRen][sortname] =                   'Chicago Renaissance';
        $cards[ChiRen][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/cr/12/default.jpg';
        $cards[ChiRen][clip] =                '0px,20rem,20rem,0px';
        $cards[ChiRen][pich] =                '20rem';
        $cards[ChiRen][category] =                'African Americans';
        $cards[ChiRen][textshort] =                    'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $cards[ChiRen][textlong] =                    'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $cards[ChiRen][link] =                    'ChiRen.php';
        $cards[ChiRen][coll] =                    'cr';
        $cards[ChiRen][type] =                    'collection';
        $cards[ChiRen][flag] =                    '2';
        
        $cards[Sewers][title] =                   'Chicago&rsquo;s Sewers';
        $cards[Sewers][sortname] =                   'Chicago&rsquo;s Sewers';
        $cards[Sewers][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg';
        $cards[Sewers][category] =                'Neighborhoods';
        $cards[Sewers][textshort] =                    'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago.';
        $cards[Sewers][textlong] =                    'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historic images features construction photographs of sewers and tunnels.';
        $cards[Sewers][link] =                    'Sewers.php';
        $cards[Sewers][coll] =                    'dtd';
        $cards[Sewers][type] =                    'collection';
        $cards[Sewers][flag] =                    '3';
        
        $cards[Theater][title] =            'Chicago Theater Collection';
        $cards[Theater][sortname] =            'Chicago Theater Collection';
        $cards[Theater][pic] =              'http://digital.chipublib.org/digital/image/CPB01/thumbnail';
        $cards[Theater][category] =         '';
        $cards[Theater][textshort] =             'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $cards[Theater][textlong] =             'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $cards[Theater][link] =             'Theater.php';
        $cards[Theater][coll] =             'CPB01';
        $cards[Theater][type] =             'collection';
        $cards[Theater][flag] =             '4';

        $cards[CivilWar][title] =     'Civil War';
        $cards[CivilWar][sortname] =     'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $cards[CivilWar][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/wha/341/default.jpg';
        $cards[CivilWar][category] =  '';
        $cards[CivilWar][textshort] =      'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $cards[CivilWar][textlong] =      'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $cards[CivilWar][link] =      'CivilWar.php';
        $cards[CivilWar][coll] =      'wha';
        $cards[CivilWar][type] =      'collection';
        $cards[CivilWar][flag] =      'x';

        $cards[HDG][title] =     'Henry D. Green Photograph Collection';
        $cards[HDG][sortname] =     'Green, Henry D. Photograph Collection';
        $cards[HDG][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg';
        $cards[HDG][category] =  'Neighborhoods';
        $cards[HDG][textshort] =      'Photographs by Henry Green of businesses, community groups, neighborhood celebrations, and school events on Chicago’s North Side, 1943-1951.';
        $cards[HDG][textlong] =      'Chicago Public Library’s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago’s North Side.';
        $cards[HDG][link] =      'Green.php';
        $cards[HDG][coll] =      'hdg';
        $cards[HDG][type] =      'collection';
        $cards[HDG][flag] =      'x';
        
        $cards[RK][title] =     'Robert W. Krueger';
        $cards[RK][sortname] =     'Krueger, Robert W.';
        $cards[RK][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg';
        $cards[RK][category] =  'Neighborhoods';
        $cards[RK][textshort] =      'Local photographer Robert Krueger documented Chicago’s North Side with photographs of community events, buildings, and people.';
        $cards[RK][textlong] =      'In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side.';
        $cards[RK][link] =      'Krueger.php';
        $cards[RK][coll] =      'rwk';
        $cards[RK][type] =      'collection';
        $cards[RK][flag] =      'x';

        $cards[MP][title] =                   'Millennium Park';
        $cards[MP][sortname] =                   'Millennium Park';
        $cards[MP][pic] =                     'http://digital.chipublib.org/digital/api/singleitem/image/mpu/3519/default.jpg';
        $cards[MP][category] =                'Parks';
        $cards[MP][textshort] =                    'Transformation from rail yard to dynamic urban park.';
        $cards[MP][textlong] =                    'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects and artists.';
        $cards[MP][link] =                    'MillenniumPark.php';
        $cards[MP][coll] =                    'mpu';
        $cards[MP][type] =                    'collection';
        $cards[MP][flag] =                    'x';
        
        $cards[NCO][title] =     'Northside Clubs and Organizations';
        $cards[NCO][sortname] =     'Northside Clubs and Organizations';
        $cards[NCO][pic] =       '';
        $cards[NCO][category] =  'Neighborhoods';
        $cards[NCO][textshort] =      '';
        $cards[NCO][textlong] =      '';
        $cards[NCO][link] =      'NCO.php';
        $cards[NCO][coll] =      'cfc';
        $cards[NCO][type] =      'collection';
        $cards[NCO][flag] =      '';

        $cards[NHS][title] =     'Northside High Schools';
        $cards[NHS][sortname] =     'Northside High Schools';
        $cards[NHS][pic] =       '';
        $cards[NHS][category] =  'Neighborhoods';
        $cards[NHS][textshort] =      '';
        $cards[NHS][textlong] =      '';
        $cards[NHS][link] =      'NHS.php';
        $cards[NHS][coll] =      'ahs';
        $cards[NHS][type] =      'collection';
        $cards[NHS][flag] =      '';

        $cards[Parks][title] =     'Parks';
        $cards[Parks][sortname] =     'Parks';
        $cards[Parks][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
        $cards[Parks][category] =  'Parks';
        $cards[Parks][textshort] =      'Various content about parks and such';
        $cards[Parks][textlong] =      'Various content about parks and such';
        $cards[Parks][link] =      'Parks.php';
        $cards[Parks][coll] =      'ChicagoParks';
        $cards[Parks][type] =      'collection';
        $cards[Parks][flag] =      '';

        $cards[HW][title] =                 'Remembering Harold Washington';
        $cards[HW][sortname] =                 'Remembering Harold Washington';
        $cards[HW][pic] =                   'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg';
        $cards[HW][category] =              'African Americans';
        $cards[HW][textshort] =                  'The first African American mayor of Chicago, serving from 1983 to 1987, and his importance in the city’s history.';
        $cards[HW][textlong] =                  'Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in the history of Chicago.';
        $cards[HW][link] =                  'HaroldWashington.php';
        $cards[HW][coll] =                  'rhwc';
        $cards[HW][type] =                  'collection';
        $cards[HW][flag] =                  'x';
        
        $cards[RWLV][title] =                   'Ravenswood-Lake View Community Collection';
        $cards[RWLV][sortname] =                   'Ravenswood-Lake View Community Collection';
        $cards[RWLV][pic] =                     'http://digital.chipublib.org/digital/image/rvw/thumbnail';
        $cards[RWLV][category] =                'Neighborhoods';
        $cards[RWLV][textshort] =                    'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
        $cards[RWLV][textlong] =                    'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
        $cards[RWLV][link] =                    'RWLV.php';
        $cards[RWLV][coll] =                    'rvw';
        $cards[RWLV][type] =                    'collection';
        $cards[RWLV][flag] =                    '';
        
        $cards[Sang][title] =     'Philip David Sang Collection';
        $cards[Sang][sortname] =     'Sang, Philip David Collection';
        $cards[Sang][pic] =       '';
        $cards[Sang][category] =  'African Americans';
        $cards[Sang][textshort] =      '';
        $cards[Sang][textlong] =      '';
        $cards[Sang][link] =      'Sang.php';
        $cards[Sang][coll] =      'p16818coll6';
        $cards[Sang][type] =      'collection';
        $cards[Sang][flag] =      'x';

    //subcollections
            
        $cards[Amund][title] =     'Amundsen High School Collection';
        $cards[Amund][sortname] =     'Amundsen High School Collection';
        $cards[Amund][pic] =       '';
        $cards[Amund][category] =  '';
        $cards[Amund][textshort] =      '';
        $cards[Amund][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Amund][link] =      '#ahs';
        $cards[Amund][coll] =      '';
        $cards[Amund][type] =      'subcollection';
        $cards[Amund][flag] =      '';

        $cards[Kins][title] =     'Helen G. Kinsella Collection';
        $cards[Kins][sortname] =     'Kinsella, Helen G. Collection';
        $cards[Kins][pic] =       '';
        $cards[Kins][category] =  '';
        $cards[Kins][textshort] =      '';
        $cards[Kins][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Kins][link] =      '#ahs';
        $cards[Kins][coll] =      '';
        $cards[Kins][type] =      'subcollection';
        $cards[Kins][flag] =      '';

        $cards[LVHS][title] =     'Lake View High School Collection';
        $cards[LVHS][sortname] =     'Lake View High School Collection';
        $cards[LVHS][pic] =       '';
        $cards[LVHS][category] =  '';
        $cards[LVHS][textshort] =      '';
        $cards[LVHS][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[LVHS][link] =      '#ahs';
        $cards[LVHS][coll] =      '';
        $cards[LVHS][type] =      'subcollection';
        $cards[LVHS][flag] =      '';

        $cards[Walz][title] =     'Louis D. Walz Collection';
        $cards[Walz][sortname] =     'Walz, Louis D. Collection';
        $cards[Walz][pic] =       '';
        $cards[Walz][category] =  '';
        $cards[Walz][textshort] =      '';
        $cards[Walz][textlong] =      'See <a href="#ahs">Northside High Schools Collection</a>';
        $cards[Walz][link] =      '#ahs';
        $cards[Walz][coll] =      '';
        $cards[Walz][type] =      'subcollection';
        $cards[Walz][flag] =      '';

        $cards[CFCC][title] =     'Christian Fellowship Church Collection';
        $cards[CFCC][sortname] =     'Christian Fellowship Church Collection';
        $cards[CFCC][pic] =       '';
        $cards[CFCC][category] =  '';
        $cards[CFCC][textshort] =      '';
        $cards[CFCC][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[CFCC][link] =      '#cfc';
        $cards[CFCC][coll] =      '';
        $cards[CFCC][type] =      'subcollection';
        $cards[CFCC][flag] =      '';

        $cards[LVCRA][title] =     'Lake View Council on Religious Action';
        $cards[LVCRA][sortname] =     'Lake View Council on Religious Action';
        $cards[LVCRA][pic] =       '';
        $cards[LVCRA][category] =  '';
        $cards[LVCRA][textshort] =      '';
        $cards[LVCRA][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[LVCRA][link] =      '#cfc';
        $cards[LVCRA][coll] =      '';
        $cards[LVCRA][type] =      'subcollection';
        $cards[LVCRA][flag] =      '';

        $cards[PortPark][title] =     'Portage Park Community Collection';
        $cards[PortPark][sortname] =     'Portage Park Community Collection';
        $cards[PortPark][pic] =       '';
        $cards[PortPark][category] =  '';
        $cards[PortPark][textshort] =      '';
        $cards[PortPark][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[PortPark][link] =      '#cfc';
        $cards[PortPark][coll] =      '';
        $cards[PortPark][type] =      'subcollection';
        $cards[PortPark][flag] =      '';

        $cards[RMIA][title] =     'Ravenswood Manor Improvement Association Collection';
        $cards[RMIA][sortname] =     'Ravenswood Manor Improvement Association Collection';
        $cards[RMIA][pic] =       '';
        $cards[RMIA][category] =  '';
        $cards[RMIA][textshort] =      '';
        $cards[RMIA][textlong] =      'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $cards[RMIA][link] =      '#cfc';
        $cards[RMIA][coll] =      '';
        $cards[RMIA][type] =      'subcollection';
        $cards[RMIA][flag] =      '';

    //categories

        $cards[AfAm][title] =     'African Americans';
        $cards[AfAm][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg';
        $cards[AfAm][textshort] =      'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $cards[AfAm][textlong] =      'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $cards[AfAm][link] =      'AfAm.php';
        $cards[AfAm][coll] =      'cr!rhwc!p16818coll6';
        $cards[AfAm][type] =      'category';
        $cards[AfAm][flag] =      'x';

        //Harold Washington

        $cards[LibEd][title] =     'Libraries &amp; Education';
        $cards[LibEd][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/dtd/167/default.jpg';
        $cards[LibEd][textshort] =      'Various content about libraries and education';
        $cards[LibEd][textlong] =      'Various content about libraries and education';
        $cards[LibEd][link] =      'LibEd.php';
        $cards[LibEd][coll] =      '';
        $cards[LibEd][type] =      'category';
        $cards[LibEd][flag] =      '';

        $cards[Neigh][title] =     'Neighborhoods';
        $cards[Neigh][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg';
        //$cards[Neigh][pic] =       'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
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
        
        $cards[HWLCSC][title] =     'HWLC Special Collections';
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

        $cards[NNHC][title] =     'Northside Neighborhoods History Collection';
        $cards[NNHC][pic] =       '';
        $cards[NNHC][textshort] =      '';
        $cards[NNHC][textlong] =      '';
        $cards[NNHC][link] =      'NNHC.php';
        $cards[NNHC][coll] =      '';
        $cards[NNHC][type] =      'location';

        $cards[Harsh][title] =     'Vivian G Harsh Collection';
        $cards[Harsh][pic] =       '';
        $cards[Harsh][textshort] =      '';
        $cards[Harsh][textlong] =      '';
        $cards[Harsh][link] =      'Harsh.php';
        $cards[Harsh][coll] =      '';
        $cards[Harsh][type] =      'location';
    
        // $cards[][title] =     '';
        // $cards[][sortname] =     '';
        // $cards[][pic] =       '';
        // $cards[][category] =  '';
        // $cards[][textshort] =      '';
        // $cards[][textlong] =      '';
        // $cards[][link] =      '';
        // $cards[][coll] =      '';
        // $cards[][type] =      '';
        // $cards[][flag] =      '';

    $categories = array('AfAm.php'=>'African Americans',
            'LibEd.php'=>'Libraries &amp; Education',
            'Neighborhoods.php'=>'Neighborhoods');
        
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