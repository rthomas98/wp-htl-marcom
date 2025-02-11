<?php
/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content from.
 * @param   array $context The context provided to the block by the post or its parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = ' id="' . esc_attr( $block['anchor'] ) . '"';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'htl-hero';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

// Load values and assign defaults.
$title = get_field( 'title' ) ?: 'Your Title Here...';
$description = get_field( 'description' ) ?: 'Your description here...';
$background_image = get_field( 'background_image' );
$cta_text = get_field( 'cta_text' );
$cta_link = get_field( 'cta_link' );

// Background image handling
$bg_style = '';
if ( $background_image ) {
    $bg_style = ' style="background-image: url(' . esc_url( $background_image['url'] ) . ');"';
}
?>

<div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> relative min-h-[60vh] flex items-center justify-center bg-cover bg-center bg-no-repeat"<?php echo $bg_style; ?>>
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="container relative z-10 mx-auto px-4 py-16 text-center text-white">
        <?php if ( $title ) : ?>
            <h1 class="mb-6 text-4xl md:text-5xl lg:text-6xl font-bold"><?php echo esc_html( $title ); ?></h1>
        <?php endif; ?>

        <?php if ( $description ) : ?>
            <div class="mb-8 max-w-2xl mx-auto text-lg md:text-xl">
                <?php echo wp_kses_post( $description ); ?>
            </div>
        <?php endif; ?>

        <?php if ( $cta_text && $cta_link ) : ?>
            <a href="<?php echo esc_url( $cta_link ); ?>" class="inline-flex items-center px-6 py-3 text-lg font-semibold text-white bg-primary hover:bg-primary/90 transition-colors rounded-md">
                <?php echo esc_html( $cta_text ); ?>
                <?php echo _htl_icon( 'arrow-right', ['class' => 'ml-2', 'size' => 20] ); ?>
            </a>
        <?php endif; ?>
    </div>
</div>
