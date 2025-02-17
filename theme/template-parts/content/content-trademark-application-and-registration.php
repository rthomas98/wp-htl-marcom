<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (have_rows('header_76')) : ?>
        <?php while (have_rows('header_76')) : the_row(); ?>
            <section id="relume" class="grid grid-cols-1 gap-y-16 pt-16 md:grid-flow-row md:pt-24 lg:grid-flow-col lg:grid-cols-2 lg:items-center lg:pt-0">
                <div class="mx-[5%] max-w-[40rem] justify-self-start lg:ml-[5vw] lg:mr-20 lg:justify-self-end">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
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
                                        <i data-lucide="chevron-right" class="ml-2 h-4 w-4"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="h-[30rem] overflow-hidden pl-[5vw] pr-[5vw] md:h-[40rem] lg:h-screen lg:pl-0">
                    <div class="grid w-full grid-cols-2 gap-x-4">
                        <?php 
                        $gallery_images = get_sub_field('gallery');
                        if ($gallery_images) : 
                            $total_images = count($gallery_images);
                            $half_count = ceil($total_images / 2);
                            $images_part_one = array_slice($gallery_images, 0, $half_count);
                            $images_part_two = array_slice($gallery_images, $half_count);
                        ?>
                            <div class="grid size-full columns-2 grid-cols-1 gap-4 self-center -mt-[120%] animate-loop-vertically-top">
                                <!-- First set of images -->
                                <?php foreach ($images_part_one as $image) : ?>
                                    <div class="grid size-full grid-cols-1 gap-4">
                                        <div class="relative w-full pt-[120%]">
                                            <img class="absolute inset-0 size-full object-cover"
                                                 src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <!-- Second set of images (duplicated for seamless loop) -->
                                <?php foreach ($images_part_two as $image) : ?>
                                    <div class="grid size-full grid-cols-1 gap-4">
                                        <div class="relative w-full pt-[120%]">
                                            <img class="absolute inset-0 size-full object-cover"
                                                 src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="grid size-full columns-2 grid-cols-1 gap-4 self-center animate-loop-vertically-bottom">
                                <!-- First set of images -->
                                <?php foreach ($images_part_one as $image) : ?>
                                    <div class="grid size-full grid-cols-1 gap-4">
                                        <div class="relative w-full pt-[120%]">
                                            <img class="absolute inset-0 size-full object-cover"
                                                 src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <!-- Second set of images (duplicated for seamless loop) -->
                                <?php foreach ($images_part_two as $image) : ?>
                                    <div class="grid size-full grid-cols-1 gap-4">
                                        <div class="relative w-full pt-[120%]">
                                            <img class="absolute inset-0 size-full object-cover"
                                                 src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_240')) : ?>
        <?php while (have_rows('layout_240')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-pippin">
                <div class="container">
                    <div class="rb-12 mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-4xl font-bold leading-[1.2] md:text-5xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="flex w-full flex-col items-center text-center">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="rb-6 mb-6 md:mb-8">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('title')) : ?>
                                        <h3 class="mb-3 text-3xl font-bold md:mb-4 md:text-4xl">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('content')) : ?>
                                        <p>
                                            <?php the_sub_field('content'); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php
                                    $button_label = get_sub_field('button_label');
                                    $button_link = get_sub_field('button_link');
                                    if ($button_link && $button_label) : ?>
                                        <div class="mt-6 flex items-center gap-4 md:mt-8">
                                            <a href="<?php echo esc_url($button_link); ?>" 
                                               class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                <?php echo esc_html($button_label); ?>
                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cards')) : ?>
        <section id="relume" class="px-[5%] bg-white" 
                 x-data="{ 
                     activeSection: 0,
                     sections: [],
                     init() {
                         this.sections = [...document.querySelectorAll('.scroll-section')];
                         this.checkScroll();
                         window.addEventListener('scroll', () => this.checkScroll());
                         window.addEventListener('resize', () => this.checkScroll());
                     },
                     checkScroll() {
                         const viewportMiddle = window.scrollY + (window.innerHeight / 2);
                         
                         this.sections.forEach((section, index) => {
                             const rect = section.getBoundingClientRect();
                             const absoluteTop = window.scrollY + rect.top;
                             const absoluteBottom = absoluteTop + rect.height;
                             
                             if (viewportMiddle >= absoluteTop && viewportMiddle < absoluteBottom) {
                                 this.activeSection = index;
                             }
                         });
                     }
                 }">
            <div class="container">
                <div class="relative grid gap-x-12 py-16 sm:gap-y-12 md:grid-cols-2 md:py-0 lg:gap-x-20">
                    <div class="grid grid-cols-1 gap-12 md:block">
                        <?php 
                        $index = 0;
                        while (have_rows('cards')) : the_row(); 
                        ?>
                            <div class="scroll-section">
                                <div class="flex flex-col items-start justify-center md:h-screen">
                                    <?php if (get_sub_field('sub_title')) : ?>
                                        <p class="mb-3 font-semibold md:mb-4">
                                            <?php the_sub_field('sub_title'); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('title')) : ?>
                                        <h2 class="rb-5 mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('content')) : ?>
                                        <p class="md:text-md">
                                            <?php the_sub_field('content'); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (have_rows('button')) : ?>
                                        <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                            <?php while (have_rows('button')) : the_row(); 
                                                $button_label = get_sub_field('button_label');
                                                $button_link = get_sub_field('button_link');
                                                if ($button_link && $button_label) : 
                                            ?>
                                                <a href="<?php echo esc_url($button_link); ?>" 
                                                   class="inline-flex items-center gap-2 font-semibold text-black transition hover:text-black/70">
                                                    <?php echo esc_html($button_label); ?>
                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="mt-10 block w-full md:hidden">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full aspect-[16/9] object-cover" />
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="fixed inset-0 -z-10 bg-[#e5e5e5] transition-opacity duration-300"
                                     x-bind:class="{
                                         'opacity-100': activeSection === <?php echo $index; ?>,
                                         'opacity-0': activeSection !== <?php echo $index; ?>
                                     }">
                                </div>
                            </div>
                        <?php 
                        $index++;
                        endwhile; 
                        ?>
                    </div>

                    <div class="sticky top-0 hidden h-screen md:flex md:flex-col md:items-center md:justify-center">
                        <div class="relative w-full aspect-[16/9]">
                            <?php 
                            $index = 0;
                            while (have_rows('cards')) : the_row(); 
                                $image = get_sub_field('image');
                                if ($image) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($image['alt']); ?>"
                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-500"
                                         x-bind:class="{
                                             'opacity-100 translate-y-0': activeSection === <?php echo $index; ?>,
                                             'opacity-0 translate-y-4': activeSection !== <?php echo $index; ?>
                                         }" />
                                <?php endif; ?>
                            <?php 
                            $index++;
                            endwhile; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('faq_1')) : ?>
        <?php while (have_rows('faq_1')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="mx-auto max-w-lg">
                        <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
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
                            <div class="space-y-4">
                                <?php 
                                $index = 0;
                                while (have_rows('faqs')) : the_row(); 
                                    $is_first = $index === 0;
                                ?>
                                    <div class="border-b border-[#e5e5e5]">
                                        <button 
                                            onclick="toggleFaq(<?php echo $index; ?>)"
                                            class="flex w-full items-center justify-between py-4 text-left md:py-5 md:text-md"
                                        >
                                            <span class="font-medium"><?php the_sub_field('question'); ?></span>
                                            <i data-lucide="chevron-down" 
                                               class="h-4 w-4 transition-transform duration-200"
                                               id="chevron-<?php echo $index; ?>"
                                               style="transform: <?php echo $is_first ? 'rotate(180deg)' : 'rotate(0deg)'; ?>">
                                            </i>
                                        </button>
                                        
                                        <div 
                                            id="faq-<?php echo $index; ?>"
                                            class="<?php echo $is_first ? '' : 'hidden'; ?> pb-4 md:pb-6"
                                        >
                                            <p class="text-gray-600"><?php the_sub_field('answer'); ?></p>
                                        </div>
                                    </div>
                                <?php 
                                $index++;
                                endwhile; 
                                ?>
                            </div>

                            <script>
                                function toggleFaq(index) {
                                    const content = document.getElementById(`faq-${index}`);
                                    const chevron = document.getElementById(`chevron-${index}`);
                                    
                                    if (content.classList.contains('hidden')) {
                                        content.classList.remove('hidden');
                                        chevron.style.transform = 'rotate(180deg)';
                                    } else {
                                        content.classList.add('hidden');
                                        chevron.style.transform = 'rotate(0deg)';
                                    }
                                }
                            </script>
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
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_3')) : ?>
        <?php while (have_rows('cta_3')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="w-full max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="mb-5 text-5xl font-bold text-white md:mb-6 md:text-4xl lg:text-6xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
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

                <div class="absolute inset-0 -z-10">
                    <?php 
                    $background_image = get_sub_field('background_image');
                    if ($background_image) : ?>
                        <img src="<?php echo esc_url($background_image['url']); ?>" 
                             alt="<?php echo esc_attr($background_image['alt']); ?>"
                             class="h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-black/50"></div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

</article>