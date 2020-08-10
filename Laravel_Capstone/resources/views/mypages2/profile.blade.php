@extends('headers.top_nav')

@section('content')

<div id="background_top">
  <div id="profile">
    <img src="\img\ui\웨이스탠드\소스\마이페이지\챌린지 정보\프로필 사진.png" width="100px" alt="">
    <h5>こんにちは、{{Auth::user()->user_id}}</h4>
    <a href="#" id="edit-profile">プロフィール編集</a><br>
    <a href="/auth/logout" id="logout">ログアウト</a>
  </div>
</div>

<div style="display:none;" id="buy-user-id">{{Auth::user()->id}}</div>


<div class="container" id="main-menu">
  <div class="row">
    <div class="col-12">
      <ul class="nav">
        <li class="nav-item main-menu-item">
          <a class="nav-link" id="stats" href="">姿勢履歴</a>
        </li>
        <li class="nav-item main-menu-item">
          <a class="nav-link" id="stretch-info" href="">ストレッチ情報</a>
        </li>
        <li class="nav-item main-menu-item">
          <a class="nav-link" id="my-challenge" href="">マイチャレンジ</a>
        </li>
      </ul>
    </div>
  </div>
  <hr>

  <div id="main-contents">
    @include('mypages2.stats.stats')
  </div>
</div>

<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#stats').on('click', function(e) {
      e.preventDefault();

      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/stats",
          // dataType: 'json',
          success: function (res)
          {
              console.log('success');
              console.log($('#main-contents').children());

              $('#main-contents').children().remove();
              $('#main-contents').html(res);
              // $('#include').html(res.data);
          },
          error:function(request,status,error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
      });
    });

    $('#stretch-info').on('click', function(e) {
      e.preventDefault();

      $.ajax({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
          method: "GET",
          url: "/mypage/stretchinfo",
          // dataType: 'json',        
          success: function (res)
          {
              console.log('success');
              $('#main-contents').children().remove();
              $('#main-contents').html(res);
              // $('#include').html(res.data);
          },
          error:function(request,status,error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
      });
    });

    $('#my-challenge').on('click', function(e) {
      e.preventDefault(); 

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
              $('#main-contents').children().remove();
              $('#main-contents').html(res);
              // $('#include').html(res.data);
          },
          error:function(request,status,error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
      });
    });

  });
</script>
@stop