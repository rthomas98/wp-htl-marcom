<?php
/**
 * Latest Posts Section Template Part
 *
 * @package _htl
 */
?>

<?php if (have_rows('layout_395')) : ?>
    <?php while (have_rows('layout_395')) : the_row(); ?>
        <section id="latest-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container mx-auto max-w-screen-xl">
                <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
                    <?php if (get_sub_field('tagline')) : ?>
                        <p class="mb-3 font-semibold text-mine-shaft md:mb-4"><?php the_sub_field('tagline'); ?></p>
                    <?php endif; ?>

                    <?php if (get_sub_field('heading')) : ?>
                        <h2 class="mb-5 text-5xl font-bold text-cod-gray md:mb-6 md:text-7xl lg:text-8xl"><?php the_sub_field('heading'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('description')) : ?>
                        <p class="md:text-md text-mine-shaft"><?php the_sub_field('description'); ?></p>
                    <?php endif; ?>
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
                                            <p class="mb-2 font-semibold text-pippin"><?php echo $category_name; ?></p>
                                        <?php endif; ?>

                                        <h3 class="mb-3 text-2xl font-bold text-cod-gray md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                            <?php echo get_the_title(); ?>
                                        </h3>

                                        <p class="text-mine-shaft"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    </div>
                                    <div class="mt-5 md:mt-6">
                                        <a href="<?php echo get_permalink(); ?>" 
                                           class="inline-flex items-center gap-2 text-pippin hover:text-cod-gray">
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
    <?php endwhile; ?>
<?php endif; ?>
