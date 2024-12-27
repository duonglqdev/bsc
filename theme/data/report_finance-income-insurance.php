<?php
return [ 
	// I. Doanh thu phí bảo hiểm thuần
	[ 
		'title' => 'I. ' . __( 'Doanh thu phí bảo hiểm thuần', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Doanh thu phí bảo hiểm', 'bsc' ),
				'order' => 3,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Phí bảo hiểm gốc', 'bsc' ),
						'order' => 4,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Phí nhận tái bảo hiểm', 'bsc' ),
						'order' => 5,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Tăng/giảm dự phòng phí bảo hiểm gốc và nhận tái bảo hiểm', 'bsc' ),
						'order' => 6,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Phí nhượng tái bảo hiểm', 'bsc' ),
						'order' => 7,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Giảm phí', 'bsc' ),
						'order' => 8,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Hoàn phí', 'bsc' ),
						'order' => 9,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Các khoản giảm trừ khác', 'bsc' ),
						'order' => 10,
						'children' => []
					],
				],
			],
			[ 
				'title' => '2. ' . __( 'Phí nhượng tái bảo hiểm', 'bsc' ),
				'order' => 11,
				'children' => []
			],
		],
	],

	// II. Hoa hồng nhượng tái bảo hiểm và doanh thu khác HĐKD Bảo hiểm
	[ 
		'title' => 'II. ' . __( 'Hoa hồng nhượng tái bảo hiểm và doanh thu khác HĐKD Bảo hiểm', 'bsc' ),
		'order' => 12,
		'children' => [],
	],

	// III. Doanh thu thuần từ HĐKD bảo hiểm
	[ 
		'title' => 'III. ' . __( 'Doanh thu thuần từ HĐKD bảo hiểm', 'bsc' ),
		'order' => 13,
		'children' => [],
	],

	// IV. Tổng chi bồi thường và trả tiền bảo hiểm
	[ 
		'title' => 'IV. ' . __( 'Tổng chi bồi thường và trả tiền bảo hiểm', 'bsc' ),
		'order' => 14,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chi bồi thường bảo hiểm gốc và chi trả đáo hạn', 'bsc' ),
				'order' => 15,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi bồi thường nhận tái bảo hiểm', 'bsc' ),
				'order' => 16,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Các khoản giảm trừ chi phí', 'bsc' ),
				'order' => 17,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Thu đòi người thứ ba', 'bsc' ),
						'order' => 18,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Thu xử lý hàng bồi thường 100%', 'bsc' ),
						'order' => 19,
						'children' => []
					],
				],
			],
			[ 
				'title' => '4. ' . __( 'Thu bồi thường nhượng tái bảo hiểm', 'bsc' ),
				'order' => 20,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Tăng/giảm dự phòng bồi thường bảo hiểm gốc và nhận tái bảo hiểm', 'bsc' ),
				'order' => 21,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Tăng/giảm dự phòng bồi thường nhượng tái bảo hiểm', 'bsc' ),
				'order' => 22,
				'children' => []
			],
		],
	],

	// V. Chi khác hoạt động kinh doanh bảo hiểm
	[ 
		'title' => 'V. ' . __( 'Chi khác hoạt động kinh doanh bảo hiểm', 'bsc' ),
		'order' => 23,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chi khác hoạt động bảo hiểm gốc', 'bsc' ),
				'order' => 24,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi hoa hồng bảo hiểm gốc', 'bsc' ),
				'order' => 25,
				'children' => []
			],
		],
	],

	// VI. Tổng chi phí hoạt động kinh doanh bảo hiểm
	[ 
		'title' => 'VI. ' . __( 'Tổng chi phí hoạt động kinh doanh bảo hiểm', 'bsc' ),
		'order' => 26,
		'children' => [],
	],

	// VII. Lợi nhuận gộp hoạt động kinh doanh bảo hiểm
	[ 
		'title' => 'VII. ' . __( 'Lợi nhuận gộp hoạt động kinh doanh bảo hiểm', 'bsc' ),
		'order' => 27,
		'children' => [],
	],

	// VIII. Thu nhập thuần từ hoạt động tài chính
	[ 
		'title' => 'VIII. ' . __( 'Thu nhập thuần từ hoạt động tài chính', 'bsc' ),
		'order' => 28,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Thu nhập từ hoạt động tài chính', 'bsc' ),
				'order' => 29,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí của hoạt động tài chính', 'bsc' ),
				'order' => 30,
				'children' => []
			],
		],
	],

	// IX. Thu nhập thuần từ các hoạt động khác
	[ 
		'title' => 'IX. ' . __( 'Thu nhập thuần từ các hoạt động khác', 'bsc' ),
		'order' => 31,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Thu nhập từ hoạt động khác', 'bsc' ),
				'order' => 32,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí hoạt động khác', 'bsc' ),
				'order' => 33,
				'children' => []
			],
		],
	],

	// X. Chi phí bán hàng
	[ 
		'title' => 'X. ' . __( 'Chi phí bán hàng', 'bsc' ),
		'order' => 34,
		'children' => [],
	],

	// XI. Chi phí quản lý doanh nghiệp
	[ 
		'title' => 'XI. ' . __( 'Chi phí quản lý doanh nghiệp', 'bsc' ),
		'order' => 35,
		'children' => [],
	],

	// XII. Lợi nhuận hoạt động khác
	[ 
		'title' => 'XII. ' . __( 'Lợi nhuận hoạt động khác', 'bsc' ),
		'order' => 36,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Thu nhập hoạt động khác', 'bsc' ),
				'order' => 37,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí hoạt động khác', 'bsc' ),
				'order' => 38,
				'children' => []
			],
		],
	],

	// XIII. Phần lợi nhuận từ đầu tư vào công ty liên kết, liên doanh
	[ 
		'title' => 'XIII. ' . __( 'Phần lợi nhuận từ đầu tư vào công ty liên kết, liên doanh', 'bsc' ),
		'order' => 39,
		'children' => [],
	],

	// XIV. Lợi nhuận kế toán trước thuế
	[ 
		'title' => 'XIV. ' . __( 'Lợi nhuận kế toán trước thuế', 'bsc' ),
		'order' => 40,
		'children' => [],
	],

	// XV. Thuế thu nhập doanh nghiệp
	[ 
		'title' => 'XV. ' . __( 'Thuế thu nhập doanh nghiệp', 'bsc' ),
		'order' => 41,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Thuế thu nhập doanh nghiệp hiện thời', 'bsc' ),
				'order' => 42,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Thuế thu nhập doanh nghiệp hoãn lại', 'bsc' ),
				'order' => 43,
				'children' => []
			],
		],
	],

	// XVI. Lợi nhuận sau thuế thu nhập doanh nghiệp
	[ 
		'title' => 'XVI. ' . __( 'Lợi nhuận sau thuế thu nhập doanh nghiệp', 'bsc' ),
		'order' => 44,
		'children' => [],
	],

	// XVII. Lợi ích của cổ đông thiểu số
	[ 
		'title' => 'XVII. ' . __( 'Lợi ích của cổ đông thiểu số', 'bsc' ),
		'order' => 45,
		'children' => [],
	],

	// XVIII. Lợi nhuận sau thuế của chủ sở hữu, tập đoàn
	[ 
		'title' => 'XVIII. ' . __( 'Lợi nhuận sau thuế của chủ sở hữu, tập đoàn', 'bsc' ),
		'order' => 46,
		'children' => [],
	],

	// XIX. Lãi cơ bản trên mỗi cổ phiếu
	[ 
		'title' => 'XIX. ' . __( 'Lãi cơ bản trên mỗi cổ phiếu', 'bsc' ),
		'order' => 47,
		'children' => [],
	],
];
