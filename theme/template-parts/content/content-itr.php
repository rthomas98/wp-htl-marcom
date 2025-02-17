<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_126')) : ?>
        <?php while (have_rows('header_126')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 md:gap-16">
                        <div>
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

                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex gap-x-4 md:mt-8">
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

                        <div class="relative flex w-full">
                            <?php 
                            $image_one = get_sub_field('image_one');
                            if ($image_one) : ?>
                                <div class="mr-[30%]">
                                    <img src="<?php echo esc_url($image_one['url']); ?>" 
                                         alt="<?php echo esc_attr($image_one['alt']); ?>"
                                         class="aspect-[2/3] h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_two = get_sub_field('image_two');
                            if ($image_two) : ?>
                                <div class="absolute bottom-auto left-auto right-0 top-[10%] w-1/2">
                                    <img src="<?php echo esc_url($image_two['url']); ?>" 
                                         alt="<?php echo esc_attr($image_two['alt']); ?>"
                                         class="aspect-square h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_392')) : ?>
        <?php while (have_rows('layout_392')) : the_row(); ?>
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
                        <div class="grid auto-cols-fr gap-6 md:grid-cols-2 md:gap-8 lg:grid-cols-3">
                            <?php 
                            $index = 0;
                            while (have_rows('cards')) : the_row(); 
                                $image = get_sub_field('image');
                                $is_first = $index === 0;
                            ?>
                                <div class="grid auto-cols-fr grid-cols-1 border border-border-primary bg-white <?php echo $is_first ? 'first-of-type:row-span-2 first-of-type:flex first-of-type:flex-col sm:col-span-2 sm:grid-cols-2 lg:first-of-type:col-span-1' : ''; ?>">
                                    <div class="block p-6 first-of-type:flex-1 sm:flex sm:flex-col sm:justify-center md:p-8">
                                        <div>
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-2 font-semibold">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

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
                                        </div>

                                        <?php if (get_sub_field('icon_picker')) : ?>
                                            <div class="mt-5 md:mt-6">
                                                <a href="#" class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                    Button
                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($image) : ?>
                                        <div class="flex size-full flex-col items-center justify-center self-start lg:h-auto">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full object-cover" />
                                        </div>
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

    <?php if (have_rows('layout_245')) : ?>
        <?php while (have_rows('layout_245')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="flex flex-col items-start">
                        <div class="mb-12 grid grid-cols-1 items-start justify-between gap-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20">
                            <div>
                                <?php if (get_sub_field('sub_title')) : ?>
                                    <p class="mb-3 font-semibold md:mb-4">
                                        <?php the_sub_field('sub_title'); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="text-5xl font-bold md:text-6xl lg:text-7xl">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                <?php endif; ?>
                            </div>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('sections')) : ?>
                            <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                                <?php while (have_rows('sections')) : the_row(); ?>
                                    <div>
                                        <?php if (get_sub_field('icon')) : ?>
                                            <div class="mb-5 text-black md:mb-6">
                                                <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" 
                                                   class="size-12 stroke-2"></i>
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
                        <div class="grid grid-cols-1 items-center gap-y-12 md:grid-cols-2 md:gap-x-12 lg:gap-x-20">
                            <div class="relative">
                                <?php 
                                $index = 0;
                                while (have_rows('simple_cards')) : the_row(); 
                                    $image = get_sub_field('image');
                                    $video = get_sub_field('video');
                                    $is_first = $index === 0;
                                ?>
                                    <div class="<?php echo !$is_first ? 'hidden' : ''; ?> tab-content" data-tab="<?php echo $index; ?>">
                                        <?php if ($video) : ?>
                                            <button class="relative flex w-full items-center justify-center" 
                                                    onclick="openVideoModal('video-<?php echo $index; ?>')">
                                                <img src="<?php echo esc_url($video['thumbnail']); ?>" 
                                                     alt="<?php echo esc_attr($video['alt']); ?>"
                                                     class="size-full object-cover" />
                                                <span class="absolute inset-0 z-10 bg-black/50"></span>
                                                <i data-lucide="play-circle" class="absolute z-20 size-16 text-white"></i>
                                            </button>
                                            <div id="video-modal-<?php echo $index; ?>" class="fixed inset-0 z-50 hidden items-center justify-center">
                                                <div class="absolute inset-0 bg-black/50"></div>
                                                <div class="relative w-full max-w-4xl">
                                                    <iframe src="<?php echo esc_url($video['url']); ?>" 
                                                            class="aspect-video w-full"
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                            allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php elseif ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="size-full object-cover" />
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
                                while (have_rows('simple_cards')) : the_row(); 
                                    $is_first = $index === 0;
                                ?>
                                    <button onclick="switchTab(<?php echo $index; ?>)"
                                            class="tab-trigger flex flex-col items-start whitespace-normal border-l-2 py-4 pl-6 pr-0 text-left transition-all md:pl-8 <?php echo $is_first ? 'border-black text-black' : 'border-transparent'; ?>"
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
                            function switchTab(tabIndex) {
                                // Hide all content
                                document.querySelectorAll('.tab-content').forEach(content => {
                                    content.classList.add('hidden');
                                });
                                
                                // Remove active state from all triggers
                                document.querySelectorAll('.tab-trigger').forEach(trigger => {
                                    trigger.classList.remove('border-black', 'text-black');
                                    trigger.classList.add('border-transparent');
                                });
                                
                                // Show selected content
                                document.querySelector(`.tab-content[data-tab="${tabIndex}"]`).classList.remove('hidden');
                                
                                // Activate selected trigger
                                document.querySelector(`.tab-trigger[data-tab="${tabIndex}"]`).classList.add('border-black', 'text-black');
                                document.querySelector(`.tab-trigger[data-tab="${tabIndex}"]`).classList.remove('border-transparent');
                            }

                            function openVideoModal(modalId) {
                                document.getElementById(`video-modal-${modalId}`).classList.remove('hidden');
                                document.getElementById(`video-modal-${modalId}`).classList.add('flex');
                            }

                            // Close modal when clicking outside
                            document.addEventListener('click', function(e) {
                                if (e.target.classList.contains('fixed')) {
                                    e.target.classList.remove('flex');
                                    e.target.classList.add('hidden');
                                }
                            });
                        </script>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container mx-auto bg-white">
                    <div class="grid auto-cols-fr grid-cols-1 border border-border-primary lg:grid-cols-2">
                        <div class="flex flex-col justify-center p-8 md:p-12">
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

                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <div class="flex items-center justify-center">
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="h-full w-full object-cover" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_5')) : ?>
        <?php while (have_rows('faq_5')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 max-w-lg md:mb-18 lg:mb-20">
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
                                <details class="group border border-border-primary px-5 md:px-6">
                                    <summary class="flex cursor-pointer items-center justify-between py-4 text-left font-semibold outline-none md:py-5 md:text-md">
                                        <?php the_sub_field('question'); ?>
                                        <i data-lucide="plus" 
                                           class="size-7 shrink-0 transform transition-transform duration-300 group-open:rotate-45 md:size-8"></i>
                                    </summary>
                                    <div class="pb-4 md:pb-6">
                                        <?php the_sub_field('answer'); ?>
                                    </div>
                                </details>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mt-12 md:mt-18 lg:mt-20">
                        
                        <p class="md:text-md">
                            <?php the_sub_field('footer_content'); ?>
                        </p>
                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 md:mt-8">
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                ?>
                                    <?php if ($button_one_link && $button_one_label) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center rounded-lg border border-black px-6 py-3 text-center font-semibold text-black transition hover:bg-black/10">
                                            <?php echo esc_html($button_one_label); ?>
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