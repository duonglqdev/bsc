<?php

/**
Template Name: [Package-2] Danh sách chuyên gia
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4 sticky top-0 z-[20] sticky-nav">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Thành phố Hà Nội
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Thành phố Hồ Chí Minh
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="xl:mt-[62px] mt-14 xl:mb-[100px] mb-14">
		<div class="container">
			<form class="flex gap-6 items-end mb-10" id="form-search-expert">
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Kinh nghiệm
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">1 Năm</option>
						<option value="">10 Năm</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Mệnh
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">Kim</option>
						<option value="">Mộc</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Trình độ học vấn
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">Thạc sĩ</option>
						<option value="">Cử nhân</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Tên chuyên gia
					</p>
					<input type="text" placeholder="<?php _e( 'Nhập họ tên chuyên gia', 'bsc' ) ?>"
						class="w-[273px] bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
				</div>
				<button type="button" id="search_expert"
					class="btn-base-yellow h-[50px] rounded-xl min-w-[178px]">
					<span class="block relative z-10">
						<?php _e( 'Tìm kiếm', 'bsc' ) ?>
					</span>
				</button>
				<button type="reset" id="btn-reload"
					class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</form>
			<div class="grid 2xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-x-5 gap-y-6">
				<div
					class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
					<div class="flex flex-col items-center">
						<div class="w-[120px] rounded-full overflow-hidden">
							<div class="relative w-full pt-[100%] group expert-img">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 108.png"
									alt=""
									class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
							</div>
						</div>
						<div class="-mt-5 expert-destiny">
							<div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
								style="background-color:#F5E0E2; color:#EF2D2E;">
								<div
									class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/fire 1.png"
										alt="" class="w-[12px] h-[12px] object-contain">
								</div>
								Mệnh hỏa
							</div>

						</div>
						<h4 class="font-bold text-xl mt-1 expert-name">
							Lê Hữu Phương
						</h4>
					</div>
					<div
						class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
						<div class="flex-1 pr-4  mr-4 border-r border-[#E9E9E9] max-w-[75%]">
							<p class="font-bold mb-[12px]">
								Thông tin liên hệ
							</p>
							<a href="tel:0962787858"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
								0962787858
							</a>
							<a href="mailto:phuonglh@bsc.com.vn"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
								phuonglh@bsc.com.vn
							</a>
						</div>
						<div class="max-w-[65px] flex-1 shrink-0 expert-qr">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Vector.png"
								alt=""
								class="w-full h-auto transition-all duration-500 hover:scale-105">
						</div>
					</div>
					<ul class="space-y-3 text-xs expert-info">
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Kinh nghiệm: <strong>15 năm</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trình độ học vấn: <strong>Thạc sĩ</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trường phái đầu tư: <strong>Đầu tư cơ bản, Phân tích kỹ
									thuật</strong>
							</p>
						</li>
						<div class="hidden">
							<li class="flex items-start gap-2">
								<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
								<p>
									Địa chỉ: <strong>Thành phố Hà Nội</strong>
								</p>
							</li>
						</div>
					</ul>
					<div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
						<a href=""
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Mở tài khoản
							</span>
						</a>
						<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
							class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Chi tiết chuyên gia
							</span>
						</button>

					</div>
					<div class="hidden expert-desc">
						<div class="space-y-6">
							<div class="intro">
								<p class="font-bold mb-2">
									Giới thiệu bản thân
								</p>
								<div class="text-xs">
									Tốt nghiệp loại xuất sắc chuyên ngành đầu tư chứng khoán trường
									Đại Học Ngoại Thương Hà Nội.Gắn bó trên 10 năm tại BSC,với kinh
									nghiệm gần 15 năm đầu tư trên thị trường chứng khoán Việt
									Nam.Cán bộ luôn đặt lợi ích của khách hàng lên hàng đầu,luôn
									luôn tìm tòi những mã CP cơ bản với chất lượng cao
								</div>
							</div>
							<div class="intro">
								<p class="font-bold mb-2">
									Kinh nghiệm
								</p>
								<div class="text-xs">
									Đã có 15 năm kinh nghiệm trong lĩnh vực đầu tư chứng khoán.Là
									cán bộ làm việc tại BSC trên 10 năm.Hiện tại đang quản lý danh
									mục cho hàng trăm khách hàng VIP tại BSC
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
					<div class="flex flex-col items-center">
						<div class="w-[120px] rounded-full overflow-hidden">
							<div class="relative w-full pt-[100%] group expert-img">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 109.png"
									alt=""
									class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
							</div>
						</div>
						<div class="-mt-5 expert-destiny">
							<div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
								style="background-color:#EFEFEF; color:#4F4F4F;">
								<div
									class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kim.png"
										alt="" class="w-[12px] h-[12px] object-contain">
								</div>
								Mệnh kim
							</div>

						</div>
						<h4 class="font-bold text-xl mt-1 expert-name">
							Nguyễn Ngọc Anh
						</h4>
					</div>
					<div
						class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
						<div class="flex-1 pr-4  mr-4 border-r border-[#E9E9E9] max-w-[75%]">
							<p class="font-bold mb-[12px]">
								Thông tin liên hệ
							</p>
							<a href="tel:0962787858"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
								0962787858
							</a>
							<a href="mailto:phuonglh@bsc.com.vn"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
								phuonglh@bsc.com.vn
							</a>
						</div>
						<div class="max-w-[65px] flex-1 shrink-0 expert-qr">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Vector.png"
								alt=""
								class="w-full h-auto transition-all duration-500 hover:scale-105">
						</div>
					</div>
					<ul class="space-y-3 text-xs expert-info">
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Kinh nghiệm: <strong>15 năm</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trình độ học vấn: <strong>Thạc sĩ</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trường phái đầu tư: <strong>Đầu tư cơ bản, Phân tích kỹ
									thuật</strong>
							</p>
						</li>
						<div class="hidden">
							<li class="flex items-start gap-2">
								<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
								<p>
									Địa chỉ: <strong>Thành phố Hà Nội</strong>
								</p>
							</li>
						</div>
					</ul>
					<div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
						<a href=""
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Mở tài khoản
							</span>
						</a>
						<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
							class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Chi tiết chuyên gia
							</span>
						</button>

					</div>
					<div class="hidden expert-desc">
						<div class="space-y-6">
							<div class="intro">
								<p class="font-bold mb-2">
									Giới thiệu bản thân
								</p>
								<div class="text-xs">
									Tốt nghiệp loại xuất sắc chuyên ngành đầu tư chứng khoán trường
									Đại Học Ngoại Thương Hà Nội.Gắn bó trên 10 năm tại BSC,với kinh
									nghiệm gần 15 năm đầu tư trên thị trường chứng khoán Việt
									Nam.Cán bộ luôn đặt lợi ích của khách hàng lên hàng đầu,luôn
									luôn tìm tòi những mã CP cơ bản với chất lượng cao
								</div>
							</div>
							<div class="intro">
								<p class="font-bold mb-2">
									Kinh nghiệm
								</p>
								<div class="text-xs">
									Đã có 15 năm kinh nghiệm trong lĩnh vực đầu tư chứng khoán.Là
									cán bộ làm việc tại BSC trên 10 năm.Hiện tại đang quản lý danh
									mục cho hàng trăm khách hàng VIP tại BSC
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
					<div class="flex flex-col items-center">
						<div class="w-[120px] rounded-full overflow-hidden">
							<div class="relative w-full pt-[100%] group expert-img">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 109.png"
									alt=""
									class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
							</div>
						</div>
						<div class="-mt-5 expert-destiny">
							<div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
								style="background-color:#B3EDC1; color:#30D158;">
								<div
									class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/moc.png"
										alt="" class="w-[12px] h-[12px] object-contain">
								</div>
								Mệnh mộc
							</div>

						</div>
						<h4 class="font-bold text-xl mt-1 expert-name">
							Nguyễn Thu Trang
						</h4>
					</div>
					<div
						class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
						<div class="flex-1 pr-4  mr-4 border-r border-[#E9E9E9] max-w-[75%]">
							<p class="font-bold mb-[12px]">
								Thông tin liên hệ
							</p>
							<a href="tel:0962787858"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
								0962787858
							</a>
							<a href="mailto:phuonglh@bsc.com.vn"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
								phuonglh@bsc.com.vn
							</a>
						</div>
						<div class="max-w-[65px] flex-1 shrink-0 expert-qr">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Vector.png"
								alt=""
								class="w-full h-auto transition-all duration-500 hover:scale-105">
						</div>
					</div>
					<ul class="space-y-3 text-xs expert-info">
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Kinh nghiệm: <strong>15 năm</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trình độ học vấn: <strong>Thạc sĩ</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trường phái đầu tư: <strong>Đầu tư cơ bản, Phân tích kỹ
									thuật</strong>
							</p>
						</li>
						<div class="hidden">
							<li class="flex items-start gap-2">
								<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
								<p>
									Địa chỉ: <strong>Thành phố Hà Nội</strong>
								</p>
							</li>
						</div>
					</ul>
					<div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
						<a href=""
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Mở tài khoản
							</span>
						</a>
						<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
							class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Chi tiết chuyên gia
							</span>
						</button>

					</div>
					<div class="hidden expert-desc">
						<div class="space-y-6">
							<div class="intro">
								<p class="font-bold mb-2">
									Giới thiệu bản thân
								</p>
								<div class="text-xs">
									Tốt nghiệp loại xuất sắc chuyên ngành đầu tư chứng khoán trường
									Đại Học Ngoại Thương Hà Nội.Gắn bó trên 10 năm tại BSC,với kinh
									nghiệm gần 15 năm đầu tư trên thị trường chứng khoán Việt
									Nam.Cán bộ luôn đặt lợi ích của khách hàng lên hàng đầu,luôn
									luôn tìm tòi những mã CP cơ bản với chất lượng cao
								</div>
							</div>
							<div class="intro">
								<p class="font-bold mb-2">
									Kinh nghiệm
								</p>
								<div class="text-xs">
									Đã có 15 năm kinh nghiệm trong lĩnh vực đầu tư chứng khoán.Là
									cán bộ làm việc tại BSC trên 10 năm.Hiện tại đang quản lý danh
									mục cho hàng trăm khách hàng VIP tại BSC
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
					<div class="flex flex-col items-center">
						<div class="w-[120px] rounded-full overflow-hidden">
							<div class="relative w-full pt-[100%] group expert-img">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 109.png"
									alt=""
									class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
							</div>
						</div>
						<div class="-mt-5 expert-destiny">
							<div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
								style="background-color:#EDC8AD; color:#913400;">
								<div
									class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tho.png"
										alt="" class="w-[12px] h-[12px] object-contain">
								</div>
								Mệnh thổ
							</div>

						</div>
						<h4 class="font-bold text-xl mt-1 expert-name">
							Nguyễn Út Ny
						</h4>
					</div>
					<div
						class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
						<div class="flex-1 pr-4  mr-4 border-r border-[#E9E9E9] max-w-[75%]">
							<p class="font-bold mb-[12px]">
								Thông tin liên hệ
							</p>
							<a href="tel:0962787858"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
								0962787858
							</a>
							<a href="mailto:phuonglh@bsc.com.vn"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
								phuonglh@bsc.com.vn
							</a>
						</div>
						<div class="max-w-[65px] flex-1 shrink-0 expert-qr">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Vector.png"
								alt=""
								class="w-full h-auto transition-all duration-500 hover:scale-105">
						</div>
					</div>
					<ul class="space-y-3 text-xs expert-info">
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Kinh nghiệm: <strong>15 năm</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trình độ học vấn: <strong>Thạc sĩ</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trường phái đầu tư: <strong>Đầu tư cơ bản, Phân tích kỹ
									thuật</strong>
							</p>
						</li>
						<div class="hidden">
							<li class="flex items-start gap-2">
								<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
								<p>
									Địa chỉ: <strong>Thành phố Hà Nội</strong>
								</p>
							</li>
						</div>
					</ul>
					<div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
						<a href=""
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Mở tài khoản
							</span>
						</a>
						<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
							class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Chi tiết chuyên gia
							</span>
						</button>

					</div>
					<div class="hidden expert-desc">
						<div class="space-y-6">
							<div class="intro">
								<p class="font-bold mb-2">
									Giới thiệu bản thân
								</p>
								<div class="text-xs">
									Tốt nghiệp loại xuất sắc chuyên ngành đầu tư chứng khoán trường
									Đại Học Ngoại Thương Hà Nội.Gắn bó trên 10 năm tại BSC,với kinh
									nghiệm gần 15 năm đầu tư trên thị trường chứng khoán Việt
									Nam.Cán bộ luôn đặt lợi ích của khách hàng lên hàng đầu,luôn
									luôn tìm tòi những mã CP cơ bản với chất lượng cao
								</div>
							</div>
							<div class="intro">
								<p class="font-bold mb-2">
									Kinh nghiệm
								</p>
								<div class="text-xs">
									Đã có 15 năm kinh nghiệm trong lĩnh vực đầu tư chứng khoán.Là
									cán bộ làm việc tại BSC trên 10 năm.Hiện tại đang quản lý danh
									mục cho hàng trăm khách hàng VIP tại BSC
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
					<div class="flex flex-col items-center">
						<div class="w-[120px] rounded-full overflow-hidden">
							<div class="relative w-full pt-[100%] group expert-img">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 109.png"
									alt=""
									class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
							</div>
						</div>
						<div class="-mt-5 expert-destiny">
							<div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
								style="background-color:#D7E9F3; color:#0678F4;">
								<div
									class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/thuy.png"
										alt="" class="w-[12px] h-[12px] object-contain">
								</div>
								Mệnh thủy
							</div>

						</div>
						<h4 class="font-bold text-xl mt-1 expert-name">
							Lê Hữu Phương
						</h4>
					</div>
					<div
						class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
						<div class="flex-1 pr-4  mr-4 border-r border-[#E9E9E9] max-w-[75%]">
							<p class="font-bold mb-[12px]">
								Thông tin liên hệ
							</p>
							<a href="tel:0962787858"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
								0962787858
							</a>
							<a href="mailto:phuonglh@bsc.com.vn"
								class="block relative pl-6 text-xs break-words">
								<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
								phuonglh@bsc.com.vn
							</a>
						</div>
						<div class="max-w-[65px] flex-1 shrink-0 expert-qr">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Vector.png"
								alt=""
								class="w-full h-auto transition-all duration-500 hover:scale-105">
						</div>
					</div>
					<ul class="space-y-3 text-xs expert-info">
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Kinh nghiệm: <strong>15 năm</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trình độ học vấn: <strong>Thạc sĩ</strong>
							</p>
						</li>
						<li class="flex items-start gap-2">
							<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
							<p>
								Trường phái đầu tư: <strong>Đầu tư cơ bản, Phân tích kỹ
									thuật</strong>
							</p>
						</li>
						<div class="hidden">
							<li class="flex items-start gap-2">
								<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
								<p>
									Địa chỉ: <strong>Thành phố Hà Nội</strong>
								</p>
							</li>
						</div>
					</ul>
					<div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
						<a href=""
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Mở tài khoản
							</span>
						</a>
						<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
							class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
							<span class="block relative z-10">
								Chi tiết chuyên gia
							</span>
						</button>

					</div>
					<div class="hidden expert-desc">
						<div class="space-y-6">
							<div class="intro">
								<p class="font-bold mb-2">
									Giới thiệu bản thân
								</p>
								<div class="text-xs">
									Tốt nghiệp loại xuất sắc chuyên ngành đầu tư chứng khoán trường
									Đại Học Ngoại Thương Hà Nội.Gắn bó trên 10 năm tại BSC,với kinh
									nghiệm gần 15 năm đầu tư trên thị trường chứng khoán Việt
									Nam.Cán bộ luôn đặt lợi ích của khách hàng lên hàng đầu,luôn
									luôn tìm tòi những mã CP cơ bản với chất lượng cao
								</div>
							</div>
							<div class="intro">
								<p class="font-bold mb-2">
									Kinh nghiệm
								</p>
								<div class="text-xs">
									Đã có 15 năm kinh nghiệm trong lĩnh vực đầu tư chứng khoán.Là
									cán bộ làm việc tại BSC trên 10 năm.Hiện tại đang quản lý danh
									mục cho hàng trăm khách hàng VIP tại BSC
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pagination-center">
				<?php get_template_part( 'components/pagination' ) ?>
			</div>
	</section>
</main>
<div id="expert-modal" tabindex="-1" aria-hidden="true"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-70">
	<div class="relative p-4 w-full max-w-[946px] max-h-full">

		<div class="relative bg-white rounded-2xl shadow overflow-hidden">

			<div class="flex items-center justify-between bg-primary-50 px-6 py-[18px]">
				<h3 class="text-2xl font-bold text-primary-300">
					<?php _e( 'CHI TIẾT CHUYÊN GIA TƯ VẤN', 'bsc' ) ?>
				</h3>
				<button type="button"
					class="text-primary-300 w-9 h-9 flex items-center justify-center rounded-full bg-white shadow-base"
					data-modal-toggle="expert-modal">
					<svg class="w-[14px] h-[14px]" aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
							stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<div class="p-6">
				<div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
					<div
						class="expert-modal-info lg:p-8 p-5 rounded-2xl bg-gradient-blue-50 font-Helvetica space-y-6">
						<div class="flex items-center">
							<div class="w-[100px] rounded-full overflow-hidden mr-4">
								<div class="relative w-full pt-[100%] group expert-img">

								</div>
							</div>
							<div class="space-y-2 mr-2">
								<h4 class="font-bold text-xl mt-1 expert-name">

								</h4>
								<div class="expert-destiny">


								</div>
							</div>
							<div class="w-[74px] shrink-0 ml-auto expert-qr bg-white p-1">

							</div>
						</div>
						<ul class="space-y-2 text-xs expert-info">

						</ul>
						<div class="expert-btn">

						</div>
					</div>
					<div
						class="expert-modal-desc lg:p-8 p-5 rounded-2xl bg-gradient-blue-50 font-Helvetica max-h-[446px] overflow-y-auto scroll-bar-custom expert-desc">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();