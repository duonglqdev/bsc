<section class="contact_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'my-16':'my-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?>
	id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<?php
	$style = get_sub_field('style') ?: 'style1';
	?>
	<div class="container">
		<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:grid-cols-2 gap-10 grid-cols-1' : 'grid-cols-1' ?> <?php if ($style == 'style2') echo 'items-center' ?>">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[640px] col-span-1':'order-2' ?>">
				<div class="relative w-full pt-[71.25%] overflow-hidden rounded-[10px]">
					<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
				</div>
			</div>
			<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'col-span-1':'order-1' ?>">
				<?php if ($style == 'style1') { ?>
					<?php if (get_sub_field('title')) { ?>
						<h2 class="font-bold text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl mb-5':'mb-4 text-lg' ?>">
							<?php the_sub_field('title') ?>
						</h2>
					<?php } ?>
					<?php if (get_sub_field('content')) { ?>
						<div
							class="prose-strong:inline-flex prose-strong:font-medium prose-strong:gap-3 prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-ul:list-disc  prose-a:text-primary-300 prose-strong:mr-1 content-contact <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-ul:pl-7 prose-ul:mt-2 2xl:prose-ul:mb-5 prose-ul:mb-[12px] 2xl:prose-p:mb-5 prose-p:mb-[12px] prose-strong:items-center':'text-xs prose-ul:pl-5 prose-ul:mt-2 prose-ul:mb-4 prose-p:mb-4 prose-strong:before:-translate-y-[1px] prose-strong:items-baseline' ?>">
							<?php the_sub_field('content') ?>
						</div>
					<?php } ?>
				<?php } else { ?>
					<div class="max-w-[511px]">
						<?php if (get_sub_field('title')) { ?>
							<h2 class="heading-title mb-4">
								<?php the_sub_field('title') ?>
							</h2>
						<?php } ?>
						<?php if (get_sub_field('content')) { ?>
							<div class="font-Helvetica mb-6 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>">
								<?php the_sub_field('content') ?>
							</div>
						<?php } ?>
						<?php if (have_rows('info')) { ?>
							<ul class="space-y-4">
								<?php while (have_rows('info')): the_row(); ?>
									<li class="flex gap-[12px]">
										<p class="w-6 h-6 shrink-0">
											<?php echo svg(get_sub_field('icon'), '24', '24') ?>
										</p>
										<div>
											<?php the_sub_field('content') ?>
										</div>
									</li>
								<?php endwhile ?>
							</ul>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>