<?php
/**
 * Created by PhpStorm.
 * User: KiThuat 88
 * Date: 4/17/2018
 * Time: 9:45 PM
 */
$quanLiDanhSachSV = array(
    array(
        'ten' => 'Nguyễn Văn A',
        'ngaySinh' => '01/01/2018',
        'gioiTinh' => 'Nam'
    ),
    array(
        'ten' => 'Nguyễn Văn A',
        'ngaySinh' => '01/01/2018',
        'gioiTinh' => 'Nam'
    ),
    array(
        'ten' => 'Nguyễn Văn A',
        'ngaySinh' => '01/01/2018',
        'gioiTinh' => 'Nam'
    ),
    array(
        'ten' => 'Nguyễn Văn A',
        'ngaySinh' => '01/01/2018',
        'gioiTinh' => 'Nam'
    ),
);
echo '<ul>';
foreach($quanLiDanhSachSV as $key1 =>$a){
    echo '<li>';
        echo 'Ten :'.$a['ten'].'<br/>';
        echo 'Ngay Sinh'.$a['ngaySinh'].'<br/>';
        echo 'Gioi Tinh'.$a['gioiTinh'].'<br/>';
    echo '</li>';
}
echo '</ul>';
?>