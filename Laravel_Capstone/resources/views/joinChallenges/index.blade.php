@extends('headers.top_nav')

@section('content')

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/joinChallenge.js"></script>
<link rel="stylesheet" href="/css/joinChallenge.css">

<div class="container">
  <div class="row">
    @forelse($joins as $join)
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        @if($join->challenge_id == 1)
        <img src="\img\ui\웨이스탠드\소스\챌린지페이지\바른 자세 챌린지 사진.png"  class="card-img-top" alt="...">
        @elseif($join->challenge_id == 2)
        <img src="\img\ui\웨이스탠드\소스\챌린지페이지\스트레칭 사진.png"  class="card-img-top" alt="...">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $join->challenge->challenge_title }}</h5>
          <p class="card-text">スタートの日 : {{ $join->join_date }}</p>
          <p class="card-text">参加機関 : {{ $join->join_term }}日</p>
          <p class="card-text">参加費 : {{ $join->entry_fee }}円</p>

          <a href="#" class="btn btn-success">詳細を見る</a>
        </div>
      </div>
    </div>

    @empty
    <h3>参加しているチャレンジがありません。</h3>


    @endforelse
  </div>
</div>

    <table align="center">
        <th id="join_th">참여 번호</th>
        <th id="join_name_th">챌린지 명</th>
        <th id="join_date_th">시작 날짜</th>
        <th id="join_term_th">참여 기간</th>
        <th id="join_fee_th">참여 비용</th>
        @forelse($joins as $join)
            <tr class="join_tr" data-cs-id="{{ $join->id }}">
                <td class="text_1">{{ $join->id }}</td>
                <td class="text_1">{{ $join->challenge->challenge_title }}</div>
                <td class="text_1">{{ $join->join_date }}</div>
                <td class="text_2">{{ $join->join_term }}일</div>
                <td class="text_2">{{ $join->entry_fee }}원</div>
            </tr>
        @empty
            <tr class="join_tr">
                <td colspan="5" class="text_1">지원중인 챌린지가 없습니다.</div>
            </tr>
        @endforelse
    </table>

    <button id="back_cha">챌린지 목록</button>

@include('partials.footer')

@stop

