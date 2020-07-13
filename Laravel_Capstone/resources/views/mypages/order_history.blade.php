<div class="container-fluid" id="orderhis-container">
  <div class="row">
    <div class="col-md-12">
      <table align="center" class="table table-striped" style="text-align:center; width: 90%;">
        <thead>
            <tr>
              <th scope="col" id="product_th">주문 번호</th>
              <th scope="col" id="send_user_th">받는 사람</th>
              <th scope="col" id="send_address_th">주문 제품</th>
              <th scope="col" id="order_date_th">구매 날짜</th>
              <th scope="col" id="order_th">확인/신청</th>
            </tr>
          </thead>
          <tbody>
          @forelse($orders as $order)
              <tr>
                  <th  scope="row" class="text_1" style="padding-top:30px;" id="order-id">{{$order->id}}</th>
                  <td class="text_1" style="padding-top:30px;">{{$order->send_user}}</td>
                  <td class="text_2">
                      <div id="order_title"><h3>{{$order->product->product_title}}</h3></div>
                      <div id="order_content">{{$order->product->product_content}}</div>
                  </td>
                  <td class="text_1" style="padding-top:30px;">{{$order->order_date}}</td>
                  <td>
                      <div class="order_bar" data-ord-id="{{$order->id}}" data-use-id="{{$order->user->id}}" style="padding-top:20px;">
                          <button class="show_order btn" style="border:1px solid gray; border-radius:20px;">주문 확인</button>
                          <button class="delete_order btn" style="border:1px solid gray; border-radius:20px;">주문 취소</button>
                      </div>
                  </td>
              </div>
              </tr>
          @empty
              <tr class="order_tr">
                  <td colspan="5" class="text_1">주문 내역이 없습니다.</td>
              </tr>
          @endforelse
          </tbody>
      </table>
    </div>

    <div class="col-md-12">
      <div id="include-order-info" style="width: 80%; height:400px; margin:40px auto 20px auto; box-shadow: 0px 0px 17px #d5dfe8">
        @include('mypages.order_info')
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.show_order').on('click', function() {
      var order_id = $('#order-id').text();
      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/orderinfo/"+order_id,
          // dataType: 'json',
          data: {
            id: order_id,
          },
          success: function (res)
          {
              console.log('success');
              $('#include-order-info').children().remove();
              $('#include-order-info').html(res);
              // $('#include').html(res.data);
          },
          error:function(request,status,error){
                console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
      });
    });

    $('.delete_order').on('click', function() {
        var did = $(this).parent('div').attr('data-ord-id');
        var uid = $(this).parent('div').attr('data-use-id');

        console.log(did, uid);
        
        if(confirm('주문을 삭제 하시겠습니까?')) {
            $.ajax({
                url: '/mypage/order_delete/' + did,
                type: 'DELETE',
                data: {
                    id: did,
                    user_id: uid,
                },
                success: function(res) {
                    //location.href = "/mypage/orderhis/"+uid;
                    console.log('success');
                    $('#orderhis-container').children().remove();
                    $('#orderhis-container').html(res);
                }
            });
        }
    });
  });
</script>