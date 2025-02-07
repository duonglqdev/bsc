<?php
return [
    [
        'title' => 'I. ' . __('TỔNG TÀI SẢN', 'bsc'),
        'order' => 2,
        'children' => [
            [
                'title' => '1. ' . __('TÀI SẢN NGẮN HẠN', 'bsc'),
                'order' => 3,
                'children' => [
                    [
                        'title' => '- ' . __('Tài sản tài chính', 'bsc'),
                        'order' => 4,
                        'children' => [
                            [
                                'title' => __('Tiền và các khoản tương đương tiền', 'bsc'),
                                'order' => 5,
                                'children' => [
                                    [
                                        'title' => __('Tiền', 'bsc'),
                                        'order' => 6,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Các khoản tương đương tiền', 'bsc'),
                                        'order' => 7,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Các tài sản tài chính ghi nhận thông qua lãi/lỗ (FVTPL)', 'bsc'),
                                'order' => 8,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'bsc'),
                                'order' => 9,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản cho vay', 'bsc'),
                                'order' => 10,
                                'children' => []
                            ],
                            [
                                'title' => __('Tài sản tài chính sẵn sảng để bán (AFS)', 'bsc'),
                                'order' => 11,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các tài sản tài chính và tài sản thế chấp', 'bsc'),
                                'order' => 12,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản phải thu', 'bsc'),
                                'order' => 13,
                                'children' => [
                                    [
                                        'title' => __('Phải thu bán các tài sản tài chính', 'bsc'),
                                        'order' => 14,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Phải thu và dự thu cổ tức, tiền lãi các tài sản tài chính', 'bsc'),
                                        'order' => 15,
                                        'children' => [
                                            [
                                                'title' => __('Phải thu cổ tức, tiền lãi đến ngày nhận', 'bsc'),
                                                'order' => 16,
                                                'children' => [
                                                    [
                                                        'title' => __('Trong đó: Phải thu khó đòi về cổ tức, tiền lãi đến ngày nhận nhưng chưa nhận được', 'bsc'),
                                                        'order' => 17,
                                                        'children' => []
                                                    ],
                                                ]
                                            ],
                                            [
                                                'title' => __('Dự thu cổ tức, tiền lãi chưa đến ngày nhận', 'bsc'),
                                                'order' => 19,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Thuế giá trị gia tăng được khấu trừ', 'bsc'),
                                'order' => 18,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu các dịch vụ CTCK cung cấp', 'bsc'),
                                'order' => 20,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu nội bộ', 'bsc'),
                                'order' => 21,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu về lỗi giao dịch chứng khoán', 'bsc'),
                                'order' => 22,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản phải thu khác', 'bsc'),
                                'order' => 23,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các khoản phải thu', 'bsc'),
                                'order' => 24,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' => '- ' . __('Tài sản ngắn hạn khác', 'bsc'),
                        'order' => 25,
                        'children' => [
                            [
                                'title' => __('Tạm ứng', 'bsc'),
                                'order' => 26,
                                'children' => []
                            ],
                            [
                                'title' => __('Vật tư văn phòng, công cụ. dụng cụ', 'bsc'),
                                'order' => 27,
                                'children' => []
                            ],
                            [
                                'title' => __('Chi phí trả trước ngắn hạn', 'bsc'),
                                'order' => 28,
                                'children' => []
                            ],
                            [
                                'title' => __('Cầm cố, thế chấp, ký quỹ, ký cược ngắn hạn', 'bsc'),
                                'order' => 29,
                                'children' => []
                            ],
                            [
                                'title' => __('Giao dịch mua bán lại trái phiếu Chính phủ', 'bsc'),
                                'order' => 30,
                                'children' => []
                            ],
                            [
                                'title' => __('Tài sản ngắn hạn khác', 'bsc'),
                                'order' => 31,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các khoản phải thu', 'bsc'),
                                'order' => 32,
                                'children' => []
                            ],
                        ]
                    ],
                ]
            ],
            [
                'title' => '2. ' . __('TÀI SẢN DÀI HẠN', 'bsc'),
                'order' => 33,
                'children' => [
                    [
                        'title' => '- ' . __('Tài sản tài chính dài hạn', 'bsc'),
                        'order' => 34,
                        'children' => [
                            [
                                'title' => '- ' . __('Các khoản phải thu dài hạn', 'bsc'),
                                'order' => 35,
                                'children' => []
                            ],
                            [
                                'title' => '- ' . __('Các khoản đầu tư', 'bsc'),
                                'order' => 36,
                                'children' => [
                                    [
                                        'title' => __('Các khoản đầu tư nắm giữ đến ngày đáo hạn', 'bsc'),
                                        'order' => 37,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Đầu tư vào công ty con', 'bsc'),
                                        'order' => 38,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Đầu tư vào công ty liên doanh, liên kết', 'bsc'),
                                        'order' => 39,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => '- ' . __('Tài sản cố định', 'bsc'),
                                'order' => 40,
                                'children' => [
                                    [
                                        'title' =>  __('Tài sản cố định hữu hình', 'bsc'),
                                        'order' => 41,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'bsc'),
                                                'order' => 42,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'bsc'),
                                                'order' => 43,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐHH theo giá trị hợp lý', 'bsc'),
                                                'order' => 44,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'title' =>  __('Tài sản cố định thuê tài chính', 'bsc'),
                                        'order' => 45,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'bsc'),
                                                'order' => 46,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'bsc'),
                                                'order' => 47,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐTTC theo giá trị hợp lý', 'bsc'),
                                                'order' => 48,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'title' =>  __('Tài sản cố định vô hình', 'bsc'),
                                        'order' => 49,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'bsc'),
                                                'order' => 50,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'bsc'),
                                                'order' => 51,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐVH theo giá trị hợp lý', 'bsc'),
                                                'order' => 52,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Bất động sản đầu tư', 'bsc'),
                                'order' => 53,
                                'children' => [
                                    [
                                        'title' =>  __('Nguyên giá', 'bsc'),
                                        'order' => 54,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Giá trị hao mòn luỹ kế', 'bsc'),
                                        'order' => 55,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Đánh giá BĐSĐT theo giá trị hợp lý', 'bsc'),
                                        'order' => 56,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Chi phí xây dựng cơ bản dở dang', 'bsc'),
                                'order' => 57,
                                'children' => []
                            ],
                            [
                                'title' =>  '- ' . __('Tài sản dài hạn khác', 'bsc'),
                                'order' => 58,
                                'children' => [
                                    [
                                        'title' =>  __('Cầm cố, thế chấp, ký quỹ, ký cược dài hạn', 'bsc'),
                                        'order' => 59,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Chi phí trả trước dài hạn', 'bsc'),
                                        'order' => 60,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tài sản thuế thu nhập hoãn lại', 'bsc'),
                                        'order' => 61,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tiền nộp Quỹ Hỗ trợ thanh toán', 'bsc'),
                                        'order' => 62,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tài sản dài hạn khác', 'bsc'),
                                        'order' => 63,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Dự phòng suy giảm giá trị tài sản dài hạn', 'bsc'),
                                'order' => 64,
                                'children' => []
                            ]
                        ]
                    ],
                ]
            ],
        ]
    ],
    [
        'title' =>  'II. ' . __('NỢ PHẢI TRẢ VÀ VỐN CHỦ SỞ HỮU', 'bsc'),
        'order' => 65,
        'children' => [
            [
                'title' =>  '1. ' . __('NỢ PHẢI TRẢ', 'bsc'),
                'order' => 66,
                'children' => [
                    [
                        'title' =>  '- ' . __('Nợ phải trả ngắn hạn', 'bsc'),
                        'order' => 67,
                        'children' => [
                            [
                                'title' =>  __('Vay và nợ thuê tài chính ngắn hạn', 'bsc'),
                                'order' => 68,
                                'children' => [
                                    [
                                        'title' =>  __('Vay ngắn hạn', 'bsc'),
                                        'order' => 69,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Nợ thuê tài chính ngắn hạn', 'bsc'),
                                        'order' => 70,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  __('Vay tài sản tài chính ngắn hạn', 'bsc'),
                                'order' => 71,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu chuyển đổi ngắn hạn - cấu phần nợ', 'bsc'),
                                'order' => 72,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu phát hành ngắn hạn', 'bsc'),
                                'order' => 73,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Vay Quỹ Hỗ trợ thanh toán', 'bsc'),
                                'order' => 74,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả hoạt động giao dịch chứng khoán', 'bsc'),
                                'order' => 75,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả về lỗi giao dịch các tài sản tài chính', 'bsc'),
                                'order' => 76,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người bán ngắn hạn', 'bsc'),
                                'order' => 77,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Người mua trả tiền trước ngắn hạn', 'bsc'),
                                'order' => 78,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Thuế và các khoản phải nộp Nhà nước', 'bsc'),
                                'order' => 79,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người lao động', 'bsc'),
                                'order' => 80,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản trích nộp phúc lợi nhân viên', 'bsc'),
                                'order' => 81,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Chi phí phải trả ngắn hạn', 'bsc'),
                                'order' => 82,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả nội bộ ngắn hạn', 'bsc'),
                                'order' => 83,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Doanh thu chưa thực hiện ngắn hạn', 'bsc'),
                                'order' => 84,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Nhận ký quỹ, ký cược ngắn hạn', 'bsc'),
                                'order' => 85,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản phải trả, phải nộp khác ngắn hạn', 'bsc'),
                                'order' => 86,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Dự phòng phải trả ngắn hạn', 'bsc'),
                                'order' => 87,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ khen thưởng, phúc lợi', 'bsc'),
                                'order' => 88,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' =>  '- ' . __('Nợ phải trả dài hạn', 'bsc'),
                        'order' => 89,
                        'children' => [
                            [
                                'title' =>  __('Vay và nợ thuê tài chính dài hạn', 'bsc'),
                                'order' => 90,
                                'children' => [
                                    [
                                        'title' =>  __('Vay dài hạn', 'bsc'),
                                        'order' => 91,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Nợ thuê tài chính dài hạn', 'bsc'),
                                        'order' => 92,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  __('Vay tài sản tài chính dài hạn', 'bsc'),
                                'order' => 93,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu chuyển đổi dài hạn - cấu phần nợ', 'bsc'),
                                'order' => 94,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu phát hành dài hạn', 'bsc'),
                                'order' => 95,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người bán dài hạn', 'bsc'),
                                'order' => 96,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Người mua trả tiền trước dài hạn', 'bsc'),
                                'order' => 97,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Chi phí phải trả dài hạn', 'bsc'),
                                'order' => 98,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả nội bộ dài hạn', 'bsc'),
                                'order' => 99,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Doanh thu chưa thực hiện dài hạn', 'bsc'),
                                'order' => 100,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Nhận ký quỹ, ký cược dài hạn', 'bsc'),
                                'order' => 101,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản phải trả, phải nộp khác dài hạn', 'bsc'),
                                'order' => 102,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Dự phòng phải trả dài hạn', 'bsc'),
                                'order' => 103,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ bảo vệ Nhà đầu tư', 'bsc'),
                                'order' => 104,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Thuế thu nhập hoãn lại phải trả', 'bsc'),
                                'order' => 105,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ phát triển khoa học và công nghệ', 'bsc'),
                                'order' => 106,
                                'children' => []
                            ],
                        ]
                    ],
                ]
            ],
            [
                'title' => '2. ' . __('VỐN CHỦ SỞ HỮU', 'bsc'),
                'order' => 107,
                'children' => [
                    [
                        'title' => '- ' . __('Vốn chủ sở hữu', 'bsc'),
                        'order' => 108,
                        'children' => [
                            [
                                'title' => __('Vốn đầu tư của chủ sở hữu', 'bsc'),
                                'order' => 109,
                                'children' => [
                                    [
                                        'title' => __('Vốn góp của chủ sở hữu', 'bsc'),
                                        'order' => 110,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Thặng dư vốn cổ phần', 'bsc'),
                                        'order' => 111,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Quyền chọn chuyển đổi trái phiếu - cấu phần vốn', 'bsc'),
                                        'order' => 112,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Vốn khác của chủ sở hữu', 'bsc'),
                                        'order' => 113,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Cổ phiếu quỹ', 'bsc'),
                                        'order' => 114,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Chênh lệch đánh giá tài sản theo giá trị hợp lý', 'bsc'),
                                'order' => 115,
                                'children' => []
                            ],
                            [
                                'title' => __('Chênh lệch tỷ giá hối đoái', 'bsc'),
                                'order' => 116,
                                'children' => []
                            ],
                            [
                                'title' => __('Quỹ dự trữ bổ sung vốn điều lệ', 'bsc'),
                                'order' => 117,
                                'children' => []
                            ],
                            [
                                'title' => __('Quỹ dự phòng tài chính và rủi ro nghiệp vụ', 'bsc'),
                                'order' => 118,
                                'children' => []
                            ],
                            [
                                'title' => __('Các Quỹ khác thuộc vốn chủ sở hữu', 'bsc'),
                                'order' => 119,
                                'children' => []
                            ],
                            [
                                'title' => __('Lợi nhuận chưa phân phối', 'bsc'),
                                'order' => 120,
                                'children' => [
                                    [
                                        'title' =>  __('Lợi nhuận sau thuế đã thực hiện', 'bsc'),
                                        'order' => 121,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Lợi nhuận chưa thực hiện', 'bsc'),
                                        'order' => 122,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Lợi ích cổ đông không kiểm soát', 'bsc'),
                                'order' => 123,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' => '- ' . __('Nguồn kinh phí và quỹ khác', 'bsc'),
                        'order' => 124,
                        'children' => []
                    ],
                ]
            ],
            [
                'title' => '3. ' . __('LỢI NHUẬN ĐÃ PHÂN PHỐI CHO NHÀ ĐẦU TƯ', 'bsc'),
                'order' => 125,
                'children' => [
                    [
                        'title' => '- ' . __('Lợi nhuận đã phân phối cho Nhà đầu tư trong năm', 'bsc'),
                        'order' => 126,
                        'children' => []
                    ],
                ]
            ],
        ]
    ],
];
