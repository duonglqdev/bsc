<?php

/**
Template Name: Chi tiết tuyển dụng
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-10':'my-[50px]' ?>">
		<div class="container">
			<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-3':'' ?>">
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'col-span-2':'' ?>">
					<h1 class="font-bold mb-10 leading-[1.43] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:text-[32px] 2xl:text-2xl text-xl':'text-[22px]' ?>">
						<?php the_title() ?>
					</h1>
				</div>
			</div>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex 2xl:gap-[70px] gap-12':'space-y-6' ?>">
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[320px] max-w-[35%]':'w-full' ?>">
					<div class="bg-[#F5FCFF] py-5 px-6 rounded-[10px]">
						<h3 class="text-primary-300 uppercase font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl':'' ?>">
							<?php _e('THÔNG TIN CHUNG', 'bsc') ?>
						</h3>
						<div class="mt-[12px]">
							<?php
							$post_id = get_the_ID();
							$nghiep_vu = get_the_terms($post->ID, 'nghiep-vu');
							if ($nghiep_vu) {
							?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Nghiệp vụ', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php echo $nghiep_vu[0]->name ?>
									</p>
								</div>
							<?php } ?>
							<?php if (get_field('nganh_nghe')) { ?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Ngành nghề', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php the_field('nganh_nghe') ?>
									</p>
								</div>
							<?php } ?>
							<?php if (get_field('ma_vi_tri')) { ?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Mã vị trí', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php the_field('ma_vi_tri') ?>
									</p>
								</div>
							<?php } ?>
							<?php
							$post_id = get_the_ID();
							$noi_lam_viec = get_the_terms($post->ID, 'noi-lam-viec');
							if ($noi_lam_viec) {
							?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Địa điểm làm việc', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php echo $noi_lam_viec[0]->name ?>
									</p>
								</div>
							<?php } ?>
							<?php if (get_field('cap_bac')) { ?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Cấp bậc', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php the_field('cap_bac') ?>
									</p>
								</div>
							<?php } ?>
							<?php if (get_field('muc_luong')) { ?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Mức lương', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php the_field('muc_luong') ?>
									</p>
								</div>
							<?php } ?>
							<?php if (get_field('deadline')) { ?>
								<div
									class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
									<p class="text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs mb-2':'text-[12px] mb-1.5' ?>">
										<?php _e('Hạn nộp hồ sơ', 'bsc') ?>
									</p>
									<p class="font-bold text-xs">
										<?php $deadline = get_field('deadline');
										$deadline_date = DateTime::createFromFormat('Ymd', $deadline);

										if ($deadline_date) {
											echo $deadline_date->format('d/m/Y');
										}  ?>
									</p>
								</div>
							<?php } ?>
						</div>
						<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
							<?php $current_date = new DateTime(current_time('Y-m-d'));
							if (get_field('check_tuyen_xong') || $deadline_date < $current_date) {
							} else { ?>
								<div class="mt-[12px]">
									<button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
										class="btn-base-yellow w-full h-full rounded-xl">
										<span class="block relative z-10">
											<?php _e('Ứng tuyển ngay', 'bsc') ?>
										</span>
									</button>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1 space-y-[30px]':'space-y-6' ?>">
					<div
						class="font-Helvetica content_item prose prose-h1:text-[#235BA8] prose-h2:text-[#235BA8] prose-h3:text-[#235BA8] prose-h4:text-[#235BA8] prose-h5:text-[#235BA8] prose-h6:text-[#235BA8] prose-li:my-[2px] prose-li:marker:text-black prose-ul:mb-0  first:prose-h2:mt-0 prose-h2:mb-2 text-black <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-h2:mt-[30px]':'prose-h2:text-lg text-xs prose-li:pl-0 prose-h2:mt-6' ?>">
						<?php the_content() ?>
					</div>

				</div>
				<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
							<?php $current_date = new DateTime(current_time('Y-m-d'));
							if (get_field('check_tuyen_xong') || $deadline_date < $current_date) {
							} else { ?>
									<button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
										class="btn-base-yellow w-full h-full rounded-lg text-xs text-center">
											<?php _e('Ứng tuyển ngay', 'bsc') ?>
									</button>
							<?php } ?>
						<?php } ?>
			</div>
		</div>
	</section>
	<?php
	$custom_taxterms = wp_get_object_terms($post->ID, 'nghiep-vu', array('fields' => 'ids'));
	$args = array(
		'post_type' => 'tuyen-dung',
		'post_status' => 'publish',
		'posts_per_page' => 4,
		'orderby' => 'meta_value_num',
		'meta_key' => 'deadline',
		'order' => 'DESC',
		'tax_query' => array(
			array(
				'taxonomy' => 'nghiep-vu',
				'field' => 'id',
				'terms' => $custom_taxterms
			)
		),
		'post__not_in' => array($post->ID),
	);
	$related_items = new WP_Query($args);
	if ($related_items->have_posts()) : ?>
		<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-10':'my-[50px]' ?>">
			<div class="container">
				<h3 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-primary-300 text-[32px]':'text-[22px]' ?>">
					<?php _e('CÁC VỊ TRÍ TUYỂN DỤNG KHÁC', 'bsc') ?>
				</h3>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-6' ?>">
					<?php
					while ($related_items->have_posts()) :
						$related_items->the_post();
						get_template_part('template-parts/content', get_post_type());
					endwhile;
					?>

				</div>
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
				{ ?>
					<div
						class="px-6 py-[12px] btn-base-yellow text-xs font-bold text-center flex items-center justify-center gap-2 show-item-btn mt-8">
							<?php echo svg( 'arrow-btn','16','16' ) ?>
							<?php _e( 'Xem thêm', 'bsc' ) ?>
					</div>

				<?php } ?>
			</div>
		</section>
	<?php endif;
	wp_reset_postdata(); ?>
</main>
<div id="popup-modal" tabindex="-1"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-80">
	<div class="relative max-w-[90%] w-[600px] max-h-full">
		<div class="relative bg-white rounded-[15px] shadow  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-[50px] px-5 2xl:py-10 py-5':'p-6' ?>">
			<button type="button"
				class="absolute top-3 end-2.5 w-9 h-9 rounded-full bg-white shadow-header text-primary-300 flex items-center justify-center"
				data-modal-hide="popup-modal">
				<svg width="13" height="12" viewBox="0 0 13 12" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M7.44323 6.08837L12.0601 1.47881C12.1981 1.34081 12.2756 1.15365 12.2756 0.958494C12.2756 0.763338 12.1981 0.576174 12.0601 0.438178C11.9221 0.300182 11.735 0.222656 11.5398 0.222656C11.3446 0.222656 11.1575 0.300182 11.0195 0.438178L6.40993 5.05506L1.80037 0.438178C1.66238 0.300182 1.47521 0.222656 1.28006 0.222656C1.0849 0.222656 0.897738 0.300182 0.759741 0.438178C0.621745 0.576174 0.54422 0.763338 0.54422 0.958494C0.54422 1.15365 0.621745 1.34081 0.759741 1.47881L5.37663 6.08837L0.759741 10.6979C0.691053 10.7661 0.636535 10.8471 0.599329 10.9364C0.562124 11.0257 0.542969 11.1215 0.542969 11.2182C0.542969 11.315 0.562124 11.4108 0.599329 11.5001C0.636535 11.5894 0.691053 11.6704 0.759741 11.7386C0.827868 11.8072 0.908921 11.8618 0.998224 11.899C1.08753 11.9362 1.18331 11.9553 1.28006 11.9553C1.3768 11.9553 1.47259 11.9362 1.56189 11.899C1.65119 11.8618 1.73225 11.8072 1.80037 11.7386L6.40993 7.12167L11.0195 11.7386C11.0876 11.8072 11.1687 11.8618 11.258 11.899C11.3473 11.9362 11.4431 11.9553 11.5398 11.9553C11.6365 11.9553 11.7323 11.9362 11.8216 11.899C11.9109 11.8618 11.992 11.8072 12.0601 11.7386C12.1288 11.6704 12.1833 11.5894 12.2205 11.5001C12.2577 11.4108 12.2769 11.315 12.2769 11.2182C12.2769 11.1215 12.2577 11.0257 12.2205 10.9364C12.1833 10.8471 12.1288 10.7661 12.0601 10.6979L7.44323 6.08837Z"
						fill="#295CA9" />
				</svg>

				<span class="sr-only"><?php _e('Close modal', 'bsc') ?></span>
			</button>
			<h2 class="uppercase text-primary-300 2xl:mb-5 mb-4 2xl:text-[32px] 2xl:text-2xl text-xl font-bold">
				<?php _e('GỬI ĐƠN ỨNG TUYỂN', 'bsc') ?>
			</h2>
			<?php if (get_field('cdtd_mau_cv', 'option')) { ?>
				<div class="rounded-lg bg-primary-50 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-5 px-4 2xl:py-4 py-3 mb-3':'p-4 text-xs mb-2' ?>">
					<a target="_blank" href="<?php the_field('cdtd_mau_cv', 'option') ?>"
						class="flex items-center justify-between" download>
						<div class="flex items-center font-Helvetica font-medium <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-3':'gap-2' ?>">
							<?php echo svg('docs') ?>
							<p><?php _e('Mẫu CV BSC. docx', 'bsc') ?></p>
						</div>
						<?php echo svg('download2', '20') ?>
					</a>
				</div>
			<?php } ?>
			<p class="font-medium <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
				<?php _e('Vui lòng sử dụng mẫu CV từ BSC ở trên để điền thông tin của bạn, sau đó upload lại
                file CV để ứng tuyển.', 'bsc') ?>
			</p>
			<div class="form_cv font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:mt-[30px] mt-4':'mt-4' ?>">
				<?php echo do_shortcode('[contact-form-7 id="b071499" title="Cơ hội việc làm"]') ?>
			</div>
		</div>
	</div>
</div>



<?php
get_footer();
