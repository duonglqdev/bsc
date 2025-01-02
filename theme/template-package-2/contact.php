<?php

/**
Template Name: [Package-2] Liên hệ
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="contact_content <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'my-16' : 'my-[50px]' ?>">
		<div class="container">
			<div
				class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-10' : 'grid-cols-1 gap-6' ?>">
				<div
					class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'col-span-1 max-w-[640px]' : 'order-2' ?>">
					<div class="relative w-full pt-[71.25%] overflow-hidden rounded-[10px]">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
					</div>
				</div>
				<div
					class=" font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'col-span-1' : 'order-1' ?>">
					<h2
						class="font-bold text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl mb-5' : 'mb-4 text-lg' ?>">
						Nếu quý khách hàng cần sự hỗ trợ, <br>
						vui lòng liên hệ với BSC qua các kênh sau:
					</h2>
					<div
						class="prose-strong:inline-flex prose-strong:font-medium prose-strong:gap-3 prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-ul:list-disc  prose-a:text-primary-300 prose-strong:mr-1 content-contact <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-ul:pl-7 prose-ul:mt-2 prose-ul:mb-5 prose-p:mb-5 prose-strong:items-center' : 'text-xs prose-ul:pl-5 prose-ul:mt-2 prose-ul:mb-4 prose-p:mb-4 prose-strong:before:-translate-y-[1px] prose-strong:items-baseline' ?>">
						<?php the_content() ?>
					</div>
					<!-- <div class="max-w-[511px]">
						<h2 class="heading-title mb-4">
							LIÊN HỆ
						</h2>
						<div class="font-Helvetica mb-6">
							Nếu Quý cổ đông cần sự hỗ trợ vui lòng liên hệ với Bộ phận Quan hệ nhà đầu
							tư để
							được giải đáp các khó khăn, vướng mắc về các thông tin liên quan tới cổ
							phiếu
							BSI
						</div>
						<ul class="space-y-4">
							<li class="flex gap-[12px]">
								<p class="w-6 h-6 shrink-0">
									<?php echo svg( 'e-mail', '24', '24' ) ?>
								</p>
								<p>
									<strong>Email:</strong>
									<a href="mailto:ir@bsc.com.vn ">
										ir@bsc.com.vn
									</a>
								</p>
							</li>
							<li class="flex gap-[12px]">
								<p class="w-6 h-6 shrink-0">
									<?php echo svg( 'holding', '24', '24' ) ?>
								</p>
								<p>
									<strong>Trụ sở chính:</strong>
									Tầng 8,9 Tòa nhà Thái Holdings, 210 Đường Trần Quang Khải, Hoàn
									Kiếm, Hà
									Nội.
								</p>
							</li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<h2
				class="font-bold text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl mb-8' : 'text-lg mb-5' ?>">
				Danh sách điểm hỗ trợ
			</h2>
			<div
				class="gap-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 flex items-center' : 'mb-4 grid grid-cols-2' ?>">
				<div class="space-y-2">
					<strong>Tỉnh thành:</strong>
					<select class="select_custom  py-0 border-[#EAEEF4] h-[38px] max-w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-[10px] pl-5':'w-full rounded-lg pl-3 text-xs' ?>">
						<option value="">Tất cả</option>
						<option value="">CN Kon Tum</option>
						<option value="">CN Ba Đình</option>
					</select>
				</div>
				<div class="space-y-2">
					<strong>Quận huyện</strong>
					<select class="select_custom py-0 border-[#EAEEF4] h-[38px] max-w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-[10px]':'w-full rounded-lg pl-3 text-xs' ?>">
						<option value="">Tất cả</option>
						<option value="">CN Kon Tum CN Kon Tum</option>
						<option value="">CN Ba Đình</option>
					</select>
				</div>
			</div>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex lg:gap-12' : '' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<div class="lg:w-[460px] lg:max-w-[35%] lg:mb-0 mb-10">
						<div class="w-full rounded-[10px] shadow-base py-2">
							<div
								class="mx-4 mb-2 rounded-[10px] flex items-center px-[26px] h-[50px] gap-3 border border-[#DDE2EA]">
								<?php echo svg( 'search', '24', '24' ) ?>
								<input type="text" id="search-contact"
									class="flex-1 border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D]"
									placeholder="<?php _e( 'Nhập từ khóa tìm kiếm', 'bsc' ) ?>">
							</div>
							<div class="scroll-bar-custom overflow-y-auto max-h-[566px]">
								<?php
								for ( $i = 0; $i < 6; $i++ )
								{
									?>
									<div
										class="map-address p-4 border-b border-[#DDE2EA] font-Helvetica cursor-pointer transition-all duration-500 hover:bg-[#EAF8FE] relative group hover:pb-9">
										<h3 class="font-bold text-primary-300 mb-2 ">
											CN Kon Tum
										</h3>
										<div class="text-xs text-[#4A5568] group-hover:mb-4">Số 1A, Đường
											Trần Phú, Phường
											Quyết Thắng, Thành phố Kon Tum, Kon Tum - Phường Quyết Thắng-Kon
											Tum - Kon Tum</div>
										<button
											class="absolute opacity-0 invisible group-hover:opacity-100 group-hover:visible">
											<span
												class="inline-flex gap-x-3 items-center text-green font-semibold  transition-all duration-500  hover:scale-105  text-xs">
												<?php _e( 'Chỉ đường', 'bsc' ) ?>
												<?php echo svg( 'arrow-btn', '16', '16' ) ?>
											</span>
										</button>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>

				<?php } ?>
				<div class="flex-1">
					<div
						class="map-item relative w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[76.4424%]' : 'pt-[150%]' ?>">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5476283838575!2d106.66243187572773!3d10.76930485932362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f7c8bf050ff%3A0x4fa87595d124cc0c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIb2EgU2VuIC0gQ8ahIHPhu58gVGjDoG5oIFRow6Fp!5e0!3m2!1svi!2s!4v1730454253622!5m2!1svi!2s"
							width="600" height="450" style="border:0;" allowfullscreen=""
							loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

						<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
						<div class="absolute z-[2] w-[90%] left-1/2 -translate-x-1/2 bottom-4">
							<div class="w-full rounded-[10px] shadow-base py-2 bg-white">
								<div
									class="mx-[12px] mb-2 rounded-[10px] flex items-center px-4 h-[46px] gap-3 border border-[#DDE2EA]">
									<?php echo svgClass('search', '','',!wp_is_mobile() && !bsc_is_mobile() ?'w-6 h-6':'w-5 h-5 shrink-0') ?>
									<input type="text" id="search-contact"
										class="flex-1 border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D] p-0"
										placeholder="<?php _e( 'Nhập từ khóa tìm kiếm', 'bsc' ) ?>">
								</div>
								<div class="scroll-bar-custom overflow-y-auto max-h-[140px]">
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<div
											class="map-address p-4 border-b border-[#DDE2EA] font-Helvetica cursor-pointer transition-all duration-500 hover:bg-[#EAF8FE] relative group hover:pb-9 text-xs">
											<h3 class="font-bold text-primary-300 mb-2 ">
												CN Kon Tum
											</h3>
											<div class="text-xs text-[#4A5568] group-hover:mb-4">Số 1A,
												Đường
												Trần Phú, Phường
												Quyết Thắng, Thành phố Kon Tum, Kon Tum - Phường Quyết
												Thắng-Kon
												Tum - Kon Tum</div>
											<button
												class="absolute opacity-0 invisible group-hover:opacity-100 group-hover:visible">
												<span
													class="inline-flex gap-x-3 items-center text-green font-semibold  transition-all duration-500  hover:scale-105  text-xs">
													<?php _e( 'Chỉ đường', 'bsc' ) ?>
													<?php echo svg( 'arrow-btn', '16', '16' ) ?>
												</span>
											</button>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="py-20 bg-gradient-blue-250">
		<div class="container">
			<div class="lg:flex">
				<div class="2xl:pr-[50px] pr-10  lg:w-[575px] lg:max-w-[43%] shrink-0">
					<h2 class="heading-title 2xl:mb-[72px] mb-10">
						BẠN CẦN HỖ TRỢ?
					</h2>
					<div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
					</div>
				</div>
				<div class="flex-1 2xl:pl-[50px] pl-10 lg:border-l border-[#D2D2D2]">
					<h3 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
						<?php _e( 'Đăng ký thông tin hỗ trợ', 'gnws' ) ?>
					</h3>
					<div
						class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-4 rounded-2xl">
						<?php echo do_shortcode( '[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]' ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
