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
?>
<main>
	<section class="py-[88px] bg-no-repeat bg-cover"
		style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/bg-search.svg)">
		<div class="container">
			<div class="text-center">
				<?php if (function_exists('rank_math_the_breadcrumbs'))
					rank_math_the_breadcrumbs(); ?>
			</div>
			<h2 class="heading-title text-center mt-6 mb-8">
				<?php _e('BẠN MUỐN TÌM KIẾM ĐIỀU GÌ?', 'bsc') ?>
			</h2>
			<form action="<?php echo get_home_url() ?>"
				class="w-[660px] max-w-full py-4 px-6 gap-2 flex h-[58px] mx-auto bg-white rounded-lg overflow-hidden shadow-base">
				<?php echo svgpath('search', '24', '24', 'fill-[#4a556880]') ?>
				<input type="text" name="s"
					class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-paragraph placeholder:text-opacity-50"
					placeholder="<?php _e('Bạn muốn tìm kiếm...', 'bsc') ?>" value="<?php echo $search ?>">
			</form>
		</div>
	</section>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="lg:flex gap-[70px] max-w-[1112px] mx-auto">
				<div class="lg:w-[290px]">
					<?php
					$current_url = get_home_url() ?>
					<ul
						class="flex flex-col py-[15px] pr-[15px] rounded-[15px] space-y-3 shadow-base">
						<li>
							<a href=""
								class="active flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Tất cả', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Tin tức BSC', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Trách nhiệm với cộng đồng', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Chương trình khuyến mãi', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Biểu phí giao dịch', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Báo cáo phân tích', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Kiến thức đầu tư', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Quan hệ cổ đông', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								<?php _e('Sổ tay giao dịch', 'bsc') ?>
								<?php echo svg('arrow-right-tab') ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="lg:flex-1">
					<?php
					if (isset($_GET['posts_to_show'])) {
						$post_per_page = $_GET['posts_to_show'];
					} else {
						$post_per_page = get_option('posts_per_page');
					}
					if (isset($_GET['page'])) {
						$paged = $_GET['page'];
					} else {
						$paged = 1;
					}
					$post_count = $post_per_page * $paged;
					$args = array(
						'post_type' => 'any',
						'post_status' => 'publish',
						'posts_per_page' => $posts_per_page,
						's' => $search,
						'paged' => $paged,
					);
					$filter_job = new WP_Query($args);
					$current_total_post = $filter_job->post_count;
					$total_post = 0;
					$total_news = $filter_job->found_posts ?: 0;
					$total_post = $total_post + $total_news;
					$time_cache = 300;
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
					$total_page = ceil($total_post / $post_per_page);
					?>
					<p class="mb-10 font-Helvetica">
						<?php _e('Tìm thấy', 'bsc') ?> <?php echo $total_post ?> <?php _e('kết quả cho từ khóa', 'bsc') ?>: <span
							class="font-bold text-primary-300"><?php echo  $search ?></span>
					</p>
					<?php
					$all_results = array();
					if ($total_post > 0) {
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
						if ($current_total_post < $post_per_page) {
							$post_thieu_GetNews  = $post_per_page - $current_total_post;
							if ($post_thieu_GetNews != $post_per_page) {
								$index_GetNews = 1;
							} else {
								$index_GetNews =  ($_GET['page'] - 1) * $post_per_page - $total_news + 1;
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
									);
								}
							}
							if ($post_count > ($total_GetNews + $total_news)) {
								if (($post_count - ($total_GetNews + $total_news)) < $post_per_page) {
									$current_total_post_GetNews = $post_per_page - ($total_GetNews + $total_news) % $post_per_page;
								} else {
									$current_total_post_GetNews = 0;
								}
								$post_thieu_GetReportsBySymbol  = $post_per_page - $current_total_post_GetNews;
								if ($post_thieu_GetReportsBySymbol != $post_per_page) {
									$index_GetReportsBySymbol = 1;
								} else {
									$index_GetReportsBySymbol =  ($_GET['page'] - 1) * $post_per_page - ($total_GetNews + $total_news) + 1;
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
					?>
					<?php if (!empty($all_results)) : ?>
						<ul class="font-Helvetica">
							<?php
							foreach ($all_results as $result) :
							?>
								<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
									<div class="space-y-4">
										<a href="<?php echo $result['permalink']; ?>" class="text-lg font-bold block">
											<?php
											$highlighted_title = preg_replace_callback(
												'/(^|[^a-zA-Z0-9])' . preg_quote($search, '/') . '($|[^a-zA-Z0-9])/i',
												function ($matches) {
													return $matches[1] . '<span class="font-bold text-primary-300">' . $matches[0] . '</span>' . $matches[2];
												},
												$result['title']
											);
											echo $highlighted_title;

											?>
										</a>
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
