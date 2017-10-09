<div class="container lightbox imageGallery1">
    <div class="row">
        <div class="col-12 lightbox-main-img-div"><a href="<?php echo $IMAGES[Main][Url]; ?>" title="<?php echo $IMAGES[Main][Text]; ?>"><img style="background: url(<?php echo $IMAGES[Main][Url]; ?>); background-size: <?php echo $IMAGES[Main][Size]; ?>; background-position: <?php echo $IMAGES[Main][Align]; ?> !important;"  class="lightbox-main-img"></a></div>
        </div>
    <div class="row lightbox-thumbs">
        <div class="col-3 lightbox-thumb-wrapper"><a href="<?php echo $IMAGES[Thumb1][Url]; ?>" title="<?php echo $IMAGES[Thumb1][Text]; ?>"><img  style="background: url(<?php echo $IMAGES[Thumb1][Url]; ?>); background-size: <?php echo $IMAGES[Thumb1][Size]; ?>; background-position: <?php echo $IMAGES[Thumb1][Align]; ?> !important;" class="lightbox-thumb" /></a></div>
        <div class="col-3 lightbox-thumb-wrapper"><a href="<?php echo $IMAGES[Thumb2][Url]; ?>" title="<?php echo $IMAGES[Thumb2][Text]; ?>"><img  style="background: url(<?php echo $IMAGES[Thumb2][Url]; ?>); background-size: <?php echo $IMAGES[Thumb2][Size]; ?>; background-position: <?php echo $IMAGES[Thumb2][Align]; ?> !important;" class="lightbox-thumb" /></a></div>
        <div class="col-3 lightbox-thumb-wrapper"><a href="<?php echo $IMAGES[Thumb3][Url]; ?>" title="<?php echo $IMAGES[Thumb3][Text]; ?>"><img  style="background: url(<?php echo $IMAGES[Thumb3][Url]; ?>); background-size: <?php echo $IMAGES[Thumb3][Size]; ?>; background-position: <?php echo $IMAGES[Thumb3][Align]; ?> !important;" class="lightbox-thumb" /></a></div>
        <div class="col-3 lightbox-thumb-wrapper"><a href="<?php echo $IMAGES[Thumb4][Url]; ?>" title="<?php echo $IMAGES[Thumb4][Text]; ?>"><img  style="background: url(<?php echo $IMAGES[Thumb4][Url]; ?>); background-size: <?php echo $IMAGES[Thumb4][Size]; ?>; background-position: <?php echo $IMAGES[Thumb4][Align]; ?> !important;" class="lightbox-thumb" /></a></div>
    </div>
</div>
<script>
    $('.imageGallery1 a').simpleLightbox();
</script>