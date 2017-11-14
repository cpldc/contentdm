		
			<span><?php echo $PAGE[textlong]; ?></span>
                <div class="center-lightbox">
						<div class="container-fluid lightbox imageGallery1">
						<div class="row">
							<div class="col-12 lightbox-main-img-div" 
							<?php
							if (strpos($PAGE[mainimage][url], 'mpu') !== false && $PAGE[link] !== 'MP') {
                            	echo ' data-toggle="tooltip" data-placement="top" title="' . $MP[rights2];
                        	}
							?>
							 "><a class="thisthis" href="<?php echo $PAGE[mainimage][url]; ?>" title="<?php echo $PAGE[mainimage][text]; ?>"><img style="background: url(<?php echo $PAGE[mainimage][url]; ?>); background-size: <?php echo $PAGE[mainimage][size]; ?>; background-position: <?php echo $PAGE[mainimage][align]; ?> !important;"  class="lightbox-main-img"></a></div>
						</div>
						<div class="row lightbox-thumbs justify-content-center">
						<?php 
							foreach ($PAGE[thumbs] as $key => $val) {
								echo '<div class="col-3 lightbox-thumb-wrapper"';
								if (strpos($val[url], 'mpu') !== false && $PAGE[link] !== 'MP') {
    	                        	echo ' data-toggle="tooltip" data-placement="top" title="' . $MP[rights2];
        	                	}
								echo '"><a href="' . $val[url] . '" title="' . $val[text] . '"><img style="background: url(' . $val[url] . '); background-size: ' . $val[size] . '; background-position: ' . $val[align] . '!important;" class="lightbox-thumb" /></a></div>';
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
						echo '<div class="center-button browseall"><a href="http://digital.chipublib.org/digital/search/collection/' . $PAGE[coll] . '/order/title/ad/asc" class="btn btn-primary">Browse All</a></div>';
					} else {
						$COLL;
						foreach ($cards as $key => $val) {
							if (($PAGE[type] == 'location' && $PAGE[shortname] == $val[location]) || ($PAGE[type] == 'category' && ($PAGE[shortname] == $val[category] || (is_array($val[category]) && in_array($PAGE[shortname], $val[category]))))) {
								if ($COLL == '') {$COLL = $val[coll];} else {$COLL = $COLL . '!' . $val[coll];}
							}
						}
						if (!$COLL == ''){
							echo '<div class="center-button browseall"><a href="http://digital.chipublib.org/digital/search/collection/' . $COLL . '/order/title/ad/asc" class="btn btn-primary">Browse All</a></div>';
						}
					}
                    if ($PAGE[textrich]) {
                        echo '<div class="center-copy-paragraph">
							<p>' . $PAGE[textrich] . '</p>';
							if ($PAGE[type] == 'collection'){
								echo 'The ' . $PAGE[title] . ' is housed in ' . $PAGE[location][longname] . '.';
							}
						echo '</div>';
					}
                    if ($PAGE[highlights]) {
						if($PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding-top: 5px;">
							<dl>';
						} else {
							echo '<div class="center-copy-list">
							<h4>Collection Highlights</h4>
							<dl>';
						}
                        foreach ($PAGE[highlights] as $key=>$val){
							echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[subcollections]) {
                        if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
							echo '<h4>Digital Collections</h4>
							<span>This collection is made up of the following archival collections:</span>
                            <dl>';
                        foreach ($PAGE[subcollections] as $key=>$val){
							echo '<dt><a href="' . $val[browse] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
                        }
                        echo '</dl></div>';
                    }
                    if ($PAGE[type] == 'category' && !$PAGE[subcollections]){
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h4>Digital Collections</h4>
                            <span>Collections ' . $PAGE[catcoll] . ' include:</span>
                            <dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array($PAGE[shortname], $val[category])) || $val[category] == $PAGE[shortname]){
								echo '<dt><a href="content.php?id=' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
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
						if ($PAGE[shortname] != "MRC"){
							echo '<h4>Digital Collections</h4>
								<p>Digital collections from the ' . $PAGE[longname] . ':<p><dl>';
							usort($cards, build_sorter('sortname'));
							foreach ($cards as $key => $val){
								if ($val[location] == $PAGE){
									echo '<dt><a href="content.php?id=' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
								}
							}
							echo '</dl></div><div class="center-copy-list">';
						}
						echo '<dl>
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
						echo '<div class="center-copy-paragraph"><span class="rights">' . $PAGE[rights] . '</span></div>';
					}
					if ($PAGE[inclusions]) {
						center_content($PAGE[inclusions]);
					}
                    ?>