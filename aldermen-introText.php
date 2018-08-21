<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include 'variables-aldermen.php';
    $ID = $_GET['id'];
	$PAGE = ${$ID};
	$PAGE_TYPE = 'content';
?>
	<meta charset="UTF-8">
	<title>Chicago's Elected Officials</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLOpenBook_web_16x16-1.png">
	<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://chicago.bibliocms.com/wp-content/uploads/sites/3/2016/04/CPLreverse_web_200x200-150x150.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/a768f4e0c8.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="cpldc.js"></script>
	<script src="aldermen-db.js"></script>
	<link rel="stylesheet" href="cpldc.css" >
	<link rel="stylesheet" href="aldermen.css" >

</head>
<body>
<?php 
// page is built like this: 
// ----------------------------------------------------------------------------------------
// 									header.html
// ----------------------------------------------------------------------------------------
// sidebar.php		| 		center-content.php 			| 	blogs.php -> produces blogs.html
// 					|	(or all.php or about.php)		|----------------------------------
// 					|									|	events.php -> events.html
// ----------------------------------------------------------------------------------------
// 									footer.html
// ----------------------------------------------------------------------------------------

	include 'header-4dbs.php';
?>
<main class="sidebar-target-collapsible PAGE_TYPE <?php echo $PAGE_TYPE; ?>">
	<div class="container main-container-fixed" id="content-top">
    <h1 >Chicago's Elected Officials<span id="search-count-target">

</span>
</h1>
        <div class="row center-content-search">
            <div class="filter-column">
                <div class="filters" id="all-filters">
                    <div class="filter-text clearfix">
                            <p class="filter-list-title">Name</p>
                        <input type="text" id="textInput" class="filter-text-input" />
                    </div>
                    <div class="filter-list">
                        <p class="filter-list-title">Date</p>
                        <div class="silder-box">
                            <div id="slider-range"></div>
                            <div id="slider-container"></div>
                        </div> 
                        <p class="label-container">
                            <label type="text" id="date-slider" />
                        </p>
                    </div>
                    <p class="filter-list-title">Position</p>
                    <ul class="filter-list" id="pos-list">
                        <li class="filter">
                            <input type="checkbox" value="Alderman" class="filter-pos" id="filter-pos-ald" />
                            <label for="filter-pos-ald">Aldermen</label>
                        </li>
                        <li class="filter">
                            <input type="checkbox" value="City Clerk" class="filter-pos" id="filter-pos-clerk" />
                            <label for="filter-pos-clerk">City Clerks</label>
                        </li>
                        <li class="filter">
                            <input type="checkbox" value="City Treasurer" class="filter-pos" id="filter-pos-treas" />
                            <label for="filter-pos-treas">City Treaurers</label>
                        </li>
                        <li class="filter">
                            <input type="checkbox" value="Mayor" class="filter-pos" id="filter-pos-mayor" />
                            <label for="filter-pos-mayor">Mayors</label>
                        </li>
                    </ul>
                    <p class="filter-list-title">Ward</p>
                    <ul class="filter-list" id="ward-list"></ul>

                    <button class="go-button" onclick="dateButton()">Apply Filters</button>
                </div>
            </div>
            <div class="col aldermen" id="aldermen">

<div class="alderman">
        <h2 class="content-header-2">Chicago Aldermen and Other Elected Officials, 1837-2018</h2>
        <h3 class="content-header-3">About This Guide</h3>
        This guide features biographical information about Chicago&rsquo;s elected officials: aldermen, mayors, city clerks and city treasurers. In addition to this overview, there are three parts:
        <ul>
            <li><a href="https://www.chipublib.org/?p=148656&amp;preview=true">Chicago Aldermen and Other Elected Officials, 1837-2017</a>: An alphabetical list with dates of service and references to available biographic information for each elected official.</li>
            <li><a href="https://www.chipublib.org/?p=148902&amp;preview=true">Aldermen by Ward 1837-2017</a>: A chronological list of aldermen by ward, including information on finding historical ward maps. Mayors, city clerks and treasurers are listed at the end.</li>
            <li><a href="https://www.chipublib.org/chicago-mayors/">Chicago Mayors</a>: Biographies and inaugural speeches by Chicago&rsquo;s mayors.</li>
        </ul>
        <h3 class="content-header-3">History and Scope</h3>
        This guide has its origins in the 1937 Chicago Municipal Reference Library publication <a href="https://chipublib.bibliocommons.com/item/show/55105126_centennial_list_of_mayors,_city_clerks,_city_attorneys,_city_treasurers,_and_aldermen">Centennial List of Mayors, City Clerks, City Attorneys, City Treasurers and Aldermen</a>. A later card file added citations to approximately 40 biographical sources. In 2016, we merged several electronic lists with information from the card file. We also added citations to additional sources.The alphabetical list contains biographical references. It is meant to serve as a starting point for further research or a quick reference to online sources. Thus, not every possible source has been consulted. Those sources consulted may not be listed if they do not contain a biography. Not every page the person appears on is listed in this guide.When found, we have included dates of death. This is often useful in finding obituaries and other biographical information. It is also useful in distinguishing among individuals and dates of service. For example, there were three William Kents and two John R. Andersons who served as aldermen around 1900. There are numerous cases where relatives of the same name are easily confused.We believe the list is accurate as to names and years of service of the officials. However, with so many hands dealing with over 1,600 names, it is inevitable that mistakes will creep in. Additionally, some of the sources listed here are available in multiple seemingly similar editions. For example, <a href="https://chipublib.bibliocommons.com/item/show/40382126_notable_men_of_illinois_amp_their_state">Notable Men of Illinois &amp; Their State</a> has different biographies and pagination, depending on the copy you consult. Likewise, the classic <a href="https://chipublib.bibliocommons.com/search?custom_query=(title%3A(History+of+Chicago)+AND+contributor%3A(Andreas)+)&amp;suppress=true&amp;custom_edit=false">History of Chicago</a> by A.T. Andreas has several different editions that have identical tables of contents, but the actual content varies.
        <h3 class="content-header-3">For Further Research</h3>
        A number of additional sources are worth consulting.
        <ul>
            <li><em>City Council Journal</em>: In addition to information on City Council actions, the journal may contain condolence resolutions or other biographical information. <a href="http://chsmedia.org/media/fa/fa/LIB/CouncilProcGuide.htm">Chicago History Museum has an excellent guide to the electronic and paper journals</a>. The annual <em>Index to the Journal</em> has a page listing aldermen. It usually has a note on service dates and, in years past, listed home addresses. Most indexes are not included in the online journals but are in the paper journals.</li>
            <li>CPL&rsquo;s catalog, website and&nbsp;<a style="font-size: 1rem;" href="http://digital.chipublib.org/cdm/">Digital Collections</a>&nbsp;can lead to additional sources.</li>
            <li><a href="https://www.chipublib.org/chicago-newspapers-on-microfilm/">Chicago newspapers</a> are extremely useful.&nbsp;</li>
            <li><a href="https://catalog.hathitrust.org/Search/Home?lookfor=%22%20Chicago%20%28Ill.%29%20Directories.%22&amp;type=subject&amp;inst=">Chicago city directories</a> (many additional years available in print) are good for occupational and other information.</li>
            <li><a href="https://chipublib.bibliocommons.com/item/show/346803126_whos_who_in_chicago_and_illinois">Who&rsquo;s Who in Chicago</a>&nbsp;has entries for some aldermen.</li>
        </ul>
        Information on more recent aldermen is often available by searching the internet. For any online sources, it can be helpful to add the word "alderman" to limit your search.Many of these resources are available in CPL&rsquo;s Municipal Reference Collection. Two resources unique to the Municipal Reference Collection are:
        <ul>
            <li>Detailed Chicago election results from 1886 to date</li>
            <li>Newspaper clipping file, which contains numerous neighborhood papers in addition to the daily papers. It is an excellent source of information about aldermen from the second half of the 20<sup>th</sup> century.</li>
        </ul>
        Although we consulted and listed additional sources such as city directories for some aldermen, we did not do so systematically. Therefore, these sources are well worth checking.Aldermen <a href="https://chipublib.bibliocommons.com/search?q=%22Burke%2C+Edward+M.+++%22&amp;search_category=author&amp;t=author">Edward M. Burke</a>, <a href="https://chipublib.bibliocommons.com/search?q=%22Simpson%2C+Dick+W.%22&amp;search_category=author&amp;t=author">Dick W. Simpson</a> and <a href="https://chipublib.bibliocommons.com/search?&amp;t=author&amp;search_category=author&amp;q=Arthur%20G.%20Lindell">Arthur G. Liddell</a> have written histories of the City Council that provide good background reading.
        <h3 class="content-header-3">Who Are Chicago&rsquo;s Elected Officials?</h3>
        Chicago became a city in 1837. Included in this guide are all aldermen (members of Chicago&rsquo;s City Council), mayors, city clerks and city treasurers from 1837 to 2017. These are the current elective offices. In the past, offices such as city marshal and superintendent of streets were also elective.The stories of the more than 1,600 individuals who have served as elected officials of the City of Chicago are many and diverse. This group includes famous athletes (Metcalf and Anson), war heroes (Douglas and Salomon among others), founders of world-famous universities (Throop founded Caltech, John Evans and other aldermen founded Northwestern University, others figured in the founding of the University of Chicago and the University of Illinois), famous crooks (It&rsquo;s currently fashionable to claim Thompson as the most corrupt mayor in American history.), artists (Brand and Keenan) and theatrical personalities (Rice and Epstean). Farmers were elected to the City Council, both in its early years and after Chicago annexed vast swaths of rural territory in 1889.Many of the officials, especially during the first hundred years of the city, were fabulously wealthy. Before or after their service, they took advantage of Chicago&rsquo;s booming real estate, railroad and industrial markets to make fortunes.Others were much more humble. John Murphy, for example, rose to the head of Armour &amp; Company&rsquo;s cattle killing department, was elected alderman and then went into the undertaking business, only to die of typhoid fever at 48. Doerner, at 40, was unable to raise $400 to pay back the brewers and keep his saloon in business. Fearing starvation, he ended his life by jumping off a pier.The City Council has always included immigrants (often over half of the 19<sup>th</sup> century aldermen were born in Germany or Ireland) and lawyers—many of whom went on to become famous judges (examples are Caton, Simon and Bilandic). It seems that there has generally been a publisher and an undertaker or two on the council. Saloon keepers, brewers and doctors were a constant presence on the council through 1950 or so.Most of the City Council&rsquo;s history has included a member of the Cullerton family. Other families account for many years of combined service. James Bowler deserves special mention. After succeeding his uncle on the council and after serving over 50 years in various public offices, he ran for and won a congressional seat at 88.Women and non-whites were underrepresented on the council until the late 20<sup>th</sup> century, but the few who served achieved a great deal. African-Americans De Priest, Dawson, Louis Anderson and their successors opened many new doors, both socially and economically, and through anti-discrimination legislation.The first women were not elected to City Council until 1971, but as soon as they gained the vote in 1914, their perceived concerns were addressed. Once they were on the council, they helped strengthen earlier legislation banning discrimination based on race and national origin. The council banned discrimination based on sex, sexual orientation, religion and economic status.It is also interesting to reflect that Chicago&rsquo;s entire municipal history can be summed up in two or three lifespans. Among the mayors, John Wentworth came to Chicago in 1836 and no doubt met the young Carter Harrision (born 1860). Harrison in turn would have met a young Richard M. Daley at Richard J. Daley&rsquo;s 1951 inauguration. Among the aldermen, Gurdon Hubbard arrived in 1818 at 16. Prior to his death in 1886, he would have met any of a number of aldermen whose lives overlapped with Leon Despres (1908-2009.)
        <h3 class="content-header-3">Terms of Office</h3>
        The term of office for mayor was one year from 1837 to 1863, when the term was lengthened to two years. In 1907, the four-year term went into effect. The four-year term for city clerk and city treasurer went into effect in 1923.The term of office of members of City Council was one year from 1837 to 1850. In 1851, they were elected for a two-year term, one alderman being elected from each ward annually. The four-year term for aldermen went into effect in 1935.
        <h3 class="content-header-3">Time of Elections</h3>
        With the exception of the election of Chicago&rsquo;s first mayor on May 2, 1837, the election of municipal officers was held each year on the first Tuesday of March from 1838 to 1860.The city elections from 1861 to 1867 were held on the third Monday in April. On March 10, 1869, the municipal election was changed from April to November, with the officers elected for a term of two years. The terms of city officials holding office in 1869 were extended from April to December.The 1876 election was held on July 12, after the city reorganized under the Illinois Cities and Villages Act of 1872. Since then, municipal elections have been held on the first Tuesday in April, with some exceptions for Easter and Passover.
        <h3 class="content-header-3">Dates of Service and Qualifications for Office</h3>
        The dates of service listed here are not precise. Generally, an official&rsquo;s term starts when his or her oath of office is filed with the city clerk following an election or confirmation of an appointment by the City Council. The <em>Journal of the City Council</em> commonly notes the filing of the oath.The term of office ends either when an official&rsquo;s successor is elected and files an oath of office, or when the office becomes vacant due to death, resignation or legal inability to hold office.Currently the most common reason for someone to become legally unable to be an alderman is the acceptance of another elective or appointed public office. Conviction of certain crimes also vacates the office. Being legally guilty is not always required. See <em><a href="http://hdl.handle.net/2027/hvd.32044078688405?urlappend=%3Bseq=84">Hildreth v. Heath</a></em> and <em><a href="http://www.illinoiscourts.gov/opinions/appellatecourt/2003/1stdistrict/june/html/1020236.htm">Bloom v. Municipal Employees Annuity and Benefit Fund of Chicago</a></em> for two examples where aldermen, although not legally guilty of a crime involving public office, were still determined to have committed the offense.Usually, but not always, public officials resign if they become ineligible. But if the official does not resign, subtle legal questions remain as to if the public office or crime qualifies as disabling and the exact effective date. Sometimes there&rsquo;s not an official answer.There are other reasons a City Council seat becomes vacant. For example, the City Council declared Fred Hubbard&rsquo;s seat vacant after he was indicted and disappeared. In 1900, the council decided it had too many members and refused to seat two election winners. Alderman Dennis Block moved to the suburbs in 1977.For the first century, the City Council closely guarded its prerogative to decide on the qualifications of its members and would occasionally seat one member, then decide that somebody else had won a contested election. In 1927, for example, <a href="https://archive.org/stream/proceedingsofcit104chic#page/1119/mode/1up">Haffa replaced Alderman Albert three months after the election</a>. Now the courts usually decide such questions.For these reasons, we try to give dates of appointments, resignations, acceptance of other offices, contested elections, deaths, indictments, convictions, etc., but these do not indicate dates of service. The dates given here are just useful information for further research.
        <h3 class="content-header-3">Aldermen vs. Alderwomen</h3>
        State law provides that City Council members are "aldermen." It took until 1971 for Chicago&rsquo;s first two women to be elected to the council. This was nearly 60 years after women gained the vote and well-qualified women began to run for the council. The <em>City Council Journal</em> and other sources commonly referred to women as alderwomen from 1971 onward.In 1984, Harold Washington nominated Dorothy Tillman as "alderwoman." A hostile City Council refused to consider the nomination, claiming the office did not exist. Washington then nominated her as "alderman." The council ultimately confirmed her, and since 1984 "alderman" has been used for both female and male members of the council.
    </div>
	</div></div>
        </div>
    </div>
</main>
<?php 
	include 'footer.html';
?>
</body>
</html>

