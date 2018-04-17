<?php
$quanLiDanhSachSV = array(
    array(
        'tenSanPham'=> 'Hoa Hồng',
        'tenNhaSanXuat' => 'Quán Hoa Bách Khoa',
        'ngaySanXuat' => '01/01/2018',
        'thongTinSanPham' =>'Hiện tại chưa có',
        'giaBan' => '200000 VNĐ / 15 bông'
    ),
    array(
        'tenSanPham'=> 'Hoa Hồng',
        'tenNhaSanXuat' => 'Quán Hoa Bách Khoa',
        'ngaySanXuat' => '01/01/2018',
        'thongTinSanPham' =>'Hiện tại chưa có',
        'giaBan' => '200000 VNĐ / 15 bông'
    ),
    array(
        'tenSanPham'=> 'Hoa Hồng',
        'tenNhaSanXuat' => 'Quán Hoa Bách Khoa',
        'ngaySanXuat' => '01/01/2018',
        'thongTinSanPham' =>'Hiện tại chưa có',
        'giaBan' => '200000 VNĐ / 15 bông'
    ),
    array(
        'tenSanPham'=> 'Hoa Hồng',
        'tenNhaSanXuat' => 'Quán Hoa Bách Khoa',
        'ngaySanXuat' => '01/01/2018',
        'thongTinSanPham' =>'Hiện tại chưa có',
        'giaBan' => '200000 VNĐ / 15 bông'
    ),
);
echo '<ul>';
foreach($quanLiDanhSachSV as $key2 =>$a2){
    echo '<li>';
    echo 'Ten san pham       : '.$a2['tenSanPham'].'<br/>';
    echo 'Ten Nha San Xuat   : '.$a2['tenNhaSanXuat'].'<br/>';
    echo 'Ngay San Xuat      : '.$a2['ngaySanXuat'].'<br/>';
    echo 'Thong Tin San Pham : '.$a2['thongTinSanPham'].'<br/>';
    echo 'Thong Tin San Pham : '.$a2['giaBan'].'<br/>';
    echo '</li>';
}
echo '</ul>';
?>
