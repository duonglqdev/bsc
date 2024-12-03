<section
	class=" lichsu_vondieule <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:my-[100px] my-12' : 'my-8' ?>"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>"
	<?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2
				class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-[42px]' : 'mb-6 text-lg' ?>">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<div class="flex md:flex-row flex-col md:gap-[38px] gap-8">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-80 w-full ':'w-full' ?>">
				<div
					class="bg-gradient-blue-50 shadow-base rounded-2xl h-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-6 2xl:space-y-8 space-y-4' : 'p-4' ?>">
					<?php
					$time_cache = get_sub_field( 'time_cache' ) ?: 300;
					?>
					<?php
					$array_data_value = array(
						'symbols' => 'BSI'
					);
					$response_value = get_data_with_cache( 'instruments', $array_data_value, $time_cache, 'https://priceapi.bsc.com.vn/datafeed/' );
					if ( $response_value )
					{
						?>
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'block' : 'flex items-center justify-between' ?>">
							<div
								class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6' : 'gap-[12px]' ?>">
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[90px] h-[90px]' : 'w-[60px] h-[60px]' ?> bg-white rounded-full flex items-center justify-center p-5">
									<?php echo svgClass( 'icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9' ) ?>
								</div>
								<div class="flex flex-col">
									<h4
										class="font-bold uppercase leading-normal <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-[40px]' : 'text-2xl' ?>">
										<?php echo $response_value->d[0]->symbol; ?>
									</h4>
									<p
										class="uppercase text-paragraph <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : '' ?>">
										<?php echo $response_value->d[0]->exchange; ?>
									</p>
								</div>
							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								<div class="flex-col gap-2">
									<div class="flex gap-[14px] data_number">
										<?php if ( $response_value->d[0]->bidPrice1 )
										{ ?>
											<div class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-[40px]' : 'text-2xl' ?>">
												<?php echo number_format( ( $response_value->d[0]->bidPrice1 ) / 1000, 2, '.', '' ); ?>
											</div>
											<?php if ( $response_value->d[0]->bidPrice1 && $response_value->d[0]->reference )
											{
												if ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) > 0 )
												{
													$text_color_class = 'text-[#1CCD83]';
												} elseif ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) < 0 )
												{
													$text_color_class = 'text-[#FE5353]';
												} elseif ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) == 0 )
												{
													$text_color_class = 'text-[#EB0]';
												} else
												{
													$text_color_class = '';
												}
												?>
												<div class="flex flex-col <?php echo $text_color_class ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'md:text-xs text-[13px]' ?>">
													<p>
														<?php
														echo number_format( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) / 1000, 2, '.', '' );
														?>
													</p>
													<p>
														<?php echo number_format( ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) / ( $response_value->d[0]->reference ) ) * 100, 2, '.', '' ) ?>%
													</p>
												</div>
											<?php } ?>
										<?php } ?>
									</div>
									<p class="time-update mt-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'md:text-xs text-[12px]' ?>">
										<?php _e( 'Cập nhật lúc', 'bsc' ) ?>
										<?php date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
										echo date( "H:i:s" ); ?>
										UTC_7
									</p>
								</div>
							<?php } ?>

						</div>
                        <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                            <div class="flex-col gap-2">
                                <div class="flex gap-[14px] data_number">
                                    <?php if ( $response_value->d[0]->bidPrice1 )
                                    { ?>
                                        <div class="lg:text-[40px] text-4xl font-bold">
                                            <?php echo number_format( ( $response_value->d[0]->bidPrice1 ) / 1000, 2, '.', '' ); ?>
                                        </div>
                                        <?php if ( $response_value->d[0]->bidPrice1 && $response_value->d[0]->reference )
                                        {
                                            if ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) > 0 )
                                            {
                                                $text_color_class = 'text-[#1CCD83]';
                                            } elseif ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) < 0 )
                                            {
                                                $text_color_class = 'text-[#FE5353]';
                                            } elseif ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) == 0 )
                                            {
                                                $text_color_class = 'text-[#EB0]';
                                            } else
                                            {
                                                $text_color_class = '';
                                            }
                                            ?>
                                            <div class="flex flex-col <?php echo $text_color_class ?>">
                                                <p>
                                                    <?php
                                                    echo number_format( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) / 1000, 2, '.', '' );
                                                    ?>
                                                </p>
                                                <p>
                                                    <?php echo number_format( ( ( $response_value->d[0]->bidPrice1 - $response_value->d[0]->reference ) / ( $response_value->d[0]->reference ) ) * 100, 2, '.', '' ) ?>%
                                                </p>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <p class="time-update mt-1">
                                    <?php _e( 'Cập nhật lúc', 'bsc' ) ?>
                                    <?php date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
                                    echo date( "H:i:s" ); ?>
                                    UTC_7
                                </p>
                            </div>
                                            
                        <?php } ?>
					<?php } ?>
					<?php
					$array_data = array(
						'securitycode' => 'BSI'
					);
					$response = get_data_with_cache( 'GetSecurityDaily', $array_data, $time_cache );
					if ( $response )
					{
						?>
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:space-y-4 space-y-3' : 'grid grid-cols-2 mt-6 gap-5 text-xs' ?>">
							<?php if ( isset( $response->d[0]->outsshares ) )
							{ ?>
								<div class="font-bold space-y-2">
									<p>
										<?php _e( 'Số lượng cổ phiếu đang lưu hành', 'bsc' ) ?>
									</p>
									<p class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-base' ?>">
										<?php echo number_format( $response->d[0]->outsshares ); ?>
									</p>
								</div>
							<?php } ?>
							<?php if ( isset( $response->d[0]->listedshares ) )
							{ ?>
								<div class="font-bold space-y-2">
									<p>
										<?php _e( 'Khối lượng đang niêm yết', 'bsc' ) ?>
									</p>
									<p class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-base' ?>">
										<?php echo number_format( $response->d[0]->listedshares ); ?>
									</p>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="flex-1 w-full">
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
				{ ?>
					<ul class="space-y-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-4' ?>">
						<li class="flex items-center gap-2 font-Helvetica font-medium text-xs">
							<span class="rounded bg-yellow-100 w-[15px] h-[15px] inline-block"></span>
							<p><?php _e( 'Trước khi chuyển đổi thành CTCP', 'bsc' ) ?></p>
						</li>
						<li class="flex items-center gap-2 font-Helvetica font-medium text-xs">
							<span class="rounded bg-primary-300 w-[15px] h-[15px] inline-block"></span>
							<p><?php _e( 'TSau khi chuyển đổi thành CTCP', 'bsc' ) ?></p>
						</li>
					</ul>
					<p class="mt-2 font-Helvetica font-medium text-xxs">
						<?php _e( 'Đơn vị tính: Tỷ đồng', 'bsc' ) ?>
					</p>
					<div class="mt-4 text-right">
						<a href="<?php echo esc_url( wp_get_attachment_url( get_sub_field( 'image_mb' ) ) ); ?>"
							data-fancybox
							class="rounded-full px-[12px] gap-2 py-1 inline-flex items-center font-Helvetica text-xs font-medium bg-[#EBF4FA]">
							<?php echo svg( 'zoom' ) ?>
							<?php _e( 'Phóng to', 'bsc' ) ?>
						</a>
					</div>
				<?php } ?>
				<?php if ( wp_is_mobile() && bsc_is_mobile() ) : ?>
					<?php echo wp_get_attachment_image( get_sub_field( 'image_mb' ), 'large', '', array( 'class' => 'w-full h-full bg-white' ) ) ?>
				<?php else : ?>
					<?php echo wp_get_attachment_image( get_sub_field( 'image_desktop' ), 'large', '', array( 'class' => 'w-full h-full' ) ) ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>