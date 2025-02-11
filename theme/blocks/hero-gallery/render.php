<?php
/**
 * Hero Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content from.
 * @param   array $context The context provided to the block by the post or its parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = ' id="' . esc_attr($block['anchor']) . '"';
}

// Get ACF fields
$heading = get_field('heading') ?: 'Empowering Your Business Through Legal Excellence';
$description = get_field('description') ?: 'We provide comprehensive legal solutions to protect and grow your business, offering expert guidance every step of the way.';
$button_1_text = get_field('button_1_text') ?: 'Schedule A Consultation';
$button_1_link = get_field('button_1_link') ?: 'http://localhost:10018/contact/';
$button_2_text = get_field('button_2_text') ?: 'Learn More';
$button_2_link = get_field('button_2_link') ?: 'http://localhost:10018/about-me/';
$gallery_images = get_field('gallery_images');

// Ensure we have images to work with
if (!$gallery_images || !is_array($gallery_images)) {
    $gallery_images = array(
        array(
            'url' => 'https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg',
            'alt' => 'Legal practice image'
        )
    );
}

// Split images into two parts
$total_images = count($gallery_images);
$half_point = ceil($total_images / 2);
$images_part_one = array_slice($gallery_images, 0, $half_point);
$images_part_two = array_slice($gallery_images, $half_point);

// Define column styles exactly as in the React component
$image_columns = array(
    array('className' => '-mt-[20%] animate-loop-vertically-top'),
    array('className' => '-mt-[50%] animate-loop-vertically-bottom'),
    array('className' => 'animate-loop-vertically-top'),
    array('className' => 'mt-[-30%] animate-loop-vertically-bottom'),
    array('className' => 'mt-[-20%] animate-loop-vertically-top')
);

?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gallery = document.querySelector('.hero-gallery');
        if (!gallery) return;

        const images = Array.from(gallery.querySelectorAll('img'));
        let loadedCount = 0;

        const markAsLoaded = () => {
            loadedCount++;
            if (loadedCount >= images.length) {
                requestAnimationFrame(() => {
                    gallery.classList.add('gallery-loaded');
                });
            }
        };

        images.forEach(img => {
            if (img.complete) {
                markAsLoaded();
            } else {
                img.onload = markAsLoaded;
                img.onerror = markAsLoaded;
            }
        });

        // Fallback in case some images fail to load
        setTimeout(() => {
            if (!gallery.classList.contains('gallery-loaded')) {
                gallery.classList.add('gallery-loaded');
            }
        }, 3000);
    });
</script>

<section<?php echo $anchor; ?> class="relative -mt-[var(--header-height,0px)]">
    <div class="px-[5%]">
        <div class="flex max-h-[60rem] min-h-svh items-center">
            <div class="container py-16 md:py-24 lg:py-28">
                <div class="mx-auto max-w-lg text-center">
                    <h1 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:mb-6 md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-6xl">
                        <?php echo esc_html($heading); ?>
                    </h1>
                    <p class="text-base text-white sm:text-lg md:text-xl">
                        <?php echo esc_html($description); ?>
                    </p>
                    <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                        <a href="<?php echo esc_url($button_1_link); ?>" 
                           class="inline-flex items-center justify-center gap-3 rounded-md border-gallery bg-white px-5 py-2.5 text-mine-shaft transition-colors hover:bg-gallery">
                            <?php echo esc_html($button_1_text); ?>
                            <i data-lucide="arrow-right" class="size-4"></i>
                        </a>
                        <a href="<?php echo esc_url($button_2_link); ?>" 
                           class="inline-flex items-center justify-center gap-3 rounded-md border-gallery bg-cod-gray px-5 py-2.5 text-white transition-colors hover:bg-mine-shaft">
                            <?php echo esc_html($button_2_text); ?>
                            <i data-lucide="arrow-right" class="size-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <div class="absolute inset-0 z-10 bg-black/50"></div>
                <div class="hero-gallery gallery-preload grid w-full grid-cols-2 gap-x-4 px-4 md:grid-cols-3 lg:grid-cols-5">
                    <?php foreach ($image_columns as $column) : ?>
                        <div class="grid size-full columns-2 grid-cols-1 gap-4 self-center <?php echo esc_attr($column['className']); ?>">
                            <?php foreach ($images_part_one as $image) : ?>
                                <div class="grid size-full grid-cols-1 gap-4">
                                    <div class="relative w-full pt-[120%]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             loading="eager" />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php foreach ($images_part_two as $image) : ?>
                                <div class="grid size-full grid-cols-1 gap-4">
                                    <div class="relative w-full pt-[120%]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             loading="eager" />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
