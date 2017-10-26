    <?php
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);

        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }


//collections

    $Examiner[title] = 'Chicago Examiner';
        $Examiner[sortname] = 'Chicago Examiner';
        $Examiner[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/examiner/5449/default.jpg';
        $Examiner[pich] = '19rem';
        $Examiner[size] = '110% auto';
        $Examiner[pos] = '50% -15px';
        $Examiner[category] = 'Newspapers';
        $Examiner[textshort] = 'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $Examiner[textlong] = 'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $Examiner[textrich] = '<p>The Chicago Public Library’s 10-year run of the <i>Examiner</i>, while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available. It is a quintessential example of yellow journalism.</p><p>Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> the deadliest U.S. building collapse in terms of firefighter deaths until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos, and illustrations; big early 19th century <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a></p>';
        $Examiner[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/6812/default.jpg',
            'text'=>'Chicago Examiner Vol. 7 no. 27',
            'size'=>'150%',
            'align'=>'78% 5%');
        $Examiner[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/51184/default.jpg',
                'text'=>'Chicago Examiner Vol. 13 no. 187',
                'size'=>'110px auto',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/12357/default.jpg',
                'text'=>'Chicago Examiner Vol. 6 no. 253',
                'size'=>'500px auto',
                'align'=>'10% 10%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/51163/default.jpg',
                'text'=>'Chicago Examiner Vol. 13 no. 186',
                'size'=>'350px auto',
                'align'=>'90% 60%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/477/default.jpg',
                'text'=>'Chicago Examiner Vol. 12 no. 63',
                'size'=>'200px',
                'align'=>'25% 10%'));
        $Examiner[highlights] = array(array('a'=>'http://chroniclingamerica.loc.gov/',
                                            'dt'=>'Library of Congress Chronicling America: Historic American Newspapers',
                                            'dd'=>'For more historic newspapers.'),
                                      array('a'=>'http://idnc.library.illinois.edu/',
                                            'dt'=>'Illinois Digital Newspaper Collections',
                                            'dd'=>'For more Illinois newspapers.'));
        $Examiner[link] = 'ChicagoExaminer.php';
        $Examiner[coll] = 'examiner';
        $Examiner[location] = 'HWLC';
        $Examiner[type] = 'collection';
        $Examiner[flag] = '1';

    $EB[title] = 'Esther A. Barlow Collection';
        $EB[sortname] = 'Barlow, Esther A. Collection';
        $EB[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg';
        $EB[pich] = '20rem';
        $EB[size] = '110%';
        $EB[pos] = 'auto';
        $EB[category] = 'Libraries &amp; Education';
        $EB[textshort] = 'Family photographs of Esther Barlow and images of her work at Hild Regional Library and Lake View Branch Library from 1927-1976.';
        $EB[textlong] = 'Esther Barlow was a children’s librarian in neighborhood branches of the Chicago Public Library from 1927 until 1976.';
        $EB[textrich] = 'Included in this collection are photographs of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Barlow%20family/field/subjed/mode/all/conn/and/order/nosort">Barlow family</a> and images of Esther Barlow at work at the Hild Regional Library and Lake View Branch Library. Photographs showcase Barlow with her colleagues and her <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Working%20with%20children/field/subjed/mode/all/conn/and/order/nosort">work with children. </a>';
        $EB[mainimage] = array(
            'url'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/52/default.jpg',
            'text'=>'Lake View Branch, Group picture, staff on front steps',
            'size'=>'',
            'align'=>'55% 50%');
        $EB[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/199/default.jpg',
                    'text'=>'Hild Regional Library, Children&rsquo;s Department, Story Hour in Welles Park',
                    'size'=>'400px',
                    'align'=>'15% 20%'),
                array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/70/default.jpg',
                    'text'=>'Lake View Branch, Esther Barlow at circulation desk',
                    'size'=>'500px',
                    'align'=>'53% 49%'),
                array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/16/default.jpg',
                    'text'=>'Portrait of Esther Barlow and Buddy Flaskerud sitting in a wagon.',
                    'size'=>'400px',
                    'align'=>'33% 22%'));
        $EB[link] = 'Barlow.php';
        $EB[coll] = 'bar';
        $EB[location] = 'NNHC';
        $EB[type] = 'collection';
        $EB[flag] = '8';

    $CPL[title] = 'Chicago Public Library Archives';
        $CPL[sortname] = 'Chicago Public Library Archives';
        $CPL[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/woop/45/default.jpg';
        $CPL[pich] = '200px;';
        $CPL[size] = '100%';
        $CPL[pos] = '50% -20px';
        $CPL[category] = 'Libraries &amp; Education';
        $CPL[textshort] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $CPL[textlong] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $CPL[link] = 'CPL.php';
        $CPL[coll] = 'woop';
        $CPL[location] = 'HWLC';
        $CPL[type] = 'collection';
        $CPL[flag] = '9';

    $ChiRen[title] = 'Chicago Renaissance';
        $ChiRen[sortname] = 'Chicago Renaissance';
        $ChiRen[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/12/default.jpg';
        $ChiRen[pich] = '20rem';
        $ChiRen[size] = 'auto';
        $ChiRen[pos] = 'auto';
        $ChiRen[category] = 'African Americans';
        $ChiRen[textshort] = 'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $ChiRen[textlong] = 'The Black Chicago Renaissance was a creative movement when activism and scholarship flourished with the prodigious work of African American community leaders, performers, artists, writers and activists.';
        $ChiRen[link] = 'ChiRen.php';
        $ChiRen[coll] = 'cr';
        $ChiRen[location] = 'Harsh';
        $ChiRen[type] = 'collection';
        $ChiRen[flag] = '10';
        
    $Sewers[title] = 'Chicago Sewers Collection';
        $Sewers[sortname] = 'Chicago Sewers Collection';
        $Sewers[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg';
        $Sewers[pich] = '200px';
        $Sewers[size] = '120%';
        $Sewers[pos] = '50% -20px';
        $Sewers[category] = 'Neighborhoods';
        $Sewers[textshort] = 'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago.';
        $Sewers[textlong] = 'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historic images features construction photographs of sewers and tunnels.';
        $Sewers[link] = 'Sewers.php';
        $Sewers[coll] = 'dtd';
        $Sewers[type] = 'collection';
        $Sewers[flag] = 'x';
        
    $Theater[title] = 'Chicago Theater Collection';
        $Theater[sidebartitle] = 'Theater';
        $Theater[sortname] = 'Chicago Theater Collection';
        $Theater[pic] = 'http://digital.chipublib.org/digital/image/CPB01/thumbnail';
        $Theater[pich] = '250px';
        $Theater[size] = '110%';
        $Theater[pos] = 'auto';
        $Theater[category] = '';
        $Theater[textshort] = 'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $Theater[textlong] = 'Chicago Public Library’s 10-year run of the Chicago Examiner extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $Theater[link] = 'Theater.php';
        $Theater[coll] = 'CPB01';
        $Theater[location] = 'HWLC';
        $Theater[type] = 'collection';
        $Theater[flag] = '4';
        $Theater[sidebarflag] = 'x';

    $Whalen[title] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $Whalen[sortname] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $Whalen[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/wha/341/default.jpg';
        $Whalen[pich] = '280px';
        $Whalen[size] = '110%';
        $Whalen[pos] = '50% 40%';
        $Whalen[category] = 'Civil War';
        $Whalen[textshort] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $Whalen[textlong] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $Whalen[link] = 'Whalen.php';
        $Whalen[coll] = 'wha';
        $Whalen[location] = 'HWLC';
        $Whalen[type] = 'collection';
        $Whalen[flag] = '2';

    $HDG[title] = 'Henry D. Green Photograph Collection';
        $HDG[sortname] = 'Green, Henry D. Photograph Collection';
        $HDG[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg';
        $HDG[pich] = '250px';
        $HDG[size] = '110%';
        $HDG[pos] = '50% 50%';
        $HDG[category] = 'Neighborhoods';
        $HDG[textshort] = 'Photographs by Henry Green of businesses, community groups, neighborhood celebrations, and school events on Chicago’s North Side, 1943-1951.';
        $HDG[textlong] = 'Chicago Public Library’s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago’s North Side.';
        $HDG[textrich] = 'Subjects in the collection include local <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Business%20establishments/field/subjed/mode/all/conn/and/order/nosort">business establishments</a>, community groups, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Religious%20institutions/field/subjed/mode/all/conn/and/order/nosort">religious institutions</a>, celebrations in neighborhood parks and events at local schools. Many photographs reflect life on the North Side during World War II, including images of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Military%20personnel/field/subjed/mode/all/conn/and/order/nosort">military personnel</a>.';
        $HDG[link] = 'Green.php';
        $HDG[findingaid] = array('text'=>'Henry Delorval Green Photograph Collection, 1942-1953','link'=>'http://chsmedia.org/media/fa/fa/1981/65.htm');
        $HDG[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/6/default.jpg',
                                       'text'=>'American Legion/Albany Park Post 24',
                                       'size'=>'110%',
                                       'align'=>'center');
        $HDG[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/174/default.jpg',
                                    'text'=>'Girl Scouts Troup 119 Tin Can Salvage',
                                    'size'=>'130%',
                                    'align'=>'40% 25%'),
                                    array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/669/default.jpg',
                                    'text'=>'Monadnock Coffee Shop',
                                    'size'=>'',
                                    'align'=>'47% 57%'),
                                    array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/345/default.jpg',
                                    'text'=>'Portrait of Henry Delorval Green',
                                    'size'=>'120%',
                                    'align'=>'45% 27%'),
                                    array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg',
                                    'text'=>'Chicago Fire Department',
                                    'size'=>'130%',
                                    'align'=>'center'));
        $HDG[coll] = 'hdg';
        $HDG[location] = 'NNHC';
        $HDG[type] = 'collection';
        $HDG[flag] = '7';
        
    $RK[title] = 'Robert W. Krueger Photograph Collection';
        $RK[sortname] = 'Krueger, Robert W. Photograph Collection';
        $RK[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg';
        $RK[pich] = '210px';
        $RK[size] = '100%';
        $RK[pos] = '50% 50%';
        $RK[category] = 'Neighborhoods';
        $RK[textshort] = 'Local photographer Robert Krueger documented Chicago’s North Side with photographs of community events, buildings, and people.';
        $RK[textlong] = 'In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side.';
        $RK[link] = 'Krueger.php';
        $RK[coll] = 'rwk';
        $RK[location] = 'NNHC';
        $RK[type] = 'collection';
        $RK[flag] = '6';

    $MP[title] = 'Millennium Park. U.S. Equities Realty Collection';
        $MP[sortname] = 'Millennium Park. U.S. Equities Realty Collection';
        $MP[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/mpu/2239/default.jpg';
        $MP[pich] = '240px';
        $MP[size] = '130%';
        $MP[pos] = '35% 50%';
        $MP[category] = 'Parks';
        $MP[textshort] = 'Transformation from rail yard to dynamic urban park.';
        $MP[textlong] = 'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects and artists.';
        $MP[link] = 'MillenniumPark.php';
        $MP[coll] = 'mpu';
        $MP[location] = 'HWLC';
        $MP[type] = 'collection';
        $MP[flag] = '3';
        
    $NCO[title] = 'Northside Clubs and Organizations';
        $NCO[sortname] = 'Northside Clubs and Organizations';
        $NCO[pic] = '';
        $NCO[pich] = '250px';
        $NCO[size] = '110%';
        $NCO[pos] = '50% 50%';
        $NCO[category] = 'Neighborhoods';
        $NCO[textshort] = '';
        $NCO[textlong] = '';
        $NCO[link] = 'NCO.php';
        $NCO[coll] = 'cfc';
        $NCO[location] = 'NNHC';
        $NCO[type] = 'collection';
        $NCO[flag] = 'x';

    $NHS[title] = 'Northside High Schools';
        $NHS[sortname] = 'Northside High Schools';
        $NHS[pic] = '';
        $NHS[pich] = '250px';
        $NHS[size] = '110%';
        $NHS[pos] = '50% 50%';
        $NHS[category] = 'Neighborhoods';
        $NHS[textshort] = '';
        $NHS[textlong] = '';
        $NHS[link] = 'NHS.php';
        $NHS[coll] = 'ahs';
        $NHS[location] = 'NNHC';
        $NHS[type] = 'collection';
        $NHS[flag] = 'x';

    $ParkDistrict[title] = 'Chicago Park District Records: Photographs';
        $ParkDistrict[sortname] = 'Chicago Park District Records: Photographs';
        $ParkDistrict[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
        $ParkDistrict[pich] = '250px';
        $ParkDistrict[size] = '110%';
        $ParkDistrict[pos] = '10% 5%';
        $ParkDistrict[category] = 'Parks';
        $ParkDistrict[textshort] = 'Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.';
        $ParkDistrict[textlong] = 'Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.';
        $ParkDistrict[link] = 'CPD.php';
        $ParkDistrict[coll] = 'ChicagoParks';
        $ParkDistrict[type] = 'collection';
        $ParkDistrict[flag] = 'x';

    $HW[title] = 'Remembering Harold Washington';
        $HW[sortname] = 'Remembering Harold Washington';
        $HW[sidebartitle] = 'Harold Washington';
        $HW[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg';
        $HW[pich] = '250px';
        $HW[size] = '200%';
        $HW[pos] = '75% 40%';
        $HW[category] = 'African Americans';
        $HW[textshort] = 'The first African American mayor of Chicago, serving from 1983 to 1987, and his importance in the city’s history.';
        $HW[textlong] = 'Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in the history of Chicago.';
        $HW[link] = 'HaroldWashington.php';
        $HW[coll] = 'rhwc';
        $HW[location] = 'HWLC';
        $HW[type] = 'collection';
        $HW[flag] = '5';
        $HW[sidebarflag] = 'x';
        
    $RWLV[title] = 'Ravenswood-Lake View Community Collection';
        $RWLV[sortname] = 'Ravenswood-Lake View Community Collection';
        $RWLV[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1086/default.jpg';
        $RWLV[pich] = '250px';
        $RWLV[size] = '250%';
        $RWLV[pos] = '24% 45%';
        $RWLV[category] = array('Neighborhoods','Libraries &amp; Education');
        $RWLV[textshort] = 'Street scenes and community life on the North Side, 1860s-1990s';
        $RWLV[textlong] = 'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
        $RWLV[link] = 'RWLV.php';
        $RWLV[coll] = 'rvw';
        $RWLV[location] = 'NNHC';
        $RWLV[type] = 'collection';
        $RWLV[flag] = '1';
        
    $Sang[title] = 'Philip David Sang Collection';
        $Sang[sortname] = 'Sang, Philip David Collection';
        $Sang[pic] = '';
        $Sang[category] = array('African Americans','Civil War');
        $Sang[textshort] = '';
        $Sang[textlong] = '';
        $Sang[link] = 'Sang.php';
        $Sang[coll] = 'p16818coll6';
        $Sang[location] = 'Harsh';
        $Sang[type] = 'collection';
        $Sang[flag] = '4';

//subcollections
            
    $Amund[title] = 'Amundsen High School Collection';
        $Amund[sortname] = 'Amundsen High School Collection';
        $Amund[textlong] = 'See <a href="#ahs">Northside High Schools Collection</a>';
        $Amund[link] = '#ahs';
        $Amund[type] = 'subcollection';

    $Kins[title] = 'Helen G. Kinsella Collection';
        $Kins[sortname] = 'Kinsella, Helen G. Collection';
        $Kins[textlong] = 'See <a href="#ahs">Northside High Schools Collection</a>';
        $Kins[link] = '#ahs';
        $Kins[type] = 'subcollection';

    $LVHS[title] = 'Lake View High School Collection';
        $LVHS[sortname] = 'Lake View High School Collection';
        $LVHS[textlong] = 'See <a href="#ahs">Northside High Schools Collection</a>';
        $LVHS[link] = '#ahs';
        $LVHS[type] = 'subcollection';

    $Walz[title] = 'Louis D. Walz Collection';
        $Walz[sortname] = 'Walz, Louis D. Collection';
        $Walz[textlong] = 'See <a href="#ahs">Northside High Schools Collection</a>';
        $Walz[link] = '#ahs';
        $Walz[type] = 'subcollection';

    $CFCC[title] = 'Christian Fellowship Church Collection';
        $CFCC[sortname] = 'Christian Fellowship Church Collection';
        $CFCC[textlong] = 'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $CFCC[link] = '#cfc';
        $CFCC[type] = 'subcollection';

    $LVCRA[title] = 'Lake View Council on Religious Action';
        $LVCRA[sortname] = 'Lake View Council on Religious Action';
        $LVCRA[textlong] = 'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $LVCRA[link] = '#cfc';
        $LVCRA[type] = 'subcollection';

    $PortPark[title] = 'Portage Park Community Collection';
        $PortPark[sortname] = 'Portage Park Community Collection';
        $PortPark[textlong] = 'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $PortPark[link] = '#cfc';
        $PortPark[type] = 'subcollection';

    $RMIA[title] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[sortname] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[textlong] = 'See <a href="#cfc">Northside Clubs and Organizations Collection</a>';
        $RMIA[link] = '#cfc';
        $RMIA[type] = 'subcollection';

    $HWR[title] = 'Washington, Harold';
        $HWR[sortname] = 'Washington, Harold';
        $HWR[textlong] = 'See <a href="#rhwc">Remembering Harold Washington</a>';
        $HWR[link] = '#rhwc';
        $HWR[type] = 'subcollection';

//categories

    $AfAm[title] = 'African Americans';
        $AfAm[sidebartitle] = 'African Americans';
        $AfAm[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg';
        $AfAm[pich] = '250px';
        $AfAm[size] = '110%';
        $AfAm[pos] = '50% 50%';
        $AfAm[textshort] = 'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $AfAm[textlong] = 'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $AfAm[catcoll] = 'materials documenting Black history in the United States';
        $AfAm[CPLRes] = array(array('a'=>'http://gatekeeper.chipublib.org/login?url=http://search.proquest.com/hnpchicagodefender/ip?accountid=303',
                                            'dt'=>'Chicago Defender Historical Archive',
                                            'dd'=>'Offers full text, including display and classified advertisements, of this nationally significant African American newspaper from 1910 to 1975.'),
                              array('a'=>'https://cpl.thehistorymakers.org/home',
                                            'dt'=>'HistoryMakers',
                                            'dd'=>'The largest African American video oral history archive in the world features interviews with African Americans who have made significant contributions in American life or culture.'),
                              array('a'=>'https://www.chipublib.org/tag/african-american-history/',
                                            'dt'=>'African American history blog posts',
                                            'dd'=>'Written by CPL librarians and staff.'));
        $AfAm[mainimage] = array('url'=>'hall033.jpg',
            'text'=>'Women&rsquo;s reading group at Hall Branch, 1940',
            'size'=>'100%',
            'align'=>'50% 0%');
        $AfAm[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/14/default.jpg',
                'text'=>'Women&rsquo;s Army Corps (WAC) Band, 1944',
                'size'=>'431px',
                'align'=>'0% 20%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/8/default.jpg',
                'text'=>'Marian Campfield at the Chicago Defender, 1948',
                'size'=>'140%',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/0/default.jpg',
                'text'=>'Richard Durham, 1948',
                'size'=>'112%',
                'align'=>'75% 45%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/6/default.jpg',
                'text'=>'Mayor Washington at the 27th Annual International Folk Fair',
                'size'=>'200%',
                'align'=>'40% 60%'),);
        $AfAm[link] = 'AfAm.php';
        $AfAm[coll] = 'cr!rhwc!p16818coll6';
        $AfAm[type] = 'category';
        $AfAm[flag] = 'x';
        $AfAm[sidebarflag] = 'x';

    $CivilWar[title] = 'Civil War';
        $CivilWar[sidebartitle] = 'Civil War';
        $CivilWar[pic] = '';
        $CivilWar[pich] = '250px';
        $CivilWar[size] = '110%';
        $CivilWar[pos] = '50% 50%';
        $CivilWar[textshort] = '';
        $CivilWar[textlong] = '';
        $CivilWar[link] = 'CivilWar.php';
        $CivilWar[coll] = 'wha!p16818coll6';
        $CivilWar[type] = 'category';
        $CivilWar[flag] = 'x';
        $CivilWar[sidebarflag] = 'x';

    //Harold Washington

    $LibEd[title] = 'Libraries &amp; Education';
        $LibEd[sidebartitle] = 'Libraries &amp; Education';
        $LibEd[pic] = '';
        $LibEd[pich] = '250px';
        $LibEd[size] = '110%';
        $LibEd[pos] = '50% 50%';
        $LibEd[textshort] = 'Various content about libraries and education';
        $LibEd[textlong] = 'Various content about libraries and education';
        $LibEd[link] = 'LibEd.php';
        $LibEd[coll] = '';
        $LibEd[type] = 'category';
        $LibEd[flag] = 'x';
        $LibEd[sidebarflag] = 'x';

    $News[title] = 'Chicago Newspapers';
        $News[sidebartitle] = 'Newspapers';
        $News[pic] = '';
        $News[pich] = '230px';
        $News[size] = '110%';
        $News[pos] = '50% 50%';
        $News[textshort] = '';
        $News[textlong] = '';
        $News[link] = 'Newspapers.php';
        $News[coll] = '';
        $News[type] = 'category';
        $News[flag] = 'x';
        $News[sidebarflag] = 'x';

    $Neigh[title] = 'Chicago Neighborhoods';
        $Neigh[sidebartitle] = 'Neighborhoods';
        $Neigh[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg';
        //$Neigh[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
        $Neigh[pich] = '230px';
        $Neigh[size] = '110%';
        $Neigh[pos] = '50% 50%';
        $Neigh[textshort] = 'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
        $Neigh[textlong] = 'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
        $Neigh[link] = 'Neighborhoods.php';
        $Neigh[coll] = '';
        $Neigh[type] = 'category';
        $Neigh[flag] = 'x';
        $Neigh[sidebarflag] = 'x';

    $Parks[title] = 'Chicago Parks';
        $Parks[sidebartitle] = 'Parks';
        $Parks[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg';
        $Parks[pich] = '250px';
        $Parks[size] = '110%';
        $Parks[pos] = '10% 5%';
        $Parks[textshort] = 'Visit Chicago’s vast collection of parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to over 500 parks today.';
        $Parks[textlong] = 'Visit Chicago’s vast collection of parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to over 500 parks today.  ';
        $Parks[link] = 'Parks.php';
        $Parks[coll] = '';
        $Parks[type] = 'category';
        $Parks[flag] = 'x';
        $Parks[sidebarflag] = 'x';

    //Theater

//locations
    $HWLCSC[title] = 'Special Collections at HWLC';
        $HWLCSC[sortname] = 'Special Collections at HWLC';
        $HWLCSC[sidebartitle] = 'Special Collections at HWLC';
        $HWLCSC[pic] = '';
        $HWLCSC[textshort] = 'at Harold Washington Library Center';
        $HWLCSC[textlong] = '';
        $HWLCSC[link] = 'HWLCSC.php';
        $HWLCSC[coll] = '';
        $HWLCSC[type] = 'location';

    $MRC[title] = 'Municipal Reference Collection';
        $MRC[sortname] = 'Municipal Reference Collection';
        $MRC[sidebartitle] = 'Municipal Reference Collection';
        $MRC[pic] = '';
        $MRC[textshort] = 'at Harold Washington Library Center';
        $MRC[textlong] = '';
        $MRC[link] = 'MRC.php';
        $MRC[coll] = '';
        $MRC[type] = 'location';

    $NNHC[title] = 'Northside Neighborhood History Collection';
        $NNHC[sortname] = 'Northside Neighborhood History Collection';
        $NNHC[sidebartitle] = 'Northside Neighborhood History Collection';
        $NNHC[pic] = '';
        $NNHC[textshort] = 'at Sulzer Regional Library';
        $NNHC[textlong] = '';
        $NNHC[link] = 'Sulzer.php';
        $NNHC[coll] = '';
        $NNHC[type] = 'location';

    $Harsh[title] = 'Vivian G. Harsh Collection';
        $Harsh[sortname] = 'Harsh Collection';
        $Harsh[sidebartitle] = 'Vivian G. Harsh Collection';
        $Harsh[pic] = '';
        $Harsh[textshort] = 'at Woodson Regional Library';
        $Harsh[textlong] = 'The largest African American history and literature collection in the Midwest, the Vivian G. Harsh Research Collection of Afro-American History and Literature documents the black experience with a strong focus on Chicago.';
        $Harsh[link] = 'Harsh.php';
        $Harsh[coll] = 'cr!p16818coll6';
        $Harsh[type] = 'location';
    
        // $[title] = '';
        // $[sortname] = '';
        // $[pic] = '';
        // $[category] = '';
        // $[textshort] = '';
        // $[textlong] = '';
        // $[link] = '';
        // $[coll] = '';
        // $[type] = '';
        // $[flag] = '';
        
// misc arrays

    $cards = array($Examiner, $EB, $CPL, $ChiRen, $Sewers, $Theater, $Whalen, 
                   $HDG, $RK, $MP, $NCO, $NHS, $ParkDistrict, $HW, $RWLV, $Sang, $Amund, 
                   $Kins, $LVHS, $Walz, $CFCC, $LVCRA, $PortPark, $RMIA, $HWR, $AfAm, 
                   $CivilWar, $LibEd, $News, $Neigh, $Parks, $HWLCSC, $MRC, $NNHC, $Harsh);

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