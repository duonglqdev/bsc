<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bsc
 */

get_header();
$search = get_search_query();
$current_url = get_home_url();
if (isset($_GET['type_search'])) {
	$type_search = bsc_format_string($_GET['type_search'], 'all');
} else {
	$type_search = 'default';
}
?>
<main>
	<section class="py-[88px] bg-no-repeat bg-cover"
		style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/bg-search.svg)">
		<div class="container">
			<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
				<div class="text-center">
					<?php if (function_exists('rank_math_the_breadcrumbs'))
						rank_math_the_breadcrumbs(); ?>
				</div>
			<?php } ?>
			<h2
				class="heading-title text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-6 mb-8' : 'mb-6' ?>">
				<?php _e('BẠN MUỐN TÌM KIẾM ĐIỀU GÌ?', 'bsc') ?>
			</h2>
			<form action="<?php echo get_home_url() ?>" class="flex gap-3 justify-center form-search-result">
				<div
					class="flex items-center bg-white rounded-lg overflow-hidden shadow-base <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'h-[58px] w-[660px] max-w-[90%] gap-2 py-4 px-6 ' : 'h-12 flex-1 gap-4 py-3 px-4' ?>">
					<p class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-6 h-6' : 'w-5 h-5' ?>">
						<?php echo svgpath('search', '', '', 'fill-[#4a556880]') ?>
					</p>
					<input type="text" name="s"
						class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-paragraph placeholder:text-opacity-50 form-search-input p-0"
						placeholder="<?php _e('Bạn muốn tìm kiếm...', 'bsc') ?>" value="<?php echo $search ?>">
					<?php if ($type_search && $type_search != 'default') {
					?>
						<input type="hidden" name="type_search" value="<?php echo $type_search ?>">
					<?php
					} ?>

				</div>
				<a type="reset" href="<?php echo get_home_url() . '?s=' ?>"
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[58px] h-[58px]' : 'w-12 h-12' ?> shrink-0 rounded-lg flex items-center justify-center p-3 bg-white group">
					<?php echo svgClass('reload', '24', '24', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
				</a>
			</form>
		</div>
	</section>
	<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:[my-100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<div class="md:flex lg:gap-[70px] gap-6 max-w-[1112px] mx-auto">
				<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
					<div class="md:w-[290px] max-w-[33.333%] shrink-0">
						<ul
							class="flex flex-col py-[15px] pr-[15px] rounded-[15px] space-y-3 shadow-base sticky top-5 z-10">
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>"
									class="<?php if ($type_search == 'default')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Tất cả', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=page"
									class="<?php if ($type_search == 'page')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Trang', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=news"
									class="<?php if ($type_search == 'news')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Tin tức', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=cong_dong"
									class="<?php if ($type_search == 'cong_dong')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Trách nhiệm với cộng đồng', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=khuyen_mai"
									class="<?php if ($type_search == 'khuyen_mai')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Chương trình khuyến mãi', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=giao_dich"
									class="<?php if ($type_search == 'giao_dich')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Biểu phí giao dịch', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=bao_cao"
									class="<?php if ($type_search == 'bao_cao')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Báo cáo phân tích', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=kien_thuc"
									class="<?php if ($type_search == 'kien_thuc')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Kiến thức đầu tư', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=co_dong"
									class="<?php if ($type_search == 'co_dong')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Quan hệ cổ đông', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo $current_url ?>?s=<?php echo $search ?>&type_search=so_tay"
									class="<?php if ($type_search == 'so_tay')
												echo 'active' ?> flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
									<?php _e('Sổ tay giao dịch', 'bsc') ?>
									<?php echo svg('arrow-right-tab') ?>
								</a>
							</li>
						</ul>
					</div>

				<?php } ?>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'text-xs' ?>">
					<?php
					if (isset($_GET['posts_to_show'])) {
						$post_per_page = bsc_format_string($_GET['posts_to_show'], 'number');
					} else {
						$post_per_page = get_option('posts_per_page');
					}
					if (isset($_GET['page'])) {
						$paged = bsc_format_string($_GET['page'], 'number');
					} else {
						$paged = 1;
					}
					$post_count = $post_per_page * $paged;
					$total_post = 0;
					$time_cache = 300;
					$all_results = array();
					$current_total_post = 0;
					if (isset($_GET['s']) && trim($_GET['s']) === '') {
					} else {
						if ($type_search == 'default') {
							$args = array(
								'post_type' => 'any',
								'post_status' => 'publish',
								'posts_per_page' => $posts_per_page,
								's' => $search,
								'paged' => $paged,
							);
							$filter_job = new WP_Query($args);
							$current_total_post = $filter_job->post_count;
							$total_news = $filter_job->found_posts ?: 0;
							$total_post = $total_post + $total_news;
							$array_data_GetNews = array(
								'lang' => pll_current_language(),
								'title' => $search,
								'maxitem' => 1,
							);
							$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
							if ($response_GetNews) {
								if ($response_GetNews->totalrecord) {
									$total_GetNews = $response_GetNews->totalrecord;
									$total_post = $total_post + $total_GetNews;
								}
							}
							$array_data_GetReportsBySymbol = array(
								'lang' => pll_current_language(),
								'title' => $search,
								'maxitem' => 1,
							);
							$response_GetReportsBySymbol = get_data_with_cache('GetReportsBySymbol', $array_data_GetReportsBySymbol, $time_cache);
							if ($response_GetReportsBySymbol) {
								if ($response_GetReportsBySymbol->totalrecord) {
									$total_GetReportsBySymbol = $response_GetReportsBySymbol->totalrecord;
									$total_post = $total_post + $total_GetReportsBySymbol;
								}
							}
							if ($total_post > 0) {
								if ($filter_job->have_posts()) {
									while ($filter_job->have_posts()) :
										$filter_job->the_post();
										if (get_field('introduce')) {
											$check_body = get_field('introduce');
										} else {
											$check_body = get_the_content();
										}
										if (get_post_type() == 'video-huong-dan') {
											$all_results[] = array(
												'type' => 'video-huong-dan',
												'title' => get_the_title(),
												'permalink' => get_field('link_youtube'),
												'body' => bsc_get_text_excerpt($check_body, 300),
											);
										} else {
											$all_results[] = array(
												'type' => 'post',
												'title' => get_the_title(),
												'permalink' => get_permalink(),
												'body' => bsc_get_text_excerpt($check_body, 300),
											);
										}
									endwhile;
								}
								if ($current_total_post < $post_per_page) {
									$post_thieu_GetNews = $post_per_page - $current_total_post;
									if (($post_thieu_GetNews != $post_per_page) || ($current_total_post == 0)) {
										$index_GetNews = 1;
									} else {
										$index_GetNews = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page - $total_news + 1;
									}
									$array_data_GetNews = array(
										'lang' => pll_current_language(),
										'title' => $search,
										'maxitem' => $post_thieu_GetNews,
										'index' => $index_GetNews
									);
									$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
									if ($response_GetNews && $response_GetNews->d) {
										foreach ($response_GetNews->d as $news) {
											$all_results[] = array(
												'type' => 'news',
												'title' => htmlspecialchars($news->title),
												'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
												'body' => bsc_get_text_excerpt($news->description, 300),
											);
										}
									}
									if ($post_count > ($total_GetNews + $total_news)) {
										if (($post_count - ($total_GetNews + $total_news)) < $post_per_page) {
											$current_total_post_GetNews = $post_per_page - ($total_GetNews + $total_news) % $post_per_page;
										} else {
											$current_total_post_GetNews = 0;
										}
										$post_thieu_GetReportsBySymbol = $post_per_page - $current_total_post_GetNews;
										if ($post_thieu_GetReportsBySymbol != $post_per_page) {
											$index_GetReportsBySymbol = 1;
										} else {
											$index_GetReportsBySymbol = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page - ($total_GetNews + $total_news) + 1;
										}
										$array_data_GetReportsBySymbol = array(
											'lang' => pll_current_language(),
											'title' => $search,
											'maxitem' => $post_thieu_GetReportsBySymbol,
											'index' => $index_GetReportsBySymbol
										);
										$response_GetReportsBySymbol = get_data_with_cache('GetReportsBySymbol', $array_data_GetReportsBySymbol, $time_cache);
										if ($response_GetReportsBySymbol && $response_GetReportsBySymbol->d) {
											foreach ($response_GetReportsBySymbol->d as $news) {
												$all_results[] = array(
													'type' => 'news',
													'title' => htmlspecialchars($news->title),
													'permalink' => slug_report(htmlspecialchars($news->id), htmlspecialchars($news->title)),
												);
											}
										}
									}
								}
							}
						} elseif ($type_search == 'page') {
							$args = array(
								'post_type' => 'page',
								'post_status' => 'publish',
								'posts_per_page' => $posts_per_page,
								's' => $search,
								'paged' => $paged,
							);
							$filter_job = new WP_Query($args);
							$total_news = $filter_job->found_posts ?: 0;
							$total_post = $total_post + $total_news;
							if ($filter_job->have_posts()) {
								while ($filter_job->have_posts()) :
									$filter_job->the_post();
									$all_results[] = array(
										'type' => 'post',
										'title' => get_the_title(),
										'permalink' => get_permalink(),
									);
								endwhile;
							}
						} elseif ($type_search == 'news') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							$result = get_array_id_taxonomy('category');
							if (! empty($result)) {
								$id_api_list = implode(',', array_column($result, 'id_api'));
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'groupid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'cong_dong') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							if (get_field('cdtnvcd2_id_danh_muc', 'option')) {
								$id_api_list = get_field('cdtnvcd2_id_danh_muc', 'option');
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'groupid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'khuyen_mai') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							if (get_field('cdctkm1_id_danh_muc', 'option')) {
								$id_api_list = get_field('cdctkm1_id_danh_muc', 'option');
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'groupid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'giao_dich') {
							$args = array(
								'post_type' => 'bieu-phi-giao-dich',
								'post_status' => 'publish',
								'posts_per_page' => $posts_per_page,
								's' => $search,
								'paged' => $paged,
							);
							$filter_job = new WP_Query($args);
							$total_news = $filter_job->found_posts ?: 0;
							$total_post = $total_post + $total_news;
							if ($filter_job->have_posts()) {
								while ($filter_job->have_posts()) :
									$filter_job->the_post();
									$all_results[] = array(
										'type' => 'post',
										'title' => get_the_title(),
										'permalink' => get_permalink(),
									);
								endwhile;
							}
						} elseif ($type_search == 'bao_cao') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							$result = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
							if (! empty($result)) {
								$id_api_list = implode(',', array_column($result, 'id_api'));
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'categoryid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetReportsBySymbol', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_report(htmlspecialchars($news->id), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'kien_thuc') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							$result = get_array_id_taxonomy('danh-muc-kien-thuc');
							if (! empty($result)) {
								$id_api_list = implode(',', array_column($result, 'id_api'));
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'groupid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'co_dong') {
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
							} else {
								$index = 1;
							}
							$result = get_array_id_taxonomy('danh-muc-bao-cao');
							if (! empty($result)) {
								$id_api_list = implode(',', array_column($result, 'id_api'));
								$array_data_GetNews = array(
									'lang' => pll_current_language(),
									'title' => $search,
									'groupid' => $id_api_list,
									'maxitem' => $post_per_page,
									'index' => $index
								);
								$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
								if ($response_GetNews && $response_GetNews->d) {
									if ($response_GetNews->totalrecord) {
										$total_GetNews = $response_GetNews->totalrecord;
										$total_post = $total_post + $total_GetNews;
									}
									foreach ($response_GetNews->d as $news) {
										$all_results[] = array(
											'type' => 'news',
											'title' => htmlspecialchars($news->title),
											'permalink' => slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)),
											'body' => bsc_get_text_excerpt($news->description, 300),
										);
									}
								}
							}
						} elseif ($type_search == 'so_tay') {
							$args = array(
								'post_type' => 'so-tay-giao-dich',
								'post_status' => 'publish',
								'posts_per_page' => $posts_per_page,
								's' => $search,
								'paged' => $paged,
							);
							$filter_job = new WP_Query($args);
							$total_news = $filter_job->found_posts ?: 0;
							$total_post = $total_post + $total_news;
							if ($filter_job->have_posts()) {
								while ($filter_job->have_posts()) :
									$filter_job->the_post();
									$all_results[] = array(
										'type' => 'post',
										'title' => get_the_title(),
										'permalink' => get_permalink(),
									);
								endwhile;
							}
						}
					}
					$total_page = ceil($total_post / $post_per_page);
					?>
					<p
						class="font-Helvetica text-base <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
						<?php _e('Tìm thấy', 'bsc') ?> <?php echo number_format($total_post) ?>
						<?php _e('kết quả cho từ khóa', 'bsc') ?>: <span
							class="font-bold text-primary-300"><?php echo $search ?></span>
					</p>
					<?php if (! empty($all_results)) : ?>
						<ul class="font-Helvetica">
							<?php
							foreach ($all_results as $result) :
							?>
								<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
									<div
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-[12px]' ?>">
										<a href="<?php echo $result['permalink']; ?>" <?php if ($result['type'] == 'video-huong-dan')
																							echo 'data-fancybox' ?>
											class="font-bold block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-base' ?>">
											<?php
											if ($search == '') {
												echo $result['title'];
											} else {
												$highlighted_title = preg_replace_callback(
													'/(^|[^a-zA-Z0-9])(' . preg_quote($search, '/') . ')($|[^a-zA-Z0-9])/i',
													function ($matches) {
														return $matches[1] . '<span class="font-bold text-primary-300">' . $matches[2] . '</span>' . $matches[3];
													},
													$result['title']
												);
												echo $highlighted_title;
											}
											?>
										</a>
										<?php if ($result['body']) { ?>
											<p class="line-clamp-3 text-xs">
												<?php echo $result['body'] ?>
											</p>
										<?php } ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
						<?php get_template_part('components/pagination', '', array(
							'get' => 'api',
							'total_page' => $total_page,
							'url' => $current_url,
						)) ?>
					<?php
					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
