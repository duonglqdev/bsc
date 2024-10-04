<?php

/**
Template Name: Quan hệ cổ đông
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="lg:my-[100px] my-12">
		<div class="container">
			<h2 class="heading-title lg:mb-[42px] mb-9">
				Công ty Cổ phần chứng khoán BIDV
			</h2>
			<div class="flex md:flex-row flex-col md:gap-[38px] gap-8">
				<div class="md:max-w-80 w-full">
					<div
						class="bg-gradient-[#D1ECFF] lg:p-6 p-5 shadow-base space-y-8 rounded-2xl h-full">
						<div class="flex gap-6">
							<div
								class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
								<?php echo svgClass( 'icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9' ) ?>
							</div>
							<div class="flex flex-col">
								<h4
									class="font-bold lg:text-[40px] text-4xl uppercase leading-normal">
									BSI
								</h4>
								<p class="uppercase text-2xl text-paragraph">
									HOSE
								</p>

							</div>
						</div>
						<div class="flex-col gap-2">
							<div class="flex gap-[14px] data_number">
								<div class="lg:text-[40px] text-4xl font-bold">
									43.30
								</div>
								<div class="flex flex-col text-[#EB0]">
									<p>
										-0.20%
									</p>
									<p>
										-0.46%
									</p>
								</div>
							</div>
							<p class="time-update mt-1">
								Cập nhật lúc 14:45 UTC_7
							</p>

						</div>
						<div class="space-y-4">
							<div class="font-bold space-y-2">
								<p>
									Số lượng cổ phiếu đang lưu hành
								</p>
								<p class="text-lg">
									222.060.701
								</p>
							</div>
							<div class="font-bold space-y-2">
								<p>
									Khối lượng đang niêm yết
								</p>
								<p class="text-lg">
									223.060.701
								</p>
							</div>

						</div>
					</div>
				</div>
				<div class="flex-1 w-full">
					<picture>
						<source media="(max-width:767px)"
							srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chart_ls.svg">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chart_ls.svg"
							alt="" class="w-full h-auto">
					</picture>
				</div>
			</div>
		</div>
	</section>
	<section class="lg:my-[100px] my-12">
		<div class="container">
			<h2 class="heading-title text-center mb-10">
				CƠ CẤU CỔ ĐÔNG
			</h2>
			<div class="md:flex md:gap-8">
				<div class="flex flex-col gap-8">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tyle.svg"
						alt="" class="w-full">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ttcdl.svg"
						alt="" class="w-full">
				</div>
				<div class="flex-1 w-full overflow-x-auto">

					<div class="table_custom rounded-[10px] overflow-hidden">
						<div
							class="table_custom-header grid grid-cols-7 gap-5 bg-[#E6F2FA] font-bold lg:leading-loose">
							<div class="col-span-1 py-6 px-4 text-center">
								STT
							</div>
							<div class="col-span-2 py-6 px-4">
								Đối tượng
							</div>
							<div class="col-span-2 py-6 px-4">
								Số lượng cổ phiếu
							</div>
							<div class="col-span-2 py-6 px-4">
								Tỷ lệ sở hữu
							</div>
						</div>
						<div class="table_custom-body font-Helvetica">
							<div class="table_custom-item py-5 bg-[#D1ECFF]">
								<div class="grid grid-cols-7 gap-5 font-bold">
									<div class="col-span-1 lg:py-4 py-3 px-4 text-center">
										1
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Cổ đông lớn
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										194.011.186 
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										86,98% 
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Trong nước
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										115.923.897 
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										51,97% 
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Nước ngoài
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										78.087.289 
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										35,01%
									</div>
								</div>
							</div>
							<div class="table_custom-item py-5 bg-[#E6F2FA]">
								<div class="grid grid-cols-7 gap-5 font-bold">
									<div class="col-span-1 lg:py-4 py-3 px-4 text-center">
										2
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Cổ đông khác
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										29.049.515
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										13,02%
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Trong nước
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										18.240.574
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										8,18%
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Nước ngoài
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										10.808.941
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										4,84%
									</div>
								</div>
							</div>
							<div class="table_custom-item py-5 bg-[#D1ECFF]">
								<div class="grid grid-cols-7 gap-5 font-bold">
									<div class="col-span-1 lg:py-4 py-3 px-4 text-center">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Tổng cộng
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										223.060.701
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										100%
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Trong nước
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										134.164.471
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										60,15%
									</div>
								</div>
								<div class="grid grid-cols-7 gap-5">
									<div class="col-span-1 lg:py-4 py-3 px-4">

									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										Nước ngoài
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										88.896.230
									</div>
									<div class="col-span-2 lg:py-4 py-3 px-4">
										39,85%
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-right italic mt-4">
						*Tính tại thời điểm: 10/07/2024
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="lg:my-[100px] my-12">
		<div class="container">
			<h2 class="heading-title mb-10">
				TÀI LIỆU & BÁO CÁO
			</h2>
			<div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<ul class="shadow-base py-6 pr-4 rounded-lg bg-white scroll_nav">
							<li>
								<a href="#public_infomation"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Công
									bố thông tin</a>
							</li>
							<li>
								<a href="#shareholders"
									class="active flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
									Đại hội đồng cổ đông
								</a>
							</li>
							<li>
								<a href="#report_finance"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
									cáo tài chính</a>
							</li>
							<li>
								<a href="#annual_report"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
									cáo thường niên</a>
							</li>
							<li>
								<a href="#corporate_governance"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Quản
									trị doanh nghiệp</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="md:col-span-3 col-span-full">
					<div id="public_infomation">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="text-2xl font-bold">Công bố thông tin</h2>
							<a href=""
								class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-3 relative z-10">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
								</span>
							</a>
						</div>
						<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div
									class="news_service-item md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6">
									<div class="flex items-center">
										<div
											class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
											<p
												class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
												Thứ 2
											</p>
											<p
												class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
												16
												<span class="text-primary-300 text-[12px] font-medium">
													2022
												</span>
											</p>
										</div>
										<div class="md:ml-[30px] ml-5">
											<a href=""
												class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
												Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
												trả lãi, gốc trái phiếu mã BSI32301
											</a>
											<a href="" class="text-green font-medium block">
												Công bố thông tin
											</a>
										</div>
									</div>
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
					<div id="shareholders">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="text-2xl font-bold">Đại hội đồng cổ đông</h2>
							<a href=""
								class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-3 relative z-10">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
								</span>
							</a>
						</div>
						<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 3; $i++ )
							{
								?>
								<div
									class="news_service-item md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6">
									<div class="flex items-center">
										<div
											class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
											<p
												class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
												Thứ 2
											</p>
											<p
												class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
												16
												<span class="text-primary-300 text-[12px] font-medium">
													2022
												</span>
											</p>
										</div>
										<div class="md:ml-[30px] ml-5">
											<a href=""
												class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
												Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
												trả lãi, gốc trái phiếu mã BSI32301
											</a>
											<div class="line-clamp-2 text-paragraph mb-4">
												Ngày 25/3/2024, tại Geneva (Thụy Sĩ), Công ty Cổ phần
												Chứng
												khoán BIDV (BSC) và Edmond de Rothschild tổ chức lễ ký
												kết thỏa
												thuận liên doanh góp vốn nhằm triển khai thành lập công
												ty quản
												lý quỹ tại Việt Nam. Sau thỏa thuận, hai bên sẽ tiếp tục
												triển
												khai các thủ tục xin phép cơ quan chức năng tại Việt Nam
												để đưa
												công ty quản lý quỹ đi vào hoạt động.
											</div>
										</div>
									</div>
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
					<div id="report_finance">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="text-2xl font-bold">Báo cáo tài chính</h2>
							<a href=""
								class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-3 relative z-10">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
								</span>
							</a>
						</div>
						<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 3; $i++ )
							{
								?>
								<div
									class="news_service-item md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6">
									<div class="flex items-center">
										<div
											class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
											<p
												class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
												Thứ 2
											</p>
											<p
												class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
												16
												<span class="text-primary-300 text-[12px] font-medium">
													2022
												</span>
											</p>
										</div>
										<div class="md:ml-[30px] ml-5">
											<a href=""
												class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
												Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
												trả lãi, gốc trái phiếu mã BSI32301
											</a>
											<a href="" class="text-green font-medium block">
												Báo cáo tài chính
											</a>
										</div>
									</div>
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
					<div id="annual_report">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="text-2xl font-bold ">Báo cáo thường niên</h2>
							<a href=""
								class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-3 relative z-10">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
								</span>
							</a>
						</div>
						<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
							<div class="grid grid-cols-4 gap-5">
								<?php
								for ( $i = 0; $i < 4; $i++ )
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
					</div>
					<div id="corporate_governance">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="text-2xl font-bold">Quản trị doanh nghiệp</h2>
							<a href=""
								class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-3 relative z-10">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
								</span>
							</a>
						</div>
						<div class="space-y-6">
							<?php
							for ( $i = 0; $i < 3; $i++ )
							{
								?>
								<div
									class="news_service-item md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6">
									<div class="flex items-center">
										<div
											class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
											<p
												class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
												Thứ 2
											</p>
											<p
												class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
												16
												<span class="text-primary-300 text-[12px] font-medium">
													2022
												</span>
											</p>
										</div>
										<div class="md:ml-[30px] ml-5">
											<a href=""
												class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
												Điều lệ CTCP Chứng khoán BIDV
											</a>
											<div class="line-clamp-2 text-paragraph mb-4">
												Trung tâm Lưu ký Chứng khoán Việt Nam Chi nhánh tại TP.
												Hồ Chí Minh (CNVSD) thông báo về ngày đăng ký cuối cùng
												như sau:
											</div>
										</div>
									</div>
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
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();