<section class="home_news bg-white lg:py-[77px] py-14" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="heading-title mb-12"><?php the_sub_field('title') ?></h2>
		<?php } ?>
		<div class="grid grid-cols-5 gap-5">
			<div class="md:col-span-3 col-span-full">
				<div class="flex flex-col group">
					<a href="" class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px]">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news.jpg"
							alt=""
							class="absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110">
					</a>
					<h3
						class="lg:text-[22px] text-lg font-bold mb-[12px] transition-all duration-500 group-hover:text-green">
						<a href="" class="line-clamp-3">Hiệu suất đầu tư gấp 3 lần VN-index, danh
							mục BSC10
							có gì đặc biệt?</a>
					</h3>
					<div class="mb-4 line-clamp-2">
						Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm 2024- Mệnh
						Thủy Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm 2024-
						Mệnh Thủy
					</div>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300">
						<?php echo svg('arrow-btn', '20', '20') ?>
						Xem chi tiết
					</a>
				</div>
			</div>
			<div class="md:col-span-2 col-span-full">
				<ul class="space-y-[12px]">
					<?php
					for ($i = 0; $i < 4; $i++) {
					?>
						<li class="lg:p-6 p-4 bg-[#F5FCFF] rounded-lg group">
							<h3
								class="text-lg font-bold mb-3 transition-all duration-500 group-hover:text-green">
								<a href="" class="line-clamp-2">
									Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10
									có gì đặc biệt?
								</a>
							</h3>
							<p class="line-clamp-1">
								Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm 2024-
								Mệnh Thủy
							</p>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>