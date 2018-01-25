		<section aria-label="Introduction">
			<p class="center-copy-paragraph" id="intro"><?php echo $PAGE[textlong]; ?></p>
	</section>
	<section aria-label="Images">
			<div class="center-lightbox">
				<div class="container-fluid lightbox imageGallery1">
					<div class="row">
						<div class="col-12 lightbox-main-img-div">
							<!-- Dear w3c, if you built a image crop that actually works, I wouldn't have to do nonsense like make an image the background of an image with no src.  Love, CPLDC. -->
						<?php 
							if ($PAGE[type] == 'collection'){
								$mainImgUrl = 'http://digital.chipublib.org/digital/api/singleitem/image/' . $PAGE[coll] . '/' . $PAGE[mainimage][url] . '/default.jpg';
								$mainImgTitle = '<a href=http://digital.chipublib.org/digital/collection/' . $PAGE[coll] . '/id/' . $PAGE[mainimage][url] . '>' . $PAGE[mainimage][text] . '</a>';
							} elseif ($PAGE[link] == 'MRC') {
								$mainImgUrl = $PAGE[mainimage][url];
								$mainImgTitle = $PAGE[mainimage][text];
							} elseif ($PAGE[link] == 'Harsh') {
								$mainImgUrl = 'https://cdm16818.contentdm.oclc.org/customizations/global/pages/ASNLH.jpg';
								$mainImgTitle = '<a href=http://digital.chipublib.org/digital/collection/' . $PAGE[mainimage][coll] . '/id/' . $PAGE[mainimage][url] . '>' . $PAGE[mainimage][text] . '</a>';
							} else {
								$mainImgUrl = 'http://digital.chipublib.org/digital/api/singleitem/image/' . $PAGE[mainimage][coll] . '/' . $PAGE[mainimage][url] . '/default.jpg';
								$mainImgTitle = '<a href=http://digital.chipublib.org/digital/collection/' . $PAGE[mainimage][coll] . '/id/' . $PAGE[mainimage][url] . '>' . $PAGE[mainimage][text] . '</a>';
							}
							echo '<a class="center-images-main" href="' . $mainImgUrl . '" data-caption="' . $mainImgTitle . '" title="' . strip_tags(html_entity_decode($PAGE[mainimage][text])) . '" ><img style="background: url(' . $mainImgUrl . '); background-size: ' . $PAGE[mainimage][size] . '; background-position: ' . $PAGE[mainimage][align] . ' !important;"  class="lightbox-main-img" alt="' . $PAGE[mainimage][alt] . '"></a>';
							if (strpos($PAGE[mainimage][url],'mpu') !== false ) {
								echo '<i class="rights-i rights-i-main fa fa-info-circle"></i><div class="rights-overlay rights-overlay-main"><div class="rights-guts"><span class="rights-statement">' . $mpu[rights2]  . '</span></div><div class="rights-close"><i class="rights-close-icon fa fa-times"></i></div></div>';
							}
						?>
						</div>
					</div>
					<div class="row lightbox-thumbs justify-content-center">
						<?php 
							foreach ($PAGE[thumbs] as $key => $val) {
								if ($PAGE[type] == 'collection'){
									$thumbUrl = 'http://digital.chipublib.org/digital/api/singleitem/image/' . $PAGE[coll] . "/" . $val[url] . '/default.jpg';
									$thumbTitle = '<a href=http://digital.chipublib.org/digital/collection/' . $PAGE[coll] . "/id/" . $val[url] . '>' . $val[text] . '</a>';
								} else {
									$thumbUrl = 'http://digital.chipublib.org/digital/api/singleitem/image/' . $val[coll] . "/" . $val[url] . '/default.jpg';
									$thumbTitle = '<a href=http://digital.chipublib.org/digital/collection/' . $val[coll] . "/id/" . $val[url] . '>' . $val[text] . '</a>';
								}
								echo '<div class="col-3 lightbox-thumb-wrapper"';
								if (strpos($val[url], 'mpu') !== false && $PAGE[link] !== 'MP') {
    	                        	echo ' data-toggle="tooltip" data-placement="top" title="' . $mpu[rights2] . '"';
        	                	}
								echo '><a href="' . $thumbUrl . '" data-caption="' . $thumbTitle . '" title="' . strip_tags(html_entity_decode($val[text])) . '" ><img style="background: url(' . $thumbUrl . '); background-size: ' . $val[size] . '; background-position: ' . $val[align] . '!important;" class="lightbox-thumb" alt="' . $val[alt] . '" /></a></div>';
							}
						?>
					</div>
				</div>
				<script>
					$('.imageGallery1 a').simpleLightbox();
				</script>
			</div>
		</section>
		<section aria-label="Collection Description">
				<?php 
					if ($PAGE[coll]) {
						echo '<div class="center-button browseall"><a href="http://digital.chipublib.org/digital/collection/' . $PAGE[coll] . '/search" class="btn btn-primary">Browse All</a></div>';
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
								if ($PAGE[title] == 'Remembering Harold Washington' || $PAGE[link] == 'cr') {
									echo 'Photographs in the ' . $PAGE[title] . ' exhibit are housed in the ' . $PAGE[location][longname] . '.';
								} elseif ($PAGE[link] == 'examiner') {
									echo 'The ' . $PAGE[title] . ' is housed in the ' . $PAGE[location][longname] . '; microfilm is available in the Newspapers Department at Harold Washington Library Center.';
								} elseif ($PAGE[link] == 'woop') {
									echo 'The ' . $PAGE[title] . ' are housed in the ' . $PAGE[location][longname] . '.';
								} elseif ($PAGE[link] == 'wha') {
									echo 'Artifacts from the ' . $PAGE[creditname] . ' are housed in the ' . $PAGE[location][longname] . '.';
								} elseif ($PAGE[link] == 'CPB01') {
									echo 'The ' . $PAGE[title] . ' Collection is housed in the ' . $PAGE[location][longname] . '.';
								} else {
									echo 'The ' . $PAGE[title] . ' is housed in the ' . $PAGE[location][longname] . '.';
								}
							}
						echo '</div>';
					}
                    if ($PAGE[highlights]) {
						if($PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding-top: 5px;">
							<dl>';
						} else {
							echo '<div class="center-copy-list">
							<h3>Collection Highlights</h3>
							<dl>';
						}
                        foreach ($PAGE[highlights] as $key=>$val){
							echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div>';
					}
					echo '</section>';
                    if ($PAGE[subcollections]) {
						echo '<section aria-label="Collections in this group">';
                        if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
							echo '<h2>Digital Collections</h2>
							<span>This collection is made up of the following archival collections:</span>
                            <dl>';
                        foreach ($PAGE[subcollections] as $key=>$val){
							echo '<dt><a href="' . $val[browse] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
                        }
                        echo '</dl></div></section>';
                    }
                    if ($PAGE[type] == 'category' && !$PAGE[subcollections]){
						echo '<section aria-label="Collections in this category">';
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
						echo '<h2>Digital Collections</h2>
                            <span>Collections ' . $PAGE[catcoll] . ' include:</span>
                            <dl>';
						usort($cards, build_sorter('sortname'));
						foreach ($cards as $key => $val){
							if ((is_array($val[category]) && in_array($PAGE[shortname], $val[category])) || $val[category] == $PAGE[shortname]){
								echo '<dt><a href="content.php?id=' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort];
								if ($PAGE[link] == 'LibEd' && $val[link] == 'RWLV') {
									echo '  This collection contains images of high schools in the neighborhoods.';
								}
								if ($PAGE[link] == 'CivilWar' && $val[link] == 'Sang') {
									echo '  A number of documents in the collection were created during the Civil War.';
								}
								echo '</dd>';
							}
                        }
                        echo '</dl></div></section>';
                    }
                    if ($PAGE[type] == 'location'){
						echo '<section aria-label="Collections from this location">';
						if(!$PAGE[textrich]){
							echo '<div class="center-copy-list" style="border-top: none; padding: 15px">';
						} else {
							echo '<div class="center-copy-list">';
						}
						if ($PAGE[shortname] != "MRC"){
							echo '<h2>Digital Collections</h2>
								<p>Digital collections from the ' . $PAGE[longname] . ':<p><dl>';
							usort($cards, build_sorter('sortname'));
							foreach ($cards as $key => $val){
								if ($val[location] == $PAGE){
									echo '<dt><a href="content.php?id=' . $val[link] . '">' . $val[title] . '</a></dt><dd>' . $val[textshort] . '</dd>';
								}
							} 
							}else {
								echo '<h2>Digital Collections</h2>
								<p>Digital collections from the ' . $PAGE[title] . ' are forthcoming.';
							}
							echo '</dl></div></section>';
					}
                    if ($PAGE[CPLRes]){
						echo '<section>';
                        echo '<div class="center-copy-list">
                            <h2 id="CPLRes">More CPL Resources</h2>';
						if($PAGE[findingaid]){
							if(is_array($PAGE[findingaid][0])){
								echo '<dl>';
								if ($PAGE[link] == 'HW') {
									echo '<dt>Finding Aids</dt><dd>Chicago Public Library also holds extensive physical collections about Harold Washington, including his mayoral, congressional and state legislative years. Sample finding aids below.</dd><dd><ul>';
								} else {
									echo '<dt>Finding Aids</dt><dd>The descriptive inventories for other related archival collections.</dd><dd><ul>';
								}
								foreach ($PAGE[findingaid] as $key=>$val) {
									echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
								}
								echo '</ul></dd></dl>';
							} else {
								echo '<h3 class="finding-aid-list">Finding Aid</h3><dl class="finding-aid-list"><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
							}
						}
						usort($PAGE[CPLRes], build_sorter('dt'));
						echo '<dl>';
                        foreach ($PAGE[CPLRes] as $key => $val){
							echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
							echo $PAGE[CPLRes][dt];
						}
                        echo '</dl></div></section>';
                    }
                    if (!$PAGE[CPLRes] && $PAGE[findingaid]) {
						echo '<section aria-labelledby="findingaids"><div class="center-copy-list">';
						if(is_array($PAGE[findingaid][0])){
							echo '<h3 id="findingaids">Finding Aids</h3><p>The descriptive inventories for their physical collections.</p><ul>';
							foreach ($PAGE[findingaid] as $key=>$val) {
								echo '<li><a href="' . $val[link] . '">' . $val[text] . '</a></li>';
							}
							echo '</ul>';
						} else {
							echo '<h3>Finding Aid</h3><dl><dt><a href="' . $PAGE[findingaid][link] . '">' . $PAGE[findingaid][text] . '</a></dt><dd>The descriptive inventory for the complete physical collection.</dl>';
						}
						echo '</div></section>';
                    }
                    if ($PAGE[ExRes]){
						echo '<section aria-labelledby="ExRes"><div class="center-copy-list">
						<h2 id="ExRes">External Resources</h2>
						<dl>';
						usort($PAGE[ExRes], build_sorter('dt'));
                        foreach ($PAGE[ExRes] as $key => $val){
                            echo '<dt><a href="' . $val[a] . '">' . $val[dt] . '</a></dt><dd>' . $val[dd] . '</dd>';
                        }
                        echo '</dl></div></section>';
					}
					if ($PAGE[rights]){
						echo '<div class="center-copy-paragraph" aria-label="Additional Copyright Information"><span class="rights">' . $PAGE[rights] . '</span></div>';
					}
					// There aren't any inclusions right now; leaving it in case some come up later
					if ($PAGE[inclusions]) {
						center_content($PAGE[inclusions]);
					}
                    if ($PAGE[type] == 'location'){
						echo '<div class="center-copy-list" aria-label="Location"><dl>
						<dt class="contact-list-item" style="padding-bottom: 7px">Contact Us </dt>
						
						<dd class="contact-list-item">Phone: ' . $PAGE[locphone] . '</dd>
						<dd class="contact-list-item"><a href="mailto:' . $PAGE[locemail] . '">' . $PAGE[locemail] . '</a></dd></dl></div>';
                    }
                    ?>