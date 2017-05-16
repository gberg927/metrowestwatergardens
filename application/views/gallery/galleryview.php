<a href="<? echo base_url() . 'gallery/individual/' . url_title($title); ?>"><h3 class="service-title"><? echo ucwords($title); ?></h3></a>
<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
    <div class="row">
        <div class="offset-md-2 col-md-12">
            <div class="row">
                <?php foreach ($images as $image):?>
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo base_url() . "/images/gallery/" . $title . "/" . $image['filename'];?>" itemprop="contentUrl" data-size="<?php echo $image['width'] . 'x' . $image['height'] ?>" class="col-sm-3">
                            <img src="<?php echo base_url() . "/images/gallery/" . $title . "/" . $image['filename'];?>" itemprop="thumbnail" alt="<?php echo $image['title'];?>" class="img-responsive"/>
                        </a>
                    </figure>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>