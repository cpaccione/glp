<?php

/**
 * Slider Column Right
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'intro-text-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'intro-text';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

        <div class="glp-container px-5">
            <div class="slider-text py-16 md:text-center">
                <h2 class="text-gray-dark text-3xl md:text-5xl max-w-6xl mx-auto font-avant pb-6"><?php echo $title; ?></h2>
                <p class="text-gray text-mont text-base md:text-xl"><?php echo $body; ?></p>

                <?php 

                $link = get_field('link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="font-avant text-gray-dark border-2 py-2 px-4 mt-6 inline-block uppercase border-gray-dark hover:bg-gray-dark hover:text-white md:hidden" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                <?php endif; ?>
                
            </div>
        </div>

        <div class="intro-slider-container">
            <div class="intro-slider">
                            
                <?php if( have_rows('intro_slider') ): ?>

                        <?php while( have_rows('intro_slider') ): the_row();
                        
                            $url = get_sub_field('slider_image');
                        
                        ?>

                            <div class="intro-slider__slide" style="background-image: url('<?php echo $url; ?>');"></div>

                        <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    
</section>


