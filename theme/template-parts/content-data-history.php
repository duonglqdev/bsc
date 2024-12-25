<?php if ($args['data']) {
    $record = $args['data'];
?>
    <tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
        <td>
            <?php
            if ($record['TRADE_DATE']) {
                $date = new DateTime($record['TRADE_DATE']);
                echo $date->format('d/m/Y');
            }
            ?>
        </td>
        <td class="text-right !pr-8"><?php echo bsc_number_format($record['CLOSE_PRICE']) ?></td>
        <?php if ($record['CLOSE_PRICE'] && $record['REF_PRICE']) {
            if (($record['CLOSE_PRICE'] - $record['REF_PRICE']) > 0) {
                $text_color_class_GetForeignInvestors = 'text-[#1CCD83]';
            } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) < 0) {
                $text_color_class_GetForeignInvestors = 'text-[#FE5353]';
            } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) == 0) {
                $text_color_class_GetForeignInvestors = 'text-[#EB0]';
            } else {
                $text_color_class_GetForeignInvestors = '';
            }
        }
        ?>
        <td class="<?php echo $text_color_class_GetForeignInvestors ?>">
            <?php
            if ($record['CLOSE_PRICE']) {
                echo bsc_number_format(($record['CLOSE_PRICE'] - $record['REF_PRICE']) / 1000);
            }
            ?>
            (<?php echo bsc_number_format((($record['CLOSE_PRICE'] - $record['REF_PRICE']) / ($record['REF_PRICE'])) * 100) ?>%)
        </td>
        <td class="text-right !pr-5"><?php echo bsc_number_format($record['TOT_VOLUME']) ?></td>
        <td class="text-right !pr-8"><?php echo bsc_number_format($record['TOT_VALUE']) ?></td>
        <td class="text-right !pr-5"><?php echo bsc_number_format($record['TOT_PT_VOLUME']) ?></td>
        <td class="text-right !pr-8"><?php echo bsc_number_format($record['TOT_PT_VALUE']) ?></td>
        <td class="text-right"><?php echo bsc_number_format($record['REF_PRICE']) ?></td>
        <td class="text-right"><?php echo bsc_number_format($record['CEILING_PRICE']) ?></td>
        <td class="text-right"><?php echo bsc_number_format($record['FLOOR_PRICE']) ?></td>
    </tr>
<?php } ?>