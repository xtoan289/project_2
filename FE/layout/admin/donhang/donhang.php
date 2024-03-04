<?php
include("admin/header_admin.php");
?>
<!-------------- List Category ----------------->
<div class="container">
    <h2> Đơn hàng</h2>
</div>
<table>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Khách hàng</th>
        <th>Giá trị đơn hàng</th>
        <th>Tình trạng</th>
        <th>Thao tác</th>
    </tr>
    <?php
     foreach ($list_bill as $bill ) {
        extract ($bill);
        $xoabill = "index.php?act=xoabill&id=".$id;
        $chitietbill = "index.php?act=chitietbill&id=".$id;
        $khachhang = $bill["bill_name"].'
        <br> '.$bill["bill_address"].'
        <br> '.$bill["bill_tel"].'
        <br> '.$bill["bill_email"];
        $ttdh = bill_status($bill["bill_status"]);
        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$khachhang.'</td>
        <td>'.number_format($total).'</td>
        <td>'.$ttdh.'</td>
        <td><a href="'.$chitietbill.'" class="btn_delete_update"><input type="button"  value="">Chi tiết</a>
        <a>|</a>
        <a href="'.$xoabill.'" class="btn_delete_update"><input type="button"  value="">Xóa</a>
        
    </tr>';
    }
    ?>
</table>