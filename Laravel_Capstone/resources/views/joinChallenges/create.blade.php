@extends('top_nav')

@section('main')

    <div id="entry_div">
        <h1>{{$challenge->challenge_title}}</h1>

        <form id="entry_form" data-chal-id="{{ $challenge->id }}">
            {!! csrf_field() !!}

            <div>
                <div class="tag"><label for="info">チャレンジ情報</label></div>
                <pre id="info">{{ $challenge->challenge_information }}</pre>
                <input type="hidden" name="default_fee" id="default_fee" value="{{ $challenge->default_entry_fee  }}">
            </div>

            <div class="right_text">
                <label for="user_id">参加者</label>
                <div id="user_id" data-user-id="{{Auth::user()->id}}">{{Auth::user()->user_id}}</div>
            </div>

            <div class="date_bar">
                <div class="form_group {{ $errors->has('join_date') ? 'has-error' : '' }}">
                    <div class="tag date_text"><label for="join_date">スタートの日</label></div>
                    <input type="date" value="0000-00-00" name="join_date" id="join_date"/>
                    {!! $errors->first('join_date', '<span class="form-error">:message</span>') !!}
                </div>

                <div class="form_group {{ $errors->has('join_term') ? 'has-error' : '' }}">
                    <div class="tag date_text"><label for="join_term">終了の日</label></div>
                    <input type="date" value="0000-00-00" name="join_term" id="join_term"/>
                    {!! $errors->first('join_term', '<span class="form-error">:message</span>') !!}
                </div>
            </div>
            
            <div>
                <div class="tag">参加費</div>
                <div class="fee_data">
                    <div class="entry_fee">
                        <input type="radio" name="pay_entry_fee" id="pay_entry_fee">
                        <label for="pay_entry_fee">参加費を支払って参加する</label>
                    </div>
                    <div class="entry_fee">
                        <input type="radio" name="not_pay_entry_fee" id="not_pay_entry_fee">
                        <label for="not_pay_entry_fee">無料で参加する</label>
                    </div>
                        <div id="radio_bar"></div>
                </div>
            </div>

            <div class="apply_challenge">
              <button type="submit" id="apply_challenge">参加する</button>
            </div>
        </form>
    </div>

@include('partials.footer')

@stop

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/joinChallenge.js"></script>
<script>
    $(document).ready(function() {    
        var str = $('#info').html();
        console.log(str);
        str = str.split('&lt;br/&gt;').join("\n");
        $('#info').html(str)
    });
</script>
<link rel="stylesheet" href="/css/joinChallenge.css">