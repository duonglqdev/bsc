<?php
return [
    [
        'title' => 'I. ' . __('TỔNG TÀI SẢN', 'BSC'),
        'order' => 2,
        'children' => [
            [
                'title' => '1. ' . __('TÀI SẢN NGẮN HẠN', 'BSC'),
                'order' => 3,
                'children' => [
                    [
                        'title' => '- ' . __('Tài sản tài chính', 'BSC'),
                        'order' => 4,
                        'children' => [
                            [
                                'title' => __('Tiền và các khoản tương đương tiền', 'BSC'),
                                'order' => 5,
                                'children' => [
                                    [
                                        'title' => __('Tiền', 'BSC'),
                                        'order' => 6,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Các khoản tương đương tiền', 'BSC'),
                                        'order' => 7,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Các tài sản tài chính ghi nhận thông qua lãi/lỗ (FVTPL)', 'BSC'),
                                'order' => 8,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'BSC'),
                                'order' => 9,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản cho vay', 'BSC'),
                                'order' => 10,
                                'children' => []
                            ],
                            [
                                'title' => __('Tài sản tài chính sẵn sảng để bán (AFS)', 'BSC'),
                                'order' => 11,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các tài sản tài chính và tài sản thế chấp', 'BSC'),
                                'order' => 12,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản phải thu', 'BSC'),
                                'order' => 13,
                                'children' => [
                                    [
                                        'title' => __('Phải thu bán các tài sản tài chính', 'BSC'),
                                        'order' => 14,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Phải thu và dự thu cổ tức, tiền lãi các tài sản tài chính', 'BSC'),
                                        'order' => 15,
                                        'children' => [
                                            [
                                                'title' => __('Phải thu cổ tức, tiền lãi đến ngày nhận', 'BSC'),
                                                'order' => 16,
                                                'children' => [
                                                    [
                                                        'title' => __('Trong đó: Phải thu khó đòi về cổ tức, tiền lãi đến ngày nhận nhưng chưa nhận được', 'BSC'),
                                                        'order' => 17,
                                                        'children' => []
                                                    ],
                                                ]
                                            ],
                                            [
                                                'title' => __('Dự thu cổ tức, tiền lãi chưa đến ngày nhận', 'BSC'),
                                                'order' => 19,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Thuế giá trị gia tăng được khấu trừ', 'BSC'),
                                'order' => 18,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu các dịch vụ CTCK cung cấp', 'BSC'),
                                'order' => 20,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu nội bộ', 'BSC'),
                                'order' => 21,
                                'children' => []
                            ],
                            [
                                'title' => __('Phải thu về lỗi giao dịch chứng khoán', 'BSC'),
                                'order' => 22,
                                'children' => []
                            ],
                            [
                                'title' => __('Các khoản phải thu khác', 'BSC'),
                                'order' => 23,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các khoản phải thu', 'BSC'),
                                'order' => 24,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' => '- ' . __('Tài sản ngắn hạn khác', 'BSC'),
                        'order' => 25,
                        'children' => [
                            [
                                'title' => __('Tạm ứng', 'BSC'),
                                'order' => 26,
                                'children' => []
                            ],
                            [
                                'title' => __('Vật tư văn phòng, công cụ. dụng cụ', 'BSC'),
                                'order' => 27,
                                'children' => []
                            ],
                            [
                                'title' => __('Chi phí trả trước ngắn hạn', 'BSC'),
                                'order' => 28,
                                'children' => []
                            ],
                            [
                                'title' => __('Cầm cố, thế chấp, ký quỹ, ký cược ngắn hạn', 'BSC'),
                                'order' => 29,
                                'children' => []
                            ],
                            [
                                'title' => __('Giao dịch mua bán lại trái phiếu Chính phủ', 'BSC'),
                                'order' => 30,
                                'children' => []
                            ],
                            [
                                'title' => __('Tài sản ngắn hạn khác', 'BSC'),
                                'order' => 31,
                                'children' => []
                            ],
                            [
                                'title' => __('Dự phòng suy giảm giá trị các khoản phải thu', 'BSC'),
                                'order' => 32,
                                'children' => []
                            ],
                        ]
                    ],
                ]
            ],
            [
                'title' => '2. ' . __('TÀI SẢN DÀI HẠN', 'BSC'),
                'order' => 33,
                'children' => [
                    [
                        'title' => '- ' . __('Tài sản tài chính dài hạn', 'BSC'),
                        'order' => 34,
                        'children' => [
                            [
                                'title' => '- ' . __('Các khoản phải thu dài hạn', 'BSC'),
                                'order' => 35,
                                'children' => []
                            ],
                            [
                                'title' => '- ' . __('Các khoản đầu tư', 'BSC'),
                                'order' => 36,
                                'children' => [
                                    [
                                        'title' => __('Các khoản đầu tư nắm giữ đến ngày đáo hạn', 'BSC'),
                                        'order' => 37,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Đầu tư vào công ty con', 'BSC'),
                                        'order' => 38,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Đầu tư vào công ty liên doanh, liên kết', 'BSC'),
                                        'order' => 39,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => '- ' . __('Tài sản cố định', 'BSC'),
                                'order' => 40,
                                'children' => [
                                    [
                                        'title' =>  __('Tài sản cố định hữu hình', 'BSC'),
                                        'order' => 41,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'BSC'),
                                                'order' => 42,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'BSC'),
                                                'order' => 43,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐHH theo giá trị hợp lý', 'BSC'),
                                                'order' => 44,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'title' =>  __('Tài sản cố định thuê tài chính', 'BSC'),
                                        'order' => 45,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'BSC'),
                                                'order' => 46,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'BSC'),
                                                'order' => 47,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐTTC theo giá trị hợp lý', 'BSC'),
                                                'order' => 48,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                    [
                                        'title' =>  __('Tài sản cố định vô hình', 'BSC'),
                                        'order' => 49,
                                        'children' => [
                                            [
                                                'title' =>  __('Nguyên giá', 'BSC'),
                                                'order' => 50,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Giá trị hao mòn lũy kế', 'BSC'),
                                                'order' => 51,
                                                'children' => []
                                            ],
                                            [
                                                'title' =>  __('Đánh giá TSCĐVH theo giá trị hợp lý', 'BSC'),
                                                'order' => 52,
                                                'children' => []
                                            ],
                                        ]
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Bất động sản đầu tư', 'BSC'),
                                'order' => 53,
                                'children' => [
                                    [
                                        'title' =>  __('Nguyên giá', 'BSC'),
                                        'order' => 54,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Giá trị hao mòn luỹ kế', 'BSC'),
                                        'order' => 55,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Đánh giá BĐSĐT theo giá trị hợp lý', 'BSC'),
                                        'order' => 56,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Chi phí xây dựng cơ bản dở dang', 'BSC'),
                                'order' => 57,
                                'children' => []
                            ],
                            [
                                'title' =>  '- ' . __('Tài sản dài hạn khác', 'BSC'),
                                'order' => 58,
                                'children' => [
                                    [
                                        'title' =>  __('Cầm cố, thế chấp, ký quỹ, ký cược dài hạn', 'BSC'),
                                        'order' => 59,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Chi phí trả trước dài hạn', 'BSC'),
                                        'order' => 60,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tài sản thuế thu nhập hoãn lại', 'BSC'),
                                        'order' => 61,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tiền nộp Quỹ Hỗ trợ thanh toán', 'BSC'),
                                        'order' => 62,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Tài sản dài hạn khác', 'BSC'),
                                        'order' => 63,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  '- ' . __('Dự phòng suy giảm giá trị tài sản dài hạn', 'BSC'),
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
        'title' =>  'II. ' . __('NỢ PHẢI TRẢ VÀ VỐN CHỦ SỞ HỮU', 'BSC'),
        'order' => 65,
        'children' => [
            [
                'title' =>  '1. ' . __('NỢ PHẢI TRẢ', 'BSC'),
                'order' => 66,
                'children' => [
                    [
                        'title' =>  '- ' . __('Nợ phải trả ngắn hạn', 'BSC'),
                        'order' => 67,
                        'children' => [
                            [
                                'title' =>  __('Vay và nợ thuê tài chính ngắn hạn', 'BSC'),
                                'order' => 68,
                                'children' => [
                                    [
                                        'title' =>  __('Vay ngắn hạn', 'BSC'),
                                        'order' => 69,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Nợ thuê tài chính ngắn hạn', 'BSC'),
                                        'order' => 70,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  __('Vay tài sản tài chính ngắn hạn', 'BSC'),
                                'order' => 71,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu chuyển đổi ngắn hạn - cấu phần nợ', 'BSC'),
                                'order' => 72,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu phát hành ngắn hạn', 'BSC'),
                                'order' => 73,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Vay Quỹ Hỗ trợ thanh toán', 'BSC'),
                                'order' => 74,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả hoạt động giao dịch chứng khoán', 'BSC'),
                                'order' => 75,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả về lỗi giao dịch các tài sản tài chính', 'BSC'),
                                'order' => 76,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người bán ngắn hạn', 'BSC'),
                                'order' => 77,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Người mua trả tiền trước ngắn hạn', 'BSC'),
                                'order' => 78,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Thuế và các khoản phải nộp Nhà nước', 'BSC'),
                                'order' => 79,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người lao động', 'BSC'),
                                'order' => 80,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản trích nộp phúc lợi nhân viên', 'BSC'),
                                'order' => 81,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Chi phí phải trả ngắn hạn', 'BSC'),
                                'order' => 82,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả nội bộ ngắn hạn', 'BSC'),
                                'order' => 83,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Doanh thu chưa thực hiện ngắn hạn', 'BSC'),
                                'order' => 84,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Nhận ký quỹ, ký cược ngắn hạn', 'BSC'),
                                'order' => 85,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản phải trả, phải nộp khác ngắn hạn', 'BSC'),
                                'order' => 86,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Dự phòng phải trả ngắn hạn', 'BSC'),
                                'order' => 87,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ khen thưởng, phúc lợi', 'BSC'),
                                'order' => 88,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' =>  '- ' . __('Nợ phải trả dài hạn', 'BSC'),
                        'order' => 89,
                        'children' => [
                            [
                                'title' =>  __('Vay và nợ thuê tài chính dài hạn', 'BSC'),
                                'order' => 90,
                                'children' => [
                                    [
                                        'title' =>  __('Vay dài hạn', 'BSC'),
                                        'order' => 91,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Nợ thuê tài chính dài hạn', 'BSC'),
                                        'order' => 92,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' =>  __('Vay tài sản tài chính dài hạn', 'BSC'),
                                'order' => 93,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu chuyển đổi dài hạn - cấu phần nợ', 'BSC'),
                                'order' => 94,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Trái phiếu phát hành dài hạn', 'BSC'),
                                'order' => 95,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả người bán dài hạn', 'BSC'),
                                'order' => 96,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Người mua trả tiền trước dài hạn', 'BSC'),
                                'order' => 97,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Chi phí phải trả dài hạn', 'BSC'),
                                'order' => 98,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Phải trả nội bộ dài hạn', 'BSC'),
                                'order' => 99,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Doanh thu chưa thực hiện dài hạn', 'BSC'),
                                'order' => 100,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Nhận ký quỹ, ký cược dài hạn', 'BSC'),
                                'order' => 101,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Các khoản phải trả, phải nộp khác dài hạn', 'BSC'),
                                'order' => 102,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Dự phòng phải trả dài hạn', 'BSC'),
                                'order' => 103,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ bảo vệ Nhà đầu tư', 'BSC'),
                                'order' => 104,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Thuế thu nhập hoãn lại phải trả', 'BSC'),
                                'order' => 105,
                                'children' => []
                            ],
                            [
                                'title' =>  __('Quỹ phát triển khoa học và công nghệ', 'BSC'),
                                'order' => 106,
                                'children' => []
                            ],
                        ]
                    ],
                ]
            ],
            [
                'title' => '2. ' . __('VỐN CHỦ SỞ HỮU', 'BSC'),
                'order' => 107,
                'children' => [
                    [
                        'title' => '- ' . __('Vốn chủ sở hữu', 'BSC'),
                        'order' => 108,
                        'children' => [
                            [
                                'title' => __('Vốn đầu tư của chủ sở hữu', 'BSC'),
                                'order' => 109,
                                'children' => [
                                    [
                                        'title' => __('Vốn góp của chủ sở hữu', 'BSC'),
                                        'order' => 110,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Thặng dư vốn cổ phần', 'BSC'),
                                        'order' => 111,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Quyền chọn chuyển đổi trái phiếu - cấu phần vốn', 'BSC'),
                                        'order' => 112,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Vốn khác của chủ sở hữu', 'BSC'),
                                        'order' => 113,
                                        'children' => []
                                    ],
                                    [
                                        'title' => __('Cổ phiếu quỹ', 'BSC'),
                                        'order' => 114,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Chênh lệch đánh giá tài sản theo giá trị hợp lý', 'BSC'),
                                'order' => 115,
                                'children' => []
                            ],
                            [
                                'title' => __('Chênh lệch tỷ giá hối đoái', 'BSC'),
                                'order' => 116,
                                'children' => []
                            ],
                            [
                                'title' => __('Quỹ dự trữ bổ sung vốn điều lệ', 'BSC'),
                                'order' => 117,
                                'children' => []
                            ],
                            [
                                'title' => __('Quỹ dự phòng tài chính và rủi ro nghiệp vụ', 'BSC'),
                                'order' => 118,
                                'children' => []
                            ],
                            [
                                'title' => __('Các Quỹ khác thuộc vốn chủ sở hữu', 'BSC'),
                                'order' => 119,
                                'children' => []
                            ],
                            [
                                'title' => __('Lợi nhuận chưa phân phối', 'BSC'),
                                'order' => 120,
                                'children' => [
                                    [
                                        'title' =>  __('Lợi nhuận sau thuế đã thực hiện', 'BSC'),
                                        'order' => 121,
                                        'children' => []
                                    ],
                                    [
                                        'title' =>  __('Lợi nhuận chưa thực hiện', 'BSC'),
                                        'order' => 122,
                                        'children' => []
                                    ],
                                ]
                            ],
                            [
                                'title' => __('Lợi ích cổ đông không kiểm soát', 'BSC'),
                                'order' => 123,
                                'children' => []
                            ],
                        ]
                    ],
                    [
                        'title' => '- ' . __('Nguồn kinh phí và quỹ khác', 'BSC'),
                        'order' => 124,
                        'children' => []
                    ],
                ]
            ],
            [
                'title' => '3. ' . __('LỢI NHUẬN ĐÃ PHÂN PHỐI CHO NHÀ ĐẦU TƯ', 'BSC'),
                'order' => 125,
                'children' => [
                    [
                        'title' => '- ' . __('Lợi nhuận đã phân phối cho Nhà đầu tư trong năm', 'BSC'),
                        'order' => 126,
                        'children' => []
                    ],
                ]
            ],
        ]
    ],
];
