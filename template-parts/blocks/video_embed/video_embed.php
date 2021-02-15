<?php

/**
 * Slider
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'video-embed-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'video-embed';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title');
$body = get_field('body');
$embed = get_field('video_embed');
$bgc = get_field('background_color');
$tc = get_field('title_text_color');
$bc = get_field('body_text_color');


?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> py-16">
        <div class="glp-container px-5">

            <div class="text_intro intro md:text-center">
                <h2 class="text-white text-3xl md:text-5xl md:max-w-lg mx-auto font-avant pb-6"><?php echo $title; ?></h2>
                <p class="text-white font-mont mx-auto max-w-2xl pb-12"><?php echo $body; ?></p>
            </div>
        </div>

        <div class="glp-container">
            <div class="w-full md:w-3/4 mx-auto">
                <div class="iframe-container">
                    <?php echo $embed; ?>
                </div>
            </div>
        </div>

    </section>

    <style>
    
    #<?php echo $id; ?> {
        background-color: <?php echo $bgc; ?>;
    }

    #<?php echo $id; ?> h2 {
        color: <?php echo $tc; ?> !important;
    }

    #<?php echo $id; ?> p {
        color: <?php echo $bc; ?> !important;
    }
    
    </style>