    <div class="center-lightbox">
        <div class="col-12 lightbox-main-img-div">
            <a href="http://digital.chipublib.org/digital/collection/mpu/id/2232/rec/1" title="Cloud Gate, assembly complete, view from above, July 16, 2004" alt="Cloud Gate, assembly complete, view from above, July 16, 2004">
                <img style="background: url(http://digital.chipublib.org/digital/api/singleitem/image/mpu/2232/default.jpg); background-size: 120%; background-position: 0px 60%;"  class="content-main-img">
            </a>
        </div>
    </div>
    <div class="center-copy-paragraph">
        <p>
            Chicago Public Library’s digital program strengthens communities and sparks passion about the city by expanding access to our unique resources and special collections. We support community-based and scholarly research, document Chicago’s life and neighborhoods, and provide primary sources to tell our stories. Our digital collections showcase thousands of archival images, documents and artifacts.
        </p>
        <p>
            Our digital collections come from CPL’s special collections:
        </p>
        <dl>
        <?php 
            usort($cards, build_sorter('sortname'));
            foreach ($cards as $key => $val){
                if ($val[type] == 'location'){
                    echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
                }
            }
        ?>
        </dl>
        <p></p>
        <p></p>
    </div>
    <div class="center-copy-list">
        <h4>Contact Us</h4>
        <dl>
            <dd class="about-contact">Questions or comments about the materials on this site, archival reproductions or Chicago history research? Email Special Collections at <a href="mailto:specoll@chipublib.org">specoll@chipublib.org</a></dd>
            <dd class="about-contact">Questions or comments about this website? Email <a href="mailto:webmaster@chipublib.org">webmaster@chipublib.org</a></dd>
        </dl>
        <h4>Order a Photo Reproduction</h4>
        <dl>
            <dt><a href="https://www.chipublib.org/wp-content/uploads/sites/3/2013/10/photo-reproduction-form.pdf">Photo Reproduction Order Form</a></dt>
            <dd class="about-contact">We offer photo reproductions from our <a href="https://www.chipublib.org/archives-collections/">archival collections </a> and <a href="http://digital.chipublib.org/digital">digital collections.<a></dd>
        </dl>
        <h4>Copyright</h4>
        <dl>
            <dd class="about-contact">Usage, transmission, downloading or reproduction of protected items beyond that allowed by Fair Use Copyright Law requires the written permission of the copyright owners. Copyright or other information about restrictions may be difficult or even impossible to determine. When possible, CPL provides information about copyright owners and restrictions concerning its collections.</dd>
            <dd class="about-contact">Determining the existence of copyright or any other legal restrictions, as well as obtaining permission from the copyright holder, is solely the responsibility of the user/patron</dd>
            <dd class="about-contact"><a href="http://rightsstatements.org/page/1.0/?language=en">RightsStatements.org website</a></dd>
        </dl>
    </div>