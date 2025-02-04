<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
?>
<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?> qdbsc_ket_qua_kinh_doanh"
	<?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<?php if (get_sub_field('link')) { ?>
				<a href="<?php echo check_link(get_sub_field('link')) ?>"
					class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 text-2xl' : 'text-[22px] mb-4' ?> block">
					<?php the_sub_field('title') ?>
				</a>
			<?php } else { ?>
				<h3
					class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 text-2xl' : 'text-[22px] mb-4' ?>">
					<?php the_sub_field('title') ?>
				</h3>
			<?php } ?>
		<?php } ?>
		<div class="relative">
			<?php
			if (! $check_logout) {
				$array_data_GetForecastBussinessResults = array(
					'lang' => 'VI',
					'forecastperiod' => date('Y')
				);
				$response_GetForecastBussinessResults = get_data_with_cache('GetForecastBussinessResults', $array_data_GetForecastBussinessResults, $time_cache);
				if ($response_GetForecastBussinessResults) {
			?>
					<div
						class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium overflow-hidden bg-white <?php echo $class ?>">
						<div class="flex">
							<div
								class="shrink-0 prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc] w-[120px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' prose-li:min-h-10' : 'prose-li:min-h-[30px]' ?>">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
									<?php _e('Mã CK', 'bsc') ?>
								</div>
								<?php
								$count = 0;
								$total = count($response_GetForecastBussinessResults->d);
								?>

								<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

									<?php if ($count % 6 === 0) : ?>
										<?php if ($count > 0) : ?>
											<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
										<?php endif; ?>
										<ul>
										<?php endif; ?>

										<li class="text-primary-300 font-bold">
											<?php if ($GetForecastBussinessResults->symbol) : ?>
												<a href="<?php echo slug_co_phieu($GetForecastBussinessResults->symbol); ?>">
													<?php echo $GetForecastBussinessResults->symbol; ?>
												</a>
											<?php endif; ?>
										</li>

										<?php $count++; ?>

										<?php if ($count % 6 === 0 || $count === $total) : ?>
										</ul>
									<?php endif; ?>

								<?php endforeach; ?>

							</div>
							<div
								class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:flex prose-li:items-center prose-li:justify-end  prose-p:font-normal <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-li:min-h-10 prose-li:pr-3' : 'prose-li:min-h-[30px] prose-li:pr-4' ?>">
								<div class="min-w-[150px]">
									<div
										class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4 relative shadow-[1px_1px_2px_#ccc]">
										<?php _e('Ngành', 'bsc') ?>
									</div>
									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul class="prose-li:!justify-start prose-li:pl-3 prose-li:whitespace-nowrap">
											<?php endif; ?>

											<li>
												<?php echo $GetForecastBussinessResults->industryname; ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>

								</div>
								<div class="min-w-[120px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('DTT', 'bsc') ?> <?php echo date('Y') ?>
										<p>(<?php _e('tỷ VND', 'bsc') ?>)</p>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->revenue); ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center gap-1 min-h-[60px] leading-[1.5] p-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('LNST', 'bsc') ?> <br>
										<?php _e('CĐTS', 'bsc') ?>

										<button data-tooltip-target="tooltip-animation1" class="ml-1" type="button">
											<?php echo svg('tooltip', '20', '20') ?>
										</button>
										<div id="tooltip-animation1" role="tooltip"
											class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px]">
											<?php _e('Lợi nhuận sau thuế của cổ đông thiểu số', 'bsc') ?>
											<div class="tooltip-arrow" data-popper-arrow></div>
										</div>

									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php if ($GetForecastBussinessResults->npatmi) { ?>
													<?php echo bsc_number_format($GetForecastBussinessResults->npatmi) ?>
												<?php } ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="lg:min-w-[90px] min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('EPS', 'bsc') ?> <br>
										<?php echo date('Y') ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->eps) ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="min-w-[108px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('P/E FWD', 'bsc') ?> <br>
										<?php echo date('Y') ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->pe) ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('P/B FWD', 'bsc') ?> <br>
										<?php echo date('Y') ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->pb) ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="lg:min-w-[90px] min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('ROA (%)', 'bsc') ?> <br>
										<?php echo date('Y') ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->roa * 100, false) . '%'; ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="lg:min-w-[90px] min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('ROE (%)', 'bsc') ?> <br>
										<?php echo date('Y') ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->roe * 100, false) . '%' ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="min-w-[130px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center gap-1 min-h-[60px] leading-[1.5] border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('Giá gần nhất', 'bsc') ?> <br>
										<?php $date = new DateTime($response_GetForecastBussinessResults->d[0]->tradedatebefore);
										$tradedatebefore = $date->format('d/m/Y');
										echo $tradedatebefore;
										?>


										<button data-tooltip-target="tooltip-animation2" class="ml-1" type="button">
											<?php echo svg('tooltip', '20', '20') ?>
										</button>
										<div id="tooltip-animation2" role="tooltip"
											class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px]">
											<?php echo __('Giá đóng cửa tại ngày', 'bsc') . ' ' . $tradedatebefore ?>
											<div class="tooltip-arrow" data-popper-arrow></div>
										</div>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->closeprice) ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
								<div class="min-w-[110px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('Giá mục tiêu', 'bsc') ?> <br>
										<?php echo date('Y') ?>/<?php echo date('Y') + 1 ?>
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo bsc_number_format($GetForecastBussinessResults->pricerecommended) ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>

								</div>
								<div class="2xl:min-w-[110px] min-w-[90px]">
									<div
										class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
										<?php _e('Upside', 'bsc') ?> <br>
										(%)
									</div>

									<?php
									$count = 0;
									$total = count($response_GetForecastBussinessResults->d);
									?>

									<?php foreach ($response_GetForecastBussinessResults->d as $index => $GetForecastBussinessResults) : ?>

										<?php if ($count % 6 === 0) : ?>
											<?php if ($count > 0) : ?>
												<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]">
											<?php endif; ?>
											<ul>
											<?php endif; ?>

											<li>
												<?php echo $GetForecastBussinessResults->upside ?>
											</li>

											<?php $count++; ?>

											<?php if ($count % 6 === 0 || $count === $total) :  ?>
											</ul>
										<?php endif; ?>

									<?php endforeach; ?>
								</div>
							</div>
						</div>

					</div>
				<?php }
			} else {
				?>
				<!-- Data Demo -->
				<div class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium bg-white <?php echo $class ?>">
					<div class="flex rounded-md overflow-hidden">
						<div
							class="w-[160px] shrink-0 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc]">
							<div
								class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4">
								<?php _e('Mã CK', 'bsc') ?>
							</div>
							<ul>
								<?php
								for ($i = 0; $i < 6; $i++) {
								?>
									<li class="text-primary-300">
										<?php _e('BID', 'bsc') ?>
									</li>
								<?php
								}
								?>
							</ul>
						</div>
						<div
							class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-li:justify-center prose-p:font-normal">
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('Ngành', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											<?php _e('Ngân hàng', 'bsc') ?>

										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('Doanh thu thuần', 'bsc') ?>
									<p>
										<?php _e('(tỷ VND)', 'bsc') ?>
									</p>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('LNST CĐTS', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('EPS', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('P/E FWD', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('P/B FWD', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('ROA (%)', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('ROE (%)', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('Giá ngày', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('Giá mục tiêu', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									<?php _e('Upside', 'bsc') ?>
								</div>
								<ul>
									<?php
									for ($i = 0; $i < 6; $i++) {
									?>
										<li>
											----
										</li>
									<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>

				</div>
			<?php
			} ?>
			<?php if ($check_logout) {
				echo $check_logout['html'];
			} ?>
		</div>
	</div>
</section>