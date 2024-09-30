<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsc
 */

?>
<footer class="bg-gradient-blue md:py-9 py-6 text-white font-Helvetica">
	<div class="container">
		<div
			class="flex lg:justify-between justify-center items-center lg:flex-row flex-col gap-4 pb-6 mb-10 border-b border-[#f3f3f3] border-opacity-50">
			<div class="flex items-center gap-x-4 text-white  font-normal">
				<?php echo svg( 'phone' ) ?>
				<p>TỔNG ĐÀI ĐẶT LỆNH: HN : (024) 3926 4660 | HCM: (028) 3821 8889</p>
			</div>
			<div class="flex items-center gap-x-2 text-white">
				<a href="">
					<?php echo svg( 'zalo', '30', '30' ) ?>
				</a>
				<a href="">
					<?php echo svg( 'facebook', '40', '40' ) ?>
				</a>
				<a href="">
					<?php echo svg( 'youtube', '40', '40' ) ?>
				</a>
			</div>
		</div>
		<div
			class="grid grid-cols-8 2xl:gap-12 lg:gap-10 gap-5 mb-10 pb-10 border-b border-[#f3f3f3] border-opacity-50">
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<a href="" class="max-w-[116px] block mb-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-ft.png"
						alt="">
				</a>
				<p>
					Công ty cổ phần chứng khoán BIDV (BSC) được thành lập ngày 18/11/1999, là một
					trong những công ty chứng khoán uy tín hàng đầu tại Việt Nam, chuyên cung cấp
					các dịch vụ tài chính và sản phẩm đầu tư cho các nhà đầu tư tổ chức và cá nhân,
					các quỹ và ngân hàng đầu tư trong - ngoài nước.
				</p>
			</div>
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<ul class="space-y-4">
					<li class="flex gap-x-4">
						<?php echo svgClass( 'map', '24', '24', 'shrink-0' ) ?>
						<p>
							<strong>Trụ sở chính:</strong>
							Tầng 8,9 Tòa nhà Thái Holdings, 210 Đường Trần Quang Khải, Hoàn Kiếm, Hà
							Nội.
						</p>
					</li>
					<li class="flex gap-x-4">
						<?php echo svgClass( 'phone', '24', '24', 'shrink-0' ) ?>
						<p>
							Tel: (024) 3935 2722 | Fax: (024) 2220 0669
						</p>
					</li>
					<li class="flex gap-x-4">
						<?php echo svgClass( 'map', '24', '24', 'shrink-0' ) ?>
						<p>
							<strong>Chi nhánh:</strong>
							Tầng 4, Tầng 9 Tòa nhà President Place, Số 93 Đường Nguyễn Du, Phường
							Bến Nghé, Quận 1,
							Thành phố Hồ Chí Minh
						</p>
					</li>
					<li class="flex gap-x-4">
						<?php echo svgClass( 'phone', '24', '24', 'shrink-0' ) ?>
						<p>
							Tel: (028) 3821 8885 | Fax: (028) 3821 8879
						</p>
					</li>
					<li class="flex gap-x-4">
						<?php echo svgClass( 'email' ) ?>
						<a href="services@bsc.com.vn" class="hover:text-yellow-100 transition-all">
							Email: services@bsc.com.vn
						</a>
					</li>
					<li class="flex gap-x-4 text-yellow-100 transition-all hover:text-green">
						<?php echo svg( 'map' ) ?>
						<a href="" class="flex items-center uppercase font-bold font-body gap-x-2">
							Mạng lưới
							<?php echo svg( 'arrow-right' ) ?>
						</a>
					</li>
				</ul>
			</div>
			<div class="lg:col-span-2 col-span-full">
				<p class="font-bold text-xs uppercase mb-4">
					TẢI ỨNG DỤNG BSC SMART INVEST TRÊN
				</p>
				<div class="flex gap-6">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/qr.png"
						alt="" class="md:w-[114px] md:max-w-[40%]">
					<div class="flex flex-col gap-4">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chplay.png"
							alt="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ios.png"
							alt="">
					</div>
				</div>
				<div class="mt-6">
					<p>© 2023 Copyright</p>
					<p>Công ty Cổ phần Chứng khoán BIDV</p>
				</div>
			</div>
		</div>

		<div class="grid lg:grid-cols-9 md:grid-cols-12 gap-5">
			<div class="lg:col-span-2 md:col-span-6 space-y-4 footer-item">
				<p class="font-bold uppercase text-yellow-100">CHỨNG KHOÁN BIDV</p>
				<ul class="space-y-4 font-bold">
					<li><a href="">Về chúng tôi</a></li>
					<li><a href="">Quan hệ cổ đông </a></li>
					<li><a href="">Cơ hội nghề nghiệp </a></li>
					<li><a href="">Tin tức</a></li>
				</ul>
			</div>
			<div class="lg:col-span-2 md:col-span-6 space-y-4 footer-item">
				<p class="font-bold uppercase text-yellow-100">HỖ TRỢ KHÁCH HÀNG </p>
				<ul class="space-y-4 font-bold">
					<li><a href="">Biểu phí</a></li>
					<li><a href="">Biểu lãi suất</a></li>
					<li><a href="">Hướng dẫn giao dịch</a></li>
					<li><a href="">Câu hỏi thường gặp</a></li>
				</ul>
			</div>
			<div class="lg:col-span-2 md:col-span-6 space-y-4 footer-item">
				<p class="font-bold uppercase text-yellow-100">HỆ THỐNG</p>
				<ul class="space-y-4 font-bold">
					<li><a href="">Web Trading </a></li>
					<li><a href="">Smart Invest </a></li>
					<li><a href="">Bảng giá chứng khoán</a></li>
				</ul>
			</div>
			<div class="lg:col-span-3 md:col-span-6 space-y-4">
				<p class="font-bold uppercase text-yellow-100">Đăng ký nhận tin tức mới nhất của
					chúng tôi</p>
				<p>
					Luôn cập nhật xu hướng thị trường và đổi mới, hiện tại và trong tương lai.
				</p>
				<div class="form_newsletter">
						<?php echo svg( 'mail' ) ?>
						<input type="text" placeholder="Nhập email của bạn">
						<button type="submit" class="inline-block px-6 py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white leading-tight"><span class="relative z-10">Đăng ký</span></button>
				</div>
			</div>
		</div>

	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svgClass( 'back-top', '20', '20', 'm-auto h-full' ) ?>
</div>
<?php wp_footer(); ?>

</body>

</html>