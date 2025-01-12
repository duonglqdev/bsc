<?php

/**
Template Name: [Package-2] Sổ tay giao dịch
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="bg-primary-50 sticky z-10 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-4 py-3 top-0' : 'py-[12px] top-[60px]' ?>">
		<div class="container">
			<ul
				class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between gap-10' : 'overflow-x-auto gap-4' ?>">
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class="active block text-center font-bold  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Sổ tay giao dịch
					</a>
				</li>
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class="block text-center font-bold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Biểu phí giao dịch
					</a>
				</li>
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class="block text-center font-bold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Điều khoản chung
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-12 xl:mb-[100px] mb-20' : 'my-[50px]' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-[70px]' : '' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 max-w-[35%] shrink-0' : 'relative' ?>">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
						<div
							class="sticky z-[9] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:top-28' : '' ?>">
							<ul
								class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report sidebar-base">
								<li class="active">
									<a href="#"
										class="active flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Mở
										tài khoản giao dịch</a>
									<ul class="pl-5 sub-menu w-full bg-white py-2">
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
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Video
										hướng dẫn</a>
								</li>
							</ul>

						</div>
					<?php else : ?>
						<div
							class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
							Công bố thông tin
							<?php echo svg( 'down-white', '20' ) ?>
						</div>

						<ul
							class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-white shadow-base p-2 prose-a:block rounded-lg text-xs sidebar-report ">
							<li class="active !rounded-xl">
								<a href="#"
									class="active text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Mở
									tài khoản giao dịch</a>

									<ul class="sub-menu w-full bg-white py-2 hidden">
										<li class="">
											<a href="#"
												class="active [&:not(.active)]:text-black text-primary-300 transition-all relative px-3 py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
												Mở tài khoản chứng khoán
											</a>
										</li>
										<li>
											<a href="#"
												class=" [&:not(.active)]:text-black text-primary-300 transition-all relative px-3 py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
												Bộ điều khoản và điều kiện
											</a>
										</li>
									</ul>
								
							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
									Lưu ký chứng khoán
								</a>
							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Hướng
									dẫn giao dịch
									chứng khoán</a>
							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Hướng
									dẫn giao dịch tiền</a>
							</li>
							
						</ul>
						<ul class="flex overflow-x-auto mt-6 gap-1.5">
							<li class="">
								<a href=""
									class="active [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Thông báo mời họp </a>
							</li>
							<li class="">
								<a href=""
									class=" [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Tài liệu họp </a>
							</li>
							<li class="">
								<a href=""
									class=" [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Biên bản và Nghị quyết </a>
							</li>
						</ul>
					<?php endif; ?>
				</div>

				<div
					class="flex-1 space-y-[80px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-6' ?>">
					<div class="item">
						<h2
							class="px-6 py-2 bg-[#E5F5FF] xl:text-2xl text-xl text-primary-300 mb-4 font-bold">
							Quầy giao dịch BSC/Điểm hỗ trợ liên kết BSC
						</h2>
						<div
							class="font-Helvetica content_prose prose-a:text-primary-300 prose-a:italic prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 prose-table:border-none prose-table:mt-10">
							<p>
								Để mở tài khoản chứng khoán BSC tại các điểm giao dịch, Quý khách
								vui lòng đến các <a href="">điểm giao dịch BSC</a> và <a
									href="">Điểm hỗ trợ liên kết BSC</a> gần
								nhất.
							</p>
							<p>
								Quý khách cần hoàn thiện bộ hồ sơ mở tài khoản như sau:
							</p>
							<p>
								<strong>Khách hàng trong nước:</strong>
							</p>
							<ul>
								<li>
									Cá nhân:
									<ol>
										<li>
											CMND/CCCD còn hiệu lực
										</li>
										<li>
											Hợp đồng mở tài khoản chứng khoán Cơ sở và Phái sinh
											(nếu Quý khách có nhu cầu)
										</li>
									</ol>
								</li>
							</ul>
							<p>
								<strong>Khách hàng nước ngoài:</strong>
							</p>
							<ul>
								<li>
									Cá nhân:
									<ol>
										<li>Hợp đồng mở tài khoản chứng khoán Cơ sở và Phái sinh
											(nếu Quý khách có nhu cầu)</li>
										<li>Bản sao các Hộ chiếu còn hiệu lực hoặc chứng thực cá
											nhân hợp pháp khác</li>
										<li>Bản sao Giấy cấp mã số giao dịch chứng khoán do VSD cấp
										</li>
										<li>Hồ sơ về việc mở tài khoản vốn đầu tư gián tiếp tại 01
											ngân hàng lưu ký được phép kinh doanh ngoại hối để thực
											hiện hoạt động đầu tư trên thị trường chứng khoán.</li>
									</ol>
								</li>
								<li>
									Tổ chức:
									<ol>
										<li>Hợp đồng mở tài khoản chứng khoán Cơ sở và Phái sinh
											(nếu Quý khách có nhu cầu)</li>
										<li>
											Bản sao Giấy cấp mã số giao dịch chứng khoán do VSD cấp
										</li>
										<li>
											Bản sao Hộ chiếu/chứng thực cá nhân hợp pháp khác còn
											hiệu lực của Người đại diện có thẩm quyền của Tổ chức
										</li>
										<li>
											Văn bản chứng minh người đại diện có thẩm quyền của Tổ
											chức
										</li>
										<li>
											Danh mục tài liệu nhận diện nhà đầu tư quy định tại Mẫu
											số 42 Nghị định 155/2020/NĐ-CP ngày 31/12/2020
										</li>
										<li>
											Hồ sơ về việc mở tài khoản vốn đầu tư gián tiếp tại 01
											ngân hàng lưu ký được phép kinh doanh ngoại hối để thực
											hiện hoạt động đầu tư trên thị trường chứng khoán.
										</li>
									</ol>
								</li>
							</ul>
						</div>

						<div
							class="note shadow-base rounded-[10px] p-6 mt-4 font-Helvetica flex gap-2 max-w-[857px]">
							<strong class="text-[#FF0017] shrink-0">
								*** Lưu ý :
							</strong>
							<div class="flex-1">
								Đối với tài khoản phái sinh, thời gian chờ kích hoạt là 01 ngày làm
								việc kể từ ngày BSC xác nhận hoàn tất mở tài khoản trên hệ thống.
							</div>
						</div>
					</div>
					<div class="item">
						<h2
							class="px-6 py-2 bg-[#E5F5FF] xl:text-2xl text-xl text-primary-300 mb-4 font-bold">
							Mở tài khoản trực tuyến eKYC
						</h2>
						<div
							class="font-Helvetica content_prose prose-a:text-primary-300 prose-a:italic prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 prose-table:border-none prose-table:mt-10">
							<p>
								<strong>Mở qua Website BSC</strong>
							</p>
							<ul>
								<li>
									<strong>Đối tượng áp dụng:</strong> KH cá nhân trong nước và cá
									nhân nước ngoài.
								</li>
								<li>
									<strong>Hồ sơ cần chuẩn bị:</strong> CCCD mã vạch/CCCD gắn
									chip/Thẻ căn cước hoặc
									Hộ chiếu (đối với KH nước ngoài) còn hiệu lực.
								</li>
								<li>
									<strong>Các bước thực hiện:</strong>
									<p>
										<span style="color:#235BA8"><strong>Bước
												1:</strong></span>Truy cập địa chỉ <a
											href="">https://www.bsc.com.vn/</a> và chọn Mở tài
										khoản.
									</p>
									<p>
										<span style="color:#235BA8"><strong>Bước
												2:</strong></span>Chọn loại hình KH cần mở để bắt
										đầu mở tài khoản.
									</p>
									<p>
										<span style="color:#235BA8"><strong>Bước
												3:</strong></span>Cung cấp hình ảnh giấy tờ định
										danh.
									</p>
									<p>
										<span style="color:#235BA8"><strong>Bước
												4:</strong></span>Kiểm tra và hoàn thiện thông tin
										đăng ký.
									</p>
									<p>
										<span style="color:#235BA8"><strong>Bước
												5:</strong></span>Xác thực OTP để hoàn tất đăng ký.
									</p>
								</li>
							</ul>
							<p>
								<strong>Mở qua ứng dụng BSC Smart Invest:</strong>
							</p>
							<ul>
								<li>
									<strong>Hồ sơ cần chuẩn bị:</strong> CCCD gắn chip/Thẻ căn cước
									còn hiệu lực
								</li>
								<li>
									<strong>Các bước thực hiện:</strong>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 1:</strong>
										</span>Tải ứng dụng tại đây <a
											href=""><strong>IOS/Android</strong></a>
									</p>
									<p><span style="color:#235BA8"><strong>Bước
												2:</strong></span>
										Truy cập ứng dụng BSC Smart Invest và chọn <strong>Mở tài
											khoản</strong>
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 3:</strong>
										</span>
										Chọn loại hình KH cần mở để bắt đầu mở tài khoản.
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 4:</strong>
										</span>
										Cung cấp các thông tin liên hệ cơ bản.
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 5:</strong>
										</span>
										Thực hiện định danh cá nhân bằng việc cung cấp hình ảnh
										CCCD/Thẻ căn cước, thông tin quét chip NFC trên giấy tờ,
										hình ảnh khuôn mặt.
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 6:</strong>
										</span>
										Kiểm tra và hoàn thiện thông tin cá nhân.
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 7:</strong>
										</span>
										Đăng ký các dịch vụ sử dụng tại BSC.
									</p>
									<p>
										<span style="color:#235BA8">
											<strong>Bước 8:</strong>
										</span>
										Ký hợp đồng điện tử.
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="item">
						<h2
							class="px-6 py-2 bg-[#E5F5FF] xl:text-2xl text-xl text-primary-300 mb-4 font-bold">
							Mở tài khoản qua hệ thống BIDV Smartbanking
						</h2>
						<div
							class="font-Helvetica content_prose prose-a:text-primary-300 prose-a:italic prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 prose-table:border-none prose-table:mt-10">
							<p>
								<span style="color:#235BA8">
									<strong>Bước 1:</strong>
								</span>Truy cập địa chỉ <a href="">https://www.bsc.com.vn/</a> và
								chọn
								Mở tài
								khoản hoặc tải ứng dụng tại <a
									href=""><strong>IOS/Android</strong></a>
							</p>
							<p>
								<span style="color:#235BA8"><strong>Bước
										2:</strong></span>
								Lựa chọn mục Quản lý đầu tư -> Mở tài khoản chứng khoán
							</p>
							<p>
								<span style="color:#235BA8">
									<strong>Bước 3:</strong>
								</span>
								Tiến hành mở tài khoản chứng khoán BSC.
							</p>
							<table style="width: 100%;">
								<tbody>
									<tr>
										<td style="width: 33.3333%;">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/step1.png"
												alt="">
										</td>
										<td style="width: 33.3333%;">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/step2.png"
												alt="">
										</td>
										<td style="width: 33.3333%;">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/step3.png"
												alt="">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'mt-[50px] mb-20' ?>">
		<div class="container">
			<div class="flex items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				<h2 class="heading-title">Ưu đãi từ BSC</h2>
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<a href="" class="inline-block px-5 py-2 btn-base-yellow">
						<span class="inline-flex items-center gap-2 relative z-10">
							<?php _e( 'Xem tất cả', 'bsc' ) ?>
							<?php echo svg( 'arrow-btn-2' ) ?>
						</span>
					</a>
				<?php } ?>
			</div>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-3 grid-cols-1 gap-[21px]':'block_slider block_slider-show-1 fli-dots-blue dot-30' ?>">
				<?php
				for ( $i = 0; $i < 3; $i++ )
				{
					?>
					<div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'block_slider-item w-full' ?>">
						<a href="" class="block w-full pt-[64.66%] overflow-hidden rounded-xl relative">
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image2.png"
								alt=""
								class="absolute w-full h-full inset-0 object-cover hover:scale-105 transition-all duration-500">
						</a>
						<h3
							class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:text-lg transition-all duration-500 hover:text-primary-300 mt-8':'mt-4' ?>">
							<a href="" class="line-clamp-2">
								“Giao dịch ngay - Quay là trúng” cùng BSC WebTrading
							</a>
						</h3>
						<div class="mt-6 flex items-center  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4':'text-xs font-Helvetica gap-2' ?>">
							<div class="inline-flex items-center gap-2">
								<?php echo svg( 'time' ) ?>
								<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
									Thời gian chương trình:
								<?php } ?>
							</div>
							<div class="font-medium">22/08/2024 - 22/10/2024</div>
						</div>
						<div class="mt-[14px]">
							<div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
								<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
									style="width:60%"></p>
							</div>
							<div class="mt-2 text-xs">
								Thời gian khuyến mãi còn <strong class="text-primary-300">20
									ngày</strong>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
