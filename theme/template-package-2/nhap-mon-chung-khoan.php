<?php

/**
Template Name: [Package-2] Nhập môn chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="lg:mb-[100px] mb-20 mt-12">
		<div class="container">
			<div class="lg:flex 2xl:gap-[70px] gap-12">
				<div class="lg:w-[320px]">
					<div class="sticky top-5 z-10">
						<ul
							class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2 scroll_nav">
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Blog kiến thức đầu tư
								</a>
							</li>
							<li>
								<a href=""
									class="active flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Nhập môn chứng khoán
								</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Chuyển động chứng khoán
								</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Bắt sóng thị trường
								</a>
							</li>

						</ul>
						<div class="mt-12">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
								alt=""
								class="rounded-lg transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
				<div class="lg:flex-1">
					<div class="grid md:grid-cols-2 grid-cols-1 gap-5 gap-x-6 gap-y-8">
						<?php
						for ($i = 0; $i < 10; $i++) {
						?>
							<div class="flex flex-col">
								<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
									class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
										alt="" class="absolute w-full h-full inset-0 object-cover">
									<div
										class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
										<?php echo svg('play', '62', '62') ?>
									</div>
								</a>
								<h4
									class="font-Helvetica line-clamp-2 font-bold mt-5 transition-all duration-500 hover:text-green">
									<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
										data-fancybox>
										CHUYỂN ĐỘNG CHỨNG KHOÁN #1| TIỀM NĂNG TTCK VIỆT NAM KHI ĐƯỢC
										NÂNG HẠNG?
									</a>
								</h4>
							</div>
						<?php
						}
						?>
					</div>
					<?php get_template_part('components/pagination') ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
