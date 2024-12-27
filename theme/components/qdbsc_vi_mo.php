<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
?>
<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-[54px] mb-[100px]' : 'mt-8 mb-[50px]' ?> qdbsc_vi_mo"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) { ?>
			<?php if ( get_sub_field( 'link' ) ) { ?>
				<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
					class="font-bold block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl mb-6' : 'text-lg mb-4' ?>">
					<?php the_sub_field( 'title' ) ?>
				</a>
			<?php } else { ?>
				<h3 class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl mb-6' : 'text-lg mb-4' ?>">
					<?php the_sub_field( 'title' ) ?>
				</h3>
			<?php } ?>
		<?php } ?>
		<div class="relative">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-8' : 'space-y-4' ?> <?php echo $class ?>">
				<?php
				if ( ! $check_logout ) {
					$array_data_thitruong = array();
					$response_thitruong = get_data_with_cache( 'GetVNIChart', $array_data_thitruong, $time_cache );
					if ( $response_thitruong ) {
						$vnIndexData = array_map( function ($item) {
							return [ 
								'date' => date( 'Y-m-d', strtotime( $item->tradedate ) ), // Định dạng ngày
								'closeindex' => $item->closeindex,
							];
						}, $response_thitruong->d->VNI[0] );
						$nam_period = $response_thitruong->d->F[0][1]->period;
						$stocksDataJson = json_encode( $vnIndexData );
						?>
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[255px] max-w-[27%]' : 'w-full' ?>">
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-10 py-8' : 'p-4' ?> bg-white shadow-base rounded-2xl">
								<h4
									class="font-bold text-primary-300 border-b border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl pb-6 mb-6' : 'text-lg pb-[12px] mb-[12px]' ?>">
									<?php _e( 'Năm', 'bsc' ) ?> 		<?php echo $nam_period ?>
								</h4>
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'grid grid-cols-3 gap-4' ?>">
									<div
										class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
										<div class="flex flex-col font-Helvetica">
											<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
											<h4
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
												<?php echo $response_thitruong->d->F[0][0]->value; ?>
											</h4>
										</div>
										<div
											class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
											<?php _e( 'Tích cực', 'bsc' ) ?>
										</div>
									</div>

									<div
										class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
										<div class="flex flex-col font-Helvetica">
											<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
											<h4
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
												<?php echo $response_thitruong->d->F[0][1]->value; ?>
											</h4>
										</div>
										<div
											class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
											<?php _e( 'Cơ sở', 'bsc' ) ?>
										</div>
									</div>
									<div
										class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
										<div class="flex flex-col font-Helvetica">
											<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
											<h4
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
												<?php echo $response_thitruong->d->F[0][2]->value; ?>
											</h4>
										</div>
										<div
											class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
											<?php _e( 'Tiêu cực', 'bsc' ) ?>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div
							class="flex-1 bg-white rounded-lg px-5 pt-5 shadow-base <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : '' ?>">
							<div id="chart-forecast" class="font-body" data-stock='<?php echo $stocksDataJson ?>'
								data-title="Dự báo VN-Index <?php echo $nam_period ?>" data-kb1="Dự báo KB1 (Giảm)"
								data-coso="<?php _e( 'KB cơ sở' ) ?>"
								data-kb-coso="<?php echo $response_thitruong->d->F[0][1]->value; ?>"
								data-kb1-value="<?php echo $response_thitruong->d->F[0][2]->value; ?>"
								data-kb2="Dự báo KB2 (Tăng)"
								data-kb2-value="<?php echo $response_thitruong->d->F[0][0]->value; ?>">
							</div>
						</div>
					<?php }
				} else {
					?>
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[255px] max-w-[27%]' : 'w-full' ?> shrink-0">
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-10 py-8' : 'p-4' ?> bg-white shadow-base rounded-2xl">
							<h4
								class="font-bold text-primary-300 border-b border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl pb-6 mb-6' : 'text-lg pb-[12px] mb-[12px]' ?>">
								<?php _e( 'Năm 0000', 'bsc' ) ?>
							</h4>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'grid grid-cols-3 gap-4' ?>">
								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
										<h4
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
											---- </h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
										<?php _e( 'Tích cực', 'bsc' ) ?>
									</div>
								</div>

								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
										<h4
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
											---- </h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
										<?php _e( 'Cơ sở', 'bsc' ) ?>
									</div>
								</div>
								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs"><?php _e( 'VN-index', 'bsc' ) ?></p>
										<h4
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
											---- </h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
										<?php _e( 'Tiêu cực', 'bsc' ) ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex-1 bg-[#F5FCFF] rounded-lg px-5 pt-5">
					</div>
					<?php
				} ?>
			</div>
			<?php if ( $check_logout ) {
				echo $check_logout['html'];
			} ?>
		</div>
	</div>
</section>