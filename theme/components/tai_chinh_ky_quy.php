<section class="xl:py-[97px] py-20 bg-gradient-blue-250 tai_chinh_ky_quy" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="heading-title 2xl:mb-6 mb-4">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<?php $display = get_sub_field('display') ?: 'kyquy';
		if ($display == 'kyquy') { ?>
			<?php if (have_rows('benefit')) { ?>
				<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
					<?php while (have_rows('benefit')) :
						the_row(); ?>
						<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
							style="background-color:<?php the_sub_field('color') ?>;">
							<div class="max-w-[155px] w-full mx-auto">
								<div class="relative w-full pt-[100%]">
									<?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105')) ?>
								</div>
							</div>
							<div class="mt-4">
								<?php if (get_sub_field('title')) { ?>
									<h3 class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
										<?php the_sub_field('title') ?>
									</h3>
								<?php } ?>
								<?php if (get_sub_field('mota')) { ?>
									<div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica">
										<p>
											<?php the_sub_field('mota') ?>
										</p>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		<?php } else { ?>
			<?php if (have_rows('ung_tien')) { ?>
				<div class="grid lg:grid-cols-2 gap-5">
					<?php while (have_rows('ung_tien')) :
						the_row(); ?>
						<div
							class="rounded-2xl h-full bg-[#D4EDFF] lg:pt-[46px] pt-8 lg:pl-10 pl-8 pb-[19px] flex flex-col overflow-hidden group">
							<?php if (get_sub_field('title')) { ?>
								<h4 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl ">
									<?php the_sub_field('title') ?>
								</h4>
							<?php } ?>
							<?php if (have_rows('mota')) { ?>
								<ul class="list-icon space-y-4 font-Helvetica mb-[15px] lg:w-[520px] max-w-full">
									<?php while (have_rows('mota')) :
										the_row(); ?>
										<li class="list-icon-item">
											<?php the_sub_field('info') ?>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php } ?>
							<div class="mt-auto">
								<?php echo wp_get_attachment_image(get_sub_field('icon'), 'large', '', array('class' => 'ml-auto transition-all duration-500 group-hover:scale-105')) ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		<?php } ?>
		<?php if (have_rows('menu_dieu_huong')) { ?>
			<div class="mt-8 lg:grid lg:grid-cols-2 gap-5">
				<?php while (have_rows('menu_dieu_huong')) :
					the_row(); ?>
					<div
						class="2xl:p-8 p-5 rounded-xl flex items-center justify-between relative group bg-[#D8F1F3] overflow-hidden">
						<div
							class="flex items-center gap-4 2xl:text-2xl text-xl font-bold text-primary-300 relative z-[2] group-hover:text-white transition-all duration-500">
							<div class="text-green group-hover:text-white">
								<?php echo svg_dir(get_sub_field('icon'), '30') ?>
							</div>
							<?php the_sub_field('title') ?>
						</div>
						<?php if (have_rows('button')) {
							while (have_rows('button')) :
								the_row();
								if (get_sub_field('title')) { ?>
									<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
										class="text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica relative z-[2] group-hover:text-white">
										<?php the_sub_field('title') ?>
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
						<?php
								};
							endwhile;
						} ?>
						<div
							class="absolute w-full h-full inset-0 bg-gradient-blue transition-all duration-500 pointer-events-none opacity-0 group-hover:opacity-100">
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php } ?>
	</div>
</section>