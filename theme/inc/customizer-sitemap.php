<?php
add_action( 'init', function () {
	$time_cache = 300;
	if ( strpos( $_SERVER['REQUEST_URI'], '/sitemap_index.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<sitemap>
				<loc><?php echo pll_home_url() ?>post-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>category-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>page-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>lich-thi-truong-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>co-phieu-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>danh-muc-khuyen-nghi-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>trach-nhiem-voi-cong-dong-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>chuong-trinh-khuyen-mai-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>bieu-phi-giao-dich-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>bao-cao-phan-tich-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>danh-muc-bao-cao-phan-tich-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>kien-thuc-dau-tu-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>danh-muc-kien-thuc-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>quan-he-co-dong-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>danh-muc-bao-cao-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>so-tay-giao-dich-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>danh-muc-so-tay-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
			<sitemap>
				<loc><?php echo pll_home_url() ?>tuyen-dung-sitemap.xml</loc>
				<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
			</sitemap>
		</sitemapindex>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/post-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$result = get_array_id_taxonomy( 'category' );
			if ( ! empty( $result ) ) {
				$id_api_list = implode( ',', array_column( $result, 'id_api' ) );
				$array_data_GetNews = array(
					'lang' => pll_current_language(),
					'groupid' => $id_api_list,
					'maxitem' => '100000',
					'index' => 1
				);
				$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews, $time_cache );
				if ( $response_GetNews && $response_GetNews->d ) {
					foreach ( $response_GetNews->d as $news ) {
						?>
						<url>
							<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?>
							</loc>
							<lastmod><?php echo $news->createddate ?></lastmod>
						</url>
					<?php }
				}
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/category-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
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
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/page-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$args = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);
			$filter_job = new WP_Query( $args );
			if ( $filter_job->have_posts() ) {
				while ( $filter_job->have_posts() ) :
					$filter_job->the_post();
					?>
					<url>
						<loc><?php the_permalink() ?>
						</loc>
						<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
					</url>
					<?php
				endwhile;
			}
			?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/lich-thi-truong-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$array_data_GetEvents = array(
				'lang' => pll_current_language(),
				'maxitem' => 100000,
				'index' => 1,
				'sortField' => 'ex_date'
			);
			$response_GetEvents = get_data_with_cache( 'GetEvents', $array_data_GetEvents );
			if ( $response_GetEvents ) {
				foreach ( $response_GetEvents->d as $GetEvents ) {
					?>
					<url>
						<loc><?php echo slug_calendar( $GetEvents->eventid ) ?>
						</loc>
						<lastmod><?php echo $GetEvents->exdate ?></lastmod>
					</url>
				<?php }
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/co-phieu-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$array_data = array(
				'lang' => pll_current_language(),
				'maxitem' => 100000,
			);
			$response = get_data_with_cache( 'GetInstrumentInfo', $array_data, $time_cache );
			if ( $response ) {
				foreach ( $response->d as $news ) {
					if ( $news->SYMBOL ) {
						?>
						<url>
							<loc><?php echo slug_co_phieu( $news->SYMBOL ) ?>
							</loc>
							<lastmod><?php echo date( 'Y-m-d' ) ?></lastmod>
						</url>
					<?php }
				}
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/danh-muc-khuyen-nghi-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
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
					'maxitem' => 100000,
				);
				$response = get_data_with_cache( 'GetReportsBySymbol', array_data: $array_data );
				if ( $response ) {
					foreach ( $response->d as $news ) {
						?>
						<url>
							<loc><?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ) ?>
							</loc>
							<lastmod> <?php echo $news->datetimepublished ?></lastmod>
						</url>
						<?php
					}
				}
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/trach-nhiem-voi-cong-dong-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
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
					'maxitem' => 100000,
				);
				$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews );
				if ( $response_GetNews && $response_GetNews->d ) {
					foreach ( $response_GetNews->d as $news ) {
						?>
						<url>
							<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?>
							</loc>
							<lastmod><?php echo $news->createddate ?></lastmod>
						</url>
						<?php
					}
				}
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/chuong-trinh-khuyen-mai-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
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
					'maxitem' => 100000,
				);
				$response_GetNews = get_data_with_cache( 'GetNews', $array_data_GetNews );
				if ( $response_GetNews && $response_GetNews->d ) {
					foreach ( $response_GetNews->d as $news ) {
						?>
						<url>
							<loc><?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ) ?>
							</loc>
							<lastmod><?php echo $news->createddate ?></lastmod>
						</url>
						<?php
					}
				}
			} ?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/bieu-phi-giao-dich-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$args = array(
				'post_type' => 'bieu-phi-giao-dich',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);
			$filter_job = new WP_Query( $args );
			if ( $filter_job->have_posts() ) {
				while ( $filter_job->have_posts() ) :
					$filter_job->the_post();
					?>
					<url>
						<loc><?php the_permalink() ?>
						</loc>
						<lastmod><?php echo get_the_modified_time( 'c' ) ?></lastmod>
					</url>
					<?php
				endwhile;
			}
			?>
		</urlset>
		<?php
		exit;
	} elseif ( strpos( $_SERVER['REQUEST_URI'], '/bao-cao-phan-tich-sitemap.xml' ) !== false ) {
		header( 'Content-Type: application/xml; charset=utf-8' );
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		?>
		<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
			xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
			xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
			<?php
			$result = get_array_id_taxonomy( 'danh-muc-bao-cao-phan-tich' );
			if ( ! empty( $result ) ) {
				$id_api_list = implode( ',', array_column( $result, 'id_api' ) );
				$array_data_GetNews = array(
					'lang' => pll_current_language(),
					'categoryid' => $id_api_list,
					'maxitem' => '100000',
					'index' => 1
				);
				$response = get_data_with_cache( 'GetReportsBySymbol', array_data: $array_data );
				if ( $response ) {
					foreach ( $response->d as $news ) {
						?>
						<url>
							<loc><?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ) ?>
							</loc>
							<lastmod> <?php echo $news->datetimepublished ?></lastmod>
						</url>
						<?php
					}
				}
			} ?>
		</urlset>
		<?php
		exit;
	}
} );