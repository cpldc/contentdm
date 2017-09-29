<?php
    foreach ($cards as $key => $val){
        echo '<div class="grid-item card" style="width: 20rem; margin-bottom: 10px;">';
        echo '<a href="'. $val[link] . '" alt ><img class="card-img-top img-fluid content-card-img" src="' . $val[pic] . '" alt="' . $val[title] . '"></a>';
        echo '<div class="card-block">';
        echo '<span class="content-card-category">' . $val[category] . '</span>';
        echo '<h4 class="card-title content-card-title"><a href="' . $val[link] . '">'. $val[title] . '</a></h4>';
        echo '<p class="card-text content-card-copy">' . $val[copy] . '</p>';
        echo '<a href="' . $val[link] . '" class="bibbutton">Browse Collection&hellip;</a>';
        echo '</div>';
        echo '</div>';
    }
?>

<!-- 
    $cards[][title] =     '';
    $cards[][pic] =       '';
    $cards[][category] =  '';
    $cards[][copy] =      '';
    $cards[][link] =      ''; -->
