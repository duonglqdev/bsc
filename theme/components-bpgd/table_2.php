<div class="table__item mb-10 table_2">
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
                        <th rowspan="2" class="w-[7.313%] px-0">
                            <?php _e('STT', 'bsc') ?>
                        </th>
                        <th rowspan="2" class="w-[36.72%]"><?php the_sub_field('cot_1') ?></th>
                        <th rowspan="2" class="w-[55.93%] !py-2"><?php the_sub_field('cot_2') ?></th>
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
                    if (get_sub_field('dao_mau_1')) {
                        $color_row_1 = ($i % 2 == 1) ? '#DFF2FF' : '#EBF4FA';
                    } else {
                        $color_row_1 = ($i % 2 == 1) ? '#EBF4FA' : '#DFF2FF';
                    }
                    if (get_sub_field('dao_mau_2')) {
                        $color_row_2 = ($i % 2 == 1) ? '#DFF2FF' : '#EBF4FA';
                    } else {
                        $color_row_2 = ($i % 2 == 1) ? '#EBF4FA' : '#DFF2FF';
                    }
                    $row_1 = get_sub_field('cot_1');
                    $row_2 = get_sub_field('cot_2');
                    $total_row_1 = count($row_1);
                    $total_row_2 = count($row_2);
                    $larger_row_count = max($total_row_1, $total_row_2);
                    if ($total_row_1 == 1) {
                        $total_row_1_display =  $larger_row_count;
                    } else {
                        $total_row_1_display = 1;
                    }
                    if ($total_row_2 == 1) {
                        $total_row_2_display =  $larger_row_count;
                    } else {
                        $total_row_2_display = 1;
                    }
                ?>
                    <tr>
                        <td rowspan="<?php echo $larger_row_count; ?>" style="background-color:<?php echo $color; ?>;"><?php echo $i; ?></td>
                        <?php if (!empty($row_1)) : ?>
                            <td rowspan="<?php echo $total_row_1_display ?>" style="background-color: <?php echo $color_row_1; ?>">
                                <?php echo reset($row_1)['content'];
                                ?>
                            </td>
                        <?php endif; ?>
                        <?php if (!empty($row_2)) : ?>
                            <td rowspan=" <?php echo $total_row_2_display; ?>" style="background-color: <?php echo $color_row_2; ?>">
                                <?php echo reset($row_2)['content']; ?>
                            </td>
                        <?php endif; ?>
                    </tr>
                    <?php
                    if ($total_row_1_display == 1 && $total_row_2_display == 1) {
                        foreach (array_slice($row_1, 1) as $index => $row1_content) {
                            $row2_content = isset(array_slice($row_2, 1)[$index]) ? array_slice($row_2, 1)[$index] : null;
                    ?>
                            <tr>
                                <td style=" background-color: <?php echo $color_row_1; ?>">
                                    <?php echo $row1_content['content']; ?>
                                </td>
                                <td style="background-color: <?php echo $color_row_2; ?>">
                                    <?php echo isset($row2_content['content']) ? $row2_content['content'] : '';
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        if ($total_row_1_display == 1) {
                            foreach (array_slice($row_1, 1) as $row) {
                            ?>
                                <tr>
                                    <td style="background-color: <?php echo $color_row_1; ?>"><?php echo $row['content'] ?></td>
                                </tr>
                            <?php
                            }
                        }
                        if ($total_row_2_display == 1) {
                            foreach (array_slice($row_2, 1) as $row) {
                            ?>
                                <tr>
                                    <td style="background-color: <?php echo $color_row_2; ?>"><?php echo $row['content'] ?></td>
                                </tr>
                    <?php
                            }
                        }
                    }
                    ?>
                <?php
                endwhile; ?>
            </tbody>
        <?php } ?>
    </table>
    <?php if (get_sub_field('content')) { ?>
        <div class="mt-4 font-Helvetica prose-ul:pl-5 prose-ul:list-disc prose-ul:!text-base">
            <?php the_sub_field('content') ?>
        </div>
    <?php } ?>
</div>