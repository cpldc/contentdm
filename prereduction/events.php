
    <div class="events-title">
        <h2>History &amp; Genealogy Events</h2>
    </div>
<?php
    $cache_time = 60 * 60 * 24;
    $cache_file = 'events.html';
    $timedif = (time() - filemtime($cache_file));
    $limit = 5;
    $htmlStr = '';
    include 'locations.php';

    if ($cache_file && $timedif < $cache_time) {
        include $cache_file;
    } else {
        $rss = new DOMDocument();
        $rss->load('https://chipublib.bibliocommons.com/events/events/rss/all?nocache=');
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array ( 
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'loc' => $node->getElementsByTagNameNS('http://bibliocommons.com/rss/1.0/modules/event/', 'name')->item(0)->nodeValue,
                'date' => $node->getElementsByTagNameNS('http://bibliocommons.com/rss/1.0/modules/event/', 'start_date')->item(0)->nodeValue,
                'cat' => $node->getElementsByTagName('category')->item(0)->nodeValue
                );
            if ($node->getElementsByTagName('category')->item(0)->nodeValue == 'History and Genealogy') array_push($feed, $item);
        }
        for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $location = $feed[$x]['loc'];
            $locationLink = array_search($location, $LOCATIONLINKS);
            $date = date('M j', strtotime($feed[$x]['date']));
            $time = date('g:iA', strtotime($feed[$x]['date']));
            $htmlStr .= '<div class="event"> <h4 class="event-title"><a href="' . $link . '" class="event-link">' . $title . '<i class="raquo fa fa-angle-double-right"></i></a></h4><div class="event-location"><a href="' . $locationLink . '" class="event-location-link">' . $location . '</a></div><div class="event-datetime"><div class="event-date">' . $date . '</div><div class="event-time">' . $time . '</div></div></div>';
        }
        file_put_contents('events.html', $htmlStr);
        include $cache_file;
    }
?>
<div class="events-viewmore"><a href="https://chipublib.bibliocommons.com/events/search/index">View More <span class="rsaquo">&rsaquo;</span></a></div>

