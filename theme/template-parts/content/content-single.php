<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _htl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Blog Post Header Section -->
    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="mx-auto mb-12 flex w-full max-w-3xl flex-col items-start justify-start md:mb-16 lg:mb-20">
                <!-- Breadcrumbs -->
                <nav class="mb-6 flex w-full items-center">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="text-gray-600 hover:text-black">Insight</a>
                        </li>
                        <li class="text-gray-600">/</li>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category = $categories[0];
                        ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>" class="text-gray-600 hover:text-black">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ol>
                </nav>

                <!-- Post Title -->
                <h1 class="mb-6 text-3xl font-bold md:mb-8 md:text-4xl lg:mb-10 lg:text-5xl">
                    <?php the_title(); ?>
                </h1>

                <!-- Author and Social Share -->
                <div class="flex w-full flex-col items-start justify-between sm:flex-row sm:items-end">
                    <div class="rb-4 mb-4 flex items-center sm:mb-0">
                        <div class="mr-4 shrink-0">
                            <?php echo get_avatar(get_the_author_meta('ID'), 56, '', '', array('class' => 'size-14 min-h-14 min-w-14 rounded-full object-cover')); ?>
                        </div>
                        <div>
                            <h6 class="font-semibold"><?php the_author(); ?></h6>
                            <div class="mt-1 flex">
                                <p class="text-sm"><?php echo get_the_date('j M Y'); ?></p>
                                <span class="mx-2">•</span>
                                <p class="text-sm"><?php echo get_field('read_time') ? get_field('read_time') : '5 min read'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="rt-4 mt-4 grid grid-flow-col grid-cols-[max-content] items-start gap-2">
                        <?php
                        $share_url = get_permalink();
                        $share_title = get_the_title();
                        $share_text = $share_title . ' - ' . get_bloginfo('name');
                        $excerpt = get_the_excerpt();
                        $excerpt = $excerpt ? $excerpt : wp_trim_words(get_the_content(), 20);
                        ?>
                        <button onclick="copyToClipboard('<?php echo esc_url($share_url); ?>')"
                           class="rounded-[1.25rem] bg-gray-100 p-1 hover:bg-gray-200 transition-all" 
                           aria-label="Copy link"
                           id="copy-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        </button>
                        <button onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($share_url); ?>&title=<?php echo urlencode($share_title); ?>&summary=<?php echo urlencode($excerpt); ?>', 'linkedin-share', 'width=600,height=400')"
                           class="rounded-[1.25rem] bg-gray-100 p-1 hover:bg-gray-200 transition-all" 
                           aria-label="Share on LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </button>
                        <button onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo urlencode($share_text); ?>&url=<?php echo urlencode($share_url); ?>', 'twitter-share', 'width=550,height=400')"
                           class="rounded-[1.25rem] bg-gray-100 p-1 hover:bg-gray-200 transition-all" 
                           aria-label="Share on Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                        </button>
                        <button onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($share_url); ?>&quote=<?php echo urlencode($share_text); ?>', 'facebook-share', 'width=580,height=400')"
                           class="rounded-[1.25rem] bg-gray-100 p-1 hover:bg-gray-200 transition-all" 
                           aria-label="Share on Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </button>
                    </div>

                    <script>
                        function copyToClipboard(text) {
                            navigator.clipboard.writeText(text).then(function() {
                                const button = document.getElementById('copy-link');
                                button.classList.add('bg-black', 'text-white');
                                setTimeout(() => {
                                    button.classList.remove('bg-black', 'text-white');
                                }, 1000);
                            });
                        }
                    </script>
                </div>
            </div>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="mx-auto w-full overflow-hidden">
                    <?php the_post_thumbnail('full', array('class' => 'aspect-[2] size-full object-cover')); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Content Section -->
    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_0.5fr] lg:gap-x-20">
                <!-- Main Content -->
                <div class="prose mb-12 md:prose-md lg:prose-lg md:mb-20">
                    <?php the_content(); ?>

                    <!-- Post Navigation -->
                    <div class="not-prose mt-12 border-t border-gray-200 pt-8">
                        <nav class="flex justify-between">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post); ?>" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 size-5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                    <div>
                                        <span class="block text-sm text-gray-600">Previous</span>
                                        <span class="text-sm font-semibold group-hover:text-gray-600"><?php echo get_the_title($prev_post); ?></span>
                                    </div>
                                </a>
                            <?php endif; ?>

                            <?php if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post); ?>" class="group ml-auto flex items-center text-right">
                                    <div>
                                        <span class="block text-sm text-gray-600">Next</span>
                                        <span class="text-sm font-semibold group-hover:text-gray-600"><?php echo get_the_title($next_post); ?></span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 size-5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar Subscribe Form -->
                <div>
                    <div class="border border-gray-200 p-8 lg:sticky lg:top-20">
                        <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                            Subscribe to newsletter
                        </h6>
                        <p class="mb-3 md:mb-4">Subscribe to receive the latest blog posts to your inbox every week.</p>
                        <div class="mb-4">
                            <?php echo do_shortcode('[fluentform id="4"]'); ?>
                        </div>
                        <p class="text-xs">
                            By subscribing you agree to with our 
                            <a href="<?php echo get_privacy_policy_url(); ?>" class="underline hover:text-gray-600">Privacy Policy</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
