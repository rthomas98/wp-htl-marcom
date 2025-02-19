<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_119')) : ?>
        <?php while (have_rows('header_119')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 grid grid-cols-1 items-start gap-5 md:mb-18 md:grid-cols-2 md:gap-12 lg:mb-20 lg:gap-20">
                        <?php if (get_sub_field('title')) : ?>
                            <h1 class="text-5xl font-bold md:text-6xl lg:text-7xl">
                                <?php the_sub_field('title'); ?>
                            </h1>
                        <?php endif; ?>

                        <div class="mx-[7.5%] flex flex-col justify-end md:mt-48">
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
                    </div>

                    <div class="grid grid-cols-2 items-start gap-6 sm:gap-8 md:gap-16">
                        <?php 
                        $image_one = get_sub_field('image_one');
                        if ($image_one) : ?>
                            <div class="w-full">
                                <img src="<?php echo esc_url($image_one['url']); ?>" 
                                     alt="<?php echo esc_attr($image_one['alt']); ?>"
                                     class="aspect-square h-full w-full object-cover" />
                            </div>
                        <?php endif; ?>

                        <?php 
                        $image_two = get_sub_field('image_two');
                        if ($image_two) : ?>
                            <div class="mt-[15%] w-full">
                                <img src="<?php echo esc_url($image_two['url']); ?>" 
                                     alt="<?php echo esc_attr($image_two['alt']); ?>"
                                     class="aspect-square h-full w-full object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_102')) : ?>
        <?php while (have_rows('layout_102')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
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
                             class="w-full object-cover" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_103')) : ?>
        <?php while (have_rows('layout_103')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28 bg-cod-gray">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold text-white md:mb-4">
                                    <?php the_sub_field('sub_title'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h1 class="text-5xl font-bold text-white md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                            <?php endif; ?>
                        </div>

                        <div>
                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 text-white md:mb-8 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('simple_cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2 sm:gap-y-8">
                                    <?php while (have_rows('simple_cards')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-3 text-white md:mb-4">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" 
                                                       class="size-12 stroke-2"></i>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-3 text-lg font-bold leading-[1.4] text-white md:mb-4 md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-white">
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
                </div>

                <?php if (get_sub_field('video')) : ?>
                    <div class="absolute inset-0 -z-10">
                        <video class="absolute inset-0 aspect-video h-full w-full object-cover" autoplay loop muted playsinline>
                            <source src="<?php echo esc_url(get_sub_field('video')); ?>" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_500')) : ?>
        <?php while (have_rows('layout_500')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 md:w-auto lg:mb-20">
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
                            <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
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

                    <?php if (have_rows('simple_cards')) : ?>
                        <div class="grid grid-cols-1 items-center gap-y-12 md:grid-cols-2 md:gap-x-12 lg:gap-x-20" id="tabs-container">
                            <div class="relative">
                                <?php 
                                $index = 0;
                                while (have_rows('simple_cards')) : the_row(); 
                                    $image = get_sub_field('image');
                                ?>
                                    <div class="tab-content relative <?php echo $index === 0 ? 'active' : 'hidden'; ?> transition-all duration-300">
                                        <?php if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full" />
                                        <?php endif; ?>
                                    </div>
                                <?php 
                                    $index++;
                                endwhile; 
                                ?>
                            </div>

                            <div class="grid grid-cols-1 items-center gap-x-4">
                                <?php 
                                $index = 0;
                                while (have_rows('simple_cards')) : the_row(); ?>
                                    <button class="tab-trigger flex flex-col items-start whitespace-normal border-l-2 py-4 pl-6 pr-0 text-left transition-all md:pl-8 <?php echo $index === 0 ? 'border-black' : 'border-transparent'; ?>"
                                            data-tab="<?php echo $index; ?>">
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
                                    </button>
                                <?php 
                                    $index++;
                                endwhile; 
                                ?>
                            </div>
                        </div>

                        <script>
                            (function() {
                                function initTabs() {
                                    const tabsContainer = document.getElementById('tabs-container');
                                    if (!tabsContainer) return;

                                    const tabTriggers = tabsContainer.getElementsByClassName('tab-trigger');
                                    const tabContents = tabsContainer.getElementsByClassName('tab-content');

                                    Array.from(tabTriggers).forEach((trigger, index) => {
                                        trigger.addEventListener('click', function() {
                                            // Remove active classes
                                            Array.from(tabTriggers).forEach(t => {
                                                t.classList.remove('border-black');
                                                t.classList.add('border-transparent');
                                            });

                                            // Add active class to clicked trigger
                                            this.classList.remove('border-transparent');
                                            this.classList.add('border-black');

                                            // Hide all content
                                            Array.from(tabContents).forEach(content => {
                                                content.style.display = 'none';
                                                content.classList.add('hidden');
                                            });

                                            // Show selected content
                                            if (tabContents[index]) {
                                                tabContents[index].style.display = 'block';
                                                tabContents[index].classList.remove('hidden');
                                            }
                                        });
                                    });
                                }

                                // Initialize on page load
                                if (document.readyState === 'loading') {
                                    document.addEventListener('DOMContentLoaded', initTabs);
                                } else {
                                    initTabs();
                                }
                            })();
                        </script>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_2')) : ?>
        <?php while (have_rows('faq_2')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
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
            <section id="relume" class="bg-cod-gray px-[5%] py-16 md:py-24 lg:py-28">
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
                                       class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-cod-gray transition hover:bg-white/90">
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