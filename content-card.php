<?php
    require 'variables.php';

    usort($cards, build_sorter('flag'));
    foreach ($cards as $key => $val){
        if (!$val[flag] == ''){
            $catLink = array_search($val[category], $categories);
        echo '<div class="grid-item card" style="width: 20rem; margin-bottom: 10px;">';
        echo '<a href="'. $val[link] . '" style="background: url(' . $val[pic] . '); background-size: ' . $val[size] . '; background-position: ' . $val[pos] . '; height: ' . $val[pich] . '" alt="' . $val[title] . '"></a>';
        echo '<div class="card-block" >';
        echo '<span class="content-card-category"><a href="' . $catLink . '">' . $val[category] . '</a></span>';
        echo '<h4 class="card-title content-card-title"><a href="' . $val[link] . '">'. $val[title] . '</a></h4>';
        echo '<p class="card-text content-card-copy">' . $val[textshort] . '</p>';
        // echo '<a href="' . $val[link] . '" class="bibbutton">Browse Collection&hellip;</a>';
        echo '</div>';
        echo '</div>';
        }
    }
?>

<!-- 
    $cards[][title] =     '';
    $cards[][pic] =       '';
    $cards[][category] =  '';
    $cards[][copy] =      '';
    $cards[][link] =      ''; -->
