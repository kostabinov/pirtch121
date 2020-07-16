<?php
/**
 * Block Name: 3 Columns
 *
 * This is the template that displays the testimonial block.
 */
$button = get_field('button');
$leftiSideImage = get_field('left_side_image');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="wrapp1">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo get_field('orange_1'); ?></p>
                    </div>
                    <div class="col-lg-6">
                        <p><?php echo get_field('right_side_1'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="wrapp1">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo get_field('orange_2'); ?></p>
                    </div>
                    <div class="col-lg-6">
                        <p><?php echo get_field('right_side_2'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="wrapp1">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo get_field('orange_3'); ?></p>
                    </div>
                    <div class="col-lg-6">
                        <p><?php echo get_field('right_side_3'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>