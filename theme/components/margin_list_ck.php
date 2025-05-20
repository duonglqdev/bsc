<div class="container mt-14 mb-[100px]" data-component="margin_list_ck">
	<?php if ( get_sub_field( 'title' ) ) : ?>
		<div class="text-center font-bold text-[32px] leading-[46px] text-primary-400 mb-10">
			<?php the_sub_field( 'title' ); ?>
		</div>
	<?php endif ?>
	<?php
	$time_cache = 500;
	$array_data = array(
		'lang' => pll_current_language(),
		'maxitem' => 100000,
		'index' => 1
	);
	$response = get_data_with_cache( 'GetBSCMargin', $array_data, $time_cache );
	if ( $response ) {
		?>
		<div class="w-full max-h-[1273px] rounded-lg scroll-bar-custom overflow-y-auto">
			<table class="min-w-full text-center border-separate border-spacing-0">
				<thead class="bg-primary-300 text-white sticky top-0">
					<tr class="divide-x divide-[#C9CCD2] text-sm leading-5 font-body">
						<th class="whitespace-nowrap font-bold px-[10px] py-[12px] w-[134px]">
							<?php _e( 'STT', 'bsc' ) ?>
						</th>
						<th class="whitespace-nowrap font-bold px-[10px] py-[12px] w-[134px]">
							<?php _e( 'Mã CK', 'bsc' ) ?>
						</th>
						<th class="whitespace-nowrap font-bold px-[10px] py-[12px] min-w-[200px]">
							<?php _e( 'Tên công ty', 'bsc' ) ?>
						</th>
						<th class="whitespace-nowrap font-bold px-[10px] py-[12px] min-w-[200px]">
							<?php _e( 'Tỷ lệ tính tài sản đảm bảo', 'bsc' ) ?>
						</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-[#C9CCD2]">
					<?php
					$i = 0;
					foreach ( $response->d as $news ) {
						$i++;
						?>
						<tr
							class="odd:bg-white even:bg-[#EBF4FA] divide-x divide-[#C9CCD2] text-sm text-[#31333F] leading-[22px] font-body">
							<td class="font-medium px-[10px] py-[12px]"><?php echo $i ?></td>
							<td class="font-medium px-[10px] py-[12px]"><?php echo $news->SYMBOL ?></td>
							<td class="font-medium px-[10px] py-[12px]"><?php echo $news->ISSUERNAME ?></td>
							<td class="font-medium px-[10px] py-[12px]"><?php echo $news->MRRATIORATE ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	<?php } ?>
</div>