<div class="container lightbox imageGallery1">
    <div class="row">
        <div class="col-12 lightbox-main-img-div"><a href="<?php echo $IMAGE[Main][Url]; ?>" title="<?php echo $IMAGE[Main][Text]; ?>"><img style="background: url(<?php echo $IMAGE[Main][Url]; ?>); background-size: <?php echo $IMAGE[Main][Size]; ?>; background-position: <?php echo $IMAGE[Main][Align]; ?> !important;"  class="lightbox-main-img"></a></div>
    </div>
    <div class="row lightbox-thumbs">
    <?php 
        foreach ($THUMBS as $key => $val) {
            echo '<div class="col-3 lightbox-thumb-wrapper"><a href="' . $val[Url] . '" title="' . $val[Text] . '"><img style="background: url(' . $val[Url] . '); background-size: ' . $val[Size] . '; background-position: ' . $val[Align] . '!important;" class="lightbox-thumb" /></a></div>';
        }
    ?>
    </div>
</div>
<script>
    $('.imageGallery1 a').simpleLightbox();
</script>
