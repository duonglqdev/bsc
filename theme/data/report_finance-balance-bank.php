<?php
return [ 
	// I. Tài sản
	[ 
		'title' => 'I. ' . __( 'Tài sản', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền mặt, vàng bạc, đá quí', 'bsc' ),
				'order' => 3,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Tiền gửi tại NHNN', 'bsc' ),
				'order' => 4,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Tiền, vàng gửi tại các TCTD khác và cho vay các TCTD khác', 'bsc' ),
				'order' => 5,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tiền, vàng gửi tại các TCTD khác', 'bsc' ),
						'order' => 6,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cho vay các TCTD khác', 'bsc' ),
						'order' => 7,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng rủi ro cho vay các TCTD khác', 'bsc' ),
						'order' => 8,
						'children' => []
					],
				]
			],
			[ 
				'title' => '4. ' . __( 'Chứng khoán kinh doanh', 'bsc' ),
				'order' => 9,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Chứng khoán kinh doanh', 'bsc' ),
						'order' => 10,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng giảm giá chứng khoán kinh doanh', 'bsc' ),
						'order' => 11,
						'children' => []
					],
				]
			],
			[ 
				'title' => '5. ' . __( 'Các công cụ tài chính phái sinh và các tài sản tài chính khác', 'bsc' ),
				'order' => 12,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Cho vay khách hàng', 'bsc' ),
				'order' => 13,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Cho vay khách hàng', 'bsc' ),
						'order' => 14,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng rủi ro cho vay khách hàng', 'bsc' ),
						'order' => 15,
						'children' => []
					],
				]
			],
			[ 
				'title' => '7. ' . __( 'Hoạt động mua nợ', 'bsc' ),
				'order' => 16,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Mua nợ', 'bsc' ),
						'order' => 17,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng rủi ro hoạt động mua nợ', 'bsc' ),
						'order' => 18,
						'children' => []
					],
				]
			],
			[ 
				'title' => '8. ' . __( 'Chứng khoán đầu tư', 'bsc' ),
				'order' => 19,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Chứng khoán đầu tư sẵn sàng để bán', 'bsc' ),
						'order' => 20,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chứng khoán đầu tư giữ đến ngày đáo hạn', 'bsc' ),
						'order' => 21,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng giảm giá chứng khoán đầu tư', 'bsc' ),
						'order' => 22,
						'children' => []
					],
				]
			],
			[ 
				'title' => '9. ' . __( 'Góp vốn, đầu tư dài hạn', 'bsc' ),
				'order' => 23,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Đầu tư vào công ty con', 'bsc' ),
						'order' => 24,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Vốn góp liên doanh', 'bsc' ),
						'order' => 25,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Đầu tư vào công ty liên kết', 'bsc' ),
						'order' => 26,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Đầu tư dài hạn khác', 'bsc' ),
						'order' => 27,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng giảm giá đầu tư dài hạn', 'bsc' ),
						'order' => 28,
						'children' => []
					],
				]
			],
			[ 
				'title' => '10. ' . __( 'Tài sản cố định', 'bsc' ),
				'order' => 29,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tài sản cố định hữu hình', 'bsc' ),
						'order' => 30,
						'children' => [ 
							[ 
								'title' => '- ' . __( 'Nguyên giá TSCĐ hữu hình', 'bsc' ),
								'order' => 31,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Hao mòn TSCĐ hữu hình', 'bsc' ),
								'order' => 32,
								'children' => []
							],
						],
					],
					[ 
						'title' => '- ' . __( 'Tài sản cố định thuê tài chính', 'bsc' ),
						'order' => 33,
						'children' => [ 
							[ 
								'title' => '- ' . __( 'Nguyên giá TSCĐ thuê tài chính', 'bsc' ),
								'order' => 34,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Hao mòn TSCĐ thuê tài chính', 'bsc' ),
								'order' => 35,
								'children' => []
							],
						]
					],
					[ 
						'title' => '- ' . __( 'Tài sản cố định vô hình', 'bsc' ),
						'order' => 36,
						'children' => [ 
							[ 
								'title' => '- ' . __( 'Nguyên giá TSCĐ vô hình', 'bsc' ),
								'order' => 37,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Hao mòn TSCĐ vô hình', 'bsc' ),
								'order' => 38,
								'children' => []
							],
						]
					],
				]
			],
			[ 
				'title' => '11. ' . __( 'Bất động sản đầu tư', 'bsc' ),
				'order' => 39,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Nguyên giá BĐSĐT', 'bsc' ),
						'order' => 40,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Hao mòn BĐSĐT', 'bsc' ),
						'order' => 41,
						'children' => []
					],
				]
			],
			[ 
				'title' => '12. ' . __( 'Tài sản Có khác', 'bsc' ),
				'order' => 42,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Các khoản phải thu', 'bsc' ),
						'order' => 43,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Các khoản lãi, phí phải thu', 'bsc' ),
						'order' => 44,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Tài sản thuế TNDN hoãn lại', 'bsc' ),
						'order' => 45,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Tài sản Có khác', 'bsc' ),
						'order' => 46,
						'children' => [ 
							[ 
								'title' => '- ' . __( 'Trong đó: Lợi thế thương mại', 'bsc' ),
								'order' => 47,
								'children' => []
							],
						]
					],
					[ 
						'title' => '- ' . __( 'Các khoản dự phòng rủi ro cho các tài sản Có nội bảng khác', 'bsc' ),
						'order' => 48,
						'children' => []
					],
				]
			],
		],
	],

	// II. Tổng tài sản Có (theo ảnh 2)
	[ 
		'title' => 'II. ' . __( 'Tổng tài sản Có', 'bsc' ),
		'order' => 49,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Các khoản nợ Chính phủ và NHNN', 'bsc' ),
				'order' => 50,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Tiền gửi và vay các TCTD khác', 'bsc' ),
				'order' => 51,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tiền gửi của các TCTD khác', 'bsc' ),
						'order' => 52,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Vay các TCTD khác', 'bsc' ),
						'order' => 53,
						'children' => []
					],
				]
			],
			[ 
				'title' => '3. ' . __( 'Tiền gửi của khách hàng', 'bsc' ),
				'order' => 54,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Các công cụ tài chính phái sinh và các khoản nợ tài chính khác', 'bsc' ),
				'order' => 55,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Vốn tài trợ, ủy thác đầu tư, cho vay TCTD chịu rủi ro', 'bsc' ),
				'order' => 56,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Phát hành giấy tờ có giá', 'bsc' ),
				'order' => 57,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Các khoản nợ khác', 'bsc' ),
				'order' => 58,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Các khoản lãi, phí phải trả', 'bsc' ),
						'order' => 59,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Thuế TNDN hoãn lại phải trả', 'bsc' ),
						'order' => 60,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Các khoản phải trả và công nợ khác', 'bsc' ),
						'order' => 61,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Dự phòng rủi ro khác (Dự phòng cho công nợ tiềm ẩn và cam kết ngoại bảng)', 'bsc' ),
						'order' => 62,
						'children' => []
					],
				]
			],
		],
	],

	// III. (Theo ảnh 3) – Có thể hiểu là phần “Vốn & các quỹ” (tuỳ cách bạn đặt tiêu đề)
	[ 
		'title' => 'III. ' . __( 'Tổng nợ phải trả', 'bsc' ),
		'order' => 63,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Vốn và các quỹ', 'bsc' ),
				'order' => 64,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Vốn của TCTD', 'bsc' ),
						'order' => 65,
						'children' => [ 
							[ 
								'title' => '- ' . __( 'Vốn điều lệ', 'bsc' ),
								'order' => 66,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Vốn đầu tư XDCB', 'bsc' ),
								'order' => 67,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Thặng dư vốn cổ phần', 'bsc' ),
								'order' => 68,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Cổ phiếu quỹ', 'bsc' ),
								'order' => 69,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Cổ phiếu ưu đãi', 'bsc' ),
								'order' => 70,
								'children' => []
							],
							[ 
								'title' => '- ' . __( 'Vốn khác', 'bsc' ),
								'order' => 71,
								'children' => []
							],
						]
					],
					[ 
						'title' => '- ' . __( 'Quỹ của TCTD', 'bsc' ),
						'order' => 72,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chênh lệch tỷ giá hối đoái', 'bsc' ),
						'order' => 73,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chênh lệch đánh giá lại tài sản', 'bsc' ),
						'order' => 74,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Lợi nhuận chưa phân phối/ Lỗ lũy kế', 'bsc' ),
						'order' => 75,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Lợi ích của cổ đông thiểu số', 'bsc' ),
						'order' => 76,
						'children' => []
					],
				],
			],
		],
	],

	// IV. (Theo ảnh 4) – Nghĩa vụ nợ tiềm ẩn và các cam kết
	[ 
		'title' => 'IV. ' . __( 'Tổng nợ phải trả và vốn chủ sở hữu', 'bsc' ),
		'order' => 77,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Nghĩa vụ nợ tiềm ẩn', 'bsc' ),
				'order' => 78,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Bảo lãnh vay vốn', 'bsc' ),
						'order' => 79,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh tín dụng', 'bsc' ),
						'order' => 80,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh thanh toán', 'bsc' ),
						'order' => 81,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh thực hiện hợp đồng', 'bsc' ),
						'order' => 82,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh dự thầu', 'bsc' ),
						'order' => 83,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh xuất khẩu', 'bsc' ),
						'order' => 84,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Bảo lãnh khác', 'bsc' ),
						'order' => 85,
						'children' => []
					],
				],
			],
			[ 
				'title' => '2. ' . __( 'Các cam kết đưa ra', 'bsc' ),
				'order' => 86,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Cam kết tài trợ cho khách hàng', 'bsc' ),
						'order' => 87,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết tin dụng', 'bsc' ),
						'order' => 88,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết giao dịch hối đoái', 'bsc' ),
						'order' => 89,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết mua ngoại tệ', 'bsc' ),
						'order' => 90,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết bán ngoại tệ', 'bsc' ),
						'order' => 91,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết giao dịch hoán đổi', 'bsc' ),
						'order' => 92,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết giao dịch tương lai', 'bsc' ),
						'order' => 93,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết trong nghiệp vụ L/C', 'bsc' ),
						'order' => 94,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cam kết khác', 'bsc' ),
						'order' => 95,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Nợ tiềm tàng và các Cam kết tin dụng', 'bsc' ),
						'order' => 96,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Thư tín dụng', 'bsc' ),
						'order' => 97,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Thư tín dụng trả ngay', 'bsc' ),
						'order' => 98,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Thư tín dụng trả chậm', 'bsc' ),
						'order' => 99,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Khác', 'bsc' ),
						'order' => 100,
						'children' => []
					],
				],
			],
		],
	],
];
