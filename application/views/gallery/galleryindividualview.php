<a href="<? echo base_url() . 'gallery/individual/' . url_title($title); ?>"><h3 class="service-title"><? echo ucwords($title); ?></h3></a>
<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
<?php 
    $columnCount = 0;
    foreach ($images as $image):
        if ($columnCount % 4 == 0) {
            if ($columnCount == 0) {
                echo '<div class="row">';
            }
            else {
                echo '<div class="row top-buffer">';
            }
        }
?>
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="<?php echo base_url() . "/images/gallery/" . $title . "/" . $image['filename'];?>" itemprop="contentUrl" data-size="<?php echo $image['width'] . 'x' . $image['height'] ?>" class="col-sm-3">
                <img src="<?php echo base_url() . "/images/gallery/" . $title . "/" . $image['filename'];?>" itemprop="thumbnail" alt="<?php echo $image['title'];?>" class="img-responsive"/>
            </a>
        </figure>
<?php
        $columnCount++;

        if ((($columnCount % 4 == 0) && ($columnCount != 0)) || ($columnCount == count($images))) {
            echo '</div>';
        }
    endforeach;
?>
</div>

