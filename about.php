    <div class="center-lightbox">
        <div class="col-12 lightbox-main-img-div about-image" title="Cloud Gate, assembly complete, view from above, July 16, 2004" class="content-main-img">
                <i class="rights-i rights-i-about fa fa-info-circle"></i>
                <div class="rights-overlay rights-overlay-about">
                    <div class="rights-guts">
                        <span class="rights-statement">
                        <?php echo $MP[rights2] ?>
                        </span>
                    </div>
                    <div class="rights-close">
                        <i class="rights-close-icon fa fa-times"></i>
                    </div>
                </div>
        </div>
    </div>
    <div class="center-copy-paragraph">
        <p>
            Chicago Public Library’s digital program strengthens communities and sparks passion about the city by expanding access to our unique resources and special collections. We support community-based and scholarly research, document Chicago’s life and neighborhoods and provide primary sources to tell our stories. Our digital collections showcase thousands of archival images, documents and artifacts.
        </p>
        <p>
            Our digital collections come from CPL’s special collections:
        </p>
        <dl>
        <?php 
            usort($cards, build_sorter('sortname'));
            foreach ($cards as $key => $val){
                if ($val[type] == 'location'){
                    echo '<dt><a href="content.php?id=' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
                }
            }
        ?>
        </dl>
        <p></p>
        <p>CPL presents these images and documents as part of the record of the past. It does not endorse the views expressed in these items, some of which may contain offensive materials.</p>
    </div>
    <div class="center-copy-list">
        <h4>Contact Us</h4>
        <dl>
            <dd class="about-contact">Questions or comments about the materials on this site, archival reproductions or Chicago history research? Email Special Collections at <a href="mailto:specoll@chipublib.org">specoll@chipublib.org</a></dd>
            <dd class="about-contact">Questions or comments about this website? Email <a href="mailto:webmaster@chipublib.org">webmaster@chipublib.org</a></dd>
        </dl>
        <h4>Order a Photo Reproduction</h4>
        <dl>
            <dt><a href="https://www.chipublib.org/order-a-photo-reproduction/">Photo Reproduction Order Form</a></dt>
            <dd class="about-contact">We offer photo reproductions from our <a href="https://www.chipublib.org/archives-collections/">archival collections </a> and <a href="http://digital.chipublib.org/digital">digital collections.<a></dd>
        </dl>
        <h4>Copyright</h4>
        <dl>
            <dd class="about-contact">Usage, transmission, downloading or reproduction of protected items beyond that allowed by Fair Use Copyright Law requires the written permission of the copyright owners. When possible, CPL provides information about copyright owners and restrictions concerning its collections.</dd>
            <dd class="about-contact">Determining the existence of copyright or any other legal restrictions, as well as obtaining permission from the copyright holder, is solely the responsibility of the patron.</dd>
            <dd class="about-contact"><b>Notice: Warning Concerning Copyright Restrictions</b></dd>
            <dd class="about-contact">The copyright law of the United States (Title 17, United States Code) governs the making of photocopies or other reproductions of copyrighted material.</dd>
            <dd class="about-contact">Under certain conditions specified in the law, libraries and archives are authorized to furnish a photocopy or other reproduction. One of these specific conditions is that the photocopy or reproduction is not to be “used for any purpose other than private study, scholarship or research.” If a user makes a request for, or later uses, a photocopy or reproduction for purposes in excess of “fair use,” that user may be liable for copyright infringement.</dd>
            <dd class="about-contact">This institution reserves the right to refuse a copying order if, in its judgment, fulfillment of the order would involve violation of copyright law.</dd>
        </dl>
    </div>