<?php
$post_id = get_the_ID();
$fullname = get_the_title();
?>
<div class="bg-gradient-blue-200 flex flex-col h-full font-Helvetica expert_item <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-2xl py-6 gap-4 px-[12px]' : 'rounded-xl py-[12px] space-y-2 px-2' ?>"
	data-id="<?php the_field( 'ma_moi_gioi' ) ?>">
	<div class="flex flex-col items-center">
		<div
			class="rounded-full overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[120px]' : 'w-[73px]' ?>">
			<div class="relative w-full pt-[100%] group expert-img">
				<img loading="lazy" src="<?php echo bsc_post_thumbnail_medium() ?>" alt="<?php echo $fullname ?>"
					class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
			</div>
		</div>
		<?php
		$menh = get_the_terms( $post_id, 'menh' );
		if ( $menh ) {
			?>
			<div class="expert-destiny <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '-mt-5' : '-mt-3' ?>">
				<div class="rounded-[45px]  py-1 inline-flex gap-[6px] items-center font-semibold relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-[12px] px-[14px]' : 'sm:text-[12px] text-[10px] pl-[7px] pr-3' ?>"
					style="background-color:<?php the_field( 'background', $menh[0] ) ?>; color:<?php the_field( 'color', $menh[0] ) ?>;">
					<div
						class="bg-white rounded-full flex items-center justify-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-5 h-5' : 'w-4 h-4' ?>">
						<?php echo wp_get_attachment_image( get_field( 'icon', $menh[0] ), 'medium', '', array( 'class' => 'w-[12px] h-[12px] object-contain' ) ) ?>
					</div>
					<?php echo $menh[0]->name; ?>
				</div>
			</div>
		<?php } ?>
		<h4
			class="font-bold mt-1 expert-name <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl' : 'text-xs text-center' ?>">
			<?php echo $fullname ?>
		</h4>

		<?php
		$ma_moi_gioi = get_field( 'ma_moi_gioi' ) ?: __( 'Đang cập nhật', 'bsc' );
		?>
		<div class="text-center mt-1 sm:text-xs text-xxs expert-mmg">
			<?php _e( 'Mã tư vấn:', 'bsc' ); ?> <strong><?php echo esc_html( $ma_moi_gioi ); ?></strong>
		</div>
	</div>
	<div
		class="expert-contact <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px] bg-white px-[14px] py-4 flex items-center' : '' ?>">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1 2xl:pr-4 pr-3  2xl:mr-4 mr-3 border-r border-[#E9E9E9] max-w-[75%]' : 'hidden' ?>">
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
				<p class="font-bold mb-[12px]">
					<?php _e( 'Thông tin liên hệ', 'bsc' ) ?>
				</p>

			<?php } ?>
			<?php if ( get_field( 'number' ) ) { ?>
				<a href="tel:<?php the_field( 'number' ) ?>"
					class="block relative pl-6 text-xs break-words <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'show-block hidden' ?>">
					<?php echo svgClass( 'fone', '19', '19', 'absolute top-0.5 left-0' ) ?>
					<?php the_field( 'number' ) ?>
				</a>
			<?php } ?>
			<?php if ( get_field( 'email' ) ) { ?>
				<a href="mailto:<?php the_field( 'email' ) ?>"
					class="block relative pl-6 text-xs break-words <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'show-block hidden' ?>">
					<?php echo svgClass( 'e-mail', '19', '19', 'absolute top-0.5 left-0' ) ?>
					<?php the_field( 'email' ) ?>
				</a>
			<?php } ?>
		</div>
		<?php if ( get_field( 'ma_qr' ) && ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
			<a href="<?php echo esc_url( wp_get_attachment_image_src( get_field( 'ma_qr' ), 'large' )[0] ); ?>"
				class="max-w-[65px] flex-1 shrink-0 expert-qr block" data-fancybox>
				<?php echo wp_get_attachment_image( get_field( 'ma_qr' ), 'medium', '', array( 'class' => 'w-full h-auto transition-all duration-500 hover:scale-105' ) ); ?>
			</a>
		<?php } ?>
	</div>
	<ul
		class="expert-info text-justify <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs space-y-3' : 'sm:text-xs text-[11px] space-y-1' ?>">
		<?php
		$kinh_nghiem = get_the_terms( $post_id, 'kinh-nghiem' );
		if ( $kinh_nghiem ) {
			?>
			<li class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2 items-start' : 'gap-1 show-gap-2' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
					<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
				<?php else : ?>
					<?php echo svgClass( 'kn', '18', '18', 'shrink-0 translate-y-[2px]' ) ?>
				<?php endif; ?>
				<p>
					<?php _e( 'Kinh nghiệm', 'bsc' ) ?>:
					<strong><?php echo $kinh_nghiem[0]->name; ?></strong>
				</p>
			</li>
		<?php } ?>
		<?php
		$trinh_do_hoc_van = get_the_terms( $post_id, 'trinh-do-hoc-van' );
		if ( $trinh_do_hoc_van ) {
			?>
			<li class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2 items-start' : 'gap-1 show-gap-2' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
					<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
				<?php else : ?>
					<?php echo svgClass( 'hv', '18', '18', 'shrink-0 translate-y-[1px]' ) ?>
				<?php endif; ?>
				<p>
					<?php _e( 'Trình độ học vấn', 'bsc' ) ?>:
					<strong><?php echo $trinh_do_hoc_van[0]->name; ?></strong>
				</p>
			</li>
		<?php } ?>
		<?php
		$truong_phai_dau_tu = get_field( 'truong_phai_dau_tu' );
		if ( $truong_phai_dau_tu ) {
			?>
			<li class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2 items-start' : 'gap-1 show-gap-2' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
					<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
				<?php else : ?>
					<?php echo svgClass( 'tpdt', '18', '18', 'shrink-0 translate-y-[1px]' ) ?>
				<?php endif; ?>
				<p>
					<?php _e( 'Trường phái đầu tư', 'bsc' ) ?>:
					<strong><?php the_field( 'truong_phai_dau_tu' ) ?></strong>
				</p>
			</li>
		<?php } ?>
		<?php
		$dia_chi = get_the_terms( $post_id, 'thanh-pho' );
		if ( $dia_chi ) {
			?>
			<li
				class="flex  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2 items-start' : 'gap-1 show-flex hidden show-gap-2' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
					<?php echo svgClass( 'triangle', '20', '20', 'shrink-0' ) ?>
				<?php else : ?>
					<?php echo svgClass( 'dc', '18', '18', 'shrink-0 translate-y-[1px]' ) ?>
				<?php endif; ?>
				<p>
					<?php _e( 'Địa chỉ', 'bsc' ) ?>: <strong><?php echo $dia_chi[0]->name; ?></strong>
				</p>
			</li>
		<?php } ?>
	</ul>

	<div class="mt-auto">
		<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
			<div class="grid grid-cols-2 gap-1.5 mb-1.5">
				<?php if ( get_field( 'number' ) ) { ?>
					<a href="tel:<?php the_field( 'number' ) ?>"
						class="text-center p-1 rounded-md bg-gradient-blue-50 h-8 flex items-center justify-center">
						<?php echo svgClass( 'fone', '20', '20' ) ?>
					</a>
				<?php } ?>
				<?php if ( get_field( 'email' ) ) { ?>
					<a href="mailto:<?php the_field( 'email' ) ?>"
						class="text-center p-1 rounded-md bg-gradient-blue-50 h-8 flex items-center justify-center">
						<?php echo svgClass( 'e-mail', '20', '20' ) ?>
					</a>
				<?php } ?>
			</div>
		<?php } ?>
		<div
			class="grid font-body expert-btn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-2' : 'grid-cols-1 gap-1.5' ?>">
			<?php if ( get_field( 'link' ) ) { ?>
				<a href="<?php echo check_link( get_field( 'link' ) ) ?>" target="_blank"
					class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 rounded-lg font-bold relative transition-all duration-500 text-center w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs py-3' : 'sm:text-xs text-xxs py-1.5' ?>">
					<span class="block relative z-10">
						<?php _e( 'Mở tài khoản', 'bsc' ) ?>
					</span>
				</a>
			<?php } ?>
			<button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
				class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 rounded-lg font-bold relative transition-all duration-500 text-center w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs py-3' : 'sm:text-xs text-xxs py-1.5' ?>">
				<span class="block relative z-10">
					<?php _e( 'Chi tiết chuyên gia', 'bsc' ) ?>
				</span>
			</button>
		</div>
	</div>
	<div class="hidden expert-desc">
		<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'space-y-4' ?>">
			<?php if ( get_field( 'introduce' ) ) { ?>
				<div class="intro">
					<p class="font-bold mb-2">
						<?php _e( 'Giới thiệu bản thân', 'bsc' ) ?>
					</p>
					<div class="text-xs">
						<?php the_field( 'introduce' ) ?>
					</div>
				</div>
			<?php } ?>
			<?php if ( get_field( 'exp' ) ) { ?>
				<div class="intro">
					<p class="font-bold mb-2">
						<?php _e( 'Kinh nghiệm', 'bsc' ) ?>
					</p>
					<div class="text-xs">
						<?php the_field( 'exp' ) ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>