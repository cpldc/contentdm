    <div class="blogs-title">
        <h2>Chicago History Blog</h2>
    </div>
<?php
    $rss = new DOMDocument();
    $rss->load('https://www.chipublib.org/blogs/category/chicago-history/feed/');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array ( 
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'author' => $node->getElementsByTagNameNS('http://purl.org/dc/elements/1.1/', 'creator')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'cat' => $node->getElementsByTagName('category')->item(0)->nodeValue,
            );
        // if ($node->getElementsByTagName('category')->item(0)->nodeValue == 'History and Genealogy') 
        	array_push($feed, $item);
    }
    $limit = 3;
    for($x=0;$x<$limit;$x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $author = $feed[$x]['author'];
        $description = $feed[$x]['desc'];
        $pos=strpos($description, ' ', 60);
        $date = date('F j, Y', strtotime($feed[$x]['date']));
        echo '<div class="blogpost">';
        echo '<h4 class="blogpost-title"><a href="' . $link . '" class="blogpost-link">' . $title . ' <span class="raquo">&raquo;</span></a></h4>';
        echo '<div class="blogpost-author-date">' . $author . ' ' . $date . '</div>';
        echo '<div class="blogpost-description">' . substr($description,0,65 ) . '&hellip;</div>';
        echo '</div>';
    }
?>
<div class="blogs-viewmore"><a href="https://www.chipublib.org/blogs/">View More&hellip;</a></div>

