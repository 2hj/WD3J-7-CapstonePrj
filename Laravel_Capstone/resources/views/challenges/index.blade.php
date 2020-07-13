@extends('top_nav')

@section('main')
<div class="container-fluid" style="padding: 0 100px;">
  <div class="row">
    <div class="col-lg-12">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">

          <?php
            $index = 0; 
          ?>
          @foreach($challenges as $challenge)
          @if($index == 0)
          <div class="carousel-item active">
          @else
          <div class="carousel-item">
          @endif
            <a href="#scroll_content_{{ $index }}"><img src="{{ $imgUrl[$index] }}" class="d-block w-100" alt="..." id="scroll_{{ $index }}"></a>
            <div class="carousel-caption d-none d-md-block" style="top:35%;">
              <h5 style="font-size: 6rem; font-weight: bold; opacity:0.85;">{{ $challenge->challenge_title }}</h5>
              <p style="font-size: 1.5rem;">{{ $challenge->challenge_information }}</p>
            </div>
          </div>
          <?php $index++; ?>
          @endforeach
          
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
  </div>

  <?php
    $scroll_index = 0; 
  ?>
  @foreach($challenges as $challenge)
  <div class="row" style="padding: 0 100px; margin-top: 150px;" id="scroll_content_{{ $scroll_index }}">
    <div class="col-md-12" style="width: 100%; margin: 20px 0;">
      <h2 style="font-size: 50px; font-weight: bold; color:dodgerblue;"># {{ $challenge->challenge_title }}</h2>
      @if($scroll_index == 0)
        @if( $challenge_1 != null && $challenge_1->where('user_id', Auth::user()->id)->last() )
        <button type="button" class="btn btn-warning" style="width: 85px; height: 40px; font-weight: bold;">참여 중</button>
        
        @else
        <a href="/join_challenges/create?id={{ $challenge->id }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">참가하기</a>
        @endif
      
      @elseif($scroll_index == 1)
        @if( $challenge_2 != null && $challenge_2->where('user_id', Auth::user()->user_id)->last() )
        <button type="button" class="btn btn-warning" style="width: 85px; height: 40px; font-weight: bold;">참여 중</button>
        
        @else
        <a href="/join_challenges/create?id={{ $challenge->id }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">참가하기</a>
        @endif
      @endif
    </div>

    <div class="col-md-9" style="margin-top:20px;">
      <div style="width: 100%;">
        <div class="card border-light mb-3" style="max-width: 90%; margin:0 auto; box-shadow: 0px 0px 17px #d5dfe8;">
          <div class="card-body">

            @if($scroll_index == 0)
            <h5 class="card-title" style="line-height: 2rem;">
              바른 자세 습관을 형성할 수 있는 챌린지입니다. <br>
              장기적으로 자세 습관을 바로잡을 수 있어요. <br>
              참가비를 지불하면 챌린지 100% 달성 시 보상금이 주어져요! <br>
              바른자세도 만들고, 보상금도 받는 거 어때요?
            </h5>

            @elseif($scroll_index == 1)
            <h5 class="card-title" style="line-height: 2rem;">
              허리건강을 지키기 위해서는 스트레칭이 필수라는 점, 다들 알고계시죠? <br>
              스트레칭 이제는 까먹지 마시고 주도적으로, 그리고 재밌게! 하세요. <br>
              자투리 시간을 활용해서 틈틈히 게임만 하면 스트레칭까지 완료! <br>
              스트레칭 챌린지에 참가해서 재밌게 스트레칭도 하고 보상금도 받는 거 어때요?
            </h5>

            @endif

          </div>
        </div>
      </div>
      
      <div class="row" style="width: 90%;text-align: center;margin: 30px auto;">
          <div class="card border-danger mb-3" style="max-width: 11.5rem;width: 13rem; display: inline-block; margin: 0; height: 164px; border: 0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-body text-danger">
              <h5 class="card-title" style="font-weight: bold;">현재</h5>
              @if($scroll_index == 0)
              <h2 class="card-title" style="font-weight: bold;">{{ count($challenge_1) }}명</h2>
              @elseif($scroll_index == 1)
              <h2 class="card-title" style="font-weight: bold;">{{ count($challenge_2) }}명</h2>
              @endif
              <h5 class="card-title" style="font-weight: bold;">참여 중입니다.</h5>
            </div>
          </div>

          <div class="card border-success mb-3" style="max-width: 30rem;display: inline-block; margin: 0 20px; border: 0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-body text-success">
              @if($scroll_index == 0)
              <h5 class="card-title" style="font-weight: bold;">매일매일 자동 인증 : "하루 바른자세 60% 이상 유지"</h5>
              <p class="card-text">웨이스탠드 방석을 통해 수집한 착석자세분석 데이터를 바탕으로 매일 자동 인증됩니다. <br>
              하룻동안 앉은 총 착석시간 중의 60% 이상을 바른자세로 앉아야 인증에 성공합니다.</p>
              @elseif($scroll_index == 1)
              <h5 class="card-title" style="font-weight: bold;">게임 플레이 시 자동 인증 : "게임 스코어 1000점 이상"</h5>
              <p class="card-text">웨이스탠드 어플의 스트레칭 게임을 플레이 함으로써 챌린지를 수행합니다. <br>
              매일 게임 최고 스코어가 1000점 이상이 되어야 인증에 성공합니다.</p>
              @endif
            </div>
          </div>

          <div class="card border-primary mb-3" style="max-width: 12rem;width: 13rem;display: inline-block;margin: 0;height: 164px; border: 0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-body text-primary">
              <h5 class="card-title" style="font-weight: bold;">기본 참가비 : </h5>
              <h2 class="card-title" style="font-weight: bold;">{{ $challenge->default_entry_fee }}원</h2>
              <h5 class="card-title" style="font-weight: bold;">무료 참가 가능</h5>
            </div>
          </div>
      </div>

    </div>

    <div class="col-md-3" style="margin-top:20px; padding:0;">
      @if($scroll_index == 0 )
      <img src="\img\background_image.png" alt="" style="width: 400px; height: auto;">
      @elseif($scroll_index == 1 )
      <img src="\img\stretch_challenge.png" alt="" style="width: 400px; height: auto;">
      @endif
    </div>
  </div>
  <?php $scroll_index++; ?>
  @endforeach
</div>


{{-- <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div style="margin: 30px 0;">
              <h1>챌린지에 참여하세요</h1>
            </div>
          </div>
--}}
          
 {{--         @foreach($challenges as $challenge)
          <div class="col-md-6" >
            <div class="card" style="width: 30rem;margin: 0 auto;">
              <img src="{{ $imgUrl[$index] }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $challenge->challenge_title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">기본참가비: {{ $challenge->default_entry_fee }}원</h6>
                <p class="card-text">{{ $challenge->challenge_information }}</p>
                <a href="/join_challenges/create?id={{ $challenge->id }}" class="btn btn-primary">참가하기</a>
              </div>
            </div>
          </div>
          --}}

{{--       <div class="col-md-6">
            <div class="challenge_box">
              <div class="chall_box">
                <h1 class="title" data-chall-id="{{ $challenge->id }}">{{ $challenge->challenge_title }}</h1>
                <!-- <pre class="infor">{{ $challenge->challenge_information }}</pre> -->
                @if(Auth::user() && Auth::user()->admin)
                  <div class="entry_challenge" data-cha-id="{{ $challenge->id }}">
                      <button class="edit_chal">챌린지 수정</button>
                      <button class="del_chal">챌린지 삭제</button>
                  </div>
                @endif
              </div>
            </div>
          </div>
--}}

          <?php $index++; ?>
          {{--  @endforeach --}}

          <div class="col-sm-12">
            <div id="list_bar">
            @if(Auth::user() && Auth::user()->admin)
                <button id="add_chal">챌린지 추가</button>
            @endif
                <button id="challenge_list" data-part-id="{{Auth::user()->id}}">챌린지 현황</button>
            </div>
          </div>

      </div>
    
  </div>
@include('partials.footer')

@stop

{{--    @foreach($challenges as $challenge)

    <div class="challenge_box">
        <div class="chall_box">
            <h1 class="title" data-chall-id="{{ $challenge->id }}">{{ $challenge->challenge_title }}</h1>
            <!-- <pre class="infor">{{ $challenge->challenge_information }}</pre> -->
            @if(Auth::user() && Auth::user()->admin)
                <div class="entry_challenge" data-cha-id="{{ $challenge->id }}">
                    <button class="edit_chal">챌린지 수정</button>
                    <button class="del_chal">챌린지 삭제</button>
                </div>
            @endif
        </div>
    </div>

    @endforeach
    
    <div id="list_bar">
    @if(Auth::user() && Auth::user()->admin)
        <button id="add_chal">챌린지 추가</button>
    @endif
        <button id="challenge_list" data-part-id="{{Auth::user()->id}}">챌린지 현황</button>
    </div>

@include('partials.footer')

@stop --}}

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/challenge.js"></script>
<script src="/js/joinChallenge.js"></script>
<!-- <script>
    $(document).ready(function() {    
        var arr = $('.infor');
        for(var i = 0 ; i < arr.length ; i++) {
            str = arr[i].innerText.split('<br/>').join("\n");
            arr[i].innerText = str;
        }
    });
</script> -->
<link rel="stylesheet" href="/css/challenge.css">