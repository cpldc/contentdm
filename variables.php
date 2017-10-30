<?php
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);

        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }

//array(array('a'=>'','dt'=>'','dd'=>''));
    $All[title] = 'Digital Collections A-Z';
    $About[title] = 'About CPL Digital Collections';
    $Takedown[title] = 'Notice and Takedown Policy';
    $Takedown[textlong] = 'Notice to users: The Chicago Public Library works to ensure that it has appropriate rights to provide access to content through the Digital Collections website. These materials are made available for educational and scholarly use.';
    $Takedown[mainimage] = array('url'=>'default.jpg','text'=>'Notice and Takedown Policy','size'=>'cover','align'=>'center');
    $Takedown[textrich] = 'If you are a rights holder and are concerned that you have found material on the Chicago Public Library&rsquo;s Digital Collections Website without your permission and believe our inclusion of this material on the Digital Collections Website violates your rights (e.g. inclusion is not covered by the Fair Use or other exemption to a copyright holder&rsquo;s rights), please contact webmaster@chipublib.org and include the following:
        <ul><li>Your contact information (including email address and phone),</li>
        <li>Exact URL where you found the material,</li>
        <li>Details that describe the material (title, collection name, number of items, etc.),</li>
        <li>The reason why you believe that your rights have been violated, with any pertinent documentation,</li>
        <li>A statement that you in good faith believe that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law, and</li>
        <li>A statement that the information in your notification is accurate and that you are the rights holder or are authorized to act on behalf of the owner.</li></ul>
        <p>Upon receipt of a request, Chicago Public Library staff will:</p>
        <ul>
        <li>Promptly acknowledge the request via email or other means of communication if you do not have an email account;</li>
        <li>Assess the validity of the request;</li>
        <li>Upon request, we may temporarily remove the material from public view while we assess the concern.</li>
        </ul><p>Upon completion of the assessment, we will take appropriate action and communicate that action to you.</p>';
    
//collections
    $Examiner[title] = 'Chicago Examiner';
        $Examiner[sortname] = 'Chicago Examiner';
        $Examiner[cardpic] = array('pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/5449/default.jpg','pich'=>'19rem','size'=>'110% auto','pos'=>'50% -15px');
        $Examiner[category] = 'Newspapers';
        $Examiner[textshort] = 'Chicago Public Library&rsquo;s 10-year run of the <i>Chicago Examiner</i> extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $Examiner[textlong] = 'Chicago Public Library&rsquo;s 10-year run of the <i>Chicago Examiner</i> extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $Examiner[textrich] = '<p>The Chicago Public Library&rsquo;s 10-year run of the <i>Examiner</i>, while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available. It is a quintessential example of yellow journalism.</p><p>Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> the deadliest U.S. building collapse in terms of firefighter deaths until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos, and illustrations; and big early 19th century <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a></p>';
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
        $Examiner[CPLRes] = array(array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/',
                                            'dt'=>'Chicago Newspapers',
                                            'dd'=>'Online and microfilm'),
                                        array('a'=>'https://www.chipublib.org/?post_type=post&s=newspapers',
                                            'dt'=>'Newspaper blog posts',
                                            'dd'=>'Written by CPL librarians and staff.'));
        $Examiner[ExRes] = array(array('a'=>'http://chroniclingamerica.loc.gov/',
                                            'dt'=>'Library of Congress Chronicling America: Historic American Newspapers',
                                            'dd'=>'Digitized newspapers from all 50 states, 1789-1943.'),
                                        array('a'=>'http://idnc.library.illinois.edu/',
                                            'dt'=>'Illinois Digital Newspaper Collections',
                                            'dd'=>'111 Illinois newspapers dating back to 1831.'));
        $Examiner[link] = 'Examiner';
        $Examiner[coll] = 'examiner';
        $Examiner[location] = 'HWLC';
        $Examiner[type] = 'collection';
        $Examiner[flag] = '1';

    $EB[title] = 'Esther A. Barlow Collection';
        $EB[sortname] = 'Barlow, Esther A. Collection';
        $EB[cardpic] = array('pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg','pich'=>'20rem','size'=>'110%','pos'=>'auto');
        $EB[category] = 'Libraries &amp; Education';
        $EB[textshort] = 'Family photographs of Esther Barlow and images of her work at Hild Regional Library and Lake View Branch Library from 1927-1976.';
        $EB[textlong] = 'Esther Barlow was a children&rsquo;s librarian in neighborhood branches of the Chicago Public Library from 1927 until 1976.';
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
        $EB[link] = 'EB';
        $EB[coll] = 'bar';
        $EB[location] = 'Northside Neighborhood History Collection';
        $EB[type] = 'collection';
        $EB[flag] = '8';

    $CPL[title] = 'Chicago Public Library Archives';
        $CPL[sortname] = 'Chicago Public Library Archives';
        $CPL[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/woop/45/default.jpg',
            'pich'=>'200px;',
            'size'=>'100%',
            'pos'=>'50% -20px',
        );
        $CPL[category] = 'Libraries &amp; Education';
        $CPL[textshort] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $CPL[textlong] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $CPL[textrich] = '<p>On January 1, 1873, Chicago Public Library opened its doors in a <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a> at the southeast corner of LaSalle and Adams streets that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to a system of 80 locations across the city. </p><p>Explore CPL through those years, from <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Delivery+stations/field/subjed/mode/all/conn/and/order/nosort">delivery stations</a> in the late 19th century to <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/woop/searchterm/Bookmobiles/field/subjed/mode/all/conn/and/order/nosort">bookmobiles</a> in the mid-20th century to <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/bar/searchterm/Working%20with%20children!Hild%20Regional%20Library/field/subjed!all/mode/all!all/conn/and!and/order/nosort/ad/asc">Hild Regional Library</a> in the 1970s. </p>';
        $CPL[mainimage] = array('url'=>'',
                'text'=>'',
                'size'=>'150%',
                'align'=>'78% 5%');
        $CPL[thumbs] = array(array('url'=>'',
                    'text'=>'',
                    'size'=>'110px auto',
                    'align'=>'center'),
                array('url'=>'',
                    'text'=>'',
                    'size'=>'500px auto',
                    'align'=>'10% 10%'),
                array('url'=>'',
                    'text'=>'',
                    'size'=>'350px auto',
                    'align'=>'90% 60%'),
                array('url'=>'',
                    'text'=>'',
                    'size'=>'200px',
                    'align'=>'25% 10%'));
        $CPL[link] = 'CPL';
        $CPL[coll] = 'woop';
        $CPL[location] = 'HWLC';
        $CPL[type] = 'collection';
        $CPL[flag] = '9';

    $ChiRen[title] = 'Chicago Renaissance';
        $ChiRen[sortname] = 'Chicago Renaissance';
        $ChiRen[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/12/default.jpg',
            'pich'=>'20rem',
            'size'=>'100%',
            'pos'=>'auto'
        );
        $ChiRen[category] = 'African Americans';
        $ChiRen[textshort] = 'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $ChiRen[textlong] = 'The Black Chicago Renaissance was a creative movement when activism and scholarship flourished with the prodigious work of African American community leaders, performers, artists, writers and activists.';
        $ChiRen[textrich] = '<p>During and after the Great Depression (1930s-1950s), African Americans in Chicago created a new community on the South Side that was distinctly their own.</p><p>In <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/cr/searchterm/Literature/field/subjed/mode/all/conn/and/order/nosort">literature</a> the Black Chicago Renaissance was represented by such giants as Richard Wright, Gwendolyn Brooks, Margaret Walker, Arna Bontemps and Fenton Johnson. The explosion of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/cr/searchterm/Music/field/subjed/mode/all/conn/and/order/nosort">musical</a> creativity in <a href="http://digital.chipublib.org/digital/collection/cr/search/searchterm/Bronzeville%20(Chicago%2C%20Ill.)!art/field/neighb!subjec/mode/all!all/conn/and!and/order/title/ad/asc">Bronzeville</a>&rsquo;s clubs and concert halls ranged from classical to jazz and from gospel to blues and pop. A new <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/cr/searchterm/Social%20Science/field/subjed/mode/all/conn/and/order/nosort">social science</a> of Black urban life was born with the writing of St. Clair Drake and Horace Cayton&rsquo;s Black Metropolis. The <a href="http://digital.chipublib.org/digital/search/searchterm/art/field/subjec/mode/exact/conn/and/order/nosort/ad/asc">art</a> of William McBride, William Edouard Scott, Gordon Parks, Archibald Motley, Jr. and other local Chicago Black artists defined the era.</p>';
        $ChiRen[findingaid] = array(
            array('link'=>'https://www.chipublib.org/fa-charles-walton-papers/','text'=>'Charles Walton Papers finding aid'),
            array('link'=>'https://www.chipublib.org/fa-george-cleveland-hall-branch-archives/','text'=>'Chicago Public Library, George Cleveland Hall Branch Archives finding aid'),
            array('link'=>'https://www.chipublib.org/fa-horace-r-cayton-papers/','text'=>'Horace Cayton Papers finding aid'),
            array('link'=>'https://www.chipublib.org/fa-william-mcbride-papers/','text'=>'William McBride, Jr. Papers finding aid'));
        $ChiRen[CPLRes] = array(array('a'=>$AfAm[link],'dt'=>'African American digital collections','dd'=>'Digital collections that include materials documenting Black history in the United States.'));
        $ChiRen[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/1/default.jpg',
            'text'=>'Horace Cayton with "Blue Boy," 1944',
            'size'=>'110%',
            'align'=>'50% 0');
        $ChiRen[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/11/default.jpg',
                'text'=>'Langston Hughes and Gwendolyn Brooks, 1949',
                'size'=>'100%',
                'align'=>'50% 10%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg',
                'text'=>'Richard Durham, 1948',
                'size'=>'150%',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/15/default.jpg',
                'text'=>'C.L. Cook and his Dreamland Orchestra, 1923',
                'size'=>'150%',
                'align'=>'center'));
        $ChiRen[link] = 'ChiRen';
        $ChiRen[coll] = 'cr';
        $ChiRen[location] = 'Harsh';
        $ChiRen[type] = 'collection';
        $ChiRen[flag] = '10';
        
    $Sewers[title] = 'Chicago Sewers Collection';
        $Sewers[sortname] = 'Chicago Sewers Collection';
        $Sewers[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg',
            'pich'=>'200px',
            'size'=>'120%',
            'pos'=>'50% -20px'
        );
        $Sewers[category] = 'Neighborhoods';
        $Sewers[textshort] = 'Photographs of sewer systems and passageways from 1925-1949 offer a rare look at the underbelly of Chicago.';
        $Sewers[textlong] = 'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historic images features construction photographs of sewers and tunnels.';
        $Sewers[textrich] = '<p>In 1955, Boston engineer Ellis S. Chesbrough was invited to Chicago to design the first comprehensive system of underground sewers in the United States. His work lifted the city to make room for the new sewers with became the most extensive in the world. In the more than 150 years since Chicago&rsquo;s Department of Water Management continues to service and maintain this underground system.  </p><p>Take a look at these wonders in images from the 1920s-1960s as you start  <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Above+ground/field/contri/mode/all/conn/and/order/nosort">above ground</a> and work your way below the surface along <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Avenue+J/field/subjec/mode/all/conn/and/order/nosort">Avenue J</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/California+Avenue/field/subjec/mode/all/conn/and/order/nosort">California</a> and <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/dtd/searchterm/Elston+Avenue/field/subjec/mode/all/conn/and/order/nosort">Elston</a> Avenues among others. </p>';
        $Sewers[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-sewers-collection/','dt'=>'Chicago Sewers Collection finding aid','dd'=>'The complete list of photographs, glass plate slides and documents, rich with geographic and technical details.'));
        $Sewers[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/167/default.jpg',
            'text'=>'103rd Street and Rockwell Street, inspecting tile, June 1936',
            'size'=>'',
            'align'=>'center');
        $Sewers[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/150/default.jpg',
                'text'=>'Magnolia Avenue sewer system, August 11, 1933',
                'size'=>'400%',
                'align'=>'61% 37%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/142/default.jpg',
                'text'=>'Broadway Street, 9 foot sewer in Rokeby Street [now Fremont Street], August 24, 1927',
                'size'=>'250%',
                'align'=>'30% 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/144/default.jpg',
                'text'=>'Bryn Mawr Avenue, bricklayers, north heading, July 9, 1930',
                'size'=>'250%',
                'align'=>'0 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/155/default.jpg',
                'text'=>'103rd Street and Rockwell Street, Pipe Yard, watering pipe, June 16, 1936',
                'size'=>'250%',
                'align'=>'40% 35%'));
        $Sewers[link] = 'Sewers';
        $Sewers[coll] = 'dtd';
        $Sewers[type] = 'collection';
        $Sewers[flag] = 'x';
        
    $Theater[title] = 'Chicago Theater Collection';
        $Theater[shortname] = 'Theater';
        $Theater[sortname] = 'Chicago Theater Collection';
        $Theater[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/image/CPB01/thumbnail',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'auto'
        );
        $Theater[category] = '';
        $Theater[textshort] = 'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $Theater[textlong] = 'A list of theater collections at Chicago Public Library representing theaters, designers, actors and more.';
        $Theater[textrich] = '<p>Become a playgoer at Chicago&rsquo;s great early theaters. Examine more than 2,000 playbills and programs dating from 1848 to 1922. Of special interest are playbills from shows starring <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Booth%2C%20Edwin%2C%201833-1893/field/contri/mode/all/conn/and/order/title/ad/asc">Edwin Booth</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Jefferson%2C%20Joseph%2C%201829-1905/field/contri/mode/all/conn/and/order/title/ad/asc">Joseph Jefferson</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Bernhardt%2C%20Sarah%2C%201844-1923/field/contri/mode/all/conn/and/order/title/ad/asc">Sarah Bernhardt</a> at the well-known <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/mcvicker\'s/field/theata/mode/all/conn/and/order/title/ad/asc">McVicker&rsquo;s Theatre</a> as well as playbills from vaudeville houses and neighborhood theaters.</p><p>Alongside straight plays and musical works, numerous genres are represented in the collection, including <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/extravaganzas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">extravaganzas</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/juggling%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">juggling</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/operettas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">operettas</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/tragedies%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">tragedies</a>, among others.</p><p>The Historic Programs digital collection is made possible by a generous grant from the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.</p>';
        $Theater[rights] = 'The Historic Programs digital collection is made possible by a generous grant from the Gaylord and Dorothy Donnelley Foundation through the Chicago Public Library Foundation.';
        $Theater[highlights] = array(array('a'=>'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/','dt'=>'Chicago Theater Collection-Historic Playbills','dd'=>'Programs, playbills and newspaper clippings from more than 5,000 productions at Chicago&rsquo;s historic theaters dating back to the 1840s.'),
                                    array('a'=>'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc','dt'=>'E.B. Gould Programs Collection','dd'=>'The annotated programs of a local Chicago businessman and enthusiastic playgoer.'));
        $Theater[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-theater-collection-historic-programs/','dt'=>'Chicago Theater Collection-Historic Programs finding aid','dd'=>'The complete and ever-increasing inventory of theater programs past and present, some of which are presented here.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/theater/','dt'=>'Chicago Theater Collection','dd'=>'A list of theater collections at Chicago Public Library representing theaters, designers, actors and more.'));
        $Theater[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6053/default.jpg',
            'text'=>'McVicker&rsquo;s Theatre, Camille (January 13, 1881)',
            'size'=>'134%',
            'align'=>'52% 15%');
        $Theater[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/8601/default.jpg',
                'text'=>'Chicago Little Theatre, Evening with Columbine (October 21, 1913)',
                'size'=>'200%',
                'align'=>'50% 85%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6272/default.jpg',
                'text'=>'Iroquois Theatre, Blue Beard (December 21, 1903)',
                'size'=>'110%',
                'align'=>'50% 30%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/6748/default.jpg',
                'text'=>'McVicker&rsquo;s Theatre, Rivals (May 15, 1896)',
                'size'=>'140%',
                'align'=>'50% 40%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/CPB01/9755/default.jpg',
                'text'=>'Chicago Opera House, Mikado (March 6, 1886)',
                'size'=>'200%',
                'align'=>'68% 47%'));
        $Theater[link] = 'Theater';
        $Theater[coll] = 'CPB01';
        $Theater[location] = 'HWLC';
        $Theater[type] = 'collection';
        $Theater[flag] = '4';
        $Theater[sidebarflag] = 'x';

    $Whalen[title] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $Whalen[sortname] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $Whalen[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/341/default.jpg',
            'pich'=>'280px',
            'size'=>'110%',
            'pos'=>'50% 40%'
        );
        $Whalen[category] = 'Civil War';
        $Whalen[textshort] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $Whalen[textlong] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $Whalen[textrich] = '<p>Illinois supported the Union effort by sending hundreds of thousands of troops into battle, but the Civil War was also fought on the homefront. </p><p>Examine artifacts and photographs from both arenas, with a focus on the Illinois experience. Highlights include <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/camp+life/field/subjeb/mode/all/conn/and/order/title/ad/asc">camp life</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/small+arms/field/all/mode/exact/conn/and/order/nosort/ad/asc">swords</a> and <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/wha/searchterm/clothing/field/all/mode/exact/conn/and/order/nosort/ad/asc">uniforms</a>.</p> ';
        $Whalen[rights] = '<p>The Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections is made possible by generous gifts to <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a> by the partners of Skadden, Arps, Slate, Meagher &amp; Flom LLP in honor of Wayne Whalen&rsquo;s interest in Abraham Lincoln and the Civil War.</p>';
        $Whalen[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/','dt'=>'American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collections finding aid','dd'=>'A large portion of this collection focuses on the experience of soldiers and leaders from Illinois.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/military/','dt'=>'Military Archival Collections','dd'=>'A list of all archival collections related to the Civil War and other military topics, including records of the Daughters of Union Veterans of the Civil War, 1861-1865, and personal collections of service members.'));
        $Whalen[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/634/default.jpg',
            'text'=>'Photographic Views of Sherman&rsquo;s Campaign by George N. Barnard',
            'size'=>'auto 575px',
            'align'=>'center');
        $Whalen[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/116/default.jpg',
                'text'=>'Sword, Model 1850 Staff and Field Officer',
                'size'=>'auto 120px',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/721/default.jpg',
                'text'=>'Uniform, artillery jacket',
                'size'=>'auto 120px',
                'align'=>'50% 15%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/35/default.jpg',
                'text'=>'Grant, Ulysses S.',
                'size'=>'120px auto',
                'align'=>'50% 20%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/38/default.jpg',
                'text'=>'Union Ticket',
                'size'=>'110px auto',
                'align'=>'55% 15%'));
        $Whalen[link] = 'Whalen';
        $Whalen[coll] = 'wha';
        $Whalen[location] = 'HWLC';
        $Whalen[type] = 'collection';
        $Whalen[flag] = '2';

    $HDG[title] = 'Henry D. Green Photograph Collection';
        $HDG[sortname] = 'Green, Henry D. Photograph Collection';
        $HDG[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $HDG[category] = 'Neighborhoods';
        $HDG[textshort] = 'Photographs by Henry Green of businesses, community groups, neighborhood celebrations, and school events on Chicago&rsquo;s North Side, 1943-1951.';
        $HDG[textlong] = 'Chicago Public Library&rsquo;s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago&rsquo;s North Side.';
        $HDG[textrich] = 'Subjects in the collection include local <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Business%20establishments/field/subjed/mode/all/conn/and/order/nosort">business establishments</a>, community groups, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Religious%20institutions/field/subjed/mode/all/conn/and/order/nosort">religious institutions</a>, celebrations in neighborhood parks and events at local schools. Many photographs reflect life on the North Side during World War II, including images of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/hdg/searchterm/Military%20personnel/field/subjed/mode/all/conn/and/order/nosort">military personnel</a>.';
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
        $HDG[link] = 'HDG';
        $HDG[coll] = 'hdg';
        $HDG[location] = 'Northside Neighborhood History Collection';
        $HDG[type] = 'collection';
        $HDG[flag] = '7';
        
    $RK[title] = 'Robert W. Krueger Photograph Collection';
        $RK[sortname] = 'Krueger, Robert W. Photograph Collection';
        $RK[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg',
            'pich'=>'210px',
            'size'=>'100%',
            'pos'=>'50% 50%'
        );
        $RK[category] = 'Neighborhoods';
        $RK[textshort] = 'Local photographer Robert Krueger documented Chicago&rsquo;s North Side with photographs of community events, buildings and people.';
        $RK[textlong] = 'In 1984, Chicago Public Library began working with local photographer Robert Krueger to document the North Side.';
        $RK[textrich] = '<p>Krueger photographed hundreds of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Restaurants/field/subjed/mode/all/conn/and/order/nosort">restaurants</a>, street scenes, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Parks/field/genre/mode/all/conn/and/order/nosort">parks</a>, businesses, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Schools/field/genre/mode/all/conn/and/order/nosort">schools</a>, houses,  <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rwk/searchterm/Cemeteries/field/genre/mode/all/conn/and/order/nosort">cemeteries</a>, religious institutions, community events and residents of North Side neighborhoods. These photographs are a sample of his work.</p>';
        $RK[CPLRes] = array(array('a'=>'https://www.chipublib.org/archival_post/robert-w-krueger-photograph-collection/','dt'=>'Robert W. Krueger Photograph Collection finding aid','dd'=>'Descriptive inventory for the complete physical collection'),
                    array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/','dt'=>'Chicago Newspapers','dd'=>'Online and microfilm'));
        $RK[ExRes] = array(array('a'=>'http://www.ravenswoodhistorical.com/','dt'=>'Ravenswood-Lake View Historical Association','dd'=>'Programs, publications and tours focusing on Chicago northside neighborhood history.'),
                    array('a'=>'http://www.edgewaterhistory.org/ehs/','dt'=>'Edgewater Historical Society','dd'=>'Exhibits, events and tours of the Edgewater neighborhood.'));
        $RK[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/414/default.jpg',
            'text'=>'47th and 48th Ward clean-up on Clark Street',
            'size'=>'150%',
            'align'=>'50% 30%');
        $RK[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/412/default.jpg',
                'text'=>'German-American Festival',
                'size'=>'300%',
                'align'=>'50% 35%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/349/default.jpg',
                'text'=>'Picasso statue unveiled at the Civic Center Plaza',
                'size'=>'120%',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/828/default.jpg',
                'text'=>'Henry C. Krueger with future wife Marie Wahl, her sister Lydia Wahl, and a friend',
                'size'=>'200%',
                'align'=>'50% 25%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg',
                'text'=>'1720-22 West Leland Avenue',
                'size'=>'140%',
                'align'=>'center'));
        $RK[link] = 'RK';
        $RK[coll] = 'rwk';
        $RK[location] = 'Northside Neighborhood History Collection';
        $RK[type] = 'collection';
        $RK[flag] = '6';

    $MP[title] = 'Millennium Park. U.S. Equities Realty Collection';
        $MP[sortname] = 'Millennium Park. U.S. Equities Realty Collection';
        $MP[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/2239/default.jpg',
            'pich'=>'240px',
            'size'=>'130%',
            'pos'=>'35% 50%'
        );
        $MP[category] = 'Parks';
        $MP[textshort] = 'Transformation from rail yard to dynamic urban park.';
        $MP[textlong] = 'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects and artists.';
        $MP[textrich] = '<p>Follow the construction of <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/BP+Bridge/field/book/mode/exact/conn/and/order/origin">BP Pedestrian Bridge</a>, the first bridge designed by Frank Gehry; Anish Kapoor&rsquo;s monumental public sculpture, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Cloud+Gate/field/book/mode/exact/conn/and/order/origin">Cloud Gate</a>, aka The Bean; the Gehry-designed <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Jay%20Pritzker%20Pavilion/field/book/mode/exact/conn/and/order/origin">Jay Pritzker Pavillion</a>, a soaring bandshell that hosts the U.S.&rsquo;s last free outdoor classical music series; Jaume Plensa&rsquo;s <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Crown%20Fountain/field/book/mode/exact/conn/and/order/origin">Crown Fountain</a>, a cascading interactive video sculpture. Take in sweeping views with <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/Full%20Park/field/book/mode/all/conn/and/order/origin/page/1">full park images</a>.</p>';
        $MP[highlights] = array(array('a'=>'http://cdm16818.contentdm.oclc.org/cdm/search/collection/mpu/searchterm/highlight/field/highli/mode/all/conn/and/order/origin','dt'=>'Collection overview','dd'=>'Get a taste of how this transformation took place in a selected group of images.'));
        $MP[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-millennium-park-inc/','text'=>'Millennium Park, Inc. Archives finding aid'),
                            array('link'=>'https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/','text'=>'Millennium Park / U.S. Equities Realty Collection finding aid'));
        $MP[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=Millennium+Park','dt'=>'Millennium Park blog posts','dd'=>'by CPL librarians and staff'));
        $MP[rights] = 'The Millennium Park Digital Collection was made possible by generous gifts from U.S. Equities Realty and the Gaylord and Dorothy Donnelley Foundation through the Chicago Public Library Foundation.';
        $MP[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/1297/default.jpg',
            'text'=>'Millennium Monument at Wrigley Square, peristyle in winter, ca. 2003',
            'size'=>'110%',
            'align'=>'center');
        $MP[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/1543/default.jpg',
                'text'=>'Cloud Gate, attaching steel plates, omphalos, March 22, 2004',
                'size'=>'140%',
                'align'=>'40% 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4390/default.jpg',
                'text'=>'Crown Fountain, gargoyle spray, July 22, 2004',
                'size'=>'140%',
                'align'=>'40% 60%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4781/default.jpg',
                'text'=>'Jay Pritzker Pavilion, headdress, March 4, 2004',
                'size'=>'160%',
                'align'=>'70% 0'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4662/default.jpg',
                'text'=>'Jay Pritzker Pavilion, structural steel for the headdress, May 29, 2003',
                'size'=>'',
                'align'=>'center'));
        $MP[link] = 'MP';
        $MP[coll] = 'mpu';
        $MP[location] = 'HWLC';
        $MP[type] = 'collection';
        $MP[flag] = '3';
        
    $NCO[title] = 'Northside Clubs and Organizations';
        $NCO[sortname] = 'Northside Clubs and Organizations';
        $NCO[cardpic] = array(
            'pic'=>'',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $NCO[category] = 'Neighborhoods';
        $NCO[textshort] = '';
        $NCO[textlong] = '';
        $NCO[link] = 'NCO';
        $NCO[coll] = 'cfc';
        $NCO[location] = 'Northside Neighborhood History Collection';
        $NCO[type] = 'collection';
        $NCO[flag] = 'x';

    $NHS[title] = 'Northside High Schools';
        $NHS[sortname] = 'Northside High Schools';
        $NHS[cardpic] = array(
            'pic'=>'',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $NHS[category] = array('Neighborhoods','Libraries &amp; Education');
        $NHS[textshort] = '';
        $NHS[textlong] = '';
        $NHS[link] = 'NHS';
        $NHS[coll] = 'ahs';
        $NHS[location] = 'Northside Neighborhood History Collection';
        $NHS[type] = 'collection';
        $NHS[flag] = 'x';

    $CPD[title] = 'Chicago Park District Records: Photographs';
        $CPD[sortname] = 'Chicago Park District Records: Photographs';
        $CPD[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1539/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'10% 5%'
        );
        $CPD[category] = 'Parks';
        $CPD[textshort] = 'Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.';
        $CPD[textlong] = 'Chicago Public Library is currently finalizing the Chicago Park District Records, which will be available in 2018.';
        $CPD[link] = 'CPD';
        $CPD[coll] = 'ChicagoParks';
        $CPD[type] = 'collection';
        $CPD[flag] = 'x';

    $HW[title] = 'Remembering Harold Washington';
        $HW[sortname] = 'Remembering Harold Washington';
        $HW[shortname] = 'Harold Washington';
        $HW[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg',
            'pich'=>'250px',
            'size'=>'200%',
            'pos'=>'75% 40%'
        );
        $HW[category] = 'African Americans';
        $HW[textshort] = 'The first African American mayor of Chicago, serving from 1983 to 1987 and his importance in the city&rsquo;s history.';
        $HW[textlong] = 'Harold Washington was the first African American mayor of Chicago, serving from 1983 to 1987. This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in the history of Chicago.';
        $HW[textrich] = '<p>This collection captures Mayor Washington at community, political, and charity events and demonstrates his importance in <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Politics/field/subjed/mode/all/conn/and/order/nosort">politics</a> and the history of Chicago.</p><p>Photographs in this collection capture Harold Washington&rsquo;s work with <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Constituency%20groups/field/subjed/mode/all/conn/and/order/nosort">ethnic and constituency groups</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Famous%20persons/field/subjed/mode/all/conn/and/order/nosort">famous people</a>, <a href="http://cdm16818.contentdm.oclc.org/cdm/search/collection/rhwc/searchterm/Groundbreaking/field/subjed/mode/all/conn/and/order/nosort">groundbreaking and development projects</a> and more.</p><p>Chicago Public Library also holds an extensive <a href="https://www.chipublib.org/archival_subject/harold-washington/">Harold Washington Reseach Collection</a>.  Selections from those collections can be found in the Finding Aids section below.';
        $HW[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/post/welcome-to-the-municipal-reference-collection/','dt'=>'Municipal Reference Collection','dd'=>'Collections include local government publications, city election results, maps, municipal ordinances, and more.'),
                    array('a'=>'https://www.chipublib.org/fa-brenetta-howell-barrett-papers/','dt'=>'Brenetta Howell Barrett Papers finding aid','dd'=>'Barrett served in the mayoral administrations of Harold Washington and Eugene Sawyer. She was a political activist for housing, environmental and civil liberties issues.'),
                    array('a'=>'https://www.chipublib.org/tag/harold-washington/','dt'=>'Harold Washington blog posts','dd'=>'Written by CPL librarians and staff.'),
                    array('a'=>'https://www.chipublib.org/mayor-harold-washington-biography/','dt'=>'Mayor Harold Washington Biography','dd'=>'A list of Mayor Harold Washington&rsquo;s education, military service, career and selected accomplishments.'));
        $HW[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-campaign-records/',
                                    'text'=>'Mayoral Campaign Records finding aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-records-press-office-records/',
                                    'text'=>'Mayoral Records, Press Office Records finding aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-and-collections-illinois-state-representative-records/',
                                    'text'=>'Illinois State Representative Records finding aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-and-collections-pre-mayoral-photograph-collection/',
                                    'text'=>'Pre-Mayoral Photograph Collection finding aid'));
        $HW[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/73/default.jpg',
            'text'=>'Mayor Washington addresses the International Circulation Managers Association',
            'size'=>'130%',
            'align'=>'80% 0');
        $HW[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/72/default.jpg',
                'text'=>'Mayor Washington reads to Dominik Przekota',
                'size'=>'300%',
                'align'=>'0 20%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/64/default.jpg',
                'text'=>'Mayor Washington at the KOCO groundbreaking ceremony',
                'size'=>'',
                'align'=>'52% 15%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/13/default.jpg',
                'text'=>'Mayor Washington with members of the Philippine Chamber of Commerce',
                'size'=>'150%',
                'align'=>'40% 40%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg',
                'text'=>'Mayor Washington at the Bud Billiken Parade',
                'size'=>'400%',
                'align'=>'71% 30%'));
        $HW[link] = 'HW';
        $HW[coll] = 'rhwc';
        $HW[location] = 'HWLC';
        $HW[type] = 'collection';
        $HW[flag] = '5';
        $HW[sidebarflag] = 'x';
        
    $RWLV[title] = 'Ravenswood-Lake View Community Collection';
        $RWLV[sortname] = 'Ravenswood-Lake View Community Collection';
        $RWLV[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1086/default.jpg',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'24% 45%'
        );
        $RWLV[category] = array('Neighborhoods','Libraries &amp; Education');
        $RWLV[textshort] = 'Street scenes and community life on the North Side, 1860s-1990s';
        $RWLV[textlong] = 'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s';
        $RWLV[textrich] = '<p>More than <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/00000000-1889/field/date/mode/exact/conn/and/order/title/ad/asc">100 early photographs</a> represent Lake View Township and its residents, schools, homes, businesses and everyday rituals.</p><p>Over the next 100 years North Siders and their neighborhoods experienced tremendous changes as evidenced by their <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clothing%20%26%20dress/field/subjea/mode/exact/conn/and/order/title/ad/asc">fashion</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/railroad!automobiles/field/subjea!subjea/mode/all!all/conn/or!and/order/nosort/ad/asc">modes of transportation</a>, and the establishment of a number of <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/schools%20--%20illinois%20--%20chicago/field/subjea/mode/exact/conn/and/order/title/ad/asc">schools</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/churches/field/subjea/mode/all/conn/and/order/title/ad/asc">churches</a> and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clubs/field/subjea/mode/all/conn/and/order/title/ad/asc">social clubs</a>. Notable local events include <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/Our%20Lady%20of%20Lourdes%20Church%20(Chicago%2C%20Ill.)!construction/field/subjec!subjea/mode/exact!all/conn/and!and/order/nosort/ad/asc">moving the Our Lady of Lourdes church building</a> across Ashland Avenue and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/ground%20breaking%20ceremonies/field/subjea/mode/exact/conn/and/order/nosort/ad/asc">breaking ground for the Conrad Sulzer Regional Library</a>.</p>';
        $RWLV[CPLRes] = array(array('a'=>'https://www.chipublib.org/archival_post/ravenswood-lake-view-community-collection/','dt'=>'Ravenswood-Lake View Community Collection finding aid','dd'=>'Descriptive inventory for the complete physical collection'),
                            array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/','dt'=>'Chicago Newspapers','dd'=>'Online and microfilm'));
        $RWLV[ExRes] = array(array('a'=>'http://www.ravenswoodhistorical.com/','dt'=>'Ravenswood-Lake View Historical Association','dd'=>'Programs, publications and tours focusing on Chicago northside neighborhood history.'),
        array('a'=>'http://www.edgewaterhistory.org/ehs/','dt'=>'Edgewater Historical Society','dd'=>'Exhibits, events and tours of the Edgewater neighborhood.'));
                        $RWLV[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/421/default.jpg',
            'text'=>'Lincoln &amp&; Montrose Avenues',
            'size'=>'110%',
            'align'=>'50% 50%');
        $RWLV[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1800/default.jpg',
                'text'=>'Arthur G. Bennett',
                'size'=>'110%',
                'align'=>'60% 10%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/3142/default.jpg',
                'text'=>'Charles Perkins',
                'size'=>'200%',
                'align'=>'50% 10%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/933/default.jpg',
                'text'=>'Riverview Park',
                'size'=>'170%',
                'align'=>'50% 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1272/default.jpg',
                'text'=>'Klausen family salutes the American flag on their front lawn.',
                'size'=>'601px',
                'align'=>'33% 20%'));
        $RWLV[link] = 'RWLV';
        $RWLV[coll] = 'rvw';
        $RWLV[location] = 'Northside Neighborhood History Collection';
        $RWLV[type] = 'collection';
        $RWLV[flag] = '1';
        
    $Sang[title] = 'Philip David Sang Collection';
        $Sang[sortname] = 'Sang, Philip David Collection';
        $Sang[cardpic] = array(
            'pic'=>'',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'24% 45%'
        );
        $Sang[pic] = '';
        $Sang[category] = array('African Americans','Civil War');
        $Sang[textshort] = '';
        $Sang[textlong] = '';
        $Sang[link] = 'Sang';
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
        $AfAm[shortname] = 'African Americans';
        $AfAm[cardpic] = array('pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/10/default.jpg','pich'=>'250px','size'=>'110%','pos'=>'50% 50%');
        $AfAm[textshort] = 'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $AfAm[textlong] = 'Chicago Public Library collections that document African American history in Chicago and throughout the United States.';
        $AfAm[catcoll] = 'documenting Black history in the United States';
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
        $AfAm[link] = 'AfAm';
        $AfAm[coll] = 'cr!rhwc!p16818coll6';
        $AfAm[type] = 'category';
        $AfAm[flag] = 'x';
        $AfAm[sidebarflag] = 'x';

    $CivilWar[title] = 'Civil War';
        $CivilWar[shortname] = 'Civil War';
        $CivilWar[cardpic] = array(
            'pic'=>'',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $CivilWar[textshort] = '';
        $CivilWar[textlong] = '';
        $CivilWar[link] = 'Whalen';
        $CivilWar[coll] = 'wha!p16818coll6';
        $CivilWar[type] = 'category';
        $CivilWar[flag] = 'x';
        $CivilWar[sidebarflag] = 'x';

    //Harold Washington
    $LibEd[title] = 'Libraries &amp; Education';
        $LibEd[shortname] = 'Libraries &amp; Education';
        $LibEd[cardpic] = array(
            'pic'=>'',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $LibEd[textshort] = 'Various content about libraries and education';
        $LibEd[textlong] = 'Various content about libraries and education';
        $LibEd[link] = 'LibEd';
        $LibEd[coll] = '';
        $LibEd[type] = 'category';
        $LibEd[flag] = 'x';
        $LibEd[sidebarflag] = 'x';

    $News[title] = 'Chicago Newspapers';
        $News[shortname] = 'Newspapers';
        $News[cardpic] = array(
            'pic'=>'',
            'pich'=>'230px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $News[textshort] = '';
        $News[textlong] = '';
        $News[link] = 'Examiner';
        $News[coll] = '';
        $News[type] = 'category';
        $News[flag] = '';
        $News[sidebarflag] = 'x';

    $Neigh[title] = 'Chicago Neighborhoods';
        $Neigh[shortname] = 'Neighborhoods';
        //$Neigh[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
        $Neigh[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg',
            'pich'=>'230px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $Neigh[textshort] = 'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to present';
        $Neigh[textlong] = 'Connect with the residents of Chicago and their stories through these fascinating photographs dating from the 1860s through the 1990s.';
        $Neigh[catcoll] = 'that center around Chicago&rsquo;s neighborhoods';
        $Neigh[textrich] = '<p>This collection documents how Chicagoans lived their daily lives and how their neighborhoods changed and evolved over time.  Go back to <a href="http://digital.chipublib.org/cdm/search/searchterm/schools/field/subjec/mode/all/conn/and/order/nosort">school</a>, revisit favorite <a href="http://digital.chipublib.org/cdm/search/searchterm/restaurants%20--%20illinois%20--%20chicago/field/subjec/mode/all/conn/and/order/title/ad/asc">restaurants</a>, salute <a href="http://digital.chipublib.org/cdm/search/searchterm/military/field/subjec/mode/all/conn/and/order/nosort">members of the military</a> or just <a href="http://digital.chipublib.org/cdm/search/searchterm/transportation/field/subjec/mode/all/conn/and/order/nosort">ride around the city</a>.  Every neighborhood tells a story!</p>';
        $Neigh[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/category/chicago-history/','dt'=>'Chicago history blog posts','dd'=>'Written by CPL librarians and staff.'), 
                                array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Finding aids','dd'=>'Descriptive inventories of the archival collections of community associations, religious organizations, high schools, notable Chicagoans and more'));
        $Neigh[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cfc/107/default.jpg',
            'text'=>'Ravenswood Manor Improvement Association&rsquo;s Cleanup Campaign',
            'size'=>'',
            'align'=>'90% 50%');
        $Neigh[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1239/default.jpg',
                'text'=>'Picasso statue unveiled at the Civic Center Plaza',
                'size'=>'',
                'align'=>'35% 47%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/782/default.jpg',
                'text'=>'Oz Park',
                'size'=>'',
                'align'=>'57% 17%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg?highlightTerms=',
                'text'=>'31st Street and Albany Avenue, repairing old brick outfall, July 20, 1936',
                'size'=>'',
                'align'=>'62% 37%'));
        $Neigh[link] = 'Neigh';
        $Neigh[coll] = '';
        $Neigh[type] = 'category';
        $Neigh[flag] = 'x';
        $Neigh[sidebarflag] = 'x';

    $Parks[title] = 'Chicago Parks';
        $Parks[shortname] = 'Parks';
        $Parks[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/66/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'center'
        );
        $Parks[textshort] = 'Visit Chicago&rsquo;s vast collection of parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to more than 500 parks today.';
        $Parks[textlong] = 'Visit Chicago&rsquo;s vast collection of parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to more than 500 parks today.  ';
        $Parks[textrich] = '<p>While Chicago&rsquo;s <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/Grant%20Park!Lincoln%20Park!zoo%20hamlin!Millennium%20Park/field/descri!descri!all!all/mode/exact!exact!none!all/conn/or!or!or!and/order/nosort/ad/asc">lakefront parks</a> are popular with residents and tourists alike, public green space abounds in many parts of the city. Take in <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/lagoons/field/all/mode/all/conn/and/order/nosort/ad/asc/page/10">lagoons</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/prairie/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">prairies</a>, wetlands and woodlands across the urban landscape. Peek into <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/fieldhouses%20!field%20houses/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">field houses</a> and <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/refectories%20refectory/field/all/mode/any/conn/and/order/nosort/ad/asc">refectories</a>. Gaze at <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/bridges!park/field/all!all/mode/all!all/conn/and!and/order/nosort/ad/asc">bridges</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/pergolas%20pergola/field/all/mode/any/conn/and/order/nosort/ad/asc/page/3">pergolas</a> and <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/fountains/field/all/mode/any/conn/and/order/nosort/ad/asc">fountains</a>, from the utilitarian to the ornate. Observe how Chicagoans and visitors engage with the parks in all seasons by <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/bicycle*%20park/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">biking</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/ice%20skating/field/all/mode/all/conn/and/order/nosort/ad/asc">ice skating</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/sledding!sleds/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">sledding</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/archery/field/all/mode/all/conn/and/order/nosort/ad/asc/page/2">competing in archery</a>, <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/frankel%20plates/field/all/mode/all/conn/and/order/nosort/ad/asc">taking selfies</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!rhwc!wha!woop!rwk!bar!hdg!ahs!cfc!ChicagoParks/searchterm/celebrations%20park/field/all/mode/all/conn/or/order/nosort/ad/asc">celebrating events</a>, and more.</p>';
        $Parks[catcoll] = 'that focus on Chicago&rsquo;s parks';
        $Parks[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=parks','dt'=>'Park blog posts','dd'=>'by CPL librarians and staff'));
        $Parks[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-chicago-park-district-records/','text'=>'Chicago Park District Records: Drawings'),
                                array('link'=>'https://www.chipublib.org/fa-clarence-hatzfeld-papers/','text'=>'Clarence Hatzfeld Papers'),
                                array('link'=>'https://www.chipublib.org/fa-millennium-park-inc/','text'=>'Millennium Park, Inc. Archives finding aid'),
                                array('link'=>'https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/','text'=>'Millennium Park / U.S. Equities Realty Collection finding aid'),
                                array('link'=>'https://www.chipublib.org/fa-open-space-section-records/','text'=>'Open Space Section Records'));
        $Parks[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/4258/default.jpg',
            'text'=>'Crown Fountain, children play in the gargoyle spray of the north tower, opening day, July 16, 2004',
            'size'=>'730px',
            'align'=>'50% 87%');
        $Parks[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/66/default.jpg',
                'text'=>'Altgeld Park (0206) Features - Playgrounds and swimming pools, 1968-07',
                'size'=>'140%',
                'align'=>'50% 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/290/default.jpg',
                'text'=>'American Indian Center',
                'size'=>'110%',
                'align'=>'50% 30%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/4752/default.jpg',
                'text'=>'Lake Meadow Park (0263) Events - Performances - Community concerts by Red Saunders, 1970-07-05',
                'size'=>'500px',
                'align'=>'55% 25%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/6209/default.jpg',
                'text'=>'Palmer Park (0013) Activities - Athletics, 1965',
                'size'=>'140%',
                'align'=>'50% 50%'));
        $Parks[link] = 'Parks';
        $Parks[coll] = '';
        $Parks[type] = 'category';
        $Parks[flag] = 'x';
        $Parks[sidebarflag] = 'x';

    //Theater
//locations
    $HWLCSC[title] = 'Special Collections at HWLC';
        $HWLCSC[sortname] = 'Special Collections at HWLC';
        $HWLCSC[shortname] = 'Special Collections at HWLC';
        $HWLCSC[pic] = '';
        $HWLCSC[textshort] = 'at Harold Washington Library Center';
        $HWLCSC[textlong] = '';
        $HWLCSC[link] = 'HWLCSC';
        $HWLCSC[coll] = '';
        $HWLCSC[type] = 'location';

    $MRC[title] = 'Municipal Reference Collection';
        $MRC[sortname] = 'Municipal Reference Collection';
        $MRC[shortname] = 'Municipal Reference Collection';
        $MRC[pic] = '';
        $MRC[textshort] = 'at Harold Washington Library Center';
        $MRC[textlong] = '';
        $MRC[link] = 'MRC';
        $MRC[coll] = '';
        $MRC[type] = 'location';

    $NNHC[title] = 'Northside Neighborhood History Collection';
        $NNHC[sortname] = 'Northside Neighborhood History Collection';
        $NNHC[shortname] = 'Northside Neighborhood History Collection';
        $NNHC[pic] = '';
        $NNHC[textshort] = 'at Sulzer Regional Library';
        $NNHC[textlong] = '';
        $NNHC[mainimage] = array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1182/default.jpg',
            'text'=>'4700 North Lincoln',
            'size'=>'125%',
            'align'=>'50% 50%');
        $NNHC[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/ahs/902/default.jpg',
                'text'=>'Lake View High School drum majorette Mildred Douglas',
                'size'=>'400px',
                'align'=>'65% 15%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/567/default.jpg',
                'text'=>'47th Ward neighborhood watch',
                'size'=>'500px',
                'align'=>'57% 37%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/653/default.jpg',
                'text'=>'Complex Christmas star quilt',
                'size'=>'auto 130%',
                'align'=>'center'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/661/default.jpg',
                'text'=>'Door with stained glass',
                'size'=>'110%',
                'align'=>'50% 25%'));
        $NNHC[locname] = 'Sulzer Regional Library';
        $NNHC[locemail] = 'northsidehistory@chipublib.org';
        $NNHC[locphone] = '(312) 742-4455';
        $NNHC[link] = 'NNHC';
        $NNHC[coll] = 'bar!hdg!rwk!cfc!ahs!rvw';
        $NNHC[type] = 'location';

    $Harsh[title] = 'Vivian G. Harsh Collection';
        $Harsh[sortname] = 'Harsh Collection';
        $Harsh[shortname] = 'Harsh';
        $Harsh[shortname] = 'Vivian G. Harsh Collection';
        $Harsh[pic] = '';
        $Harsh[textshort] = 'at Woodson Regional Library';
        $Harsh[textlong] = 'The largest African American history and literature collection in the Midwest, the Vivian G. Harsh Research Collection of Afro-American History and Literature documents the black experience with a strong focus on Chicago.';
        $Harsh[mainimage] = array('url'=>'ASNLH.jpg',
            'text'=>'Committee in charge of the celebration of the twentieth anniversary of the Association for the Study of Negro Life and History, 1936',
            'size'=>'auto 125%',
            'align'=>'center');
        $Harsh[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/18/default.jpg',
                'text'=>'Congressman William L. Dawson campaigning, 1940s',
                'size'=>'200%',
                'align'=>'50% 10%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/21/default.jpg',
                'text'=>'"The War&rsquo;s Greatest Scandal," 1943',
                'size'=>'cover',
                'align'=>'50% 50%'),
            array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/2/default.jpg',
                'text'=>'"Self-portrait" by Gordon Parks, 1941',
                'size'=>'cover',
                'align'=>'50% 50%'));
        $Harsh[loclink] = '81';
        $Harsh[locname] = 'Carter G. Woodson Regional Library';
        $Harsh[locemail] = 'harshcollection@chipublib.org';
        $Harsh[locphone] = '(312) 745-2080';
        $Harsh[link] = 'Harsh';
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
        
//misc arrays
    $cards = array($Examiner, $EB, $CPL, $ChiRen, $Sewers, $Theater, $Whalen, 
                   $HDG, $RK, $MP, $NCO, $NHS, $CPD, $HW, $RWLV, $Sang, $Amund, 
                   $Kins, $LVHS, $Walz, $CFCC, $LVCRA, $PortPark, $RMIA, $HWR, $AfAm, 
                   $CivilWar, $LibEd, $News, $Neigh, $Parks, $HWLCSC, $MRC, $NNHC, $Harsh);

    $categories = array('AfAm'=>'African Americans','CivilWar'=>'Civil War',
                        'LibEd'=>'Libraries &amp; Education',
                        'Neigh'=>'Neighborhoods', 'Parks'=>'Parks');
        
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