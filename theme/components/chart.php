<?php
date_default_timezone_set('Asia/Bangkok');
$todate = date('d/m/Y');
$fromdate = date('d/m/Y', strtotime('-7 days'));
$fromdate_value = DateTime::createFromFormat('d/m/Y', $fromdate)->format('Y-m-d');
$todate_value = DateTime::createFromFormat('d/m/Y', $todate)->format('Y-m-d');
?>
<section class="chart bg-primary-200 lg:py-[77px] relative py-14" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title_main')) { ?>
			<h2 class="heading-title mb-12 wow fadeIn" data-wow-duration="2s"><?php the_sub_field('title_main') ?></h2>
		<?php } ?>
		<div class="md:flex relative z-[2]">
			<div class="flex-1 md:mr-5">
				<?php if (get_sub_field('title')) { ?>
					<h2
						class="pl-6 border-l-2 border-primary-300 text-[28px] font-bold mb-7 text-primary-300 leading-none wow fadeIn" data-wow-duration="2s">
						<?php the_sub_field('title') ?>
					</h2>
				<?php } ?>
				<div class="bg-white rounded-2xl p-7">
					<div class="flex justify-between items-center mb-6">
						<div class="space-x-2 px-[6px] py-[2px] rounded-xl bg-[#F8F8FF]">
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white active bg-primary-700  rounded-[10px]">BSC10</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC30</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC50</button>
						</div>

						<div class="flex items-center space-x-4">
							<strong><?php _e('Thời gian', 'bsc') ?>:</strong>
							<input type="date" class="border border-[#ECE9F1] rounded-xl p-2" value="<?php echo $fromdate_value; ?>">
							<input type="date" class="border border-[#ECE9F1] rounded-xl p-2" value="<?php echo $todate_value; ?>">
						</div>
					</div>

					<div id="chart"></div>
					<?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
				</div>
			</div>
			<?php
			// $get_performance_data = array(
			// 	'portcode' => 'BSC10,BSC30,BSC50,VNDIAMOND,VNINDEX'
			// );
			// $get_performance = callApi('http://10.21.170.17:86/GetPortfolioPerformance?' . http_build_query($get_performance_data));
			?>
			<script>
				jQuery(document).ready(function() {
					const newSeriesData = [{
							name: 'BSC10',
							data: [25, 35, 45, 55, 60, 65, 75, 85],
						},
						{
							name: 'VNINDEX',
							data: [15, 25, 35, 40, 45, 50, 55, 65],
						},
						{
							name: 'VNDIAMOND',
							data: [5, 15, 20, 30, 35, 40, 50, 60],
						},
					];

					const newXAxisCategories = [
						'26 Sep',
						'27 Sep',
						'28 Sep',
						'29 Sep',
						'30 Sep',
						'1 Oct',
						'2 Oct',
					];

					const newYAxisOptions = {
						min: 0,
						max: 100,
					};

					// Gọi hàm handleChart với dữ liệu mới
					window.handleChart(newSeriesData, newXAxisCategories, newYAxisOptions);
				});
			</script>
			<div class="md:w-[33.181%]">
				<div class="flex items-center justify-between mb-7">
					<?php if (get_sub_field('title_2')) { ?>
						<h2
							class="lg:pl-6 pl-4 border-l-2 border-primary-300 xl:text-[28px] text-xl font-bold text-primary-300 leading-none wow fadeIn" data-wow-duration="2s">
							<?php the_sub_field('title_2') ?>
						</h2>
					<?php } ?>
					<?php if (have_rows('button_xem_tat_ca')) {
						while (have_rows('button_xem_tat_ca')) :
							the_row();
							if (get_sub_field('title')) {
					?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
									<?php echo svg('arrow-btn', '20', '20') ?>
									<?php the_sub_field('title') ?>
								</a>
					<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php if (have_rows('khuyen_nghi')) {
					while (have_rows('khuyen_nghi')) :
						the_row(); ?>
						<div class="bg-white rounded-[10px] px-6 py-4 mb-4">
							<?php if (get_sub_field('title')) { ?>
								<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9]">
									<?php the_sub_field('title') ?>
								</p>
							<?php } ?>
							<ul class="space-y-4">
								<?php
								for ($i = 0; $i < 5; $i++) {
								?>
									<li class="flex font-bold gap-[14px] items-center justify-between">
										<p class="line-clamp-1 flex-1">
											BID <span class="text-[#00BD62]">(+25%) MUA MẠNH</span> - Ngân hàng
											đầu
											tư
										</p>

										<p
											class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
											Hot</p>
										<a href="">
											<?php echo svg('download') ?>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
							<?php if (have_rows('button_xem_them')) {
								while (have_rows('button_xem_them')) :
									the_row(); ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mt-6 text-xs">
										<?php the_sub_field('title') ?>
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
							<?php
								endwhile;
							}
							?>
						</div>
				<?php
					endwhile;
				}
				?>

				<?php if (have_rows('nganh_doanh_nghiep')) : ?>
					<div class="data-slick block_slider-show-1 slick-dots-center"
						data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": false}'>
						<?php while (have_rows('nganh_doanh_nghiep')) :
							the_row(); ?>
							<div class="bg-white rounded-[10px] px-6 py-4 block_slider-item">
								<?php if (get_sub_field('title')) { ?>
									<div
										class="flex items-center justify-between gap-3 custom_arrow_slick pb-3 mb-3 border-b border-[#D9D9D9] lg:px-4">
										<button class="prev-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg('prev-slick') ?></button>
										<p class="font-bold text-lg text-center line-clamp-1">
											<?php the_sub_field('title') ?>
										</p>
										<button class="next-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg('next-slick') ?></button>
									</div>
								<?php } ?>
								<ul class="space-y-4">
									<?php
									for ($i = 0; $i < 4; $i++) {
									?>
										<li class="flex gap-[14px] items-center justify-between">
											<p class="line-clamp-1 flex-1">
												Báo cáo tháng 05/2024_Cơ hội của Việt Nam khi được Hoa Kỳ công
												nhận
											</p>
											<p
												class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px]">
												Hot</p>
											<a href="">
												<?php echo svg('download') ?>
											</a>
										</li>
									<?php
									}
									?>
								</ul>
								<?php if (have_rows('button_xem_them')) {
									while (have_rows('button_xem_them')) :
										the_row(); ?>
										<a href="<?php echo check_link(get_sub_field('link')) ?>"
											class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mt-6 text-xs">
											<?php the_sub_field('title') ?>
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>
								<?php
									endwhile;
								}
								?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="absolute bottom-0 right-0 lg:block hidden">
		<?php echo svg('icon-char') ?>
	</div>
</section>