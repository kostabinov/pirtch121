<?php
/**
 * Block Name: Slider
 *
 * This is the template that displays the testimonial block.
 */

?>
<div class="conceptSteps mt-5" style="background:<?php echo get_field('background_color');?>">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        </div>
        <div class="multiple-items">
            <?php
            if( have_rows('testimonial') ):
                while( have_rows('testimonial') ) : the_row();
                    $image = get_sub_field('user_image'); ?>
                    <div class="col-lg-12">
                        <div class="testimonialWrap">
                            <p><?php echo get_sub_field('testimonial_text'); ?></p>
                        </div>
                        <div class="">
                            <img src="<?php echo $image['url']; ?>" class="img-responsive">
                            <p><?php echo get_sub_field('user_full_name'); ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
            endif; ?>
        </div>
    </div>
</div>


<script>
jQuery(document).ready(function($){
    $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
    });
});
</script>