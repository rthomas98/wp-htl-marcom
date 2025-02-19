<?php
/**
 * The main template file
 *
 * @package _htl
 */

get_header();
?>

<section id="primary">
    <main id="main">
        <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container mx-auto">
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="mx-auto w-full max-w-lg text-center">
                        <p class="mb-3 font-semibold md:mb-4">Legal Insights</p>
                        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-6xl lg:text-7xl">Our Blog</h1>
                        <p class="md:text-md">Stay informed with the latest legal updates and insights from our experienced team.</p>
                    </div>
                </div>

                <div class="flex flex-col justify-start">
                    <div class="no-scrollbar mb-12 ml-[-5vw] flex w-screen items-center justify-start overflow-scroll pl-[5vw] md:mb-16 md:ml-0 md:w-full md:justify-center md:overflow-hidden md:pl-0">
                        <a href="<?php echo get_post_type_archive_link('post'); ?>" 
                           class="mr-4 rounded-lg border border-black px-4 py-2 font-semibold transition-colors hover:bg-black hover:text-white">
                            View All
                        </a>
                        
                        <?php
                        $categories = get_categories();
                        foreach($categories as $category) : ?>
                            <a href="<?php echo get_category_link($category->term_id); ?>" 
                               class="mr-4 rounded-lg px-4 py-2 font-semibold text-gray-600 transition-colors hover:text-black">
                                <?php echo $category->name; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                $categories = get_the_category();
                                $author_id = get_the_author_meta('ID');
                        ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="mb-6 inline-block w-full max-w-full">
                                        <div class="w-full overflow-hidden">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large', array('class' => 'aspect-[3/2] size-full object-cover')); ?>
                                            <?php endif; ?>
                                        </div>
                                    </a>

                                    <?php if (!empty($categories)) : ?>
                                        <a href="<?php echo get_category_link($categories[0]->term_id); ?>" 
                                           class="mb-2 mr-4 inline-block max-w-full text-sm font-semibold">
                                            <?php echo $categories[0]->name; ?>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>" class="mb-2 block max-w-full">
                                        <h2 class="text-xl font-bold line-clamp-2 md:text-2xl"><?php the_title(); ?></h2>
                                    </a>

                                    <p class="text-gray-600 line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                                    <div class="mt-6 flex items-center">
                                        <div class="mr-4 shrink-0">
                                            <?php echo get_avatar($author_id, 48, '', '', array('class' => 'size-12 min-h-12 min-w-12 rounded-full object-cover')); ?>
                                        </div>
                                        <div>
                                            <h6 class="text-sm font-semibold"><?php the_author(); ?></h6>
                                            <div class="flex items-center">
                                                <p class="text-sm"><?php echo get_the_date('j M Y'); ?></p>
                                                <span class="mx-2">•</span>
                                                <?php
                                                // Calculate read time based on content length (200 words per minute)
                                                $content = get_the_content();
                                                $word_count = str_word_count(strip_tags($content));
                                                $read_time = ceil($word_count / 200) . ' min read';
                                                ?>
                                                <p class="text-sm"><?php echo esc_html($read_time); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;

                            // Previous/next page navigation.
                            echo '<div class="mt-12 flex justify-center md:mt-16">';
                            _htl_custom_pagination();
                            echo '</div>';

                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</section>

<?php
get_footer();
