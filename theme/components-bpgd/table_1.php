<div class="table__item table_1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
    <?php if (get_sub_field('title')) { ?>
        <ul class="pl-5 list-disc font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-6':'mb-4' ?>">
            <li>
                <?php the_sub_field('title') ?>
            </li>
        </ul>
    <?php } ?>
    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'overflow-x-auto' ?>">
        <table>
            <?php if (have_rows('table_title')) {
                while (have_rows('table_title')): the_row(); ?>
                    <thead>
                        <tr>
                            <th rowspan="2" class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[7.313%] w-14 px-0':'px-2 whitespace-nowrap w-[50px]' ?>"><?php _e('STT', 'bsc') ?></th>
                            <th rowspan="2" class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[36.72%]':'w-[158px]' ?>"><?php the_sub_field('cot_1') ?></th>
                            <th colspan="2" class="!py-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[55.93%]':'w-[320px]' ?>"><?php the_sub_field('cot_2_title') ?></th>
                        </tr>
                        <tr>
                            <?php
                            if (have_rows('cot_2')) {
                                while (have_rows('cot_2')): the_row();
                            ?>
                                    <th class="w-1/2 !py-2"><?php the_sub_field('cot_2_1') ?></th>
                                    <th class="w-1/2 !py-2"><?php the_sub_field('cot_2_2') ?></th>
                            <?php
                                endwhile;
                            }
                            ?>
                        </tr>
                    </thead>
            <?php
                endwhile;
            }
            ?>
            <?php if (have_rows('table_re')) { ?>
                <tbody>
                    <?php
                    $i = 0;
                    while (have_rows('table_re')): the_row();
                        $i++;
                        $color = ($i % 2 == 1) ? '#EBF4FA' : '#DFF2FF';
                    ?>
                        <tr>
                            <td class="centered" style="background-color:<?php echo $color ?>;"><?php echo $i ?></td>
                            <td style="background-color:<?php echo $color ?>;"><?php the_sub_field('cot_1') ?></td>
                            <td style="background-color:<?php echo $color ?>;"><?php the_sub_field('cot_2') ?></td>
                            <td style="background-color:<?php echo $color ?>;"><?php the_sub_field('cot_3') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <?php if (get_sub_field('content')) { ?>
        <div class="mt-4 font-Helvetica prose-ul:pl-5 prose-ul:list-disc <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-ul:!text-base':'text-xs' ?>">
            <?php the_sub_field('content') ?>
        </div>
    <?php } ?>
</div>