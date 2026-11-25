<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/ham.php';

echo dinhDangTien(12_500_000), "\n";
echo taoMaHocVien(42), "\n";
echo tinhTongPhaiDong(12_500_000, true), "\n";
echo tinhTongPhaiDong(12_500_000, false), "\n";
echo xepLoai(81.75), "\n";
echo dinhDangSo(81.75), "\n";