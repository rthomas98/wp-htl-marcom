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

    <?php if (have_rows('header_98')) : ?>
        <?php while (have_rows('header_98')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-12 md:py-16 lg:py-20">
                <div class="container mx-auto">
                    <div class="relative flex min-h-[32rem] flex-col items-start justify-center p-8 md:min-h-[40rem] md:p-16">
                        <div class="relative z-10 w-full max-w-md">
                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="mb-5 text-5xl font-bold text-white md:mb-6 md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-white/90 md:text-md">
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

                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div class="absolute inset-0 -z-0">
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="h-full w-full object-cover" />
                                <div class="absolute inset-0 bg-black/50"></div>
                            </div>
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
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="check" class="size-12 text-black"></i>
                                            </div>
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

    <?php if (have_rows('layout_102')) : ?>
        <?php while (have_rows('layout_102')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-white">
                <div class="container mx-auto">
                    <div class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-4xl font-bold leading-[1.2] md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <div>
                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="check" class="size-12 text-black"></i>
                                            </div>
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

                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="w-full rounded-lg object-cover" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_408')) : ?>
        <?php while (have_rows('layout_408')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
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

                    <?php if (have_rows('cards')) : ?>
                        <div class="cards-container relative grid grid-cols-1 gap-6" data-scroll-container>
                            <?php 
                            $card_count = 0;
                            while (have_rows('cards')) : the_row(); 
                                $is_even = $card_count % 2 === 0;
                            ?>
                                <div class="card-item h-auto overflow-hidden rounded-lg border border-border-primary bg-white transition-all duration-500 md:sticky md:top-[10%] md:mb-[10vh] md:h-[80vh]" data-scroll-item>
                                    <div class="grid h-full grid-cols-1 md:grid-cols-2">
                                        <div class="<?php echo $is_even ? 'md:order-1' : 'md:order-2'; ?> flex h-full flex-col justify-center p-6 md:p-8 lg:p-12">
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-2 font-semibold">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="mb-6 md:mb-8">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (have_rows('buttons')) : ?>
                                                <div class="flex items-center gap-4">
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

                                        <div class="<?php echo $is_even ? 'md:order-2' : 'md:order-1'; ?> flex h-full items-center justify-center">
                                            <?php 
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="h-full w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $card_count++;
                            endwhile; ?>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const container = document.querySelector('[data-scroll-container]');
                                const cards = document.querySelectorAll('[data-scroll-item]');
                                const totalCards = cards.length;

                                if (!container || !cards.length || window.innerWidth < 768) return;

                                function updateScales() {
                                    const containerRect = container.getBoundingClientRect();
                                    const containerTop = containerRect.top;
                                    const viewportHeight = window.innerHeight;
                                    const scrollProgress = -containerTop / (containerRect.height - viewportHeight);

                                    cards.forEach((card, index) => {
                                        const cardProgress = index / (totalCards - 1);
                                        const scale = scrollProgress > cardProgress ? 0.8 : 1;
                                        card.style.transform = `scale(${scale})`;
                                    });
                                }

                                // Initial update
                                updateScales();

                                // Update on scroll
                                window.addEventListener('scroll', () => {
                                    window.requestAnimationFrame(updateScales);
                                });

                                // Update on resize
                                window.addEventListener('resize', () => {
                                    if (window.innerWidth < 768) {
                                        cards.forEach(card => card.style.transform = '');
                                    } else {
                                        updateScales();
                                    }
                                });

                                // Clean up
                                window.addEventListener('unload', () => {
                                    window.removeEventListener('scroll', updateScales);
                                    window.removeEventListener('resize', updateScales);
                                });
                            });
                        </script>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_422')) : ?>
        <?php while (have_rows('layout_422')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
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

                    <?php if (have_rows('cards')) : ?>
                        <div class="flex flex-col justify-between gap-6 md:flex-row md:gap-8">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="group relative flex w-full flex-col overflow-hidden rounded-lg bg-white shadow-lg md:w-1/2 lg:h-full transition-all duration-300 ease-in-out hover:md:w-[70%]">
                                    <div class="absolute inset-0 flex size-full flex-col items-center justify-center self-start">
                                        <div class="absolute inset-0 bg-black/50 transition-opacity duration-300 group-hover:opacity-70"></div>
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="size-full object-cover" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="relative flex h-full min-h-[70vh] flex-col justify-end p-6 md:p-8 lg:p-12">
                                        <?php if (get_sub_field('sub_title')) : ?>
                                            <p class="mb-2 font-semibold text-white">
                                                <?php the_sub_field('sub_title'); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="text-4xl font-bold leading-[1.2] text-white md:text-5xl lg:text-6xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <div class="mt-5 opacity-100 transition-all duration-300 md:mt-6 lg:opacity-0 lg:group-hover:opacity-100">
                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-white">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php 
                                            $button_label = get_sub_field('button_label');
                                            $button_link = get_sub_field('button_link');
                                            if ($button_link && $button_label) : ?>
                                                <div class="mt-6 md:mt-8">
                                                    <a href="<?php echo esc_url($button_link); ?>" 
                                                       class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/90">
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

    <?php if (have_rows('cta_51')) : ?>
        <?php while (have_rows('cta_51')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-cod-gray">
                <div class="container mx-auto bg-white">
                    <div class="flex flex-col items-center border border-border-primary p-8 md:p-12 lg:p-16">
                        <div class="max-w-lg text-center">
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
        <?php endwhile; ?>
    <?php endif; ?>

</article>