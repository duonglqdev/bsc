<?php

/**
Template Name: [Package-2] Danh sách chuyên gia
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Thành phố Hà Nội
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Thành phố Hồ Chí Minh
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="xl:mt-[62px] mt-14 xl:mb-[100px] mb-14">
		<div class="container">
			<form class="flex gap-6 items-end mb-10" id="form-search-expert">
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Kinh nghiệm
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">1 Năm</option>
						<option value="">10 Năm</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Mệnh
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">Kim</option>
						<option value="">Mộc</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Trình độ học vấn
					</p>
					<select
						class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">Thạc sĩ</option>
						<option value="">Cử nhân</option>
					</select>
				</div>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						Tên chuyên gia
					</p>
					<input type="text" placeholder="<?php _e( 'Nhập họ tên chuyên gia', 'bsc' ) ?>"
						class="w-[273px] bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
				</div>
				<button type="button" id="search_expert"
					class="btn-base-yellow h-[50px] rounded-xl min-w-[178px]">
					<span class="block relative z-10">
						<?php _e( 'Tìm kiếm', 'bsc' ) ?>
					</span>
				</button>
			</form>
			<div class="grid lg:grid-cols-4 grid-cols-2 gap-x-5 gap-y-6">
				<div class="rounded-2xl bg-gradient-blue-200 py-6 px-[12px] space-y-4 h-full">
					<div class="flex flex-col items-center">
						<div class="w-[120px] h-[120px] rounded-full">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();