<?php 
include 'variables.php';
$locationsPelican = array($HWLCSC, $MRC, $NNHC, $Harsh);
$subcollectionsPelican = array($EBG, $Playbills, $Amund, $Kins, $LVHS, $Walz, $CFCC, $LVCRA, $PortPark, $RMIA, $HWR);
$collectionsPelican = array($examiner, $bar, $woop, $cr, $dtd, $wha, $hdg, $rwk, $mpu, $cfc, $ahs, $ChicagpParks, $rhwc, $rvw, $p16818coll6);
$categoriesPelican = array($AfAm, $CivilWar, $LibEd, $News, $Neigh, $Parks, $CPB01);
foreach ( $locationsPelican as $key => $value ){
    $thumbsarray = '';
    $mainimagearray = 'mainimageurl: ' . $value[mainimage][url] . "\n" .
    'maimimagecoll: ' . $value[mainimage][coll] . "\n" .
    'maimimagetext: ' . $value[mainimage][text] . "\n" .
    'maimimagesize: ' . $value[mainimage][size] . "\n" .
    'maimimagealign: ' . $value[mainimage][align] . "\n" .
    'maimimagealt: ' . $value[mainimage][alt] . "\n"; 
    $count = 1;
    foreach ( $value[thumbs] as $k => $v ){
        $thumbsarray .= 'thumbs' . $count . 'url: ' . $v[url] . "\n" .
        'thumbs' . $count . 'coll: ' . $v[coll] . "\n" .
        'thumbs' . $count . 'text: ' . $v[text] . "\n" .
        'thumbs' . $count . 'size: ' . $v[size] . "\n" .
        'thumbs' . $count . 'align: ' . $v[align] . "\n" .
        'thumbs' . $count . 'alt: ' . $v[alt] . "\n";
        $count++;
    }
    $locationContent = 'title: ' . $value[title] . "\n" .
         'sortname: ' . $value[sortname] . "\n" . 
         'longname: ' . $value[longname] . "\n" .
         'sidebarname: ' . $value[sidebarname] . "\n" .
         'pic: ' . $value[pic] . "\n" .
         'textshort: ' . $value[textshort] . "\n" .
         'textlong: ' . $value[textlong] . "\n" .
         'locname: ' . $value[locname] . "\n" .
         'loclink: ' . $value[loclink] . "\n" .
         'locemail: ' . $value[locemail] . "\n" .
         'locphone: ' . $value[locphone] . "\n" .
         'link: ' . $value[link] . "\n" .
         'type: ' . $value[type] . "\n" .
         $mainimagearray . 
         $thumbsarray .
         "\n";
    $filename = 'markdown/locations/' . $value[link] . '.md';
    echo '<br />' . $filename;
    file_put_contents($filename, $locationContent );
    readfile($filename);
}
foreach ( $subcollectionsPelican as $key => $value ){
    $subcollectionContent = 
    'title: ' . $value[title] . "\n" .
    'sortname: ' . $value[sortname] . "\n" .
    'textlong: ' . $value[textlong] . "\n" .
    'textshort: ' . $value[textshort] . "\n" .
    'browse: ' . $value[browse] . "\n" .
    'link: ' . $value[link] . "\n" .
    'filename: ' . $value[filename] . "\n" .
    'type: ' . $value[type] . "\n";
    $filename = 'markdown/subcolls/' . $value[filename] . '.md';
    echo '<br />' . $filename;
    file_put_contents($filename, $subcollectionContent );
    readfile($filename);
}
function collcat($value, $type){
    $thumbsarray = '';
    $findingaidarray = '';
    $cplresarray = '';
    $exresarray = '';
    $subdigicollarray = '';
    $cardpicarray = 
        'cardpicurl: ' . $value[cardpic][pic] . "\n" .
        'cardpicpich: ' . $value[cardpic][pich] . "\n" .
        'cardpicsize: ' . $value[cardpic][size] . "\n" .
        'cardpicpos: ' . $value[cardpic][pos];
    $mainimagearray = 
        'mainimageurl: ' . $value[mainimage][url] . "\n" .
        'mainimagecoll: ' . ($value[mainimage][coll] ? $value[mainimage][coll] : $value[coll]) . "\n" . 
        'mainimagetext: ' . $value[mainimage][text] . "\n" .
        'mainimagesize: ' . $value[mainimage][size] . "\n" .
        'mainimagealign: ' . $value[mainimage][align] . "\n" .
        'mainimagealt: ' . $value[mainimage][alt]; 
    $thumbscount = 1;
    $facount = 1;
    $cplrescount = 1;
    $exrescount = 1;
    $subdigicollcount = 1;
    foreach ( $value[thumbs] as $k => $v ){
        $thumbsarray .= 
        'thumbs' . $thumbscount . 'url: ' . $v[url] . "\n" .
        'thumbs' . $thumbscount . 'coll: ' . $v[coll] . "\n" .
        'thumbs' . $thumbscount . 'text: ' . $v[text] . "\n" .
        'thumbs' . $thumbscount . 'size: ' . $v[size] . "\n" .
        'thumbs' . $thumbscount . 'align: ' . $v[align] . "\n" .
        'thumbs' . $thumbscount . 'alt: ' . $v[alt] . "\n";
        $thumbscount++;
    }
    foreach ( $value[findingaid] as $k => $v ){
        $findingaidarray .=
        'findingaid' .$facount . 'url: ' . $v[link] . "\n" .
        'findingaid' .$facount . 'text: ' . $v[text] . "\n";
        $facount++;
    }
    foreach ( $value[CPLRes] as $k => $v ){
        $cplresarray .=
        'cplres' . $cplrescount . 'a: ' . $v[a] . "\n" .
        'cplres' . $cplrescount . 'dt: ' . $v[dt] . "\n" .
        'cplres' . $cplrescount . 'dd: ' . $v[dd] . "\n";
        $cplrescount++;
    }
    foreach ( $value[ExRes] as $k => $v ){
        $exresarray .=
        'exres' . $exrescount . 'a: ' . $v[a] . "\n" .
        'exres' . $exrescount . 'dt: ' . $v[dt] . "\n" .
        'exres' . $exrescount . 'dd: ' . $v[dd] . "\n";
        $exrescount++;
    }
    foreach ( $value[subdigicoll] as $k => $v ){
        $subdigicollarray .=
        'subdigicoll' . $subdigicollcount . 'a: ' . $v[a] . "\n" .
        'subdigicoll' . $subdigicollcount . 'dt: ' . $v[dt] . "\n" .
        'subdigicoll' . $subdigicollcount . 'dd: ' . $v[dd] . "\n";
        $subdigicollcount++;
    }
    $content = 
        'date: 2018-09-06' .
        'title: ' . $value[title] . "\n" . 
        'category: ' . $value[category] . "\n" .
        'coll: ' . $value[coll] . "\n" .
        ($value[creditname] ?'creditname: ' . $value[creditname] . "\n" : '' ) .
        ($value[highlights] ?'highlights: ' . $value[highlights] . "\n" : '' ) .
        'homeloc: ' . $value[homeloc] . "\n" .
        'link: ' . $value[link] . "\n" .
        'location: ' . $value[location] . "\n" .
        ($value[rights] ?'rights: ' . $value[rights] . "\n" : '' ) .
        ($value[rights2] ?'rights2: ' . $value[rights2] . "\n" : '' ) .
        'shortname: ' . $value[shortname] . "\n" .
        'sidebarflag: ' . $value[sidebarflag] . "\n" .
        'sidebarname: ' . $value[sidebarname] . "\n" .
        'sortname: ' . $value[sortname] . "\n" .
        ($value[subcollections] ?'subcollections: ' . $value[subcollections] . "\n" : '' ) .
        'textlong: ' . $value[textlong] . "\n" .
        'textshort: ' . $value[textshort] . "\n" .
        'type: ' . $value[type] . "\n" .
        $cardpicarray . 
        $mainimagearray .
        $thumbsarray .
        ($value[findingaid] ? $findingaidarray : '') .
        ($value[CPLRes] ? $cplresarray : '') .
        ($value[ExRes] ? $exresarray : '' ) .
        ($value[subdigicoll] ? $subdigicollarray : '') . 
        "\n\n" . $value[textrich] . "\n";
    $filename = 'markdown/' . $type . '/' . $value[link] . '.md';
    echo '<br />' . $filename . ': ';
    file_put_contents($filename, $content );
    readfile($filename);
}

foreach ( $collectionsPelican as $key => $value ){
    collcat($value, 'collections');
}
foreach ( $categoriesPelican as $key => $value ){
    collcat($value, 'categories');
}
?>