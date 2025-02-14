<section id="cart_items">
  <div class="custom-container container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/') ?>">Home</a></li>
        <li class="active">Liên hệ NPC Shop</li>
      </ol>
    </div>
    <div class="custom-container container">
      <span class="title" style="font-size: 30px;">LIÊN HỆ</span>
      <div class="underline" style="margin-top: 20px;"></div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.8551185156552!2d106.16051547666265!3d20.430042481073645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e756dae56d0d%3A0x97cbf14af357037e!2zMjQxIMSQaeG7h24gQmnDqm4sIEzhu5ljIEhvw6AsIE5hbSDEkOG7i25oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1737096165929!5m2!1svi!2s"
        allowfullscreen="" style="  width: 100%;
    height: 60vh;
    border: 2px solid #FE980F;
    border-radius: 10px;
    margin-top: 10px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="underMap">
        <form action="<?php echo base_url('send-contact') ?>" method="POST" class="leftSection">
          <div>
            <span style="font-size: 24px; margin-bottom:10px">Viết nhận xét:</span>
            <div class="underline"></div>
            <span style="margin-bottom:15px">Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ
              liên lạc lại với bạn sớm nhất có thể.</span>
            <input type="text" name="name" placeholder="Họ và tên" class="inputField">
            <input type="text" name="email" placeholder="Email" class="inputField">
            <textarea name="note" type="text" placeholder="Viết bình luận..." class="inputField" rows="5"></textarea>
            <button class="submitButton">Gửi bình luận</button>
            <?php if ($this->session->flashdata('success')): ?>
              <p class="alert alert-success" style="margin-top:10px"><?php echo $this->session->flashdata('success'); ?>
              </p> <?php endif; ?>
          </div>
        </form>

        <div class="rightSection">
          <span style="font-size: 24px;">Chúng tôi ở đây</span>
          <div class="underline"></div>
          <span style="font-size: 20px;">New Gaming Product & Power Computing Center</span>
          <span>Just five decent fellows sharing our passion for gaming with you!</span>
          <div class="info">
            <i class="fa fa-location-arrow" style="margin:0 12px 12px 0;" aria-hidden="true"></i>
            <span>241 Điện Biên, Lộc Hoà, Nam Định, Việt Nam</span>
          </div>
          <div class="info">
            <i class="fa fa-envelope" style="margin:0 12px 12px 0;" aria-hidden="true"></i>
            <span>npcshop123@gmail.com</span>
          </div>
          <div class="info">
            <i class="fa fa-phone" style="margin:0 12px 12px 0;" aria-hidden="true"></i>
            <span>0888888888</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  body {
    margin: 0;
    padding: 0;
  }

  .underMap {
    display: flex;
    flex-direction: row;
    margin-top: 30px;
    margin-bottom: 80px;
  }

  .info {
    display: flex;
    flex-direction: row;
    align-items: center;
  }

  .custom-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  span {
    font-size: 16px;
  }

  .underline {
    border-bottom: 2px solid #e0e0e0;
    margin-top: 5px;
    margin-bottom: 20px;
  }

  .leftSection,
  .rightSection {
    display: flex;
    vertical-align: top;
    flex-direction: column;
  }

  .leftSection {
    width: 50%;
    margin-right: 15%;
  }

  .rightSection {
    width: 35%;
  }

  .rightSection span {
    display: block;
    margin-bottom: 12px;
  }

  .inputField {
    width: 100%;
    margin-bottom: 10px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .submitButton {
    padding: 12px 24px;
    background-color: #FE980F;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    max-width: 150px;
    font-size: 16px;
  }

  .submitButton:hover {
    background-color: #f08d04;
  }
</style>