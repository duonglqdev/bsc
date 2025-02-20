<?php if ( $args['data'] ) {
	$news = $args['data'];
	$date = $news->postdate;
	$date_parts = explode( 'T', $date );
	$day = $date_parts[0];
	$day_of_month = date( 'd', strtotime( $day ) );
	$day_of_year = date( 'Y', strtotime( $day ) );
	setlocale( LC_TIME, 'vi_VN.UTF-8' );
	if ( get_locale() == 'vi' ) {
		$month_number = date( 'n', strtotime( $day ) );
		$month_names = [ 
			__( 'Tháng', 'bsc' ) . ' 1',
			__( 'Tháng', 'bsc' ) . ' 2',
			__( 'Tháng', 'bsc' ) . ' 3',
			__( 'Tháng', 'bsc' ) . ' 4',
			__( 'Tháng', 'bsc' ) . ' 5',
			__( 'Tháng', 'bsc' ) . ' 6',
			__( 'Tháng', 'bsc' ) . ' 7',
			__( 'Tháng', 'bsc' ) . ' 8',
			__( 'Tháng', 'bsc' ) . ' 9',
			__( 'Tháng', 'bsc' ) . ' 10',
			__( 'Tháng', 'bsc' ) . ' 11',
			__( 'Tháng', 'bsc' ) . ' 12',
		];
		$month_name = $month_names[ $month_number - 1 ];
	} else {
		$month_name = date( 'F', strtotime( $day ) );
	}
	if ( get_locale() == 'vi' ) {
		$weekday_number = date( 'N', strtotime( $day ) );
		$weekday_names = [ __( 'Thứ', 'bsc' ) . ' 2', __( 'Thứ', 'bsc' ) . ' 3', __( 'Thứ', 'bsc' ) . ' 4', __( 'Thứ', 'bsc' ) . ' 5', __( 'Thứ', 'bsc' ) . ' 6', __( 'Thứ', 'bsc' ) . ' 7', __( 'Chủ Nhật', 'bsc' ) ];
		$weekday_name = $weekday_names[ $weekday_number - 1 ];
	} else {
		$weekday_name = date( 'l', strtotime( $day ) );
	}
	?>
	<div class="news_service-item md:flex items-center justify-between lg:gap-10 gap-5">
		<div class="flex items-center">
			<div
				class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
				<p
					class="date text-center bg-primary-300 text-white font-bold  py-[2px] px-1 leading-normal w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs' : 'text-xxs' ?>">
					<?php
					if ( isset( $args['style'] ) && $args['style'] == 'thu' ) {
						echo $weekday_name;
					} else {
						echo $month_name;
					} ?>
				</p>
				<p
					class="flex-1 flex flex-col justify-center items-center  font-bold bg-primary-50 w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl' : 'text-xl' ?>">
					<?php
					echo $day_of_month;
					if ( isset( $args['style'] ) && $args['style'] == 'thu' ) {
					} else {
						?>
						<span class="text-primary-300 text-[12px] font-medium">
							<?php echo $day_of_year; ?>
						</span>
					<?php } ?>
				</p>
			</div>
			<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'ml-[30px]' : 'ml-4' ?>">
				<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
					class="font-bold leading-normal mb-2 transition-all duration-500 hover:text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-base' ?>">
					<p class="line-clamp-2">
						<?php echo htmlspecialchars( $news->title ) ?>
					</p>
				</a>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<div class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
						<?php echo htmlspecialchars( $news->description ) ?>
					</div>

				<?php } ?>
			</div>
		</div>
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
			<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
				class="text-green font-semibold lg:inline-flex hidden gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap shrink-0">
				<?php _e( 'Xem chi tiết', 'bsc' ) ?>
				<?php echo svg( 'arrow-btn', '12', '12' ) ?>
			</a>
		<?php } ?>
	</div>
<?php } ?>