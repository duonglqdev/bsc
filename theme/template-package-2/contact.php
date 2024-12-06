<?php

/**
Template Name: [Package-2] Liên hệ
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="my-16 contact_content">
		<div class="container">
			<div class="grid md:grid-cols-2 grid-cols-1 gap-10">
				<div class="col-span-1 max-w-[640px]">
					<div class="relative w-full pt-[71.25%] overflow-hidden rounded-[10px]">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
					</div>
				</div>
				<div class="col-span-1 font-Helvetica">
					<!-- <h2 class="font-bold text-2xl mb-5 text-primary-300">
						Nếu quý khách hàng cần sự hỗ trợ, <br>
						vui lòng liên hệ với BSC qua các kênh sau:
					</h2>
					<div
						class="prose-strong:inline-flex prose-strong:font-medium prose-strong:items-center prose-strong:gap-3 prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-ul:pl-7 prose-ul:list-disc prose-ul:mt-2 prose-ul:mb-5 prose-p:mb-5 prose-a:text-primary-300 prose-strong:mr-1 content-contact">
						<?php the_content() ?>
					</div> -->
					<div class="max-w-[511px]">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my[100px] my-20">
		<div class="container">
			<h2 class="font-bold text-2xl mb-8 text-primary-300">
				Danh sách điểm hỗ trợ
			</h2>
			<div class="flex items-center gap-4 mb-6">
				<strong>Tỉnh thành:</strong>
				<select class="select_custom pl-5 py-0 border-[#EAEEF4] rounded-[10px] h-[38px]">
					<option value="">Tất cả</option>
					<option value="">CN Kon Tum</option>
					<option value="">CN Ba Đình</option>
				</select>
			</div>
			<div class="lg:flex md:gap-12">
				<div class="lg:w-[460px] md:max-w-[35%]">
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
				<div class="flex-1">
					<div class="map-item relative w-full pt-[76.4424%]">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5476283838575!2d106.66243187572773!3d10.76930485932362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f7c8bf050ff%3A0x4fa87595d124cc0c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIb2EgU2VuIC0gQ8ahIHPhu58gVGjDoG5oIFRow6Fp!5e0!3m2!1svi!2s!4v1730454253622!5m2!1svi!2s"
							width="600" height="450" style="border:0;" allowfullscreen=""
							loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
