    <div class="blogs-title">
        <h2>Chicago History Blog</h2>
    </div>
<?php
    $cache_time = 60 * 60 * 12;
    $cache_file = 'blogs.html';
    $timedif = (time() - filemtime($cache_file));
    $limit = 3;
    $htmlStr = '';

    if ($cache_file && $timedif < $cache_time) {
        include $cache_file;
    } else {
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
        for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $author = $feed[$x]['author'];
            $description = $feed[$x]['desc'];
            $pos=strpos($description, ' ', 60);
            $date = date('F j, Y', strtotime($feed[$x]['date']));
            $htmlStr .= '<div class="blogpost"><h4 class="blogpost-title"><a href="' . $link . '" class="blogpost-link">' . $title . '<i class="raquo fa fa-angle-double-right"></i></a></h4><div class="blogpost-author-date"> By: ' . $author . ', ' . $date . '</div><div class="blogpost-description">' . substr($description,0,65 ) . '&hellip;</div></div>';
        }
        file_put_contents('blogs.html', $htmlStr);
        include $cache_file;
    }
?>
<div class="blogs-viewmore"><a href="https://www.chipublib.org/blogs/">View More <span class="rsaquo">&rsaquo;</span></a></div>
