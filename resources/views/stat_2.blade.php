@if(session()->has('warn'))

    <div class="alert alert-info">
        {{ session()->get('warn') }}

    </div>


  @else
   <div id="pop-div" style="width:1000px;border:1px solid black; margin:auto"></div>
      <?= $data->render('GeoChart', 'need_stat', 'pop-div') ?>
   @endif