<?php 
include 'variables.php';
$locationsPelican = array($HWLCSC, $MRC, $NNHC, $Harsh);
$subcollectionsPelican = array($EBG, $Playbills, $Amund, $Kins, $LVHS, $Walz, $CFCC, $LVCRA, $PortPark, $RMIA, $HWR);
$collectionsPelican = array($examiner, $bar, $woop, $cr, $dtd, $wha, $hdg, $rwk, $mpu, $cfc, $ahs, $ChicagpParks, $rhwc, $rvw, $p16818coll6);
$categoriesPelican = array($AfAm, $CivilWar, $LibEd, $new . s, $Neigh, $Parks, $CPB01);
echo '- locations: ';
$new = "<br />";
$tab = "&nbsp;&nbsp;";
function linkTextHandler($array){
    $returnArray = '';
    foreach($array as $k => $v){
        $new . $tab . $tab . $tab . 'url: ' . $v[link] .
        $new . $tab . $tab . $tab . 'text: ' . $v[text];
    }
    return $returnArray;
}
function dtdlHandler($array){
    $returnArray = '';
    foreach($array as $k => $v){
        $new . $tab . $tab . $tab . 'a: ' . $v[link] .
        $new . $tab . $tab . $tab . 'dt: ' . $v[text] .
        $new . $tab . $tab . $tab . 'dd: ' . $v[text];
    }
    return $returnArray;
}
function thumbsHandler($array){
    $thumbsarray = '';
    $count = 1;
    foreach ( $array as $k => $v ){
        $thumbsarray .= $new . $tab . 'thumb' . $count . ': ' .
        $new . $tab . $tab . $tab . 'url: ' . $v[url] .
        $new . $tab . $tab . $tab . 'coll: ' . $v[coll] .
        $new . $tab . $tab . $tab . 'text: ' . $v[text] .
        $new . $tab . $tab . $tab . 'size: ' . $v[size] .
        $new . $tab . $tab . $tab . 'align: ' . $v[align] .
        $new . $tab . $tab . $tab . 'alt: ' . $v[alt];
        $count++;
    }
    return $thumbsarray;
}
function mainimageHandler($array){
    $mainimageReturn = $new . $tab . 'mainimage: ' . 
    $new . $tab . $tab . $tab . $array[url] .
    $new . $tab . $tab . $tab . 'coll: ' . $array[coll] .
    $new . $tab . $tab . $tab . 'text: ' . $array[text] .
    $new . $tab . $tab . $tab . 'size: ' . $array[size] .
    $new . $tab . $tab . $tab . 'align: ' . $array[align] .
    $new . $tab . $tab . $tab . 'alt: ' . $array[alt]; 
    return $mainimageReturn;
}

foreach ( $locationsPelican as $key => $value ){
    $mainimagearray = mainimageHandler($value[mainimage]);
    $thumbsarray = thumbsHandler($value[thumbs]);
    $locationContent = $new . $tab . $value[link] . ': ' .
        $new . $tab . $tab . 'title: ' . $value[title] .
        $new . $tab . $tab . 'sortname: ' . $value[sortname] . 
        $new . $tab . $tab . 'longname: ' . $value[longname] .
        $new . $tab . $tab . 'sidebarname: ' . $value[sidebarname] .
        $new . $tab . $tab . 'textshort: ' . $value[textshort] .
        $new . $tab . $tab . 'locname: ' . $value[locname] .
        $new . $tab . $tab . 'loclink: ' . $value[loclink] .
        $new . $tab . $tab . 'locemail: ' . $value[locemail] .
        $new . $tab . $tab . 'locphone: ' . $value[locphone] .
        $new . $tab . $tab . 'link: ' . $value[link] .
        $new . $tab . $tab . 'type: ' . $value[type] .
        $mainimagearray . 
        $thumbsarray . 
        $new . $value[textlong];
    $filename = $value[link] . '.md';
    // echo '<br />' . $value[link];
    echo $locationContent;
    file_put_contents($filename, $locationContent);
    // readfile($filename);
}
// echo $new . '- subcollections';
// foreach ( $subcollectionsPelican as $key => $value ){
//     $subcollectionContent = 
//     $new . $tab . $value[filename] . ': ' .
//     $new . $tab . $tab . 'title: ' . $value[title] .
//     $new . $tab . $tab . 'sortname: ' . $value[sortname] .
//     $new . $tab . $tab . 'textlong: ' . $value[textlong] .
//     $new . $tab . $tab . 'textshort: ' . $value[textshort] .
//     $new . $tab . $tab . 'browse: ' . $value[browse] .
//     $new . $tab . $tab . 'link: ' . $value[link] .
//     $new . $tab . $tab . 'filename: ' . $value[filename] .
//     $new . $tab . $tab . 'type: ' . $value[type];
//     // $filename = 'markdown/subcolls/' . $value[filename] . '.md';
//     // echo '$new . ' . $value[link];
//     echo $subcollectionContent;
//     // readfile($filename);
// }

function collcat($value, $type){
    $findingaidarray = $new . $tab . $tab . 'findingaids: ' . linkTextHandler($value[findingaid]);
    $cplresarray = $new . $tab . $tab . 'cplres: ' . dtdlHandler($value[cplres]);
    $exresarray = $new . $tab . $tab . 'exres: ' . dtdlHandler($value[exres]);
    $subdigicollarray = $new . $tab . $tab . 'subdigicoll: ' . dtdlHandler($value[subdigicoll]);
    $thumbsarray = thumbsHandler($value[thumbs]);
    $mainimagearray = mainimageHandler($value[mainimage]);
    $cardpicarray = 
        $new . $tab . 'cardpic: ' .
        $new . $tab . $tab . 'url: ' . $value[cardpic][pic] .
        $new . $tab . $tab . 'pich: ' . $value[cardpic][pich] .
        $new . $tab . $tab . 'size: ' . $value[cardpic][size] .
        $new . $tab . $tab . 'pos: ' . $value[cardpic][pos];
    $content = 
        // 'date: 2018-09-06' .
        $new . $tab . $value[link] . ':' .
        $new . $tab . $tab . 'title: ' . $value[title] . 
        $new . $tab . $tab . 'category: ' . $value[category] .
        $new . $tab . $tab . 'coll: ' . $value[coll] .
        $new . $tab . $tab . ($value[creditname] ? 'creditname: ' . $value[creditname] : '' ) .
        $new . $tab . $tab . ($value[highlights] ? 'highlights: ' . $value[highlights] : '' ) .
        $new . $tab . $tab . 'homeloc: ' . $value[homeloc] .
        $new . $tab . $tab . 'link: ' . $value[link] .
        $new . $tab . $tab . 'location: ' . $value[location] .
        $new . $tab . $tab . ($value[rights] ? 'rights: ' . $value[rights] : '' ) .
        $new . $tab . $tab . ($value[rights2] ? 'rights2: ' . $value[rights2] : '' ) .
        $new . $tab . $tab . 'shortname: ' . $value[shortname] .
        $new . $tab . $tab . 'sidebarflag: ' . $value[sidebarflag] .
        $new . $tab . $tab . 'sidebarname: ' . $value[sidebarname] .
        $new . $tab . $tab . 'sortname: ' . $value[sortname] .
        $new . $tab . $tab . ($value[subcollections] ? 'subcollections: ' . $value[subcollections] : '' ) .
        $new . $tab . $tab . 'textlong: ' . $value[textlong] .
        $new . $tab . $tab . 'textshort: ' . $value[textshort] .
        $new . $tab . $tab . 'type: ' . $value[type] .
        $cardpicarray . 
        $mainimagearray .
        $thumbsarray .
        ($value[findingaid] ? $findingaidarray : '') .
        ($value[CPLRes] ? $cplresarray : '') .
        ($value[ExRes] ? $exresarray : '' ) .
        ($value[subdigicoll] ? $subdigicollarray : '') . 
        $new . $new . $value[textrich];
    // $filename = 'markdown/' . $type . '/' . $value[link] . '.md';
    // echo '<br />' . $value[link] . ': ';
    echo $content;
    // readfile($filename);
}
echo '- collections: ';
foreach ( $collectionsPelican as $key => $value ){
    collcat($value, 'collections');
}
foreach ( $categoriesPelican as $key => $value ){
    collcat($value, 'categories');
}
?>