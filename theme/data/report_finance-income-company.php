<?php
return [ 
	// I. Doanh thu thuần về bán hàng và cung cấp dịch vụ
	[ 
		'title' => 'I. ' . __( 'Doanh thu thuần về bán hàng và cung cấp dịch vụ', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Doanh thu bán hàng và cung cấp dịch vụ', 'bsc' ),
				'order' => 3,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Các khoản giảm trừ doanh thu', 'bsc' ),
				'order' => 4,
				'children' => [],
			],
		],
	],

	// II. Giá vốn hàng bán
	[ 
		'title' => 'II. ' . __( 'Giá vốn hàng bán', 'bsc' ),
		'order' => 5,
		'children' => [],
	],

	// III. Lợi nhuận gộp về bán hàng và cung cấp dịch vụ
	[ 
		'title' => 'III. ' . __( 'Lợi nhuận gộp về bán hàng và cung cấp dịch vụ', 'bsc' ),
		'order' => 6,
		'children' => [],
	],

	// IV. Doanh thu hoạt động tài chính
	[ 
		'title' => 'IV. ' . __( 'Doanh thu hoạt động tài chính', 'bsc' ),
		'order' => 7,
		'children' => [],
	],

	// V. Chi phí tài chính
	[ 
		'title' => 'V. ' . __( 'Chi phí tài chính', 'bsc' ),
		'order' => 8,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chi phí lãi vay', 'bsc' ),
				'order' => 9,
				'children' => [],
			],
		],
	],

	// VI. Lợi nhuận thuần từ hoạt động kinh doanh
	[ 
		'title' => 'VI. ' . __( 'Lợi nhuận thuần từ hoạt động kinh doanh', 'bsc' ),
		'order' => 10,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lợi nhuận gộp về bán hàng và cung cấp dịch vụ', 'bsc' ),
				'order' => 11,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Phần lãi lỗ trong công ty liên doanh, liên kết', 'bsc' ),
				'order' => 12,
				'children' => [],
			],
			[ 
				'title' => '3. ' . __( 'Chi phí bán hàng', 'bsc' ),
				'order' => 13,
				'children' => [],
			],
			[ 
				'title' => '4. ' . __( 'Chi phí quản lý doanh nghiệp', 'bsc' ),
				'order' => 14,
				'children' => [],
			],
			[ 
				'title' => '5. ' . __( 'Thu nhập khác', 'bsc' ),
				'order' => 15,
				'children' => [],
			],
			[ 
				'title' => '6. ' . __( 'Chi phí khác', 'bsc' ),
				'order' => 16,
				'children' => [],
			],
		],
	],

	// VII. Lợi nhuận khác
	[ 
		'title' => 'VII. ' . __( 'Lợi nhuận khác', 'bsc' ),
		'order' => 17,
		'children' => [],
	],

	// VIII. Tổng lợi nhuận kế toán trước thuế
	[ 
		'title' => 'VIII. ' . __( 'Tổng lợi nhuận kế toán trước thuế', 'bsc' ),
		'order' => 18,
		'children' => [],
	],

	// IX. Chi phí thuế thu nhập doanh nghiệp
	[ 
		'title' => 'IX. ' . __( 'Chi phí thuế thu nhập doanh nghiệp', 'bsc' ),
		'order' => 19,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chi phí thuế TNDN hiện hành', 'bsc' ),
				'order' => 20,
				'children' => [],
			],
			[ 
				'title' => '2. ' . __( 'Chi phí thuế TNDN hoãn lại', 'bsc' ),
				'order' => 21,
				'children' => [],
			],
		],
	],

	// X. Lợi nhuận sau thuế thu nhập doanh nghiệp
	[ 
		'title' => 'X. ' . __( 'Lợi nhuận sau thuế thu nhập doanh nghiệp', 'bsc' ),
		'order' => 22,
		'children' => [],
	],

	// XI. Lợi nhuận sau thuế công ty mẹ không kiểm soát
	[ 
		'title' => 'XI. ' . __( 'Lợi nhuận sau thuế công ty mẹ không kiểm soát', 'bsc' ),
		'order' => 23,
		'children' => [],
	],

	// XII. Lợi nhuận sau thuế công ty mẹ
	[ 
		'title' => 'XII. ' . __( 'Lợi nhuận sau thuế công ty mẹ', 'bsc' ),
		'order' => 24,
		'children' => [],
	],

	// XIII. Lãi cơ bản trên cổ phiếu
	[ 
		'title' => 'XIII. ' . __( 'Lãi cơ bản trên cổ phiếu', 'bsc' ),
		'order' => 25,
		'children' => [],
	],

	// XIV. Lãi suy giảm trên cổ phiếu
	[ 
		'title' => 'XIV. ' . __( 'Lãi suy giảm trên cổ phiếu', 'bsc' ),
		'order' => 26,
		'children' => [],
	],
];
