<?php

/**
Template Name: Về chúng tôi
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-primary-50 shadow-menu !shadow-[#0000001A] about_nav">
		<div class="container">
			<ul class="flex items-center justify-between gap-5">
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Giới
						thiệu BSC</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Tầm
						nhìn & Sứ mệnh</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Lịch
						sử hình thành</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Đội
						ngũ lãnh đạo</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Đối
						tác chiến lược</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Văn
						hóa BSC</a></li>
				<li><a href=""
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Giải
						thưởng nổi bật</a></li>
			</ul>
		</div>
	</section>
	<section class="about_info lg:py-32 py-20">
		<div class="container">
			<h2 class="heading-title text-center mb-4">
				Về chúng tôi
			</h2>
			<div
				class="relative max-w-[734px] mx-auto lg:mb-[50px] mb-10 lg:text-2xl text-xl font-bold text-primary-400 text-center">
				<div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
					<?php echo svg( 'quote' ) ?>
				</div>
				“Là một định chế tài chính trung gian uy tín và giàu kinh nghiệm, BSC tự hào là cầu
				nối gắn kết giữa các nền kinh tế, các NĐT tổ chức, cá nhân trong và ngoài nước”
			</div>
			<div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-20 gap-10 items-center">
				<div class="the_content text-black font-normal font-Helvetica">
					<p>
						Được thành lập từ ngày 18/11/1999, tiền thân là Công ty TNHH Chứng khoán
						Ngân hàng Đầu tư và Phát triển Việt Nam, <strong>Công ty Cổ phần Chứng khoán
							BIDV (BSC)</strong> là một trong hai công ty chứng khoán thành lập đầu
						tiên trên thị trường.
					</p>
					<p>
						Trải qua hơn 2 thập kỷ đồng hành cùng thị trường chứng khoán, BSC phát triển
						không ngừng và khẳng định vị thế tiên phong của định chế tài chính trung
						gian, công ty chứng khoán uy tín tại Việt Nam và trong khu vực.
					</p>
					<p>
						Với nguồn lực vững mạnh về nhân sự, công nghệ và tài chính cùng sự hỗ trợ đa
						phương diện từ BIDV,  đối tác chiến lược Hana Securities (Hàn Quốc), BSC
						luôn kiên định với sứ mệnh trở thành <strong>Người bạn đồng hành đáng tin
							cậy</strong> của cổ đông, đối tác và khách hàng.
					</p>
				</div>
				<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox=""
					class="rounded-[10px] overflow-hidden pt-[54%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-info.png"
						alt="" class="absolute w-full h-full inset-0 object-cover">
					<div
						class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
						<?php echo svg( 'play' ) ?>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="about_mission lg:mb-[100px] mb-20">
		<div class="container">
			<div class="grid gap-5 md:grid-cols-2 grid-cols-1">
				<div class="h-full bg-gradient-menu rounded-[10px] lg:px-9 px-4 lg:py-20 py-10">
					<h2 class="heading-title mb-4">
						SỨ MỆNH
					</h2>
					<div class="text-primary-300 lg:text-2xl text-xl font-bold text-justify">
						Đóng góp tích cực cho sự phát triển của Thị trường Chứng khoán Việt Nam, đem
						lại lợi ích tối ưu cho cổ đông, đối tác và khách hàng.
					</div>
				</div>
				<div class="h-full bg-gradient-menu rounded-[10px] lg:px-9 px-4 lg:py-20 py-10">
					<h2 class="heading-title mb-4">
						TẦM NHÌN
					</h2>
					<div class="text-primary-300 lg:text-2xl text-xl font-bold text-justify">
						Trở thành Công ty Chứng khoán uy tín hàng đầu, dựa trên nền tảng công nghệ
						số tiên tiến và hệ thống các sản phẩm dịch vụ toàn diện đem lại giá trị tối
						ưu cho khách hàng.
					</div>
				</div>
			</div>
			<div class="mt-10">
				<h2 class="heading-title mb-5 text-center">
					GIÁ TRỊ CỐT LÕI
				</h2>
				<div class="grid md:grid-cols-3 grid-cols-1 gap-5">
					<div
						class="h-full bg-gradient-menu rounded-[10px] lg:px-7 px-4 pt-4 lg:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase text-2xl font-bold">
								NIỀM TIN
							</h3>
							<?php echo svg( 'faith' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Xây dựng niềm tin vững chắc với Cổ đông, Người lao động, Đối tác và
							Khách hàng dựa trên tinh thần Thượng tôn pháp luật, minh bạch và chuyên
							nghiệp trong mọi hoạt động.
						</div>
					</div>
					<div
						class="h-full bg-gradient-menu rounded-[10px] lg:px-7 px-4 pt-4 lg:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase text-2xl font-bold">
								HỢP LỰC
							</h3>
							<?php echo svg( 'unite' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Hợp sức đồng lòng của mỗi cá nhân, tập thể; giữa sức mạnh nội tại của tổ
							chức và lợi thế của đối tác chiến lược…. là sức mạnh đóng góp vào thành
							công chung của BSC.
						</div>
					</div>
					<div
						class="h-full bg-gradient-menu rounded-[10px] lg:px-7 px-4 pt-4 lg:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase text-2xl font-bold">
								SÁNG TẠO
							</h3>
							<?php echo svg( 'creative' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Không ngừng tư duy, học hỏi và đón nhận những tri thức mới, công nghệ
							mới mang đến những giá trị tối ưu cho đối tác và khách hàng.
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="about_history bg-primary-50 py-14">
		<div class="container">
			<h2 class="heading-title text-primary-700 mb-12">
				LỊCH SỬ HÌNH THÀNH
			</h2>
			<div class="about_history-content"
				>
				<?php
				for ( $i = 0; $i < 7; $i++ )
				{
					?>

					<div class="w-full">
						<div class="lg:flex">
							<div class="max-w-[547px] w-full">
								<div class="rounded-[20px] overflow-hidden relative pt-[70.21%] group">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-his.png"
										alt=""
										class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-110">
								</div>
							</div>
							<div class="lg:ml-20 lg:mt-0 mt-5">
								<h3
									class="text-primary-500 xl:text-[75px] md:text-5xl text-4xl font-bold mb-5">
									2019 - 2023
								</h3>
								<div class="text-primary-500 text-xl font-bold mb-4">
									Hợp tác chiến lược với cổ đông nước ngoài Hana Securities -
									Hàn Quốc  
								</div>
								<div class="the_content">
									<p>
										<strong>2019:</strong>  Tăng vốn điều lệ lên 1.220 tỷ đồng
									</p>
									<p>
										<strong>2020:</strong> Ra mắt sản phẩm mới ứng dụng công nghệ
										hiện đại hỗ trợ nhà
										đầu tư là i-Broker và i-Invest; sản phẩm Quản lý tài sản cá nhân
										i-Fortune
									</p>
									<p>
										<strong>2021:</strong> Ra mắt tính năng mở tài khoản trực tuyến
										trên website và
										thông qua ứng dụng BIDV Smart Banking có ứng dụng công nghệ
										eKYC.
									</p>
									<p>
										<strong>2022:</strong> Ra mắt ứng dụng đầu tư chứng khoán thế hệ
										mới – BSC Smart
										Invest.
										Hợp tác chiến lược với đối tác Hana Securities  nâng tổng vốn
										chủ sở hữu lên gần 4.400 tỷ đồng.
										Chính thức thay đổi bộ nhận diện thương hiệu .
									</p>


								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>
			<div class="max-w-[940px] mx-auto mt-[45px]">
				<div class="about_history-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 ">
					<?php
					for ( $i = 0; $i < 7; $i++ )
					{
						?>
						<div class="lg:w-1/5 w-1/3 px-4 [&:not(.slick-current)]:text-black text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_history-item cursor-pointer">
							<div class="text-center">
								2019 - 2023
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>

		</div>
	</section>
</main>
<?php
get_footer();