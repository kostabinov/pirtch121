<?php
/**
 * Block Name: Two Section WYSIWYG
 *
 * This is the template that displays the testimonial block.
 */

?>

<div class="bg" style="background: <?php echo get_field('background_color'); ?>;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="titleWraperResults">
                    <?php echo get_field('text_left'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo get_field('text_right'); ?>
            </div>
        </div>
    </div>
</div>