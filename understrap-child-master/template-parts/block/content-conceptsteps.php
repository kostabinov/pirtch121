<?php
/**
 * Block Name: Concept Steps
 *
 * This is the template that displays the testimonial block.
 */

?>
<div class="conceptSteps mt-5" style="background:<?php echo get_field('background_color');?>">
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-5"><?php echo get_field('title'); ?></h2>
        </div>
        <?php
        $counter = 1;
        if( have_rows('rows') ):
            while( have_rows('rows') ) : the_row();
                $image = get_sub_field('right_image'); ?>
                <div class="row">
                    <div class="col-lg-4 m-auto leftBoxWrapClick">
                        <div class="leftBoxWrap">
                            <p class="clickHandler" target="divID<?php echo $counter; ?>"><?php echo get_sub_field('left_box'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="backgroundColor1">
                            <div id="divID<?php echo $counter; ?>" class="backgroundDynamic" background-image="<?php echo $image['url']; ?>" style="background: url(<?php echo $image['url']; ?>)">
                                <div class="textWrap" style="z-index: -1;" text-area="divID<?php echo $counter; ?>">
                                    <div class="row">
                                        <div class="col-lg-4 m-auto">
                                            <p><?php echo get_sub_field('right_image_left_section_text_1'); ?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p><?php echo get_sub_field('right_image_right_section_text_1'); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 m-auto">
                                            <p><?php echo get_sub_field('right_image_left_section_text_2'); ?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p><?php echo get_sub_field('right_image_right_section_text_2'); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 m-auto">
                                            <p><?php echo get_sub_field('right_image_left_section_text_3'); ?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p><?php echo get_sub_field('right_image_right_section_text_3'); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 m-auto">
                                            <p><?php echo get_sub_field('right_image_left_section_text_4'); ?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p><?php echo get_sub_field('right_image_right_section_text_4'); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 m-auto">
                                            <p><?php echo get_sub_field('right_image_left_section_text_5'); ?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p><?php echo get_sub_field('right_image_right_section_text_5'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            $counter++;
            endwhile;
        else :
        endif; ?>
    </div>
</div>

<script>
jQuery(document).ready(function($){
    
    var elementHeight = $('.backgroundColor1').height();
    $('.backgroundDynamic').css('height', elementHeight);
    $('.textWrap').hide();

    $( ".clickHandler" ).click(function() {
        
        var targetID = $(this).attr('target');
        console.log(targetID);
        $(targetID).removeAttr('style');
        var divBackground = $('#'+targetID).attr('background-image');
        $('#'+targetID).css('height', elementHeight);
        $('#'+targetID).css('background', 'linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('+divBackground+')');
        $("[text-area='"+targetID+"']").show();
    });
});
</script>