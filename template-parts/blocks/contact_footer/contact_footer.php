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
$id = 'contact-footer-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-footer';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$footer_logo = get_field('footer_logo');
$title = get_field('title');
$body_one = get_field('body_one');
$body_two = get_field('body_two');
$link = get_field('link');
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');

?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> py-5 bg-yellow">

        <div class="glp-container px-5 py-16">
            <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">
        </div>


        <div class="glp-container px-5">
            <div class="row grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-y-0 md:gap-x-12">
            <div class="col">
                <?php if(get_field('title') ): ?>
                    <h2 class="font-avant text-white text-3xl md:text-5xl pb-6"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if(get_field('body_one') ): ?>
                    <p class="text-mont text-white text-base md:text-xl pb-6 max-w-xl"><?php echo $body_one; ?></p>
                <?php endif; ?>

                <?php if(get_field('body_two') ): ?>
                    <p class="text-mont text-white text-base md:text-xl pb-6 max-w-xl"><?php echo $body_two; ?></p>
                <?php endif; ?>

                <?php 

                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="text-mont text-white text-base md:text-xl hover:text-gray-dark underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                <?php endif; ?>
            </div>

            <div class="col">
                <?php if(get_field('contact_title') ): ?>
                    <h2 class="font-avant text-white text-3xl md:text-5xl pb-6"><?php echo $contact_title; ?></h2>
                <?php endif; ?>

                <?php if(get_field('contact_subtitle') ): ?>
                    <p class="text-mont text-white text-base md:text-xl pb-6 max-w-xl"><?php echo $contact_subtitle; ?></p>
                <?php endif; ?>

                <?php if(have_rows('contact_repeater') ): ?>

                    <div class="row grid md:grid-cols-2">

                        <?php while(have_rows('contact_repeater') ): the_row();
                            
                            $photo = get_sub_field('contact_photo');
                            $name = get_sub_field('name');
                            $job_title = get_sub_field('job_title');
                            $phone = get_sub_field('phone');
                            $email = get_sub_field('email');
                        
                        ?>

                        <div class="col">
                            <div class="contact-profile-wrap w-48 mx-auto md:mx-0">
                                <img class="contact-photo py-5 mx-auto md:mx-0" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
                            </div>
                            <ul class="text-center md:text-left font-mont text-white">
                                <li class="name text-xl font-avant"><?php echo $name; ?></li>
                                <li class="job-title text-base"><?php echo $job_title; ?></li>
                                <li class="phone text-base"><?php echo $phone; ?></li>
                                <li class="email text-base"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                        </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>