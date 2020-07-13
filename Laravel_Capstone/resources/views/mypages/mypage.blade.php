@extends('top_nav')

@section('main')
<div style="display:none;" id="buy-user-id">{{Auth::user()->id}}</div>

<div class="container-fluid" style="padding:0 70px; margin-top:20px;">
  <div class="row">
    <div class="col-lg-2" style="height: 700px; padding: 0;">
      <div class="card" style="width: 100%; height: 100%; border: 0; border-radius: 0; background-color:#006629; ">
        <div class="card-header" style="margin: 20px 0; background-color:#006629; border:0;">
          <h2 style="color:white; font-weight:bold; font-family: arial;">My Page</h2>
        </div>
        <hr style="width: 95%; margin: 0 auto; background-color:white;">
        <ul class="list-group list-group-flush" style="border-radius: 0; color:white;">
          <a href="#" style="color:white;text-decoration-line:none;"><li class="list-group-item" style="margin: 10px 0; background-color:#006629; border:0; margin-left:20px;" id="profile">프로필</li></a>
          <hr style="width: 95%; margin: 0 auto; background-color:white;">
          <a href="#" style="color:white;text-decoration-line:none;"><li class="list-group-item" style="margin: 10px 0; background-color:#006629; border:0; margin-left:20px;" id="myChallenge">My 챌린지</li></a>
          <hr style="width: 95%; margin: 0 auto; background-color:white;">
          <a href="#" style="color:white;text-decoration-line:none;"><li class="list-group-item" style="margin: 10px 0; background-color:#006629; border:0; margin-left:20px;" id="order-history">구매 정보</li></a>
          <hr style="width: 95%; margin: 0 auto; background-color:white;">
          <a href="#" style="color:white;text-decoration-line:none;"><li class="list-group-item" style="margin: 10px 0; background-color:#006629; border:0; margin-left:20px;" id="update-profile">회원 정보 수정</li></a>
        </ul>
      </div>
    </div>

    <div class="col-lg-10" style="height: 700px; padding: 0;">
      <div id="include" style="height: 100%; width: 100%; margin: 0 auto; border: 0; background-color:#fafafa;"> 
        @include('mypages.profile')
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

    $('#profile').on('click', function() {
      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/profile",
          // dataType: 'json',
          success: function (res)
          {
              console.log('success');
              $('#include').children().remove();
              $('#include').html(res);
              // $('#include').html(res.data);
          },
          error: function()
          {
              alert('Failed');
          }
      });
    });

    $('#myChallenge').on('click', function() {
      var uid = $('#buy-user-id').text();
      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/mychallenge/"+uid,
          // dataType: 'json',
          data: {
            id: uid, 
          },
          success: function (res)
          {
              console.log('success');
              $('#include').children().remove();
              $('#include').html(res);
              // $('#include').html(res.data);
          },
          error: function()
          {
              alert('Failed');
          }
      });
    });

    $('#order-history').on('click', function() {
      var buy_user_id = $('#buy-user-id').text();

      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/orderhis/"+buy_user_id,
          data: {
            id: buy_user_id,
          },
          // dataType: 'json',
          success: function (res)
          {
              console.log('success');
              $('#include').children().remove();
              $('#include').html(res);
              // $('#include').html(res.data);
          },
          error:function(request,status,error){
                console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
      });
    });

    $('#update-profile').on('click', function() {
      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/update_profile",
          // dataType: 'json',
          success: function (res)
          {
              console.log('success');
              $('#include').children().remove();
              $('#include').html(res);
              // $('#include').html(res.data);
          },
          error: function()
          {
              alert('Failed');
          }
      });
    });

  });
  
</script>
@stop