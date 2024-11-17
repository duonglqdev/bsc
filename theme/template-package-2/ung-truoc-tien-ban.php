<?php

/**
Template Name: [Package-2] Ứng trước tiền bán
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4 sticky top-0 z-[10] sticky-nav">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Giao dịch ký quỹ
					</a>
				</li>
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Ứng trước tiền bán
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="xl:py-[100px] py-20 relative">
		<div class="container">
			<div class="grid grid-cols-2 gap-9 items-center">
				<div class="col-span-1">
					<h2 class="heading-title mb-4">
						ỨNG TRƯỚC TIỀN BÁN
					</h2>
					<div class="text-primary-300 xl:text-2xl text-xl font-bold text-justify">
						Ứng trước tiền bán là dịch vụ BSC giúp khách hàng nhận tiền ngay sau khi
						khớp lệnh bán chứng khoán mà không cần chờ tiền bán về tài khoản như quy
						định hiện hành (T+2)
					</div>

				</div>
				<div class="col-span-1">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23517 (3).png"
						alt="" class="transition-all duration-500 hover:scale-105">
				</div>
			</div>
		</div>
		<div class="absolute top-0 right-0 pointer-events-none -z-1">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/before.png" alt="">
		</div>
	</section>

	<section class="xl:py-[97px] py-20 bg-gradient-blue-250">
		<div class="container">
			<h2 class="heading-title mb-10">
				CÁC HÌNH THỨC ỨNG TRƯỚC TIỀN BÁN
			</h2>
			<div class="grid lg:grid-cols-2 gap-5">
				<div
					class="rounded-2xl h-full bg-[#D4EDFF] lg:pt-[46px] pt-8 lg:pl-10 pl-8 pb-[19px] flex flex-col overflow-hidden group">
					<h4 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl ">
						Ứng trước tiền bán tự động 
					</h4>
					<ul
						class="list-icon space-y-4 font-Helvetica mb-[15px] lg:w-[520px] max-w-full">
						<li class="list-icon-item">
							Khách hàng sử dụng tiền bán mà không cần thực hiện thao tác ứng trước.
						</li>
						<li class="list-icon-item">
							Mặc định tính sức mua từ tiền bán chờ về cho tiểu khoản.
						</li>
					</ul>
					<div class="mt-auto">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/3d-representation-reselling-market 1.png"
							alt=""
							class="ml-auto transition-all duration-500 group-hover:scale-105">
					</div>
				</div>
				<div
					class="rounded-2xl h-full bg-[#D4EDFF] lg:pt-[46px] pt-8 lg:pl-10 pl-8 pb-[19px] flex flex-col overflow-hidden group">
					<h4 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
						Ứng trước tiền bán từng lần 
					</h4>
					<ul
						class="list-icon space-y-4 font-Helvetica mb-[15px] lg:w-[520px] max-w-full">
						<li class="list-icon-item">
							Thực hiện ứng trước theo yêu cầu từng lần của khách hàng.
						</li>

					</ul>
					<div class="mt-auto">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/3d-representation-reselling-market 1 (1).png"
							alt=""
							class="ml-auto transition-all duration-500 group-hover:scale-105">
					</div>
				</div>
			</div>

			<div class="mt-8 lg:grid lg:grid-cols-2 gap-5">
				<div class="lg:p-8 p-5 rounded-xl flex items-center justify-between bg-[#D8F1F3]">
					<div
						class="flex items-center gap-4 lg:text-2xl text-xl font-bold text-primary-300">
						<?php echo svg( 'note-1', '30' ) ?>
						Cách thức thực hiện
					</div>
					<a href=""
						class="text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica">
						Xem chi tiết
						<?php echo svg( 'arrow-btn', '12', '12' ) ?>
					</a>
				</div>
				<div class="lg:p-8 p-5 rounded-xl flex items-center justify-between bg-[#D8F1F3]">
					<div
						class="flex items-center gap-4 lg:text-2xl text-xl font-bold text-primary-300">
						<?php echo svg( 'note', '30' ) ?>
						Biểu lãi suất
					</div>
					<a href=""
						class="text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica">
						Xem chi tiết
						<?php echo svg( 'arrow-btn', '12', '12' ) ?>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="xl:my-[100px] my-20 relative">
		<div class="container">
			<div class="grid grid-cols-2 items-center">
				<div class="col-span-1 xl:-mr-[17px]">
					<div
						class="bg-gradient-blue-550 rounded-2xl shadow-base py-10 xl:px-[50px] px-10 relative z-10 lg:min-h-[402px] flex flex-col justify-center">
						<h2 class="heading-title mb-6">
							ĐĂNG KÝ DỊCH VỤ ỨNG TRƯỚC TIỀN BÁN TẠI BSC
						</h2>
						<div class="space-y-6 font-Helvetica">
							<div class="item">
								<div class="space-y-[6px]">
									<p>
										<a href=""
											class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
											Mở tài khoản
											<?php echo svg( 'arrow-btn', '12', '12' ) ?>
										</a>
									</p>
									<p>
										<a href=""
											class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
											Xem hướng dẫn
											<?php echo svg( 'arrow-btn', '12', '12' ) ?>
										</a>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-span-1 xl:-ml-[185px] lg:-ml-24">
					<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
						class="relative block pt-[59.64%] overflow-hidden rounded-2xl group after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23499 (1).png"
							alt=""
							class="absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105">
						<div
							class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
							<?php echo svgClass( 'play', '', '', 'lg:w-[80px] w-10' ) ?>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();