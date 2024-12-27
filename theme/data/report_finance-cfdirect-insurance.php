<?php
return [ 
	// I. Lưu chuyển tiền thuần từ hoạt động kinh doanh
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền từ thu phí và hoa hồng', 'bsc' ),
				'order' => 3,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Trả tiền cho người bán, người cung cấp dịch vụ', 'bsc' ),
				'order' => 4,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Trả tiền cho cán bộ công nhân viên', 'bsc' ),
				'order' => 5,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Trả tiền nộp thuế và các khoản nợ Nhà nước', 'bsc' ),
				'order' => 6,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Tiền thu khác từ hoạt động kinh doanh', 'bsc' ),
				'order' => 7,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Tiền chi khác cho hoạt động kinh doanh', 'bsc' ),
				'order' => 8,
				'children' => []
			],
		],
	],

	// II. Lưu chuyển tiền thuần từ hoạt động đầu tư
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền thuần từ hoạt động đầu tư', 'bsc' ),
		'order' => 9,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền mua tài sản cố định', 'bsc' ),
				'order' => 10,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Tiền thu do bán tài sản cố định', 'bsc' ),
				'order' => 11,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Tiền chi cho vay, mua các công cụ nợ của các đơn vị khác', 'bsc' ),
				'order' => 12,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Tiền thu hồi cho vay, bán lại công cụ nợ các đơn vị khác', 'bsc' ),
				'order' => 13,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Tiền đầu tư vào các đơn vị khác', 'bsc' ),
				'order' => 14,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Tiền thu từ các khoản đầu tư vào đơn vị khác', 'bsc' ),
				'order' => 15,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Tiền thu lãi đầu tư', 'bsc' ),
				'order' => 16,
				'children' => []
			],
			[ 
				'title' => '8. ' . __( 'Tiền ủy thác đầu tư', 'bsc' ),
				'order' => 17,
				'children' => []
			],
			[ 
				'title' => '9. ' . __( 'Tiền rút vốn ủy thác đầu tư', 'bsc' ),
				'order' => 18,
				'children' => []
			],
		],
	],

	// III. Lưu chuyển tiền thuần từ hoạt động tài chính
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền thuần từ hoạt động tài chính', 'bsc' ),
		'order' => 19,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Tiền thu do các chủ sở hữu góp vốn', 'bsc' ),
				'order' => 20,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Tiền lãi đã trả cho các nhà đầu tư vào doanh nghiệp', 'bsc' ),
				'order' => 21,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Tiền thu do đi vay', 'bsc' ),
				'order' => 22,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Tiền đã trả nợ vay', 'bsc' ),
				'order' => 23,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Tiền nợ thuê tài chính', 'bsc' ),
				'order' => 24,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Tiền trả cổ tức', 'bsc' ),
				'order' => 25,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Tiền đã hoàn vốn cho các chủ sở hữu', 'bsc' ),
				'order' => 26,
				'children' => []
			],
		],
	],

	// IV. Lưu chuyển tiền thuần trong kỳ
	[ 
		'title' => 'IV. ' . __( 'Lưu chuyển tiền thuần trong kỳ', 'bsc' ),
		'order' => 27,
		'children' => [],
	],

	// V. Tiền và tương đương tiền đầu kỳ
	[ 
		'title' => 'V. ' . __( 'Tiền và tương đương tiền đầu kỳ', 'bsc' ),
		'order' => 28,
		'children' => [],
	],

	// VI. Ảnh hưởng của biến động tỷ giá
	[ 
		'title' => 'VI. ' . __( 'Ảnh hưởng của biến động tỷ giá', 'bsc' ),
		'order' => 29,
		'children' => [],
	],

	// VII. Tiền và tương đương tiền cuối kỳ
	[ 
		'title' => 'VII. ' . __( 'Tiền và tương đương tiền cuối kỳ', 'bsc' ),
		'order' => 30,
		'children' => [],
	],
];
