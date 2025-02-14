<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_73')) : ?>
        <?php while (have_rows('header_73')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="flex flex-col">
                        <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                            <div class="w-full max-w-lg">
                                <?php if (get_sub_field('title')) : ?>
                                    <h1 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                        <?php the_sub_field('title'); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if (get_sub_field('content')) : ?>
                                    <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                                <?php endif; ?>
                                
                                <div class="mt-6 w-full max-w-sm md:mt-8">
                                    <form class="rb-4 mb-4 grid max-w-sm grid-cols-1 gap-y-3 sm:grid-cols-[1fr_max-content] sm:gap-4"
                                          method="post" 
                                          action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                                        
                                        <input type="hidden" name="action" value="contact_form_submission" />
                                        <?php wp_nonce_field('contact_form_submit', 'contact_form_nonce'); ?>
                                        
                                        <div class="relative">
                                            <i data-lucide="mail" class="absolute left-4 top-1/2 size-5 -translate-y-1/2 text-gray-400"></i>
                                            <input type="email" 
                                                   name="email" 
                                                   id="email" 
                                                   placeholder="Enter your email" 
                                                   required
                                                   class="w-full rounded-lg border border-gray-300 px-4 py-3 pl-12 text-base focus:border-black focus:outline-none focus:ring-1 focus:ring-black" />
                                        </div>
                                        
                                        <button type="submit" 
                                                class="inline-flex items-center gap-2 rounded-lg bg-black px-6 py-3 text-center font-semibold text-white transition hover:bg-black/90">
                                            Sign up
                                            <i data-lucide="arrow-right" class="size-5"></i>
                                        </button>
                                    </form>
                                    <p class="text-xs text-gray-600">
                                        By clicking Sign Up you're confirming that you agree with our
                                        <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="font-semibold text-black underline hover:opacity-80">Terms and Conditions</a>.
                                    </p>
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
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('contact_2')) : ?>
        <?php while (have_rows('contact_2')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="mx-auto mb-8 w-full max-w-lg text-center md:mb-10 lg:mb-12">
                        <?php if (get_sub_field('sub_title')) : ?>
                            <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="rb-5 mb-5 text-3xl font-bold md:mb-6 md:text-4xl lg:text-5xl">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('content')) : ?>
                            <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if (get_sub_field('form')) : ?>
                        <div class="mx-auto max-w-lg">
                            <?php echo do_shortcode(get_sub_field('form')); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_4')) : ?>
        <?php while (have_rows('layout_4')) : the_row(); ?>
            <section class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <?php if (get_sub_field('sub_title')) : ?>
                                <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_title'); ?></p>
                            <?php endif; ?>

                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-6 md:mb-8 md:text-md"><?php the_sub_field('content'); ?></p>
                            <?php endif; ?>

                            <?php if (have_rows('small_card')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('small_card')) : the_row(); ?>
                                        <div>
                                            <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                <?php the_sub_field('title'); ?>
                                            </h6>
                                            <p><?php the_sub_field('content'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                    <?php while (have_rows('buttons')) : the_row(); ?>
                                        <?php 
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
                                                <i data-lucide="chevron-right" class="size-5"></i>
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

    <?php if (have_rows('layout_209')) : ?>
        <?php while (have_rows('layout_209')) : the_row(); ?>
            <section class="bg-[#FFE8E5] px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container">
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

                        <div class="order-1 md:order-2">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_sub_field('content')) : ?>
                                <p class="mb-5 md:mb-6 md:text-md"><?php the_sub_field('content'); ?></p>
                            <?php endif; ?>

                            <?php if (have_rows('list')) : ?>
                                <div class="grid grid-cols-1 gap-4 py-2">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <div class="flex self-start">
                                            <div class="mr-4 flex-none self-start">
                                                <i data-lucide="check-circle" class="size-6"></i>
                                            </div>
                                            <p><?php the_sub_field('item'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
