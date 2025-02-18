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

    <?php if (have_rows('header_406')) : ?>
        <?php while (have_rows('header_406')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
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

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="overflow-hidden rounded-lg border border-gray-200 bg-white transition-all hover:border-black">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" 
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             class="aspect-[4/3] w-full object-cover" />
                                    <?php endif; ?>

                                    <div class="p-6 md:p-8">
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-4 text-xl font-bold md:text-2xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p class="text-gray-600">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_25')) : ?>
        <?php while (have_rows('layout_25')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
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
                                <p class="mb-6 md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('state')) : ?>
                                                <h3 class="mb-2 text-5xl font-bold md:text-5xl lg:text-6xl">
                                                    <?php the_sub_field('state'); ?>%
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <p class="font-semibold">
                                                    <?php the_sub_field('title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-gray-600">
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
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="w-full object-cover" />
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_239')) : ?>
        <?php while (have_rows('layout_239')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="flex flex-col items-center">
                        <div class="mb-12 text-center md:mb-18 lg:mb-20">
                            <div class="mx-auto w-full max-w-lg">
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
                                        <div class="mb-6 md:mb-8">
                                            <?php 
                                            $image = get_sub_field('image');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="aspect-[4/3] w-full object-cover rounded-lg" />
                                            <?php endif; ?>
                                        </div>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-2xl font-bold md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p class="text-gray-600">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-12 flex items-center gap-4 md:mt-18 lg:mt-20">
                                <?php while (have_rows('buttons')) : the_row(); ?>
                                    <?php 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                    if ($button_one_label && $button_one_link) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center justify-center rounded-lg bg-black px-7 py-4 text-center font-semibold text-white transition-colors hover:bg-gray-800">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php 
                                    $button_two_label = get_sub_field('button_two_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                    if ($button_two_label && $button_two_link) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center justify-center gap-2 font-semibold text-black transition-colors hover:text-gray-600">
                                            <?php echo esc_html($button_two_label); ?>
                                            <i data-lucide="arrow-right" class="size-4"></i>
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

    <?php if (have_rows('cta_13')) : ?>
        <?php while (have_rows('cta_13')) : the_row(); ?>
            <section id="relume" class="relative bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-rows-1 items-start gap-y-5 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:gap-x-20 lg:gap-y-16">
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
                                    <?php while (have_rows('buttons')) : the_row(); ?>
                                        <?php 
                                        $button_one_label = get_sub_field('button_one_label');
                                        $button_one_link = get_sub_field('button_one_link');
                                        if ($button_one_label && $button_one_link) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg bg-white px-7 py-4 text-center font-semibold text-black transition-colors hover:bg-gray-100">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php 
                                        $button_two_label = get_sub_field('button_two_label');
                                        $button_two_link = get_sub_field('button_two_link');
                                        if ($button_two_label && $button_two_link) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg border border-white px-7 py-4 text-center font-semibold text-white transition-colors hover:bg-white hover:text-black">
                                                <?php echo esc_html($button_two_label); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_1')) : ?>
        <?php while (have_rows('faq_1')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto max-w-lg">
                    <div class="mb-12 text-center md:mb-18 lg:mb-20">
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

                    <?php if (have_rows('faqs')) : ?>
                        <div class="divide-y divide-gray-200">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <div class="group" x-data="{ open: false }">
                                    <button 
                                        class="flex w-full items-center justify-between py-4 text-left transition-colors hover:text-gray-600 md:py-5 md:text-lg"
                                        @click="open = !open"
                                        aria-expanded="false"
                                    >
                                        <span class="font-medium">
                                            <?php the_sub_field('question'); ?>
                                        </span>
                                        <i data-lucide="chevron-down" 
                                           class="size-5 transition-transform duration-200 group-[.is-active]:rotate-180"></i>
                                    </button>
                                    
                                    <div 
                                        class="grid grid-rows-[0fr] transition-all duration-200 group-[.is-active]:grid-rows-[1fr]"
                                        role="region"
                                    >
                                        <div class="overflow-hidden">
                                            <div class="pb-4 text-gray-600 md:pb-6">
                                                <?php the_sub_field('answer'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mx-auto mt-12 max-w-md text-center md:mt-18 lg:mt-20">
                        <h4 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                            Still have questions?
                        </h4>
                        <p class="mb-6 md:mb-8 md:text-md">
                            Contact us today and we'll help you find the answers you need.
                        </p>
                        <a href="/contact" 
                           class="inline-flex items-center justify-center rounded-lg bg-black px-7 py-4 text-center font-semibold text-white transition-colors hover:bg-gray-800">
                            Contact Us
                        </a>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

</article>