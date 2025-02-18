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

    <?php if (have_rows('header_37')) : ?>
        <?php while (have_rows('header_37')) : the_row(); ?>
            <section id="relume" class="grid grid-cols-1 items-center gap-y-16 pt-16 md:pt-24 lg:grid-cols-2 lg:pt-0">
                <div class="order-2 lg:order-1">
                    <?php 
                    $image = get_sub_field('image');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="w-full object-cover lg:h-screen lg:max-h-[60rem]" />
                    <?php endif; ?>
                </div>

                <div class="order-1 mx-[5%] sm:max-w-md md:justify-self-start lg:order-2 lg:ml-20 lg:mr-[5vw]">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                            <?php the_sub_field('title'); ?>
                        </h1>
                    <?php endif; ?>

                    <?php if (get_sub_field('content')) : ?>
                        <p class="md:text-md">
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
                                       class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
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

    <?php if (have_rows('layout_432')) : ?>
        <?php while (have_rows('layout_432')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 items-start gap-x-16 gap-y-12 md:grid-cols-2">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold md:mb-4">
                                    <?php the_sub_field('sub_title'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-12 text-5xl font-bold md:mb-18 md:text-5xl lg:mb-20 lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php 
                            $image_one = get_sub_field('image_one');
                            if (!empty($image_one)) : ?>
                                <img src="<?php echo esc_url($image_one['url']); ?>" 
                                     alt="<?php echo esc_attr($image_one['alt']); ?>"
                                     class="aspect-square w-full object-cover" />
                            <?php endif; ?>
                        </div>

                        <div class="flex flex-col justify-center">
                            <div class="mb-12 grid grid-cols-2 gap-6 sm:gap-8 md:mb-18 lg:mb-20">
                                <?php 
                                $image_two = get_sub_field('image_two');
                                if (!empty($image_two)) : ?>
                                    <img src="<?php echo esc_url($image_two['url']); ?>" 
                                         alt="<?php echo esc_attr($image_two['alt']); ?>"
                                         class="mt-[50%] w-full object-cover" />
                                <?php endif; ?>

                                <?php 
                                $image_three = get_sub_field('image_three');
                                if (!empty($image_three)) : ?>
                                    <img src="<?php echo esc_url($image_three['url']); ?>" 
                                         alt="<?php echo esc_attr($image_three['alt']); ?>"
                                         class="mt-[25%] w-full object-cover" />
                                <?php endif; ?>
                            </div>

                            <div class="ml-[5%] mr-[10%]">
                                <?php if (get_sub_field('content')) : ?>
                                    <p class="md:text-md">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_241')) : ?>
        <?php while (have_rows('layout_241')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="flex flex-col">
                        <div class="mb-12 md:mb-18 lg:mb-20">
                            <div class="w-full max-w-lg">
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
                                    <div class="flex w-full flex-col">
                                        <?php if (get_sub_field('icon_picker')) : ?>
                                            <div class="mb-5 md:mb-6">
                                                <i data-lucide="<?php the_sub_field('icon_picker'); ?>" 
                                                   class="size-12 text-black"></i>
                                            </div>
                                        <?php endif; ?>

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
                            <div class="mt-12 flex items-center gap-4 md:mt-18 lg:mt-20">
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
                                           class="inline-flex items-center gap-2 text-black transition hover:opacity-60">
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

    <?php if (have_rows('faq_4')) : ?>
        <?php while (have_rows('faq_4')) : the_row(); ?>
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
                        <div class="grid items-start justify-stretch gap-4">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <div class="group border border-black">
                                    <button class="flex w-full items-center justify-between px-5 py-4 text-left md:px-6 md:py-5"
                                            onclick="this.parentElement.classList.toggle('is-active')">
                                        <?php if (get_sub_field('question')) : ?>
                                            <span class="font-semibold md:text-md">
                                                <?php the_sub_field('question'); ?>
                                            </span>
                                        <?php endif; ?>
                                        <i data-lucide="plus" 
                                           class="size-7 shrink-0 text-black transition-transform duration-300 group-[.is-active]:rotate-45 md:size-8"></i>
                                    </button>
                                    
                                    <div class="grid grid-rows-[0fr] transition-all duration-300 group-[.is-active]:grid-rows-[1fr]">
                                        <div class="overflow-hidden">
                                            <?php if (get_sub_field('answer')) : ?>
                                                <div class="px-5 pb-4 md:px-6 md:pb-6">
                                                    <?php the_sub_field('answer'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('cta')) : ?>
                        <?php while (have_rows('cta')) : the_row(); ?>
                            <div class="mx-auto mt-12 max-w-md text-center md:mt-18 lg:mt-20">
                                <?php if (get_sub_field('title')) : ?>
                                    <h4 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                        <?php the_sub_field('title'); ?>
                                    </h4>
                                <?php endif; ?>

                                <?php if (get_sub_field('content')) : ?>
                                    <p class="md:text-md">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_19')) : ?>
        <?php while (have_rows('cta_19')) : the_row(); ?>
            <section id="relume" class="relative bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="w-full max-w-lg">
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