<?php
return [ 

	// =========================
	// I. Lưu chuyển tiền từ hoạt động kinh doanh (theo ảnh mới nhất)
	// =========================
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền từ hoạt động kinh doanh', 'bsc' ),
		'order' => 2,
		'children' => [ 

			// 1. Lợi nhuận trước Thuế TNDN
			[ 
				'title' => '1. ' . __( 'Lợi nhuận trước Thuế Thu nhập doanh nghiệp', 'bsc' ),
				'order' => 3,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Khấu hao TSCĐ', 'bsc' ),
						'order' => 4,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Các khoản dự phòng', 'bsc' ),
						'order' => 5,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( '(Lãi) hoặc (+ lỗ) chênh lệch tỷ giá hối đoái chưa thực hiện', 'bsc' ),
						'order' => 6,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chi phí phải trả, chi phí trả trước', 'bsc' ),
						'order' => 7,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi, lỗ từ hoạt động đầu tư', 'bsc' ),
						'order' => 8,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chi phí lãi vay', 'bsc' ),
						'order' => 9,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Các khoản điều chỉnh khác', 'bsc' ),
						'order' => 10,
						'children' => [],
					],
				],
			],

			// 2. Các khoản điều chỉnh
			[ 
				'title' => '2. ' . __( 'Các khoản điều chỉnh', 'bsc' ),
				'order' => 11,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Khấu hao TSCĐ', 'bsc' ),
						'order' => 12,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Các khoản dự phòng', 'bsc' ),
						'order' => 13,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( '(Lãi) hoặc (+ lỗ) chênh lệch tỷ giá hối đoái chưa thực hiện', 'bsc' ),
						'order' => 14,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chi phí phải trả, chi phí trả trước', 'bsc' ),
						'order' => 15,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi, lỗ từ hoạt động đầu tư', 'bsc' ),
						'order' => 16,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chi phí lãi vay', 'bsc' ),
						'order' => 17,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Các khoản điều chỉnh khác', 'bsc' ),
						'order' => 18,
						'children' => [],
					],
				],
			],

			// 3. Tăng các chi phí phi tiền tệ
			[ 
				'title' => '3. ' . __( 'Tăng các chi phí phi tiền tệ', 'bsc' ),
				'order' => 19,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Lỗ đánh giá lại giá trị các tài sản tài chính ghi nhận thông qua lãi/lỗ FVTPL', 'bsc' ),
						'order' => 20,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ đánh giá giá trị các công cụ tài chính phái sinh', 'bsc' ),
						'order' => 21,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ từ thanh lý các tài sản tài chính sẵn sàng để bán', 'bsc' ),
						'order' => 22,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Suy giảm giá trị của các tài sản tài chính sẵn sàng để bán', 'bsc' ),
						'order' => 23,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ suy giảm giá trị Các khoản cho vay', 'bsc' ),
						'order' => 24,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ thanh lý TSCĐ', 'bsc' ),
						'order' => 25,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Suy giảm giá trị của các tài sản cố định, BĐSĐT', 'bsc' ),
						'order' => 26,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Chi phí dự phòng suy giảm giá trị các khoản đầu tư tài chính dài hạn', 'bsc' ),
						'order' => 27,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ từ thanh lý các khoản đầu tư vào công ty con, công ty liên doanh, liên kết', 'bsc' ),
						'order' => 28,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lỗ khác', 'bsc' ),
						'order' => 29,
						'children' => [],
					],
				],
			],

			// 4. Giảm các doanh thu phi tiền tệ
			[ 
				'title' => '4. ' . __( 'Giảm các doanh thu phi tiền tệ', 'bsc' ),
				'order' => 30,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Lãi đánh giá lại giá trị các tài sản tài chính ghi nhận thông qua lãi/lỗ FVTPL', 'bsc' ),
						'order' => 31,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi đánh giá giá trị các công cụ tài chính thông qua kết quả kinh doanh', 'bsc' ),
						'order' => 32,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi từ thanh lý các tài sản tài chính sẵn sàng để bán', 'bsc' ),
						'order' => 33,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Hoàn nhập suy giảm giá trị của các tài sản tài chính sẵn sàng để bán', 'bsc' ),
						'order' => 34,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi đánh giá giá trị các công cụ tài chính phái sinh cho mục đích phòng ngừa', 'bsc' ),
						'order' => 35,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi từ thanh lý các khoản cho vay và phải thu', 'bsc' ),
						'order' => 36,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Hoàn nhập chi phí dự phòng', 'bsc' ),
						'order' => 37,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi từ thanh lý tài sản cố định, BĐSĐT', 'bsc' ),
						'order' => 38,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi từ thanh lý các khoản đầu tư vào công ty con và công ty liên doanh, liên kết', 'bsc' ),
						'order' => 39,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Lãi khác', 'bsc' ),
						'order' => 40,
						'children' => [],
					],
				],
			],

			// 5. Thay đổi tài sản và nợ phải trả hoạt động
			[ 
				'title' => '5. ' . __( 'Thay đổi tài sản và nợ phải trả hoạt động', 'bsc' ),
				'order' => 41,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính ghi nhận thông qua lãi/lỗ FVTPL', 'bsc' ),
						'order' => 42,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) Các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'bsc' ),
						'order' => 43,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) Các khoản cho vay', 'bsc' ),
						'order' => 44,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính sẵn sàng để bán AFS', 'bsc' ),
						'order' => 45,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) các tài sản khác', 'bsc' ),
						'order' => 46,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) các khoản phải thu', 'bsc' ),
						'order' => 47,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) vay và nợ thuê tài sản tài chính', 'bsc' ),
						'order' => 48,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính', 'bsc' ),
						'order' => 49,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) trái phiếu chuyển đổi - Cấu phần nợ', 'bsc' ),
						'order' => 50,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) trái phiếu phát hành', 'bsc' ),
						'order' => 51,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tăng (giảm) vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
						'order' => 52,
						'children' => [],
					],
				],
			],

			// 6. Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động
			[ 
				'title' => '6. ' . __( 'Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động', 'bsc' ),
				'order' => 53,
				'children' => [ 
					[ 
						'title' => '( - ) Tăng, ( + ) giảm phải thu và dự thu cổ tức, tiền lãi các tài sản tài chính',
						'order' => 54,
						'children' => [],
					],
					[ 
						'title' => '( - ) Tăng, ( + ) giảm các khoản phải thu các dịch vụ CTCK cung cấp',
						'order' => 55,
						'children' => [],
					],
					[ 
						'title' => '( - ) Tăng, ( + ) giảm các khoản phải thu về lỗi giao dịch các TSTC',
						'order' => 56,
						'children' => [],
					],
					[ 
						'title' => 'Tăng (giảm) phải trả cho người bán',
						'order' => 57,
						'children' => [],
					],
					[ 
						'title' => '(+) Tăng, ( - ) giảm phải trả Tổ chức phát hành chứng khoán',
						'order' => 58,
						'children' => [],
					],
					[ 
						'title' => 'Tăng (giảm) các khoản trích nộp phúc lợi nhân viên',
						'order' => 59,
						'children' => [],
					],
					[ 
						'title' => 'Tăng (giảm) thuế và các khoản phải nộp Nhà nước (không bao gồm thuế TNDN đã nộp)',
						'order' => 60,
						'children' => [],
					],
					[ 
						'title' => 'Tăng (giảm) phải trả người lao động',
						'order' => 61,
						'children' => [],
					],
					[ 
						'title' => 'Tăng (giảm) phải trả về lỗi giao dịch các TSTC',
						'order' => 62,
						'children' => [],
					],
					[ 
						'title' => '(+) Tăng, ( - ) giảm Thuế TNDN CTCK đã nộp',
						'order' => 63,
						'children' => [],
					],
					[ 
						'title' => 'Tiền lãi vay đã trả',
						'order' => 64,
						'children' => [],
					],
					[ 
						'title' => 'Tiền thu khác từ hoạt động kinh doanh',
						'order' => 65,
						'children' => [],
					],
					[ 
						'title' => 'Tiền chi khác cho hoạt động kinh doanh',
						'order' => 66,
						'children' => [ 
							[ 
								'title' => 'Tiền lãi đã thu',
								'order' => 67,
								'children' => [],
							],
							[ 
								'title' => 'Tiền thu khác',
								'order' => 68,
								'children' => [],
							],
						],
					],
					[ 
						'title' => 'Lãi vay đã trả',
						'order' => 69,
						'children' => [],
					],
					[ 
						'title' => 'Thuế TNDN đã nộp',
						'order' => 70,
						'children' => [],
					],
					[ 
						'title' => 'Các khoản chi khác',
						'order' => 71,
						'children' => [],
					],
				],
			],
		],
	],

	// =========================
	// II. Lưu chuyển tiền từ hoạt động đầu tư
	// =========================
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền từ hoạt động đầu tư', 'bsc' ),
		'order' => 72,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền chi để mua sắm, xây dựng TSCĐ, BĐSĐT và các tài sản khác', 'bsc' ),
				'order' => 73,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu từ thanh lý, nhượng bán TSCĐ, BĐSĐT và các tài sản khác', 'bsc' ),
				'order' => 74,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi đầu tư vốn vào công ty con, công ty liên doanh, liên kết và đầu tư khác', 'bsc' ),
				'order' => 75,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Tiền thu hồi các khoản đầu tư vào công ty con, công ty liên doanh, liên kết và đầu tư khác', 'bsc' ),
				'order' => 76,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền thu về cổ tức và lợi nhuận được chia từ các khoản đầu tư tài chính dài hạn', 'bsc' ),
				'order' => 77,
				'children' => [],
			],
		],
	],

	// =========================
	// III. Lưu chuyển tiền từ hoạt động tài chính
	// =========================
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền từ hoạt động tài chính', 'bsc' ),
		'order' => 78,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền thu từ phát hành cổ phiếu, nhận vốn góp của chủ sở hữu', 'bsc' ),
				'order' => 79,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền chi trả vốn góp cho chủ sở hữu, mua lại cổ phiếu phát hành', 'bsc' ),
				'order' => 80,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền vay gốc', 'bsc' ),
				'order' => 81,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tiền vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
						'order' => 82,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền vay khác', 'bsc' ),
						'order' => 83,
						'children' => [],
					],
				],
			],
			[ 
				'title' => '4. ' . __( 'Tiền chi trả nợ gốc vay', 'bsc' ),
				'order' => 84,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tiền chi trả gốc vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
						'order' => 85,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền chi trả nợ gốc vay tài sản tài chính', 'bsc' ),
						'order' => 86,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền chi trả gốc vay khác', 'bsc' ),
						'order' => 87,
						'children' => [],
					],
				],
			],
			[ 
				'title' => '5. ' . __( 'Tiền chi trả nợ gốc thuê tài chính', 'bsc' ),
				'order' => 88,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Cổ tức, lợi nhuận đã trả cho chủ sở hữu', 'bsc' ),
				'order' => 89,
				'children' => [],
			],
		],
	],

	// =========================
	// IV. Tăng/giảm tiền thuần trong kỳ
	// =========================
	[ 
		'title' => 'IV. ' . __( 'Tăng/giảm tiền thuần trong kỳ', 'bsc' ),
		'order' => 90,
		'children' => [],
	],
	[ 
		'title' => 'V. ' . __( 'Tiền và các khoản tương đương tiền đầu kỳ', 'bsc' ),
		'order' => 91,
		'children' => [],
	],
	[ 
		'title' => 'VI. ' . __( 'Tiền và các khoản tương đương tiền cuối kỳ', 'bsc' ),
		'order' => 92,
		'children' => [],
	],
];
