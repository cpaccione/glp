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
//$image = get_field('overlay_image');
$logo = get_field('logo');
$logo_link = get_field('logo_link');
$contact = get_field('contact_link');

?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image: url('<?php echo $bg_image; ?>');">
        <div class="hero__container">

            <?php 

                $logo_link = get_field('logo_link');
            
                if( $logo_link ): 
                    $logo_link_url = $logo_link['url'];
                    $logo_link_target = $logo_link['target'] ? $logo_link['target'] : '_self';
                ?>

                <a href="<?php echo esc_url( $logo_link_url ); ?>" target="<?php echo esc_attr( $logo_link_target ); ?>"><img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>

            <?php endif; ?>


            <?php 

                $contact = get_field('contact_link');

                if( $contact ): 
                    $contact_url = $contact['url'];
                    $contact_title = $contact['title'];
                    $contact_target = $contact['target'] ? $contact['target'] : '_self';
                ?>

                <a class="contact d-none d-lg-block" href="<?php echo esc_url( $contact_url ); ?>" target="<?php echo esc_attr( $contact_target ); ?>"><?php echo esc_html( $contact_title ); ?></a>

            <?php endif; ?>

            <div class="hero__text" id="svg-animate"></div>

        </div> 
    </section>



