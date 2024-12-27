<?php
return [ 
	// I. Lưu chuyển tiền thuần từ hoạt động kinh doanh (Level 0)
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh', 'bsc' ),
		'order' => 2,
		'children' => [ 
			// 1. Tiền thu từ bán hàng...
			[ 
				'title' => '1. ' . __( 'Tiền thu từ bán hàng, cung cấp dịch vụ và doanh thu khác', 'bsc' ),
				'order' => 3,
				'children' => [],
			],
			// 2. Tiền chi trả cho người cung cấp hàng hóa...
			[ 
				'title' => '2. ' . __( 'Tiền chi trả cho người cung cấp hàng hóa và dịch vụ', 'bsc' ),
				'order' => 4,
				'children' => [],
			],
			// 3. Tiền chi trả cho người lao động
			[ 
				'title' => '3. ' . __( 'Tiền chi trả cho người lao động', 'bsc' ),
				'order' => 5,
				'children' => [],
			],
			// 4. Tiền lãi vay đã trả
			[ 
				'title' => '4. ' . __( 'Tiền lãi vay đã trả', 'bsc' ),
				'order' => 6,
				'children' => [],
			],
			// 5. Thuế TNDN đã nộp
			[ 
				'title' => '5. ' . __( 'Thuế thu nhập doanh nghiệp đã nộp', 'bsc' ),
				'order' => 7,
				'children' => [],
			],
			// 6. Tiền thu khác từ hoạt động kinh doanh
			[ 
				'title' => '6. ' . __( 'Tiền thu khác từ hoạt động kinh doanh', 'bsc' ),
				'order' => 8,
				'children' => [],
			],
			// 7. Tiền chi khác cho hoạt động kinh doanh
			[ 
				'title' => '7. ' . __( 'Tiền chi khác cho hoạt động kinh doanh', 'bsc' ),
				'order' => 9,
				'children' => [],
			],
		],
	],

	// II. Lưu chuyển tiền thuần từ hoạt động đầu tư (Level 0)
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền thuần từ hoạt động đầu tư', 'bsc' ),
		'order' => 10,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền chi để mua sắm, xây dựng TSCĐ và các tài sản dài hạn khác', 'bsc' ),
				'order' => 11,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu từ thanh lý, nhượng bán TSCĐ và các tài sản dài hạn khác', 'bsc' ),
				'order' => 12,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi cho vay, mua các công cụ nợ của đơn vị khác', 'bsc' ),
				'order' => 13,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Tiền thu hồi cho vay, bán lại các công cụ nợ của đơn vị khác', 'bsc' ),
				'order' => 14,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền chi đầu tư góp vốn vào đơn vị khác', 'bsc' ),
				'order' => 15,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Tiền thu hồi đầu tư góp vốn vào đơn vị khác', 'bsc' ),
				'order' => 16,
				'children' => [],
			],
			[ 
				'title' => '7. ' . __( 'Tiền thu lãi cho vay, cổ tức và lợi nhuận được chia', 'bsc' ),
				'order' => 17,
				'children' => [],
			],
		],
	],

	// III. Lưu chuyển tiền thuần từ hoạt động tài chính (Level 0)
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền thuần từ hoạt động tài chính', 'bsc' ),
		'order' => 18,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền thu từ phát hành cổ phiếu, nhận vốn góp của chủ sở hữu', 'bsc' ),
				'order' => 19,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Tiền trả lại vốn góp cho các chủ sở hữu, mua lại cổ phiếu của doanh nghiệp đã phát hành', 'bsc' ),
				'order' => 20,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Tiền thu từ đi vay', 'bsc' ),
				'order' => 21,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Tiền trả nợ gốc vay', 'bsc' ),
				'order' => 22,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Tiền trả nợ gốc thuê tài chính', 'bsc' ),
				'order' => 23,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Cổ tức, lợi nhuận đã trả cho chủ sở hữu', 'bsc' ),
				'order' => 24,
				'children' => [],
			],
		],
	],

	// IV. Lưu chuyển tiền thuần trong kỳ
	[ 
		'title' => 'IV. ' . __( 'Lưu chuyển tiền thuần trong kỳ', 'bsc' ),
		'order' => 25,
		'children' => [],
	],

	// V. Tiền và tương đương tiền đầu kỳ
	[ 
		'title' => 'V. ' . __( 'Tiền và tương đương tiền đầu kỳ', 'bsc' ),
		'order' => 26,
		'children' => [],
	],

	// VI. Ảnh hưởng của thay đổi tỷ giá hối đoái quy đổi ngoại tệ
	[ 
		'title' => 'VI. ' . __( 'Ảnh hưởng của thay đổi tỷ giá hối đoái quy đổi ngoại tệ', 'bsc' ),
		'order' => 27,
		'children' => [],
	],

	// VII. Tiền và tương đương tiền cuối kỳ
	[ 
		'title' => 'VII. ' . __( 'Tiền và tương đương tiền cuối kỳ', 'bsc' ),
		'order' => 28,
		'children' => [],
	],
];
