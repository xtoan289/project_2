<?php
include("admin/header_admin.php");
$bill = load_bill();
if (is_array($bill)) {
    extract($bill);
}
?>
<!-------------- List Category ----------------->
<div class="container">
    <h2>Chi tiết đơn hàng</h2>
</div>
<table>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    <?php
        foreach ($cart_chitiet as $cart_item) {
            echo '<tr>
                    <td>' . $cart_item["id_bill"] . '</td>
                    <td>' . $cart_item["ten_sanpham"] . '</td>
                    <td>' . $cart_item["soluong"] . '</td>
                    <td>' . number_format($cart_item["thanhtien"]) . '</td>
                  </tr>';
        }
    ?>
</table>