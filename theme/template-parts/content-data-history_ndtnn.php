<?php if ($args['data']) {
    $GetForeignInvestors = $args['data'];
?>
    <tr class="[&:nth-child(even)]:bg-[#EBF4FA] text-right">
        <td>
            <?php
            if ($GetForeignInvestors->tradedate) {
                $date = new DateTime($GetForeignInvestors->tradedate);
                echo $date->format('d/m/Y');
            }
            ?>
        </td>
        <?php if ($GetForeignInvestors->closeprice && $GetForeignInvestors->refprice) {
            if (($GetForeignInvestors->closeprice - $GetForeignInvestors->refprice) > 0) {
                $text_color_class_GetForeignInvestors = 'text-[#1CCD83]';
            } elseif (($GetForeignInvestors->closeprice - $GetForeignInvestors->refprice) < 0) {
                $text_color_class_GetForeignInvestors = 'text-[#FE5353]';
            } elseif (($GetForeignInvestors->closeprice - $GetForeignInvestors->refprice) == 0) {
                $text_color_class_GetForeignInvestors = 'text-[#EB0]';
            } else {
                $text_color_class_GetForeignInvestors = '';
            }
        }
        ?>
        <td class="<?php echo $text_color_class_GetForeignInvestors ?> lg:!pr-8">
            <?php if ($GetForeignInvestors->closeprice) { ?>
                <?php
                if ($GetForeignInvestors->closeprice) {
                    echo bsc_number_format(($GetForeignInvestors->closeprice) / 1000);
                }
                ?>(<?php echo bsc_number_format((($GetForeignInvestors->closeprice - $GetForeignInvestors->refprice) / ($GetForeignInvestors->refprice)) * 100) ?>%)
            <?php } ?>
        </td>
        <td class=" lg:!pr-8"><?php echo bsc_number_format($GetForeignInvestors->f_NET_TRADING_VOLUME) ?></td>
        <td class=" lg:!pr-5"><?php echo bsc_number_format($GetForeignInvestors->f_NET_TRADING_VALUE) ?></td>
        <td class=" lg:!pr-8"><?php echo bsc_number_format($GetForeignInvestors->f_BUY_VOLUME) ?></td>
        <td class=" lg:!pr-8"><?php echo bsc_number_format($GetForeignInvestors->f_BUY_VALUE) ?></td>
        <td class=" lg:!pr-8"><?php echo bsc_number_format($GetForeignInvestors->f_SELL_VOLUME) ?></td>
        <td class=""><?php echo bsc_number_format($GetForeignInvestors->f_SELL_VALUE) ?></td>
        <td class=""><?php echo bsc_number_format($GetForeignInvestors->f_ROOM) ?></td>
        <td class="">
            <?php echo round($GetForeignInvestors->f_HELD_PCT, 2) ?>%
        </td>
    </tr>
<?php } ?>