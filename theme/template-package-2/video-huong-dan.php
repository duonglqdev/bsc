<?php

/**
Template Name: [Package-2] Video hướng dẫn
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="flex justify-between gap-10">
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Sổ tay giao dịch
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Biểu phí giao dịch
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Điều khoản chung
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-12 xl:mb-[100px] mb-20':'my-[50px]' ?>">
		<div class="container">
			<div class="lg:flex gap-[70px]">
				<div class="lg:w-80 lg:max-w-[35%] shrink-0">
					<div class="sticky lg:top-28 top-5 z-[9]">
						<ul
							class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report sidebar-base">
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Mở
									tài khoản giao dịch</a>
								<ul class="pl-5 hidden sub-menu w-full bg-white py-2">

									<li class="pl-5">
										<a href="#"
											class="active [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
											Mở tài khoản chứng khoán
										</a>
									</li>
									<li class="pl-5">
										<a href="#"
											class=" [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
											Bộ điều khoản và điều kiện
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Lưu ký chứng khoán
								</a>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hướng
									dẫn giao dịch
									chứng khoán</a>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hướng
									dẫn giao dịch tiền</a>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Dịch
									vụ tài chính</a>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hệ
									thống giao dịch</a>
							</li>
							<li>
								<a href="#"
									class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hệ
									thống bảo mật</a>
							</li>
							<li class="active">
								<a href="#"
									class="active flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Video
									hướng dẫn</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="flex-1">
					<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 gap-5 gap-x-6 gap-y-8':'gap-y-4' ?>">
						<?php
						for ($i = 0; $i < 10; $i++) {
						?>
							<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex flex-col':'grid grid-cols-2 gap-4 items-center' ?>">
								<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
									class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
										alt="" class="absolute w-full h-full inset-0 object-cover">
									<div
										class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] transition-all duration-500 hover:scale-110">
										<?php echo svgClass('play', '', '','w-[62px] h-[62px] w-[21px] h-[21px]') ?>
									</div>
								</a>
								<h4
									class="font-Helvetica line-clamp-2 font-bold transition-all duration-500 hover:text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-5':'text-xs' ?>">
									<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox>
										Hướng dẫn nộp tiền vào tài khoản chứng khoán
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
