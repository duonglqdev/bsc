<section class="chart <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-[54px] mb-[100px]' : 'mt-8 mb-[50px]' ?> dmkn_chart_bsc" <?php if (get_sub_field('id_class')) { ?>
	id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php
		if (isset($_GET['bsc']) && trim($_GET['bsc']) !== '') {
			$current_bsc = 'BSC' . $_GET['bsc'];
		} else {
			$current_bsc = 'BSC10';
		}
		if (get_sub_field('title')) { ?>
			<h2 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-[32px] text-2xl' : 'text-[22px]' ?>">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<ul class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-6 mb-10 gap-6' : 'mt-4 mb-6 gap-2' ?> btn-chart">
			<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'sm:flex-auto flex-1' ?>">
				<button data-chart="BSC10"
					class="<?php if ($current_bsc == 'BSC10') echo 'active' ?>  lg:px-[40px] px-4 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'inline-block font-bold' : 'block font-semibold' ?>">
					<?php _e('BSC10', 'bsc') ?>
				</button>
			</li>
			<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'sm:flex-auto flex-1' ?>">
				<button data-chart="BSC30"
					class="<?php if ($current_bsc == 'BSC30') echo 'active' ?>  lg:px-[40px] px-4 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'inline-block font-bold' : 'block font-semibold' ?>">
					<?php _e('BSC30', 'bsc') ?>
				</button>
			</li>
			<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'sm:flex-auto flex-1' ?>">
				<button data-chart="BSC50"
					class="<?php if ($current_bsc == 'BSC50') echo 'active' ?>  lg:px-[40px] px-4 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'inline-block font-bold' : 'block font-semibold' ?>">
					<?php _e('BSC50', 'bsc') ?>
				</button>
			</li>
			<button type="reset" data-todate="<?php echo $todate ?>" id="chart_btn-reload"
				class="rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-12 h-12' : 'w-11 h-11' ?>">
				<?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
			</button>
		</ul>
		<h2 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-[32px] text-2xl' : 'text-[22px]' ?>">
			<?php _e('Hiệu suất danh mục', 'bsc') ?>
		</h2>
		<div class="rounded-2xl shadow-base performance-chart  <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-6 px-7 mt-12' : 'px-5 py-4 mt-4 -mx-5' ?>">
			<div id="date-performance-picker" date-rangepicker datepicker-format="yyyy-mm-dd"
				datepicker-autohide datepicker-orientation="bottom left"
				class="flex items-center text-xs gap-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'mb-6' ?>">
				<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
					<p class="font-semibold mr-6">
						<?php _e('Thời gian:', 'gnws') ?>
					</p>
				<?php } ?>
				<div
					class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px]  px-4 py-[12px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'h-12' : 'flex-1 h-[46px]' ?>">
					<input id="datepicker-performance-start" name="start" type="text"
						class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>"
						placeholder="<?php _e('Từ ngày', 'bsc') ?>" value="">
					<?php echo svgClass('date-blue', '', '', 'shrink-0') ?>
				</div>
				<?php $todate = date('Y-m-d'); ?>
				<div
					class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px]  px-4 py-[12px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'h-12' : 'flex-1 h-[46px]' ?>">
					<input id="datepicker-performance-end" name="end" type="text"
						class="todate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>"
						placeholder="<?php _e('Đến ngày', 'bsc') ?>" value="<?php echo $todate ?>">
					<?php echo svgClass('date-blue', '', '', 'shrink-0') ?>
				</div>
			</div>
			<div class="bsc-ajax-api" data-api="dmkn_chart_bsc" data-chart="running_chart">
				<div class="hidden">
					<div role="status">
						<svg aria-hidden="true"
							class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
							viewBox="0 0 100 101" fill="none"
							xmlns="http://www.w3.org/2000/svg">
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
			<?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
		</div>
	</div>
</section>
<?php
$check_logout = bsc_is_user_logged_out();
$class_login = $check_logout ? $check_logout['class'] : '';
$data_bsc = array('BSC10', 'BSC30', 'BSC50');
if ($data_bsc) {
	$ic = 20;
	foreach ($data_bsc as $single_bsc) {
		$ic++;
?>
		<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?> dmkn_chart_bsc_details 
	<?php
		if ((($current_bsc == 'BSC10') && $ic == 21) || (($current_bsc == 'BSC30') && $ic == 22) || ($current_bsc == 'BSC50') && $ic == 23) {
			echo 'block';
		} else {
			echo 'hidden';
		}
	?>"
			data-chart-tab='<?php echo $single_bsc ?>'>
			<div class="container">
				<h2 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-[32px] text-2xl' : 'text-[22px]' ?> mb-6">
					<?php _e('Chi tiết danh mục', 'bsc') ?>
				</h2>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex xl:gap-14 gap-10' : 'space-y-8' ?>">
					<div class="relative rounded-[10px] overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-[887px] max-w-[66%]' : '' ?>">
						<div
							class="overflow-x-auto scroll-bar-custom scroll-bar-x text-center border border-[#EAEEF4] <?php echo $class_login ?>">
							<div
								class="flex text-white bg-primary-300 font-semibold items-center leading-[1.125] gap-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'min-h-[58px]' : 'w-max min-h-[46px]' ?>">
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Mã', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Khuyến nghị', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Giá', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Mục tiêu', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Upside', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Sàn', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('KL', 'bsc') ?>

								</div>
							</div>
							<div class="bsc-ajax-api" data-api="dmkn_chart_bsc_details-left" data-symbol="<?php echo $ic ?>" data-chart="bsc_need_crawl_price_display">
								<div class="hidden">
									<div role="status">
										<svg aria-hidden="true"
											class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
											viewBox="0 0 100 101" fill="none"
											xmlns="http://www.w3.org/2000/svg">
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
						</div>
						<?php if ($check_logout) {
							echo $check_logout['html'];
						} ?>
					</div>
					<div class="flex-1 font-Helvetica bsc-ajax-api <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>" data-api="dmkn_chart_bsc_details-right" data-symbol="<?php echo $single_bsc ?>">
						<div class="hidden">
							<div role="status">
								<svg aria-hidden="true"
									class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
									viewBox="0 0 100 101" fill="none"
									xmlns="http://www.w3.org/2000/svg">
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
				</div>
			</div>
		</section>
<?php
	}
}
?>