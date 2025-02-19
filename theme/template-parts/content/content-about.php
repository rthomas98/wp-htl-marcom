<?php
/**
 * Template part for displaying page content in about.php
 */
?>

<?php if (have_rows('header_118')) : ?>
    <?php while (have_rows('header_118')) : the_row(); ?>
        <section class="bg-white px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container">
                <div class="rb-12 mb-12 grid grid-cols-1 items-start gap-5 md:mb-18 md:grid-cols-2 md:gap-12 lg:mb-20 lg:gap-20">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="text-6xl font-bold text-[#0D0D0D] md:text-6xl lg:text-7xl"><?php the_sub_field('title'); ?></h1>
                    <?php endif; ?>
                    <div class="mx-[7.5%] flex flex-col justify-end md:mt-48">
                        <?php if (get_sub_field('content')) : ?>
                            <p class="text-[#0D0D0D]/90 md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                        <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                            <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                   class="inline-flex items-center rounded-lg bg-[#0D0D0D] px-6 py-3 text-center font-semibold text-white transition hover:bg-opacity-90">
                                    <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                </a>
                            <?php endif; ?>
                            <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                   class="inline-flex items-center rounded-lg border border-[#0D0D0D] px-6 py-3 text-center font-semibold text-[#0D0D0D] transition hover:bg-[#0D0D0D] hover:text-white">
                                    <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-[1fr_1.5fr_1fr] items-start gap-6 sm:gap-8">
                    <?php 
                    $image_one = get_sub_field('image_one');
                    if ($image_one) : ?>
                        <div class="mt-[70%] w-full">
                            <img src="<?php echo esc_url($image_one['url']); ?>" 
                                 alt="<?php echo esc_attr($image_one['alt']); ?>"
                                 class="aspect-square size-full object-cover" />
                        </div>
                    <?php endif; ?>

                    <?php 
                    $image_two = get_sub_field('image_two');
                    if ($image_two) : ?>
                        <div class="w-full">
                            <img src="<?php echo esc_url($image_two['url']); ?>" 
                                 alt="<?php echo esc_attr($image_two['alt']); ?>"
                                 class="aspect-[2/3] size-full object-cover" />
                        </div>
                    <?php endif; ?>

                    <?php 
                    $image_three = get_sub_field('image_three');
                    if ($image_three) : ?>
                        <div class="w-full">
                            <img src="<?php echo esc_url($image_three['url']); ?>" 
                                 alt="<?php echo esc_attr($image_three['alt']); ?>"
                                 class="aspect-[2/3] size-full object-cover" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('layout_3')) : ?>
    <?php while (have_rows('layout_3')) : the_row(); ?>
        <section class="bg-cod-gray px-[5%] py-16 text-white md:py-24 lg:py-28">
            <div class="container">
                <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                    <div>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="rb-5 mb-5 text-4xl font-bold text-white md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('content')) : ?>
                            <p class="text-white/90 md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="w-full object-cover" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('layout_249')) : ?>
    <?php while (have_rows('layout_249')) : the_row(); ?>
        <section class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container">
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-lg">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('description')) : ?>
                            <p class="md:text-md"><?php the_sub_field('description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                    <?php if (have_rows('cards')) : ?>
                        <?php while (have_rows('cards')) : the_row(); ?>
                            <div class="flex w-full flex-col">
                                <div class="mb-6 md:mb-8">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" 
                                             alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <?php if (get_sub_field('title')) : ?>
                                    <h3 class="mb-5 text-2xl font-bold md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if (get_sub_field('content')) : ?>
                                    <p><?php the_sub_field('content'); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="mt-12 flex items-center gap-4 md:mt-18 lg:mt-20">
                    <?php if (have_rows('buttons')) : ?>
                        <?php while (have_rows('buttons')) : the_row(); ?>
                            <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                   class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black hover:text-white">
                                    <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                </a>
                            <?php endif; ?>
                            <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                   class="inline-flex items-center gap-2 font-semibold text-black hover:opacity-80">
                                    <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                    <i data-lucide="chevron-right" class="size-4"></i>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('layout_254')) : ?>
    <?php while (have_rows('layout_254')) : the_row(); ?>
        <section class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container">
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="mx-auto max-w-lg text-center">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid place-items-center gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:grid-cols-[1fr_1.5fr_1fr] lg:gap-x-12">
                    <!-- Left Cards -->
                    <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                        <?php if (have_rows('cards')) : $card_count = 0; ?>
                            <?php while (have_rows('cards')) : the_row(); $card_count++; ?>
                                <?php if ($card_count <= 2) : ?>
                                    <div class="flex flex-col items-center text-center">
                                        <?php if (get_sub_field('icon')) : ?>
                                            <div class="mb-5 md:mb-6">
                                                <i data-lucide="<?php the_sub_field('icon'); ?>" class="size-12"></i>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl"><?php the_sub_field('title'); ?></h3>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('content')) : ?>
                                            <p><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Center Image -->
                    <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1">
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="h-auto w-full object-cover" />
                        <?php endif; ?>
                    </div>

                    <!-- Right Cards -->
                    <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                        <?php if (have_rows('cards')) : $card_count = 0; ?>
                            <?php while (have_rows('cards')) : the_row(); $card_count++; ?>
                                <?php if ($card_count > 2 && $card_count <= 4) : ?>
                                    <div class="flex flex-col items-center text-center">
                                        <?php if (get_sub_field('icon')) : ?>
                                            <div class="mb-5 md:mb-6">
                                                <i data-lucide="<?php the_sub_field('icon'); ?>" class="size-12"></i>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl"><?php the_sub_field('title'); ?></h3>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('content')) : ?>
                                            <p><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-4 md:mt-18 lg:mt-20">
                    <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                        <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black hover:text-white">
                            <?php echo esc_html(get_sub_field('button_one_label')); ?>
                        </a>
                        <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                           class="inline-flex items-center gap-2 font-semibold text-black hover:opacity-80">
                            <?php echo esc_html(get_sub_field('button_one_label')); ?>
                            <i data-lucide="chevron-right" class="size-4"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('layout_365')) : ?>
    <?php while (have_rows('layout_365')) : the_row(); ?>
        <section class="bg-cod-gray px-[5%] py-16 text-white md:py-24 lg:py-28">
            <div class="container">
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="mx-auto max-w-lg text-center">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('description')) : ?>
                            <p class="text-white/90 md:text-md"><?php the_sub_field('description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:gap-8">
                    <div class="grid grid-cols-1 gap-6 md:gap-8 lg:grid-cols-2">
                        <?php if (have_rows('card')) : $card_count = 0; ?>
                            <?php while (have_rows('card')) : the_row(); $card_count++; ?>
                                <?php if ($card_count <= 2) : ?>
                                    <div class="flex flex-col border border-white/10 md:grid md:grid-cols-2">
                                        <div class="block flex-col justify-center p-6 md:flex">
                                            <div>
                                                <?php if (get_sub_field('sub_title')) : ?>
                                                    <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h3 class="mb-2 text-xl font-bold md:text-2xl"><?php the_sub_field('title'); ?></h3>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p class="text-white/90"><?php the_sub_field('content'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mt-5 flex items-center gap-4 md:mt-6">
                                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold text-white hover:opacity-80">
                                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                        <i data-lucide="chevron-right" class="size-4"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <?php 
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($card_count === 3) : ?>
                                    <div class="flex flex-col items-stretch border border-white/10 lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-3">
                                        <div class="block flex-1 flex-col items-stretch justify-center p-6 md:flex md:p-8 lg:p-12">
                                            <div>
                                                <?php if (get_sub_field('sub_title')) : ?>
                                                    <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h3 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl"><?php the_sub_field('title'); ?></h3>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p class="text-white/90"><?php the_sub_field('content'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mt-6 flex items-center gap-4 md:mt-8">
                                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                       class="inline-flex items-center rounded-lg border border-white px-6 py-3 text-center font-semibold text-white transition hover:bg-white hover:text-[#0D0D0D]">
                                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold text-white hover:opacity-80">
                                                        <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                                        <i data-lucide="chevron-right" class="size-4"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div>
                                            <?php 
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('blog_56')) : ?>
    <?php while (have_rows('blog_56')) : the_row(); ?>
        <section class="px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container">
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-lg">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('description')) : ?>
                            <p class="md:text-md"><?php the_sub_field('description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="flex flex-col justify-start">
                    <div class="grid grid-cols-1 gap-x-12 gap-y-12 md:gap-y-16 lg:grid-cols-2">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $blog_posts = new WP_Query($args);
                        
                        if ($blog_posts->have_posts()) :
                            while ($blog_posts->have_posts()) : $blog_posts->the_post();
                                // Get the primary category
                                $categories = get_the_category();
                                $category = !empty($categories) ? $categories[0]->name : '';
                                
                                // Calculate read time (assuming 200 words per minute)
                                $content = get_the_content();
                                $word_count = str_word_count(strip_tags($content));
                                $read_time = ceil($word_count / 200);
                        ?>
                                <div class="grid gap-x-8 gap-y-6 md:grid-cols-[.75fr_1fr] md:gap-y-4">
                                    <a href="<?php the_permalink(); ?>" class="w-full">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>"
                                                 alt="<?php echo esc_attr(get_the_title()); ?>"
                                                 class="aspect-square w-full object-cover" />
                                        <?php else : ?>
                                            <div class="aspect-square w-full bg-white flex items-center justify-center">
                                                <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/02/cropped-htl.png')); ?>"
                                                     alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                                                     class="w-1/2 h-auto opacity-20" />
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                    <div class="flex h-full flex-col items-start justify-start">
                                        <div class="rb-4 mb-3 flex w-full items-center justify-start md:mb-4">
                                            <?php if ($category) : ?>
                                                <p class="mr-4 bg-background-secondary px-2 py-1 text-sm font-semibold">
                                                    <?php echo esc_html($category); ?>
                                                </p>
                                            <?php endif; ?>
                                            <p class="inline text-sm font-semibold"><?php echo esc_html($read_time); ?> min read</p>
                                        </div>
                                        <div class="flex w-full flex-col items-start justify-start">
                                            <a class="mb-2" href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl font-bold md:text-2xl"><?php the_title(); ?></h3>
                                            </a>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                            <a href="<?php the_permalink(); ?>" 
                                               class="mt-5 inline-flex items-center gap-2 font-semibold text-black hover:opacity-80 md:mt-6">
                                                Read more
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
                    <div class="flex items-center justify-end">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                           class="mt-10 inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black hover:text-white md:mt-14 lg:mt-16">
                            View all
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('cta_3')) : ?>
    <?php while (have_rows('cta_3')) : the_row(); ?>
        <section class="relative px-[5%] py-16 md:py-24 lg:py-28">
            <div class="container">
                <div class="w-full max-w-lg">
                    <?php if (get_sub_field('title')) : ?>
                        <h2 class="mb-5 text-3xl font-bold text-white md:mb-6 md:text-4xl lg:text-5xl">
                            <?php the_sub_field('title'); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if (get_sub_field('content')) : ?>
                        <p class="text-white/90 md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if (have_rows('buttons')) : ?>
                        <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                            <?php while (have_rows('buttons')) : the_row(); ?>
                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                       class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-black transition hover:bg-white/90">
                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                    <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                       class="inline-flex items-center rounded-lg border border-white px-6 py-3 text-center font-semibold text-white transition hover:bg-white hover:text-black">
                                        <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if (get_sub_field('background_image')) : ?>
                <div class="absolute inset-0 -z-10">
                    <img src="<?php echo esc_url(get_sub_field('background_image')); ?>" 
                         alt="<?php echo esc_attr(get_the_title()); ?>"
                         class="size-full object-cover" />
                    <div class="absolute inset-0 bg-[#0D0D0D]/50"></div>
                </div>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (WP_DEBUG) : ?>
    <?php // Debugging code here ?>
<?php endif; ?>