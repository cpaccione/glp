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
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');

?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 py-md-5">
                    <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">
                </div>
            </div>
        </div>


        <div class="container py-5">
            <div class="row gx-lg-5">
            <div class="col-md-6">
                <?php if(get_field('title') ): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if(get_field('body_one') ): ?>
                    <p><?php echo $body_one; ?></p>
                <?php endif; ?>

                <?php if(get_field('body_two') ): ?>
                    <p><?php echo $body_two; ?></p>
                <?php endif; ?>
            </div>

            <div class="col-md-6">
                <?php if(get_field('contact_title') ): ?>
                    <h2><?php echo $contact_title; ?></h2>
                <?php endif; ?>

                <?php if(get_field('contact_subtitle') ): ?>
                    <p><?php echo $contact_subtitle; ?></p>
                <?php endif; ?>

                <?php if(have_rows('contact_repeater') ): ?>

                    <div class="row">

                        <?php while(have_rows('contact_repeater') ): the_row();
                            
                            $photo = get_sub_field('contact_photo');
                            $name = get_sub_field('name');
                            $job_title = get_sub_field('job_title');
                            $phone = get_sub_field('phone');
                            $email = get_sub_field('email');
                        
                        ?>

                        <div class="col-lg-6">
                            <div class="contact-profile-wrap">
                                <img class="contact-photo py-5 mx-auto" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
                            </div>
                            <ul class="text-center text-md-start">
                                <li class="name"><?php echo $name; ?></li>
                                <li class="job-title"><?php echo $job_title; ?></li>
                                <li class="phone"><?php echo $phone; ?></li>
                                <li class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                        </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>