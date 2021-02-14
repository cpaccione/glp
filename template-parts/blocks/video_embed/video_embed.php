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

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="container">

            <div class="text_intro intro">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $body; ?></p>
            </div>
        
            <div class="iframe-container">
                <?php echo $embed; ?>
            </div>

        </div>
    </section>

    <style>
    
    #<?php echo $id; ?> {
        background-color: <?php echo $bgc; ?>;
    }

    #<?php echo $id; ?> h2 {
        color: <?php echo $tc; ?>;
    }
    
    </style>