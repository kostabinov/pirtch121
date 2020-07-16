<?php
/**
 * Block Name: Our Results
 *
 * This is the template that displays the testimonial block.
 */
$button = get_field('button');
$leftiSideImage = get_field('left_side_image');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="titleWraperResults">
                <h1><?php echo the_field('title'); ?></h1>
                <h2><?php echo the_field('sub_title'); ?></h2>
                <?php echo the_field('text'); ?>
                <a href="<?php echo $button['url']; ?>"> <button class="btn btn-success"><?php echo $button['title']; ?> </button></a>
            </div>
        </div>
        <div class="col-lg-6" style="background: url(<?php echo $leftiSideImage['url']; ?>);">

        </div>
    </div>
</div>