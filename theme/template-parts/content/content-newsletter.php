<?php
/**
 * Newsletter Section Template Part
 *
 * @package _htl
 */
?>

<?php if (have_rows('header_27')) : ?>
    <?php while (have_rows('header_27')) : the_row(); ?>
        <section id="newsletter" class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container mx-auto max-w-screen-xl">
                <div class="mx-auto mb-12 w-full overflow-x-auto text-center md:mb-18 lg:mb-20">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="mb-5 text-6xl font-bold text-cod-gray md:mb-6 md:text-6xl lg:text-7xl"><?php the_sub_field('title'); ?></h1>
                    <?php endif; ?>

                    <?php if (get_sub_field('content')) : ?>
                        <p class="md:text-md text-mine-shaft"><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>

                    <div class="mx-auto mt-6 w-full max-w-sm md:mt-8">
                        <?php echo do_shortcode('[fluentform id="4"]'); ?>

                        <?php if (get_sub_field('terms_conditions')) : ?>
                            <p class="text-xs text-mine-shaft">
                                <?php the_sub_field('terms_conditions'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php 
                $image = get_sub_field('image');
                if ($image) : ?>
                    <div>
                        <img 
                            src="<?php echo esc_url($image['url']); ?>" 
                            alt="<?php echo esc_attr($image['alt']); ?>" 
                            class="size-full object-cover"
                        />
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section id="latest-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
    <div class="container mx-auto max-w-screen-xl">
        <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
            <p class="mb-3 font-semibold text-mine-shaft md:mb-4">Latest News</p>
            <h2 class="mb-5 text-5xl font-bold text-cod-gray md:mb-6 md:text-6xl lg:text-7xl">Stay Updated</h2>
            <p class="md:text-md text-mine-shaft">Read our latest articles and stay informed about legal matters that matter to you.</p>
        </div>

        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8 lg:grid-cols-3">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? esc_html($categories[0]->name) : '';
                    ?>
                    <div class="flex flex-col border border-gallery">
                        <div class="flex w-full flex-col items-center justify-center self-start">
                            <?php if (has_post_thumbnail()) : ?>
                                <img 
                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" 
                                    alt="<?php echo get_the_title(); ?>"
                                    class="aspect-video w-full object-cover"
                                />
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-1 flex-col justify-center p-6 md:p-8">
                            <div>
                                <?php if ($category_name) : ?>
                                    <p class="mb-2 font-semibold text-cod-gray"><?php echo $category_name; ?></p>
                                <?php endif; ?>

                                <h3 class="mb-3 text-2xl font-bold text-cod-gray line-clamp-2 md:mb-4 md:text-2xl md:leading-[1.3] lg:text-3xl">
                                    <?php echo get_the_title(); ?>
                                </h3>

                                <p class="text-mine-shaft line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            </div>
                            <div class="mt-5 md:mt-6">
                                <a href="<?php echo get_permalink(); ?>" 
                                   class="inline-flex items-center gap-2 text-pippin hover:text-pippin">
                                    Read More
                                    <i data-lucide="chevron-right" class="size-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>