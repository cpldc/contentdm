		
			<span><?php echo $PAGE[textlong]; ?></span>
                <div class="center-lightbox">
						<div class="container-fluid lightbox imageGallery1">
						<div class="row">
							<div class="col-12 lightbox-main-img-div"><a href="<?php echo $PAGE[mainimage][url]; ?>" title="<?php echo $PAGE[mainimage][text]; ?>"><img style="background: url(<?php echo $PAGE[mainimage][url]; ?>); background-size: <?php echo $PAGE[mainimage][size]; ?>; background-position: <?php echo $PAGE[mainimage][align]; ?> !important;"  class="lightbox-main-img"></a></div>
						</div>
						<div class="row lightbox-thumbs justify-content-center">
						<?php 
							foreach ($PAGE[thumbs] as $key => $val) {
								echo '<div class="col-3 lightbox-thumb-wrapper"><a href="' . $val[url] . '" title="' . $val[text] . '"><img style="background: url(' . $val[url] . '); background-size: ' . $val[size] . '; background-position: ' . $val[align] . '!important;" class="lightbox-thumb" /></a></div>';
							}
						?>
						</div>
					</div>
					<script>
						$('.imageGallery1 a').simpleLightbox();
					</script>
                </div>
				<?php 
				if ($PAGE[coll]) {
					echo '<div class="center-button browseall">
                    	<a href="http://digital.chipublib.org/digital/collection/<?php echo $PAGE[coll] ?>/search" class="btn btn-primary">Browse All</a>
					</div>';
				}
                    if ($PAGE[textrich]) {
                        echo '<div class="center-copy-paragraph">
                            <p>' . $PAGE[textrich] . '</p>
                            </div>';
                    }
                    if ($PAGE[highlights]) {
                        echo '<div class="center-copy-list">
                            <h4>Collection Highlights</h4>
                            <dl>';
                        foreach ($PAGE[highlights] as $key=>$val){
							echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[type] == 'category'){
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h4>Digital Collections</h4>
                            <p>Collections ' . $PAGE[catcoll] . ' include:<p>
                            <dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array($PAGE[shortname], $val[category])) || $val[category] == $PAGE[shortname]){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[type] == 'location'){
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h4>Digital Collections</h4>
                            <p>Digital collections from the ' . $PAGE[title] . ':<p><dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ($val[location] == $PAGE[shortname]){
								echo '<dt><a href="' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
							}
						}
						echo '</dl></div><div class="center-copy-list"><dl>
						<dt class="contact-list-item" style="padding-bottom: 7px">Contact us: </dt>
						<dd class="contact-list-item">Location: <a href="https://www.chipublib.org/locations/' . $PAGE[loclink] . '">' . $PAGE[locname] . '</a></dd>
						<dd class="contact-list-item">Email: ' . $PAGE[locemail] . '</dd>
						<dd class="contact-list-item">Call: ' . $PAGE[locphone] . '</dd></dl></div>';
                    }
                    if ($PAGE[CPLRes]){
                        echo '<div class="center-copy-list">
                            <h4>More CPL Resources</h4>
                            <dl>';
                        foreach ($PAGE[CPLRes] as $key => $val){
                            echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
						}
						if($PAGE[findingaid]){
							if(is_array($PAGE[findingaid][0])){
								echo '<dt>Finding Aids</dt><dd>The descriptive inventories for other related archival collections.</dd><dd><ul>';
								foreach ($PAGE[findingaid] as $key=>$val) {
									echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
								}
								echo '</ul></dd>';
							} else {
								echo '<h4>Finding Aid</h4><dl><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
							}
						}
                        echo '</dl></div>';
                    }
                    if (!$PAGE[CPLRes] && $PAGE[findingaid]) {
						echo '<div class="center-copy-list">';
						if(is_array($PAGE[findingaid][0])){
							echo '<h4>Finding Aids</h4><p>The descriptive inventories for their physical collections.</p><ul>';
							foreach ($PAGE[findingaid] as $key=>$val) {
								echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
							}
							echo '</ul>';
						} else {
							echo '<h4>Finding Aid</h4><dl><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
						}
						echo '</div>';
                    }
                    if ($PAGE[ExRes]){
						echo '<div class="center-copy-list">
						<h4>External Resources</h4>
						<dl>';
                        foreach ($PAGE[ExRes] as $key => $val){
                            echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div>';
					}
					if ($PAGE[rights]){
						echo '<div class="content-card-paragraph"><span class="rights">' . $PAGE[rights] . '</span></div>';
					}
					if ($PAGE[inclusions]) {
						center_content($PAGE[inclusions]);
					}
                    ?>