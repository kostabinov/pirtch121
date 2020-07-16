<?php
/**
 * Block Name: Learn With Us
 *
 * This is the template that displays the testimonial block.
 */

?>

<div class="learnWithUs mt-5" style="background:<?php echo get_field('background_color');?>">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        </div>
        <div class="row">
            <?php
            if( have_rows('post') ):
                while( have_rows('post') ) : the_row();
                    $image = get_sub_field('featured_image'); ?>
                    <div class="col-lg-4 d-flex">
                        <div class="learnWithUsWrap text-center">
                            <div class="imageWrapLearn">
                                <img src="<?php echo $image['url']; ?>" class="img-responsive">
                            </div>
                            <div class="learnWithUsWrap">
                                <h3><?php echo get_sub_field('title'); ?></h3>
                            </div>
                            <div class="learnWithUsButtonWrap">
                                <a href="<?php $button = get_sub_field('button'); echo $button['url']; ?> "><button class="btn btn-success"> <?php echo $button['title']; ?>  </buttoin></a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
            endif; ?>
        </div>
    </div>
</div>