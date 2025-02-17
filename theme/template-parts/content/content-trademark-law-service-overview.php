<?php
/**
 * Template part for displaying trademark law service overview content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_71')) : ?>
        <?php while (have_rows('header_71')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="flex flex-col">
                        <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                            <div class="w-full max-w-lg">
                                <?php if (get_sub_field('title')) : ?>
                                    <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-8xl lg:text-9xl">
                                        <?php the_sub_field('title'); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if (get_sub_field('content')) : ?>
                                    <p class="md:text-md"><?php the_sub_field('content'); ?></p>
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
                                                   class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/5">
                                                    <?php echo esc_html($button_two_label); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="h-auto w-full object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_16')) : ?>
        <?php while (have_rows('layout_16')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container">
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 md:mb-8 md:text-md"><?php the_sub_field('content'); ?></p>
                            <?php endif; ?>

                            <?php if (have_rows('list')) : ?>
                                <div class="mb-6 grid grid-cols-1 gap-4 md:mb-8">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <div class="flex items-start">
                                            <div class="mr-4 mt-1 flex-none">
                                                <i data-lucide="check-circle" class="size-5 text-black"></i>
                                            </div>
                                            <p class="text-md"><?php the_sub_field('item'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (have_rows('buttons')) : ?>
                                <div class="flex flex-wrap items-center gap-4">
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
                                               class="inline-flex items-center gap-2 text-center font-semibold text-black transition hover:opacity-80">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="arrow-right" class="size-5"></i>
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
                                     class="h-auto w-full rounded-2xl object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_241')) : ?>
        <?php while (have_rows('layout_241')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="flex flex-col">
                        <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                            <div class="w-full max-w-lg">
                                <?php if (get_sub_field('sub_title')) : ?>
                                    <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                                <?php endif; ?>

                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (get_sub_field('content')) : ?>
                                    <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if (have_rows('cards')) : ?>
                            <div class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('cards')) : the_row(); ?>
                                    <div class="flex w-full flex-col">
                                        <div class="mb-5 md:mb-6">
                                            <?php 
                                            $icon = get_sub_field('icon');
                                            if ($icon) : ?>
                                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="size-12 text-black"></i>
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="mb-5 text-xl font-bold md:mb-6 md:text-2xl lg:text-3xl">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p><?php the_sub_field('content'); ?></p>
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
                                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/5">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($button_two_link && $button_two_label) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center gap-2 text-center font-semibold text-black transition hover:opacity-80">
                                            <?php echo esc_html($button_two_label); ?>
                                            <i data-lucide="chevron-right" class="size-5"></i>
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

    <?php if (have_rows('layout_253')) : ?>
        <?php while (have_rows('layout_253')) : the_row(); ?>
            <section class="bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="grid auto-cols-fr grid-cols-1 items-start justify-start gap-y-12 md:grid-cols-[0.5fr_1fr] md:gap-x-12 md:gap-y-16 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold text-white md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-4xl font-bold text-white md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white md:text-md"><?php the_sub_field('content'); ?></p>
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
                                               class="inline-flex items-center gap-2 text-center font-semibold text-white transition hover:opacity-80">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="size-5"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('cards')) : ?>
                            <div class="grid w-full auto-cols-fr grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('cards')) : the_row(); ?>
                                    <div>
                                        <div class="mb-5 md:mb-6">
                                            <?php 
                                            $icon = get_sub_field('icon');
                                            if ($icon) : ?>
                                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="size-12 text-white"></i>
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="mb-5 text-xl font-bold text-white md:mb-6 md:text-2xl lg:text-3xl">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p class="text-white"><?php the_sub_field('content'); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_271')) : ?>
        <?php while (have_rows('layout_271')) : the_row(); ?>
            <section class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container relative z-10">
                    <div class="mb-12 max-w-lg text-start text-white md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="w-full">
                                    <div class="mb-5 h-12 md:mb-6">
                                        <?php 
                                        $icon = get_sub_field('icon');
                                        if ($icon) : ?>
                                            <div class="inline-block">
                                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="size-12 text-white"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <h3 class="mb-5 text-xl font-bold text-white md:mb-6 md:text-2xl lg:text-3xl">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p class="text-base text-white"><?php the_sub_field('content'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('buttons')) : ?>
                        <div class="mt-12 flex flex-wrap justify-start gap-4 md:mt-18 lg:mt-20">
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
                                       class="inline-flex items-center gap-2 text-center font-semibold text-white transition hover:opacity-80">
                                        <?php echo esc_html($button_two_label); ?>
                                        <i data-lucide="chevron-right" class="size-5"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="absolute inset-0">
                    <?php 
                    $background_image = get_sub_field('background_image');
                    if ($background_image) : ?>
                        <img src="<?php echo esc_url($background_image); ?>" class="absolute inset-0 size-full object-cover" alt="" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('faq_3')) : ?>
        <?php while (have_rows('faq_3')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[.75fr,1fr] lg:gap-x-20">
                    <div>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>

                        <?php if (have_rows('button')) : ?>
                            <?php while (have_rows('button')) : the_row(); 
                                $button_label = get_sub_field('button_label');
                                $button_link = get_sub_field('button_link');
                            ?>
                                <?php if ($button_link && $button_label) : ?>
                                    <div class="mt-6 md:mt-8">
                                        <a href="<?php echo esc_url($button_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/5">
                                            <?php echo esc_html($button_label); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('faqs')) : ?>
                                </div>
                                <div class="divide-y divide-black/10">
                                    <?php while (have_rows('faqs')) : the_row(); ?>
                                        <div class="accordion-item" x-data="{ open: false }">
                                            <button 
                                                @click="open = !open" 
                                                class="flex w-full items-center justify-between py-4 text-left font-semibold transition md:py-5 md:text-lg"
                                            >
                                                <span><?php the_sub_field('question'); ?></span>
                                                <i 
                                                    data-lucide="chevron-down" 
                                                    class="size-5 transform transition-transform" 
                                                    :class="{ 'rotate-180': open }"
                                                ></i>
                                            </button>
                                            <div 
                                                x-show="open" 
                                                x-transition:enter="transition ease-out duration-200"
                                                x-transition:enter-start="opacity-0 -translate-y-2"
                                                x-transition:enter-end="opacity-100 translate-y-0"
                                                x-transition:leave="transition ease-in duration-150"
                                                x-transition:leave-start="opacity-100 translate-y-0"
                                                x-transition:leave-end="opacity-0 -translate-y-2"
                                                class="pb-4 md:pb-6"
                                            >
                                                <p class="text-black/70"><?php the_sub_field('answer'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('cta_41')) : ?>
        <?php while (have_rows('cta_41')) : the_row(); ?>
            <section class="relative bg-black">
                <div class="mx-auto max-w-[1440px] px-8 py-16 md:px-12 md:py-24 lg:px-16 lg:py-28">
                    <div class="relative flex min-h-[500px] flex-col justify-center">
                        <div class="relative z-10 w-full max-w-lg">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-5xl font-bold text-white md:mb-6 md:text-7xl lg:text-8xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white md:text-md"><?php the_sub_field('content'); ?></p>
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

                        <div class="absolute inset-0 -z-10">
                            <?php 
                            $image = get_sub_field('image');
                            if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                     class="h-full w-full object-cover" />
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-black/50"></div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>