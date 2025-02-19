<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_page('legal-insights')) : ?>
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
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                $categories = get_the_category();
                                $author_id = get_the_author_meta('ID');
                                $read_time = get_field('read_time') ? get_field('read_time') : '5 min read';
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
                                        <h2 class="text-xl font-bold md:text-2xl"><?php the_title(); ?></h2>
                                    </a>

                                    <p class="text-gray-600"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                                    <div class="mt-6 flex items-center">
                                        <div class="mr-4 shrink-0">
                                            <?php echo get_avatar($author_id, 48, '', '', array('class' => 'size-12 min-h-12 min-w-12 rounded-full object-cover')); ?>
                                        </div>
                                        <div>
                                            <h6 class="text-sm font-semibold"><?php the_author(); ?></h6>
                                            <div class="flex items-center">
                                                <p class="text-sm"><?php echo get_the_date('j M Y'); ?></p>
                                                <span class="mx-2">•</span>
                                                <p class="text-sm"><?php echo esc_html($read_time); ?></p>
                                            </div>
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
            </div>
        </section>
    <?php else : ?>
        <header class="entry-header">
            <?php
            if ( is_sticky() && is_home() && ! is_paged() ) {
                printf( '<span>%s</span>', esc_html_x( 'Featured', 'post', '_htl' ) );
            }
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;
            ?>
        </header><!-- .entry-header -->

        <?php _htl_post_thumbnail(); ?>

        <div <?php _htl_content_class( 'entry-content' ); ?>>
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div>' . __( 'Pages:', '_htl' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php _htl_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-${ID} -->
