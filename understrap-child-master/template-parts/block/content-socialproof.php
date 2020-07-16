<?php
/**
 * Block Name: Social Proof
 *
 * This is the template that displays the testimonial block.
 */

?>

<div class="container mt-5">
    <div class="text-center">
        <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
    </div>
    <div class="row">
        <?php
        if( have_rows('logos') ):
            while( have_rows('logos') ) : the_row();
                $sub_value = get_sub_field('image'); ?>
                <div class="col-lg-2 m-auto">
                    <img src="<?php echo $sub_value['url']; ?>" class="img-responsive">
                </div>
            <?php
            endwhile;
        else :
        endif; ?>
    </div>
</div>