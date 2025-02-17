<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('m-0'); ?>>
    <?php if (have_rows('header_5')) : ?>
        <?php while (have_rows('header_5')) : the_row(); ?>
            <section id="relume" class="relative px-[5%]">
                <div class="container mx-auto">
                    <div class="flex max-h-[60rem] min-h-svh items-center pb-16 md:pb-24 lg:pb-28">
                        <div class="max-w-md">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="mb-5 text-5xl font-bold text-white md:mb-6 md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white md:text-md">
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
                $background_image = get_sub_field('background_image');
                if ($background_image) : ?>
                    <div class="absolute inset-0 -z-10">
                        <img src="<?php echo esc_url($background_image['url']); ?>" 
                             alt="<?php echo esc_attr($background_image['alt']); ?>"
                             class="h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_423')) : ?>
        <?php while (have_rows('layout_423')) : the_row(); ?>
            <section id="relume" class="relative isolate px-[5%] py-16 md:py-24 lg:py-28">
                <div class="absolute inset-0 -z-10"></div>
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
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="flex flex-col justify-between gap-6 md:gap-8 lg:flex-row">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="group relative flex w-full flex-col overflow-hidden lg:h-full lg:w-1/2 lg:transition-all lg:duration-200 lg:hover:w-[70%]">
                                    <div class="absolute inset-0 flex size-full flex-col items-center justify-center self-start">
                                        <div class="absolute inset-0 bg-black/50"></div>
                                        <?php 
                                        $background_image = get_sub_field('background_image');
                                        if ($background_image) : ?>
                                            <img src="<?php echo esc_url($background_image['url']); ?>" 
                                                 alt="<?php echo esc_attr($background_image['alt']); ?>"
                                                 class="h-full w-full object-cover" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="group relative flex h-full min-h-[70vh] flex-col justify-end p-6 md:p-8">
                                        <div class="lg:absolute lg:inset-0 lg:z-0 lg:transition-all lg:duration-300 lg:group-hover:bg-black/50"></div>
                                        <div class="z-10">
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-2 font-semibold text-white">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-2xl font-bold text-white md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>

                                            <div class="lg:hidden">
                                                <?php if (get_sub_field('content')) : ?>
                                                    <p class="mt-5 text-white md:mt-6">
                                                        <?php the_sub_field('content'); ?>
                                                    </p>
                                                <?php endif; ?>

                                                <?php
                                                $button_label = get_sub_field('button_label');
                                                $button_link = get_sub_field('button_link');
                                                if ($button_link && $button_label) : ?>
                                                    <div class="mt-6 md:mt-8">
                                                        <a href="<?php echo esc_url($button_link); ?>" 
                                                           class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/70">
                                                            <?php echo esc_html($button_label); ?>
                                                            <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="z-10 hidden translate-y-4 opacity-0 transition-all duration-300 lg:block lg:w-[340px] group-hover:translate-y-0 group-hover:opacity-100">
                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="mt-5 text-white md:mt-6">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php
                                            $button_label = get_sub_field('button_label');
                                            $button_link = get_sub_field('button_link');
                                            if ($button_link && $button_label) : ?>
                                                <div class="mt-6 md:mt-8">
                                                    <a href="<?php echo esc_url($button_link); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/70">
                                                        <?php echo esc_html($button_label); ?>
                                                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cards')) : ?>
        <section id="relume" class="relative isolate bg-white">
            <div class="absolute inset-0 -z-10 bg-white"></div>
            <div class="sticky top-0">
                <?php 
                $index = 0;
                while (have_rows('cards')) : the_row(); 
                    $sticky_class = match($index) {
                        0 => 'top-0 lg:mb-32',
                        1 => 'lg:top-16 lg:-mt-16 lg:mb-16',
                        2 => 'lg:top-32 lg:mb-16',
                        default => ''
                    };
                ?>
                    <div class="relative -top-32 h-0"></div>
                    <div class="relative border-t border-border-primary bg-white pb-8 md:pb-14 lg:sticky lg:pb-0 <?php echo $sticky_class; ?>">
                        <div class="px-[5%]">
                            <div class="container mx-auto">
                                <?php if (get_sub_field('card_label')) : ?>
                                    <a href="#" class="flex h-16 w-full items-center underline">
                                        <span class="mr-5 font-semibold md:mr-6 md:text-md"><?php echo esc_html(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></span>
                                        <h2 class="font-semibold md:text-md"><?php the_sub_field('card_label'); ?></h2>
                                    </a>
                                <?php endif; ?>

                                <div class="py-8 md:py-10 lg:py-12">
                                    <div class="grid grid-cols-1 gap-y-12 md:items-center md:gap-x-12 lg:grid-cols-2 lg:gap-x-20">
                                        <div>
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-3 font-semibold md:mb-4">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
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
                                            <div class="relative">
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="h-[25rem] w-full object-cover sm:h-[30rem] lg:h-[60vh]" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    $index++;
                endwhile; 
                ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('layout_4')) : ?>
        <?php while (have_rows('layout_4')) : the_row(); ?>
            <section id="relume" class="relative isolate px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="absolute inset-0 -z-10 bg-pippin"></div>
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
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
                                <p class="mb-6 md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_card')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_card')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-lg font-bold leading-[1.4] md:mb-4 md:text-xl">
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
                                               class="inline-flex items-center rounded-lg bg-cod-gray text-white border border-black px-6 py-3 text-center font-semibold` transition hover:bg-black/10">
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


    <?php if (have_rows('faq_1')) : ?>
        <?php while (have_rows('faq_1')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto max-w-lg">
                    <div class="mb-12 text-center md:mb-18 lg:mb-20">
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

                                <?php if (have_rows('buttons')) : ?>
                                    <div class="mt-6 md:mt-8">
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
                                                   class="ml-4 inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                    <?php echo esc_html($button_two_label); ?>
                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_57')) : ?>
        <?php while (have_rows('cta_57')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto">
                    <div class="mx-auto w-full max-w-lg text-center">
                        <?php if (get_sub_field('title')) : ?>
                            <h2>
                                <?php 
                                $title_lines = explode("\n", get_sub_field('title'));
                                foreach ($title_lines as $index => $line) :
                                    $animation_class = $index % 2 === 0 ? 'animate-slide-right' : 'animate-slide-left';
                                ?>
                                    <span class="block text-5xl font-bold md:text-6xl lg:text-7xl <?php echo $index !== 0 ? 'mb-5 md:mb-6' : ''; ?> <?php echo $animation_class; ?>">
                                        <?php echo esc_html(trim($line)); ?>
                                    </span>
                                <?php endforeach; ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
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
                </div>
            </section>

            <style>
                @keyframes slideRight {
                    from { transform: translateX(-50%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                
                @keyframes slideLeft {
                    from { transform: translateX(50%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                
                .animate-slide-right {
                    animation: slideRight 0.8s ease-out forwards;
                }
                
                .animate-slide-left {
                    animation: slideLeft 0.8s ease-out forwards;
                }
            </style>
        <?php endwhile; ?>
    <?php endif; ?>
</article>