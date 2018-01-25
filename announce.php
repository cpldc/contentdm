    <section aria-label="Announcement">
        <p class="hr center-copy-paragraph" id="intro">
            January 25, 2018
        </p>
        <p>
            Welcome to Chicago Public Library’s Digital Collections website! We’ve updated our site to make it easier for you to find thousands of images, documents and artifacts from CPL’s special collections.
        </p>
	</section>
	<section aria-label="Images">
        <div id="announce-image" class="center-lightbox">
        <div class="col-12 lightbox-main-img-div announce-image content-main-img" title="Trailer Service from the Legler Regional Library, ca. 1940.  Part of the CPL Archives collection.">
        </div>
    </div>
    </section>
    <section aria-label="Details">
    <div class="center-copy-paragraph">
        <p>
            While you can continue to <a href="#search-query" onclick="expandSearch()">search our collections</a> and <a href="content.php?id=All">browse by specific collection</a>, you can now also browse our collections by subject:
        </p>
        <ul>
            <?php
                usort($cards, build_sorter('sidebarname'));
                foreach ($cards as $key => $val){
                    if ($val[sidebarflag] == 'x'){
                        echo '<li "><a href="content.php?id=' . $val[link] . '">' . $val[sidebarname] . '</a></li>';
                    }
                }
            ?>
        </ul>
        <p>
            Our site is now easy to use on devices of all sizes, including tablets and phones.
        </p>
        <p>
            This site demonstrates our renewed commitment to our digital collections. Watch this site for newly digitized materials from CPL’s special collections in the coming months.
        </p>
        <p>
            Comments? Use our <a href="https://www.chipublib.org/help-us-improve-our-website/">feedback form</a>, or email <a href="mailto:webmaster@chipublib.org">webmaster@chipublib.org</a>.
        </p>
        <!-- <p>
            Questions? Give us a call at (312) 747-4300 or stop by any of our locations.
        </p> -->
    </div>
    </section>