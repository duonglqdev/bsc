<?php
return [ 
	// I. Lưu chuyển tiền thuần từ hoạt động kinh doanh trước những thay đổi về tài sản và vốn lưu động
	[ 
		'title' => 'I. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh trước những thay đổi về tài sản và vốn lưu động', 'bsc' ),
		'order' => 2,
		'children' => [ 
			[ 
				'title' => '- ' . __( 'Thu nhập lãi và các khoản thu nhập tương tự nhận được', 'bsc' ),
				'order' => 3,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Chi phí lãi và các chi phí tương tự đã trả', 'bsc' ),
				'order' => 4,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Thu nhập từ hoạt động dịch vụ nhận được', 'bsc' ),
				'order' => 5,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Chênh lệch số tiền thực thu/thực chi từ hoạt động kinh doanh (ngoại tệ, vàng bạc, chứng khoán)', 'bsc' ),
				'order' => 6,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Thu nhập khác', 'bsc' ),
				'order' => 7,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu các khoản nợ đã được xử lý rủi ro, bù đắp bằng nguồn rủi ro', 'bsc' ),
				'order' => 8,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền chi trả cho nhân viên và hoạt động quản lý, công vụ', 'bsc' ),
				'order' => 9,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thuế thu nhập thực nộp trong kỳ', 'bsc' ),
				'order' => 10,
				'children' => [],
			],
		],
	],

	// II. Lưu chuyển tiền thuần từ hoạt động kinh doanh
	[ 
		'title' => 'II. ' . __( 'Lưu chuyển tiền thuần từ hoạt động kinh doanh', 'bsc' ),
		'order' => 11,
		'children' => [ 
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các khoản tiền, vàng gửi và cho vay các TCTD khác', 'bsc' ),
				'order' => 12,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các khoản về kinh doanh chứng khoán', 'bsc' ),
				'order' => 13,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các công cụ tài chính phái sinh và các tài sản tài chính khác', 'bsc' ),
				'order' => 14,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các khoản cho vay khách hàng', 'bsc' ),
				'order' => 15,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Giảm nguồn dự phòng để bù đắp tổn thất các khoản', 'bsc' ),
				'order' => 16,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm khác về tài sản hoạt động', 'bsc' ),
				'order' => 17,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các khoản nợ Chính phủ và NHNN', 'bsc' ),
				'order' => 18,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các khoản tiền gửi, tiền vay các tổ chức tín dụng', 'bsc' ),
				'order' => 19,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm tiền gửi của khách hàng (bao gồm Kho bạc Nhà nước)', 'bsc' ),
				'order' => 20,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm các công cụ TC phái sinh và các khoản nợ tài chính khác', 'bsc' ),
				'order' => 21,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm vốn tài trợ, ủy thác đầu tư, cho vay các TCTD chịu rủi ro', 'bsc' ),
				'order' => 22,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm phát hành giấy tờ có giá (ngoại trừ giấy tờ có giá phát hành được tính vào hoạt động tài chính)', 'bsc' ),
				'order' => 23,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm lãi, phí phải trả', 'bsc' ),
				'order' => 24,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( '(Tăng)/ Giảm khác về công nợ hoạt động', 'bsc' ),
				'order' => 25,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Chi từ các quỹ của TCTD', 'bsc' ),
				'order' => 26,
				'children' => [],
			],
		],
	],

	// III. Lưu chuyển tiền thuần từ hoạt động đầu tư
	[ 
		'title' => 'III. ' . __( 'Lưu chuyển tiền thuần từ hoạt động đầu tư', 'bsc' ),
		'order' => 27,
		'children' => [ 
			[ 
				'title' => '- ' . __( 'Mua sắm tài sản cố định', 'bsc' ),
				'order' => 28,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu từ thanh lý, nhượng bán TSCĐ', 'bsc' ),
				'order' => 29,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền chi từ thanh lý, nhượng bán TSCĐ', 'bsc' ),
				'order' => 30,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Mua sắm bất động sản đầu tư', 'bsc' ),
				'order' => 31,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu từ bán, thanh lý bất động sản đầu tư', 'bsc' ),
				'order' => 32,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền chi ra do bán, thanh lý bất động sản đầu tư', 'bsc' ),
				'order' => 33,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền chi đầu tư, góp vốn vào các đơn vị khác (Chi đầu tư mua công ty con, góp vốn liên doanh, liên kết, và các khoản đầu tư dài hạn khác)', 'bsc' ),
				'order' => 34,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu đầu tư, góp vốn vào các đơn vị khác (Thu bán, thanh lý công ty con, liên doanh, liên kết, các khoản đầu tư dài hạn khác)', 'bsc' ),
				'order' => 35,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu cổ tức và lợi nhuận được chia từ các khoản đầu tư, góp vốn dài hạn', 'bsc' ),
				'order' => 36,
				'children' => [],
			],
		],
	],

	// IV. Lưu chuyển tiền thuần từ hoạt động tài chính
	[ 
		'title' => 'IV. ' . __( 'Lưu chuyển tiền thuần từ hoạt động tài chính', 'bsc' ),
		'order' => 37,
		'children' => [ 
			[ 
				'title' => '- ' . __( 'Tăng vốn cổ phần từ góp vốn và/hoặc phát hành cổ phiếu', 'bsc' ),
				'order' => 38,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu từ phát hành giấy tờ có giá dài hạn do đủ điều kiện tính vào vốn tự có và các khoản vốn vay dài hạn khác', 'bsc' ),
				'order' => 39,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Chi thanh toán giấy tờ có giá dài hạn do điều kiện xếp vào vốn tự có và các khoản vốn vay dài hạn khác', 'bsc' ),
				'order' => 40,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Cổ tức trả cho cổ đông, lợi nhuận đã chia', 'bsc' ),
				'order' => 41,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền chi ra mua cổ phiếu ngân quỹ', 'bsc' ),
				'order' => 42,
				'children' => [],
			],
			[ 
				'title' => '- ' . __( 'Tiền thu được do bán cổ phiếu ngân quỹ', 'bsc' ),
				'order' => 43,
				'children' => [],
			],
		],
	],

	// V. Lưu chuyển tiền thuần trong kỳ
	[ 
		'title' => 'V. ' . __( 'Lưu chuyển tiền thuần trong kỳ', 'bsc' ),
		'order' => 44,
		'children' => [],
	],

	// VI. Tiền và các khoản tương đương tiền tại thời điểm đầu kỳ
	[ 
		'title' => 'VI. ' . __( 'Tiền và các khoản tương đương tiền tại thời điểm đầu kỳ', 'bsc' ),
		'order' => 45,
		'children' => [],
	],

	// VII. Điều chỉnh ảnh hưởng của thay đổi tỷ giá hối đoái quy đổi ngoại tệ
	[ 
		'title' => 'VII. ' . __( 'Điều chỉnh ảnh hưởng của thay đổi tỷ giá hối đoái quy đổi ngoại tệ', 'bsc' ),
		'order' => 46,
		'children' => [],
	],

	// VIII. Tiền và các khoản tương đương tiền tại thời điểm cuối kỳ
	[ 
		'title' => 'VIII. ' . __( 'Tiền và các khoản tương đương tiền tại thời điểm cuối kỳ', 'bsc' ),
		'order' => 47,
		'children' => [],
	],
];
