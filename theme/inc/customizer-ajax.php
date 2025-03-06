<?php
add_action( 'wp_ajax_filter_jobs', 'filter_jobs_ajax' );
add_action( 'wp_ajax_nopriv_filter_jobs', 'filter_jobs_ajax' );

function filter_jobs_ajax() {
	check_ajax_referer( 'common_nonce', 'security' );
	$nghiep_vu = isset( $_POST['nghiep_vu'] ) ? intval( $_POST['nghiep_vu'] ) : '';
	$noi_lam_viec = isset( $_POST['noi_lam_viec'] ) ? intval( $_POST['noi_lam_viec'] ) : '';
	$paged = isset( $_POST['paged'] ) ? intval( $_POST['paged'] ) : 1;

	$args = array(
		'post_type' => 'tuyen-dung',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'paged' => $paged,
		'orderby' => 'meta_value_num',
		'meta_key' => 'deadline',
		'order' => 'DESC',
		'tax_query' => array(
			'relation' => 'AND',
		),
	);

	if ( ! empty( $nghiep_vu ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'nghiep-vu',
			'field' => 'term_id',
			'terms' => $nghiep_vu,
		);
	}

	if ( ! empty( $noi_lam_viec ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'noi-lam-viec',
			'field' => 'term_id',
			'terms' => $noi_lam_viec,
		);
	}

	$filter_job = new WP_Query( $args );

	if ( $filter_job->have_posts() ) :
		while ( $filter_job->have_posts() ) :
			$filter_job->the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile;
		?>
		<div class="bsc-pagination mt-12 flex justify-center">
			<?php bsc_pagination_ajax( $filter_job, $paged ) ?>
		</div>
		<?php
	else :
		echo '<p>' . __( 'Không có công việc nào phù hợp', 'bsc' ) . '</p>';
	endif;

	wp_reset_postdata();

	die();
}

function load_more_recruitment() {
	$paged = isset( $_POST['paged'] ) ? intval( $_POST['paged'] ) : 1;

	$args = array(
		'post_type' => 'tuyen-dung',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'paged' => $paged,
		'orderby' => 'meta_value_num',
		'meta_key' => 'deadline',
		'order' => 'DESC',
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		ob_start();
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		}
		$data = ob_get_clean();

		wp_send_json_success( [ 
			'data' => $data,
			'more_posts' => $query->max_num_pages > $paged,
		] );
	} else {
		wp_send_json_error();
	}

	wp_die();
}
add_action( 'wp_ajax_load_more_recruitment', 'load_more_recruitment' );
add_action( 'wp_ajax_nopriv_load_more_recruitment', 'load_more_recruitment' );


add_action( 'wp_ajax_filter_chuyengia', 'filter_chuyengia_ajax' );
add_action( 'wp_ajax_nopriv_filter_chuyengia', 'filter_chuyengia_ajax' );

function filter_chuyengia_ajax() {
	check_ajax_referer( 'common_nonce', 'security' );
	$thanh_pho = isset( $_POST['thanh_pho'] ) ? intval( $_POST['thanh_pho'] ) : '';
	$kinh_nghiem = isset( $_POST['kinh_nghiem'] )
		? ( is_array( $_POST['kinh_nghiem'] )
			? array_map( 'intval', $_POST['kinh_nghiem'] )
			: intval( $_POST['kinh_nghiem'] ) )
		: '';
	$menh = isset( $_POST['menh'] )
		? ( is_array( $_POST['menh'] )
			? array_map( 'intval', $_POST['menh'] )
			: intval( $_POST['menh'] ) )
		: '';
	$trinh_do_hoc_van = isset( $_POST['trinh_do_hoc_van'] )
		? ( is_array( $_POST['trinh_do_hoc_van'] )
			? array_map( 'intval', $_POST['trinh_do_hoc_van'] )
			: intval( $_POST['trinh_do_hoc_van'] ) )
		: '';
	$name_chuyen_gia = isset( $_POST['name_chuyen_gia'] ) ? $_POST['name_chuyen_gia'] : '';
	$paged = isset( $_POST['paged'] ) ? intval( $_POST['paged'] ) : 1;
	$posts_per_page = isset( $_POST['posts_per_page'] ) ? intval( $_POST['posts_per_page'] ) : 12;
	$args = array(
		'post_type' => 'chuyen-gia',
		'post_status' => 'publish',
		'posts_per_page' => $posts_per_page,
		'meta_key' => 'fullname',
		'orderby' => 'meta_value',
		'order' => 'ASC',
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'AND',
		),
	);
	if ( ! empty( $thanh_pho ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'thanh-pho',
			'field' => 'term_id',
			'terms' => $thanh_pho,
		);
	}

	if ( ! empty( $kinh_nghiem ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'kinh-nghiem',
			'field' => 'term_id',
			'terms' => $kinh_nghiem,
		);
	}

	if ( ! empty( $menh ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'menh',
			'field' => 'term_id',
			'terms' => $menh,
		);
	}
	if ( ! empty( $trinh_do_hoc_van ) ) {
		$args['tax_query'][] = array(
			'taxonomy' => 'trinh-do-hoc-van',
			'field' => 'term_id',
			'terms' => $trinh_do_hoc_van,
		);
	}
	if ( ! empty( $name_chuyen_gia ) ) {
		$args['s'] = $name_chuyen_gia;
	}
	$filter_job = new WP_Query( $args );
	$total_news = $filter_job->found_posts;
	if ( $filter_job->have_posts() ) :
		?>
		<div class="grid 2xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-x-5 gap-y-6">
			<?php
			while ( $filter_job->have_posts() ) :
				$filter_job->the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
		</div>
		<div class="pagination-center">
			<?php get_template_part( 'components/pagination', '', array(
				'get' => 'ajax',
				'query' => $filter_job,
				'paged' => $paged,
				'total_page' => $total_news,
				'posts_to_show' => $posts_per_page
			) ) ?>
		</div>

		<?php
	else :
		echo '<p>' . __( 'Không có chuyên gia nào phù hợp', 'bsc' ) . '</p>';
	endif;

	wp_reset_postdata();

	die();
}

add_action( 'wp_ajax_fetch_portfolio_data', 'fetch_portfolio_data' );
add_action( 'wp_ajax_nopriv_fetch_portfolio_data', 'fetch_portfolio_data' );

function fetch_portfolio_data() {
	check_ajax_referer( 'common_nonce', 'security' );
	$fromdate = sanitize_text_field( $_POST['fromdate'] );
	$fromdate = DateTime::createFromFormat( 'Y-m-d', $fromdate )->format( 'd/m/Y' );
	$todate = sanitize_text_field( $_POST['todate'] );
	$todate = DateTime::createFromFormat( 'Y-m-d', $todate )->format( 'd/m/Y' );
	$portcode = sanitize_text_field( $_POST['portcode'] );
	$time_cache = $_POST['time_cache'] ?: 300;

	$array_data = array(
		"fromdate" => $fromdate,
		"todate" => $todate,
		"portcode" => $portcode
	);

	$data = get_data_with_cache( 'GetPortfolioPerformance', $array_data, $time_cache );
	$maxValue = 0;
	$minValue = PHP_INT_MAX;

	if ( $data ) {
		$stocksData = array();
		foreach ( explode( ',', $portcode ) as $code ) {
			$stocksData[ $code ] = array();
		}

		foreach ( $data->d as $dataset ) {
			foreach ( $dataset as $stockCode => $entries ) {
				foreach ( $entries as $entry ) {
					$date = date( "Y-m-d", strtotime( $entry->tradedate ) );
					$portclose = $entry->portclose;
					$percentagedifference = $entry->percentagedifference;

					$stocksData[ $stockCode ][ $date ] = array(
						'portclose' => $portclose,
						'percentagedifference' => $percentagedifference
					);

					if ( $portclose > $maxValue ) {
						$maxValue = $portclose;
					}
					if ( $portclose < $minValue ) {
						$minValue = $portclose;
					}
				}
			}
		}
		$stocksDataJson = json_encode( $stocksData );
		$maxValue = ceil( $maxValue / 10 ) * 10;
		$minValue = floor( $minValue / 10 ) * 10;
	} else {
		$stocksDataJson = json_encode( array() );
		$maxValue = 0;
		$minValue = 0;
	}
	echo json_encode( array(
		'data' => $stocksDataJson,
		'maxvalue' => $maxValue,
		'minvalue' => $minValue
	) );
	wp_die();
}


add_action( 'wp_ajax_get_content_qhcd', 'get_content_qhcd_ajax' );
add_action( 'wp_ajax_nopriv_get_content_qhcd', 'get_content_qhcd_ajax' );

function get_content_qhcd_ajax() {
	check_ajax_referer( 'common_nonce', 'security' );
	$id_post = isset( $_POST['id_post'] ) ? intval( $_POST['id_post'] ) : '';
	$newstype = isset( $_POST['newstype'] ) ? intval( $_POST['newstype'] ) : '0';
	if ( $id_post ) {
		$time_cache = get_field( 'cdtt2_time_cache', 'option' ) ?: 300;
		$array_data = array(
			"id" => $id_post,
			"newstype" => $newstype
		);
		$get_news_detail = get_data_with_cache( 'GetNewsDetail', $array_data, $time_cache );
		if ( $get_news_detail ) {
			$news = $get_news_detail->d[0];
			echo $news->body;
		}
	}
	die();
}

/**
 * Add API MCK
 */
add_action( 'wp_ajax_get_shares_data', 'get_shares_data' );
add_action( 'wp_ajax_nopriv_get_shares_data', 'get_shares_data' );

function get_shares_data() {
	check_ajax_referer( 'common_nonce', 'security' );
	$time_cache = 300;
	$array_data = array(
		'lang' => pll_current_language(),
		'maxitem' => '2200',
		'StockType' => '2'
	);
	$response = get_data_with_cache( 'GetInstrumentInfo', $array_data, $time_cache );
	if ( $response ) {
		$shares_data = [];
		foreach ( $response->d as $code_each ) {
			$code = $code_each->SYMBOL;
			$shares_data[] = [ 'name' => $code, 'link' => slug_co_phieu( $code ) ];
		}
		wp_send_json_success( $shares_data );
	}
	die();
}

/**
 * API Filter Event Calendar
 */
add_action( 'wp_ajax_filter_event_calendar', 'filter_event_calendar' );
add_action( 'wp_ajax_nopriv_filter_event_calendar', 'filter_event_calendar' );

function filter_event_calendar() {
	check_ajax_referer( 'common_nonce', 'security' );
	$time_cache = 300;
	$total_page = 0;
	$post_per_page = 12;
	$eventcode = isset( $_POST['eventcode'] ) ? $_POST['eventcode'] : '';
	$mck = isset( $_POST['mck'] ) ? $_POST['mck'] : '';
	$fromdate = isset( $_POST['fromdate'] ) ? $_POST['fromdate'] : '';
	$todate = isset( $_POST['todate'] ) ? $_POST['todate'] : '';
	$paged = isset( $_POST['paged'] ) ? intval( $_POST['paged'] ) : '1';
	$sortfield = isset( $_POST['sortfield'] ) ? $_POST['sortfield'] : 'ex_date';
	if ( $paged ) {
		$index = ( $paged - 1 ) * $post_per_page + 1;
	} else {
		$index = 1;
	}
	ob_start();
	$array_data_GetEvents = array(
		'lang' => pll_current_language(),
		'maxitem' => $post_per_page,
		'index' => $index,
	);
	if ( isset( $sortfield ) && ! empty( $sortfield ) ) {
		$array_data_GetEvents['sortField'] = $sortfield;
	}
	if ( isset( $eventcode ) && ! empty( $eventcode ) ) {
		$array_data_GetEvents['eventcode'] = $eventcode;
	}
	if ( isset( $fromdate ) && ! empty( $fromdate ) ) {
		$array_data_GetEvents['fromdate'] = $fromdate;
	}
	if ( isset( $todate ) && ! empty( $todate ) ) {
		$array_data_GetEvents['todate'] = $todate;
	}
	$response_GetEvents = get_data_with_cache( 'GetEvents', $array_data_GetEvents, $time_cache );
	if ( $response_GetEvents ) {
		$filtered_events = [];
		// Lọc dựa trên ký tự bất kỳ trong `mck`
		if ( ! empty( $mck ) ) {
			foreach ( $response_GetEvents->d as $event ) {
				if ( stripos( $event->symbol, $mck ) !== false ) {
					$filtered_events[] = $event;
				}
			}
			$total_post = count( $filtered_events );
			$total_page = ceil( $total_post / $post_per_page );
		} else {
			$filtered_events = $response_GetEvents->d;
			if ( $response_GetEvents->totalrecord ) {
				$total_post = $response_GetEvents->totalrecord;
			} else {
				$total_post = $post_per_page;
			}
			$total_page = ceil( $total_post / $post_per_page );
		}
		?>
		<?php
		// Hiển thị dữ liệu đã lọc
		foreach ( $filtered_events as $GetEvents ) {
			get_template_part( 'template-parts/content-lich-thi-truong', '', array(
				'data' => $GetEvents,
			) );
		}
	}

	$html = ob_get_contents();
	ob_end_clean();

	ob_start();

	// Hiển thị phân trang
	get_template_part( 'components/pagination', '', array(
		'get' => 'ajax_api',
		'total_page' => $total_page,
		'post_per_page' => 'hide',
		'paged' => $paged,
	) );

	$pagination = ob_get_contents();
	ob_end_clean();

	wp_send_json_success( array(
		'html' => $html,
		'pagination' => $pagination,
	) );

	die();
}



/**
 * Data History
 */
add_action( 'wp_ajax_filter_du_lieu_lich_su', 'filter_du_lieu_lich_su' );
add_action( 'wp_ajax_nopriv_filter_du_lieu_lich_su', 'filter_du_lieu_lich_su' );

function filter_du_lieu_lich_su() {
	check_ajax_referer( 'common_nonce', 'security' );
	$time_cache = 300;
	$symbol = isset( $_POST['mck'] ) ? $_POST['mck'] : '';
	$fromdate = isset( $_POST['fromdate'] ) ? $_POST['fromdate'] : '';
	$todate = isset( $_POST['todate'] ) ? $_POST['todate'] : '';
	$page = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 1;
	$items_per_page = isset( $_POST['items_per_page'] ) ? intval( $_POST['items_per_page'] ) : 20;
	$type_form = isset( $_POST['type_form'] ) ? $_POST['type_form'] : '';

	if ( $type_form == 'history' ) {
		$current_date_ymd = date( 'Y-m-d' );
		$last_month_date_ymd = date( 'Y-m-d', strtotime( '-6 month', strtotime( $current_date_ymd ) ) );
		$array_data_secTradingHistory = [ 
			'lang' => pll_current_language(),
			'secCode' => $symbol,
		];
		$array_data_secTradingHistory['startDate'] = ! empty( $fromdate ) ? $fromdate : $last_month_date_ymd;
		$array_data_secTradingHistory['endDate'] = ! empty( $todate ) ? $todate : $current_date_ymd;

		$array_data_secTradingHistory = json_encode( $array_data_secTradingHistory );
		$response_secTradingHistory = get_data_with_cache( 'secTradingHistory', $array_data_secTradingHistory, $time_cache, get_field( 'cdapi_ip_address_url_api_algo', 'option' ) . 'pbapi/api/', 'POST' );
		if ( $response_secTradingHistory ) {
			$data = json_decode( $response_secTradingHistory->data, true );
			$data = array_reverse( $data, true );
			// Phân trang dữ liệu
			if ( is_array( $data ) && ! empty( $data ) ) {
				$total_items = count( $data );
				$total_pages = ceil( $total_items / $items_per_page );
				$offset = ( $page - 1 ) * $items_per_page;
				$paged_data = array_slice( $data, $offset, $items_per_page );

				ob_start();
				foreach ( $paged_data as $record ) {
					get_template_part( 'template-parts/content-data-history', '', [ 'data' => $record ] );
				}
				$html = ob_get_clean();

				wp_send_json_success( [ 
					'html' => $html,
					'total_pages' => $total_pages,
					'current_page' => $page,
				] );
			} else {
				wp_send_json_error( [ 'message' => 'No data found' ] );
			}
		}
	} else {
		$current_date_dmy = date( 'd/m/Y' );
		$last_month_date_dmy = date( 'd/m/Y', strtotime( '-6 month' ) );
		$array_data_GetForeignInvestors = [ 
			'lang' => pll_current_language(),
			'symbol' => $symbol,
		];
		$array_data_GetForeignInvestors['fromdate'] = ! empty( $fromdate ) ? $fromdate : $last_month_date_dmy;
		$array_data_GetForeignInvestors['todate'] = ! empty( $todate ) ? $todate : $current_date_dmy;

		$response_GetForeignInvestors = get_data_with_cache( 'GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache );
		if ( $response_GetForeignInvestors ) {
			$data = $response_GetForeignInvestors->d;

			// Phân trang dữ liệu
			if ( is_array( $data ) && ! empty( $data ) ) {
				$total_items = count( $data );
				$total_pages = ceil( $total_items / $items_per_page );
				$offset = ( $page - 1 ) * $items_per_page;
				$paged_data = array_slice( $data, $offset, $items_per_page );

				ob_start();
				foreach ( $paged_data as $record ) {
					get_template_part( 'template-parts/content-data-history_ndtnn', '', [ 'data' => $record ] );
				}
				$html = ob_get_clean();

				wp_send_json_success( [ 
					'html' => $html,
					'total_pages' => $total_pages,
					'current_page' => $page,
				] );
			} else {
				wp_send_json_error( [ 'message' => 'No data found' ] );
			}
		}
	}

	wp_send_json_error( [ 'message' => 'No data found' ] );
}



/**
 * Filter Data Details SYMBOL
 */
add_action( 'wp_ajax_filter_details_symbol', 'filter_details_symbol' );
add_action( 'wp_ajax_nopriv_filter_details_symbol', 'filter_details_symbol' );

function filter_details_symbol() {
	check_ajax_referer( 'common_nonce', 'security' );
	$time_cache = 300;
	$symbol = isset( $_POST['symbol'] ) ? $_POST['symbol'] : '';
	$type_form = isset( $_POST['type_form'] ) ? $_POST['type_form'] : '1';
	$current_url = isset( $_POST['current_url'] ) ? esc_url_raw( $_POST['current_url'] ) : '';
	$get_array_id_taxonomy = get_array_id_taxonomy( 'danh-muc-bao-cao-phan-tich' );
	$check_logout = bsc_is_user_logged_out( $current_url );
	$class = $check_logout['class'] ?? '';
	if ( $type_form == 'lichsugiaodich' ) {
		?>
		<?php
		$current_date_ymd = date( 'Y-m-d' );
		$last_month_date_ymd = date( 'Y-m-d', strtotime( '-1 month', strtotime( $current_date_ymd ) ) );
		$array_data_secTradingHistory = json_encode( [ 
			'lang' => pll_current_language(),
			'secCode' => $symbol,
			'startDate' => $last_month_date_ymd,
			'endDate' => $current_date_ymd
		] );
		$response_secTradingHistory = get_data_with_cache( 'secTradingHistory', $array_data_secTradingHistory, $time_cache, get_field( 'cdapi_ip_address_url_api_algo', 'option' ) . 'pbapi/api/', 'POST' );
		if ( $response_secTradingHistory ) {
			$data_response_secTradingHistory = json_decode( $response_secTradingHistory->data, true );
			$data_response_secTradingHistory = array_reverse( $data_response_secTradingHistory, true );
			?>
			<div class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
				<div class="overflow-x-auto scroll-bar-custom scroll-bar-x">
					<div
						class="flex bg-primary-300 text-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:w-full w-max' ?>">
						<div class="min-w-[90px] pl-4 pr-3 py-2 text-left sm:max-w-[19%]">
							<?php _e( 'Ngày', 'bsc' ) ?>
						</div>
						<div class="min-w-[152px] px-3 py-2 sm:max-w-[30%]">
							<?php _e( 'Thay đổi giá', 'bsc' ) ?>
						</div>
						<div class="min-w-[136px] sm:max-w-[27%] px-3 py-2">
							<?php _e( 'KL khớp lệnh', 'bsc' ) ?>
						</div>
						<div class="px-3 py-2 sm:flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[136px]' ?>">
							<?php _e( 'Tổng GTGD', 'bsc' ) ?>
						</div>
					</div>
					<ul>
						<?php
						$i = 0;
						foreach ( $data_response_secTradingHistory as $record ) {
							$i++;
							if ( $i < 8 ) {
								?>
								<li
									class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:w-full w-max' ?>">
									<div
										class="min-w-[90px] sm:max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
										<?php
										if ( $record['TRADE_DATE'] ) {
											$date = new DateTime( $record['TRADE_DATE'] );
											echo $date->format( 'd/m' );
										}
										?>
									</div>
									<?php if ( $record['CLOSE_PRICE'] && $record['REF_PRICE'] ) {
										if ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) > 0 ) {
											$text_color_class_GetForeignInvestors = 'text-[#1CCD83]';
										} elseif ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) < 0 ) {
											$text_color_class_GetForeignInvestors = 'text-[#FE5353]';
										} elseif ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) == 0 ) {
											$text_color_class_GetForeignInvestors = 'text-[#EB0]';
										} else {
											$text_color_class_GetForeignInvestors = '';
										}
										if ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) > 0 ) {
											$first_GetForeignInvestors = '+';
											$icon_GetForeignInvestors = svg( 'up', '17', '17' );
										} elseif ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) == 0 ) {
											$first_GetForeignInvestors = '';
											$icon_GetForeignInvestors = '';
										} elseif ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) < 0 ) {
											$first_GetForeignInvestors = '';
											$icon_GetForeignInvestors = svg( 'downn', '17', '17' );
										} else {
											$first_GetForeignInvestors = '';
											$icon_GetForeignInvestors = '';
										}
									}
									?>
									<div
										class="min-w-[152px] sm:max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
										<p class="min-w-[30px] text-right">
											<?php
											if ( $record['CLOSE_PRICE'] ) {
												echo bsc_number_format( ( $record['CLOSE_PRICE'] ) / 1000 );
											}
											?>
										</p>
										<p
											class="flex items-center gap-1 <?php echo $text_color_class_GetForeignInvestors ?> font-Helvetica">
											<?php echo $icon_GetForeignInvestors ?>
											<?php echo bsc_number_format( ( ( $record['CLOSE_PRICE'] - $record['REF_PRICE'] ) / ( $record['REF_PRICE'] ) ) * 100 ) ?>%
										</p>
									</div>
									<div
										class="min-w-[136px] sm:max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-end border-r border-[#C9CCD2] text-right pr-10">
										<?php echo bsc_number_format( $record['TOT_VOLUME'] ) ?>
									</div>
									<div
										class="px-3 py-2 min-h-10 flex items-center justify-end sm:flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[136px]' ?> pr-10">
										<?php echo bsc_number_format( $record['TOT_VALUE'] ) ?>
									</div>
								</li>
								<?php
							}
						}
						?>
					</ul>
				</div>
			</div>
			<div
				class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-4' : 'mt-[12px]' ?>">
				<?php if ( get_field( 'cdc7_page_lich_su_gia', 'option' ) ) { ?>
					<a href="<?php echo get_field( 'cdc7_page_lich_su_gia', 'option' ) . '?mck=' . $symbol ?>"
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-xs font-Helvetica">
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
					</a>
				<?php } ?>
				<p class="font-medium text-xs font-Helvetica">
					<?php _e( 'Đơn vị GTGD: triệu VNĐ', 'bsc' ) ?>
				</p>
			</div>
		<?php } ?>
	<?php
	} elseif ( $type_form == 'ndtnn' ) {
		?>
		<?php
		$current_date_dmy = date( 'd/m/Y' );
		$last_month_date_dmy = date( 'd/m/Y', strtotime( '-1 month' ) );
		$array_data_GetForeignInvestors = array(
			'lang' => pll_current_language(),
			'symbol' => $symbol,
			'fromdate' => $last_month_date_dmy,
			'todate' => $current_date_dmy
		);
		$response_GetForeignInvestors = get_data_with_cache( 'GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache );
		if ( $response_GetForeignInvestors ) {
			?>
			<div class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
				<div class="flex bg-primary-300 text-white">
					<div class="min-w-[90px] sm:max-w-[19%] pl-4 pr-3 py-2 text-left">
						<?php _e( 'Ngày', 'bsc' ) ?>
					</div>
					<div class="min-w-[100px] sm:max-w-[20%] pl-4 pr-3 py-2 text-center">
						<?php _e( 'KL Mua', 'bsc' ) ?>
					</div>
					<div class="min-w-[90px] sm:max-w-[19%] pl-4 pr-3 py-2 text-left">
						<?php _e( 'GT Mua', 'bsc' ) ?>
					</div>
					<div class="min-w-[136px] sm:max-w-[27%] px-3 py-2">
						<?php _e( 'KL bán', 'bsc' ) ?>
					</div>
					<div class="flex-1 px-3 py-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[100px]' ?>">
						<?php _e( 'GT bán', 'bsc' ) ?>
					</div>
				</div>
				<ul>
					<?php
					$i_GetForeignInvestors = 0;
					foreach ( $response_GetForeignInvestors->d as $GetForeignInvestors ) {
						$i_GetForeignInvestors++;
						if ( $i_GetForeignInvestors < 8 ) {
							?>
							<li class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
								<div
									class="min-w-[90px] sm:max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
									<?php
									if ( $GetForeignInvestors->tradedate ) {
										$date = new DateTime( $GetForeignInvestors->tradedate );
										echo $date->format( 'd/m' );
									}
									?>
								</div>
								<div
									class="min-w-[90px] sm:max-w-[19%] pl-4 py-2 text-left min-h-10 flex items-center justify-end pr-3 border-r border-[#C9CCD2]">
									<?php
									if ( $GetForeignInvestors->f_BUY_VOLUME ) {
										echo bsc_number_format( ( $GetForeignInvestors->f_BUY_VOLUME ) );
									}
									?>
								</div>
								<div
									class="min-w-[100px] sm:max-w-[20%] pl-4 py-2 text-left min-h-10 flex items-center justify-end pr-3 border-r border-[#C9CCD2]">
									<?php
									if ( $GetForeignInvestors->f_BUY_VALUE ) {
										echo bsc_number_format( $GetForeignInvestors->f_BUY_VALUE );
									}
									?>
								</div>
								<div
									class="min-w-[136px] sm:max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-end pr-3 border-r border-[#C9CCD2]">
									<?php
									if ( $GetForeignInvestors->f_SELL_VOLUME ) {
										echo bsc_number_format( ( $GetForeignInvestors->f_SELL_VOLUME ) );
									}
									?>
								</div>
								<div
									class="flex-1 px-3 py-2 min-h-10 flex items-center justify-end pr-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[100px]' ?>">
									<?php
									if ( $GetForeignInvestors->f_SELL_VALUE ) {
										echo bsc_number_format( $GetForeignInvestors->f_SELL_VALUE );
									}
									?>
								</div>
							</li>
							<?php
						}
					}
					?>
				</ul>

			</div>
			<div class="flex items-center justify-between mt-4">
				<?php if ( get_field( 'cdc7_page_nha_dau_tu_nuoc_ngoai', 'option' ) ) { ?>
					<a href="<?php echo get_field( 'cdc7_page_nha_dau_tu_nuoc_ngoai', 'option' ) . '?mck=' . $symbol ?>"
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
						<?php echo svg( 'arrow-btn', '20', '20' ) ?>
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
					</a>
				<?php } ?>
				<p class="font-medium text-xs font-Helvetica">
					<?php _e( 'Đơn vị GTGD: triệu VNĐ', 'bsc' ) ?>
				</p>
			</div>
		<?php } ?>
	<?php
	} elseif ( $type_form == 'sg_bcpt' ) {
		?>
		<?php
		$categoryid_kn = get_field( 'cddmkn1_id_danh_muc', 'option' );
		$categoryid_bcn = get_field( 'cdttcp1_api_id_bao_cao_nganh', 'option' );
		if ( $categoryid_kn ) {
			$currentDate = new DateTime();
			$fromDate = clone $currentDate;
			$fromDate->modify( '-1 year' );
			$fromdate = $fromDate->format( 'd/m/Y' );
			$todate = $currentDate->format( 'd/m/Y' );
			$array_data = array(
				'lang' => pll_current_language(),
				'categoryid' => $categoryid_kn,
				'maxitem' => 3,
				'symbol' => $symbol,
				'fromdate' => $fromdate,
				'todate' => $todate
			);
			$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
			?>
			<?php
			if ( $response ) {
				$total_post = $response->totalrecord;
				if ( $total_post == 0 ) {
					$array_data = array(
						'lang' => pll_current_language(),
						'categoryid' => $categoryid_bcn,
						'maxitem' => 3
					);
					$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
				}
				?>
				<?php
				if ( $response ) {
					foreach ( $response->d as $news ) {
						get_template_part( 'template-parts/content', 'bao-cao-phan-tich', array(
							'data' => $news,
							'get_array_id_taxonomy' => $get_array_id_taxonomy,
						) );
					}
				}
			?>
			<?php }
			;
		}
	?>
	<?php
	} elseif ( $type_form == 'sg_cccd' ) {
		?>
		<?php $array_data_GetShareholderRelations = array(
			'lang' => pll_current_language(),
			'symbol' => $symbol
		);
		$response_GetShareholderRelations = get_data_with_cache( 'GetShareholderRelations', $array_data_GetShareholderRelations, $time_cache );
		if ( $response_GetShareholderRelations ) { ?>
			<div class="rounded-xl bg-gradient-blue-50 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-6 py-8' : 'p-4' ?>">
				<h4
					class="text-center mb-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl' : 'text-lg' ?> font-bold font-Helvetica">
					<?php _e( 'Tỷ lệ cơ cấu cổ đông', 'bsc' ) ?>
				</h4>
				<div class="relative text-center">
					<?php if ( $response_GetShareholderRelations->d[0]->outsshares ) { ?>
						<div class="absolute w-full h-full flex flex-col justify-center font-Helvetica text-xs">
							<p class="text-xxs">
								<?php _e( 'Số lượng cổ phiếu', 'bsc' ) ?>
							</p>
							<p class="font-bold">
								<?php echo bsc_number_format( $response_GetShareholderRelations->d[0]->outsshares ) ?>
							</p>
						</div>
					<?php } ?>
					<svg id="progress-ring" class="mx-auto" width="166" height="166" viewBox="0 0 166 167" fill="none"
						xmlns="http://www.w3.org/2000/svg">

						<circle cx="83.0342" cy="83.6479" r="72.3521" stroke="#295CA9" stroke-width="21" stroke-linecap="round"
							stroke-linejoin="round" />

						<circle id="progress-circle" cx="83.0342" cy="83.6479" r="72.3521" stroke="#F2B122" stroke-width="21"
							stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="454" stroke-dashoffset="0"
							transform="rotate(90 83.0342 83.6479)" />
					</svg>

				</div>
				<div
					class="mt-5 mx-auto <?php echo ( get_locale() == 'en_GB' ) ? '' : 'max-w-[215px]'; ?>  space-y-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
					<?php if ( $response_GetShareholderRelations->d[0]->bigholderpct ) { ?>
						<div
							class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-primary-300">
							<p>
								<?php _e( 'Cổ đông lớn', 'bsc' ) ?>
							</p>
							<p>
								<?php echo $response_GetShareholderRelations->d[0]->bigholderpct ?>%
							</p>
						</div>
					<?php } ?>
					<?php if ( $response_GetShareholderRelations->d[0]->remainingsharespct ) { ?>
						<div
							class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-yellow-100">
							<p>
								<?php _e( 'Cổ đông khác', 'bsc' ) ?>
							</p>
							<p>
								<?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?>%
							</p>
						</div>
					<?php } ?>
				</div>
				<script>
					function setProgress( percent )
					{
						const circle = document.getElementById( 'progress-circle' );
						const circumference = 454;
						const offset = circumference - ( percent / 100 ) * circumference;
						circle.style.strokeDashoffset = offset;
					}
					setProgress( <?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?> );
				</script>
			</div>
			<div
				class="rounded-xl bg-gradient-blue-50 w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-6 lg:min-h-[234px] lg:flex lg:flex-col lg:justify-center' : 'p-4' ?>">
				<ul class="font-Helvetica space-y-4">

					<?php if ( $response_GetShareholderRelations->d[0]->outsshares ) { ?>
						<li class="flex items-center justify-between">
							<p>
								<?php _e( 'KLCP Lưu hành', 'bsc' ) ?>:
							</p>
							<strong class="text-primary-300">
								<?php echo bsc_number_format( $response_GetShareholderRelations->d[0]->outsshares ) ?>
							</strong>
						</li>
					<?php } ?>
					<?php if ( $response_GetShareholderRelations->d[0]->govheldpct ) { ?>
						<li class="flex items-center justify-between">
							<p>
								<?php _e( 'Tỷ lệ sở hữu nhà nước (%)', 'bsc' ) ?>
							</p>
							<strong>
								<?php echo bsc_number_format( $response_GetShareholderRelations->d[0]->govheldpct ) ?>%
							</strong>
						</li>
					<?php } ?>
					<?php if ( $response_GetShareholderRelations->d[0]->fheldpct ) { ?>
						<li class="flex items-center justify-between">
							<p>
								<?php _e( 'Tỷ lệ sở hữu nước ngoài (%)', 'bsc' ) ?>
							</p>
							<strong>
								<?php echo bsc_number_format( $response_GetShareholderRelations->d[0]->fheldpct ) ?>%
							</strong>
						</li>
					<?php } ?>
					<?php if ( $response_GetShareholderRelations->d[0]->froom ) { ?>
						<li class="flex items-center justify-between">
							<p>
								<?php _e( 'Room nước ngoài', 'bsc' ) ?>
							</p>
							<strong>
								<?php echo bsc_number_format( $response_GetShareholderRelations->d[0]->froom ) ?>
							</strong>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
	<?php
	} elseif ( $type_form == 'sg_dncn' ) {
		?>
		<table
			class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:px-3 prose-th:py-4 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3 prose-thead:sticky prose-thead:top-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
			<thead>
				<tr>
					<th class="!pl-5 cursor-pointer filter-table"><?php _e( 'Mã CK', 'bsc' ) ?>
						<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
					</th>

					<th class="filter-table cursor-pointer filter-table text-right">
						<?php _e( 'Vốn hóa', 'bsc' ) ?>
						<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
					</th>

					<th class="filter-table cursor-pointer filter-table text-right">
						<?php _e( 'PE', 'bsc' ) ?>
						<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
					</th>
					<th class="filter-table cursor-pointer filter-table !pl-5 text-right">
						<?php _e( 'PB', 'bsc' ) ?>
						<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
					</th>
				</tr>
			</thead>
			<tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2] text-right prose-td:pr-5">
				<?php
				$array_data_sameIndustry = array(
					'lang' => pll_current_language(),
					'symbol' => $symbol,
				);
				$response_sameIndustry = get_data_with_cache( 'GetInstrumentSameIndustry', $array_data_sameIndustry, $time_cache );
				if ( $response_sameIndustry ) {
					?>
					<?php
					foreach ( $response_sameIndustry->d as $record ) {
						?>
						<tr>
							<td class="!pl-5 text-left w-1/4"><a
									href="<?php echo slug_co_phieu( $record->SYMBOL ) ?>"><?php echo $record->SYMBOL ?></a>
							</td>
							<td class="w-1/4"><?php
							echo bsc_number_format( $record->MC, false, true ) ?></td>
							<td class="w-1/4"><?php echo bsc_number_format( $record->PE ) ?></td>
							<td class="w-1/4"><?php echo bsc_number_format( $record->PB ) ?></td>
						</tr>
						<?php
					}
					?>
				<?php } ?>
			</tbody>
		</table>
		<?php
	} elseif ( $type_form == 'sg_ttvmcp' ) {
		?>
		<?php $array_data_GetNews = array(
			'lang' => pll_current_language(),
			'maxitem' => 6,
			'symbol' => $symbol,
			'newstype' => 1
		);
		$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews, $time_cache );
		if ( $response_GetNews ) { ?>
			<?php
			foreach ( $response_GetNews->d as $news ) {
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
				?>
				<div class="news_service-item ">
					<div class="flex items-center">
						<div
							class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
							<p class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
								<?php
								echo $day_of_year;
								?>
							</p>
							<div class="flex-1 flex flex-col justify-center items-center text-xl font-bold bg-primary-50 w-full">
								<p> <?php
								echo $day_of_month;
								?></p>
								<p class="text-primary-300 text-xs font-medium">
									<?php echo $month_name; ?>
								</p>
							</div>
						</div>
						<div class="lg:ml-[30px] ml-4">
							<a href="<?php echo slug_news_mck( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
								class="lg:font-bold font-semibold leading-normal lg:line-clamp-2 line-clamp-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg mb-2' : 'text-base' ?>  transition-all duration-500 hover:text-primary-300 main_title">
								<?php echo htmlspecialchars( $news->title ) ?>
							</a>
							<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() && isset( $news->description ) && $news->description ) { ?>
								<div class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
									<?php echo $news->description ?>
								</div>
							<?php } ?>
						</div>
					</div>

				</div>
				<?php
			}
		?>
		<?php } ?>
	<?php
	} elseif ( $type_form == 'details_symbol_tab-2' ) {
		?>
		<div class="list__content">
			<div
				class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:mt-16 mt-8 lg:mb-10' : 'mt-[38px] mb-2' ?>">
				<ul
					class="flex items-center sm:gap-5 gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?> customtab-nav">
					<li>
						<button data-tabs="#tab-2-Q"
							class="active sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg w-full' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li>
						<button data-tabs="#tab-2-Y"
							class="sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg w-full' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<?php if ( get_field( 'cdc7_page_bao_cao_tai_chinh', 'option' ) ) { ?>
						<a href="<?php echo get_permalink( get_field( 'cdc7_page_bao_cao_tai_chinh', 'option' ) ) ?><?php echo $symbol ?>"
							class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
							<?php _e( 'Xem chi tiết', 'bsc' ) ?>
							<?php echo svg( 'arrow-btn', '12', '12' ) ?>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-2-<?php echo $freq ?>">
						<?php
						$array_data_GetSummaryFinanceReportBySymbol = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
						);
						$response_GetSummaryFinanceReportBySymbol = get_data_with_cache( 'GetSummaryFinanceReportBySymbol', $array_data_GetSummaryFinanceReportBySymbol, $time_cache );
						if ( $response_GetSummaryFinanceReportBySymbol ) {
							$industryname = $response_GetSummaryFinanceReportBySymbol->industryname;
							?>

							<?php $total_colspan = $check_year + 2; ?>
							<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-16' : 'space-y-10' ?>">
								<div class="overflow-hidden">
									<div class="overflow-x-auto whitespace-nowrap sm:text-base text-xs">
										<table
											class="w-full max-w-full prose-thead:font-bold prose-th:text-left font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-th:p-4 prose-td:py-4 prose-td:px-5' : 'prose-th:p-[12px] prose-td:p-[12px]' ?>">
											<thead>
												<tr>
													<th class="lg:min-w-[231px] lg:!w-1/4 "></th>
													<?php
													// Lấy dữ liệu từ đối tượng phản hồi
													$yearData = $response_GetSummaryFinanceReportBySymbol->d1[0];
													$kiemToanData = $response_GetSummaryFinanceReportBySymbol->d1[2];

													// Chuyển đổi đối tượng thành mảng kết hợp
													$yearDataArray = (array) $yearData;
													$kiemToanDataArray = (array) $kiemToanData;

													// Loại bỏ phần tử đầu tiên (TITLE)
													$yearDataValues = array_slice( $yearDataArray, 1, null, true );
													$kiemToanDataValues = array_slice( $kiemToanDataArray, 1, null, true );

													// Đảo ngược thứ tự của mảng
													$yearDataValues = array_reverse( $yearDataValues, true );
													$kiemToanDataValues = array_reverse( $kiemToanDataValues, true );
													$totalItems = count( $yearDataValues );
													// Vòng lặp qua các phần tử đã đảo ngược
													$check_year = 0;
													foreach ( $yearDataValues as $key => $year ) {
														$check_year++;
														$class = '';
														if ( $totalItems == 5 ) {
															$class = 'w-[calc(75%/5)]';
														} elseif ( $totalItems == 4 ) {
															$class = 'w-[calc(75%/4)]';
														} elseif ( $totalItems == 3 ) {
															$class = 'w-[calc(75%/3)]';
														}
														// Lấy giá trị kiểm toán tương ứng
														$kiem_toan = isset( $kiemToanDataValues[ $key ] ) ? $kiemToanDataValues[ $key ] : '';
														?>
														<th
															class="lg:min-w-[140px] font-bold flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? $class : '' ?>">
															<p class="text-right"><?php echo htmlspecialchars( $year ); ?></p>
															<p class="text-[#1CCD83] text-right">
																<?php
																if ( $kiem_toan === 'N' ) {
																	echo __( '(Chưa kiểm toán)', 'bsc' );
																} else {
																	echo __( '(Đã kiểm toán)', 'bsc' );
																}
																?>
															</p>
														</th>
														<?php
													}
													?>

												</tr>

											</thead>
											<tbody class="text-right">
												<tr>
													<td colspan="10"
														class="bg-primary-300 text-white text-left rounded-tl-lg rounded-tr-lg">
														<?php _e( 'Kết quả kinh doanh', 'bsc' ); ?>
													</td>
												</tr>
												<?php
												$check_kqkd = 0;
												foreach ( $response_GetSummaryFinanceReportBySymbol->d2 as $data ) {
													$check_kqkd++;
													if ( $check_kqkd > 4 ) {
														if ( $industryname == 'Security' ) {
															$data_title = array(
																'',
																'',
																'',
																'',
																'',
																__( 'Doanh thu hoạt động', 'bsc' ),
																__( 'Tổng lợi nhuận KT trước thuế', 'bsc' ),
																__( 'Lợi nhuận KT sau thuế TNDN', 'bsc' ),
																__( 'Lợi nhuận sau thuế của công ty mẹ', 'bsc' )
															);
														} elseif ( $industryname == 'Bank' ) {
															$data_title = array(
																'',
																'',
																'',
																'',
																'',
																__( 'Thu nhập lãi thuần', 'bsc' ),
																__( 'Tổng lợi nhuận KT trước thuế', 'bsc' ),
																__( 'Lợi nhuận KT sau thuế TNDN', 'bsc' ),
																__( 'Lợi nhuận sau thuế của công ty mẹ', 'bsc' )
															);
														} elseif ( $industryname == 'Insurance' ) {
															$data_title = array(
																'',
																'',
																'',
																'',
																'',
																__( 'Doanh thu thuần hoạt động kinh doanh BH', 'bsc' ),
																__( 'Tổng lợi nhuận KT trước thuế', 'bsc' ),
																__( 'Lợi nhuận KT sau thuế TNDN', 'bsc' ),
																__( 'Lợi nhuận sau thuế của công ty mẹ', 'bsc' )
															);
														} else {
															$data_title = array(
																'',
																'',
																'',
																'',
																'',
																__( 'Doanh thu bán hàng và CCDV', 'bsc' ),
																__( 'Tổng lợi nhuận KT trước thuế', 'bsc' ),
																__( 'Lợi nhuận KT sau thuế TNDN', 'bsc' ),
																__( 'Lợi nhuận sau thuế của công ty mẹ', 'bsc' )
															);
														}
														?>
														<tr
															class="relative after:absolute after:w-full after:h-full after:top-0 after:left-0 [&:nth-child(even)]:after:bg-[#EBF4FA] after:-z-[1] lg:prose-td:w-[calc(100%/8)]">
															<td class="lg:min-w-[231px] lg:!w-1/4 text-left">
																<?php echo $data_title[ $check_kqkd ] ?>
															</td>
															<?php
															$dataArray = (array) $data;
															// Loại bỏ phần tử đầu tiên (TITLE)
															$dataValues = array_slice( $dataArray, 1, null, true );
															// Đảo ngược thứ tự của mảng
															$dataValues = array_reverse( $dataValues, true );
															$check_dat = 0;
															foreach ( $dataValues as $key => $dat ) {
																$check_dat++; ?>
																<td><?php
																if ( is_numeric( $dat ) ) {
																	echo bsc_number_format( $dat );
																}
																?></td>
																<?php
															} ?>
														</tr>
														<?php
													}
												}
												?>
												<tr class="h-10"></tr>
												<td class="lg:min-w-[231px] lg:!w-1/4 bg-primary-300 text-white font-bold text-left rounded-tl-lg rounded-tr-lg"
													colspan="10">
													<?php _e( 'Cân đối kế toán', 'bsc' ) ?>
												</td>
												<?php
												$check_ts = 0;
												foreach ( $response_GetSummaryFinanceReportBySymbol->d1 as $data_ts ) {
													$check_ts++;
													if ( $check_ts > 3 ) {
														if ( $industryname == 'Security' ) {
															$data_ts_title = array(
																'',
																'',
																'',
																'',
																__( 'Tổng tài sản', 'bsc' ),
																__( 'Tài sản ngắn hạn', 'bsc' ),
																__( 'Nợ ngắn hạn', 'bsc' ),
																__( 'Tổng nợ', 'bsc' ),
																__( 'Vốn chủ sở hữu', 'bsc' )
															);
														} elseif ( $industryname == 'Bank' ) {
															$data_ts_title = array(
																'',
																'',
																'',
																'',
																__( 'Tổng tài sản', 'bsc' ),
																__( 'Cho vay khách hàng', 'bsc' ),
																__( 'Tiền gửi khách hàng', 'bsc' ),
																__( 'Tổng nợ', 'bsc' ),
																__( 'Vốn chủ sở hữu', 'bsc' )
															);
														} elseif ( $industryname == 'Insurance' ) {
															$data_ts_title = array(
																'',
																'',
																'',
																'',
																__( 'Tổng tài sản', 'bsc' ),
																__( 'Tài sản ngắn hạn', 'bsc' ),
																__( 'Nợ ngắn hạn', 'bsc' ),
																__( 'Tổng nợ', 'bsc' ),
																__( 'Vốn chủ sở hữu', 'bsc' )
															);
														} else {
															$data_ts_title = array(
																'',
																'',
																'',
																'',
																__( 'Tổng tài sản', 'bsc' ),
																__( 'Tài sản ngắn hạn', 'bsc' ),
																__( 'Nợ ngắn hạn', 'bsc' ),
																__( 'Tổng nợ', 'bsc' ),
																__( 'Vốn chủ sở hữu', 'bsc' )
															);
														}
														?>
														<tr
															class="lg:prose-td:w-[calc(100%/8)] relative after:absolute after:w-full after:h-full after:top-0 after:left-0 [&:nth-child(even)]:after:bg-[#EBF4FA] after:-z-[1]">
															<td class="lg:min-w-[231px] lg:!w-1/4 text-left">
																<?php echo $data_ts_title[ $check_ts ] ?>
															</td>
															<?php
															$data_tsArray = (array) $data_ts;
															// Loại bỏ phần tử đầu tiên (TITLE)
															$data_tsValues = array_slice( $data_tsArray, 1, null, true );
															// Đảo ngược thứ tự của mảng
															$data_tsValues = array_reverse( $data_tsValues, true );
															$check_dat_ts = 0;
															foreach ( $data_tsValues as $key => $dat_ts ) {
																$check_dat_ts++; ?>
																<td><?php
																if ( is_numeric( $dat_ts ) ) {
																	echo bsc_number_format( $dat_ts );
																}
																?></td>
																<?php
															} ?>
														</tr>
														<?php
													}
												}
												?>
											</tbody>
										</table>

									</div>
								</div>

							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>

								<?php if ( get_field( 'cdc7_page_bao_cao_tai_chinh', 'option' ) ) { ?>

									<div class="mt-8">
										<a href="<?php echo get_permalink( get_field( 'cdc7_page_bao_cao_tai_chinh', 'option' ) ) ?><?php echo $symbol ?>"
											class="btn-base-yellow py-[12px] pl-4 pr-6 flex justify-center items-center gap-x-3 text-xs">
											<?php echo svg( 'arrow-btn', '16', '16' ) ?>
											<?php _e( 'Xem chi tiết', 'bsc' ) ?>
										</a>
									</div>
								<?php } ?>

							<?php } ?>
							<?php
						}
						?>
					</div>
					<?php
				}
			}
			?>
		</div>
		<?php
	} elseif ( $type_form == 'details_symbol_tab-3' ) {
		?>
		<div class="list__content">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-16 mb-10' : 'mt-[38px] mb-6' ?>">
				<ul class="flex items-center sm:gap-5 gap-2 customtab-nav">
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-3-Q"
							class="active sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg w-full' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-3-Y"
							class="sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg w-full' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-3-<?php echo $freq ?>">
						<?php
						$array_data_GetFinanceDetail = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
						);
						$response_GetFinanceDetail = get_data_with_cache( 'GetFinanceDetail', $array_data_GetFinanceDetail, $time_cache );
						if ( $response_GetFinanceDetail ) {
							$industryData = $response_GetFinanceDetail->d->Industry[0];
							$businessData = $response_GetFinanceDetail->d->Bussiness[0];
							$check_linh_vuc = $response_GetFinanceDetail->d->Rank[0][0]->INDUSTRY_NAME;
							?>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:space-y-[100px] space-y-14' : 'space-y-14' ?>">
								<article>
									<div
										class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6 mb-[30px]' : 'gap-[12px] mb-6' ?>">
										<h2 class="heading-title">
											<?php _e( 'LỢI NHUẬN', 'bsc' ) ?>
										</h2>
										<?php ?>
										<?php
										if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN ) {
											if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'A' ) {
												$class_rank = 'text-[#F90] bg-gradient-yellow-50';
												$medal_rank = 'gold';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'B' ) {
												$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
												$medal_rank = 'sliver';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'C' ) {
												$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
												$medal_rank = 'bronze';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'D' ) {
												$medal_rank = 'sliver-2';
												$class_rank = 'text-[#869299] bg-gradient-sliver-100';
											}
											?>
											<p
												class="inline-flex items-center px-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?> font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
												<?php echo svgClass( $medal_rank, '', '', 'sm:w-6 sm:h-6 w-5 h-5' ) ?>
												<?php _e( 'Hạng', 'bsc' ) ?>
												<?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN ?>
											</p>
										<?php } ?>
									</div>
									<div
										class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-8' ?>">
										<div class="overflow-x-auto whitespace-nowrap">
											<table
												class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300 text-center prose-th:border-l prose-th:border-[#C9CCD2] prose-td:border-l prose-td:border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
												<thead>
													<tr>
														<th
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<?php _e( 'Mã', 'bsc' ) ?>
														</th>
														<th><?php
														if ( $check_linh_vuc == 'Bank' ) {
															?>
																<div class="flex items-center justify-center">
																	<?php
																	_e( 'NIM (%)', 'bsc' );
																	?>
																	<button data-tooltip-target="tooltip-animations1-<?php echo $freq ?>"
																		data-tooltip-placement="top" class="ml-1" type="button">
																		<?php echo svg( 'tooltip', '20', '20' ) ?>
																	</button>
																	<div id="tooltip-animations1-<?php echo $freq ?>" role="tooltip"
																		data-popper-placement="top"
																		class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-base opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px] text-wrap">
																		<?php _e( 'Tỷ lệ NIM (biên lãi ròng) là chênh lệch phần trăm giữa thu nhập lãi và chi phí lãi phải trả, dùng để đo lường hiệu quả và khả năng sinh lời của ngân hàng', 'bsc' ) ?>
																		<div class="tooltip-arrow" data-popper-arrow></div>
																	</div>
																</div>
																<?php
														} else {
															_e( 'Biên lợi nhuận gộp (%)', 'bsc' );
														}
														?>
														</th>
														<th><?php _e( 'Biên lợi nhuận trước thuế  (%)', 'bsc' ) ?></th>
														<th><?php _e( 'Biên lợi nhuận sau thuế (%)', 'bsc' ) ?></th>
														<th><?php _e( 'ROE (%)', 'bsc' ) ?></th>
													</tr>
												</thead>
												<tbody>
													<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
														<td
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<a
																href="<?php echo slug_co_phieu( $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a>
														</td>
														<td><?php
														if ( $check_linh_vuc == 'Bank' ) {
															echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->NIM ) ) . '%';
														} else {
															echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_GOP ) ) . '%';
														}
														?>
														</td>
														<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_TRUOC_THUE ) ); ?>%
														</td>
														<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_SAU_THUE ) ); ?>%
														</td>
														<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->ROE ), false ); ?>%
														</td>
													</tr>
												</tbody>
											</table>

										</div>
									</div>
									<div
										class="grid font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:grid-cols-3 grid-cols-1 gap-5 lg:text-base text-xs' : 'gap-8' ?>">
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php
												if ( $check_linh_vuc == 'Bank' ) {
													_e( 'NIM', 'bsc' );
												} else {
													_e( 'BIÊN LỢI NHUẬN GỘP', 'bsc' );
												}
												?>
											</h4>
											<?php
											if ( $check_linh_vuc == 'Bank' ) {
												$business_data_BIEN_LOI_NHUAN_GOP = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->NIM,
													];
												}, $businessData );
											} else {
												$business_data_BIEN_LOI_NHUAN_GOP = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->BIEN_LOI_NHUAN_GOP,
													];
												}, $businessData );
											}
											$industry_data_BIEN_LOI_NHUAN_GOP = array_map( function ($item) {
												if ( $item->QUARTER ) {
													$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
													$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
												} else {
													$date = sprintf( '%d', trim( $item->YEAR ) );
												}
												return [ 
													'date' => $date,
													'value' => $item->BIEN_LOI_NHUAN_GOP,
												];
											}, $industryData );
											?>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%" <?php if ( $check_linh_vuc == 'Bank' ) { ?> data-title-1="<?php echo $symbol ?>"
													data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>" <?php } else { ?>
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
												<?php } ?>
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_BIEN_LOI_NHUAN_GOP ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_BIEN_LOI_NHUAN_GOP ) ) ?>"
												data-color-1="#235BA8" data-color-2="#FFB81C">
											</div>
										</div>
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php _e( 'BIÊN LỢI NHUẬN SAU THUẾ', 'bsc' ) ?>
											</h4>
											<?php
											$business_data_BIEN_LOI_NHUAN_SAU_THUE = array_map( function ($item) {
												return [ 
													'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
													'value' => $item->BIEN_LOI_NHUAN_SAU_THUE,
												];
											}, $businessData );

											$industry_data_BIEN_LOI_NHUAN_SAU_THUE = array_map( function ($item) {
												if ( $item->QUARTER ) {
													$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
													$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
												} else {
													$date = sprintf( '%d', trim( $item->YEAR ) );
												}
												return [ 
													'date' => $date,
													'value' => $item->BIEN_LOI_NHUAN_SAU_THUE,
												];
											}, $industryData );
											?>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%"
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_BIEN_LOI_NHUAN_SAU_THUE ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_BIEN_LOI_NHUAN_SAU_THUE ) ) ?>"
												data-title-1="<?php echo $symbol ?>" data-color-1="#235BA8"
												data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>" data-color-2="#FFB81C">
											</div>
										</div>
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php _e( 'ROE', 'bsc' ) ?>
											</h4>
											<?php
											$business_data_ROE = array_map( function ($item) {
												return [ 
													'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
													'value' => $item->ROE,
												];
											}, $businessData );

											$industry_data_ROE = array_map( function ($item) {
												if ( $item->QUARTER ) {
													$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
													$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
												} else {
													$date = sprintf( '%d', trim( $item->YEAR ) );
												}
												return [ 
													'date' => $date,
													'value' => $item->ROE,
												];
											}, $industryData );
											?>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%"
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_ROE ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_ROE ) ) ?>"
												data-title-1="<?php echo $symbol ?>" data-color-1="#009e87"
												data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>" data-color-2="#FFB81C">
											</div>
										</div>
									</div>
								</article>
								<article>
									<div
										class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6 mb-[30px]' : 'gap-[12px] mb-6' ?>">
										<h2 class="heading-title">
											<?php _e( 'SỨC KHỎE', 'bsc' ) ?>
										</h2>
										<?php
										if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE ) {
											if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'A' ) {
												$class_rank = 'text-[#F90] bg-gradient-yellow-50';
												$medal_rank = 'gold';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'B' ) {
												$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
												$medal_rank = 'sliver';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'C' ) {
												$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
												$medal_rank = 'bronze';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'D' ) {
												$medal_rank = 'sliver-2';
												$class_rank = 'text-[#869299] bg-gradient-sliver-100';
											}
											?>
											<p
												class="inline-flex items-center px-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?> font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
												<?php echo svgClass( $medal_rank, '', '', 'sm:w-6 sm:h-6 w-5 h-5' ) ?>
												<?php _e( 'Hạng', 'bsc' ) ?>
												<?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE ?>
											</p>
										<?php } ?>
									</div>
									<div
										class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-8' ?>">
										<div class="overflow-x-auto whitespace-nowrap">
											<table
												class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300 text-center prose-th:border-l prose-th:border-[#C9CCD2] prose-td:border-l prose-td:border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
												<thead>
													<tr>
														<th
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<?php _e( 'Mã', 'bsc' ) ?>
														</th>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<th><?php _e( 'Tỷ lệ đòn bẩy (lần)', 'bsc' ) ?></th>
															<th><?php _e( 'Tỷ lệ nợ xấu (%)', 'bsc' ) ?></th>
															<th><?php _e( 'Tỷ lệ dự phòng nợ xấu (%)', 'bsc' ) ?></th>
														<?php } else {
															?>
															<th><?php _e( 'Chỉ số thanh toán hiện tại', 'bsc' ) ?></th>
															<th><?php _e( 'Chỉ số thanh toán nhanh', 'bsc' ) ?></th>
															<?php if ( $check_linh_vuc == 'Insurance' ) { ?>
																<th><?php _e( 'Biên lợi nhuận gộp bảo hiểm', 'bsc' ) ?></th>
															<?php } else { ?>
																<th><?php _e( 'Chỉ số thanh toán lãi vay', 'bsc' ) ?></th>
															<?php } ?>
															<?php if ( $check_linh_vuc == 'Company' ) { ?>
																<th><?php _e( 'Nợ vay/Tổng tài sản', 'bsc' ) ?></th>
															<?php } else { ?>
																<th><?php _e( 'Tỷ lệ đòn bẩy', 'bsc' ) ?></th>
															<?php } ?>
															<?php
														} ?>
													</tr>
												</thead>
												<tbody>
													<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
														<td
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<a
																href="<?php echo slug_co_phieu( $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a>
														</td>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DON_BAY ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_NO_XAU ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DU_PHONG_NO_XAU ) ); ?>
															</td>
														<?php } else {
															?>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_HIEN_THOI ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_NHANH ) ); ?>
															</td>
															<?php if ( $check_linh_vuc == 'Insurance' ) { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_GOP_BAO_HIEM ) ); ?>
																<?php } else { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_THANH_TOAN_LAI_VAY ) ); ?>
																<?php } ?>
															</td>
															<?php if ( $check_linh_vuc == 'Company' ) { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->NO_VAY_TONG_TAI_SAN ) ); ?>
																</td>
															<?php } else { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DON_BAY ) ); ?>
																</td>
															<?php } ?>
														<?php } ?>
													</tr>

												</tbody>
											</table>

										</div>
									</div>
									<div
										class="grid font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:grid-cols-3 grid-cols-1 gap-5' : 'gap-8' ?>">
										<?php if ( $check_linh_vuc == 'Bank' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ NỢ XẤU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_NO_XAU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_NO_XAU,
													];
												}, $businessData );
												$industry_data_TY_LE_NO_XAU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_NO_XAU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_NO_XAU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_NO_XAU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#235BA8" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ ĐÒN BẨY', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DON_BAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_DON_BAY,
													];
												}, $businessData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-type="bar" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DON_BAY ) ) ?>"
													data-title-1="<?php _e( 'TN từ Lãi vay', 'bsc' ) ?>" data-color-1="#009E87">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ DỰ PHÒNG NỢ XẤU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DU_PHONG_NO_XAU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_DU_PHONG_NO_XAU,
													];
												}, $businessData );
												$industry_data_TY_LE_DU_PHONG_NO_XAU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_DU_PHONG_NO_XAU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DU_PHONG_NO_XAU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_DU_PHONG_NO_XAU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#235BA8" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } elseif ( $check_linh_vuc == 'Securities' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'CHỈ SỐ THANH TOÁN HIỆN THỜI', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_CHI_SO_THANH_TOAN_NHANH = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $businessData );
												$industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_CHI_SO_THANH_TOAN_NHANH ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-2="#FFB81C" data-color-1="#235BA8">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ ĐÒN BẨY', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DON_BAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_DON_BAY,
													];
												}, $businessData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-type="bar" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DON_BAY ) ) ?>"
													data-title-1="<?php _e( 'TN từ Lãi vay', 'bsc' ) ?>" data-color-1="#009E87">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ THANH TOÁN LÃI VAY' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_THANH_TOAN_LAI_VAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
													];
												}, $businessData );
												$industry_data_TY_LE_THANH_TOAN_LAI_VAY = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_THANH_TOAN_LAI_VAY ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_THANH_TOAN_LAI_VAY ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#235BA8" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } elseif ( $check_linh_vuc == 'Insurance' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'CHỈ SỐ THANH TOÁN HIỆN THỜI', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_CHI_SO_THANH_TOAN_NHANH = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $businessData );
												$industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_CHI_SO_THANH_TOAN_NHANH ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-2="#FFB81C" data-color-1="#235BA8">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ ĐÒN BẨY', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DON_BAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_DON_BAY,
													];
												}, $businessData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-type="bar" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DON_BAY ) ) ?>"
													data-title-1="<?php _e( 'Tỷ lệ đòn bẩy', 'bsc' ) ?>" data-color-1="#009E87">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'BIÊN LỢI NHUẬN GỘP BẢO HIỂM' ) ?>
												</h4>
												<?php
												$business_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->BIEN_LOI_NHUAN_GOP_BAO_HIEM,
													];
												}, $businessData );
												$industry_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->BIEN_LOI_NHUAN_GOP_BAO_HIEM,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#235BA8" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } else {
											?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'CHỈ SỐ THANH TOÁN HIỆN THỜI', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_CHI_SO_THANH_TOAN_NHANH = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $businessData );
												$industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_CHI_SO_THANH_TOAN_NHANH ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-2="#FFB81C" data-color-1="#235BA8">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'NỢ VAY/Tổng tài sản', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_NO_VAY_TONG_TAI_SAN = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->NO_VAY_TONG_TAI_SAN,
													];
												}, $businessData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-type="bar"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_NO_VAY_TONG_TAI_SAN ) ) ?>"
													data-title-1="<?php _e( 'Nợ vay/Tổng  tài sản', 'bsc' ) ?>" data-color-1="#009E87">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ THANH TOÁN LÃI VAY' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_THANH_TOAN_LAI_VAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
													];
												}, $businessData );
												$industry_data_TY_LE_THANH_TOAN_LAI_VAY = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_THANH_TOAN_LAI_VAY ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_THANH_TOAN_LAI_VAY ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#235BA8" data-color-2="#FFB81C">
												</div>
											</div>
											<?php
										} ?>
									</div>
								</article>
								<article>
									<div
										class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6 mb-[30px]' : 'gap-[12px] mb-6' ?>">
										<h2 class="heading-title">
											<?php _e( 'TĂNG TRƯỞNG', 'bsc' ) ?>
										</h2>
										<?php
										if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG ) {
											if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'A' ) {
												$class_rank = 'text-[#F90] bg-gradient-yellow-50';
												$medal_rank = 'gold';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'B' ) {
												$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
												$medal_rank = 'sliver';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'C' ) {
												$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
												$medal_rank = 'bronze';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'D' ) {
												$medal_rank = 'sliver-2';
												$class_rank = 'text-[#869299] bg-gradient-sliver-100';
											}
											?>
											<p
												class="inline-flex items-center px-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?> font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
												<?php echo svg( $medal_rank, '24', '24' ) ?>
												<?php _e( 'Hạng', 'bsc' ) ?>
												<?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG ?>
											</p>
										<?php } ?>
									</div>
									<div
										class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-8' ?>">
										<div class="overflow-x-auto whitespace-nowrap">
											<table
												class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300 text-center prose-th:border-l prose-th:border-[#C9CCD2] prose-td:border-l prose-td:border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
												<thead>
													<tr>
														<th
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<?php _e( 'Mã', 'bsc' ) ?>
														</th>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<th><?php _e( 'Tăng trưởng cho vay (%)', 'bsc' ) ?></th>
															<th><?php _e( 'Tăng trưởng tiền gửi (%)', 'bsc' ) ?></th>
														<?php } else { ?>
															<th><?php _e( 'Tăng trưởng doanh thu (%)', 'bsc' ) ?></th>
															<th><?php _e( 'Tăng trưởng thu nhập hoạt động (%)', 'bsc' ) ?></th>
														<?php } ?>
														<th><?php _e( 'Tăng trưởng lợi nhuận sau thuế (%)', 'bsc' ) ?></th>
														<th><?php _e( 'Tăng trưởng EPS (%)', 'bsc' ) ?></th>
													</tr>
												</thead>
												<tbody>
													<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
														<td
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<a
																href="<?php echo slug_co_phieu( $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a>
														</td>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_CHO_VAY ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_TIEN_GUI ) ); ?>
															</td>
														<?php } else {
															?>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_DOANH_THU ) ); ?>
															</td>
															<td><?php
															echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TT_TNHD ) ); ?>
															</td>
															<?php
														} ?>
														<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_LOI_NHUAN ) ); ?>
														</td>
														<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_EPS ) ); ?>
														</td>
													</tr>
												</tbody>
											</table>

										</div>
									</div>
									<div class="grid xl:grid-cols-3 grid-cols-1 gap-5 font-Helvetica">
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php if ( $check_linh_vuc == 'Bank' ) {
													$business_data_TANG_TRUONG_CHO_VAY = array_map( function ($item) {
														return [ 
															'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
															'value' => $item->TANG_TRUONG_CHO_VAY,
														];
													}, $businessData );
													$industry_data_TANG_TRUONG_CHO_VAY = array_map( function ($item) {
														if ( $item->QUARTER ) {
															$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
															$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
														} else {
															$date = sprintf( '%d', trim( $item->YEAR ) );
														}
														return [ 
															'date' => $date,
															'value' => $item->TANG_TRUONG_CHO_VAY,
														];
													}, $industryData );
													?>
													<?php _e( 'TĂNG TRƯỞNG CHO VAY', 'bsc' ) ?>

												<?php } else {
													$business_data_TANG_TRUONG_CHO_VAY = array_map( function ($item) {
														return [ 
															'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
															'value' => $item->TANG_TRUONG_DOANH_THU,
														];
													}, $businessData );
													$industry_data_TANG_TRUONG_CHO_VAY = array_map( function ($item) {
														if ( $item->QUARTER ) {
															$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
															$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
														} else {
															$date = sprintf( '%d', trim( $item->YEAR ) );
														}
														return [ 
															'date' => $date,
															'value' => $item->TANG_TRUONG_DOANH_THU,
														];
													}, $industryData );
													?>
													<?php _e( 'TĂNG TRƯỞNG DOANH THU', 'bsc' ) ?>
												<?php } ?>
											</h4>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%"
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_TANG_TRUONG_CHO_VAY ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TANG_TRUONG_CHO_VAY ) ) ?>"
												data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
												data-color-1="#009e87" data-color-2="#FFB81C">
											</div>
										</div>
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php _e( 'TĂNG TRƯỞNG EPS', 'bsc' ) ?>
											</h4>
											<?php
											$business_data_TANG_TRUONG_EPS = array_map( function ($item) {
												return [ 
													'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
													'value' => $item->TANG_TRUONG_EPS,
												];
											}, $businessData );
											$industry_data_TANG_TRUONG_EPS = array_map( function ($item) {
												if ( $item->QUARTER ) {
													$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
													$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
												} else {
													$date = sprintf( '%d', trim( $item->YEAR ) );
												}
												return [ 
													'date' => $date,
													'value' => $item->TANG_TRUONG_EPS,
												];
											}, $industryData );
											?>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%"
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_TANG_TRUONG_EPS ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TANG_TRUONG_EPS ) ) ?>"
												data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
												data-color-1="#009e87" data-color-2="#FFB81C">
											</div>
										</div>
										<div class="flex flex-col">
											<h4
												class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
												<?php _e( 'TĂNG TRƯỞNG LỢI NHUẬN SAU THUẾ', 'bsc' ) ?>
											</h4>
											<?php
											$business_data_TANG_TRUONG_LOI_NHUAN = array_map( function ($item) {
												return [ 
													'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
													'value' => $item->TANG_TRUONG_LOI_NHUAN,
												];
											}, $businessData );
											$industry_data_TANG_TRUONG_LOI_NHUAN = array_map( function ($item) {
												if ( $item->QUARTER ) {
													$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
													$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
												} else {
													$date = sprintf( '%d', trim( $item->YEAR ) );
												}
												return [ 
													'date' => $date,
													'value' => $item->TANG_TRUONG_LOI_NHUAN,
												];
											}, $industryData );
											?>
											<div class="legend-gap bsc_chart-display mt-auto" data-load="false" data-end="%"
												data-1="<?php echo htmlspecialchars( json_encode( $business_data_TANG_TRUONG_LOI_NHUAN ) ) ?>"
												data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TANG_TRUONG_LOI_NHUAN ) ) ?>"
												data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
												data-color-1="#009e87" data-color-2="#FFB81C">
											</div>
										</div>
									</div>
								</article>
								<article>
									<div
										class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6 mb-[30px]' : 'gap-[12px] mb-6' ?>">
										<h2 class="heading-title">
											<?php _e( 'HIỆU QUẢ HOẠT ĐỘNG', 'bsc' ) ?>
										</h2>
										<?php
										if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG ) {
											if ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'A' ) {
												$class_rank = 'text-[#F90] bg-gradient-yellow-50';
												$medal_rank = 'gold';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'B' ) {
												$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
												$medal_rank = 'sliver';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'C' ) {
												$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
												$medal_rank = 'bronze';
											} elseif ( $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'D' ) {
												$medal_rank = 'sliver-2';
												$class_rank = 'text-[#869299] bg-gradient-sliver-100';
											}
											?>
											<p
												class="inline-flex items-center px-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?> font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
												<?php echo svg( $medal_rank, '24', '24' ) ?>
												<?php _e( 'Hạng', 'bsc' ) ?>
												<?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG ?>
											</p>
										<?php } ?>
									</div>
									<div
										class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-8' ?>">
										<div class="overflow-x-auto whitespace-nowrap">
											<table
												class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300 text-center prose-th:border-l prose-th:border-[#C9CCD2] prose-td:border-l prose-td:border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
												<thead>
													<tr>
														<th
															class="text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<?php _e( 'Mã', 'bsc' ) ?>
														</th>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<th>
																<div class="flex items-center justify-center">
																	<?php _e( 'Tỷ lệ chi phí trên doanh thu (CIR)', 'bsc' ) ?>
																	<button data-tooltip-target="tooltip-animations2-<?php echo $freq ?>"
																		data-tooltip-placement="top" class="ml-1" type="button">
																		<?php echo svg( 'tooltip', '20', '20' ) ?>
																	</button>
																	<div id="tooltip-animations2-<?php echo $freq ?>" role="tooltip"
																		data-popper-placement="top"
																		class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-base opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px] text-wrap">
																		<?php _e( 'Chỉ số CIR phản ánh tỷ lệ phần trăm chi phí hoạt động so với tổng doanh thu của ngân hàng, từ đó có thể đánh giá hiệu quả hoạt động của ngân hàng', 'bsc' ) ?>
																		<div class="tooltip-arrow" data-popper-arrow></div>
																	</div>
																</div>
															</th>
															<th>
																<div class="flex items-center justify-center">
																	<?php _e( 'Tỷ lệ Thu nhập từ lãi vay trên Tổng thu nhập hoạt động (NII/TOI)', 'bsc' ) ?>
																	<button data-tooltip-target="tooltip-animations3-<?php echo $freq ?>"
																		data-tooltip-placement="top" class="ml-1" type="button">
																		<?php echo svg( 'tooltip', '20', '20' ) ?>
																	</button>
																	<div id="tooltip-animations3-<?php echo $freq ?>" role="tooltip"
																		data-popper-placement="top"
																		class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-base opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px] text-wrap">
																		<?php _e( 'Tỷ lệ NII/TOI cho thấy tỷ trọng thu nhập từ lãi vay trên tổng thu nhập hoạt động của ngân hàng, từ đó cho thấy mức độ đa dạng thu nhập của ngân hàng đối với các nguồn thu nhập khác ngoài lãi vay', 'bsc' ) ?>
																		<div class="tooltip-arrow" data-popper-arrow></div>
																	</div>
																</div>
															</th>
															<th>
																<div class="flex items-center justify-center">
																	<?php _e( 'Tỷ lệ CASA (%)', 'bsc' ) ?>
																	<button data-tooltip-target="tooltip-animations4-<?php echo $freq ?>"
																		data-tooltip-placement="top" class="ml-1" type="button">
																		<?php echo svg( 'tooltip', '20', '20' ) ?>
																	</button>
																	<div id="tooltip-animations4-<?php echo $freq ?>" role="tooltip"
																		data-popper-placement="top"
																		class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-base opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px] text-wrap">
																		<?php _e( 'Tỷ lệ CASA là tỷ lệ giữa tiền gửi thanh toán và tiết kiệm trên tổng tiền gửi, phản ánh khả năng huy động vốn chi phí thấp của ngân hàng.', 'bsc' ) ?>
																		<div class="tooltip-arrow" data-popper-arrow></div>
																	</div>
																</div>
															</th>
														<?php } else { ?>
															<?php if ( $check_linh_vuc == 'Securities' ) { ?>
																<th><?php _e( 'Tỷ lệ doanh thu môi giới trên Doanh thu thuần (%)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay khoản phải thu (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay khoản phải trả (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay tổng tài sản (lần)', 'bsc' ) ?></th>
															<?php } elseif ( $check_linh_vuc == 'Insurance' ) { ?>
																<th><?php _e( 'Tỷ lệ chi phí bảo hiểm trên Doanh thu (%)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay khoản phải thu (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay khoản phải trả (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay tổng tài sản (lần)', 'bsc' ) ?></th>
															<?php } else {
																?>
																<th><?php _e( 'Vòng quay khoản phải thu (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay khoản phải trả (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay hàng tồn kho (lần)', 'bsc' ) ?></th>
																<th><?php _e( 'Vòng quay tổng tài sản (lần)', 'bsc' ) ?></th>
																<?php
															} ?>
														<?php } ?>
													</tr>
												</thead>
												<tbody>
													<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
														<td
															class="!text-left !border-l-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
															<a
																href="<?php echo slug_co_phieu( $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a>
														</td>
														<?php if ( $check_linh_vuc == 'Bank' ) { ?>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_CHI_PHI_TREN_DOANH_THU ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->THU_NHAP_TU_LAI_VAY ) ); ?>
															</td>
															<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->CASA ) ); ?>
															</td>
														<?php } else { ?>
															<?php if ( $check_linh_vuc == 'Securities' ) { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TONG_TAI_SAN ) ); ?>
																</td>
															<?php } elseif ( $check_linh_vuc == 'Insurance' ) { ?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_CHI_PHI_BAO_HIEM_TREN_DOANH_THU ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TONG_TAI_SAN ) ); ?>
																</td>
															<?php } else {
																?>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_HANG_TON_KHO ) ); ?>
																</td>
																<td><?php echo bsc_number_format( ( $response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TTS ) ); ?>
																</td>
																<?php
															} ?>
														<?php } ?>
													</tr>
												</tbody>
											</table>

										</div>
									</div>
									<div class="grid xl:grid-cols-3 grid-cols-1 gap-5 font-Helvetica">
										<?php if ( $check_linh_vuc == 'Bank' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ CHI PHÍ TRÊN DOANH THU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_CHI_PHI_TREN_DOANH_THU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_CHI_PHI_TREN_DOANH_THU,
													];
												}, $businessData );
												$industry_data_TY_LE_CHI_PHI_TREN_DOANH_THU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_CHI_PHI_TREN_DOANH_THU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_CHI_PHI_TREN_DOANH_THU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_CHI_PHI_TREN_DOANH_THU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ THU NHẬP TỪ LÃI VAY/TỔNG THU NHẬP HOẠT ĐỘNG', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_THU_NHAP_TU_LAI_VAY = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->THU_NHAP_TU_LAI_VAY,
													];
												}, $businessData );
												$industry_data_THU_NHAP_TU_LAI_VAY = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->THU_NHAP_TU_LAI_VAY,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_THU_NHAP_TU_LAI_VAY ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_THU_NHAP_TU_LAI_VAY ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ CASA', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_CASA = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->CASA,
													];
												}, $businessData );
												$industry_data_CASA = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->CASA,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_CASA ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_CASA ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } elseif ( $check_linh_vuc == 'Securities' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ DOANH THU MÔI GIỚI TRÊN DOANH THU THUẦN', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
													];
												}, $businessData );
												$industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY KHOẢN PHẢI THU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY TỔNG TÀI SẢN' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_TONG_TAI_SAN = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_TONG_TAI_SAN,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_TONG_TAI_SAN = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_TONG_TAI_SAN,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_TONG_TAI_SAN ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_TONG_TAI_SAN ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } elseif ( $check_linh_vuc == 'Insurance' ) { ?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'TỶ LỆ CHI PHÍ BẢO HIỂM TRÊN DOANH THU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->TY_LE_CHI_PHI_BAO_HIEM_TREN_DOANH_THU,
													];
												}, $businessData );
												$industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->TY_LE_CHI_PHI_BAO_HIEM_TREN_DOANH_THU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY KHOẢN PHẢI THU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY TỔNG TÀI SẢN' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_TONG_TAI_SAN = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_TONG_TAI_SAN,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_TONG_TAI_SAN = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_TONG_TAI_SAN,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_TONG_TAI_SAN ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_TONG_TAI_SAN ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
										<?php } else {
											?>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY KHOẢN PHẢI THU', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_KHOAN_PHAI_THU ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY KHOẢN PHẢI TRẢ', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_KHOAN_PHAI_TRA = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_KHOAN_PHAI_TRA,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_KHOAN_PHAI_TRA = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_KHOAN_PHAI_TRA,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_KHOAN_PHAI_TRA ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_KHOAN_PHAI_TRA ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<div class="flex flex-col">
												<h4
													class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold lg:text-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
													<?php _e( 'VÒNG QUAY HÀNG TỒN KHO', 'bsc' ) ?>
												</h4>
												<?php
												$business_data_VONG_QUAY_HANG_TON_KHO = array_map( function ($item) {
													return [ 
														'date' => date( 'Y-m-d', strtotime( trim( $item->REPORT_DATE ) ) ),
														'value' => $item->VONG_QUAY_HANG_TON_KHO,
													];
												}, $businessData );
												$industry_data_VONG_QUAY_HANG_TON_KHO = array_map( function ($item) {
													if ( $item->QUARTER ) {
														$month = ( trim( $item->QUARTER ) - 1 ) * 3 + 1;
														$date = sprintf( '%d-%02d-01', trim( $item->YEAR ), $month );
													} else {
														$date = sprintf( '%d', trim( $item->YEAR ) );
													}
													return [ 
														'date' => $date,
														'value' => $item->VONG_QUAY_HANG_TON_KHO,
													];
												}, $industryData );
												?>
												<div class="legend-gap bsc_chart-display mt-auto" data-load="false"
													data-1="<?php echo htmlspecialchars( json_encode( $business_data_VONG_QUAY_HANG_TON_KHO ) ) ?>"
													data-2="<?php echo htmlspecialchars( json_encode( $industry_data_VONG_QUAY_HANG_TON_KHO ) ) ?>"
													data-title-1="<?php echo $symbol ?>" data-title-2="<?php _e( 'Trung bình ngành', 'bsc' ) ?>"
													data-color-1="#009e87" data-color-2="#FFB81C">
												</div>
											</div>
											<?php
										} ?>
									</div>
								</article>
							</div>
						<?php } ?>
					</div>
				<?php }
			} ?>
		</div>
		<?php
	} elseif ( $type_form == 'details_symbol_tab-4' ) {
		?>
		<?php
		if ( ! $check_logout ) {
			$array_data_GetForecastBussiness = array(
				'lang' => pll_current_language(),
				'symbol' => $symbol,
			);
			$response_GetForecastBussiness = get_data_with_cache( 'GetForecastBussiness', $array_data_GetForecastBussiness, $time_cache );
			if ( $response_GetForecastBussiness ) {
				$response_GetForecastBussiness_d2 = array_reverse( $response_GetForecastBussiness->d2, true );
				?>
				<div class="relative">
					<div>
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-16 flex items-end justify-between' : 'mt-[50px] space-y-4' ?>">
							<div
								class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-10' : 'gap-6' ?> relative pl-6 after:absolute after:w-1 after:h-full after:bg-primary-300 after:top-0 after:left-0">
								<?php if ( $response_GetForecastBussiness->d1[0]->PRICE ) { ?>
									<div class="flex flex-col gap-1">
										<p class="font-Helvetica text-xs"><?php _e( 'Giá mục tiêu', 'bsc' ) ?></p>
										<strong
											class="lg:text-[32px] text-2xl text-primary-300"><?php echo bsc_number_format( $response_GetForecastBussiness->d1[0]->PRICE ) ?></strong>
									</div>
								<?php } ?>
								<?php
								if ( $response_GetForecastBussiness->d1[0]->RECOMMENDATION ) {
									$status = $response_GetForecastBussiness->d1[0]->RECOMMENDATION;
									$check_status = get_color_by_number_bsc( $status );
									$title_status = $check_status['title_status'];
									$text_status = $check_status['text_status'];
									$background_status = $check_status['background_status'];
									?>
									<span
										class="inline-block text-center px-6  font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl rounded-lg min-w-[140px] py-2' : 'text-lg rounded-[35px] min-w-[100px] py-1.5' ?>"
										style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
										<?php echo $title_status; ?>
									</span>
								<?php } ?>
							</div>
							<?php
							if ( get_field( 'cdttcp1_slug_mck', 'option' ) ) {
								$sub_url_bcpt = get_field( 'cdttcp1_slug_mck', 'option' );
							} else {
								$sub_url_bcpt = __( 'bao-cao-ma-co-phieu', 'bsc' );
							}
							?>
							<a href="<?php echo get_home_url() ?>/<?php echo $sub_url_bcpt ?>/<?php echo $symbol ?>"
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 lg:text-lg text-xs font-Helvetica">
								<?php _e( 'Xem chi tiết', 'bsc' ) ?>
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
						</div>
						<div
							class="rounded-lg overflow-hidden relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-10' : 'mt-6' ?>">
							<div class="overflow-x-auto whitespace-nowrap">
								<table
									class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold  prose-th:text-left  font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-th:p-4 prose-td:p-4' : 'prose-td:p-[12px] prose-th:p-[12px] text-xs' ?>">
									<thead>
										<tr>
											<th class="lg:w-1/3"></th>
											<?php
											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {
												?>
												<th
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php echo $GetForecastBussiness->FORECAST_PERIOD ?>
												</th>
												<?php
											}
											?>
										</tr>
									</thead>
									<tbody>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Doanh thu (tỷ đồng)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->NET_REV ) && $GetForecastBussiness->NET_REV !== null ) {
														echo bsc_number_format( $GetForecastBussiness->NET_REV );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Tăng trưởng doanh thu (%YoY)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {
												?>
												<td
													class="italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->TANG_TRUONG_DT ) && $GetForecastBussiness->TANG_TRUONG_DT !== null ) {
														echo bsc_number_format( $GetForecastBussiness->TANG_TRUONG_DT ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Lợi nhuận sau thuế công ty mẹ (tỷ đồng)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?>  !text-right">
													<?php
													if ( isset( $GetForecastBussiness->LNST_CONG_TY_ME ) && $GetForecastBussiness->LNST_CONG_TY_ME !== null ) {
														echo bsc_number_format( $GetForecastBussiness->LNST_CONG_TY_ME );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Tăng trưởng lợi nhuận sau thuế công ty mẹ (%YoY)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?>  !text-right">
													<?php
													if ( isset( $GetForecastBussiness->TANG_TRUONG_LS ) && $GetForecastBussiness->TANG_TRUONG_LS !== null ) {
														echo bsc_number_format( $GetForecastBussiness->TANG_TRUONG_LS ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'EPS (VND)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] ' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->EPS ) && $GetForecastBussiness->EPS !== null ) {
														echo bsc_number_format( $GetForecastBussiness->EPS );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Tăng trưởng EPS (%YoY)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="italic <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->TANG_TRUONG_EPS ) && $GetForecastBussiness->TANG_TRUONG_EPS !== null ) {
														echo bsc_number_format( $GetForecastBussiness->TANG_TRUONG_EPS ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Giá trị sổ sách (VND)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->BVPS ) && $GetForecastBussiness->BVPS !== null ) {
														echo bsc_number_format( $GetForecastBussiness->BVPS );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'ROE (%)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->ROE ) && $GetForecastBussiness->ROE !== null ) {
														echo bsc_number_format( $GetForecastBussiness->ROE, false ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'ROA (%)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->ROA ) && $GetForecastBussiness->ROA !== null ) {
														echo bsc_number_format( $GetForecastBussiness->ROA, false ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'P/E (x)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {

												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->PE ) && $GetForecastBussiness->PE !== null ) {
														echo bsc_number_format( $GetForecastBussiness->PE );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'P/B (x)', 'bsc' ) ?>
											</td>
											<?php
											$total_items = count( $response_GetForecastBussiness_d2 );
											$current_index = 0;
											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {
												$current_index++;
												$is_last = ( $current_index === $total_items );
												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->PB ) && $GetForecastBussiness->PB !== null ) {
														echo bsc_number_format( $GetForecastBussiness->PB );
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>
										<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
											<td
												class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
												<?php _e( 'Hiệu suất cổ phiếu (%)', 'bsc' ) ?>
											</td>
											<?php

											foreach ( $response_GetForecastBussiness_d2 as $GetForecastBussiness ) {
												$current_index++;
												$is_last = ( $current_index === $total_items );
												?>
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px]' ?> !text-right ">
													<?php
													if ( isset( $GetForecastBussiness->HS_CO_PHIEU ) && $GetForecastBussiness->HS_CO_PHIEU !== null ) {
														echo bsc_number_format( $GetForecastBussiness->HS_CO_PHIEU ) . '%';
													}
													?>
												</td>
												<?php
											}
											?>
										</tr>

									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php
		}
	?>
	<?php
	} elseif ( $type_form == 'securityBasicInfo-symbol' ) {
		?>
		<?php
		$array_data_securityBasicInfo = json_encode( [ 
			'lang' => pll_current_language(),
			'secList' => $symbol,
			"Exchange" => ""
		] );
		$response_securityBasicInfo = get_data_with_cache( 'securityBasicInfo', $array_data_securityBasicInfo, $time_cache, get_field( 'cdapi_ip_address_url_api_algo', 'option' ) . 'pbapi/api/', 'POST' );
		if ( $response_securityBasicInfo ) {
			?>
			<div
				class="bg-[#E8F5FF] rounded-xl  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:px-8 px-6 lg:py-6 py-5' : 'p-4' ?> h-full font-Helvetica">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex items-baseline justify-between gap-4 mb-6 pb-6' : 'mb-3 pb-3' ?> border-b border-[#C9CCD2]">
					<p class="text-paragraph text-opacity-70 text-xs">
						<?php _e( 'Ngành', 'bsc' ) ?>
					</p>
					<p class="font-bold 2xl:text-lg uppercase">
						<?php echo $response_securityBasicInfo->data[0]->Industry ?>
					</p>
				</div>
				<div class="flex gap-[12px] items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'mb-3' ?>">
					<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
						<?php _e( 'KLGD trung bình 10 ngày', 'bsc' ) ?>
					</p>
					<p class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-lg' : '' ?>">
						<?php
						echo bsc_number_format( $response_securityBasicInfo->data[0]->SumVol10d / 10, false, true ) ?>
					</p>
				</div>
				<div class="grid grid-cols-3 gap-3">

					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'P/E', 'bsc' ) ?>
						</p>
						<p class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-lg' : '' ?>">
							<?php echo bsc_number_format( $response_securityBasicInfo->data[0]->PE, false, false, 1 ) ?>
						</p>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'ROA (%)', 'bsc' ) ?>
						</p>
						<p class="font-medium 2xl:text-lg">
							<?php echo bsc_number_format( $response_securityBasicInfo->data[0]->ROA, false, false, 1 ) ?>
						</p>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'Vốn hóa (tỷ đồng)', 'bsc' ) ?>
						</p>
						<p class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-lg' : '' ?>">
							<?php
							if ( $response_securityBasicInfo->data[0]->MarketCapital ) {
								echo bsc_number_format( $response_securityBasicInfo->data[0]->MarketCapital, false, false, 1 );
							}
							?>
						</p>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'P/B', 'bsc' ) ?>
						</p>
						<p class="font-medium 2xl:text-lg">
							<?php echo bsc_number_format( $response_securityBasicInfo->data[0]->PB, false, false, 1 ) ?>
						</p>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'ROE (%)', 'bsc' ) ?>
						</p>
						<p class="font-medium 2xl:text-lg">
							<?php echo bsc_number_format( $response_securityBasicInfo->data[0]->ROE, false, false, 1 ) ?>
						</p>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
						<p class="text-paragraph text-opacity-70 2xl:text-xs text-xxs">
							<?php _e( 'EPS (đồng)', 'bsc' ) ?>
						</p>
						<p class="font-medium 2xl:text-lg">
							<?php echo bsc_number_format( $response_securityBasicInfo->data[0]->EPS, false, false, 1 ) ?>
						</p>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php
	} elseif ( $type_form == 'GetRecommendedInstrument-symbol' ) {
		$array_data_GetRecommendedInstrument = array(
			'symbol' => $symbol
		);
		$response_GetRecommendedInstrument = get_data_with_cache( 'GetRecommendedInstrument', $array_data_GetRecommendedInstrument, $time_cache );
		if ( $response_GetRecommendedInstrument ) {
			?>
			<div class="bg-[#E8F5FF] rounded-xl 2xl:px-6 px-5 lg:py-6 py-5 h-full font-Helvetica flex flex-col">
				<div class="flex items-center justify-between mb-6 -mt-1">
					<h3 class="font-bold <?php echo ( get_locale() == 'en_GB' ) ? '' : '2xl:text-lg'; ?>">
						<?php _e( 'KHUYẾN NGHỊ', 'bsc' ) ?>
					</h3>
					<?php
					if ( $response_GetRecommendedInstrument->rank ) {
						if ( $response_GetRecommendedInstrument->rank == 'A' ) {
							$class_rank = 'text-[#F90] bg-gradient-yellow-50';
							$medal_rank = 'gold';
						} elseif ( $response_GetRecommendedInstrument->rank == 'B' ) {
							$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
							$medal_rank = 'sliver';
						} elseif ( $response_GetRecommendedInstrument->rank == 'C' ) {
							$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
							$medal_rank = 'bronze';
						} elseif ( $response_GetRecommendedInstrument->rank == 'D' ) {
							$medal_rank = 'sliver-2';
							$class_rank = 'text-[#869299] bg-gradient-sliver-100';
						}
						?>
						<p
							class="inline-flex items-center  <?php echo get_locale() == 'en_GB' ? 'text-xs px-3 en' : 'px-4 vi'; ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?> font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
							<?php echo svg( $medal_rank, '24', '24' ) ?>
							<?php _e( 'Hạng', 'bsc' ) ?>
							<?php echo $response_GetRecommendedInstrument->rank ?>
						</p>
					<?php } ?>
				</div>

				<div class="mt-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-5' ?>">
					<?php if ( $response_GetRecommendedInstrument->d[0]->author ) { ?>
						<div class="flex items-center justify-between text-xs">
							<p class="text-xs">
								<?php _e( 'Analyst', 'bsc' ) ?>:
							</p>
							<p class="font-bold text-primary-300">
								<?php echo $response_GetRecommendedInstrument->d[0]->author ?>
							</p>
						</div>
					<?php } ?>
					<?php if ( $response_GetRecommendedInstrument->d[0]->recommendation ) { ?>
						<div class="flex items-center justify-between text-xs">
							<p class="text-xs">
								<?php _e( 'Khuyến nghị', 'bsc' ) ?>:
							</p>
							<?php
							$status = $response_GetRecommendedInstrument->d[0]->recommendation;
							$check_status = get_color_by_number_bsc( $status );
							$title_status = $check_status['title_status'];
							$text_status = $check_status['text_status'];
							$background_status = $check_status['background_status'];
							?>
							<p class="inline-block rounded-full px-4 py-0.5 font-semibold"
								style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
								<?php echo $title_status ?>
							</p>
						</div>
					<?php } ?>
					<?php if ( $response_GetRecommendedInstrument->d[0]->categorynames ) { ?>
						<div class="flex items-center justify-between text-xs">
							<p class="text-xs">
								<?php _e( 'Danh mục', 'bsc' ) ?>:
							</p>
							<p class="inline-block rounded-full font-semibold text-right">
								<?php echo $response_GetRecommendedInstrument->d[0]->categorynames ?>
							</p>
						</div>
					<?php } ?>
					<?php if ( $response_GetRecommendedInstrument->d[0]->datetimepublished ) { ?>
						<div class="flex items-center justify-between text-xs">
							<p class="text-xs">
								<?php _e( 'Ngày cập nhật', 'bsc' ) ?>
							</p>
							<p class="font-bold">
								<?php $date = new DateTime( $response_GetRecommendedInstrument->d[0]->datetimepublished ); ?>
								<?php echo $date->format( 'd/m/Y' ); ?>
							</p>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php
		}
	} elseif ( $type_form == 'dmkn_chart_bsc' ) {
		$time_cache = 300;
		date_default_timezone_set( 'Asia/Bangkok' );

		// Fetch dynamic list of categories
		$list_array_chart = array( 'HOSE', 'VNDIAMOND' );
		$array_data_GetAllDanhMuc = array();
		$response_GetAllDanhMuc = get_data_with_cache(
			'GetAllDanhMuc',
			$array_data_GetAllDanhMuc,
			$time_cache,
			get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' )
		);

		if ( $response_GetAllDanhMuc ) {
			foreach ( $response_GetAllDanhMuc->d as $news ) {
				$list_array_chart[] = $news->tendanhmuc;
			}
		}

		$array_data = array(
			'portcode' => implode( ',', $list_array_chart )
		);
		$data = get_data_with_cache( 'GetPortfolioPerformance', $array_data, $time_cache );

		$maxValue = 0;
		$minValue = PHP_INT_MAX;

		if ( $data ) {
			$stocksData = array();
			foreach ( $list_array_chart as $chart ) {
				$stocksData[ $chart ] = array();
			}

			$earliestDate = null;

			foreach ( $data->d as $dataset ) {
				foreach ( $dataset as $stockCode => $entries ) {
					if ( ! isset( $stocksData[ $stockCode ] ) ) {
						$stocksData[ $stockCode ] = array();
					}

					foreach ( $entries as $entry ) {
						$date = date( "Y-m-d", strtotime( $entry->tradedate ) );
						$portclose = $entry->portclose;
						$percentagedifference = $entry->percentagedifference;

						$stocksData[ $stockCode ][ $date ] = array(
							'portclose' => $portclose,
							'percentagedifference' => $percentagedifference
						);

						if ( $portclose > $maxValue ) {
							$maxValue = $portclose;
						}
						if ( $portclose < $minValue ) {
							$minValue = $portclose;
						}

						if ( ! $earliestDate || $date < $earliestDate ) {
							$earliestDate = $date;
						}
					}
				}
			}

			$fromdate = $earliestDate;
			$stocksDataJson = json_encode( $stocksData );
			$maxValue = ceil( $maxValue / 10 ) * 10;
			$minValue = floor( $minValue / 10 ) * 10;
			$listArrayJson = htmlspecialchars( json_encode( $list_array_chart ), ENT_QUOTES, 'UTF-8' );
			?>
			<div id="chart" data-height="514" data-fromdate="<?php echo $fromdate; ?>" data-time_cache="<?php echo $time_cache; ?>"
				data-maxvalue="<?php echo $maxValue; ?>" data-minvalue="<?php echo $minValue; ?>"
				data-stock='<?php echo $stocksDataJson; ?>' data-array="<?php echo $listArrayJson; ?>"></div>
			<?php
		}
	} elseif ( $type_form == 'dmkn_chart_bsc_details-left' ) {
		$array_data_list_bsc = array();
		$response_list_bsc = get_data_with_cache( 'GetDanhMucChiTiet?id=' . $symbol, $array_data_list_bsc, $time_cache, get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' ), 'POST' );
		if ( $response_list_bsc ) {
			?>
			<div
				class="prose-a:text-primary-300 prose-a:font-bold font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'scroll-bar-custom overflow-y-auto max-h-[600px]' : '' ?>">
				<?php
				$i = 0;
				foreach ( $response_list_bsc->d as $list_bsc ) {
					$i++;
					$symbol = $list_bsc->machungkhoan;
					if ( $symbol ) {
						?>
						<div class="flex items-center gap-4 <?php echo $i % 2 == 0 ? '' : 'bg-[#EBF4FA]' ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-max' ?> bsc_need_crawl_price"
							data-symbol="<?php echo $symbol ?>">
							<div
								class="flex-1 min-w-[110px] flex items-center justify-center leading-[1.125]  px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?>">
								<a href="<?php echo slug_co_phieu( $list_bsc->machungkhoan ) ?>"><?php echo $list_bsc->machungkhoan ?></a>
							</div>
							<div
								class="flex-1 min-w-[110px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-center leading-[1.125] px-3 font-semibold">
								<?php
								$status = $list_bsc->hinhthuc;
								$check_status = get_color_by_number_bsc( $status );
								$title_status = $check_status['title_status'];
								$text_status = $check_status['text_status'];
								$background_status = $check_status['background_status'];
								?>
								<?php if ( $list_bsc->hinhthuc ) { ?>
									<span
										class="min-w-[78px] min-h-[28px] inline-flex items-center justify-center px-4 py-0.5 font-semibold rounded-full"
										style=" background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
										<?php
										echo $title_status;
										?>
									</span>
								<?php } ?>
							</div>
							<div
								class="flex-1 min-w-[110px] bsc_need_crawl_price-bidPrice1 bsc_need_crawl_price-text-color <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-end pr-10 leading-[1.125] px-3 font-bold ">
							</div>
							<div
								class="flex-1 min-w-[110px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-end pr-10 leading-[1.125] px-3">
								<?php
								if ( $list_bsc->giakyvong ) {
									echo bsc_number_format( ( $list_bsc->giakyvong ) );
								}
								?>
							</div>
							<div class="flex-1 min-w-[110px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-end pr-10 leading-[1.125] px-3 font-bold bsc_need_crawl_price-text_color-closePrice"
								data-giakyvong="<?php echo $list_bsc->giakyvong ?>">
							</div>
							<div
								class="flex-1 min-w-[110px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-center leading-[1.125] px-3">
								<?php echo $list_bsc->san ?>
							</div>
							<div
								class="flex-1 min-w-[110px] bsc_need_crawl_price-closeVol bsc_need_crawl_price-text-color <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[60px] py-1' : 'py-[12px]' ?> flex items-center justify-end pr-10 leading-[1.125] px-3  ">
							</div>
						</div>
						<?php
					}
				}
				?>

			</div>
		<?php }
	} elseif ( $type_form == 'dmkn_chart_bsc_details-right' ) {
		$array_data_GetResearchPorCurMet = array(
			'portcode' => $symbol
		);
		$response_GetResearchPorCurMet = get_data_with_cache( 'GetResearchPorCurMet', $array_data_GetResearchPorCurMet, $time_cache );
		if ( $response_GetResearchPorCurMet ) {
			?>
			<ul class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'space-y-4' ?>">
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'Ngày điều chỉnh danh mục', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[0]->value; ?>
						</p>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'Ngành chủ đạo', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[6]->value; ?>
						</p>
					</div>
				</li>
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'Thay đổi từ ngày điều chỉnh', 'bsc' ) ?></p>
						<?php if ( $response_GetResearchPorCurMet->d[1]->value ) {
							if ( substr( $response_GetResearchPorCurMet->d[1]->value, 0, 1 ) === '-' ) {
								$class = "text-[#FE5353]";
								$class_svg = 'downn';
							} else {
								$class = "text-[#1CCD83]";
								$class_svg = 'up';
							}
							?>
							<p class="font-medium <?php echo $class ?> flex items-center gap-1 justify-end">
								<?php echo svg( $class_svg, '16', '16' ) ?>
								<?php echo $response_GetResearchPorCurMet->d[1]->value; ?>
							</p>
						<?php } ?>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'So với thị trường', 'bsc' ) ?></p>
						<?php if ( $response_GetResearchPorCurMet->d[7]->value ) {
							if ( substr( $response_GetResearchPorCurMet->d[7]->value, 0, 1 ) === '-' ) {
								$class = "text-[#FE5353]";
								$class_svg = 'downn';
							} else {
								$class = "text-[#1CCD83]";
								$class_svg = 'up';
							}
							?>
							<p class="font-medium <?php echo $class ?> flex items-center gap-1 justify-end">
								<?php echo svg( $class_svg, '16', '16' ) ?>
								<?php echo $response_GetResearchPorCurMet->d[7]->value; ?>
							</p>
						<?php } ?>
					</div>
				</li>
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'Thay đổi 1W', 'bsc' ) ?></p>
						<?php if ( $response_GetResearchPorCurMet->d[2]->value ) {
							if ( substr( $response_GetResearchPorCurMet->d[2]->value, 0, 1 ) === '-' ) {
								$class = "text-[#FE5353]";
								$class_svg = 'downn';
							} else {
								$class = "text-[#1CCD83]";
								$class_svg = 'up';
							}
							?>
							<p class="font-medium <?php echo $class ?> flex items-center gap-1 justify-end">
								<?php echo svg( $class_svg, '16', '16' ) ?>
								<?php echo $response_GetResearchPorCurMet->d[2]->value; ?>
							</p>
						<?php } ?>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'So với thị trường', 'bsc' ) ?></p>
						<?php if ( $response_GetResearchPorCurMet->d[8]->value ) {
							if ( substr( $response_GetResearchPorCurMet->d[8]->value, 0, 1 ) === '-' ) {
								$class = "text-[#FE5353]";
								$class_svg = 'downn';
							} else {
								$class = "text-[#1CCD83]";
								$class_svg = 'up';
							}
							?>
							<p class="font-medium <?php echo $class ?> flex items-center gap-1 justify-end">
								<?php echo svg( $class_svg, '16', '16' ) ?>
								<?php echo $response_GetResearchPorCurMet->d[8]->value; ?>
							</p>
						<?php } ?>
					</div>
				</li>
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'Beta danh mục', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[3]->value; ?>
						</p>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'Trung vị thị giá vốn', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[9]->value; ?>
						</p>
					</div>
				</li>
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'P/E trung vị', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[4]->value; ?>
						</p>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'P/E thị trường', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[10]->value; ?>
						</p>
					</div>
				</li>
				<li class="flex xl:gap-20 gap-10">
					<div class="w-[62%] space-y-1">
						<p class="text-xs"><?php _e( 'P/B trung vị', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[5]->value; ?>
						</p>
					</div>
					<div class="w-[38%] space-y-1">
						<p class="text-xs"><?php _e( 'P/B thị trường', 'bsc' ) ?></p>
						<p class="font-medium">
							<?php echo $response_GetResearchPorCurMet->d[11]->value; ?>
						</p>
					</div>
				</li>
			</ul>
		<?php }
	} elseif ( $type_form == 'ttnc_khuyen_nghi' ) {
		$tab = generateRandomString();
		$array_data_GetAllDanhMuc = array();
		$response_GetAllDanhMuc = get_data_with_cache( 'GetAllDanhMuc', $array_data_GetAllDanhMuc, $time_cache, get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' ) );
		if ( $response_GetAllDanhMuc ) {
			if ( isset( $_GET['mck'] ) && trim( $_GET['mck'] ) !== '' ) {
				$current_bsc = strtoupper( bsc_format_string( $_GET['mck'] ) );
			} else {
				$current_bsc = null; // Khởi tạo để tránh lỗi

				if ( ! empty( $response_GetAllDanhMuc->d ) && is_array( $response_GetAllDanhMuc->d ) ) {
					foreach ( $response_GetAllDanhMuc->d as $news ) {
						if ( isset( $news->isdefault ) && $news->isdefault == 'Y' ) {
							$current_bsc = $news->tendanhmuc ?? null;
							break;
						}
					}

					// Nếu không tìm thấy danh mục mặc định, lấy phần tử đầu tiên (nếu có)
					if ( $current_bsc === null && isset( $response_GetAllDanhMuc->d[0]->tendanhmuc ) ) {
						$current_bsc = $response_GetAllDanhMuc->d[0]->tendanhmuc;
					}
				}
			}
			?>
			<ul
				class="customtab-nav flex items-center flex-wrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 mb-6 list_code_tab' : 'gap-2 mb-4' ?>">
				<?php
				$i = 0;
				foreach ( $response_GetAllDanhMuc->d as $news ) {
					$single_bsc = $news->tendanhmuc;
					$i++; ?>
					<li>
						<button <?php echo ! $check_logout || $public == 'Y' ? '' : 'disable' ?>
							data-tabs="#<?php echo $tab ?>-<?php echo $i ?>"
							class="<?php if ( $current_bsc == $single_bsc )
								echo 'active' ?> inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?> disable:pointer-events-none">
							<?php echo $single_bsc ?>
						</button>
					</li>
				<?php } ?>
			</ul>
			<?php
			$m = 0;
			foreach ( $response_GetAllDanhMuc->d as $news ) {
				$single_bsc = $news->tendanhmuc;
				$m++;
				$public = $news->ispublic; ?>
				<div class="tab-content <?php
				echo ( $current_bsc == $single_bsc ) ? 'block' : 'hidden';
				?>" id="<?php echo $tab ?>-<?php echo $m ?>">
					<div
						class="rounded-lg overflow-hidden relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-full' : 'text-xs' ?>">
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'overflow-x-auto scroll-bar-custom scroll-bar-x' ?> 
							<?php
							if ( $public == 'N' ) {
								echo $class;
							}
							?>">
							<ul
								class="flex items-center flex-nowrap font-bold text-center text-white bg-primary-300 prose-li:py-3 justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[7px] gap-5 2xl:px-[30px] px-5 list_code_header' : 'gap-[12px] sm:w-full w-fit' ?>">
								<li
									class="whitespace-nowrap <?php echo ( get_locale() == 'en_GB' ) ? 'w-[16%]' : ''; ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() && get_locale() !== 'en_GB' ? 'w-[8%]' : 'w-[16%] min-w-[60px]' ?>">
									<?php _e( 'Mã', 'bsc' ) ?>
								</li>
								<li
									class="whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[96px]' ?>">
									<?php _e( 'Khuyến nghị', 'bsc' ) ?>
								</li>
								<li
									class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[70px]' ?>">
									<?php _e( 'Giá', 'bsc' ) ?>
								</li>
								<li
									class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[70px]' ?>">
									<?php _e( 'Mục tiêu', 'bsc' ) ?>
								</li>
								<li
									class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[96px] pr-3' ?>">
									<?php _e( 'Upside', 'bsc' ) ?>
								</li>
							</ul>
							<?php
							if ( ! $check_logout || $public == 'Y' ) {
								$time_cache = 300;
								$array_data_list_bsc = array();
								$response_list_bsc = get_data_with_cache( 'GetDanhMucChiTiet?id=' . $news->id, $array_data_list_bsc, $time_cache, get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' ), 'POST' );
								if ( $response_list_bsc ) {
									?>
									<div
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'overflow-y-auto scroll-bar-custom max-h-[520px] list_code_table' : '' ?>">
										<?php
										foreach ( $response_list_bsc->d as $list_bsc ) {
											$symbol = $list_bsc->machungkhoan;
											if ( $symbol ) {
												?>
												<ul class="flex text-center justify-between items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50 whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:px-[30px] px-5 py-4 gap-5' : 'gap-[12px] w-max' ?> bsc_need_crawl_price"
													data-symbol="<?php echo $symbol ?>">
													<li
														class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() && get_locale() !== 'en_GB' ? 'w-[8%]' : 'w-[16%] py-3 min-w-[60px]' ?> font-medium">
														<a
															href="<?php echo slug_co_phieu( $list_bsc->machungkhoan ) ?>"><?php echo $list_bsc->machungkhoan ?></a>
													</li>
													<?php
													$status = $list_bsc->hinhthuc;
													$check_status = get_color_by_number_bsc( $status );
													$title_status = $check_status['title_status'];
													$text_status = $check_status['text_status'];
													$background_status = $check_status['background_status'];
													?>
													<li
														class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] py-3 min-w-[96px]' ?> font-medium">
														<?php if ( $list_bsc->hinhthuc ) { ?>
															<span class="inline-block rounded-[45px] px-4 py-0.5  min-w-[78px]"
																style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
																<?php
																echo $title_status;
																?>
															</span>
														<?php } ?>
													</li>
													<li
														class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] py-3 min-w-[70px]' ?> font-bold bsc_need_crawl_price-bidPrice1 bsc_need_crawl_price-text-color">
													</li>
													<li
														class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] py-3 min-w-[70px]' ?> font-medium">
														<?php
														if ( $list_bsc->giakyvong ) {
															echo bsc_number_format( ( $list_bsc->giakyvong ) );
														}
														?>
													</li>
													<li class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] py-3 pr-3 min-w-[96px]' ?> font-bold bsc_need_crawl_price-text_color-closePrice "
														data-giakyvong="<?php echo $list_bsc->giakyvong ?>">
													</li>
												</ul>
												<?php
											}
										}
										?>
									</div>
								<?php }
							} else {
								?>
								<!-- Data Demo -->
								<div class="overflow-y-auto scroll-bar-custom max-h-[520px] list_code_table">
									<?php for ( $i = 0; $i < 9; $i++ ) { ?>
										<ul
											class="flex gap-5 text-center justify-between 2xl:px-[30px] px-5 py-4 items-center [&amp;:nth-child(odd)]:bg-white [&amp;:nth-child(even)]:bg-primary-50">
											<li class="w-[8%] font-medium"><?php _e( 'BSI', 'bsc' ) ?></li>
											<li class="w-[16%] font-medium">
												<span class="inline-block rounded-[45px] px-4 py-0.5  min-w-[78px]"
													style="background-color:#D6F6DE; color:#30D158">
													<?php _e( 'Mua', 'bsc' ) ?> </span>
											</li>
											<li class="w-[16%] font-bold text-[#1CCD83]">
												---- </li>
											<li class="w-[16%] font-medium">
												---- </li>
											<li class="w-[16%] font-bold text-[#1CCD83]">
												---- </li>
										</ul>
									<?php } ?>
								</div>
								<?php
							}
							?>
						</div>
						<?php if ( $check_logout && $public == 'N' ) {
							echo $check_logout['html'];
						} ?>
					</div>
				</div>
				<?php
			}
		?>
		<?php }
	} elseif ( $type_form == 'ttnc_search_max' ) {
		$top_co_phieu = get_top_viewed_co_phieu_option( 6 );
		$symbols = array_keys( $top_co_phieu );
		if ( $symbols ) {
			foreach ( $symbols as $symbol ) {
				$symbol = strtoupper( $symbol );
				?>
				<a href="<?php echo slug_co_phieu( $symbol ) ?>"
					class="bsc_need_crawl_price-bg_search inline-flex rounded-lg <?php echo $bg_color_class ?> text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?> bsc_need_crawl_price"
					data-symbol="<?php echo $symbol ?>">
					<span>
						<?php echo $symbol ?>
					</span>
					<span class="bsc_need_crawl_price-value_search">
					</span>
				</a>
			<?php }
		}
	} elseif ( $type_form == 'ttnc_khuyen_nghi_GetForecastMacro' ) {
		$array_data_GetForecastMacro = array();
		$response_GetForecastMacro = get_data_with_cache( 'GetForecastMacro', $array_data_GetForecastMacro, $time_cache );
		if ( $response_GetForecastMacro ) {
			?>
			<div
				class="font-medium text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-lg flex overflow-hidden' : 'block_slider-show-1 blue slider' ?>">
				<div
					class="text-primary-300 font-medium  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-white border-r-[4px] w-[48.8%]' : 'w-full block_slider-item' ?>">
					<div
						class="text-right font-medium bg-[#EBF4FA] min-h-[58px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[34px] pb-[9px] mb-1.5 pr-3' : 'py-1.5 px-5 flex flex-col justify-center' ?>">
						<p>
							<?php echo $response_GetForecastMacro->d->A[0][0]->year; ?>
						</p>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][0]->col . ' (' . $response_GetForecastMacro->d->A[0][0]->comparison . $response_GetForecastMacro->d->A[0][0]->unit . ')' ?>
						</div>
						<div class="flex-1 text-right pr-3">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][0]->value ); ?>
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][1]->col . ' (' . $response_GetForecastMacro->d->A[0][1]->comparison . $response_GetForecastMacro->d->A[0][1]->unit . ')' ?>
						</div>
						<div class="flex-1 text-right pr-3">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][1]->value ); ?>
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][2]->col . ' (' . $response_GetForecastMacro->d->A[0][2]->comparison . $response_GetForecastMacro->d->A[0][2]->unit . ')' ?>
						</div>
						<div class="flex-1 text-right pr-3">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][2]->value ); ?>
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][3]->col . ' (' . $response_GetForecastMacro->d->A[0][3]->comparison . $response_GetForecastMacro->d->A[0][3]->unit . ')' ?>
						</div>
						<div class="flex-1 text-right pr-3">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][3]->value ); ?>
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][4]->col . ' (' . $response_GetForecastMacro->d->A[0][4]->comparison . $response_GetForecastMacro->d->A[0][4]->unit . ')' ?>
						</div>
						<div class="flex-1 text-right pr-3">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][4]->value ); ?>
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-medium ">
							<?php echo $response_GetForecastMacro->d->A[0][5]->col ?>
						</div>
						<div class="flex-1 text-right pr-3 font-medium ">
							<p><?php echo bsc_number_format( $response_GetForecastMacro->d->A[0][5]->value ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'w-full block_slider-item' ?>">
					<div class="grid grid-cols-2 text-center">
						<div class="text-[#FF0017]">
							<div
								class="min-h-[58px] bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[9px] mb-1.5' : 'py-1.5 px-5' ?>">
								<p
									class="font-medium  mb-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-right' ?>">
									<?php
									if ( $response_GetForecastMacro->d->F[1][0]->scenario ) {
										echo $response_GetForecastMacro->d->F[1][0]->scenario;
									} else {
										echo $response_GetForecastMacro->d->F[1][1]->scenario;
									}
									?>
								</p>
								<div
									class="grid grid-cols-2 font-medium text-right gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-6' : '' ?>">
									<p><?php echo $response_GetForecastMacro->d->F[1][0]->year; ?>
									</p>
									<p><?php echo $response_GetForecastMacro->d->F[3][0]->year; ?>
									</p>
								</div>
							</div>
							<?php
							for ( $i = 0; $i < 5; $i++ ) {
								?>
								<div
									class="grid grid-cols-2 gap-2 text-right items-center  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5 pr-6' : 'py-2 pr-4' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[1][ $i ]->value ); ?>
									</p>
									<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[3][ $i ]->value ); ?>
									</p>
								</div>
								<?php
							}
							?>
							<div
								class="grid grid-cols-2 gap-2 text-right items-center  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5 pr-6' : 'py-2 pr-4' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA] font-medium ">
								<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[1][5]->value ) ?>
								</p>
								<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[3][5]->value ) ?>
								</p>
							</div>
						</div>
						<div class="text-[#30D158]">
							<div
								class="min-h-[58px] bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[9px] mb-1.5' : 'py-1.5 px-5' ?>">
								<p class="font-medium mb-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-right' ?>">
									<?php
									if ( $response_GetForecastMacro->d->F[0][0]->scenario ) {
										echo $response_GetForecastMacro->d->F[0][0]->scenario;
									} else {
										echo $response_GetForecastMacro->d->F[0][1]->scenario;
									}
									?>
								</p>
								<div
									class="grid grid-cols-2 font-medium  [&:nth-child(odd)]:bg-[#EBF4FA] text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-6' : '' ?>">
									<p><?php echo $response_GetForecastMacro->d->F[0][0]->year; ?>
									</p>
									<p><?php echo $response_GetForecastMacro->d->F[2][0]->year; ?>
									</p>
								</div>
							</div>
							<?php
							for ( $i = 0; $i < 5; $i++ ) {
								?>
								<div
									class="grid grid-cols-2 gap-2 text-right items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5 pr-6' : 'py-2 pr-4' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[0][ $i ]->value ); ?>
									</p>
									<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[2][ $i ]->value ); ?>
									</p>
								</div>
								<?php
							}
							?>
							<div
								class="grid grid-cols-2 gap-2 text-right items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5 pr-6' : 'py-2 pr-4' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA] font-medium ">
								<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[0][5]->value ); ?>
								</p>
								<p><?php echo bsc_number_format( $response_GetForecastMacro->d->F[2][5]->value ); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }
	} elseif ( $type_form == 'ttnc_khuyen_nghi_GetForecastMacro_title' ) {
		$array_data_GetForecastMacro = array();
		$response_GetForecastMacro = get_data_with_cache( 'GetForecastMacro', $array_data_GetForecastMacro, $time_cache );
		if ( $response_GetForecastMacro ) {
			echo __( 'Dự báo kinh tế vĩ mô Việt Nam', 'bsc' ) . ' ' . $response_GetForecastMacro->d->F[1][0]->year . '-' . $response_GetForecastMacro->d->F[3][0]->year;
			;
		}
	} elseif ( $type_form == 'chart' ) {
		$time_cache = 300;
		date_default_timezone_set( 'Asia/Bangkok' );

		// Fetch dynamic list of categories
		$list_array_chart = array( 'HOSE', 'VNDIAMOND' );
		$array_data_GetAllDanhMuc = array();
		$response_GetAllDanhMuc = get_data_with_cache(
			'GetAllDanhMuc',
			$array_data_GetAllDanhMuc,
			$time_cache,
			get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' )
		);

		if ( $response_GetAllDanhMuc ) {
			foreach ( $response_GetAllDanhMuc->d as $news ) {
				$list_array_chart[] = $news->tendanhmuc;
			}
		}

		$array_data = array(
			'portcode' => implode( ',', $list_array_chart )
		);
		$data = get_data_with_cache( 'GetPortfolioPerformance', $array_data, $time_cache );

		$maxValue = 0;
		$minValue = PHP_INT_MAX;

		if ( $data ) {
			$stocksData = array();
			foreach ( $list_array_chart as $chart ) {
				$stocksData[ $chart ] = array();
			}

			$earliestDate = null;

			foreach ( $data->d as $dataset ) {
				foreach ( $dataset as $stockCode => $entries ) {
					if ( ! isset( $stocksData[ $stockCode ] ) ) {
						$stocksData[ $stockCode ] = array();
					}

					foreach ( $entries as $entry ) {
						$date = date( "Y-m-d", strtotime( $entry->tradedate ) );
						$portclose = $entry->portclose;
						$percentagedifference = $entry->percentagedifference;

						$stocksData[ $stockCode ][ $date ] = array(
							'portclose' => $portclose,
							'percentagedifference' => $percentagedifference
						);

						if ( $portclose > $maxValue ) {
							$maxValue = $portclose;
						}
						if ( $portclose < $minValue ) {
							$minValue = $portclose;
						}

						if ( ! $earliestDate || $date < $earliestDate ) {
							$earliestDate = $date;
						}
					}
				}
			}

			$fromdate = $earliestDate;
			$stocksDataJson = json_encode( $stocksData );
			$maxValue = ceil( $maxValue / 10 ) * 10;
			$minValue = floor( $minValue / 10 ) * 10;
			$listArrayJson = htmlspecialchars( json_encode( $list_array_chart ), ENT_QUOTES, 'UTF-8' );
			?>
			<div id="chart" data-height="380px" class="h-full" data-fromdate="<?php echo $fromdate ?>"
				data-time_cache="<?php echo $time_cache ?>" data-maxvalue="<?php echo $maxValue; ?>"
				data-minvalue="<?php echo $minValue; ?>" data-stock='<?php echo $stocksDataJson ?>'
				data-array="<?php echo $listArrayJson; ?>"></div>
			<?php
		}
	} elseif ( $type_form == 'report_finance_list-1' ) {
		?>
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
				<ul class="flex items-center gap-5 customtab-nav">
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-1-Q"
							class="active <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-1-Y"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-1-<?php echo $freq ?>">
						<?php
						$array_data_GetDetailFinanceReportBySymbol = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
							'rptype' => 'BALANCE'
						);
						$response_GetDetailFinanceReportBySymbol = get_data_with_cache( 'GetDetailFinanceReportBySymbol', $array_data_GetDetailFinanceReportBySymbol, $time_cache );
						if ( $response_GetDetailFinanceReportBySymbol ) {
							$industryname = $response_GetDetailFinanceReportBySymbol->industryname;
							?>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<p class="text-right lg:text-lg text-xs italic font-medium mb-[12px] mr-1">
									<?php _e( 'Đơn vị tính theo triệu VNĐ', 'bsc' ) ?>
								</p>
								<div class="overflow-x-auto">
									<div
										class="flex bg-primary-300 text-white font-bold 2xl:gap-10 gap-5 px-[30px] py-4 xl:w-full w-max text-right">
										<p class="flex-1 min-w-[200px] text-left"><?php _e( 'Danh sách', 'bsc' ) ?></p>
										<?php
										$yearData = $response_GetDetailFinanceReportBySymbol->d[0];
										$yearDataArray = (array) $yearData;
										$yearDataValues = array_slice( $yearDataArray, 1, null, true );
										$yearDataValues = array_reverse( $yearDataValues, true );
										foreach ( $yearDataValues as $key => $year ) {
											?>
											<p
												class="min-w-[135px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[11%]' : 'max-w-[135px] break-words' ?>">
												<?php echo htmlspecialchars( $year ); ?>
											</p>
											<?php
										}
										?>
										<p
											class="min-w-[175px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[14%]' : 'max-w-[175px]' ?>">
											<?php _e( 'Thay đổi', 'bsc' ) ?>
										</p>
									</div>
									<div
										class="list_content-collapse font-medium scroll-bar-custom scroll-bar-x max-h-[600px] overflow-y-auto">
										<?php if ( $industryname == 'Insurance' ) {
											$menuData = require get_template_directory() . '/data/report_finance-balance-insurance.php';
										} elseif ( $industryname == 'Security' ) {
											$menuData = require get_template_directory() . '/data/report_finance-balance-security.php';
										} elseif ( $industryname == 'Bank' ) {
											$menuData = require get_template_directory() . '/data/report_finance-balance-bank.php';
										} else {
											$menuData = require get_template_directory() . '/data/report_finance-balance-company.php';
										}
										?>
										<?php
										if ( $menuData && $response_GetDetailFinanceReportBySymbol ) {
											renderMenu( $menuData, $response_GetDetailFinanceReportBySymbol );
										}
										?>


									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php }
			} ?>
		</div>
		<?php
	} elseif ( $type_form == 'report_finance_list-2' ) {
		?>
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
				<ul class="flex items-center gap-5 customtab-nav">
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-2-Q"
							class="active <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-2-Y"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-2-<?php echo $freq ?>">
						<?php
						$array_data_GetDetailFinanceReportBySymbol = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
							'rptype' => 'INCOME'
						);
						$response_GetDetailFinanceReportBySymbol = get_data_with_cache( 'GetDetailFinanceReportBySymbol', $array_data_GetDetailFinanceReportBySymbol, $time_cache );
						if ( $response_GetDetailFinanceReportBySymbol ) {
							$industryname = $response_GetDetailFinanceReportBySymbol->industryname;
							?>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<p class="text-right lg:text-lg text-xs italic font-medium mb-[12px] mr-1">
									<?php _e( 'Đơn vị tính theo triệu VNĐ', 'bsc' ) ?>
								</p>
								<div class="overflow-x-auto">
									<div
										class="flex bg-primary-300 text-white font-bold 2xl:gap-10 gap-5 px-[30px] py-4 text-right sticky top-0 z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-max' ?>">
										<p class="flex-1 min-w-[200px] text-left"><?php _e( 'Danh sách', 'bsc' ) ?></p>
										<?php
										$yearData = $response_GetDetailFinanceReportBySymbol->d[0];
										$yearDataArray = (array) $yearData;
										$yearDataValues = array_slice( $yearDataArray, 1, null, true );
										$yearDataValues = array_reverse( $yearDataValues, true );
										foreach ( $yearDataValues as $key => $year ) {
											?>
											<p
												class="min-w-[135px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[11%]' : 'max-w-[135px] break-words' ?>">
												<?php echo htmlspecialchars( $year ); ?>
											</p>
											<?php
										}
										?>
										<p
											class="min-w-[175px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[14%]' : 'max-w-[175px]' ?>">
											<?php _e( 'Thay đổi', 'bsc' ) ?>
										</p>
									</div>
									<div
										class="list_content-collapse font-medium scroll-bar-custom scroll-bar-x max-h-[600px] overflow-y-auto">
										<?php if ( $industryname == 'Insurance' ) {
											$menuData = require get_template_directory() . '/data/report_finance-income-insurance.php';
										} elseif ( $industryname == 'Security' ) {
											$menuData = require get_template_directory() . '/data/report_finance-income-security.php';
										} elseif ( $industryname == 'Bank' ) {
											$menuData = require get_template_directory() . '/data/report_finance-income-bank.php';
										} else {
											$menuData = require get_template_directory() . '/data/report_finance-income-company.php';
										}
										?>
										<?php
										if ( $menuData && $response_GetDetailFinanceReportBySymbol ) {
											renderMenu( $menuData, $response_GetDetailFinanceReportBySymbol );
										}
										?>
									</div>

								</div>
							</div>
						<?php } ?>
					</div>
				<?php }
			} ?>
		</div>
		<?php
	} elseif ( $type_form == 'report_finance_list-3' ) {
		?>
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
				<ul class="flex items-center gap-5 customtab-nav">
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-3-Q"
							class="active <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-3-Y"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-3-<?php echo $freq ?>">
						<?php
						$array_data_GetDetailFinanceReportBySymbol = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
							'rptype' => 'CFINDRIRECT'
						);
						$response_GetDetailFinanceReportBySymbol = get_data_with_cache( 'GetDetailFinanceReportBySymbol', $array_data_GetDetailFinanceReportBySymbol, $time_cache );
						if ( $response_GetDetailFinanceReportBySymbol ) {
							$industryname = $response_GetDetailFinanceReportBySymbol->industryname;
							?>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<p class="text-right lg:text-lg text-xs italic font-medium mb-[12px] mr-1">
									<?php _e( 'Đơn vị tính theo triệu VNĐ', 'bsc' ) ?>
								</p>
								<div class="overflow-x-auto">
									<div
										class="flex bg-primary-300 text-white font-bold 2xl:gap-10 gap-5 px-[30px] py-4 text-right sticky top-0 z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-max' ?>">
										<p class="flex-1 min-w-[200px] text-left"><?php _e( 'Danh sách', 'bsc' ) ?></p>
										<?php
										$yearData = $response_GetDetailFinanceReportBySymbol->d[0];
										$yearDataArray = (array) $yearData;
										$yearDataValues = array_slice( $yearDataArray, 1, null, true );
										$yearDataValues = array_reverse( $yearDataValues, true );
										foreach ( $yearDataValues as $key => $year ) {
											?>
											<p
												class="min-w-[135px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[11%]' : 'max-w-[135px] break-words' ?>">
												<?php echo htmlspecialchars( $year ); ?>
											</p>
											<?php
										}
										?>
										<p
											class="min-w-[175px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[14%]' : 'max-w-[175px]' ?>">
											<?php _e( 'Thay đổi', 'bsc' ) ?>
										</p>
									</div>
									<div
										class="list_content-collapse font-medium scroll-bar-custom scroll-bar-x max-h-[600px] overflow-y-auto">
										<?php if ( $industryname == 'Insurance' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfindrirect-insurance.php';
										} elseif ( $industryname == 'Security' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfindrirect-security.php';
										} elseif ( $industryname == 'Bank' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfindrirect-bank.php';
										} else {
											$menuData = require get_template_directory() . '/data/report_finance-cfindrirect-company.php';
										}
										?>
										<?php
										if ( $menuData && $response_GetDetailFinanceReportBySymbol ) {
											renderMenu( $menuData, $response_GetDetailFinanceReportBySymbol );
										}
										?>
									</div>

								</div>
							</div>
						<?php } ?>
					</div>
				<?php }
			} ?>
		</div>
		<?php
	} elseif ( $type_form == 'report_finance_list-4' ) {
		?>
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
				<ul class="flex items-center gap-5 customtab-nav">
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-4-Q"
							class="active <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Quý', 'bsc' ) ?>
						</button>
					</li>
					<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<button data-tabs="#tab-4-Y"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-block' : 'w-full block' ?> rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
							<?php _e( 'Năm', 'bsc' ) ?>
						</button>
					</li>
				</ul>
			</div>
			<?php
			$freq_cttc = array( 'Q', 'Y' );
			if ( $freq_cttc ) {
				$i = 0;
				foreach ( $freq_cttc as $freq ) {
					$i++;
					?>
					<div class="tab-content <?php if ( $i == 1 )
						echo 'block';
					else
						echo 'hidden' ?>" id="tab-4-<?php echo $freq ?>">
						<?php
						$array_data_GetDetailFinanceReportBySymbol = array(
							'lang' => pll_current_language(),
							'symbol' => $symbol,
							'freq' => $freq,
							'rptype' => 'CFDRIRECT'
						);
						$response_GetDetailFinanceReportBySymbol = get_data_with_cache( 'GetDetailFinanceReportBySymbol', $array_data_GetDetailFinanceReportBySymbol, $time_cache );
						if ( $response_GetDetailFinanceReportBySymbol ) {
							$industryname = $response_GetDetailFinanceReportBySymbol->industryname;
							?>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<p class="text-right lg:text-lg text-xs italic font-medium mb-[12px] mr-1">
									<?php _e( 'Đơn vị tính theo triệu VNĐ', 'bsc' ) ?>
								</p>
								<div class="overflow-x-auto">
									<div
										class="flex bg-primary-300 text-white font-bold 2xl:gap-10 gap-5 px-[30px] py-4 text-right sticky top-0 z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-max' ?>">
										<p class="flex-1 min-w-[200px] text-left"><?php _e( 'Danh sách', 'bsc' ) ?></p>
										<?php
										$yearData = $response_GetDetailFinanceReportBySymbol->d[0];
										$yearDataArray = (array) $yearData;
										$yearDataValues = array_slice( $yearDataArray, 1, null, true );
										$yearDataValues = array_reverse( $yearDataValues, true );
										foreach ( $yearDataValues as $key => $year ) {
											?>
											<p
												class="min-w-[135px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[11%]' : 'max-w-[135px] break-words' ?>">
												<?php echo htmlspecialchars( $year ); ?>
											</p>
											<?php
										}
										?>
										<p
											class="min-w-[175px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[14%]' : 'max-w-[175px]' ?>">
											<?php _e( 'Thay đổi', 'bsc' ) ?>
										</p>
									</div>
									<div
										class="list_content-collapse font-medium scroll-bar-custom scroll-bar-x max-h-[600px] overflow-y-auto">
										<?php if ( $industryname == 'Insurance' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfdirect-insurance.php';
										} elseif ( $industryname == 'Security' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfdirect-security.php';
										} elseif ( $industryname == 'Bank' ) {
											$menuData = require get_template_directory() . '/data/report_finance-cfdirect-bank.php';
										} else {
											$menuData = require get_template_directory() . '/data/report_finance-cfdirect-company.php';
										}
										?>
										<?php
										if ( $menuData && $response_GetDetailFinanceReportBySymbol ) {
											renderMenu( $menuData, $response_GetDetailFinanceReportBySymbol );
										}
										?>
									</div>

								</div>
							</div>
						<?php } ?>
					</div>
				<?php }
			} ?>
		</div>
		<?php
	} elseif ( $type_form == 'co_phieu_list' ) {
		$array_data = array(
			'lang' => pll_current_language(),
			'maxitem' => 100000,
		);
		$response = get_data_with_cache( 'GetInstrumentInfo', $array_data, $time_cache );
		if ( $response ) {
			?>
			<div class="rounded-tl-lg rounded-tr-lg relative block-loading">
				<table id="ttcp-table"
					class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:p-3 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-td:py-4' : 'prose-td:py-3' ?>">
					<thead>
						<tr>
							<th
								class="!pl-5 cursor-pointer filter-table <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap min-w-[100px]' ?>">
								<p class="flex items-center gap-1 whitespace-nowrap">
									<?php _e( 'Mã CK', 'bsc' ) ?>
									<?php echo svgClass( 'filter', '20', '20', 'inline-block shrink-0' ) ?>
								</p>
							</th>
							<th
								class="w-1/5 whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[20%]' : 'min-w-[140px]' ?>">
								<?php _e( 'Tên công ty', 'bsc' ) ?>
							</th>
							<th class="whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[80px]' ?>">
								<?php _e( 'Sàn', 'bsc' ) ?>
							</th>
							<th
								class="whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[150px]' ?>">
								<?php _e( 'Ngành', 'bsc' ) ?>
							</th>
							<th
								class="cursor-pointer text-right whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[130px]' ?>">
								<p class="flex items-center gap-1 whitespace-nowrap justify-end">
									<?php _e( 'Vốn hóa', 'bsc' ) ?>
									<?php echo svgClass( 'filter', '20', '20', 'inline-block shrink-0' ) ?>
								</p>
							</th>
							<th
								class="text-right whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[80px]' ?>">
								<?php _e( 'KLGD', 'bsc' ) ?>
							</th>
							<th
								class="text-right whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[80px]' ?>">
								<?php _e( 'GTGD', 'bsc' ) ?>
							</th>
							<th
								class=" cursor-pointer filter-table text-right whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[100px]' ?>">
								<p class="flex items-center gap-1 whitespace-nowrap justify-end">
									<?php _e( 'PE', 'bsc' ) ?>
									<?php echo svgClass( 'filter', '20', '20', 'inline-block shrink-0' ) ?>

								</p>
							</th>
							<th
								class="cursor-pointer filter-table text-right whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[80px]' ?>">
								<p class="flex items-center gap-1 whitespace-nowrap justify-end">
									<?php _e( 'PB', 'bsc' ) ?>
									<?php echo svgClass( 'filter', '20', '20', 'inline-block shrink-0' ) ?>

								</p>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ( $response->d as $news ) {
							?>
							<tr class="border-b border-[#C9CCD2]">
								<td class="!pl-5" data-code>
									<?php if ( $news->SYMBOL ) { ?>
										<a href="<?php echo slug_co_phieu( $news->SYMBOL ) ?>"><?php echo $news->SYMBOL ?></a>
									<?php } ?>
								</td>
								<td class="lg:whitespace-nowrap"><?php echo $news->FULLNAME ?></td>
								<td><?php echo $news->EXCHANGE; ?></td>
								<td class="whitespace-nowrap"><?php echo $news->INDUSTRYNAME ?></td>
								<td class="text-right !pr-8"><?php echo bsc_number_format( $news->MC ); ?></td>
								<td class="text-right"><?php echo bsc_number_format( $news->TOTALVOLUME ) ?></td>
								<td class="text-right"><?php echo bsc_number_format( $news->TOTALVALUE ) ?></td>
								<td class="text-right"><?php echo bsc_number_format( $news->PE ) ?></td>
								<td class="text-right"><?php echo bsc_number_format( $news->PB ) ?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		<?php } else {
			get_template_part( 'template-parts/content', 'none' );
		}
	}
	die();
}

/**
 * Render Menu Report 
 */
function renderMenu( $menuData, $response_GetDetailFinanceReportBySymbol = null, $level = 0 ) {
	if ( $menuData && $response_GetDetailFinanceReportBySymbol ) {
		foreach ( $menuData as $item ) {
			$Data = $response_GetDetailFinanceReportBySymbol->d[ $item['order'] ];
			$Array = (array) $Data;
			$Values = array_slice( $Array, 1, null, true );
			$Values = array_reverse( $Values, true );
			// Kiểm tra nếu $Values trống hoặc toàn bộ giá trị bên trong là 0
			if ( empty( $Values ) || array_sum( $Values ) == 0 ) {
				continue; // Bỏ qua item này nếu điều kiện thỏa mãn
			}
			?>
			<div
				class="<?php if ( ! empty( $item['children'] ) )
					echo 'collapse-item has-children' ?> relative after:absolute after:w-full after:h-full after:top-0 after:left-0 [&:nth-child(even)]:after:bg-[#EBF4FA] after:-z-[1] after:bg-white">
					<div
						class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-[30px]' : 'px-5' ?> py-4 flex 2xl:gap-x-10 gap-x-5 items-center text-xs ">
					<h3
						class="flex-1 font-bold flex items-baseline gap-1 cursor-pointer [&:not(.active)]:text-black text-primary-300 text-left min-w-[200px]">
						<?php
						if ( ! empty( $item['children'] ) ) {
							if ( ( $level === 0 ) ) {
								echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0 rotate-180' );
							} else {
								echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0' );
							}
						} ?>
						<?php echo $item['title'] ?>
					</h3>
					<?php
					$Values_chart = implode( ',', $Values );
					$lastTwoValues = array_slice( $Values, -2, 2, true );
					$dataColor = '#007bff';
					if ( count( $lastTwoValues ) === 2 ) {
						$valuesArray = array_values( $lastTwoValues ); // Chuyển thành mảng chỉ số liên tiếp
						if ( $valuesArray[1] > $valuesArray[0] ) {
							$dataColor = '#007bff'; // Màu xanh nếu số cuối lớn hơn
						} elseif ( $valuesArray[1] < $valuesArray[0] ) {
							$dataColor = '#A82323'; // Màu đỏ nếu số cuối nhỏ hơn
						}
					}
					foreach ( $Values as $key => $Val ) {
						?>
						<div
							class="min-w-[135px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[11%]' : 'max-w-[135px] break-words' ?>">
							<?php
							if ( is_numeric( $Val ) ) {
								echo bsc_number_format( $Val );
							}
							?>
						</div>
						<?php
					}
					?>
					<div
						class="min-w-[175px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[14%]' : 'max-w-[175px]' ?> h-10">
						<div class="collapse-item-chart" data-stock="<?php echo $Values_chart ?>" data-load="false"
							data-color="<?php echo $dataColor ?>">
						</div>
					</div>
				</div>
				<?php if ( ! empty( $item['children'] ) ) { ?>
					<div class="sub-collapse hidden text-xs upper-first"
						style="<?php echo ( $level === 0 ) ? 'display: block;' : '' ?>">
						<?php renderMenu( $item['children'], $response_GetDetailFinanceReportBySymbol, $level + 1 ); ?>
					</div>
				<?php } ?>
			</div>
			<?php
		}
	}
}


/**
 * Count Download Report
 */
add_action( 'wp_ajax_bsc_count_download', 'bsc_count_download_ajax' );
add_action( 'wp_ajax_nopriv_bsc_count_download', 'bsc_count_download_ajax' );

function bsc_count_download_ajax() {
	check_ajax_referer( 'common_nonce', 'security' );
	$id_report = isset( $_POST['id_report'] ) ? intval( $_POST['id_report'] ) : '';
	$url = get_field( 'cdapi_ip_address_default', 'option' ) . "IncrementReportDownloads?id=" . $id_report;

	// Khởi tạo cURL
	$ch = curl_init();

	// Cấu hình cURL
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "PATCH" ); // Phương thức PATCH
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // Trả về dữ liệu thay vì in ra
	curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 
		'Content-Type: application/json', // Header nếu cần (có thể bỏ nếu API không yêu cầu)
	] );

	// Nếu cần gửi dữ liệu trong body (JSON)
	$data = [ 
		"key" => "value"
	];
	curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );

	// Thực thi cURL
	$response = curl_exec( $ch );
	die();
}


// Xử lý đăng nhập qua AJAX trong WordPress
function ajax_login_khtc() {
	check_ajax_referer( 'common_nonce', 'security' );
	$username = strip_tags( trim( $_POST['username'] ) ?? '' );
	$password = strip_tags( trim( $_POST['password'] ) ?? '' );
	$current_url = strip_tags( trim( $_POST['current_url'] ) ?? '' );
	if ( empty( $username ) || empty( $password ) ) {
		wp_send_json_error( [ 'message' => __( 'Vui lòng nhập đầy đủ thông tin.', 'bsc' ) ] );
	}

	// API Endpoint của bạn
	$api_url = get_field( 'cdapi_ip_address_loginkhtcc', 'option' );

	$post_data = json_encode( [ 
		"username" => trim( $username ),
		"password" => trim( $password )
	] );

	$curl = curl_init();
	curl_setopt_array( $curl, [ 
		CURLOPT_URL => $api_url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 10,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $post_data,
		CURLOPT_HTTPHEADER => [ 
			'Content-Type: application/json'
		],
	] );

	$response = curl_exec( $curl );
	$error = curl_error( $curl );
	$http_code = curl_getinfo( $curl, CURLINFO_HTTP_CODE );
	curl_close( $curl );

	if ( $error ) {
		error_log( "API Error: " . $error . " | URL: " . $api_url . " | Data: " . $post_data );
		wp_send_json_error( [ 'message' => 'Lỗi kết nối API.' ] );
	}

	// Kiểm tra HTTP Code
	if ( $http_code < 200 || $http_code >= 300 ) {
		error_log( "API HTTP Error: " . $http_code . " | URL: " . $api_url . " | Response: " . $response );
		wp_send_json_error( [ 'message' => __( 'API trả về lỗi HTTP ', 'bsc' ) . $http_code ] );
	}

	// Giải mã JSON
	$response = json_decode( $response );
	if ( $response === null ) {
		wp_send_json_error( [ 'message' => __( 'API trả về dữ liệu không hợp lệ.', 'bsc' ) ] );
	}

	// Kiểm tra phản hồi API
	if ( ! empty( $response->d ) && $response->d === true ) {
		$access_token = 'login_khtc' . $username;
		$user_logged_in_key = 'user_logged_in_' . md5( $access_token );

		set_transient( $user_logged_in_key, true, 60 * MINUTE_IN_SECONDS );
		setcookie( 'access_token', $access_token, time() + 60 * 60, COOKIEPATH, COOKIE_DOMAIN );

		wp_send_json_success( [ 'message' => __( 'Đăng nhập thành công!', 'bsc' ), 'redirect' => $current_url ] );
	} else {
		wp_send_json_error( [ 'message' => $response->message ?? __( 'Đăng nhập thất bại.', 'bsc' ) ] );
	}
}

// Đăng ký action AJAX cho logged-in và guest users
add_action( 'wp_ajax_ajax_login_khtc', 'ajax_login_khtc' );
add_action( 'wp_ajax_nopriv_ajax_login_khtc', 'ajax_login_khtc' );
