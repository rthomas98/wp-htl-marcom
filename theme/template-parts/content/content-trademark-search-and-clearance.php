<?php
/**
 * Template part for displaying trademark search and clearance content
 */
?>

<article class="trademark-search-and-clearance">
    <?php if (have_rows('header_36')) : ?>
        <?php while (have_rows('header_36')) : the_row(); ?>
            <section class="grid grid-cols-1 items-center gap-8 pt-16 md:gap-12 md:pt-24 lg:grid-cols-2 lg:gap-16 lg:pt-0">
                <div class="mx-[5%] max-w-[640px] md:justify-self-start lg:ml-[5vw] lg:mr-20 lg:justify-self-end">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                            <?php the_sub_field('title'); ?>
                        </h1>
                    <?php endif; ?>

                    <?php if (get_sub_field('content')) : ?>
                        <p class="text-lg text-gray-600 md:text-xl"><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>

                    <?php if (have_rows('buttons')) : ?>
                        <div class="mt-8 flex flex-wrap gap-4 md:mt-10">
                            <?php while (have_rows('buttons')) : the_row(); 
                                $button_one_label = get_sub_field('button_one_label');
                                $button_one_link = get_sub_field('button_one_link');
                                $button_two_label = get_sub_field('button_two_label');
                                $button_two_link = get_sub_field('button_two_link');
                            ?>
                                <?php if ($button_one_link && $button_one_label) : ?>
                                    <a href="<?php echo esc_url($button_one_link); ?>" 
                                       class="inline-flex items-center rounded-lg bg-black px-8 py-4 text-center font-semibold text-white transition hover:bg-black/90">
                                        <?php echo esc_html($button_one_label); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($button_two_link && $button_two_label) : ?>
                                    <a href="<?php echo esc_url($button_two_link); ?>" 
                                       class="inline-flex items-center rounded-lg border border-black px-8 py-4 text-center font-semibold text-black transition hover:bg-black/10">
                                        <?php echo esc_html($button_two_label); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="relative h-full w-full">
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>" 
                             class="h-full w-full object-cover lg:h-[90vh] lg:max-h-[800px]" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('header_65')) : ?>
        <?php while (have_rows('header_65')) : the_row(); ?>
            <section class="relative min-h-[600px] px-[5%] py-16 md:min-h-[700px] md:py-24 lg:min-h-[800px] lg:py-28">
                <div class="container relative z-10 mx-auto flex min-h-[600px] max-w-lg items-center justify-center text-center md:min-h-[700px] lg:min-h-[800px]">
                    <div>
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 text-sm font-semibold uppercase tracking-wider text-white md:mb-4 md:text-base">
                                <?php the_sub_field('sub_title'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl text-white">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="text-lg text-white/90 md:text-xl">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-8 flex flex-wrap items-center justify-center gap-4 md:mt-10">
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                    $button_two_label = get_sub_field('button_two_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                ?>
                                    <?php if ($button_one_link && $button_one_label) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center rounded-lg bg-white px-8 py-4 text-center font-semibold text-black transition hover:bg-white/90">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($button_two_link && $button_two_label) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center rounded-lg border-2 border-white px-8 py-4 text-center font-semibold text-white transition hover:bg-white/10">
                                            <?php echo esc_html($button_two_label); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="absolute inset-0 -z-10">
                    <?php 
                    $background_image = get_sub_field('background_image');
                    if ($background_image) : ?>
                        <img src="<?php echo esc_url($background_image); ?>" 
                             alt="Background" 
                             class="h-full w-full object-cover" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_408')) : ?>
        <?php while (have_rows('layout_408')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="sticky top-0 grid grid-cols-1 gap-6 md:gap-0">
                            <?php 
                            $index = 0;
                            while (have_rows('cards')) : the_row(); 
                                $is_even = $index % 2 === 0;
                            ?>
                                <!-- Mobile View -->
                                <div class="static grid grid-cols-1 content-center overflow-hidden border border-border-primary bg-white md:hidden">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12">
                                        <?php if (get_sub_field('sub_title')) : ?>
                                            <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-6xl font-bold md:mb-6 md:text-4xl lg:text-5xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>

                                        <?php if (have_rows('buttons')) : ?>
                                            <div class="mt-6 flex items-center gap-x-4 md:mt-8">
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

                                    <div class="order-last flex flex-col items-center justify-center">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Desktop View -->
                                <div class="hidden md:sticky md:top-[10%] md:mb-[10vh] md:grid md:h-[80vh] md:grid-cols-2 md:content-center md:overflow-hidden md:border md:border-border-primary md:bg-white">
                                    <div class="<?php echo $is_even ? 'order-first' : 'order-last'; ?> flex flex-col justify-center p-6 md:p-8 lg:p-12">
                                        <?php if (get_sub_field('sub_title')) : ?>
                                            <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                                <?php the_sub_field('title'); ?>
                                            </h2>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>

                                        <?php if (have_rows('buttons')) : ?>
                                            <div class="mt-6 flex items-center gap-x-4 md:mt-8">
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

                                    <div class="<?php echo $is_even ? 'order-last' : 'order-first'; ?> flex flex-col items-center justify-center">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
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

    <?php if (have_rows('layout_458')) : ?>
        <?php while (have_rows('layout_458')) : the_row(); ?>
            <section class="overflow-hidden px-[5%] py-16 md:py-24 lg:py-28 bg-cod-gray text-white">
                <div class="container mx-auto">
                    <div class="rb-12 mb-12 grid auto-cols-fr grid-cols-1 items-start gap-x-5 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 lg:mb-20 lg:gap-x-20 lg:gap-y-20">
                        <div class="flex h-full flex-col">
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-7xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <div class="mx-[7.5%] flex flex-col justify-end md:mt-40">
                            <?php if (get_sub_field('content')) : ?>
                                <p class="md:text-md"><?php the_sub_field('content'); ?></p>
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
                                               class="inline-flex items-center rounded-lg border border-white px-6 py-3 text-center font-semibold text-white transition hover:bg-white/10">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($button_two_link && $button_two_label) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/70">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid auto-cols-fr grid-cols-1 items-start gap-12 md:grid-cols-3 md:gap-8 lg:gap-12">
                            <?php 
                            $index = 0;
                            while (have_rows('cards')) : the_row(); 
                            ?>
                                <div class="w-full <?php echo $index === 1 ? 'md:mt-[25%]' : ($index === 2 ? 'md:mt-[50%]' : ''); ?>">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="rb-6 mb-6 w-full md:mb-8">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                                 class="aspect-[3/2] w-full object-cover" />
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('title')) : ?>
                                        <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('content')) : ?>
                                        <p><?php the_sub_field('content'); ?></p>
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

    <?php if (have_rows('cta_1')) : ?>
        <?php while (have_rows('cta_1')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto max-w-[90rem] px-5">
                    <div class="grid grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16 lg:grid-cols-2 lg:items-center">
                        <div>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-lg text-gray-600">
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
                                               class="inline-flex items-center rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-black/90">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($button_two_link && $button_two_label) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center rounded-lg border border-black px-6 bg-white py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                                <?php echo esc_html($button_two_label); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div>
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($image) : ?>
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

    <?php if (have_rows('faq_7')) : ?>
        <?php while (have_rows('faq_7')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto max-w-[90rem] px-5">
                    <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="mx-auto max-w-2xl text-lg text-gray-600">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('faqs')) : ?>
                        <div class="mx-auto max-w-3xl">
                            <div class="grid grid-cols-1 gap-x-12 gap-y-10 md:gap-y-12">
                                <?php while (have_rows('faqs')) : the_row(); ?>
                                    <div>
                                        <?php if (get_sub_field('question')) : ?>
                                            <h3 class="mb-5 text-6xl font-bold md:mb-6 md:text-3xl lg:text-4xl">
                                                <?php the_sub_field('question'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('answers')) : ?>
                                            <p class="text-gray-600">
                                                <?php the_sub_field('answers'); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('cta_section')) : ?>
                        <?php while (have_rows('cta_section')) : the_row(); ?>
                            <div class="mx-auto mt-12 max-w-md text-center md:mt-18 lg:mt-20">
                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="mb-5 text-6xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (get_sub_field('content')) : ?>
                                    <p class="text-lg text-gray-600">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>

                                <?php
                                $button_label = get_sub_field('button_label');
                                $button_link = get_sub_field('button_link');
                                if ($button_link && $button_label) : ?>
                                    <div class="mt-6 md:mt-8">
                                        <a href="<?php echo esc_url($button_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-black px-6 bg-white py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                            <?php echo esc_html($button_label); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>