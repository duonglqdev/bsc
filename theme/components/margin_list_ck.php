<div class="" data-component="margin_list_ck">
    <?php
    if (get_sub_field('title')) {
        the_sub_field('title');
    }
    ?>
    <?php
    $array_data = array(
        'lang' => pll_current_language(),
        'maxitem' => 100000,
        'index' => 1
    );
    $response = get_data_with_cache('GetBSCMargin', $array_data, $time_cache);
    if ($response) {
    ?>
        <table>
            <thead>
                <tr>
                    <th><?php _e('STT', 'bsc') ?></th>
                    <th><?php _e('Mã CK', 'bsc') ?></th>
                    <th><?php _e('Tên công ty', 'bsc') ?></th>
                    <th><?php _e('Tỷ lệ tính tài sản đảm bảo', 'bsc') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($response->d as $news) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $news->SYMBOL ?></td>
                        <td><?php echo $news->ISSUERNAME ?></td>
                        <td><?php echo $news->MRRATIORATE ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>