<section class="bg-primary-200 lg:py-[77px] py-14">
	<div class="container">
		<div class="grid grid-cols-3 gap-5">
			<div class="md:col-span-2 col-span-full">
				<?php if (get_sub_field('title')) { ?>
					<h2
						class="pl-6 border-l-2 border-primary-300 text-[28px] font-bold mb-7 text-primary-300 leading-none">
						<?php the_sub_field('title') ?>
					</h2>
				<?php } ?>
				<div class="bg-white rounded-2xl p-7">
					<div class="flex justify-between items-center mb-6">
						<div class="space-x-2 px-[6px] py-[2px] rounded-xl bg-[#F8F8FF]">
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white active bg-primary-700  rounded-[10px]">BSC10</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC30</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC50</button>
						</div>

						<div class="flex items-center space-x-4">
							<span>Thời gian:</span>
							<input type="date" class="border rounded p-2" value="Mar 02, 2024">
							<input type="date" class="border rounded p-2" value="Aug 02, 2024">
						</div>
					</div>

					<div id="chart"></div>

					<div class="flex justify-center mt-6">
						<div class="space-x-2">
							<button class="px-4 py-2 bg-blue-500 text-white rounded">BSC10</button>
							<button
								class="px-4 py-2 bg-gray-200 text-gray-700 rounded">VNINDEX</button>
							<button
								class="px-4 py-2 bg-gray-200 text-gray-700 rounded">VNDIAMOND</button>
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
				</div>
			</div>
			<div class="md:col-span-1 col-span-full">
				<div class="flex items-center justify-between mb-7">
					<?php if (get_sub_field('title_2')) { ?>
						<h2
							class="pl-6 border-l-2 border-primary-300 text-[28px] font-bold text-primary-300 leading-none">
							<?php the_sub_field('title_2') ?>
						</h2>
					<?php } ?>
					<?php if (have_rows('button_xem_tat_ca')) {
						while (have_rows('button_xem_tat_ca')): the_row();
							if (get_sub_field('title')) {
					?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 ml-9">
									<?php echo svg('arrow-btn', '20', '20') ?>
									<?php the_sub_field('title') ?>
								</a>
					<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php if (have_rows('khuyen_nghi')) {
					while (have_rows('khuyen_nghi')): the_row(); ?>
						<div class="bg-white rounded-[10px] px-6 py-4 mb-4">
							<?php if (get_sub_field('title')) { ?>
								<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9]">
									<?php the_sub_field('title') ?>
								</p>
							<?php } ?>
							<ul class="space-y-4">
								<?php
								for ($i = 0; $i < 5; $i++) {
								?>
									<li class="flex font-bold gap-[14px] items-center justify-between">
										<p class="line-clamp-1 flex-1">
											BID <span class="text-green">(+25%) MUA MẠNH</span> - Ngân hàng đầu
											tư
										</p>

										<p
											class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px]">
											Hot</p>
										<a href="">
											<?php echo svg('download') ?>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
							<?php if (have_rows('button_xem_them')) {
								while (have_rows('button_xem_them')): the_row(); ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 mt-6">
										<?php echo svg('arrow-btn', '20', '20') ?>
										<?php the_sub_field('title') ?>
									</a>
							<?php
								endwhile;
							}
							?>
						</div>
				<?php
					endwhile;
				}
				?>
				<?php if (have_rows('nganh_doanh_nghiep')) {
					while (have_rows('nganh_doanh_nghiep')): the_row(); ?>
						<div class="bg-white rounded-[10px] px-6 py-4">
							<?php if (get_sub_field('title')) { ?>
								<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9] text-center">
									<?php the_sub_field('title') ?>
								</p>
							<?php } ?>
							<ul class="space-y-4">
								<?php
								for ($i = 0; $i < 4; $i++) {
								?>
									<li class="flex font-bold gap-[14px] items-center justify-between">
										<p class="line-clamp-1 flex-1">
											BID <span class="text-green">(+25%) MUA MẠNH</span> - Ngân hàng đầu
											tư
										</p>
										<p
											class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px]">
											Hot</p>
										<a href="">
											<?php echo svg('download') ?>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
							<?php if (have_rows('button_xem_them')) {
								while (have_rows('button_xem_them')): the_row(); ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 mt-6">
										<?php echo svg('arrow-btn', '20', '20') ?>
										<?php the_sub_field('title') ?>
									</a>
							<?php
								endwhile;
							}
							?>
						</div>
				<?php
					endwhile;
				}
				?>
			</div>
		</div>
	</div>
</section>