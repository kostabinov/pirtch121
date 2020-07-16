<?php
/**
 * Block Name: Results
 *
 * This is the template that displays the testimonial block.
 */

 $button1 = get_field('button_1');
?>

<div class="container mt-5">
    <div class="text-center">
        <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        <p><?php echo get_field('subtitle'); ?></p>
    </div>
    <div class="row">
        <?php
        if( have_rows('result_row') ):
            while( have_rows('result_row') ) : the_row();
                $left_side = get_sub_field('left_side');
                $right_side = get_sub_field('right_side');
                $sub_value2 = get_sub_field('client_image'); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <?php echo $left_side['left_side_text']; ?>
                        </div>
                        <a href="<?php echo $left_side['button']['url']?>"><button class="btn btn-success"><?php print_r($left_side['button']['title']);?></button></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="leftSideWrap">
                            <div class="leftSideImageWrap">
                                <img src="<?php echo $right_side['image']['url']; ?>" class="img-responsive">
                            </div>
                            <div class="leftSideTextWrap">
                                <p><?php echo $right_side['testimonial_text']; ?></p>
                            </div>
                            <div class="leftSideImageClientWrap d-flex">
                                <img src="<?php echo $right_side['client_image']['url']; ?>" class="img-responsive">
                                <p><?php echo $right_side['client_role']; ?> <br><span><?php echo $right_side['client_full_name']; ?></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        else :
        endif; ?>
    </div>
</div>