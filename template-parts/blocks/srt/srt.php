<?php

/**
 * SRT - Slider Right Text Block
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'srt-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'srt';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$body = get_field('body');


?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> py-12">

        <div class="glp-container px-5">
            <div class="row grid lg:grid-flow-col grid-cols-1 lg:grid-cols-2 lg:gap-x-16">
            <div class="col lg:col-start-2 flex self-center">
                <div class="wrap pb-8 lg:pb-0 lg:pl-16">
                <h2 class="pb-4 font-avant text-gray-dark text-3xl lg:text-5xl"><?php echo $title; ?></h2>
                <p class="text-gray text-base lg:text-xl"><?php echo $body; ?></p>
                </div>
            </div>

            <div class="col lg:col-start-1">
                <div class="right">
                    <div class="slider-left">
                        
                        <?php if( have_rows('slider') ): ?>



                                <?php while( have_rows('slider') ): the_row();
                                
                                    $url = get_sub_field('slider_image');
                                
                                ?>

                                    <div class="slider-left__slide" style="background-image: url('<?php echo $url; ?>');"></div>

                                <?php endwhile; ?>

              

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            </div>
        </div>

</section>


