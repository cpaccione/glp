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
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$bg_image = get_field('background_image');
$bg_image_two = get_field('background_image_two');
//$image = get_field('overlay_image');
$logo = get_field('logo');
$logo_link = get_field('logo_link');
$contact = get_field('contact_link');

?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> relative">
        <div class="hero-slider">
            <div class="slide bg-cover bg-center bg-no-repeat h-96 md:h-670" style="background-image: url('<?php echo $bg_image; ?>');"></div>
            <div class="slide bg-cover bg-center bg-no-repeat h-96 md:h-670" style="background-image: url('<?php echo $bg_image_two; ?>');"></div>
        </div>
        <div class="hero__text absolute inset-0 max-w-4xl mx-auto" id="svg-animate"></div>
    </section>



