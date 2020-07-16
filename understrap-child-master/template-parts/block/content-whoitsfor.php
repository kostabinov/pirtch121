<?php
/**
 * Block Name: Two Columns section
 *
 * This is the template that displays the testimonial block.
 */

?>

<div class="twoColumnSection mt-5" style="background:<?php echo get_field('background_color');?>">
    <div class="container">
        <div class="text-center">
            <h2><?php echo get_field('title'); ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-6 m-auto">
                <?php echo get_field('left_side'); ?>
            </div>
            <div class="col-lg-6">
                <?php $image = get_field('right_side'); ?>
                <img src="<?php echo $image['url'] ?>" class="img-responsive">
            </div>
        </div>
    </div>
</div>