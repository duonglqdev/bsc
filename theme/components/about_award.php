<section class="about_award py-[50px] bg-primary-100" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('reward')) { ?>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-10 font-Helvetica xl:mx-16">
                <?php while (have_rows('reward')): the_row(); ?>
                    <div class="rounded-2xl bg-gradient-blue-50 lg:p-10 p-5 h-full group">
                        <div class="mb-10">
                            <?php echo wp_get_attachment_image(get_sub_field('icon'), 'large', '', array('class' => 'h-full object-contain w-auto m-auto max-h-[140px] transition-all duration-500 group-hover:scale-105')) ?>
                        </div>
                        <?php if (get_sub_field('mota')) { ?>
                            <div class="line-clamp-6">
                                <?php the_sub_field('mota') ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>

</section>