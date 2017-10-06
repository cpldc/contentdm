<div class="container lightbox imageGallery1">
    <div class="row">
        <div class="col-12 lightbox-main-img-div"><a href="<?php echo $PIC1; ?>" title="<?php echo $TEXT1; ?>"><img src="<?php echo $PIC1; ?>" alt="<?php echo $TEXT1; ?>" class="lightbox-main-img"></a></div>
        </div>
    <div class="row lightbox-thumbs">
        <div class="col-3"><a href="<?php echo $PIC2; ?>" title="<?php echo $TEXT2; ?>"><img src="<?php echo $PIC2; ?>" alt="<?php echo $TEXT2; ?>" class="lightbox-thumb" /></a></div>
        <div class="col-3"><a href="<?php echo $PIC3; ?>" title="<?php echo $TEXT3; ?>"><img src="<?php echo $PIC3; ?>" alt="<?php echo $TEXT3; ?>" class="lightbox-thumb" /></a></div>
        <div class="col-3"><a href="<?php echo $PIC4; ?>" title="<?php echo $TEXT4; ?>"><img src="<?php echo $PIC4; ?>" alt="<?php echo $TEXT4; ?>" class="lightbox-thumb" /></a></div>
        <div class="col-3"><a href="<?php echo $PIC5; ?>" title="<?php echo $TEXT5; ?>"><img src="<?php echo $PIC5; ?>" alt="<?php echo $TEXT5; ?>" class="lightbox-thumb" /></a></div>
    </div>
</div>
<script>
    $('.imageGallery1 a').simpleLightbox();
</script>