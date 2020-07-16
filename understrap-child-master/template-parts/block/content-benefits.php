<?php
/**
 * Block Name: Benefits
 *
 * This is the template that displays the testimonial block.
 */

?>
<div class="benefits mt-5">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        </div>
        <div class="row">
            <?php
            if( have_rows('benefit') ):
                while( have_rows('benefit') ) : the_row();
                    $image = get_sub_field('benefit_image'); ?>
                    <div class="col-lg-4 d-flex">
                        <div class="benefitsWrap" style="background:<?php echo get_sub_field('benefit_background');?>">
                            <div class="testimonialWrap">
                                <h3><?php echo get_sub_field('benefit_ttitle'); ?></h3>
                            </div>
                            <div class="imageWrap">
                                <img src="<?php echo $image['url']; ?>" class="img-responsive">
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