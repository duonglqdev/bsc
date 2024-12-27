<?php
return [ 
	// I. Lưu chuyển tiền từ hoạt động kinh doanh
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền từ hoạt động kinh doanh', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền đã mua các tài sản tài chính', 'bsc' ),
				'order' => 3,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền đã thu từ bán các tài sản tài chính', 'bsc' ),
				'order' => 4,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi nộp Quỹ Hỗ trợ thanh toán', 'bsc' ),
				'order' => 5,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Cổ tức đã nhận', 'bsc' ),
				'order' => 6,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền lãi đã thu', 'bsc' ),
				'order' => 7,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Tiền chi trả lãi vay cho hoạt động của CTCK', 'bsc' ),
				'order' => 8,
				'children' => [],
			],
			[ 
				'title' => '7. ' . __( 'Tiền chi trả Tổ chức cung cấp dịch vụ cho CTCK', 'bsc' ),
				'order' => 9,
				'children' => [],
			],
			[ 
				'title' => '8. ' . __( 'Tiền nộp thuế liên quan đến hoạt động CTCK', 'bsc' ),
				'order' => 10,
				'children' => [],
			],
			[ 
				'title' => '9. ' . __( 'Tiền chi phí cho hoạt động mua, bán các tài sản tài chính', 'bsc' ),
				'order' => 11,
				'children' => [],
			],
			[ 
				'title' => '10. ' . __( 'Tiền thu khác từ hoạt động kinh doanh', 'bsc' ),
				'order' => 12,
				'children' => [],
			],
			[ 
				'title' => '11. ' . __( 'Tiền chi khác cho hoạt động kinh doanh', 'bsc' ),
				'order' => 13,
				'children' => [],
			],
		],
	],

	// II. Lưu chuyển tiền từ hoạt động đầu tư
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền từ hoạt động đầu tư', 'bsc' ),
		'order' => 14,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền chi để mua sắm, xây dựng TSCĐ, BĐSĐT và các tài sản khác', 'bsc' ),
				'order' => 15,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu từ thanh lý, nhượng bán TSCĐ, BĐSĐT và các tài sản khác', 'bsc' ),
				'order' => 16,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi cho vay, mua các công cụ nợ của đơn vị khác', 'bsc' ),
				'order' => 17,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Tiền thu hồi cho vay, bán lại các công cụ nợ của đơn vị khác', 'bsc' ),
				'order' => 18,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền chi đầu tư góp vốn vào đơn vị khác', 'bsc' ),
				'order' => 19,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Tiền thu hồi đầu tư góp vốn vào đơn vị khác', 'bsc' ),
				'order' => 20,
				'children' => [],
			],
			[ 
				'title' => '7. ' . __( 'Tiền thu lãi cho vay, cổ tức và lợi nhuận được chia từ các khoản đầu tư tài chính dài hạn', 'bsc' ),
				'order' => 21,
				'children' => [],
			],
			[ 
				'title' => '8. ' . __( 'Tiền thu từ phát hành cổ phiếu, nhận vốn góp của chủ sở hữu', 'bsc' ),
				'order' => 22,
				'children' => [],
			],
			[ 
				'title' => '9. ' . __( 'Tiền chi trả vốn góp cho các chủ sở hữu, mua lại cổ phiếu của doanh nghiệp đã phát hành', 'bsc' ),
				'order' => 23,
				'children' => [],
			],
			[ 
				'title' => '10. ' . __( 'Tiền vay gốc', 'bsc' ),
				'order' => 24,
				'children' => [ 
					// Level 2 => tiền tố "-"
					[ 
						'title' => '- ' . __( 'Tiền vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
						'order' => 25,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền vay khác', 'bsc' ),
						'order' => 26,
						'children' => [],
					],
				],
			],
			[ 
				'title' => '11. ' . __( 'Tiền chi trả nợ gốc vay', 'bsc' ),
				'order' => 27,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Tiền chi trả gốc vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
						'order' => 28,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền chi trả nợ gốc vay tài sản tài chính', 'bsc' ),
						'order' => 29,
						'children' => [],
					],
					[ 
						'title' => '- ' . __( 'Tiền chi trả gốc vay khác', 'bsc' ),
						'order' => 30,
						'children' => [],
					],
				],
			],
		],
	],

	// III. Lưu chuyển tiền từ hoạt động tài chính
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền từ hoạt động tài chính', 'bsc' ),
		'order' => 31,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền chi trả nợ gốc thuê tài chính', 'bsc' ),
				'order' => 32,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Cổ tức, lợi nhuận đã trả cho chủ sở hữu', 'bsc' ),
				'order' => 33,
				'children' => [],
			],
		],
	],

	// IV. Tăng/giảm tiền thuần trong kỳ
	[ 
		'title' => 'IV. ' . __( 'Tăng/giảm tiền thuần trong kỳ', 'bsc' ),
		'order' => 34,
		'children' => [],
	],

	// V. Tiền và các khoản tương đương tiền đầu kỳ
	[ 
		'title' => 'V. ' . __( 'Tiền và các khoản tương đương tiền đầu kỳ', 'bsc' ),
		'order' => 35,
		'children' => [],
	],

	// VI. Tiền và các khoản tương đương tiền cuối kỳ
	[ 
		'title' => 'VI. ' . __( 'Tiền và các khoản tương đương tiền cuối kỳ', 'bsc' ),
		'order' => 36,
		'children' => [],
	],

	// 5. Thay đổi tài sản và nợ phải trả hoạt động (phần text còn thiếu)
	// (Nếu bạn muốn hiển thị trong I. Lưu chuyển tiền từ hoạt động kinh doanh,
	//  hãy di chuyển block này vào children của Mục I)
	[ 
		'title' => '5. ' . __( 'Thay đổi tài sản và nợ phải trả hoạt động', 'bsc' ),
		'order' => 37,
		'children' => [ 
			[ 
				'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính ghi nhận thông qua lãi/lỗ FVTPL', 'bsc' ),
				'order' => 38,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'bsc' ),
				'order' => 39,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) các khoản cho vay', 'bsc' ),
				'order' => 40,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính sẵn sàng để bán AFS', 'bsc' ),
				'order' => 41,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) các tài sản khác', 'bsc' ),
				'order' => 42,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) các khoản phải thu', 'bsc' ),
				'order' => 43,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) vay và nợ thuê tài sản tài chính', 'bsc' ),
				'order' => 44,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) tài sản tài chính', 'bsc' ),
				'order' => 45,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) trái phiếu chuyển đổi - Cấu phần nợ', 'bsc' ),
				'order' => 46,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) trái phiếu phát hành', 'bsc' ),
				'order' => 47,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tăng (giảm) vay Quỹ Hỗ trợ thanh toán', 'bsc' ),
				'order' => 48,
				'children' => [],
			],
		],
	],

	// 6. Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động
	[ 
		'title' => '6. ' . __( 'Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động', 'bsc' ),
		'order' => 49,
		'children' => [ 
			// Level 3 => no prefix
			[ 
				'title' => '( - ) Tăng, ( + ) giảm phải thu và dự thu cổ tức, tiền lãi các tài sản tài chính',
				'order' => 50,
				'children' => [],
			],
			[ 
				'title' => '( - ) Tăng, ( + ) giảm các khoản phải thu về lỗi giao dịch các TSTC',
				'order' => 51,
				'children' => [],
			],
			[ 
				'title' => 'Tăng (giảm) phải trả người lao động',
				'order' => 52,
				'children' => [],
			],
			[ 
				'title' => 'Tiền lãi vay đã trả',
				'order' => 53,
				'children' => [],
			],
			[ 
				'title' => 'Tiền thu khác từ hoạt động kinh doanh',
				'order' => 54,
				'children' => [],
			],
			[ 
				'title' => 'Tiền chi khác cho hoạt động kinh doanh',
				'order' => 55,
				'children' => [],
			],
			[ 
				'title' => 'Lãi vay đã trả',
				'order' => 56,
				'children' => [],
			],
			[ 
				'title' => 'Thuế TNDN đã nộp',
				'order' => 57,
				'children' => [],
			],
			[ 
				'title' => 'Các khoản chi khác',
				'order' => 58,
				'children' => [],
			],
		],
	],
];
