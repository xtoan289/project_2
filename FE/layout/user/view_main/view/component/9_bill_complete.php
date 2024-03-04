<?php
    if (isset($_SESSION ['user'])) {
        $ten_khachhang = $_SESSION ['user']['last_name'];
        $diachi_khachhang = $_SESSION ['user']['address_account'];
        $sdt_khachhang = $_SESSION ['user']['phone_account'];
        $email_khachhang = $_SESSION ['user']['email_account'];
    }else {
        $ten_khachhang = "";
        $diachi_khachhang = "";
        $sdt_khachhang = "";
        $email_khachhang = "";
    }
?>
<form action="index.php?act=bill_complete" method="post">
    <div class="container">
        <div>
            <h2>Cảm ơn quý khách đã đặt hàng</h2>
        </div>
        <?php
            if(isset($bill) && (is_array($bill))) {
                extract($bill);
            }
        ?>
        <div class="row">
            <div class="thongtindonhang">
                <h3>THÔNG TIN ĐƠN HÀNG</h3>
                <div class="chitietdonhang">
                    <div class="date-bill">
                        <div class="thongtin">Mã đơn hàng:</div>
                        <div class="chitiet"><?=$bill['id']?></div>
                    </div>
                    <div class="date-bill">
                        <div class="thongtin">Ngày đặt hàng:</div>
                        <div class="chitiet"><?=$bill['bill_date']?></div>
                    </div>
                    <div class="date-bill">
                        <div class="thongtin">Tổng đơn hàng:</div>
                        <div class="chitiet"><?= number_format($bill['total'])?> VNĐ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thongtindonhang">
            <h3>Thông tin giỏ hàng</h3>
            <?php
                viewcart_thanhtoan();
            ?>
        </div>
    </div>
</form>