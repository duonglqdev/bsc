<?php

/**
Template Name: Cơ hội nghề nghiệp
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="lg:pt-14 pt-10 bg-gradient-blue-100">
		<div class="container">
			<h2 class="heading-title mb-10">
				TẠI SAO LỰA CHỌN BSC
			</h2>
			<div class="lg:flex lg:gap-[90px]">
				<div class="flex-1">
					<div class="grid grid-cols-2 lg:gap-x-[70px] gap-x-5 lg:gap-y-[50px] gap-y-5">
						<div class="col-auto">
							<h3 class="uppercase font-bold text-xl mb-4 text-primary-400">
								MÔI TRƯỜNG LÝ TƯỞNG
							</h3>
							<div class="text-justify font-Helvetica">
								Kiến tạo môi trường làm việc hạnh phúc, tôn trọng và hỗ trợ lẫn nhau
								để đem lại hiệu quả, chất lượng, sự phát triển bền vững cho doanh
								nghiệp đồng thời với sự trưởng thành và tiến bộ của mỗi cá nhân.
							</div>
						</div>
						<div class="col-auto">
							<h3 class="uppercase font-bold text-xl mb-4 text-primary-400">
								THU NHẬP - PHÚC LỢI CẠNH TRANH
							</h3>
							<div class="text-justify font-Helvetica">
								Ưu tiên xây dựng các chính sách đãi ngộ hiện đại, tiến bộ cho người
								lao động. Tại BSC, bạn sẽ được tiếp cận với hệ thống trả lương tiên
								tiến, nhận mức đãi ngộ đảm bảo công bằng nội bộ và có tính cạnh
								tranh với thị trường.
							</div>
						</div>
						<div class="col-auto">
							<h3 class="uppercase font-bold text-xl mb-4 text-primary-400">
								GIÁ TRỊ CON NGƯỜI
							</h3>
							<div class="text-justify font-Helvetica">
								Tại BSC, chúng tôi tập trung xây dựng mối quan hệ hài hòa giữa công
								ty và nhân viên thông qua các sáng kiến dựa trên nguyên tắc quản trị
								tham gia, những đánh giá dựa trên kết quả lao động và tôn trọng nhân
								viên. Khả năng sáng tạo và nhiệt huyết của các bạn chính là khởi
								nguồn cho sự thành công của BSC.
							</div>
						</div>
						<div class="col-auto">
							<h3 class="uppercase font-bold text-xl mb-4 text-primary-400">
								CƠ HỘI THĂNG TIẾN
							</h3>
							<div class="text-justify font-Helvetica">
								Chú trọng đến chặng đường phát triển sự nghiệp của từng nhân viên
								trên cơ sở xác định đây là yếu tố nền tảng cho sự phát triển của tổ
								chức. Tại BSC, chúng tôi cam kết sẽ tạo môi trường thuận lợi với
								những điều kiện tốt nhất cho sự học hỏi và phát triển.
							</div>
						</div>
					</div>
				</div>
				<div class="w-full lg:w-[495px] lg:max-w-[40%] relative">
					<div class="relative z-[2] main_image">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/job.png"
							alt="">
					</div>
					<div class="lg:block hidden absolute lg:-top-16 top-0 lg:-right-6 right-0">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/job-layer.png"
							alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="lg:lg:my-[100px] my-10">
		<div class="container">
			<h2 class="heading-title mb-10">
				VỊ TRÍ TUYỂN DỤNG
			</h2>
			<form id="search_job" class="grid lg:grid-cols-5 grid-cols-4 gap-5">
				<div class="col-span-2">
					<select
						class="h-[50px] rounded-[10px] border border-[#C3C3C3] w-full focus:outline-0 focus:border-primary-300 transition-all duration-500n px-6 select_custom-2 text-gray-100">
						<option value="">Nghiệp vụ</option>
						<option value="">Nghiệp vụ 1</option>
						<option value="">Nghiệp vụ 2</option>
					</select>
				</div>
				<div class="col-span-2">
					<select
						class="h-[50px] rounded-[10px] border border-[#C3C3C3] w-full focus:outline-0 focus:border-primary-300 transition-all duration-500n px-6 select_custom-2 text-gray-100">
						<option value="">Nơi làm việc</option>
						<option value="">Nơi làm việc 1</option>
						<option value="">Nơi làm việc 2</option>
					</select>
				</div>
				<div class="lg:col-span-1 col-span-full">
					<button
						class="bg-yellow-100 text-black after:bg-green hover:text-white inline-block px-6 py-3 rounded-xl font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:transition-all after:duration-500 after:opacity-0 after:rounded-xl hover:after:w-full hover:after:opacity-100 w-full h-full">
						<span class="block relative z-10">
							<?php _e( 'Tìm kiếm', 'bsc' ) ?>
						</span>
					</button>
				</div>
			</form>
			<div class="mt-[51px]">
				<?php
				for ( $i = 0; $i < 3; $i++ )
				{
					?>

					<div
						class="job_item grid lg:grid-cols-9 gap-5 font-Helvetica mb-[30px] pb-[30px] border-b border-[#C3C3C3]">
						<div class="col-span-3 job_title">
							<p class="mb-4 text-gray-100 font-medium">Vị trí ứng tuyển</p>
							<h4
								class="font-bold text-lg transition-all duration-500 hover:text-primary-300">
								<a href="" class="line-clamp-3">
									[Ban Tài Chính BSC] Chuyên viên cao cấp/Chuyên gia Phân Tích Kinh
									Doanh
								</a>
							</h4>
						</div>
						<div class="col-span-1">
							<p class="mb-4 text-gray-100 font-medium">Kinh nghiệm</p>
							<p class="font-bold text-lg job_exp">
								3 năm
							</p>
						</div>
						<div class="col-span-1 ">
							<p class="mb-4 text-gray-100 font-medium">Nơi làm việc</p>
							<p class="font-bold text-lg job_location">
								Hà Nội
							</p>
						</div>
						<div class="col-span-1">
							<p class="mb-4 text-gray-100 font-medium">Số lượng tuyển</p>
							<p class="font-bold text-lg job_number">
								2 người
							</p>
						</div>
						<div class="col-span-1 ">
							<p class="mb-4 text-gray-100 font-medium">Hạn nộp hồ sơ</p>
							<p class="font-bold text-lg job_date">
								05/10/2026
							</p>
						</div>
						<div class="col-span-1 job_status m-auto">
							<div
								class="urgent inline-block rounded-full px-4 py-2 font-bold text-xs  [&:not(.urgent)]:text-[#30D158] [&:not(.urgent)]:bg-[#B5F8C5] text-[#F9162A] bg-[#FFB2B9]">
								Tuyển gấp
							</div>
						</div>
						<div class="col-span-1 m-auto">
							<a href=""
								class="text-green font-bold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">

								<?php _e( 'Xem chi tiết', 'bsc' ) ?>
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
						</div>
					</div>
					<div
						class="job_item grid lg:grid-cols-9 gap-5 font-Helvetica mb-[30px] pb-[30px] border-b border-[#C3C3C3]">
						<div class="col-span-3 job_title">
							<p class="mb-4 text-gray-100 font-medium">Vị trí ứng tuyển</p>
							<h4
								class="font-bold text-lg transition-all duration-500 hover:text-primary-300">
								<a href="" class="line-clamp-3">
									[Ban Tài Chính BSC] Chuyên viên cao cấp/Chuyên gia Phân Tích Kinh
									Doanh
								</a>
							</h4>
						</div>
						<div class="col-span-1">
							<p class="mb-4 text-gray-100 font-medium">Kinh nghiệm</p>
							<p class="font-bold text-lg job_exp">
								3 năm
							</p>
						</div>
						<div class="col-span-1 ">
							<p class="mb-4 text-gray-100 font-medium">Nơi làm việc</p>
							<p class="font-bold text-lg job_location">
								Hà Nội
							</p>
						</div>
						<div class="col-span-1">
							<p class="mb-4 text-gray-100 font-medium">Số lượng tuyển</p>
							<p class="font-bold text-lg job_number">
								2 người
							</p>
						</div>
						<div class="col-span-1 ">
							<p class="mb-4 text-gray-100 font-medium">Hạn nộp hồ sơ</p>
							<p class="font-bold text-lg job_date">
								05/10/2026
							</p>
						</div>
						<div class="col-span-1 job_status m-auto">
							<div
								class="inline-block rounded-full px-4 py-2 font-bold text-xs  [&:not(.urgent)]:text-[#30D158] [&:not(.urgent)]:bg-[#B5F8C5] text-[#F9162A] bg-[#FFB2B9]">
								Đang tuyển
							</div>
						</div>
						<div class="col-span-1 m-auto">
							<a href=""
								class="text-green font-bold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">

								<?php _e( 'Xem chi tiết', 'bsc' ) ?>
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="bsc-pagination">
				<nav class="flex items-center gap-8">
					<?php bsc_pagination() ?>
				</nav>
			</div>
			</nav>
		</div>
		</div>
	</section>

	<section class="lg:lg:my-[100px] my-10">
		<div class="container">
			<h2 class="heading-title text-center mb-10">
				Con người TẠI bsc
			</h2>
			<div
				class="xl:px-32 lg:px-20 px-10 grid lg:grid-cols-2 lg:gap-16 relative bg-gradient-blue-50 rounded-2xl py-2 items-center">
				<div class="staff_content data-slick block_slider-show-1"
					data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": true, "asNavFor": ".staff_image"}'>
					<?php
					for ( $i = 0; $i < 4; $i++ )
					{
						?>
						<div class="flex flex-col font-Helvetica block_slider-item">
							<h3 class="lg:text-2xl text-lg font-bold mb-1">
								Thông điệp từ chị Vân Anh
							</h3>
							<p class="text-black text-opacity-50 font-semibold text-xs">
								P. Dịch vụ chứng khoán
							</p>
							<div class="text-justify mt-4">
								Tại BSC, chúng tôi được làm việc trong một môi trường chuyên nghiệp, nơi
								mà các quy trình làm việc được chuẩn hóa.
								Là một nhân sự trẻ tại BSC, tôi hiểu rằng: mỗi cá nhân trong chúng tôi
								là mỗi mảng màu riêng biệt với các góc nhìn khác nhau,
								tạo nên một đội ngũ đa dạng và sáng tạo. Chung sức, chung lòng vì một
								mục tiêu lớn, sự khác biệt này hòa chung cùng tập thể
								không chỉ làm phong phú thêm công việc mà còn giúp chúng tôi học hỏi
								được nhiều điều mới mẻ, trưởng thành hơn mỗi ngày.
							</div>
						</div>
						<?php
					}
					?>
				</div>

				<div class="staff_image data-slick block_slider-show-1"
					data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": false, "arrows": false, "fade": true, "draggable": false, "asNavFor": ".staff_content"}'>
					<?php
					for ( $i = 0; $i < 4; $i++ )
					{
						?>
						<div class="block_slider-item">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/people.png"
								alt="">
						</div>
						<?php
					}
					?>
				</div>

			</div>
		</div>
	</section>

	<section class="lg:lg:my-[100px] my-10">
		<div class="container">
			<h2 class="heading-title mb-10">
				khoảnh khắc bsc
			</h2>
			<div class="staff_content data-slick block_slider-show-1"
				data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 0, "dots": false, "arrows": false,"cssEase": "linear", "speed": 3000,"centerMode":true}'>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();