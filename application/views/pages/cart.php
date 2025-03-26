<section id="cart_items">
    <div class="container custom-container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('/') ?>">Home</a></li>
                <li class="active"> Giỏ hàng</li>
            </ol>
        </div>
        <div class="parent">
            <div class="div1">
                <div class="titleCart">Giỏ hàng của bạn</div>
                <div class="underline" style="border-bottom: 1px solid #e0e0e0;margin: 5px 0 20px;"></div>
                <div class="table-responsive cart_info">
                    <?php
                    $total = 0; // Đảm bảo biến này luôn tồn tại
                    if ($this->cart->contents()) { ?>
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image" width="150"></td>
                                    <td class="title">Tên sản phẩm</td>

                                    <td class="quantity" width="120">Số lượng</td>

                                    <td class="total" width="200">Tổng tiền</td>
                                    <td class="util"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->cart->contents() as $items) {
                                    $subtotal = $items['qty'] * $items['price'];
                                    $total += $subtotal;
                                    ?>
                                    <tr>
                                        <td class="cart_product">
                                            <img width="130px" height="110px"
                                                src="<?php echo base_url('uploads/product/' . ($items['options']['image'] ?? 'default.jpg')) ?>"
                                                alt="<?php echo $items['name'] ?>"></a>
                                        </td>
                                        <td class="cart_description">
                                            <span><?php echo $items['name'] ?></a></span>
                                        </td>

                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <form action="<?php echo base_url('update-cart-item') ?>" method="POST">
                                                    <input type="hidden" value="<?php echo $items['rowid'] ?>" name="rowid">

                                                    <div class="quantity-selector">
                                                        <button type="button" class="qty-btn minus">-</button>
                                                        <input type="number" class="cart_quantity_input" name="quantity"
                                                            value="<?php echo min($items['qty'], $items['options']['in_stock'] ?? 0) ?>"
                                                            min="1" autocomplete="off">
                                                        <button type="button" class="qty-btn plus">+</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price"> <?php echo number_format($subtotal, 0, ',', '.') ?> ₫
                                            </p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete"
                                                href="<?php echo base_url('delete-item/' . $items['rowid']) ?>"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <div class="message">Bạn đang không có gì trong giỏ</div>
                    <?php } ?>
                </div>
            </div>
            <div class="rightSection">
                <div class="div2">
                    <div class="titleCart">Thông tin đơn hàng</div>
                    <div class="timeDeli" style="display: flex; flex-direction: row; gap:10px; margin-top:10px">
                        <div class="te">Thời gian giao hàng:</div>
                        <div class="te">Khoảng 1 tuần</div>
                    </div>
                    <div class="tongTien"
                        style="display: flex; flex-direction: row; justify-content: space-between;; margin-top:10px;font-size:20px;font-weight:600;align-items:center;">
                        <div class="te">Tổng tiền:</div>
                        <div class="te" style="color:red ;font-size:28px"> <?php echo number_format($total, 0, ',', '.') ?> ₫</div>
                    </div>
                    <div class="underline" style="border-bottom: 1px solid #e0e0e0;margin: 5px 0 20px;"></div>
                    <div class="thongBao">
                        <p style="font-size: 14px; margin:0;margin-bottom:10px"><i
                                class="fa-solid fa-hand-point-right"></i> Miễn phí vận chuyển với đơn hàng trên 10
                            triệu.</p>
                        <p style="font-size: 14px; margin:0;margin-bottom:10px"><i
                                class="fa-solid fa-hand-point-right"></i> Hỗ trợ trả góp 0% chỉ cần để lại đầy đủ thông
                            tin.</p>
                        <p style="font-size: 14px; margin:0;margin-bottom:20px"><i
                                class="fa-solid fa-hand-point-right"></i> Nhiều mã giảm giá, freeship có thể tìm ở
                            fanpage.</p>
                    </div>
                    <div class="buttol">
                        <a href="<?php echo base_url('delete-all-cart') ?>" class="btn btn-danger" style="font-size: 16px; font-weight:500">Xóa tất cả</a>
          
                    </div>
                </div>
           
            </div>
        </div>
        <div class="checkout" style="margin-top:20px">
                    <form class="check" action="<?php echo base_url('confirm-checkout') ?>" method="POST"
                        onsubmit="return confirm('Xác nhận đặt hàng?')">
                        <input type="text" name="email" placeholder="Email">
                        <input type="text" name="name" placeholder="Họ tên">
                        <input type="text" name="location" placeholder="Địa chỉ">
                        <input type="text" name="phone" placeholder="Số điện thoại">
                        <span style="font-size:18px;font-weight:600;">Hình thức thanh toán</span>
                        <select name="shipping_method">
                            <option value="cod">COD</option>
                            <option value="vnpay" disabled>VNPAY (Đang bảo trì..)</option>
                        </select>

                        <button class="btn btn-success" type="submit" style="font-size: 16px; font-weight:500">Xác nhận thanh toán</button>
                    </form>
                </div>
    </div>
</section>
<style>
    .check{
        display: flex;
        flex-direction: column;
        gap: 15px;
        font-size: 16px;
    }
    .check input{
        border: 1px solid rgb(194, 193, 193);
        padding: 5px;
    }
    .checkout{
        width: 70.5%;
    }
    .buttol {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .buttol a {
        width: 100%;
        text-align: center;
    }

    .thongBao {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .titleCart {
        font-size: 26px;
        font-weight: 700;
        color: #CE3C2D;
    }

    .message {
        font-size: 16px;
        font-weight: 500;
        padding: 10px;
    }


    .custom-container {
        background-color: transparent;
        margin-bottom: 30px;
        font-size: 16px;
    }

    .parent {
        display: grid;
        grid-template-columns: 5fr 2fr;
        gap: 20px;
        align-items: start;
    }

    .div1,
    .div2,
    .checkout {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .cart_info .table td,
    .cart_info .table th {
        text-align: center;
        vertical-align: middle;
    }

    .cart_info .cart_quantity_button form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .cart_info .cart_quantity_input {
        width: 95%;
        margin: auto;
    }

    .cart_info .cart_delete {
        text-align: center;
    }

    .cart_info h4,
    .cart_info p,
    .cart_info a {
        text-align: center;
    }

    .breadcrumbs .breadcrumb {
        margin-bottom: 30px;
    }

    .breadcrumb li {
        font-size: 14px;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        border: 1px solid #ddd;
        width: fit-content;
        border-radius: 5px;
        overflow: hidden;

    }

    .qty-btn {
        background: rgb(247, 247, 247);
        border: none;
        padding: 7px 13px;
        cursor: pointer;
        font-size: 18px;
    }

    .qty-btn:hover {
        background: #ddd;
    }

    .qty-input {
        width: 40px;
        text-align: center;
        border: none;
        outline: none;
        font-size: 16px;
        text-align: center;
        padding: 0px 10px;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }

    .cart_description span {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Giới hạn số dòng tối đa */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        word-break: break-word;
        max-width: 100%;
        font-size: 20px;
    }

    .cart_product {
        padding: 0px;
    }
</style>
<script>
    document.querySelectorAll('.quantity-selector').forEach(selector => {
        const minusBtn = selector.querySelector('.minus');
        const plusBtn = selector.querySelector('.plus');
        const quantityInput = selector.querySelector('.cart_quantity_input');
        const form = selector.closest('form');

        minusBtn.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                form.submit(); // Tự động gửi form để cập nhật giỏ hàng
            }
        });

        plusBtn.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            form.submit();
        });
    });
</script>