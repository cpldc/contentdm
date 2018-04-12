
    <div class="events-title">
        <h2>History &amp; Genealogy Events</h2>
    </div>
<?php
    $cache_time = 60 * 60 * 24;
    // $cache_time = 1;
    $cache_file = 'events.html';
    $timedif = (time() - filemtime($cache_file));
    $limit = 5;
    $htmlStr = '';
    include 'locations.php';
    date_default_timezone_set('America/Chicago');
    // if events.html is older than 12 hours (60 seconds * 60 minutes * 12), it 
    //     gets the feed
    //     assigns pieces of it to variables
    //     pushes the variables into an array if category = hist&genea
            // nb we have to use namespaces here; all you have to do is name the namespace though, you don't have to actually access it, which is good, because they're dead links
            // also nb we search the $LOCATIONLINKS array stored in locations.php in order to create a link to the location's page on chipublib
    //     iterates through 5 arrays to put the variables into html
    //     then saves events.html
    if ($cache_file && $timedif > $cache_time) {
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
                if ($node->getElementsByTagName('category')->item(0)->nodeValue == 'History and Genealogy' ||
                    $node->getElementsByTagName('category')->item(1)->nodeValue == 'History and Genealogy' ||
                    $node->getElementsByTagName('category')->item(2)->nodeValue == 'History and Genealogy') 
                {
                    array_push($feed, $item);
                }
        }
        for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            if ($title == '') {break;}
            $link = $feed[$x]['link'];
            $location = $feed[$x]['loc'];
            $locationLink = array_search($location, $LOCATIONLINKS);
            $date = date('M j', strtotime($feed[$x]['date']));
            $time = date('g:iA', strtotime($feed[$x]['date']));
            $htmlStr .= '<div class="event"> <h3 class="event-title"><a href="' . $link . '" class="event-link">' . $title . '<i class="raquo fa fa-angle-double-right" aria-hidden="true"></i></a></h3><div class="event-location"><a href="' . $locationLink . '" class="event-location-link">' . $location . '</a></div><div class="event-datetime"><div class="event-date">' . $date . '</div><div class="event-time">' . $time . '</div></div></div>';
        }
        file_put_contents('events.html', $htmlStr);
    }
    include $cache_file;
?>
<div class="events-viewmore"><a href="https://chipublib.bibliocommons.com/events/search/fq=types:(53f20436e04c1e3b1c00d09d)" aria-label="View More Events">View More <i class="rsaquo fa fa-angle-right"  aria-hidden="true"></i></a></div>

