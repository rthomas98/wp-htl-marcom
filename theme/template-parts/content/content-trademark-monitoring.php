<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (have_rows('header_102')) : ?>
        <?php while (have_rows('header_102')) : the_row(); ?>
            <section id="relume" 
                     class="grid grid-cols-1 items-center gap-y-16 overflow-hidden pt-16 sm:overflow-auto md:pt-24 lg:grid-cols-[50%_50%] lg:gap-y-0 lg:pt-0">
                <div class="mx-[5%] max-w-md justify-self-start lg:ml-[5vw] lg:mr-20 lg:justify-self-end">
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

                    <?php if (have_rows('button')) : ?>
                        <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                            <?php while (have_rows('button')) : the_row(); 
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
                                       class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                        <?php echo esc_html($button_two_label); ?>
                                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="relative clear-both h-[300px] max-h-[60rem] min-h-screen w-full bg-[#ddd] text-center">
                    <?php if (have_rows('slider')) : ?>
                        <div class="relative left-0 right-0 z-10 block h-full overflow-hidden whitespace-nowrap pl-4" id="slider-container">
                            <?php 
                            $index = 0;
                            while (have_rows('slider')) : the_row(); 
                                $image = get_sub_field('image');
                            ?>
                                <div class="absolute inset-0 flex h-screen flex-col transition-opacity duration-300 slider-item <?php echo $index === 0 ? 'active' : ''; ?>"
                                     data-index="<?php echo $index; ?>">
                                    <?php if ($image) : ?>
                                        <div class="relative flex-1">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="absolute h-full w-full object-cover" />
                                        </div>
                                    <?php endif; ?>

                                    <div class="relative bg-[#f2f2f2] px-6 pb-32 pt-6 sm:px-8 sm:pt-8">
                                        <div class="w-full max-w-lg text-left">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h6 class="mb-1 text-md font-bold leading-[1.4] md:text-xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h6>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p class="text-left">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $index++;
                            endwhile; 
                            ?>

                            <div class="absolute bottom-[52px] left-8 right-auto top-auto flex w-full items-start justify-start">
                                <?php for ($i = 0; $i < $index; $i++) : ?>
                                    <button type="button"
                                            class="mx-[3px] inline-block h-2 w-2 rounded-full transition-colors slider-dot <?php echo $i === 0 ? 'bg-black' : 'bg-neutral-300'; ?>"
                                            data-index="<?php echo $i; ?>">
                                    </button>
                                <?php endfor; ?>
                            </div>

                            <button type="button" class="absolute bottom-2 right-[5.5rem] top-auto h-12 w-12 text-black transition hover:opacity-70 md:right-24 prev-slide">
                                <i data-lucide="chevron-left" class="h-6 w-6"></i>
                            </button>
                            <button type="button" class="absolute bottom-2 right-8 top-auto h-12 w-12 text-black transition hover:opacity-70 next-slide">
                                <i data-lucide="chevron-right" class="h-6 w-6"></i>
                            </button>
                        </div>

                        <style>
                            .slider-item {
                                opacity: 0;
                                pointer-events: none;
                                transition: opacity 0.3s ease;
                            }
                            .slider-item.active {
                                opacity: 1;
                                pointer-events: auto;
                            }
                        </style>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const container = document.getElementById('slider-container');
                                const slides = container.querySelectorAll('.slider-item');
                                const dots = container.querySelectorAll('.slider-dot');
                                const prevBtn = container.querySelector('.prev-slide');
                                const nextBtn = container.querySelector('.next-slide');
                                let currentIndex = 0;
                                const totalSlides = slides.length;

                                function showSlide(index) {
                                    slides.forEach(slide => slide.classList.remove('active'));
                                    dots.forEach(dot => dot.classList.replace('bg-black', 'bg-neutral-300'));
                                    
                                    slides[index].classList.add('active');
                                    dots[index].classList.replace('bg-neutral-300', 'bg-black');
                                    currentIndex = index;
                                }

                                function nextSlide() {
                                    showSlide((currentIndex + 1) % totalSlides);
                                }

                                function prevSlide() {
                                    showSlide((currentIndex - 1 + totalSlides) % totalSlides);
                                }

                                // Event Listeners
                                prevBtn.addEventListener('click', prevSlide);
                                nextBtn.addEventListener('click', nextSlide);
                                
                                dots.forEach(dot => {
                                    dot.addEventListener('click', () => {
                                        const index = parseInt(dot.dataset.index);
                                        showSlide(index);
                                    });
                                });

                                // Autoplay
                                setInterval(nextSlide, 5000);
                            });
                        </script>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_249')) : ?>
        <?php while (have_rows('layout_249')) : the_row(); ?>
            <section id="relume" class="bg-cod-gray px-[5%] py-16 text-white md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="max-w-lg">
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold text-white md:mb-4">
                                    <?php the_sub_field('sub_title'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-4xl font-bold text-white md:mb-6 md:text-5xl lg:text-6xl">
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

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="flex w-full flex-col">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="aspect-[16/9] w-full">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="h-full w-full object-cover" />
                                        </div>
                                    <?php endif; ?>

                                    <div class="mt-4 md:mt-6">
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mb-3 text-2xl font-bold text-white md:mb-4 md:text-3xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('content')) : ?>
                                            <p class="text-white"><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    </div>
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
                                       class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-center font-semibold text-black transition hover:bg-white/90">
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
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_367')) : ?>
        <?php while (have_rows('layout_367')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto max-w-lg text-center">
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
                    </div>

                    <div class="grid grid-cols-1 gap-6 md:gap-8">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
                            <?php 
                            $index = 0;
                            $featured_card_id = null;
                            while (have_rows('cards')) : the_row(); 
                                if ($index < 2) :
                            ?>
                                <div class="flex flex-col border border-border-primary">
                                    <div class="flex flex-1 flex-col justify-center p-6 md:p-8 lg:p-12">
                                        <div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-5 md:mb-6">
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon')); ?>" class="h-12 w-12"></i>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p><?php the_sub_field('content'); ?></p>
                                            <?php endif; ?>
                                        </div>

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
                            <?php 
                                else :
                                    $featured_card_id = get_row_index();
                                endif;
                                $index++;
                            endwhile; 

                            if ($featured_card_id) :
                                while (have_rows('cards')) :
                                    the_row();
                                    if (get_row_index() === $featured_card_id) :
                                        $image = get_sub_field('image');
                            ?>
                                <div class="flex flex-col border border-border-primary md:col-span-2 md:row-span-2 lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-3">
                                    <div class="flex flex-1 flex-col justify-center p-6 md:p-8 lg:p-12">
                                        <div>
                                            <?php if (get_sub_field('sub_title')) : ?>
                                                <p class="mb-2 text-sm font-semibold">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('content')) : ?>
                                                <p><?php the_sub_field('content'); ?></p>
                                            <?php endif; ?>
                                        </div>

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
                                                           class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                            <?php echo esc_html($button_two_label); ?>
                                                            <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($image) : ?>
                                        <div class="aspect-[16/9] w-full">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="h-full w-full object-cover" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_8')) : ?>
        <?php while (have_rows('faq_8')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[.75fr,1fr] lg:gap-x-20">
                    <div>
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

                    <?php if (have_rows('faqs')) : ?>
                        <div class="grid grid-cols-1 gap-x-12 gap-y-10 md:gap-y-12">
                            <?php while (have_rows('faqs')) : the_row(); ?>
                                <div>
                                    <?php if (get_sub_field('question')) : ?>
                                        <h3 class="mb-3 text-base font-bold md:mb-4 md:text-md">
                                            <?php the_sub_field('question'); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('answer')) : ?>
                                        <p><?php the_sub_field('answer'); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
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

</article>