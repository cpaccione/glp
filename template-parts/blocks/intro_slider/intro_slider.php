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

        <div class="container">
            <div class="row">
                <div class="col-12 text-md-center">
                    <div class="slider-text">
                        <h2 class="pb-4 pt-5"><?php echo $title; ?></h2>
                        <p class="pb-4 pb-md-5"><?php echo $body; ?></p>

                        <?php 

                        $link = get_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="contact mb-5 d-lg-none" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                        <?php endif; ?>
                        
                    </div>
                </div>
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


