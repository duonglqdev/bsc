<section class="bg-primary-200 lg:pt-[77px] pt-14 relative offters_slider" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<div class="grid lg:grid-cols-2 2xl:gap-32 lg:gap-20 gap-10">
			<div class="col-span-1">
				<?php if (get_sub_field('title')) { ?>
					<h2 class="heading-title mb-4"><?php the_sub_field('title') ?></h2>
				<?php } ?>
				<?php if (get_sub_field('mota')) { ?>
					<p class="uppercase text-primary-300 text-2xl font-bold mb-10">
						<?php the_sub_field('mota') ?>
					</p>
				<?php } ?>
				<?php if (have_rows('button')) {
					while (have_rows('button')): the_row();
						if (get_sub_field('title')) {
				?>
							<a href="<?php echo check_link(get_sub_field('link')) ?>"
								class="inline-block lg:px-7 px-5 lg:py-[15px] py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white leading-none">
								<span
									class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg('arrow-btn', '20') ?><?php the_sub_field('title') ?></span>
							</a>
				<?php
						}
					endwhile;
				} ?>
				<?php if (have_rows('button_1')) {
					while (have_rows('button_1')): the_row();
						if (get_sub_field('title')) {
				?>
							<p class="mt-4">
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="inline-flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105">
									<?php echo svg('keyvisual', '24','24') ?>
									<?php the_sub_field('title') ?>
									<?php echo svg('arrow-btn', '14', '14') ?>
								</a>
							</p>
				<?php
						}
					endwhile;
				} ?>
				<div class="mt-8 relative z-10">
					<?php if (get_sub_field('icon')) { ?>
						<div class="lg:block hidden absolute -top-28 right-0">
							<img src="<?php echo wp_get_attachment_image_url(get_sub_field('icon'), 'large') ?>" alt="<?php the_sub_field('title') ?>">
						</div>
					<?php } ?>
					<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'm-auto relative z-10')) ?>

				</div>
			</div>
			<div class="col-span-1">
				<?php if (get_sub_field('title_2')) { ?>
					<h2 class="heading-title mb-8">
						<?php the_sub_field('title_2') ?>
					</h2>
				<?php } ?>
				<div class="block_slider block_slider-show-2 no-dots -mx-4">
					<div class="block_slider-item md:w-3/5 w-4/5 px-4">
						<div class="bg-white lg:p-8 p-5 rounded-lg ">
							<div class="max-h-44 overflow-hidden">
								<p
									class="relative font-bold lg:text-lg  after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
									<a href="" class="line-clamp-3">
										Danh mục “Chuẩn” – Ưu đãi “Chất”
									</a>
								</p>
								<div class="">
									x2 hiệu quả đầu tư với TOP 10 cổ phiếu được khuyến nghị bởi
									Trung
									tâm Phân tích Nghiên cứu BSC và tận hưởng loạt ưu đãi giảm phí
									giao
									dịch, margin hấp dẫn, hoàn phí tới 1 triệu đồng/tháng không giới
									hạn. 
								</div>
							</div>
						</div>
					</div>
					<div class="block_slider-item md:w-3/5 w-4/5 px-4">
						<div class="bg-white lg:p-8 p-5 rounded-lg">
							<div class="max-h-44 overflow-hidden">
								<p
									class="relative font-bold lg:text-lg after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
									<a href="" class="line-clamp-3">
										Cơ Hội Tới – Nhanh Mở Mới, cùng BSC săn chuyến du lịch Hàn
										Quốc
										và
										hàng nghìn quà tặng hấp dẫn
									</a>
								</p>
								<div class="">
									Với mong muốn luôn là người đồng hành đáng tin cậy của Nhà đầu
									tư
									trước những cơ hội của thị trường, BSC tiếp tục khởi động chương
									trình “Cơ Hội Tới - Nhanh Mở Mới".
								</div>
							</div>
						</div>
					</div>
					<div class="block_slider-item md:w-3/5 w-4/5 px-4">
						<div class="bg-white lg:p-8 p-5 rounded-lg ">
							<div class="max-h-44 overflow-hidden">

								<p
									class="relative font-bold lg:text-lg  after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
									<a href="" class="line-clamp-3">
										Danh mục “Chuẩn” – Ưu đãi “Chất”
									</a>
								</p>
								<div class="">
									x2 hiệu quả đầu tư với TOP 10 cổ phiếu được khuyến nghị bởi
									Trung
									tâm Phân tích Nghiên cứu BSC và tận hưởng loạt ưu đãi giảm phí
									giao
									dịch, margin hấp dẫn, hoàn phí tới 1 triệu đồng/tháng không giới
									hạn. 
								</div>
							</div>
						</div>
					</div>
					<div class="block_slider-item md:w-3/5 w-4/5 px-4">
						<div class="bg-white lg:p-8 p-5 rounded-lg">
							<div class="max-h-44 overflow-hidden">
								<p
									class="relative font-bold lg:text-lg after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
									<a href="" class="line-clamp-3">
										Cơ Hội Tới – Nhanh Mở Mới, cùng BSC săn chuyến du lịch Hàn
										Quốc
										và
										hàng nghìn quà tặng hấp dẫn
									</a>
								</p>
								<div class="">
									Với mong muốn luôn là người đồng hành đáng tin cậy của Nhà đầu
									tư
									trước những cơ hội của thị trường, BSC tiếp tục khởi động chương
									trình “Cơ Hội Tới - Nhanh Mở Mới".
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if (have_rows('video_youtube')) {
					while (have_rows('video_youtube')): the_row();
						if (get_sub_field('avatar')) { ?>
							<div class="mt-[12px]">
								<a href="<?php the_sub_field('url_youtube') ?>" data-fancybox
									class="rounded-md overflow-hidden pt-[60%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
									<?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
									<div
										class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
										<?php echo svg('play') ?>
									</div>
								</a>
							</div>
				<?php  };
					endwhile;
				}
				?>
				<?php if (have_rows('button_2')) {
					while (have_rows('button_2')): the_row();
						if (get_sub_field('title')) {
				?>
							<p class="mt-4">
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="inline-flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105">
								   <?php echo svg('keyvisual', '24','24') ?>
									<?php the_sub_field('title') ?>
									<?php echo svg('arrow-btn', '14', '14') ?>
								</a>
							</p>
				<?php
						}
					endwhile;
				} ?>
			</div>
		</div>
	</div>
	<?php if (get_sub_field('background')) { ?>
		<div class="lg:block hidden absolute bottom-0 left-0">
			<?php echo wp_get_attachment_image(get_sub_field('background'), 'large') ?>
		</div>
	<?php } ?>
</section>