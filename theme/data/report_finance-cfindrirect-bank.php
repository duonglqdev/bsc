<?php
return [ 

	// I. Lưu chuyển tiền thuần từ hoạt động kinh doanh trước những thay đổi về tài sản và công nợ hoạt động
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh trước những thay đổi về tài sản và công nợ hoạt động', 'bsc' ),
		'order' => 2,
		'children' => [ 
			// 1. Lợi nhuận trước thuế
			[ 
				'title' => '1. ' . __( 'Lợi nhuận trước thuế', 'bsc' ),
				'order' => 3,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Khấu hao TSCĐ, bất động sản đầu tư', 'bsc' ),
						'order' => 4,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Dự phòng rủi ro tín dụng, giảm giá, dự trữ tăng thêm/(hoàn nhập) trong năm', 'bsc' ),
						'order' => 5,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi và phí phải thu trong kỳ (thực tế chưa thu)', 'bsc' ),
						'order' => 6,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi và phí phải trả trong kỳ (thực tế chưa trả)', 'bsc' ),
						'order' => 7,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( '(Lãi)/(lỗ) do thanh lý TSCĐ', 'bsc' ),
						'order' => 8,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( '(Lãi)/(lỗ) do bán, thanh lý bất động sản đầu tư', 'bsc' ),
						'order' => 9,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( '(Lãi)/(lỗ) do thanh lý những khoản đầu tư, góp vốn dài hạn vào đơn vị khác, cổ tức nhận được, lợi nhuận được chia từ HĐ đầu tư, góp vốn dài hạn', 'bsc' ),
						'order' => 10,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chênh lệch tỷ giá hối đoái chưa thực hiện', 'bsc' ),
						'order' => 11,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Các điều chỉnh khác', 'bsc' ),
						'order' => 12,
						'children' => [],
					],
				],
			],

			// 2. (Tăng)/Giảm các khoản tiền, vàng gửi và cho vay các tổ chức tín dụng khác
			[ 
				'title' => '2. ' . __( '(Tăng)/ Giảm các khoản tiền, vàng gửi và cho vay các tổ chức tín dụng khác', 'bsc' ),
				'order' => 13,
				'children' => [],
			],

			// 3. (Tăng)/ Giảm các khoản về kinh doanh chứng khoán
			[ 
				'title' => '3. ' . __( '(Tăng)/ Giảm các khoản về kinh doanh chứng khoán', 'bsc' ),
				'order' => 14,
				'children' => [],
			],

			// 4. (Tăng)/ Giảm các công cụ tài chính phái sinh và các tài sản tài chính khác
			[ 
				'title' => '4. ' . __( '(Tăng)/ Giảm các công cụ tài chính phái sinh và các tài sản tài chính khác', 'bsc' ),
				'order' => 15,
				'children' => [],
			],

			// 5. (Tăng)/ Giảm các khoản cho vay khách hàng
			[ 
				'title' => '5. ' . __( '(Tăng)/ Giảm các khoản cho vay khách hàng', 'bsc' ),
				'order' => 16,
				'children' => [],
			],

			// 6. (Giảm)/ Tăng lãi, phí phải thu
			[ 
				'title' => '6. ' . __( '(Giảm)/ Tăng lãi, phí phải thu', 'bsc' ),
				'order' => 17,
				'children' => [],
			],

			// 7. (Giảm)/ Tăng nguồn dự phòng để bù đắp tổn thất các khoản
			[ 
				'title' => '7. ' . __( '(Giảm)/ Tăng nguồn dự phòng để bù đắp tổn thất các khoản', 'bsc' ),
				'order' => 18,
				'children' => [],
			],

			// 8. (Tăng)/ Giảm khác về tài sản hoạt động
			[ 
				'title' => '8. ' . __( '(Tăng)/ Giảm khác về tài sản hoạt động', 'bsc' ),
				'order' => 19,
				'children' => [],
			],

			// 9. (Tăng)/ Giảm các khoản nợ Chính phủ và NHNN
			[ 
				'title' => '9. ' . __( '(Tăng)/ Giảm các khoản nợ Chính phủ và NHNN', 'bsc' ),
				'order' => 20,
				'children' => [],
			],

			// 10. (Tăng)/ Giảm các khoản tiền gửi và vay các TCTD
			[ 
				'title' => '10. ' . __( '(Tăng)/ Giảm các khoản tiền gửi và vay các TCTD', 'bsc' ),
				'order' => 21,
				'children' => [],
			],

			// 11. (Tăng)/ Giảm tiền gửi của khách hàng (bao gồm cả Kho bạc Nhà nước)
			[ 
				'title' => '11. ' . __( '(Tăng)/ Giảm tiền gửi của khách hàng (bao gồm cả Kho bạc Nhà nước)', 'bsc' ),
				'order' => 22,
				'children' => [],
			],

			// 12. (Tăng)/ Giảm các công cụ TC phái sinh và các khoản nợ tài chính khác
			[ 
				'title' => '12. ' . __( '(Tăng)/ Giảm các công cụ TC phái sinh và các khoản nợ tài chính khác', 'bsc' ),
				'order' => 23,
				'children' => [],
			],

			// 13. (Tăng)/ Giảm vốn tài trợ, ủy thác đầu tư, cho vay TCTD chịu rủi ro
			[ 
				'title' => '13. ' . __( '(Tăng)/ Giảm vốn tài trợ, ủy thác đầu tư, cho vay các TCTD chịu rủi ro', 'bsc' ),
				'order' => 24,
				'children' => [],
			],

			// 14. (Tăng)/ Giảm phát hành giấy tờ có giá (ngoại trừ GTGC được tính vào hoạt động tài chính)
			[ 
				'title' => '14. ' . __( '(Tăng)/ Giảm phát hành giấy tờ có giá (ngoại trừ GTGC được tính vào hoạt động tài chính)', 'bsc' ),
				'order' => 25,
				'children' => [],
			],

			// 15. (Tăng)/ Giảm lãi, phí phải trả
			[ 
				'title' => '15. ' . __( '(Tăng)/ Giảm lãi, phí phải trả', 'bsc' ),
				'order' => 26,
				'children' => [],
			],

			// 16. (Tăng)/ Giảm khác về công nợ hoạt động
			[ 
				'title' => '16. ' . __( '(Tăng)/ Giảm khác về công nợ hoạt động', 'bsc' ),
				'order' => 27,
				'children' => [],
			],

			// 17. Thuế TNDN đã nộp
			[ 
				'title' => '17. ' . __( 'Thuế TNDN đã nộp', 'bsc' ),
				'order' => 28,
				'children' => [],
			],

			// 18. Chi từ các quỹ của TCTD
			[ 
				'title' => '18. ' . __( 'Chi từ các quỹ của TCTD', 'bsc' ),
				'order' => 29,
				'children' => [],
			],
		],
	],

	// II. Lưu chuyển tiền thuần từ hoạt động kinh doanh trước thuế thu nhập DN
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh trước thuế thu nhập DN', 'bsc' ),
		'order' => 30,
		'children' => [],
	],

	// III. Lưu chuyển tiền thuần từ hoạt động kinh doanh
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh', 'bsc' ),
		'order' => 31,
		'children' => [],
	],

	// IV. Lưu chuyển từ hoạt động đầu tư
	[ 
		'title' => 'IV. ' . __( 'Lưu chuyển từ hoạt động đầu tư', 'bsc' ),
		'order' => 32,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Mua sắm TSCĐ', 'bsc' ),
				'order' => 33,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu từ thanh lý, nhượng bán TSCĐ', 'bsc' ),
				'order' => 34,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi từ thanh lý, nhượng bán TSCĐ', 'bsc' ),
				'order' => 35,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Mua sắm bất động sản đầu tư', 'bsc' ),
				'order' => 36,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền thu từ bán, thanh lý bất động sản đầu tư', 'bsc' ),
				'order' => 37,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Tiền chi ra do bán, thanh lý bất động sản đầu tư', 'bsc' ),
				'order' => 38,
				'children' => [],
			],
			[ 
				'title' => '7. ' . __( 'Tiền chi đầu tư, góp vốn vào các đơn vị khác (Chi đầu tư mua công ty con, liên doanh, liên kết, và các khoản đầu tư dài hạn khác)', 'bsc' ),
				'order' => 39,
				'children' => [],
			],
			[ 
				'title' => '8. ' . __( 'Tiền thu đầu tư, góp vốn vào các đơn vị khác (Thu bán, thanh lý công ty con, liên doanh, liên kết, các khoản đầu tư dài hạn khác)', 'bsc' ),
				'order' => 40,
				'children' => [],
			],
			[ 
				'title' => '9. ' . __( 'Tiền thu cổ tức và lợi nhuận được chia từ các khoản đầu tư, góp vốn dài hạn', 'bsc' ),
				'order' => 41,
				'children' => [],
			],
		],
	],

	// V. Lưu chuyển tiền từ hoạt động tài chính
	[ 
		'title' => 'V. ' . __( 'Lưu chuyển tiền từ hoạt động tài chính', 'bsc' ),
		'order' => 42,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tăng vốn cổ phần từ góp vốn và/hoặc phát hành cổ phiếu', 'bsc' ),
				'order' => 43,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu phát hành giấy tờ có giá dài hạn do điều kiện xếp vào vốn tự có và các khoản vốn vay dài hạn khác', 'bsc' ),
				'order' => 44,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi thanh toán giấy tờ có giá dài hạn do điều kiện xếp vào vốn tự có và các khoản vốn vay dài hạn khác', 'bsc' ),
				'order' => 45,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Cổ tức trả cho cổ đông, lợi nhuận đã chia', 'bsc' ),
				'order' => 46,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền chi ra mua cổ phiếu quỹ', 'bsc' ),
				'order' => 47,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Tiền thu được do bán cổ phiếu quỹ', 'bsc' ),
				'order' => 48,
				'children' => [],
			],
		],
	],

	// VI. Lưu chuyển tiền thuần trong kỳ
	[ 
		'title' => 'VI. ' . __( 'Lưu chuyển tiền thuần trong kỳ', 'bsc' ),
		'order' => 49,
		'children' => [],
	],

	// VII. Tiền và các khoản tương đương tiền tại thời điểm đầu kỳ
	[ 
		'title' => 'VII. ' . __( 'Tiền và các khoản tương đương tiền tại thời điểm đầu kỳ', 'bsc' ),
		'order' => 50,
		'children' => [],
	],

	// VIII. Điều chỉnh ảnh hưởng của thay đổi tỷ giá
	[ 
		'title' => 'VIII. ' . __( 'Điều chỉnh ảnh hưởng của thay đổi tỷ giá', 'bsc' ),
		'order' => 51,
		'children' => [],
	],

	// IX. Tiền và các khoản tương đương tiền tại thời điểm cuối kỳ
	[ 
		'title' => 'IX. ' . __( 'Tiền và các khoản tương đương tiền tại thời điểm cuối kỳ', 'bsc' ),
		'order' => 52,
		'children' => [],
	],
];
