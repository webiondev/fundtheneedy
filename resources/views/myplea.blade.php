@extends('layouts.index')
@section('content')
@for ($i=0; $i<sizeof($data);$i++)
  <div class="container" id="tourpackages-carousel">
      
      <div class="column">
        
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="thumbnail">
            <img src="{{asset('storage/'.$data[$i]['file'])}}" alt="">
            <div class="btn-group btn-group-justified demoPadder" role="group" aria-label="Justified button group">
      <a href="#" data-toggle="tooltip" title="need category" class="btn btn-default" role="button">{{$data[$i]['category']}}</a>
      <a href="#" data-toggle="tooltip" title="need deadline" class="btn btn-default" role="button">{{$data[$i]['deadline']}}</a>
      <a href="#" data-toggle="tooltip" title="can I verify?" class="btn btn-default" role="button">{{$data[$i]['verify']}}</a>
    </div>
              <div class="caption">
                <h4>{{auth()->user()->name}}</h4>
                <p>{{$data[$i]['description']}}</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">know more</a> <a href="#" class="btn btn-default btn-xs" role="button">corroborate</a><a href="#" class="btn btn-default btn-xs" role="button">donate</a><a href="#" class="btn btn-default btn-xs" role="button">add favorite</a></p>

            </div>
          </div>
        </div>

        </div>
        
      </div>
@endfor
@endsection