<?php
$id_class = get_sub_field('id_class');
$display = get_sub_field('display');
$symbol = '';
if (isset($_GET['mck'])) {
	$symbol  = $_GET['mck'];
}
if ($display == 'history') {
	$dateformat = 'yyyy-mm-dd';
} else {
	$dateformat = 'dd/mm/yyyy';
}
?>
<section class="mt-12 lg:mb-[100px] mb-20 data_history_price" <?php if ($id_class) { ?>
	id="<?php echo $id_class ?>" <?php } ?>>
	<div class="container">
		<form class="lg:flex gap-5 mb-12 mt-4 items-end" id="du-lieu-lich-su_form" data-form="<?php echo $display ?>">
			<div class="lg:w-80 lg:max-w-1/3 flex flex-col font-Helvetica">
				<p class="font-medium mb-2">
					<?php _e('Mã cổ phiếu', 'bsc') ?>
				</p>
				<input type="text" placeholder="<?php _e('Nhập mã chứng khoán', 'bsc') ?>"
					class="w-full h-[50px] rounded-[10px] px-5 border-[#E4E4E4] mck" name="mck" value="<?php echo $symbol  ?>">
			</div>
			<div class="font-Helvetica lg:w-[433px] max-w-[40%] w-full">
				<p class="font-medium mb-2">
					<?php _e('Lọc theo ngày', 'bsc') ?>
				</p>
				<div id="date-range-picker" date-rangepicker datepicker-format="<?php echo $dateformat ?>"
					datepicker-autohide datepicker-orientation="bottom right"
					class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs ">

					<div class="flex items-center 2xl:gap-5 gap-3">
						<input id="datepicker-range-start" name="fromdate" type="text"
							class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
							placeholder="<?php _e('Từ ngày', 'bsc') ?>">
						<?php echo svg('day', '20', '20') ?>
					</div>
					<span class="2xl:mx-4 mx-2 text-gray-500">-</span>
					<div class="flex items-center 2xl:gap-5 gap-3">
						<input id="datepicker-range-end" name="todate" type="text"
							class="todate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
							placeholder="<?php _e('Đến ngày', 'bsc') ?>">
						<?php echo svg('day', '20', '20') ?>
					</div>
				</div>
			</div>
			<button type="submit" id="du-lieu-lich-su_submit"
				class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight min-w-[155px] rounded-xl h-[50px]">
				<?php _e('Tìm kiếm', 'bsc') ?>
			</button>
			<button type="button" id="du-lieu-lich-su_reset"
				class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
				<?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
			</button>
		</form>
		<?php if ($display == 'history') { ?>
			<div class="rounded-lg overflow-hidden overflow-y-auto scroll-bar-custom max-h-[646px]">
				<table
					class="w-full max-w-full text-center prose-thead:bg-primary-300 prose-thead:text-white text-xs font-medium prose-thead:font-bold prose-th:py-1.5 prose-thead:px-3 prose-th:border-collapse prose-th:border prose-th:border-white prose-td:p-3 bg-white prose-thead:sticky prose-thead:top-0">
					<thead>
						<tr>
							<th rowspan="2"><?php _e('Ngày', 'bsc') ?></th>
							<th rowspan="2"><?php _e('Đóng cửa (nghìn VNĐ)', 'bsc') ?></th>
							<th rowspan="2"><?php _e('Thay đổi', 'bsc') ?></th>
							<th colspan="2"><?php _e('GD khớp lệnh', 'bsc') ?></th>
							<th colspan="2"><?php _e('GD thỏa thuận', 'bsc') ?></th>
							<th colspan="3"><?php _e('Mở cửa (nghìn VNĐ)', 'bsc') ?></th>
						</tr>
						<tr>
							<th><?php _e('Khối lượng', 'bsc') ?></th>
							<th><?php _e('Giá trị (triệu VNĐ)', 'bsc') ?></th>
							<th><?php _e('Khối lượng', 'bsc') ?></th>
							<th><?php _e('Giá trị (triệu VNĐ)', 'bsc') ?></th>
							<th><?php _e('Tham chiếu', 'bsc') ?></th>
							<th><?php _e('Trần', 'bsc') ?></th>
							<th><?php _e('Sàn', 'bsc') ?></th>
						</tr>
					</thead>
					<tbody id="list-du-lieu-lich-su">
						<?php
						$current_date_ymd = date('Y-m-d');
						$last_month_date_ymd = date('Y-m-d', strtotime('-6 month', strtotime($current_date_ymd)));
						$array_data_secTradingHistory = json_encode([
							'lang' => pll_current_language(),
							'secCode' => $symbol,
							'startDate' => $last_month_date_ymd,
							'endDate' => $current_date_ymd
						]);
						$response_secTradingHistory = get_data_with_cache('secTradingHistory', $array_data_secTradingHistory, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
						if ($response_secTradingHistory) {
							$data = json_decode($response_secTradingHistory->data, true);
							foreach ($data as $record) {
								get_template_part('template-parts/content-data-history', '', array(
									'data' => $record,
								));
							}
						}
						?>
					</tbody>
				</table>
			</div>
		<?php } else {
		?>
			<div class="rounded-lg overflow-hidden overflow-y-auto scroll-bar-custom max-h-[646px]">
				<table
					class="w-full max-w-full text-center prose-thead:bg-primary-300 prose-thead:text-white text-xs font-medium prose-thead:font-bold prose-th:py-1.5 prose-thead:px-3 prose-th:border-collapse prose-th:border prose-th:border-white prose-td:p-3 bg-white prose-thead:sticky prose-thead:top-0">
					<thead>
						<tr>
							<th rowspan="2"><?php _e('Ngày', 'bsc') ?></th>
							<th rowspan="2"><?php _e('Thay đổi', 'bsc') ?></th>
							<th colspan="2"><?php _e('Giao dịch ròng', 'bsc') ?></th>
							<th colspan="2"><?php _e('Mua', 'bsc') ?></th>
							<th colspan="2"><?php _e('Bán', 'bsc') ?></th>
							<th rowspan="2"><?php _e('Room còn lại', 'bsc') ?></th>
							<th rowspan="2"><?php _e('Đang sở hữu', 'bsc') ?></th>
						</tr>
						<tr>
							<th><?php _e('Khối lượng', 'bsc') ?></th>
							<th><?php _e('Giá trị (tỷ VNĐ)', 'bsc') ?></th>
							<th><?php _e('Khối lượng', 'bsc') ?></th>
							<th><?php _e('Giá trị (tỷ VNĐ)', 'bsc') ?></th>
							<th><?php _e('Khối lượng', 'bsc') ?></th>
							<th><?php _e('Giá trị (tỷ VNĐ)', 'bsc') ?></th>
						</tr>
					</thead>
					<tbody id="list-du-lieu-lich-su">
						<?php
						$current_date_dmy = date('d/m/Y');
						$last_month_date_dmy = date('d/m/Y', strtotime('-6 month'));
						$array_data_GetForeignInvestors = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'fromdate' => $last_month_date_dmy,
							'todate' => $current_date_dmy
						);
						$response_GetForeignInvestors = get_data_with_cache('GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache);
						if ($response_GetForeignInvestors) {
						?>
							<?php
							foreach ($response_GetForeignInvestors->d as $GetForeignInvestors) {
								get_template_part('template-parts/content-data-history_ndtnn', '', array(
									'data' => $GetForeignInvestors,
								));
							}
							?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php
		} ?>
		<div id="du-lieu-lich-su-loading" class="hidden">
			<div role="status">
				<svg aria-hidden="true"
					class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
					viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
						fill="currentColor" />
					<path
						d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
						fill="currentFill" />
				</svg>
				<span class="sr-only">Loading...</span>
			</div>
		</div>
	</div>
</section>