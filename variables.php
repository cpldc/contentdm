<?php
    //  ini_set('display_errors',1); 
    //  error_reporting(E_ALL);

    // this function is for ordering arrays on pages, either alphabetically like in the sidebar, or by flag, like the homepage cards
        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }
        $ChicagoParks[flag] =   '1';
        $p16818coll6[flag] =    '2';
        $CPB01[flag] =          '3';
        $mpu[flag] =            '4';
        $rhwc[flag] =           '5';
        $wha[flag] =            '6';
        $examiner[flag] =       '7';
        $cr[flag] =             '8';
        $rwk[flag] =            '9';
        $hdg[flag] =            '10';
        $bar[flag] =            '11';
        $woop[flag] =           '12';
        $dtd[flag] =            '13';
        $cfc[flag] =            '';
        $ahs[flag] =            '';
        $rvw[flag] =            '';
        $AfAm[flag] =           '';
        $News[flag] =           '';
        $Neigh[flag] =          '';
        $CivilWar[flag] =       '';
        $Parks[flag] =          '';
        $LibEd[flag] =          '';
        $Announce[flag] =       '';

//array(array('a'=>'','dt'=>'','dd'=>''));
// since titles are written before center-content takes over, all pages need titles stored here; they also print at the top of the center-content area
    $All[title] = 'Digital Collections A-Z';
    $All[link] = 'All';
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
    $Takedown[title] = 'Copyright and Takedown Policy';
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
        </ul><p>Upon completion of the assessment, we will take appropriate action and communicate that action to you.</p> <h2>Copyright</h2>
        <p class="about-contact-p about-contact-p-first">Usage, transmission, downloading or reproduction of protected items beyond that allowed by Fair Use Copyright Law requires the written permission of the copyright owners. When possible, CPL provides information about copyright owners and restrictions concerning its collections.</p>
        <p class="about-contact-p">Determining the existence of copyright or any other legal restrictions, as well as obtaining permission from the copyright holder, is solely the responsibility of the patron.</p>
        <p class="about-contact-p"><b>Notice: Warning Concerning Copyright Restrictions</b></p>
        <p class="about-contact-p">The copyright law of the United States (Title 17, United States Code) governs the making of photocopies or other reproductions of copyrighted material.</p>
        <p class="about-contact-p">Under certain conditions specified in the law, libraries and archives are authorized to furnish a photocopy or other reproduction. One of these specific conditions is that the photocopy or reproduction is not to be “used for any purpose other than private study, scholarship or research.” If a user makes a request for, or later uses, a photocopy or reproduction for purposes in excess of “fair use,” that user may be liable for copyright infringement.</p>
        <p class="about-contact-p about-contact-p-last">This institution reserves the right to refuse a copying order if, in its judgment, fulfillment of the order would involve violation of copyright law.</p>
        ';

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
            'align'=>'50% 50%',
            'alt'=>'Engraving of a water tank on a support. Trees, grazing cattle, and a fence are pictured in front along with two men wearing hats.');
        $HWLCSC[thumbs] = array(array('url'=>'2196',
                'coll' => 'CPB01',
                'text'=>'<em>The Philanderer</em>, Chicago Little Theatre, 1914',
                'size'=>'170%',
                'align'=>'25% 22%',
                'alt'=>'Black and white drawing of a peacock on a branch in front of an orange circle'),
            array('url'=>'4833',
                'coll' => 'ChicagoParks',
                'text'=>'Dancers at Madden Park, 1954',
                'size'=>'140%',
                'align'=>'center',
                'alt'=>'Young women in white leotards and skirts pose with their arms extended and knees bent'),
            array('url'=>'42',
                'coll' => 'wha',
                'text'=>'Wanted poster, &ldquo;$100,000 Reward! The Murderer of our late beloved President, Abraham Lincoln,&rdquo; 1865',
                'size'=>'105%',
                'align'=>'50% 20%',
                'alt'=>'Poster'),
            array('url'=>'4066',
                'coll' => 'mpu',
                'text'=>'Crown Fountain preview, 2004',
                'size'=>'370%',
                'align'=>'50% 50%',
                'alt'=>'Three boys play in water in front of a lighted brick wall'));
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
            'align'=>'center',
            'alt'=>'A group of 13 men and women sit and stand around a table; including Carter G. Woodson and Vivian G. Harsh.');
        $Harsh[thumbs] = array(array('url'=>'18',
                'coll' => 'cr',
                'text'=>'U.S. Congressman William L. Dawson, 1940s',
                'size'=>'200%',
                'align'=>'50% 10%',
                'alt'=>'William Dawson stands in front of two microphones with an American flag and a reelect Dawson for Congressman sign behind him.'),
            array('url'=>'405',
            'coll' => 'p16818coll6',
                'text'=>'Note from Frederick Douglass regarding A. Lincoln&rsquo;s death, 1865',
                'size'=>'400%',
                'align'=>'29% 10%',
                'alt'=>'Portrait sketch of Frederick Douglass next to a 1865 letter by Douglass regarding President Lincoln&lsquo;s death. Below the portrait is a typed transcription of the handwritten letter. '),
            array('url'=>'21',
            'coll' => 'cr',
                'text'=>'Pamphlet, &ldquo;The War&rsquo;s Greatest Scandal,&rdquo; 1943',
                'size'=>'250%',
                'align'=>'55% 75%',
                'alt'=>'Cover page of a pamphlet titled &rdquo;The War&lsquo;s Greatest Scandal.&ldquo; A black and white sketch of a giant white person&lsquo;s fist on top of an African American soldier. '),
            array('url'=>'2',
            'coll' => 'cr',
                'text'=>'&ldquo;Self-portrait&rdquo; by Gordon Parks, 1941',
                'size'=>'cover',
                'align'=>'50% 40%',
                'alt'=>'Portrait photograph of Gordon Parks holding a cigarette. '));
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
    $EBG[filename] = 'EBG';
    $EBG[title] = 'E.B. Gould Programs Collection';
        $EBG[sortname] = 'Gould, E.B. Programs Collection';
        $EBG[textlong] = 'See <a class="all-links" href="#CPB01">Chicago Theater</a>.';
        $EBG[textshort] = 'The annotated programs of a local Chicago businessman and enthusiastic playgoer.';
        $EBG[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc';
        $EBG[type] = 'subcollection';

    $Playbills[filename] = 'Playbills';
        $Playbills[title] = 'Chicago Theater Collection-Historic Playbills';
        $Playbills[sortname] = 'Chicago Theater Collection-Historic Playbills';
        $Playbills[textlong] = 'See <a class="all-links" href="#CPB01">Chicago Theater</a>.';
        $Playbills[textshort] = 'Programs, playbills and newspaper clippings from more than 2,000 productions at Chicago’s historic theaters dating back to the 1840s.';
        $Playbills[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/';
        $Playbills[type] = 'subcollection';
                
    $Amund[filename] = 'Amund';
        $Amund[title] = 'Amundsen High School Collection';
        $Amund[sortname] = 'Amundsen High School Collection';
        $Amund[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Amund[textshort] = 'The Winnemac Park school opened in its doors in 1930. Cheer on their football team as they do battle with Taft High School.';
        $Amund[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Amundsen+High+School+Collection/field/collec/mode/all/conn/and/order/nosort';
        $Amund[link] = '#ahs';
        $Amund[type] = 'subcollection';

    $Kins[filename] = 'Kins';
        $Kins[title] = 'Helen G. Kinsella Collection';
        $Kins[sortname] = 'Kinsella, Helen G. Collection';
        $Kins[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Kins[textshort] = 'Dramatic productions and other activities led by the award-winning Lake View High School drama and public speaking teacher.';
        $Kins[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Helen+G.+Kinsella+Collection/field/collec/mode/all/conn/and/order/nosort';
        $Kins[link] = '#ahs';
        $Kins[type] = 'subcollection';

    $LVHS[filename] = 'LVHS';
        $LVHS[title] = 'Lake View High School Collection';
        $LVHS[sortname] = 'Lake View High School Collection';
        $LVHS[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $LVHS[textshort] = 'Academics and extracurriculars at the first high school in Lake View Township.';
        $LVHS[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Lake+View+High+School+Collection/field/collec/mode/all/conn/and/order/nosort';
        $LVHS[link] = '#ahs';
        $LVHS[type] = 'subcollection';

    $Walz[filename] = 'Walz';
        $Walz[title] = 'Louis D. Walz Collection';
        $Walz[sortname] = 'Walz, Louis D. Collection';
        $Walz[textlong] = 'See <a class="all-links" href="#ahs">Northside High Schools</a>.';
        $Walz[textshort] = 'The life of the long-time director of the Lake View High School band and World War I veteran.';
        $Walz[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Walz/field/collec/mode/all/conn/and/order/nosort';
        $Walz[link] = '#ahs';
        $Walz[type] = 'subcollection';

    $CFCC[filename] = 'CFCC';
        $CFCC[title] = 'Christian Fellowship Church Collection';
        $CFCC[sortname] = 'Christian Fellowship Church Collection';
        $CFCC[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $CFCC[textshort] = 'Activities of the church founded by Conrad and Martha Wendtland in their home in 1926.';
        $CFCC[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort';
        $CFCC[link] = '#cfc';
        $CFCC[type] = 'subcollection';

    $LVCRA[filename] = 'LVCRA';
        $LVCRA[title] = 'Lake View Council on Religious Action';
        // removed due to rights concerns; inactive in contentDM
        $LVCRA[sortname] = 'Lake View Council on Religious Action';
        $LVCRA[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $LVCRA[textshort] = 'Representatives from local churches and synagogues and members of the Kiwanis Club of Lake View at work.';
        $LVCRA[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort';
        $LVCRA[link] = '#cfc';
        $LVCRA[type] = 'subcollection';

    $PortPark[filename] = 'PortPark';
        $PortPark[title] = 'Portage Park Community Collection';
        $PortPark[sortname] = 'Portage Park Community Collection';
        $PortPark[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $PortPark[textshort] = 'Patriotism on display during World War I.';
        $PortPark[browse] = 'https://cdm16818.contentdm.oclc.org/digital/collection/cfc/search/searchterm/Portage%20Park%20Community%20Collection/field/collec/mode/exact/conn/and';
        $PortPark[link] = '#cfc';
        $PortPark[type] = 'subcollection';

    $RMIA[filename] = 'RMIA';
        $RMIA[title] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[sortname] = 'Ravenswood Manor Improvement Association Collection';
        $RMIA[textlong] = 'See <a class="all-links" href="#cfc">Northside Clubs and Organizations</a>.';
        $RMIA[textshort] = 'Community activism in the North Side riverfront neighborhood.';
        $RMIA[browse] = 'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Ravenswood+Manor+Improvement+Association/field/collec/mode/all/conn/and/order/nosort';
        $RMIA[link] = '#cfc';
        $RMIA[type] = 'subcollection';

    $HWR[filename] = 'HWR';
        $HWR[title] = 'Washington, Harold';
        $HWR[sortname] = 'Washington, Harold';
        $HWR[textlong] = 'See <a class="all-links" href="#rhwc">Remembering Harold Washington</a>';
        $HWR[link] = '#rhwc';
        $HWR[type] = 'subcollection';


//collections
    $examiner[title] = 'Chicago Examiner';
        $examiner[coll] = 'examiner';
        $examiner[sortname] = 'Chicago Examiner';
        $examiner[cardpic] = array('pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/examiner/5449/default.jpg',
            'pich'=>'19rem',
            'size'=>'110% auto',
            'pos'=>'50% -15px');
        $examiner[category] = 'Newspapers';
        $examiner[textshort] = 'Chicago Public Library&rsquo;s 10-year run of the <i>Chicago Examiner</i> extends from 1908 to 1918 and represents the longest run of the Hearst newspaper still available.';
        $examiner[textlong] = 'The Chicago Examiner was one of a dozen major newspapers published in Chicago at the turn of the last century. It was known for its sensational news stories.';
        $examiner[textrich] = '<p>The Chicago Public Library&rsquo;s 10-year run of the <i>Examiner,</i> while incomplete, extends from 1908 to 1918 and represents the longest run of the paper still available.</p><p>Follow the tragedy of the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Eastland!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">shipwreck of the Eastland,</a> a Great Lakes passenger steamer, in which 844 passengers and crew perished while the ship was tied to a dock in the Chicago River; the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Union!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">infamous 1910 Union Stock Yards fire,</a> that killed more firefighters than any building collapse until September 11, 2001; <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Dunne!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosortt">the mystery of the Dunne Water Crib fire, </a>told through first-person accounts, reportage, photos and illustrations; and big early <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/examiner/searchterm/Cubs%20Sox!1/field/subjea!page/mode/any!exact/conn/and!and/order/nosort">wins for the Cubs and the White Sox.</a></p>';
        $examiner[mainimage] = array('url'=>'6812',
            'text'=>'&ldquo;Make Chicago One of the Most Attractive Cities in the World,&rdquo; <em>Chicago Examiner</em>, vol. 10 no. 1, 1909',
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
        $examiner[homeloc] = 'HWLCSC';
        $examiner[type] = 'collection';

    $bar[title] = 'Esther A. Barlow Collection';
        $bar[coll] = 'bar';
        $bar[sortname] = 'Barlow, Esther A. Collection';
        $bar[cardpic] = array('pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/bar/43/default.jpg','pich'=>'20rem','size'=>'110%','pos'=>'auto','alt'=>'Esther Barlow as a young woman.');
        $bar[category] = 'Libraries &amp; Education';
        $bar[textshort] = 'Family photographs of CPL Librarian Esther Barlow and images of her work at the former Hild Regional Library and Lake View Branch Library from 1927 to 1976.';
        $bar[textlong] = 'Esther Barlow was a children&rsquo;s librarian in neighborhood branches of Chicago Public Library from 1927 until 1976.';
        $bar[textrich] = 'Included in this collection are photographs of the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Barlow%20family/field/subjed/mode/all/conn/and/order/nosort">Barlow family</a> and images of Esther Barlow at work at the Hild Regional Library and Lake View Branch Library. Photographs showcase Barlow with her colleagues and her <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Working%20with%20children/field/subjed/mode/all/conn/and/order/nosort">work with children. </a>';
        $bar[mainimage] = array(
            'url'=>'52',
            'text'=>'Chicago Public Library staff, Lake View Branch, circa 1950',
            'size'=>'',
            'align'=>'55% 50%',
            'alt'=>'Esther Barlow and 11 other library staff, all women, pose on the front steps of the Lakeview Branch.');
        $bar[thumbs] = array(array('url'=>'199',
                    'text'=>'Story hour in Welles Park, Hild Regional Library, circa 1930',
                    'size'=>'400px',
                    'align'=>'15% 20%',
                    'alt'=>'A large group of children, some wearing bunny masks, pose for a picture.'),
                array('url'=>'70',
                    'text'=>'Esther Barlow at the circulation desk, Lake View Branch, 1951',
                    'size'=>'500px',
                    'align'=>'53% 49%',
                    'alt'=>'Esther Barlow sits at a desk. Next to her desk is a tall bookshelf filled with children\'s books.'),
                array('url'=>'16',
                    'text'=>'Esther Barlow and Buddy Flaskerud, 1913',
                    'size'=>'400px',
                    'align'=>'33% 22%',
                    'alt'=>'A baby Esther Barlow sits with a little boy in a small wagon hitched to a goat.'));
        $bar[link] = 'bar';
        $bar[location] = $NNHC;
        $bar[homeloc] = 'NNHC';
        $bar[type] = 'collection';

    $woop[title] = 'Chicago Public Library Archives';
        $woop[coll] = 'woop';
        $woop[sortname] = 'Chicago Public Library Archives';
        $woop[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/woop/45/default.jpg',
            'pich'=>'200px;',
            'size'=>'100%',
            'pos'=>'50% -20px',
            'alt'=>'View of Michigan Avenue and Washington Street sides of the original Chicago Public Library Central Library.');
        $woop[category] = 'Libraries &amp; Education';
        $woop[textshort] = 'Photographs trace CPL&rsquo;s history from a small water tank that survived the Great Chicago Fire to the extensive network of neighborhood libraries that span the city today.';
        $woop[textlong] = 'On January 1, 1873 the Chicago Public Library opened its doors in a water tank that had survived the Great Chicago Fire of 1871. These photographs trace our history from that small structure to the development of neighborhood libraries across the city.';
        $woop[textrich] = '<p>Explore CPL through those years, from that <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a>, to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Delivery+stations/field/subjed/mode/all/conn/and/order/nosort">delivery stations</a> in the late 19th century, to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Bookmobiles/field/subjed/mode/all/conn/and/order/nosort">bookmobiles</a> in the mid-20th century to <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/bar/searchterm/Working%20with%20children!Hild%20Regional%20Library/field/subjed!all/mode/all!all/conn/and!and/order/nosort/ad/asc">Hild Regional Library</a> in the 1970s. </p>';
        $woop[mainimage] = array('url'=>'80',
                'text'=>'Book room in the old water tank, circa 1873',
                'size'=>'cover',
                'align'=>'50% 75%',
                'alt'=>'A woodcut print depicts people reading at tables and getting books from bookshelves in the circular Book Room.');
        $woop[thumbs] = array(array('url'=>'5',
                    'text'=>'English Book Donation bookplate given by Queen Victoria, 1871',
                    'size'=>'cover',
                    'align'=>'center',
                    'alt'=>'The bookplate from a book donated by Queen Victoria reads: Presented to the City of Chicago, toward the formation of a free library after the great fire of 1871, as a mark of English sympathy, by Her Majesty the Queen Victoria.'),
                array('url'=>'73',
                    'text'=>'Trailer service from Legler Regional Library, circa 1940',
                    'size'=>'150%',
                    'align'=>'100% 50%',
                    'alt'=>'A trailer that reads &ldquo;The Chicago Public Library Bookmobile Traveling Library Service&rdquo; is hitched to the back of a car.'),
                array('url'=>'41',
                    'text'=>'Blackstone Memorial Branch Library, 1904',
                    'size'=>'cover',
                    'align'=>'0% ',
                    'alt'=>'The front of Blackstone Branch seen from 49th Street.'),
                array('url'=>'74',
                    'text'=>'Traveling branch, circa 1960s',
                    'size'=>'cover',
                    'align'=>'center',
                    'alt'=>'Side view of a bus that reads &ldquo;The Chicago Public Library Traveling Branch&rdquo; with separate doors for Entrance and Exit.'));
        $woop[link] = 'woop';
        $woop[location] = $HWLCSC;
        $woop[homeloc] = 'HWLCSC';
        $woop[type] = 'collection';

    $cr[title] = 'Chicago Renaissance';
        $cr[coll] = 'cr';
        $cr[sortname] = 'Chicago Renaissance';
        $cr[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/cr/12/default.jpg',
            'pich'=>'20rem',
            'size'=>'100%',
            'pos'=>'auto',
            'alt'=>'Margaret Walker\'s face, smiling');
        $cr[category] = 'African Americans';
        $cr[textshort] = 'African American community leaders, performers, artists, writers and activists on Chicago&rsquo;s South Side, 1930-1950.';
        $cr[textlong] = 'The Black Chicago Renaissance was a creative movement when activism and scholarship flourished with the prodigious work of African American community leaders, performers, artists, writers and activists.';
        $cr[textrich] = '<p>During and after the Great Depression (1930s-1950s), African Americans in Chicago created a new community on the South Side that was distinctly their own.</p><p>In <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Literature/field/subjed/mode/all/conn/and/order/nosort">literature</a> the Black Chicago Renaissance was represented by such giants as Richard Wright, Gwendolyn Brooks, Margaret Walker, Arna Bontemps and Fenton Johnson. The explosion of <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Music/field/subjed/mode/all/conn/and/order/nosort">musical</a> creativity in <a href="https://cdm16818.contentdm.oclc.org/digital/collection/cr/search/searchterm/Bronzeville%20(Chicago%2C%20Ill.)!art/field/neighb!subjec/mode/all!all/conn/and!and/order/title/ad/asc">Bronzeville&rsquo;s</a> clubs and concert halls ranged from classical to jazz and from gospel to blues and pop. A new <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/cr/searchterm/Social%20Science/field/subjed/mode/all/conn/and/order/nosort">social science</a> of Black urban life was born with the writing of St. Clair Drake and Horace Cayton&rsquo;s <em>Black Metropolis</em>. The <a href="https://cdm16818.contentdm.oclc.org/digital/search/searchterm/art/field/subjec/mode/exact/conn/and/order/nosort/ad/asc">art</a> of William McBride, William Edouard Scott, Gordon Parks, Archibald Motley, Jr. and other local Chicago Black artists defined the era.</p>';
        $cr[findingaid] = array(
            array('link'=>'https://www.chipublib.org/fa-charles-walton-papers/','text'=>'Charles Walton Papers Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-george-cleveland-hall-branch-archives/','text'=>'Chicago Public Library, George Cleveland Hall Branch Archives Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-horace-r-cayton-papers/','text'=>'Horace Cayton Papers Finding Aid'),
            array('link'=>'https://www.chipublib.org/fa-william-mcbride-papers/','text'=>'William McBride, Jr. Papers Finding Aid'));
        $cr[CPLRes] = array(array('a'=>'content.php?id=AfAm','dt'=>'African American Digital Collections','dd'=>'Digital collections that include materials documenting Black history in the United States.'));
        $cr[mainimage] = array('url'=>'1',
            'text'=>'Horace Cayton with &ldquo;Blue Boy,&rdquo; 1944',
            'size'=>'110%',
            'align'=>'50% 0',
            'alt'=>'Horace Cayton shows three paintings to two women. One of the paintings is Charles Sebree\'s &ldquo;Blue Boy.&rdquo;');
        $cr[thumbs] = array(array('url'=>'11',
                'text'=>'Langston Hughes and Gwendolyn Brooks, 1949',
                'size'=>'100%',
                'align'=>'50% 10%',
                'alt'=>'Langston Hughes and Gwendolyn Brooks. Hughes is holding a copy of the book &ldquo;The Poetry of the Negro.&rdquo;"'),
            array('url'=>'10',
                'text'=>'Richard Durham, 1948',
                'size'=>'150%',
                'align'=>'center',
                'alt'=>'Richard Durham sits at a desk with a typewriter.  He is reading some loose pages and has a pencil in his right hand.'),
            array('url'=>'15',
                'text'=>'C.L. Cook and his Dreamland Orchestra, 1923',
                'size'=>'150%',
                'align'=>'center',
                'alt'=>'An advertisement for &ldquo;Cook&rdquo; and his Dreamland Orchestra, now playing at Harmon\'s Dreamland. Photos depict individual members of the band and the group.'),
            array('url'=>'12',
                'text'=>'Margaret Walker, 1942',
                'size'=>'cover',
                'align'=>'50% 25%',
                'alt'=>'Margaret Walker\'s face, smiling'));
        $cr[link] = 'cr';
        $cr[location] = $Harsh;
        $cr[homeloc] = 'Harsh';
        $cr[type] = 'collection';
        
    $dtd[title] = 'Chicago Sewers Collection';
        $dtd[coll] = 'dtd';
        $dtd[sortname] = 'Chicago Sewers Collection';
        $dtd[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/dtd/157/default.jpg',
            'pich'=>'200px',
            'size'=>'120%',
            'pos'=>'50% -20px',
            'alt'=>'Three men working on an unfinished sewer.');
        $dtd[category] = 'Neighborhoods';
        $dtd[textshort] = 'Photographs of sewer systems and passageways from 1925 to 1949 offer a rare look at the underbelly of Chicago.';
        $dtd[textlong] = 'The sewer systems and passageways that lie beneath our feet are critical to the health and well being of the city. Offering a rare look at the “underbelly” of Chicago, this collection of historical images features construction photographs of sewers and tunnels.';
        $dtd[textrich] = '<p>In 1855, Boston engineer Ellis S. Chesbrough was invited to Chicago to design the first comprehensive system of underground sewers in the United States. His work lifted the city to make room for the new sewers which became the most extensive in the world. In the more than 150 years since Chicago&rsquo;s Department of Water Management continues to service and maintain this underground system.  </p><p>Take a look at these wonders in images from the 1920s-1960s as you start  <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Above+ground/field/contri/mode/all/conn/and/order/nosort">above ground</a> and work your way below the surface along <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Avenue+J/field/subjec/mode/all/conn/and/order/nosort">Avenue J</a>, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/California+Avenue/field/subjec/mode/all/conn/and/order/nosort">California</a> and <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/dtd/searchterm/Elston+Avenue/field/subjec/mode/all/conn/and/order/nosort">Elston</a> Avenues among others. </p>';
        $dtd[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-sewers-collection/','dt'=>'Chicago Sewers Collection Finding Aid','dd'=>'The complete list of photographs, glass plate slides and documents, rich with geographic and technical details.'));
        $dtd[mainimage] = array('url'=>'167',
            'text'=>'103rd and Rockwell Streets, inspecting tile, 1936',
            'size'=>'',
            'align'=>'center',
            'alt'=>'Two men peer into a section of large concrete pipe.  Two more men stand inside the section of pipe.');
        $dtd[thumbs] = array(array('url'=>'150',
                'text'=>'Magnolia Avenue sewer system, 1933',
                'size'=>'400%',
                'align'=>'61% 37%',
                'alt'=>'A large sewer pipe splits into two directions.  Men are standing in both sections of the sewer with waste coming up above their knees.'),
            array('url'=>'142',
                'text'=>'Broadway Street, sewer in Rokeby Street, 1927',
                'size'=>'250%',
                'align'=>'30% 50%',
                'alt'=>'A construction worker is perched on top of a wooden fence,  operating a piece of machinery.  Another man stands on the ground and holds the machinery; a third man holds onto a metal pipe.'),
            array('url'=>'144',
                'text'=>'Bryn Mawr Avenue, bricklayers, 1930',
                'size'=>'250%',
                'align'=>'0 50%',
                'alt'=>'A group of construction workers stand on wooden planks inside a large unfinished sewer pipe.  Bricks are scattered on the ground.'),
            array('url'=>'155',
                'text'=>'103rd and Rockwell Streets, pipe yard, 1936',
                'size'=>'250%',
                'align'=>'40% 35%',
                'alt'=>'Men walk among several sections of very large pipes covered with tarpaulins.  One man stands on top of a pipe and sprays it with water.'));
        $dtd[link] = 'dtd';
        $dtd[location] = $HWLCSC;
        $dtd[homeloc] = 'HWLCSC';
        $dtd[type] = 'collection';
        


    $wha[title] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[coll] = 'wha';
        $wha[sortname] = 'Civil War: Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[creditname] = 'Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections';
        $wha[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/wha/341/default.jpg',
            'pich'=>'280px',
            'size'=>'110%',
            'pos'=>'50% 40%');
        $wha[category] = 'Civil War';
        $wha[textshort] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield.';
        $wha[textlong] = 'Camp equipment, weaponry and uniforms used on the homefront and the battlefield, with a focus on the Illinois experience.';
        $wha[textrich] = '<p>Illinois supported the Union effort by sending hundreds of thousands of troops into battle, but the Civil War was also fought on the homefront. </p><p>Examine artifacts and photographs from both arenas. Highlights include <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/camp+life/field/subjeb/mode/all/conn/and/order/title/ad/asc">camp life</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/small+arms/field/all/mode/exact/conn/and/order/nosort/ad/asc">swords</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/wha/searchterm/clothing/field/all/mode/exact/conn/and/order/nosort/ad/asc">uniforms</a>.</p> ';
        $wha[rights] = '<p>The Wayne Whalen Digital Archive of the Grand Army of the Republic and Civil War Collections is made possible by generous gifts to <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a> by the partners of Skadden, Arps, Slate, Meagher &amp; Flom LLP in honor of Wayne Whalen&rsquo;s interest in Abraham Lincoln and the Civil War.</p>';
        $wha[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-american-civil-war-documents-manuscripts-letters-and-diaries-and-grand-army-of-the-republic-collection/','dt'=>'American Civil War Documents, Manuscripts, Letters and Diaries and Grand Army of the Republic Collections Finding Aid','dd'=>'A large portion of this collection focuses on the experience of soldiers and leaders from Illinois told through letters and diaries.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/military/','dt'=>'Military Archival Collections','dd'=>'A list of all archival collections related to the Civil War, including records of the Daughters of Union Veterans of the Civil War, as well as personal collections of service members from other conflicts, such as World War II.'));
        $wha[mainimage] = array('url'=>'634',
            'text'=>'&ldquo;Sherman and His Generals,&rdquo; <em>Photographic Views of Sherman&rsquo;s Campaign</em> by George N. Barnard, 1865',
            'size'=>'auto 575px',
            'align'=>'center',
            'alt'=>'Black and white photograph of eight Civil War generals in two rows. Four seated on chairs in front, and four standing in second row ');
        $wha[thumbs] = array(array('url'=>'116',
                'text'=>'Sword, model 1850 staff and field officer, circa 1860',
                'size'=>'auto 120px',
                'align'=>'center',
                'alt'=>'Close up of sword hilt, with blade extending out of the image'),
            array('url'=>'721',
                'text'=>'Uniform, artillery jacket, 1862',
                'size'=>'auto 120px',
                'align'=>'50% 15%',
                'alt'=>'Dark blue uniform jacket with red piped detail on collar, cuffs, and seams. Gold buttons down the front'),
            array('url'=>'35',
                'text'=>'Ulysses S. Grant, 1865',
                'size'=>'120px auto',
                'align'=>'50% 20%',
                'alt'=>'Sepia tone photograph of U.S. Grant in uniform. He is standing, right hand in pocket, left hand tucked into his vest at his breast.'),
            array('url'=>'38',
                'text'=>'Union ticket, South Division, 1864',
                'size'=>'110px auto',
                'align'=>'55% 15%',
                'alt'=>'List of names on union ticket, decorative drawing of an eagle in a circle at the top of the page'));
        $wha[link] = 'wha';
        $wha[location] = $HWLCSC;
        $wha[homeloc] = 'HWLCSC';
        $wha[type] = 'collection';

    $hdg[title] = 'Henry D. Green Photograph Collection';
        $hdg[coll] = 'hdg';
        $hdg[sortname] = 'Green, Henry D. Photograph Collection';
        $hdg[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/hdg/123/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'50% 50%',
            'alt'=>'Five men from the fire department pose with a fire engine. Three are standing, and two are riding in the vehicle. One of the men has a white shirt and tie. Part of the fire house and two neighboring houses are pictured in the background');
        $hdg[category] = 'Neighborhoods';
        $hdg[textshort] = 'Photographs by Henry Green of businesses, community groups, neighborhood celebrations and school events on Chicago&rsquo;s North Side, 1943-1951.';
        $hdg[textlong] = 'Chicago Public Library&rsquo;s Northside Neighborhood History Collection houses the photographs of Henry Green, a commercial photographer on Chicago&rsquo;s North Side.';
        $hdg[textrich] = 'Subjects in the collection include local <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Business%20establishments/field/subjed/mode/all/conn/and/order/nosort">business establishments</a>, community groups, <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Religious%20institutions/field/subjed/mode/all/conn/and/order/nosort">religious institutions</a>, celebrations in neighborhood parks and events at local schools. Many photographs reflect life on the North Side during World War II, including images of <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/hdg/searchterm/Military%20personnel/field/subjed/mode/all/conn/and/order/nosort">military personnel</a>.';
        $hdg[findingaid] = array('text'=>'Henry Delorval Green Photograph Collection Finding Aid','link'=>'https://www.chipublib.org/archival_post/henry-d-green-photograph-collection/');
        $hdg[CPLRes] = array(array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Neighborhood Archival Collections','dd'=>'Additional collections focusing on Chicago&rsquo;s neighborhoods.'));
        $hdg[mainimage] = array('url'=>'6',
                                       'text'=>'American Legion/Albany Park Post 24, undated',
                                       'size'=>'110%',
                                       'align'=>'center',
                                        'alt'=>'Young men in baseball uniforms posed for a team picture in three rows. Three men also pictured seated with the team are not in uniform. Some of the team members in the front row are holding baseball bats. There are trees and a fieldhouse pictures in the back.');
        $hdg[thumbs] = array(array('url'=>'174',
                                    'text'=>'Girl Scouts Troup 119 Tin Can Salvage, 1945',
                                    'size'=>'130%',
                                    'align'=>'40% 25%',
                                    'alt'=>'Six girls in girl scout uniforms, and three women and one man surround a pile of flattened tin cans'),
                                    array('url'=>'669',
                                    'text'=>'Monadnock Coffee Shop, 1949',
                                    'size'=>'',
                                    'align'=>'47% 57%',
                                    'alt'=>'Diner scene. Customers sit at the counter drnking coffee. A waitress takes orders. Cooks can be seen in the open kitchen at the back, flanked by display cases with baked goods. Décor includes plants and a clock.'),
                                    array('url'=>'345',
                                    'text'=>'Portrait of Henry Delorval Green, 1949',
                                    'size'=>'120%',
                                    'align'=>'45% 27%',
                                    'alt'=>'A man in a suit and wearing glasses is pictured from his shoulders up.'),
                                    array('url'=>'123',
                                    'text'=>'Chicago Fire Department, undated',
                                    'size'=>'130%',
                                    'align'=>'center',
                                    'alt'=>'Five men from the fire department pose with a fire engine. Three are standing, and two are riding in the vehicle. One of the men has a white shirt and tie. Part of the fire house and two neighboring houses are pictured in the background'));
        $hdg[link] = 'hdg';
        $hdg[location] = $NNHC;
        $hdg[homeloc] = 'NNHC';
        $hdg[type] = 'collection';
        
    $rwk[title] = 'Robert W. Krueger Photograph Collection';
        $rwk[coll] = 'rwk';
        $rwk[sortname] = 'Krueger, Robert W. Photograph Collection';
        $rwk[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/rwk/1365/default.jpg',
            'pich'=>'210px',
            'size'=>'100%',
            'pos'=>'50% 50%',
            'alt'=>'The front of a two-story duplex viewed from the street.  Two people sit at the entrance to one of the homes.');
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
            'align'=>'50% 30%',
            'alt'=>'The front of a two-story duplex viewed from the street.  Two people sit at the entrance to one of the homes.');
        $rwk[thumbs] = array(array('url'=>'412',
                'text'=>'German-American Festival, 1988',
                'size'=>'300%',
                'align'=>'50% 35%',
                'alt'=>'Alderman Gene Schulter poses in the middle of a row of young women and and men.  The women are dressed in dirndls.  They are standing in front of a covered stage decorated with flags and pennants. A large sign at the back of the stage reads &rdquo;Welcome Ald. Gene Schluter.&ldquo;'),
            array('url'=>'349',
                'text'=>'Picasso statue unveiled, 1967',
                'size'=>'120%',
                'align'=>'center',
                'alt'=>'A bird&lsquo;s-eye view of thousands of people watching the unveiling of a large Picasso sculpture in the middle of Civic Center Plaza.  The tarp has been almost entirely removed but remains draped around the bottom of the sculpture.'),
            array('url'=>'828',
                'text'=>'Henry Krueger, Marie and Lydia Wahl and a friend, 1923',
                'size'=>'200%',
                'align'=>'50% 25%',
                'alt'=>'A young man and young woman pose on the hood of an old-fashioned car.  Two other young women pose on the front fender of the car.'),
            array('url'=>'1365',
                'text'=>'1720-22 W. Leland Avenue, 1988',
                'size'=>'140%',
                'align'=>'center',
                'alt'=>'The front of a two-story duplex viewed from the street.  Two people sit at the entrance to one of the homes.'));
        $rwk[link] = 'rwk';
        $rwk[location] = $NNHC;
        $rwk[homeloc] = 'NNHC';
        $rwk[type] = 'collection';

    $mpu[title] = 'Millennium Park U.S. Equities Realty Collection';
        $mpu[coll] = 'mpu';
        $mpu[sortname] = 'Millennium Park U.S. Equities Realty Collection';
        $mpu[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/mpu/2239/default.jpg',
            'pich'=>'240px',
            'size'=>'130%',
            'pos'=>'35% 50%',
            'alt'=>'Completed assembly of Cloud Gate, also known as The Bean, outside in Millennium Park. SBC Plaza is still under construction and there is construction equipment scattered around. The tall buildings of Michigan Avenue are visible behind the sculpture.');
        $mpu[category] = 'Parks';
        $mpu[textshort] = 'See a rail yard transform into a dynamic urban park.';
        $mpu[textlong] = 'Watch the Millennium Park site transform from an industrial wasteland to a new urban park of world renown from 1999-2005, under the project management of U.S. Equities Realty and acclaimed architects, engineers and artists.';
        $mpu[textrich] = '<p>Follow the construction of <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/bp%20bridge/field/book/mode/exact/conn/and/order/title/ad/asc">BP Pedestrian Bridge</a>, the first bridge designed by Frank Gehry; Anish Kapoor&rsquo;s monumental public sculpture, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/cloud%20gate/field/book/mode/exact/conn/and/order/title/ad/asc">Cloud Gate</a>, aka The Bean; the Gehry-designed <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/jay%20pritzker%20pavilion/field/book/mode/exact/conn/and/order/title/ad/asc">Jay Pritzker Pavilion</a>, a soaring bandshell that hosts the U.S.&rsquo;s last free outdoor classical music series; Jaume Plensa&rsquo;s <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/crown%20fountain/field/book/mode/exact/conn/and/order/title/ad/asc">Crown Fountain</a>, a cascading interactive video sculpture; <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/millennium%20monument/field/book/mode/exact/conn/and/order/title/ad/asc">Millennium Monument</a>; <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/lurie%20garden/field/book/mode/exact/conn/and/order/title/ad/asc">Lurie Garden</a>; and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/mccormick%20tribune%20plaza%20and%20ice%20rink/field/book/mode/exact/conn/and/order/title/ad/asc">McCormick Tribune Plaza and Ice Rink</a>.  Watch the park take shape with <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/general%20construction/field/book/mode/exact/conn/and/order/title/ad/asc">general construction photos</a>, or take in sweeping views with <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/full%20park/field/book/mode/exact/conn/and/order/title/ad/asc">full park images</a>.';
        $mpu[highlights] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/highlight','dt'=>'Collection Highlights','dd'=>'Get a taste of how this transformation took place in a selected group of images.'));
        $mpu[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-millennium-park-inc/','text'=>'Millennium Park, Inc. Archives Finding Aid'),
                            array('link'=>'https://www.chipublib.org/fa-millennium-park-u-s-equities-realty-collection/','text'=>'Millennium Park / U.S. Equities Realty Collection Finding Aid'));
        $mpu[CPLRes] = array(array('a'=>'https://www.chipublib.org/?post_type=post&s=Millennium+Park','dt'=>'Millennium Park Blog Posts','dd'=>'Written by CPL librarians and staff.'));
        $mpu[rights] = 'These images were made possible by generous gifts from U.S. Equities Realty and the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.';
        $mpu[rights2] = 'Courtesy of U.S. Equities Realty and the men and women who built Millennium Park';
        $mpu[mainimage] = array('url'=>'1297',
            'text'=>'Millennium Monument at Wrigley Square, circa 2003',
            'size'=>'110%',
            'align'=>'center',
            'alt'=>'Stone marker with the words Millennium Park is in the foreground and the stone peristyle, Millennium Monument, is in the background. It is a winter scene with snow.');
        $mpu[thumbs] = array(array('url'=>'1543',
                'text'=>'Cloud Gate, omphalos, 2004',
                'size'=>'140%',
                'align'=>'40% 50%',
                'alt'=>'Cloud Gate, also known as The Bean, is under construction outside on the park plaza, with steel plates being attached. A single white skyscraper is visible in the background.'),
            array('url'=>'4390',
                'text'=>'Crown Fountain, gargoyle spray, 2004',
                'size'=>'140%',
                'align'=>'40% 60%',
                'alt'=>'Five children, dressed in shorts or summer clothes, huddle together under a spray of water from the lips of a woman in a video projected on Crown Fountain.'),
            array('url'=>'4781',
                'text'=>'Jay Pritzker Pavilion, headdress, 2004',
                'size'=>'160%',
                'align'=>'70% 0',
                'alt'=>' A view of the underside of the undulating ribbons on the headdress of Jay Prizker Pavillion, under construction in the park. A worker’s yellow hard hat is visible between the folds of steel.'),
            array('url'=>'4662',
                'text'=>'Jay Pritzker Pavilion, structural steel for the headdress, 2003',
                'size'=>'',
                'align'=>'center',
                'alt'=>'Looking north toward the Jay Prizker Pavilion where the structural steel for the headdress is being installed. Construction equipment and a truck are in the foreground and tall buildings are in the background.'));
        $mpu[link] = 'mpu';
        $mpu[location] = $HWLCSC;
        $mpu[homeloc] = 'HWLCSC';
        $mpu[type] = 'collection';

    $cfc[title] = 'Northside Clubs and Organizations';
        $cfc[coll] = 'cfc';
        $cfc[sortname] = 'Northside Clubs and Organizations';
        $cfc[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/cfc/130/default.jpg',
            'pich'=>'240px',
            'size'=>'175%',
            'pos'=>'20% 55%',
            'alt'=>'A juggler performs for onlooking children; a balloon floats in the foreground.');
        $cfc[mainimage] = array('url'=>'24',
            'text'=>'Christian Fellowship Church, picnic at Schiller Park woods, 1930',
            'size'=>'125%',
            'align'=>'80% 40%',
            'alt'=>'Members of the Christian Fellowship Church stand in a circle holding hands in Schiller Park.');
        $cfc[thumbs] = array(array('url'=>'396',
                'text'=>'Members of the Girls&rsquo; Patriotic Service League at Portage Park, 1919',
                'size'=>'450px',
                'align'=>'17% 27%',
                'alt'=>'Five members of the Girls\' Patriotic Service League in old-fashioned bathing costumes stand in a shallow pool of water.'),
            array('url'=>'61',
                'text'=>'Mayor Harold Washington at the Ravenswood Manor Improvement Association, 70th anniversary celebration, 1984',
                'size'=>'175%',
                'align'=>'50% 50%',
                'alt'=>'Mayor Washington smiles and shakes hands with an older woman.'),
            array('url'=>'144',
                'text'=>'Annual picnic, Ravenswood Manor Improvement Association, circa 1984',
                'size'=>'375px',
                'align'=>'60% 50%',
                'alt'=>'A clown and a group of children attend a picnic.  Balloons float above their heads.'),
            array('url'=>'107',
                'text'=>'Cleanup Parade, Ravenswood Manor, 1965',
                'size'=>'730px',
                'align'=>'80% 40%',
                'alt'=>'Parade participants include a fire truck, Boy Scouts on foot carrying flags, and a convertible.  The door and fire truck reads &ldquo;Hollywood Kiddieland, Lincoln-McCormick-Devon, Chicago Fire Dept.&rdquo;'));
        $cfc[category] = 'Neighborhoods';
        $cfc[textshort] = 'Glimpse into the activities of the thriving civic service scene on the North Side as well as the rich ethnic and religious heritage of the community.';
        $cfc[textlong] = 'Glimpse into the activities of the thriving civic service scene on the North Side as well as the rich ethnic and religious heritage of the community.';
        $cfc[subdigicoll] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort','dt'=>'Christian Fellowship Church Collection','dd'=>'Activities of the church founded by Conrad and Martha Wendtland in their home in 1926.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Christian+Fellowship+Church/field/collec/mode/all/conn/and/order/nosort','dt'=>'Lake View Council on Religious Action','dd'=>'Representatives from local churches and synagogues and members of the Kiwanis Club of Lake View at work'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/collection/cfc/search/searchterm/Portage%20Park%20Community%20Collection/field/collec/mode/exact/conn/and','dt'=>'Portage Park Community Collection','dd'=>'Patriotism on display during World War I.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/cfc/searchterm/Ravenswood+Manor+Improvement+Association/field/collec/mode/all/conn/and/order/nosort','dt'=>'Ravenswood Manor Improvement Association','dd'=>'Community activism in the North Side riverfront neighborhood.'));
        $cfc[findingaid] = array(array('link'=>'https://www.chipublib.org/fa-northwest-federation-of-improvement-clubs-records/','text'=>'Northwest Federation of Improvement Clubs Records Finding Aid'), 
                                array('link'=>'https://www.chipublib.org/archival_post/ravenswood-gardens-homeowners-association-records/','text'=>'Ravenswood Gardens Homeowners Association Records Finding Aid'));
                                //removing this link - Woodlawn is a south side neighborhood
                                //array('link'=>'https://www.chipublib.org/fa-united-woodlawn-inc-records/','text'=>'United Woodlawn, Inc. Records'));
        $cfc[link] = 'cfc';
        $cfc[location] = $NNHC;
        $cfc[homeloc] = 'NNHC';
        $cfc[subcollections] = array($CFCC, $LVCRA, $PortPark, $RMIA);
        $cfc[type] = 'collection';

    $ahs[title] = 'Northside High Schools';
        $ahs[coll] = 'ahs';
        $ahs[sortname] = 'Northside High Schools';
        $ahs[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/ahs/197/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'0% 45%',
            'alt'=>'Lake View High School baseball team, seated for posed photograph, 1893'); 
        $ahs[mainimage] = array('url'=>'634',
            'text'=>'Captain Louis D. Walz and Lake View High School drum major and majorettes, 1942',
            'size'=>'110%',
            'align'=>'center',
            'alt'=>'Louis D. Walz poses with eight drum majorettes and one drum major.  They are all wearing marching band uniforms.');
        $ahs[thumbs] = array(array('url'=>'350',
                'text'=>'Lake View High School, 1985',
                'size'=>'150%',
                'align'=>'center',
                'alt'=>'Cars drive past Lake View High School.'),
            array('url'=>'149',
                'text'=>'<em>Gold in Them Thar Hills</em>, Lake View High School, 1940',
                'size'=>'150%',
                'align'=>'50% 25%',
                'alt'=>'Lake View High School students, three girls and two boys, pose in costume for a production of &ldquo;Gold in Them Thar Hills.&rdquo;'),
            array('url'=>'7',
                'text'=>'Amundsen vs. Taft, Winnemac Park, 1949',
                'size'=>'150%',
                'align'=>'center',
                'alt'=>'Football game between Amundsen High School and Taft High School at Winnemac Park.  The bleachers are half full.'),
            array('url'=>'245',
                'text'=>'Lake View High School football team en route to the Orange Bowl, Midway Airport, 1953',
                'size'=>'150%',
                'align'=>'center',
                'alt'=>'The Lake View High School football team stands on the tarmac in front of an airplane.  They are on their way to watch the Orange Bowl.'));
        $ahs[category] = array('Neighborhoods','Libraries &amp; Education');
        $ahs[textshort] = 'Photographs of high school football games, theatrical productions, dances and extracurricular activities from the 1870s to the 1950s.';
        $ahs[textlong] = 'Photographs of high school football games, theatrical productions, dances and extracurricular activities from the 1870s to the 1950s.';
        $ahs[subdigicoll] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Amundsen+High+School+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Amundsen High School Collection','dd'=>'The Winnemac Park school opened in its doors in 1930.  Cheer on their football team as they do battle with Taft High School.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Helen+G.+Kinsella+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Helen G. Kinsella Collection','dd'=>'Dramatic productions and other activities led by the award-winning Lake View High School drama and public speaking teacher.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Lake+View+High+School+Collection/field/collec/mode/all/conn/and/order/nosort','dt'=>'Lake View High School Collection','dd'=>'Academics and extracurriculars at the first high school in Lake View Township.'),
                                array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/ahs/searchterm/Walz/field/collec/mode/all/conn/and/order/nosort','dt'=>'Louis D. Walz Collection','dd'=>'The life of the long-time director of the Lake View High School band and World War I veteran.'));
        $ahs[link] = 'ahs';
        $ahs[location] = $NNHC;
        $ahs[homeloc] = 'NNHC';
        $ahs[type] = 'collection';
        $ahs[subcollections] = array($Amund, $Kins, $LVHS, $Walz);

    $ChicagoParks[title] = 'Chicago Park District Records: Photographs';
        $ChicagoParks[coll] = 'ChicagoParks';
        $ChicagoParks[sortname] = 'Chicago Park District Records: Photographs';
        $ChicagoParks[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/ChicagoParks/1254/default.jpg',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'87% 47%' );
        $ChicagoParks[mainimage] = array('url'=>'6155',
            'text'=>'Mayor Richard J. Daley and Dr. Paul White, Ogden Park, opening of bicycle program, 1956',
            'size'=>'125%',
            'align'=>'66% 50%',
            'alt'=>'Two men in suits ride a tandem bicycle together on an outdoor track; another man stands with onlookers takes a photograph.');
        $ChicagoParks[thumbs] = array(array('url'=>'6221',
                'text'=>'Palmer Park, archery, circa 1935',
                'size'=>'350%',
                'align'=>'35% 25%',
                'alt'=>'Two women in a park hold bows and arrows, ready to shoot.'),
            array('url'=>'8690',
                'text'=>'Stanford Park, toy lending, 1938',
                'size'=>'175%',
                'align'=>'55% 18%',
                'alt'=>'An African American boy and two younger girls ride a large hobby horse.  Behind them is a cabinet full of toys and a toy tea set.'),
            array('url'=>'112',
                'text'=>'Addams Park, undated',
                'size'=>'190%',
                'align'=>'55% 18%',
                'alt'=>'Three African American boys dressed in suits and vests stand at a microphone and play recorders.  African American men and women watch from off stage.'),
            array('url'=>'8686',
                'text'=>'Stanford Park, junior garden club, 1937',
                'size'=>'250%',
                'align'=>'68% 18%',
                'alt'=>'Young children tend plants in a narrow vegetable garden at the side of a building.'));
        $ChicagoParks[category] = 'Parks';
        $ChicagoParks[textshort] = 'Photographs from the Chicago Park District document how the city’s parks have grown, changed and been enjoyed for more than a century.';
        $ChicagoParks[textlong] = 'Parks have always been a part of Chicago’s city planning. Explore their growth, development and use from six large parks begun around 1870 to more than 500 today.';
        $ChicagoParks[textrich] = 'These 10,000 images capture the parks’ construction, architecture, plant life, and public enjoyment. See <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/Concerts--Illinois--Chicago/field/subjea/mode/exact/conn/and">musical concerts performed in the parks</a>, watch <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/construction%20progress%20photographs/field/subjec/mode/exact/conn/and/order/title/ad/asc">parks being built from the ground up,</a> get a <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/aerial%20views/field/subjec/mode/exact/conn/and/order/title/ad/asc">birds’ eye view of parks around the city,</a> and watch people of all ages <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/sports/field/subjec/mode/exact/conn/and/order/title/ad/asc">playing sports,</a> doing <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/Arts%20and%20Crafts/field/subjec/mode/exact/conn/and/order/title/ad/asc">arts and crafts,</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/ChicagoParks/search/searchterm/people/field/subjec/mode/exact/conn/and/order/title/ad/asc/page/2">generally enjoying their local parks.</a> </p></p>93 of Chicago’s over 500 parks are represented here and cover the city’s wide geography.  Visit the library to see more than 50,000 additional photos of Chicago’s parks!';
        $ChicagoParks[findingaid] = array(
            array('link'=>'https://www.chipublib.org/fa-chicago-park-district-records-photographs/','text'=>'Chicago Park District Records: Photographs'), 
            array('link'=>'https://www.chipublib.org/fa-chicago-park-district-records/','text'=>'Chicago Park District Records: Drawings'));
        $ChicagoParks[CPLRes] = array(array('a'=>'https://www.chipublib.org/tag/chicago-park-district/','dt'=>'Chicago Park District Blog Posts','dd'=>'Written by CPL librarians and staff'));
        $ChicagoParks[link] = 'ChicagoParks';
        $ChicagoParks[location] = $HWLCSC;
        $ChicagoParks[homeloc] = 'HWLCSC';
        $ChicagoParks[type] = 'collection';

    $rhwc[title] = 'Remembering Harold Washington';
        $rhwc[coll] = 'rhwc';
        $rhwc[sortname] = 'Remembering Harold Washington';
        $rhwc[shortname] = 'Harold Washington';
        $rhwc[sidebarname] = 'Harold Washington';
        $rhwc[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/rhwc/30/default.jpg',
            'pich'=>'250px',
            'size'=>'200%',
            'pos'=>'75% 40%',
            'alt'=>'Mayor Washington smiles and points to the crowd while riding on the back of a convertible.');
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
            'align'=>'80% 0',
            'alt'=>'Mayor Washington smiles and waves from podium.');
        $rhwc[thumbs] = array(array('url'=>'72',
                'text'=>'Mayor Washington reads to Dominik Przekota and class, 1986',
                'size'=>'300%',
                'align'=>'0 20%',
                'alt'=>'Mayor Washington sits with book in front of a group of children in a library. One boy stands at front, video cameraman stands at back.'),
            array('url'=>'64',
                'text'=>'Mayor Washington at the KOCO groundbreaking ceremony, 1987',
                'size'=>'',
                'align'=>'52% 15%',
                'alt'=>'Mayor Washington and six others pose holding shovels full of dirt.'),
            array('url'=>'13',
                'text'=>'Mayor Washington with members of the Philippine Chamber of Commerce, 1987',
                'size'=>'150%',
                'align'=>'40% 40%',
                'alt'=>'Mayor Washington poses with three women, one of whom holds a plaque.'),
            array('url'=>'30',
                'text'=>'Mayor Washington at the Bud Billiken Parade, 1987',
                'size'=>'400%',
                'align'=>'71% 30%',
                'alt'=>'Mayor Washington smiles and points to the crowd while riding on the back of a convertible.'));
        $rhwc[link] = 'rhwc';
        $rhwc[location] = $HWLCSC;
        $rhwc[homeloc] = 'HWLCSC';
        $rhwc[type] = 'collection';
        $rhwc[sidebarflag] = 'x';
        
    $rvw[title] = 'Ravenswood-Lake View Community Collection';
        $rvw[coll] = 'rvw';
        $rvw[sortname] = 'Ravenswood-Lake View Community Collection';
        $rvw[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/rvw/1086/default.jpg',
            'pich'=>'250px',
            'size'=>'250%',
            'pos'=>'24% 45%',
            'alt'=>'A man seated at a soda counter, looking into his drink.  He is wearing a bowler hat high on his head.');
        $rvw[category] = 'Neighborhoods';
        $rvw[textshort] = 'Street scenes and community life on the North Side, 1860s-1990s.';
        $rvw[textlong] = 'Lake View Township and its evolution from an independent municipality into current Northside communities, 1860s-1990s.';
        $rvw[textrich] = '<p>More than <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/00000000-1889/field/date/mode/exact/conn/and/order/title/ad/asc">100 early photographs</a> represent Lake View Township and its residents, schools, homes, businesses and everyday rituals.</p><p>Over the next 100 years North Siders and their neighborhoods experienced tremendous changes as evidenced by their <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/clothing%20%26%20dress/field/subjea/mode/exact/conn/and/order/title/ad/asc">fashion</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/railroad!automobiles/field/subjea!subjea/mode/all!all/conn/or!and/order/nosort/ad/asc">modes of transportation</a> and the establishment of a number of <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/schools%20--%20illinois%20--%20chicago/field/subjea/mode/exact/conn/and/order/title/ad/asc">schools</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/churches/field/subjea/mode/all/conn/and/order/title/ad/asc">churches</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/clubs/field/subjea/mode/all/conn/and/order/title/ad/asc">social clubs</a>. Notable local events include <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/Our%20Lady%20of%20Lourdes%20Church%20(Chicago%2C%20Ill.)!construction/field/subjec!subjea/mode/exact!all/conn/and!and/order/nosort/ad/asc">moving the Our Lady of Lourdes church building</a> across Ashland Avenue and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/rvw/search/searchterm/ground%20breaking%20ceremonies/field/subjea/mode/exact/conn/and/order/nosort/ad/asc">breaking ground for the Conrad Sulzer Regional Library</a>.</p>';
        $rvw[CPLRes] = array(
                            // array('a'=>'https://www.chipublib.org/archival_post/ravenswood-lake-view-community-collection/','dt'=>'Ravenswood-Lake View Community Collection Finding Aid','dd'=>'Descriptive inventory for the complete physical collection.'),
                            array('a'=>'https://www.chipublib.org/chicago-newspapers-on-microfilm/','dt'=>'Chicago Newspapers','dd'=>'Online and microfilm.'),
                            array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Neighborhood Archival Collections','dd'=>'Additional collections focusing on Chicago&rsquo;s neighborhoods.'));
        $rvw[ExRes] = array(array('a'=>'http://www.ravenswoodhistorical.com/','dt'=>'Ravenswood-Lake View Historical Association','dd'=>'Programs, publications and tours focusing on Chicago northside neighborhood history.'),
                            array('a'=>'http://www.edgewaterhistory.org/ehs/','dt'=>'Edgewater Historical Society','dd'=>'Exhibits, events and tours of the Edgewater neighborhood.'));
        $rvw[mainimage] = array('url'=>'421',
            'text'=>'Lincoln &amp; Montrose Avenues, 1910',
            'size'=>'110%',
            'align'=>'50% 50%',
            'alt'=>'A man and woman sit on a bench facing the intersection of Lincoln and Montrose Avenues.  Retail businesses occupy the two- and three-story buildings on those streets.');
        $rvw[thumbs] = array(array('url'=>'1800',
                'text'=>'Arthur G. Bennett, undated',
                'size'=>'110%',
                'align'=>'60% 10%',
                'alt'=>'A young man dressed in form-fitting clothing and cap rides a bicycle.  The bicycle has a very large front tire and a small back tire.'),
            array('url'=>'3142',
                'text'=>'Charles Perkins, undated',
                'size'=>'200%',
                'align'=>'50% 10%',
                'alt'=>'A man steers an old-fashioned automobile using a long handle attached to the front axle.  A small engine is mounted on the rear axle.  In the background three boys stand under a tree looking at the car.'),
            array('url'=>'933',
                'text'=>'Riverview Park, 1950s',
                'size'=>'170%',
                'align'=>'50% 50%',
                'alt'=>'An elevated view of an attraction at Riverview Park.  The facade of the building is the head of a genie with a thin moustache and a long thin beard.  He is wearing a turban and holding a lamp.'),
            array('url'=>'1272',
                'text'=>'Klausen family salutes the American flag, 1918',
                'size'=>'601px',
                'align'=>'33% 20%',
                'alt'=>'A young man holds two small American flags while five women to his left salute.  They are standing in front of a house whose front porch is decorated with American flags.'));
        $rvw[link] = 'rvw';
        $rvw[location] = $NNHC;
        $rvw[homeloc] = 'NNHC';
        $rvw[type] = 'collection';
        
    $p16818coll6[title] = 'Philip David Sang Collection';
        $p16818coll6[coll] = 'p16818coll6';
        $p16818coll6[sortname] = 'Sang, Philip David Collection';
        $p16818coll6[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/p16818coll6/691/default.jpg',
            'pich'=>'300px',
            'size'=>'190%',
            'pos'=>'20% 25%',
            'alt'=>'Woodcut print featuring a portrait of a Black man surrounded with images of African Americans at work, at graduation, and walking around town. Image is from Burdens Unbound, a 1930 Methodist worship booklet.');
        $p16818coll6[mainimage] = array('url'=>'4',
            'text'=>'Runaway slave poster, 1854',
            'size'=>'cover',
            'align'=>'auto 0px',
            'alt'=>'1854 poster advertising as much as a $100 reward for information on a runaway enslaved man named Osborne.');
        $p16818coll6[thumbs] = array(array('url'=>'165',
                'text'=>'Sheriff&rsquo;s bill of sale for two enslaved women, 1843',
                'size'=>'cover',
                'align'=>'auto 20%',
                'alt'=>'1843 South Carolina sheriff\'s bill of sale for two enslaved women named Jane and Sarah.'),
            array('url'=>'7',
                'text'=>'Runaway slave advertisement, 1855',
                'size'=>'cover',
                'align'=>'auto 15%',
                'alt'=>'1855 print advertisement offering up to $100 as a reward for the apprehension of a runaway enslaved man named Ben.'),
            array('url'=>'691',
                'text'=>'Methodist worship booklet for Lincoln Day Sunday, 1930',
                'size'=>'300%',
                'align'=>'27% 25%',
                'alt'=>'Cover page of Burdens Unbound, a 1930 Methodist worship booklet for Lincoln Day Sunday; features a woodcut print with a portrait of a Black man surrounded with images of African Americans at work, at graduation, and walking around town.'),
            array('url'=>'231',
                'text'=>'&ldquo;Marshal&rsquo;s Sale!,&rdquo; poster for public auction of enslaved persons, 1854',
                'size'=>'cover',
                'align'=>'center',
                'alt'=>'1854 poster advertising a marshal\'s sale, a public auction of enslaved persons.'));
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
        $p16818coll6[homeloc] = 'Harsh';
        $p16818coll6[type] = 'collection';
    


//categories
    // categories deserve the same treatment as subcollections (in the sense that their collection arrays should be passed as wholes into category variables), but there's danger of redundancy with theater and HW
    $AfAm[title] = 'African Americans';
        $AfAm[shortname] = 'African Americans';
        $AfAm[sidebarname] = 'African Americans';
        $AfAm[cardpic] = array('pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/cr/10/default.jpg','pich'=>'250px','size'=>'110%','pos'=>'50% 50%','alt'=>'Richard Durham sits at a desk with a typewriter. He is reading some loose pages and has a pencil in his right hand.');
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
            'align'=>'50% 0%', 
            'alt'=>'A book club consisting of over two dozen women sit at a table in Hall Branch.');
        $AfAm[thumbs] = array(array('url'=>'14',
                'coll' => 'cr',
                'text'=>'All-black WAC band, 1944',
                'size'=>'431px',
                'align'=>'0% 20%',
                'alt'=>'An African American Women\'s Army Corps band at a performance.'),
            array('url'=>'8g',
                'coll' => 'cr',
                'text'=>'Marian Campfield, women&rsquo;s editor of the <em>Chicago Defender</em>, 1948',
                'size'=>'140%',
                'align'=>'center',
                'alt'=>'Marian Campfield stands outside the Chicago Defender offices next to a press car.'),
            array('url'=>'0',
                'coll' => 'cr',
                'text'=>'Catalog, &rdquo;Exhibition of the Art of the American Negro,&ldquo; 1940',
                'size'=>'112%',
                'align'=>'75% 45%',
                'alt'=>'Cover of &rdquo;Exhibition of the Art of the American Negro&ldquo; catalog featuring an image of a painting by Charles White.  '),
            array('url'=>'6',
                'coll' => 'rhwc',
                'text'=>'Mayor Washington at the 27th Annual International Folk Fair, 1986',
                'size'=>'200%',
                'align'=>'40% 60%',
                'alt'=>'Mayor Washington stands with two men in front of three paintings at the DuSable Museum of African American History.'));
        $AfAm[link] = 'AfAm';
        $AfAm[type] = 'category';
        $AfAm[sidebarflag] = 'x';

    $CivilWar[title] = 'Civil War';
        $CivilWar[shortname] = 'Civil War';
        $CivilWar[sidebarname] = 'Civil War';
        $CivilWar[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/wha/721/default.jpg',
            'pich'=>'280px',
            'size'=>'auto 120%',
            'pos'=>'center',
            'alt'=>'An 1854 artillery jacket, Civil War uniform, showcased on a mannequin.');
        $CivilWar[mainimage] = array('url'=>'231',
            'coll' => 'p16818coll6',
            'text'=>'&ldquo;Marshal&rsquo;s Sale!,&rdquo; poster for public auction of enslaved persons, 1854',
            'size'=>'cover',
            'align'=>'center',
            'alt'=>'1854 poster advertising a marshal\'s sale, a public auction of enslaved persons.');
        $CivilWar[thumbs] = array(array('url'=>'173',
                'coll' => 'wha',
                'text'=>'Pauline Cushman, actress and Union spy, undated',
                'size'=>'150%',
                'align'=>'center 30%',
                'alt'=>'Portrait of Pauline Cushman, handwritten text under the portrait includes &rdquo;Miss Major Pauline Cushman. Union spy&ldquo;'),
            array('url'=>'314',
                'coll' => 'wha',
                'text'=>'Sword, model 1850 staff and field officer, 1861-1865',
                'size'=>'auto 150px',
                'align'=>'40% 30%',
                'alt'=>'Blade and handle of 1850 model sword.'),
            array('url'=>'35',
                'coll' => 'wha',
                'text'=>'Ulysses S. Grant, 1865',
                'size'=>'120px auto',
                'align'=>'50% 20%',
                'alt'=>'Portrait of Ulysses S. Grant, typed caption under the image is &rdquo;Lieut. Gen. U. S. Grant.&ldquo;'),
            array('url'=>'422',
                'coll' => 'p16818coll6',
                'text'=>'Letter from John Brown, Jr., 1859',
                'size'=>'200px',
                'align'=>'55% 5%',
                'alt'=>'Handwritten 1859 letter from John Brown, Jr. to his uncle, aunt, and cousins.'));
        $CivilWar[textshort] = 'Personal narratives, artifacts and manuscripts tell the story of slaves and soldiers during the war that tore the nation apart.';
        $CivilWar[textlong] = 'A view into life during the Civil War via personal letters, documents and photographs detailing battles, homefront activities and the fight to end slavery in the United States.';
        $CivilWar[textrich] = 'A significant portion of the library&rsquo;s Civil War era material comes from the Illinois Department of the Grand Army of the Republic, including <a href="https://cdm16818.contentdm.oclc.org/digital/collection/wha/search/searchterm/edged%20weapons">weaponry</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/wha/search/searchterm/lincoln/field/subjec/mode/all/conn/and/order/nosort/ad/asc">Lincolniana</a>.  <p>Complementing the GAR material are items in the Harsh Research Collection&rsquo;s Philip David Sang Collection pertaining to <a href="https://cdm16818.contentdm.oclc.org/digital/collection/p16818coll6/search/searchterm/186104-1865/field/date/mode/exact/conn/and/order/title/ad/asc">the African American experience during the Civil War era.</a></p>';
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
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/woop/2/default.jpg',
            'pich'=>'250px',
            'size'=>'120%',
            'pos'=>'27% 0%',
            'alt'=>'Four children stand in front of a bookmobile trailer, reading. The bookmobile is hitched to a car. The back of the trailer reads &rdquo;The Chicago Public Library Bookmobile.&ldquo;'
            );
        $LibEd[mainimage] = array('url'=>'3595',
            'coll' => 'rvw',
            'text'=>'Andersonville School, undated',
            'size'=>'130%',
            'align'=>'center',
            'alt'=>'Andersonville School');
        $LibEd[thumbs] = array(array('url'=>'426',
                'coll' => 'hdg',
                'text'=>'Jamieson School, 1944',
                'size'=>'130%',
                'align'=>'50% 50%',
                'alt'=>'Members of the Jamieson School student council pose in front of a school banner and an American flag.  Six are seated and behind them more students stand in a row.'),
            array('url'=>'4097',  
                'coll' => 'rvw',
                'text'=>'Our Lady of Lourdes school library, circa 1942',
                'size'=>'300%',
                'align'=>'40% 40%',
                'alt'=>'Several students sit at tables studying in the library of Our Lady of Lourdes School.  A nun holding open a book stands next to a male student.'),
            array('url'=>'721',
                'coll' => 'ahs',
                'text'=>'Drum majorettes, Lave View High School, 1949',
                'size'=>'cover',
                'align'=>'center',
                'alt'=>'Five drum majorettes from Lake View High School in full uniform. Caption reads: Lois Dunston, Gerry Gruen, Lorette Loewe, Diane Baxter, Sandy Colby, May 1949'),
            array('url'=>'2',
                'coll' => 'woop',
                'text'=>'Chicago Public Library bookmobile service, circa 1940',
                'size'=>'150%',
                'align'=>'27% 0%',
                'alt'=>'Four children stand in front of a bookmobile trailer, reading.  The bookmobile is hitched to a car.  The back of the trailer reads &rdquo;The Chicago Public Library Bookmobile.&ldquo;'));
        $LibEd[textshort] = 'Learn about Chicago through its libraries and schools in these photographs dating from the 1860s through the 1990s.';
        $LibEd[textlong] = 'Learn about Chicago through its libraries and schools in these photographs dating from the 1860s through the 1990s.';
        $LibEd[textrich] = 'Explore Chicago&rsquo;s development, from the <a href="http://cdm16818.contentdm.oclc.org/digital/search/collection/woop/searchterm/Water+tank/field/subjed/mode/all/conn/and/order/nosort">circular water tank</a> that housed the first Chicago Public Library to <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/exterior%20view%20school/field/all/mode/all/conn/and/order/title/ad/asc">school building exteriors</a> from the second half of the 19th century through the first half of 20th century. Feel the energy of its <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/high%20school%20band/field/all/mode/all/conn/and/order/title/ad/asc">high school bands</a> and see its <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/rvw!woop!bar!ahs/searchterm/sports/field/all/mode/all/conn/and/order/title/ad/asc">sports teams and athletes</a> in action.';
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
        //$Neigh[pic] = 'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/cfc/104/default.jpg'; //alternate
        $Neigh[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/cfc/138/default.jpg',
            'pich'=>'230px',
            'size'=>'110%',
            'pos'=>'50% 50%',
            'alt'=>'Two young boys sit in a tree.'
        );
        $Neigh[textshort] = 'Experience daily life in Chicago neighborhoods through photographs of street scenes, businesses, residences and portraits, 1860s to the present.';
        $Neigh[textlong] = 'Connect with the residents of Chicago and their stories through these fascinating photographs dating from the 1860s through the 1990s.';
        $Neigh[catcoll] = 'that center around Chicago&rsquo;s neighborhoods';
        $Neigh[textrich] = '<p>This collection documents how Chicagoans lived their daily lives and how their neighborhoods changed and evolved over time.  Go back to <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/schools/field/subjec/mode/all/conn/and/order/nosort/ad/asc">school</a>, revisit favorite <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/restaurants%20--%20illinois%20--%20chicago/field/subjec/mode/all/conn/and/order/title/ad/asc">restaurants</a>, salute <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/military/field/subjec/mode/all/conn/and/order/nosort">members of the military</a> or just <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/dtd!hdg!rwk!cfc!ahs!rvw/searchterm/transportation/field/subjec/mode/all/conn/and/order/nosort">ride around the city</a>.  Every neighborhood tells a story!</p>';
        $Neigh[CPLRes] = array(array('a'=>'https://www.chipublib.org/blogs/category/chicago-history/','dt'=>'Chicago History Blog Posts','dd'=>'Written by CPL librarians and staff.'), 
                                array('a'=>'https://www.chipublib.org/archival_subject/neighborhoods/','dt'=>'Finding Aids','dd'=>'Descriptive inventories of the archival collections of community associations, religious organizations, high schools, notable Chicagoans and more'));
        $Neigh[mainimage] = array('url'=>'107',
            'coll' => 'cfc',
            'text'=>'Cleanup Parade, Ravenswood Manor, 1965',
            'size'=>'',
            'align'=>'90% 50%',
            'alt'=>'Parade participants include a fire truck, Boy Scouts on foot carrying flags, and a convertible.  The door and fire truck reads &ldquo;Hollywood Kiddieland, Lincoln-McCormick-Devon, Chicago Fire Dept.&rdquo;');
        $Neigh[thumbs] = array(array('url'=>'1248',
                'coll' => 'rwk',
                'text'=>'Picasso statue unveiled, 1967',
                'size'=>'',
                'align'=>'25% 60%',
                'alt'=>'Elevated view of the Picasso statue at the Civic Center Plaza being unveiled. The plaza is completely filled with onlookers.'),
            array('url'=>'782',
                'coll' => 'rwk',
                'text'=>'Tin Man sculpture, Oz Park, 2001',
                'size'=>'',
                'align'=>'57% 17%',
                'alt'=>'Tin Man sculpture in Oz Park.  It stands on top of a pedestal with a plaque that reads &ldquo;The Tin Man from The Wizard of Oz by Frank Baum Welcomes You to Oz Park, A Heartfelt Salute to the Community from the Lincoln Park Chamber of Commerce October 1995.&rdquo;'),
            array('url'=>'157',
                'coll' => 'dtd',
                'text'=>'31st Street and Albany Avenue, repairing old brick outfall, 1936',
                'size'=>'',
                'align'=>'62% 37%',
                'alt'=>'Three men repair a brick sewer outfall.'));
        $Neigh[link] = 'Neigh';
        $Neigh[type] = 'category';
        $Neigh[sidebarflag] = 'x';

    $Parks[title] = 'Chicago Parks';
        $Parks[shortname] = 'Parks';
        $Parks[sidebarname] = 'Parks';
        $Parks[cardpic] = array(
            'pic'=>'https://cdm16818.contentdm.oclc.org/digital/api/singleitem/image/ChicagoParks/1626/default.jpg',
            'pich'=>'250px',
            'size'=>'110%',
            'pos'=>'center',
            'alt'=>'Five boys furiously set off on a running race from the starting line on an outdoor track in a park while several adult males look on.'
        );
        $Parks[textshort] = 'Visit Chicago&rsquo;s parks that emerged from a single, hard-fought-for narrow strip of land along the lakefront in 1836 to more than 500 parks today.';
        $Parks[textlong] = 'Parks have always been a part of Chicago’s city planning. Explore their growth and development from six large parks begun around 1870 to over 500 today.';
        $Parks[textrich] = '<p>While Chicago&rsquo;s <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/Grant%20Park!Lincoln%20Park!zoo%20hamlin!Millennium%20Park/field/descri!descri!all!all/mode/exact!exact!none!all/conn/or!or!or!and/order/nosort/ad/asc">lakefront parks</a> are popular with residents and tourists alike, public green space abounds in many parts of the city. Take in <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/lagoons/field/all/mode/all/conn/and/order/nosort/ad/asc/page/10">lagoons</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/prairie/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">prairies</a>, wetlands and woodlands across the urban landscape. Peek into <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/fieldhouses%20!field%20houses/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">field houses</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/refectories%20refectory/field/all/mode/any/conn/and/order/nosort/ad/asc">refectories</a>. Gaze at <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/bridges!park/field/all!all/mode/all!all/conn/and!and/order/nosort/ad/asc">bridges</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/pergolas%20pergola/field/all/mode/any/conn/and/order/nosort/ad/asc/page/3">pergolas</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/fountains/field/all/mode/any/conn/and/order/nosort/ad/asc">fountains</a>, from the utilitarian to the ornate. Observe how Chicagoans and visitors engage with the parks in all seasons by <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/bicycle*%20park/field/all/mode/all/conn/and/order/nosort/ad/asc/page/6">biking</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/ice%20skating/field/all/mode/all/conn/and/order/nosort/ad/asc">ice skating</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/sledding!sleds/field/all!all/mode/all!all/conn/or!and/order/nosort/ad/asc">sledding</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/ChicagoParks!mpu/searchterm/archery/field/all/mode/all/conn/and/order/nosort/ad/asc/page/2">competing in archery</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/mpu/search/searchterm/frankel%20plates/field/all/mode/all/conn/and/order/nosort/ad/asc">taking selfies</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/search/collection/mpu!cr!dtd!rvw!wha!woop!rwk!ahs!cfc!ChicagoParks/searchterm/celebrations%20park/field/all/mode/all/conn/or/order/nosort/ad/asc">celebrating events</a> and more.</p>';
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
            'align'=>'center',
            'alt'=>'A boy spins two large hoola hoops, one around each wrist, in Horner Park. Several children, one a girl on a bicycle, look on.');
        $Parks[thumbs] = array(array('url'=>'2239',
                'coll' => 'mpu',
                'text'=>'Cloud Gate, assembly complete, 2004',
                'size'=>'cover',
                'align'=>'center',
                'alt'=>'Completed assembly of Cloud Gate, aka The Bean, outside in Millennium Park. SBC Plaza is still under construction and there is construction equipment scattered around. Two construction workers are working to the left of the sculpture and the tall buildings of Michigan Avenue are visible behind the sculpture.'),
            array('url'=>'112',
                'coll' => 'ChicagoParks',
                'text'=>'Addams Park, undated',
                'size'=>'200%',
                'align'=>'52% 17%',
                'alt'=>'Three boys in suits play recorders while standing  in a semi-circle around a microphone in a park building. Several adults standing together look on from behind them.'),
            array('url'=>'4752',
                'coll' => 'ChicagoParks',
                'text'=>'Red Saunders performs in Lake Meadow Park, 1970',
                'size'=>'500px',
                'align'=>'55% 25%',
                'alt'=>'Musician, Red Saunders, stands on a stage and plays electric guitar in front of a microphone with a band sitting behind him on an outdoor stage in Lake Meadow Park. An audience, both sitting and standing, take in the performance.'),
            array('url'=>'6209',
                'coll' => 'ChicagoParks',
                'text'=>'Palmer Park, 1965',
                'size'=>'140%',
                'align'=>'50% 50%',
                'alt'=>'A group of approximately fifty girls in athletic uniform perform standing calisthenics with their arms over their heads in a field house gymnasium in Palmer Park. Three artistic murals are overhead on the wall behind them.'));
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
            'pos'=>'45% 60%',
            'alt'=>'A black and white drawing depicts a woman looking through a monocle. Her hair is styled into a high bun.'
        );
        $CPB01[category] = '';
        $CPB01[textshort] = 'Playbills and programs for drama, opera, vaudeville, dance and music at early Chicago theaters, 1848-1922.';
        $CPB01[textlong] = 'Theater collections at Chicago Public Library document a vibrant local theater community.';
        $CPB01[textrich] = '<p>Become a playgoer at Chicago&rsquo;s early theaters. Examine more than 2,000 playbills and programs dating from 1848 to 1922. Of special interest are playbills from shows starring <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/Booth%2C%20Edwin%2C%201833-1893/field/contri/mode/all/conn/and/order/title/ad/asc">Edwin Booth</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/Jefferson%2C%20Joseph%2C%201829-1905/field/contri/mode/all/conn/and/order/title/ad/asc">Joseph Jefferson</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/Bernhardt%2C%20Sarah%2C%201844-1923/field/contri/mode/all/conn/and/order/title/ad/asc">Sarah Bernhardt</a> at the well-known <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/mcvicker\'s/field/theata/mode/all/conn/and/order/title/ad/asc">McVicker&rsquo;s Theatre</a> as well as playbills from vaudeville houses and neighborhood theaters.</p><p>Alongside traditional plays and musical works, numerous genres are represented in the collection, including <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/extravaganzas%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">extravaganzas</a>, <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/juggling%20--%20illinois%20--%20chicago/field/genre/mode/all/conn/and/order/title/ad/asc">juggling</a> and <a href="https://cdm16818.contentdm.oclc.org/digital/collection/CPB01/search/searchterm/magic%20--%20illinois%20--%20chicago/field/genre/mode/exact/conn/and/order/title/ad/asc">magic shows</a>, among others.</p>';
        $CPB01[rights] = 'The Historic Programs digital collection is made possible by a generous grant from the Gaylord and Dorothy Donnelley Foundation through the <a href="http://cplfoundation.org/">Chicago Public Library Foundation</a>.';
        // $CPB01[highlights] = array(array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs/field/all/mode/exact/conn/and/','dt'=>'Chicago Theater Collection-Historic Playbills','dd'=>'Programs, playbills and newspaper clippings from more than 5,000 productions at Chicago&rsquo;s historic theaters dating back to the 1840s.'),
                                    // array('a'=>'https://cdm16818.contentdm.oclc.org/digital/search/collection/CPB01/searchterm/Chicago%20Theater%20Collection-Historic%20Programs-E.B.%20Gould%3B/field/all/mode/all/conn/and/order/title/ad/asc','dt'=>'E.B. Gould Programs Collection','dd'=>'The annotated programs of a local Chicago businessman and enthusiastic playgoer.'));
        $CPB01[CPLRes] = array(array('a'=>'https://www.chipublib.org/fa-chicago-theater-collection-historic-programs/','dt'=>'Chicago Theater Collection-Historic Programs Finding Aid','dd'=>'The complete and ever-increasing inventory of theater programs past and present, some of which are presented here.'),
                                array('a'=>'https://www.chipublib.org/archival_subject/theater/','dt'=>'Chicago Theater Collection','dd'=>'A list of collections at Chicago Public Library representing theaters, designers, actors and other members of the theater community.'));
        $CPB01[mainimage] = array('url'=>'6053',
            'coll' => 'CPB01',
            'text'=>'Sarah Bernhardt in <em>Camille</em>, McVicker&rsquo;s Theatre, 1881',
            'size'=>'134%',
            'align'=>'52% 15%',
            'alt'=>'Theater playbill cover for Camille starring Sarah Bernhardt at McVicker\'s Theatre');
        $CPB01[thumbs] = array(array('url'=>'8601',
                'coll' => 'CPB01',
                'text'=>'<em>Evening with Columbine</em>, Chicago Little Theatre, 1913',
                'size'=>'200%',
                'align'=>'50% 85%',
                'alt'=>'Theater program cover reads &ldquo;Chicago Little Theatre, affiliated with the Incorporated Stage Society, London, England, second season, 1913-14&rdquo;. Black and white drawing depicts a woman in a short skirt, supported by two men, kneeling in front of a large circle.'),
            array('url'=>'6272',
                'coll' => 'CPB01',
                'text'=>'<em>Mr. Blue Beard</em>, Iroquois Theatre, 1903',
                'size'=>'110%',
                'align'=>'50% 30%',
                'alt'=>'Theater program cover reads, &ldquo;Iroquois Theatre, Randolph St. between State and Dearborn Streets, Chicago,&rdquo; and depicts a Greek revival door, topped by an Iroquois face in headdress and flanked by Native American shields.'),
            array('url'=>'6748',
                'coll' => 'CPB01',
                'text'=>'Joseph Jefferson in <em>Rivals</em>, McVicker&rsquo;s Theatre, 1896',
                'size'=>'140%',
                'align'=>'50% 40%',
                'alt'=>'Theater program cover reads, &rdquo;38th year, McVicker\'s Theatre, Bill of the Play, 1857-1896,&rdquo; and depicts a bas relief, inside the theater, a scene from the World\'s Columbian Exposition and a white haired man framed by a floral motif.'),
            array('url'=>'9755',
                'coll' => 'CPB01',
                'text'=>'<em>The Mikado</em>, Chicago Opera House, 1886',
                'size'=>'200%',
                'align'=>'68% 47%',
                'alt'=>'Theater program cover reads, &ldquo;Chicago Opera House, The Mikado&rdquo; and depicts a drawing of a stage with an actor downstage, and a large circle upstage showcasing a drawing of a person in Japanese-style dress. A woman holding a fan looks on from a balcony which is supported by a feminine stature. The stage is flanked by curtains and plants.'));
        $CPB01[link] = 'CPB01';
        $CPB01[coll] = 'CPB01';
        $CPB01[location] = $HWLCSC;
        $CPB01[homeloc] = 'HWLCSC';
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
