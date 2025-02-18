<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (have_rows('header_9')) : ?>
        <?php while (have_rows('header_9')) : the_row(); ?>
            <section id="relume" class="flex h-svh min-h-svh flex-col bg-cod-gray">
                <div class="relative flex-1">
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="absolute inset-0 h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    <?php endif; ?>
                </div>

                <div class="relative px-[5%]">
                    <div class="container mx-auto">
                        <div class="grid grid-rows-1 items-start gap-y-5 py-12 md:grid-cols-2 md:gap-x-12 md:gap-y-8 md:py-18 lg:gap-x-20 lg:gap-y-16 lg:py-20">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

                            <div>
                                <?php if (get_sub_field('content')) : ?>
                                    <p class="text-base text-white/90 md:text-md">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (have_rows('buttons')) : ?>
                                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                                        <?php while (have_rows('buttons')) : the_row(); 
                                            $button_one_label = get_sub_field('button_one_label');
                                            $button_one_link = get_sub_field('button_one_link');
                                            $button_two_label = get_sub_field('button_two_label');
                                            $button_two_link = get_sub_field('button_two_link');
                                        ?>
                                            <?php if ($button_one_link && $button_one_label) : ?>
                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                   class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-black transition hover:bg-white/90">
                                                    <?php echo esc_html($button_one_label); ?>
                                                </a>
                                            <?php endif; ?>

                                            <?php if ($button_two_link && $button_two_label) : ?>
                                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                                   class="inline-flex items-center rounded-lg border border-white px-6 py-3 text-center font-semibold text-white transition hover:bg-white/10">
                                                    <?php echo esc_html($button_two_label); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('layout_4')) : ?>
        <?php while (have_rows('layout_4')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold md:mb-4">
                                    <?php the_sub_field('sub_title'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p>
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                    <?php while (have_rows('buttons')) : the_row(); 
                                        $button_one_label = get_sub_field('button_one_label');
                                        $button_one_link = get_sub_field('button_one_link');
                                        $button_two_label = get_sub_field('button_two_label');
                                        $button_two_link = get_sub_field('button_two_link');
                                    ?>
                                        <?php if ($button_one_link && $button_one_label) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($button_two_link && $button_two_label) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
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


    <?php if (have_rows('layout_90')) : ?>
        <?php while (have_rows('layout_90')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-8 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20">
                        <?php if (get_sub_field('title')) : ?>
                            <h3 class="text-4xl font-bold leading-[1.2] md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="w-full object-cover" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('layout_197')) : ?>
        <?php while (have_rows('layout_197')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
                        <div class="order-2 md:order-1">
                            <?php 
                            $image = get_sub_field('image');
                            if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="w-full object-cover" />
                            <?php endif; ?>
                        </div>

                        <div class="order-1 md:order-2">
                            <?php if (get_sub_field('title')) : ?>
                                <h3 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p>
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('faq_5')) : ?>
        <?php while (have_rows('faq_5')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 max-w-lg md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-7xl lg:text-8xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('faqs')) : ?>
                        <div class="grid items-start justify-stretch gap-4">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <div class="border border-black/10 px-5 md:px-6">
                                    <details class="group">
                                        <summary class="flex cursor-pointer items-center justify-between py-4 md:py-5">
                                            <span class="text-base font-medium md:text-md">
                                                <?php the_sub_field('question'); ?>
                                            </span>
                                            <i data-lucide="plus" class="size-7 shrink-0 text-black transition-transform duration-300 group-open:rotate-45 md:size-8"></i>
                                        </summary>
                                        <div class="pb-4 md:pb-6">
                                            <p class="text-black/70">
                                                <?php the_sub_field('answer'); ?>
                                            </p>
                                        </div>
                                    </details>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mt-12 md:mt-18 lg:mt-20">
                        <h4 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                            Still have questions?
                        </h4>
                        <p class="md:text-md">
                            Contact us for more information about our services.
                        </p>
                        <div class="mt-6 md:mt-8">
                            <a href="/contact" class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('cta_13')) : ?>
        <?php while (have_rows('cta_13')) : the_row(); ?>
            <section id="relume" class="relative bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid grid-rows-1 items-start gap-y-5 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:gap-x-20 lg:gap-y-16">
                    <?php if (get_sub_field('title')) : ?>
                        <h2 class="text-5xl font-bold text-white md:text-5xl lg:text-6xl">
                            <?php the_sub_field('title'); ?>
                        </h2>
                    <?php endif; ?>

                    <div>
                        <?php if (get_sub_field('content')) : ?>
                            <p class="text-white/90 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                    $button_two_label = get_sub_field('button_two_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                ?>
                                    <?php if ($button_one_link && $button_one_label) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-black transition hover:bg-white/90">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($button_two_link && $button_two_label) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-white px-6 py-3 text-center font-semibold text-white transition hover:bg-white/10">
                                            <?php echo esc_html($button_two_label); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


</article>