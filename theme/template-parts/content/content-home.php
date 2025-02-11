<?php
/**
 * Template part for displaying home page content
 *
 * @package _htl
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section id="relume" class="relative">
        <div class="px-[5%]">
            <div class="flex max-h-[60rem] min-h-svh items-center">
                <div class="container py-16 md:py-24 lg:py-28">
                    <div class="mx-auto max-w-lg text-center">
                        <h1 class="mb-5 text-6xl font-bold text-white md:mb-6 md:text-9xl lg:text-10xl">
                            Empowering Your Business Through Legal Excellence
                        </h1>
                        <p class="text-white md:text-md">
                            We provide comprehensive legal solutions to protect and grow your business, offering expert guidance every step of the way.
                        </p>
                        <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                            <a href="/contact" class="focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-border-primary bg-background-alternative text-white hover:bg-white hover:text-black px-6 py-3">
                                Contact Us
                            </a>
                            <a href="/about" class="focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white text-white hover:bg-white hover:text-black px-6 py-3">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 -z-10 overflow-hidden">
                    <div class="absolute inset-0 z-10 bg-black/50"></div>
                    <div class="grid w-full grid-cols-2 gap-x-4 px-4 md:grid-cols-3 lg:grid-cols-5">
                        <?php
                        $columns = 5;
                        $images_per_column = 8;
                        for ($col = 1; $col <= $columns; $col++) :
                            $mt_class = '';
                            $animation_class = '';
                            
                            switch ($col) {
                                case 1:
                                    $mt_class = '-mt-[20%]';
                                    $animation_class = 'animate-loop-vertically-top';
                                    break;
                                case 2:
                                    $mt_class = '-mt-[50%]';
                                    $animation_class = 'animate-loop-vertically-bottom';
                                    break;
                                case 3:
                                    $mt_class = '';
                                    $animation_class = 'animate-loop-vertically-top';
                                    break;
                                case 4:
                                    $mt_class = 'mt-[-30%]';
                                    $animation_class = 'animate-loop-vertically-bottom';
                                    break;
                                case 5:
                                    $mt_class = 'mt-[-20%]';
                                    $animation_class = 'animate-loop-vertically-top';
                                    break;
                            }
                        ?>
                            <div class="grid size-full columns-2 grid-cols-1 gap-4 self-center <?php echo $mt_class . ' ' . $animation_class; ?>">
                                <?php for ($i = 1; $i <= $images_per_column; $i++) : ?>
                                    <div class="grid size-full grid-cols-1 gap-4">
                                        <div class="relative w-full pt-[120%]">
                                            <?php 
                                            // Get random image from ACF gallery field if available
                                            $gallery_images = get_field('hero_gallery');
                                            if ($gallery_images && is_array($gallery_images)) {
                                                $random_image = $gallery_images[array_rand($gallery_images)];
                                                $image_url = $random_image['url'];
                                                $image_alt = $random_image['alt'] ?: 'Legal practice image';
                                            } else {
                                                $image_url = 'https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg';
                                                $image_alt = 'Legal practice image';
                                            }
                                            ?>
                                            <img class="absolute inset-0 size-full object-cover" 
                                                 src="<?php echo esc_url($image_url); ?>" 
                                                 alt="<?php echo esc_attr($image_alt); ?>" />
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (is_front_page()) : ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</article>