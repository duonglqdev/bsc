<?php
add_action( 'init', function () {
	// Thêm rewrite rules cho sitemap index và các sitemap con
	$languages = pll_languages_list( 'slug' ); // Lấy tất cả các ngôn ngữ
	$default_language = pll_default_language(); // Lấy ngôn ngữ mặc định
	foreach ( $languages as $lang ) {
		$lang_prefix = $lang !== $default_language ? $lang . '/' : '';
		add_rewrite_rule( '^' . $lang_prefix . 'sitemap_index\.xml$', 'index.php?custom_sitemap=index', 'top' );
		add_rewrite_rule( '^' . $lang_prefix . '([^/]+)-sitemap\.xml$', 'index.php?custom_sitemap=$matches[1]', 'top' );
		add_rewrite_rule( '^' . $lang_prefix . '([^/]+)-sitemap-([0-9]+)\.xml$', 'index.php?custom_sitemap=$matches[1]&sitemap_page=$matches[2]', 'top' );
	}
} );

add_filter( 'query_vars', function ($query_vars) {
	$query_vars[] = 'custom_sitemap';
	$query_vars[] = 'sitemap_page'; // Đăng ký thêm biến sitemap_page
	return $query_vars;
} );

add_action( 'template_redirect', function () {
	$custom_sitemap = get_query_var( 'custom_sitemap' );
	$sitemap_page = get_query_var( 'sitemap_page' ) ?: 1;
	$post_per_page = get_field( 'cdc9_sitemap_number', 'option' ) ?: 200;
	$index = ( bsc_format_string( $sitemap_page, 'number' ) - 1 ) * $post_per_page + 1;
	$offset = ( bsc_format_string( $sitemap_page, 'number' ) - 1 ) * $post_per_page;
	$time_cache = 300;
	if ( $custom_sitemap != '' ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		if ( $custom_sitemap == 'index' ) {
			?>
			<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
				<?php
				$excluded_category_id = get_array_id_taxonomy_hide( 'category' );
				$terms = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => false,
					'parent' => 0,
					'exclude' => $excluded_category_id,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						$groupid = get_field( 'api_id_danh_muc', $term );
						if ( $groupid ) {
							$array_data = array(
								'lang' => pll_current_language(),
								'groupid' => $groupid,
								'maxitem' => $post_per_page,
								'index' => $index
							);
							$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
							if ( $response ) {
								if ( $response->totalrecord ) {
									$total_post = $response->totalrecord;
								} else {
									$total_post = $post_per_page;
								}
								$total_page = ceil( $total_post / $post_per_page );
								if ( $total_page > 1 ) {
									for ( $i = 1; $i <= $total_page; $i++ ) {
										?>
										<sitemap>
											<loc><?php echo pll_home_url() ?><?php echo $term->slug . '-sitemap-' . $i ?>.xml</loc>
											<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
										</sitemap>
										<?php
									}
								} else {
									?>
									<sitemap>
										<loc><?php echo pll_home_url() ?><?php echo $term->slug ?>-sitemap.xml</loc>
										<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
									</sitemap>
									<?php
								}
							}
						}
					endforeach;
				endif; ?>
				<sitemap>
					<loc><?php echo pll_home_url() ?>category-sitemap.xml</loc>
					<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
				</sitemap>
				<?php $total_post = wp_count_posts( 'page' )->publish;
				$num_sitemaps = ceil( $total_post / $post_per_page );
				if ( $num_sitemaps > 1 ) {
					for ( $i = 1; $i <= $total_page; $i++ ) { ?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>page-sitemap-<?php echo $i ?>.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
				} else {
					?>
					<sitemap>
						<loc><?php echo pll_home_url() ?>page-sitemap.xml</loc>
						<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
					</sitemap>
					<?php
				} ?>
				<?php
				$array_data_GetEvents = array(
					'lang' => pll_current_language(),
					'maxitem' => $post_per_page,
					'index' => 1,
					'sortField' => 'ex_date'
				);
				$response_GetEvents = get_data_with_cache( 'GetEvents', $array_data_GetEvents );
				if ( $response_GetEvents ) {
					if ( $response_GetEvents->totalrecord ) {
						$total_post = $response_GetEvents->totalrecord;
					} else {
						$total_post = $post_per_page;
					}
					$total_page = ceil( $total_post / $post_per_page );
					if ( $total_page > 1 ) {
						for ( $i = 1; $i <= $total_page; $i++ ) {
							?>
							<sitemap>
								<loc><?php echo pll_home_url() ?>lich-thi-truong-sitemap-<?php echo $i ?>.xml</loc>
								<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
							</sitemap>
							<?php
						}
					} else {
						?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>lich-thi-truong-sitemap.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
					?>
				<?php } ?>
				<?php
				$array_data = array(
					'lang' => pll_current_language(),
					'maxitem' => $post_per_page,
				);
				$response = get_data_with_cache( 'GetInstrumentInfo', $array_data, $time_cache );
				if ( $response ) {
					if ( $response->totalrecord ) {
						$total_post = $response->totalrecord;
					} else {
						$total_post = $post_per_page;
					}
					$total_page = ceil( $total_post / $post_per_page );
					if ( $total_page > 1 ) {
						for ( $i = 1; $i <= $total_page; $i++ ) {
							?>
							<sitemap>
								<loc><?php echo pll_home_url() ?>co-phieu-sitemap-<?php echo $i ?>.xml</loc>
								<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
							</sitemap>
							<?php
						}
					} else {
						?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>co-phieu-sitemap.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
					?>
				<?php } ?>
				<?php
				$categoryid_kn = get_field( 'cddmkn1_id_danh_muc', 'option' );
				if ( $categoryid_kn ) {
					$array_data = array(
						'lang' => pll_current_language(),
						'categoryid' => $categoryid_kn,
						'maxitem' => $post_per_page,
					);
					$response = get_data_with_cache( 'GetReportsBySymbol', $array_data );
					if ( $response ) {
						if ( $response->totalrecord ) {
							$total_post = $response->totalrecord;
						} else {
							$total_post = $post_per_page;
						}
						if ( $total_page > 1 ) {
							for ( $i = 1; $i <= $total_page; $i++ ) {
								?>
								<sitemap>
									<loc><?php echo pll_home_url() ?>danh-muc-khuyen-nghi-sitemap-<?php echo $i ?>.xml</loc>
									<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
								</sitemap>
								<?php
							}
						} else {
							?>
							<sitemap>
								<loc><?php echo pll_home_url() ?>danh-muc-khuyen-nghi-sitemap.xml</loc>
								<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
							</sitemap>
							<?php
						}
						?>
					<?php }
				} ?>
				<?php
				$categoryid_kn = get_field( 'cdtnvcd2_id_danh_muc', 'option' );
				if ( $categoryid_kn ) {
					$array_data = array(
						'lang' => pll_current_language(),
						'groupid' => $categoryid_kn,
						'maxitem' => $post_per_page,
					);
					$response_GetNews = get_data_with_cache( 'GetNews', $array_data );
					if ( $response_GetNews && $response_GetNews->d ) {
						if ( $response_GetNews->totalrecord ) {
							$total_post = $response_GetNews->totalrecord;
						} else {
							$total_post = $post_per_page;
						}
						$total_page = ceil( $total_post / $post_per_page );
						if ( $total_page > 1 ) {
							for ( $i = 1; $i <= $total_page; $i++ ) {
								?>
								<sitemap>
									<loc><?php echo pll_home_url() ?>trach-nhiem-voi-cong-dong-sitemap-<?php echo $i ?>.xml</loc>
									<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
								</sitemap>
								<?php
							}
						} else {
							?>
							<sitemap>
								<loc><?php echo pll_home_url() ?>trach-nhiem-voi-cong-dong-sitemap.xml</loc>
								<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
							</sitemap>
							<?php
						}
						?>
					<?php }
				} ?>
				<?php
				$categoryid_kn = get_field( 'cdctkm1_id_danh_muc', 'option' );
				if ( $categoryid_kn ) {
					$array_data = array(
						'lang' => pll_current_language(),
						'groupid' => $categoryid_kn,
						'maxitem' => $post_per_page,
					);
					$response_GetNews = get_data_with_cache( 'GetNews', $array_data );
					if ( $response_GetNews && $response_GetNews->d ) {
						if ( $response_GetNews->totalrecord ) {
							$total_post = $response_GetNews->totalrecord;
						} else {
							$total_post = $post_per_page;
						}
						$total_page = ceil( $total_post / $post_per_page );
						if ( $total_page > 1 ) {
							for ( $i = 1; $i <= $total_page; $i++ ) {
								?>
								<sitemap>
									<loc><?php echo pll_home_url() ?>chuong-trinh-khuyen-mai-sitemap-<?php echo $i ?>.xml</loc>
									<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
								</sitemap>
								<?php
							}
						} else {
							?>
							<sitemap>
								<loc><?php echo pll_home_url() ?>chuong-trinh-khuyen-mai-sitemap.xml</loc>
								<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
							</sitemap>
							<?php
						}
						?>
					<?php }
				} ?>
				<?php $total_post = wp_count_posts( 'bieu-phi-giao-dich' )->publish;
				$num_sitemaps = ceil( $total_post / $post_per_page );
				if ( $num_sitemaps > 1 ) {
					for ( $i = 1; $i <= $total_page; $i++ ) { ?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>bieu-phi-giao-dich-sitemap-<?php echo $i ?>.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
				} else {
					?>
					<sitemap>
						<loc><?php echo pll_home_url() ?>bieu-phi-giao-dich-sitemap.xml</loc>
						<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
					</sitemap>
					<?php
				} ?>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-bao-cao-phan-tich',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						$groupid = get_field( 'api_id_danh_muc', $term );
						if ( $groupid ) {
							$array_data = array(
								'lang' => pll_current_language(),
								'categoryid' => $groupid,
								'maxitem' => $post_per_page,
								'index' => $index
							);
							$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
							if ( $response ) {
								if ( $response->totalrecord ) {
									$total_post = $response->totalrecord;
								} else {
									$total_post = $post_per_page;
								}
								$total_page = ceil( $total_post / $post_per_page );
								if ( $total_page > 1 ) {
									for ( $i = 1; $i <= $total_page; $i++ ) {
										?>
										<sitemap>
											<loc><?php echo pll_home_url() ?><?php echo $term->slug . '-sitemap-' . $i ?>.xml</loc>
											<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
										</sitemap>
										<?php
									}
								} else {
									?>
									<sitemap>
										<loc><?php echo pll_home_url() ?><?php echo $term->slug ?>-sitemap.xml</loc>
										<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
									</sitemap>
									<?php
								}
							}
						}
					endforeach;
				endif; ?>
				<sitemap>
					<loc><?php echo pll_home_url() ?>danh-muc-bao-cao-phan-tich-sitemap.xml</loc>
					<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
				</sitemap>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-kien-thuc',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						$groupid = get_field( 'api_id_danh_muc', $term );
						if ( $groupid ) {
							$array_data = array(
								'lang' => pll_current_language(),
								'groupid' => $groupid,
								'maxitem' => $post_per_page,
								'index' => $index
							);
							$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
							if ( $response ) {
								if ( $response->totalrecord ) {
									$total_post = $response->totalrecord;
								} else {
									$total_post = $post_per_page;
								}
								$total_page = ceil( $total_post / $post_per_page );
								if ( $total_page > 1 ) {
									for ( $i = 1; $i <= $total_page; $i++ ) {
										?>
										<sitemap>
											<loc><?php echo pll_home_url() ?><?php echo $term->slug . '-sitemap-' . $i ?>.xml</loc>
											<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
										</sitemap>
										<?php
									}
								} else {
									?>
									<sitemap>
										<loc><?php echo pll_home_url() ?><?php echo $term->slug ?>-sitemap.xml</loc>
										<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
									</sitemap>
									<?php
								}
							}
						}
					endforeach;
				endif; ?>
				<sitemap>
					<loc><?php echo pll_home_url() ?>danh-muc-kien-thuc-sitemap.xml</loc>
					<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
				</sitemap>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-bao-cao',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						$groupid = get_field( 'api_id_danh_muc', $term );
						if ( $groupid ) {
							$array_data = array(
								'lang' => pll_current_language(),
								'groupid' => $groupid,
								'maxitem' => $post_per_page,
								'index' => $index
							);
							$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
							if ( $response ) {
								if ( $response->totalrecord ) {
									$total_post = $response->totalrecord;
								} else {
									$total_post = $post_per_page;
								}
								$total_page = ceil( $total_post / $post_per_page );
								if ( $total_page > 1 ) {
									for ( $i = 1; $i <= $total_page; $i++ ) {
										?>
										<sitemap>
											<loc><?php echo pll_home_url() ?><?php echo $term->slug . '-sitemap-' . $i ?>.xml</loc>
											<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
										</sitemap>
										<?php
									}
								} else {
									?>
									<sitemap>
										<loc><?php echo pll_home_url() ?><?php echo $term->slug ?>-sitemap.xml</loc>
										<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
									</sitemap>
									<?php
								}
							}
						}
					endforeach;
				endif; ?>
				<sitemap>
					<loc><?php echo pll_home_url() ?>danh-muc-bao-cao-sitemap.xml</loc>
					<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
				</sitemap>
				<?php $total_post = wp_count_posts( 'so-tay-giao-dich' )->publish;
				$num_sitemaps = ceil( $total_post / $post_per_page );
				if ( $num_sitemaps > 1 ) {
					for ( $i = 1; $i <= $total_page; $i++ ) { ?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>so-tay-giao-dich-sitemap-<?php echo $i ?>.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
				} else {
					?>
					<sitemap>
						<loc><?php echo pll_home_url() ?>so-tay-giao-dich-sitemap.xml</loc>
						<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
					</sitemap>
					<?php
				} ?>
				<?php $total_post = wp_count_posts( 'tuyen-dung' )->publish;
				$num_sitemaps = ceil( $total_post / $post_per_page );
				if ( $num_sitemaps > 1 ) {
					for ( $i = 1; $i <= $total_page; $i++ ) { ?>
						<sitemap>
							<loc><?php echo pll_home_url() ?>tuyen-dung-sitemap-<?php echo $i ?>.xml</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</sitemap>
						<?php
					}
				} else {
					?>
					<sitemap>
						<loc><?php echo pll_home_url() ?>tuyen-dung-sitemap.xml</loc>
						<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
					</sitemap>
					<?php
				} ?>
			</sitemapindex>
			<?php
			exit;
		} else {
			if ( $custom_sitemap == 'category' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$excluded_category_id = get_array_id_taxonomy_hide( 'category' );
					$terms_with_api_id = get_array_id_taxonomy( 'category' );
					if ( ! empty( $terms_with_api_id ) ) {
						foreach ( $terms_with_api_id as $term_data ) {
							$term = $term_data['object'];
							if ( ! in_array( $term->term_id, $excluded_category_id, true ) ) {
								?>
								<url>
									<loc><?php echo esc_url( get_term_link( $term ) ); ?></loc>
									<lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
								</url>
								<?php
							}
						}
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'page' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$args = array(
						'post_type' => 'page',
						'post_status' => 'publish',
						'posts_per_page' => $post_per_page,
						'offset' => $offset,
					);
					$filter_job = new WP_Query( $args );
					if ( $filter_job->have_posts() ) {
						while ( $filter_job->have_posts() ) :
							$filter_job->the_post();
							?>
							<url>
								<loc><?php the_permalink() ?></loc>
								<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
							</url>
							<?php
						endwhile;
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'lich-thi-truong' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$array_data_GetEvents = array(
						'lang' => pll_current_language(),
						'maxitem' => $post_per_page,
						'index' => $index,
						'sortField' => 'ex_date'
					);
					$response_GetEvents = get_data_with_cache( 'GetEvents', $array_data_GetEvents );
					if ( $response_GetEvents ) {
						foreach ( $response_GetEvents->d as $GetEvents ) {
							$date = $GetEvents->exdate;
							if ( ! empty( $date ) ) {
								$dt = new DateTime( $date );
								$only_date = $dt->format( 'Y-m-d' );
							} else {
								$only_date = date( 'Y-m-d' );
							}
							?>
							<url>
								<loc><?php echo slug_calendar( $GetEvents->eventid ) ?></loc>
								<lastmod><?php echo $only_date ?></lastmod>
							</url>
						<?php }
					} ?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'co-phieu' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$array_data = array(
						'lang' => pll_current_language(),
						'maxitem' => $post_per_page,
						'index' => $index,
					);
					$response = get_data_with_cache( 'GetInstrumentInfo', $array_data, $time_cache );
					if ( $response ) {
						foreach ( $response->d as $news ) {
							if ( $news->SYMBOL ) {
								?>
								<url>
									<loc><?php echo slug_co_phieu( $news->SYMBOL ) ?></loc>
									<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
								</url>
							<?php }
						}
					} ?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'danh-muc-khuyen-nghi' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$categoryid_kn = get_field( 'cddmkn1_id_danh_muc', 'option' );
					if ( $categoryid_kn ) {
						$array_data = array(
							'lang' => pll_current_language(),
							'categoryid' => $categoryid_kn,
							'maxitem' => $post_per_page,
							'index' => $index,
						);
						$response = get_data_with_cache( 'GetReportsBySymbol', $array_data );
						if ( $response ) {
							foreach ( $response->d as $news ) {
								$date = $news->datetimepublished;
								if ( ! empty( $date ) ) {
									$dt = new DateTime( $date );
									$only_date = $dt->format( 'Y-m-d' );
								} else {
									$only_date = date( 'Y-m-d' );
								}
								?>
								<url>
									<loc><?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ) ?></loc>
									<lastmod> <?php echo $only_date ?></lastmod>
								</url>
								<?php
							}
						}
					} ?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'trach-nhiem-voi-cong-dong' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$categoryid_kn = get_field( 'cdtnvcd2_id_danh_muc', 'option' );
					if ( $categoryid_kn ) {
						$array_data = array(
							'lang' => pll_current_language(),
							'groupid' => $categoryid_kn,
							'maxitem' => $post_per_page,
							'index' => $index,
						);
						$response_GetNews = get_data_with_cache( 'GetNews', $array_data );
						if ( $response_GetNews && $response_GetNews->d ) {
							foreach ( $response_GetNews->d as $news ) {
								$date = $news->createddate;
								if ( ! empty( $date ) ) {
									$dt = new DateTime( $date );
									$only_date = $dt->format( 'Y-m-d' );
								} else {
									$only_date = date( 'Y-m-d' );
								}
								?>
								<url>
									<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
									<lastmod><?php echo $only_date ?></lastmod>
								</url>
								<?php
							}
						}
					} ?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'chuong-trinh-khuyen-mai' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$categoryid_kn = get_field( 'cdctkm1_id_danh_muc', 'option' );
					if ( $categoryid_kn ) {
						$array_data = array(
							'lang' => pll_current_language(),
							'groupid' => $categoryid_kn,
							'maxitem' => $post_per_page,
							'index' => $index,
						);
						$response_GetNews = get_data_with_cache( 'GetNews', $array_data );
						if ( $response_GetNews && $response_GetNews->d ) {
							foreach ( $response_GetNews->d as $news ) {
								$date = $news->createddate;
								if ( ! empty( $date ) ) {
									$dt = new DateTime( $date );
									$only_date = $dt->format( 'Y-m-d' );
								} else {
									$only_date = date( 'Y-m-d' );
								}
								?>
								<url>
									<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
									<lastmod><?php echo $only_date ?></lastmod>
								</url>
								<?php
							}
						}
					} ?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'bieu-phi-giao-dich' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$args = array(
						'post_type' => 'bieu-phi-giao-dich',
						'post_status' => 'publish',
						'posts_per_page' => $post_per_page,
						'offset' => $offset,
					);
					$filter_job = new WP_Query( $args );
					if ( $filter_job->have_posts() ) {
						while ( $filter_job->have_posts() ) :
							$filter_job->the_post();
							?>
							<url>
								<loc><?php the_permalink() ?></loc>
								<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
							</url>
							<?php
						endwhile;
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'danh-muc-bao-cao-phan-tich' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$excluded_category_id = get_array_id_taxonomy_hide( 'danh-muc-bao-cao-phan-tich' );
					$terms_with_api_id = get_array_id_taxonomy( 'danh-muc-bao-cao-phan-tich' );
					if ( ! empty( $terms_with_api_id ) ) {
						foreach ( $terms_with_api_id as $term_data ) {
							$term = $term_data['object'];
							if ( ! in_array( $term->term_id, $excluded_category_id, true ) ) {
								?>
								<url>
									<loc><?php echo esc_url( get_term_link( $term ) ); ?></loc>
									<lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
								</url>
								<?php
							}
						}
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'danh-muc-kien-thuc' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$excluded_category_id = get_array_id_taxonomy_hide( 'danh-muc-kien-thuc' );
					$terms_with_api_id = get_array_id_taxonomy( 'danh-muc-kien-thuc' );
					if ( ! empty( $terms_with_api_id ) ) {
						foreach ( $terms_with_api_id as $term_data ) {
							$term = $term_data['object'];
							if ( ! in_array( $term->term_id, $excluded_category_id, true ) ) {
								?>
								<url>
									<loc><?php echo esc_url( get_term_link( $term ) ); ?></loc>
									<lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
								</url>
								<?php
							}
						}
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'danh-muc-bao-cao' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$excluded_category_id = get_array_id_taxonomy_hide( 'danh-muc-bao-cao' );
					$terms_with_api_id = get_array_id_taxonomy( 'danh-muc-bao-cao' );
					if ( ! empty( $terms_with_api_id ) ) {
						foreach ( $terms_with_api_id as $term_data ) {
							$term = $term_data['object'];
							if ( ! in_array( $term->term_id, $excluded_category_id, true ) ) {
								?>
								<url>
									<loc><?php echo esc_url( get_term_link( $term ) ); ?></loc>
									<lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
								</url>
								<?php
							}
						}
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'so-tay-giao-dich' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$args = array(
						'post_type' => 'so-tay-giao-dich',
						'post_status' => 'publish',
						'posts_per_page' => $post_per_page,
						'offset' => $offset,
					);
					$filter_job = new WP_Query( $args );
					if ( $filter_job->have_posts() ) {
						while ( $filter_job->have_posts() ) :
							$filter_job->the_post();
							?>
							<url>
								<loc><?php the_permalink() ?></loc>
								<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
							</url>
							<?php
						endwhile;
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'tuyen-dung' ) {
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$args = array(
						'post_type' => 'tuyen-dung',
						'post_status' => 'publish',
						'posts_per_page' => $post_per_page,
						'offset' => $offset,
					);
					$filter_job = new WP_Query( $args );
					if ( $filter_job->have_posts() ) {
						while ( $filter_job->have_posts() ) :
							$filter_job->the_post();
							?>
							<url>
								<loc><?php the_permalink() ?></loc>
								<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
							</url>
							<?php
						endwhile;
					}
					?>
				</urlset>
				<?php
				exit;
			} elseif ( $custom_sitemap == 'news' ) {
				if ( get_field( 'cdc9_sitemap_post_new', 'option' ) ) {
					$post_per_page = get_field( 'cdc9_sitemap_number_news', 'option' ) ?: 10;
					$groupid = get_field( 'cdc9_sitemap_post_new', 'option' );
					?>
					<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
						xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
						xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
						xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
						<?php
						$array_data = array(
							'lang' => pll_current_language(),
							'groupid' => $groupid,
							'maxitem' => $post_per_page,
							'index' => $index,
						);
						$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
						if ( $response ) {
							foreach ( $response->d as $news ) {
								$date = $news->createddate;
								if ( ! empty( $date ) ) {
									$dt = new DateTime( $date );
									$only_date = $dt->format( 'Y-m-d' );
								} else {
									$only_date = date( 'Y-m-d' );
								}
								?>
								<url>
									<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
									<lastmod><?php echo $only_date ?></lastmod>
								</url>
								<?php
							}
						} ?>
					</urlset>
					<?php
					exit;
				}
			} elseif ( $custom_sitemap == 'reports' ) {
				$post_per_page = get_field( 'cdc9_sitemap_number_news', 'option' ) ?: 10;
				?>
				<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
					xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
					xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
					xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
					<?php
					$array_data = array(
						'lang' => pll_current_language(),
						'maxitem' => $post_per_page,
						'index' => $index,
					);
					$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
					if ( $response ) {
						foreach ( $response->d as $news ) {
							$date = $news->datetimepublished;
							if ( ! empty( $date ) ) {
								$dt = new DateTime( $date );
								$only_date = $dt->format( 'Y-m-d' );
							} else {
								$only_date = date( 'Y-m-d' );
							}
							?>
							<url>
								<loc><?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ) ?></loc>
								<lastmod> <?php echo $only_date ?></lastmod>
							</url>
							<?php
						}
					} ?>
				</urlset>
				<?php
				exit;
			} else {
				$excluded_category_id = get_array_id_taxonomy_hide( 'category' );
				$terms = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => false,
					'parent' => 0,
					'exclude' => $excluded_category_id,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						if ( $custom_sitemap == $term->slug ) {
							?>
							<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
								xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
								xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
								xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
								<?php
								$result = get_array_id_taxonomy( 'category' );
								if ( ! empty( $result ) ) {
									$groupid = get_field( 'api_id_danh_muc', $term );
									if ( $groupid ) {
										$array_data_GetNews = array(
											'lang' => pll_current_language(),
											'groupid' => $groupid,
											'maxitem' => $post_per_page,
											'index' => $index
										);
										$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews, $time_cache );
										if ( $response_GetNews && $response_GetNews->d ) {
											foreach ( $response_GetNews->d as $news ) {
												$date = $news->createddate;
												if ( ! empty( $date ) ) {
													$dt = new DateTime( $date );
													$only_date = $dt->format( 'Y-m-d' );
												} else {
													$only_date = date( 'Y-m-d' );
												}
												?>
												<url>
													<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
													<lastmod><?php echo $only_date ?></lastmod>
												</url>
											<?php }
										}
									}
								} ?>
							</urlset>
							<?php
							exit;
						}
					endforeach;
				endif;
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-bao-cao-phan-tich',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						if ( $custom_sitemap == $term->slug ) {
							if ( $custom_sitemap = 'bao-cao-phan-tich' ) {
								?>
								<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
									xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
									xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
									xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
									<?php
									$result = get_array_id_taxonomy( 'danh-muc-bao-cao-phan-tich' );
									if ( ! empty( $result ) ) {
										$groupid = get_field( 'api_id_danh_muc', $term );
										if ( $groupid ) {
											$array_data_GetNews = array(
												'lang' => pll_current_language(),
												'categoryid' => $groupid,
												'maxitem' => $post_per_page,
												'index' => $index
											);
											$response = get_data_with_cache( 'GetReportsBySymbol', $array_data_GetNews );
											if ( $response ) {
												foreach ( $response->d as $news ) {
													$date = $news->datetimepublished;
													if ( ! empty( $date ) ) {
														$dt = new DateTime( $date );
														$only_date = $dt->format( 'Y-m-d' );
													} else {
														$only_date = date( 'Y-m-d' );
													}
													?>
													<url>
														<loc><?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ) ?></loc>
														<lastmod> <?php echo $only_date ?></lastmod>
													</url>
													<?php
												}
											}
										}
									} ?>
								</urlset>
								<?php
								exit;
							}
						}
					endforeach;
				endif;
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-kien-thuc',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						if ( $custom_sitemap == $terms->slug ) {
							?>
							<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
								xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
								xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
								xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
								<?php
								$result = get_array_id_taxonomy( 'danh-muc-kien-thuc' );
								if ( ! empty( $result ) ) {
									$groupid = get_field( 'api_id_danh_muc', $term );
									if ( $groupid ) {
										$array_data_GetNews = array(
											'lang' => pll_current_language(),
											'groupid' => $groupid,
											'maxitem' => $post_per_page,
											'index' => $index
										);
										$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews, $time_cache );
										if ( $response_GetNews && $response_GetNews->d ) {
											foreach ( $response_GetNews->d as $news ) {
												$date = $news->createddate;
												if ( ! empty( $date ) ) {
													$dt = new DateTime( $date );
													$only_date = $dt->format( 'Y-m-d' );
												} else {
													$only_date = date( 'Y-m-d' );
												}
												?>
												<url>
													<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
													<lastmod><?php echo $only_date ?></lastmod>
												</url>
											<?php }
										}
									}
								} ?>
							</urlset>
							<?php
							exit;
						}
					endforeach;
				endif;
				$terms = get_terms( array(
					'taxonomy' => 'danh-muc-bao-cao',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
					foreach ( $terms as $term ) :
						if ( $custom_sitemap == $terms->slug ) {
							?>
							<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
								xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
								xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
								xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
								<?php
								$result = get_array_id_taxonomy( 'danh-muc-bao-cao' );
								if ( ! empty( $result ) ) {
									$groupid = get_field( 'api_id_danh_muc', $term );
									if ( $groupid ) {
										$array_data_GetNews = array(
											'lang' => pll_current_language(),
											'groupid' => $groupid,
											'maxitem' => $post_per_page,
											'index' => $index
										);
										$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews, $time_cache );
										if ( $response_GetNews && $response_GetNews->d ) {
											foreach ( $response_GetNews->d as $news ) {
												$date = $news->createddate;
												if ( ! empty( $date ) ) {
													$dt = new DateTime( $date );
													$only_date = $dt->format( 'Y-m-d' );
												} else {
													$only_date = date( 'Y-m-d' );
												}
												?>
												<url>
													<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?></loc>
													<lastmod><?php echo $only_date ?></lastmod>
												</url>
											<?php }
										}
									}
								} ?>
							</urlset>
							<?php
							exit;
						}
					endforeach;
				endif;
			}
		}
	}
} );

