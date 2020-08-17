<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="/css/stats.css">

<div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-12 main-div-box" style="margin-bottom: 15px;">
          <div class="btn-group" role="group" aria-label="Basic example" id="btn-group-stats">
              <button style="background-color: #58f1b0; border-color: white;" type="button" class="btn btn-secondary" id="today-btn">今日</button>
              <button style="background-color: #58f1b0; border-color: white;" type="button" class="btn btn-secondary" id="week-btn">今週</button>
              <button style="background-color: #58f1b0; border-color: white;" type="button" class="btn btn-secondary" id="month-btn">今月</button>
          </div>
      </div>

      <div id="include">
          @include('mypages2.stats.today', ['data'=> $data])
      </div>

    </div>
</div>
{{--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>--}}

<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#today-btn').on('click', function(e){
      e.preventDefault();

      $.ajax({
        headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
        method: "GET",
        url: "/mypage/stats/today",
        success: function(res){
          $('#include').children().remove();
          $('#include').html(res);
        },
        error: function(request,status,error){
          console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      });
    });

    $('#week-btn').on('click', function(e){
      e.preventDefault();

      $.ajax({
        headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
        method: "GET",
        url: "/mypage/stats/week",
        success: function(res){
          $('#include').children().remove();
          $('#include').html(res);
        },
        error: function(request,status,error){
          console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      });
    });

    $('#month-btn').on('click', function(e){
      e.preventDefault();

      $.ajax({
        headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },
        method: "GET",
        url: "/mypage/stats/month",
        success: function(res){
          $('#include').children().remove();
          $('#include').html(res);
        },
        error: function(request,status,error){
          console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      });
    });

  });
</script>