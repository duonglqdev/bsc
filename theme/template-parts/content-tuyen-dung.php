<?php
$current_date = new DateTime( current_time( 'Y-m-d' ) );
$deadline = get_field( 'deadline' );
$deadline_date = DateTime::createFromFormat( 'Ymd', $deadline );
$check_han = false;
if ( get_field( 'check_tuyen_xong' ) || $deadline_date < $current_date )
{
	$class = "text-[#F1F1F1] bg-[#CCCCCC]";
	$label = __( 'Hết hạn', 'bsc' );
	$check_han = true;
} elseif ( get_field( 'check_tuyen_gap' ) )
{
	$class = "text-[#F9162A] bg-[#FFB2B9]";
	$label = __( 'Tuyển gấp', 'bsc' );
} else
{
	$class = "text-[#30D158] bg-[#B5F8C5]";
	$label = __( 'Đang tuyển', 'bsc' );
}
?>
<div
	class="job_item font-Helvetica  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid xl:grid-cols-9 lg:grid-cols-12 xl:gap-5 gap-3 mb-[30px] pb-[30px] border-b border-[#C3C3C3]' : 'mb-6 pb-6 border-b border-[#C9CCD2]' ?>">
	<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
	{ ?>
		<div class="job_status lg:hidden mb-[12px]">
			<div
				class="urgent inline-block rounded-full px-2 py-1 font-bold min-w-[88px] text-center text-[12px] <?php echo $class ?> ">
				<?php echo $label ?>
			</div>
		</div>
	<?php } ?>
	<div
		class="job_title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:col-span-3 col-span-12 mr-5' : '' ?>">
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
		{ ?>
			<p
				class="text-gray-100 font-medium text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4 lg:block hidden' : '' ?>">
				<?php _e( 'Vị trí ứng tuyển', 'bsc' ) ?>
			</p>
		<?php } ?>
		<h4
			class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg transition-all duration-500 hover:text-primary-300 lg:text-black text-primary-400 lg:mb-0 mb-6' : 'text-base text-primary-400 mb-[12px]' ?>">
			<a href="<?php the_permalink() ?>" class="line-clamp-2">
				<?php the_title() ?>
			</a>
		</h4>
	</div>
	<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
	{ ?>
		<div class="lg:hidden flex gap-8">
			<div class="flex flex-col gap-4">
				<div class="flex items-center gap-2">
					<p
						class="text-gray-100 font-medium flex items-center gap-2">
						<?php echo svg( 'exp', '20' ) ?>
						<?php _e( 'Kinh nghiệm:', 'bsc' ) ?>
					</p>
					<p
						class="font-bold job_exp">
						<?php the_field( 'kinh_nghiem_td' ) ?>
					</p>
				</div>
				<div class="flex items-center gap-2">
					<p
						class="text-gray-100 font-medium flex items-center gap-2">
						<?php echo svg( 'loca', '20' ) ?>
						<?php _e( 'Nơi làm việc:', 'bsc' ) ?>
					</p>
					<p
						class="font-bold job_location">
						<?php
						$post_id = get_the_ID();
						$noi_lam_viec = get_the_terms( $post->ID, 'noi-lam-viec' );
						if ( $noi_lam_viec )
						{
							echo $noi_lam_viec[0]->name;
						}
						?>
					</p>
				</div>
			</div>
			<div class="flex flex-col gap-4">
				<div class="flex items-center gap-2">
					<p
						class="text-gray-100 font-medium flex items-center gap-2">
						<?php echo svg( 'time-2', '20' ) ?>
						<?php _e( 'Hạn nộp hồ sơ:', 'bsc' ) ?>
					</p>
					<p
						class="font-bold job_date">
						<?php
						if ( $deadline_date )
						{
							echo $deadline_date->format( 'd/m/Y' );
						}
						?>
					</p>

				</div>
				<div class="flex items-center gap-2">
					<p
						class="text-gray-100 font-medium flex items-center gap-2">
						<?php echo svg( 'number', '20' ) ?>
						<?php _e( 'Số lượng tuyển:', 'bsc' ) ?>
					</p>
					<p
						class="font-bold job_number">
						<?php the_field( 'so_luong' ) ?>
					</p>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ( wp_is_mobile() && bsc_is_mobile() )
	{ ?>
		<div class="mb-5 job_status ">
			<div
				class="urgent inline-block rounded-full px-2 py-1 font-bold min-w-[88px] text-center text-[12px] <?php echo $class ?> ">
				<?php echo $label ?>
			</div>
		</div>
	<?php } ?>
	<div
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:col-span-1 col-span-2 xl:text-center lg:flex flex-col hidden' : 'flex items-center gap-2 mb-[12px]' ?>">
		<p
			class="text-gray-100 font-medium text-xs md:block flex items-center gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : '' ?>">
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
				<?php _e( 'Kinh nghiệm', 'bsc' ) ?>
			<?php else : ?>
				<?php echo svg( 'exp', '20' ) ?>
				<?php _e( 'Kinh nghiệm:', 'bsc' ) ?>
			<?php endif; ?>
		</p>
		<p
			class="font-bold job_exp <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
			<?php the_field( 'kinh_nghiem_td' ) ?>
		</p>
	</div>
	<div
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:col-span-1 col-span-2 xl:text-center lg:flex flex-col hidden' : 'flex items-center gap-2 mb-[12px]' ?>">
		<p
			class="text-gray-100 font-medium text-xs md:block flex items-center gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : '' ?>">
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
				<?php _e( 'Nơi làm việc', 'bsc' ) ?>
			<?php else : ?>
				<?php echo svg( 'loca', '20' ) ?>
				<?php _e( 'Nơi làm việc:', 'bsc' ) ?>
			<?php endif; ?>

		</p>
		<p
			class="font-bold job_location <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
			<?php
			$post_id = get_the_ID();
			$noi_lam_viec = get_the_terms( $post->ID, 'noi-lam-viec' );
			if ( $noi_lam_viec )
			{
				echo $noi_lam_viec[0]->name;
			}
			?>
		</p>
	</div>
	<div
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:col-span-1 col-span-2 xl:text-center lg:flex flex-col hidden' : 'flex items-center gap-2 mb-[12px]' ?>">
		<p
			class="text-gray-100 font-medium text-xs md:block flex items-center gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : '' ?>">
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
				<?php _e( 'Số lượng tuyển', 'bsc' ) ?>
			<?php else : ?>
				<?php echo svg( 'number', '20' ) ?>
				<?php _e( 'Số lượng tuyển:', 'bsc' ) ?>
			<?php endif; ?>
		</p>
		<p
			class="font-bold job_number <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
			<?php the_field( 'so_luong' ) ?>
		</p>
	</div>
	<div
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:col-span-1 col-span-2 xl:text-center lg:flex flex-col hidden' : 'flex items-center gap-2 mb-[12px]' ?>">
		<p
			class="text-gray-100 font-medium text-xs md:block flex items-center gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : '' ?>">
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
				<?php _e( 'Hạn nộp hồ sơ', 'bsc' ) ?>
			<?php else : ?>
				<?php echo svg( 'time-2', '20' ) ?>
				<?php _e( 'Hạn nộp hồ sơ:', 'bsc' ) ?>
			<?php endif; ?>
		</p>
		<p
			class="font-bold job_date <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
			<?php
			if ( $deadline_date )
			{
				echo $deadline_date->format( 'd/m/Y' );
			}
			?>
		</p>
	</div>

	<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
	{ ?>
		<div class="xl:col-span-1 col-span-2 job_status mx-auto lg:mt-9 my-auto lg:block hidden">
			<div
				class="urgent inline-block rounded-full px-4 py-2 font-bold text-xs min-w-28 text-center <?php echo $class ?> ">
				<?php echo $label ?>
			</div>
		</div>
	<?php } ?>
	<div class="xl:col-span-1 col-span-2 ml-auto  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:mt-10 mt-4':'' ?>">
		<a href="<?php the_permalink() ?>"
			class="text-green font-bold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
			<?php _e( 'Xem chi tiết', 'bsc' ) ?>
			<?php echo svg( 'arrow-btn', '12', '12' ) ?>
		</a>
	</div>
</div>