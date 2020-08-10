<div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-12 main-div-box" style="margin-bottom: 15px;">
          <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary" id="today-btn">今日</button>
              <button type="button" class="btn btn-secondary" id="week-btn">今週</button>
              <button type="button" class="btn btn-secondary" id="month-btn">今月</button>
          </div>
      </div>

      <div id="include">
          @include('mypages2.stats.today', ['data'=> $data])
      </div>

    </div>
</div>
