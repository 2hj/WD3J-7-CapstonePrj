@if($order != null)
<table class="table table-borderless" style="text-align:center;">
  <th scope="row" class="s_ord_th" colspan="2">주문 정보</th>
  <tr>
      <th scope="row" class="order_title">주문 번호</th>
      <td class="order_content text_1">{{ $order->id }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">제품 명</t>
      <td class="order_content text_1">{{ $order->product->product_title }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">제품 가격</th>
      <td class="order_content text_1">{{ $order->product->product_price }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">주문자</th>
      <td class="order_content text_1">{{ $order->user->user_id }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">받는 사람</th>
      <td class="order_content text_1">{{ $order->send_user }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">배송 주소</th>
      <td class="order_content text_1">{{ $order->send_address }}</td>
  </tr>
  <tr>
      <th scope="row" class="order_title">주문 날짜</th>
      <td class="order_content text_1">{{ $order->order_date }}</td>
  </tr>
</table>

{{--<div class="order_nav" data-ord-id="{{$order->id}}" data-use-id="{{$order->user->id}}">
  <button class="show_btn" id="edit_order">주문 수정</button>
  <button class="delete_order show_btn">주문 삭제</button>
</div>--}}

@else
<h4 style="margin: 0 auto;">구입한 상품이 존재하지 않습니다.</h4>

@endif