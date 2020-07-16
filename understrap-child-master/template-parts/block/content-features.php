<?php
/**
 * Block Name: Features
 *
 * This is the template that displays the testimonial block.
 */

?>

<div class="features mt-5" style="background:<?php echo get_field('background_color');?>">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        </div>
        <div class="row">
            <?php
            if( have_rows('feature') ):
                while( have_rows('feature') ) : the_row();
                    $image = get_sub_field('features_image'); ?>
                    <div class="col-lg-6 d-flex">
                        <div class="featuresWrap">
                            <div class="testimonialWrap">
                                <h3><?php echo get_sub_field('features_title'); ?></h3>
                            </div>
                            <div class="imageWrap">
                                <p> <?php echo get_sub_field('features_text'); ?> </p>
                            </div>
                            <div class="featuresButtonWrap">
                                <a href="<?php $button = get_sub_field('features_button'); echo $button['url']; ?> "><button class="btn btn-success"> <?php echo $button['title']; ?>  </buttoin></a>
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