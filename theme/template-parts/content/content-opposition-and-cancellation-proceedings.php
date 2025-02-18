<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_15')) : ?>
        <?php while (have_rows('header_15')) : the_row(); ?>
            <section id="relume">
                <div class="px-[5%] py-16 md:py-24 lg:py-28">
                    <div class="container mx-auto">
                        <div class="flex w-full g flex-col">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="mb-5 text-5xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <div class="mt-6 w-full max-w-sm md:mt-8">
                                <form class="mb-4 grid max-w-sm grid-cols-1 gap-y-3 sm:grid-cols-[1fr_max-content] sm:gap-4"
                                      method="post">
                                    <input type="email" 
                                           placeholder="Enter your email"
                                           class="w-full rounded-lg border border-border-primary px-4 py-3 text-base"
                                           required />

                                    <?php if (have_rows('buttons')) : ?>
                                        <?php while (have_rows('buttons')) : the_row(); 
                                            $button_one_label = get_sub_field('button_one_label');
                                            $button_one_link = get_sub_field('button_one_link');
                                        ?>
                                            <?php if ($button_one_link && $button_one_label) : ?>
                                                <button type="submit" 
                                                        class="inline-flex items-center rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-black/90">
                                                    <?php echo esc_html($button_one_label); ?>
                                                </button>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </form>
                                <p class="text-xs">
                                    By clicking Sign Up you're confirming that you agree with our
                                    <a href="#" class="underline">Terms and Conditions</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                $image_one = get_sub_field('image_one');
                if ($image_one) : ?>
                    <div>
                        <img src="<?php echo esc_url($image_one['url']); ?>" 
                             alt="<?php echo esc_attr($image_one['alt']); ?>"
                             class="aspect-video h-full w-full object-cover" />
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_25')) : ?>
        <?php while (have_rows('layout_25')) : the_row(); ?>
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
                                <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
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
                                            <?php if (get_sub_field('stat')) : ?>
                                                <h3 class="mb-2 text-4xl font-bold md:text-5xl lg:text-6xl">
                                                    <?php the_sub_field('stat'); ?>%
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <p>
                                                    <?php the_sub_field('title'); ?>
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
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="w-full object-cover" />
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_10')) : ?>
        <?php while (have_rows('layout_10')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
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

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 text-black md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" 
                                                       class="size-12"></i>
                                                </div>
                                            <?php endif; ?>

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

    <?php if (have_rows('layout_207')) : ?>
        <?php while (have_rows('layout_207')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto bg-white">
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

                        <div class="order-1 md:order-2 p-16">
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
                                <p class="mb-5 md:mb-6 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('list')) : ?>
                                <div class="grid grid-cols-1 gap-4 py-2">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <div class="flex self-start">
                                            <div class="mr-4 flex-none self-start text-black">
                                                <i data-lucide="check" class="size-6"></i>
                                            </div>
                                            <?php if (get_sub_field('title')) : ?>
                                                <p>
                                                    <?php the_sub_field('title'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
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
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_2')) : ?>
        <?php while (have_rows('faq_2')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 w-full max-w-lg md:mb-18 lg:mb-20">
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

                    <?php if (have_rows('faqs')) : ?>
                        <div class="divide-y divide-border-primary">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <details class="group">
                                    <?php if (get_sub_field('question')) : ?>
                                        <summary class="flex cursor-pointer items-center justify-between py-4 text-lg font-semibold md:py-5 md:text-xl">
                                            <?php the_sub_field('question'); ?>
                                            <div class="ml-4">
                                                <i data-lucide="plus" class="h-5 w-5 transition-transform group-open:rotate-45"></i>
                                            </div>
                                        </summary>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('answer')) : ?>
                                        <div class="pb-4 pt-2 md:pb-6">
                                            <p class="text-gray-600">
                                                <?php the_sub_field('answer'); ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </details>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('cta')) : ?>
                        <?php while (have_rows('cta')) : the_row(); ?>
                            <div class="mt-12 md:mt-18 lg:mt-20">
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

                                <?php 
                                $button_label = get_sub_field('button_label');
                                $button_link = get_sub_field('button_link');
                                if ($button_link && $button_label) : ?>
                                    <div class="mt-6 md:mt-8">
                                        <a href="<?php echo esc_url($button_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
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

    <?php if (have_rows('cta_7')) : ?>
        <?php while (have_rows('cta_7')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28 bg-black text-white overflow-hidden">
                <?php if (get_sub_field('backend_image')) : ?>
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo esc_url(get_sub_field('backend_image')); ?>" 
                             alt="Background"
                             class="h-full w-full object-cover opacity-50" />
                    </div>
                <?php endif; ?>

                <div class="container mx-auto relative z-10">
                    <div class="grid w-full grid-cols-1 items-start justify-between gap-6 md:grid-cols-[1fr_max-content] md:gap-x-12 md:gap-y-8 lg:gap-x-20">
                        <div class="md:mr-12 lg:mr-0">
                            <div class="w-full max-w-lg">
                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="mb-3 text-4xl font-bold leading-[1.2] md:mb-4 md:text-5xl lg:text-6xl">
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
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>