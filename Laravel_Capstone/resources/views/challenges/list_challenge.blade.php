@extends('headers.top_nav')

@section('content')

<link rel="stylesheet" href="/css/challenge.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<div class="container-fluid challenge-list-cont" style="padding:0 !important;">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner challenge-carousel-inner">
      <div class="carousel-item active" id="good-challenge">
        <img src="\img\ui\웨이스탠드\소스\챌린지페이지\바른 자세 챌린지 사진.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block challenge-carousel-text">
          <h1>正しい姿勢チャレンジ</h1>
          <p>正しい姿勢習慣で腰を守りましょう。</p>
          <div id="col-card">
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body">
                      <h4>正しい姿勢チャレンジは？</h4>
                      <img src="\img\ui\웨이스탠드\소스\챌린지페이지\그래픽기호.png" alt="">
                      <p>
                      正しい座り方を作ります。<br>
                      座り方を長期的に改善します。<br>
                      参加費を支払うと、100％達成したら賞金が得られます！<br>
                      正しい座り方を作って、賞金をもらいましょう！
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body">
                      <h4>チャレンジの方法は？</h4>
                      <img src="\img\ui\웨이스탠드\소스\챌린지페이지\그래픽기호.png" alt="">
                      <p>
                      毎日オート認証：一日の正しい姿勢 - 60％以上<br>
                      ウエイスタンド座布団から受け取った着席姿勢データに基づいで自動的に認証されます。<br>
                      一日の正しい姿勢が6割以上の場合成功！
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body" id="join-info">
                    <h5>現在 {{ count($challenge_1) }}人挑戦中</h5>
                    <h5 id="join-fee">参加費 : {{ $good_challenge->default_entry_fee }}円</h5>
                    <h5>無料で参加できる</h5>
                    <button type="button" class="btn join-modal" id="good-join-btn" data-toggle="modal" data-target="#join-modal">チャレンジに参加</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="carousel-item" id="stretch-challenge">
        <img src="\img\ui\웨이스탠드\소스\챌린지페이지\스트레칭 사진.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block challenge-carousel-text">
          <h1>ストレッチチャレンジ</h1>
          <p>毎日ストレッチして、腰を守りましょう。</p>
          <div id="col-card">
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body">
                      <h4>正しい姿勢チャレンジは？</h4>
                      <img src="\img\ui\웨이스탠드\소스\챌린지페이지\그래픽기호.png" alt="">
                      <p>
                      腰を守るためにストレッチは必ず必要です。<br>
                      ストレッチ、これからは忘れないで楽しんでください！<br>
                      暇な時ゲームだけすればストレッチ完了！<br>
                      チャレンジに参加してストレッチも楽しんで、賞金ももらいましょう！
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body">
                      <h4>チャレンジの方法は？</h4>
                      <img src="\img\ui\웨이스탠드\소스\챌린지페이지\그래픽기호.png" alt="">
                      <p>
                      ゲームプレイでオート認証 : "スコア 1000点以上"<br>
                      アプリのストレッチゲームをプレイすることでチャレンジを達成します。<br>
                      毎日ゲームの最高スコアが1000点以上になった場合認証されます。
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-4 top-div-box-3 challenge-col">
              <div class="challenge-card">
                  <div class="card-body" id="join-info">
                    <h5>現在 {{ count($challenge_2) }}人挑戦中</h5>
                    <h5 id="join-fee">参加費 : {{ $stretch_challenge->default_entry_fee }}円</h5>
                    <h5>無料で参加できる</h5>
                    <button type="button" class="btn join-modal" id="stretch-join-btn" data-toggle="modal" data-target="#join-modal">チャレンジに参加</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="modal fade" id="join-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          style= "
          margin-left:0;
          ">
          <img src="\img\ui\웨이스탠드\소스\챌린지페이지\뒤로가기 버튼.png" alt="">
        </button>
        <h1 class="modal-title join-modal-title" id="exampleModalLabel"></h1>
        <p id="modal-header-info"></p>
      </div>
      <div class="modal-body">
        <form action="" id="join-form" data-challenge-id="">
        {!! csrf_field() !!}

          <div class="col-10" id="join-form-body">
            <div class="row">
              <div class="col-2">
                <label for="user_id"><p>参加者</p></label>
              </div>
              <div class="col-4">
                <div id="user_id" data-user-id="{{Auth::user()->id}}"><p>{{Auth::user()->user_id}}</p></div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <label for="join-start-date"><p>スタートの日</p></label>
              </div>
              <div class="col-3">
                <input type="date" name="join-start-date" id="join-start-date" value='0000-00-00'/>
              </div>

              <div class="col-2">
                <label for="join-end-date"><p>終了の日</p></label>
              </div>
              <div class="col-3">
                <input type="date" name="join-end-date" id="join-end-date" value='0000-00-00'/>
              </div>
            </div>

            <div class="row">
              <div class="col-2"><p>参加費</p></div>
              <div class="col-3">
                <input type="radio" name="join-fee" id="pay-join-fee">
                <label for="pay-join-fee"><p>参加費を支払って参加する</p></label>

                <div class="col-12" id="set-join-fee"></div>
              </div>
              <div class="col-3">
                <input type="radio" name="join-fee" id="free-join-fee">
                <label for="free-join-fee"><p>無料で参加する</p></label>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" id="submit-form" class="btn btn-secondary" data-dismiss="modal">参加する</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    var good_challenge_id = "<?php echo $good_challenge->id ?>";
    var good_challenge_title = "<?php echo $good_challenge->challenge_title ?>";
    var good_challenge_info = "<?php echo $good_challenge->challenge_information ?>";

    var stretch_challenge_id = "<?php echo $stretch_challenge->id ?>";
    var stretch_challenge_title = "<?php echo $stretch_challenge->challenge_title ?>";
    var stretch_challenge_info = "<?php echo $stretch_challenge->challenge_information ?>";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#good-join-btn').on('click', function(e){
      e.preventDefault();
      $('.join-modal-title').text(good_challenge_title);
      $('#modal-header-info').text(good_challenge_info);
      $('#join-form').attr('data-challenge-id', good_challenge_id);
    });

    $('#stretch-join-btn').on('click', function(e){
      e.preventDefault();
      $('.join-modal-title').text(stretch_challenge_title);
      $('#modal-header-info').text(stretch_challenge_info);
      $('#join-form').attr('data-challenge-id', stretch_challenge_id);

    });

    var join_count = 0;
      
    $('#pay-join-fee').click(function(e){
        join_count++;

        if(join_count == 1) {
            var $label = $('<label for="set-join-fee-input" id="set-join-fee-label">参加費設定</label>')
            var $input = $('<input type="text" id="set-join-fee-input" name="set-join-fee-input" placeholder="金額を入力"/>');

            $('#set-join-fee').append($label);
            $('#set-join-fee').append($input);
        }
        console.log('끝');
        console.log(join_count);
    });

    $('#free-join-fee').click(function(e){
        $('#set-join-fee-label').remove();
        $('#set-join-fee-input').remove();

        join_count = 0;
    });

    $('#submit-form').on('submit', function(e) {
        e.preventDefault();

        var start_date = $('#join-start-date').val();
        var end_date = $('#join-end-date').val();

        if($('input:radio[id="pay-join-fee"]').is(':checked')) {
            var join_fee = $('#set-join-fee-input').val();
        } else if ($('input:radio[id="free-join-fee"]').is(':checked')) {        
            var join_fee = 0;
        } else {
            alert('参加費を洗濯して下さい。');
        }
        console.log(join_fee);

        if(confirm('チャレンジに挑戦しますか?')) {
            $.ajax({
                url: '/challenges',
                type: 'post',
                data: {
                    challenge_id: $('#join-form').attr('data-challenge-id'),
                    user_id: $('#user_id').attr('data-user-id'),
                    date: start_date,
                    term: dateDif(start_date, end_date),
                    fee: join_fee,
                },
                success: function() {
                  $('#qnaModal').modal('hide');
                },
                error:function(request,status,error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                }
            });
        }
    });

    // 날짜 차이 계산
    function dateDif(startDate, endDate) {
        var arr1 = startDate.split('-');
        var arr2 = endDate.split('-');
        var date1 = new Date(arr1[0], arr1[1], arr1[2]);
        var date2 = new Date(arr2[0], arr2[1], arr2[2]);
        var dif = date2 - date1;
        var cDay = 24 * 60 * 60 * 1000;// 시 * 분 * 초 * 밀리세컨

        return parseInt(dif/cDay);
    }

  });
</script>

@stop