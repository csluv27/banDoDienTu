<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
  integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
  $('.xulydonhang').change(function () {
    const value = $(this).val();
    const order_code = $(this).find(':selected').attr('id');
  
    if (value == 0) {
      alert('Hãy chọn xử lý đơn hàng!');
    } else {
      $.ajax({
        method: 'POST',
        url: '/order/process',
        data: { value: value, order_code: order_code },
        success: function () {
          alert('Thay đổi thành công!');
        }
      });
    }
  });
</script>
<script>
function toggleTitle(element) {
  element.classList.toggle('expanded');
}
</script>

</body>

</html>