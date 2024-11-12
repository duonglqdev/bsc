<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bsc
 */

get_header();
?>
<main>
	<section class="py-[88px] bg-no-repeat bg-cover"
		style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/bg-search.svg)">
		<div class="container">
			<div class="text-center">
				<?php if ( function_exists( 'rank_math_the_breadcrumbs' ) )
					rank_math_the_breadcrumbs(); ?>
			</div>
			<h2 class="heading-title text-center mt-6 mb-8">
				<?php _e( 'BẠN MUỐN TÌM KIẾM ĐIỀU GÌ?', 'bsc' ) ?>
			</h2>
			<form action="<?php echo get_home_url() ?>"
				class="w-[660px] max-w-full py-4 px-6 gap-2 flex h-[58px] mx-auto bg-white rounded-lg overflow-hidden shadow-base">
				<?php echo svgpath( 'search', '24', '24', 'fill-[#4a556880]' ) ?>
				<input type="text" name="s"
					class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-paragraph placeholder:text-opacity-50"
					placeholder="<?php _e( 'Bạn muốn tìm kiếm...', 'bsc' ) ?>">
			</form>
		</div>
	</section>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="lg:flex gap-[70px] max-w-[1112px] mx-auto">
				<div class="lg:w-[290px]">
					<ul
						class="flex flex-col py-[15px] pr-[15px] rounded-[15px] space-y-3 shadow-base">
						<li>
							<a href=""
								class="active flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Tất cả
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Dịch vụ chứng khoán
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Ngân hàng đầu tư
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Trung tâm phân tích
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Quan hệ cổ đông
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Về BSC
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
						<li>
							<a href=""
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left hover:!text-white hover:!bg-primary-400 hover:!rounded-tr-xl hover:!rounded-br-xl [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-400 [&:not(.active)]:rounded-br-none rounded-br-xl [&:not(.active)]:rounded-tr-none rounded-tr-xl">
								Tin tức BSC
								<?php echo svg( 'arrow-right-tab' ) ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="lg:flex-1">
					<p class="mb-10 font-Helvetica">
						Tìm thấy 20 kết quả cho từ khóa: <span
							class="font-bold text-primary-300">“BSC”</span>
					</p>
					<ul class="font-Helvetica">
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									<span class="font-bold text-primary-300">BSC</span> công bố
									Website mới
								</a>
							</div>
						</li>
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									Về <span class="font-bold text-primary-300">BSC</span>
								</a>
							</div>
						</li>
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									Lễ ra mắt câu lạc bộ chạy bộ <span
										class="font-bold text-primary-300">BSC</span> HCM RUNNER
									CLUB
								</a>
								<p class="line-clamp-3 text-xs">
									BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
									chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
									chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
									chứng quyền có đảm bảo lớn nhất tại HOSE.
								</p>
							</div>
						</li>
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									Lễ ra mắt câu lạc bộ chạy bộ <span
										class="font-bold text-primary-300">BSC</span> HCM RUNNER
									CLUB
								</a>
								<p class="line-clamp-3 text-xs">
									BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
									chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
									chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
									chứng quyền có đảm bảo lớn nhất tại HOSE.
								</p>
							</div>
						</li>
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									Lễ ra mắt câu lạc bộ chạy bộ <span
										class="font-bold text-primary-300">BSC</span> HCM RUNNER
									CLUB
								</a>
								<p class="line-clamp-3 text-xs">
									BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
									chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
									chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
									chứng quyền có đảm bảo lớn nhất tại HOSE.
								</p>
							</div>
						</li>
						<li class="[&:not(:first-child)]:pt-6 pb-4 border-b border-[#C9CCD2]">
							<div class="space-y-4">
								<a href="" class="text-lg font-bold block">
									Lễ ra mắt câu lạc bộ chạy bộ <span
										class="font-bold text-primary-300">BSC</span> HCM RUNNER
									CLUB
								</a>
								<p class="line-clamp-3 text-xs">
									BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
									chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
									chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
									chứng quyền có đảm bảo lớn nhất tại HOSE.
								</p>
							</div>
						</li>
					</ul>
					<?php get_template_part( 'components/pagination' ) ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
