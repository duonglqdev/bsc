<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-14 xl:mb-pb-[110px] mb-20' : 'mt-8 mb-[50px]' ?> ttnc_khuyen_nghi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex 2xl:gap-12 gap-10' : '' ?>">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-[745px] max-w-[56%]' : 'w-full' ?>">
				<?php if (get_sub_field('title')) { ?>
					<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>">
						<?php the_sub_field('title') ?>
					</h2>
				<?php } ?>
				<div class="bsc-ajax-api" data-api="ttnc_khuyen_nghi">
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
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex-1' : 'mt-[50px]' ?>">
				<?php if (get_sub_field('title_phan_tich')) { ?>
					<h2 class="heading-title heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-14' : 'mb-6' ?>">
						<?php the_sub_field('title_phan_tich') ?>
					</h2>
				<?php } ?>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex justify-between items-center mb-4' : 'text-right mb-1' ?>">
					<?php if (!wp_is_mobile() && !bsc_is_mobile() && get_sub_field('title_table')) { ?>
						<p class="uppercase text-primary-300 font-bold">
							<?php the_sub_field('title_table') ?>
						</p>
					<?php } ?>
					<?php
					if (have_rows('button')) {
						while (have_rows('button')) :
							the_row();
							if (get_sub_field('title')) {
					?>
								<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab'))
																			echo 'target="_blank"' ?>
									href="<?php echo check_link(get_sub_field('link')) ?>"
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

				<?php
				$array_data_GetForecastMacro = array();
				$response_GetForecastMacro = get_data_with_cache('GetForecastMacro', $array_data_GetForecastMacro, $time_cache);
				if ($response_GetForecastMacro) {
				?>
					<div class="flex flex-col">
						<div
							class="font-medium text-xs <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'rounded-lg flex overflow-hidden' : 'block_slider block_slider-show-1 fli-dots-blue dot-30 mb-10' ?>">
							<div
								class="text-primary-300 font-medium  <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'border-white border-r-[4px] w-[48.8%]' : 'w-full block_slider-item' ?>">
								<div
									class="flex justify-end items-center font-semibold bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[30px] pb-[13px] min-h-[58px] mb-1.5' : 'py-1.5 px-5' ?>">
									<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-[60px]' : '' ?>">
										<p>
											<?php echo $response_GetForecastMacro->d->A[0][0]->year; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										<?php _e('GDP (YoY%)', 'bsc') ?>
									</div>
									<div class="flex-1 text-center">
										<p><?php echo $response_GetForecastMacro->d->A[0][0]->value; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										<?php _e('CPI trung bình (YoY%)*', 'bsc') ?>
									</div>
									<div class="flex-1 text-center">
										<p><?php echo $response_GetForecastMacro->d->A[0][1]->value; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										<?php _e('Xuất khẩu (YoY%)*', 'bsc') ?>
									</div>
									<div class="flex-1 text-center">
										<p><?php echo $response_GetForecastMacro->d->A[0][2]->value; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										<?php _e('Nhập khẩu (YoY%)*', 'bsc') ?>
									</div>
									<div class="flex-1 text-center">
										<p><?php echo $response_GetForecastMacro->d->A[0][3]->value; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										<?php _e('LSĐH (YoY%)*', 'bsc') ?>
									</div>
									<div class="flex-1 text-center">
										<p><?php echo $response_GetForecastMacro->d->A[0][4]->value; ?>
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div class="w-[70%] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-bold">
										<?php _e('USD/VND LNH trung bình', 'bsc') ?>
									</div>
									<div class="flex-1 text-center font-semibold">
										<p><?php echo number_format($response_GetForecastMacro->d->A[0][5]->value); ?>
										</p>
									</div>
								</div>
							</div>
							<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex-1' : 'w-full block_slider-item' ?>">
								<div class="grid grid-cols-2 text-center">
									<div class="text-[#FF0017]">
										<div
											class="pt-[12px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pb-[6px]' : 'pb-3' ?> min-h-[58px] mb-1.5 bg-[#EBF4FA]">
											<p class="font-semibold mb-1">
												<?php _e('BSC kịch bản 1', 'bsc') ?>
											</p>
											<div class="grid grid-cols-2 font-semibold">
												<p><?php echo $response_GetForecastMacro->d->F[1][0]->year; ?>
												</p>
												<p><?php echo $response_GetForecastMacro->d->F[3][0]->year; ?>
												</p>
											</div>
										</div>
										<?php
										for ($i = 0; $i < 5; $i++) {
										?>
											<div
												class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
												<p><?php echo $response_GetForecastMacro->d->F[1][$i]->value; ?>
												</p>
												<p><?php echo $response_GetForecastMacro->d->F[3][$i]->value; ?>
												</p>
											</div>
										<?php
										}
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold [&:nth-child(odd)]:bg-[#EBF4FA]">
											<p><?php echo number_format($response_GetForecastMacro->d->F[1][5]->value) ?>
											</p>
											<p><?php echo number_format($response_GetForecastMacro->d->F[3][5]->value) ?>
											</p>
										</div>
									</div>
									<div class="text-[#30D158]">
										<div
											class="pt-[12px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pb-[6px]' : 'pb-3' ?> min-h-[58px] mb-1.5 bg-[#EBF4FA]">
											<p class="font-semibold mb-1">
												<?php _e('BSC kịch bản 2', 'bsc') ?>
											</p>
											<div class="grid grid-cols-2 font-semibold [&:nth-child(odd)]:bg-[#EBF4FA]">
												<p><?php echo $response_GetForecastMacro->d->F[0][0]->year; ?>
												</p>
												<p><?php echo $response_GetForecastMacro->d->F[2][0]->year; ?>
												</p>
											</div>
										</div>
										<?php
										for ($i = 0; $i < 5; $i++) {
										?>
											<div
												class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
												<p><?php echo $response_GetForecastMacro->d->F[0][$i]->value; ?>
												</p>
												<p><?php echo $response_GetForecastMacro->d->F[2][$i]->value; ?>
												</p>
											</div>
										<?php
										}
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold [&:nth-child(odd)]:bg-[#EBF4FA]">
											<p><?php echo number_format($response_GetForecastMacro->d->F[0][5]->value); ?>
											</p>
											<p><?php echo number_format($response_GetForecastMacro->d->F[2][5]->value); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>


				<?php if (get_sub_field('image')) { ?>
					<div class="mt-6">
						<a href="<?php echo check_link(get_sub_field('link_youtube')) ?>"
							data-fancybox
							class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svg('play', '62', '62') ?>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>