<?php 
    echo '<dl class="all-collections">';
    usort($cards, build_sorter('sortname'));
    foreach ($cards as $key => $val){
        if ($val[type] == 'collection' || $val[type] == 'subcollection'){
            echo '<dt class="' . $val[coll] . '"><a href="content.php?id=' . $val[link] . '" name="' . $val[coll] . '">' . $val[sortname] . '</a><span class="rsaquo"> &rsaquo;</span></dt>';
            echo '<dd>' . $val[textlong] . '</dd>';
            if (!$val[category] == ''){
                if (is_array($val[category])) {
                    $catlink0 = array_search($val[category][0], $categories);
                    $catlink1 = array_search($val[category][1], $categories);
                    echo '<dd class="all-collections-category"> Found in <a href="content.php?id=' . $catlink0 . '">' . $val[category][0] . '</a>';
                    echo ' <a href="content.php?id=' . $catlink1 . '">' . $val[category][1] . '</a></dd>';
                } else {
                    $catlink = array_search($val[category], $categories);
                    echo '<dd class="all-collections-category"> Found in <a href="content.php?id=' . $catlink . '">' . $val[category] . '</a></dd>';
                }
            }
            echo '<hr>';
        }
    }
?>