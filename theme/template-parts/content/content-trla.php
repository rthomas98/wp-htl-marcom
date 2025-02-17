<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_9')) : ?>
        <?php while (have_rows('header_9')) : the_row(); ?>
            <section id="relume" class="relative flex min-h-[100svh] flex-col">
                <?php 
                $image = get_sub_field('image');
                if ($image) : ?>
                    <div class="absolute inset-0 -z-10">
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>

                <div class="flex flex-1 items-end px-[5%]">
                    <div class="container mx-auto">
                        <div class="grid grid-rows-1 items-start gap-y-5 py-12 md:grid-cols-2 md:gap-x-12 md:gap-y-8 md:py-18 lg:gap-x-20 lg:gap-y-16 lg:py-20">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="text-5xl font-bold text-white md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

                            <div>
                                <?php if (get_sub_field('content')) : ?>
                                    <p class="text-base text-white md:text-md">
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

    <?php if (have_rows('layout_384')) : ?>
        <?php while (have_rows('layout_384')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_title'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('simple_cards')) : ?>
                        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8 lg:grid-cols-3">
                            <?php 
                            $index = 0;
                            while (have_rows('simple_cards')) : the_row(); 
                                $image = get_sub_field('image');
                            ?>
                                <div class="flex flex-col border border-border-primary last-of-type:grid last-of-type:auto-cols-fr last-of-type:grid-cols-1 last-of-type:sm:grid-cols-2 lg:last-of-type:col-span-2">
                                    <div class="block p-6 first-of-type:flex-1 sm:flex sm:flex-col sm:justify-center md:p-8">
                                        <div>
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-2 font-semibold">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p>
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>

                                        <?php
                                        $button_label = get_sub_field('button_label');
                                        $button_link = get_sub_field('button_link');
                                        if ($button_link && $button_label) : ?>
                                            <div class="mt-5 md:mt-6">
                                                <a href="<?php echo esc_url($button_link); ?>" 
                                                   class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                    <?php echo esc_html($button_label); ?>
                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($image) : ?>
                                        <div class="flex size-full flex-col items-center justify-center self-start">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="size-full object-cover" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php 
                                $index++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_10')) : ?>
        <?php while (have_rows('layout_10')) : the_row(); ?>
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
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 text-black md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" 
                                                       class="size-12 stroke-2"></i>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-lg font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-base">
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

                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="w-full object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_194')) : ?>
        <?php while (have_rows('layout_194')) : the_row(); ?>
            <section id="relume" class="bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div class="order-2 md:order-1">
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="w-full object-cover" />
                            </div>
                        <?php endif; ?>

                        <div class="order-1 md:order-2">
                            <?php if (get_sub_field('title')) : ?>
                                <h3 class="mb-5 text-4xl font-bold leading-[1.2] text-white md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_12')) : ?>
        <?php while (have_rows('layout_12')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
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
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 text-black md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" 
                                                       class="size-12 stroke-2"></i>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-lg font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-base">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="w-full object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_3')) : ?>
        <?php while (have_rows('faq_3')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[.75fr,1fr] lg:gap-x-20">
                    <div>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 md:mt-8">
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                ?>
                                    <?php if ($button_one_link && $button_one_label) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('faqs')) : ?>
                        <div class="divide-y divide-border-primary">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <details class="group">
                                    <summary class="flex w-full cursor-pointer items-center justify-between py-4 text-left font-semibold outline-none md:py-5 md:text-md">
                                        <?php the_sub_field('question'); ?>
                                        <i data-lucide="chevron-down" class="h-4 w-4 transform transition-transform duration-200 group-open:rotate-180"></i>
                                    </summary>
                                    <div class="pb-4 md:pb-6">
                                        <?php the_sub_field('answer'); ?>
                                    </div>
                                </details>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_7')) : ?>
        <?php while (have_rows('cta_7')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <?php 
                $background_image = get_sub_field('background_image');
                if ($background_image) : ?>
                    <div class="absolute inset-0 -z-10">
                        <img src="<?php echo esc_url($background_image['url']); ?>" 
                             alt="<?php echo esc_attr($background_image['alt']); ?>"
                             class="h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>

                <div class="container mx-auto grid w-full grid-cols-1 items-start justify-between gap-6 md:grid-cols-[1fr_max-content] md:gap-x-12 md:gap-y-8 lg:gap-x-20">
                    <div class="md:mr-12 lg:mr-0">
                        <div class="w-full max-w-lg">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-3 text-4xl font-bold leading-[1.2] text-white md:mb-4 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (have_rows('buttons')) : ?>
                        <div class="flex items-start justify-start gap-4">
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
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>