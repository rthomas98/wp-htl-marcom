<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (have_rows('header_5')) : ?>
        <?php while (have_rows('header_5')) : the_row(); ?>
            <section id="relume" class="relative px-[5%]">
                <div class="container mx-auto">
                    <div class="flex max-h-[60rem] min-h-svh items-center py-16 md:py-24 lg:py-28">
                        <div class="max-w-[40rem]">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="mb-5 text-6xl font-bold text-white md:mb-6 md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

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
                </div>

                <?php 
                $image = get_sub_field('image');
                if (!empty($image)) : ?>
                    <div class="absolute inset-0 -z-10">
                        <img src="<?php echo esc_url($image); ?>" 
                             class="size-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_1')) : ?>
        <?php while (have_rows('layout_1')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
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
                                <p class="md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
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
                                               class="inline-flex items-center gap-2 font-semibold text-black transition hover:opacity-60">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="size-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div>
                            <?php 
                            $image = get_sub_field('image');
                            if (!empty($image)) : ?>
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

    <?php if (have_rows('layout_237')) : ?>
        <?php while (have_rows('layout_237')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto">
                    <div class="flex flex-col items-center">
                        <div class="mb-12 text-center md:mb-18 lg:mb-20">
                            <div class="mx-auto w-full">
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
                                    <p class="md:text-md">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if (have_rows('simple_cards')) : ?>
                            <div class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('simple_cards')) : the_row(); ?>
                                    <div class="flex w-full flex-col items-center text-center">
                                        <div class="mb-5 md:mb-6">
                                            <?php 
                                            $icon = get_sub_field('icon_picker');
                                            if ($icon) : ?>
                                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="size-12 text-black"></i>
                                            <?php endif; ?>
                                        </div>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-2xl font-bold md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
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
                            <div class="mt-10 flex items-center gap-4 md:mt-14 lg:mt-16">
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
                                           class="inline-flex items-center gap-2 font-semibold text-black transition hover:opacity-60">
                                            <?php echo esc_html($button_two_label); ?>
                                            <i data-lucide="chevron-right" class="size-4"></i>
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

    <?php if (have_rows('cta_27')) : ?>
        <?php while (have_rows('cta_27')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="relative z-10 mx-auto max-w-lg text-center">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-5xl font-bold text-white md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="text-white/90 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex flex-wrap items-center justify-center gap-4 md:mt-8">
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

                <?php 
                $background_image = get_sub_field('background_image');
                if (!empty($background_image)) : ?>
                    <div class="absolute inset-0 -z-10">
                        <img src="<?php echo esc_url($background_image); ?>" 
                             class="size-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_3')) : ?>
        <?php while (have_rows('faq_3')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[.75fr,1fr] lg:gap-x-20">
                    <div>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <div class="mt-6 md:mt-8">
                            <a href="/contact" 
                               class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                Contact Us
                            </a>
                        </div>
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
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

</article>