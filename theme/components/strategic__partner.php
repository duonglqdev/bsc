<section
	class="strategic__partner <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[105px]' : 'py-[46px]' ?> relative after:absolute after:inset-0 after:w-full after:h-full after:pointer-events-none after:bg-gradient-blue-to-bottom after:opacity-40"
	<?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>"
	<?php } ?>>
	<div class="container">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:gap-[110px] gap-10 grid grid-cols-2' : '' ?>">
			<div class="col-span-1">
				<?php if (get_sub_field('title')) { ?>
					<h2
						class="heading-title  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-primary-700' : 'text-center mb-6' ?>">
						<?php the_sub_field('title') ?>
					</h2>
				<?php } ?>
				<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
					<div class="col-span-1">
						<?php if (get_sub_field('url_image')) {
						?>
							<a rel="<?php the_sub_field('url_image_rel') ?>" href="<?php echo check_link(get_sub_field('url_image')) ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?>>
								<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'mx-auto max-w-[256px]')); ?>
							</a>
						<?php
						} else {
							echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'mx-auto max-w-[256px]'));
						} ?>
					</div>
				<?php } ?>
				<?php if (get_sub_field('content')) { ?>
					<div class="font-Helvetica prose-p:mb-4 text-[#000] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-5' : 'mt-6 text-xs' ?>">
						<?php the_sub_field('content') ?>
					</div>
				<?php } ?>
			</div>
			<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
				<div class="col-span-1">
					<?php if (get_sub_field('url_image')) {
					?>
						<a rel="<?php the_sub_field('url_image_rel') ?>" href="<?php echo check_link(get_sub_field('url_image')) ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?>>
							<?php echo wp_get_attachment_image(get_sub_field('img'), 'large'); ?>
						</a>
					<?php
					} else {
						echo wp_get_attachment_image(get_sub_field('img'), 'large');
					} ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>