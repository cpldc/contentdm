<?php
    //  ini_set('display_errors',1); 
    //  error_reporting(E_ALL);

    // this function is for ordering arrays on pages, either alphabetically like in the sidebar, or by flag, like the homepage cards
        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }
        $Announce[flag] =       '1';
        $rhwc[flag] =           '2';
        $CPB01[flag] =          '3';
        $mpu[flag] =            '4';
        $cr[flag] =             '5';
        $examiner[flag] =       '6';
        $wha[flag] =            '7';
        $rwk[flag] =            '8';
        $hdg[flag] =            '9';
        $bar[flag] =            '10';
        $woop[flag] =           '11';
        $p16818coll6[flag] =    '12';
        // $dtd[flag] =            '12';
        $ChicagoParks[flag] =   '';
        $cfc[flag] =            '';
        $ahs[flag] =            '';
        $rvw[flag] =            '';
        $AfAm[flag] =           '';
        $News[flag] =           '';
        $Neigh[flag] =          '';
        $CivilWar[flag] =       '';
        $Parks[flag] =          '';
        $LibEd[flag] =          '';

//array(array('a'=>'','dt'=>'','dd'=>''));
// since titles are written before center-content takes over, all pages need titles stored here; they also print at the top of the center-content area
    $All[title] = 'Digital Collections A-Z';
    $About[title] = 'About CPL Digital Collections';
    $Announce[title] = 'CPL Revamps Digital Collections Website'; 
    $Announce[link] = 'Announce';
    $Announce[cardpic] = array(
        'pic'=>'https://www.chipublib.org/wp-content/uploads/sites/3/2018/01/cpl-logo-cdm-1.jpg',
        'pich'=>'17rem',
        'size'=>'cover',
        'pos'=>'50% 50%');
    $Announce[textshort] = 'We’ve updated our site to make it easier for you to find thousands of images, documents and artifacts from CPL’s special collections.';
    $CAA[title] = 'Chicago Artists Directory';
    // takedown is a mess, move along
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

//locations
    // locations will not get cards, but do get landing pages
    // locations have to come before collections and subcollections, because the location array is passed into the location variable within the colls/subcolls
    $HWLCSC[title] = 'Special Collections at HWLC';
        $HWLCSC[sortname] = 'Special Collections at HWLC';
        $HWLCSC[shortname] = 'HWLCSC';
        $HWLCSC[longname] = 'Special Collections and Preservation Division at Harold Washington Library Center';
        $HWLCSC[sidebarname] = 'Special Collections at HWLC';
        $HWLCSC[pic] = '';      
        $HWLCSC[mainimage] = array('url'=>'79',
            'coll' => 'woop',
            'text'=>'Engraving, &ldquo;The Old Water Tank,&rdquo; circa 1870',
            'size'=>'105%',
            'align'=>'50% 50%');
        $HWLCSC[thumbs] = array(array('url'=>'2196',
                'coll' => 'CPB01',
                'text'=>'<em>The Philanderer</em>, Chicago Little Theatre, 1914',
                'size'=>'170%',
                'align'=>'25% 22%'),
            array('url'=>'4833',
                'coll' => 'ChicagoParks',
                'text'=>'Dancers at Madden Park, 1954',
                'size'=>'140%',
                'align'=>'center'),
            array('url'=>'42',
                'coll' => 'wha',
                'text'=>'Wanted poster, &ldquo;$100,000 Reward! The Murderer of our late beloved President, Abraham Lincoln,&rdquo; 1865',
                'size'=>'105%',
                'align'=>'50% 20%'),
            array('url'=>'4066',
                'coll' => 'mpu',
                'text'=>'Crown Fountain preview, 2004',
                'size'=>'370%',
                'align'=>'50% 50%'));
        $HWLCSC[textshort] = 'at Harold Washington Library Center';
        $HWLCSC[textlong] = 'The Special Collections and Preservation Division at <a href="https://www.chipublib.org/locations/34">Harold Washington Library Center</a> showcases rare books and archival material relating to Chicago history. Major areas of interest include: Chicago authors and publishing, Chicago Park District, Chicago Public Library, Chicago theater, Civil War, Chicago’s world’s fairs and Mayor Harold Washington.';
        $HWLCSC[locname] = 'Harold Washington Library Center';
        $HWLCSC[loclink] = '34';
        $HWLCSC[locemail] = 'specoll@chipublib.org';
        $HWLCSC[locphone] = '(312) 747-4875';
        $HWLCSC[link] = 'HWLCSC';
        $HWLCSC[type] = 'location';

    $MRC[title] = 'Municipal Reference Collection';
        $MRC[sortname] = 'Municipal Reference Collection';
        $MRC[longname] = 'Municipal Reference Collection at Harold Washington Library Center';
        $MRC[shortname] = 'MRC';
        $MRC[sidebarname] = 'Municipal Reference Collection';
        $MRC[pic] = '';        
        $MRC[mainimage] = array('url'=>'https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/02/Freight-Tunnel-Map.jpg',
            'text'=>'<a>1932 Freight Tunnel Map from the Journal of Proceedings of the City Council of the City of Chicago</a>',
            'size'=>'cover',
            'align'=>'center');
        $MRC[textshort] = 'at Harold Washington Library Center';
        $MRC[textlong] = 'The Municipal Reference Collection at <a href="https://www.chipublib.org/locations/34">Harold Washington Library Center</a> chronicles almost every aspect of municipal life in Chicago, housing most City of Chicago documents published since the mid-1800s as well as documents from other local agencies such as the Chicago Board of Education and the Chicago Transit Authority.';
        //$MRC[textrich] = '<h4>Digital Collections</h4><p>Digital collections from the Municipal Reference Collection are forthcoming.</p>';
        $MRC[CPLRes] = array(array('a'=>'https://www.chipublib.org/chicago-history-timeline','dt'=>'CPL&rsquo;s Chicago History Timeline','dd'=>'An excellent resource for history students and those getting started on research in Chicago History.'));
        $MRC[ExRes] = array(array('a'=>'https://www.hathitrust.org','dt'=>'HathiTrust','dd'=>'HathiTrust has an extensive digital collection of municipal reference content.'),
                            array('a'=>'https://www.newberry.org/digital-resources-and-publications','dt'=>'Newberry Library&rsquo;s Digital Resources and Publications','dd'=>'The Newberry Library provides a large number of digitized maps, as well as general historical documents of Chicago and the Midwest.'),
                            array('a'=>'http://www.idaillinois.org','dt'=>'Illinois Digital Archives','dd'=>'For additional Chicago and Illinois Resources.'));
        $MRC[loclink] = '34';
        $MRC[locname] = 'Harold Washington Library Center';
        $MRC[locemail] = '';
        $MRC[locphone] = '(312) 747-4526';
        $MRC[link] = 'MRC';
        $MRC[type] = 'location';

    $NNHC[title] = 'Northside Neighborhood History Collection';
        $NNHC[sortname] = 'Northside Neighborhood History Collection';
        $NNHC[shortname] = 'NNHC';
        $NNHC[longname] = 'Northside Neighborhood History Collection';
        $NNHC[sidebarname] = 'Northside Neighborhood History Collection';
        $NNHC[pic] = '';
        $NNHC[textshort] = 'at Sulzer Regional Library';
        $NNHC[textlong] = 'The Northside Neighborhood History Collection at <a href="https://www.chipublib.org/locations/67">Sulzer Regional Library</a> highlights historical and contemporary materials about Northside neighborhoods.';
        $NNHC[mainimage] = array('url'=>'1182',
            'coll' => 'rwk',
            'text'=>'Lincoln Square, 4700 N. Lincoln Ave., 2002',
            'size'=>'125%',
            'align'=>'50% 50%');
        $NNHC[thumbs] = array(array('url'=>'902',
        'coll' => 'ahs',
                'text'=>'Mildred Douglas, drum majorette, Lake View High School, circa 1942',
                'size'=>'400px',
                'align'=>'65% 15%'),
            array('url'=>'567',
            'coll' => 'rwk',
                'text'=>'Alderman Gene Schulter assists with installation of 47th Ward neighborhood watch sign, 1989',
                'size'=>'500px',
                'align'=>'57% 37%'),
            array('url'=>'653',
            'coll' => 'rwk',
                'text'=>'Complex Christmas star quilt by Sandy Escontrias, circa 1992',
                'size'=>'auto 130%',
                'align'=>'center'),
            array('url'=>'661',
            'coll' => 'rwk',
                'text'=>'Stained glass and door, 1518-20 W. Wilson Ave., circa 1985',
                'size'=>'110%',
                'align'=>'50% 25%'));
        $NNHC[loclink] = '67';
        $NNHC[locname] = 'Sulzer Regional Library';
        $NNHC[locemail] = 'northsidehistory@chipublib.org';
        $NNHC[locphone] = '(312) 742-4455';
        $NNHC[link] = 'NNHC';
        $NNHC[type] = 'location';

    $Harsh[title] = 'Vivian G. Harsh Research Collection';
        $Harsh[sortname] = 'Harsh Collection';
        $Harsh[longname] = 'Harsh Collection';
        $Harsh[shortname] = 'Harsh';
        $Harsh[sidebarname] = 'Vivian G. Harsh Collection';
        $Harsh[pic] = '';
        $Harsh[textshort] = 'at Woodson Regional Library';
        $Harsh[textlong] = 'The largest African American history and literature collection in the Midwest, the Vivian G. Harsh Research Collection of Afro-American History and Literature at <a href="https://www.chipublib.org/locations/81">Woodson Regional Library</a> documents the black experience with a strong focus on Chicago.';
        // Harsh's main image uses an exception in center-content, as the contentDM version of the image is super low res
        $Harsh[mainimage] = array('url'=>'ASNLH.jpg',
            'coll' => 'rwk',
            'text'=>'ASNLH 20th anniversary planning committee, 1936',
            'size'=>'auto 125%',
            'align'=>'center');
        $Harsh[thumbs] = array(array('url'=>'18',
        'coll' => 'cr',
                'text'=>'U.S. Congressman William L. Dawson, 1940s',
                'size'=>'200%',
                'align'=>'50% 10%'),
            array('url'=>'405',
            'coll' => 'p16818coll6',
                'text'=>'Note from Frederick Douglass regarding A. Lincoln&rsquo;s death, 1865',
                'size'=>'400%',
                'align'=>'29% 10%'),
            array('url'=>'21',
            'coll' => 'cr',
                'text'=>'Pamphlet, &ldquo;The War&rsquo;s Greatest Scandal,&rdquo; 1943',
                'size'=>'250%',
                'align'=>'55% 75%'),
            array('url'=>'2',
            'coll' => 'cr',
                'text'=>'&ldquo;Self-portrait&rdquo; by Gordon Parks, 1941',
                'size'=>'cover',
                'align'=>'50% 40%'));
        $Harsh[loclink] = '81';
        $Harsh[locname] = 'Woodson Regional Library';
        $Harsh[locemail] = 'harshcollection@chipublib.org';
        $Harsh[locphone] = '(312) 745-2080';
        $Harsh[link] = 'Harsh';
        $Harsh[type] = 'location';

//subcollections
    // subcollections have to come before collections, because their arrays are passed into the "subcollections" variable of their parent collection
    // subcollections might eventually extend a constructor because they share so many values with each other, but not now
    // subcollections will not get cards or landing pages
    $EBG[title] = 'E.B. Gould Programs Collection';
        $EBG[sortname] = 'Gould, E.B. Programs Collection';
        $EBG[textlong] = 'See <a class="all-links" href="#CPB01">Chicago Theater</a>.';
        $EBG[textshort] = 'The annotated programs of a local Chicago businessman and enthusiastic playgoer.';
        $EBG[browse] = 'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc';
        $EBG[type] = 'subcollection';

    $Playbills[title] = 'Chicago Theater Collection-Historic Playbills';
        $Playbills[sortname] = 'Chicago Theater Collection-Historic Playbills';
        $Playbills[textlong] = 'See <a class="all-links" href="#CPB01">Chicago Theater</a>.';
        $Playbills[textshort] = 'Programs, playbills and newspaper clippings from more than 2,000 productions at Chicago’s historic theaters dating back to the 1840s.';
        $Playbills[browse] = 'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/';
        $Playbills[type] = 'subcollection';
                
    $Amund[title] = 'Amundsen High School Collection';
        $Amund[sortname] = 'Amundsen High School Collection';
        $Amund[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Amund[textshort] = 'The Winnemac Park school opened in its doors in 1930. Cheer on their football team as they do battle with Taft High School.';
        $Amund[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Amundsen+High+School+Collection/field/collec/mode/all/conn/and/order/nosort';
        $Amund[link] = '#ahs';
        $Amund[type] = 'subcollection';

    $Kins[title] = 'Helen G. Kinsella Collection';
        $Kins[sortname] = 'Kinsella, Helen G. Collection';
        $Kins[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Kins[textshort] = 'Dramatic productions and other activities led by the award-winning Lake View High School drama and public speaking teacher.';
        $Kins[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Helen+G.+Kinsella+Collection/field/collec/mode/all/conn/and/order/nosort';
        $Kins[link] = '#ahs';
        $Kins[type] = 'subcollection';

    $LVHS[title] = 'Lake View High School Collection';
        $LVHS[sortname] = 'Lake View High School Collection';
        $LVHS[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $LVHS[textshort] = 'Academics and extracurriculars at the first high school in Lake View Township.';
        $LVHS[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Lake+View+High+School+Collection/field/collec/mode/all/conn/and/order/nosort';
        $LVHS[link] = '#ahs';
        $LVHS[type] = 'subcollection';

    $Walz[title] = 'Louis D. Walz Collection';
        $Walz[sortname] = 'Walz, Louis D. Collection';
        $Walz[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Walz[textshort] = 'The life of the long-time director of the Lake View High School band and World War I veteran.';
        $Walz[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Walz/field/collec/mode/all/conn/and/order/nosort';
        $Walz[link] = '#ahs';
        $Walz[type] = 'subcollection';

    $CFCC[title] = 'Christian Fellowship Church Collection';
        $CFCC[sortname] = 'Christian Fellowship Church Collection';
        $CFCC[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $CFCC[textshort] = 'Activities of the church founded by Conrad and Martha Wendtland in their home in 1926.';
        $CFCC[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort';
        $CFCC[link] = '#cfc';
        $CFCC[type] = 'subcollection';

    $LVCRA[title] = 'Lake View Council on Religious Action';
        $LVCRA[sortname] = 'Lake View Council on Religious Action';
        $LVCRA[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $LVCRA[textshort] = 'Representatives from local churches and synagogues and members of the Kiwanis Club of Lake View at work.';
        $LVCRA[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort';
        $LVCRA[link] = '#cfc';
        $LVCRA[type] = 'subcollection';

    $PortPark[title] = 'Portage Park Community Collection';
        $PortPark[sortname] = 'Portage Park Community Collection';
        $PortPark[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $PortPark[textshort] = 'Patriotism on display during World War I.';
        $PortPark[browse] = 'http://digital.chipublib.org/digital/collection/cfc/search/searchterm/Portage%20Park%20Community%20Collection/field/collec/mode/exact/conn/and';
        $PortPark[link] = '#cfc';
        $PortPark[type] = 'subcollection';

    $RMIA[title] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[sortname] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $RMIA[textshort] = 'Community activism in the North Side riverfront neighborhood.';
        $RMIA[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Ravenswood+Manor+Improvement+Association/field/collec/mode/all/conn/and/order/nosort';
        $RMIA[link] = '#cfc';
        $RMIA[type] = 'subcollection';

    $HWR[title] = 'Washington, Harold';
        $HWR[sortname] = 'Washington, Harold';
        $HWR[textlong] = 'See <a class="all-links" href="#rhwc">Remembering Harold Washington</a>';
        $HWR[link] = '#rhwc';
        $HWR[type] = 'subcollection';


//collections
    $examiner[title] = 'Chicago Examiner';
        $examiner[coll] = 'examiner';
        $examiner[sortname] = 'Chicago Examiner';
        $examiner[cardpic] = array('pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/examiner/5449/default.jpg','pich'=>'19rem','size'=>'110% auto','pos'=>'50% -15px');
        $examiner[category] = 'Newspapers';
        $examiner[textshort] = 'Chicago Public Library&rsquo;s 10-year run of the <i>Chicago Examiner</i> extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $examiner[textlong] = 'The Chicago Examiner was one of a dozen major newspapers published in Chicago at the turn of the last century. It was known for its sensational news stories.';
        $examiner[textrich] = '<p>The Chicago Public Library&rsquo;s 10-year run of the <i>Examiner,</i> while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available.</p><p>Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> that killed more firefighters than any building collapse until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos and illustrations; and big early <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a></p>';
        $examiner[mainimage] = array('url'=>'6812',
            'text'=>'&ldquo;Make Chicago One of the Most Attractive Cities in the World,&rdquo; <em>Chicago Examiner</em>, vol. 10 no. 1, 1909',
            'size'=>'150%',
            'align'=>'78% 5%');
        $examiner[thumbs] = array(array('url'=>'51184',
                'text'=>'&ldquo;Camera&rsquo;s Story of Day&rsquo;s Happenings in River Horror,&rdquo; <em>Chicago Examiner</em>, vol. 13 no. 187, 1915',
                'size'=>'110px auto',
                'align'=>'center'),
            array('url'=>'12357',
                'text'=>'&ldquo;Cubs Gain Big Lead for World&rsquo;s Championship,&rdquo; <em>Chicago Examiner</em>, vol. 6 no. 253, 1908',
                'size'=>'500px auto',
                'align'=>'10% 10%'),
            array('url'=>'51163',
                'text'=>'&ldquo;Unceasing Rescue Work on Eastland; Relief Efforts,&rdquo; <em>Chicago Examiner</em>, vol. 13 no. 186, 1915',
                'size'=>'350px auto',
                'align'=>'90% 60%'),
            array('url'=>'477',
                'text'=>'&ldquo;Men Clinging to Girders Drop Into Flames as the Steel Grows Red Hot,&rdquo; <em>Chicago Examiner</em>, vol. 7 no. 27, 1909',
                'size'=>'200px',
                'align'=>'25% 10%'));
        $examiner[CPLRes] = array(array('dt'=>'Chicago Newspapers',
                                            'a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/',
                                            'dd'=>'Online and microfilm.'),
                                        array('dt'=>'Newspaper Blog Posts',
                                            'a'=>'https://www.chipublib.org/?post_type=post&s=newspapers',
                                            'dd'=>'Written by CPL librarians and staff.'));
        $examiner[ExRes] = array(array('a'=>'http://chroniclingamerica.loc.gov/',
                                            'dt'=>'Library of Congress Chronicling America: Historic American Newspapers',
                                            'dd'=>'Digitized newspapers from all 50 states, 1789-1943.'),
                                        array('a'=>'http://idnc.library.illinois.edu/',
                                            'dt'=>'Illinois Digital Newspaper Collections',
                                            'dd'=>'More than 100 Illinois newspapers dating back to 1831.'));
        $examiner[findingaid] = array(array('link' => 'https://www.chipublib.org/fa-austin-newspapers-collection/','text' => 'Austin Newspapers Collection'),
            array('link' => 'https://www.chipublib.org/fa-chicago-african-american-and-latino-newspapers-microfilm-collection/','text' => 'Chicago African American and Latino Newspapers Microfilm Collection'),
            array('link' => 'https://www.chipublib.org/fa-englewood-newspaper-collection/','text' => 'Englewood Newspaper Collection'),
            array('link' => 'https://www.chipublib.org/fa-south-chicago-newspapers-collection/','text' => 'South Chicago Newspapers Collection'),
            array('link' => 'https://www.chipublib.org/fa-south-shore-newspapers-collection/','text' => 'South Shore Newspapers Collection'),
            array('link' => 'https://www.chipublib.org/fa-the-greek-star-newspaper-collection','text' => 'Greek Star Newspaper Collection'),
            array('link' => 'https://www.chipublib.org/fa-west-side-newspaper-collection/','text' => 'West Side Newspaper Collection'));
        $examiner[link] = 'examiner';
        $examiner[location] = $HWLCSC;
        $examiner[type] = 'collection';

    $bar[title] = 'Esther A. Barlow Collection';
        $bar[coll] = 'bar';
        $bar[sortname] = 'Barlow, Esther A. Collection';
        $bar[cardpic] = array('pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/bar/43/default.jpg','pich'=>'20rem','size'=>'110%','pos'=>'auto');
        $bar[category] = 'Libraries &amp; Education';
        $bar[textshort] = 'Family photographs of CPL Librarian Esther Barlow and images of her work at the former Hild Regional Library and Lake View Branch Library from 1927 to 1976.';
        $bar[textlong] = 'Esther Barlow was a children&rsquo;s librarian in neighborhood branches of Chicago Public Library from 1927 until 1976.';
        $bar[textrich] = 'Included in this collection are photographs of the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Barlow%20family/field/subjed/mode/all/conn/and/order/nosort">Barlow family</a> and images of Esther Barlow at work at the Hild Regional Library and Lake View Branch Library. Photographs showcase Barlow with her colleagues and her <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Working%20with%20children/field/subjed/mode/all/conn/and/order/nosort">work with children. </a>';
        $bar[mainimage] = array(
            'url'=>'52',
            'text'=>'Chicago Public Library staff, Lake View Branch, circa 1950',
            'size'=>'',
            'align'=>'55% 50%');
        $bar[thumbs] = array(array('url'=>'199',
                    'text'=>'Story hour in Welles Park, Hild Regional Library, circa 1930',
                    'size'=>'400px',
                    'align'=>'15% 20%'),
                array('url'=>'70',
                    'text'=>'Esther Barlow at the circulation desk, Lake View Branch, 1951',
                    'size'=>'500px',
                    'align'=>'53% 49%'),
                array('url'=>'16',
                    'text'=>'Esther Barlow and Buddy Flaskerud, 1913',
                    'size'=>'400px',
                    'align'=>'33% 22%'));
        $bar[link] = 'bar';
        $bar[location] = $NNHC;
        $bar[type] = 'collection';

    $woop[title] = 'Chicago Public Library Archives';
        $woop[coll] = 'woop';
        $woop[sortname] = 'Chicago Public Library Archives';
        $woop[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/woop/45/default.jpg',
            'pich'=>'200px;',
            'size'=>'100%',
            'pos'=>'50% -20px',
        );
        $woop[category] = 'Libraries &amp; Education';
        $woop[textshort] = 'Photographs trace CPL&rsquo;s history from a small water tank that survived the Great Chicago Fire to the extensive network of neighborhood libraries that span the city today.';
        $woop[textlong] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $woop[textrich] = '<p>Explore CPL through those years, from that <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a>, to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Delivery+stations/field/subjed/mode/all/conn/and/order/nosort">delivery stations</a> in the late 19th century, to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Bookmobiles/field/subjed/mode/all/conn/and/order/nosort">bookmobiles</a> in the mid-20th century to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Working%20with%20children!Hild%20Regional%20Library/field/subjed!all/mode/all!all/conn/and!and/order/nosort/ad/asc">Hild Regional Library</a> in the 1970s. </p>';
        $woop[mainimage] = array('url'=>'80',
                'text'=>'Book room in the old water tank, circa 1873',
                'size'=>'cover',
                'align'=>'50% 75%');
        $woop[thumbs] = array(array('url'=>'5',
                    'text'=>'English Book Donation bookplate given by Queen Victoria, 1871',
                    'size'=>'cover',
                    'align'=>'center'),
                array('url'=>'73',
                    'text'=>'Trailer service from Legler Regional Library, circa 1940',
                    'size'=>'150%',
                    'align'=>'100% 50%'),
                array('url'=>'41',
                    'text'=>'Blackstone Memorial Branch Library, 1904',
                    'size'=>'cover',
                    'align'=>'0% '),
                array('url'=>'74',
                    'text'=>'Traveling branch, circa 1960s',
                    'size'=>'cover',
                    'align'=>'center'));
        $woop[link] = 'woop';
        $woop[location] = $HWLCSC;
        $woop[type] = 'collection';

    $cr[title] = 'Chicago Renaissance';
        $cr[coll] = 'cr';
        $cr[sortname] = 'Chicago Renaissance';
        $cr[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cr/12/default.jpg',
            'pich'=>'20rem',
            'size'=>'100%',
            'pos'=>'auto'
        );
        $cr[category] = 'African Americans';
        $cr[textshort] = 'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $cr[textlong] = 'The Black Chicago Renaissance was a creative movement when activism and scholarship flourished with the prodigious work of African American community leaders, performers, artists, writers and activists.';
        $cr[textrich] = '<p>During and after the Great Depression (1930s-1950s), African Americans in Chicago created a new community on the South Side that was distinctly their own.</p><p>In <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Literature/field/subjed/mode/all/conn/and/order/nosort">literature</a> the Black Chicago Renaissance was represented by such giants as Richard Wright, Gwendolyn Brooks, Margaret Walker, Arna Bontemps and Fenton Johnson. The explosion of <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Music/field/subjed/mode/all/conn/and/order/nosort">musical</a> creativity in <a href="http://digital.chipublib.org/digital/collection/cr/search/searchterm/Bronzeville%20(Chicago%2C%20Ill.)!art/field/neighb!subjec/mode/all!all/conn/and!and/order/title/ad/asc">Bronzeville&rsquo;s</a> clubs and concert halls ranged from classical to jazz and from gospel to blues and pop. A new <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Social%20Science/field/subjed/mode/all/conn/and/order/nosort">social science</a> of Black urban life was born with the writing of St. Clair Drake and Horace Cayton&rsquo;s <em>Black Metropolis</em>. The <a href="http://digital.chipublib.org/digital/search/searchterm/art/field/subjec/mode/exact/conn/and/order/nosort/ad/asc">art</a> of William McBride, William Edouard Scott, Gordon Parks, Archibald Motley, Jr. and other local Chicago Black artists defined the era.</p>';
        $cr[findingaid] = array(
            array('link'=>'https://www.chipublib.org/fa-charles-walton-papers/','text'=>'Charles Walton Papers Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-george-cleveland-hall-branch-archives/','text'=>'Chicago Public Library, George Cleveland Hall Branch Archives Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-horace-r-cayton-papers/','text'=>'Horace Cayton Papers Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-william-mcbride-papers/','text'=>'William McBride, Jr. Papers Finding Aid'));
        $cr[CPLRes] = array(array('a'=>'content.php?id=AfAm','dt'=>'African American Digital Collections','dd'=>'Digital collections that include materials documenting Black history in the United States.'));
        $cr[mainimage] = array('url'=>'1',
            'text'=>'Horace Cayton with &ldquo;Blue Boy,&rdquo; 1944',
            'size'=>'110%',
            'align'=>'50% 0');
        $cr[thumbs] = array(array('url'=>'11',
                'text'=>'Langston Hughes and Gwendolyn Brooks, 1949',
                'size'=>'100%',
                'align'=>'50% 10%'),
            array('url'=>'10',
                'text'=>'Richard Durham, 1948',
                'size'=>'150%',
                'align'=>'center'),
            array('url'=>'15',
                'text'=>'C.L. Cook and his Dreamland Orchestra, 1923',
                'size'=>'150%',
                'align'=>'center'),
            array('url'=>'12',
                'text'=>'Margaret Walker, 1942',
                'size'=>'cover',
                'align'=>'50% 25%'));
        $cr[link] = 'cr';
        $cr[location] = $Harsh;
        $cr[type] = 'collection';
        
    $dtd[title] = 'Chicago Sewers Collection';
        $dtd[coll] = 'dtd';
        $dtd[sortname] = 'Chicago Sewers Collection';
        $dtd[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/dtd/157/default.jpg',
            'pich'=>'200px',
            'size'=>'120%',
            'pos'=>'50% -20px'
        );
        $dtd[category] = 'Neighborhoods';
        $dtd[textshort] = 'Photographs of sewer systems and passageways from 1925 to 1949 offer a rare look at the underbelly of Chicago.';
        $dtd[textlong] = 'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historical images features construction photographs of sewers and tunnels.';
        $dtd[textrich] = '<p>In 1855, Boston engineer Ellis S. Chesbrough was invited to Chicago to design the first comprehensive system of underground sewers in the United States. His work lifted the city to make room for the new sewers which became the most extensive in the world. In the more than 150 years since Chicago&rsquo;s Department of Water Management continues to service and maintain this underground system.  </p><p>Take a look at these wonders in images from the 1920s-1960s as you start  <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Above+ground/field/contri/mode/all/conn/and/order/nosort">above ground</a> and work your way below the surface along <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Avenue+J/field/subjec/mode/all/conn/and/order/nosort">Avenue J</a>, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/California+Avenue/field/subjec/mode/all/conn/and/order/nosort">California</a> and <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Elston+Avenue/field/subjec/mode/all/conn/and/order/nosort">Elston</a> Avenues among others. </p>';
        $dtd[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-sewers-collection/','dt'=>'Chicago Sewers Collection Finding Aid','dd'=>'The complete list of photographs, glass plate slides and documents, rich with geographic and technical details.'));
        $dtd[mainimage] = array('url'=>'167',
            'text'=>'103rd and Rockwell Streets, inspecting tile, 1936',
            'size'=>'',
            'align'=>'center');
        $dtd[thumbs] = array(array('url'=>'150',
                'text'=>'Magnolia Avenue sewer system, 1933',
                'size'=>'400%',
                'align'=>'61% 37%'),
            array('url'=>'142',
                'text'=>'Broadway Street, sewer in Rokeby Street, 1927',
                'size'=>'250%',
                'align'=>'30% 50%'),
            array('url'=>'144',
                'text'=>'Bryn Mawr Avenue, bricklayers, 1930',
                'size'=>'250%',
                'align'=>'0 50%'),
            array('url'=>'155',
                'text'=>'103rd and Rockwell Streets, pipe yard, 1936',
                'size'=>'250%',
                'align'=>'40% 35%'));
        $dtd[link] = 'dtd';
        $dtd[location] = $HWLCSC;
        $dtd[type] = 'collection';
        


    $wha[title] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[coll] = 'wha';
        $wha[sortname] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[creditname] = 'Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/341/default.jpg',
            'pich'=>'280px',
            'size'=>'110%',
            'pos'=>'50% 40%'
        );
        $wha[category] = 'Civil War';
        $wha[textshort] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield.';
        $wha[textlong] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience. ';
        $wha[textrich] = '<p>Illinois supported the Union effort by sending hundreds of thousands of troops into battle, but the Civil War was also fought on the homefront. </p><p>Examine artifacts and photographs from both arenas. Highlights include <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/camp+life/field/subjeb/mode/all/conn/and/order/title/ad/asc">camp life</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/small+arms/field/all/mode/exact/conn/and/order/nosort/ad/asc">swords</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/clothing/field/all/mode/exact/conn/and/order/nosort/ad/asc">uniforms</a>.</p> ';
        $wha[rights] = '<p>The Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections is made possible by generous gifts to <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a> by the partners of Skadden, Arps, Slate, Meagher &amp; Flom LLP in honor of Wayne Whalen&rsquo;s interest in Abraham Lincoln and the Civil War.</p>';
        $wha[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/','dt'=>'American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collections Finding Aid','dd'=>'A large portion of this collection focuses on the experience of soldiers and leaders from Illinois told through letters and diaries.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/military/','dt'=>'Military Archival Collections','dd'=>'A list of all archival collections related to the Civil War, including records of the Daughters of Union Veterans of the Civil War, as well as personal collections of service members from other conflicts, such as World War II. '));
        $wha[mainimage] = array('url'=>'634',
            'text'=>'&ldquo;Sherman and His Generals,&rdquo; <em>Photographic Views of Sherman&rsquo;s Campaign</em> by George N. Barnard, 1865',
            'size'=>'auto 575px',
            'align'=>'center');
        $wha[thumbs] = array(array('url'=>'116',
                'text'=>'Sword, model 1850 staff and field officer, circa 1860',
                'size'=>'auto 120px',
                'align'=>'center'),
            array('url'=>'721',
                'text'=>'Uniform, artillery jacket, 1862',
                'size'=>'auto 120px',
                'align'=>'50% 15%'),
            array('url'=>'35',
                'text'=>'Ulysses S. Grant, 1865',
                'size'=>'120px auto',
                'align'=>'50% 20%'),
            array('url'=>'38',
                'text'=>'Union ticket, South Division, 1864',
                'size'=>'110px auto',
                'align'=>'55% 15%'));
        $wha[link] = 'wha';
        $wha[location] = $HWLCSC;
        $wha[type] = 'collection';

    $hdg[title] = 'Henry D. Green Photograph Collection';
        $hdg[coll] = 'hdg';
        $hdg[sortname] = 'Green, Henry D. Photograph Collection';
        $hdg[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/hdg/123/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $hdg[category] = 'Neighborhoods';
        $hdg[textshort] = 'Photographs by Henry Green of businesses, community groups, neighborhood celebrations and school events on Chicago&rsquo;s North Side, 1943-1951.';
        $hdg[textlong] = 'Chicago Public Library&rsquo;s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago&rsquo;s North Side.';
        $hdg[textrich] = 'Subjects in the collection include local <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Business%20establishments/field/subjed/mode/all/conn/and/order/nosort">business establishments</a>, community groups, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Religious%20institutions/field/subjed/mode/all/conn/and/order/nosort">religious institutions</a>, celebrations in neighborhood parks and events at local schools. Many photographs reflect life on the North Side during World War II, including images of <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Military%20personnel/field/subjed/mode/all/conn/and/order/nosort">military personnel</a>.';
        $hdg[findingaid] = array('text'=>'Henry Delorval Green Photograph Collection Finding Aid','link'=>'https://www.chipublib.org/archival_post/henry-d-green-photograph-collection/');
        $hdg[CPLRes] = array(array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Neighborhood Archival Collections','dd'=>'Additional collections focusing on Chicago&rsquo;s neighborhoods.'));
        $hdg[mainimage] = array('url'=>'6',
                                       'text'=>'American Legion/Albany Park Post 24, undated',
                                       'size'=>'110%',
                                       'align'=>'center');
        $hdg[thumbs] = array(array('url'=>'174',
                                    'text'=>'Girl Scouts Troup 119 Tin Can Salvage, 1945',
                                    'size'=>'130%',
                                    'align'=>'40% 25%'),
                                    array('url'=>'669',
                                    'text'=>'Monadnock Coffee Shop, 1949',
                                    'size'=>'',
                                    'align'=>'47% 57%'),
                                    array('url'=>'345',
                                    'text'=>'Portrait of Henry Delorval Green, 1949',
                                    'size'=>'120%',
                                    'align'=>'45% 27%'),
                                    array('url'=>'123',
                                    'text'=>'Chicago Fire Department, undated',
                                    'size'=>'130%',
                                    'align'=>'center'));
        $hdg[link] = 'hdg';
        $hdg[location] = $NNHC;
        $hdg[type] = 'collection';
        
    $rwk[title] = 'Robert W. Krueger Photograph Collection';
        $rwk[coll] = 'rwk';
        $rwk[sortname] = 'Krueger, Robert W. Photograph Collection';
        $rwk[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rwk/1365/default.jpg',
            'pich'=>'210px',
            'size'=>'100%',
            'pos'=>'50% 50%'
        );
        $rwk[category] = 'Neighborhoods';
        $rwk[textshort] = 'Local photographer Robert Krueger documented Chicago&rsquo;s North Side with photographs of community events, buildings and people.';
        $rwk[textlong] = 'In 1984, the Library began working with local photographer Robert Krueger to document the North Side.';
        $rwk[textrich] = '<p>Krueger photographed hundreds of <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rwk/searchterm/Restaurants/field/subjed/mode/all/conn/and/order/nosort">restaurants</a>, street scenes, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rwk/searchterm/Parks/field/genre/mode/all/conn/and/order/nosort">parks</a>, businesses, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rwk/searchterm/Schools/field/genre/mode/all/conn/and/order/nosort">schools</a>, houses,  <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rwk/searchterm/Cemeteries/field/genre/mode/all/conn/and/order/nosort">cemeteries</a>, religious institutions, community events and residents of North Side neighborhoods. These photographs are a sample of his work.</p>';
        $rwk[CPLRes] = array(array('a'=>'https://www.chipublib.org/archival_post/robert-w-krueger-photograph-collection/','dt'=>'Robert W. Krueger Photograph Collection Finding Aid','dd'=>'Descriptive inventory for the complete physical collection.'),
                    array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/','dt'=>'Chicago Newspapers','dd'=>'Online and microfilm.'));
        $rwk[ExRes] = array(array('a'=>'http://www.ravenswoodhistorical.com/','dt'=>'Ravenswood-Lake View Historical Association','dd'=>'Programs, publications and tours focusing on Chicago northside neighborhood history.'),
                    array('a'=>'http://www.edgewaterhistory.org/ehs/','dt'=>'Edgewater Historical Society','dd'=>'Exhibits, events and tours of the Edgewater neighborhood.'));
        $rwk[mainimage] = array('url'=>'414',
            'text'=>'47th and 48th Ward cleanup on Clark Street, 1988',
            'size'=>'150%',
            'align'=>'50% 30%');
        $rwk[thumbs] = array(array('url'=>'412',
                'text'=>'German-American Festival, 1988',
                'size'=>'300%',
                'align'=>'50% 35%'),
            array('url'=>'349',
                'text'=>'Picasso statue unveiled, 1967',
                'size'=>'120%',
                'align'=>'center'),
            array('url'=>'828',
                'text'=>'Henry Krueger, Marie and Lydia Wahl and a friend, 1923',
                'size'=>'200%',
                'align'=>'50% 25%'),
            array('url'=>'1365',
                'text'=>'1720-22 W. Leland Avenue, 1988',
                'size'=>'140%',
                'align'=>'center'));
        $rwk[link] = 'rwk';
        $rwk[location] = $NNHC;
        $rwk[type] = 'collection';

    $mpu[title] = 'Millennium Park U.S. Equities Realty Collection';
        $mpu[coll] = 'mpu';
        $mpu[sortname] = 'Millennium Park U.S. Equities Realty Collection';
        $mpu[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/mpu/2239/default.jpg',
            'pich'=>'240px',
            'size'=>'130%',
            'pos'=>'35% 50%'
        );
        $mpu[category] = 'Parks';
        $mpu[textshort] = 'See a rail yard transform into a dynamic urban park.';
        $mpu[textlong] = 'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects, engineers and artists.';
        $mpu[textrich] = '<p>Follow the construction of <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/bp%20bridge/field/book/mode/exact/conn/and/order/title/ad/asc">BP Pedestrian Bridge</a>, the first bridge designed by Frank Gehry; Anish Kapoor&rsquo;s monumental public sculpture, <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/cloud%20gate/field/book/mode/exact/conn/and/order/title/ad/asc">Cloud Gate</a>, aka The Bean; the Gehry-designed <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/jay%20pritzker%20pavilion/field/book/mode/exact/conn/and/order/title/ad/asc">Jay Pritzker Pavilion</a>, a soaring bandshell that hosts the U.S.&rsquo;s last free outdoor classical music series; Jaume Plensa&rsquo;s <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/crown%20fountain/field/book/mode/exact/conn/and/order/title/ad/asc">Crown Fountain</a>, a cascading interactive video sculpture; <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/millennium%20monument/field/book/mode/exact/conn/and/order/title/ad/asc">Millennium Monument</a>; <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/lurie%20garden/field/book/mode/exact/conn/and/order/title/ad/asc">Lurie Garden</a>; and <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/mccormick%20tribune%20plaza%20and%20ice%20rink/field/book/mode/exact/conn/and/order/title/ad/asc">McCormick Tribune Plaza and Ice Rink</a>.  Watch the park take shape with <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/general%20construction/field/book/mode/exact/conn/and/order/title/ad/asc">general construction photos</a>, or take in sweeping views with <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/full%20park/field/book/mode/exact/conn/and/order/title/ad/asc">full park images</a>.';
        $mpu[highlights] = array(array('a'=>'http://digital.chipublib.org/digital/collection/mpu/search/searchterm/highlight','dt'=>'Collection Highlights','dd'=>'Get a taste of how this transformation took place in a selected group of images.'));
        $mpu[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-millennium-park-inc/','text'=>'Millennium Park, Inc. Archives Finding Aid'),
                            array('link'=>'https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/','text'=>'Millennium Park / U.S. Equities Realty Collection Finding Aid'));
        $mpu[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=Millennium+Park','dt'=>'Millennium Park Blog Posts','dd'=>'Written by CPL librarians and staff.'));
        $mpu[rights] = 'These images were made possible by generous gifts from U.S. Equities Realty and the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.';
        $mpu[rights2] = 'Courtesy of U.S. Equities Realty and the men and women who built Millennium Park';
        $mpu[mainimage] = array('url'=>'1297',
            'text'=>'Millennium Monument at Wrigley Square, circa 2003',
            'size'=>'110%',
            'align'=>'center');
        $mpu[thumbs] = array(array('url'=>'1543',
                'text'=>'Cloud Gate, omphalos, 2004',
                'size'=>'140%',
                'align'=>'40% 50%'),
            array('url'=>'4390',
                'text'=>'Crown Fountain, gargoyle spray, 2004',
                'size'=>'140%',
                'align'=>'40% 60%'),
            array('url'=>'4781',
                'text'=>'Jay Pritzker Pavilion, headdress, 2004',
                'size'=>'160%',
                'align'=>'70% 0'),
            array('url'=>'4662',
                'text'=>'Jay Pritzker Pavilion, structural steel for the headdress, 2003',
                'size'=>'',
                'align'=>'center'));
        $mpu[link] = 'mpu';
        $mpu[location] = $HWLCSC;
        $mpu[type] = 'collection';

    $cfc[title] = 'Northside Clubs and Organizations';
        $cfc[coll] = 'cfc';
        $cfc[sortname] = 'Northside Clubs and Organizations';
        $cfc[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cfc/130/default.jpg',
            'pich'=>'240px',
            'size'=>'175%',
            'pos'=>'20% 55%'
        );
        $cfc[mainimage] = array('url'=>'24',
            'text'=>'Christian Fellowship Church, picnic at Schiller Park woods, 1930',
            'size'=>'125%',
            'align'=>'80% 40%');
        $cfc[thumbs] = array(array('url'=>'396',
                'text'=>'Members of the Girls&rsquo; Patriotic Service League at Portage Park, 1919',
                'size'=>'450px',
                'align'=>'17% 27%'),
            array('url'=>'61',
                'text'=>'Mayor Harold Washington at the Ravenswood Manor Improvement Association, 70th anniversary celebration, 1984',
                'size'=>'175%',
                'align'=>'50% 50%'),
            array('url'=>'144',
                'text'=>'Annual picnic, Ravenswood Manor Improvement Association, circa 1984',
                'size'=>'375px',
                'align'=>'60% 50%'),
            array('url'=>'107',
                'text'=>'Cleanup Parade, Ravenswood Manor, 1965',
                'size'=>'730px',
                'align'=>'80% 40%'));
        $cfc[category] = 'Neighborhoods';
        $cfc[textshort] = 'Glimpse into the activities of the thriving civic service scene on the North Side as well as the rich ethnic and religious heritage of the community.';
        $cfc[textlong] = 'Glimpse into the activities of the thriving civic service scene on the North Side as well as the rich ethnic and religious heritage of the community.';
        $cfc[subdigicoll] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort','dt'=>'Christian Fellowship Church Collection','dd'=>'Activities of the church founded by Conrad and Martha Wendtland in their home in 1926.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort','dt'=>'Lake View Council on Religious Action','dd'=>'Representatives from local churches and synagogues and members of the Kiwanis Club of Lake View at work'),
                                array('a'=>'http://digital.chipublib.org/digital/collection/cfc/search/searchterm/Portage%20Park%20Community%20Collection/field/collec/mode/exact/conn/and','dt'=>'Portage Park Community Collection','dd'=>'Patriotism on display during World War I.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Ravenswood+Manor+Improvement+Association/field/collec/mode/all/conn/and/order/nosort','dt'=>'Ravenswood Manor Improvement Association','dd'=>'Community activism in the North Side riverfront neighborhood.'));
        $cfc[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-northwest-federation-of-improvement-clubs-records/','text'=>'Northwest Federation of Improvement Clubs Records Finding Aid'), 
                                array('link'=>'https://www.chipublib.org/archival_post/ravenswood-gardens-homeowners-association-records/','text'=>'Ravenswood Gardens Homeowners Association Records Finding Aid'));
                                //removing this link - Woodlawn is a south side neighborhood
                                //array('link'=>'https://www.chipublib.org/fa-united-woodlawn-inc-records/','text'=>'United Woodlawn, Inc. Records'));
        $cfc[link] = 'cfc';
        $cfc[location] = $NNHC;
        $cfc[subcollections] = array($CFCC, $LVCRA, $PortPark, $RMIA);
        $cfc[type] = 'collection';

    $ahs[title] = 'Northside High Schools';
        $ahs[coll] = 'ahs';
        $ahs[sortname] = 'Northside High Schools';
        $ahs[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/ahs/197/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'0% 45%'
        ); 
        $ahs[mainimage] = array('url'=>'634',
            'text'=>'Captain Louis D. Walz and Lake View High School drum major and majorettes, 1942',
            'size'=>'110%',
            'align'=>'center');
        $ahs[thumbs] = array(array('url'=>'350',
                'text'=>'Lake View High School, 1985',
                'size'=>'150%',
                'align'=>'center'),
            array('url'=>'149',
                'text'=>'<em>Gold in Them Thar Hills</em>, Lake View High School, 1940',
                'size'=>'150%',
                'align'=>'50% 25%'),
            array('url'=>'7',
                'text'=>'Amundsen vs. Taft, Winnemac Park, 1949',
                'size'=>'150%',
                'align'=>'center'),
            array('url'=>'245',
                'text'=>'Lake View High School football team en route to the Orange Bowl, Midway Airport, 1953',
                'size'=>'150%',
                'align'=>'center'));
        $ahs[category] = array('Neighborhoods','Libraries &amp; Education');
        $ahs[textshort] = 'Photographs of high school football games, theatrical productions, dances and extracurricular activities from the 1870s to the 1950s.';
        $ahs[textlong] = 'Photographs of high school football games, theatrical productions, dances and extracurricular activities from the 1870s to the 1950s.';
        $ahs[subdigicoll] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Amundsen+High+School+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Amundsen High School Collection','dd'=>'The Winnemac Park school opened in its doors in 1930.  Cheer on their football team as they do battle with Taft High School.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Helen+G.+Kinsella+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Helen G. Kinsella Collection','dd'=>'Dramatic productions and other activities led by the award-winning Lake View High School drama and public speaking teacher.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Lake+View+High+School+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Lake View High School Collection','dd'=>'Academics and extracurriculars at the first high school in Lake View Township.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Walz/field/collec/mode/all/conn/and/order/nosort','dt'=>'Louis D. Walz Collection','dd'=>'The life of the long-time director of the Lake View High School band and World War I veteran.'));
        $ahs[link] = 'ahs';
        $ahs[location] = $NNHC;
        $ahs[type] = 'collection';
        $ahs[subcollections] = array($Amund, $Kins, $LVHS, $Walz);

    $ChicagoParks[title] = 'Chicago Park District Records: Photographs';
        $ChicagoParks[coll] = 'ChicagoParks';
        $ChicagoParks[sortname] = 'Chicago Park District Records: Photographs';
        $ChicagoParks[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/1254/default.jpg',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'87% 47%'
        );
        $ChicagoParks[mainimage] = array('url'=>'6155',
            'text'=>'Mayor Richard J. Daley and Dr. Paul White, Ogden Park, opening of bicycle program, 1956',
            'size'=>'125%',
            'align'=>'66% 50%');
        $ChicagoParks[thumbs] = array(array('url'=>'6221',
                'text'=>'Palmer Park, archery, circa 1935',
                'size'=>'350%',
                'align'=>'35% 25%'),
            array('url'=>'8690',
                'text'=>'Stanford Park, toy lending, 1938',
                'size'=>'175%',
                'align'=>'55% 18%'),
            array('url'=>'112',
                'text'=>'Addams Park, undated',
                'size'=>'190%',
                'align'=>'55% 18%'),
            array('url'=>'8686',
                'text'=>'Stanford Park, junior garden club, 1937',
                'size'=>'250%',
                'align'=>'68% 18%'));
        $ChicagoParks[category] = 'Parks';
        $ChicagoParks[textshort] = 'Chicago Public Library is currently finalizing photographs from the  Chicago Park District Records, which will be available in spring 2018.';
        $ChicagoParks[textlong] = 'Chicago Public Library is currently finalizing the Chicago Park District Records: Photographs digital collection. It will be completed in spring 2018, but you can search many of the photographs now.';
        $ChicagoParks[link] = 'ChicagoParks';
        $ChicagoParks[location] = $HWLCSC;
        $ChicagoParks[type] = 'collection';

    $rhwc[title] = 'Remembering Harold Washington';
        $rhwc[coll] = 'rhwc';
        $rhwc[sortname] = 'Remembering Harold Washington';
        $rhwc[shortname] = 'Harold Washington';
        $rhwc[sidebarname] = 'Harold Washington';
        $rhwc[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rhwc/30/default.jpg',
            'pich'=>'250px',
            'size'=>'200%',
            'pos'=>'75% 40%'
        );
        $rhwc[category] = 'African Americans';
        $rhwc[textshort] = 'Chicago&rsquo;s first African American mayor served from 1983 to 1987, and his legacy endures.';
        $rhwc[textlong] = 'Mayor Harold Washington, the first African American mayor of Chicago, transformed the city during his years in office (1983-1987).';
        $rhwc[textrich] = '<p>This collection showcases Harold Washington&rsquo;s work with <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rhwc/searchterm/Constituency%20groups/field/subjed/mode/all/conn/and/order/nosort">ethnic and constituency groups</a>, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rhwc/searchterm/Famous%20persons/field/subjed/mode/all/conn/and/order/nosort">famous people</a>, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rhwc/searchterm/Groundbreaking/field/subjed/mode/all/conn/and/order/nosort">groundbreaking and development projects</a> and <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/rhwc/searchterm/Politics/field/subjed/mode/all/conn/and/order/nosort">politics</a>.</p><p>Chicago Public Library also holds an extensive <a href="https://www.chipublib.org/archival_subject/harold-washington/">Harold Washington Reseach Collection</a>.  Selections from those collections can be found in the Finding Aids section below.';
        $rhwc[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/post/welcome-to-the-municipal-reference-collection/','dt'=>'Municipal Reference Collection','dd'=>'Collections include local government publications, city election results, maps, municipal ordinances and more.'),
                    array('a'=>'https://www.chipublib.org/fa-brenetta-howell-barrett-papers/','dt'=>'Brenetta Howell Barrett Papers Finding Aid','dd'=>'Barrett served in the mayoral administrations of Harold Washington and Eugene Sawyer. She was a political activist for housing, environmental and civil liberties issues.'),
                    array('a'=>'https://www.chipublib.org/tag/harold-washington/','dt'=>'Harold Washington Blog Posts','dd'=>'Written by CPL librarians and staff.'),
                    array('a'=>'https://www.chipublib.org/mayor-harold-washington-biography/','dt'=>'Mayor Harold Washington Biography','dd'=>'Information about Mayor Harold Washington&rsquo;s education, military service, career and selected accomplishments.'));
        $rhwc[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-campaign-records/',
                                    'text'=>'Mayoral Campaign Records Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-collections-mayoral-records-press-office-records/',
                                    'text'=>'Mayoral Records, Press Office Records Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-and-collections-illinois-state-representative-records/',
                                    'text'=>'Illinois State Representative Records Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-harold-washington-archives-and-collections-pre-mayoral-photograph-collection/',
                                    'text'=>'Pre-Mayoral Photograph Collection Finding Aid'));
        $rhwc[mainimage] = array('url'=>'73',
            'text'=>'Mayor Washington addresses the International Circulation Managers Association, 1987',
            'size'=>'130%',
            'align'=>'80% 0');
        $rhwc[thumbs] = array(array('url'=>'72',
                'text'=>'Mayor Washington reads to Dominik Przekota and class, 1986',
                'size'=>'300%',
                'align'=>'0 20%'),
            array('url'=>'64',
                'text'=>'Mayor Washington at the KOCO groundbreaking ceremony, 1987',
                'size'=>'',
                'align'=>'52% 15%'),
            array('url'=>'13',
                'text'=>'Mayor Washington with members of the Philippine Chamber of Commerce, 1987',
                'size'=>'150%',
                'align'=>'40% 40%'),
            array('url'=>'30',
                'text'=>'Mayor Washington at the Bud Billiken Parade, 1987',
                'size'=>'400%',
                'align'=>'71% 30%'));
        $rhwc[link] = 'rhwc';
        $rhwc[location] = $HWLCSC;
        $rhwc[type] = 'collection';
        $rhwc[sidebarflag] = 'x';
        
    $rvw[title] = 'Ravenswood-Lake View Community Collection';
        $rvw[coll] = 'rvw';
        $rvw[sortname] = 'Ravenswood-Lake View Community Collection';
        $rvw[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/rvw/1086/default.jpg',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'24% 45%'
        );
        $rvw[category] = 'Neighborhoods';
        $rvw[textshort] = 'Street scenes and community life on the North Side, 1860s-1990s.';
        $rvw[textlong] = 'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s.';
        $rvw[textrich] = '<p>More than <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/00000000-1889/field/date/mode/exact/conn/and/order/title/ad/asc">100 early photographs</a> represent Lake View Township and its residents, schools, homes, businesses and everyday rituals.</p><p>Over the next 100 years North Siders and their neighborhoods experienced tremendous changes as evidenced by their <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clothing%20%26%20dress/field/subjea/mode/exact/conn/and/order/title/ad/asc">fashion</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/railroad!automobiles/field/subjea!subjea/mode/all!all/conn/or!and/order/nosort/ad/asc">modes of transportation</a> and the establishment of a number of <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/schools%20--%20illinois%20--%20chicago/field/subjea/mode/exact/conn/and/order/title/ad/asc">schools</a>, <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/churches/field/subjea/mode/all/conn/and/order/title/ad/asc">churches</a> and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/clubs/field/subjea/mode/all/conn/and/order/title/ad/asc">social clubs</a>. Notable local events include <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/Our%20Lady%20of%20Lourdes%20Church%20(Chicago%2C%20Ill.)!construction/field/subjec!subjea/mode/exact!all/conn/and!and/order/nosort/ad/asc">moving the Our Lady of Lourdes church building</a> across Ashland Avenue and <a href="http://digital.chipublib.org/digital/collection/rvw/search/searchterm/ground%20breaking%20ceremonies/field/subjea/mode/exact/conn/and/order/nosort/ad/asc">breaking ground for the Conrad Sulzer Regional Library</a>.</p>';
        $rvw[CPLRes] = array(
                            // array('a'=>'https://www.chipublib.org/archival_post/ravenswood-lake-view-community-collection/','dt'=>'Ravenswood-Lake View Community Collection Finding Aid','dd'=>'Descriptive inventory for the complete physical collection.'),
                            array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/','dt'=>'Chicago Newspapers','dd'=>'Online and microfilm.'),
                            array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Neighborhood Archival Collections','dd'=>'Additional collections focusing on Chicago&rsquo;s neighborhoods.'));
        $rvw[ExRes] = array(array('a'=>'http://www.ravenswoodhistorical.com/','dt'=>'Ravenswood-Lake View Historical Association','dd'=>'Programs, publications and tours focusing on Chicago northside neighborhood history.'),
                            array('a'=>'http://www.edgewaterhistory.org/ehs/','dt'=>'Edgewater Historical Society','dd'=>'Exhibits, events and tours of the Edgewater neighborhood.'));
        $rvw[mainimage] = array('url'=>'421',
            'text'=>'Lincoln &amp; Montrose Avenues, 1910',
            'size'=>'110%',
            'align'=>'50% 50%');
        $rvw[thumbs] = array(array('url'=>'1800',
                'text'=>'Arthur G. Bennett, undated',
                'size'=>'110%',
                'align'=>'60% 10%'),
            array('url'=>'3142',
                'text'=>'Charles Perkins, undated',
                'size'=>'200%',
                'align'=>'50% 10%'),
            array('url'=>'933',
                'text'=>'Riverview Park, 1950s',
                'size'=>'170%',
                'align'=>'50% 50%'),
            array('url'=>'1272',
                'text'=>'Klausen family salutes the American flag, 1918',
                'size'=>'601px',
                'align'=>'33% 20%'));
        $rvw[link] = 'rvw';
        $rvw[location] = $NNHC;
        $rvw[type] = 'collection';
        
    $p16818coll6[title] = 'Philip David Sang Collection';
        $p16818coll6[coll] = 'p16818coll6';
        $p16818coll6[sortname] = 'Sang, Philip David Collection';
        $p16818coll6[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/p16818coll6/691/default.jpg',
            'pich'=>'300px',
            'size'=>'190%',
            'pos'=>'20% 25%'
        );
        $p16818coll6[mainimage] = array('url'=>'4',
            'text'=>'Runaway slave poster, 1854',
            'size'=>'cover',
            'align'=>'auto 0px');
        $p16818coll6[thumbs] = array(array('url'=>'165',
                'text'=>'Sheriff&rsquo;s bill of sale for two enslaved women, 1843',
                'size'=>'cover',
                'align'=>'auto 20%'),
            array('url'=>'7',
                'text'=>'Runaway slave advertisement, 1855',
                'size'=>'cover',
                'align'=>'auto 15%'),
            array('url'=>'691',
                'text'=>'Methodist worship booklet for Lincoln Day Sunday, 1930',
                'size'=>'300%',
                'align'=>'27% 25%'),
            array('url'=>'231',
                'text'=>'&ldquo;Marshal&rsquo;s Sale!,&rdquo; poster for public auction of enslaved persons, 1854',
                'size'=>'cover',
                'align'=>'center'));
        $p16818coll6[category] = array('African Americans','Civil War');
        $p16818coll6[textshort] = 'The Philip David Sang Collection contains unpublished and published works and ephemera united by its focus on the struggle of Africans and African Americans through the Middle Passage to the Civil Rights movement.';
        $p16818coll6[textlong] = 'The Philip David Sang Collection contains unpublished and published works and ephemera united by its focus on the struggle of Africans and African Americans through the Middle Passage to the Civil Rights movement.';
        $p16818coll6[textrich] = 'During the 20th century, Chicago native and former president of the Illinois State Historical Society Philip David Sang collected a wide variety of documents and manuscripts exploring American history. The majority of the collection, and the selections made available here, document the African American experience in slavery and in the resistance which culminated in its abolition. Series include Abolitionism, Runaways, Inventory and Birth Records.';
        $p16818coll6[findingaid] = array('link' => 'https://www.chipublib.org/fa-philip-david-sang-collection', 'text' => 'Philip David Sang Collection');
        $p16818coll6[CPLRes] = array(array('a'=>'http://www.chipublib.org/fa-richard-durham-papers/','dt'=>'Richard Durham Papers','dd'=>'Collection includes scripts for radio plays devoted to the Black experience in America.'),
                            array('a'=>'http://www.chipublib.org/fa-madeline-stratton-morris-papers/','dt'=>'Madeline Stratton Morris Papers','dd'=>'Includes manuscripts and clippings relating to slavery.'),
                            array('a'=>'http://www.chipublib.org/fa-illinois-writers-project-2/','dt'=>'Illinois Writers Project: “Negro in Illinois” Papers','dd'=>'Notes and documents collected by the WPA on slavery, abolition and the Underground Railroad.'),
                            array('a'=>'https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/#P2S9','dt'=>'American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collections','dd'=>'Series 8 contains documents related to the sale and trade of slaves as well as published speeches.'));
        $p16818coll6[ExRes] = array(array('a'=>'https://archives.lib.siu.edu/?p=collections/controlcard&id=2072','dt'=>'Philip D. Sang Collection of Presidential Signatures, 1787-1956','dd'=>'Correspondence and documents written by prominent names in American history dating from the American Revolutionary War to the early 1950s.'), 
                            array('a'=>'http://findingaids.brandeis.edu/agents/79?agent_type=agent_person','dt'=>'Philip D. Sang collections at Brandeis University','dd'=>'Materials related to the signers of the Declaration of Independence and U.S. Constitution.'));
        $p16818coll6[link] = 'p16818coll6';
        $p16818coll6[location] = $Harsh;
        $p16818coll6[type] = 'collection';
    


//categories
    // categories deserve the same treatment as subcollections (in the sense that their collection arrays should be passed as wholes into category variables), but there's danger of redundancy with theater and HW
    $AfAm[title] = 'African Americans';
        $AfAm[shortname] = 'African Americans';
        $AfAm[sidebarname] = 'African Americans';
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
                                            'dt'=>'African American History Blog Posts',
                                            'dd'=>'Written by CPL librarians and staff.'));
        $AfAm[mainimage] = array('url'=>'4',
            'coll' => 'cr',
            'text'=>'Women&rsquo;s reading group at Hall Branch, 1940',
            'size'=>'100%',
            'align'=>'50% 0%');
        $AfAm[thumbs] = array(array('url'=>'14',
                'coll' => 'cr',
                'text'=>'All-black WAC band, 1944',
                'size'=>'431px',
                'align'=>'0% 20%'),
            array('url'=>'8g',
                'coll' => 'cr',
                'text'=>'Marian Campfield, women&rsquo;s editor of the <em>Chicago Defender</em>, 1948',
                'size'=>'140%',
                'align'=>'center'),
            array('url'=>'0',
                'coll' => 'cr',
                'text'=>'Catalog, &rdquo;Exhibition of the Art of the American Negro,&rdquo; 1940',
                'size'=>'112%',
                'align'=>'75% 45%'),
            array('url'=>'6',
                'coll' => 'rhwc',
                'text'=>'Mayor Washington at the 27th Annual International Folk Fair, 1986',
                'size'=>'200%',
                'align'=>'40% 60%'));
        $AfAm[link] = 'AfAm';
        $AfAm[type] = 'category';
        $AfAm[sidebarflag] = 'x';

    $CivilWar[title] = 'Civil War';
        $CivilWar[shortname] = 'Civil War';
        $CivilWar[sidebarname] = 'Civil War';
        $CivilWar[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/721/default.jpg',
            'pich'=>'280px',
            'size'=>'auto 120%',
            'pos'=>'center'
        );
        $CivilWar[mainimage] = array('url'=>'231',
            'coll' => 'p16818coll6',
            'text'=>'&ldquo;Marshal&rsquo;s Sale!,&rdquo; poster for public auction of enslaved persons, 1854',
            'size'=>'cover',
            'align'=>'center');
        $CivilWar[thumbs] = array(array('url'=>'173',
                'coll' => 'wha',
                'text'=>'Pauline Cushman, actress and Union spy, undated',
                'size'=>'150%',
                'align'=>'center 30%'),
        // $CivilWar[thumbs] = array(array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/p16818coll6/37/default.jpg',
        //         'text'=>'Reward poster for capture of runaway slave man',
        //         'size'=>'cover',
        //         'align'=>'center 0%'),
            array('url'=>'314',
                'coll' => 'wha',
                'text'=>'Sword, model 1850 staff and field officer, 1861-1865',
                'size'=>'auto 150px',
                'align'=>'40% 30%'),
        // array('url'=>'http://digital.chipublib.org/digital/api/singleitem/image/wha/721/default.jpg',
        //     'text'=>'Uniform, artillery jacket',
        //     'size'=>'auto 120px',
        //     'align'=>'50% 15%'),
            array('url'=>'35',
            'coll' => 'wha',
                'text'=>'Ulysses S. Grant, 1865',
                'size'=>'120px auto',
                'align'=>'50% 20%'),
            array('url'=>'422',
                'coll' => 'p16818coll6',
                'text'=>'Letter from John Brown, Jr., 1859',
                'size'=>'200px',
                'align'=>'55% 5%'));
        $CivilWar[textshort] = 'Personal narratives, artifacts and manuscripts tell the story of slaves and soldiers during the war that tore the nation apart.';
        $CivilWar[textlong] = 'A view into life during the Civil War via personal letters, documents and photographs detailing battles, homefront activities and the fight to end slavery in the United States.';
        $CivilWar[textrich] = 'A significant portion of the library&rsquo;s Civil War era material comes from the Illinois Department of the Grand Army of the Republic, including <a href="http://digital.chipublib.org/digital/collection/wha/search/searchterm/edged%20weapons">weaponry</a> and <a href="http://digital.chipublib.org/digital/collection/wha/search/searchterm/lincoln/field/subjec/mode/all/conn/and/order/nosort/ad/asc">Lincolniana</a>.  <p>Complementing the GAR material are items in the Harsh Research Collection&rsquo;s Philip David Sang Collection pertaining to <a href="http://digital.chipublib.org/digital/collection/p16818coll6/search/searchterm/186104-1865/field/date/mode/exact/conn/and/order/title/ad/asc">the African American experience during the Civil War era.</a></p>';
        $CivilWar[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=%22civil+war%22','dt'=>'Civil War blog posts','dd'=>'Written by CPL librarians and staff.'));
        $CivilWar[ExRes] = array(array('a'=>'https://www.loc.gov/collections/abraham-lincoln-papers/about-this-collection/','dt'=>'Abraham Lincoln Papers at the Library of Congress','dd'=>''), 
                                array('a'=>'https://www.umbrasearch.org/','dt'=>'Umbra Search African American History','dd'=>''), 
                                array('a'=>'https://dp.la/primary-source-sets/sets?tags%5B%5D=civil-war-and-reconstruction-1850-1877','dt'=>'DPLA&rsquo;s Primary Source Sets covering the Civil War and Reconstruction eras','dd'=>''));
        $CivilWar[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/','text'=>'American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collection Finding Aid'),
        array('link'=>'https://www.chipublib.org/fa-daughters-of-union-veterans-of-the-civil-war-1861-1865-records-1895-1965/','text'=>'Daughters of Union Veterans of the Civil War, 1861-1865, Records Finding Aid'),
        array('link'=>'https://www.chipublib.org/archival_post/phillip-sang-papers/','text'=>'Philip David Sang Collection Finding Aid'));
        $CivilWar[link] = 'CivilWar';
        $CivilWar[type] = 'category';
        $CivilWar[sidebarflag] = 'x';

    //Harold Washington
    $LibEd[title] = 'Libraries &amp; Education';
        $LibEd[shortname] = 'Libraries &amp; Education';
        $LibEd[sidebarname] = 'Libraries &amp; Education';
        $LibEd[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/woop/2/default.jpg',
            'pich'=>'250px',
            'size'=>'120%',
            'pos'=>'27% 0%'
            );
        $LibEd[mainimage] = array('url'=>'3595',
            'coll' => 'rvw',
            'text'=>'Andersonville School, undated',
            'size'=>'130%',
            'align'=>'center');
        $LibEd[thumbs] = array(array('url'=>'426',
                'coll' => 'hdg',
                'text'=>'Jamieson School, 1944',
                'size'=>'130%',
                'align'=>'50% 50%'),
            array('url'=>'4097',  
                'coll' => 'rvw',
                'text'=>'Our Lady of Lourdes school library, circa 1942',
                'size'=>'300%',
                'align'=>'40% 40%'),
            array('url'=>'721',
                'coll' => 'ahs',
                'text'=>'Drum majorettes, Lave View High School, 1949',
                'size'=>'cover',
                'align'=>'center'),
            array('url'=>'2',
                'coll' => 'woop',
                'text'=>'Chicago Public Library bookmobile service, circa 1940',
                'size'=>'150%',
                'align'=>'27% 0%'));
        $LibEd[textshort] = 'Learn about Chicago through its libraries and schools in these photographs dating from the 1860s through the 1990s.';
        $LibEd[textlong] = 'Learn about Chicago through its libraries and schools in these photographs dating from the 1860s through the 1990s.';
        $LibEd[textrich] = 'Explore Chicago&rsquo;s development, from the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a> that housed the first Chicago Public Library to <a href="http://digital.chipublib.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/exterior%20view%20school/field/all/mode/all/conn/and/order/title/ad/asc">school building exteriors</a> from the second half of the 19th century through the first half of 20th century. Feel the energy of its <a href="http://digital.chipublib.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/high%20school%20band/field/all/mode/all/conn/and/order/title/ad/asc">high school bands</a> and see its <a href="http://digital.chipublib.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/sports/field/all/mode/all/conn/and/order/title/ad/asc">sports teams and athletes</a> in action.';
        $LibEd[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/category/chicago-history/','dt'=>'Chicago History Blog Posts','dd'=>'Written by CPL librarians and staff.'), 
            array('a'=>'https://www.chipublib.org/archival_subject/chicago-public-library/','dt'=>'Finding Aids: Chicago Public Library','dd'=>'Descriptive inventories of the archival collections documenting the development of Chicago Public Library.'),
            array('a'=>'https://www.chipublib.org/archival_subject/education/','dt'=>'Finding Aids: Education','dd'=>'Descriptive inventories of the archival collections of educators, schools and more.'));
        $LibEd[link] = 'LibEd';
        $LibEd[type] = 'category';
        $LibEd[sidebarflag] = 'x';

    $News[title] = 'Chicago Newspapers';
        $News[shortname] = 'Newspapers';
        $News[sidebarname] = 'Newspapers';
        $News[cardpic] = array(
            'pic'=>'',
            'pich'=>'230px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $News[textshort] = '';
        $News[textlong] = '';
        $News[link] = 'examiner';
        $News[type] = 'category';
        $News[sidebarflag] = 'x';

    $Neigh[title] = 'Chicago Neighborhoods';
        $Neigh[shortname] = 'Neighborhoods';
        $Neigh[sidebarname] = 'Neighborhoods';
        //$Neigh[pic] = 'http://digital.chipublib.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
        $Neigh[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/cfc/138/default.jpg',
            'pich'=>'230px',
            'size'=>'110%',
            'pos'=>'50% 50%'
        );
        $Neigh[textshort] = 'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to the present.';
        $Neigh[textlong] = 'Connect with the residents of Chicago and their stories through these fascinating photographs dating from the 1860s through the 1990s.';
        $Neigh[catcoll] = 'that center around Chicago&rsquo;s neighborhoods';
        $Neigh[textrich] = '<p>This collection documents how Chicagoans lived their daily lives and how their neighborhoods changed and evolved over time.  Go back to <a href="http://digital.chipublib.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/schools/field/subjec/mode/all/conn/and/order/nosort/ad/asc">school</a>, revisit favorite <a href="http://digital.chipublib.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/restaurants%20--%20illinois%20--%20chicago/field/subjec/mode/all/conn/and/order/title/ad/asc">restaurants</a>, salute <a href="http://digital.chipublib.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/military/field/subjec/mode/all/conn/and/order/nosort">members of the military</a> or just <a href="http://digital.chipublib.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/transportation/field/subjec/mode/all/conn/and/order/nosort">ride around the city</a>.  Every neighborhood tells a story!</p>';
        $Neigh[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/category/chicago-history/','dt'=>'Chicago History Blog Posts','dd'=>'Written by CPL librarians and staff.'), 
                                array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Finding Aids','dd'=>'Descriptive inventories of the archival collections of community associations, religious organizations, high schools, notable Chicagoans and more'));
        $Neigh[mainimage] = array('url'=>'107',
            'coll' => 'cfc',
            'text'=>'Cleanup Parade, Ravenswood Manor, 1965',
            'size'=>'',
            'align'=>'90% 50%');
        $Neigh[thumbs] = array(array('url'=>'1248',
                'coll' => 'rwk',
                'text'=>'Picasso statue unveiled, 1967',
                'size'=>'',
                'align'=>'25% 60%'),
            array('url'=>'782',
                'coll' => 'rwk',
                'text'=>'Tin Man sculpture, Oz Park, 2001',
                'size'=>'',
                'align'=>'57% 17%'),
            array('url'=>'157',
                'coll' => 'dtd',
                'text'=>'31st Street and Albany Avenue, repairing old brick outfall, 1936',
                'size'=>'',
                'align'=>'62% 37%'));
        $Neigh[link] = 'Neigh';
        $Neigh[type] = 'category';
        $Neigh[sidebarflag] = 'x';

    $Parks[title] = 'Chicago Parks';
        $Parks[shortname] = 'Parks';
        $Parks[sidebarname] = 'Parks';
        $Parks[cardpic] = array(
            'pic'=>'http://digital.chipublib.org/digital/api/singleitem/image/ChicagoParks/1626/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'center'
        );
        $Parks[textshort] = 'Visit Chicago&rsquo;s parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to more than 500 parks today.';
        $Parks[textlong] = 'Parks have always been a part of Chicago’s city planning. Explore their growth and development from six large parks begun around 1870 to over 500 today.';
        $Parks[textrich] = '<p>While Chicago&rsquo;s <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/Grant%20Park!Lincoln%20Park!zoo%20hamlin!Millennium%20Park/field/descri!descri!all!all/mode/exact!exact!none!all/conn/or!or!or!and/order/nosort/ad/asc">lakefront parks</a> are popular with residents and tourists alike, public green space abounds in many parts of the city. Take in <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/lagoons/field/all/mode/all/conn/and/order/nosort/ad/asc/page/10">lagoons</a>, <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/prairie/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">prairies</a>, wetlands and woodlands across the urban landscape. Peek into <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/fieldhouses%20!field%20houses/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">field houses</a> and <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/refectories%20refectory/field/all/mode/any/conn/and/order/nosort/ad/asc">refectories</a>. Gaze at <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/bridges!park/field/all!all/mode/all!all/conn/and!and/order/nosort/ad/asc">bridges</a>, <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/pergolas%20pergola/field/all/mode/any/conn/and/order/nosort/ad/asc/page/3">pergolas</a> and <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/fountains/field/all/mode/any/conn/and/order/nosort/ad/asc">fountains</a>, from the utilitarian to the ornate. Observe how Chicagoans and visitors engage with the parks in all seasons by <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/bicycle*%20park/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">biking</a>, <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/ice%20skating/field/all/mode/all/conn/and/order/nosort/ad/asc">ice skating</a>, <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/sledding!sleds/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">sledding</a>, <a href="http://digital.chipublib.org/digital/search/collection/ChicagoParks!mpu/searchterm/archery/field/all/mode/all/conn/and/order/nosort/ad/asc/page/2">competing in archery</a>, <a href="http://digital.chipublib.org/digital/collection/mpu/search/searchterm/frankel%20plates/field/all/mode/all/conn/and/order/nosort/ad/asc">taking selfies</a>, <a href="http://digital.chipublib.org/digital/search/collection/mpu!cr!dtd!rvw!wha!woop!rwk!ahs!cfc!ChicagoParks/searchterm/celebrations%20park/field/all/mode/all/conn/or/order/nosort/ad/asc">celebrating events</a> and more.</p>';
        $Parks[catcoll] = 'that focus on Chicago&rsquo;s parks';
        $Parks[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=parks','dt'=>'Park Blog Posts','dd'=>'Written by CPL librarians and staff.'));
        $Parks[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-chicago-park-district-records/','text'=>'Chicago Park District Records: Drawings Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-clarence-hatzfeld-papers/','text'=>'Clarence Hatzfeld Papers Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-millennium-park-inc/','text'=>'Millennium Park, Inc. Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/','text'=>'Millennium Park / U.S. Equities Realty Collection Finding Aid'),
                                array('link'=>'https://www.chipublib.org/fa-open-space-section-records/','text'=>'Open Space Section Records Finding Aid'));
        $Parks[mainimage] = array('url'=>'3708',
            'coll' => 'ChicagoParks',
            'text'=>'Hula hooping in Horner Park, 1971',
            'size'=>'110%',
            'align'=>'center');
        $Parks[thumbs] = array(array('url'=>'2239',
                'coll' => 'mpu',
                'text'=>'Cloud Gate, assembly complete, 2004',
                'size'=>'cover',
                'align'=>'center'),
            array('url'=>'112',
                'coll' => 'ChicagoParks',
                'text'=>'Addams Park, undated',
                'size'=>'200%',
                'align'=>'52% 17%'),
            array('url'=>'4752',
                'coll' => 'ChicagoParks',
                'text'=>'Red Saunders performs in Lake Meadow Park, 1970',
                'size'=>'500px',
                'align'=>'55% 25%'),
            array('url'=>'6209',
                'coll' => 'ChicagoParks',
                'text'=>'Palmer Park, 1965',
                'size'=>'140%',
                'align'=>'50% 50%'));
        $Parks[link] = 'Parks';
        $Parks[type] = 'category';
        $Parks[sidebarflag] = 'x';

    $CPB01[title] = 'Chicago Theater';
        $CPB01[shortname] = 'Theater';
        $CPB01[sortname] = 'Chicago Theater';
        $CPB01[sidebarname] = 'Theater';
        $CPB01[sortname] = 'Chicago Theater';
        $CPB01[cardpic] = array(
            'pic'=>'theater-cardpic.png',
            'pich'=>'250px',
            'size'=>'auto 225%',
            'pos'=>'45% 60%'
        );
        $CPB01[category] = '';
        $CPB01[textshort] = 'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $CPB01[textlong] = 'Theater collections at Chicago Public Library document a vibrant local theater community.';
        $CPB01[textrich] = '<p>Become a playgoer at Chicago&rsquo;s early theaters. Examine more than 2,000 playbills and programs dating from 1848 to 1922. Of special interest are playbills from shows starring <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Booth%2C%20Edwin%2C%201833-1893/field/contri/mode/all/conn/and/order/title/ad/asc">Edwin Booth</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Jefferson%2C%20Joseph%2C%201829-1905/field/contri/mode/all/conn/and/order/title/ad/asc">Joseph Jefferson</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/Bernhardt%2C%20Sarah%2C%201844-1923/field/contri/mode/all/conn/and/order/title/ad/asc">Sarah Bernhardt</a> at the well-known <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/mcvicker\'s/field/theata/mode/all/conn/and/order/title/ad/asc">McVicker&rsquo;s Theatre</a> as well as playbills from vaudeville houses and neighborhood theaters.</p><p>Alongside traditional plays and musical works, numerous genres are represented in the collection, including <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/extravaganzas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">extravaganzas</a>, <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/juggling%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">juggling</a> and <a href="http://digital.chipublib.org/digital/collection/CPB01/search/searchterm/magic%20--%20illinois%20--%20chicago/field/genre/mode/exact/conn/and/order/title/ad/asc">magic shows</a>, among others.</p>';
        $CPB01[rights] = 'The Historic Programs digital collection is made possible by a generous grant from the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.';
        // $CPB01[highlights] = array(array('a'=>'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/','dt'=>'Chicago Theater Collection-Historic Playbills','dd'=>'Programs, playbills and newspaper clippings from more than 5,000 productions at Chicago&rsquo;s historic theaters dating back to the 1840s.'),
                                    // array('a'=>'http://digital.chipublib.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc','dt'=>'E.B. Gould Programs Collection','dd'=>'The annotated programs of a local Chicago businessman and enthusiastic playgoer.'));
        $CPB01[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-theater-collection-historic-programs/','dt'=>'Chicago Theater Collection-Historic Programs Finding Aid','dd'=>'The complete and ever-increasing inventory of theater programs past and present, some of which are presented here.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/theater/','dt'=>'Chicago Theater Collection','dd'=>'A list of collections at Chicago Public Library representing theaters, designers, actors and other members of the theater community. '));
        $CPB01[mainimage] = array('url'=>'6053',
            'coll' => 'CPB01',
            'text'=>'Sarah Bernhardt in <em>Camille</em>, McVicker&rsquo;s Theatre, 1881',
            'size'=>'134%',
            'align'=>'52% 15%');
        $CPB01[thumbs] = array(array('url'=>'8601',
                'coll' => 'CPB01',
                'text'=>'<em>Evening with Columbine</em>, Chicago Little Theatre, 1913',
                'size'=>'200%',
                'align'=>'50% 85%'),
            array('url'=>'6272',
                'coll' => 'CPB01',
                'text'=>'<em>Mr. Blue Beard</em>, Iroquois Theatre, 1903',
                'size'=>'110%',
                'align'=>'50% 30%'),
            array('url'=>'6748',
                'coll' => 'CPB01',
                'text'=>'Joseph Jefferson in <em>Rivals</em>, McVicker&rsquo;s Theatre, 1896',
                'size'=>'140%',
                'align'=>'50% 40%'),
            array('url'=>'9755',
                'coll' => 'CPB01',
                'text'=>'<em>The Mikado</em>, Chicago Opera House, 1886',
                'size'=>'200%',
                'align'=>'68% 47%'));
        $CPB01[link] = 'CPB01';
        $CPB01[coll] = 'CPB01';
        $CPB01[location] = $HWLCSC;
        $CPB01[type] = 'collection';
        $CPB01[subcollections] = array($EBG, $Playbills);
        $CPB01[sidebarflag] = 'x';


//misc arrays
    // the $cards array is used to create cards on the home page, but also to create entries on the All Collections A-Z page
    $cards = array($Announce, $examiner, $bar, $woop, $cr, $dtd, $CPB01, $wha, 
                   $hdg, $rwk, $mpu, $cfc, $ahs, $ChicagoParks, $rhwc, $rvw, $p16818coll6, $EBG, $Playbills, $Amund, 
                   $Kins, $LVHS, $Walz, $CFCC, $LVCRA, $PortPark, $RMIA, $HWR, $AfAm, 
                   $CivilWar, $LibEd, $News, $Neigh, $Parks, $HWLCSC, $MRC, $NNHC, $Harsh);
    
    // the $categories array is used to transform category names into useable links; this could be deprecated when collection and subcollection arrays are passed into category arrays, but until then we use this
    $categories = array('AfAm'=>'African Americans','CivilWar'=>'Civil War',
                        'LibEd'=>'Libraries &amp; Education',
                        'Neigh'=>'Neighborhoods', 'Examiner'=>'Newspapers', 'Parks'=>'Parks');
        
    // This is a verbatim copy of the array in locations.php; this version is not used; for some reason, it didn't work when I tried to use this one instead of the other one; some day I'll really have nothing better to do 
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
