<?php
/**
 * Layout239 Block Template.
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

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'htl-layout239';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

// Get ACF fields
$tagline = get_field('tagline') ?: 'Our Services';
$heading = get_field('heading') ?: 'Medium length section heading goes here';
$description = get_field('description') ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.';
$sections = get_field('sections') ?: array();
$buttons = get_field('buttons') ?: array();

// Default preview content
if ($is_preview && empty($sections)) {
    $sections = array(
        array(
            'heading' => 'Service 1',
            'description' => 'Description for service 1',
            'image' => array('url' => 'https://placehold.co/600x400', 'alt' => 'Service 1')
        ),
        array(
            'heading' => 'Service 2',
            'description' => 'Description for service 2',
            'image' => array('url' => 'https://placehold.co/600x400', 'alt' => 'Service 2')
        ),
        array(
            'heading' => 'Service 3',
            'description' => 'Description for service 3',
            'image' => array('url' => 'https://placehold.co/600x400', 'alt' => 'Service 3')
        )
    );
}
?>

<section<?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?> px-[5%] py-16 md:py-24 lg:py-28">
    <div class="container">
        <div class="flex flex-col items-center">
            <div class="mb-12 text-center md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg">
                    <p class="mb-3 font-semibold text-mine-shaft md:mb-4"><?php echo esc_html($tagline); ?></p>
                    <h2 class="mb-5 text-4xl font-bold text-mine-shaft md:mb-6 md:text-5xl lg:text-6xl"><?php echo esc_html($heading); ?></h2>
                    <p class="text-base text-mine-shaft md:text-lg"><?php echo esc_html($description); ?></p>
                </div>
            </div>

            <?php if ($sections) : ?>
            <div class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                <?php foreach ($sections as $section) : ?>
                    <div class="flex w-full flex-col items-center text-center">
                        <?php if (!empty($section['image'])) : ?>
                            <div class="mb-6 md:mb-8">
                                <img src="<?php echo esc_url($section['image']['url']); ?>"
                                     alt="<?php echo esc_attr($section['image']['alt']); ?>"
                                     class="w-full" />
                            </div>
                        <?php endif; ?>

                        <h3 class="mb-5 text-2xl font-bold text-mine-shaft md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                            <?php echo esc_html($section['heading']); ?>
                        </h3>
                        <p class="text-mine-shaft">
                            <?php echo esc_html($section['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ($buttons) : ?>
            <div class="mt-12 flex items-center gap-4 md:mt-18 lg:mt-20">
                <?php foreach ($buttons as $button) : ?>
                    <a href="<?php echo esc_url($button['link']); ?>" 
                       class="<?php echo $button['style'] === 'primary' ? 
                           'inline-flex items-center justify-center gap-3 rounded-md border-gallery bg-cod-gray px-5 py-2.5 text-white transition-colors hover:bg-mine-shaft' : 
                           'inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-white px-5 py-2.5 text-mine-shaft transition-colors hover:bg-gallery'; ?>">
                        <?php echo esc_html($button['title']); ?>
                        <i data-lucide="arrow-right" class="size-4"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
