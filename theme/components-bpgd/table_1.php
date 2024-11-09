<div class="table__item mb-10 table_1">
    <?php if (get_sub_field('title')) { ?>
        <ul class="pl-5 list-disc mb-6 font-bold lg:text-xl">
            <li>
                <?php the_sub_field('title') ?>
            </li>
        </ul>
    <?php } ?>
    <table>
        <?php if (have_rows('table_title')) {
            while (have_rows('table_title')): the_row(); ?>
                <thead>
                    <tr>
                        <th rowspan="2" class="w-[7.313%] px-0"><?php _e('STT', 'bsc') ?></th>
                        <th rowspan="2" class="w-[36.72%]"><?php the_sub_field('cot_1') ?></th>
                        <th colspan="2" class="w-[55.93%] !py-2"><?php the_sub_field('cot_2_title') ?></th>
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
    <?php if (get_sub_field('content')) { ?>
        <div class="mt-4 font-Helvetica prose-ul:pl-5 prose-ul:list-disc prose-ul:!text-base">
            <?php the_sub_field('content') ?>
        </div>
    <?php } ?>
</div>