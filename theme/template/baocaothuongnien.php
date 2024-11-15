<?php

/**
Template Name: Báo cáo thường niên
 */

get_header();
?>
<main>
	<main>
		<?php get_template_part( 'components/page-banner' ) ?>
		<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
			<div class="container">
				<div class="lg:flex gap-[70px]">
					<div class="lg:w-80 lg:max-w-[35%]">
						<div class="sticky top-5 z-10">
							<ul class="shadow-base py-6 pr-4 rounded-lg bg-white ">
								<li>
									<a href="#"
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Công
										bố thông tin</a>
								</li>
								<li>
									<a href="#"
										class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
										Đại hội đồng cổ đông

									</a>
								</li>
								<li>
									<a href="#"
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
										cáo tài chính</a>
								</li>
								<li>
									<a href="#"
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
										cáo thường niên</a>
								</li>
								<li>
									<a href="#"
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Quản
										trị doanh nghiệp</a>
								</li>
							</ul>
							<div class="mt-12">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
									alt=""
									class="rounded-lg transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>
					<div class="flex-1">

						<div class="space-y-6">
							<div class="grid grid-cols-4 gap-5">
								<?php
								for ( $i = 0; $i < 8; $i++ )
								{
									?>
									<div class="flex flex-col">
										<a href=""
											class="block overflow-hidden w-full pt-[139%] rounded-lg group relative">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/report.png"
												alt=""
												class="absolute w-full h-full inset-0 object-cover group-hover:scale-105  transition-all duration-500">
										</a>
										<h3
											class="mt-4 mb-2 text-lg font-semibold leading-normal transition-all duration-500 hover:text-primary-300">
											<a href="" class="line-clamp-2">
												Báo cáo thường niên năm 2022
											</a>
										</h3>
										<a href="" download=""
											class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
											Tải xuống
											<?php echo svg( 'download' ) ?>
										</a>
									</div>
									<?php
								}
								?>

							</div>
						</div>
						<div class="mt-12">
							<?php get_template_part( 'components/pagination' ) ?>
						</div>
					</div>

				</div>
			</div>
		</section>
	</main>
</main>
<?php
get_footer();