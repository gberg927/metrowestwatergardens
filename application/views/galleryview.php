<a href="<? echo base_url() . 'gallery/individual/' . url_title($title); ?>"><h1><? echo ucwords($title); ?></h1></a>
<div id="gallery">
    <div class="ocarousel">
        <div class="ocarousel_window">
            <?php foreach ($images as $image):?>
                <a href="<?php echo base_url() . "/images/gallery/" . $title . "/" . $image;?>" rel="lightbox[<? echo $title; ?>]"><img src="<?php echo base_url() . "/images/gallery/" . $title . "/thumb/thumb_" . $image;?>" width="145" height ="112" /></a>
            <?php endforeach;?>
        </div>
        <a id="prev" data-ocarousel-link="left" href="#">prev</a>
        <a id="next" data-ocarousel-link="right" href="#">next</a>
        <br />
    </div>         
</div>
<br />