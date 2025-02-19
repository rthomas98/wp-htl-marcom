<?php
/**
 * Template part for displaying related posts
 */

// Get current post's categories and tags
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);
$tags = get_the_tags($current_post_id);

// Prepare tax query
$tax_query = array('relation' => 'OR');
if ($categories) {
    $category_ids = array();
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }
    $tax_query[] = array(
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $category_ids
    );
}
if ($tags) {
    $tag_ids = array();
    foreach ($tags as $tag) {
        $tag_ids[] = $tag->term_id;
    }
    $tax_query[] = array(
        'taxonomy' => 'post_tag',
        'field' => 'term_id',
        'terms' => $tag_ids
    );
}

// Query related posts
$related_posts = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'post__not_in' => array($current_post_id),
    'tax_query' => $tax_query,
    'orderby' => 'rand'
));

if ($related_posts->have_posts()) : ?>
    <section id="related-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="mb-12 grid grid-cols-1 items-start justify-start gap-y-8 md:mb-18 md:grid-cols-[1fr_max-content] md:items-end md:justify-between md:gap-x-12 md:gap-y-4 lg:mb-20 lg:gap-x-20">
                <div class="md:mr-12 lg:mr-0">
                    <div class="w-full max-w-lg">
                        <p class="mb-3 font-semibold md:mb-4">Related Posts</p>
                        <h2 class="mb-3 text-3xl font-bold md:mb-4 md:text-4xl lg:text-5xl">More Articles You Might Like</h2>
                        <p class="md:text-md">Discover more insights and information related to this topic.</p>
                    </div>
                </div>
                <div class="hidden md:flex md:justify-end">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
                       class="inline-flex items-center justify-center rounded-lg border border-black bg-transparent px-6 py-3 text-center text-sm font-semibold text-black transition-colors hover:bg-black hover:text-white">
                        View all posts
                    </a>
                </div>
            </div>

            <div class="grid auto-cols-fr grid-cols-1 items-start gap-12 md:gap-y-16 lg:grid-cols-2">
                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); 
                    // Get first category
                    $categories = get_the_category();
                    $category_name = $categories ? $categories[0]->name : '';
                    
                    // Calculate read time
                    $content = get_the_content();
                    $word_count = str_word_count(strip_tags($content));
                    $read_time = ceil($word_count / 200); // Assuming 200 words per minute
                ?>
                    <div>
                        <div class="flex flex-col items-start gap-x-8 gap-y-6 md:flex-row md:gap-y-4">
                            <a href="<?php the_permalink(); ?>" class="w-full flex-shrink-0 flex-grow basis-2/5 overflow-hidden">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" 
                                         alt="<?php the_title_attribute(); ?>" 
                                         class="aspect-square size-full object-cover">
                                <?php endif; ?>
                            </a>
                            <div class="flex w-full flex-col justify-center">
                                <div class="mb-3 flex w-full items-center justify-start md:mb-4">
                                    <?php if ($category_name) : ?>
                                        <p class="mr-4 bg-gray-100 px-2 py-1 text-sm font-semibold">
                                            <?php echo esc_html($category_name); ?>
                                        </p>
                                    <?php endif; ?>
                                    <p class="text-sm font-semibold"><?php echo esc_html($read_time); ?> min read</p>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="mb-2 hover:text-gray-600">
                                    <h3 class="text-xl font-bold md:text-2xl"><?php the_title(); ?></h3>
                                </a>
                                <p class="line-clamp-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <div class="mt-5 md:mt-6">
                                    <a href="<?php the_permalink(); ?>" 
                                       class="inline-flex items-center gap-1 text-sm font-semibold hover:text-gray-600">
                                        Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4">
                                            <path d="m9 18 6-6-6-6"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="mt-12 flex justify-end md:hidden">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
                   class="inline-flex items-center justify-center rounded-lg border border-black bg-transparent px-6 py-3 text-center text-sm font-semibold text-black transition-colors hover:bg-black hover:text-white">
                    View all posts
                </a>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata(); ?>
