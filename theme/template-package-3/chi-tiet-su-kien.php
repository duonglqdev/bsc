<?php

/**
Template Name: [Package 3] Chi tiết sự kiện
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<div class="lg:flex gap-[70px]">
				<div class="lg:w-80 lg:max-w-[35%] shrink-0">
					<div class="sticky top-5 z-10">
						<div class="rounded-lg px-4 py-6 shadow-base">
							<ul
								class="prose-li:flex prose-li:items-center prose-li:justify-between space-y-3 text-xs prose-p:font-medium prose-strong:text-primary-300 font-Helvetica">
								<li>
									<span>
										Mã chứng khoán:
									</span>
									<strong>
										BSI
									</strong>
								</li>
								<li>
									<span>
										Loại sự kiện:
									</span>
									<p>
										Cổ tức bằng tiền
									</p>
								</li>
								<li>
									<span>
										Ngày chốt:
									</span>
									<p>
										09/08/2024
									</p>
								</li>
								<li>
									<span>
										Ngày đăng ký:
									</span>
									<p>
										12/08/2024
									</p>
								</li>
								<li>
									<span>
										Ngày thực thi:
									</span>
									<p>
										28/08/2024
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="flex-1">
					<h1 class="lg:text-[32px] text-2xl font-bold mb-8 !leading-[1.43]">
						Thông báo ngày đăng ký cuối cùng lập danh sách cổ đông với cổ phiếu BBS của
						Công ty CP Vicem bao bì Bút Sơn như sau:
					</h1>
					<div class="space-y-4 font-Helvetica">
						<p class="lg:text-2xl text-lg font-bold">
							Chi tiết
						</p>
						<p>
							<strong>Ngày đăng ký cuối cùng:</strong> 12/08/2024
						</p>
						<p>
							<strong>Ngày giao dịch không hưởng quyền:</strong> 09/08/2024
						</p>
						<p>
							<strong>Lý do và mục đích:</strong>
						</p>
						<div
							class="prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 marker:text-xs">
							<strong>Trả cổ tức bằng tiền:</strong>
							<ol>
								<li>
									Hình thức trả: Trả cổ tức bằng tiền năm 2023
								</li>
								<li>
									Tỷ lệ thực hiện: 9%/ cổ phiếu 1 cổ phiếu được nhận 900 đồng
								</li>
								<li>
									Thời gian thực hiện: 28/08/2024
								</li>
								<li>
									Địa điểm thực hiện:
									<ul>
										<li>
											Chứng khoán chưa lưu ký: : Người sở hữu làm thủ tục nhận
											cổ tức tại Trụ sở Công ty cổ phần Vicem Bao bì Bút Sơn -
											Địa chỉ: Km2 Văn Cao, xã Lộc An, thành phố Nam Định,
											tỉnh Nam Định bắt đầu từ ngày 28/08/2024 và xuất trình
											chứng minh thư nhân dân/căn cước công dân.
										</li>
										<li>
											Chứng khoán lưu ký: Người sở hữu làm thủ tục nhận cổ tức
											tại các Thành viên lưu ký nơi mở tài khoản lưu ký.
										</li>
									</ul>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();