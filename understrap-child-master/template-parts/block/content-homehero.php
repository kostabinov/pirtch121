<?php
/**
 * Block Name: Hero Section
 *
 * This is the template that displays the testimonial block.
 */

 $img = get_field('image');
 $button1 = get_field('button_1');
 $button2 = get_field('button_2');
?>

<div class="herosectionbg">
    <div class="container">
        <div class="text-center">
            <h1><?php echo get_field('title_hero_section'); ?> <span><?php echo get_field('title_second_color_word'); ?></span></h1>
            <h4><?php echo get_field('subtitle'); ?></h4>
            <?php if ($img) {?>
                <img src="<?php echo $img['url'] ?>" class="img-responsive">
            <?php } ?>
            <div class="row">
                <?php if ($button1) { ?>
                    <div class="col-lg-6">
                        <a href="<?php echo $button1['url']?>"><button class="btn btn-success"><?php print_r($button1['title']);?></button></a>
                    </div>
                <?php
                }?>
                <?php if ($button2) { ?>
                    <div class="col-lg-6">
                        <a href="<?php echo $button2['url']?>"><button class="btn btn-success"><?php print_r($button2['title']);?></button></a>
                    </div>
                <?php
                }?>
            </div>
        </div>
    </div>
</div>
