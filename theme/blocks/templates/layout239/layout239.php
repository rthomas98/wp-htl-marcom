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

// Create class attribute allowing for custom "className" values.
$class_name = 'htl-layout239';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

// Get field values
$tagline = get_field('tagline');
$heading = get_field('heading');
$description = get_field('description');
$sections = get_field('sections');
$buttons = get_field('buttons');

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

<div <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="text-center mb-16">
            <?php if ($tagline) : ?>
                <p class="text-primary-600 font-semibold mb-4"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>
            
            <?php if ($heading) : ?>
                <h2 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            
            <?php if ($description) : ?>
                <p class="text-gray-600 max-w-2xl mx-auto"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($sections) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($sections as $section) : ?>
                    <div class="flex flex-col items-center text-center">
                        <?php if (!empty($section['image'])) : ?>
                            <img 
                                src="<?php echo esc_url($section['image']['url']); ?>" 
                                alt="<?php echo esc_attr($section['image']['alt']); ?>"
                                class="w-full h-64 object-cover rounded-lg mb-6"
                            >
                        <?php endif; ?>
                        
                        <?php if (!empty($section['heading'])) : ?>
                            <h3 class="text-2xl font-bold mb-4"><?php echo esc_html($section['heading']); ?></h3>
                        <?php endif; ?>
                        
                        <?php if (!empty($section['description'])) : ?>
                            <p class="text-gray-600"><?php echo esc_html($section['description']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($buttons) : ?>
            <div class="flex flex-wrap justify-center gap-4 mt-12">
                <?php foreach ($buttons as $button) : ?>
                    <a 
                        href="<?php echo esc_url($button['link']); ?>"
                        class="<?php echo $button['style'] === 'primary' ? 'btn-primary' : 'btn-secondary'; ?>"
                    >
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
