<?php
/**
 * Template part for displaying home page content
 *
 * @package _htl
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_79')) : ?>
        <?php while (have_rows('header_79')) : the_row(); ?>
            <section id="hero" class="relative -mt-[var(--header-height,0px)]">
                <div class="px-[5%]">
                    <div class="flex max-h-[60rem] min-h-svh items-center">
                        <div class="container py-16 md:py-24 lg:py-28">
                            <div class="mx-auto max-w-lg text-center">
                                <?php if (get_sub_field('title')) : ?>
                                    <h1 class="mb-5 text-4xl font-bold text-white md:mb-6 md:text-6xl lg:text-7xl">
                                        <?php the_sub_field('title'); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if (get_sub_field('description_')) : ?>
                                    <p class="text-white/90 md:text-lg">
                                        <?php the_sub_field('description_'); ?>
                                    </p>
                                <?php endif; ?>

                                <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                                    <?php
                                    $button_one_label = get_sub_field('button_one_label_');
                                    $button_one_link = get_sub_field('button_link');
                                    $button_two_label = get_sub_field('button_one_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                    ?>

                                    <?php if ($button_one_label && $button_one_link) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center justify-center gap-3 rounded-md bg-cod-gray px-5 py-2.5 text-white transition-colors hover:bg-mine-shaft">
                                            <?php echo esc_html($button_one_label); ?>
                                            <i data-lucide="arrow-right" class="size-4"></i>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($button_two_label && $button_two_link) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-white px-5 py-2.5 text-mine-shaft transition-colors hover:bg-gallery">
                                            <?php echo esc_html($button_two_label); ?>
                                            <i data-lucide="arrow-right" class="size-4"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="absolute inset-0 -z-10 overflow-hidden">
                            <div class="absolute inset-0 z-10 bg-black/50"></div>
                            <div class="grid w-full grid-cols-2 gap-x-4 px-4 md:grid-cols-3 lg:grid-cols-5">
                                <?php
                                $image_columns = [
                                    ['class' => '-mt-[20%] animate-loop-vertically-top'],
                                    ['class' => '-mt-[50%] animate-loop-vertically-bottom'],
                                    ['class' => 'animate-loop-vertically-top'],
                                    ['class' => 'mt-[-30%] animate-loop-vertically-bottom'],
                                    ['class' => 'mt-[-20%] animate-loop-vertically-top']
                                ];

                                $images = get_sub_field('images');
                                if ($images) :
                                    $total_images = count($images);
                                    $half_count = ceil($total_images / 2);
                                    $images_part_one = array_slice($images, 0, $half_count);
                                    $images_part_two = array_slice($images, $half_count);

                                    foreach ($image_columns as $index => $column) :
                                        ?>
                                        <div class="grid size-full columns-2 grid-cols-1 gap-4 self-center <?php echo esc_attr($column['class']); ?>">
                                            <!-- First set of images -->
                                            <?php foreach ($images_part_one as $image) : ?>
                                                <div class="grid size-full grid-cols-1 gap-4">
                                                    <div class="relative w-full pt-[120%]">
                                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                                             class="absolute inset-0 size-full object-cover" />
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <!-- Second set of images (duplicated for seamless loop) -->
                                            <?php foreach ($images_part_two as $image) : ?>
                                                <div class="grid size-full grid-cols-1 gap-4">
                                                    <div class="relative w-full pt-[120%]">
                                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                                             class="absolute inset-0 size-full object-cover" />
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_239')) : ?>
        <?php while (have_rows('layout_239')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="flex flex-col items-center">
                        <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                            <div class="w-full">
                                <?php if (get_sub_field('sub_header')) : ?>
                                    <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_header'); ?></p>
                                <?php endif; ?>

                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                                <?php endif; ?>

                                <?php if (get_sub_field('description')) : ?>
                                    <p class="md:text-md"><?php the_sub_field('description'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if (have_rows('card')) : ?>
                            <div class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('card')) : the_row(); ?>
                                    <div class="flex w-full flex-col items-center text-center">
                                        <?php $card_image = get_sub_field('card_image'); ?>
                                        <?php if ($card_image) : ?>
                                            <div class="relative mb-6 h-48 w-full md:mb-8 md:h-56 lg:h-64">
                                                <img src="<?php echo esc_url($card_image['url']); ?>" 
                                                     alt="<?php echo esc_attr($card_image['alt']); ?>"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-2xl font-bold md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('card_content')) : ?>
                                            <p><?php the_sub_field('card_content'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        <div class="mt-12 flex items-center gap-4 md:mt-18 lg:mt-20">
                            <?php
                            $button_one_label = get_sub_field('button_one_label');
                            $button_one_link = get_sub_field('button_one_link');
                            $button_two_label = get_sub_field('button_two_label');
                            $button_two_link = get_sub_field('button_two_link');
                            ?>

                            <?php if ($button_one_label && $button_one_link) : ?>
                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                   class="inline-flex items-center justify-center gap-3 rounded-md bg-cod-gray px-5 py-2.5 text-white transition-colors hover:bg-mine-shaft">
                                    <?php echo esc_html($button_one_label); ?>
                                </a>
                            <?php endif; ?>

                            <?php if ($button_two_label && $button_two_link) : ?>
                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                   class="inline-flex items-center justify-center gap-3 text-mine-shaft hover:text-cod-gray">
                                    <?php echo esc_html($button_two_label); ?>
                                    <i data-lucide="chevron-right" class="size-4"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_271')) : ?>
        <?php while (have_rows('layout_271')) : the_row(); ?>
            <section class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container relative z-10">
                    <div class="mb-12 max-w-lg text-start text-text-alternative md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold text-white md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-3xl font-bold text-white md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('description')) : ?>
                            <p class="text-white/90 md:text-md"><?php the_sub_field('description'); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('card')) : ?>
                        <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('card')) : the_row(); ?>
                                <div class="w-full">
                                    <div class="mb-5 h-12 md:mb-6">
                                        <div class="inline-block">
                                            <?php if (get_sub_field('icon')) : ?>
                                                <img src="<?php the_sub_field('icon'); ?>" class="size-12" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div>
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-2xl font-bold text-white md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p class="text-base text-white/90"><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mt-12 flex flex-wrap justify-start gap-4 md:mt-18 lg:mt-20">
                        <?php
                        $button_one_label = get_sub_field('button_one_label');
                        $button_one_link = get_sub_field('button_one_link');
                        $button_two_label = get_sub_field('button_two_label');
                        $button_two_link = get_sub_field('button_two_link');
                        ?>

                        <?php if ($button_one_label && $button_one_link) : ?>
                            <a href="<?php echo esc_url($button_one_link); ?>" 
                               class="inline-flex items-center justify-center gap-3 rounded-md border border-white bg-transparent px-5 py-2.5 text-white transition-colors hover:bg-white hover:text-mine-shaft">
                                <?php echo esc_html($button_one_label); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($button_two_label && $button_two_link) : ?>
                            <a href="<?php echo esc_url($button_two_link); ?>" 
                               class="inline-flex items-center justify-center gap-3 text-white hover:text-gallery">
                                <?php echo esc_html($button_two_label); ?>
                                <i data-lucide="chevron-right" class="size-4"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="absolute inset-0">
                    <?php if (get_sub_field('background_image')) : ?>
                        <img src="<?php the_sub_field('background_image'); ?>" 
                             class="absolute inset-0 size-full object-cover" 
                             alt="" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('layout_380')) : ?>
        <?php while (have_rows('layout_380')) : the_row(); ?>
            <section class="bg-[#FFE8E5] px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h1 class="mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h1>
                        <?php endif; ?>
                        <?php if (get_sub_field('description')) : ?>
                            <p class="md:text-md"><?php the_sub_field('description'); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8 lg:grid-cols-2">
                        <!-- Left Column -->
                        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8">
                            <!-- Card One (Big Card) -->
                            <?php if (have_rows('card_one')) : ?>
                                <?php while (have_rows('card_one')) : the_row(); ?>
                                    <div class="flex flex-col border border-border-primary bg-white sm:col-span-2">
                                        <div class="block flex-1 p-6 sm:flex sm:flex-col sm:justify-center md:p-8 lg:p-12">
                                            <div>
                                                <?php if (get_sub_field('sub_title')) : ?>
                                                    <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h2 class="rb-5 mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
                                                        <?php the_sub_field('title'); ?>
                                                    </h2>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p><?php the_sub_field('content'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                       class="inline-flex items-center rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-opacity-90">
                                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold hover:opacity-80">
                                                        <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                                        <i data-lucide="chevron-right" class="size-4"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php 
                                        $card_image = get_sub_field('card_image');
                                        if ($card_image) : ?>
                                            <div class="flex w-full flex-col items-center justify-center self-start">
                                                <img src="<?php echo esc_url($card_image['url']); ?>" 
                                                     alt="<?php echo esc_attr($card_image['alt']); ?>"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!-- Feature Sections -->
                            <?php if (have_rows('card_three')) : ?>
                                <?php while (have_rows('card_three')) : the_row(); ?>
                                    <div class="flex flex-col justify-between border border-border-primary bg-white p-6 md:p-8 lg:p-6">
                                        <div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" class="size-12"></i>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h2 class="mb-2 text-xl font-bold md:text-2xl"><?php the_sub_field('title'); ?></h2>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('content')) : ?>
                                                <p><?php the_sub_field('content'); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                            <div class="mt-5 md:mt-6">
                                                <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                   class="inline-flex items-center gap-2 font-semibold hover:opacity-80">
                                                    <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                    <i data-lucide="chevron-right" class="size-4"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if (have_rows('card_four')) : ?>
                                <?php while (have_rows('card_four')) : the_row(); ?>
                                    <div class="flex flex-col justify-between border border-border-primary bg-white p-6 md:p-8 lg:p-6">
                                        <div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" class="size-12"></i>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h2 class="mb-2 text-xl font-bold md:text-2xl"><?php the_sub_field('title'); ?></h2>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('content')) : ?>
                                                <p><?php the_sub_field('content'); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                            <div class="mt-5 md:mt-6">
                                                <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                   class="inline-flex items-center gap-2 font-semibold hover:opacity-80">
                                                    <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                    <i data-lucide="chevron-right" class="size-4"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Right Column -->
                        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8">
                            <!-- Small Card -->
                            <?php if (have_rows('card_two')) : ?>
                                <?php while (have_rows('card_two')) : the_row(); ?>
                                    <div class="flex flex-col border border-border-primary bg-white sm:col-span-2 sm:grid sm:auto-cols-fr sm:grid-cols-2">
                                        <?php 
                                        $card_image = get_sub_field('card_image');
                                        if ($card_image) : ?>
                                            <div class="flex size-full flex-col items-center justify-center self-start">
                                                <img src="<?php echo esc_url($card_image['url']); ?>" 
                                                     alt="<?php echo esc_attr($card_image['alt']); ?>"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>
                                        <div class="block flex-col justify-center p-6 sm:flex">
                                            <div>
                                                <?php if (get_sub_field('sub_title')) : ?>
                                                    <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h2 class="mb-2 text-xl font-bold md:text-2xl"><?php the_sub_field('title'); ?></h2>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p><?php the_sub_field('content'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                                <div class="mt-5 md:mt-6">
                                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold hover:opacity-80">
                                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                        <i data-lucide="chevron-right" class="size-4"></i>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!-- Big Card (Repeated) -->
                            <?php if (have_rows('card_five')) : ?>
                                <?php while (have_rows('card_five')) : the_row(); ?>
                                    <div class="flex flex-col border border-border-primary bg-white sm:col-span-2">
                                        <div class="block flex-1 p-6 sm:flex sm:flex-col sm:justify-center md:p-8 lg:p-12">
                                            <div>
                                                <?php if (get_sub_field('sub_title')) : ?>
                                                    <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h2 class="rb-5 mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
                                                        <?php the_sub_field('title'); ?>
                                                    </h2>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p><?php the_sub_field('content'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                                       class="inline-flex items-center rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-opacity-90">
                                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                                    <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold hover:opacity-80">
                                                        <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                                        <i data-lucide="chevron-right" class="size-4"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php 
                                        $card_image = get_sub_field('card_image');
                                        if ($card_image) : ?>
                                            <div class="flex w-full flex-col items-center justify-center self-start">
                                                <img src="<?php echo esc_url($card_image['url']); ?>" 
                                                     alt="<?php echo esc_attr($card_image['alt']); ?>"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_245')) : ?>
        <?php while (have_rows('layout_245')) : the_row(); ?>
            <section class="bg-[#0D0D0D] px-[5%] py-16 text-white md:py-24 lg:py-28">
                <div class="container">
                    <div class="flex flex-col items-start">
                        <div class="rb-12 mb-12 grid grid-cols-1 items-start justify-between gap-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20">
                            <div>
                                <?php if (get_sub_field('sub_title')) : ?>
                                    <p class="mb-3 font-semibold text-white/90 md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                                <?php endif; ?>
                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="text-3xl font-bold text-white md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('description')) : ?>
                                <p class="text-white/90 md:text-md"><?php the_sub_field('description'); ?></p>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('card')) : ?>
                            <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('card')) : the_row(); ?>
                                    <div>
                                        <?php if (get_sub_field('icon')) : ?>
                                            <div class="rb-5 mb-5 text-white md:mb-6">
                                                <i data-lucide="<?php the_sub_field('icon'); ?>" class="size-12"></i>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-5 text-2xl font-bold text-white md:mb-6 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('content')) : ?>
                                            <p class="text-white/90"><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        <div class="mt-10 flex items-center gap-4 md:mt-14 lg:mt-16">
                            <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                   class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-black transition hover:bg-opacity-90">
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
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('cta_21')) : ?>
        <?php while (have_rows('cta_21')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="rb-12 mb-12 grid grid-rows-1 items-start gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20 lg:gap-y-16">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-3xl font-bold md:text-4xl lg:text-5xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <div>
                            <?php if (get_sub_field('content')) : ?>
                                <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                            <?php endif; ?>
                            <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                                <?php if (get_sub_field('button_one_label') && get_sub_field('button_one_link')) : ?>
                                    <a href="<?php echo esc_url(get_sub_field('button_one_link')); ?>" 
                                       class="inline-flex items-center rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-opacity-90">
                                        <?php echo esc_html(get_sub_field('button_one_label')); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_sub_field('button_two_label') && get_sub_field('button_two_link')) : ?>
                                    <a href="<?php echo esc_url(get_sub_field('button_two_link')); ?>" 
                                       class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black hover:text-white">
                                        <?php echo esc_html(get_sub_field('button_two_label')); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <div>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="size-full object-cover" />
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (WP_DEBUG) : ?>
        <div style="background: #f1f1f1; padding: 20px; margin: 20px;">
            <h3>Debug Information:</h3>
            <pre>
            Post ID: <?php echo get_the_ID(); ?>
            Template: <?php echo get_page_template_slug(); ?>
            Has header_79: <?php echo have_rows('header_79') ? 'Yes' : 'No'; ?>
            ACF Fields: <?php print_r(get_fields()); ?>
            </pre>
        </div>
    <?php endif; ?>
</article>
