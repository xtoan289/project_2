<div class="flash-shale">
    <div class="phone-container">
        <div class="mainsmartphone">
            <?php
                foreach ($sanpham as $sanpham) {
                    extract($sanpham);
                    $img_link = "../../FE/core/upload/";
                    $hinh = $img_link.$hinhanh_sanpham;
                    echo '
                    <div class="phone">
                        <form action="index.php?act=addtocart" method="post">
                            <div class="img-phone">
                                <img class="img-phone" src="'.$hinh.'">
                            </div>
                            <div class="deal-phone">
                                <i class="fa-solid fa-percent"></i>
                                <p class="share-phone">GIÁ RẺ QUÁ</p>
                            </div>
                            <div class="price-phone">
                                <p class="price-phone-1">'.$ten_sanpham.'</p>
                                <div class="money">
                                    <p class="build">'.number_format($giasp).'</p>
                                    <p class="discount">-19%</p>
                                </div>
                                <div class="Evaluate">
                                    <div class="star">4.7 <i id="star" class="fa-solid fa-star"></i></div>
                                    <div class="sold">(756)</div>
                                </div>
                                </div>
                                <div class="build-now">
                                    <input class="btn_shop" type="submit" name="addtocart" value="Mua ngay">
                                </div>
                                <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'">
                                <input type="hidden" name="ten_sanpham" value="'.$ten_sanpham.'">
                                <input type="hidden" name="gia_sanpham" value="'.$giasp.'">
                                <input type="hidden" name="hinh_sanpham" value="'.$hinh.'">
                        </form>
                    </div>
                    ';
                }
       ?>
        </div>
    </div>
</div>