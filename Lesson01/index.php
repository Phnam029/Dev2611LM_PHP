<?php

declare(strict_types=1);

const TEN_TRUNG_TAM = 'Trung tam dao tao Devmaster';
const KHAU_HIEU = 'Learn to work - Hoc de lam duoc viec';
const NAM_THANH_LAP = '2015';
const DIA_CHI = 'Ha Noi, Viet Nam';

$soKhoaHoc = 12;
$soHocVien = 1850;
$tyleCoViec = 0.925;
$dangTuyenSinh = true;
$namHienTai = (int) date('Y');
$soNamHoatDong = $namHienTai - NAM_THANH_LAP;
$hocvienMoiKhoa = intdiv($soHocVien, $soKhoaHoc);
$trangthai = $dangTuyenSinh ?  'Dang tuyen sinh' : 'Tam ngung tuyen sinh ';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TEN_TRUNG_TAM ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="site">
        <h1><?= TEN_TRUNG_TAM ?></h1>
        <p><?= KHAU_HIEU ?></p>
    </header>
    <nav class="menu">
        <a href="index.php">Trang chủ</a>
        <a href="khoa-hoc.php">Khóa học</a>
        <a href="hoc-vien.php">Học viên</a>
    </nav>
    <main>
        <section class="card">
            <h2>Giới thiệu</h2>
            <table class="info">
                <tr><th>Địa chỉ</th><td><?= DIA_CHI ?></td></tr>
                <tr><th>Năm thành lập</th><td><?= NAM_THANH_LAP ?> (<?= $soNamHoatDong ?> năm hoạt động)</td></tr>
                <tr><th>Số khóa học</th><td><?= $soKhoaHoc ?></td></tr>
                <tr><th>Tổng số học viên</th><td><?= number_format($soHocVien, 0, ',', '.') ?></td></tr>
                <tr><th>Trung bình mỗi khóa</th><td><?= $hocvienMoiKhoa ?> học viên</td></tr>
                <tr><th>Tỷ lệ có việc làm</th><td><?= number_format($tyleCoViec * 100, 1, ',', '.') ?>%</td></tr>
                <tr><th>Trạng thái</th><td><?= $trangthai ?></td></tr>
            </table>
        </section>
    </main>
    <footer class="site">
        &copy; <?= $namHienTai ?> <?= TEN_TRUNG_TAM ?> - Trang được tạo lúc <?= date('H:i:s d/m/Y') ?>
    </footer>
</body>
</html>